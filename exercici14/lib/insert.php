<?php 
	
	//Establir connexió amb basededades
	
	include 'config.php';

	//obtenim la variable de connexio
	
	$db=new mysqli($dbhost,$dbuser,$dbpassw,$dbname);
		if($db->connect_errno)
			die('Error de connexio');
		else{
				//Comporvar $_POST
				if($_POST){
					if($_POST['nom']&&!empty($_POST['nom'])){

						//es comprova cadascú dels camps
						//Y se genera la SQL donde insertamos el nuevo alumno recogido por el metodo POST.
						$sql="INSERT INTO alumnes(Nom,Cognoms,Curs)  VALUES('".$_POST['nom']."','".$_POST['cognoms']."','".$_POST['curs']."');";

						//Ejecutamos la consulta
						$result=$db->query($sql);


					}

				}


		}
		//Cerramos la conexion
		$db->close();

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/css.css">
</head>
<body>
	<form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
		<p>Nom: <input type="text" name="nom"/></p>
		<p>Cognoms: <input type="text" name="cognoms"/></p>
		<p>Curs: <br>
				<input type="radio" name="curs" value="	1SMIX"> 1SMIX<br>
 				 <input type="radio" name="curs" value="2SMIX"> 2SMIX<br>
  				<input type="radio" name="curs" value="1DAW"> 1DAW<br>
  				<input type="radio" name="curs" value="2DAW"> 2DAW<br></p>
		<p><input type="submit" value="Inserta"/></p>
		<a  href="../index.html">Volver</a>
	</form>
</body>
</html>