<?php

require_once('../includes/base.php');
require_once('../database/Atividades.php');

//require_once('../database/Funcionarios.php');

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
  $atividade = $s_values;
else
  $atividade = Atividades::getById((int) $_GET["id"]);

if ($atividade == null) {
  $_SESSION["s_errors"]["generic"][] = 'A atividade '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("atividade", $atividade);

//$funcionarios = Funcionarios::getAll();
//$smarty->assign("authors", $authors);

//$status = array('Editada', 'Publicada', 'Arquivada');
//$smarty->assign("status", $status);

$smarty->display('atividade/edit.tpl');

?>

