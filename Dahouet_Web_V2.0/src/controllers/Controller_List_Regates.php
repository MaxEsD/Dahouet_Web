<?php 
include_once ('../config.inc.php');

include_once('../model/dao/RegateDAO.php');
$tregates = RegateDAO::getListRegate();
require ("../view/View_List_Regates.php");

?>


