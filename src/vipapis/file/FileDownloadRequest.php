<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\file;

class FileDownloadRequest {
	
	static $_TSPEC;
	public $resource_value = null;
	public $file_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'resource_value'
			),
			2 => array(
			'var' => 'file_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['resource_value'])){
				
				$this->resource_value = $vals['resource_value'];
			}
			
			
			if (isset($vals['file_id'])){
				
				$this->file_id = $vals['file_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FileDownloadRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("resource_value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resource_value);
				
			}
			
			
			
			
			if ("file_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->file_id);
				
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
		
		$xfer += $output->writeFieldBegin('resource_value');
		$xfer += $output->writeString($this->resource_value);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('file_id');
		$xfer += $output->writeString($this->file_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>