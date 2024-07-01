<?php

require_once('bo/ObjetoBO.php');
require_once('dao/ObjetoDAO.php');
require_once('util/ObjetoUtil.php');


$bo = new ObjetoBO();
$dao = new ObjetoDAO();
$util = new ObjetoUtil();


$resBO = $bo->metodoDentroBO2("Teste");
$resDAO = $dao->metodoDentroDAO("Teste");
$resUtil = $util->metodoDentroUtil("Teste");



echo $resBO . "\n";
echo $resDAO . "\n";
echo $resUtil . "\n";



?>
