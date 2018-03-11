<?php

class Core_CurlCall 
{
    public $_url=NULL;
    public $_postData="";
    public $_returnTransfer=true;
    public $_header=array();
    public $_postFieldCount=0;
    public $_customMethod="POST";
    public $_sslVerifier=false;
    public $_timeout=30;
    public $_response;
    public $_status;
    public $_curlInfo;
    
    public function resetProperties()
    {
        $this->_url=NULL;
        $this->_postData="";
        $this->_returnTransfer=false;
        $this->_header=array();
        $this->_postFieldCount=0;
        $this->_customMethod="POST";
        $this->_sslVerifier=false;
        $this->_timeout=30;
    }
    public function setUrl($url)
    {
        $this->resetProperties();
        $this->_url=$url;           
        $this->setPostData("appkey","Ramesh");
        $this->setPostData("apppwd","Ramesh");
    }
    public function setPostData($variableName,$value)
    {
        $this->_postData.="&".$variableName."=".$value;
        $this->_postFieldCount=1;
    }
    public function setSslVerifier($flag)
    {
        $this->_sslVerifier=$flag;
    }
    public function setTimeOut($timeInSeconds)
    {
        $this->_timeout=$timeInSeconds;
    }
    public function setCustomMethod($methodName)
    {
        $this->_customMethod=$methodName;
    }
    public function setheaders($headers)
    {
        $this->_header=array_merge($this->_header,$headers);
    }
    public function setReturnTransfer($flag)
    {
        $this->_returnTransfer=$flag;
    }
    public function callCurl()
    {
        $this->setPostData("appkey", "Ramesh");
        $this->setPostData("apppwd", "Ramesh");
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,$this->_url); 
        if(count($this->_header)>0)
        {
            
            curl_setopt($curl,CURLOPT_HTTPHEADER,$this->_header); 
        }
        curl_setopt($curl,CURLOPT_HEADER,false); 
        curl_setopt($curl,CURLOPT_TIMEOUT,$this->_timeout); 
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,$this->_returnTransfer); 
        if($this->_customMethod)
        {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST,$this->_customMethod);
        }
        else 
        {
            if($this->_postFieldCount>0)
            {
                curl_setopt($curl,CURLOPT_POST,true); 
            }            
        }
        if($this->_postFieldCount>0)
        {
            curl_setopt($curl,CURLOPT_POSTFIELDS,$this->_postData);
        }
        curl_setopt($curl, CURLOPT_VERBOSE, 0);   
        $this->_response = curl_exec($curl); 
        $this->_status = curl_getinfo($curl,CURLINFO_HTTP_CODE); 
        $this->_curlInfo=curl_getinfo($curl);
        curl_close($curl); 
        return $this->_response;
        
    }    
    
}