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
class Modules_Contentmanagementsystem_Data_CmsNotification
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("cms_notification");
            $registerController->setNodeNameData("cms_notification");
            $registerController->setDisplayValue("Notification");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("notificationmanagement");
            $registerController->setModuleId("contentmanagementsystem");
            $registerController->setModuleDisplayId("contentmanagementsystem");
            $registerController->setSortValue("1");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("cms_notification");           
            $registerController->setTablename("cms_notification");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("notification_code");
            $registerController->setMandotatoryAdd("cms_notification_type_id|cur_list_academicyear_id|title|description");
            $registerController->setMandotatoryEdit("cms_notification_type_id|cur_list_academicyear_id|title|description");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("notification_code");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("notification_code|cms_notification_type_id|cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|student_admission_id");
            $registerController->setBoolattributes("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("cms_notification_type_id|cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|student_admission_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("notification_code");
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
            $relationController->setCoreNodeSettingsId("cms_notification");
            $relationController->setCoreNodeColname("cms_notification_type_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cms_notification_type");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cms_notification");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cms_notification");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cms_notification");
            $relationController->setCoreNodeColname("cur_branch_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_orientation");
            $relationController->setDependeeFields("list_branch_id");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cms_notification");
            $relationController->setCoreNodeColname("cur_branch_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class");
            $relationController->setDependeeFields("cur_list_academicyear_id|cur_branch_orientation_id");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cms_notification");
            $relationController->setCoreNodeColname("cur_branch_class_section_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class_section");
            $relationController->setDependeeFields("cur_branch_class_id");
            $relationController->setSortValue("6");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cms_notification");
            $relationController->setCoreNodeColname("student_admission_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_history");
            $relationController->setDependeeFields("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id");
            $relationController->setSortValue("7");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cms_notification");
            $relationController->setCoreNodeColname("cms_notification_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("cms_notification_comments");
            $relationController->setSortValue("8");
            $relationController->dataSave();
            
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
