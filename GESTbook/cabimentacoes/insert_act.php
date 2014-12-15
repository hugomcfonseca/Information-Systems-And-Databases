<?php

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');

// check privileges
if ($s_user == NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$atividade_id = $_GET['id'];
$responsavel = $_SESSION["s_user_id"];

if ($s_values)
  $smarty->assign("cabimentacao1", $s_values);

$smarty->assign("atividade_id", $atividade_id);
$smarty->assign("responsavel", $responsavel);

$smarty->display('cabimentacoes/insert_act.tpl');

?>
