<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;

class CuxGlPeriodBalancesResp {
	
	static $_TSPEC;
	public $totalCount = null;
	public $page = null;
	public $length = null;
	public $detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'totalCount'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'length'
			),
			4 => array(
			'var' => 'detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['totalCount'])){
				
				$this->totalCount = $vals['totalCount'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['length'])){
				
				$this->length = $vals['length'];
			}
			
			
			if (isset($vals['detail'])){
				
				$this->detail = $vals['detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CuxGlPeriodBalancesResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("totalCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCount); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("length" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->length); 
				
			}
			
			
			
			
			if ("detail" == $schemeField){
				
				$needSkip = false;
				
				$this->detail = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\ebs\gl\service\CuxGlPeriodBalancesDetialModel();
						$elem0->read($input);
						
						$this->detail[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('totalCount');
		$xfer += $output->writeI32($this->totalCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('length');
		$xfer += $output->writeI32($this->length);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->detail !== null) {
			
			$xfer += $output->writeFieldBegin('detail');
			
			if (!is_array($this->detail)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detail as $iter0){
				
				
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