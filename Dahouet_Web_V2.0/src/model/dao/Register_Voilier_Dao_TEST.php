<?php

include('Connect.php');
include('../model/metier/voilier.php');


class RegisterVoilierDAO{
	
		public static function registervoilier()
			{

				try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=dahouet_complet', 'root', '');
					}
				catch(Exception $e)
					{
						die('Erreur : '.$e->getMessage());
					}

				/*$pdo = Connect::getConnection();*/

					$req = $bdd->prepare('INSERT INTO voilier(NUMVOIL,NUMCLAS,IDMBR,NOMVOIL) VALUES(:NUMVOIL,:NUMCLASS,:IDMBR,:NOMVOIL)');
					$req->execute(array(
	
					':NUMVOIL' => $_POST['numvoile'],
					':NUMCLASS' => $_POST['numclasse'],
					':IDMBR' => $_POST['IDmembre'],
					':NOMVOIL' => $_POST['nomvoile'] ));



			}
	}

?>
