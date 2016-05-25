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
class Modules_Curriculum_Data_CurBranchClass
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("cur_branch_class");
            $registerController->setNodeNameData("cur_branch_class");
            $registerController->setDisplayValue("Branch Class");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("curriculum");
            $registerController->setModuleId("curriculum");
            $registerController->setModuleDisplayId("curriculum");
            $registerController->setSortValue("7");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("cur_branch_class");           
            $registerController->setTablename("cur_branch_class");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("cur_list_class_id");
            $registerController->setMandotatoryAdd("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_list_class_id|active_status");
            $registerController->setMandotatoryEdit("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_list_class_id");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_list_class_id");
            $registerController->setBoolattributes("active_status");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_list_class_id|active_status");
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
            $relationController->setCoreNodeSettingsId("cur_branch_class");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cur_branch_class");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cur_branch_class");
            $relationController->setCoreNodeColname("cur_list_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_class");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cur_branch_class");
            $relationController->setCoreNodeColname("cur_branch_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_orientation");
            $relationController->setDependeeFields("list_branch_id");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cur_branch_class");
            $relationController->setCoreNodeColname("cur_branch_class_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("cur_branch_class_section");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
