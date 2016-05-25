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
class Modules_Feesetup_Data_FeeListFeetype
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("fee_list_feetype");
            $registerController->setNodeNameData("fee_list_feetype");
            $registerController->setDisplayValue("Fee Type");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("feesetup");
            $registerController->setModuleId("feesettings");
            $registerController->setModuleDisplayId("feesettings");
            $registerController->setSortValue("2");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("fee_list_feetype");           
            $registerController->setTablename("fee_list_feetype");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("short_code");
            $registerController->setDescriptorkey("name");
            $registerController->setMandotatoryAdd("name|short_code|fee_list_feegroup_id|active_status");
            $registerController->setMandotatoryEdit("name|short_code|fee_list_feegroup_id|active_status");
            $registerController->setUniquefields("name|short_code");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("short_code|fee_list_feegroup_id");
            $registerController->setBoolattributes("active_status");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("fee_list_feegroup_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("name|short_code|fee_list_feegroup_id|active_status");
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
            $relationController->setCoreNodeSettingsId("fee_list_feetype");
            $relationController->setCoreNodeColname("fee_list_feegroup_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_feegroup");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
