<?php

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');

// check parameters
if ($_POST["data_decisao"] == "") 
  $_SESSION["s_errors"]["data_decisao"] = 'A data de decisão não pode ser vazia';

if ($_POST["justificacao_decisao"] == "") 
  $_SESSION["s_errors"]["justificacao_decisao"] = 'A justificacao não pode ser vazia';

if ($_POST["estado"] == "") 
  $_SESSION["s_errors"]["estado"] = 'O estado não pode ser vazio';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

// check privileges
if ($s_type != "admin" && $s_type != "staff") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$id = (int) $_POST["cabimentacao_id"];
$date_end = $_POST["data_decisao"];
$justification= $_POST["justificacao_decisao"];
$state= $_POST["estado"];

$errors = Cabimentacoes::update($id, $date_end, $justification, $state);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = "Cabimentação alterada com sucesso";
  header("Location: get.php?id=" . $id);
}

?>