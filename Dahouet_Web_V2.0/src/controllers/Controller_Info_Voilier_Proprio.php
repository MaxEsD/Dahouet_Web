<?php

include_once ('../config.inc.php');
include_once ('../model/dao/VoilierDAO.php');


if(isset($_POST ['SelecNomVoilier'])){
$Voil = VoilierDAO::InfoVoiliersProprio($_POST ['SelecNomVoilier'] );
require ("../view/View_Info_Voilier_Proprio.php");

}
?>