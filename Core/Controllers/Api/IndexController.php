<?php
namespace Core\Controllers\Api;
use \Core\Controllers\NodeController;
class IndexController extends NodeController
{
    //put your code here
    
    public function indexApiAction()
    {
        $output['status']="error";
        $output['data']="";
        $output['message']="No Request is Found";
        $this->returnJsonResponse($output);
    }
    public function  validateApiCredentials()
    {
        $nodeModel= \CoreClass::getModel("core_app_settings");
        $requestData=$this->_requestedData;
        $nodeModel->addCustomFilterExpression("app_key",\Core::getValueFromArray($requestData, "appkey"));
        $nodeModel->addCustomFilterExpression("app_password",\Core::getValueFromArray($requestData, "apppwd"));
        $nodeModel->getCollection()->getRecord();
        if($nodeModel->_totalRecordsCount>0)
        {
            return $nodeModel->_record;
        }
        return false;    
    }
}