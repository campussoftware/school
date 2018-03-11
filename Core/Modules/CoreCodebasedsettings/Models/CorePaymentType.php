<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreNodeFiletypes
 *
 * @author ramesh
 */
namespace Core\Modules\CoreCodebasedsettings\Models;
use Core\Model\Node;
class CorePaymentType extends Node
{
    //put your code here
    
    public function getPaymentTypes()
    {
        $nodeModel = \CoreClass::getModel($this->_nodeName);
        $nodeModel->setNodeName($this->_nodeName);
        $nodeModel->addCustomFieldToSelect("core_payment_type.id", "id");
        $nodeModel->addCustomFieldToSelect("core_payment_type.name", "name");
        $nodeModel->addCustomFieldToSelect("core_payment_type.short_code", "short_code");
        $nodeModel->getCollection();
        $output = $nodeModel->_collections;
        return $output;
    }
    
}
