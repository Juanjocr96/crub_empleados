<!DOCTYPE html>
<html>
	<head>
		<title>Listado de empleados</title>
	</head>
	<body>
		<?php
			include_once 'procesos.php';
			
			echo '<h2>Listado de empleados</h2>';
			
			$procesos = new Procesos;
			$procesos->listar();
			
			echo '<br /><a href=index.php>Volver</a>'
		?>
	</body>
</html>