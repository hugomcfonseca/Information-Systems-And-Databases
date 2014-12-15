<?

require_once('../includes/base.php');
require_once('../database/Atividades.php');
	
$myatividades = Atividades::getAllActivityFuncionario((int)$_SESSION["s_user_id"]);
$funcionario = (int) $_SESSION["s_user_id"];

$smarty->assign("myatividades", $myatividades);
$smarty->assign("funcionario", $funcionario);

$smarty->display('atividade/listByMyCC.tpl');

?>
