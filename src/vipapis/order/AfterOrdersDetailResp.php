<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class AfterOrdersDetailResp {
	
	static $_TSPEC;
	public $has_next = null;
	public $afterOrderDetails = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'has_next'
			),
			2 => array(
			'var' => 'afterOrderDetails'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['has_next'])){
				
				$this->has_next = $vals['has_next'];
			}
			
			
			if (isset($vals['afterOrderDetails'])){
				
				$this->afterOrderDetails = $vals['afterOrderDetails'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterOrdersDetailResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("has_next" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->has_next);
				
			}
			
			
			
			
			if ("afterOrderDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->afterOrderDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\order\AfterOrderDetail();
						$elem0->read($input);
						
						$this->afterOrderDetails[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('has_next');
		$xfer += $output->writeBool($this->has_next);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->afterOrderDetails !== null) {
			
			$xfer += $output->writeFieldBegin('afterOrderDetails');
			
			if (!is_array($this->afterOrderDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->afterOrderDetails as $iter0){
				
				
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