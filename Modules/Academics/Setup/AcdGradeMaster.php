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
class Modules_Academics_Setup_AcdGradeMaster
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("acd_grade_master");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Acd Grade Master");
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
                "name"=>"acd_grade_method_id",
                "displayValue"=>"Acd Grade Method Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"30"          
            ));
            $setup->addColumnName(array(
                "name"=>"acd_grade_method_details_id",
                "displayValue"=>"Acd Grade Method Details Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"30"          
            ));
            $setup->addColumnName(array(
                "name"=>"max",
                "displayValue"=>"Max",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"5,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"min",
                "displayValue"=>"Min",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"5,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"grade",
                "displayValue"=>"Grade",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"50"         
            ));
            $setup->addColumnName(array(
                "name"=>"gradepoints",
                "displayValue"=>"Grade Points",            
                "default"=>NULL,  
                "type"=>"decimal",
                "size"=>"5,2"         
            ));
            $setup->addColumnName(array(
                "name"=>"remarks",
                "displayValue"=>"Remarks",            
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
