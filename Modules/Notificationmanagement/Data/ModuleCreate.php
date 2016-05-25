<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreModuleCreate
 *
 * @author ramesh
 */
class Modules_Notificationmanagement_Data_ModuleCreate 
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("notification_settings");
            $registerController->setNodeNameData("notification_settings");
            $registerController->setDisplayValue("Notification Settings");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("notificationmanagement");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("1");
            $registerController->setIcon("");
            $registerController->setMenu("2");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("notificationmanagement");
            $registerController->setNodeNameData("notificationmanagement");
            $registerController->setDisplayValue("Notification Management");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("14");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            
        }
        catch(Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdata.log");
        }
    }
}
