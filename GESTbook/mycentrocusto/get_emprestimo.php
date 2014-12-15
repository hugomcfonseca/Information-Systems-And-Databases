<?

require_once('../includes/base.php');
require_once('../database/Centrocustos.php');
require_once('../database/Funcionarios.php');
require_once('../database/Financia.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

$my_emprestimos = Financia::getById($_GET['id']);
$centrocustos1 = Centrocustos::getById((int) $my_emprestimos["financiador"]); //financiador
$centrocustos2 = Centrocustos::getById((int) $my_emprestimos["financiado"]); //financiado

if ($my_emprestimos == null) {
  $_SESSION["s_errors"]["generic"][] = 'O emprestimo '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("my_emprestimos1", $my_emprestimos);
$smarty->assign("centrocustos1", $centrocustos1);
$smarty->assign("centrocustos2", $centrocustos2);

$smarty->display('mycentrocusto/get_emprestimo.tpl');

?>
