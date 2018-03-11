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
namespace Modules\Academics\Controllers\Api;
use \Core\Controllers\Api\IndexController;
class AcdExaminationSchedule extends IndexController
{
    //put your code here
    public function getexamSheduleDetailsApiAction()
    {
        $requestedData = $this->getRequestedData();  
        $examsheduleModel = \CoreClass::getModel("acd_examination_schedule");
        $examsheduleModel->setStudentId(\Core::getValueFromArray($requestedData, "studentId"));
        $examsheduleModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));
        $output=$examsheduleModel->examSheduleData();
        $this->returnJsonResponse($output);
    }




}
