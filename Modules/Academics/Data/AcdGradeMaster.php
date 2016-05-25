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
class Modules_Academics_Data_AcdGradeMaster
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acd_grade_master");
            $registerController->setNodeNameData("acd_grade_master");
            $registerController->setDisplayValue("Exam Name");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academicsgradesetup");
            $registerController->setModuleDisplayId("academicsgradesetup");
            $registerController->setSortValue("9");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("acd_grade_master");           
            $registerController->setTablename("acd_grade_master");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("acd_grade_method_id");
            $registerController->setMandotatoryAdd("acd_grade_method_id|acd_grade_method_details_id|max|min|grade|gradepoints|remarks");
            $registerController->setMandotatoryEdit("acd_grade_method_id|acd_grade_method_details_id|max|min|grade|gradepoints|remarks");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("acd_grade_method_id|acd_grade_method_details_id");
            $registerController->setBoolattributes("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("acd_grade_method_id|acd_grade_method_details_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("acd_grade_method_id|acd_grade_method_details_id|max|min|grade");
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
            $relationController->setCoreNodeSettingsId("acd_grade_master");
            $relationController->setCoreNodeColname("acd_grade_method_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_grade_method");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_grade_master");
            $relationController->setCoreNodeColname("acd_grade_method_details_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_grade_method_details");
            $relationController->setDependeeFields("acd_grade_method_id");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
