<?php

 if (! isset ( $_SESSION ['panier'] ))
 
  $_SESSION ['panier'] = array ();
 
 if (isset( $_GET ['action'] ) && ($_GET['action'])=='resa')
 {
	 array_push (  $_SESSION ['panier'] , $_GET ['NOMLIC'] );
 }
 else{}
 
 
 
 echo '<h2 id= panier2>Contenu de votre panier</h2><ul>';
 
 foreach ( $_SESSION ['panier'] as $resa ) 
 {
  	$licencier = LicencieDAO::getLicenciePanier( $resa );
  	

  	
  	echo '<li class="ListFilms">', $licencier->getNUMLIC();
 }
 
 
 
 echo count($_SESSION ['panier']);
 ?>
 
