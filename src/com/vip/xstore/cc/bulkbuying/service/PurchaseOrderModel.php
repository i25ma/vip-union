<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class PurchaseOrderModel {
	
	static $_TSPEC;
	public $id = null;
	public $batchNo = null;
	public $companyCode = null;
	public $purchaseNo = null;
	public $orderSn = null;
	public $approvalStatus = null;
	public $deliveryStatus = null;
	public $buyerId = null;
	public $stockProps = null;
	public $deliveryWarehouse = null;
	public $disabilityLevel = null;
	public $purchaseQuantity = null;
	public $totalAmount = null;
	public $holdQuantity = null;
	public $deliveredQuantity = null;
	public $receivedQuantity = null;
	public $deliveryAddrId = null;
	public $deptId = null;
	public $sourceFileUrl = null;
	public $resultFileUrl = null;
	public $isDeleted = null;
	public $createTime = null;
	public $updateTime = null;
	public $buyerName = null;
	public $purchaseType = null;
	public $deptName = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $approvalTime = null;
	public $currency = null;
	public $returnAddrId = null;
	public $bizLinkerId = null;
	public $bizLinkerName = null;
	public $bizLinkerDeptId = null;
	public $bizLinkerDeptName = null;
	public $approvalRole = null;
	public $approvalRoleName = null;
	public $skipFlag = null;
	public $remark = null;
	public $isQuota = null;
	public $cooperationMode = null;
	public $estimateArrivalTime = null;
	public $isSupplement = null;
	public $goodsType = null;
	public $distributableGoodsTime = null;
	public $source = null;
	public $settlementMode = null;
	public $deduction = null;
	public $buyerGroupCode = null;
	public $buyerGroupName = null;
	public $rfidTemplateFlag = null;
	public $vendorIntroduceDept = null;
	public $notDistributedProdInfoUrl = null;
	public $totalAmountCny = null;
	public $goodsChannel = null;
	public $refundNo = null;
	public $totalReceivedAmount = null;
	public $allDisabilityLevel = null;
	public $creatorName = null;
	public $goodsProps = null;
	public $lowStockProdInfoUrl = null;
	public $estimateRefundTime = null;
	public $dataErrorType = null;
	public $dataErrorUrl = null;
	public $standardGoodsFlag = null;
	public $transportNo = null;
	public $bizNo = null;
	public $purchaseProperty = null;
	public $bizPurchaseQuantity = null;
	public $bizTotalAmount = null;
	public $groupCode = null;
	public $settleStatus = null;
	public $isSameBarcode = null;
	public $importBarcodeCreateFailFileUrl = null;
	public $printBarcodeCreateFailFileUrl = null;
	public $poAlias = null;
	public $reconciliationRate = null;
	public $reconciliationRateDate = null;
	public $reconciliationCurrency = null;
	public $attributionLine = null;
	public $actualReconciliationRate = null;
	public $actualReconciliationRateDate = null;
	public $conversionCnyRate = null;
	public $supplementRefPo = null;
	public $attachmentUrl = null;
	public $generalTrade = null;
	public $preDistributeSplitPo = null;
	public $specialFlag = null;
	public $specialFlagName = null;
	public $bizName = null;
	public $planPurchaseQuantity = null;
	public $planTotalAmount = null;
	public $taxRate = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'batchNo'
			),
			3 => array(
			'var' => 'companyCode'
			),
			4 => array(
			'var' => 'purchaseNo'
			),
			5 => array(
			'var' => 'orderSn'
			),
			6 => array(
			'var' => 'approvalStatus'
			),
			7 => array(
			'var' => 'deliveryStatus'
			),
			8 => array(
			'var' => 'buyerId'
			),
			9 => array(
			'var' => 'stockProps'
			),
			10 => array(
			'var' => 'deliveryWarehouse'
			),
			11 => array(
			'var' => 'disabilityLevel'
			),
			12 => array(
			'var' => 'purchaseQuantity'
			),
			13 => array(
			'var' => 'totalAmount'
			),
			14 => array(
			'var' => 'holdQuantity'
			),
			15 => array(
			'var' => 'deliveredQuantity'
			),
			16 => array(
			'var' => 'receivedQuantity'
			),
			17 => array(
			'var' => 'deliveryAddrId'
			),
			18 => array(
			'var' => 'deptId'
			),
			19 => array(
			'var' => 'sourceFileUrl'
			),
			20 => array(
			'var' => 'resultFileUrl'
			),
			21 => array(
			'var' => 'isDeleted'
			),
			22 => array(
			'var' => 'createTime'
			),
			23 => array(
			'var' => 'updateTime'
			),
			24 => array(
			'var' => 'buyerName'
			),
			25 => array(
			'var' => 'purchaseType'
			),
			26 => array(
			'var' => 'deptName'
			),
			27 => array(
			'var' => 'vendorCode'
			),
			28 => array(
			'var' => 'vendorName'
			),
			29 => array(
			'var' => 'approvalTime'
			),
			30 => array(
			'var' => 'currency'
			),
			31 => array(
			'var' => 'returnAddrId'
			),
			32 => array(
			'var' => 'bizLinkerId'
			),
			33 => array(
			'var' => 'bizLinkerName'
			),
			34 => array(
			'var' => 'bizLinkerDeptId'
			),
			35 => array(
			'var' => 'bizLinkerDeptName'
			),
			36 => array(
			'var' => 'approvalRole'
			),
			37 => array(
			'var' => 'approvalRoleName'
			),
			38 => array(
			'var' => 'skipFlag'
			),
			39 => array(
			'var' => 'remark'
			),
			40 => array(
			'var' => 'isQuota'
			),
			41 => array(
			'var' => 'cooperationMode'
			),
			42 => array(
			'var' => 'estimateArrivalTime'
			),
			43 => array(
			'var' => 'isSupplement'
			),
			44 => array(
			'var' => 'goodsType'
			),
			45 => array(
			'var' => 'distributableGoodsTime'
			),
			46 => array(
			'var' => 'source'
			),
			47 => array(
			'var' => 'settlementMode'
			),
			48 => array(
			'var' => 'deduction'
			),
			49 => array(
			'var' => 'buyerGroupCode'
			),
			50 => array(
			'var' => 'buyerGroupName'
			),
			51 => array(
			'var' => 'rfidTemplateFlag'
			),
			52 => array(
			'var' => 'vendorIntroduceDept'
			),
			53 => array(
			'var' => 'notDistributedProdInfoUrl'
			),
			54 => array(
			'var' => 'totalAmountCny'
			),
			55 => array(
			'var' => 'goodsChannel'
			),
			56 => array(
			'var' => 'refundNo'
			),
			57 => array(
			'var' => 'totalReceivedAmount'
			),
			58 => array(
			'var' => 'allDisabilityLevel'
			),
			59 => array(
			'var' => 'creatorName'
			),
			60 => array(
			'var' => 'goodsProps'
			),
			61 => array(
			'var' => 'lowStockProdInfoUrl'
			),
			62 => array(
			'var' => 'estimateRefundTime'
			),
			63 => array(
			'var' => 'dataErrorType'
			),
			64 => array(
			'var' => 'dataErrorUrl'
			),
			65 => array(
			'var' => 'standardGoodsFlag'
			),
			66 => array(
			'var' => 'transportNo'
			),
			67 => array(
			'var' => 'bizNo'
			),
			68 => array(
			'var' => 'purchaseProperty'
			),
			69 => array(
			'var' => 'bizPurchaseQuantity'
			),
			70 => array(
			'var' => 'bizTotalAmount'
			),
			71 => array(
			'var' => 'groupCode'
			),
			72 => array(
			'var' => 'settleStatus'
			),
			73 => array(
			'var' => 'isSameBarcode'
			),
			74 => array(
			'var' => 'importBarcodeCreateFailFileUrl'
			),
			75 => array(
			'var' => 'printBarcodeCreateFailFileUrl'
			),
			76 => array(
			'var' => 'poAlias'
			),
			77 => array(
			'var' => 'reconciliationRate'
			),
			78 => array(
			'var' => 'reconciliationRateDate'
			),
			79 => array(
			'var' => 'reconciliationCurrency'
			),
			80 => array(
			'var' => 'attributionLine'
			),
			81 => array(
			'var' => 'actualReconciliationRate'
			),
			82 => array(
			'var' => 'actualReconciliationRateDate'
			),
			83 => array(
			'var' => 'conversionCnyRate'
			),
			84 => array(
			'var' => 'supplementRefPo'
			),
			85 => array(
			'var' => 'attachmentUrl'
			),
			86 => array(
			'var' => 'generalTrade'
			),
			87 => array(
			'var' => 'preDistributeSplitPo'
			),
			88 => array(
			'var' => 'specialFlag'
			),
			89 => array(
			'var' => 'specialFlagName'
			),
			90 => array(
			'var' => 'bizName'
			),
			91 => array(
			'var' => 'planPurchaseQuantity'
			),
			92 => array(
			'var' => 'planTotalAmount'
			),
			93 => array(
			'var' => 'taxRate'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['approvalStatus'])){
				
				$this->approvalStatus = $vals['approvalStatus'];
			}
			
			
			if (isset($vals['deliveryStatus'])){
				
				$this->deliveryStatus = $vals['deliveryStatus'];
			}
			
			
			if (isset($vals['buyerId'])){
				
				$this->buyerId = $vals['buyerId'];
			}
			
			
			if (isset($vals['stockProps'])){
				
				$this->stockProps = $vals['stockProps'];
			}
			
			
			if (isset($vals['deliveryWarehouse'])){
				
				$this->deliveryWarehouse = $vals['deliveryWarehouse'];
			}
			
			
			if (isset($vals['disabilityLevel'])){
				
				$this->disabilityLevel = $vals['disabilityLevel'];
			}
			
			
			if (isset($vals['purchaseQuantity'])){
				
				$this->purchaseQuantity = $vals['purchaseQuantity'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['holdQuantity'])){
				
				$this->holdQuantity = $vals['holdQuantity'];
			}
			
			
			if (isset($vals['deliveredQuantity'])){
				
				$this->deliveredQuantity = $vals['deliveredQuantity'];
			}
			
			
			if (isset($vals['receivedQuantity'])){
				
				$this->receivedQuantity = $vals['receivedQuantity'];
			}
			
			
			if (isset($vals['deliveryAddrId'])){
				
				$this->deliveryAddrId = $vals['deliveryAddrId'];
			}
			
			
			if (isset($vals['deptId'])){
				
				$this->deptId = $vals['deptId'];
			}
			
			
			if (isset($vals['sourceFileUrl'])){
				
				$this->sourceFileUrl = $vals['sourceFileUrl'];
			}
			
			
			if (isset($vals['resultFileUrl'])){
				
				$this->resultFileUrl = $vals['resultFileUrl'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['buyerName'])){
				
				$this->buyerName = $vals['buyerName'];
			}
			
			
			if (isset($vals['purchaseType'])){
				
				$this->purchaseType = $vals['purchaseType'];
			}
			
			
			if (isset($vals['deptName'])){
				
				$this->deptName = $vals['deptName'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['approvalTime'])){
				
				$this->approvalTime = $vals['approvalTime'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['returnAddrId'])){
				
				$this->returnAddrId = $vals['returnAddrId'];
			}
			
			
			if (isset($vals['bizLinkerId'])){
				
				$this->bizLinkerId = $vals['bizLinkerId'];
			}
			
			
			if (isset($vals['bizLinkerName'])){
				
				$this->bizLinkerName = $vals['bizLinkerName'];
			}
			
			
			if (isset($vals['bizLinkerDeptId'])){
				
				$this->bizLinkerDeptId = $vals['bizLinkerDeptId'];
			}
			
			
			if (isset($vals['bizLinkerDeptName'])){
				
				$this->bizLinkerDeptName = $vals['bizLinkerDeptName'];
			}
			
			
			if (isset($vals['approvalRole'])){
				
				$this->approvalRole = $vals['approvalRole'];
			}
			
			
			if (isset($vals['approvalRoleName'])){
				
				$this->approvalRoleName = $vals['approvalRoleName'];
			}
			
			
			if (isset($vals['skipFlag'])){
				
				$this->skipFlag = $vals['skipFlag'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['isQuota'])){
				
				$this->isQuota = $vals['isQuota'];
			}
			
			
			if (isset($vals['cooperationMode'])){
				
				$this->cooperationMode = $vals['cooperationMode'];
			}
			
			
			if (isset($vals['estimateArrivalTime'])){
				
				$this->estimateArrivalTime = $vals['estimateArrivalTime'];
			}
			
			
			if (isset($vals['isSupplement'])){
				
				$this->isSupplement = $vals['isSupplement'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
			if (isset($vals['distributableGoodsTime'])){
				
				$this->distributableGoodsTime = $vals['distributableGoodsTime'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['settlementMode'])){
				
				$this->settlementMode = $vals['settlementMode'];
			}
			
			
			if (isset($vals['deduction'])){
				
				$this->deduction = $vals['deduction'];
			}
			
			
			if (isset($vals['buyerGroupCode'])){
				
				$this->buyerGroupCode = $vals['buyerGroupCode'];
			}
			
			
			if (isset($vals['buyerGroupName'])){
				
				$this->buyerGroupName = $vals['buyerGroupName'];
			}
			
			
			if (isset($vals['rfidTemplateFlag'])){
				
				$this->rfidTemplateFlag = $vals['rfidTemplateFlag'];
			}
			
			
			if (isset($vals['vendorIntroduceDept'])){
				
				$this->vendorIntroduceDept = $vals['vendorIntroduceDept'];
			}
			
			
			if (isset($vals['notDistributedProdInfoUrl'])){
				
				$this->notDistributedProdInfoUrl = $vals['notDistributedProdInfoUrl'];
			}
			
			
			if (isset($vals['totalAmountCny'])){
				
				$this->totalAmountCny = $vals['totalAmountCny'];
			}
			
			
			if (isset($vals['goodsChannel'])){
				
				$this->goodsChannel = $vals['goodsChannel'];
			}
			
			
			if (isset($vals['refundNo'])){
				
				$this->refundNo = $vals['refundNo'];
			}
			
			
			if (isset($vals['totalReceivedAmount'])){
				
				$this->totalReceivedAmount = $vals['totalReceivedAmount'];
			}
			
			
			if (isset($vals['allDisabilityLevel'])){
				
				$this->allDisabilityLevel = $vals['allDisabilityLevel'];
			}
			
			
			if (isset($vals['creatorName'])){
				
				$this->creatorName = $vals['creatorName'];
			}
			
			
			if (isset($vals['goodsProps'])){
				
				$this->goodsProps = $vals['goodsProps'];
			}
			
			
			if (isset($vals['lowStockProdInfoUrl'])){
				
				$this->lowStockProdInfoUrl = $vals['lowStockProdInfoUrl'];
			}
			
			
			if (isset($vals['estimateRefundTime'])){
				
				$this->estimateRefundTime = $vals['estimateRefundTime'];
			}
			
			
			if (isset($vals['dataErrorType'])){
				
				$this->dataErrorType = $vals['dataErrorType'];
			}
			
			
			if (isset($vals['dataErrorUrl'])){
				
				$this->dataErrorUrl = $vals['dataErrorUrl'];
			}
			
			
			if (isset($vals['standardGoodsFlag'])){
				
				$this->standardGoodsFlag = $vals['standardGoodsFlag'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['bizNo'])){
				
				$this->bizNo = $vals['bizNo'];
			}
			
			
			if (isset($vals['purchaseProperty'])){
				
				$this->purchaseProperty = $vals['purchaseProperty'];
			}
			
			
			if (isset($vals['bizPurchaseQuantity'])){
				
				$this->bizPurchaseQuantity = $vals['bizPurchaseQuantity'];
			}
			
			
			if (isset($vals['bizTotalAmount'])){
				
				$this->bizTotalAmount = $vals['bizTotalAmount'];
			}
			
			
			if (isset($vals['groupCode'])){
				
				$this->groupCode = $vals['groupCode'];
			}
			
			
			if (isset($vals['settleStatus'])){
				
				$this->settleStatus = $vals['settleStatus'];
			}
			
			
			if (isset($vals['isSameBarcode'])){
				
				$this->isSameBarcode = $vals['isSameBarcode'];
			}
			
			
			if (isset($vals['importBarcodeCreateFailFileUrl'])){
				
				$this->importBarcodeCreateFailFileUrl = $vals['importBarcodeCreateFailFileUrl'];
			}
			
			
			if (isset($vals['printBarcodeCreateFailFileUrl'])){
				
				$this->printBarcodeCreateFailFileUrl = $vals['printBarcodeCreateFailFileUrl'];
			}
			
			
			if (isset($vals['poAlias'])){
				
				$this->poAlias = $vals['poAlias'];
			}
			
			
			if (isset($vals['reconciliationRate'])){
				
				$this->reconciliationRate = $vals['reconciliationRate'];
			}
			
			
			if (isset($vals['reconciliationRateDate'])){
				
				$this->reconciliationRateDate = $vals['reconciliationRateDate'];
			}
			
			
			if (isset($vals['reconciliationCurrency'])){
				
				$this->reconciliationCurrency = $vals['reconciliationCurrency'];
			}
			
			
			if (isset($vals['attributionLine'])){
				
				$this->attributionLine = $vals['attributionLine'];
			}
			
			
			if (isset($vals['actualReconciliationRate'])){
				
				$this->actualReconciliationRate = $vals['actualReconciliationRate'];
			}
			
			
			if (isset($vals['actualReconciliationRateDate'])){
				
				$this->actualReconciliationRateDate = $vals['actualReconciliationRateDate'];
			}
			
			
			if (isset($vals['conversionCnyRate'])){
				
				$this->conversionCnyRate = $vals['conversionCnyRate'];
			}
			
			
			if (isset($vals['supplementRefPo'])){
				
				$this->supplementRefPo = $vals['supplementRefPo'];
			}
			
			
			if (isset($vals['attachmentUrl'])){
				
				$this->attachmentUrl = $vals['attachmentUrl'];
			}
			
			
			if (isset($vals['generalTrade'])){
				
				$this->generalTrade = $vals['generalTrade'];
			}
			
			
			if (isset($vals['preDistributeSplitPo'])){
				
				$this->preDistributeSplitPo = $vals['preDistributeSplitPo'];
			}
			
			
			if (isset($vals['specialFlag'])){
				
				$this->specialFlag = $vals['specialFlag'];
			}
			
			
			if (isset($vals['specialFlagName'])){
				
				$this->specialFlagName = $vals['specialFlagName'];
			}
			
			
			if (isset($vals['bizName'])){
				
				$this->bizName = $vals['bizName'];
			}
			
			
			if (isset($vals['planPurchaseQuantity'])){
				
				$this->planPurchaseQuantity = $vals['planPurchaseQuantity'];
			}
			
			
			if (isset($vals['planTotalAmount'])){
				
				$this->planTotalAmount = $vals['planTotalAmount'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("approvalStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->approvalStatus); 
				
			}
			
			
			
			
			if ("deliveryStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->deliveryStatus); 
				
			}
			
			
			
			
			if ("buyerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerId);
				
			}
			
			
			
			
			if ("stockProps" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stockProps); 
				
			}
			
			
			
			
			if ("deliveryWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouse);
				
			}
			
			
			
			
			if ("disabilityLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->disabilityLevel);
				
			}
			
			
			
			
			if ("purchaseQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchaseQuantity); 
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalAmount);
				
			}
			
			
			
			
			if ("holdQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->holdQuantity); 
				
			}
			
			
			
			
			if ("deliveredQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveredQuantity); 
				
			}
			
			
			
			
			if ("receivedQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->receivedQuantity); 
				
			}
			
			
			
			
			if ("deliveryAddrId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryAddrId);
				
			}
			
			
			
			
			if ("deptId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deptId);
				
			}
			
			
			
			
			if ("sourceFileUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceFileUrl);
				
			}
			
			
			
			
			if ("resultFileUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultFileUrl);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDeleted); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("buyerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerName);
				
			}
			
			
			
			
			if ("purchaseType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->purchaseType); 
				
			}
			
			
			
			
			if ("deptName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deptName);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("approvalTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approvalTime);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("returnAddrId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnAddrId);
				
			}
			
			
			
			
			if ("bizLinkerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizLinkerId);
				
			}
			
			
			
			
			if ("bizLinkerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizLinkerName);
				
			}
			
			
			
			
			if ("bizLinkerDeptId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizLinkerDeptId);
				
			}
			
			
			
			
			if ("bizLinkerDeptName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizLinkerDeptName);
				
			}
			
			
			
			
			if ("approvalRole" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approvalRole);
				
			}
			
			
			
			
			if ("approvalRoleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approvalRoleName);
				
			}
			
			
			
			
			if ("skipFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->skipFlag); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("isQuota" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isQuota); 
				
			}
			
			
			
			
			if ("cooperationMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperationMode); 
				
			}
			
			
			
			
			if ("estimateArrivalTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimateArrivalTime);
				
			}
			
			
			
			
			if ("isSupplement" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isSupplement); 
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->goodsType); 
				
			}
			
			
			
			
			if ("distributableGoodsTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->distributableGoodsTime);
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("settlementMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->settlementMode); 
				
			}
			
			
			
			
			if ("deduction" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->deduction);
				
			}
			
			
			
			
			if ("buyerGroupCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerGroupCode);
				
			}
			
			
			
			
			if ("buyerGroupName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerGroupName);
				
			}
			
			
			
			
			if ("rfidTemplateFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->rfidTemplateFlag); 
				
			}
			
			
			
			
			if ("vendorIntroduceDept" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorIntroduceDept);
				
			}
			
			
			
			
			if ("notDistributedProdInfoUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->notDistributedProdInfoUrl);
				
			}
			
			
			
			
			if ("totalAmountCny" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalAmountCny);
				
			}
			
			
			
			
			if ("goodsChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsChannel);
				
			}
			
			
			
			
			if ("refundNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundNo);
				
			}
			
			
			
			
			if ("totalReceivedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalReceivedAmount);
				
			}
			
			
			
			
			if ("allDisabilityLevel" == $schemeField){
				
				$needSkip = false;
				
				$this->allDisabilityLevel = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->allDisabilityLevel[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("creatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creatorName);
				
			}
			
			
			
			
			if ("goodsProps" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->goodsProps); 
				
			}
			
			
			
			
			if ("lowStockProdInfoUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lowStockProdInfoUrl);
				
			}
			
			
			
			
			if ("estimateRefundTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimateRefundTime);
				
			}
			
			
			
			
			if ("dataErrorType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataErrorType);
				
			}
			
			
			
			
			if ("dataErrorUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataErrorUrl);
				
			}
			
			
			
			
			if ("standardGoodsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->standardGoodsFlag); 
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("bizNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizNo);
				
			}
			
			
			
			
			if ("purchaseProperty" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->purchaseProperty); 
				
			}
			
			
			
			
			if ("bizPurchaseQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizPurchaseQuantity); 
				
			}
			
			
			
			
			if ("bizTotalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bizTotalAmount);
				
			}
			
			
			
			
			if ("groupCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->groupCode);
				
			}
			
			
			
			
			if ("settleStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settleStatus);
				
			}
			
			
			
			
			if ("isSameBarcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isSameBarcode);
				
			}
			
			
			
			
			if ("importBarcodeCreateFailFileUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->importBarcodeCreateFailFileUrl);
				
			}
			
			
			
			
			if ("printBarcodeCreateFailFileUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->printBarcodeCreateFailFileUrl);
				
			}
			
			
			
			
			if ("poAlias" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poAlias);
				
			}
			
			
			
			
			if ("reconciliationRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->reconciliationRate);
				
			}
			
			
			
			
			if ("reconciliationRateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reconciliationRateDate);
				
			}
			
			
			
			
			if ("reconciliationCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reconciliationCurrency);
				
			}
			
			
			
			
			if ("attributionLine" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributionLine);
				
			}
			
			
			
			
			if ("actualReconciliationRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actualReconciliationRate);
				
			}
			
			
			
			
			if ("actualReconciliationRateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->actualReconciliationRateDate);
				
			}
			
			
			
			
			if ("conversionCnyRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->conversionCnyRate);
				
			}
			
			
			
			
			if ("supplementRefPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplementRefPo);
				
			}
			
			
			
			
			if ("attachmentUrl" == $schemeField){
				
				$needSkip = false;
				
				$this->attachmentUrl = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->attachmentUrl[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("generalTrade" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->generalTrade); 
				
			}
			
			
			
			
			if ("preDistributeSplitPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preDistributeSplitPo);
				
			}
			
			
			
			
			if ("specialFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialFlag);
				
			}
			
			
			
			
			if ("specialFlagName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialFlagName);
				
			}
			
			
			
			
			if ("bizName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizName);
				
			}
			
			
			
			
			if ("planPurchaseQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->planPurchaseQuantity); 
				
			}
			
			
			
			
			if ("planTotalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->planTotalAmount);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->taxRate);
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batchNo');
		$xfer += $output->writeString($this->batchNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('companyCode');
		$xfer += $output->writeString($this->companyCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('approvalStatus');
		$xfer += $output->writeByte($this->approvalStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deliveryStatus');
		$xfer += $output->writeByte($this->deliveryStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('buyerId');
		$xfer += $output->writeString($this->buyerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('stockProps');
		$xfer += $output->writeByte($this->stockProps);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deliveryWarehouse');
		$xfer += $output->writeString($this->deliveryWarehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('disabilityLevel');
		$xfer += $output->writeString($this->disabilityLevel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchaseQuantity');
		$xfer += $output->writeI32($this->purchaseQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalAmount');
		$xfer += $output->writeDouble($this->totalAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('holdQuantity');
		$xfer += $output->writeI32($this->holdQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deliveredQuantity');
		$xfer += $output->writeI32($this->deliveredQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receivedQuantity');
		$xfer += $output->writeI32($this->receivedQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->deliveryAddrId !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryAddrId');
			$xfer += $output->writeString($this->deliveryAddrId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('deptId');
		$xfer += $output->writeString($this->deptId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceFileUrl');
		$xfer += $output->writeString($this->sourceFileUrl);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resultFileUrl');
		$xfer += $output->writeString($this->resultFileUrl);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isDeleted');
		$xfer += $output->writeByte($this->isDeleted);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('createTime');
		$xfer += $output->writeI64($this->createTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('updateTime');
		$xfer += $output->writeI64($this->updateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('buyerName');
		$xfer += $output->writeString($this->buyerName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchaseType');
		$xfer += $output->writeByte($this->purchaseType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deptName');
		$xfer += $output->writeString($this->deptName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorName');
		$xfer += $output->writeString($this->vendorName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('approvalTime');
		$xfer += $output->writeString($this->approvalTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAddrId !== null) {
			
			$xfer += $output->writeFieldBegin('returnAddrId');
			$xfer += $output->writeString($this->returnAddrId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizLinkerId !== null) {
			
			$xfer += $output->writeFieldBegin('bizLinkerId');
			$xfer += $output->writeString($this->bizLinkerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizLinkerName !== null) {
			
			$xfer += $output->writeFieldBegin('bizLinkerName');
			$xfer += $output->writeString($this->bizLinkerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizLinkerDeptId !== null) {
			
			$xfer += $output->writeFieldBegin('bizLinkerDeptId');
			$xfer += $output->writeString($this->bizLinkerDeptId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizLinkerDeptName !== null) {
			
			$xfer += $output->writeFieldBegin('bizLinkerDeptName');
			$xfer += $output->writeString($this->bizLinkerDeptName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalRole !== null) {
			
			$xfer += $output->writeFieldBegin('approvalRole');
			$xfer += $output->writeString($this->approvalRole);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalRoleName !== null) {
			
			$xfer += $output->writeFieldBegin('approvalRoleName');
			$xfer += $output->writeString($this->approvalRoleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skipFlag !== null) {
			
			$xfer += $output->writeFieldBegin('skipFlag');
			$xfer += $output->writeByte($this->skipFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isQuota !== null) {
			
			$xfer += $output->writeFieldBegin('isQuota');
			$xfer += $output->writeByte($this->isQuota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationMode !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationMode');
			$xfer += $output->writeByte($this->cooperationMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimateArrivalTime !== null) {
			
			$xfer += $output->writeFieldBegin('estimateArrivalTime');
			$xfer += $output->writeI64($this->estimateArrivalTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSupplement !== null) {
			
			$xfer += $output->writeFieldBegin('isSupplement');
			$xfer += $output->writeByte($this->isSupplement);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			$xfer += $output->writeByte($this->goodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distributableGoodsTime !== null) {
			
			$xfer += $output->writeFieldBegin('distributableGoodsTime');
			$xfer += $output->writeI64($this->distributableGoodsTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementMode !== null) {
			
			$xfer += $output->writeFieldBegin('settlementMode');
			$xfer += $output->writeByte($this->settlementMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deduction !== null) {
			
			$xfer += $output->writeFieldBegin('deduction');
			$xfer += $output->writeDouble($this->deduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerGroupCode !== null) {
			
			$xfer += $output->writeFieldBegin('buyerGroupCode');
			$xfer += $output->writeString($this->buyerGroupCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerGroupName !== null) {
			
			$xfer += $output->writeFieldBegin('buyerGroupName');
			$xfer += $output->writeString($this->buyerGroupName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rfidTemplateFlag !== null) {
			
			$xfer += $output->writeFieldBegin('rfidTemplateFlag');
			$xfer += $output->writeByte($this->rfidTemplateFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorIntroduceDept !== null) {
			
			$xfer += $output->writeFieldBegin('vendorIntroduceDept');
			$xfer += $output->writeString($this->vendorIntroduceDept);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->notDistributedProdInfoUrl !== null) {
			
			$xfer += $output->writeFieldBegin('notDistributedProdInfoUrl');
			$xfer += $output->writeString($this->notDistributedProdInfoUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAmountCny !== null) {
			
			$xfer += $output->writeFieldBegin('totalAmountCny');
			$xfer += $output->writeDouble($this->totalAmountCny);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsChannel !== null) {
			
			$xfer += $output->writeFieldBegin('goodsChannel');
			$xfer += $output->writeString($this->goodsChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundNo !== null) {
			
			$xfer += $output->writeFieldBegin('refundNo');
			$xfer += $output->writeString($this->refundNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalReceivedAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalReceivedAmount');
			$xfer += $output->writeDouble($this->totalReceivedAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allDisabilityLevel !== null) {
			
			$xfer += $output->writeFieldBegin('allDisabilityLevel');
			
			if (!is_array($this->allDisabilityLevel)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->allDisabilityLevel as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creatorName !== null) {
			
			$xfer += $output->writeFieldBegin('creatorName');
			$xfer += $output->writeString($this->creatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsProps !== null) {
			
			$xfer += $output->writeFieldBegin('goodsProps');
			$xfer += $output->writeByte($this->goodsProps);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lowStockProdInfoUrl !== null) {
			
			$xfer += $output->writeFieldBegin('lowStockProdInfoUrl');
			$xfer += $output->writeString($this->lowStockProdInfoUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimateRefundTime !== null) {
			
			$xfer += $output->writeFieldBegin('estimateRefundTime');
			$xfer += $output->writeI64($this->estimateRefundTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataErrorType !== null) {
			
			$xfer += $output->writeFieldBegin('dataErrorType');
			$xfer += $output->writeString($this->dataErrorType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataErrorUrl !== null) {
			
			$xfer += $output->writeFieldBegin('dataErrorUrl');
			$xfer += $output->writeString($this->dataErrorUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->standardGoodsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('standardGoodsFlag');
			$xfer += $output->writeByte($this->standardGoodsFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizNo !== null) {
			
			$xfer += $output->writeFieldBegin('bizNo');
			$xfer += $output->writeString($this->bizNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseProperty !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseProperty');
			$xfer += $output->writeByte($this->purchaseProperty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('bizPurchaseQuantity');
		$xfer += $output->writeI32($this->bizPurchaseQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizTotalAmount');
		$xfer += $output->writeDouble($this->bizTotalAmount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->groupCode !== null) {
			
			$xfer += $output->writeFieldBegin('groupCode');
			$xfer += $output->writeString($this->groupCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settleStatus !== null) {
			
			$xfer += $output->writeFieldBegin('settleStatus');
			$xfer += $output->writeString($this->settleStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSameBarcode !== null) {
			
			$xfer += $output->writeFieldBegin('isSameBarcode');
			$xfer += $output->writeString($this->isSameBarcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->importBarcodeCreateFailFileUrl !== null) {
			
			$xfer += $output->writeFieldBegin('importBarcodeCreateFailFileUrl');
			$xfer += $output->writeString($this->importBarcodeCreateFailFileUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->printBarcodeCreateFailFileUrl !== null) {
			
			$xfer += $output->writeFieldBegin('printBarcodeCreateFailFileUrl');
			$xfer += $output->writeString($this->printBarcodeCreateFailFileUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poAlias !== null) {
			
			$xfer += $output->writeFieldBegin('poAlias');
			$xfer += $output->writeString($this->poAlias);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reconciliationRate !== null) {
			
			$xfer += $output->writeFieldBegin('reconciliationRate');
			$xfer += $output->writeDouble($this->reconciliationRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reconciliationRateDate !== null) {
			
			$xfer += $output->writeFieldBegin('reconciliationRateDate');
			$xfer += $output->writeI64($this->reconciliationRateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reconciliationCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('reconciliationCurrency');
			$xfer += $output->writeString($this->reconciliationCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributionLine !== null) {
			
			$xfer += $output->writeFieldBegin('attributionLine');
			$xfer += $output->writeString($this->attributionLine);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualReconciliationRate !== null) {
			
			$xfer += $output->writeFieldBegin('actualReconciliationRate');
			$xfer += $output->writeDouble($this->actualReconciliationRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualReconciliationRateDate !== null) {
			
			$xfer += $output->writeFieldBegin('actualReconciliationRateDate');
			$xfer += $output->writeI64($this->actualReconciliationRateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->conversionCnyRate !== null) {
			
			$xfer += $output->writeFieldBegin('conversionCnyRate');
			$xfer += $output->writeDouble($this->conversionCnyRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplementRefPo !== null) {
			
			$xfer += $output->writeFieldBegin('supplementRefPo');
			$xfer += $output->writeString($this->supplementRefPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attachmentUrl !== null) {
			
			$xfer += $output->writeFieldBegin('attachmentUrl');
			
			if (!is_array($this->attachmentUrl)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attachmentUrl as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->generalTrade !== null) {
			
			$xfer += $output->writeFieldBegin('generalTrade');
			$xfer += $output->writeByte($this->generalTrade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preDistributeSplitPo !== null) {
			
			$xfer += $output->writeFieldBegin('preDistributeSplitPo');
			$xfer += $output->writeString($this->preDistributeSplitPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialFlag !== null) {
			
			$xfer += $output->writeFieldBegin('specialFlag');
			$xfer += $output->writeString($this->specialFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialFlagName !== null) {
			
			$xfer += $output->writeFieldBegin('specialFlagName');
			$xfer += $output->writeString($this->specialFlagName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizName !== null) {
			
			$xfer += $output->writeFieldBegin('bizName');
			$xfer += $output->writeString($this->bizName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->planPurchaseQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('planPurchaseQuantity');
			$xfer += $output->writeI32($this->planPurchaseQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->planTotalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('planTotalAmount');
			$xfer += $output->writeDouble($this->planTotalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeDouble($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>