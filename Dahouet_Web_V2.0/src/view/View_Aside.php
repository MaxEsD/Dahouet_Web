<?php
session_start ();
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">

	<link rel="stylesheet" href="../view/css/accueil.css" />

<body>

<section id="Section">
	
	<aside class="aside">
		
		<div class="log ">
			
			<?php
     			if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) {
     			echo 'Bonjour ' . $_SESSION ['pseudo'];
     			?>
      	<a id= deconnect  href="../model/dao/Log_Out_DAO.php">Déconnexion</a>
     		<?php
     			} 
     			else {
      		?>
        <p>Log in</p>

	<form method="POST" action="../controllers/Controller_Log_In.php">
	<input type="text"  name="pseudo" placeholder="username" value="">
	<input type="password" name ="password" placeholder="password" value="">
	<input type="submit" name="submit" value="Connection">
	</form>
        	<?php
     			}
    		?>


		</div>

		<div class="sociaux">
		
		<p class = "titre">Suivez nous sur les réseaux sociaux</p>
			<p>
				<a href="https://www.facebook.com/ycvalandre"> 
				<img style="border: 0px;" alt="Facebook" src="http://ycva.free.fr/images/facebook.png" width="42" height="42" />
				</a>
				
				<a href="https://twitter.com/ycvalandre">
				<img style="border: 0px;" alt="Twitter" src="http://ycva.free.fr/images/twitter.png" width="42" height="42" />
				</a>
			</p>
		</div>
		
		
		
		<div id="nav_menu">
			<h3>Inscription aux régates 2015</h3>
				
				<?php
				include ("../controllers/Controller_List_Regates.php");
				?>

		</div>
	</aside>
</section>
</body>