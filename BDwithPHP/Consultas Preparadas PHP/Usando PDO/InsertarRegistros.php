<!DOCTYPE html>
<html>
<head>
	<title>Insertar registros con PDO</title>
</head>
<body>

<?php  
	/* Muy similar a hacerlo con procedimientos. En este caso, prepare() nos devuelve un objeto PDOStatement. */

	require("../datos_conexion.php");
	$n_art = $_GET["n_art"];
	$secc = $_GET["secc"];
	$pre = $_GET["pre"];
	$fec = $_GET["fec"];
	$p_ori = $_GET["p_ori"];
	
	try {
		$arrOptions = array(
	        PDO::ATTR_EMULATE_PREPARES => FALSE, 
	        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
	        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    	);
		
		$link = new PDO("mysql:host=$db_address;dbname=pruebas",$db_user,$db_password,$arrOptions);
		
		$sql = "INSERT INTO `artículos` (`SECCIÓN`,`NOMBRE ARTÍCULO`,`FECHA`,`PAÍS DE ORIGEN`,`PRECIO`) VALUES (:secc,:n_art,:fec,:p_ori,:pre)";

		/* Para eliminar seria lo mismo, pero usando DELETE*/

		$result = $link->prepare($sql); //objeto PDOStatement
		$result->execute(array(":secc"=>$secc,":n_art"=>$n_art,":fec"=>$fec,":p_ori"=>$p_ori ,":pre"=>$pre)); 
		
		echo "Registro insertado correctamente"; //como estoy dentro del try, no habra error
		
		$result->closeCursor();
	
	} catch (Exception $e) {
		die('Error: ' . $e->GetMessage());
	} finally{
		$link = null;
	}
?>

</body>
</html>