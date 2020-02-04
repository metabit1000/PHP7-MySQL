<!DOCTYPE html>
<html>
<head>
	<title>Comunicacion con la DB en PHP (con procedimientos)</title>
</head>
<body>

<?php  
	require("../datos_conexion.php");
	
	if (!($link = mysqli_connect($db_address, $db_user, $db_password))) { 
		echo "Error conectando a la base de datos.<br>"; 
		exit();
		//tambien se puede hacer con mysqli_connect_errno()
	}
	else {
        echo "Nos hemos conectado correctamente.<br>";
	}
	
	mysqli_select_db($link, $db_name) or die ("Error seleccionando la base de datos.<br>"); //nos ahorramos un if

	$result = mysqli_query($link,"SELECT * FROM ARTÍCULOS"); //guarda el resultado en el resultset

	do {
		$fila = mysqli_fetch_row($result); 
		echo $fila[0] . " " . $fila[1] . " " . $fila[2] . " " . $fila[3] . " " . $fila[4];
		echo "<br>";
		echo "<br>";
	} while ($fila != null); //tambien se puede hacer con un booleano

	mysqli_close($link); //cerramos conexion
?>

</body>
</html>