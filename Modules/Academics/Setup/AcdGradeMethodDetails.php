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
class Modules_Academics_Setup_AcdGradeMethodDetails
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("acd_grade_method_details");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Acd Grade Method Details");
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
                "name"=>"acd_grade_method_id",
                "displayValue"=>"Acd Grade Method Id",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"20"         
            ));
            $setup->addColumnName(array(
                "name"=>"acd_grade_type_id",
                "displayValue"=>"Acd Grade Type Id",            
                "default"=>"",                
                "type"=>"varchar",
                "size"=>"25"          
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Student Name",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"255"         
            ));
            $setup->addColumnName(array(
                "name"=>"short_code",
                "displayValue"=>"Short Code",            
                "default"=>"",                
                "type"=>"varchar",
                "size"=>"25"          
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
