<?

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');
	
$employee = Funcionarios::getEmployeesData($uid);

$smarty->assign("employee", $employee);

$smarty->display('definicoes_conta/list.tpl');

?>
