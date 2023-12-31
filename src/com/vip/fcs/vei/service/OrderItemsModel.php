<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class OrderItemsModel {
	
	static $_TSPEC;
	public $name = null;
	public $unit = null;
	public $price = null;
	public $number = null;
	public $amount = null;
	public $model = null;
	public $goodsSn = null;
	public $taxRate = null;
	public $goodsTaxClassifyCode = null;
	public $discount = null;
	public $commodityName = null;
	public $itemChangeName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'name'
			),
			2 => array(
			'var' => 'unit'
			),
			3 => array(
			'var' => 'price'
			),
			4 => array(
			'var' => 'number'
			),
			5 => array(
			'var' => 'amount'
			),
			6 => array(
			'var' => 'model'
			),
			7 => array(
			'var' => 'goodsSn'
			),
			8 => array(
			'var' => 'taxRate'
			),
			9 => array(
			'var' => 'goodsTaxClassifyCode'
			),
			10 => array(
			'var' => 'discount'
			),
			11 => array(
			'var' => 'commodityName'
			),
			12 => array(
			'var' => 'itemChangeName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['number'])){
				
				$this->number = $vals['number'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['model'])){
				
				$this->model = $vals['model'];
			}
			
			
			if (isset($vals['goodsSn'])){
				
				$this->goodsSn = $vals['goodsSn'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['goodsTaxClassifyCode'])){
				
				$this->goodsTaxClassifyCode = $vals['goodsTaxClassifyCode'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
			if (isset($vals['commodityName'])){
				
				$this->commodityName = $vals['commodityName'];
			}
			
			
			if (isset($vals['itemChangeName'])){
				
				$this->itemChangeName = $vals['itemChangeName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderItemsModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("number" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->number); 
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->amount);
				
			}
			
			
			
			
			if ("model" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->model);
				
			}
			
			
			
			
			if ("goodsSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsSn);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->taxRate);
				
			}
			
			
			
			
			if ("goodsTaxClassifyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsTaxClassifyCode);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount);
				
			}
			
			
			
			
			if ("commodityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodityName);
				
			}
			
			
			
			
			if ("itemChangeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemChangeName);
				
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
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('price');
		$xfer += $output->writeDouble($this->price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('number');
		$xfer += $output->writeI32($this->number);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeDouble($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->model !== null) {
			
			$xfer += $output->writeFieldBegin('model');
			$xfer += $output->writeString($this->model);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsSn !== null) {
			
			$xfer += $output->writeFieldBegin('goodsSn');
			$xfer += $output->writeString($this->goodsSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('taxRate');
		$xfer += $output->writeDouble($this->taxRate);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->goodsTaxClassifyCode !== null) {
			
			$xfer += $output->writeFieldBegin('goodsTaxClassifyCode');
			$xfer += $output->writeString($this->goodsTaxClassifyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount !== null) {
			
			$xfer += $output->writeFieldBegin('discount');
			$xfer += $output->writeDouble($this->discount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodityName !== null) {
			
			$xfer += $output->writeFieldBegin('commodityName');
			$xfer += $output->writeString($this->commodityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemChangeName !== null) {
			
			$xfer += $output->writeFieldBegin('itemChangeName');
			$xfer += $output->writeString($this->itemChangeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>