<h1>Selectionner votre Voilier </h1>

	<form id="rega" method="POST" action="../controllers/Controller_Info_Voilier_Proprio.php">

		<select name="SelecNomVoilier" id="SelecNomVoilier">
		
			<?php
				foreach ($tVoiliers as $Voil)
					{
						echo '<option value="'.$Voil->getNUMVOIL().'">'.$Voil->getNOMVOIL().'</option>';
					}
			?>
		</select>

		
		<input id="OK" type="submit" value="OK">
	
	</form>










