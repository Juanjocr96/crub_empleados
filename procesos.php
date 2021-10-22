<?php
	include_once 'conexion.php';
	class Procesos{
		function __construct(){
			$this->conexion = new Conexion;
		}
		//METODO PARA CONSULTAR EMPLEADOS
		function listar(){
			header("Location:./index.php");
			$consulta = 'SELECT * FROM empleados';
			$resultado = $this->conexion->consultar($consulta);
			$numfila = $resultado->num_rows;
			for($i=0;$i<$numfila;$i++){
				$fila = $resultado->fetch_array(MYSQLI_ASSOC);
				echo '<p>DNI: '.$fila["dni"].' Nombre: '.$fila["nombre"].' <a href=modificar.php?id='.$fila["idEmpleado"].'>Modificar</a>
				 <a href=borrar.php?id='.$fila["idEmpleado"].'>Borrar</a></p>';
			}
		}
		//METODO PARA DAR ALTA EMPLEADOS
		function alta($dni, $nombre, $correo, $telefono){
			$consulta = "INSERT INTO `empleados` (`idEmpleado`, `dni`, `nombre`, `correo`, `telefono`) VALUES
			 (NULL, '".$dni."', '".$nombre."', '".$correo."', '".$telefono."')";
			$this->conexion->consultar($consulta);
		}
		//METODO PARA MODDIFICAR EMPPLEADOS
		function listar2($id){
			$consulta = 'SELECT * FROM empleados WHERE idEmpleado = '.$id;
			$resultado = $this->conexion->consultar($consulta);
			$fila = $resultado->fetch_array(MYSQLI_ASSOC);

			echo "<form method='POST'>
					<div>
						<label for='dni'>DNI:</label>
						<input type='text' name='dni' value='".$fila["dni"]."'/>
					</div>
					<div>
						<label for='nombre'>Nombre:</label>
						<input type='text' name='nombre' value='".$fila["nombre"]."' />
					</div>
					<div>
						<label for='correo'>Correo:</label>
						<input type='text' name='correo' value='".$fila["correo"]."' />
					</div>
					<div>
						<label for='telefono'>Teléfono:</label>
						<input type='text' name='telefono' value='".$fila["telefono"]."' />
					</div>
					<input type='submit' value='Modificar' name='modificar'/>
				</form>";
		}
		function modificar($consulta){
			$this->conexion->consultar($consulta);
		}

		//METODO PARA BORRAR EMPLEADOS
		function borrar($id){
			$consulta = 'DELETE FROM empleados WHERE idEmpleado = '.$id;
			$this->conexion->consultar($consulta);
		}
	}
?>
