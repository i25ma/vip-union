<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class QueryGoodsRequest {
	
	static $_TSPEC;
	public $keyword = null;
	public $fieldName = null;
	public $order = null;
	public $page = null;
	public $pageSize = null;
	public $requestId = null;
	public $priceStart = null;
	public $priceEnd = null;
	public $queryReputation = null;
	public $queryStoreServiceCapability = null;
	public $queryStock = null;
	public $queryActivity = null;
	public $queryPrepay = null;
	public $commonParams = null;
	public $vendorCode = null;
	public $chanTag = null;
	public $queryExclusiveCoupon = null;
	public $queryCpsInfo = null;
	public $mobile = null;
	public $research = null;
	public $queryFuturePrice = null;
	public $openId = null;
	public $realCall = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'keyword'
			),
			2 => array(
			'var' => 'fieldName'
			),
			3 => array(
			'var' => 'order'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'pageSize'
			),
			6 => array(
			'var' => 'requestId'
			),
			7 => array(
			'var' => 'priceStart'
			),
			8 => array(
			'var' => 'priceEnd'
			),
			9 => array(
			'var' => 'queryReputation'
			),
			10 => array(
			'var' => 'queryStoreServiceCapability'
			),
			11 => array(
			'var' => 'queryStock'
			),
			12 => array(
			'var' => 'queryActivity'
			),
			13 => array(
			'var' => 'queryPrepay'
			),
			14 => array(
			'var' => 'commonParams'
			),
			15 => array(
			'var' => 'vendorCode'
			),
			16 => array(
			'var' => 'chanTag'
			),
			17 => array(
			'var' => 'queryExclusiveCoupon'
			),
			18 => array(
			'var' => 'queryCpsInfo'
			),
			19 => array(
			'var' => 'mobile'
			),
			20 => array(
			'var' => 'research'
			),
			21 => array(
			'var' => 'queryFuturePrice'
			),
			22 => array(
			'var' => 'openId'
			),
			23 => array(
			'var' => 'realCall'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['keyword'])){
				
				$this->keyword = $vals['keyword'];
			}
			
			
			if (isset($vals['fieldName'])){
				
				$this->fieldName = $vals['fieldName'];
			}
			
			
			if (isset($vals['order'])){
				
				$this->order = $vals['order'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['priceStart'])){
				
				$this->priceStart = $vals['priceStart'];
			}
			
			
			if (isset($vals['priceEnd'])){
				
				$this->priceEnd = $vals['priceEnd'];
			}
			
			
			if (isset($vals['queryReputation'])){
				
				$this->queryReputation = $vals['queryReputation'];
			}
			
			
			if (isset($vals['queryStoreServiceCapability'])){
				
				$this->queryStoreServiceCapability = $vals['queryStoreServiceCapability'];
			}
			
			
			if (isset($vals['queryStock'])){
				
				$this->queryStock = $vals['queryStock'];
			}
			
			
			if (isset($vals['queryActivity'])){
				
				$this->queryActivity = $vals['queryActivity'];
			}
			
			
			if (isset($vals['queryPrepay'])){
				
				$this->queryPrepay = $vals['queryPrepay'];
			}
			
			
			if (isset($vals['commonParams'])){
				
				$this->commonParams = $vals['commonParams'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['chanTag'])){
				
				$this->chanTag = $vals['chanTag'];
			}
			
			
			if (isset($vals['queryExclusiveCoupon'])){
				
				$this->queryExclusiveCoupon = $vals['queryExclusiveCoupon'];
			}
			
			
			if (isset($vals['queryCpsInfo'])){
				
				$this->queryCpsInfo = $vals['queryCpsInfo'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['research'])){
				
				$this->research = $vals['research'];
			}
			
			
			if (isset($vals['queryFuturePrice'])){
				
				$this->queryFuturePrice = $vals['queryFuturePrice'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['realCall'])){
				
				$this->realCall = $vals['realCall'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryGoodsRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("keyword" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keyword);
				
			}
			
			
			
			
			if ("fieldName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fieldName);
				
			}
			
			
			
			
			if ("order" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("priceStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceStart);
				
			}
			
			
			
			
			if ("priceEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceEnd);
				
			}
			
			
			
			
			if ("queryReputation" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryReputation);
				
			}
			
			
			
			
			if ("queryStoreServiceCapability" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryStoreServiceCapability);
				
			}
			
			
			
			
			if ("queryStock" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryStock);
				
			}
			
			
			
			
			if ("queryActivity" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryActivity);
				
			}
			
			
			
			
			if ("queryPrepay" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryPrepay);
				
			}
			
			
			
			
			if ("commonParams" == $schemeField){
				
				$needSkip = false;
				
				$this->commonParams = new \com\vip\adp\api\open\service\CommonParams();
				$this->commonParams->read($input);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("chanTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chanTag);
				
			}
			
			
			
			
			if ("queryExclusiveCoupon" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryExclusiveCoupon);
				
			}
			
			
			
			
			if ("queryCpsInfo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->queryCpsInfo); 
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("research" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->research);
				
			}
			
			
			
			
			if ("queryFuturePrice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryFuturePrice);
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("realCall" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->realCall);
				
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
		
		$xfer += $output->writeFieldBegin('keyword');
		$xfer += $output->writeString($this->keyword);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->fieldName !== null) {
			
			$xfer += $output->writeFieldBegin('fieldName');
			$xfer += $output->writeString($this->fieldName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order !== null) {
			
			$xfer += $output->writeFieldBegin('order');
			$xfer += $output->writeI32($this->order);
			
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
		
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->priceStart !== null) {
			
			$xfer += $output->writeFieldBegin('priceStart');
			$xfer += $output->writeString($this->priceStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceEnd !== null) {
			
			$xfer += $output->writeFieldBegin('priceEnd');
			$xfer += $output->writeString($this->priceEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryReputation !== null) {
			
			$xfer += $output->writeFieldBegin('queryReputation');
			$xfer += $output->writeBool($this->queryReputation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryStoreServiceCapability !== null) {
			
			$xfer += $output->writeFieldBegin('queryStoreServiceCapability');
			$xfer += $output->writeBool($this->queryStoreServiceCapability);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryStock !== null) {
			
			$xfer += $output->writeFieldBegin('queryStock');
			$xfer += $output->writeBool($this->queryStock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryActivity !== null) {
			
			$xfer += $output->writeFieldBegin('queryActivity');
			$xfer += $output->writeBool($this->queryActivity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryPrepay !== null) {
			
			$xfer += $output->writeFieldBegin('queryPrepay');
			$xfer += $output->writeBool($this->queryPrepay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commonParams !== null) {
			
			$xfer += $output->writeFieldBegin('commonParams');
			
			if (!is_object($this->commonParams)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->commonParams->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryExclusiveCoupon !== null) {
			
			$xfer += $output->writeFieldBegin('queryExclusiveCoupon');
			$xfer += $output->writeBool($this->queryExclusiveCoupon);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryCpsInfo !== null) {
			
			$xfer += $output->writeFieldBegin('queryCpsInfo');
			$xfer += $output->writeI32($this->queryCpsInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->research !== null) {
			
			$xfer += $output->writeFieldBegin('research');
			$xfer += $output->writeBool($this->research);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryFuturePrice !== null) {
			
			$xfer += $output->writeFieldBegin('queryFuturePrice');
			$xfer += $output->writeBool($this->queryFuturePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realCall !== null) {
			
			$xfer += $output->writeFieldBegin('realCall');
			$xfer += $output->writeBool($this->realCall);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>