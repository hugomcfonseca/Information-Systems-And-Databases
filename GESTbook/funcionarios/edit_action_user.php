<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

// check privileges
/*
if (!($s_type != "user")) {
  $_SESSION["s_errors"]["generic"][] ='Não tem permissões';
  header("Location: ../index.php");
  die;
}
*/
// check parameters

if ($_POST["pass1"] == "") 
  $_SESSION["s_errors"]["pass"] = 'A password não pode ser vazia';

if ($_POST["nif"] == "") 
  $_SESSION["s_errors"]["nif"] = 'O nif não pode ser vazio';

if ($_POST["nome1"] == "") 
  $_SESSION["s_errors"]["nome"] = 'O nome não pode ser vazio';

if ($_POST["tipo"] == "") 
  $_SESSION["s_errors"]["tipo"] = 'O tipo não pode ser vazio';

if ($_POST["categoria"] == "") 
  $_SESSION["s_errors"]["categoria"] = 'A categoria não pode ser vazia';

if ($_POST["telefone"] == "") 
  $_SESSION["s_errors"]["telefone"] = 'O telefone não pode ser vazio';


if ($_POST["morada"] == "") 
  $_SESSION["s_errors"]["morada"] = 'A morada não pode ser vazia';


// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

$name =  $_POST["nome1"];
$nif=  $_POST["nif"];
$upass = $_POST["pass1"];
$type = $_POST["tipo"];
$class = $_POST["categoria"];
$telephone = $_POST["telefone"];
$address = $_POST["morada"];

$errors = Funcionarios::editEmployee($_SESSION["s_user_id"],$upass,$name,$type,$class,$telephone,$nif,$address);

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = 'Funcionário alterado com sucesso';
  header("Location: ../funcionarios/get_user.php");
}

?>
