<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O login é obrigatório!'; 
  header("Location: list.php");
  die;
}

$userId = $_GET["id"];

$errors = Funcionarios::deleteEmployee($userId);	

if ($errors) {
  $_SESSION["s_errors"]["generic"][] = $errors;
  header("Location: get.php?id=".$userId);
}
else {
  $_SESSION["s_messages"][] = 'Funcionário '.$userId.' removido com sucesso';
  header("Location: list.php");
}
?>