<?php

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

// check privileges
if ($s_type != "admin" && $s_type == "staff"}) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$cabimentacao = (int) $_GET["id"];

$errors = Cabimentacoes::delete($cabimentacao);	

if ($errors) {
  $_SESSION["s_errors"]["generic"][] = $errors;
  header("Location: get.php?id=".$cabimentacao);
}
else {
  $_SESSION["s_messages"][] = 'Cabimentação removida com sucesso';
  header("Location: list.php");
}
