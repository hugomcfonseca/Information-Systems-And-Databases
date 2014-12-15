<?php

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

// check privileges
if ($s_type != "admin" && $s_type != "staff") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $cabimentacao1 = $s_values;
else
  $cabimentacao1 = Cabimentacoes::getById((int) $_GET["id"]);

if ($cabimentacao1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'A cabimentação '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("cabimentacao1", $cabimentacao1);

$status = array('Aberta', 'Em Análise', 'Encerrada', 'Rejeitada');
$smarty->assign("status", $status);

$smarty->display('cabimentacoes/edit.tpl');

?>
