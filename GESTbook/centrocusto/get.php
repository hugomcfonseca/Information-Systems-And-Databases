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

// check privileges
if $s_type != "admin" && $s_type != "staff") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$centrocustos1 = Centrocustos::getById((int) $_GET['id']);
$funcionario1 = Funcionarios::getEmployeesData((int) $centrocustos1["responsavel"]);

if ($centrocustos1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'O centro de custos '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("centrocustos1", $centrocustos1);

$smarty->assign("responsavel_nome", $funcionario1["nome"]);

$smarty->display('centrocusto/get.tpl');

?>
