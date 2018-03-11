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
class LibLibraryAssignment extends IndexController
{
    //put your code here
    public function allLibraryBookListApiAction()
    {
        $libraryModel = \CoreClass::getModel("lib_library_assignment");
        $output=$libraryModel->listofBookDetails();
        $this->returnJsonResponse($output);
    }




}
