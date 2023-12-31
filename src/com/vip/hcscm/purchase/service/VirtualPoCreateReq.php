<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class VirtualPoCreateReq {
	
	static $_TSPEC;
	public $wmsId = null;
	public $detailList = null;
	public $saleChannel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wmsId'
			),
			2 => array(
			'var' => 'detailList'
			),
			3 => array(
			'var' => 'saleChannel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wmsId'])){
				
				$this->wmsId = $vals['wmsId'];
			}
			
			
			if (isset($vals['detailList'])){
				
				$this->detailList = $vals['detailList'];
			}
			
			
			if (isset($vals['saleChannel'])){
				
				$this->saleChannel = $vals['saleChannel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VirtualPoCreateReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wmsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wmsId);
				
			}
			
			
			
			
			if ("detailList" == $schemeField){
				
				$needSkip = false;
				
				$this->detailList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\purchase\service\VirtualPoDetailVo();
						$elem0->read($input);
						
						$this->detailList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("saleChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleChannel);
				
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
		
		$xfer += $output->writeFieldBegin('wmsId');
		$xfer += $output->writeString($this->wmsId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->detailList !== null) {
			
			$xfer += $output->writeFieldBegin('detailList');
			
			if (!is_array($this->detailList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detailList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleChannel !== null) {
			
			$xfer += $output->writeFieldBegin('saleChannel');
			$xfer += $output->writeString($this->saleChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>