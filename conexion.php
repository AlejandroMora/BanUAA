<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	$db_host = "us-cdbr-azure-southcentral-e.cloudapp.net";
	$db_user = "b36e832f60740a";
	$db_pass = "cb41efd9";
	$db_name = "acsm_53f52d43e2e024d";
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	mysqli_close($link);
?>
<meta charset="UTF-8">
