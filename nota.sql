-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-09-2021 a las 01:19:46
-- Versión del servidor: 8.0.23
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nota`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id_alumno` int NOT NULL AUTO_INCREMENT,
  `ap_paterno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_materno` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex_parcial` int NOT NULL,
  `ex_final` int NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `ap_paterno`, `ap_materno`, `nombre`, `ex_parcial`, `ex_final`) VALUES
(1, 'Martinez', 'Diaz', 'Daniel', 10, 16),
(2, 'Martins', 'Peregrino', 'Lidia', 7, 17),
(3, 'Csatro', 'Pol', 'Lewa', 12, 17),
(5, 'Messi', 'Andres', 'Lionel', 20, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

DROP TABLE IF EXISTS `t_usuario`;
CREATE TABLE IF NOT EXISTS `t_usuario` (
  `id_alumno` int NOT NULL AUTO_INCREMENT,
  `nombre_usu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_usu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`id_alumno`, `nombre_usu`, `password_usu`, `estado`) VALUES
(1, 'roy', '123', NULL),
(2, 'angel', '456', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
