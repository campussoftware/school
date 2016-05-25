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
class Modules_Studentmanagement_Data_StudentHistory
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("student_history");
            $registerController->setNodeNameData("student_history");
            $registerController->setDisplayValue("Student History");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("studentmanagement");
            $registerController->setModuleId("studentmanagement");
            $registerController->setModuleDisplayId("studentmanagement");
            $registerController->setSortValue("2");
            $registerController->setIcon("");
            $registerController->setMenu("0");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("student_history");           
            $registerController->setTablename("student_history");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("admission_no");
            $registerController->setMandotatoryAdd("");
            $registerController->setMandotatoryEdit("");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("cur_list_class_id");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("");
            $registerController->setBoolattributes("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("fee_list_feegroup_id|cur_list_academicyear_id");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("admin|view");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("student_admission_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_admission");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("fee_list_feegroup_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_feegroup");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("student_quota_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_quota");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("cur_branch_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_orientation");
            $relationController->setSortValue("6");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("cur_branch_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class");
            $relationController->setSortValue("7");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("cur_branch_class_section_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class_section");
            $relationController->setSortValue("8");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("cur_list_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_class");
            $relationController->setSortValue("9");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("student_status_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_status");
            $relationController->setSortValue("10");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("fee_list_feeplan_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_feeplan");
            $relationController->setSortValue("11");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_history");
            $relationController->setCoreNodeColname("student_action_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_action");
            $relationController->setSortValue("12");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}