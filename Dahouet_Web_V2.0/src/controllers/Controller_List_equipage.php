<?php
include_once ('../config.inc.php');

include_once ('../model/dao/LicencieDAO.php');
$tEquipage = LicencieDAO::getLicencie();
require ("../view/View_List_Equipage.php");

?>
