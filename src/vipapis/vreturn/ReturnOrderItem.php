<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vreturn;

class ReturnOrderItem {
	
	static $_TSPEC;
	public $box_no = null;
	public $po_no = null;
	public $barcode = null;
	public $order_sn = null;
	public $qty = null;
	public $schedule_id = null;
	public $receipt_no = null;
	public $purchase_case_no = null;
	public $reference_no = null;
	public $work_number = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'box_no'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'order_sn'
			),
			5 => array(
			'var' => 'qty'
			),
			7 => array(
			'var' => 'schedule_id'
			),
			8 => array(
			'var' => 'receipt_no'
			),
			9 => array(
			'var' => 'purchase_case_no'
			),
			10 => array(
			'var' => 'reference_no'
			),
			11 => array(
			'var' => 'work_number'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['receipt_no'])){
				
				$this->receipt_no = $vals['receipt_no'];
			}
			
			
			if (isset($vals['purchase_case_no'])){
				
				$this->purchase_case_no = $vals['purchase_case_no'];
			}
			
			
			if (isset($vals['reference_no'])){
				
				$this->reference_no = $vals['reference_no'];
			}
			
			
			if (isset($vals['work_number'])){
				
				$this->work_number = $vals['work_number'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnOrderItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receipt_no);
				
			}
			
			
			
			
			if ("purchase_case_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_case_no);
				
			}
			
			
			
			
			if ("reference_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reference_no);
				
			}
			
			
			
			
			if ("work_number" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->work_number);
				
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
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeString($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receipt_no !== null) {
			
			$xfer += $output->writeFieldBegin('receipt_no');
			$xfer += $output->writeString($this->receipt_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_case_no !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_case_no');
			$xfer += $output->writeString($this->purchase_case_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reference_no !== null) {
			
			$xfer += $output->writeFieldBegin('reference_no');
			$xfer += $output->writeString($this->reference_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_number !== null) {
			
			$xfer += $output->writeFieldBegin('work_number');
			$xfer += $output->writeString($this->work_number);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>