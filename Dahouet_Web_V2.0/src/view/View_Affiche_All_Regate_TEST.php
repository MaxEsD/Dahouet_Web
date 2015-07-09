<?php
include ('View_Header.php');
include('View_Aside.php');
?>

<div class = "News">

<?php
foreach ($tregates as $tr){

echo "<p> Nom de la Régate : ".$tr->getLIBREG().'</p>';
echo "<p> Numero de la Régate : ".$tr->getNUMREG().'</p>';
echo "<p> Date de depart de la Régate : ".$tr->getDATREG().'</p>';
echo "<p> Heure de depart de la Régate : ".$tr->getHEURDEP().'</p><br></br>';

}
?>

</div>

<?php
include ('View_Footer.php');
?>