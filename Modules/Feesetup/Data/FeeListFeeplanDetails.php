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
class Modules_Feesetup_Data_FeeListFeeplanDetails
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("fee_list_feeplan_details");
            $registerController->setNodeNameData("fee_list_feeplan_details");
            $registerController->setDisplayValue("Feeplan Details");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("feesetup");
            $registerController->setModuleId("feeplansetup");
            $registerController->setModuleDisplayId("feeplansetup");
            $registerController->setSortValue("2");
            $registerController->setIcon("");
            $registerController->setMenu("2");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("fee_list_feeplan_details");           
            $registerController->setTablename("fee_list_feeplan_details");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("fee_list_feetype_id");
            $registerController->setMandotatoryAdd("fee_list_feeplan_id|fee_list_feetype_id|fee_list_frequency_id|amount|concession_allowed|max_concession|refund_allowed|max_refund|tax_allowed|tax_master_id|serial_no|active_status");
            $registerController->setMandotatoryEdit("fee_list_feeplan_id|fee_list_feetype_id|fee_list_frequency_id|amount|concession_allowed|max_concession|refund_allowed|max_refund|tax_allowed|tax_master_id|serial_no|active_status");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("max_concession|max_refund|tax_master_id");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("fee_list_feeplan_id|fee_list_feetype_id|fee_list_frequency_id|active_status");
            $registerController->setBoolattributes("concession_allowed|refund_allowed|tax_allowed|active_status");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("tax_master_id");
            $registerController->setSelectbox("fee_list_feeplan_id|fee_list_feetype_id|fee_list_frequency_id");
            $registerController->setMultivalues("tax_master_id");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("amount|max_concession|tax_allowed|serial_no");
            $registerController->setSearch("fee_list_feetype_id|fee_list_frequency_id|concession_allowed|serial_no");
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
            $relationController->setCoreNodeSettingsId("fee_list_feeplan_details");
            $relationController->setCoreNodeColname("fee_list_feeplan_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_feeplan");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("fee_list_feeplan_details");
            $relationController->setCoreNodeColname("fee_list_feetype_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_feetype");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("fee_list_feeplan_details");
            $relationController->setCoreNodeColname("fee_list_frequency_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_frequency");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
