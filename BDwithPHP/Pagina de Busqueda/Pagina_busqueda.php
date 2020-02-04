<!DOCTYPE html>
<html>
<head>
	<title>Página de busqueda</title>
</head>
<body>
	
<?php
	require("datos_conexion.php");
	
	/* Caracteres comodín para usar en SQL para pagina de busqueda: 
		% -> Sustituye a una cadena de caracteres
		_ -> sustituye un unico caracter 
		Se usa con LIKE y no con =
	*/

	$busqueda = $_GET["buscar"]; //obtengo lo que ha escrito el usuario
	
	if (!($link = mysqli_connect($db_address, $db_user, $db_password))) { 
		echo "Error conectando a la base de datos.<br>"; 
		exit();
	}

	mysqli_select_db($link, $db_name) or die ("Error seleccionando la base de datos.<br>"); //nos ahorramos un if

	$result = mysqli_query($link,"SELECT * FROM ARTÍCULOS WHERE `NOMBRE ARTÍCULO` LIKE '%$busqueda%'"); //ver como se usa el comodin % en caso de que lo que busque sea mas de una palabra

	do {
		$fila = mysqli_fetch_array($result, MYSQLI_ASSOC); 
		//Este parámetro opcional es una constante que indica qué tipo de array debiera generarse con la información de la fila actual. Con MYSQLI_BOTH podria hacerse con indices o asociativo
		echo $fila['SECCIÓN'] . " " .  $fila['NOMBRE ARTÍCULO'];
		echo "<br>";
		echo "<br>";
	} while ($fila != null); 

	

?>

</body>
</html>