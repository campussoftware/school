<?php
namespace Core\Sms;
class SendSms 
{
    protected $_mobileNumbers=array();
    protected $_message=NULL;
    protected $_smsSettings=array();
    function __construct() 
    {
        $smsSettings=\CoreClass::getModel("core_sms_settings");
        $smsSettings->addCustomFilter("active_status='1'");
        $smsSettings->getCollection();

        if (\Core::countArray($smsSettings->_collections) > 0) {
            foreach ($smsSettings->_collections as $collection) {
                $this->_smsSettings = $collection;
            }
        };
    }

    public function setMobileNumber($mobileNumbers) {
        if (!\Core::isArray($mobileNumbers)) {
            $mobileNumbers = array($mobileNumbers);
        }
        $this->_mobileNumbers = array_merge($this->_mobileNumbers, $mobileNumbers);
    }

    public function setMessage($message) {
        $this->_message = ($message);
    }

    public function setMemberId($memberId) {
        $this->_memberId = $memberId;
    }
    
    public function setIsAutogenerate($isAutogenerate) {
        $this->_isAutogenerate = $isAutogenerate;
    }
    
    public function setOrganizationId($organizationId) { 
        $this->_organizationId = $organizationId;
    }

    public function sendSms() {
        try {
            $nodeSave = new \Core\Model\NodeSave();
            $nodeSave->setNode("core_sms_log");
            $nodeSave->setData("mobile_no", \Core::convertArrayToString($this->_mobileNumbers, ','));
            $nodeSave->setData("sms_status", 'Sent');
            $nodeSave->setData("senderid", $this->_smsSettings['senderid']);
            $nodeSave->setData("date", \Core::getDate());
            $nodeSave->setData("text", $this->_message);
            $nodeSave->save();
            
            /*$curl = new \Core\CurlCall();
            $curl->setUrl($this->_smsSettings['gateway']);
            $curl->setReturnTransfer(true);
            $curl->setCustomMethod("GET");
            $curl->setPostData("username", $this->_smsSettings['username']);
            $curl->setPostData("pass", $this->_smsSettings['password']);
            $curl->setPostData("route", $this->_smsSettings['route']);
            $curl->setPostData("senderid", $this->_smsSettings['senderid']);
            $curl->setPostData("numbers", \Core::convertArrayToString($this->_mobileNumbers, ','));
            $curl->setOutputType("Text");
            $curl->setPostData("message", $this->_message);
            $response = $curl->callCurl();*/

            $curl = new \Core\CurlCall();
            $curl->setUrl($this->_smsSettings['gateway']);
            $curl->setReturnTransfer(true);
            //$curl->setCustomMethod("GET");
            $curl->setPostData("user", $this->_smsSettings['username']);
            $curl->setPostData("pass", $this->_smsSettings['password']);
            $curl->setPostData("route", $this->_smsSettings['route']);
            $curl->setPostData("senderid", $this->_smsSettings['senderid']);
            $curl->setPostData("list", \Core::convertArrayToString($this->_mobileNumbers, ','));
            $curl->setPostData("msg", $this->_message);
            $response = $curl->callCurl();

            $nodeSave->setData("id", $nodeSave->getId());
            $nodeSave->setData("smstrackerid", trim(strip_tags($response)));
            $nodeSave->save();
            
            $this->updateSmsHistory();
            if($this->_isAutogenerate==""){
                $this->updateSmsCount();       
            }
        } catch (Exception $ex) {
            \Core::Log($ex->getMessage());
        }
        return true;
    }
    
    public function updateSmsHistory(){
        $session = new \Core\Session();
        $sessionData = $session->getFrontendSession();        
        $nodeSave = new \Core\Model\NodeSave();
        $nodeSave->setNode("smshistory");
        if($this->_isAutogenerate!=""){
            $nodeSave->setData("is_autogenerate", $this->_isAutogenerate);
        }
        if($this->_isAutogenerate==""){
            if($this->_memberId ==""){
                $customerSession = new \Modules\Session\MemberSession();
                $memberid = $customerSession->getMemberSession()->getMemberId();
            }else{
                $memberid = $this->_memberId;
            }
            $nodeSave->setData("member_id", $memberid);
            $nodeSave->setData("is_autogenerate", 0);
        }
        $nodeSave->setData("mobile", \Core::convertArrayToString($this->_mobileNumbers, ','));
        $nodeSave->setData("message", $this->_message);
        $nodeSave->setData("ipaddress", \Core::getValueFromArray($sessionData, "ipaddress"));        
       $output =  $nodeSave->save(); 
return $output;
    }
    
    
    public function updateSmsCount(){
        $customerSession = new \Modules\Session\MemberSession();
        if($this->_organizationId==""){
            $this->_organizationId = $customerSession->getMemberSession()->getOrganizationId();
        } 
        $totalsms = $customerSession->getMemberSession()->getOrganizationTotalSms($this->_organizationId);
        $totalsms =  $totalsms - \Core::countArray($this->_mobileNumbers);                       
        $nodeSave = new \Core\Model\NodeSave();
        $nodeSave->setNode("memberorganization");
        $nodeSave->setData("ld_member_org_id", $this->_organizationId);
        $nodeSave->setData("total_sms", $totalsms);
         $output = $nodeSave->save(); 
return $output;
    }

}
