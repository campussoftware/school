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
namespace Modules\Attendencereport\Controllers\Api;
use \Core\Controllers\Api\IndexController;
class AcdStudentAttendanceDetails extends IndexController
{
    //put your code here
    public function getAttendenceDetailsApiAction()
    {
        $requestedData = $this->getRequestedData();        
        $attendenceModel = \CoreClass::getModel("acd_student_attendance_details");
        $attendenceModel->setStudentId(\Core::getValueFromArray($requestedData, "studentId"));
        $attendenceModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));
        $attendenceModel->setFirstDay(\Core::getValueFromArray($requestedData, "firtstday"));
        $attendenceModel->setLastDay(\Core::getValueFromArray($requestedData, "lastDay"));
        $output=$attendenceModel->getstudentAttendanceData();
        $this->returnJsonResponse($output);
    }


}
