<?php

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');
require_once('../database/Funcionarios.php');

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
  $centrocustos1 = $s_values;
else
  $centrocustos1 = Centrocustos::getById((int) $_GET["id"]);

$funcionarios = Funcionarios::listEmployees();

if ($centrocustos1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'O centro de custos '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

if ($funcionarios == null) {
  $_SESSION["s_errors"]["generic"][] = 'Não existem funcionários registados!';
  header("Location: list.php");
}

$smarty->assign("funcionarios", $funcionarios);
$smarty->assign("centrocustos1", $centrocustos1);
$periodo = intval($centrocustos1["periodo"]); 
$smarty->assign("periodo", $periodo);
$cost_type = array('Projetos', 'Eventos', 'Estudantes', 'Pessoal');
$smarty->assign("cost_type", $cost_type);
$time_type = array('Dias', 'Meses', 'Anos');
$smarty->assign("time_type", $time_type);

$smarty->display('centrocusto/edit.tpl');

?>
