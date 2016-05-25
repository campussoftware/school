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
class Modules_Curriculum_Setup_CurAcademicSubject
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("cur_academic_subject");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Academic Subject");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Academic Subject Id",
                "prmiary"=>1,            
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "key"=>"unique",
                "auto_increment"=>1,            
            ));
            $setup->addColumnName(array(
                "name"=>"cur_subject_type_id",
                "displayValue"=>"Student Type Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"50"          
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Name",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"code",
                "displayValue"=>"Code",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"50"          
            ));
            $setup->addColumnName(array(
                "name"=>"subject_group_id",
                "displayValue"=>"Subject Group Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"50"          
            ));
            $setup->addColumnName(array(
                "name"=>"is_elective",
                "displayValue"=>"Is Elective",            
                "default"=>NULL,                
                "type"=>"tinyint",
                "size"=>"1"          
            ));
            $setup->addColumnName(array(
                "name"=>"is_optional",
                "displayValue"=>"Is Optional",            
                "default"=>NULL,                
                "type"=>"tinyint",
                "size"=>"1"          
            ));
            $setup->addColumnName(array(
                "name"=>"is_examination",
                "displayValue"=>"Is Examination",            
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
