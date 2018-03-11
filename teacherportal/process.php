<?php
    include_once("inc/functions.php");
    $node=$_REQUEST['node'];
    switch($node)
    {
        case "validateteacher":
            $teacherDetails= getTeacherProfileDetails($_REQUEST);
            $output=json_decode($teacherDetails,1);
            echo $output;
            break;
        case "studentInfo":
            $studentUpdateInfo=getStudentUpdateinfo($_REQUEST);
            $output=json_decode($studentUpdateInfo,1);
            break;
        case "parentInfo":
            $parentUpdateInfo=getparentUpdateinfo($_REQUEST);
            $output=json_decode($parentUpdateInfo,1);
            break;
        case "passwordUpdate":
            $passwordUpdate=getpasswordUpdateinfo($_REQUEST);
            $output=json_decode($passwordUpdate,1);
            break;
        case "examScheduleData":
            $examSheduleDates=getexamDateDetails($_REQUEST);
            $output=json_decode($examSheduleDates,1);            
            break;
        case "leaveRequest":
            $leaveRequest=getleaveRequestDetails($_REQUEST);
            $output=json_decode($leaveRequest,1);            
            break;
        case "notificationData":
            $notificationDetails=getnotificationData($_REQUEST);            
            $output=json_decode($notificationDetails,1);            
            break;
    }
?>