<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;

class OccupiedOrderDetail {
	
	static $_TSPEC;
	public $barcode = null;
	public $amount = null;
	public $brand_id = null;
	public $cooperation_no = null;
	public $warehouse = null;
	public $sales_source_indicator = null;
	public $sales_no = null;
	public $create_time = null;
	public $cooperation_mode = null;
	public $warehouse_flag = null;
	public $pick_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'amount'
			),
			3 => array(
			'var' => 'brand_id'
			),
			4 => array(
			'var' => 'cooperation_no'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'sales_source_indicator'
			),
			7 => array(
			'var' => 'sales_no'
			),
			8 => array(
			'var' => 'create_time'
			),
			9 => array(
			'var' => 'cooperation_mode'
			),
			10 => array(
			'var' => 'warehouse_flag'
			),
			11 => array(
			'var' => 'pick_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['sales_source_indicator'])){
				
				$this->sales_source_indicator = $vals['sales_source_indicator'];
			}
			
			
			if (isset($vals['sales_no'])){
				
				$this->sales_no = $vals['sales_no'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['cooperation_mode'])){
				
				$this->cooperation_mode = $vals['cooperation_mode'];
			}
			
			
			if (isset($vals['warehouse_flag'])){
				
				$this->warehouse_flag = $vals['warehouse_flag'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OccupiedOrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brand_id); 
				
			}
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cooperation_no); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("sales_source_indicator" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sales_source_indicator); 
				
			}
			
			
			
			
			if ("sales_no" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_no); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("cooperation_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperation_mode);
				
			}
			
			
			
			
			if ("warehouse_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->warehouse_flag); 
				
			}
			
			
			
			
			if ("pick_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_no);
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeI32($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI64($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cooperation_no');
		$xfer += $output->writeI32($this->cooperation_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_source_indicator');
		$xfer += $output->writeI32($this->sales_source_indicator);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_no');
		$xfer += $output->writeI64($this->sales_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeString($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cooperation_mode !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_mode');
			$xfer += $output->writeString($this->cooperation_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_flag !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_flag');
			$xfer += $output->writeI32($this->warehouse_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_no !== null) {
			
			$xfer += $output->writeFieldBegin('pick_no');
			$xfer += $output->writeString($this->pick_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>