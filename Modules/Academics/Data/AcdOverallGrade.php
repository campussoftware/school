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
class Modules_Academics_Data_AcdOverallGrade
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acd_overall_grade");
            $registerController->setNodeNameData("acd_overall_grade");
            $registerController->setDisplayValue("Overall Performance");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academics");
            $registerController->setModuleDisplayId("academics");
            $registerController->setSortValue("10");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("acd_overall_grade");           
            $registerController->setTablename("acd_overall_grade");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("acd_exam_group_id");
            $registerController->setMandotatoryAdd("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|acd_exam_group_id");
            $registerController->setMandotatoryEdit("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|acd_exam_group_id");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("acd_exam_name_id|cur_list_class_id");
            $registerController->setHideEdit("acd_exam_name_id|cur_list_class_id");
            $registerController->setHideView("acd_exam_name_id|cur_list_class_id");
            $registerController->setHideAdmin("acd_exam_name_id|cur_list_class_id");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|acd_exam_group_id|acd_exam_name_id|cur_list_class_id");
            $registerController->setBoolattributes("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|acd_exam_group_id|acd_exam_name_id|cur_list_class_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|acd_exam_group_id");
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
            $relationController->setCoreNodeSettingsId("acd_overall_grade");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_overall_grade");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_overall_grade");
            $relationController->setCoreNodeColname("cur_branch_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_orientation");
            $relationController->setDependeeFields("list_branch_id");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_overall_grade");
            $relationController->setCoreNodeColname("cur_branch_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class");
            $relationController->setDependeeFields("cur_list_academicyear_id|cur_branch_orientation_id");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_overall_grade");
            $relationController->setCoreNodeColname("acd_exam_group_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_exam_group");
            $relationController->setDependeeFields("cur_branch_class_id");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_overall_grade");
            $relationController->setCoreNodeColname("acd_overall_grade_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("acd_final_marks");
            $relationController->setSortValue("6");
            $relationController->dataSave();
            
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}

