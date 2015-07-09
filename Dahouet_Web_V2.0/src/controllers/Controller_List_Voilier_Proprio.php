<?php

include_once ('../config.inc.php');


include_once ('../model/dao/VoilierDAO.php');
include_once ('../model/dao/ProprioDAO.php');


$IDProp = ProprioDAO::getIDmembre($_SESSION ['pseudo']);
$tVoiliers = VoilierDAO::getVoiliersProprio ($IDProp, $_GET['NUMREG']);

require ("../view/View_List_Voilier_Proprio.php");

?>

