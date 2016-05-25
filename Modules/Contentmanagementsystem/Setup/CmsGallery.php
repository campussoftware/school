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
class Modules_Contentmanagementsystem_Setup_CmsGallery
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("cms_gallery");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Cms Gallery");
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
                "name"=>"student_admission_id",
                "displayValue"=>"Student Admission Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));        
            $setup->addColumnName(array(
                "name"=>"title",
                "displayValue"=>"Title",            
                "default"=>NULL,  
                "type"=>"text"      
            ));
            $setup->addColumnName(array(
                "name"=>"image",
                "displayValue"=>"Image",            
                "default"=>NULL,  
                "type"=>"text"        
            ));
            $setup->addColumnName(array(
                "name"=>"date",
                "displayValue"=>"Date",            
                "default"=>NULL,  
                "type"=>"date"        
            ));
            $setup->addColumnName(array(
                "name"=>"description",
                "displayValue"=>"Description",            
                "default"=>NULL,  
                "type"=>"longtext"        
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
