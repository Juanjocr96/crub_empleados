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
        <a href="./index.php">Gestión empleados</a>
        <a href="./insert.php">Añadir empleados</a>
        <a href="./buscar.php">Buscar empleado (DNI)</a>
        <a href="./buscarnombre.php">Buscar empleado (Nombre)</a>
      </aside>
      <main>
        <h1>Modificar datos</h1>
        <div>
					<?php
						include_once 'procesos.php';

						$procesos = new Procesos;
						$procesos->listar2($_GET["id"]);

						if(isset($_POST["modificar"])){
              if(empty($_POST["correo"])){
                $correo ='NULL';
                $consulta = 'UPDATE `empleados` SET dni= "'.$_POST["dni"].'",
                nombre= "'.$_POST["nombre"].'",
                correo= '.$correo.',
                telefono= "'.$_POST["telefono"].'" WHERE idEmpleado = '.$_GET["id"];
              }
              else{
                $consulta = 'UPDATE `empleados` SET dni= "'.$_POST["dni"].'",
                nombre= "'.$_POST["nombre"].'",
                correo= "'.$_POST["correo"].'",
                telefono= "'.$_POST["telefono"].'" WHERE idEmpleado = '.$_GET["id"];
              }
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
