<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of FeeDetails
 *
 * @author venkatesh
 */
namespace Modules\Studentmanagement\Controllers\Api\StudentAdmission;
use \Modules\Studentmanagement\Controllers\Api\StudentAdmission;
class FeeDetails extends StudentAdmission
{
    //put your code here
    public function feeDetailsApiAction()
    {    
        $requestedData=$this->getRequestedData();
        $output=array();
        $data=array();
        $status="success";
        $message="";   
        
        $studentId=$this->_currentSelector;
        $feeModel = \CoreClass::getModel("student_feeplan_details");
        $feeModel->setStudentId($studentId);
        $feeModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));
        $result=$feeModel->getStudentFeeData();
        $output['status']=$status;
        $output['data']=json_encode($result);
        $output['message']=$message;        
        return $this->returnJsonResponse($output);        
    }
}
