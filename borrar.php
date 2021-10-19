<!DOCTYPE html>
<html>
	<head>
		<title>Borrar empleados</title>
		<link rel="stylesheet" href="insert.css" />
	</head>
	<body>
		<?php
			include_once 'procesos.php';
			
			echo '<p>¿Confirmar borrado de empleado con id = '.$_GET["id"].'?</p>';
			echo '<form method="POST">
					<input type="submit" name="si" value="si" />
					<input type="submit" name="no" value="no" />
				</form>';
			
			$procesos = new Procesos;
			
			if(isset($_POST["si"])){
				$procesos->borrar($_GET["id"]);
				header("Location:index.php");
			}
			if(isset($_POST["no"])){
				header("Location:index.php");
			}
			
			echo '<br /><a href=index.php>Volver</a>';
		?>
	</body>
</html>