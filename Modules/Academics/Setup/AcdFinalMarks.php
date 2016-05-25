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
class Modules_Academics_Setup_AcdFinalMarks
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("acd_final_marks");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Acd Final Marks");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"User Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"15",
                "auto_increment"=>1,           
            ));
            $setup->addColumnName(array(
                "name"=>"acd_overall_grade_id",
                "displayValue"=>"Acd Over All Grade Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"acd_exam_group_id",
                "displayValue"=>"Acd Exam Group Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"cur_list_academicyear_id",
                "displayValue"=>"List Academic year Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"20"          
            ));
            $setup->addColumnName(array(
                "name"=>"list_branch_id",
                "displayValue"=>"List Branch Id ",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"cur_branch_orientation_id",
                "displayValue"=>"List Branch Orientational Id",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"cur_branch_class_id",
                "displayValue"=>"List Branch Class Id",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
             $setup->addColumnName(array(
                "name"=>"cur_branch_class_section_id",
                "displayValue"=>"List Branch Class Section Id",            
                "default"=>NULL,  
                "type"=>"bigint",
                "size"=>"15"         
            ));
            $setup->addColumnName(array(
                "name"=>"admission_no",
                "displayValue"=>"Admission No",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"200"         
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Name",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"255"         
            ));
            $setup->addColumnName(array(
                "name"=>"total_marks",
                "displayValue"=>"Total Marks",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"10,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"total_optianed",
                "displayValue"=>" Marks Optained",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"10,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"percentage",
                "displayValue"=>"Percentage",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"10,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"cur_attendance_status_id",
                "displayValue"=>"Attendance Status Id",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"20"         
            ));
            $setup->addColumnName(array(
                "name"=>"gradepoints",
                "displayValue"=>"Grade Points",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"50"         
            ));
            $setup->addColumnName(array(
                "name"=>"grade",
                "displayValue"=>"Grade",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"50"         
            ));
            $setup->addColumnName(array(
                "name"=>"remarks",
                "displayValue"=>"Remarks",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"200"         
            ));
            $setup->addColumnName(array(
                "name"=>"section_rank",
                "displayValue"=>"Section Rank",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"branch_rank",
                "displayValue"=>"Branch Rank",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"location_rank",
                "displayValue"=>"Location Rank",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"state_rank",
                "displayValue"=>"State Rank",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
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
