<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SchemaInstall
 *
 * @author ramesh
 */
class Modules_Financemanagement_Setup_SchemaInstall
{
    //put your code here
    function __construct() 
    {
        $this->setUp();
    }
    protected function setUp()
    {
        $nodesArray=array(
            "FeeListTransactiontype"=>"FeeListTransactiontype",
            "TransactionStatus"=>"TransactionStatus",
            "TransactionLogsDetails"=>"TransactionLogsDetails",
            "TransactionLogs"=>"TransactionLogs",
        );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Financemanagement_Setup_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        }               
    }
}
