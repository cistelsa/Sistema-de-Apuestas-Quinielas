-- Creamos la tabla si esta no existe
CREATE DATABASE IF NOT EXISTS gogol;

-- Indicamos que trabajaremos sobre la tabla 
-- recien creada
USE gogol;

-- Declaramos las tablas de nuestra DB

CREATE TABLE czqmd_apuestas_de_valor (
	`pin` INT(11) NOT NULL DEFAULT 0,
	`nombre` VARCHAR(100) NOT NULL,
	`email` VARCHAR(50) NOT NULL,
	`identificacion` VARCHAR(50) NOT NULL,
	`telefono` VARCHAR(50) NOT NULL,
	`edad` VARCHAR(50) NOT NULL,
	`terminos` VARCHAR(50) NOT NULL,
	`pagos` VARCHAR(50) NOT NULL,
	`partido1do` VARCHAR(50) NOT NULL,
	`partido2do` VARCHAR(50) NOT NULL,
	`partido3do` VARCHAR(50) NOT NULL,
	`partido1s` VARCHAR(50) NOT NULL,
	`partido1` VARCHAR(50) NOT NULL,
	`partido2` VARCHAR(50) NOT NULL,
	`partido3` VARCHAR(50) NOT NULL,
	`partido4` VARCHAR(50) NOT NULL,
	`partido5` VARCHAR(50) NOT NULL,
	`partido6` VARCHAR(50) NOT NULL,
	`partido7` VARCHAR(50) NOT NULL,
	`partido8` VARCHAR(50) NOT NULL,
	`fecha_apuesta` DATETIME NOT NULL
);

-- Creamos nuestro Usuario de gestión

CREATE USER 'gogol'@'localhost' IDENTIFIED BY 'Af161951e';
GRANT ALL PRIVILEGES ON gogol.* TO gogol@localhost;
FLUSH PRIVILEGES;