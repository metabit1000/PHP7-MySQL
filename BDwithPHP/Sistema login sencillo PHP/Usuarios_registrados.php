<!DOCTYPE html>
<html>
<head>
	<title>Usuarios registrados</title>
</head>
<body>

<?php  
	session_start(); //crea o reanuda session.
	
	if (!isset($_SESSION["user"])) {
		header("location:Login.html"); 

		/* Si no hay sesion, lo redirigimos al login para que se registre. Si no hacemos esto, cualquier usuario podria acceder al contenido simplemente copiando la url*/
	}
?>

<h1>Bienvenido a la página web de prueba</h1>

<?php  
	echo "Bienvenido " . $_SESSION["user"] . ". <br><br>";
?>

<! -- Es muy importante poder cerrar sesion, por seguridad -->
<a href="Cierre.php">
	<input type="button" value="Logout">
</a>

</body>
</html>