<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PoRefundItemInfoReq {
	
	static $_TSPEC;
	public $refundNo = null;
	public $barcodes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refundNo'
			),
			2 => array(
			'var' => 'barcodes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refundNo'])){
				
				$this->refundNo = $vals['refundNo'];
			}
			
			
			if (isset($vals['barcodes'])){
				
				$this->barcodes = $vals['barcodes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoRefundItemInfoReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refundNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundNo);
				
			}
			
			
			
			
			if ("barcodes" == $schemeField){
				
				$needSkip = false;
				
				$this->barcodes = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->barcodes[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('refundNo');
		$xfer += $output->writeString($this->refundNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcodes');
		
		if (!is_array($this->barcodes)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->barcodes as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>