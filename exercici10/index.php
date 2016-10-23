<?php
//Funcion par saber si la extension es correcta.
    function fextension($fichero){
        //Pasamos todo el fichero a minusculas
        $fichero = strtolower($fichero);
        //dividimos el fichero por el punto.
        $trozos = explode(".", $fichero); 
        //cojemos la parte final del fichero.
        $extension = end($trozos); 
        //Comprobamos que esta dentro de las extensiones permitidas.
        if($extension != 'jpeg' && $extension != 'png' && $extension != 'bmp' && $extension != 'gif' )
           //Devolvemos 0 si esta fuera.
            return 0;

        else 
            //Devolvemos uno si es correcta.
            return 1;


    }


 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici10</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<script type="text/javascript">
    
    
    
</script>
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
                $result = fextension($file);
                if($result == 1){

                	//Si la vandera llega a 4 cerramos el tr y abrimos otro y ponemos la vandera a 0
                	if($flag == 4){
        			echo "</tr><tr>";
        			$flag = 0;
                	}
                	//Printamos la imagen y sumamos la vandera para que se vea en tamaño original, e añadido una ancla para que al insertarse la imagen actue como link hacia ella misma.(Idea de Toni)
                    echo "<td><a href='images/$file' target='_blank'><img class='imagen' src='images/$file'/></a></td>";
                    $flag ++;
                 }
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