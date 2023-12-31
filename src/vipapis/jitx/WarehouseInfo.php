<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class WarehouseInfo {
	
	static $_TSPEC;
	public $warehouse_code = null;
	public $warehouse_name = null;
	public $warehouse_address = null;
	public $warehouse_type = null;
	public $is_pre_transport_no = null;
	public $is_active = null;
	public $province_ame = null;
	public $city_name = null;
	public $region_name = null;
	public $town_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse_code'
			),
			2 => array(
			'var' => 'warehouse_name'
			),
			3 => array(
			'var' => 'warehouse_address'
			),
			4 => array(
			'var' => 'warehouse_type'
			),
			5 => array(
			'var' => 'is_pre_transport_no'
			),
			6 => array(
			'var' => 'is_active'
			),
			7 => array(
			'var' => 'province_ame'
			),
			8 => array(
			'var' => 'city_name'
			),
			9 => array(
			'var' => 'region_name'
			),
			10 => array(
			'var' => 'town_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['warehouse_name'])){
				
				$this->warehouse_name = $vals['warehouse_name'];
			}
			
			
			if (isset($vals['warehouse_address'])){
				
				$this->warehouse_address = $vals['warehouse_address'];
			}
			
			
			if (isset($vals['warehouse_type'])){
				
				$this->warehouse_type = $vals['warehouse_type'];
			}
			
			
			if (isset($vals['is_pre_transport_no'])){
				
				$this->is_pre_transport_no = $vals['is_pre_transport_no'];
			}
			
			
			if (isset($vals['is_active'])){
				
				$this->is_active = $vals['is_active'];
			}
			
			
			if (isset($vals['province_ame'])){
				
				$this->province_ame = $vals['province_ame'];
			}
			
			
			if (isset($vals['city_name'])){
				
				$this->city_name = $vals['city_name'];
			}
			
			
			if (isset($vals['region_name'])){
				
				$this->region_name = $vals['region_name'];
			}
			
			
			if (isset($vals['town_name'])){
				
				$this->town_name = $vals['town_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WarehouseInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_name);
				
			}
			
			
			
			
			if ("warehouse_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_address);
				
			}
			
			
			
			
			if ("warehouse_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_type);
				
			}
			
			
			
			
			if ("is_pre_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_pre_transport_no);
				
			}
			
			
			
			
			if ("is_active" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_active); 
				
			}
			
			
			
			
			if ("province_ame" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province_ame);
				
			}
			
			
			
			
			if ("city_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_name);
				
			}
			
			
			
			
			if ("region_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region_name);
				
			}
			
			
			
			
			if ("town_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town_name);
				
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
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_name !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_name');
			$xfer += $output->writeString($this->warehouse_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_address !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_address');
			$xfer += $output->writeString($this->warehouse_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_type !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_type');
			$xfer += $output->writeString($this->warehouse_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_pre_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('is_pre_transport_no');
			$xfer += $output->writeString($this->is_pre_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_active !== null) {
			
			$xfer += $output->writeFieldBegin('is_active');
			$xfer += $output->writeByte($this->is_active);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province_ame !== null) {
			
			$xfer += $output->writeFieldBegin('province_ame');
			$xfer += $output->writeString($this->province_ame);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city_name !== null) {
			
			$xfer += $output->writeFieldBegin('city_name');
			$xfer += $output->writeString($this->city_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->region_name !== null) {
			
			$xfer += $output->writeFieldBegin('region_name');
			$xfer += $output->writeString($this->region_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town_name !== null) {
			
			$xfer += $output->writeFieldBegin('town_name');
			$xfer += $output->writeString($this->town_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>