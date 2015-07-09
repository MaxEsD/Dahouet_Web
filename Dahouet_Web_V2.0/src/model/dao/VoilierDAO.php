<?php

include_once ('Connect.php');
include ('../model/metier/voilier.php');


class VoilierDAO
	{

		public static function getVoilier(){ /*($prop) TEST*/

			// connection BDD
			$pdo = Connect::getConnection();

			$sql = "SELECT * FROM voilier"; /*where IDMBR= '$prop'*/

			$result = $pdo->query($sql);

			$result->setFetchMode(PDO::FETCH_OBJ);

			$tvoiliers = array();
			// transformer recordset en tableau
				while( $ligne = $result->fetch() ) // on récupère la liste
					{
						$tv = new voilier($ligne->NUMVOIL, $ligne->NUMCLAS, $ligne->IDMBR, $ligne->NOMVOIL, $ligne->NBRPTS);
						array_push($tvoiliers, $tv);
					}

				$result->closeCursor(); // on ferme le curseur des résultats

	return $tvoiliers;
}


		public static function getVoiliersProprio($Proprio, $RegateInscrit){
		
		// connection BDD
		$pdo = Connect::getConnection();

		$sql = "SELECT * FROM voilier where IDMBR = '$Proprio' and not exists(select numvoil from participe where voilier.NUMVOIL=participe.NUMVOIL and NUMREG = '$RegateInscrit')";

		$result = $pdo->query($sql);

		$result->setFetchMode(PDO::FETCH_OBJ);

		$tVoiliers = array();

			while($ligne = $result->fetch())// on récupère la liste
				{

					$Voil = new voilier($ligne->NUMVOIL, $ligne->NUMCLAS, $ligne->IDMBR, $ligne->NOMVOIL, $ligne->NBRPTS);
					array_push($tVoiliers, $Voil);
				}
					//  var_dump($tReg);

		$result->closeCursor(); // on ferme le curseur des résultats

	return $tVoiliers;
	}

	
		public static function InfoVoiliersProprio($Voilier){
		
		// connection BDD
		$pdo = Connect::getConnection();

		$sql = "SELECT * FROM voilier where NUMVOIL = '$Voilier'";

		$result = $pdo->query($sql);

		$result->setFetchMode(PDO::FETCH_OBJ);

		$ligne = $result->fetch();// on récupère la liste
				
		$Voil = new voilier($ligne->NUMVOIL, $ligne->NUMCLAS, $ligne->IDMBR, $ligne->NOMVOIL, $ligne->NBRPTS);
			
					//  var_dump($tReg);

		$result->closeCursor(); // on ferme le curseur des résultats

	return $Voil;
	}
	
	
}