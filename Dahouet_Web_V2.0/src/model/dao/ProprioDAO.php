<?php

include_once ('Connect.php');
include ('../model/metier/Proprietaire.php');


class ProprioDAO 
{
	
	public static function getIDmembre($id) 
	{
		
		// connection BDD
		$pdo = Connect::getConnection ();
		
		$sql = "SELECT IDMBR FROM proprietaire WHERE NOMMBR = '$id'";
		
		$result = $pdo->query ( $sql );
		
		$result->setFetchMode ( PDO::FETCH_OBJ );
		
		$ligne = $result->fetch ();  // on récupère la liste

		$Prop = $ligne->IDMBR;
					
	
		$result->closeCursor (); // on ferme le curseur des résultats
		
		return $Prop;
	}
	
}