<?php

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');
require_once('../database/Centrocustos.php');

// check parameters
if ($_POST["descritivo"] == "") 
  $_SESSION["s_errors"]["descritivo"] = 'O descritivo não pode ser vazio';

if ($_POST["valor_estimado"] == "") 
  $_SESSION["s_errors"]["valor_estimado"] = 'O valor estimado não pode ser vazio';

if ($_POST["centro_custos"] == "") 
  $_SESSION["s_errors"]["centro_custos"] = 'O centro de custos não pode ser vazio';

if ($_POST["funcionario"] == "") 
  $_SESSION["s_errors"]["funcionario"] = 'O funcionario não pode ser vazio';

if ($_POST["atividade"] == "") 
  $_SESSION["s_errors"]["atividade"] = 'A atividade não pode ser vazia';


// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

// check privileges
if ($s_user == NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$descritive = $_POST["descritivo"];
$estimatedVal = $_POST["valor_estimado"];
$centrocustos = $_POST["centro_custos"];
$funcionario = $_POST["funcionario"];
$ativity = $_POST["atividade"];

$cc = Centrocustos::getById((int) $centrocustos);

if ($cc["valor_orcamentado"] < $estimatedVal){
    $_SESSION["s_errors"]["generic"][]= "A cabimentação não é possível devido à falta de verbos no centro de custos selecionado!"; 
    header("Location: insert.php");
    die; 
}

$errors = Cabimentacoes::insert($descritive, $estimatedVal, $centrocustos, $funcionario, $ativity) ;	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = "Cabimentação pedida com sucesso";
  header("Location: get.php?id=" . Cabimentacoes::getLastInsertedId()); 
}

?>
