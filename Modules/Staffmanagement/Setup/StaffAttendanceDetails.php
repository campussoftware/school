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
class Modules_Staffmanagement_Setup_StaffAttendanceDetails
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("staff_staff_attendance_details");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Staff Attendance Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Staff Attendance Details Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"15",
                "auto_increment"=>1,           
            ));			$setup->addColumnName(array(                "name"=>"staff_id",                "displayValue"=>"Staff Id",                            "default"=>Null,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"staff_code",                "displayValue"=>"Staff Code",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"status",                "displayValue"=>"Status",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"hours",                "displayValue"=>"Hours",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"remarks",                "displayValue"=>"Remarks",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));
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
