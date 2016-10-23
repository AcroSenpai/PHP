<?php 

	//Establir connexió amb basededades
	include 'config.php';
	

	$db=new mysqli($dbhost,$dbuser,$dbpassw,$dbname);
		if($db->connect_errno)
			die('Error de connexio');
		else{
			//si la conexion no falla, creamos una consulta para mostrar todo los registros de alumnes
			$sql="SELECT * from alumnes";

			//Ejecutamos la consulta
			$result=$db->query($sql);
			//Mientras encuentre registros ira mostrandolos en este formato
			while($rows=$result->fetch_array()){
				echo $rows['Nom'].' ';
				echo $rows['Cognoms'].' ';
				echo $rows['Curs'].'<br>';
			}

		}

		//cerrar connexion
		$db->close();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>lista</title>
 	<link rel="stylesheet" type="text/css" href="../assets/css/css.css">
 </head>
 <body>
 	<a  href="../index.html">Volver</a>
 </body>
 </html>