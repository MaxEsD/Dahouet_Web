<?php
class licencie {
	
	
	private $NUMLIC;
	private $NOMLIC;
	private $PTSFFV;
	private $ANNLIC;
	private $DATNAISS;
	
	
	public function __construct($NUMLIC, $NOMLIC, $PTSFFV, $ANNLIC, $DATNAISS) {
		
		$this->NUMLIC = $NUMLIC;
		$this->NOMLIC = $NOMLIC;
		$this->PTSFFV = $PTSFFV;
		$this->ANNLIC = $ANNLIC;
		$this->DATNAISS = $DATNAISS;

	}
	
	public function getNUMLIC() {
		return $this->NUMLIC;
	}
	
	public function getNOMLIC() {
		return $this->NOMLIC;
	}
	
	public function getPTSFFV() {
		return $this->PTSFFV;
	}
	
	public function getANNLIC() {
		return $this->ANNLIC;
	}
	
	public function getDATNAISS() {
		return $this->DATNAISS;
	}
	
	
}

