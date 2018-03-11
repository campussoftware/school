<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreActionType
 *
 * @author ramesh
 */
namespace Core\Modules\CoreDevelopmentsettings\Data\V103;
class CoreCronSchedule
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=\CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("core_cron_schedule");
            $registerController->setNodeNameData("core_cron_schedule");
            $registerController->setDisplayValue("Cron Job Schedule");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("core_codebasedsettings");
            $registerController->setModuleId("core_codebasedsettings");
            $registerController->setModuleDisplayId("core_codebasedsettings");
            $registerController->setSortValue("7");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=\CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("core_cron_schedule");           
            $registerController->setTablename("core_cron_schedule");
            $registerController->setAutokey("job_id");
            $registerController->setPrimarykey("job_id");
            $registerController->setDescriptorkey("job_id");
            $registerController->setMandotatoryAdd("job_code|schedule_type|start_time|last_render_time|status|modal|method");
            $registerController->setMandotatoryEdit("job_code|schedule_type|start_time|last_render_time|status|modal|method");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("job_id");
            $registerController->setHideEdit("job_id");
            $registerController->setHideView("job_id");
            $registerController->setHideAdmin("job_id");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("");
            $registerController->setBoolattributes("is_active");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("");
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
