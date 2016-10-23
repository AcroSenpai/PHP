<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici6</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	
	<?php 
	//declaramos el numero de la tabla
	$num = 10;
	//Hacemos un for, en el que $d empieza en un y acabara cuando llege a 11 de mientras se sumara 1 por vuelta.
	for($d = 1; $d <= 10; $d++)
	{
		//Hacemos la operacion
		$res= $num * $d;
		//Printamos
		echo "$num * $d = $res <br/>";

	}

	?>
</body>
</html>