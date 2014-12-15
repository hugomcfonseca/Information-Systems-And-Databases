<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');
require_once('../database/Funcionarios.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

$operacao = Operacoes::getById((int) $_GET['id']);
$login = (int) $_SESSION["s_user_id"];

if ($operacao == null) {
  $_SESSION["s_errors"]["generic"][] = 'A operação '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("operacao", $operacao);

$benef = Funcionarios::getEmployeesData((int) $operacao["beneficiante"]);

$smarty->assign("beneficiante_name", $benef["nome"]);
$smarty->assign("login", $login);

$smarty->display('operacoes/get.tpl');

?>
