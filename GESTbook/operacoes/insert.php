<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');
require_once('../database/Cabimentacoes.php');

if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

// check privileges
if ($s_type != "admin" && $s_user==NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$cab_id = (int) $_GET["id"];
$cab = Cabimentacoes::getById((int) $cab_id);

if ($cab["estado"] != "Encerrado"){
  $_SESSION["s_errors"]["generic"][] = 'O estado da cabimentação '.$_GET['id'].' não permite adicionar operações!';
  if ($s_type == "user")
  	header("Location: ../atividade/listByMyCC.php");
  else 
  	header("Location: ../atividade/list.php");
}

if ($s_values)
  $smarty->assign("operacao1", $s_values);

$smarty->assign("cab_id", $cab_id);

$smarty->display('operacoes/insert.tpl');

?>
