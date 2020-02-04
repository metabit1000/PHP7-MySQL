<!DOCTYPE html>
<html>
<head>
	<title>Comunicacion con la DB en PHP con POO</title>
</head>
<body>

<?php
	define('DB_ADDRESS','localhost:3308');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_NAME','pruebas');

	class Conexion{
		protected $conexion;

		public function __construct() {
			$this->conexion = new mysqli(DB_ADDRESS, DB_USER, DB_PASSWORD);

			if ($this->conexion->connect_errno) {
				echo "Falló la conexión. Error: " . $this->$conexion->connect_errno;
			}

			$this->conexion->set_charset("utf8");
			$this->conexion->select_db(DB_NAME) or die ("Error seleccionando la base de datos.<br>");
		}

		public function introducir_query($sql) {
			return $this->conexion->query($sql);
		}

		public function close() {
			$this->conexion->close();
		}

	}

	/* Lo siguiente deberia ir en otro fichero por modularizacion (para que sea correcto)...pero lo voy a dejar asi para tenerlo mas compacto todo.*/

	$link = new Conexion();

	$sql = "SELECT * FROM ARTÍCULOS";

	$result = $link->introducir_query($sql); //se puede hacer de diferentes maneras

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