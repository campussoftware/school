<?php

namespace Core\Cache;
class LayoutRefresh {    
    function refreshLayout($filepath,$targetFile)
    {
        $cp=new \Core\CodeProcess();        
        $fileList=$cp->searchFiles($filepath);
        $folderName=\Core::createFolder("","C");
        \Core::joinXML($fileList,$folderName.$targetFile); 
    }
}
