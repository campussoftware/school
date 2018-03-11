<?php
    error_reporting(E_ERROR);
    include_once("CurlCall.php");
    define("SESSIONPATH", 'teacherportal');
    define("APIURL", "http://192.168.0.150/school/api/");
    function getTeacherProfileDetails($requestedData)
    {
        $output=array();
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."staff_staff_deatils/validatestafflogin");
        $curlCall->setPostData("staffid",$requestedData['staffid']);
        $curlCall->setPostData("password",$requestedData['password']);
        $curlCall->setReturnTransfer(true);
        $teacherData=$curlCall->callCurl();
        $teacherDataArray=convertJsonToArray($teacherData);
        $data=convertJsonToArray($teacherDataArray['data']);
        if($teacherDataArray['status']=="success")
        {
                session_start();
                if($teacherDataArray['message']=="loginsuccess")
                {
                    $_SESSION[SESSIONPATH]['name']=$data['name'];
                    $_SESSION[SESSIONPATH]['id']=$data['id'];
                    $_SESSION[SESSIONPATH]['staff_id']=$data['staff_id'];
                    $_SESSION[SESSIONPATH]['image']=$data['image'];
                }
                session_write_close();
        }

        $output['status']=$teacherDataArray['status'];
        $output['message']=$teacherDataArray['message'];
        $output['image']=$data['image'];
        returnResponse($output);
    }
    function getteacherFullDetails()
    {
        $staffId=$_SESSION[SESSIONPATH]['id'];
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."staff_staff_deatils/getstaffDetails");
        $curlCall->setPostData("staff_id", $staffId);
        $curlCall->setReturnTransfer(true);
        $staffData=$curlCall->callCurl();       
        $staffDataArray=convertJsonToArray($staffData);
        return $staffDataArray;
    }
    function getAllLibraryBookDetails()
    {
       
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."lib_library_assignment/allLibraryBookList/");        
        $curlCall->setReturnTransfer(true);
        $librarybooksData=$curlCall->callCurl();
        $bookListData=$libarybooksDataArray=convertJsonToArray($librarybooksData);
        return $bookListData;
    }
    function getissuedBookDetails()
    {
        $studentId=$_SESSION[SESSIONPATH]['id'];
        $admissionNo=$_SESSION[SESSIONPATH]['admission_no'];
        $academicyear=$_SESSION[SESSIONPATH]['academicyear'];
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."lib_book_assignment/getstudntsIssgnedBooks/");
        $curlCall->setPostData("academicyear", $academicyear);
        $curlCall->setPostData("studentId", $studentId);
        $curlCall->setReturnTransfer(true);
        $booksIssuedStudentsData=$curlCall->callCurl();
        $bookListData=convertJsonToArray($booksIssuedStudentsData);
        return $bookListData;
    }
    function getStudentTransportData()
    {
        $studentId=$_SESSION[SESSIONPATH]['id'];
        $admissionNo=$_SESSION[SESSIONPATH]['admission_no'];
        $academicyear=$_SESSION[SESSIONPATH]['academicyear_code'];
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."tr_student_route_details/getstudentRouteData/");
        $curlCall->setPostData("academicyear", $academicyear);
        $curlCall->setPostData("studentId", $studentId);
        $curlCall->setReturnTransfer(true);        
        $studentRouteData=$curlCall->callCurl();        
        $routeData=convertJsonToArray($studentRouteData);        
        return $routeData;
    }
    function getExamSheduleDetails()
    {
        $studentId=$_SESSION[SESSIONPATH]['id'];
        $academicyear=$_SESSION[SESSIONPATH]['academicyear_code'];
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."acd_examination_schedule/getexamSheduleDetails/");
        $curlCall->setPostData("academicyear", $academicyear);
        $curlCall->setPostData("studentId", $studentId);
        $curlCall->setReturnTransfer(true);  
        $examSheduleData=$curlCall->callCurl();   
        $examData=convertJsonToArray($examSheduleData);
        return $examData;
    } 
    function getStudentMarksDetails()
    {
        $studentId=$_SESSION[SESSIONPATH]['id'];
        $admissionNo=$_SESSION[SESSIONPATH]['admission_no'];
        $academicyear=$_SESSION[SESSIONPATH]['academicyear_code'];        
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."acd_studentmarks_details/getstudentMarks/");
        $curlCall->setPostData("admissionno", $admissionNo);
        $curlCall->setPostData("academicyear", $academicyear);        
        $curlCall->setReturnTransfer(true);
        $studentMarksData=$curlCall->callCurl();   
        $marksData=convertJsonToArray($studentMarksData);
        return $marksData;
    }
     function getAllLeaveRequestDetails()
    {
        $studentId=$_SESSION[SESSIONPATH]['id'];
        $admissionNo=$_SESSION[SESSIONPATH]['admission_no'];
        $academicyear=$_SESSION[SESSIONPATH]['academicyear_code'];        
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."lm_leave_request/leaveRequestList/");
        $curlCall->setPostData("admissionno", $admissionNo);
        $curlCall->setPostData("academicyear", $academicyear);        
        $curlCall->setReturnTransfer(true);        
        $studentleaveRequest=$curlCall->callCurl();   
        $leaveRequestData=convertJsonToArray($studentleaveRequest);
        return $leaveRequestData;
    }
    function getNotificationDetails()
    {
        $studentId=$_SESSION[SESSIONPATH]['id'];
        $admissionNo=$_SESSION[SESSIONPATH]['admission_no'];
        $academicyear=$_SESSION[SESSIONPATH]['academicyear_code'];        
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."cms_notification/getNotificationsList/");
        $curlCall->setPostData("studentId", $studentId);
        $curlCall->setPostData("academicyear", $academicyear);        
        $curlCall->setReturnTransfer(true);  
        $notificationList=$curlCall->callCurl();   
        $notificationData=convertJsonToArray($notificationList);
        return $notificationData;
    }
    function getStudentAttendenceDetails()
    {
        $studentId=$_SESSION[SESSIONPATH]['id'];
        $admissionNo=$_SESSION[SESSIONPATH]['admission_no'];
        $academicyear=$_SESSION[SESSIONPATH]['academicyear_code']; 
        $first_day = date('Y-m-01'); 
        $last_day  = date('Y-m-t');
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."acd_student_attendance_details/getAttendenceDetails/");
        $curlCall->setPostData("studentId", $studentId);
        $curlCall->setPostData("academicyear", $academicyear); 
        $curlCall->setPostData("firtstday", $first_day);
        $curlCall->setPostData("lastDay", $last_day);
        $curlCall->setReturnTransfer(true);   
        $attendenceList=$curlCall->callCurl();   
        $attendenceData=convertJsonToArray($attendenceList);
        return $attendenceData;
    }    
    function getTeacherInfoDetails($teacherId)
    {
        $studentId=$_SESSION[SESSIONPATH]['id'];
        $academicyear=$_SESSION[SESSIONPATH]['academicyear'];
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."staff_staff_deatils/getStaffData/");
        $curlCall->setPostData("teacherId", $teacherId);
        $curlCall->setReturnTransfer(true); 
        tecaherCheck($teacherId);
        $teacherData=$curlCall->callCurl();  
        $teacherDataArray=convertJsonToArray($teacherData);
        return $teacherDataArray;
    }
    
    function tecaherCheck($teacherId){
        $teacherData=getTeacherListDetails();
        $data = [];
        foreach ($teacherData as $key => $value) {
           $staffId=$value['staffId'];
           if($teacherId==$staffId){
               $data = $value;
             }
        }
    }

    function returnResponse($output)
    {
        echo  json_encode($output);
    }
    function convertJsonToArray($jsonData)
    {
        return json_decode($jsonData,1);
    }
    function getStudentUpdateinfo($requestedData)
    {
        $output=array();
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."student_update_info/infoUpdate");
        $curlCall->setPostData("studentId",$requestedData['studentId']);
        $curlCall->setPostData("firstname",$requestedData['firstname']);
        $curlCall->setPostData("lastname",$requestedData['lastname']);
        $curlCall->setPostData("email",$requestedData['email']);
        $curlCall->setPostData("phone",$requestedData['phone']);
        $curlCall->setReturnTransfer(true);       
        $studentUpdateData=$curlCall->callCurl();
        $studentDataArray=convertJsonToArray($studentUpdateData);
        $data=convertJsonToArray($studentDataArray['data']);
        $output['status']=$studentDataArray['status'];
        $output['message']=$studentDataArray['message'];
        $output['image']=$data['image'];
        returnResponse($output);
    }
    function getparentUpdateinfo($requestedData)
    {
        $output=array();
        $curlCall=new Core_CurlCall();        
        $curlCall->setUrl(APIURL."student_update_info/parentInfoUpdate");
        $curlCall->setPostData("studentId",$requestedData['studentId']);
        $curlCall->setPostData("father_name",$requestedData['father_name']);
        $curlCall->setPostData("mother_name",$requestedData['mother_name']);
        $curlCall->setPostData("pre_addess",$requestedData['pre_addess']);
        $curlCall->setReturnTransfer(true);        
        $parentUpdateData=$curlCall->callCurl();
        $studentDataArray=convertJsonToArray($parentUpdateData);
        $data=convertJsonToArray($studentDataArray['data']);
        $output['status']=$studentDataArray['status'];
        $output['message']=$studentDataArray['message'];
        $output['image']=$data['image'];
        returnResponse($output);
    }
    function getpasswordUpdateinfo($requestedData)
    {
        $output=array();
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."student_admission/updatePassword");
        $curlCall->setPostData("studentId",$requestedData['studentId']);
        $curlCall->setPostData("cur_password",$requestedData['cur_password']);
        $curlCall->setPostData("new_password",$requestedData['new_password']);
        $curlCall->setPostData("retype_password",$requestedData['retype_password']);
        $curlCall->setReturnTransfer(true);       
        $passwordUpdateData=$curlCall->callCurl();
        $studentDataArray=convertJsonToArray($passwordUpdateData);
        $data=convertJsonToArray($studentDataArray['data']);
        $output['status']=$studentDataArray['status'];
        $output['message']=$studentDataArray['message'];
        returnResponse($output);
    }
    function getleaveRequestDetails($requestedData)
    {
        $output=array();
        $curlCall=new Core_CurlCall();        
        $curlCall->setUrl(APIURL."lm_leave_request/leaveRequestDetails");
        $curlCall->setPostData("studentId",$requestedData['studentId']);
        $curlCall->setPostData("acd_year",$requestedData['acd_year']);
        $curlCall->setPostData("req_subject",$requestedData['req_subject']);
        $curlCall->setPostData("req_message",$requestedData['req_message']);
        $curlCall->setPostData("req_Leave_date",$requestedData['req_Leave_date']);
        $curlCall->setPostData("req_end_date",$requestedData['req_end_date']);
        $curlCall->setReturnTransfer(true);        
        $leaveRequestData=$curlCall->callCurl();       
        $leaveRequestArray=convertJsonToArray($leaveRequestData);
        $data=convertJsonToArray($studentDataArray['data']);
        $output['status']=$leaveRequestArray['status'];
        $output['message']=$leaveRequestArray['message'];        
        returnResponse($output);
    }
    function getexamDateDetails($requestedData)
    {        
        $output=array();
        $curlCall=new Core_CurlCall();
        $curlCall->setUrl(APIURL."acd_examination_schedule_details/getexamScheduleDates");
        $curlCall->setPostData("scheduleId",$requestedData['scheduleId']);       
        $curlCall->setReturnTransfer(true);       
        $examScheduleData=$curlCall->callCurl();        
        $scheduleDataArray=convertJsonToArray($examScheduleData);        
        $data=convertJsonToArray($scheduleDataArray['data']);
        $output['status']=$scheduleDataArray['status'];
        $output['message']=$scheduleDataArray['message'];
        $output['data']=$scheduleDataArray['data'];        
        returnResponse($output);
    }
    function getnotificationData($requestedData)
    {        
        $output=array();
        $curlCall=new Core_CurlCall();       
        $curlCall->setUrl(APIURL."cms_notification/getNotificationDetails");
        $curlCall->setPostData("noticeId",$requestedData['noticeId']);       
        $curlCall->setReturnTransfer(true);  
        $notificationData=$curlCall->callCurl();   
        $notificationDataArray=convertJsonToArray($notificationData); 
        $data=convertJsonToArray($notificationDataArray['data']);       
        $output['status']=$notificationDataArray['status'];
        $output['message']=$notificationDataArray['message'];
        $output['data']=$notificationDataArray['data'];
        returnResponse($output);
    }
    
?>