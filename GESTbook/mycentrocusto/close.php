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

echo $_GET['resp'];
echo $_GET['id'];

$result= Financia::close($_GET['id'],$_GET['resp']);

if ($result == 0) {echo "ola";

	header("Location: list_emprestimos.php");
	die;
}
echo "ola";

$_SESSION["s_errors"]["generic"][] = 'O centro de custos '.$_GET["id"].' não existe!';
header("Location: list.php");

?>
