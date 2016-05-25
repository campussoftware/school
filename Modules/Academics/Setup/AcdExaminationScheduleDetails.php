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
class Modules_Academics_Setup_AcdExaminationScheduleDetails
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("acd_examination_schedule_details");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Acd Examination Schedule Details");
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
                "name"=>"acd_examination_schedule_id",
                "displayValue"=>"Acd Exam Schedule Id",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"cur_class_subject_id",
                "displayValue"=>"List Class Subject Id ",            
                "default"=>NULL,  
                "type"=>"bigint",
                "size"=>"15"         
            ));
            $setup->addColumnName(array(
                "name"=>"cur_academic_subject_id",
                "displayValue"=>"Academic Subject Id",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"subject_grade_id",
                "displayValue"=>"Subject Grade Id",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"50"         
            ));
            $setup->addColumnName(array(
                "name"=>"exam_date",
                "displayValue"=>"Exam Date",            
                "default"=>NULL,  
                "type"=>"date"       
            ));
            $setup->addColumnName(array(
                "name"=>"start_time",
                "displayValue"=>"Start Date",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"255"         
            ));
            $setup->addColumnName(array(
                "name"=>"end_time",
                "displayValue"=>"End Date",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"255"         
            ));
            $setup->addColumnName(array(
                "name"=>"max_marks",
                "displayValue"=>"Max Marks",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"10,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"cutoff_marks",
                "displayValue"=>"Cutoff Marks",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"10,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"min_marks	",
                "displayValue"=>"Min Marks",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"10,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"is_optional",
                "displayValue"=>"Is optional",            
                "default"=>NULL,  
                "type"=>"tinyint",
                "size"=>"1"         
            ));
            $setup->addColumnName(array(
                "name"=>"active_status",
                "displayValue"=>"Active Status",            
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