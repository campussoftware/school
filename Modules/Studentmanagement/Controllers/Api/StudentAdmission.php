<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentAdmission
 *
 * @author venkatesh
 */
namespace Modules\Studentmanagement\Controllers\Api;
use \Core\Controllers\Api\IndexController;
class StudentAdmission extends IndexController
{
    //put your code here
    protected $_studentName;
    
    public function getstudentDetailsApiAction() {
        if($this->_currentSelector!="")
        {
        $requestedData=$this->_requestedData;
        $studentId=$this->_currentSelector;
        $studentModel = \CoreClass::getModel("student_history");
        $studentModel->setStudentId($studentId);
        $studentModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));
        $output=$studentModel->getStudentData();
        if(\Core::countArray($output)>1){
            $status="success";
            $message="";
        } else {
            $status="error";
            $message="Please Send Valid Student Id ";
        }
        $result=array("status"=>"success","message"=>$message,"data"=>$output);
        $this->returnJsonResponse($result);
        }
    }
    public function getStudentIdApiAction()
    {
        if($this->_currentSelector!="")
        {
            $db=new \Core\DataBase\ProcessQuery();
            $db->setTable($this->_tableName);
            $db->addField("id");
            $db->addWhere("admission_no='".$this->_currentSelector."'");
            $id=$db->getValue();
            if($id)
            {
                $status="success";
            }
            else
            {
                $status="error";
                $message="Please Send Valid Admission No ";
           }
            echo \Core::convertArrayToJson(array("status"=>$status,"message"=>$message,"id"=>$id));
        }
    }
    public function validateStudentLoginAction()
    {
        $requestedData=$this->_requestedData;
        $db=new \Core\DataBase\ProcessQuery();
        $db->setTable($this->_tableName);
        $db->addField("id");
        $db->addWhere("admission_no='".$requestedData['admissionno']."' and password='".$requestedData['password']."'");
        $db->buildSelect();
        $id=$db->getValue();
        if($id)
        {
            $status="success";
        }
        else
        {
            $status="error";
            $message="Please Send Valid Credentails ";
        }
        echo $output=\Core::convertArrayToJson(array("status"=>$status,"message"=>$message,"id"=>$id));
        \Core::Log($output,"studentlogin.log");
    }
    public function updatePasswordApiAction()
    {
        $data=array();
        $requestedData=$this->_requestedData;
        $studentId=\Core::getValueFromArray($requestedData, "studentId");
        $data['id'] = $studentId;
        $data['password'] = \Core::getValueFromArray($requestedData, "new_password");
        $node = \CoreClass::getController("student_admission");
        $node->setNodeName('student_admission');
        $node->setMethodType("POST");
        $node->setScriptAction();
        $node->setRequestedData($data);
        $result = $node->editAction();
        if (\Core::getValueFromArray($result, "status") == "success") {
                $output['status']='success';
                $output['message']="Password Was Successfully Updated";
            }else{
                $output['status']=error;
                $output['message']="Try Agin";
            }
            $this->returnJsonResponse($output);

    }


}
