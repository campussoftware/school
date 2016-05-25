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
class Modules_Academics_Data_AcdGradeMethodDetails
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acd_grade_method_details");
            $registerController->setNodeNameData("acd_grade_method_details");
            $registerController->setDisplayValue("Grade Method Details");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academicsgradesetup");
            $registerController->setModuleDisplayId("academicsgradesetup");
            $registerController->setSortValue("7");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("acd_grade_method_details");           
            $registerController->setTablename("acd_grade_method_details");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("short_code");
            $registerController->setDescriptorkey("name");
            $registerController->setMandotatoryAdd("acd_grade_method_id|acd_grade_type_id|name|short_code");
            $registerController->setMandotatoryEdit("acd_grade_method_id|acd_grade_type_id|name|short_code");
            $registerController->setUniquefields("name|short_code");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("acd_grade_method_id|acd_grade_type_id|short_code");
            $registerController->setBoolattributes("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("acd_grade_method_id|acd_grade_type_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("acd_grade_method_id|acd_grade_type_id|name|short_code");
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
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_grade_method_details");
            $relationController->setCoreNodeColname("acd_grade_method_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_grade_method");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_grade_method_details");
            $relationController->setCoreNodeColname("acd_grade_type_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_grade_type");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
