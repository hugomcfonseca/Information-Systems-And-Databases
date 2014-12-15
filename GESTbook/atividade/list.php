<?

require_once('../includes/base.php');
require_once('../database/Atividades.php');
	
$atividades = Atividades::getAll();

$smarty->assign("atividades", $atividades);

$smarty->display('atividade/list.tpl');

?>
