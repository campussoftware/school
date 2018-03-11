<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentAdmission
 *
 * @author venkatesh
 */
namespace Modules\Librarymanagement\Controllers\Api;
use \Core\Controllers\Api\IndexController;
class LibBookAssignment extends IndexController
{
    //put your code here
    public function getstudntsIssgnedBooksApiAction()
    {

        $requestedData = $this->getRequestedData();
        $libraryModel = \CoreClass::getModel("lib_book_assignment");
        $libraryModel->setStudentId(\Core::getValueFromArray($requestedData, "studentId"));
        $output=$libraryModel->studentIssgnedBookDetails();
        $this->returnJsonResponse($output);
    }




}
