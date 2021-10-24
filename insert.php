<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="juanjo carrasco">
    <link rel="stylesheet" href="listado.css">
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
        <h1>Listado de empleados</h1>
        <div>
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
        </div>
      </main>
    </div>
    <footer>
      <h2>Pie de página</h2>
    </footer>
  </body>
</html>
