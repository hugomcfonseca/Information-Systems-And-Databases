<?

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');
require_once('../database/Atividades.php');

if (!isset($_GET['id'])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: ../atividade/list.php");
  die;
}

$cabimentacao1 = Cabimentacoes::getAllBudgetsActivity((int) $_GET['id']);

if ($cabimentacao1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'Cabimentações da atividade '.$_GET['id'].' não existem!';
  if ($s_type == "user")
  	header("Location: ../atividade/listByMyCC.php");
  else 
  	header("Location: ../atividade/list.php");
}

$smarty->assign("cabimentacao1", $cabimentacao1);

$smarty->display('cabimentacoes/list.tpl');

?>
