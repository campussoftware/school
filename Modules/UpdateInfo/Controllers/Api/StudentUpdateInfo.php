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
namespace Modules\UpdateInfo\Controllers\Api;
use \Core\Controllers\Api\IndexController;
class StudentUpdateInfo extends IndexController
{
    //put your code here
    public function infoUpdateApiAction()
    {
        $data=array();
        $requestedData=$this->_requestedData;       
        $studentId=\Core::getValueFromArray($requestedData, "studentId");
        if(\Core::countArray($requestedData)>0){
        $nodeModel = \CoreClass::getModel("student_admission");
        $nodeModel->setStudentId($studentId);
        $output=$nodeModel->profileDetails();
        }
        $data['admission_no'] = \Core::getValueFromArray($output, "admission_no");
        $data['first_name'] = \Core::getValueFromArray($requestedData, "firstname");
        $data['last_name'] = \Core::getValueFromArray($requestedData, "lastname");
        $data['email_id'] = \Core::getValueFromArray($requestedData, "email");
        $data['primary_phno'] =\Core::getValueFromArray($requestedData, "phone");
        $node = \CoreClass::getController("student_update_info");
        $node->setNodeName('student_update_info');
        $node->setMethodType("POST");
        $node->setScriptAction();
        $node->setRequestedData($data);
        $result = $node->addAction();
        if (\Core::getValueFromArray($result, "status") == "success") {
                $output['status']='success';
                $output['message']="Details Will Be Updated After Verification";
            }else{
                $output['status']=error;
                $output['message']="Try Agin";
            }
            $this->returnJsonResponse($output);

    }
    public function parentInfoUpdateApiAction()
    {
        $data=array();
        $requestedData=$this->_requestedData;
        $studentId=\Core::getValueFromArray($requestedData, "studentId");
        if(\Core::countArray($requestedData)>0){
        $nodeModel = \CoreClass::getModel("student_admission");
        $nodeModel->setStudentId($studentId);
        $output=$nodeModel->profileDetails();
        }
        $data['admission_no'] = \Core::getValueFromArray($output, "admission_no");
        $data['father_name'] = \Core::getValueFromArray($requestedData, "father_name");
        $data['mother_name'] = \Core::getValueFromArray($requestedData, "mother_name");
        $data['present_address'] = \Core::getValueFromArray($requestedData, "pre_addess");
        $node = \CoreClass::getController("student_update_info");
        $node->setNodeName('student_update_info');
        $node->setMethodType("POST");
        $node->setScriptAction();
        $node->setRequestedData($data);
        $result = $node->addAction();
        if (\Core::getValueFromArray($result, "status") == "success") {
                $output['status']='success';
                $output['message']="Details Will Be Updated After Verification";
            }else{
                $output['status']=error;
                $output['message']="Try Agin";
            }
            $this->returnJsonResponse($output);

    }
    




}
