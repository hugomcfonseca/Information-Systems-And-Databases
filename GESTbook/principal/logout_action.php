<?php

require_once('../includes/base.php');

session_destroy();
	
header("Location: " . $_SERVER['HTTP_REFERER']);
header("Location: ../principal/index.php");

?>
