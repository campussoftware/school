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
class Modules_Academics_Data_AcdExamGroup
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acd_exam_group");
            $registerController->setNodeNameData("acd_exam_group");
            $registerController->setDisplayValue("Exam Group");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academics");
            $registerController->setModuleDisplayId("academics");
            $registerController->setSortValue("5");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("acd_exam_group");           
            $registerController->setTablename("acd_exam_group");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("name");
            $registerController->setMandotatoryAdd("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|name|overall_grade_id");
            $registerController->setMandotatoryEdit("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|name|overall_grade_id");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("cur_report_template_id|is_final");
            $registerController->setHideEdit("cur_report_template_id|is_final");
            $registerController->setHideView("cur_report_template_id");
            $registerController->setHideAdmin("cur_report_template_id");
            $registerController->setReadonlyAdd("is_final");
            $registerController->setReadonlyEdit("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|is_final");
            $registerController->setBoolattributes("is_final");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|name|overall_grade_id|cur_report_template_id|is_final");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("add|admin|delete|edit|final|UNFINAL|view");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_exam_group");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_exam_group");
            $relationController->setCoreNodeColname("cur_list_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_orientation");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_exam_group");
            $relationController->setCoreNodeColname("cur_list_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_class");
            $relationController->setDependeeFields("cur_list_orientation_id");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_exam_group");
            $relationController->setCoreNodeColname("overall_grade_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_grade_method_details");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_exam_group");
            $relationController->setCoreNodeColname("acd_exam_group_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("acd_subgroupexams");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
