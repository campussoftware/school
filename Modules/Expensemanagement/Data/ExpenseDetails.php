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
class Modules_Expensemanagement_Data_ExpenseDetails
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("expense_details");
            $registerController->setNodeNameData("expense_details");
            $registerController->setDisplayValue("Expense Details");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("expensemanagement");
            $registerController->setModuleId("Eexpensemanagement");
            $registerController->setModuleDisplayId("expensemanagement");
            $registerController->setSortValue("3");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("expense_details");           
            $registerController->setTablename("expense_details");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("expense_code");
            $registerController->setMandotatoryAdd("list_branch_id|expense_type_id|date|amount|remarks|expense_status_id");
            $registerController->setMandotatoryEdit("list_branch_id|expense_type_id|date|amount|remarks|expense_status_id");
            $registerController->setUniquefields("expense_code");
            $registerController->setHideAdd("expense_code");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("expense_status_id");
            $registerController->setReadonlyEdit("expense_code|list_branch_id|expense_type_id|remarks|expense_status_id");
            $registerController->setBoolattributes("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("list_branch_id|expense_type_id|expense_status_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("amount");
            $registerController->setSearch("expense_code|list_branch_id|expense_type_id|date|expense_status_id");
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
            $relationController->setCoreNodeSettingsId("expense_details");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("expense_details");
            $relationController->setCoreNodeColname("expense_type_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("expense_type");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("expense_details");
            $relationController->setCoreNodeColname("expense_status_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("expense_status");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
