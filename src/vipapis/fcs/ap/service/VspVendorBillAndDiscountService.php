<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\fcs\ap\service;
interface VspVendorBillAndDiscountServiceIf{
	
	
	public function getBillDiscountDetailPage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code);
	
	public function getBillDiscountSourcePage(\com\vip\fcs\ap\service\BillAndDiscountDetailRealTimeReqItem $reqItem, $vendor_code);
	
	public function getBillGoodsDetailPage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code);
	
	public function getBillGoodsSourcePage(\com\vip\fcs\ap\service\GoodsSourceReqItem $reqItem, $vendor_code);
	
	public function getBillNumbers(\com\vip\fcs\ap\service\BillNumberReqItem $reqItem);
	
	public function getExchangeDetailPage(\com\vip\fcs\ap\service\ExchangeReqItem $reqItem);
	
	public function getInsureRtItemSourceDetailPage(\com\vip\fcs\ap\service\RtItemSourceDetailReqItem $reqItem, $vendor_code);
	
	public function getInvTransDetailPage(\com\vip\fcs\ap\service\InvTransDetailReqItem $reqItem, $vendor_code);
	
	public function getItemSourceDetailPage(\com\vip\fcs\ap\service\ItemSourceDetailReqItem $reqItem, $vendor_code);
	
	public function getItemSourcePage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code);
	
	public function getLineId(\com\vip\fcs\ap\service\BillLineIdReqItem $reqItem);
	
	public function healthCheck();
	
}

