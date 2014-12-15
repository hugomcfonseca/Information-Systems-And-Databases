<?

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');
	
// check privileges
if ($s_type != "admin" && $s_type != "user" && $s_type != "staff" ) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

$employee = Funcionarios::getEmployeesData($_GET["user_id"]);

$smarty->assign("employee", $employee);

$smarty->display('definicoes_conta/list_user.tpl');

?>
