<?php
namespace Core\Controllers\Api;
use \Core\Controllers\NodeController;
class IndexController extends NodeController
{
    //put your code here

    public function indexApiAction() {
        $output['status'] = "error";
        $output['data'] = "";
        $output['message'] = "No Method is Found";
        $this->returnJsonResponse($output);
    }

    public function validateApiCredentials() {
        $headers = array();
        foreach ($_SERVER as $key => $value) {
            if (strpos($key, 'HTTP_') === 0) {
                $headers[str_replace(' ', '', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))))] = $value;
            }
        }
        $nodeModel = \CoreClass::getModel("core_app_settings");
        $requestData = $this->_requestedData;
        $nodeModel->addCustomFilterExpression("app_key", \Core::getValueFromArray($headers, "Appkey"));
        $nodeModel->addCustomFilterExpression("app_password", \Core::getValueFromArray($headers, "Apppwd"));
        $nodeModel->getCollection()->getRecord();
        $session = new \Core\Session();
        if ($nodeModel->_totalRecordsCount > 0) {
            $user = \CoreClass::getModel("core_users");
            $user->loadByField(\Core::getValueFromArray($nodeModel->_record, "core_user_id"), "id");
            $session->setApiSessionValue("user", $user->_record);
            $session->setApiSessionValue("profile_id", \Core::getValueFromArray($user->_record, "core_profile_id"));
            return $user->_record;
        }
        return false;
    }
}