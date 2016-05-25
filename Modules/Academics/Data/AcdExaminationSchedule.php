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
class Modules_Academics_Data_AcdExaminationSchedule
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acd_examination_schedule");
            $registerController->setNodeNameData("acd_examination_schedule");
            $registerController->setDisplayValue("Examination Shedule");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academics");
            $registerController->setModuleDisplayId("academics");
            $registerController->setSortValue("1");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("acd_examination_schedule");           
            $registerController->setTablename("acd_examination_schedule");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("name");
            $registerController->setMandotatoryAdd("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|acd_modeofexam_id|acd_exam_name_id|name|active_status");
            $registerController->setMandotatoryEdit("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|acd_modeofexam_id|acd_exam_name_id|name|active_status");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("is_final");
            $registerController->setReadonlyEdit("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|acd_modeofexam_id|acd_exam_name_id|is_final|active_status");
            $registerController->setBoolattributes("is_final|active_status");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|acd_modeofexam_id|acd_exam_name_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("cur_list_academicyear_id|cur_list_orientation_id|cur_list_class_id|acd_modeofexam_id|acd_exam_name_id");
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
            $relationController->setCoreNodeSettingsId("acd_examination_schedule");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_examination_schedule");
            $relationController->setCoreNodeColname("cur_list_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_orientation");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
                       
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_examination_schedule");
            $relationController->setCoreNodeColname("cur_list_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_class");
            $relationController->setDependeeFields("cur_list_orientation_id");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_examination_schedule");
            $relationController->setCoreNodeColname("acd_modeofexam_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_modeofexam");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_examination_schedule");
            $relationController->setCoreNodeColname("acd_exam_name_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_exam_name");
            $relationController->setDependeeFields("acd_modeofexam_id");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_examination_schedule");
            $relationController->setCoreNodeColname("acd_examination_schedule_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("acd_examination_schedule_details");
            $relationController->setSortValue("6");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
