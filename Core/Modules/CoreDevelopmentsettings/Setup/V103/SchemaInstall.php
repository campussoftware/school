<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SchemaInstall
 *
 * @author venkatesh
 */

namespace Core\Modules\CoreDevelopmentsettings\Setup\V103;

class SchemaInstall {

    //put your code here
    function __construct() {
        $this->setUp();
    }

    protected function setUp() {
        $node = "CoreCronSchedule";
        $nodeClass = "\Core\Modules\CoreDevelopmentsettings\Setup\V103\'" . $node;
        $nodeClass=str_replace("'","",$nodeClass);
        $rnode = new $nodeClass();
        $rnode->execute();
    }

}
