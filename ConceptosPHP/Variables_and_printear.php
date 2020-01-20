<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Variables y printear</title>
</head>
<body>

<?php  
	//VARIABLES
	
	/* Pueden ser: 
		- Local --> Dentro de una funcion, solo visible dentro de ella
		- Global --> Declarada en cualquier sitio del codigo PHP
		- Super global --> Declada como array
	*/

	$nombre = "Alex"; //declaro variable GLOBAL y almaceno valor 
	$edad = 18;

	function dameNombre() {
		//global $nombre; //ESTO la convierte en la global!
		$nombre = "Juan"; //declaro variable LOCAL
	}

	dameNombre(); //no cambia nada, porque son variables diferentes!

	//PRINT, es una funcion 
	print "El nombre del usuario es " . $nombre . " y edad " . $edad . "<br>"; //se concatena con punto!! o...
	print "El nombre del usuario es $nombre <br>"; //poniendo dentro
	//con las '' comillas php escribe lo que este dentro tal cual!
	print 'Prueba de ello: $nombre <br>';

	//ECHO, es una expresion, consume menos recursos
	echo "El nombre es: " . $nombre . "<br>";
	echo $nombre, $edad; //la diferencia fundamental es que admite esto
?>

</body>
</html>