<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\sims\erp;

class InventoryAdjustReq {
	
	static $_TSPEC;
	public $seqNo = null;
	public $xlsBarcode = null;
	public $storeCode = null;
	public $bizReceiptType = null;
	public $bizReceiptCode = null;
	public $quantity = null;
	public $bizTime = null;
	public $optUser = null;
	public $bizReceiptTypeExplain = null;
	public $companyCode = null;
	public $poNo = null;
	public $originReceiptCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seqNo'
			),
			2 => array(
			'var' => 'xlsBarcode'
			),
			3 => array(
			'var' => 'storeCode'
			),
			4 => array(
			'var' => 'bizReceiptType'
			),
			5 => array(
			'var' => 'bizReceiptCode'
			),
			6 => array(
			'var' => 'quantity'
			),
			7 => array(
			'var' => 'bizTime'
			),
			8 => array(
			'var' => 'optUser'
			),
			9 => array(
			'var' => 'bizReceiptTypeExplain'
			),
			10 => array(
			'var' => 'companyCode'
			),
			11 => array(
			'var' => 'poNo'
			),
			12 => array(
			'var' => 'originReceiptCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['xlsBarcode'])){
				
				$this->xlsBarcode = $vals['xlsBarcode'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['bizReceiptType'])){
				
				$this->bizReceiptType = $vals['bizReceiptType'];
			}
			
			
			if (isset($vals['bizReceiptCode'])){
				
				$this->bizReceiptCode = $vals['bizReceiptCode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['bizTime'])){
				
				$this->bizTime = $vals['bizTime'];
			}
			
			
			if (isset($vals['optUser'])){
				
				$this->optUser = $vals['optUser'];
			}
			
			
			if (isset($vals['bizReceiptTypeExplain'])){
				
				$this->bizReceiptTypeExplain = $vals['bizReceiptTypeExplain'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['originReceiptCode'])){
				
				$this->originReceiptCode = $vals['originReceiptCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InventoryAdjustReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqNo);
				
			}
			
			
			
			
			if ("xlsBarcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->xlsBarcode);
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("bizReceiptType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizReceiptType); 
				
			}
			
			
			
			
			if ("bizReceiptCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizReceiptCode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("bizTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bizTime); 
				
			}
			
			
			
			
			if ("optUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->optUser);
				
			}
			
			
			
			
			if ("bizReceiptTypeExplain" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizReceiptTypeExplain);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("originReceiptCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originReceiptCode);
				
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
		
		$xfer += $output->writeFieldBegin('seqNo');
		$xfer += $output->writeString($this->seqNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('xlsBarcode');
		$xfer += $output->writeString($this->xlsBarcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeCode');
		$xfer += $output->writeString($this->storeCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizReceiptType');
		$xfer += $output->writeI32($this->bizReceiptType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizReceiptCode');
		$xfer += $output->writeString($this->bizReceiptCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizTime');
		$xfer += $output->writeI64($this->bizTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('optUser');
		$xfer += $output->writeString($this->optUser);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->bizReceiptTypeExplain !== null) {
			
			$xfer += $output->writeFieldBegin('bizReceiptTypeExplain');
			$xfer += $output->writeString($this->bizReceiptTypeExplain);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originReceiptCode !== null) {
			
			$xfer += $output->writeFieldBegin('originReceiptCode');
			$xfer += $output->writeString($this->originReceiptCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>