<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

// check privileges
// if ($s_type != "admin") {
//   $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
//   header("Location: ../index.php");
//   die;
// }

// check parameters
if (!isset($_GET["uid"])) {
  $_SESSION["s_errors"]["generic"][] = 'O login é obrigatório!'; 
  header("Location: list.php");
  die;
}

if ($s_values)
  $employee = $s_values;
else
  $employee = Funcionarios::getEmployeesData($_GET["uid"]);

if ($employee == null) {
  $_SESSION["s_errors"]["generic"][] = 'O funcionário '.$_GET["uid"].' não existe!';
  header("Location: list.php");
}

// celar the password
$employee["pass"] = "";

$smarty->assign("employee", $employee);

$smarty->display('definicoes_conta/edit.tpl');

?>
