<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class InvitedUserOrderListRequest {
	
	static $_TSPEC;
	public $requestId = null;
	public $invitedUserCode = null;
	public $orderTimeStart = null;
	public $orderTimeEnd = null;
	public $page = null;
	public $pageSize = null;
	public $updateTimeStart = null;
	public $updateTimeEnd = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestId'
			),
			2 => array(
			'var' => 'invitedUserCode'
			),
			3 => array(
			'var' => 'orderTimeStart'
			),
			4 => array(
			'var' => 'orderTimeEnd'
			),
			5 => array(
			'var' => 'page'
			),
			6 => array(
			'var' => 'pageSize'
			),
			7 => array(
			'var' => 'updateTimeStart'
			),
			8 => array(
			'var' => 'updateTimeEnd'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['invitedUserCode'])){
				
				$this->invitedUserCode = $vals['invitedUserCode'];
			}
			
			
			if (isset($vals['orderTimeStart'])){
				
				$this->orderTimeStart = $vals['orderTimeStart'];
			}
			
			
			if (isset($vals['orderTimeEnd'])){
				
				$this->orderTimeEnd = $vals['orderTimeEnd'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['updateTimeStart'])){
				
				$this->updateTimeStart = $vals['updateTimeStart'];
			}
			
			
			if (isset($vals['updateTimeEnd'])){
				
				$this->updateTimeEnd = $vals['updateTimeEnd'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvitedUserOrderListRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("invitedUserCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invitedUserCode);
				
			}
			
			
			
			
			if ("orderTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderTimeStart); 
				
			}
			
			
			
			
			if ("orderTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderTimeEnd); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("updateTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTimeStart); 
				
			}
			
			
			
			
			if ("updateTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTimeEnd); 
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('invitedUserCode');
		$xfer += $output->writeString($this->invitedUserCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('orderTimeStart');
			$xfer += $output->writeI64($this->orderTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('orderTimeEnd');
			$xfer += $output->writeI64($this->orderTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('updateTimeStart');
			$xfer += $output->writeI64($this->updateTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('updateTimeEnd');
			$xfer += $output->writeI64($this->updateTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>