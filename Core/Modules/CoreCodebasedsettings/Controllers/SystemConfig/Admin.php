<?php
namespace Core\Modules\CoreCodebasedsettings\Controllers\SystemConfig;

class Admin extends \Core\Modules\CoreCodebasedsettings\Controllers\SystemConfig{
    //put your code here
    public $currentTab;
    public function getTabsDetails()
    {
        $this->currentTab=$this->_currentSelector;
        $targetFile="system.xml";
        $folderName=\Core::createFolder("","C");
        $filePath=$folderName.$targetFile;
        $content=\Core::getFileContent($filePath);
        $xmlOutput=\Core::processXmlData($content,"//tabgroup");
        $finalTabData=[];
        if(\Core::countArray($xmlOutput)>0)
        {
            foreach ($xmlOutput as $tabData)
            {
                if($this->currentTab=="" && $i=0)
                {
                    $this->currentTab=$tabData['code'];
                }
                $record=["name"=>$tabData['name'],"code"=>$tabData['code']];                
                $finalTabData[]=$record;
            }
        }        
        return $finalTabData;        
    }
    public function getTabContent()
    {
        $this->currentTab=$this->_currentSelector;
        $targetFile="system.xml";
        $folderName=\Core::createFolder("","C");
        $filePath=$folderName.$targetFile;
        $content=\Core::getFileContent($filePath);
        $xmlOutput=\Core::processXmlData($content,'//tab[@parent="'.$this->currentTab.'"]');
        return $xmlOutput;
    }
}
