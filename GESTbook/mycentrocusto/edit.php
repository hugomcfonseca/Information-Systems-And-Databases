<?php

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

// check privileges
if ($s_type != "user") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $centrocustos1 = $s_values;
else
  $centrocustos1 = Centrocustos::getById((int) $_GET["id"]);

if ($centrocustos1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'O centro de custos '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$periodo = intval($centrocustos1["periodo"]);
$responsavel = (int)$_SESSION["s_user_id"]; 

$smarty->assign("centrocustos1", $centrocustos1);
$smarty->assign("periodo", $periodo);
$smarty->assign("responsavel", $responsavel);


$cost_type = array('Projetos', 'Eventos', 'Estudantes', 'Pessoal');
$smarty->assign("cost_type", $cost_type);
$time_type = array('Dias', 'Meses', 'Anos');
$smarty->assign("time_type", $time_type);

$smarty->display('mycentrocusto/edit.tpl');

?>
