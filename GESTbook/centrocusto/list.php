<?

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');
	
//$news = News::getAll();
$centrocustos = Centrocustos::getAll();

$smarty->assign("centrocustos", $centrocustos);

$smarty->display('centrocusto/list.tpl');

?>
