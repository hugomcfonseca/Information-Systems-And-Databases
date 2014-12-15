<?php

//database constants
$user = 'sibd1410';	 //CHANGE ME
$pass = 'acaphf1993';	 //CHANGE ME
$dbname = 'sibd1410';	 //CHANGE ME

$host = 'db.fe.up.pt';
$dsn = 'pgsql:host='.$host.';dbname='.$dbname;

$schema = "gestbook";

// get a database connection (not persistent)
try {
  $dbh = new PDO($dsn, $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $_SESSION["s_errors"]["generic"][] = "ERRO[00]: ".$e->getMessage();
  header("Location: ../principal/index.php");
  die;
}

?>
