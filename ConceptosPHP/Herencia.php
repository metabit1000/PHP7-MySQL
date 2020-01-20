<!DOCTYPE html>
<html>
<head>
	<title>Herencia en POO PHP</title>
</head>
<body>

<?php 
	//Util para la reutilizacion de codigo

	//PRIVATE --> NO accesible desde fuera
	//PROTECTED --> Accesible desde la clase en si y las que heredan de esta
	//PUBLIC --> Accesible siempre; por default es asi. se pone "var"

	include ("POO.php"); //la incluimos para obtener el codigo de la clase coche

	class Camion extends Coche { //creamos nueva class y heredamos de Coche

		var $nombre_camionero; //atributo nuevo para esta clase

		function __construct() {
			$this->ruedas = 8;
			$this->color = "Gris";
			$this->nombre_camionero = "Jose";
		}

		function establece_color($color_camion,$nombre_camion) {  
			echo "Hago cosa diferente a la de coche xd";
		} 
		//Sobreescribimos el metodo que tiene coche, ya que no nos va bien. La redefinimos.

		//Aqui podriamos crear nuevas funciones para camion nuevas igual que el nuevo atributo. No hay problema
	}

	$camion = new Camion();
	$camion->arrancar(); //tengo la funcion de coche! La hereda
	echo $camion->ruedas . "<br>";
	$camion->establece_color("gris","Pegaso");
?>

</body>
</html>