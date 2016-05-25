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
class Modules_Financemanagement_Data_TransactionLogs
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("transaction_logs");
            $registerController->setNodeNameData("transaction_logs");
            $registerController->setDisplayValue("Transaction Logs");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("financemanagement");
            $registerController->setModuleId("financemanagement");
            $registerController->setModuleDisplayId("financemanagement");
            $registerController->setSortValue("6");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("transaction_logs");           
            $registerController->setTablename("transaction_logs");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("transactionno");
            $registerController->setMandotatoryAdd("");
            $registerController->setMandotatoryEdit("");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("student_admission_id");
            $registerController->setHideAdmin("reference_no|student_quota_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|student_admission_id|transaction_reference|fee_concession_type");
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
            $registerController->setSearch("transactionno|feereceiptno|admission_no|name");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("admin|print|view");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("cur_branch_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_orientation");
            $relationController->setDependeeFields("list_branch_id");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("cur_branch_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class");
            $relationController->setDependeeFields("cur_list_academicyear_id|cur_branch_orientation_id");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("cur_branch_class_section_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class_section");
            $relationController->setDependeeFields("cur_branch_class_id");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("student_admission_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_admission");
            $relationController->setDependeeFields("cur_branch_class_section_id");
            $relationController->setSortValue("6");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("transaction_status_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("transaction_status");
            $relationController->setSortValue("7");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("fee_concession_type");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_concession_type");
            $relationController->setSortValue("8");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("transaction_logs_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("transaction_logs_details");
            $relationController->setSortValue("9");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("fee_list_transactiontype_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_transactiontype");
            $relationController->setSortValue("10");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("core_payment_type_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_payment_type");
            $relationController->setSortValue("11");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("transaction_logs");
            $relationController->setCoreNodeColname("student_quota_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_quota");
            $relationController->setSortValue("12");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
