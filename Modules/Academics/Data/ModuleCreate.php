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
class Modules_Academics_Data_ModuleCreate 
{
    //put your code here
    public function execute()
    {
        try
        {            
            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("academicsgradesetup");
            $registerController->setNodeNameData("academicsgradesetup");
            $registerController->setDisplayValue("Grade Setup");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("1");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acdsettings");
            $registerController->setNodeNameData("acdsettings");
            $registerController->setDisplayValue("Academics Settings");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("curriculum");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("1");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("academics");
            $registerController->setNodeNameData("academics");
            $registerController->setDisplayValue("Academics");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("10");
            $registerController->setIcon("icon-cog");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("admissionsettings");
            $registerController->setNodeNameData("admissionsettings");
            $registerController->setDisplayValue("Admission Settings");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("admissionsettings");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("12");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acdprogressreport");
            $registerController->setNodeNameData("acdprogressreport");
            $registerController->setDisplayValue("Progress Report");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academics");
            $registerController->setModuleDisplayId("academics");
            $registerController->setSortValue("12");
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
