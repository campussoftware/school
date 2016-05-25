<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SchemaInstall
 *
 * @author ramesh
 */
class Modules_Studentmanagement_Setup_SchemaInstall
{
    //put your code here
    function __construct() 
    {
        $this->setUp();
    }
    protected function setUp()
    {
        $nodesArray=array(
            
            "StudentStatus"=>"StudentStatus",
            "StudentQuota"=>"StudentQuota",
            "StudentLog"=>"StudentLog",
            "StudentHistory"=>"StudentHistory",
            "StudentFeeplanDetails"=>"StudentFeeplanDetails",
            "StudentAdmission"=>"StudentAdmission",
            "StudentAction"=>"StudentAction",        
            
            
            
        );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Studentmanagement_Setup_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        }               
    }
}
