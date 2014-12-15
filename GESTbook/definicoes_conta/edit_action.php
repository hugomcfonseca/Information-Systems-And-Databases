<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

// check privileges
if ($s_type != "admin" && $s_type != "staff") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

// check parameters
if ($_POST["pass"] == "") 
  $_SESSION["s_errors"]["pass"] = 'A password não pode ser nula';

if ($_POST["nome"] == "") 
  $_SESSION["s_errors"]["nome"] = 'O nome não pode ser vazio';

if ($_POST["tipo"] == "") 
  $_SESSION["s_errors"]["tipo"] = 'O tipo não pode ser vazio';

if ($_POST["categoria"] == "") 
  $_SESSION["s_errors"]["categoria"] = 'A categoria não pode ser vazia';

if ($_POST["telefone"] == "") 
  $_SESSION["s_errors"]["telefone"] = 'O telefone não pode ser vazio';

if ($_POST["morada"] == "") 
  $_SESSION["s_errors"]["morada"] = 'A morada não pode ser vazia';

if ($_POST["email"] == "") 
  $_SESSION["s_errors"]["email"] = 'O email não pode ser vazio';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

$uid = $_POST["user_id"];
$name =  $_POST["nome"];
$upass = $_POST["pass"];
$type = $_POST["tipo"];
$class = $_POST["categoria"];
$telephone = $_POST["telefone"];
$address = $_POST["morada"];
$email1 = $_POST["email"];

$errors = Funcionarios::editEmployee($uid, $upass, $uname, $type, $class, $telephone, $address, $email1) ;	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = 'Funcionário alterado com sucesso';
  header("Location: get.php?id=" . $uid);
}

?>