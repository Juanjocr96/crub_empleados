<!DOCTYPE html>
<html>
	<head>
		<title>Modificar empleados</title>
		<link rel="stylesheet" href="insert.css" />
	</head>
	<body>
		<?php
			include_once 'procesos.php';
			
			echo '<h2>Listado de empleados</h2>';
			
			$procesos = new Procesos;
			$procesos->listar2($_GET["id"]);
			
			if(isset($_POST["modificar"])){
				$consulta = 'UPDATE `empleados` SET dni= "'.$_POST["dni"].'", nombre= "'.$_POST["nombre"].'", correo= "'.$_POST["correo"].'", telefono= "'.$_POST["telefono"].'" WHERE idEmpleado = '.$_GET["id"];
				$procesos->modificar($consulta);
				header("Location:index.php");
			}
			
			echo '<br /><a href=index.php>Volver</a>';
		?>
	</body>
</html>