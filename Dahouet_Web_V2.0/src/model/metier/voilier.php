<?php
class voilier {
	
	private $NUMVOIL;
	private $NUMCLAS;
	private $IDMBR;
	private $NOMVOIL;
	private $NBRPTS;
	
	public function __construct($NUMVOIL, $NUMCLAS, $IDMBR, $NOMVOIL, $NBRPTS) {
		
		$this->NUMVOIL = $NUMVOIL;
		$this->NUMCLAS = $NUMCLAS;
		$this->IDMBR = $IDMBR;
		$this->NOMVOIL = $NOMVOIL;
		$this->NBRPTS = $NBRPTS;
	}
	
	public function getNUMVOIL() {
		return $this->NUMVOIL;
	}
	
	public function getNUMCLAS() {
		return $this->NUMCLAS;
	}
	
	public function getIDMBR() {
		return $this->IDMBR;
	}
	
	public function getNOMVOIL() {
		return $this->NOMVOIL;
	}
	
	public function getNBRPTS() {
		return $this->NBRPTS;
	}
	
}