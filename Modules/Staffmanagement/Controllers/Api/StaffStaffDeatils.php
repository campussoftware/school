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

namespace Modules\Staffmanagement\Controllers\Api;

use \Core\Controllers\Api\IndexController;

class StaffStaffDeatils extends IndexController {

    //put your code here
    public function getStaffDataApiAction() {
        $requestedData = $this->getRequestedData();
        $staffModel = \CoreClass::getModel("staff_staff_deatils");
        $staffModel->setTeacherId(\Core::getValueFromArray($requestedData, "teacherId"));
        $output=$staffModel->staffDetails();
        $this->returnJsonResponse($output);
    }
    
    public function validatestaffloginApiAction()
    {
         
            $requestedData=$this->_requestedData;  
            $result=$this->loadByField($requestedData['staffid'],"staff_id");            
            $output=array();
            $data=array();
            $status="error";
            $message="";            
            if(\Core::countArray($result)>0)
            {
                $status="success";
                 if($result['image']=="" || $result['image']== "|||||"){
                     $data['image']=$this->_websiteRootHostUrl."portal/images/login_default_img.png";
                 }else{
                 $data['image']=$result['image']?$this->getUploadedFilePath('image')."crop/".$result['image']:"";
                 }
                if($requestedData['password']!="" && $result['password']==$requestedData['password'])
                {
                    $data['name']=$result['first_name']." ". $result['middle_name']." ".$result['last_name'];
                    $data['id']=$result['id'];
                    $data['staff_id']=$result['staff_id'];
                    $message="loginsuccess";
                }
            }
            $output['status']=$status;
            $output['data']=json_encode($data);
            $output['message']=$message;
            $this->returnJsonResponse($output);
    }
    public function getstaffDetailsApiAction() {
       
        $requestedData = $this->getRequestedData();
        $staffModel = \CoreClass::getModel("staff_staff_deatils");
        $staffModel->setTeacherId(\Core::getValueFromArray($requestedData, "staff_id"));
        $output=$staffModel->staffDetails();
        $this->returnJsonResponse($output);
    }

}
