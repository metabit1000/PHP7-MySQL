<!DOCTYPE html>
<html>
<head>
	<title>Comprueba login</title>
</head>
<body>

<?php

	require("datos_conexion.php");

	try {
		$arrOptions = array(
	        PDO::ATTR_EMULATE_PREPARES => FALSE, 
	        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
	        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    	);

		$link = new PDO("mysql:host=$db_address;dbname=pruebas",$db_user,$db_password,$arrOptions);


		$sql = "SELECT * FROM `usuarios` WHERE USUARIOS=:user AND PASSWORD=:pass";

		
		//$sql = "INSERT INTO `usuarios` (USUARIOS,PASSWORD) VALUES (:user,:pass)";
	
		$result = $link->prepare($sql);

		$user = htmlentities(addslashes($_POST["user"]));
		$password = htmlentities(addslashes($_POST["password"]));

		/* htmlentities = Convierte todos los caracteres aplicables a entidades HTML
		   addslashes = Escapa un string con barras invertidas
		Las usamos para que el usuario no pueda poner cosas raras o inyeccion SQL*/

		$result->bindValue(":user",$user);
		$result->bindValue(":pass",hash("sha256",$password));

		$result->execute();

		if (isset($_POST["login"])) {

			if ($result->rowCount() > 0) { //usuario existe
			session_start();

			$_SESSION["user"] = $_POST["user"];

			header("location:Usuarios_registrados.php"); //NO nos vale esto a secas, no es seguro. Necesitamos usar sesiones (arriba)
			}
			else { 
				header("location:Login.html"); //le redirijimos a la pagina de antes
			}
		}
		else { //caso register
			if ($result->rowCount() > 0) { //existe el usuario
				header("location:Login.html");
			}
			else { //registro el nuevo usuario
				$sql = "INSERT INTO `usuarios` (USUARIOS,PASSWORD) VALUES (:user,:pass)";
				$result = $link->prepare($sql);
				
				//Lo mas correcto seria usar un salt por si alguien consigue averiguar la contraseña
				$pass_cifrado = hash("sha256",$password);
				
				$result->bindValue(":user",$user);
				$result->bindValue(":pass",$pass_cifrado);

				$result->execute();

				echo "Usuario registrado correctamente <br>";
				echo "<a href='Login.html'>Volver</a>";
			}
		}
		
	} catch (Exception $e) {
		die('Error: ' . $e->GetMessage());
	} finally{
		$link = null;
	}
?>

</body>
</html>
