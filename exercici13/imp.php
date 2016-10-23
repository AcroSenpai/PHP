<?php 
//REcogemos los datos por el metodo POST y los guardamos en variables
$nom=$_POST['nom'];
$ingreso=$_POST['ingreso'];

//Preguntamos si el iongreso es igual a 3 (ya que en el html la opcion >3000 tiene el valor de 3)
if($ingreso == 3){
	//si lo es printamos que debe pagar
	echo "Tus ingresos son superiores a 3000, debido a eso debes pagar impuestos";
}else{
	//si no lo es printamos que no
echo "Tus ingresos son inferiores a 3000, debido a eso no debes pagar impuestos";

}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Debes pagar?</title>
 	<link rel="stylesheet" type="text/css" href="css/css.css">
 </head>
 <body>
 	
 </body>
 </html>