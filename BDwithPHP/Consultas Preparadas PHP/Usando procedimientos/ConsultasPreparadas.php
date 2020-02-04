<!DOCTYPE html>
<html>
<head>
	<title>Consultas preparadas SQL</title>
</head>
<body>

<?php  
	/* Permiten evitar inyeccion SQL y son más rapidas/eficientes.
	   Se hace uso de "?" y mysqli_prepare(). Esta nos devuelve un objeto mysqli_stmt. Seguidamente unir parámetros con mysqli_smt_bind_param() y ejecutar el sql con mysqli_smt_execute(). Finalmente asociar variables con mysql_stmt_bind_result() y leer con mysqli_smt_fetch().
	*/

	require("../datos_conexion.php");
	$pais = $_GET["buscar"]; //obtenemos el valor del pais introducido

	if (!($link = mysqli_connect($db_address, $db_user, $db_password))) { 
		echo "Error conectando a la base de datos.<br>"; 
		exit();
		//tambien se puede hacer con mysqli_connect_errno()
	}
	
	mysqli_select_db($link, $db_name) or die ("Error seleccionando la base de datos.<br>"); //nos ahorramos un if

	$sql = "SELECT * FROM `artículos` WHERE `PAÍS DE ORIGEN` = ?";

	$result = mysqli_prepare($link,$sql); //almacenamos el objeto stmt

	$ok = mysqli_stmt_bind_param($result,"s",$pais); //s indica que es string

	$ok = mysqli_stmt_execute($result);	

	if ($ok) {
		//necesitamos tantas variables como columnas que va a devolver.
		$ok = mysqli_stmt_bind_result($result,$seccion,$narticulo,$fecha,$paiso,$precio);

		echo "Articulos encontrados: <br><br>";

		while (mysqli_stmt_fetch($result)) {
			echo $seccion . " " . $narticulo . " " . $precio . " " . $fecha . " " . $precio . "<br>";
		}
		mysqli_stmt_close($result);
	}
	else echo "Algo va mal";
?>

</body>
</html>