<!DOCTYPE html>
<html>
<head>
	<title>Comunicacion con la DB en PHP con PDO</title>
</head>
<body>

<?php
	/* Se le llama capa de Abstracción. Se usa POO. 
	   Permite conectar con diferentes bases de datos, no solo mySQL como hemos visto con Mysqli. Aqui se ve cuales son: https://www.php.net/manual/en/pdo.drivers.php (entre ellas, no esta MongoDB)
	*/
	
	require("datos_conexion.php");

	try {
		$link = new PDO("mysql:host=$db_address",$db_user,$db_password);

		/* Esto seria mas correcto usar una clase conexion, pero de esta manera funciona igual y tampoco hay una diferencia muy grande. Mirar carpeta consultas preparadas.*/
	
	} catch (Exception $e) {
		die('Error: ' . $e->GetMessage());
	} finally{
		$link = null;
	}
?>

</body>
</html>