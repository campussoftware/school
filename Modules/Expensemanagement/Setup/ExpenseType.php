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
class Modules_Expensemanagement_Setup_ExpenseType
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("expense_type");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Expense Type");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Expense Type Id",                            
                "default"=>NULL,
		"prmiary"=>1,
                "type"=>"int",
                "size"=>"11",
		"auto_increment"=>1,  
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"name",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
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
