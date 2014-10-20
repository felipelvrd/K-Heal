-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2014 a las 05:13:37
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kheal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hklcomentarios`
--

CREATE TABLE IF NOT EXISTS `hklcomentarios` (
`Id` int(11) NOT NULL COMMENT 'Id del comentario.',
  `Descripcion` text NOT NULL COMMENT 'Descripcion del comentario.',
  `IdTratamientos` int(11) NOT NULL COMMENT 'Id del tratamiento al cual pertenece el comentario.',
  `IdUsuario` int(11) NOT NULL COMMENT 'Id del usuario que realizo el comentario.',
  `Fecha` datetime NOT NULL COMMENT 'Fecha en que se publico el comentario.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla con los comentarios de los tratamientos publicados.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlenfermedades`
--

CREATE TABLE IF NOT EXISTS `khlenfermedades` (
`Id` int(11) NOT NULL COMMENT 'Id de la enfermedad.',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre de la enfermedad.',
  `TipoEnfermedad` varchar(50) DEFAULT NULL COMMENT 'Tipo de la enfermedad.',
  `Descripcion` text COMMENT 'Descripcion de la enfermedad.',
  `Diagnostico` text COMMENT 'Diagnostico de la enfermedad.',
  `Prevencion` text COMMENT 'Formas de prevenir la enfermedad.',
  `Familia` varchar(50) DEFAULT NULL COMMENT 'Familia de la enfermedad.',
  `Estado` varchar(1) NOT NULL COMMENT 'Estado de la enfermedad ''A''= Activa, ''I''=Inactiva.',
  `Sintomas` text COMMENT 'Sintomas que presenta la enfermedad.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Tabla con la lista de enfermedades.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlevaluacionescomentarios`
--

CREATE TABLE IF NOT EXISTS `khlevaluacionescomentarios` (
`Id` int(10) unsigned NOT NULL COMMENT 'Id de la evaluacion.',
  `IdUsuario` int(11) NOT NULL COMMENT 'Id del usuario que evaluo.',
  `IdComentario` int(11) NOT NULL COMMENT 'Id del comentario que se esta evaluando.',
  `TipoEvaluacion` varchar(1) NOT NULL COMMENT 'Tipo de evaluacion ''P''=Positiva, ''N''=Negativa.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla con las evaluaciones a los comentarios de los tratamientos.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlevaluacionestratamientos`
--

CREATE TABLE IF NOT EXISTS `khlevaluacionestratamientos` (
`Id` int(10) unsigned NOT NULL COMMENT 'Id de la evaluacion.',
  `idUsuario` int(11) NOT NULL COMMENT 'Id del usuario que evalua.',
  `idTratamiento` int(11) NOT NULL COMMENT 'Id del tratamiento evaluado.',
  `TipoEvaluacion` varchar(1) NOT NULL COMMENT 'Tipo de evaluacion ''P'' = Positiva, ''N'' = Negativa.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla con las evaluaciones a los tratamientos publicados.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlnotificaciones`
--

CREATE TABLE IF NOT EXISTS `khlnotificaciones` (
`Id` int(11) NOT NULL COMMENT 'Id de la notificacion.',
  `Fecha` datetime NOT NULL COMMENT 'Fecha de la notificacion.',
  `Estado` varchar(1) NOT NULL COMMENT 'Estado de la notificacion ''P'' = pendiente, ''L''=Leida.',
  `Descripcion` text COMMENT 'Descripcion de la notificacion.',
  `IdUsuario` int(11) NOT NULL COMMENT 'Id del usuario que pertenece la notificacion.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla con las notificaciones a los usuarios.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlsugerencias`
--

CREATE TABLE IF NOT EXISTS `khlsugerencias` (
`Id` int(11) NOT NULL COMMENT 'Id de la sugerencia.',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre de la enfermedad que se sugiere.',
  `Descripcion` text COMMENT 'Descripcion de la enfermedad que se sugiere.',
  `Fecha` datetime NOT NULL COMMENT 'Fecha en que se realizo la sugerencia.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla con las sugerencias a nuevas enfermedades.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khltratamientos`
--

CREATE TABLE IF NOT EXISTS `khltratamientos` (
`Id` int(11) NOT NULL COMMENT 'Id del tratamiento.',
  `IdUsuario` int(11) NOT NULL COMMENT 'Id del usuario que publico el tratamiento.',
  `IdEnfermedad` int(11) NOT NULL COMMENT 'Id de la enfermedad que pertenece el tratamiento.',
  `Descripcion` text COMMENT 'Descripcion del tratamiento.',
  `CantidadVisitas` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Cantidad de visitas que ha recibido el tratamiento.',
  `Fecha` datetime NOT NULL COMMENT 'Fecha en que se publico el tratamiento.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Tabla con los tratamientos de las enfermedades' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlusuarios`
--

CREATE TABLE IF NOT EXISTS `khlusuarios` (
`Id` int(11) NOT NULL COMMENT 'Id del usuario.',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre del usuario.',
  `Correo` varchar(50) NOT NULL COMMENT 'Correo electronico del usuario.',
  `Contrasena` varchar(256) NOT NULL COMMENT 'Contraseña del usuario.',
  `Rol` varchar(1) NOT NULL COMMENT 'Rol del usuario ''U''=Usuario normal, ''A''=Administrador.',
  `Estado` varchar(1) NOT NULL COMMENT 'Estado del usuario ''A''=Activo, ''I''=Inactivo(Baneado).',
  `Avatar` varchar(100) DEFAULT NULL COMMENT 'Url del avatar del usuario.',
  `Telefono` varchar(20) DEFAULT NULL COMMENT 'Numero de telefono del usuario.',
  `PaginaWeb` varchar(100) DEFAULT NULL COMMENT 'Url de la pagina web del usuario.',
  `Facebook` varchar(100) DEFAULT NULL COMMENT 'Url del perfil de facebook del usuario.'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabla con los usuarios del sistema.' AUTO_INCREMENT=24 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hklcomentarios`
--
ALTER TABLE `hklcomentarios`
 ADD PRIMARY KEY (`Id`), ADD KEY `FK_hklcomentarios_1` (`IdTratamientos`), ADD KEY `FK_hklcomentarios_2` (`IdUsuario`);

--
-- Indices de la tabla `khlenfermedades`
--
ALTER TABLE `khlenfermedades`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Index_1` (`Nombre`) USING BTREE;

--
-- Indices de la tabla `khlevaluacionescomentarios`
--
ALTER TABLE `khlevaluacionescomentarios`
 ADD PRIMARY KEY (`Id`) USING BTREE, ADD UNIQUE KEY `Index_4` (`IdUsuario`,`IdComentario`), ADD KEY `FK_khlevaluacionescomentarios_2` (`IdComentario`);

--
-- Indices de la tabla `khlevaluacionestratamientos`
--
ALTER TABLE `khlevaluacionestratamientos`
 ADD PRIMARY KEY (`Id`) USING BTREE, ADD UNIQUE KEY `Index_4` (`idTratamiento`,`idUsuario`), ADD KEY `FK_khlevaluacionestratamientos_2` (`idUsuario`);

--
-- Indices de la tabla `khlnotificaciones`
--
ALTER TABLE `khlnotificaciones`
 ADD PRIMARY KEY (`Id`), ADD KEY `FK_khlnotificaciones_1` (`IdUsuario`);

--
-- Indices de la tabla `khlsugerencias`
--
ALTER TABLE `khlsugerencias`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `khltratamientos`
--
ALTER TABLE `khltratamientos`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Index_1` (`IdUsuario`,`IdEnfermedad`) USING BTREE, ADD KEY `FK_khltratamientos_1` (`IdEnfermedad`);

--
-- Indices de la tabla `khlusuarios`
--
ALTER TABLE `khlusuarios`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hklcomentarios`
--
ALTER TABLE `hklcomentarios`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del comentario.';
--
-- AUTO_INCREMENT de la tabla `khlenfermedades`
--
ALTER TABLE `khlenfermedades`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la enfermedad.';
--
-- AUTO_INCREMENT de la tabla `khlevaluacionescomentarios`
--
ALTER TABLE `khlevaluacionescomentarios`
MODIFY `Id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la evaluacion.';
--
-- AUTO_INCREMENT de la tabla `khlevaluacionestratamientos`
--
ALTER TABLE `khlevaluacionestratamientos`
MODIFY `Id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la evaluacion.';
--
-- AUTO_INCREMENT de la tabla `khlnotificaciones`
--
ALTER TABLE `khlnotificaciones`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la notificacion.';
--
-- AUTO_INCREMENT de la tabla `khlsugerencias`
--
ALTER TABLE `khlsugerencias`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la sugerencia.';
--
-- AUTO_INCREMENT de la tabla `khltratamientos`
--
ALTER TABLE `khltratamientos`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del tratamiento.';
--
-- AUTO_INCREMENT de la tabla `khlusuarios`
--
ALTER TABLE `khlusuarios`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del usuario.',AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hklcomentarios`
--
ALTER TABLE `hklcomentarios`
ADD CONSTRAINT `FK_hklcomentarios_1` FOREIGN KEY (`IdTratamientos`) REFERENCES `khltratamientos` (`Id`),
ADD CONSTRAINT `FK_hklcomentarios_2` FOREIGN KEY (`IdUsuario`) REFERENCES `khlusuarios` (`Id`);

--
-- Filtros para la tabla `khlevaluacionescomentarios`
--
ALTER TABLE `khlevaluacionescomentarios`
ADD CONSTRAINT `FK_khlevaluacionescomentarios_1` FOREIGN KEY (`IdUsuario`) REFERENCES `khlusuarios` (`Id`),
ADD CONSTRAINT `FK_khlevaluacionescomentarios_2` FOREIGN KEY (`IdComentario`) REFERENCES `hklcomentarios` (`Id`);

--
-- Filtros para la tabla `khlevaluacionestratamientos`
--
ALTER TABLE `khlevaluacionestratamientos`
ADD CONSTRAINT `FK_khlevaluacionestratamientos_1` FOREIGN KEY (`idTratamiento`) REFERENCES `khltratamientos` (`Id`),
ADD CONSTRAINT `FK_khlevaluacionestratamientos_2` FOREIGN KEY (`idUsuario`) REFERENCES `khlusuarios` (`Id`);

--
-- Filtros para la tabla `khlnotificaciones`
--
ALTER TABLE `khlnotificaciones`
ADD CONSTRAINT `FK_khlnotificaciones_1` FOREIGN KEY (`IdUsuario`) REFERENCES `khlusuarios` (`Id`);

--
-- Filtros para la tabla `khltratamientos`
--
ALTER TABLE `khltratamientos`
ADD CONSTRAINT `FK_khltratamientos_1` FOREIGN KEY (`IdEnfermedad`) REFERENCES `khlenfermedades` (`Id`),
ADD CONSTRAINT `FK_khltratamientos_2` FOREIGN KEY (`IdUsuario`) REFERENCES `khlusuarios` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
