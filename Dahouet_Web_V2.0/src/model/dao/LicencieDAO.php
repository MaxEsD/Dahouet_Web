<?php

include_once ('Connect.php');
include ('../model/metier/licencie.php');


class LicencieDAO
	{
public static function getLicencie(){

	// connection BDD
	$pdo = Connect::getConnection();

	$sql = "SELECT * FROM licencie";

	$result = $pdo->query($sql);

	$result->setFetchMode(PDO::FETCH_OBJ);

	$tEquipage = array();

	while($ligne = $result->fetch())// on récupère la liste
	{

		$Licencie = new licencie ($ligne->NUMLIC, $ligne->NOMLIC, $ligne->PTSFFV, $ligne->ANNLIC, $ligne->DATNAISS);
		array_push($tEquipage, $Licencie);
	}
	//  var_dump($tReg);

	$result->closeCursor(); // on ferme le curseur des résultats

	return $tEquipage;
}



public static function getLicenciePanier($id){

	// connection BDD
	$pdo = Connect::getConnection();

	$sql = "SELECT * FROM licencie WHERE NOMLIC ='$id";

	$result = $pdo->query($sql);

	$result->setFetchMode(PDO::FETCH_OBJ);

	$tEquipage = array();

	while($ligne = $result->fetch())// on récupère la liste
	{

		$Licencie = new licencie ($ligne->NUMLIC, $ligne->NOMLIC, $ligne->PTSFFV, $ligne->ANNLIC, $ligne->DATNAISS);
		array_push($tEquipage, $Licencie);
	}
	//  var_dump($tReg);

	$result->closeCursor(); // on ferme le curseur des résultats

	return $tEquipage;
}

	}