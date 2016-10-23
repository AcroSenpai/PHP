<?php
//DEfinimos la constante de cuantas filas tendra la tabla
define("TAM", 10);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici7</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	
	<?php 

	//declaramos el numero el cual multiplicaremos
	$num = 10;
	//Hacemos un for, en el que $d empieza en un y acabara cuando llege a 11 de mientras se sumara 1 por vuelta.
	echo "<table>";

	for($d = 1; $d <= TAM; $d++)
	{
		//Hacemos la operacion
		$res= $num * $d;
		//Printamos dependiendo de si es par rojo o impar azul
		if($d % 2 == 0)
		echo "<tr><td bgcolor = red> $num * $d = $res </td></tr>";

		else
			echo "<tr><td bgcolor = blue> $num * $d = $res </td></tr>";

	}

	?>
</body>
</html>