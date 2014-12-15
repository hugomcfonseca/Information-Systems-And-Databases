<?

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

// check privileges
if ($s_type != "admin" && ($s_type != "staff")) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

$funcionarios1 = Funcionarios::listEmployees();

$smarty->assign("funcionarios1", $funcionarios1);

$smarty->display('funcionarios/list.tpl');

?>
