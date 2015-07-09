<?php
include_once ('Connect.php');
include ('../model/metier/regate.php');


class RegateDAO 
	{
	
		public static function getListRegate() { /*TEST*/
		
		// connection BDD
		$pdo = Connect::getConnection ();
		
		$sql = "SELECT * FROM regate";
		
		$result = $pdo->query ( $sql );
		
		$result->setFetchMode ( PDO::FETCH_OBJ );
		
		$tregates = array ();
		
				// transformer recordset en tableau
				while ( $ligne = $result->fetch () ) // on récupère la liste
					{
						$tr = new regate ( $ligne->NUMREG, $ligne->CDOCHAL, $ligne->CODCOM, $ligne->LIBREG, $ligne->DATREG, $ligne->LIEUREG, $ligne->DISTANCE, $ligne->HEURDEP );
						array_push ( $tregates, $tr );
					}
		
		$result->closeCursor (); // on ferme le curseur des résultats
		
		return $tregates;
	}
	
	
		public static function detailreg($DetailReg) {
		
		// connection BDD
		$pdo = Connect::getConnection ();
		
		$sql = "SELECT * FROM regate where NUMREG = '$DetailReg.'";
		
		$result = $pdo->query ( $sql );
		
		$result->setFetchMode ( PDO::FETCH_OBJ );
		
		// transformer recordset en tableau
		$ligne = $result->fetch (); // on récupère la liste
		
		$DetailReg = new regate ( $ligne->NUMREG, $ligne->CDOCHAL, $ligne->CODCOM, $ligne->LIBREG, $ligne->DATREG, $ligne->LIEUREG, $ligne->DISTANCE, $ligne->HEURDEP );
		
		$result->closeCursor (); // on ferme le curseur des résultats
		
		return $DetailReg;
	}
}