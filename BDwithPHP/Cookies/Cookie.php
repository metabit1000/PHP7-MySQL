<!DOCTYPE html>
<html>
<head>
	<title>Cookies en PHP</title>
</head>
<body>

<?php  
	/* Una cookie es un fichero de texto plano donde se puede almacenar muchos datos normalmente informacion necesaria para facilitar al usuario el uso de las paginas web. Se almacenan en el disco duro y para cada navegador. Las crea el programador.
	Muy útil para la publicidad ya que almacena información sobre lo que se busca (nuestros hábitos).  Se tiene que informar al usuario de si quiere usar cookies o no por ley. */

	setcookie("prueba","Esta es la info de la cookie prueba",time()+30,"leer_cookie.php");
?>

</body>
</html>