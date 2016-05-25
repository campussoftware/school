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
class Modules_Librarymanagement_Data_DataInstall 
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
            "BookAssignment"=>"BookAssignment",			"BookDetails"=>"BookDetails",			"BookRequires"=>"BookRequires",			"LibraryDetails"=>"LibraryDetails",			"Publishers"=>"Publishers",			"Status"=>"Status",			"IssuedFor"=>"IssuedFor",			
            
            );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Librarymanagement_Data_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        } 
        
    }
}
