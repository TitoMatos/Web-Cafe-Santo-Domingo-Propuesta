-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-11-2022 a las 20:37:44
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cafe_santo_domingo`
--
CREATE DATABASE IF NOT EXISTS `db_cafe_santo_domingo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_cafe_santo_domingo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `idmensaje` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  PRIMARY KEY (`idmensaje`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`idmensaje`, `nombre`, `correo`, `tema`, `mensaje`) VALUES
(1, 'Tito Daniel Matos Perozo', 'titomatos-0@hotmail.com', '1', 'Soy muy fan del cafÃ© que producen, me gustarÃ­a saber mÃ¡s del proceso de fabricaciÃ³n.'),
(2, 'Laura Martinez', 'lauramartinez-0@gmail.com', '1', 'Un mensaje radom para completar la base de datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptores`
--

DROP TABLE IF EXISTS `suscriptores`;
CREATE TABLE IF NOT EXISTS `suscriptores` (
  `idsuscriptores` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  PRIMARY KEY (`idsuscriptores`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `suscriptores`
--

INSERT INTO `suscriptores` (`idsuscriptores`, `nombre`, `correo`, `telefono`, `direccion`) VALUES
(1, 'Tito Daniel Matos Perozo', 'titomatos-0@hotmail.com', '809 000 0000', 'Autopista Las Americas'),
(2, 'Laura Martinez', 'lauramartez@gmail.com', '809 111 1111', 'Autopista Puerca Braba');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
