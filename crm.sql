-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2018 a las 00:02:23
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campain`
--

CREATE TABLE `campain` (
  `Id_campain` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Fecha_start` date NOT NULL,
  `Fecha_close` date NOT NULL,
  `Recaudacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_cliente`
--

CREATE TABLE `contacto_cliente` (
  `Id_Contacto` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Cuenta` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Telefono_ex` varchar(30) NOT NULL,
  `Celular` varchar(30) NOT NULL,
  `Fuente` varchar(30) NOT NULL,
  `fk_Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `Id_Contrato` int(11) NOT NULL,
  `Nombre_Cont` varchar(30) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Sig_paso` varchar(255) NOT NULL,
  `Fuente` varchar(60) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha_close` date NOT NULL,
  `Stage` varchar(30) NOT NULL,
  `Probabilidad` varchar(30) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `fk_Id_usuario` int(11) NOT NULL,
  `fk_Id_Contacto` int(11) NOT NULL,
  `fk_Id_campain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_cliente`
--

CREATE TABLE `cuenta_cliente` (
  `Id_Cuenta` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Numero_cuenta` varchar(30) NOT NULL,
  `Tipo_cuenta` varchar(30) NOT NULL,
  `Ingreso_anual` int(11) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Fax` varchar(30) NOT NULL,
  `Website` varchar(30) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Codigo_postal` varchar(30) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `fk_Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_empleados` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cedula` varchar(15) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Celular` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Cargo` varchar(30) NOT NULL,
  `Permiso` int(11) NOT NULL,
  `fk_Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pais` varchar(30) NOT NULL,
  `Cant_empleados` int(11) NOT NULL,
  `Dominio` varchar(50) NOT NULL,
  `Cargo` varchar(30) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Celular` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '0',
  `keyreg` varchar(120) NOT NULL DEFAULT '',
  `keypass` varchar(30) NOT NULL,
  `new_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campain`
--
ALTER TABLE `campain`
  ADD PRIMARY KEY (`Id_campain`);

--
-- Indices de la tabla `contacto_cliente`
--
ALTER TABLE `contacto_cliente`
  ADD PRIMARY KEY (`Id_Contacto`),
  ADD KEY `fk_Id_usuario` (`fk_Id_usuario`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`Id_Contrato`),
  ADD KEY `fk_Id_usuario` (`fk_Id_usuario`),
  ADD KEY `fk_Id_Contacto` (`fk_Id_Contacto`),
  ADD KEY `fk_Id_campain` (`fk_Id_campain`);

--
-- Indices de la tabla `cuenta_cliente`
--
ALTER TABLE `cuenta_cliente`
  ADD PRIMARY KEY (`Id_Cuenta`),
  ADD KEY `fk_Id_usuario` (`fk_Id_usuario`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_empleados`),
  ADD KEY `fk_Id_usuario` (`fk_Id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campain`
--
ALTER TABLE `campain`
  MODIFY `Id_campain` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto_cliente`
--
ALTER TABLE `contacto_cliente`
  MODIFY `Id_Contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `Id_Contrato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuenta_cliente`
--
ALTER TABLE `cuenta_cliente`
  MODIFY `Id_Cuenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_empleados` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto_cliente`
--
ALTER TABLE `contacto_cliente`
  ADD CONSTRAINT `contacto_cliente_usuarios_fk_id_usuario` FOREIGN KEY (`fk_Id_usuario`) REFERENCES `usuarios` (`Id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_campain_fk_id_campain` FOREIGN KEY (`fk_Id_campain`) REFERENCES `campain` (`Id_campain`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `contrato_contacto_cliente_fk_id_contacto` FOREIGN KEY (`fk_Id_Contacto`) REFERENCES `contacto_cliente` (`Id_Contacto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `contrato_usuarios_fk_id_usuario` FOREIGN KEY (`fk_Id_usuario`) REFERENCES `usuarios` (`Id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuenta_cliente`
--
ALTER TABLE `cuenta_cliente`
  ADD CONSTRAINT `cuenta_cliente_usuarios_fk_id_usuario` FOREIGN KEY (`fk_Id_usuario`) REFERENCES `usuarios` (`Id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_usuarios_fk_id_usuario` FOREIGN KEY (`fk_Id_usuario`) REFERENCES `usuarios` (`Id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
