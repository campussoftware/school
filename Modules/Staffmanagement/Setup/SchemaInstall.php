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
class Modules_Staffmanagement_Setup_SchemaInstall
{
    //put your code here
    function __construct() 
    {
        $this->setUp();
    }
    protected function setUp()
    {
        $nodesArray=array(
            "StaffAttendance"=>"StaffAttendance",			"StaffAttendanceDetails"=>"StaffAttendanceDetails",			"StaffDetails"=>"StaffDetails",			"StaffEducation"=>"StaffEducation",			"StaffHistory"=>"StaffHistory",			"StaffInfo"=>"StaffInfo",			"StaffShift"=>"StaffShift",			"StaffSkills"=>"StaffSkills",			"StaffSubjects"=>"StaffSubjects",
            
        );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Staffmanagement_Setup_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        }               
    }
}
