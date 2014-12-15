<?

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');
require_once('../database/Centrocustos.php');

if (!isset($_GET['id'])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!';
  if ($s_type == "user") 
  	header("Location: ../mycentrocusto/list.php");
  else
  	header("Location: list.php");
  die;
}	

$cab_pendente = Cabimentacoes::getPendentBudgetsCC((int) $_GET['id']);

if ($cab_pendente == null) {
  $_SESSION["s_errors"]["generic"][] = 'Cabimentações pendentes do centro de custos '.$_GET['id'].' não existem!';
  if ($s_type == "user")
  	header("Location: ../mycentrocusto/list.php");
  else 
  	header("Location: list.php");
}

$smarty->assign("cab_pendente", $cab_pendente);

$smarty->display('centrocusto/list_cab.tpl');

?>
