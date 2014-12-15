<?

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');
require_once('../database/Financia.php');
require_once('../database/Funcionarios.php');


//$funcionario1 = Funcionarios::getById($_SESSION["s_user_id"]);

$mycentrocustos_emprestimos = Financia::getAllAskedEmprestimos($_SESSION["s_user_id"]);


$smarty->assign("my_emprestimos", $mycentrocustos_emprestimos);
//$smarty->assign("funcionario", $funcionario1);
$smarty->display('mycentrocusto/list_emprestimos_pendentes.tpl');

?>
