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
class Modules_Academics_Data_ListBranch
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("list_branch");
            $registerController->setNodeNameData("list_branch");
            $registerController->setDisplayValue("Branch Details");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("core_organizationsetup");
            $registerController->setModuleId("core_organizationsetup");
            $registerController->setModuleDisplayId("core_organizationsetup");
            $registerController->setSortValue("4");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("list_branch");           
            $registerController->setTablename("list_branch");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("name");
            $registerController->setMandotatoryAdd("core_organization_id|name|short_name|email|phone_no|core_list_location_id|core_country_id|core_list_state_id|core_list_city_id|address2|active_status");
            $registerController->setMandotatoryEdit("core_organization_id|name|short_name|email|phone_no|core_list_location_id|core_country_id|core_list_state_id|core_list_city_id");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("email|phone_no|logo|core_country_id|core_list_state_id|core_list_city_id|address2|zipcode|locationiframe|active_status");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("core_organization_id");
            $registerController->setBoolattributes("active_status");
            $registerController->setFile("logo");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("");
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
            $relationController->setCoreNodeSettingsId("list_branch");
            $relationController->setCoreNodeColname("core_organization_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_organization");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("list_branch");
            $relationController->setCoreNodeColname("core_list_location_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_list_location");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("list_branch");
            $relationController->setCoreNodeColname("core_country_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_country");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("list_branch");
            $relationController->setCoreNodeColname("core_list_state_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_list_state");
            $relationController->setDependeeFields("core_country_id");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("list_branch");
            $relationController->setCoreNodeColname("core_list_city_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_list_city");
            $relationController->setDependeeFields("core_list_state_id");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}