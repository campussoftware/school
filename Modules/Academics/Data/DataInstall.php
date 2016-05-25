<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataInstall
 *
 * @author ramesh
 */
class Modules_Academics_Data_DataInstall 
{
    //put your code here
    function __construct() 
    {
        $this->setDataUp();
    }
    protected function setDataUp()
    {
        $nodesArray=array(
            "ModuleCreate"=>"ModuleCreate",
            "AcdExamGroup"=>"AcdExamGroup",
            "AcdExamName"=>"AcdExamName",
            "AcdExaminationMarks"=>"AcdExaminationMarks",
            "AcdExaminationSchedule"=>"AcdExaminationSchedule",
            "AcdExaminationScheduleDetails"=>"AcdExaminationScheduleDetails",
            "AcdFinalMarks"=>"AcdFinalMarks",
            "AcdGradeMaster"=>"AcdGradeMaster",
            "AcdGradeMethod"=>"AcdGradeMethod",
            "AcdGradeMethodDetails"=>"AcdGradeMethodDetails",
            "AcdGradeType"=>"AcdGradeType",
            "AcdLinkExam"=>"AcdLinkExam",
            "AcdModeofexam"=>"AcdModeofexam",
            "AcdOverallGrade"=>"AcdOverallGrade",
            "AcdStudentmarksDetails"=>"AcdStudentmarksDetails",
            "AcdSubgroupexams"=>"AcdSubgroupexams",
            "ListBranch"=>"ListBranch",
            "Acdprogressreport"=>"Acdprogressreport",
            
            );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Academics_Data_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        } 
        
    }
}
