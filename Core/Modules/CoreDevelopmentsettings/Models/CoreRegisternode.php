<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core\Modules\CoreDevelopmentsettings\Models;

use Core\Model\Node;
class CoreRegisternode extends Node{
    //put your code here
    function coreRegisternodeOnchange()
    {
        $onchangeEvents['is_module']="hidevalues()";
        return $onchangeEvents;
        
    }
}
