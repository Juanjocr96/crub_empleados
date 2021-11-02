<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="juanjo carrasco">
    <link rel="stylesheet" href="insert.css">
    <title>Boceto layouts</title>
  </head>
  <body>
    <header>
      <h1>Aplicación gestión de empleados</h1>
    </header>
    <nav>
      <h2>Menú navegación</h2>
    </nav>
    <div>
      <aside>
        <a href="./index.php">Listado emlpeados</a>
        <a href="./insert.php">Añadir empleado</a>
        <a href="">Enlace 3</a>
        <a href="">Enlace 4</a>
      </aside>
      <main>
        <h1>Modificar datos</h1>
        <div>
					<?php
						include_once 'procesos.php';

						$procesos = new Procesos;
						$procesos->listar2($_GET["id"]);

						if(isset($_POST["modificar"])){
						$consulta = 'UPDATE `empleados` SET dni= "'.$_POST["dni"].'",
            nombre= "'.$_POST["nombre"].'",
            correo= "'.$_POST["correo"].'",
            telefono= "'.$_POST["telefono"].'" WHERE idEmpleado = '.$_GET["id"];

            //$_POST[correo]= NULLIF('".$_POST['"correo"']."', '');

            $procesos->modificar($consulta);
            }
						?>
    	</div>
    </main>
    </div>
    <footer>
      <h2>Pie de página</h2>
    </footer>
  </body>
</html>
