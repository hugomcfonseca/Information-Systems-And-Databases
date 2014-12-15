<?php

require_once('../includes/base.php');
require_once('../database/Atividades.php');

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

$atividade = Atividades::getById((int) $_GET["id"]);

if ($atividade == null) {
  $_SESSION["s_errors"]["generic"][] = 'A atividade '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("atividade", $atividade);

$smarty->display('atividade/delete.tpl');

?>
