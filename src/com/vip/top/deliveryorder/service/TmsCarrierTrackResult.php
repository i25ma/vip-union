<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\service;

class TmsCarrierTrackResult {
	
	static $_TSPEC;
	public $custDataId = null;
	public $bizResponseCode = null;
	public $bizResponseMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custDataId'
			),
			2 => array(
			'var' => 'bizResponseCode'
			),
			3 => array(
			'var' => 'bizResponseMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custDataId'])){
				
				$this->custDataId = $vals['custDataId'];
			}
			
			
			if (isset($vals['bizResponseCode'])){
				
				$this->bizResponseCode = $vals['bizResponseCode'];
			}
			
			
			if (isset($vals['bizResponseMsg'])){
				
				$this->bizResponseMsg = $vals['bizResponseMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsCarrierTrackResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("custDataId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custDataId);
				
			}
			
			
			
			
			if ("bizResponseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizResponseCode);
				
			}
			
			
			
			
			if ("bizResponseMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizResponseMsg);
				
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
		
		if($this->custDataId !== null) {
			
			$xfer += $output->writeFieldBegin('custDataId');
			$xfer += $output->writeString($this->custDataId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizResponseCode !== null) {
			
			$xfer += $output->writeFieldBegin('bizResponseCode');
			$xfer += $output->writeString($this->bizResponseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizResponseMsg !== null) {
			
			$xfer += $output->writeFieldBegin('bizResponseMsg');
			$xfer += $output->writeString($this->bizResponseMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>