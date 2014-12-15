<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

// check privileges
if ($s_type != "admin" && $s_user==NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $operacao1 = $s_values;
else
  $operacao1 = Operacoes::getById((int) $_GET["id"]);

if ($operacao1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'A operacao '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("operacao1", $operacao1);

//$funcionarios = Funcionarios::getAll();
//$smarty->assign("authors", $authors);

//$status = array('Editada', 'Publicada', 'Arquivada');
//$smarty->assign("status", $status);

$smarty->display('operacoes/edit.tpl');

?>

