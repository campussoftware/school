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
class Modules_Staffmanagement_Setup_StaffEducation
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("staff_staff_education");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Staff Eduction Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Staff Education Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"15",
                "auto_increment"=>1,           
            ));			$setup->addColumnName(array(                "name"=>"college",                "displayValue"=>"College",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"university",                "displayValue"=>"University",                            "default"=>Null,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"qualification",                "displayValue"=>"Qualification",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));            $setup->addColumnName(array(                "name"=>"gap",                "displayValue"=>"Gap",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));
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
