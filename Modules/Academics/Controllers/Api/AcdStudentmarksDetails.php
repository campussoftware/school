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
class AcdStudentmarksDetails extends IndexController
{
    //put your code here
    public function getstudentMarksApiAction()
    {
        $requestedData = $this->getRequestedData();          
        $examsheduleModel = \CoreClass::getModel("acd_studentmarks_details");
        $examsheduleModel->setAdmissionNo(\Core::getValueFromArray($requestedData, "admissionno"));
        $examsheduleModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));
        $output=$examsheduleModel->examMarksData();
        $this->returnJsonResponse($output);
    }




}
