<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Core\Modules\CoreDevelopmentsettings\Setup\V103;
/**
 * Description of CoreSetupschema
 *
 * @author venkatesh
 */

class CoreCronSchedule
{
    //put your code here
    function execute()
    {
        $cc = new \CoreClass();         
        $setup=$cc->getObject("\Core\DataBase\Setup");  
        $setup->setTable("core_cron_schedule");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Cron Jobs Schedule");
            $setup->addColumnName(array(
                "name"=>"job_id",
                "displayValue"=>"Cron Job Id",
                "primary"=>false,
                "key"=>"unique",
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "primary"=>1,
                "auto_increment"=>1            
            ));
            $setup->addColumnName(array(
                "name"=>"job_code",
                "displayValue"=>"Job Code",            
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"schedule_type",
                "displayValue"=>"Schedule Type",            
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"start_time",
                "displayValue"=>"Start Date Time",            
                "default"=>false,                
                "type"=>"datetime"       
            ));
            $setup->addColumnName(array(
                "name"=>"last_run_time",
                "displayValue"=>"Last run Date Time",            
                "default"=>false,                
                "type"=>"datetime"       
            ));
            $setup->addColumnName(array(
                "name"=>"next_run_time",
                "displayValue"=>"Next run Date Time",            
                "default"=>false,                
                "type"=>"datetime"       
            ));
            $setup->addColumnName(array(
                "name"=>"heatbet_time",
                "displayValue"=>"Heatbet Time",            
                "default"=>false,                
                "type"=>"datetime"       
            ));
            $setup->addColumnName(array(
                "name"=>"status",
                "displayValue"=>"Status",            
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"modal",
                "displayValue"=>"Modal Name",            
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"method",
                "displayValue"=>"Method Name",            
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"message",
                "displayValue"=>"Message",            
                "default"=>false,                
                "type"=>"text"         
            ));
            $setup->addColumnName(array(
                "name"=>"input_parameters",
                "displayValue"=>"Input Parameters",            
                "default"=>false,                
                "type"=>"text"         
            ));
            $setup->addColumnName(array(
                "name"=>"is_active",
                "displayValue"=>"Is Active",            
                "default"=>false,                
                "type"=>"tinyint",
                "size"=>"2" 
            ));
            $setup->addColumnName(array(
                "name"=>"createdby",
                "displayValue"=>"Created User Id",            
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
                "displayValue"=>"Updated User Id",            
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
