<!DOCTYPE html>
<html>
	<head>
		<title>Listado de empleados</title>
	</head>
	<body>
		<?php
			//include 'configbd.php';
			
			$servidorbd = 'localhost';
			$usuario = 'root';
			$contraseña = '';
			$basedatos = 'bdempleados';
			
			$mysqli = new mysqli($servidorbd, $usuario, $contraseña, $basedatos);  //Conectar con la BD
			
			//Listado de empleados
			
			$consulta = 'SELECT dni, nombre FROM bdempleados';
			$resultado = $mysqli->query($consulta);
				
			$fila = $resultado ->fetch_array();
				
			print_r($fila);
		?>
	</body>
</html>