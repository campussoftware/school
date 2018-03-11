<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Command
 *
 * @author venkatesh
 */

namespace Core;

class Command {

    //put your code here
    public $_inputArguments;
    public $wp;

    public function setInputParameters($inputParameters) {
        $this->_inputArguments = $inputParameters;
        global $wp;
        $this->wp = $wp;
    }

    public function execute() {
        $cc = new \CoreClass();
        $command=trim(strtolower($this->_inputArguments[1]));
        switch ($command) {
            case "install":                
                $new = $cc->getObject("\Core\Install\Setup");
                $ch = $cc->getObject("\Core\Cache\Refresh");
                $ch->refreshCache();
                break;
            case "layoutcache":
                $ch = $cc->getObject("\Core\Cache\LayoutRefresh");
                $ch->refreshLayout("Config".DIRECTORY_SEPARATOR."Settings".DIRECTORY_SEPARATOR."system.xml","system.xml");  
                break;
            case "cache":
                \Core::delTree($this->wp->documentRoot . "Var/" . $this->wp->identity);
                \Core::checkCache();               
                break;
            case "jsadmincache":
                $cc = new \CoreClass();
                $jsRefresh = $cc->getObject("\Core\Cache\JsRefresh");
                $jsRefresh->refreshVarAdminJs();
                break;
            case "cssadmincache":
                $cc = new \CoreClass();
                $jsRefresh = $cc->getObject("\Core\Cache\CssRefresh");
                $jsRefresh->moveCssAdminFiles();
                break;
            case "jsfrontendcache":
                $cc = new \CoreClass();
                $jsRefresh = $cc->getObject("\Core\Cache\JsRefresh");
                $jsRefresh->refreshVarFrontendJs();
                break;
            case "cssfrontendcache":
                $cc = new \CoreClass();
                $jsRefresh = $cc->getObject("\Core\Cache\CssRefresh");
                $jsRefresh->moveCssFrontendFiles();
                break;
            default :
                echo "No Commands Found";
                break;
        }
    }

}