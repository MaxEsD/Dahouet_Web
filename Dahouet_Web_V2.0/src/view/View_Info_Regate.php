<?php
include ('View_Header.php');
include('View_Aside.php');
?>
<body>
<div class = "News">


<?php
     	if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) {
     		
     		echo "<h1>Inscription à la regates : ".$DetailRe->getLIBREG(). '</h1>';
     		
     			echo "<p class = 'regateDetail'> Nom de la Régate :".$DetailRe->getLIBREG().'</p>';
				echo "<p class = 'regateDetail'> Numero de la Régate : ".$DetailRe->getNUMREG().'</p>';
				echo "<p class = 'regateDetail'> Distance de la Régate : ".$DetailRe->getDISTANCE().' Miles</p>';
				echo "<p class = 'regateDetail'> Date de depart de la Régate : ".$DetailRe->getDATREG().'</p>';
				echo "<p class = 'regateDetail'> Heure de depart de la Régate : ".$DetailRe->getHEURDEP().'</p>';
     			?>
<?php
	include ("../controllers/Controller_List_Voilier_Proprio.php");
?>
     	<?php
     			} 
     			else {
      	?>
       				 <p>connectez vous pour inscrire votre voilier </p>

		
        		<?php
     				}
    			?>
    			</div>
</body>
<?php
include ('View_Footer.php');
?>