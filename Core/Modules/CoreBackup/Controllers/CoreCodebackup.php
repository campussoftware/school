<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreDbbackfile
 *
 * @author ramesh
 */
namespace Core\Modules\CoreBackup\Controllers;
use \Core\Controllers\NodeController;
class CoreCodebackup extends NodeController
{       
    public function savedbtoseverAction() 
    {
        $requestedData=$this->_requestedData;        
        try
        {  
            
            
            $codeProcess=new \Core\CodeProcess();
			if($this->_requestedData['exporttype']=="UP")
			{
				$folderName="uploads_".strtotime(date('Y-m-d H:i:s'));
				$targetfilepath=\Core::createFolder("","B").$folderName.".zip";	
				$codeProcess->createZipFile(["uploads"], $targetfilepath);				
			}
			else
			{
				$folderName="Code_".strtotime(date('Y-m-d H:i:s'));
				$targetfilepath=\Core::createFolder("","B").$folderName.".zip";	
				$codeProcess->createZipFile(["Core","pages"], $targetfilepath);    
				
			}
          		
            $data=array("core_backup_type_id"=>$this->_requestedData['exporttype'],"filepath"=>$folderName,"dateandtime"=>date('Y-m-d H:i:s'));
            $nodeSave=new \Core\Model\NodeSave();
            $nodeSave->setNode($this->_nodeName);
            foreach ($data as $key=>$value)
            {
                $nodeSave->setData($key,$value);
            }
            $nodeSave->save();           
            
        }
        catch (\Exception $ex)
        {
            \Core::Log(__METHOD__.$ex->getMessage());
        }        
        $output=array();
        $output['status']="success";
        $output['redirecturl']=$this->_websiteAdminUrl."core_backupdetails";            
        echo json_encode($output);
         return true;
    }
}