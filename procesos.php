<?php
	include_once 'conexion.php';
	class Procesos{
		function __construct(){
			$this->conexion = new Conexion;
		}
		//METODO PARA CONSULTAR EMPLEADOS
		function listar(){
			$consulta = 'SELECT * FROM empleados';
			$resultado = $this->conexion->consultar($consulta);
			$numfila = $resultado->num_rows;
			if($numfila == 0)
				echo 'No hay empleados en la base de datos.'
			echo '<table>
					<th>
						<td>DNI</td>
						<td>Nombre</td>
						<td>Correo</td>
						<td>Teléfono</td>
						<td>Opcion</td>
						<td>Opcion</td>
					</th>'
				*/
			for($i=0;$i<$numfila;$i++){
				$fila = $resultado->fetch_array(MYSQLI_ASSOC);
				echo '<tr>
								<td>'.$fila["dni"].'</td>
								<td>'.$fila["nombre"].'</td>
								<td>'.$fila["correo"].'</td>
								<td>'.$fila["telefono"].'</td>
								<td><a href=modificar.php?id='.$fila["idEmpleado"].'>Modificar</a></td>
								<td><a href=borrar.php?id='.$fila["idEmpleado"].'>Borrar</a></td>
							</tr>';
			}
			echo '</table>'
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
					<div>
					<input type='submit' value='Modificar' name='modificar'/>
					</div>
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
