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
class Modules_Librarymanagement_Setup_BookAssignment
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("lib_book_assignment");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Book Assignment");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Book Assignment Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"15",
                "auto_increment"=>1,           
            ));			$setup->addColumnName(array(                "name"=>"library_details_id",                "displayValue"=>"Library Details Id",                            "default"=>NULL,                                "type"=>"int",                "size"=>"11"                      ));			$setup->addColumnName(array(                "name"=>"book_id",                "displayValue"=>"Book Id",                            "default"=>NULL,                                "type"=>"int",                "size"=>"11"                      ));
            $setup->addColumnName(array(
                "name"=>"issued_for",
                "displayValue"=>"Issued For",            
                "default"=>Null,                
                "type"=>"varchar",
                "size"=>"255"          
            ));			$setup->addColumnName(array(                "name"=>"issued_date",                "displayValue"=>"Issued Date",                            "default"=>NULL,                                "type"=>"datetime",                //"size"=>"11"                      ));			$setup->addColumnName(array(                "name"=>"received_date",                "displayValue"=>"Received Date",                            "default"=>NULL,                                "type"=>"datetime",                //"size"=>"11"                      ));			$setup->addColumnName(array(                "name"=>"reference_id",                "displayValue"=>"Reference Id",                            "default"=>NULL,                                "type"=>"int",                "size"=>"11"                      ));            $setup->addColumnName(array(                "name"=>"reference_code",                "displayValue"=>"Reference Code",                            "default"=>NULL,                                "type"=>"varchar",                "size"=>"255"                      ));			$setup->addColumnName(array(                "name"=>"fine",                "displayValue"=>"Fine Amount",                            "default"=>NULL,                                "type"=>"double",                "size"=>"20,2"                      ));			
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
