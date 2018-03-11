<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of CoreBackupType * * @author ramesh */namespace Modules\Librarymanagement\Setup;class LibraryAssignment{    //put your code here    function execute() {        $cc = new \CoreClass();        $setup=$cc->getObject("\Core\DataBase\Setup");        $setup->setTable("lib_library_assignment");        if (!$setup->tableExists($setup->getTable())) {            $setup->setDisplayValue("Book Assignment");            $setup->addColumnName(array(                "name" => "id",                "displayValue" => "Library Assignment Id",                "primary" => 1,                "default" => NULL,                "type" => "int",                "size" => "15",                "auto_increment" => 1,            ));            $setup->addColumnName(array(                "name" => "lib_library_deatils_id",                "displayValue" => "Library Details Id",                "default" => NULL,                "type" => "int",                "size" => "11"            ));            $setup->addColumnName(array(                "name" => "lib_book_deatils_id",                "displayValue" => "Book Id",                "default" => NULL,                "type" => "int",                "size" => "11"            ));            $setup->addColumnName(array(                "name" => "issued_date",                "displayValue" => "Issued Date",                "default" => NULL,                "type" => "date",                    //"size"=>"11"            ));            $setup->addColumnName(array(                "name" => "reference_id",                "displayValue" => "Reference Id",                "default" => NULL,                "type" => "int",                "size" => "11"            ));            $setup->addColumnName(array(                "name" => "reference_code",                "displayValue" => "Reference Code",                "default" => NULL,                "type" => "varchar",                "size" => "255"            ));            $setup->addColumnName(array(                "name" => "createdby",                "displayValue" => "Created Id",                "default" => NULL,                "type" => "int",                "size" => "11"            ));            $setup->addColumnName(array(                "name" => "createdat",                "displayValue" => "Created Datetime",                "default" => NULL,                "type" => "datetime"            ));            $setup->addColumnName(array(                "name" => "updatedby",                "displayValue" => "Updated Id",                "default" => NULL,                "type" => "int",                "size" => "11"            ));            $setup->addColumnName(array(                "name" => "updatedat",                "displayValue" => "Updated Datetime",                "default" => NULL,                "type" => "datetime"            ));            $setup->create();        }    }}