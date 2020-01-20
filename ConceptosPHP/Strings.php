<!DOCTYPE html>
<html>
<head>
	<title>Caracteristicas STRINGS en PHP</title>
	<style >
		.resaltar{
			color: #F00; 
			font-weight: bold;  /* Ponemos estilo sencillo rojo y bold */
		}
		
	</style> 
</head>
<body>

<?php
	//Caracteristicas STRINGS
	echo '<p class="resaltar">Esto es un ejemplo de frase</p>';
	echo "<p class='resaltar'>Esto es un ejemplo de frase</p>"; //dos formas de hacerlo

	$nombre = "Alex";
	echo "Hola $nombre <br>";

	/* Comparacion de strings: 
		- strcmp (tiene en cuenta mayus o minus)
		- strcasecmp (ignora lo anterior)
	*/
	$var1 = "casa";
	$var2 = "CASA";

	$res = strcmp($var1,$var2); //devuelve 1 si no son iguales
	echo $res . "<br>"; //1

	$res = strcasecmp($var1,$var2); 
	echo $res . "<br>"; //0
?>

</body>
</html>