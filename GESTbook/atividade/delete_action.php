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

$atividade = (int) $_GET["id"];

$errors = Atividades::delete($atividade);	

if ($errors) {
  $_SESSION["s_errors"]["generic"][] = $errors;
  header("Location: get.php?id=".$atividade);
}
else {
  $_SESSION["s_messages"][] = 'Atividade removida com sucesso';
  header("Location: list.php");
}
