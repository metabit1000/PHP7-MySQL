<!DOCTYPE html>
<html>
<head>
	<title>Comunicacion con la DB en PHP con POO</title>
</head>
<body>

<?php
	require("datos_conexion.php");  
	$link = new mysqli($db_address, $db_user, $db_password);

	if ($link->connect_errno) {
		echo "Falló la conexión. Error: " . $link->connect_errno;
	}

	$link->set_charset("utf8");

	$link->select_db($db_name) or die ("Error seleccionando la base de datos.<br>");

	$sql = "SELECT * FROM ARTÍCULOS";

	$result = $link->query($sql);

	do {
		$fila = $result->fetch_assoc(); 
		echo $fila['SECCIÓN'] . " " . $fila['NOMBRE ARTÍCULO'] . " " . $fila['FECHA'] . " " . $fila['PAÍS DE ORIGEN'] . " " . $fila['PRECIO'];
		echo "<br>";
		echo "<br>";
	} while ($fila != null); //tambien se puede hacer con un booleano

	$link->close();
?>

</body>
</html>