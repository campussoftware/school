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
class Modules_Curriculum_Setup_CurBranchOrientation
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("cur_branch_orientation");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Branch Orientation");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Branch Orientation Id",
                "prmiary"=>1,            
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "key"=>"unique",
                "auto_increment"=>1,            
            ));
            $setup->addColumnName(array(
                "name"=>"list_branch_id",
                "displayValue"=>"Branch Id",            
                "default"=>NULL,                
                "type"=>"bigint",
                "size"=>"11"          
            ));
            
            $setup->addColumnName(array(
                "name"=>"cur_list_orientation_id",
                "displayValue"=>"List Orientation Id",            
                "default"=>NULL,                
                "type"=>"bigint",
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
