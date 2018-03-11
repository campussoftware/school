<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Core\Modules\CoreDevelopmentsettings\Data\V103;
/**
 * Description of SchemaInstall
 *
 * @author venkatesh
 */
class DataInstall
{
    //put your code here
    function __construct() 
    {
        $this->setDataUp();
    }
    protected function setDataUp()
    {
        $nodesArray=array("CoreCronSchedule","CoreCronSchedule");
        foreach ($nodesArray as $node)
        {
            $nodeClass="\Core\Modules\CoreDevelopmentsettings\Data\V103\'".$node;
            $nodeClass=str_replace("'","",$nodeClass);
            $rnode=new $nodeClass();
            $rnode->execute();
        }
        
    }
}
