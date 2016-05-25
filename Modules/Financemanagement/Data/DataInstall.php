<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataInstall
 *
 * @author ramesh
 */
class Modules_Financemanagement_Data_DataInstall 
{
    //put your code here
    function __construct() 
    {
        $this->setDataUp();
    }
    protected function setDataUp()
    {
        $nodesArray=array(
            "ModuleCreate"=>"ModuleCreate",
            "FeeListTransactiontype"=>"FeeListTransactiontype",
            "Financefeereceipt"=>"Financefeereceipt",
            "Financeconcession"=>"Financeconcession",
            "TransactionStatus"=>"TransactionStatus",
            "TransactionLogsDetails"=>"TransactionLogsDetails",
            "TransactionLogs"=>"TransactionLogs",
            
            );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Financemanagement_Data_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        } 
        
    }
}
