<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class CreateSpuItem {
	
	static $_TSPEC;
	public $sn = null;
	public $brand_id = null;
	public $category_id = null;
	public $product_name = null;
	public $product_description = null;
	public $area_output = null;
	public $product_props = null;
	public $vendor_product_props = null;
	public $tax_rate = null;
	public $unit = null;
	public $is_embargo = null;
	public $is_fragile = null;
	public $is_large = null;
	public $is_precious = null;
	public $is_consumption_tax = null;
	public $is_makeup = null;
	public $is_3d_try = null;
	public $is_need_valid = null;
	public $washing_instruct = null;
	public $sale_service = null;
	public $sub_title = null;
	public $accessory_info = null;
	public $video_url = null;
	public $length = null;
	public $width = null;
	public $high = null;
	public $gross_weight = null;
	public $weight = null;
	public $product_type = null;
	public $currency = null;
	public $sku_item_list = null;
	public $simple_product_props = null;
	public $selling_point_title = null;
	public $item_detail_modules = null;
	public $accessory_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sn'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'category_id'
			),
			4 => array(
			'var' => 'product_name'
			),
			5 => array(
			'var' => 'product_description'
			),
			6 => array(
			'var' => 'area_output'
			),
			7 => array(
			'var' => 'product_props'
			),
			8 => array(
			'var' => 'vendor_product_props'
			),
			9 => array(
			'var' => 'tax_rate'
			),
			10 => array(
			'var' => 'unit'
			),
			11 => array(
			'var' => 'is_embargo'
			),
			12 => array(
			'var' => 'is_fragile'
			),
			13 => array(
			'var' => 'is_large'
			),
			14 => array(
			'var' => 'is_precious'
			),
			15 => array(
			'var' => 'is_consumption_tax'
			),
			16 => array(
			'var' => 'is_makeup'
			),
			17 => array(
			'var' => 'is_3d_try'
			),
			18 => array(
			'var' => 'is_need_valid'
			),
			19 => array(
			'var' => 'washing_instruct'
			),
			20 => array(
			'var' => 'sale_service'
			),
			21 => array(
			'var' => 'sub_title'
			),
			22 => array(
			'var' => 'accessory_info'
			),
			23 => array(
			'var' => 'video_url'
			),
			24 => array(
			'var' => 'length'
			),
			25 => array(
			'var' => 'width'
			),
			26 => array(
			'var' => 'high'
			),
			27 => array(
			'var' => 'gross_weight'
			),
			28 => array(
			'var' => 'weight'
			),
			29 => array(
			'var' => 'product_type'
			),
			30 => array(
			'var' => 'currency'
			),
			31 => array(
			'var' => 'sku_item_list'
			),
			32 => array(
			'var' => 'simple_product_props'
			),
			33 => array(
			'var' => 'selling_point_title'
			),
			34 => array(
			'var' => 'item_detail_modules'
			),
			35 => array(
			'var' => 'accessory_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['product_description'])){
				
				$this->product_description = $vals['product_description'];
			}
			
			
			if (isset($vals['area_output'])){
				
				$this->area_output = $vals['area_output'];
			}
			
			
			if (isset($vals['product_props'])){
				
				$this->product_props = $vals['product_props'];
			}
			
			
			if (isset($vals['vendor_product_props'])){
				
				$this->vendor_product_props = $vals['vendor_product_props'];
			}
			
			
			if (isset($vals['tax_rate'])){
				
				$this->tax_rate = $vals['tax_rate'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['is_embargo'])){
				
				$this->is_embargo = $vals['is_embargo'];
			}
			
			
			if (isset($vals['is_fragile'])){
				
				$this->is_fragile = $vals['is_fragile'];
			}
			
			
			if (isset($vals['is_large'])){
				
				$this->is_large = $vals['is_large'];
			}
			
			
			if (isset($vals['is_precious'])){
				
				$this->is_precious = $vals['is_precious'];
			}
			
			
			if (isset($vals['is_consumption_tax'])){
				
				$this->is_consumption_tax = $vals['is_consumption_tax'];
			}
			
			
			if (isset($vals['is_makeup'])){
				
				$this->is_makeup = $vals['is_makeup'];
			}
			
			
			if (isset($vals['is_3d_try'])){
				
				$this->is_3d_try = $vals['is_3d_try'];
			}
			
			
			if (isset($vals['is_need_valid'])){
				
				$this->is_need_valid = $vals['is_need_valid'];
			}
			
			
			if (isset($vals['washing_instruct'])){
				
				$this->washing_instruct = $vals['washing_instruct'];
			}
			
			
			if (isset($vals['sale_service'])){
				
				$this->sale_service = $vals['sale_service'];
			}
			
			
			if (isset($vals['sub_title'])){
				
				$this->sub_title = $vals['sub_title'];
			}
			
			
			if (isset($vals['accessory_info'])){
				
				$this->accessory_info = $vals['accessory_info'];
			}
			
			
			if (isset($vals['video_url'])){
				
				$this->video_url = $vals['video_url'];
			}
			
			
			if (isset($vals['length'])){
				
				$this->length = $vals['length'];
			}
			
			
			if (isset($vals['width'])){
				
				$this->width = $vals['width'];
			}
			
			
			if (isset($vals['high'])){
				
				$this->high = $vals['high'];
			}
			
			
			if (isset($vals['gross_weight'])){
				
				$this->gross_weight = $vals['gross_weight'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['product_type'])){
				
				$this->product_type = $vals['product_type'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['sku_item_list'])){
				
				$this->sku_item_list = $vals['sku_item_list'];
			}
			
			
			if (isset($vals['simple_product_props'])){
				
				$this->simple_product_props = $vals['simple_product_props'];
			}
			
			
			if (isset($vals['selling_point_title'])){
				
				$this->selling_point_title = $vals['selling_point_title'];
			}
			
			
			if (isset($vals['item_detail_modules'])){
				
				$this->item_detail_modules = $vals['item_detail_modules'];
			}
			
			
			if (isset($vals['accessory_list'])){
				
				$this->accessory_list = $vals['accessory_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateSpuItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brand_id); 
				
			}
			
			
			
			
			if ("category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category_id); 
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("product_description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_description);
				
			}
			
			
			
			
			if ("area_output" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_output);
				
			}
			
			
			
			
			if ("product_props" == $schemeField){
				
				$needSkip = false;
				
				$this->product_props = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->product_props[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("vendor_product_props" == $schemeField){
				
				$needSkip = false;
				
				$this->vendor_product_props = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->vendor_product_props[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->tax_rate);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\product\Unit::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->unit = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("is_embargo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_embargo); 
				
			}
			
			
			
			
			if ("is_fragile" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_fragile); 
				
			}
			
			
			
			
			if ("is_large" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_large); 
				
			}
			
			
			
			
			if ("is_precious" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_precious); 
				
			}
			
			
			
			
			if ("is_consumption_tax" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_consumption_tax); 
				
			}
			
			
			
			
			if ("is_makeup" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_makeup); 
				
			}
			
			
			
			
			if ("is_3d_try" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_3d_try); 
				
			}
			
			
			
			
			if ("is_need_valid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_need_valid); 
				
			}
			
			
			
			
			if ("washing_instruct" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->washing_instruct);
				
			}
			
			
			
			
			if ("sale_service" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_service);
				
			}
			
			
			
			
			if ("sub_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_title);
				
			}
			
			
			
			
			if ("accessory_info" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessory_info);
				
			}
			
			
			
			
			if ("video_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->video_url);
				
			}
			
			
			
			
			if ("length" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->length);
				
			}
			
			
			
			
			if ("width" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->width);
				
			}
			
			
			
			
			if ("high" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->high);
				
			}
			
			
			
			
			if ("gross_weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->gross_weight);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("product_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\product\ProductType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->product_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\common\Currency::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->currency = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("sku_item_list" == $schemeField){
				
				$needSkip = false;
				
				$this->sku_item_list = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\product\CreateSkuItem();
						$elem2->read($input);
						
						$this->sku_item_list[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("simple_product_props" == $schemeField){
				
				$needSkip = false;
				
				$this->simple_product_props = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \vipapis\product\SimpleProperty();
						$elem3->read($input);
						
						$this->simple_product_props[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("selling_point_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->selling_point_title);
				
			}
			
			
			
			
			if ("item_detail_modules" == $schemeField){
				
				$needSkip = false;
				
				$this->item_detail_modules = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \vipapis\product\ItemDetailModules();
						$elem4->read($input);
						
						$this->item_detail_modules[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("accessory_list" == $schemeField){
				
				$needSkip = false;
				
				$this->accessory_list = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						
						$elem5 = new \vipapis\product\Accessory();
						$elem5->read($input);
						
						$this->accessory_list[$_size5++] = $elem5;
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
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category_id');
		$xfer += $output->writeI32($this->category_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_name');
		$xfer += $output->writeString($this->product_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->product_description !== null) {
			
			$xfer += $output->writeFieldBegin('product_description');
			$xfer += $output->writeString($this->product_description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('area_output');
		$xfer += $output->writeString($this->area_output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->product_props !== null) {
			
			$xfer += $output->writeFieldBegin('product_props');
			
			if (!is_array($this->product_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->product_props as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_product_props !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_product_props');
			
			if (!is_array($this->vendor_product_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->vendor_product_props as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_rate !== null) {
			
			$xfer += $output->writeFieldBegin('tax_rate');
			$xfer += $output->writeDouble($this->tax_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('unit');
		
		$em = new \vipapis\product\Unit; 
		$output->writeString($em::$__names[$this->unit]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_embargo !== null) {
			
			$xfer += $output->writeFieldBegin('is_embargo');
			$xfer += $output->writeI32($this->is_embargo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('is_fragile');
		$xfer += $output->writeI32($this->is_fragile);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_large');
		$xfer += $output->writeI32($this->is_large);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_precious');
		$xfer += $output->writeI32($this->is_precious);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_consumption_tax !== null) {
			
			$xfer += $output->writeFieldBegin('is_consumption_tax');
			$xfer += $output->writeI32($this->is_consumption_tax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_makeup !== null) {
			
			$xfer += $output->writeFieldBegin('is_makeup');
			$xfer += $output->writeI32($this->is_makeup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_3d_try !== null) {
			
			$xfer += $output->writeFieldBegin('is_3d_try');
			$xfer += $output->writeI32($this->is_3d_try);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_need_valid !== null) {
			
			$xfer += $output->writeFieldBegin('is_need_valid');
			$xfer += $output->writeI32($this->is_need_valid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->washing_instruct !== null) {
			
			$xfer += $output->writeFieldBegin('washing_instruct');
			$xfer += $output->writeString($this->washing_instruct);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_service !== null) {
			
			$xfer += $output->writeFieldBegin('sale_service');
			$xfer += $output->writeString($this->sale_service);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_title !== null) {
			
			$xfer += $output->writeFieldBegin('sub_title');
			$xfer += $output->writeString($this->sub_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessory_info !== null) {
			
			$xfer += $output->writeFieldBegin('accessory_info');
			$xfer += $output->writeString($this->accessory_info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->video_url !== null) {
			
			$xfer += $output->writeFieldBegin('video_url');
			$xfer += $output->writeString($this->video_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->length !== null) {
			
			$xfer += $output->writeFieldBegin('length');
			$xfer += $output->writeDouble($this->length);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->width !== null) {
			
			$xfer += $output->writeFieldBegin('width');
			$xfer += $output->writeDouble($this->width);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->high !== null) {
			
			$xfer += $output->writeFieldBegin('high');
			$xfer += $output->writeDouble($this->high);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gross_weight !== null) {
			
			$xfer += $output->writeFieldBegin('gross_weight');
			$xfer += $output->writeDouble($this->gross_weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('product_type');
		
		$em = new \vipapis\product\ProductType; 
		$output->writeString($em::$__names[$this->product_type]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			
			$em = new \vipapis\common\Currency; 
			$output->writeString($em::$__names[$this->currency]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sku_item_list');
		
		if (!is_array($this->sku_item_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->sku_item_list as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->simple_product_props !== null) {
			
			$xfer += $output->writeFieldBegin('simple_product_props');
			
			if (!is_array($this->simple_product_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->simple_product_props as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->selling_point_title !== null) {
			
			$xfer += $output->writeFieldBegin('selling_point_title');
			$xfer += $output->writeString($this->selling_point_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_detail_modules !== null) {
			
			$xfer += $output->writeFieldBegin('item_detail_modules');
			
			if (!is_array($this->item_detail_modules)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->item_detail_modules as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessory_list !== null) {
			
			$xfer += $output->writeFieldBegin('accessory_list');
			
			if (!is_array($this->accessory_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->accessory_list as $iter0){
				
				
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