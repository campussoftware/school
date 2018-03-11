<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core\Modules\CoreDevelopmentsettings\Models\CoreRegisternode;

/**
 * Description of Menu
 *
 * @author ramesh
 */
class Menu extends \Core\Modules\CoreDevelopmentsettings\Models\CoreRegisternode {

    //put your code here
    function getMenuItems($profileId = "ROOT") {
        $cc = new \CoreClass();
        $menuObject = $cc->getObject("\Core\Attributes\BuildMenu");
        $menuObject->buildMenu();
        $output = [];
        if (count($menuObject->_rootModules) > 0) {
            foreach ($menuObject->_rootModules as $rootmoduledata) {
                if (key_exists($rootmoduledata['nodename'], $menuObject->_moduleList)) {
                    $root = $rootmoduledata['nodename'];
                    $rootdata = $menuObject->_menuItems[$root];
                    $mainMenu = [];
                    $mainMenu['classIcon'] = $rootmoduledata['icon'];
                    $mainMenu['name'] = $menuObject->_nodeDisplay[$root];
                    $submenu = [];
                    foreach ($rootdata as $moduledisplay => $moduledata) {
                        $submenuItem = [];
                        $submenuItem['classIcon'] = "icon-box";
                        $submenuItem['name'] = \Core::getValueFromArray($menuObject->_nodeDisplay, $moduledisplay);
                        $menulinks=[];
                        foreach($moduledata as $module=>$nodedata)
                        {
                            foreach($nodedata as $node=>$action)
                                     {
                                $linkData=[];                            
                                $linkData["linkslug"]= $node;
                                $linkData["linktitle"]= $menuObject->_nodeDisplay[$node];
                                $linkData["linkanchortitle"]= $menuObject->_nodeDisplay[$node];
                            $menulinks[]=$linkData;
                                     }
                        }
                        $submenuItem['menulinks']=$menulinks;
                        $submenu[] = $submenuItem;
                        
                    }
                    $mainMenu['submenu'] = $submenu;
                    $output[] = $mainMenu;
                }
            }
        }
        return $output;
    }

}
