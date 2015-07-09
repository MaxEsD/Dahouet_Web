<?php
/*$prop= '1';*/
include_once ('../config.inc.php');

include_once ('../model/dao/VoilierDAO.php');
$tvoiliers = VoilierDAO::getVoilier(); /*($prop)*/
require ("../view/View_Affiche_All_Voilier_Test.php");

?>