<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class UpdatePoRefundRealQtyReq {
	
	static $_TSPEC;
	public $refund_no = null;
	public $refund_receipt_no = null;
	public $refund_warehouse_code = null;
	public $refund_time = null;
	public $total_line_qty = null;
	public $refund_items = null;
	public $source = null;
	public $return_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refund_no'
			),
			2 => array(
			'var' => 'refund_receipt_no'
			),
			3 => array(
			'var' => 'refund_warehouse_code'
			),
			4 => array(
			'var' => 'refund_time'
			),
			5 => array(
			'var' => 'total_line_qty'
			),
			6 => array(
			'var' => 'refund_items'
			),
			7 => array(
			'var' => 'source'
			),
			8 => array(
			'var' => 'return_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refund_no'])){
				
				$this->refund_no = $vals['refund_no'];
			}
			
			
			if (isset($vals['refund_receipt_no'])){
				
				$this->refund_receipt_no = $vals['refund_receipt_no'];
			}
			
			
			if (isset($vals['refund_warehouse_code'])){
				
				$this->refund_warehouse_code = $vals['refund_warehouse_code'];
			}
			
			
			if (isset($vals['refund_time'])){
				
				$this->refund_time = $vals['refund_time'];
			}
			
			
			if (isset($vals['total_line_qty'])){
				
				$this->total_line_qty = $vals['total_line_qty'];
			}
			
			
			if (isset($vals['refund_items'])){
				
				$this->refund_items = $vals['refund_items'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdatePoRefundRealQtyReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refund_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_no);
				
			}
			
			
			
			
			if ("refund_receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_receipt_no);
				
			}
			
			
			
			
			if ("refund_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_warehouse_code);
				
			}
			
			
			
			
			if ("refund_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refund_time);
				
			}
			
			
			
			
			if ("total_line_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_line_qty); 
				
			}
			
			
			
			
			if ("refund_items" == $schemeField){
				
				$needSkip = false;
				
				$this->refund_items = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\xstore\cc\bulkbuying\api\PoRefundRealItem();
						$elem1->read($input);
						
						$this->refund_items[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->source); 
				
			}
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_type);
				
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
		
		$xfer += $output->writeFieldBegin('refund_no');
		$xfer += $output->writeString($this->refund_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->refund_receipt_no !== null) {
			
			$xfer += $output->writeFieldBegin('refund_receipt_no');
			$xfer += $output->writeString($this->refund_receipt_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('refund_warehouse_code');
		$xfer += $output->writeString($this->refund_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refund_time');
		$xfer += $output->writeI64($this->refund_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_line_qty');
		$xfer += $output->writeI32($this->total_line_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refund_items');
		
		if (!is_array($this->refund_items)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->refund_items as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('source');
		$xfer += $output->writeI32($this->source);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->return_type !== null) {
			
			$xfer += $output->writeFieldBegin('return_type');
			$xfer += $output->writeString($this->return_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>