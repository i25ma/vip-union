<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class Create3PLPoDeliveryReq {
	
	static $_TSPEC;
	public $po_nos = null;
	public $logistics_no = null;
	public $delivery_warehouse = null;
	public $warehouse = null;
	public $delivery_time = null;
	public $arrival_time = null;
	public $carrier_code = null;
	public $delivery_method = null;
	public $store_sn = null;
	public $jit_type = null;
	public $is_air_embargo = null;
	public $operator_id = null;
	public $carrier_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			22 => array(
			'var' => 'po_nos'
			),
			23 => array(
			'var' => 'logistics_no'
			),
			24 => array(
			'var' => 'delivery_warehouse'
			),
			25 => array(
			'var' => 'warehouse'
			),
			26 => array(
			'var' => 'delivery_time'
			),
			27 => array(
			'var' => 'arrival_time'
			),
			28 => array(
			'var' => 'carrier_code'
			),
			29 => array(
			'var' => 'delivery_method'
			),
			30 => array(
			'var' => 'store_sn'
			),
			31 => array(
			'var' => 'jit_type'
			),
			32 => array(
			'var' => 'is_air_embargo'
			),
			1 => array(
			'var' => 'operator_id'
			),
			2 => array(
			'var' => 'carrier_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_nos'])){
				
				$this->po_nos = $vals['po_nos'];
			}
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['arrival_time'])){
				
				$this->arrival_time = $vals['arrival_time'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['delivery_method'])){
				
				$this->delivery_method = $vals['delivery_method'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['jit_type'])){
				
				$this->jit_type = $vals['jit_type'];
			}
			
			
			if (isset($vals['is_air_embargo'])){
				
				$this->is_air_embargo = $vals['is_air_embargo'];
			}
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Create3PLPoDeliveryReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->po_nos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->po_nos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_time);
				
			}
			
			
			
			
			if ("arrival_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrival_time);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("delivery_method" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_method);
				
			}
			
			
			
			
			if ("store_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_sn);
				
			}
			
			
			
			
			if ("jit_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->jit_type); 
				
			}
			
			
			
			
			if ("is_air_embargo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_air_embargo); 
				
			}
			
			
			
			
			if ("operator_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operator_id); 
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
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
		
		$xfer += $output->writeFieldBegin('po_nos');
		
		if (!is_array($this->po_nos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->po_nos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_no');
			$xfer += $output->writeString($this->logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_time');
		$xfer += $output->writeString($this->delivery_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('arrival_time');
			$xfer += $output->writeString($this->arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_method !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_method');
			$xfer += $output->writeString($this->delivery_method);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jit_type !== null) {
			
			$xfer += $output->writeFieldBegin('jit_type');
			$xfer += $output->writeI32($this->jit_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_air_embargo !== null) {
			
			$xfer += $output->writeFieldBegin('is_air_embargo');
			$xfer += $output->writeI32($this->is_air_embargo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_name');
		$xfer += $output->writeString($this->carrier_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>