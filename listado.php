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
        <a href="">Enlace 1</a>
        <a href="">Enlace 2</a>
        <a href="">Enlace 3</a>
        <a href="">Enlace 4</a>
      </aside>
      <main>
        <h1>Listado de empleados</h1>
        <div>
          <?php
            include_once 'procesos.php';

            $procesos = new Procesos;
            $procesos->listar();

            echo '<br /><a href=index.php>Volver</a>'
          ?>
        </div>
      </main>
    </div>
    <footer>
      <h2>Pie de página</h2>
    </footer>
  </body>
</html>
