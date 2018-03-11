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
class AcdExaminationScheduleDetails extends IndexController
{
    //put your code here
    public function getexamScheduleDatesApiAction()
    {
        $data=array();
        $requestedData = $this->getRequestedData();        
        $examsheduleModel = \CoreClass::getModel("acd_examination_schedule_details");
        $examsheduleModel->setScheduleId(\Core::getValueFromArray($requestedData, "scheduleId"));
        $output=$examsheduleModel->examSheduleDetails();
        if(\Core::countArray($output)>0){
             $data['status']='success';
             $data['message']="Exam Schedule Data";
             $data['data'] = $output;
            }else{
                $data['status']="error";
                $data['message']="Exam Schedule Not Found";
                $data['data'] = "";
            }
            $this->returnJsonResponse($data);
    }
}
