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
class Modules_Feesetup_Setup_FeeListFeeplanDetails
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("fee_list_feeplan_details");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Fee List Feeplan Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Fee List Feeplan Details Id",
                "prmiary"=>1,            
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "auto_increment"=>1,           
            ));
            $setup->addColumnName(array(
                "name"=>"fee_list_feeplan_id",
                "displayValue"=>"List Feeplan Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"fee_list_feetype_id",
                "displayValue"=>"List Feetype Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"25"          
            ));
            $setup->addColumnName(array(
                "name"=>"fee_list_frequency_id",
                "displayValue"=>"List Frequency Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"50"          
            ));
            $setup->addColumnName(array(
                "name"=>"amount",
                "displayValue"=>"Amount",            
                "default"=>NULL,                
                "type"=>"decimal",
                "size"=>"15,2"          
            ));
            $setup->addColumnName(array(
                "name"=>"concession_allowed",
                "displayValue"=>"Concession Allowed",            
                "default"=>NULL,  
                "type"=>"tinyint",
                "size"=>"1"         
            ));
            $setup->addColumnName(array(
                "name"=>"max_concession",
                "displayValue"=>"Max Concession",            
                "default"=>NULL,                
                "type"=>"decimal",
                "size"=>"5,2"          
            ));
            $setup->addColumnName(array(
                "name"=>"refund_allowed",
                "displayValue"=>"Refund Allowed",            
                "default"=>NULL,  
                "type"=>"tinyint",
                "size"=>"1"         
            ));
            $setup->addColumnName(array(
                "name"=>"max_refund",
                "displayValue"=>"Max Refound",            
                "default"=>NULL,                
                "type"=>"decimal",
                "size"=>"5,2"          
            ));
            $setup->addColumnName(array(
                "name"=>"tax_allowed",
                "displayValue"=>"Tax Allowed",            
                "default"=>NULL,  
                "type"=>"tinyint",
                "size"=>"1"         
            ));
            $setup->addColumnName(array(
                "name"=>"tax_master_id",
                "displayValue"=>"Tax Master Id",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"25"         
            ));
            $setup->addColumnName(array(
                "name"=>"serial_no",
                "displayValue"=>"Serial No",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"active_status",
                "displayValue"=>"Active Status",            
                "default"=>NULL,  
                "type"=>"tinyint",
                "size"=>"1"         
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
