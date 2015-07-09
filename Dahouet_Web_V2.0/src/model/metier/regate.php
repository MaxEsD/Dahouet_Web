<?php
class regate {
	
	private $NUMREG;
	private $CDOCHAL;
	private $CODCOM;
	private $LIBREG;
	private $DATREG;
	private $LIEUREG;
	private $DISTANCE;
	private $HEURDEP;
	
	public function __construct($NUMREG, $CDOCHAL, $CODCOM, $LIBREG, $DATREG, $LIEUREG, $DISTANCE, $HEURDEP) {
		
		
		
		$this->NUMREG = $NUMREG;
		$this->CDOCHAL = $CDOCHAL;
		$this->CODCOM = $CODCOM;
		$this->LIBREG = $LIBREG;
		$this->DATREG = $DATREG;
		$this->LIEUREG = $LIEUREG;
		$this->DISTANCE = $DISTANCE;
		$this->HEURDEP = $HEURDEP;
	}
	
	public function getNUMREG() {
		return $this->NUMREG;
	}
	
	public function getCDOCHAL() {
		return $this->CDOCHAL;
	}
	
	public function getCODCOM() {
		return $this->CODCOM;
	}
	
	public function getLIBREG() {
		return $this->LIBREG;
	}

	public function getDATREG() {
		return $this->DATREG;
	}

	public function getLIEUREG() {
		return $this->LIEUREG;
	}
	
	public function getDISTANCE() {
		return $this->DISTANCE;
	}
	
	public function getHEURDEP() {
		return $this->HEURDEP;
	}
	
}