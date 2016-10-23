<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici9</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	
<?php 
//Guardamos en una variable la ruta del directorio que vamos ha abrir
$dir = "images/";
 
// Comprobamos que es un directorio
if (is_dir($dir)) {
	//Abrimos el directorio
    if ($dh = opendir($dir)) {
    	//creamos la tabla
    	echo "<table border=1><tr>";
    	//establezco una variable para controlar las cuatro columnas
    	$flag =0;
    	//Mientras $file sea diferente de false significa que ha encontrado un fichero.
        while (($file = readdir($dh)) !== false) {
        	//Pregunto si lo que encuentra es el . y el .. para crear una excepcion
        	if($file != '.' && $file != '..')
        	{
        	//Si la vandera llega a 4 cerramos el tr y abrimos otro y ponemos la vandera a 0
        	if($flag == 4){
			echo "</tr><tr>";
			$flag = 0;
        	}
        	//Printamos la imagen y sumamos la vandera
            echo "<td><img src='images/$file'/></td>";
            $flag ++;

       		 }
        }
        echo "</tr></table>";
        //Cerramos el directorio
        closedir($dh);
    }
}



 ?>
 </body>
</html>