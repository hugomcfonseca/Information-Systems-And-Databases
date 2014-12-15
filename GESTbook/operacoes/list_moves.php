<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');

$operacao1 = Operacoes::getAllMoves();

if ($operacao1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'Não existem operações registadas!';
  header("Location: ../atividade/list.php");
  die;
}

$smarty->assign("operacao1", $operacao1);

$smarty->display('operacoes/listMoves.tpl');

?>
