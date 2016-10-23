<?php 
//Recojemos los datos por el metodo POST
$nom=$_POST['nom'];
$edad=$_POST['edad'];

//Si la edad recogida es mayot o igual a 18
if($edad >= 18)
	//Printamos que es mayor de edad
	echo "Eres mayor de edad";
else
	//Si no printamos que es menor
	echo "Eres menor de edad";



 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<title>exercici12</title>
</head>
<body></body>
</html>