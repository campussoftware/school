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
class Modules_Academics_Data_AcdFinalMarks
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acd_final_marks");
            $registerController->setNodeNameData("acd_final_marks");
            $registerController->setDisplayValue("Final Marks");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academics");
            $registerController->setModuleDisplayId("academics");
            $registerController->setSortValue("11");
            $registerController->setIcon("");
            $registerController->setMenu("2");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("acd_final_marks");           
            $registerController->setTablename("acd_final_marks");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("admission_no");
            $registerController->setMandotatoryAdd("");
            $registerController->setMandotatoryEdit("");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("acd_exam_group_id|cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id");
            $registerController->setHideView("");
            $registerController->setHideAdmin("acd_exam_group_id|cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id");
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
            $registerController->setSearch("");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("admission_no|name|cur_attendance_status_id");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("add|admin|delete|edit|view");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_final_marks");
            $relationController->setCoreNodeColname("acd_overall_grade_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_overall_grade");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_final_marks");
            $relationController->setCoreNodeColname("cur_attendance_status_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_attendance_status");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_final_marks");
            $relationController->setCoreNodeColname("cur_branch_class_section_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class_section");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
