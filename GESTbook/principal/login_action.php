<?php

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

$mail = $_POST["email"];
$password = $_POST["pass"];

if (Funcionarios::existsUsernamePassword($mail, $password)) {
  $_SESSION["s_messages"][] = 'Autenticação com sucesso';
  $_SESSION["s_user_id"] =Funcionarios::getUserID($mail);
  $_SESSION["s_user"] =Funcionarios::getUsername($mail);
  $_SESSION["s_tipo"] =Funcionarios::getLoginTipo($mail);

  if (Funcionarios::isAdmin($mail) && !(Funcionarios::getLoginType($mail)))
    $_SESSION["s_type"] = 'admin';
  else if (!(Funcionarios::isAdmin($mail)) && Funcionarios::getLoginType($mail))
    $_SESSION["s_type"] = 'staff';
  else 
    $_SESSION["s_type"] = 'user';
}
else {
  // store user input values
  $_SESSION["s_values"] = $_POST;
  $_SESSION["s_errors"]["generic"][] = 'Username ou password errados!';
}

header("Location: ../index.php");

?>