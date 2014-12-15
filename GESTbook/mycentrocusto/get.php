<?

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');
require_once('../database/Funcionarios.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

$centrocustos1 = Centrocustos::getById((int) $_GET['id']);
$responsavel = (int)$_SESSION["s_user_id"]; 

if ($centrocustos1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'O centro de custos '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("centrocustos1", $centrocustos1);

$smarty->assign("responsavel", $responsavel);

$smarty->display('mycentrocusto/get.tpl');

?>
