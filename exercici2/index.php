<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
<?php 
//Declaramosla variable num y le introducimos un numero aleatorio entre 1 y 100
$num = rand(1,100);
//Printamos el numero con un echo
echo $num;

//Hacemos una pregunta para saber si es menor o mayor que cincuenta
if($num < 50){

	echo '<h1>Es menor que 50</h1>';
}else if($num > 50){

	echo '<h1>Es mayor que 50</h1>';
}else{

	echo '<h1>Es igaul que 50</h1>';
}
?>
	
</body>
</html>