<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class VipLinkCheckVO {
	
	static $_TSPEC;
	public $linkType = null;
	public $landUrl = null;
	public $goodsId = null;
	public $brandId = null;
	public $adCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'linkType'
			),
			2 => array(
			'var' => 'landUrl'
			),
			3 => array(
			'var' => 'goodsId'
			),
			4 => array(
			'var' => 'brandId'
			),
			5 => array(
			'var' => 'adCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['linkType'])){
				
				$this->linkType = $vals['linkType'];
			}
			
			
			if (isset($vals['landUrl'])){
				
				$this->landUrl = $vals['landUrl'];
			}
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['adCode'])){
				
				$this->adCode = $vals['adCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipLinkCheckVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("linkType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\adp\api\open\service\VipLinkTypeEnum::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->linkType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("landUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->landUrl);
				
			}
			
			
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("adCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adCode);
				
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
		
		if($this->linkType !== null) {
			
			$xfer += $output->writeFieldBegin('linkType');
			
			$em = new \com\vip\adp\api\open\service\VipLinkTypeEnum; 
			$output->writeString($em::$__names[$this->linkType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->landUrl !== null) {
			
			$xfer += $output->writeFieldBegin('landUrl');
			$xfer += $output->writeString($this->landUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adCode !== null) {
			
			$xfer += $output->writeFieldBegin('adCode');
			$xfer += $output->writeString($this->adCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>