<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreBackupType
 *
 * @author ramesh
 */
class Modules_Financemanagement_Setup_TransactionLogs
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("transaction_logs");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Transaction Logs");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Transaction Log Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"15",
                "auto_increment"=>1,           
            ));
            $setup->addColumnName(array(
                "name"=>"transactionno",
                "displayValue"=>"Transaction No",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"fee_list_transactiontype_id",
                "displayValue"=>"Fee List Transaction Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"feereceiptno",
                "displayValue"=>"Fee Receipt No",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"core_payment_type_id",
                "displayValue"=>"Payment Type Id",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
            ));
            $setup->addColumnName(array(
                "name"=>"reference_no",
                "displayValue"=>"Reference No",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
            ));
            $setup->addColumnName(array(
                "name"=>"student_quota_id",
                "displayValue"=>"Student Quota Id",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
            ));
            $setup->addColumnName(array(
                "name"=>"cur_list_academicyear_id",
                "displayValue"=>"List AcademicYear Id",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
            ));
            
            $setup->addColumnName(array(
                "name"=>"list_branch_id",
                "displayValue"=>"Branch Id",            
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"13"
            ));
            
            $setup->addColumnName(array(
                "name"=>"cur_branch_orientation_id",
                "displayValue"=>"Branch Orientation Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            
            $setup->addColumnName(array(
                "name"=>"cur_branch_class_id",
                "displayValue"=>"Branch Class Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            
            $setup->addColumnName(array(
                "name"=>"cur_branch_class_section_id",
                "displayValue"=>"Branch Class Section Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            
            $setup->addColumnName(array(
                "name"=>"student_admission_id",
                "displayValue"=>"Student Admission Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"admission_no",
                "displayValue"=>"Admission No",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Name",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
            ));
            $setup->addColumnName(array(
                "name"=>"transactiondate",
                "displayValue"=>"Transaction Date",            
                "default"=>NULL,
                "type"=>"date"
            ));
            $setup->addColumnName(array(
                "name"=>"amount",
                "displayValue"=>"Amount",            
                "default"=>NULL,
                "type"=>"decimal",
                "size"=>"17,2"
            ));
            $setup->addColumnName(array(
                "name"=>"transaction_reference",
                "displayValue"=>"Transaction Reference",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"transaction_status_id",
                "displayValue"=>"Transaction Status Id",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
            ));
            $setup->addColumnName(array(
                "name"=>"fee_concession_type",
                "displayValue"=>"Fee Concession Type",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"createdby",
                "displayValue"=>"Created Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"createdat",
                "displayValue"=>"Created Datetime",            
                "default"=>NULL,
                "type"=>"datetime"
            ));
            $setup->addColumnName(array(
                "name"=>"updatedby",
                "displayValue"=>"Updated Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"updatedat",
                "displayValue"=>"Updated Datetime",            
                "default"=>NULL,
                "type"=>"datetime"
            ));
             $setup->create();
        }
    }
}