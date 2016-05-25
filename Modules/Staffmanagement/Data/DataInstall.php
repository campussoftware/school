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
class Modules_Staffmanagement_Data_DataInstall 
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
            "StaffAttendance"=>"StaffAttendance",			"StaffAttendanceDetails"=>"StaffAttendanceDetails",			"StaffDetails"=>"StaffDetails",			"StaffEducation"=>"StaffEducation",			"StaffHistory"=>"StaffHistory",			"StaffInfo"=>"StaffInfo",			"StaffShift"=>"StaffShift",			"StaffSkills"=>"StaffSkills",			"StaffSubjects"=>"StaffSubjects",			
            );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Staffmanagement_Data_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        } 
        
    }
}
