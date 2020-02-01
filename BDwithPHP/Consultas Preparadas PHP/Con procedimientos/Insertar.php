<!DOCTYPE html>
<html>
<head>
	<title>Insertar con consultas preparadas</title>
</head>
<body>

<?php  
	require("../datos_conexion.php");
	
	$n_art = $_GET["n_art"];
	$secc = $_GET["secc"];
	$pre = $_GET["pre"];
	$fec = $_GET["fec"];
	$p_ori = $_GET["p_ori"];


	if (!($link = mysqli_connect($db_address, $db_user, $db_password))) { 
		echo "Error conectando a la base de datos.<br>"; 
		exit();
		//tambien se puede hacer con mysqli_connect_errno()
	}
	
	mysqli_select_db($link, $db_name) or die ("Error seleccionando la base de datos.<br>"); //nos ahorramos un if

	$sql = "INSERT INTO `artículos` (`SECCIÓN`,`NOMBRE ARTÍCULO`,`FECHA`,`PAÍS DE ORIGEN`,`PRECIO`) VALUES (?,?,?,?,?)";

	$result = mysqli_prepare($link,$sql); //almacenamos el objeto stmt

	$ok = mysqli_stmt_bind_param($result,"sssss",$secc,$n_art,$fec,$p_ori,$pre); //s indica que es string

	$ok = mysqli_stmt_execute($result);	

	if ($ok) {
		echo "Se ha insertado correctamente el registro";
	}
	else echo "Algo va mal";
?>


</body>
</html>