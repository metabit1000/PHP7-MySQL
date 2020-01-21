<!DOCTYPE html>
<html>
<head>
	<title>Insertar datos en una DB</title>
</head>
<body>

<?php
	require("datos_conexion.php");

	$seccion = $_GET["seccion"]; //obtenemos los datos del formulario
	$n_art = $_GET["n_art"];
	$precio = $_GET["precio"];
	$fecha = $_GET["fecha"];
	$p_orig = $_GET["p_orig"];
	$opcion = $_GET["opcion"];

	if (!($link = mysqli_connect($db_address, $db_user, $db_password))) { 
		echo "Error conectando a la base de datos.<br>"; 
		exit();
	}
	
	mysqli_select_db($link, $db_name) or die ("Error seleccionando la base de datos.<br>");

	if ($opcion == "1") { //insertamos datos
		$consulta = "INSERT INTO ARTÍCULOS (SECCIÓN, `NOMBRE ARTÍCULO`,FECHA, `PAÍS DE ORIGEN`, PRECIO) VALUES ('$seccion','$n_art', '$fecha','$p_orig','$precio')";
	}
	else if ($opcion == "0") { //eliminamos datos de la db
		$consulta = "DELETE FROM ARTÍCULOS WHERE `NOMBRE ARTÍCULO`='$n_art'";
	}

	//para UPDATE, aqui iria otro if...

	$result = mysqli_query($link,$consulta);

	if ($result == false) echo "Error al hacer operacion con los datos";
	else {
		if ($opcion == "1") echo "Se han insertado los datos correctamente<br><br>";
		else if ($opcion == "0") {
			if (mysqli_affected_rows($link)==0) echo "No existe ese registro en la base de datos. Vuelva a intentarlo<br><br>";
			else {
				echo "Datos eliminados correctamente <br><br>";
				echo "Se han eliminado " . mysqli_affected_rows($link) . " filas en la bd. <br><br>";
			}
		} 
		
		//Escribimos una tabla de lo introducido
		if (mysqli_affected_rows($link)!=0) {
			echo "Datos eliminados o insertados: <br>";
			echo "<table><tr><td>$seccion</td></tr>";
			echo "<tr><td>$n_art</td></tr>";
			echo "<tr><td>$fecha</td></tr>";
			echo "<tr><td>$p_orig</td></tr>";
			echo "<tr><td>$precio</td></tr></table>";
		}
	} 

	mysqli_close($link);
?>

</body>
</html>