<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\bip\report\service;

class ExportDiagramRequest {
	
	static $_TSPEC;
	public $reportId = null;
	public $diagramId = null;
	public $diagramCondition = null;
	public $oaName = null;
	public $diagramName = null;
	public $pageModel = null;
	public $customCondition = null;
	public $requestSystem = null;
	public $reportName = null;
	public $sortingModel = null;
	public $groupByFields = null;
	public $reportToken = null;
	public $sortingModels = null;
	public $customizeDownloadColumns = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reportId'
			),
			2 => array(
			'var' => 'diagramId'
			),
			3 => array(
			'var' => 'diagramCondition'
			),
			4 => array(
			'var' => 'oaName'
			),
			5 => array(
			'var' => 'diagramName'
			),
			6 => array(
			'var' => 'pageModel'
			),
			7 => array(
			'var' => 'customCondition'
			),
			8 => array(
			'var' => 'requestSystem'
			),
			9 => array(
			'var' => 'reportName'
			),
			10 => array(
			'var' => 'sortingModel'
			),
			11 => array(
			'var' => 'groupByFields'
			),
			12 => array(
			'var' => 'reportToken'
			),
			13 => array(
			'var' => 'sortingModels'
			),
			14 => array(
			'var' => 'customizeDownloadColumns'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reportId'])){
				
				$this->reportId = $vals['reportId'];
			}
			
			
			if (isset($vals['diagramId'])){
				
				$this->diagramId = $vals['diagramId'];
			}
			
			
			if (isset($vals['diagramCondition'])){
				
				$this->diagramCondition = $vals['diagramCondition'];
			}
			
			
			if (isset($vals['oaName'])){
				
				$this->oaName = $vals['oaName'];
			}
			
			
			if (isset($vals['diagramName'])){
				
				$this->diagramName = $vals['diagramName'];
			}
			
			
			if (isset($vals['pageModel'])){
				
				$this->pageModel = $vals['pageModel'];
			}
			
			
			if (isset($vals['customCondition'])){
				
				$this->customCondition = $vals['customCondition'];
			}
			
			
			if (isset($vals['requestSystem'])){
				
				$this->requestSystem = $vals['requestSystem'];
			}
			
			
			if (isset($vals['reportName'])){
				
				$this->reportName = $vals['reportName'];
			}
			
			
			if (isset($vals['sortingModel'])){
				
				$this->sortingModel = $vals['sortingModel'];
			}
			
			
			if (isset($vals['groupByFields'])){
				
				$this->groupByFields = $vals['groupByFields'];
			}
			
			
			if (isset($vals['reportToken'])){
				
				$this->reportToken = $vals['reportToken'];
			}
			
			
			if (isset($vals['sortingModels'])){
				
				$this->sortingModels = $vals['sortingModels'];
			}
			
			
			if (isset($vals['customizeDownloadColumns'])){
				
				$this->customizeDownloadColumns = $vals['customizeDownloadColumns'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExportDiagramRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("reportId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reportId); 
				
			}
			
			
			
			
			if ("diagramId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->diagramId); 
				
			}
			
			
			
			
			if ("diagramCondition" == $schemeField){
				
				$needSkip = false;
				
				$this->diagramCondition = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\bip\report\service\ReportConditionModel();
						$elem0->read($input);
						
						$this->diagramCondition[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("oaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oaName);
				
			}
			
			
			
			
			if ("diagramName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diagramName);
				
			}
			
			
			
			
			if ("pageModel" == $schemeField){
				
				$needSkip = false;
				
				$this->pageModel = new \com\vip\bip\report\service\PageModel();
				$this->pageModel->read($input);
				
			}
			
			
			
			
			if ("customCondition" == $schemeField){
				
				$needSkip = false;
				
				$this->customCondition = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\bip\report\service\CustomConditionModel();
						$elem1->read($input);
						
						$this->customCondition[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("requestSystem" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestSystem);
				
			}
			
			
			
			
			if ("reportName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reportName);
				
			}
			
			
			
			
			if ("sortingModel" == $schemeField){
				
				$needSkip = false;
				
				$this->sortingModel = new \com\vip\bip\report\service\SortingModel();
				$this->sortingModel->read($input);
				
			}
			
			
			
			
			if ("groupByFields" == $schemeField){
				
				$needSkip = false;
				
				$this->groupByFields = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->groupByFields[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("reportToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reportToken);
				
			}
			
			
			
			
			if ("sortingModels" == $schemeField){
				
				$needSkip = false;
				
				$this->sortingModels = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\bip\report\service\SortingModel();
						$elem3->read($input);
						
						$this->sortingModels[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("customizeDownloadColumns" == $schemeField){
				
				$needSkip = false;
				
				$this->customizeDownloadColumns = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->customizeDownloadColumns[$_size4++] = $elem4;
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
		
		if($this->reportId !== null) {
			
			$xfer += $output->writeFieldBegin('reportId');
			$xfer += $output->writeI64($this->reportId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diagramId !== null) {
			
			$xfer += $output->writeFieldBegin('diagramId');
			$xfer += $output->writeI64($this->diagramId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diagramCondition !== null) {
			
			$xfer += $output->writeFieldBegin('diagramCondition');
			
			if (!is_array($this->diagramCondition)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->diagramCondition as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oaName !== null) {
			
			$xfer += $output->writeFieldBegin('oaName');
			$xfer += $output->writeString($this->oaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diagramName !== null) {
			
			$xfer += $output->writeFieldBegin('diagramName');
			$xfer += $output->writeString($this->diagramName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageModel !== null) {
			
			$xfer += $output->writeFieldBegin('pageModel');
			
			if (!is_object($this->pageModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customCondition !== null) {
			
			$xfer += $output->writeFieldBegin('customCondition');
			
			if (!is_array($this->customCondition)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->customCondition as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestSystem !== null) {
			
			$xfer += $output->writeFieldBegin('requestSystem');
			$xfer += $output->writeString($this->requestSystem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reportName !== null) {
			
			$xfer += $output->writeFieldBegin('reportName');
			$xfer += $output->writeString($this->reportName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sortingModel !== null) {
			
			$xfer += $output->writeFieldBegin('sortingModel');
			
			if (!is_object($this->sortingModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->sortingModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->groupByFields !== null) {
			
			$xfer += $output->writeFieldBegin('groupByFields');
			
			if (!is_array($this->groupByFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->groupByFields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reportToken !== null) {
			
			$xfer += $output->writeFieldBegin('reportToken');
			$xfer += $output->writeString($this->reportToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sortingModels !== null) {
			
			$xfer += $output->writeFieldBegin('sortingModels');
			
			if (!is_array($this->sortingModels)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sortingModels as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizeDownloadColumns !== null) {
			
			$xfer += $output->writeFieldBegin('customizeDownloadColumns');
			
			if (!is_array($this->customizeDownloadColumns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->customizeDownloadColumns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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