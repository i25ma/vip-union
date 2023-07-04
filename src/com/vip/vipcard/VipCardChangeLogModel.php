<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class VipCardChangeLogModel {
	
	static $_TSPEC;
	public $userId = null;
	public $userVipCardId = null;
	public $changeMoney = null;
	public $vipcardValidMoney = null;
	public $changeFlag = null;
	public $orderSn = null;
	public $fromChannel = null;
	public $clientIp = null;
	public $clientEquipment = null;
	public $adminOperator = null;
	public $traceId = null;
	public $remark = null;
	public $createTime = null;
	public $updateTime = null;
	public $userCheckingId = null;
	public $systemSource = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'userVipCardId'
			),
			3 => array(
			'var' => 'changeMoney'
			),
			4 => array(
			'var' => 'vipcardValidMoney'
			),
			5 => array(
			'var' => 'changeFlag'
			),
			6 => array(
			'var' => 'orderSn'
			),
			7 => array(
			'var' => 'fromChannel'
			),
			8 => array(
			'var' => 'clientIp'
			),
			9 => array(
			'var' => 'clientEquipment'
			),
			10 => array(
			'var' => 'adminOperator'
			),
			11 => array(
			'var' => 'traceId'
			),
			12 => array(
			'var' => 'remark'
			),
			13 => array(
			'var' => 'createTime'
			),
			14 => array(
			'var' => 'updateTime'
			),
			15 => array(
			'var' => 'userCheckingId'
			),
			16 => array(
			'var' => 'systemSource'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['userVipCardId'])){
				
				$this->userVipCardId = $vals['userVipCardId'];
			}
			
			
			if (isset($vals['changeMoney'])){
				
				$this->changeMoney = $vals['changeMoney'];
			}
			
			
			if (isset($vals['vipcardValidMoney'])){
				
				$this->vipcardValidMoney = $vals['vipcardValidMoney'];
			}
			
			
			if (isset($vals['changeFlag'])){
				
				$this->changeFlag = $vals['changeFlag'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['fromChannel'])){
				
				$this->fromChannel = $vals['fromChannel'];
			}
			
			
			if (isset($vals['clientIp'])){
				
				$this->clientIp = $vals['clientIp'];
			}
			
			
			if (isset($vals['clientEquipment'])){
				
				$this->clientEquipment = $vals['clientEquipment'];
			}
			
			
			if (isset($vals['adminOperator'])){
				
				$this->adminOperator = $vals['adminOperator'];
			}
			
			
			if (isset($vals['traceId'])){
				
				$this->traceId = $vals['traceId'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['userCheckingId'])){
				
				$this->userCheckingId = $vals['userCheckingId'];
			}
			
			
			if (isset($vals['systemSource'])){
				
				$this->systemSource = $vals['systemSource'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipCardChangeLogModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("userVipCardId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userVipCardId); 
				
			}
			
			
			
			
			if ("changeMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->changeMoney);
				
			}
			
			
			
			
			if ("vipcardValidMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vipcardValidMoney);
				
			}
			
			
			
			
			if ("changeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->changeFlag); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("fromChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fromChannel);
				
			}
			
			
			
			
			if ("clientIp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clientIp);
				
			}
			
			
			
			
			if ("clientEquipment" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clientEquipment);
				
			}
			
			
			
			
			if ("adminOperator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adminOperator);
				
			}
			
			
			
			
			if ("traceId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->traceId);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("userCheckingId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userCheckingId); 
				
			}
			
			
			
			
			if ("systemSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->systemSource); 
				
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
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userVipCardId !== null) {
			
			$xfer += $output->writeFieldBegin('userVipCardId');
			$xfer += $output->writeI64($this->userVipCardId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->changeMoney !== null) {
			
			$xfer += $output->writeFieldBegin('changeMoney');
			$xfer += $output->writeDouble($this->changeMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipcardValidMoney !== null) {
			
			$xfer += $output->writeFieldBegin('vipcardValidMoney');
			$xfer += $output->writeDouble($this->vipcardValidMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->changeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('changeFlag');
			$xfer += $output->writeI32($this->changeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fromChannel !== null) {
			
			$xfer += $output->writeFieldBegin('fromChannel');
			$xfer += $output->writeString($this->fromChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clientIp !== null) {
			
			$xfer += $output->writeFieldBegin('clientIp');
			$xfer += $output->writeString($this->clientIp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clientEquipment !== null) {
			
			$xfer += $output->writeFieldBegin('clientEquipment');
			$xfer += $output->writeString($this->clientEquipment);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adminOperator !== null) {
			
			$xfer += $output->writeFieldBegin('adminOperator');
			$xfer += $output->writeString($this->adminOperator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->traceId !== null) {
			
			$xfer += $output->writeFieldBegin('traceId');
			$xfer += $output->writeString($this->traceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userCheckingId !== null) {
			
			$xfer += $output->writeFieldBegin('userCheckingId');
			$xfer += $output->writeI64($this->userCheckingId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->systemSource !== null) {
			
			$xfer += $output->writeFieldBegin('systemSource');
			$xfer += $output->writeI32($this->systemSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>