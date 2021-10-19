<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			//include 'configbd.php';
			$servidorbd = 'localhost';
			$usuario = 'root';
			$contraseña = '';
			$basedatos = 'bdempleados';
			
			$mysqli = new mysqli($servidorbd, $usuario, $contraseña, $basedatos);  //Conectar con la BD
			
			//Funcion que añade un empleado
			
			function insert(){
				$consulta = 'INSERT INTO bdempleados ("dni","nombre","correo","telefono") VALUES ($dni, $nombre, $correo, $telefono)';
				$resultado = $mysqli->query($consulta);
				
				$fila = $resultado ->fetch_array();
			}
			
			$mysqli->close(); //Cerrar conexion con la BD
		?>
	</body>
</html>