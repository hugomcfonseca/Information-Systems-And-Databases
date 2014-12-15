<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');
require_once('../database/Financia.php');
require_once('../database/Centrocustos.php');

// check privileges

if ($s_type != "user") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

if ($s_values)
	$smarty->assign("financia", $s_values);

if ($s_type == "user") 
	$centrocustos = Centrocustos::getAll();

$smarty->assign("centrocustos", $centrocustos);

$smarty->display('mycentrocusto/insert_emprestimo.tpl');

?>
