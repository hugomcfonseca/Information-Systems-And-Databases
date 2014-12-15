<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

// check privileges

if ($s_user != NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

$_SESSION["s_values"] = $_POST;
if ($s_values)
$smarty->assign("funcionario", $s_values);

$smarty->display('funcionarios/insertnew.tpl');

?>
