<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class TaskGoodsIdentificationInfo {
	
	static $_TSPEC;
	public $id_type = null;
	public $tracking_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id_type'
			),
			2 => array(
			'var' => 'tracking_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id_type'])){
				
				$this->id_type = $vals['id_type'];
			}
			
			
			if (isset($vals['tracking_id'])){
				
				$this->tracking_id = $vals['tracking_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TaskGoodsIdentificationInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->id_type); 
				
			}
			
			
			
			
			if ("tracking_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tracking_id);
				
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
		
		if($this->id_type !== null) {
			
			$xfer += $output->writeFieldBegin('id_type');
			$xfer += $output->writeI32($this->id_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tracking_id !== null) {
			
			$xfer += $output->writeFieldBegin('tracking_id');
			$xfer += $output->writeString($this->tracking_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>