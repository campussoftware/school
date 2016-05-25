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
class Modules_Staffmanagement_Setup_StaffDetails
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("staff_staff_deatils");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Staff Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Staff Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"15",
                "auto_increment"=>1,           
            ));
            $setup->addColumnName(array(
                "name"=>"staff_id",
                "displayValue"=>"Staff Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));			$setup->addColumnName(array(                "name"=>"staff_code",                "displayValue"=>"Staff Code",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));
            $setup->addColumnName(array(
                "name"=>"first_name",
                "displayValue"=>"First Name",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));			$setup->addColumnName(array(                "name"=>"middle_name",                "displayValue"=>"Middle Name",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"last_name",                "displayValue"=>"Last Name",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"date_of_birth",                "displayValue"=>"Date Of Birth",                            "default"=>NULL,                                "type"=>"date",                //"size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"email",                "displayValue"=>"Email",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"phone_number",                "displayValue"=>"Phone Number",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"mobile_number",                "displayValue"=>"Mobile number",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"address",                "displayValue"=>"Address",                            "default"=>NULL,                                "type"=>"text",               // "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"date_of_joining",                "displayValue"=>"Date Of Joining",                            "default"=>NULL,                                "type"=>"date",                //"size"=>"255"                      ));
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
