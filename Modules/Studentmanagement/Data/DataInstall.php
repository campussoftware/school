<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataInstall
 *
 * @author ramesh
 */
class Modules_Studentmanagement_Data_DataInstall 
{
    //put your code here
    function __construct() 
    {
        $this->setDataUp();
    }
    protected function setDataUp()
    {
        $nodesArray=array(
            "ModuleCreate"=>"ModuleCreate",
            "StudentStatus"=>"StudentStatus",
            "StudentQuota"=>"StudentQuota",
            "StudentLog"=>"StudentLog",
            "StudentHistory"=>"StudentHistory",
            "StudentAdmission"=>"StudentAdmission",
            "StudentAction"=>"StudentAction",
            
            "StudentFeeplanDetails"=>"StudentFeeplanDetails",
			"Studentshift"=>"Studentshift",
            
            );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Studentmanagement_Data_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        } 
        
    }
}