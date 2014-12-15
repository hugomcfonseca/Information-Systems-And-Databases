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
if (!isset($_SESSION["s_user_id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O login é obrigatório!'; 
  header("Location: ../index.php");
  die;
}

$funcionario1 = Funcionarios::getEmployeesData( $_SESSION["s_user_id"]);


if ($funcionario1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'O funcionario '.$_SESSION["s_user_id"].' não existe!';
  header("Location: ../index.php");
  die;
}

$smarty->assign("funcionario", $funcionario1);

$smarty->display('definicoes_conta/get.tpl');

?>
