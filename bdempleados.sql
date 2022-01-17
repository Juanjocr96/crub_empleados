CREATE DATABASE BDEmpleados;

CREATE TABLE empleados(
	idEmpleado tinyint unsigned PRIMARY KEY AUTO_INCREMENT NOT NULL,
	dni char(9) NOT NULL,
	nombre varchar(60) NOT NULL,
	correo varchar(80) NULL,
	telefono char(9) NOT NULL,
	UNIQUE(dni),
	UNIQUE(correo)
)