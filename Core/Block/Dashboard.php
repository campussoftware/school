<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Header
 *
 * @author venkatesh
 */
namespace Core\Block;
use \Core\Block\Block;
class Dashboard extends Block
{
    public function getstudentList()
    {
        $nodeModel=\CoreClass::getModel("student_admission");
        $nodeModel->setNodeName('student_admission');
        $nodeModel->getCollection();
        return $nodeModel->_collections;
    }
    public function getstaffList()
    {
        $nodeModel=\CoreClass::getModel("staff_staff_deatils");
        $nodeModel->setNodeName('staff_staff_deatils');
        $nodeModel->getCollection();
        return $nodeModel->_collections;
    }
    public function getcourseList()
    {
        $nodeModel=\CoreClass::getModel("cur_academic_subject");
        $nodeModel->setNodeName('cur_academic_subject');
        $nodeModel->getCollection();
        return $nodeModel->_collections;
    }
    public function getclassList()
    {
        $nodeModel=\CoreClass::getModel("cur_list_class");
        $nodeModel->setNodeName('cur_list_class');
        $nodeModel->getCollection();
        return $nodeModel->_collections;
    }
    public function getEventList()
    {
        $todayDate=date("Y-m-d");
        $nodeModel=\CoreClass::getModel("cms_notification");
        $nodeModel->setNodeName('cms_notification');
        $nodeModel->addCustomFilter("start_date>='".$todayDate."'");
        $nodeModel->addCustomFilter("cms_notification_type_id='EVN'");
        $nodeModel->getCollection();
        return $nodeModel->_collections;
    }
    public function getHolidayList()
    {
        $todayDate=date("Y-m-d");
        $nodeModel=\CoreClass::getModel("cms_notification");
        $nodeModel->setNodeName('cms_notification');
        $nodeModel->addCustomFilter("start_date>='".$todayDate."'");
        $nodeModel->addCustomFilter("cms_notification_type_id='HOD'");
        $nodeModel->getCollection();
        return $nodeModel->_collections;
    }
}
