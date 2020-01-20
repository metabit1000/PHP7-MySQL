<!DOCTYPE html>
<html>
<head>
	<title>Programacion orientada a objetos en PHP</title>
</head>
<body>

<?php 
	class Coche { //creamos clase Coche con atributos y funcionalidades
		
		//ATRIBUTOS
		var $ruedas;
		var $color;
		private $motor; //importante el "var"

		//METODOS
		function __construct() { //Constructora para PHP7
			$this->ruedas = 4;
			$this->color = "Rojo";
		}

		//Getters y setters tambien se usan en php
		function getRuedas() {
			return $this->ruedas;
		}

		function setRuedas($new_value) {
			$this->ruedas = $new_value;
		}

		function arrancar() {
			echo "Arranco" . "<br>";
		}

		function girar() {
			//...
		}

		function frenar() {
			//...
		}

		function establece_color($color_coche,$nombre_coche) {
			$this->color = $color_coche;
			echo "Ahora el color del coche es: " . $this->color . "<br>";
		}

		// Si en otro fichero se hace un include, podemos usar la clase de este fichero sin problemas
	}

	$car1 = new Coche(); //creamos instancia de Coche; un objeto
	//$car1->arrancar();
	//echo $car1->ruedas;
	$car1->setRuedas(5); //modifica las ruedas
	echo $car1->getRuedas(); //obtiene el valor de las ruedas
?>

</body>
</html>