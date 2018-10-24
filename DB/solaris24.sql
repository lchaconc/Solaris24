-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-10-2018 a las 21:03:15
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solaris24`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

DROP TABLE IF EXISTS `archivos`;
CREATE TABLE IF NOT EXISTS `archivos` (
  `id_archivos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(64) NOT NULL,
  `descripcion` varchar(64) NOT NULL,
  `tipo` varchar(32) NOT NULL,
  `urlArchivo` varchar(64) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `correo` varchar(512) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_archivos`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id_archivos`, `titulo`, `descripcion`, `tipo`, `urlArchivo`, `nombre`, `correo`, `fecha`) VALUES
(6, 'Mano de bebé', 'Tierna mano de bebé con la de su mamá', 'mp4', '../../archivos_media/mp4/video1.mp4\r\n', 'Pedro Campos', 'pedro@correo.de', '2018-10-22 13:29:24'),
(7, 'Tinta en agua', 'Hermoso efecto de tinta desparramándose en agua', 'mp4', '../../archivos_media/mp4/video2.mp4\r\n', 'Jimena Mendoza', 'jime@correo.de', '2018-10-22 13:29:35'),
(8, 'Noticias', 'Noticias nacionales', 'lnk', 'https://www.nacion.com/', 'Pedro Campos', 'pedro@correo.de', '2018-10-22 20:41:34'),
(5, 'Good Starts', 'Melodía hermosa para meditar', 'mp3', '../../archivos_media/mp3/Good_Starts.mp3', 'Jimena Mendoza', 'jime@correo.de', '2018-10-22 20:41:41'),
(10, 'Race Car', 'Música para fondo de juego de carreras', 'mp3', '../../archivos_media/mp3/Race_Car.mp3\r\n', 'Jimena Mendoza', 'jime@correo.de', '2018-10-22 20:41:41'),
(4, 'Los cuatro Acuerdos', 'Un libro de sabiduría tolteca\r\n', 'pdf', '../../archivos_media/pdf/Los-Cuatro-Acuerdos.pdf\r\n', 'Pedro Campos', 'pedro@correo.de', '2018-10-22 20:41:41'),
(12, 'Teresita de Jesús', 'Historias de santos\r\n', 'pdf', '../../archivos_media/pdf/Teresita-de-Jesus-Manuscritos-com.pdf\r\n', 'Pedro Campos', 'pedro@correo.de', '2018-10-22 20:41:41'),
(39, 'ddede', 'xxx', 'img', '../../archivos_media/img/angry-red-bird-256.png', 'Pedro Campos', 'pedro@correo.de', '2018-10-24 20:18:31'),
(38, 'prueba', 'po', 'img', '../../archivos_media/img/Figura4.jpg', 'Pedro Campos', 'pedro@correo.de', '2018-10-24 20:16:17'),
(40, 'no rere', ' erererere', 'pdf', '../../archivos_media/pdf/31351151-HTML5-Canvas-Cheat-Sheet.pdf', 'Pedro Campos', 'pedro@correo.de', '2018-10-24 20:53:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `id_datos` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(128) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `opcion` varchar(128) NOT NULL,
  `notas` text NOT NULL,
  `texto1` varchar(256) NOT NULL,
  `texto2` varchar(256) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_datos`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id_datos`, `correo`, `nombre`, `opcion`, `notas`, `texto1`, `texto2`, `fecha`) VALUES
(8, 'lola@de-fr', 'ggggggg', '1', ' qw  ', '123', '456', '2018-10-18 17:25:36'),
(13, 'demo1@mep.go.cr', 'Grupo de programadores', '5', 'esta es una demo\r\nfsd\r\nfsd\r\nfsd', 't1', 't2', '2018-10-22 19:13:59'),
(14, 'sir@mep.go.cr', 'Sirlenita', '1', ' esta es una demo  esta es el campo editado', 'dasda 123', 'dasdas 456', '2018-10-24 20:50:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(64) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(256) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(128) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `password`, `tipo`) VALUES
(1, 'Pedro Campos', 'pedro@correo.de', 'pedro', 'Admin'),
(2, 'Jimena Mendoza', 'jime@correo.de', 'jime', 'Usuario');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
