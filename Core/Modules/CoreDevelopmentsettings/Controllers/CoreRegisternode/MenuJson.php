<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core\Modules\CoreDevelopmentsettings\Controllers\CoreRegisternode;
use \Core\Modules\CoreDevelopmentsettings\Controllers\CoreRegisternode;
/**
 * Description of MenuJson
 *
 * @author ramesh
 */
class MenuJson extends CoreRegisternode
{
    //put your code here
    function menuJsonAction()
    {
        $output=[];
        $model= \CoreClass::getModel("core_registernode__Menu");
        $output=$model->getMenuItems();        
        return $this->returnJsonResponse($output);
    }
}
