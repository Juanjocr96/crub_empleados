<?php
  if($_GET["op"]=='nuevo')
      header('Location:/crub_empleados/insert.php');
  if($_GET["op"]=='mod')
      header('Location:/crub_empleados/modificar.php?id='.$_GET["id"]);
 ?>
