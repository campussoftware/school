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
namespace Modules\Transportmanagement\Controllers\Api;
use \Core\Controllers\Api\IndexController;
class TrStudentRouteDetails extends IndexController
{
    //put your code here
    public function getstudentRouteDataApiAction()
    {
        $requestedData = $this->getRequestedData();        
        $transportModel = \CoreClass::getModel("tr_student_route_details");
        $transportModel->setStudentId(\Core::getValueFromArray($requestedData, "studentId"));
        $transportModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));
        $output=$transportModel->studentTransportDetails();
        $this->returnJsonResponse($output);
    }




}
