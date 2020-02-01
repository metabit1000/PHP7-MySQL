<!DOCTYPE html>
<html>
<head>
	<title>Consultas preparadas SQL con PDO</title>
</head>
<body>

<?php  
	/* Muy similar a hacerlo con procedimientos. En este caso, prepare() nos devuelve un objeto PDOStatement. */

	require("../../datos_conexion.php");

	try {
		$pais = $_GET["buscar"];

		$arrOptions = array(
	        PDO::ATTR_EMULATE_PREPARES => FALSE, 
	        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
	        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    	);
		
		$link = new PDO("mysql:host=$db_address;dbname=pruebas",$db_user,$db_password,$arrOptions);
		$sql = "SELECT * FROM `artículos` WHERE `PAÍS DE ORIGEN` = ?";
		$result = $link->prepare($sql); //objeto PDOStatement
		$result->execute(array($pais)); 

		/* También se puede hacer uso de marcadores; en el ejemplo anterior seria: WHERE `PAÍS DE ORIGEN` = :pais y abajo $result->execute(":pais"=>$pais); */
		
		while($registro=$result->fetch(PDO::FETCH_ASSOC)) { 

			echo $registro['SECCIÓN'] . " " . $registro['NOMBRE ARTÍCULO'] . " " . $registro['FECHA'] . " " . $registro['PRECIO'] . "<br><br>";
		}
		$result->closeCursor();
	
	} catch (Exception $e) {
		die('Error: ' . $e->GetMessage());
	} finally{
		$link = null;
	}
?>

</body>
</html>