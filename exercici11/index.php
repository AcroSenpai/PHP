<?php
//Primero preguntamos si el metodo POST esta siendo usado y no esta vacio
if(isset($_POST)&&!empty($_POST)){
	//Preguntamos si el POST de nom esta en uso y no esta vacio
		if (isset($_POST['nom'])&& !empty($_POST['nom'])){
			//Guadamos el nombre en la variable nom
			$nom=$_POST['nom'];}

		//Preguntamos si el POST de cognoms esta en uso y no esta vacio

		if (isset($_POST['cognoms'])&& !empty($_POST['cognoms'])){
			//Guadamos el nombre en la variable cognoms
			$cognoms=$_POST['cognoms'];}

		//Preguntamos si el POST de comentari esta en uso y no esta vacio

		if (isset($_POST['cometari'])&& !empty($_POST['cometari'])){
			//Guadamos el nombre en la variable comentari
			$comentari=$_POST['cometari'];}
			//Introducimos el nombre del fichero
		$fichero = 'dades.txt';
		//Preguntamos si existe el fichero
		if (file_exists($fichero)) 
		{
			//Si existe, hacemos una peticion de oertura de tipo escritura
			$fp = fopen($fichero, "w");
			//Ahora introducimos los datos recogidos gracias a la funcion fputs
			fputs ($fp, "Nombre: $nom\nApellido: $comentari\nComentarios: $comentari");
			//Cerramos la conexion
			fclose ($fp);

		}
	}

 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<title>exercici11</title>
</head>
<body>
	<!-- Creamos un formulario que vuelve a si mismo-->
	<form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
		<p>Nom: <input type="text" name="nom"/></p>
		<p>Cognoms: <input type="text" name="cognoms"/></p>
		<p>Comentaris: <input type="text" name="cometari"/></p>
		<p><input type="submit" value="Introducir"/></p>
	</form>
</body>
</html>