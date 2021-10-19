<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="jcarrascorodriguez.guadalupe@alumnado.fundacionloyola.net" />
		<link rel="stylesheet" href="insert.css" />
	</head>
	<body>
		<h2>Añadir empleado</h2>
		<form method='POST'>
			<div>
				<label for='dni'>DNI:</label>
				<input type='text' name='dni' />
			</div>
			<div>
				<label for='nombre'>Nombre:</label>
				<input type='text' name='nombre' />
			</div>
			<div>
				<label for='correo'>Correo:</label>
				<input type='text' name='correo' />
			</div>
			<div>
				<label for='telefono'>Teléfono:</label>
				<input type='text' name='telefono' />
			</div>
			<input type='submit' value='Añadir' name='enviar'/>
		</form>
		<?php
			include_once 'procesos.php';
			
			$procesos = new Procesos;
			
			if(isset($_POST["enviar"])){
				$procesos->alta($_POST["dni"], $_POST["nombre"], $_POST["correo"], $_POST["telefono"]);
			}
		?>
		<br />
		<a href='index.php'>Volver</a>
	</body>
</html>