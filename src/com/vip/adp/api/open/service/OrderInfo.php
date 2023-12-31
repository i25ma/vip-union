<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class OrderInfo {
	
	static $_TSPEC;
	public $orderSn = null;
	public $status = null;
	public $newCustomer = null;
	public $channelTag = null;
	public $orderTime = null;
	public $signTime = null;
	public $settledTime = null;
	public $detailList = null;
	public $lastUpdateTime = null;
	public $settled = null;
	public $selfBuy = null;
	public $orderSubStatusName = null;
	public $commission = null;
	public $afterSaleChangeCommission = null;
	public $afterSaleChangeGoodsCount = null;
	public $commissionEnterTime = null;
	public $orderSource = null;
	public $pid = null;
	public $isPrepay = null;
	public $statParam = null;
	public $isSplit = null;
	public $parentSn = null;
	public $orderTrackReason = null;
	public $appKey = null;
	public $totalCost = null;
	public $openId = null;
	public $adCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'newCustomer'
			),
			4 => array(
			'var' => 'channelTag'
			),
			5 => array(
			'var' => 'orderTime'
			),
			6 => array(
			'var' => 'signTime'
			),
			7 => array(
			'var' => 'settledTime'
			),
			8 => array(
			'var' => 'detailList'
			),
			9 => array(
			'var' => 'lastUpdateTime'
			),
			10 => array(
			'var' => 'settled'
			),
			11 => array(
			'var' => 'selfBuy'
			),
			12 => array(
			'var' => 'orderSubStatusName'
			),
			13 => array(
			'var' => 'commission'
			),
			14 => array(
			'var' => 'afterSaleChangeCommission'
			),
			15 => array(
			'var' => 'afterSaleChangeGoodsCount'
			),
			16 => array(
			'var' => 'commissionEnterTime'
			),
			17 => array(
			'var' => 'orderSource'
			),
			18 => array(
			'var' => 'pid'
			),
			19 => array(
			'var' => 'isPrepay'
			),
			20 => array(
			'var' => 'statParam'
			),
			23 => array(
			'var' => 'isSplit'
			),
			24 => array(
			'var' => 'parentSn'
			),
			25 => array(
			'var' => 'orderTrackReason'
			),
			26 => array(
			'var' => 'appKey'
			),
			27 => array(
			'var' => 'totalCost'
			),
			28 => array(
			'var' => 'openId'
			),
			29 => array(
			'var' => 'adCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['newCustomer'])){
				
				$this->newCustomer = $vals['newCustomer'];
			}
			
			
			if (isset($vals['channelTag'])){
				
				$this->channelTag = $vals['channelTag'];
			}
			
			
			if (isset($vals['orderTime'])){
				
				$this->orderTime = $vals['orderTime'];
			}
			
			
			if (isset($vals['signTime'])){
				
				$this->signTime = $vals['signTime'];
			}
			
			
			if (isset($vals['settledTime'])){
				
				$this->settledTime = $vals['settledTime'];
			}
			
			
			if (isset($vals['detailList'])){
				
				$this->detailList = $vals['detailList'];
			}
			
			
			if (isset($vals['lastUpdateTime'])){
				
				$this->lastUpdateTime = $vals['lastUpdateTime'];
			}
			
			
			if (isset($vals['settled'])){
				
				$this->settled = $vals['settled'];
			}
			
			
			if (isset($vals['selfBuy'])){
				
				$this->selfBuy = $vals['selfBuy'];
			}
			
			
			if (isset($vals['orderSubStatusName'])){
				
				$this->orderSubStatusName = $vals['orderSubStatusName'];
			}
			
			
			if (isset($vals['commission'])){
				
				$this->commission = $vals['commission'];
			}
			
			
			if (isset($vals['afterSaleChangeCommission'])){
				
				$this->afterSaleChangeCommission = $vals['afterSaleChangeCommission'];
			}
			
			
			if (isset($vals['afterSaleChangeGoodsCount'])){
				
				$this->afterSaleChangeGoodsCount = $vals['afterSaleChangeGoodsCount'];
			}
			
			
			if (isset($vals['commissionEnterTime'])){
				
				$this->commissionEnterTime = $vals['commissionEnterTime'];
			}
			
			
			if (isset($vals['orderSource'])){
				
				$this->orderSource = $vals['orderSource'];
			}
			
			
			if (isset($vals['pid'])){
				
				$this->pid = $vals['pid'];
			}
			
			
			if (isset($vals['isPrepay'])){
				
				$this->isPrepay = $vals['isPrepay'];
			}
			
			
			if (isset($vals['statParam'])){
				
				$this->statParam = $vals['statParam'];
			}
			
			
			if (isset($vals['isSplit'])){
				
				$this->isSplit = $vals['isSplit'];
			}
			
			
			if (isset($vals['parentSn'])){
				
				$this->parentSn = $vals['parentSn'];
			}
			
			
			if (isset($vals['orderTrackReason'])){
				
				$this->orderTrackReason = $vals['orderTrackReason'];
			}
			
			
			if (isset($vals['appKey'])){
				
				$this->appKey = $vals['appKey'];
			}
			
			
			if (isset($vals['totalCost'])){
				
				$this->totalCost = $vals['totalCost'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['adCode'])){
				
				$this->adCode = $vals['adCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->status); 
				
			}
			
			
			
			
			if ("newCustomer" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->newCustomer); 
				
			}
			
			
			
			
			if ("channelTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelTag);
				
			}
			
			
			
			
			if ("orderTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderTime); 
				
			}
			
			
			
			
			if ("signTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signTime); 
				
			}
			
			
			
			
			if ("settledTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->settledTime); 
				
			}
			
			
			
			
			if ("detailList" == $schemeField){
				
				$needSkip = false;
				
				$this->detailList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\adp\api\open\service\OrderDetailInfo();
						$elem0->read($input);
						
						$this->detailList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("lastUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdateTime); 
				
			}
			
			
			
			
			if ("settled" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->settled); 
				
			}
			
			
			
			
			if ("selfBuy" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->selfBuy); 
				
			}
			
			
			
			
			if ("orderSubStatusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSubStatusName);
				
			}
			
			
			
			
			if ("commission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission);
				
			}
			
			
			
			
			if ("afterSaleChangeCommission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->afterSaleChangeCommission);
				
			}
			
			
			
			
			if ("afterSaleChangeGoodsCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->afterSaleChangeGoodsCount); 
				
			}
			
			
			
			
			if ("commissionEnterTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->commissionEnterTime); 
				
			}
			
			
			
			
			if ("orderSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSource);
				
			}
			
			
			
			
			if ("pid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pid);
				
			}
			
			
			
			
			if ("isPrepay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPrepay); 
				
			}
			
			
			
			
			if ("statParam" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statParam);
				
			}
			
			
			
			
			if ("isSplit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isSplit); 
				
			}
			
			
			
			
			if ("parentSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentSn);
				
			}
			
			
			
			
			if ("orderTrackReason" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderTrackReason); 
				
			}
			
			
			
			
			if ("appKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appKey);
				
			}
			
			
			
			
			if ("totalCost" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totalCost);
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("adCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adCode);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI16($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCustomer !== null) {
			
			$xfer += $output->writeFieldBegin('newCustomer');
			$xfer += $output->writeI16($this->newCustomer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelTag !== null) {
			
			$xfer += $output->writeFieldBegin('channelTag');
			$xfer += $output->writeString($this->channelTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderTime');
			$xfer += $output->writeI64($this->orderTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTime !== null) {
			
			$xfer += $output->writeFieldBegin('signTime');
			$xfer += $output->writeI64($this->signTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settledTime !== null) {
			
			$xfer += $output->writeFieldBegin('settledTime');
			$xfer += $output->writeI64($this->settledTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailList !== null) {
			
			$xfer += $output->writeFieldBegin('detailList');
			
			if (!is_array($this->detailList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detailList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdateTime');
			$xfer += $output->writeI64($this->lastUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settled !== null) {
			
			$xfer += $output->writeFieldBegin('settled');
			$xfer += $output->writeI16($this->settled);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->selfBuy !== null) {
			
			$xfer += $output->writeFieldBegin('selfBuy');
			$xfer += $output->writeI32($this->selfBuy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSubStatusName !== null) {
			
			$xfer += $output->writeFieldBegin('orderSubStatusName');
			$xfer += $output->writeString($this->orderSubStatusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission !== null) {
			
			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleChangeCommission !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleChangeCommission');
			$xfer += $output->writeString($this->afterSaleChangeCommission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleChangeGoodsCount !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleChangeGoodsCount');
			$xfer += $output->writeI32($this->afterSaleChangeGoodsCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionEnterTime !== null) {
			
			$xfer += $output->writeFieldBegin('commissionEnterTime');
			$xfer += $output->writeI64($this->commissionEnterTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSource !== null) {
			
			$xfer += $output->writeFieldBegin('orderSource');
			$xfer += $output->writeString($this->orderSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pid !== null) {
			
			$xfer += $output->writeFieldBegin('pid');
			$xfer += $output->writeString($this->pid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPrepay !== null) {
			
			$xfer += $output->writeFieldBegin('isPrepay');
			$xfer += $output->writeI32($this->isPrepay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statParam !== null) {
			
			$xfer += $output->writeFieldBegin('statParam');
			$xfer += $output->writeString($this->statParam);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSplit !== null) {
			
			$xfer += $output->writeFieldBegin('isSplit');
			$xfer += $output->writeI32($this->isSplit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentSn !== null) {
			
			$xfer += $output->writeFieldBegin('parentSn');
			$xfer += $output->writeString($this->parentSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTrackReason !== null) {
			
			$xfer += $output->writeFieldBegin('orderTrackReason');
			$xfer += $output->writeI32($this->orderTrackReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appKey !== null) {
			
			$xfer += $output->writeFieldBegin('appKey');
			$xfer += $output->writeString($this->appKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalCost !== null) {
			
			$xfer += $output->writeFieldBegin('totalCost');
			$xfer += $output->writeString($this->totalCost);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adCode !== null) {
			
			$xfer += $output->writeFieldBegin('adCode');
			$xfer += $output->writeString($this->adCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>