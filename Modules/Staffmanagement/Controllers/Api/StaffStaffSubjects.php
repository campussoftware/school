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

class StaffStaffSubjects extends IndexController {

    //put your code here
    public function getStaffListApiAction() {       
        $requestedData = $this->getRequestedData();
        $output = array();
        $data = array();
        $status = "success";
        $message = "";
        
       
        $studentHistoryModel = \CoreClass::getModel("student_history");
        $studentHistoryModel->setAcademicyear(\Core::getValueFromArray($requestedData, "academicyear"));
        $studentHistoryModel->setStudentId($this->_currentSelector);
        $studentInfo=$studentHistoryModel->getStudentinfo(); 
        if (\Core::countArray($studentInfo) > 0) {
              $subjectModel = \CoreClass::getModel("staff_staff_subjects");
              $subjectModel->setClassId(\Core::getValueFromArray($studentInfo, "cur_branch_class_id"));
              $subjectModel->setSectionId(\Core::getValueFromArray($studentInfo, "cur_branch_class_section_id"));
              $staffList=$subjectModel->staffSubjectDetails();
            $output['status']=$status;
            $output['data']=json_encode($staffList);
            $output['message']=$message;
            return $this->returnJsonResponse($output);
        }
    }
   
}
