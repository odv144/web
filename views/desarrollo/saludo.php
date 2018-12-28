<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trabajando desde el controlador de Desarrollo</title>
</head>
<body>
	<p>Este controlador es para uso y pruebas</p>
	<p><?= "EL mensaje es ".$msj; ?></p>
	
	<?php 
		echo "<p>";
		echo "contenido del array simple<br>";
		
		foreach ($simple as $key => $value) {
			echo "clave: ".$key. "valor: ". $value."<br>";
		}

		echo "</p><p>Contenido del array Completo<br>";
		
		echo "</p>";
	 ?>
	 
</body>
</html>
