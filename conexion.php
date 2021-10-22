<?php
	class Conexion{
		function __construct(){
			$this->servidorbd = '2daw.esvirgua.com';
			$this->usuario = 'user2daw_09';
			$this->contraseña = '5r.a6+3d(i[+';
			$this->basedatos = 'user2daw_BD1-09';

			$this->mysqli = new mysqli($this->servidorbd, $this->usuario, $this->contraseña, $this->basedatos);
		}
		function consultar($consulta){
			$resultado = $this->mysqli->query($consulta);
			echo $this->mysqli->error;
			return $resultado;
		}
	}
?>
