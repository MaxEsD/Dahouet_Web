<?php
include ('../config.inc.php');
?>

<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/registervoilier.css">
	<title>register</title>

<body>
	<?php
		include ('View_Header.php');
	?>

<?php

		if (empty ( $_POST ['numvoile'] )) 
		// Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
		{
	
			echo '
				<div id="contenueform">
					<section class="billboard light">
						<div class="formulaire">

							<h1>Inscrire un Voilier</h1>
								<p>Entrer vos informations pour enregister votre voilier .</p>
									<form class="form" method="post" action="View_Register_Voilier_TEST.php">
								<p>Saisir un numero de voile :</p>
									<input type="text" name="numvoile" class="numvoile" placeholder="Numero de voile">
								<p>Saisir un numero de classe :</p>
									<input type="text" class="numclasse" name="numclasse" placeholder="Numero de Classe">
								<p>Saisir un numero de membre :</p>
									<input type="text" class="IDmembre" name="IDmembre" placeholder="Numero de membre">
								<p>Saisir un nom de voile :</p>
									<input type="text" class="nomvoile" name="nomvoile" placeholder="Nom de la Voile">
								<p></p>
								<br> 
									<input type="submit" class="submit" value="Enregistrer"></br>

							</form>
						</div>
					</section>
				</div>';
		}
	
		else //On est dans le cas traitement
			{
				$i = 0;
	
					if ($i==0)
						{
							include('../model/dao/Register_Voilier_DAO_TEST.php');
							RegisterVoilierDAO::registervoilier();
							echo '<head>
  								<meta charset="utf-8">
  								<link rel="stylesheet" href="css/head.css">		
 								</head>
								<div id="conten"><meta charset="utf-8">
								<h1>Inscription terminée</h1>';
							
							echo '<p>Voilier enregistrer</p>
									<p>Cliquez <a href="index.php">ici</a> pour revenir à la page d accueil</p>
								</div>';
						}	
		
					else
						{
							echo'pas bon !';
						}
	
			}
?>

<?php
include ('View_Footer.php');
?>

</body>
</html>