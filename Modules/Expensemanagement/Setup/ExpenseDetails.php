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
class Modules_Expensemanagement_Setup_ExpenseDetails
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("expense_details");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Expense Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Expense Id",                            
                "default"=>NULL,
		"prmiary"=>1,
                "type"=>"int",
                "size"=>"11",
		"auto_increment"=>1,  
            ));
            $setup->addColumnName(array(
                "name"=>"expense_code",
                "displayValue"=>"Expense Code",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"list_branch_id",
                "displayValue"=>"List Branch Id",            
                "default"=>NULL,   		
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"expense_type_id",
                "displayValue"=>"Expense Type Id",            
                "default"=>NULL,   		
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"date",
                "displayValue"=>"Date",            
                "default"=>NULL,   		
                "type"=>"date",       
            ));
            $setup->addColumnName(array(
                "name"=>"amount",
                "displayValue"=>"Amount",            
                "default"=>NULL,   		
                "type"=>"decimal",
                "size"=>"17,2"          
            ));
            $setup->addColumnName(array(
                "name"=>"remarks",
                "displayValue"=>"Remarks",            
                "default"=>NULL,   		
                "type"=>"longtext",   
            ));
            $setup->addColumnName(array(
                "name"=>"expense_status_id",
                "displayValue"=>"Expense Status Id",            
                "default"=>NULL,   		
                "type"=>"varchar",
                "size"=>"50"          
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
