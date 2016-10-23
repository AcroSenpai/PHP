<?php
//Hacemos un  bucle para llenar el array con numeros random
for($i = 0; $i < 100; $i++)
{

$num = rand(1, 100);
$numeros[$i]=$num;


}


//Declaramos la funcion
		function fencontrar ($numeros,$encontrar){
			//Decalramos una vandera para saber si no lo ha encontrado
			$result = 0;
			//Recorremos el array buscando el numero
			for($i = 0;$i < 100; $i++){
				if($numeros[$i]==$encontrar){
					//Cuando coincide el numero del array con el buscado printamos que lo encontramos y su posicion.
					echo "Encontrado el num $encontrar en la posicion $i;</br>";
					//Y marcamos que lo encontramos en la vandera
					$result = 1;
					}
				
				
			}
			// Si no lo encontramos printamos que no
			if($result == 0){
			echo "No encontrado";
			}


			}

 ?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>exercici8</title>
		<link rel="stylesheet" href="css/css.css">
	</head>
	<body>
	<?php 
	//Usamos la funcion
	fencontrar($numeros, 45);
	 ?>
	</body>
	</html>	