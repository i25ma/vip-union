<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class CreateJitOrderAbnormalRequestForVop {
	
	static $_TSPEC;
	public $category1_id = null;
	public $category2_id = null;
	public $category3_id = null;
	public $delivery_no = null;
	public $response_delivery_no = null;
	public $delivery_system = null;
	public $affect_begin_time = null;
	public $affect_end_time = null;
	public $estimate_finish_time = null;
	public $remark = null;
	public $transport_no = null;
	public $latest_arrived_time = null;
	public $vendor_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'category1_id'
			),
			2 => array(
			'var' => 'category2_id'
			),
			3 => array(
			'var' => 'category3_id'
			),
			4 => array(
			'var' => 'delivery_no'
			),
			5 => array(
			'var' => 'response_delivery_no'
			),
			6 => array(
			'var' => 'delivery_system'
			),
			7 => array(
			'var' => 'affect_begin_time'
			),
			8 => array(
			'var' => 'affect_end_time'
			),
			9 => array(
			'var' => 'estimate_finish_time'
			),
			10 => array(
			'var' => 'remark'
			),
			12 => array(
			'var' => 'transport_no'
			),
			13 => array(
			'var' => 'latest_arrived_time'
			),
			14 => array(
			'var' => 'vendor_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['category1_id'])){
				
				$this->category1_id = $vals['category1_id'];
			}
			
			
			if (isset($vals['category2_id'])){
				
				$this->category2_id = $vals['category2_id'];
			}
			
			
			if (isset($vals['category3_id'])){
				
				$this->category3_id = $vals['category3_id'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['response_delivery_no'])){
				
				$this->response_delivery_no = $vals['response_delivery_no'];
			}
			
			
			if (isset($vals['delivery_system'])){
				
				$this->delivery_system = $vals['delivery_system'];
			}
			
			
			if (isset($vals['affect_begin_time'])){
				
				$this->affect_begin_time = $vals['affect_begin_time'];
			}
			
			
			if (isset($vals['affect_end_time'])){
				
				$this->affect_end_time = $vals['affect_end_time'];
			}
			
			
			if (isset($vals['estimate_finish_time'])){
				
				$this->estimate_finish_time = $vals['estimate_finish_time'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['latest_arrived_time'])){
				
				$this->latest_arrived_time = $vals['latest_arrived_time'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateJitOrderAbnormalRequestForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("category1_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category1_id);
				
			}
			
			
			
			
			if ("category2_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category2_id);
				
			}
			
			
			
			
			if ("category3_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category3_id);
				
			}
			
			
			
			
			if ("delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_no);
				
			}
			
			
			
			
			if ("response_delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->response_delivery_no);
				
			}
			
			
			
			
			if ("delivery_system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_system);
				
			}
			
			
			
			
			if ("affect_begin_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->affect_begin_time); 
				
			}
			
			
			
			
			if ("affect_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->affect_end_time); 
				
			}
			
			
			
			
			if ("estimate_finish_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimate_finish_time); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("latest_arrived_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->latest_arrived_time); 
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
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
		
		$xfer += $output->writeFieldBegin('category1_id');
		$xfer += $output->writeString($this->category1_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category2_id');
		$xfer += $output->writeString($this->category2_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category3_id');
		$xfer += $output->writeString($this->category3_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->response_delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('response_delivery_no');
			$xfer += $output->writeString($this->response_delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('delivery_system');
		$xfer += $output->writeString($this->delivery_system);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->affect_begin_time !== null) {
			
			$xfer += $output->writeFieldBegin('affect_begin_time');
			$xfer += $output->writeI64($this->affect_begin_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->affect_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('affect_end_time');
			$xfer += $output->writeI64($this->affect_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimate_finish_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimate_finish_time');
			$xfer += $output->writeI64($this->estimate_finish_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->latest_arrived_time !== null) {
			
			$xfer += $output->writeFieldBegin('latest_arrived_time');
			$xfer += $output->writeI64($this->latest_arrived_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>