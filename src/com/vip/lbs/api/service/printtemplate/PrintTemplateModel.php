<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class PrintTemplateModel {
	
	static $_TSPEC;
	public $ownerId = null;
	public $templates = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ownerId'
			),
			2 => array(
			'var' => 'templates'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ownerId'])){
				
				$this->ownerId = $vals['ownerId'];
			}
			
			
			if (isset($vals['templates'])){
				
				$this->templates = $vals['templates'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintTemplateModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ownerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ownerId);
				
			}
			
			
			
			
			if ("templates" == $schemeField){
				
				$needSkip = false;
				
				$this->templates = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\lbs\api\service\printtemplate\TemplateData();
						$elem0->read($input);
						
						$this->templates[$_size0++] = $elem0;
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
		
		if($this->ownerId !== null) {
			
			$xfer += $output->writeFieldBegin('ownerId');
			$xfer += $output->writeString($this->ownerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templates !== null) {
			
			$xfer += $output->writeFieldBegin('templates');
			
			if (!is_array($this->templates)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->templates as $iter0){
				
				
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