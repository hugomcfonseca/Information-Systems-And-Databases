<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

// check privileges

if ($s_type != "admin" && $s_type != "user") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

if ($s_values)
$smarty->assign("funcionario", $s_values);

$smarty->display('funcionarios/insert.tpl');

?>
