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
class Modules_Curriculum_Data_DataInstall 
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
            "CurAcademicSubject"=>"CurAcademicSubject",
            "CurBranchClass"=>"CurBranchClass",
            "CurBranchClassSection"=>"CurBranchClassSection",
            "CurBranchOrientation"=>"CurBranchOrientation",
            "CurClassSubject"=>"CurClassSubject",
            "CurListAcademicyear"=>"CurListAcademicyear",
            "CurListAttendancefrequency"=>"CurListAttendancefrequency",
	    "CurListClass"=>"CurListClass",
            "CurListOrientation"=>"CurListOrientation",
            "CurOrientationLevel"=>"CurOrientationLevel",
            "CurSubjectType"=>"CurSubjectType",
            );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Curriculum_Data_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        } 
        
    }
}
