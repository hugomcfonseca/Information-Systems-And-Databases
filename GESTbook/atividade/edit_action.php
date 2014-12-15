<?php

require_once('../includes/base.php');
require_once('../database/Atividades.php');
	
//if ($_POST["descritivo"] == "") 
 // $_SESSION["s_errors"]["descritivo"][] = 'O descritivo não pode ser vazio';

//if ($_POST["nbody"] == "") 
//  $_SESSION["s_errors"]["nbody"][] = 'O corpo não pode ser vazio';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  //header("Location: " . $_SERVER["HTTP_REFERER"]);
   header("Location: list.php");
  die;
}

// check privileges
if ($s_type != "admin" && $s_type != "staff") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$atividade_i = (int) $_POST["atividade_id"];
$descritiv =  $_POST["descritivo"];
$tip =  $_POST["tipo"];
$data_inici = $_POST["data_inicio"];
$data_fi = $_POST["data_fim"];

$errors = Atividades::update($atividade_i, $descritiv, $tip, $data_inici, $data_fi);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = 'Atividade alterada com sucesso';
  header("Location: get.php?id=" . $atividade_i);
}

?>