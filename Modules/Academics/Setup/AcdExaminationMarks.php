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
class Modules_Academics_Setup_AcdExaminationMarks
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("acd_examination_marks");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Acd Exam Marks");
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
                "name"=>"acd_modeofexam_id",
                "displayValue"=>"Acd Mode Of Exam Id",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"255"         
            ));
            $setup->addColumnName(array(
                "name"=>"acd_examination_schedule_id",
                "displayValue"=>"Acd Exam Schedule Id",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"acd_exam_name_id",
                "displayValue"=>"Acd Exam Name Id",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"is_final",
                "displayValue"=>"Is Final",            
                "default"=>NULL,  
                "type"=>"tinyint",
                "size"=>"1"         
            ));
            $setup->addColumnName(array(
                "name"=>"is_grade",
                "displayValue"=>"Is Grade",            
                "default"=>NULL,  
                "type"=>"tinyint",
                "size"=>"1"         
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
