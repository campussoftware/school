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
class Modules_Staffmanagement_Setup_StaffHistory
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("staff_staff_history");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Staff History");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Staff History Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"15",
                "auto_increment"=>1,           
            ));			$setup->addColumnName(array(                "name"=>"staff_id",                "displayValue"=>"Staff Id",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"Staff_code",                "displayValue"=>"Staff Code",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));
            $setup->addColumnName(array(
                "name"=>"organization",
                "displayValue"=>"Organization",            
                "default"=>Null,                
                "type"=>"varchar",
                "size"=>"255"          
            ));			$setup->addColumnName(array(                "name"=>"branch",                "displayValue"=>"Branch",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"division_id",                "displayValue"=>"Division Id",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"department_id",                "displayValue"=>"Department Id",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"designation_id",                "displayValue"=>"Designation Id",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"from_date",                "displayValue"=>"From Date",                            "default"=>NULL,                                "type"=>"datetime",                //"size"=>"11"                      ));			$setup->addColumnName(array(                "name"=>"to_date",                "displayValue"=>"To Date",                            "default"=>NULL,                                "type"=>"datetime",                //"size"=>"11"                      ));			$setup->addColumnName(array(                "name"=>"previous_status",                "displayValue"=>"Previous Status",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));            $setup->addColumnName(array(                "name"=>"present_status",                "displayValue"=>"Present Status",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));
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
