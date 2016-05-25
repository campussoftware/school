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
class Modules_Academics_Setup_AcdSubgroupexams
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("acd_subgroupexams");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Acd Subgroupexams");
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
                "name"=>"acd_exam_group_id",
                "displayValue"=>"Acd Exam Group Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));        
            $setup->addColumnName(array(
                "name"=>"acd_examination_schedule_id",
                "displayValue"=>"Acd Examination Schedule Id",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"percentage",
                "displayValue"=>"Percentage",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"7,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"code",
                "displayValue"=>"Code",            
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
