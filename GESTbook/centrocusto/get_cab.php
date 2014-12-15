<?

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');

// check parameters
if (!isset($_GET['id'])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

$cabimentacao = Cabimentacoes::getById((int) $_GET['id']);

if ($cabimentacao == null) {
  $_SESSION["s_errors"]["generic"][] = 'Cabimentação '.$_GET['id'].' não existe!';
  header("Location: list.php");
}

$smarty->assign("cabimentacao", $cabimentacao);

$smarty->display('centrocusto/get_cab.tpl');

?>
