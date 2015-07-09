<?php 
include_once ('../config.inc.php');
include ("../view/View_Header.php");
include ("../view/View_Aside.php");
include ("../view/View_footer.php");

include_once ('../model/dao/Log_In_DAO.php');
Log_In_DAO::Login();

?>

