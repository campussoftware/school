<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Financeconcession
 *
 * @author ramesh
 */
class Modules_Financemanagement_Controllers_Financeconcession extends Core_Controllers_NodeController
{
    public function makeConcessionAction()
    {
        
        $output=array();
        
        $requestedData=$this->_requestedData;
        $admission_no=$requestedData['admission_no'];
        $amountpaid=$requestedData['amount'];  
        $consessionType=$requestedData['fee_concession_type'];
        $referenceNo=$requestedData['reference_no'];        
        $cur_list_academicyear_id=$requestedData['cur_list_academicyear_id'];
        $transactiondate=date('Y-m-d');
        if($amountpaid<=0 || $amountpaid=="")
        {
            $status="error";
            $message="Amount Must Enter Greter than Zero ";            
        }        
        else 
        {
            $db= new Core_DataBase_ProcessQuery();
            $db->setTable("student_history","sh");
            $db->addFieldArray(array("sd.admission_date"=>"admission_date"));
            $db->addFieldArray(array("sd.name"=>"name"));
            $db->addField("sh.*");
            $db->addWhere("sh.cur_list_academicyear_id='".$this->_requestedData['cur_list_academicyear_id']."'");
            $db->addWhere("(sh.student_admission_id='".$this->_requestedData['student_admission_id']."' || sh.admission_no='".$this->_requestedData['admision_no']."')");
            $db->addJoin("student_admission_id","student_admission","sd","sh.student_admission_id=sd.id and fee_list_feegroup_id='TAD'");
            $db->buildSelect();
            $studentDetails=$db->getRow();
            $admission_date=$studentDetails['admission_date'];
            
                
                $db= new Core_DataBase_ProcessQuery();
                $db->setTable("student_feeplan_details","sfd");
                $db->addWhere("(sfd.student_admission_id='".$this->_requestedData['student_admission_id']."' || sfd.admission_no='".$this->_requestedData['admision_no']."')");
                $db->addWhere("sfd.cur_list_academicyear_id='".$this->_requestedData['cur_list_academicyear_id']."'");        
                $db->buildSelect();
                
                $feedetails=$db->getRows("id"); 
                if(Core::countArray($feedetails)>0)
                {
                    $sumresults=Core::sumOfArarrayValues($feedetails,array("amount","concession","paid_amount","balance"));

                    $balance_sum=$sumresults['balance'];
                    if($balance_sum<$amountpaid)
                    {
                        $status="error";
                        $message= "Amount Paid Should Less than or Equal to Balance : ".$balance_sum;            
                    }
                    else 
                    {
                        $count=0;
                        $dbConnection=new Core_DataBase_DbConnect();
                        $dbConnection->begin();
                        try
                        {
                            $helper= CoreClass::getHelper();
                            
                            $transactionNo=$helper->getSequenceCode('TRANSACTION');
                            $TLNode= new Core_Model_NodeSave();
                            $TLNode->setNode("transaction_logs");
                            $TLNode->setData("fee_list_transactiontype_id", "CON");                           
                            $TLNode->setData("transactionno", $transactionNo);                        
                            $TLNode->setData("core_payment_type_id", 'CSH');
                            $TLNode->setData("reference_no", $referenceNo);
                            $TLNode->setData("student_quota_id", $studentDetails['student_quota_id']);
                            $TLNode->setData("cur_list_academicyear_id", $studentDetails['cur_list_academicyear_id']);
                            $TLNode->setData("list_branch_id", $studentDetails['list_branch_id']);
                            $TLNode->setData("cur_branch_orientation_id", $studentDetails['cur_branch_orientation_id']);
                            $TLNode->setData("cur_branch_class_id", $studentDetails['cur_branch_class_id']);
                            $TLNode->setData("cur_branch_class_section_id", $studentDetails['cur_branch_class_section_id']);
                            $TLNode->setData("student_admission_id", $studentDetails['student_admission_id']);
                            $TLNode->setData("admission_no", $studentDetails['admission_no']);
                            $TLNode->setData("name", $studentDetails['name']);
                            $TLNode->setData("fee_concession_type", $consessionType);                            
                            $TLNode->setData("transactiondate", date('Y-m-d'));
                            $TLNode->setData("amount", $amountpaid);
                            $TLNode->setData("transaction_status_id", "APD");
                            $transactionId = $TLNode->save();
                            $tempamount=$amountpaid;                      

                            $k=0;
                            foreach($feedetails as $sfd)
                            {
                                 
                                if($sfd['balance']>0 && $tempamount>0)
                                {
                                    if($tempamount>=$sfd['balance'])
                                    {
                                        $balance="0";
                                        $paidamount=$sfd['concession']+$sfd['balance'];
                                        $tempamount=$tempamount-$sfd['balance'];
                                        $transactionamount=$sfd['balance'];
                                    }
                                    else
                                    {
                                        $balance=$sfd['balance']-$tempamount;
                                        $transactionamount=$tempamount;
                                        $concession=$sfd['concession']+$tempamount;
                                        $tempamount=0;
                                    }                               
                                    $TLDNode = new Core_Model_NodeSave();
                                    $TLDNode->setNode("transaction_logs_details");
                                    $TLDNode->setData("transaction_logs_id", $transactionId);
                                    $TLDNode->setData("fee_list_feetype_id", $sfd['fee_list_feetype_id']);
                                    $TLDNode->setData("fee_list_frequency_id", $sfd['fee_list_frequency_id']);
                                    $TLDNode->setData("amount", $transactionamount);
                                    $TLDNode->setData("reference_id", $sfd['id']);                                
                                    $TLDNode->save();
                                    
                                    $SFDNode = new Core_Model_NodeSave();
                                    $SFDNode->setNode("student_feeplan_details");
                                    $SFDNode->setData("id", $sfd['id']);     
                                    $SFDNode->setData("concession", $concession);
                                    $SFDNode->setData("balance", $balance);                               
                                    $SFDNode->save();
                                   $count++; 
                                }

                            }
                            if($count==1)
                            {
                                
                                $helper->updateSequenceCode('TRANSACTION');
                                $dbConnection->commit();
                                $status="success";
                                $message="Concession Done Successfully";
                            }
                            else 
                            {
                                $dbConnection->rollback();
                                $status="error";
                                $message=" Please check Student Fee Details";
                            }

                        }
                        catch (Exception $ex)
                        {
                            $dbConnection->rollback();
                            Core::Log(__METHOD__."  ".$ex->getMessage(),"feeconcession.log");
                        }

                    }
                }
                else
                {
                    $status="error";
                    $message=" Please check Student Fee Details";
                }            
                
        }   
        $output['status']=$status;
        $output['message']=$message;
        $output['transactionId']=$transactionId;
        echo Core::convertArrayToJson($output);
        return true;
    }
}
