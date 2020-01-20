<style>
	.resultado{
		color:#F00;
		font-weight: bold;
		font-size: 20px;
	}
</style>

<?php 
	//Vamos a poner el resultado debajo del formulario
	if (isset($_POST["button"])) {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$op = $_POST["operacion"];
		calcular($num1,$num2,$op);
	}

	function calcular($num1,$num2,$op) {
		if (!strcmp("Suma",$op)) { //retorna 1 si son diferentes!
			$res = $num1 + $num2;
			echo "<p class='resultado'>El resultado es: $res</p>";
		}

		if (!strcmp("Resta",$op)) { 
			echo "El resultado es: " . ($num1 - $num2) . "<br>";
		}

		if (!strcmp("Multiplicación",$op)) { 
			echo "El resultado es: " . ($num1 * $num2) . "<br>";
		}

		if (!strcmp("División",$op)) { 
			echo "El resultado es: " . ($num1 / $num2) . "<br>";
		}

		if (!strcmp("Módulo",$op)) { 
			echo "El resultado es: " . ($num1 % $num2) . "<br>";
		}

		if (!strcmp("Incremento",$op)) { 
			$num1++;
			$res = $num1;
			echo "<p class='resultado'>El resultado es:  $res</p>";
		}

		if (!strcmp("Decremento",$op)) { 
			$num1--;
			$res = $num1;
			echo "El resultado es:  $num1";
		}
	}
	
?>