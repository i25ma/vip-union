<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PurchaseOrder {
	
	static $_TSPEC;
	public $purchase_no = null;
	public $delivery_no = null;
	public $receive_warehouse_name = null;
	public $receive_warehouse_code = null;
	public $delivery_time = null;
	public $purchase_type = null;
	public $vendor_code = null;
	public $vendor_name = null;
	public $company_code = null;
	public $return_address = null;
	public $buyer_name = null;
	public $is_whale_warehouse = null;
	public $receiving_type = null;
	public $goods_type = null;
	public $distributable_goods_time = null;
	public $cooperationMode = null;
	public $rfid_template_code = null;
	public $is_crossdock = null;
	public $owner_code = null;
	public $brand_name = null;
	public $business_type = null;
	public $standard_goods_flag = null;
	public $goods_channel = null;
	public $transport_no = null;
	public $approval_status = null;
	public $delivery_status = null;
	public $is_create_prod = null;
	public $po_alias = null;
	public $special_flag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchase_no'
			),
			2 => array(
			'var' => 'delivery_no'
			),
			3 => array(
			'var' => 'receive_warehouse_name'
			),
			4 => array(
			'var' => 'receive_warehouse_code'
			),
			5 => array(
			'var' => 'delivery_time'
			),
			6 => array(
			'var' => 'purchase_type'
			),
			7 => array(
			'var' => 'vendor_code'
			),
			8 => array(
			'var' => 'vendor_name'
			),
			9 => array(
			'var' => 'company_code'
			),
			10 => array(
			'var' => 'return_address'
			),
			11 => array(
			'var' => 'buyer_name'
			),
			12 => array(
			'var' => 'is_whale_warehouse'
			),
			13 => array(
			'var' => 'receiving_type'
			),
			14 => array(
			'var' => 'goods_type'
			),
			15 => array(
			'var' => 'distributable_goods_time'
			),
			16 => array(
			'var' => 'cooperationMode'
			),
			17 => array(
			'var' => 'rfid_template_code'
			),
			18 => array(
			'var' => 'is_crossdock'
			),
			19 => array(
			'var' => 'owner_code'
			),
			20 => array(
			'var' => 'brand_name'
			),
			21 => array(
			'var' => 'business_type'
			),
			22 => array(
			'var' => 'standard_goods_flag'
			),
			23 => array(
			'var' => 'goods_channel'
			),
			24 => array(
			'var' => 'transport_no'
			),
			25 => array(
			'var' => 'approval_status'
			),
			26 => array(
			'var' => 'delivery_status'
			),
			27 => array(
			'var' => 'is_create_prod'
			),
			28 => array(
			'var' => 'po_alias'
			),
			29 => array(
			'var' => 'special_flag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchase_no'])){
				
				$this->purchase_no = $vals['purchase_no'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['receive_warehouse_name'])){
				
				$this->receive_warehouse_name = $vals['receive_warehouse_name'];
			}
			
			
			if (isset($vals['receive_warehouse_code'])){
				
				$this->receive_warehouse_code = $vals['receive_warehouse_code'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['purchase_type'])){
				
				$this->purchase_type = $vals['purchase_type'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['return_address'])){
				
				$this->return_address = $vals['return_address'];
			}
			
			
			if (isset($vals['buyer_name'])){
				
				$this->buyer_name = $vals['buyer_name'];
			}
			
			
			if (isset($vals['is_whale_warehouse'])){
				
				$this->is_whale_warehouse = $vals['is_whale_warehouse'];
			}
			
			
			if (isset($vals['receiving_type'])){
				
				$this->receiving_type = $vals['receiving_type'];
			}
			
			
			if (isset($vals['goods_type'])){
				
				$this->goods_type = $vals['goods_type'];
			}
			
			
			if (isset($vals['distributable_goods_time'])){
				
				$this->distributable_goods_time = $vals['distributable_goods_time'];
			}
			
			
			if (isset($vals['cooperationMode'])){
				
				$this->cooperationMode = $vals['cooperationMode'];
			}
			
			
			if (isset($vals['rfid_template_code'])){
				
				$this->rfid_template_code = $vals['rfid_template_code'];
			}
			
			
			if (isset($vals['is_crossdock'])){
				
				$this->is_crossdock = $vals['is_crossdock'];
			}
			
			
			if (isset($vals['owner_code'])){
				
				$this->owner_code = $vals['owner_code'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['business_type'])){
				
				$this->business_type = $vals['business_type'];
			}
			
			
			if (isset($vals['standard_goods_flag'])){
				
				$this->standard_goods_flag = $vals['standard_goods_flag'];
			}
			
			
			if (isset($vals['goods_channel'])){
				
				$this->goods_channel = $vals['goods_channel'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['approval_status'])){
				
				$this->approval_status = $vals['approval_status'];
			}
			
			
			if (isset($vals['delivery_status'])){
				
				$this->delivery_status = $vals['delivery_status'];
			}
			
			
			if (isset($vals['is_create_prod'])){
				
				$this->is_create_prod = $vals['is_create_prod'];
			}
			
			
			if (isset($vals['po_alias'])){
				
				$this->po_alias = $vals['po_alias'];
			}
			
			
			if (isset($vals['special_flag'])){
				
				$this->special_flag = $vals['special_flag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_no);
				
			}
			
			
			
			
			if ("delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_no);
				
			}
			
			
			
			
			if ("receive_warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receive_warehouse_name);
				
			}
			
			
			
			
			if ("receive_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receive_warehouse_code);
				
			}
			
			
			
			
			if ("delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->delivery_time);
				
			}
			
			
			
			
			if ("purchase_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchase_type); 
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("return_address" == $schemeField){
				
				$needSkip = false;
				
				$this->return_address = new \vipapis\xstore\cc\bulkbuying\api\Address();
				$this->return_address->read($input);
				
			}
			
			
			
			
			if ("buyer_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_name);
				
			}
			
			
			
			
			if ("is_whale_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_whale_warehouse); 
				
			}
			
			
			
			
			if ("receiving_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->receiving_type); 
				
			}
			
			
			
			
			if ("goods_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goods_type); 
				
			}
			
			
			
			
			if ("distributable_goods_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->distributable_goods_time);
				
			}
			
			
			
			
			if ("cooperationMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperationMode); 
				
			}
			
			
			
			
			if ("rfid_template_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rfid_template_code);
				
			}
			
			
			
			
			if ("is_crossdock" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_crossdock);
				
			}
			
			
			
			
			if ("owner_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->owner_code);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("business_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->business_type); 
				
			}
			
			
			
			
			if ("standard_goods_flag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->standard_goods_flag); 
				
			}
			
			
			
			
			if ("goods_channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_channel);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("approval_status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->approval_status); 
				
			}
			
			
			
			
			if ("delivery_status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->delivery_status); 
				
			}
			
			
			
			
			if ("is_create_prod" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_create_prod); 
				
			}
			
			
			
			
			if ("po_alias" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_alias);
				
			}
			
			
			
			
			if ("special_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->special_flag);
				
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
		
		if($this->purchase_no !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_no');
			$xfer += $output->writeString($this->purchase_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receive_warehouse_name !== null) {
			
			$xfer += $output->writeFieldBegin('receive_warehouse_name');
			$xfer += $output->writeString($this->receive_warehouse_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receive_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('receive_warehouse_code');
			$xfer += $output->writeString($this->receive_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_time');
			$xfer += $output->writeI64($this->delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_type !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_type');
			$xfer += $output->writeI32($this->purchase_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->company_code !== null) {
			
			$xfer += $output->writeFieldBegin('company_code');
			$xfer += $output->writeString($this->company_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_address !== null) {
			
			$xfer += $output->writeFieldBegin('return_address');
			
			if (!is_object($this->return_address)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->return_address->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_name !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_name');
			$xfer += $output->writeString($this->buyer_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_whale_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('is_whale_warehouse');
			$xfer += $output->writeByte($this->is_whale_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiving_type !== null) {
			
			$xfer += $output->writeFieldBegin('receiving_type');
			$xfer += $output->writeByte($this->receiving_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('goods_type');
		$xfer += $output->writeI32($this->goods_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->distributable_goods_time !== null) {
			
			$xfer += $output->writeFieldBegin('distributable_goods_time');
			$xfer += $output->writeI64($this->distributable_goods_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationMode !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationMode');
			$xfer += $output->writeByte($this->cooperationMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rfid_template_code !== null) {
			
			$xfer += $output->writeFieldBegin('rfid_template_code');
			$xfer += $output->writeString($this->rfid_template_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_crossdock !== null) {
			
			$xfer += $output->writeFieldBegin('is_crossdock');
			$xfer += $output->writeString($this->is_crossdock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->owner_code !== null) {
			
			$xfer += $output->writeFieldBegin('owner_code');
			$xfer += $output->writeString($this->owner_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->business_type !== null) {
			
			$xfer += $output->writeFieldBegin('business_type');
			$xfer += $output->writeByte($this->business_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->standard_goods_flag !== null) {
			
			$xfer += $output->writeFieldBegin('standard_goods_flag');
			$xfer += $output->writeByte($this->standard_goods_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_channel !== null) {
			
			$xfer += $output->writeFieldBegin('goods_channel');
			$xfer += $output->writeString($this->goods_channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approval_status !== null) {
			
			$xfer += $output->writeFieldBegin('approval_status');
			$xfer += $output->writeByte($this->approval_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_status !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_status');
			$xfer += $output->writeByte($this->delivery_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_create_prod !== null) {
			
			$xfer += $output->writeFieldBegin('is_create_prod');
			$xfer += $output->writeByte($this->is_create_prod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_alias !== null) {
			
			$xfer += $output->writeFieldBegin('po_alias');
			$xfer += $output->writeString($this->po_alias);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->special_flag !== null) {
			
			$xfer += $output->writeFieldBegin('special_flag');
			$xfer += $output->writeString($this->special_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>