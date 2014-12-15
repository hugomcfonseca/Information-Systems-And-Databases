<?php

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');

// check parameters
if ($_POST["nome"] == "") 
  $_SESSION["s_errors"]["nome"] = 'O nome não pode ser vazio!';

if ($_POST["nome_curto"] == "") 
  $_SESSION["s_errors"]["nome_curto"] = 'O nome curto não pode ser vazio!';

if ($_POST["periodo"] == "") 
  $_SESSION["s_errors"]["periodo"] = 'O período não pode ser vazio!';

if ($_POST["valor_orcamentado"] == "") 
  $_SESSION["s_errors"]["valor_orcamentado"] = 'O valor orçamentado não pode ser vazio!';

if ($_POST["descricao"] == "") 
  $_SESSION["s_errors"]["descricao"] = 'A descrição não pode ser vazia!';

if ($_POST["responsavel"] == "") 
  $_SESSION["s_errors"]["responsavel"] = 'O responsável não pode ser vazio!';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$x = intval($_POST["periodo"]);

$name = $_POST["nome"];
$acronym = $_POST["nome_curto"];
$descritive = $_POST["descricao"];
$value_orcament = $_POST["valor_orcamentado"];
$cost_type = $_POST["tipo_custo"];
$cycle = $x . " " . ($_POST["time_type"]);
$responsible = $_POST["responsavel"];

$errors = Centrocustos::insert($name, $acronym, $descritive, $value_orcament, $cost_type, $cycle, $responsible);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  $_SESSION["s_values"] = $_POST;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = 'Centro de Custos criado com sucesso';
  header("Location: get.php?id=" . Centrocustos::getLastInsertedId());
}

?>