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
class Modules_Curriculum_Data_CurListAcademicyear
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("cur_list_academicyear");
            $registerController->setNodeNameData("cur_list_academicyear");
            $registerController->setDisplayValue("Academic Year");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("curriculum");
            $registerController->setModuleId("curriculum");
            $registerController->setModuleDisplayId("core_settings");
            $registerController->setSortValue("1");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("cur_list_academicyear");           
            $registerController->setTablename("cur_list_academicyear");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("short_code");
            $registerController->setDescriptorkey("academicyear");
            $registerController->setMandotatoryAdd("start_date|end_date|short_code|academicyear|is_current|sort_value|active_status");
            $registerController->setMandotatoryEdit("start_date|end_date|short_code|academicyear|sort_value");
            $registerController->setUniquefields("short_code");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("start_date|end_date");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("");
            $registerController->setBoolattributes("is_current|active_status");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("short_code|academicyear|is_current|active_status");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("add|admin|delete|edit|view");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
