<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');

// check parameters
// if ($_POST["aname"] == "") 
//   $_SESSION["s_errors"]["aname"] = 'O nome não pode ser vazio';

// if ($_POST["aemail"] == "") 
//   $_SESSION["s_errors"]["aemail"] = 'O email não pode ser vazio';

// if ($_POST["aphone"] == "") 
//   $_SESSION["s_errors"]["aphone"] = 'O telefone não pode ser vazio';

// // store user input values
// $_SESSION["s_values"] = $_POST;

// if ($_SESSION["s_errors"]) {
//   header("Location: " . $_SERVER["HTTP_REFERER"]);
//   die;
// }

// check privileges
if ($s_user == NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$descritive =  $_POST["descritivo"];
$move_type =  $_POST["tipo_movimento"];
$sup_type = $_POST["tipo_suporte"];
$benef_func = $_POST["beneficiante"];
$suport_func = $_POST["suporta"];
$value = $_POST["montante"];

$errors = Operacoes::insertOperations ($descritive, $move_type, $sup_type, $value, $benef_func, NULL, $suport_func); 

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = "Operação criada com sucesso";
  header("Location: get.php?id=" . Operacoes::getLastInsertedId());
}

?>
