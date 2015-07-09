<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
</head>

<body>

<?php
include ('View_Header.php');
?>

<?php
include ('View_Aside.php');
?>

<div class ="article">

	<?php
		foreach ( $tvoiliers as $tv ) {
	
			echo "<p><span>Nom de la Voile : </span>" . $tv->getNOMVOIL () . '</p>';
			
			echo "<p><span>Numero de la Voile : </span>" . $tv->getNUMVOIL () . '</p><br>';
			
		
		}
	?>

</div>

<?php
include ('View_Footer.php');
?>

</body>

</html>