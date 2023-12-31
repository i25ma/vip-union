<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupDnyShopPreHoldForOrderBySkuDataForVop {
	
	static $_TSPEC;
	public $preHoldOrderMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			101 => array(
			'var' => 'preHoldOrderMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['preHoldOrderMap'])){
				
				$this->preHoldOrderMap = $vals['preHoldOrderMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupDnyShopPreHoldForOrderBySkuDataForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("preHoldOrderMap" == $schemeField){
				
				$needSkip = false;
				
				$this->preHoldOrderMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = null;
						
						$val1 = new \com\vip\cup\sal\vop\CupDnyShopPreHoldInvForVopResult();
						$val1->read($input);
						
						$this->preHoldOrderMap[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->preHoldOrderMap !== null) {
			
			$xfer += $output->writeFieldBegin('preHoldOrderMap');
			
			if (!is_array($this->preHoldOrderMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->preHoldOrderMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>