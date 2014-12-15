<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');

if (!isset($_GET['id'])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: ../atividade/listByMyCC.php");
  die;
}

$operacao1 = Operacoes::getAllMovesFuncionario((int) $_GET['id']);
$funcionario = (int) $_SESSION["s_user_id"];

if ($operacao1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'Operações do funcionário'.$funcionario.' não existem!';
  header("Location: ../atividade/listByMyCC.php");
  die;
}

$smarty->assign("operacao1", $operacao1);

$smarty->display('operacoes/listMovesByFunc.tpl');

?>
