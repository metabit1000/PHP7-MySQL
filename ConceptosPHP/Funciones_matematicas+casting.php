<!DOCTYPE html>
<html>
<head>
	<title>Funciones matematicas y casting en PHP</title>
</head>
<body>

<?php
	/*Las funciones matematicas que se pueden usar son:
	  https://www.php.net/manual/es/ref.math.php */

	  $num1 = rand(12,20); //genera num aleatorio entre 12 y 20.
	  echo "El numero es: " . $num1 . "<br>";

	  $num2 = pow(5,5);
	  echo "El numero es: $num2 <br>";

	  $num3 = round (5.654); //redondea, no elimina la parte decimal
	  echo "El numero es: $num3 <br>";

	  //PHP tiene un casting implicito! Convierte implicitamente los tipos
	  $num4 = "5"; //es un string
	  echo $num4 . "<br>";
	  $num4+=2; //aqui num4 es de tipo integer; lo hace solo
	  echo $num4 . "<br>";

	  //Pero, tambien tiene explicito cuando es necesario
	  $num5 = "5";
	  $res = (int)$num5; //si no lo pusieramos, res seria un string
?>

</body>
</html>