<?php

require_once('../includes/base.php');
require_once('../database/Atividades.php');

// check parameters
if ($_POST["descritivo"] == "") 
  $_SESSION["s_errors"]["descritivo"] = 'O descritivo não pode ser vazio!';

if ($_POST["tipo"] == "") 
  $_SESSION["s_errors"]["tipo"] = 'O tipo não pode ser vazio!';

if ($_POST["data_inicio"] == "") 
  $_SESSION["s_errors"]["data_inicio"] = 'A data de inicio não pode ser vazia!';

if ($_POST["data_fim"] == "") 
  $_SESSION["s_errors"]["data_fim"] = 'A data de fim não pode ser vazia!';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

// check privileges
if ($s_user==NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$descritiv = $_POST["descritivo"];
$tip = $_POST["tipo"];
$data_inici = $_POST["data_inicio"];
$data_fi = $_POST["data_fim"];
$criado = $_SESSION["s_user_id"];

$errors = Atividades::insert($descritiv, $tip, $data_inici, $data_fi, $criado);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  $_SESSION["s_values"] = $_POST;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = 'Atividade criada com sucesso. Associe-a a uma nova cabimentação.
                              (Poderá posteriormente adicionar novas cabimentações a esta atividade.)';
  $id = Atividades::getLastInsertedId();
  header("Location: ../cabimentacoes/insert_act.php?id=" . $id);
}
?>