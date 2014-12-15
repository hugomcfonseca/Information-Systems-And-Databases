<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');
require_once('../database/Financia.php');
require_once('../database/Centrocustos.php');

// check privileges

if ($s_type != "user") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

// check parameters

if ($_POST["financiado"] == "") 
  $_SESSION["s_errors"]["financiado"] = 'O financiado não pode ser vazio';

if ($_POST["financiador"] == "") 
  $_SESSION["s_errors"]["financiador"] = 'O financiador não pode ser vazio';

if ($_POST["descritivo"] == "") 
  $_SESSION["s_errors"]["descritivo"] = 'O descritivo não pode ser vazia';

if ($_POST["montante"] == "") 
  $_SESSION["s_errors"]["montante"] = 'O montante não pode ser vazio';

if ($_POST["data"] == "") 
  $_SESSION["s_errors"]["data"] = 'A data não pode ser vazio';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

$financiado =  $_POST["financiado"];
$financiador=  $_POST["financiador"];
$descritivo = $_POST["descritivo"];
$montante = $_POST["montante"];
$data = $_POST["data"];

$centrocustos = Centrocustos::getById((int) $financiador);

if ($centrocustos["valor_orcamentado"] < $montante){
  $_SESSION["s_errors"]["generic"][]= "O empréstimo não é possível por insuficiência de verbas do financiador!"; 
  header("Location: list_emprestimos.php");
  die;
}

$resultado=Financia::testeEmprestimo($financiador,$_SESSION["s_user_id"]);

if($resultado=="FALSE"){
  $_SESSION["s_errors"]["generic"][]= "O financiador não pode criar empréstimos para os centros de custos de outros responsaveis!"; 
  header("Location: list_emprestimos.php");
  die;
}


$errors = Financia::insertEmprestimo($financiado,$financiador,$descritivo,$montante,$data);



if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = "Empréstimo criado com sucesso";
  header("Location: list_emprestimos.php");
}

?>
