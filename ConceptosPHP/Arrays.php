<!DOCTYPE html>
<html>
<head>
	<title>Arrays y matrices en PHP</title>
</head>
<body>

<?php  
	//Declaracion; NO hace falta indicar la posicion! Lo hace solo
	
	//1 metodo
	$semana[] = "Lunes";
	$semana[] = "Martes";
	$semana[] = "Miercoles"; //se puede hacer indicando indices

	//2 metodo
	$semana2 = array("Lunes","Martes","Miercoles","Jueves");

	for ($var = 0; $var < sizeof($semana2); $var++) { //count or sizeof
		echo $semana2[$var] . "<br>";
	}

	//ARRAY ASOCIATIVO; cada posicion se identifica con un nombre, no indice
	$datos = array("Nombre"=>"Alex","Apellido"=>"Aguilera","Edad"=>21);

	foreach ($datos as $key => $value) { //este tipo de arry es con foreach
		echo $value . " ";
	}
	echo "<br>";

	//Comprobar si es un array o variable

	if (is_array($datos)) echo "Es un array:) <br>";

	//Ordenar array, se usa sort

	sort($datos);
	
	//Ahora lo imprimimos, para ver que se ha ordenado el array
	foreach ($datos as $key => $value) { 
		echo $value . " ";
	}
	echo "<br>";

	//MATRICES O arrays multidimensionales
	//Declaracion; se puede hacer con el 1 metodo
	$alimentos = array("fruta"=>array("tropical"=>"kiwi",
									  "citrico"=>"mandarina",
									  "otros"=>"manzana"),
					   
					   "leche"=>array("animal"=>"vaca",
									  "vegetal"=>"coco"),
					   
					   "carne"=>array("vacuno"=>"lomo",
									  "porciono"=>"pata"));
	
	//echo $alimentos["carne"]["vacuno"] . "<br>";

	foreach ($alimentos as $i => $valuei) {
		foreach ($valuei as $j => $valuej) { 
			echo "$valuej ";
		}
		echo "<br>";
	}
?>

</body>
</html>