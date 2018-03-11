<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidateAdmission
 *
 * @author venkatesh
 */
namespace Modules\Studentmanagement\Controllers\Api\StudentAdmission;
use \Modules\Studentmanagement\Controllers\Api\StudentAdmission;
class ValidateAdmission extends StudentAdmission
{
    //put your code here
    public function validateAdmissionApiAction()
    {
         
            $requestedData=$this->_requestedData;              
            $result=$this->loadByField($requestedData['admissionno'],"admission_no");
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
                    $data['name']=$result['first_name']." ".$result['last_name'];
                    $data['id']=$result['id'];
                    $data['admission_no']=$result['admission_no'];
                    $data['academicyearcode']=$result['cur_list_academicyear_idpk'];
                    $data['academicyear']=$result['cur_list_academicyear_id'];
                    $message="loginsuccess";
                }
            }
            $output['status']=$status;
            $output['data']=json_encode($data);
            $output['message']=$message;
            $this->returnJsonResponse($output);
    }
}
