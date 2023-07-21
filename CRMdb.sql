#  Creado con Kata Kuntur - Modelador de Datos
#  Versión: 2.5.4
#  Sitio Web: http://katakuntur.jeanmazuelos.com/
#  Si usted encuentra algún error le agradeceriamos lo reporte en:
#  http://pm.jeanmazuelos.com/katakuntur/issues/new

#  Administrador de Base de Datos: MySQL/MariaDB
#  Diagrama: WebCRM
#  Autor: pc
#  Fecha y hora: 05/07/2018 8:37:17

# GENERANDO TABLAS
CREATE TABLE `Usuarios` (
	`Id_usuario` INTEGER AUTO_INCREMENT NOT NULL,
	`Nombre` VARCHAR(30) NOT NULL,
	`Apellido` VARCHAR(30) NOT NULL,
	`Email` VARCHAR(30) NOT NULL,
	`Pais` VARCHAR(30) NOT NULL,
	`Cant_empleados` INTEGER NOT NULL,
	`Dominio` VARCHAR(50) NOT NULL,
	`Cargo` VARCHAR(30) NOT NULL,
	`Telefono` VARCHAR(30) NOT NULL,
	`Celular` VARCHAR(30) NOT NULL,
	`Password` VARCHAR(30) NOT NULL,
	PRIMARY KEY(`Id_usuario`)
) ENGINE=INNODB;
CREATE TABLE `Empleados` (
	`Id_empleados` INTEGER AUTO_INCREMENT NOT NULL,
	`Nombre` VARCHAR(30) NOT NULL,
	`Apellido` VARCHAR(30) NOT NULL,
	`Email` VARCHAR(50) NOT NULL,
	`Cedula` VARCHAR(15) NOT NULL,
	`Telefono` VARCHAR(20) NOT NULL,
	`Celular` VARCHAR(30) NOT NULL,
	`Direccion` VARCHAR(30) NOT NULL,
	`Password` VARCHAR(30) NOT NULL,
	`Cargo` VARCHAR(30) NOT NULL,
	`fk_Id_usuario` INTEGER NOT NULL,
	KEY(`fk_Id_usuario`),
	PRIMARY KEY(`Id_empleados`)
) ENGINE=INNODB;
CREATE TABLE `Cuenta_cliente` (
	`Id_Cuenta` INTEGER AUTO_INCREMENT NOT NULL,
	`Nombre` VARCHAR(30) NOT NULL,
	`Numero_cuenta` VARCHAR(30) NOT NULL,
	`Tipo_cuenta` VARCHAR(30) NOT NULL,
	`Ingreso_anual` INTEGER NOT NULL,
	`Telefono` VARCHAR(20) NOT NULL,
	`Fax` VARCHAR(30) NOT NULL,
	`Website` VARCHAR(30) NOT NULL,
	`Direccion` VARCHAR(50) NOT NULL,
	`Codigo_postal` VARCHAR(30) NOT NULL,
	`Description` VARCHAR(255) NOT NULL,
	`fk_Id_usuario` INTEGER NOT NULL,
	KEY(`fk_Id_usuario`),
	PRIMARY KEY(`Id_Cuenta`)
) ENGINE=INNODB;
CREATE TABLE `Contacto_cliente` (
	`Id_Contacto` INTEGER AUTO_INCREMENT NOT NULL,
	`Nombre` VARCHAR(30) NOT NULL,
	`Apellido` VARCHAR(30) NOT NULL,
	`Cuenta` VARCHAR(30) NOT NULL,
	`Email` VARCHAR(30) NOT NULL,
	`Telefono` VARCHAR(30) NOT NULL,
	`Telefono_ex` VARCHAR(30) NOT NULL,
	`Celular` VARCHAR(30) NOT NULL,
	`Fuente` VARCHAR(30) NOT NULL,
	`fk_Id_usuario` INTEGER NOT NULL,
	KEY(`fk_Id_usuario`),
	PRIMARY KEY(`Id_Contacto`)
) ENGINE=INNODB;
CREATE TABLE `Contrato` (
	`Id_Contrato` INTEGER AUTO_INCREMENT NOT NULL,
	`Nombre_Cont` VARCHAR(30) NOT NULL,
	`Tipo` VARCHAR(20) NOT NULL,
	`Sig_paso` VARCHAR(255) NOT NULL,
	`Fuente` VARCHAR(60) NOT NULL,
	`Cantidad` INTEGER NOT NULL,
	`Fecha_close` DATE NOT NULL,
	`Stage` VARCHAR(30) NOT NULL,
	`Probabilidad` VARCHAR(30) NOT NULL,
	`Descripcion` VARCHAR(255) NOT NULL,
	`fk_Id_usuario` INTEGER NOT NULL,
	KEY(`fk_Id_usuario`),
	`fk_Id_Contacto` INTEGER NOT NULL,
	KEY(`fk_Id_Contacto`),
	`fk_Id_campain` INTEGER NOT NULL,
	KEY(`fk_Id_campain`),
	PRIMARY KEY(`Id_Contrato`)
) ENGINE=INNODB;
CREATE TABLE `Campain` (
	`Id_campain` INTEGER AUTO_INCREMENT NOT NULL,
	`Nombre` VARCHAR(50) NOT NULL,
	`Estado` VARCHAR(20) NOT NULL,
	`Fecha_start` DATE NOT NULL,
	`Fecha_close` DATE NOT NULL,
	`Recaudacion` INTEGER NOT NULL,
	PRIMARY KEY(`Id_campain`)
) ENGINE=INNODB;

# GENERANDO RELACIONES
ALTER TABLE `Empleados` ADD CONSTRAINT `empleados_usuarios_fk_id_usuario` FOREIGN KEY (`fk_Id_usuario`) REFERENCES `Usuarios`(`Id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Cuenta_cliente` ADD CONSTRAINT `cuenta_cliente_usuarios_fk_id_usuario` FOREIGN KEY (`fk_Id_usuario`) REFERENCES `Usuarios`(`Id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Contacto_cliente` ADD CONSTRAINT `contacto_cliente_usuarios_fk_id_usuario` FOREIGN KEY (`fk_Id_usuario`) REFERENCES `Usuarios`(`Id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Contrato` ADD CONSTRAINT `contrato_usuarios_fk_id_usuario` FOREIGN KEY (`fk_Id_usuario`) REFERENCES `Usuarios`(`Id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Contrato` ADD CONSTRAINT `contrato_contacto_cliente_fk_id_contacto` FOREIGN KEY (`fk_Id_Contacto`) REFERENCES `Contacto_cliente`(`Id_Contacto`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Contrato` ADD CONSTRAINT `contrato_campain_fk_id_campain` FOREIGN KEY (`fk_Id_campain`) REFERENCES `Campain`(`Id_campain`) ON DELETE NO ACTION ON UPDATE CASCADE;