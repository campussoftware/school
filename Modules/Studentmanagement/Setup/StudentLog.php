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
class Modules_Studentmanagement_Setup_StudentLog
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("student_log");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Student Log");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Student Log Id",
                "prmiary"=>1,            
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "key"=>"unique",
                "auto_increment"=>1, 
            ));
            $setup->addColumnName(array(
                "name"=>"student_admission_id",
                "displayValue"=>"Student Admission Id",            
                "default"=>NULL,                
                "type"=>"bigint",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"admission_no",
                "displayValue"=>"Admission No",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"fee_list_feegroup_id",
                "displayValue"=>"Fee List Feegroup Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"student_quota_id",
                "displayValue"=>"Student Quota Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"cur_list_academicyear_id",
                "displayValue"=>"LisT Acadamic Year Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"list_branch_id",
                "displayValue"=>"Branch Id",
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
            ));$setup->addColumnName(array(
                "name"=>"cur_list_class_id",
                "displayValue"=>"List Class Id",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"student_status_id",
                "displayValue"=>"Student Status Id",
                "default"=>NULL,                
                "type"=>"Varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"date",
                "displayValue"=>"Date",  
                "default"=>NULL,                
                "type"=>"date"        
            ));
            $setup->addColumnName(array(
                "name"=>"end_date",
                "displayValue"=>"End Date",            
                "default"=>NULL,
                "type"=>"date"
            ));
            $setup->addColumnName(array(
                "name"=>"fee_list_feeplan_id",
                "displayValue"=>"fee List Feeplan Id",
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
             $setup->addColumnName(array(
                "name"=>"student_action_id",
                "displayValue"=>"Student Action Id",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
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
                "type"=>"bigint",
                "size"=>"15"
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
