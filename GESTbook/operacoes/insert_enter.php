<?php

require_once('../includes/base.php');
require_once('../database/Operacoes.php');


// check privileges
if ($s_user==NULL) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $smarty->assign("operacao1", $s_values);


$smarty->display('operacoes/insert_enter.tpl');

?>
