<?php
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass']; 

	if($usuario ==''|| $pass=='')
	{
		# json_encode se usa para envia datos al documento app.js
		echo json_encode('Error');
	}
	else
	{
		echo json_encode('Corrupto: <br>Usuario:'.$usuario.'<br>Pass:'.$pass);
	} 
?>