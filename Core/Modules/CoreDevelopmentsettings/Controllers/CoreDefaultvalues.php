<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreDefaultvalues
 *
 * @author ramesh
 */
namespace Core\Modules\CoreDevelopmentsettings\Controllers;
use \Core\Controllers\NodeController;
class CoreDefaultvalues extends NodeController
{
    //put your code here
    public function coreDefaultvaluesAfterDataUpdate()
    {        
        $cache=new \Core\Cache\Refresh();
        $cache->setNodeName($this->_requestedData['core_node_settings_id']);
        $cache->setDefaultValues();         
        return TRUE;  
    }
    public function getStructureAction()
    {
        $requestedData=$this->_requestedData;
        $defaultValue=$requestedData['fieldname'];
        $np=new \Core\Model\NodeProperties();
        $np->setNode($requestedData['core_node_settings_id']);
        $nodestructure=$np->currentNodeStructure();
        
        $tb=new \Core\Model\TableStructure();
        $tb->setTable($nodestructure['tablename']);
        $tableStructure=$tb->getStructure();
        $tableStructure=\Core::getKeysFromArray($tableStructure);
        $tableStructure=\Core::diffArray($tableStructure, $this->_defaulthideAttributes);
        
        $result=array();
        $i=0;
        foreach ($tableStructure as $key) 
        {
            $result[$i]['pid']=$key;
            $result[$i]['pds']=$this->getLabel($key);
            $i++;
        }
        $attributeType="select";        
        $attributeDetails=new \Core\Attributes\LoadAttribute($attributeType);				
        $attributeClass="\Core\Attributes\\".$attributeDetails->_attributeName;
        $attribute=new $attributeClass;
        $attribute->setIdName($requestedData['idname']);
        $attribute->setOptions($result);
        $attribute->setValue($defaultValue);        
        $attribute->loadAttributeTemplate($attributeType,$requestedData['idname']);
    }
}
