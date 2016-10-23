<?php 
//gerenamos el numero aletorio
$num = rand(1,3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici5</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
<?php 
//he decidido usar un switch ya que me permite poner los tres casos y lo que ocurrira en los tres.
	switch ($num) {
		case '1':
			echo '<h1>Uno</h1>';
			break;

		case '2':
			echo '<h1>Dos</h1>';
			break;

		case '3':
			echo '<h1>Tres</h1>';
			break;					
		default:
			echo 'Error';
			break;
	}

?>
	
</body>
</html>