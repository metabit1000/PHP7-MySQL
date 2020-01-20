<!DOCTYPE html>
<html>
<head>
	<title>Operador ternario "?"</title>
</head>
<body>

<?php
	//Operador ternario se usa para quitar ifs; ejemplo:
	
	$edad = 18;
	
	if ($edad < 18) {
		echo "Eres menor de edad chaval. Vete a casa<br>";
	}
	else {
		echo "Eres mayor de edad, puedes beber.<br>";
	}

	//Lo de antes se puede sustituir por:
	echo $edad<18 ? "Eres menor de edad chaval. Vete a casa" : "Eres mayor de edad, puedes beber." //se pueden anidar

?>

</body>
</html>