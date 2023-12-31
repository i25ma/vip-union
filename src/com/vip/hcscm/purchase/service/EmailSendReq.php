<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class EmailSendReq {
	
	static $_TSPEC;
	public $template = null;
	public $emailBodies = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'template'
			),
			2 => array(
			'var' => 'emailBodies'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['template'])){
				
				$this->template = $vals['template'];
			}
			
			
			if (isset($vals['emailBodies'])){
				
				$this->emailBodies = $vals['emailBodies'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EmailSendReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("template" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->template);
				
			}
			
			
			
			
			if ("emailBodies" == $schemeField){
				
				$needSkip = false;
				
				$this->emailBodies = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\purchase\service\EmailBodyVo();
						$elem0->read($input);
						
						$this->emailBodies[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('template');
		$xfer += $output->writeString($this->template);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->emailBodies !== null) {
			
			$xfer += $output->writeFieldBegin('emailBodies');
			
			if (!is_array($this->emailBodies)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->emailBodies as $iter0){
				
				
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