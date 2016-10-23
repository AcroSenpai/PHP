<?php
//guardamos en la variable $dia el numero del dia
	$dia = date('d');
	//hacemos una pregunta para saber si es inferior o igual a 10
	if($dia <= 10){
		//Si es inferior o igual guardamos un mnesaje de que esta disponible
		$msg='El lloc es troba disponible';

	}else{
		//Si es superior guardamos un mensaje de que esta fuera de servicio
		$msg="Lloc fora de servei.";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici1</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
<!--Hacemos un echo para mostrar el mensaje-->
<?= $msg;?>
	
</body>
</html>