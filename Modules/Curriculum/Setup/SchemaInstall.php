<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SchemaInstall
 *
 * @author ramesh
 */
class Modules_Curriculum_Setup_SchemaInstall
{
    //put your code here
    function __construct() 
    {
        $this->setUp();
    }
    protected function setUp()
    {
        $nodesArray=array(
            
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
            $nodeClass="Modules_Curriculum_Setup_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        }               
    }
}
