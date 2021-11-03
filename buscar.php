<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="juanjo carrasco">
    <link rel="stylesheet" href="./listado.css">
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
        <h1>Buscar empleado</h1>
        <div>
          <form method='POST'>
            <div>
              <label for='dni'>DNI:</label>
              <input type='text' name='dni' />
              <input type="submit" name=buscar value='Buscar' />
            </div>
          </form>
					<?php
						include_once 'procesos.php';

						$procesos = new Procesos;
            if(isset($_POST["buscar"])){
              $procesos->buscar($_POST["dni"]);
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
