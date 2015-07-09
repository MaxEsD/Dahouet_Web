<?php

include_once ('../config.inc.php');

include_once ('../model/dao/RegateDAO.php');
$DetailRe = RegateDAO::detailreg ( $_GET ['NUMREG'] );
require ("../view/View_Info_Regate.php");


?>


