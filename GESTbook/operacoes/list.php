<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');


if (!isset($_GET['id'])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: ../cabimentacoes/list.php");
  die;
}

$operacao1 = Operacoes::getAllMovesBudget((int) $_GET['id']);

if ($operacao1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'Operações da cabimentação '.$_GET['id'].' não existem!';
  header("Location: ../atividade/list.php");
}

$smarty->assign("operacao1", $operacao1);

$smarty->display('operacoes/list.tpl');

?>
