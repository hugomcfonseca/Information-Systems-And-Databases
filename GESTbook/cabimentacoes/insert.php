<?php

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');
require_once('../database/Centrocustos.php');
require_once('../database/Atividades.php');
require_once('../database/Funcionarios.php');


// check privileges
if ($s_user == NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $smarty->assign("cabimentacao1", $s_values);

if ($s_type != "user") {
	$centrocustos = Centrocustos::getAll();
	$atividades = Atividades::getAll();
	$funcionarios = Funcionarios::listEmployees();
}
else {
	$centrocustos = Centrocustos::getAllCCFuncionario((int) $_SESSION["s_user_id"]);
	$atividades = Atividades::getAllActivityFuncionario((int) $_SESSION["s_user_id"]);
	$funcionarios = (int) $_SESSION["s_user_id"];
}

$smarty->assign("centrocustos", $centrocustos);
$smarty->assign("atividades", $atividades);
$smarty->assign("funcionarios", $funcionarios);

$smarty->display('cabimentacoes/insert.tpl');

?>


