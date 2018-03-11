<?php
if (isset($argv)|| (\Core::keyInArray("dev_command_type", $_REQUEST) && \Core::getValueFromArray($_REQUEST, "dev_command_type"))) {
    if(isset($argv))
    {
        $params=$argv;
    }
    else
    {
        $params=\Core::getValuesFromArray($_REQUEST);
    }
    unset($params[0]);
    $cmd = new \Core\Command();
    $cmd->setInputParameters($params);
    $cmd->execute();
} else {
    $reDirectPath = \Core::getValueFromArray($_REQUEST, 'reditectpath');
    if ($reDirectPath != "" && strpos($reDirectPath, ".")) {
        $list = \Core::convertStringToArray($reDirectPath, ".");
        $extension = $list[count($list) - 1];
        if (Core::inArray($extension, array("js", "css", "png", "jpg", "gif", "phtml")) || ($extension == "html" && !strpos($reDirectPath, "html/"))) {
            header("HTTP/1.0 404 File Not Exists");
            exit;
        }
    }

    global $globalnode_settings_details;
    global $nodefiledetails;
    global $currentNode;
    global $currentNodePropertices;
    global $actionRequestFrom;
    try {

        $currentNodePropertices = new \Core\Model\AdminSettings($_REQUEST, $_FILES);        
        if ($currentNodePropertices->_htmlContent == 1) {
            $actionRequestFrom = $currentNodePropertices->_actionSource;
            $pageLayout = new \Core\Pages\PageLayout();
            $pageLayout->loadHtmlTemplate($currentNodePropertices->templatePath);
        }
        $parentNode = $currentNodePropertices->_parentNode;
        $parentValue = $currentNodePropertices->_parentValue;
        $parentAction = $currentNodePropertices->_parentAction;
        $currentNode = $currentNodePropertices->_currentNode;
        $currentAction = $currentNodePropertices->_currentAction;
        $action = $currentAction;
        $currentModule = Core::getValueFromArray($currentNodePropertices->_nodeDetails, 'module');
        $currentModuleDisplay = Core::getValueFromArray($currentNodePropertices->_nodeDetails, 'moduledisplay');
        $currentRootModule = Core::getValueFromArray($currentNodePropertices->_nodeDetails, 'rootmodule');
        $currentSelector = $currentNodePropertices->_currentSelector;
        $methodType = $currentNodePropertices->_methodType;
        $apiMethod = $currentNodePropertices->_isAPI;
        $actionRequestFrom = $currentNodePropertices->_actionSource;
	if($actionRequestFrom=="frontend")
	{
		if($rootObj->isOnAdminInstance)
		{
			\Core::redirectUrl($rootObj->websiteAdminUrl);
		}
	}	
        $childNode = $currentNodePropertices->_childNode;
        $requestedData = $currentNodePropertices->_requestedData;
        $filesData = $currentNodePropertices->_filesData;
        $cc = new \CoreClass();
        $session = $cc->getObject("\Core\Session");
        if ($apiMethod == 1) {
            $apiController = new \Core\Controllers\Api\IndexController($currentNode, $currentAction);
            $apiController->setNodeName($currentNode);
            $apiController->setActionName($action);
            $apiController->setParentNode($parentNode);
            $apiController->setParentValue($parentValue);
            $apiController->setParentAction($parentAction);
            $apiController->setMetaUrlInfo($currentNodePropertices->_metaUrlInfo);
            $apiController->setCurrentSelector($currentSelector);
            $apiController->setRequestedData($requestedData);
            $apiController->setFilesData($filesData);
            $record = $apiController->validateApiCredentials();
            if (!\Core::isArray($record)) {
                $output = array("status" => "error", "message" => "Please Provide Valid Credentials");
                $apiController->returnJsonResponse($output);
            }
        }

        $sessionData = $session->getSessionData();
        $session->setFrontendSessionValue("prevurl", $session->getFrontendSessionValue('currenturl'));
        $session->setFrontendSessionValue("currenturl", Core::getValueFromArray($requestedData, 'reditectpath'));
        $currentProfileCode = Core::getValueFromArray($sessionData, 'profile_id');
        $header = true;
        $navigation = true;
        $footer = true;

        if ($currentAction != "") {
            $action = $currentAction;
        } else {
            if ($actionRequestFrom == 'frontend') {
                $action = "index";
            } else {
                $action = "admin";
            }
        }
        if ($actionRequestFrom == 'frontend') {
            
            $controller = \Core::getDefaultController();
            $frontend = \Core::getValueFromArray($controller, "frontend");
            if (\Core::getValueFromArray($frontend, "node") && !$session->getFrontendSessionValue("targetKey")) {
                $currentNode = \Core::getValueFromArray($frontend, "node");
                $np = new \Core\Model\RameshAbstract();
                $np->setNodeName($currentNode);
                $currentModule = $np->_currentNodeModule;
                $action = \Core::getValueFromArray($frontend, "action");
            }
            if ($_POST) {
                $methodType = "POST";
            }
            $frontController = \CoreClass::getFrontController($currentNode, $currentModule, $action);
            $frontController->setNodeName($currentNode);
            $frontController->setActionName($action);
            $frontController->setParentNode($parentNode);
            $frontController->setParentValue($parentValue);
            $frontController->setParentAction($parentAction);
            $frontController->setMethodType($methodType);
            $frontController->setMetaUrlInfo($currentNodePropertices->_metaUrlInfo);
            $frontController->setMetaUrlDescription($currentNodePropertices->_urlMetaDescription);
            $frontController->setCurrentSelector($currentSelector);
            $frontController->setRequestedData($requestedData);
            $frontController->setFilesData($filesData);
            $functionName = $action . "Action";
            if (method_exists($frontController, $functionName)) {
                $frontController->$functionName();
            } else {
                $frontController->indexAction();
            }
        } else if ($apiMethod == 1) {
            $node = CoreClass::getApiController($currentNode, $currentModule, $action);
            $node->setNodeName($currentNode);
            $node->setAPI($apiMethod);
            $node->setChildNode($childNode);
            $node->setActionName($action);
            $node->setParentNode($parentNode);
            $node->setParentValue($parentValue);
            $node->setParentAction($parentAction);
            $node->setCurrentSelector($currentSelector);
            $node->setMethodType($methodType);
            $node->setRequestedData($requestedData);
            $node->setFilesData($filesData);
            $functionName = $action . "ApiAction";
            if (method_exists($node, $functionName)) {
                $node->$functionName();
            } else {
                $node->indexApiAction();
            }
        } else {

            if ($action == "print" || $action == "export") {
                $header = false;
                $navigation = false;
                $footer = false;
            }
            if ($methodType == "POST" || ($currentProfileCode == "" && $actionRequestFrom == 'admin')) {
                $header = false;
                $navigation = false;
                $footer = false;
            }

            if ($currentNode != "") {
                if ($apiMethod == 1) {
                    $node = CoreClass::getApiController($currentNode, $currentModule, $action);
                } else {
                    $node = CoreClass::getController($currentNode, $currentModule, $action);
                }
                $node->setNodeName($currentNode);
                $node->setAPI($apiMethod);
                $node->setChildNode($childNode);
                $node->setActionName($action);
                $node->setParentNode($parentNode);
                $node->setParentValue($parentValue);
                $node->setParentAction($parentAction);
                $node->setCurrentSelector($currentSelector);
                $node->setMethodType($methodType);
                $node->setRequestedData($requestedData);
                $node->setFilesData($filesData);
                $node->checkSession();
				
                $functionName = $action . "Action";
                if ($apiMethod) {
                    $functionName = $action . "ApiAction";
                }
                if (method_exists($node, $functionName)) {
                    $node->$functionName();
                } else {
                    if ($apiMethod) {
                        $node->indexApiAction();
                    } else if ($methodType == 'REQUEST') {
                        $node->noAction();
                    } else {
                        
                    }
                }
            } else {
                $cc = new \CoreClass();
                $session = $cc->getObject("\Core\Session");
                $session = $session->getSessionMaganager();
                $homeController = $cc->getObject("\Core\Controllers\AdminController");
                $homeController->setNodeName($currentNode);
                $homeController->setActionName($action);
                $homeController->setRequestedData($requestedData);
                $homeController->setFilesData($filesData);
                $functionName = $action . "Action";
                if (method_exists($homeController, $functionName)) {
                    $homeController->$functionName();
                } else {
                    $homeController->indexAction();
                }
            }
        }
    } catch (\Exception $ex) {
        \Core::Log($ex->getMessage());
    }
}