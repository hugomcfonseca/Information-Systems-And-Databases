<?

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');

$mycentrocustos = Centrocustos::getAllCCFuncionario((int)$_SESSION["s_user_id"]);

$smarty->assign("mycentrocustos", $mycentrocustos);

$smarty->display('mycentrocusto/list.tpl');

?>
