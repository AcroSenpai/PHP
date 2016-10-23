<?php
//Declaramos una variable de los cuatro tipos
//integer 
$integer = 4;
//double
$double = 4.4;
//string
$string = 'hola';
//boolean
$boolean = True;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici3</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
<!-- Hacemos un echo creando una cadena para mostrarlas todas-->
	<?= 'Integer: '.$integer.'<br/>Double: '.$double.'<br/>String: '.$string.'<br/> Boolean: '.$boolean;?>
</body>
</html>