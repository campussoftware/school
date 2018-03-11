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
namespace Modules\Leavemanagement\Controllers\Api;
use \Core\Controllers\Api\IndexController;
class LmLeaveRequest extends IndexController
{
    //put your code here    
    public function leaveRequestDetailsApiAction()
    {        
        $data=array();
        $requestedData=$this->_requestedData;
        $nodeModel = \CoreClass::getModel("lm_leave_request");
        $nodeModel->setStudentId(\Core::getValueFromArray($requestedData, "studentId"));
        $nodeModel->setAcademicyear(\Core::getValueFromArray($requestedData, "acd_year"));
        $nodeModel->setSubject(\Core::getValueFromArray($requestedData, "req_subject"));
        $nodeModel->setMessage(\Core::getValueFromArray($requestedData, "req_message"));
        $nodeModel->setLeaveDate(\Core::getValueFromArray($requestedData, "req_Leave_date"));
        $nodeModel->setEndDate(\Core::getValueFromArray($requestedData, "req_end_date"));
        $result=$nodeModel->leaveRequestData();        
        $this->returnJsonResponse($result);

    }
    public function leaveRequestListApiAction()
    {        
        $data=array();
        $requestedData=$this->_requestedData;        
        $nodeModel = \CoreClass::getModel("lm_leave_request");
        $nodeModel->setAdmissionNo(\Core::getValueFromArray($requestedData, "admissionno"));
        $nodeModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));        
        $result=$nodeModel->leaveRequestList();        
        $this->returnJsonResponse($result);

    }

   
}
