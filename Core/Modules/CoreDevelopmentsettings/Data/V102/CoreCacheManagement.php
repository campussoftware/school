<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreCacheManagement
 *
 * @author venkatesh
 */
namespace Core\Modules\CoreDevelopmentsettings\Data\V102;
class CoreCacheManagement
{
    //put your code here
    function execute()
    {
        try
        {            
            $registerController=\CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("core_cachemanagement");
            $registerController->setNodeNameData("core_cachemanagement");
            $registerController->setDisplayValue("Cache Management");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("core_codebasedsettings");
            $registerController->setModuleId("core_codebasedsettings");
            $registerController->setModuleDisplayId("core_developmentsettings");
            $registerController->setSortValue("2");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=\CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("core_cachemanagement");           
            $registerController->setTablename("core_cachemanagement");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("cache_type");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setSearch("cache_type|status");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("add|admin|delete|edit");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
        }
        catch (Exception $ex)
        {
            \Core::Log($ex->getMessage(),"installdataexception.log");
        }
	}
}
