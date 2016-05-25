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
class Modules_Studentmanagement_Setup_StudentQuota
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("student_quota");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Student Quota");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Student Quota Id",
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11",
                "key"=>"unique",
                "auto_increment"=>1, 
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Name",            
                "default"=>NULL,
                "type"=>"varchar",
                "size"=>"255"
            ));
            $setup->addColumnName(array(
                "name"=>"short_code",
                "displayValue"=>"Short Code",
                "prmiary"=>1,
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"50"
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
