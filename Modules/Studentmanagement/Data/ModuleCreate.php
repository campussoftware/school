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
class Modules_Studentmanagement_Data_ModuleCreate 
{
    //put your code here
    public function execute()
    {
        try
        {            
                        
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("studentmanagement");
            $registerController->setNodeNameData("studentmanagement");
            $registerController->setDisplayValue("Student Management");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("16");
            $registerController->setIcon("icon-user-md");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("studentshift");
            $registerController->setNodeNameData("studentshift");
            $registerController->setDisplayValue("Student Shift");
            $registerController->setIsModule("2");
            $registerController->setRootModuleId("studentmanagement");
            $registerController->setModuleId("studentmanagement");
            $registerController->setModuleDisplayId("studentmanagement");
            $registerController->setSortValue("5");
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