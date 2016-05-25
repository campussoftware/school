<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreBackupType
 *
 * @author ramesh
 */
class Modules_Academics_Setup_AcdStudentAttendance
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("acd_student_attendance");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Acd Student Attendance");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"User Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11",
                "auto_increment"=>1,           
            ));
            $setup->addColumnName(array(
                "name"=>"cur_list_academicyear_id",
                "displayValue"=>"List Academic Year Id",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"255"         
            ));
            $setup->addColumnName(array(
                "name"=>"list_branch_id",
                "displayValue"=>"List Branch Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"cur_branch_orientation_id",
                "displayValue"=>"Branch Orientation Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"cur_branch_class_id",
                "displayValue"=>"Branch Class Id",            
                "default"=>Null,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"cur_branch_class_section_id",
                "displayValue"=>"Branch Class Section Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"date",
                "displayValue"=>"Date",            
                "default"=>NULL,                
                "type"=>"date"        
            ));
            $setup->addColumnName(array(
                "name"=>"is_final",
                "displayValue"=>"Is Final",            
                "default"=>NULL,                
                "type"=>"tinyint",
                "size"=>"2"          
            ));
            $setup->addColumnName(array(
                "name"=>"createdby",
                "displayValue"=>"Created Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"createdat",
                "displayValue"=>"Created Datetime",            
                "default"=>NULL,
                "type"=>"datetime"
            ));
            $setup->addColumnName(array(
                "name"=>"updatedby",
                "displayValue"=>"Updated Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"updatedat",
                "displayValue"=>"Updated Datetime",            
                "default"=>NULL,
                "type"=>"datetime"
            ));
             $setup->create();
        }
    }
}
