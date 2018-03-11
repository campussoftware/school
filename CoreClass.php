<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreClass
 *
 * @author ramesh
 */
class CoreClass {

    static public $node = NULL;

    static function getController($node, $module = NULL, $action = NULL, $actionSourceFrom = NULL) {
        $np = new \Core\Model\RameshAbstract();
        $np->setNodeName($node);
        if ($module == "") {
            $module = $np->_currentNodeModule;
        }
        $className = "\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node))) . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $action)));
        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        }
        $className = "\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)));
        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        }
        $className = "\Core\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node))) . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $action)));
        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        }
        $className = "\Core\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)));
        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        } else {
            return new \Core\Controllers\NodeController($node, $action);
        }
    }

    static function getModel($node, $action = NULL) {
        if ($node == "") {
            return false;
        }
        $customNodeModel = \Core::convertStringToArray($node, "__");
        $customModelFlag = 0;
        if (\Core::countArray($customNodeModel) > 1) {
            $node = \Core::getValueFromArray($customNodeModel, "0");
            $customModelFlag = 1;
            unset($customNodeModel[0]);
        }
        global $rootObj;
        $np = new \Core\Model\RameshAbstract();
        $np->setNodeName($node);
        $module = $np->_currentNodeModule;
        if ($customModelFlag == 1) {
            $className = "\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Models" . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node))) . "\\" . \Core::convertArrayToString($customNodeModel, "\\");
            if (self::checkFileExits($className)) {
                return new $className($node, $action);
            }
            $className = "\Core" . $className;
            return new $className($node, $action);
        } else {
            $className = "\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Models" . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)));
            if (self::checkFileExits($className)) {
                return new $className($node, $action);
            }
            $className = "\Core\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Models" . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)));
            if (self::checkFileExits($className)) {
                return new $className($node, $action);
            } else {
                return new \Core\Model\Node($node, $action);
            }
        }
    }

    static function getHelper($moduleName = NULL, $helperNode = "Data") {
        $cc = new \CoreClass();
        global $wp;
        if ($moduleName == NULL) {
            return new \Core\Helper\Data();
        } else {
            $className = "\Modules\\" . ucwords(str_replace("_", " ", $moduleName)) . "\Helper\\" . $helperNode;
            if (self::checkFileExits($className)) {
                return new $className();
            } else {
                return new \Core\Helper\Data();
            }
        }
    }

    static function getMethod($object, $action, $node = NULL, $FieldName = NULL) {
        if ($node == "") {
            return false;
        }
        $methodName = lcfirst(str_replace(" ", "", ucwords(str_replace("_", " ", $node))) . str_replace(" ", "", ucwords(str_replace("_", " ", $FieldName))) . ucwords($action));
        if (Core::methodExists($object, $methodName)) {
            return $methodName;
        }
        $methodName = lcfirst(str_replace(" ", "", ucwords(str_replace("_", " ", $node))) . ucwords($action));
        if (Core::methodExists($object, $methodName)) {
            return $methodName;
        }
        return false;
    }

    static function getFrontController($node, $module = NULL, $action = NULL) {
        $cc = new \CoreClass();
        global $wp;
        $className = "\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\Frontend\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node))) . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $action)));

        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        }
        $className = "\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\Frontend\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)));
        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        }
        $className = "\Core\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\Frontend\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)));
        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        } else {
            return new \Core\Controllers\Frontend\IndexController($node, $action);
        }
    }

    static function getApiController($node, $module = NULL, $action = NULL) {
        $cc = new \CoreClass();
        global $wp;
        $className = "\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\\" . "Api\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)) . "\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $action))));

        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        }
        $className = "\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\Api\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)));
        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        }
        $className = "\Core\Modules\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $module))) . "\Controllers" . "\Api\\" . str_replace(" ", "", ucwords(str_replace("_", " ", $node)));
        if (self::checkFileExits($className)) {
            return new $className($node, $action);
        } else {
            return new \Core\Controllers\Api\IndexController($node, $action);
        }
    }

    static function getObject($className, $construcParams = NULL) {
        
        return new $className($construcParams);
    }

    static function checkFileExits($className) {
        global $wp;
        $className = str_replace("'", "", $className);
        $className = ltrim($className, "\\");
        $fileName = $wp->documentRoot . str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";

        if (Core::fileExists($fileName)) {
            return true;
        }
        return false;
    }
}