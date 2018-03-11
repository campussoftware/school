<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Navigation
 *
 * @author venkatesh
 */
namespace Modules\Studentmanagement\Block;
use Core\Block\Block;
class Studentdata extends Block
{
    //put your code here
    public function getStudentList()
    {
        $studentModel = \CoreClass::getModel("student_admission");        
        $output=$studentModel->getAllStudentList();
        return $output;
    }
}
