<h1>Selectionner vos Equipier </h1>

	<form id="rega" method="POST" action="../controllers/Controller_Recup_Equipier.php?action=resa">

		<select name="SelecEquipier" id="SelecEquipier">
		
			<?php
				foreach ($tEquipage as $Equipier)
					{
						
						echo '<option value="'.$Equipier->getNUMLIC().'">'.$Equipier->getNOMLIC().'</option>';
					
					}
			?>
		</select>
'
		
		<input id="OK" type="submit" value="OK">
	
	</form>
