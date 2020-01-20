<!DOCTYPE html>
<html>
<head>
	<title>Pasar parametros por valor o por referencia</title>
</head>
<body>

<?php
	/* Por valor: la variable no se modifica al acabar la funcion
	   Por referencia: la variable queda modificada */

	function incrementa($valor1) {
		$valor1++;
		return $valor1; //esto retorna 2! Pero la variable en mem no se ha modificado!
	}

	function incrementaRef(&$valor1) {
		$valor1++;
	}	
	
	$numero = 1;

	incrementa($numero); //no se incrementa la variable
	echo $numero . "<br>"; 
	incrementaRef($numero); //si que incrementa la variable
	echo $numero . "<br>";

?>

</body>
</html>