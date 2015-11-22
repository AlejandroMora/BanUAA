<?php
	$db_host = "us-cdbr-azure-southcentral-e.cloudapp.net";
	$db_user = "b36e832f60740a";
	$db_pass = "cb41efd9";
	$db_name = "acsm_53f52d43e2e024d";
	if($link = mysqli_connect($db_host, $db_user, $db_pass, $db_name)){
		echo "Conexion establecida";
		if(mysqli_close($link)){
			echo "Se cerró la conexión";
		}
	}
?>