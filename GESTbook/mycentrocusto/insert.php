<?php

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');

// check privileges
if ($s_type != "user") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $smarty->assign("centrocustos1", $s_values);

$responsavel = (int) $_SESSION["s_user_id"];
$smarty->assign("responsavel",$responsavel);
$cost_type = array('Projetos', 'Eventos', 'Estudantes', 'Pessoal');
$smarty->assign("cost_type", $cost_type);
$time_type = array('Dias', 'Meses', 'Anos');
$smarty->assign("time_type", $time_type);

$smarty->display('mycentrocusto/insert.tpl');

?>
