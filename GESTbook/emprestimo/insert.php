<?php

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');
//require_once('../database/Authors.php');

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $smarty->assign("centrocustos1", $s_values);

$cost_type = array('Projetos', 'Eventos', 'Estudantes', 'Pessoal');
$smarty->assign("cost_type", $cost_type);
$time_type = array('Dias', 'Meses', 'Anos');
$smarty->assign("time_type", $time_type);

$smarty->display('centrocusto/insert.tpl');

?>
