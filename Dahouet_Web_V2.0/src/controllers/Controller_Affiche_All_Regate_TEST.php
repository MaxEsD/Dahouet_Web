<?php

include_once ('../config.inc.php');

include_once('../model/dao/RegateDAO.php');
$tregates = RegateDAO::getListRegate();
require ("../view/View_Affiche_All_Regate_TEST.php");

?>