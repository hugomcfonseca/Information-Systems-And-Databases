<?

require_once('../includes/base.php');
require_once('../database/Cabimentacoes.php');
require_once('../database/Centrocustos.php');
require_once('../database/Funcionarios.php');

// check parameters
if (!isset($_GET['id'])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

$cabimentacao = Cabimentacoes::getById((int) $_GET['id']);
$centrocusto = Centrocustos::getById((int) $cabimentacao["cativa"]);
$funcionario = Funcionarios::getEmployeesData((int) $cabimentacao["pede"]);
$login = (int) $_SESSION["s_user_id"];
$atividade = (int) $_GET['id'];

if ($cabimentacao == null) {
  $_SESSION["s_errors"]["generic"][] = 'Cabimentação '.$_GET['id'].' não existe!';
  header("Location: list.php");
}

if ($centrocusto == null) {
  $_SESSION["s_errors"]["generic"][] = 'Cabimentação '.$_GET['id'].' não cativa nenhum centro de custos!';
  header("Location: list.php");
}

if ($funcionario == null) {
  $_SESSION["s_errors"]["generic"][] = 'Cabimentação '.$_GET['id'].' não é pedida por nenhum funcionário!';
  header("Location: list.php");
}

$smarty->assign("cabimentacao", $cabimentacao);
$smarty->assign("centrocusto", $centrocusto);
$smarty->assign("funcionario", $funcionario);
$smarty->assign("login", $login);
$smarty->assign("atividade", $atividade);


$smarty->display('cabimentacoes/get.tpl');

?>
