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
namespace Modules\Contentmanagementsystem\Controllers\Api;
use \Core\Controllers\Api\IndexController;
class CmsNotification extends IndexController
{
    //put your code here
    public function getNotificationsListApiAction()
    {

        $requestedData = $this->getRequestedData();       
        $notificationModel = \CoreClass::getModel("cms_notification");
        $notificationModel->setStudentId(\Core::getValueFromArray($requestedData, "studentId"));
        $notificationModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));
        $output=$notificationModel->notificationsList();
        $this->returnJsonResponse($output);
    }
    public function getNotificationDetailsApiAction()
    {
        $requestedData = $this->getRequestedData();  
        $notificationModel = \CoreClass::getModel("cms_notification");
        $notificationModel->setNoticeId(\Core::getValueFromArray($requestedData, "noticeId"));        
        $output=$notificationModel->notificationData();
        if(\Core::countArray($output)>0){
             $data['status']='success';
             $data['message']="Notification Data";
             $data['data'] = $output;
            }else{
                $data['status']="error";
                $data['message']="Notification Not Found";
                $data['data'] = "";
            }
         $this->returnJsonResponse($data);
    }



}
