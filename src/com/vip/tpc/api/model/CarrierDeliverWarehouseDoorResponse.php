<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class CarrierDeliverWarehouseDoorResponse {
	
	static $_TSPEC;
	public $header = null;
	public $carrierDeliverWarehouseDoorResults = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'carrierDeliverWarehouseDoorResults'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['carrierDeliverWarehouseDoorResults'])){
				
				$this->carrierDeliverWarehouseDoorResults = $vals['carrierDeliverWarehouseDoorResults'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierDeliverWarehouseDoorResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\tpc\api\model\common\TpcResponseHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("carrierDeliverWarehouseDoorResults" == $schemeField){
				
				$needSkip = false;
				
				$this->carrierDeliverWarehouseDoorResults = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tpc\api\model\CarrierDeliverWarehouseDoorResult();
						$elem1->read($input);
						
						$this->carrierDeliverWarehouseDoorResults[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carrierDeliverWarehouseDoorResults !== null) {
			
			$xfer += $output->writeFieldBegin('carrierDeliverWarehouseDoorResults');
			
			if (!is_array($this->carrierDeliverWarehouseDoorResults)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->carrierDeliverWarehouseDoorResults as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>