class _VspVendorBillAndDiscountServiceClient extends \Osp\Base\OspStub implements \vipapis\fcs\ap\service\VspVendorBillAndDiscountServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.fcs.ap.service.VspVendorBillAndDiscountService", "1.2.0");
	}
	
	
	public function getBillDiscountDetailPage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code){
		
		$this->send_getBillDiscountDetailPage( $reqItem, $vendor_code);
		return $this->recv_getBillDiscountDetailPage();
	}
	
	public function send_getBillDiscountDetailPage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code){
		
		$this->initInvocation("getBillDiscountDetailPage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillDiscountDetailPage_args();
		
		$args->reqItem = $reqItem;
		
		$args->vendor_code = $vendor_code;
		
		$this->send_base($args);
	}
	
	public function recv_getBillDiscountDetailPage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillDiscountDetailPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBillDiscountSourcePage(\com\vip\fcs\ap\service\BillAndDiscountDetailRealTimeReqItem $reqItem, $vendor_code){
		
		$this->send_getBillDiscountSourcePage( $reqItem, $vendor_code);
		return $this->recv_getBillDiscountSourcePage();
	}
	
	public function send_getBillDiscountSourcePage(\com\vip\fcs\ap\service\BillAndDiscountDetailRealTimeReqItem $reqItem, $vendor_code){
		
		$this->initInvocation("getBillDiscountSourcePage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillDiscountSourcePage_args();
		
		$args->reqItem = $reqItem;
		
		$args->vendor_code = $vendor_code;
		
		$this->send_base($args);
	}
	
	public function recv_getBillDiscountSourcePage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillDiscountSourcePage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBillGoodsDetailPage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code){
		
		$this->send_getBillGoodsDetailPage( $reqItem, $vendor_code);
		return $this->recv_getBillGoodsDetailPage();
	}
	
	public function send_getBillGoodsDetailPage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code){
		
		$this->initInvocation("getBillGoodsDetailPage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillGoodsDetailPage_args();
		
		$args->reqItem = $reqItem;
		
		$args->vendor_code = $vendor_code;
		
		$this->send_base($args);
	}
	
	public function recv_getBillGoodsDetailPage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillGoodsDetailPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBillGoodsSourcePage(\com\vip\fcs\ap\service\GoodsSourceReqItem $reqItem, $vendor_code){
		
		$this->send_getBillGoodsSourcePage( $reqItem, $vendor_code);
		return $this->recv_getBillGoodsSourcePage();
	}
	
	public function send_getBillGoodsSourcePage(\com\vip\fcs\ap\service\GoodsSourceReqItem $reqItem, $vendor_code){
		
		$this->initInvocation("getBillGoodsSourcePage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillGoodsSourcePage_args();
		
		$args->reqItem = $reqItem;
		
		$args->vendor_code = $vendor_code;
		
		$this->send_base($args);
	}
	
	public function recv_getBillGoodsSourcePage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillGoodsSourcePage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBillNumbers(\com\vip\fcs\ap\service\BillNumberReqItem $reqItem){
		
		$this->send_getBillNumbers( $reqItem);
		return $this->recv_getBillNumbers();
	}
	
	public function send_getBillNumbers(\com\vip\fcs\ap\service\BillNumberReqItem $reqItem){
		
		$this->initInvocation("getBillNumbers");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillNumbers_args();
		
		$args->reqItem = $reqItem;
		
		$this->send_base($args);
	}
	
	public function recv_getBillNumbers(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getBillNumbers_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getExchangeDetailPage(\com\vip\fcs\ap\service\ExchangeReqItem $reqItem){
		
		$this->send_getExchangeDetailPage( $reqItem);
		return $this->recv_getExchangeDetailPage();
	}
	
	public function send_getExchangeDetailPage(\com\vip\fcs\ap\service\ExchangeReqItem $reqItem){
		
		$this->initInvocation("getExchangeDetailPage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getExchangeDetailPage_args();
		
		$args->reqItem = $reqItem;
		
		$this->send_base($args);
	}
	
	public function recv_getExchangeDetailPage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getExchangeDetailPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInsureRtItemSourceDetailPage(\com\vip\fcs\ap\service\RtItemSourceDetailReqItem $reqItem, $vendor_code){
		
		$this->send_getInsureRtItemSourceDetailPage( $reqItem, $vendor_code);
		return $this->recv_getInsureRtItemSourceDetailPage();
	}
	
	public function send_getInsureRtItemSourceDetailPage(\com\vip\fcs\ap\service\RtItemSourceDetailReqItem $reqItem, $vendor_code){
		
		$this->initInvocation("getInsureRtItemSourceDetailPage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getInsureRtItemSourceDetailPage_args();
		
		$args->reqItem = $reqItem;
		
		$args->vendor_code = $vendor_code;
		
		$this->send_base($args);
	}
	
	public function recv_getInsureRtItemSourceDetailPage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getInsureRtItemSourceDetailPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInvTransDetailPage(\com\vip\fcs\ap\service\InvTransDetailReqItem $reqItem, $vendor_code){
		
		$this->send_getInvTransDetailPage( $reqItem, $vendor_code);
		return $this->recv_getInvTransDetailPage();
	}
	
	public function send_getInvTransDetailPage(\com\vip\fcs\ap\service\InvTransDetailReqItem $reqItem, $vendor_code){
		
		$this->initInvocation("getInvTransDetailPage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getInvTransDetailPage_args();
		
		$args->reqItem = $reqItem;
		
		$args->vendor_code = $vendor_code;
		
		$this->send_base($args);
	}
	
	public function recv_getInvTransDetailPage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getInvTransDetailPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getItemSourceDetailPage(\com\vip\fcs\ap\service\ItemSourceDetailReqItem $reqItem, $vendor_code){
		
		$this->send_getItemSourceDetailPage( $reqItem, $vendor_code);
		return $this->recv_getItemSourceDetailPage();
	}
	
	public function send_getItemSourceDetailPage(\com\vip\fcs\ap\service\ItemSourceDetailReqItem $reqItem, $vendor_code){
		
		$this->initInvocation("getItemSourceDetailPage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getItemSourceDetailPage_args();
		
		$args->reqItem = $reqItem;
		
		$args->vendor_code = $vendor_code;
		
		$this->send_base($args);
	}
	
	public function recv_getItemSourceDetailPage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getItemSourceDetailPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getItemSourcePage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code){
		
		$this->send_getItemSourcePage( $reqItem, $vendor_code);
		return $this->recv_getItemSourcePage();
	}
	
	public function send_getItemSourcePage(\com\vip\fcs\ap\service\BillAndDiscountDetailReqItem $reqItem, $vendor_code){
		
		$this->initInvocation("getItemSourcePage");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getItemSourcePage_args();
		
		$args->reqItem = $reqItem;
		
		$args->vendor_code = $vendor_code;
		
		$this->send_base($args);
	}
	
	public function recv_getItemSourcePage(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getItemSourcePage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getLineId(\com\vip\fcs\ap\service\BillLineIdReqItem $reqItem){
		
		$this->send_getLineId( $reqItem);
		return $this->recv_getLineId();
	}
	
	public function send_getLineId(\com\vip\fcs\ap\service\BillLineIdReqItem $reqItem){
		
		$this->initInvocation("getLineId");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getLineId_args();
		
		$args->reqItem = $reqItem;
		
		$this->send_base($args);
	}
	
	public function recv_getLineId(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_getLineId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\fcs\ap\service\VspVendorBillAndDiscountService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VspVendorBillAndDiscountService_getBillDiscountDetailPage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	public $vendor_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\BillAndDiscountDetailReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillDiscountSourcePage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	public $vendor_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\BillAndDiscountDetailRealTimeReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillGoodsDetailPage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	public $vendor_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\BillAndDiscountDetailReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillGoodsSourcePage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	public $vendor_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\GoodsSourceReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillNumbers_args {
	
	static $_TSPEC;
	public $reqItem = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\BillNumberReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqItem');
		
		if (!is_object($this->reqItem)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqItem->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getExchangeDetailPage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\ExchangeReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqItem');
		
		if (!is_object($this->reqItem)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqItem->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getInsureRtItemSourceDetailPage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	public $vendor_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\RtItemSourceDetailReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getInvTransDetailPage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	public $vendor_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\InvTransDetailReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getItemSourceDetailPage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	public $vendor_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\ItemSourceDetailReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getItemSourcePage_args {
	
	static $_TSPEC;
	public $reqItem = null;
	public $vendor_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\BillAndDiscountDetailReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getLineId_args {
	
	static $_TSPEC;
	public $reqItem = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqItem'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqItem = new \com\vip\fcs\ap\service\BillLineIdReqItem();
			$this->reqItem->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqItem');
		
		if (!is_object($this->reqItem)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqItem->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillDiscountDetailPage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\VendorDiscountDetailRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillDiscountSourcePage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\VendorDiscountSourceRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillGoodsDetailPage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\VendorBillDetailRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillGoodsSourcePage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\VendorBillSourceRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getBillNumbers_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\BillNumberRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getExchangeDetailPage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\ExchangeRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getInsureRtItemSourceDetailPage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\RtItemSourceDetailRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getInvTransDetailPage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\InvTransDetailRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getItemSourceDetailPage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\ItemSourceDetailRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getItemSourcePage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\VendorItemSourceRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_getLineId_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\ap\service\BillLineIdRespItem();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VspVendorBillAndDiscountService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>