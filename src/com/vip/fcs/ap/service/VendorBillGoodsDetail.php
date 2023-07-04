<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class VendorBillGoodsDetail {
	
	static $_TSPEC;
	public $dbNo = null;
	public $itemSize = null;
	public $vendorGoodsNo = null;
	public $poDeliveryType = null;
	public $priceTime = null;
	public $extOrderNum = null;
	public $deliveryWarehouseCode = null;
	public $deliveryWarehouseName = null;
	public $claimType = null;
	public $applyQuantity = null;
	public $actualQuantity = null;
	public $workNo = null;
	public $workSolvedTime = null;
	public $errorItemNo = null;
	public $judgedBy = null;
	public $extBillTaxPrice = null;
	public $extSumFavPrice = null;
	public $extSumVendorFavPrice = null;
	public $extBasePrice = null;
	public $extPoDeliveryTypeName = null;
	public $extGrossMarginRate = null;
	public $extWarehouseExt = null;
	public $specialOrderCategory = null;
	public $specialScheduleId = null;
	public $specialRelatedOrder = null;
	public $extendField = null;
	public $globalId = null;
	public $vendorId = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $orgId = null;
	public $orgName = null;
	public $warehouse = null;
	public $scheduleId = null;
	public $scheduleName = null;
	public $brandId = null;
	public $vBrandName = null;
	public $poNo = null;
	public $poCreationDate = null;
	public $origPoNo = null;
	public $orderNum = null;
	public $orderDate = null;
	public $itemNo = null;
	public $itemDescription = null;
	public $goodsNo = null;
	public $brandCode = null;
	public $brandName = null;
	public $transactionQuantity = null;
	public $dataSign = null;
	public $orderPrice = null;
	public $currencyCode = null;
	public $taxRate = null;
	public $periodName = null;
	public $transactionTypeId = null;
	public $transactionDate = null;
	public $payableBillAmount = null;
	public $vendorRate = null;
	public $confirmNo = null;
	public $salePlatform = null;
	public $salePlatformName = null;
	public $createdTime = null;
	public $updatedTime = null;
	public $isDeleted = null;
	public $grossMarginRate = null;
	public $remark = null;
	public $poPrice = null;
	public $poTaxPrice = null;
	public $payableTotalBillAmount = null;
	public $detailLineType = null;
	public $warehouseExt = null;
	public $priceContractNum = null;
	public $billPrice = null;
	public $billTaxPrice = null;
	public $trxCreationDate = null;
	public $payableQuantity = null;
	public $transactionTypeCommand = null;
	public $billQuantity = null;
	public $billAmount = null;
	public $totalBillAmount = null;
	public $poNoRef = null;
	public $referenceNumber = null;
	public $exchangeFlag = null;
	public $transactionAmount = null;
	public $totalTransactionAmount = null;
	public $activeNewRuleFlag = null;
	public $activeOrderPrice = null;
	public $activeType = null;
	public $activeName = null;
	public $invGlobalId = null;
	public $sourceLineType = null;
	public $prebuyOrderFlag = null;
	public $custReturnType = null;
	public $transportNo = null;
	public $onlineDate = null;
	public $sumVendorFavPrice = null;
	public $vendorSyncTime = null;
	public $sumFavPrice = null;
	public $poWareHouseType = null;
	public $originalPrice = null;
	public $sizeId = null;
	public $parentSizeId = null;
	public $applyDocNo = null;
	public $adjustReason = null;
	public $yardNoListName = null;
	public $activeTypeNameStr = null;
	public $v2TrxDate = null;
	public $stageBillNumber = null;
	public $residualBillNumber = null;
	public $pickNo = null;
	public $deliveryNo = null;
	public $marketPrice = null;
	public $sourceLineName = null;
	public $detailLineName = null;
	public $extOrderPrice = null;
	public $extNetPrice = null;
	public $isSigned = null;
	public $signDate = null;
	public $calculateDate = null;
	public $extNetAmount = null;
	public $extBaseAmount = null;
	public $extBillTaxAmount = null;
	public $extSumFavAmount = null;
	public $extSumVendorAmount = null;
	public $netBillTaxPrice = null;
	public $sourceReturnVarianceDocNo = null;
	public $vendorOrderNum = null;
	public $vendorOrderBilledFlag = null;
	public $repairChangeToReturn = null;
	public $arrivalPrice = null;
	public $billStatus = null;
	public $billNumber = null;
	public $brandAdmin = null;
	public $sourceId = null;
	public $billType = null;
	public $whType = null;
	public $specialReturnFlag = null;
	public $sourceStatus = null;
	public $specialReturnDupFlag = null;
	public $vendorReturnNo = null;
	public $specialDate = null;
	public $giftFlag = null;
	public $htBatchNo = null;
	public $nlcTotalAmount = null;
	public $returnVarianceDocNo = null;
	public $vin = null;
	public $returnVariancePoNo = null;
	public $headerId = null;
	public $lineId = null;
	public $stagePercent = null;
	public $quantity = null;
	public $prebilledBillAmount = null;
	public $prebilledQuantity = null;
	public $signTime = null;
	public $startDate = null;
	public $endDate = null;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			501 => array(
			'var' => 'dbNo'
			),
			502 => array(
			'var' => 'itemSize'
			),
			503 => array(
			'var' => 'vendorGoodsNo'
			),
			504 => array(
			'var' => 'poDeliveryType'
			),
			505 => array(
			'var' => 'priceTime'
			),
			506 => array(
			'var' => 'extOrderNum'
			),
			507 => array(
			'var' => 'deliveryWarehouseCode'
			),
			508 => array(
			'var' => 'deliveryWarehouseName'
			),
			509 => array(
			'var' => 'claimType'
			),
			510 => array(
			'var' => 'applyQuantity'
			),
			511 => array(
			'var' => 'actualQuantity'
			),
			512 => array(
			'var' => 'workNo'
			),
			513 => array(
			'var' => 'workSolvedTime'
			),
			514 => array(
			'var' => 'errorItemNo'
			),
			515 => array(
			'var' => 'judgedBy'
			),
			516 => array(
			'var' => 'extBillTaxPrice'
			),
			517 => array(
			'var' => 'extSumFavPrice'
			),
			518 => array(
			'var' => 'extSumVendorFavPrice'
			),
			519 => array(
			'var' => 'extBasePrice'
			),
			520 => array(
			'var' => 'extPoDeliveryTypeName'
			),
			521 => array(
			'var' => 'extGrossMarginRate'
			),
			522 => array(
			'var' => 'extWarehouseExt'
			),
			523 => array(
			'var' => 'specialOrderCategory'
			),
			524 => array(
			'var' => 'specialScheduleId'
			),
			525 => array(
			'var' => 'specialRelatedOrder'
			),
			526 => array(
			'var' => 'extendField'
			),
			1 => array(
			'var' => 'globalId'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'vendorName'
			),
			6 => array(
			'var' => 'orgId'
			),
			7 => array(
			'var' => 'orgName'
			),
			8 => array(
			'var' => 'warehouse'
			),
			9 => array(
			'var' => 'scheduleId'
			),
			10 => array(
			'var' => 'scheduleName'
			),
			11 => array(
			'var' => 'brandId'
			),
			12 => array(
			'var' => 'vBrandName'
			),
			13 => array(
			'var' => 'poNo'
			),
			14 => array(
			'var' => 'poCreationDate'
			),
			15 => array(
			'var' => 'origPoNo'
			),
			16 => array(
			'var' => 'orderNum'
			),
			17 => array(
			'var' => 'orderDate'
			),
			18 => array(
			'var' => 'itemNo'
			),
			19 => array(
			'var' => 'itemDescription'
			),
			20 => array(
			'var' => 'goodsNo'
			),
			21 => array(
			'var' => 'brandCode'
			),
			22 => array(
			'var' => 'brandName'
			),
			23 => array(
			'var' => 'transactionQuantity'
			),
			24 => array(
			'var' => 'dataSign'
			),
			25 => array(
			'var' => 'orderPrice'
			),
			26 => array(
			'var' => 'currencyCode'
			),
			27 => array(
			'var' => 'taxRate'
			),
			28 => array(
			'var' => 'periodName'
			),
			29 => array(
			'var' => 'transactionTypeId'
			),
			30 => array(
			'var' => 'transactionDate'
			),
			31 => array(
			'var' => 'payableBillAmount'
			),
			33 => array(
			'var' => 'vendorRate'
			),
			34 => array(
			'var' => 'confirmNo'
			),
			35 => array(
			'var' => 'salePlatform'
			),
			36 => array(
			'var' => 'salePlatformName'
			),
			37 => array(
			'var' => 'createdTime'
			),
			38 => array(
			'var' => 'updatedTime'
			),
			39 => array(
			'var' => 'isDeleted'
			),
			40 => array(
			'var' => 'grossMarginRate'
			),
			41 => array(
			'var' => 'remark'
			),
			42 => array(
			'var' => 'poPrice'
			),
			43 => array(
			'var' => 'poTaxPrice'
			),
			48 => array(
			'var' => 'payableTotalBillAmount'
			),
			49 => array(
			'var' => 'detailLineType'
			),
			50 => array(
			'var' => 'warehouseExt'
			),
			100 => array(
			'var' => 'priceContractNum'
			),
			102 => array(
			'var' => 'billPrice'
			),
			103 => array(
			'var' => 'billTaxPrice'
			),
			104 => array(
			'var' => 'trxCreationDate'
			),
			105 => array(
			'var' => 'payableQuantity'
			),
			106 => array(
			'var' => 'transactionTypeCommand'
			),
			107 => array(
			'var' => 'billQuantity'
			),
			108 => array(
			'var' => 'billAmount'
			),
			109 => array(
			'var' => 'totalBillAmount'
			),
			110 => array(
			'var' => 'poNoRef'
			),
			111 => array(
			'var' => 'referenceNumber'
			),
			112 => array(
			'var' => 'exchangeFlag'
			),
			113 => array(
			'var' => 'transactionAmount'
			),
			114 => array(
			'var' => 'totalTransactionAmount'
			),
			115 => array(
			'var' => 'activeNewRuleFlag'
			),
			116 => array(
			'var' => 'activeOrderPrice'
			),
			117 => array(
			'var' => 'activeType'
			),
			118 => array(
			'var' => 'activeName'
			),
			120 => array(
			'var' => 'invGlobalId'
			),
			121 => array(
			'var' => 'sourceLineType'
			),
			122 => array(
			'var' => 'prebuyOrderFlag'
			),
			123 => array(
			'var' => 'custReturnType'
			),
			124 => array(
			'var' => 'transportNo'
			),
			125 => array(
			'var' => 'onlineDate'
			),
			126 => array(
			'var' => 'sumVendorFavPrice'
			),
			127 => array(
			'var' => 'vendorSyncTime'
			),
			128 => array(
			'var' => 'sumFavPrice'
			),
			129 => array(
			'var' => 'poWareHouseType'
			),
			130 => array(
			'var' => 'originalPrice'
			),
			131 => array(
			'var' => 'sizeId'
			),
			132 => array(
			'var' => 'parentSizeId'
			),
			133 => array(
			'var' => 'applyDocNo'
			),
			134 => array(
			'var' => 'adjustReason'
			),
			135 => array(
			'var' => 'yardNoListName'
			),
			136 => array(
			'var' => 'activeTypeNameStr'
			),
			137 => array(
			'var' => 'v2TrxDate'
			),
			138 => array(
			'var' => 'stageBillNumber'
			),
			139 => array(
			'var' => 'residualBillNumber'
			),
			140 => array(
			'var' => 'pickNo'
			),
			141 => array(
			'var' => 'deliveryNo'
			),
			142 => array(
			'var' => 'marketPrice'
			),
			143 => array(
			'var' => 'sourceLineName'
			),
			144 => array(
			'var' => 'detailLineName'
			),
			145 => array(
			'var' => 'extOrderPrice'
			),
			146 => array(
			'var' => 'extNetPrice'
			),
			147 => array(
			'var' => 'isSigned'
			),
			148 => array(
			'var' => 'signDate'
			),
			149 => array(
			'var' => 'calculateDate'
			),
			150 => array(
			'var' => 'extNetAmount'
			),
			151 => array(
			'var' => 'extBaseAmount'
			),
			152 => array(
			'var' => 'extBillTaxAmount'
			),
			153 => array(
			'var' => 'extSumFavAmount'
			),
			154 => array(
			'var' => 'extSumVendorAmount'
			),
			155 => array(
			'var' => 'netBillTaxPrice'
			),
			156 => array(
			'var' => 'sourceReturnVarianceDocNo'
			),
			157 => array(
			'var' => 'vendorOrderNum'
			),
			158 => array(
			'var' => 'vendorOrderBilledFlag'
			),
			159 => array(
			'var' => 'repairChangeToReturn'
			),
			160 => array(
			'var' => 'arrivalPrice'
			),
			119 => array(
			'var' => 'billStatus'
			),
			200 => array(
			'var' => 'billNumber'
			),
			201 => array(
			'var' => 'brandAdmin'
			),
			202 => array(
			'var' => 'sourceId'
			),
			203 => array(
			'var' => 'billType'
			),
			205 => array(
			'var' => 'whType'
			),
			206 => array(
			'var' => 'specialReturnFlag'
			),
			207 => array(
			'var' => 'sourceStatus'
			),
			208 => array(
			'var' => 'specialReturnDupFlag'
			),
			209 => array(
			'var' => 'vendorReturnNo'
			),
			210 => array(
			'var' => 'specialDate'
			),
			211 => array(
			'var' => 'giftFlag'
			),
			212 => array(
			'var' => 'htBatchNo'
			),
			213 => array(
			'var' => 'nlcTotalAmount'
			),
			214 => array(
			'var' => 'returnVarianceDocNo'
			),
			215 => array(
			'var' => 'vin'
			),
			216 => array(
			'var' => 'returnVariancePoNo'
			),
			217 => array(
			'var' => 'headerId'
			),
			218 => array(
			'var' => 'lineId'
			),
			220 => array(
			'var' => 'stagePercent'
			),
			221 => array(
			'var' => 'quantity'
			),
			222 => array(
			'var' => 'prebilledBillAmount'
			),
			223 => array(
			'var' => 'prebilledQuantity'
			),
			225 => array(
			'var' => 'signTime'
			),
			226 => array(
			'var' => 'startDate'
			),
			227 => array(
			'var' => 'endDate'
			),
			228 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['dbNo'])){
				
				$this->dbNo = $vals['dbNo'];
			}
			
			
			if (isset($vals['itemSize'])){
				
				$this->itemSize = $vals['itemSize'];
			}
			
			
			if (isset($vals['vendorGoodsNo'])){
				
				$this->vendorGoodsNo = $vals['vendorGoodsNo'];
			}
			
			
			if (isset($vals['poDeliveryType'])){
				
				$this->poDeliveryType = $vals['poDeliveryType'];
			}
			
			
			if (isset($vals['priceTime'])){
				
				$this->priceTime = $vals['priceTime'];
			}
			
			
			if (isset($vals['extOrderNum'])){
				
				$this->extOrderNum = $vals['extOrderNum'];
			}
			
			
			if (isset($vals['deliveryWarehouseCode'])){
				
				$this->deliveryWarehouseCode = $vals['deliveryWarehouseCode'];
			}
			
			
			if (isset($vals['deliveryWarehouseName'])){
				
				$this->deliveryWarehouseName = $vals['deliveryWarehouseName'];
			}
			
			
			if (isset($vals['claimType'])){
				
				$this->claimType = $vals['claimType'];
			}
			
			
			if (isset($vals['applyQuantity'])){
				
				$this->applyQuantity = $vals['applyQuantity'];
			}
			
			
			if (isset($vals['actualQuantity'])){
				
				$this->actualQuantity = $vals['actualQuantity'];
			}
			
			
			if (isset($vals['workNo'])){
				
				$this->workNo = $vals['workNo'];
			}
			
			
			if (isset($vals['workSolvedTime'])){
				
				$this->workSolvedTime = $vals['workSolvedTime'];
			}
			
			
			if (isset($vals['errorItemNo'])){
				
				$this->errorItemNo = $vals['errorItemNo'];
			}
			
			
			if (isset($vals['judgedBy'])){
				
				$this->judgedBy = $vals['judgedBy'];
			}
			
			
			if (isset($vals['extBillTaxPrice'])){
				
				$this->extBillTaxPrice = $vals['extBillTaxPrice'];
			}
			
			
			if (isset($vals['extSumFavPrice'])){
				
				$this->extSumFavPrice = $vals['extSumFavPrice'];
			}
			
			
			if (isset($vals['extSumVendorFavPrice'])){
				
				$this->extSumVendorFavPrice = $vals['extSumVendorFavPrice'];
			}
			
			
			if (isset($vals['extBasePrice'])){
				
				$this->extBasePrice = $vals['extBasePrice'];
			}
			
			
			if (isset($vals['extPoDeliveryTypeName'])){
				
				$this->extPoDeliveryTypeName = $vals['extPoDeliveryTypeName'];
			}
			
			
			if (isset($vals['extGrossMarginRate'])){
				
				$this->extGrossMarginRate = $vals['extGrossMarginRate'];
			}
			
			
			if (isset($vals['extWarehouseExt'])){
				
				$this->extWarehouseExt = $vals['extWarehouseExt'];
			}
			
			
			if (isset($vals['specialOrderCategory'])){
				
				$this->specialOrderCategory = $vals['specialOrderCategory'];
			}
			
			
			if (isset($vals['specialScheduleId'])){
				
				$this->specialScheduleId = $vals['specialScheduleId'];
			}
			
			
			if (isset($vals['specialRelatedOrder'])){
				
				$this->specialRelatedOrder = $vals['specialRelatedOrder'];
			}
			
			
			if (isset($vals['extendField'])){
				
				$this->extendField = $vals['extendField'];
			}
			
			
			if (isset($vals['globalId'])){
				
				$this->globalId = $vals['globalId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['orgId'])){
				
				$this->orgId = $vals['orgId'];
			}
			
			
			if (isset($vals['orgName'])){
				
				$this->orgName = $vals['orgName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['scheduleName'])){
				
				$this->scheduleName = $vals['scheduleName'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['vBrandName'])){
				
				$this->vBrandName = $vals['vBrandName'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['poCreationDate'])){
				
				$this->poCreationDate = $vals['poCreationDate'];
			}
			
			
			if (isset($vals['origPoNo'])){
				
				$this->origPoNo = $vals['origPoNo'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['orderDate'])){
				
				$this->orderDate = $vals['orderDate'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['itemDescription'])){
				
				$this->itemDescription = $vals['itemDescription'];
			}
			
			
			if (isset($vals['goodsNo'])){
				
				$this->goodsNo = $vals['goodsNo'];
			}
			
			
			if (isset($vals['brandCode'])){
				
				$this->brandCode = $vals['brandCode'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['transactionQuantity'])){
				
				$this->transactionQuantity = $vals['transactionQuantity'];
			}
			
			
			if (isset($vals['dataSign'])){
				
				$this->dataSign = $vals['dataSign'];
			}
			
			
			if (isset($vals['orderPrice'])){
				
				$this->orderPrice = $vals['orderPrice'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['transactionTypeId'])){
				
				$this->transactionTypeId = $vals['transactionTypeId'];
			}
			
			
			if (isset($vals['transactionDate'])){
				
				$this->transactionDate = $vals['transactionDate'];
			}
			
			
			if (isset($vals['payableBillAmount'])){
				
				$this->payableBillAmount = $vals['payableBillAmount'];
			}
			
			
			if (isset($vals['vendorRate'])){
				
				$this->vendorRate = $vals['vendorRate'];
			}
			
			
			if (isset($vals['confirmNo'])){
				
				$this->confirmNo = $vals['confirmNo'];
			}
			
			
			if (isset($vals['salePlatform'])){
				
				$this->salePlatform = $vals['salePlatform'];
			}
			
			
			if (isset($vals['salePlatformName'])){
				
				$this->salePlatformName = $vals['salePlatformName'];
			}
			
			
			if (isset($vals['createdTime'])){
				
				$this->createdTime = $vals['createdTime'];
			}
			
			
			if (isset($vals['updatedTime'])){
				
				$this->updatedTime = $vals['updatedTime'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['grossMarginRate'])){
				
				$this->grossMarginRate = $vals['grossMarginRate'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['poPrice'])){
				
				$this->poPrice = $vals['poPrice'];
			}
			
			
			if (isset($vals['poTaxPrice'])){
				
				$this->poTaxPrice = $vals['poTaxPrice'];
			}
			
			
			if (isset($vals['payableTotalBillAmount'])){
				
				$this->payableTotalBillAmount = $vals['payableTotalBillAmount'];
			}
			
			
			if (isset($vals['detailLineType'])){
				
				$this->detailLineType = $vals['detailLineType'];
			}
			
			
			if (isset($vals['warehouseExt'])){
				
				$this->warehouseExt = $vals['warehouseExt'];
			}
			
			
			if (isset($vals['priceContractNum'])){
				
				$this->priceContractNum = $vals['priceContractNum'];
			}
			
			
			if (isset($vals['billPrice'])){
				
				$this->billPrice = $vals['billPrice'];
			}
			
			
			if (isset($vals['billTaxPrice'])){
				
				$this->billTaxPrice = $vals['billTaxPrice'];
			}
			
			
			if (isset($vals['trxCreationDate'])){
				
				$this->trxCreationDate = $vals['trxCreationDate'];
			}
			
			
			if (isset($vals['payableQuantity'])){
				
				$this->payableQuantity = $vals['payableQuantity'];
			}
			
			
			if (isset($vals['transactionTypeCommand'])){
				
				$this->transactionTypeCommand = $vals['transactionTypeCommand'];
			}
			
			
			if (isset($vals['billQuantity'])){
				
				$this->billQuantity = $vals['billQuantity'];
			}
			
			
			if (isset($vals['billAmount'])){
				
				$this->billAmount = $vals['billAmount'];
			}
			
			
			if (isset($vals['totalBillAmount'])){
				
				$this->totalBillAmount = $vals['totalBillAmount'];
			}
			
			
			if (isset($vals['poNoRef'])){
				
				$this->poNoRef = $vals['poNoRef'];
			}
			
			
			if (isset($vals['referenceNumber'])){
				
				$this->referenceNumber = $vals['referenceNumber'];
			}
			
			
			if (isset($vals['exchangeFlag'])){
				
				$this->exchangeFlag = $vals['exchangeFlag'];
			}
			
			
			if (isset($vals['transactionAmount'])){
				
				$this->transactionAmount = $vals['transactionAmount'];
			}
			
			
			if (isset($vals['totalTransactionAmount'])){
				
				$this->totalTransactionAmount = $vals['totalTransactionAmount'];
			}
			
			
			if (isset($vals['activeNewRuleFlag'])){
				
				$this->activeNewRuleFlag = $vals['activeNewRuleFlag'];
			}
			
			
			if (isset($vals['activeOrderPrice'])){
				
				$this->activeOrderPrice = $vals['activeOrderPrice'];
			}
			
			
			if (isset($vals['activeType'])){
				
				$this->activeType = $vals['activeType'];
			}
			
			
			if (isset($vals['activeName'])){
				
				$this->activeName = $vals['activeName'];
			}
			
			
			if (isset($vals['invGlobalId'])){
				
				$this->invGlobalId = $vals['invGlobalId'];
			}
			
			
			if (isset($vals['sourceLineType'])){
				
				$this->sourceLineType = $vals['sourceLineType'];
			}
			
			
			if (isset($vals['prebuyOrderFlag'])){
				
				$this->prebuyOrderFlag = $vals['prebuyOrderFlag'];
			}
			
			
			if (isset($vals['custReturnType'])){
				
				$this->custReturnType = $vals['custReturnType'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['onlineDate'])){
				
				$this->onlineDate = $vals['onlineDate'];
			}
			
			
			if (isset($vals['sumVendorFavPrice'])){
				
				$this->sumVendorFavPrice = $vals['sumVendorFavPrice'];
			}
			
			
			if (isset($vals['vendorSyncTime'])){
				
				$this->vendorSyncTime = $vals['vendorSyncTime'];
			}
			
			
			if (isset($vals['sumFavPrice'])){
				
				$this->sumFavPrice = $vals['sumFavPrice'];
			}
			
			
			if (isset($vals['poWareHouseType'])){
				
				$this->poWareHouseType = $vals['poWareHouseType'];
			}
			
			
			if (isset($vals['originalPrice'])){
				
				$this->originalPrice = $vals['originalPrice'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['parentSizeId'])){
				
				$this->parentSizeId = $vals['parentSizeId'];
			}
			
			
			if (isset($vals['applyDocNo'])){
				
				$this->applyDocNo = $vals['applyDocNo'];
			}
			
			
			if (isset($vals['adjustReason'])){
				
				$this->adjustReason = $vals['adjustReason'];
			}
			
			
			if (isset($vals['yardNoListName'])){
				
				$this->yardNoListName = $vals['yardNoListName'];
			}
			
			
			if (isset($vals['activeTypeNameStr'])){
				
				$this->activeTypeNameStr = $vals['activeTypeNameStr'];
			}
			
			
			if (isset($vals['v2TrxDate'])){
				
				$this->v2TrxDate = $vals['v2TrxDate'];
			}
			
			
			if (isset($vals['stageBillNumber'])){
				
				$this->stageBillNumber = $vals['stageBillNumber'];
			}
			
			
			if (isset($vals['residualBillNumber'])){
				
				$this->residualBillNumber = $vals['residualBillNumber'];
			}
			
			
			if (isset($vals['pickNo'])){
				
				$this->pickNo = $vals['pickNo'];
			}
			
			
			if (isset($vals['deliveryNo'])){
				
				$this->deliveryNo = $vals['deliveryNo'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['sourceLineName'])){
				
				$this->sourceLineName = $vals['sourceLineName'];
			}
			
			
			if (isset($vals['detailLineName'])){
				
				$this->detailLineName = $vals['detailLineName'];
			}
			
			
			if (isset($vals['extOrderPrice'])){
				
				$this->extOrderPrice = $vals['extOrderPrice'];
			}
			
			
			if (isset($vals['extNetPrice'])){
				
				$this->extNetPrice = $vals['extNetPrice'];
			}
			
			
			if (isset($vals['isSigned'])){
				
				$this->isSigned = $vals['isSigned'];
			}
			
			
			if (isset($vals['signDate'])){
				
				$this->signDate = $vals['signDate'];
			}
			
			
			if (isset($vals['calculateDate'])){
				
				$this->calculateDate = $vals['calculateDate'];
			}
			
			
			if (isset($vals['extNetAmount'])){
				
				$this->extNetAmount = $vals['extNetAmount'];
			}
			
			
			if (isset($vals['extBaseAmount'])){
				
				$this->extBaseAmount = $vals['extBaseAmount'];
			}
			
			
			if (isset($vals['extBillTaxAmount'])){
				
				$this->extBillTaxAmount = $vals['extBillTaxAmount'];
			}
			
			
			if (isset($vals['extSumFavAmount'])){
				
				$this->extSumFavAmount = $vals['extSumFavAmount'];
			}
			
			
			if (isset($vals['extSumVendorAmount'])){
				
				$this->extSumVendorAmount = $vals['extSumVendorAmount'];
			}
			
			
			if (isset($vals['netBillTaxPrice'])){
				
				$this->netBillTaxPrice = $vals['netBillTaxPrice'];
			}
			
			
			if (isset($vals['sourceReturnVarianceDocNo'])){
				
				$this->sourceReturnVarianceDocNo = $vals['sourceReturnVarianceDocNo'];
			}
			
			
			if (isset($vals['vendorOrderNum'])){
				
				$this->vendorOrderNum = $vals['vendorOrderNum'];
			}
			
			
			if (isset($vals['vendorOrderBilledFlag'])){
				
				$this->vendorOrderBilledFlag = $vals['vendorOrderBilledFlag'];
			}
			
			
			if (isset($vals['repairChangeToReturn'])){
				
				$this->repairChangeToReturn = $vals['repairChangeToReturn'];
			}
			
			
			if (isset($vals['arrivalPrice'])){
				
				$this->arrivalPrice = $vals['arrivalPrice'];
			}
			
			
			if (isset($vals['billStatus'])){
				
				$this->billStatus = $vals['billStatus'];
			}
			
			
			if (isset($vals['billNumber'])){
				
				$this->billNumber = $vals['billNumber'];
			}
			
			
			if (isset($vals['brandAdmin'])){
				
				$this->brandAdmin = $vals['brandAdmin'];
			}
			
			
			if (isset($vals['sourceId'])){
				
				$this->sourceId = $vals['sourceId'];
			}
			
			
			if (isset($vals['billType'])){
				
				$this->billType = $vals['billType'];
			}
			
			
			if (isset($vals['whType'])){
				
				$this->whType = $vals['whType'];
			}
			
			
			if (isset($vals['specialReturnFlag'])){
				
				$this->specialReturnFlag = $vals['specialReturnFlag'];
			}
			
			
			if (isset($vals['sourceStatus'])){
				
				$this->sourceStatus = $vals['sourceStatus'];
			}
			
			
			if (isset($vals['specialReturnDupFlag'])){
				
				$this->specialReturnDupFlag = $vals['specialReturnDupFlag'];
			}
			
			
			if (isset($vals['vendorReturnNo'])){
				
				$this->vendorReturnNo = $vals['vendorReturnNo'];
			}
			
			
			if (isset($vals['specialDate'])){
				
				$this->specialDate = $vals['specialDate'];
			}
			
			
			if (isset($vals['giftFlag'])){
				
				$this->giftFlag = $vals['giftFlag'];
			}
			
			
			if (isset($vals['htBatchNo'])){
				
				$this->htBatchNo = $vals['htBatchNo'];
			}
			
			
			if (isset($vals['nlcTotalAmount'])){
				
				$this->nlcTotalAmount = $vals['nlcTotalAmount'];
			}
			
			
			if (isset($vals['returnVarianceDocNo'])){
				
				$this->returnVarianceDocNo = $vals['returnVarianceDocNo'];
			}
			
			
			if (isset($vals['vin'])){
				
				$this->vin = $vals['vin'];
			}
			
			
			if (isset($vals['returnVariancePoNo'])){
				
				$this->returnVariancePoNo = $vals['returnVariancePoNo'];
			}
			
			
			if (isset($vals['headerId'])){
				
				$this->headerId = $vals['headerId'];
			}
			
			
			if (isset($vals['lineId'])){
				
				$this->lineId = $vals['lineId'];
			}
			
			
			if (isset($vals['stagePercent'])){
				
				$this->stagePercent = $vals['stagePercent'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['prebilledBillAmount'])){
				
				$this->prebilledBillAmount = $vals['prebilledBillAmount'];
			}
			
			
			if (isset($vals['prebilledQuantity'])){
				
				$this->prebilledQuantity = $vals['prebilledQuantity'];
			}
			
			
			if (isset($vals['signTime'])){
				
				$this->signTime = $vals['signTime'];
			}
			
			
			if (isset($vals['startDate'])){
				
				$this->startDate = $vals['startDate'];
			}
			
			
			if (isset($vals['endDate'])){
				
				$this->endDate = $vals['endDate'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorBillGoodsDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("dbNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dbNo);
				
			}
			
			
			
			
			if ("itemSize" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemSize);
				
			}
			
			
			
			
			if ("vendorGoodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorGoodsNo);
				
			}
			
			
			
			
			if ("poDeliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poDeliveryType);
				
			}
			
			
			
			
			if ("priceTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceTime);
				
			}
			
			
			
			
			if ("extOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderNum);
				
			}
			
			
			
			
			if ("deliveryWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouseCode);
				
			}
			
			
			
			
			if ("deliveryWarehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouseName);
				
			}
			
			
			
			
			if ("claimType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->claimType);
				
			}
			
			
			
			
			if ("applyQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->applyQuantity);
				
			}
			
			
			
			
			if ("actualQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actualQuantity);
				
			}
			
			
			
			
			if ("workNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workNo);
				
			}
			
			
			
			
			if ("workSolvedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->workSolvedTime);
				
			}
			
			
			
			
			if ("errorItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorItemNo);
				
			}
			
			
			
			
			if ("judgedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->judgedBy);
				
			}
			
			
			
			
			if ("extBillTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBillTaxPrice);
				
			}
			
			
			
			
			if ("extSumFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumFavPrice);
				
			}
			
			
			
			
			if ("extSumVendorFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumVendorFavPrice);
				
			}
			
			
			
			
			if ("extBasePrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBasePrice);
				
			}
			
			
			
			
			if ("extPoDeliveryTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extPoDeliveryTypeName);
				
			}
			
			
			
			
			if ("extGrossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extGrossMarginRate);
				
			}
			
			
			
			
			if ("extWarehouseExt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extWarehouseExt);
				
			}
			
			
			
			
			if ("specialOrderCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialOrderCategory);
				
			}
			
			
			
			
			if ("specialScheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialScheduleId);
				
			}
			
			
			
			
			if ("specialRelatedOrder" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialRelatedOrder);
				
			}
			
			
			
			
			if ("extendField" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extendField);
				
			}
			
			
			
			
			if ("globalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->globalId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("orgId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgId);
				
			}
			
			
			
			
			if ("orgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleId);
				
			}
			
			
			
			
			if ("scheduleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleName);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("vBrandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vBrandName);
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("poCreationDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poCreationDate);
				
			}
			
			
			
			
			if ("origPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origPoNo);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("orderDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderDate);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("itemDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDescription);
				
			}
			
			
			
			
			if ("goodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsNo);
				
			}
			
			
			
			
			if ("brandCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCode);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("transactionQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->transactionQuantity);
				
			}
			
			
			
			
			if ("dataSign" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataSign); 
				
			}
			
			
			
			
			if ("orderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderPrice);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("transactionTypeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionTypeId);
				
			}
			
			
			
			
			if ("transactionDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transactionDate);
				
			}
			
			
			
			
			if ("payableBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payableBillAmount);
				
			}
			
			
			
			
			if ("vendorRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendorRate);
				
			}
			
			
			
			
			if ("confirmNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->confirmNo);
				
			}
			
			
			
			
			if ("salePlatform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salePlatform);
				
			}
			
			
			
			
			if ("salePlatformName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salePlatformName);
				
			}
			
			
			
			
			if ("createdTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdTime);
				
			}
			
			
			
			
			if ("updatedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updatedTime);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->isDeleted); 
				
			}
			
			
			
			
			if ("grossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grossMarginRate);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("poPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->poPrice);
				
			}
			
			
			
			
			if ("poTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->poTaxPrice);
				
			}
			
			
			
			
			if ("payableTotalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payableTotalBillAmount);
				
			}
			
			
			
			
			if ("detailLineType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailLineType);
				
			}
			
			
			
			
			if ("warehouseExt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseExt);
				
			}
			
			
			
			
			if ("priceContractNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceContractNum);
				
			}
			
			
			
			
			if ("billPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->billPrice);
				
			}
			
			
			
			
			if ("billTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->billTaxPrice);
				
			}
			
			
			
			
			if ("trxCreationDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->trxCreationDate);
				
			}
			
			
			
			
			if ("payableQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payableQuantity);
				
			}
			
			
			
			
			if ("transactionTypeCommand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionTypeCommand);
				
			}
			
			
			
			
			if ("billQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->billQuantity);
				
			}
			
			
			
			
			if ("billAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->billAmount);
				
			}
			
			
			
			
			if ("totalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalBillAmount);
				
			}
			
			
			
			
			if ("poNoRef" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNoRef);
				
			}
			
			
			
			
			if ("referenceNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceNumber);
				
			}
			
			
			
			
			if ("exchangeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeFlag);
				
			}
			
			
			
			
			if ("transactionAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->transactionAmount);
				
			}
			
			
			
			
			if ("totalTransactionAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalTransactionAmount);
				
			}
			
			
			
			
			if ("activeNewRuleFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeNewRuleFlag);
				
			}
			
			
			
			
			if ("activeOrderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeOrderPrice);
				
			}
			
			
			
			
			if ("activeType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeType);
				
			}
			
			
			
			
			if ("activeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeName);
				
			}
			
			
			
			
			if ("invGlobalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->invGlobalId); 
				
			}
			
			
			
			
			if ("sourceLineType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceLineType);
				
			}
			
			
			
			
			if ("prebuyOrderFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prebuyOrderFlag);
				
			}
			
			
			
			
			if ("custReturnType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custReturnType);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("onlineDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineDate);
				
			}
			
			
			
			
			if ("sumVendorFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sumVendorFavPrice);
				
			}
			
			
			
			
			if ("vendorSyncTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorSyncTime);
				
			}
			
			
			
			
			if ("sumFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sumFavPrice);
				
			}
			
			
			
			
			if ("poWareHouseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poWareHouseType);
				
			}
			
			
			
			
			if ("originalPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalPrice);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizeId); 
				
			}
			
			
			
			
			if ("parentSizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parentSizeId); 
				
			}
			
			
			
			
			if ("applyDocNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applyDocNo);
				
			}
			
			
			
			
			if ("adjustReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adjustReason);
				
			}
			
			
			
			
			if ("yardNoListName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->yardNoListName);
				
			}
			
			
			
			
			if ("activeTypeNameStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeTypeNameStr);
				
			}
			
			
			
			
			if ("v2TrxDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->v2TrxDate);
				
			}
			
			
			
			
			if ("stageBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stageBillNumber);
				
			}
			
			
			
			
			if ("residualBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->residualBillNumber);
				
			}
			
			
			
			
			if ("pickNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickNo);
				
			}
			
			
			
			
			if ("deliveryNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryNo);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->marketPrice);
				
			}
			
			
			
			
			if ("sourceLineName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceLineName);
				
			}
			
			
			
			
			if ("detailLineName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailLineName);
				
			}
			
			
			
			
			if ("extOrderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extOrderPrice);
				
			}
			
			
			
			
			if ("extNetPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extNetPrice);
				
			}
			
			
			
			
			if ("isSigned" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isSigned);
				
			}
			
			
			
			
			if ("signDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signDate);
				
			}
			
			
			
			
			if ("calculateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->calculateDate);
				
			}
			
			
			
			
			if ("extNetAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extNetAmount);
				
			}
			
			
			
			
			if ("extBaseAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBaseAmount);
				
			}
			
			
			
			
			if ("extBillTaxAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBillTaxAmount);
				
			}
			
			
			
			
			if ("extSumFavAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumFavAmount);
				
			}
			
			
			
			
			if ("extSumVendorAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumVendorAmount);
				
			}
			
			
			
			
			if ("netBillTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->netBillTaxPrice);
				
			}
			
			
			
			
			if ("sourceReturnVarianceDocNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceReturnVarianceDocNo);
				
			}
			
			
			
			
			if ("vendorOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorOrderNum);
				
			}
			
			
			
			
			if ("vendorOrderBilledFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorOrderBilledFlag);
				
			}
			
			
			
			
			if ("repairChangeToReturn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->repairChangeToReturn);
				
			}
			
			
			
			
			if ("arrivalPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrivalPrice);
				
			}
			
			
			
			
			if ("billStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billStatus);
				
			}
			
			
			
			
			if ("billNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billNumber);
				
			}
			
			
			
			
			if ("brandAdmin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdmin);
				
			}
			
			
			
			
			if ("sourceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sourceId); 
				
			}
			
			
			
			
			if ("billType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billType);
				
			}
			
			
			
			
			if ("whType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->whType);
				
			}
			
			
			
			
			if ("specialReturnFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialReturnFlag);
				
			}
			
			
			
			
			if ("sourceStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceStatus);
				
			}
			
			
			
			
			if ("specialReturnDupFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialReturnDupFlag);
				
			}
			
			
			
			
			if ("vendorReturnNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorReturnNo);
				
			}
			
			
			
			
			if ("specialDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->specialDate);
				
			}
			
			
			
			
			if ("giftFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->giftFlag);
				
			}
			
			
			
			
			if ("htBatchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->htBatchNo);
				
			}
			
			
			
			
			if ("nlcTotalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->nlcTotalAmount);
				
			}
			
			
			
			
			if ("returnVarianceDocNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnVarianceDocNo);
				
			}
			
			
			
			
			if ("vin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vin);
				
			}
			
			
			
			
			if ("returnVariancePoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnVariancePoNo);
				
			}
			
			
			
			
			if ("headerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerId); 
				
			}
			
			
			
			
			if ("lineId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lineId); 
				
			}
			
			
			
			
			if ("stagePercent" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->stagePercent);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->quantity);
				
			}
			
			
			
			
			if ("prebilledBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->prebilledBillAmount);
				
			}
			
			
			
			
			if ("prebilledQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->prebilledQuantity);
				
			}
			
			
			
			
			if ("signTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signTime);
				
			}
			
			
			
			
			if ("startDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startDate);
				
			}
			
			
			
			
			if ("endDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endDate);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
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
		
		if($this->dbNo !== null) {
			
			$xfer += $output->writeFieldBegin('dbNo');
			$xfer += $output->writeString($this->dbNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemSize !== null) {
			
			$xfer += $output->writeFieldBegin('itemSize');
			$xfer += $output->writeString($this->itemSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorGoodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorGoodsNo');
			$xfer += $output->writeString($this->vendorGoodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDeliveryType !== null) {
			
			$xfer += $output->writeFieldBegin('poDeliveryType');
			$xfer += $output->writeString($this->poDeliveryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceTime !== null) {
			
			$xfer += $output->writeFieldBegin('priceTime');
			$xfer += $output->writeI64($this->priceTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderNum');
			$xfer += $output->writeString($this->extOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouseCode');
			$xfer += $output->writeString($this->deliveryWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouseName');
			$xfer += $output->writeString($this->deliveryWarehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->claimType !== null) {
			
			$xfer += $output->writeFieldBegin('claimType');
			$xfer += $output->writeString($this->claimType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('applyQuantity');
			$xfer += $output->writeDouble($this->applyQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('actualQuantity');
			$xfer += $output->writeDouble($this->actualQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workNo !== null) {
			
			$xfer += $output->writeFieldBegin('workNo');
			$xfer += $output->writeString($this->workNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workSolvedTime !== null) {
			
			$xfer += $output->writeFieldBegin('workSolvedTime');
			$xfer += $output->writeI64($this->workSolvedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('errorItemNo');
			$xfer += $output->writeString($this->errorItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->judgedBy !== null) {
			
			$xfer += $output->writeFieldBegin('judgedBy');
			$xfer += $output->writeString($this->judgedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBillTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extBillTaxPrice');
			$xfer += $output->writeDouble($this->extBillTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extSumFavPrice');
			$xfer += $output->writeDouble($this->extSumFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumVendorFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extSumVendorFavPrice');
			$xfer += $output->writeDouble($this->extSumVendorFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBasePrice !== null) {
			
			$xfer += $output->writeFieldBegin('extBasePrice');
			$xfer += $output->writeDouble($this->extBasePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extPoDeliveryTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('extPoDeliveryTypeName');
			$xfer += $output->writeString($this->extPoDeliveryTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extGrossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('extGrossMarginRate');
			$xfer += $output->writeDouble($this->extGrossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extWarehouseExt !== null) {
			
			$xfer += $output->writeFieldBegin('extWarehouseExt');
			$xfer += $output->writeString($this->extWarehouseExt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialOrderCategory !== null) {
			
			$xfer += $output->writeFieldBegin('specialOrderCategory');
			$xfer += $output->writeString($this->specialOrderCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialScheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('specialScheduleId');
			$xfer += $output->writeString($this->specialScheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialRelatedOrder !== null) {
			
			$xfer += $output->writeFieldBegin('specialRelatedOrder');
			$xfer += $output->writeString($this->specialRelatedOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendField !== null) {
			
			$xfer += $output->writeFieldBegin('extendField');
			$xfer += $output->writeString($this->extendField);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalId !== null) {
			
			$xfer += $output->writeFieldBegin('globalId');
			$xfer += $output->writeI64($this->globalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgId !== null) {
			
			$xfer += $output->writeFieldBegin('orgId');
			$xfer += $output->writeString($this->orgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgName !== null) {
			
			$xfer += $output->writeFieldBegin('orgName');
			$xfer += $output->writeString($this->orgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleId');
			$xfer += $output->writeString($this->scheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleName !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleName');
			$xfer += $output->writeString($this->scheduleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vBrandName !== null) {
			
			$xfer += $output->writeFieldBegin('vBrandName');
			$xfer += $output->writeString($this->vBrandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poCreationDate !== null) {
			
			$xfer += $output->writeFieldBegin('poCreationDate');
			$xfer += $output->writeString($this->poCreationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('origPoNo');
			$xfer += $output->writeString($this->origPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderDate !== null) {
			
			$xfer += $output->writeFieldBegin('orderDate');
			$xfer += $output->writeString($this->orderDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemDescription !== null) {
			
			$xfer += $output->writeFieldBegin('itemDescription');
			$xfer += $output->writeString($this->itemDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodsNo');
			$xfer += $output->writeString($this->goodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCode !== null) {
			
			$xfer += $output->writeFieldBegin('brandCode');
			$xfer += $output->writeString($this->brandCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('transactionQuantity');
			$xfer += $output->writeDouble($this->transactionQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataSign !== null) {
			
			$xfer += $output->writeFieldBegin('dataSign');
			$xfer += $output->writeI32($this->dataSign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('orderPrice');
			$xfer += $output->writeString($this->orderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeString($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionTypeId !== null) {
			
			$xfer += $output->writeFieldBegin('transactionTypeId');
			$xfer += $output->writeString($this->transactionTypeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionDate !== null) {
			
			$xfer += $output->writeFieldBegin('transactionDate');
			$xfer += $output->writeI64($this->transactionDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payableBillAmount');
			$xfer += $output->writeDouble($this->payableBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorRate !== null) {
			
			$xfer += $output->writeFieldBegin('vendorRate');
			$xfer += $output->writeDouble($this->vendorRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmNo !== null) {
			
			$xfer += $output->writeFieldBegin('confirmNo');
			$xfer += $output->writeString($this->confirmNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salePlatform !== null) {
			
			$xfer += $output->writeFieldBegin('salePlatform');
			$xfer += $output->writeString($this->salePlatform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salePlatformName !== null) {
			
			$xfer += $output->writeFieldBegin('salePlatformName');
			$xfer += $output->writeString($this->salePlatformName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdTime !== null) {
			
			$xfer += $output->writeFieldBegin('createdTime');
			$xfer += $output->writeI64($this->createdTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedTime !== null) {
			
			$xfer += $output->writeFieldBegin('updatedTime');
			$xfer += $output->writeI64($this->updatedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI16($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('grossMarginRate');
			$xfer += $output->writeString($this->grossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poPrice');
			$xfer += $output->writeDouble($this->poPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poTaxPrice');
			$xfer += $output->writeDouble($this->poTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableTotalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payableTotalBillAmount');
			$xfer += $output->writeDouble($this->payableTotalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailLineType !== null) {
			
			$xfer += $output->writeFieldBegin('detailLineType');
			$xfer += $output->writeString($this->detailLineType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseExt !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseExt');
			$xfer += $output->writeString($this->warehouseExt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceContractNum !== null) {
			
			$xfer += $output->writeFieldBegin('priceContractNum');
			$xfer += $output->writeString($this->priceContractNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billPrice !== null) {
			
			$xfer += $output->writeFieldBegin('billPrice');
			$xfer += $output->writeDouble($this->billPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('billTaxPrice');
			$xfer += $output->writeDouble($this->billTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trxCreationDate !== null) {
			
			$xfer += $output->writeFieldBegin('trxCreationDate');
			$xfer += $output->writeI64($this->trxCreationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('payableQuantity');
			$xfer += $output->writeDouble($this->payableQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionTypeCommand !== null) {
			
			$xfer += $output->writeFieldBegin('transactionTypeCommand');
			$xfer += $output->writeString($this->transactionTypeCommand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('billQuantity');
			$xfer += $output->writeDouble($this->billQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billAmount !== null) {
			
			$xfer += $output->writeFieldBegin('billAmount');
			$xfer += $output->writeDouble($this->billAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalBillAmount');
			$xfer += $output->writeDouble($this->totalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNoRef !== null) {
			
			$xfer += $output->writeFieldBegin('poNoRef');
			$xfer += $output->writeString($this->poNoRef);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceNumber !== null) {
			
			$xfer += $output->writeFieldBegin('referenceNumber');
			$xfer += $output->writeString($this->referenceNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeFlag');
			$xfer += $output->writeString($this->exchangeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionAmount !== null) {
			
			$xfer += $output->writeFieldBegin('transactionAmount');
			$xfer += $output->writeDouble($this->transactionAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalTransactionAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalTransactionAmount');
			$xfer += $output->writeDouble($this->totalTransactionAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeNewRuleFlag !== null) {
			
			$xfer += $output->writeFieldBegin('activeNewRuleFlag');
			$xfer += $output->writeString($this->activeNewRuleFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeOrderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('activeOrderPrice');
			$xfer += $output->writeString($this->activeOrderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeType !== null) {
			
			$xfer += $output->writeFieldBegin('activeType');
			$xfer += $output->writeString($this->activeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeName !== null) {
			
			$xfer += $output->writeFieldBegin('activeName');
			$xfer += $output->writeString($this->activeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invGlobalId !== null) {
			
			$xfer += $output->writeFieldBegin('invGlobalId');
			$xfer += $output->writeI64($this->invGlobalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceLineType !== null) {
			
			$xfer += $output->writeFieldBegin('sourceLineType');
			$xfer += $output->writeString($this->sourceLineType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prebuyOrderFlag !== null) {
			
			$xfer += $output->writeFieldBegin('prebuyOrderFlag');
			$xfer += $output->writeString($this->prebuyOrderFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custReturnType !== null) {
			
			$xfer += $output->writeFieldBegin('custReturnType');
			$xfer += $output->writeString($this->custReturnType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineDate !== null) {
			
			$xfer += $output->writeFieldBegin('onlineDate');
			$xfer += $output->writeI64($this->onlineDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sumVendorFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('sumVendorFavPrice');
			$xfer += $output->writeDouble($this->sumVendorFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorSyncTime !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSyncTime');
			$xfer += $output->writeI64($this->vendorSyncTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sumFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('sumFavPrice');
			$xfer += $output->writeDouble($this->sumFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poWareHouseType !== null) {
			
			$xfer += $output->writeFieldBegin('poWareHouseType');
			$xfer += $output->writeString($this->poWareHouseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalPrice !== null) {
			
			$xfer += $output->writeFieldBegin('originalPrice');
			$xfer += $output->writeString($this->originalPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeI64($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentSizeId !== null) {
			
			$xfer += $output->writeFieldBegin('parentSizeId');
			$xfer += $output->writeI64($this->parentSizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyDocNo !== null) {
			
			$xfer += $output->writeFieldBegin('applyDocNo');
			$xfer += $output->writeString($this->applyDocNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adjustReason !== null) {
			
			$xfer += $output->writeFieldBegin('adjustReason');
			$xfer += $output->writeString($this->adjustReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->yardNoListName !== null) {
			
			$xfer += $output->writeFieldBegin('yardNoListName');
			$xfer += $output->writeString($this->yardNoListName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeTypeNameStr !== null) {
			
			$xfer += $output->writeFieldBegin('activeTypeNameStr');
			$xfer += $output->writeString($this->activeTypeNameStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->v2TrxDate !== null) {
			
			$xfer += $output->writeFieldBegin('v2TrxDate');
			$xfer += $output->writeI64($this->v2TrxDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stageBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('stageBillNumber');
			$xfer += $output->writeString($this->stageBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->residualBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('residualBillNumber');
			$xfer += $output->writeString($this->residualBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickNo !== null) {
			
			$xfer += $output->writeFieldBegin('pickNo');
			$xfer += $output->writeString($this->pickNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryNo !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryNo');
			$xfer += $output->writeString($this->deliveryNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeDouble($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceLineName !== null) {
			
			$xfer += $output->writeFieldBegin('sourceLineName');
			$xfer += $output->writeString($this->sourceLineName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailLineName !== null) {
			
			$xfer += $output->writeFieldBegin('detailLineName');
			$xfer += $output->writeString($this->detailLineName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderPrice');
			$xfer += $output->writeDouble($this->extOrderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extNetPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extNetPrice');
			$xfer += $output->writeDouble($this->extNetPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSigned !== null) {
			
			$xfer += $output->writeFieldBegin('isSigned');
			$xfer += $output->writeString($this->isSigned);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signDate !== null) {
			
			$xfer += $output->writeFieldBegin('signDate');
			$xfer += $output->writeI64($this->signDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->calculateDate !== null) {
			
			$xfer += $output->writeFieldBegin('calculateDate');
			$xfer += $output->writeI64($this->calculateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extNetAmount !== null) {
			
			$xfer += $output->writeFieldBegin('extNetAmount');
			$xfer += $output->writeDouble($this->extNetAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBaseAmount !== null) {
			
			$xfer += $output->writeFieldBegin('extBaseAmount');
			$xfer += $output->writeDouble($this->extBaseAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBillTaxAmount !== null) {
			
			$xfer += $output->writeFieldBegin('extBillTaxAmount');
			$xfer += $output->writeDouble($this->extBillTaxAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumFavAmount !== null) {
			
			$xfer += $output->writeFieldBegin('extSumFavAmount');
			$xfer += $output->writeDouble($this->extSumFavAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumVendorAmount !== null) {
			
			$xfer += $output->writeFieldBegin('extSumVendorAmount');
			$xfer += $output->writeDouble($this->extSumVendorAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->netBillTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('netBillTaxPrice');
			$xfer += $output->writeDouble($this->netBillTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceReturnVarianceDocNo !== null) {
			
			$xfer += $output->writeFieldBegin('sourceReturnVarianceDocNo');
			$xfer += $output->writeString($this->sourceReturnVarianceDocNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('vendorOrderNum');
			$xfer += $output->writeString($this->vendorOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorOrderBilledFlag !== null) {
			
			$xfer += $output->writeFieldBegin('vendorOrderBilledFlag');
			$xfer += $output->writeString($this->vendorOrderBilledFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->repairChangeToReturn !== null) {
			
			$xfer += $output->writeFieldBegin('repairChangeToReturn');
			$xfer += $output->writeString($this->repairChangeToReturn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrivalPrice !== null) {
			
			$xfer += $output->writeFieldBegin('arrivalPrice');
			$xfer += $output->writeString($this->arrivalPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billStatus !== null) {
			
			$xfer += $output->writeFieldBegin('billStatus');
			$xfer += $output->writeString($this->billStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billNumber !== null) {
			
			$xfer += $output->writeFieldBegin('billNumber');
			$xfer += $output->writeString($this->billNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdmin !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdmin');
			$xfer += $output->writeString($this->brandAdmin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceId !== null) {
			
			$xfer += $output->writeFieldBegin('sourceId');
			$xfer += $output->writeI64($this->sourceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billType !== null) {
			
			$xfer += $output->writeFieldBegin('billType');
			$xfer += $output->writeString($this->billType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->whType !== null) {
			
			$xfer += $output->writeFieldBegin('whType');
			$xfer += $output->writeString($this->whType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialReturnFlag !== null) {
			
			$xfer += $output->writeFieldBegin('specialReturnFlag');
			$xfer += $output->writeString($this->specialReturnFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceStatus !== null) {
			
			$xfer += $output->writeFieldBegin('sourceStatus');
			$xfer += $output->writeString($this->sourceStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialReturnDupFlag !== null) {
			
			$xfer += $output->writeFieldBegin('specialReturnDupFlag');
			$xfer += $output->writeString($this->specialReturnDupFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorReturnNo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorReturnNo');
			$xfer += $output->writeString($this->vendorReturnNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialDate !== null) {
			
			$xfer += $output->writeFieldBegin('specialDate');
			$xfer += $output->writeI64($this->specialDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->giftFlag !== null) {
			
			$xfer += $output->writeFieldBegin('giftFlag');
			$xfer += $output->writeString($this->giftFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->htBatchNo !== null) {
			
			$xfer += $output->writeFieldBegin('htBatchNo');
			$xfer += $output->writeString($this->htBatchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nlcTotalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('nlcTotalAmount');
			$xfer += $output->writeDouble($this->nlcTotalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnVarianceDocNo !== null) {
			
			$xfer += $output->writeFieldBegin('returnVarianceDocNo');
			$xfer += $output->writeString($this->returnVarianceDocNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vin !== null) {
			
			$xfer += $output->writeFieldBegin('vin');
			$xfer += $output->writeString($this->vin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnVariancePoNo !== null) {
			
			$xfer += $output->writeFieldBegin('returnVariancePoNo');
			$xfer += $output->writeString($this->returnVariancePoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerId !== null) {
			
			$xfer += $output->writeFieldBegin('headerId');
			$xfer += $output->writeI64($this->headerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineId !== null) {
			
			$xfer += $output->writeFieldBegin('lineId');
			$xfer += $output->writeI64($this->lineId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stagePercent !== null) {
			
			$xfer += $output->writeFieldBegin('stagePercent');
			$xfer += $output->writeDouble($this->stagePercent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeDouble($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prebilledBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('prebilledBillAmount');
			$xfer += $output->writeDouble($this->prebilledBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prebilledQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('prebilledQuantity');
			$xfer += $output->writeDouble($this->prebilledQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTime !== null) {
			
			$xfer += $output->writeFieldBegin('signTime');
			$xfer += $output->writeI64($this->signTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startDate !== null) {
			
			$xfer += $output->writeFieldBegin('startDate');
			$xfer += $output->writeI64($this->startDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDate !== null) {
			
			$xfer += $output->writeFieldBegin('endDate');
			$xfer += $output->writeI64($this->endDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>