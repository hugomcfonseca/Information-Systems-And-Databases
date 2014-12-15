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
if (!isset($_SESSION["s_user_id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O login é obrigatório!'; 
  header("Location: list.php");
  die;
}

if ($s_values)
  $funcionario = $s_values;
else
  $funcionario = Funcionarios::getEmployeesData($_SESSION["s_user_id"]);

if ($funcionario == null) {
  $_SESSION["s_errors"]["generic"][] = 'O funcionário '.$_SESSION["s_user_id"].' não existe!';
  header("Location: list.php");
}

// celar the password
$funcionario["pass"] = "";

$smarty->assign("funcionario1", $funcionario);

$smarty->display('definicoes_conta/edit.tpl');

?>
