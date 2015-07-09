<?php
include ('View_Header.php');
include('View_Aside.php');
?>
<body>
<div class = "News">


<?php

				echo "<h1>Votre Voilier : ".$Voil->getNOMVOIL(). '</h1>';

				echo "<p> Nom du Voilier : ".$Voil->getNOMVOIL().'</p>';
     			echo " <p>Numero de voile :".$Voil->getNUMVOIL().'</p>';
				echo "<p> Numero de la Classe : ".$Voil->getNUMCLAS().'</p>';
				echo "<p> ID Membre : ".$Voil->getIDMBR().'</p>';
				

 ?>
 
<?php
	include ('../controllers/Controller_List_Equipage.php')
?>
     			</div>
</body>
<?php
include ('View_Footer.php');
?>