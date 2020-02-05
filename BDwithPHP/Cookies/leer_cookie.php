<!DOCTYPE html>
<html>
<head>
	<title>Leer cookie</title>
</head>
<body>

<?php  
	if (isset($_COOKIE["prueba"])) {
		echo $_COOKIE["prueba"]; //lee la info de la cookie que hemos creado
		
		/* Destruir cookie */
		setcookie("prueba","Esta es la info de la cookie prueba",time()-1,"leer_cookie.php"); //tan facil como poner -1
	}
	else {
		echo "No se ha creado la cookie";
	}
?>

</body>
</html>