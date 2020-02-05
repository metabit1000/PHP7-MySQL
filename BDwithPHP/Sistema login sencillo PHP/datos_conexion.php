<?php
	/* ¿QUÉ NECESITAMOS PARA CONECTARNOS A UNA DB (normalmente)?
		- Direccion de la db
		- Nombre de la db 
		- Usuario db
		- Password db 
		
		Para obtener información de las tablas, en php podemos usar:
		- MySQLi. Clase Mysqli (POO) --> Mas correcta
		- MySQLi. Función mysqli_connect() (Por procedimientos, mas obsoleta)
		- PDO. Usando POO
	*/

	$db_address = "localhost:3308"; //en caso de estar en el cloud, se cambiaria ¡Importante! Especificar el puerto...
	$db_name = "pruebas";
	$db_user = "root";
	$db_password = ""; //no tenemos contraseña puesta!
?>