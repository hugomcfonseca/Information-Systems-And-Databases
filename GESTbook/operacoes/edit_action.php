<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');
	
//if ($_POST["descritivo"] == "") 
 // $_SESSION["s_errors"]["descritivo"][] = 'O descritivo não pode ser vazio';

//if ($_POST["nbody"] == "") 
//  $_SESSION["s_errors"]["nbody"][] = 'O corpo não pode ser vazio';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  //header("Location: " . $_SERVER["HTTP_REFERER"]);
   $_SESSION["s_errors"]["generic"][] = 'Aqui parei';
   header("Location: list.php");
  die;
}

// check privileges
if ($s_type != "admin" && $s_user==NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$id = (int) $_POST["operacao_id"];
$descritive =  $_POST["descritivo"];
$move_type =  $_POST["tipo_movimento"];
$support_type = $_POST["tipo_suporte"];
$date = $_POST["data"];
$benef = $_POST["beneficiante"];
$support = $_POST["suporta"];
$value = $_POST["montante"];

$errors = Operacoes::update ($id, $support_type, $move_type, $descritive, $value, $date, $benef, $support);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = 'Operacao alterada com sucesso';
  header("Location: get.php?id=" . $id);
}

?>