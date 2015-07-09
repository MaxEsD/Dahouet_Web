<?php
class Proprietaire {
	
	private $IDMBR;
	private $IDCLUB;
	private $NOMMBR;
	private $MAILMBR;
	private $PWMBR;
	
	public function __construct($IDMBR, $IDCLUB, $NOMMBR, $MAILMBR, $PWMBR) {
		
		$this->IDMBR = $IDMBR;
		$this->IDCLUB = $IDCLUB;
		$this->NOMMBR = $NOMMBR;
		$this->MAILMBR = $MAILMBR;
		$this->PWMBR = $PWMBR;
	}
	
	public function getIDMBR() {
		return $this->IDMBR;
	}
	
	public function getIDCLUB() {
		return $this->IDCLUB;
	}
	
	public function getNOMMBR() {
		return $this->NOMMBR;
	}
	
	public function getMAILMBR() {
		return $this->MAILMBR;
	}
	
	public function getPWMBR() {
		return $this->PWMBR;
	}

}