<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core\Modules\CoreDevelopmentsettings\Models;

/**
 * Description of CoreCornSchedule
 *
 * @author designer
 */
use Core\Model\Node;
class CoreCronSchedule extends Node
{
    //put your code here
    public function executeCronJob()
    {
        $currentTime=date('Y-m-d H:i:s');
        $cronModel = \CoreClass::getModel("core_cron_schedule");
        $cronModel->addCustomFilterExpression("status",array("in"=>["pending","error","success"]));
        $cronModel->addCustomFilter("is_active='1'");
        $cronModel->addCustomFilter("start_time<'".$currentTime."'");
        $cronModel->addCustomFilter("( core_cron_schedule.next_run_time<'".$currentTime."' || core_cron_schedule.next_run_time is NULL )");
        $records=$cronModel->getCollection()->_collections; 
        
        if(count($records)>0)
        {
            foreach ($records as $record)
            {
                
                $modelClass= "\\".str_replace("_", "\\", $record['modal']);
                $methodName=$record['method'];
                $targetModelClass= \CoreClass::getObject($modelClass); 
                if(strtotime($record['last_run_time'])<strtotime($record['start_time']))
                {
                    $targetModelClass->setLastRunTime($record['start_time']);
                }
                else
                {
                    $targetModelClass->setLastRunTime($record['last_run_time']);
                }
                $targetModelClass->setCurrentRunTime($currentTime);
                $status="success";
                try
                {
                    $response=$targetModelClass->$methodName();
                    $status=$response['status'];
                    $message=$response['message'];
                }
                catch (\Exception $ex)
                {
                    $status="error";
                    $message=$ex->getMessage();
                }             
                $controller = \CoreClass::getController("core_cron_schedule");
                $controller->setNodeName('core_cron_schedule');
                
                $data=$record;
                $data["status"]=$status;
                $data["message"]=$message;
                $data["heatbet_time"]=$currentTime;
                if($status=="success")
                {
                    $data["last_run_time"]=$currentTime;
                    $data["next_run_time"]=$this->getNextRunTime($record['schedule_type'],$record['schedule_interval'],$currentTime);
                }
                $controller->setRequestedData($data);
                $controller->setActionName('edit');
                $controller->setMethodType('post');
                $controller->setScriptAction();
                $controller->editAction();                 
            }
        }         
        
    }
    public function getNextRunTime($scheduleType,$interval,$currentTime)
    {
        $datetime= strtotime($currentTime);
        switch ($scheduleType)
        {
            case "M":
                    $datetime+=$interval*60;
                    break;
            case "D":
                    $datetime+=$interval*24*60;
                    break;
            case "MT":
                    $datetime+=$interval*30*24*60;
                    break;
            case "Y":
                    $datetime+=$interval*365*30*24*60;
                    break;
            default :
                break;
        }
        return date('Y-m-d H:i:s',$datetime);
    }
}
