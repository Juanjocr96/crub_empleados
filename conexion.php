<?php
	class Conexion{
		function __construct(){
			$this->servidorbd = 'localhost';
			$this->usuario = 'root';
			$this->contraseña = '';
			$this->basedatos = 'bdempleados';
			
			$this->mysqli = new mysqli($this->servidorbd, $this->usuario, $this->contraseña, $this->basedatos);
		}
		function consultar($consulta){
			$resultado = $this->mysqli->query($consulta);
			echo $this->mysqli->error;
			return $resultado;
		}
	}
?>