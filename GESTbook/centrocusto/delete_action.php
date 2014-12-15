<?php

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');

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

$centrocustos1 = (int) $_GET["id"];

$errors = Centrocustos::delete($centrocustos1);	

if ($errors) {
  $_SESSION["s_errors"]["generic"][] = $errors;
  header("Location: get.php?id=".$centrocustos1);
}
else {
  $_SESSION["s_messages"][] = 'Centro de Custos removido com sucesso';
  header("Location: list.php");
}
