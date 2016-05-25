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
class Modules_Studentmanagement_Setup_StudentAdmission
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("student_admission");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Student Admission");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Student Admission Id",
                "prmiary"=>1,            
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "auto_increment"=>1,           
            ));
            $setup->addColumnName(array(
                "name"=>"admission_no",
                "displayValue"=>"Admission No",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"roll_no",
                "displayValue"=>"Roll No",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
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
                "name"=>"student_quota_id",
                "displayValue"=>"Student Quota Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"cur_list_orientation_id",
                "displayValue"=>"List Orientation Id",            
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
                "name"=>"cur_list_class_id",
                "displayValue"=>"List Class Id",            
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
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"student_status_id",
                "displayValue"=>"Student Status Id",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"admission_date",
                "displayValue"=>"Admission Date",
                "default"=>NULL,                
                "type"=>"date"       
            ));
            $setup->addColumnName(array(
                "name"=>"first_name",
                "displayValue"=>"First Name",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"last_name",
                "displayValue"=>"Last Name",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Name",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"dob",
                "displayValue"=>"DOB",
                "default"=>NULL,                
                "type"=>"date"          
            ));
            $setup->addColumnName(array(
                "name"=>"image",
                "displayValue"=>"Image",
                "default"=>NULL,                
                "type"=>"text"          
            ));
            $setup->addColumnName(array(
                "name"=>"father_name",
                "displayValue"=>"Father Name",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"mother_name",
                "displayValue"=>"Mother Name",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"primary_phno",
                "displayValue"=>"Prima Phno",
                "default"=>NULL,                
                "type"=>"bigint",
                "size"=>"12"          
            ));
            $setup->addColumnName(array(
                "name"=>"email_id",
                "displayValue"=>"Email Id",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"password",
                "displayValue"=>"Password",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"core_country_id",
                "displayValue"=>"Country Id",
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"core_list_state_id",
                "displayValue"=>"List State Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            )); 
            $setup->addColumnName(array(
                "name"=>"core_list_city_id",
                "displayValue"=>"List City Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            )); 
            $setup->addColumnName(array(
                "name"=>"present_address",
                "displayValue"=>"Present Address",            
                "default"=>NULL,
                "type"=>"text"
            ));
            $setup->addColumnName(array(
                "name"=>"postalcode",
                "displayValue"=>"Postal Code",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
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
