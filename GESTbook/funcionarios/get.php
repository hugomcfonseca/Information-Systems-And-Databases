<?

require_once('../includes/base.php');
require_once('../database/Funcionarios.php');

// check privileges
/*if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}*/

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O login é obrigatório!'; 
  header("Location: list.php");
  die;
}

$funcionario = Funcionarios::getEmployeesData($_GET["id"]);

if ($funcionario == null) {
  $_SESSION["s_errors"]["generic"][] = 'O funcionario '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("funcionario", $funcionario);

$smarty->display('funcionarios/get.tpl');

?>
