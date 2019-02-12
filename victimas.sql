-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2019 a las 20:48:48
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `victimas`
--
CREATE DATABASE IF NOT EXISTS `victimas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `victimas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caratulas`
--

DROP TABLE IF EXISTS `caratulas`;
CREATE TABLE `caratulas` (
  `id` int(10) UNSIGNED NOT NULL,
  `caso_id` int(11) DEFAULT NULL,
  `delito_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caratulas`
--

INSERT INTO `caratulas` (`id`, `caso_id`, `delito_id`) VALUES
(1, 8, 38),
(2, 8, 40),
(3, 8, 42),
(4, 8, 69),
(5, 8, 70),
(6, 8, 71),
(7, 8, 72),
(8, 9, 38),
(9, 9, 40),
(10, 9, 43),
(11, 9, 72),
(12, 10, 38),
(13, 11, 38),
(14, 11, 39),
(15, 11, 40),
(16, 11, 41),
(17, 11, 42),
(18, 12, 38),
(19, 12, 39),
(20, 13, 38),
(21, 13, 39),
(22, 13, 71),
(23, 13, 72),
(24, 14, 38),
(25, 14, 39),
(26, 15, 38),
(27, 15, 39),
(28, 16, 38),
(29, 16, 39),
(30, 16, 40),
(31, 17, 44),
(32, 17, 45),
(33, 17, 46),
(34, 18, 38),
(35, 18, 41),
(36, 19, 38),
(37, 19, 42),
(38, 20, 38),
(39, 20, 39),
(40, 21, 38),
(41, 21, 39),
(42, 22, 38),
(43, 22, 39),
(44, 23, 38),
(45, 23, 39),
(46, 24, 38),
(47, 24, 39),
(48, 25, 38),
(49, 25, 39),
(50, 26, 38),
(51, 26, 39),
(52, 27, 38),
(53, 27, 39),
(54, 28, 38),
(55, 28, 39),
(56, 29, 38),
(57, 29, 39),
(58, 29, 40),
(59, 30, 38),
(60, 30, 39),
(61, 31, 38),
(62, 32, 38),
(63, 32, 39),
(64, 33, 38),
(65, 33, 40),
(66, 33, 42),
(67, 34, 38),
(68, 34, 39),
(69, 35, 38),
(70, 35, 39),
(71, 36, 38),
(72, 36, 39),
(73, 38, 38),
(74, 38, 39),
(75, 40, 47),
(76, 41, 38),
(77, 42, 38),
(78, 43, 38),
(79, 44, 38),
(80, 45, 38),
(81, 46, 38),
(82, 47, 38),
(83, 48, 38),
(84, 49, 38),
(85, 49, 39),
(86, 50, 38),
(87, 50, 39),
(88, 50, 40),
(89, 51, 41),
(90, 51, 42),
(91, 51, 43),
(92, 52, 38),
(93, 52, 39),
(94, 53, 38),
(95, 54, 38),
(96, 55, 38),
(97, 55, 39),
(98, 55, 40),
(99, 57, 38),
(100, 57, 39),
(101, 57, 40),
(102, 58, 38),
(103, 58, 39),
(104, 58, 40),
(105, 59, 38),
(106, 60, 38),
(107, 61, 38),
(108, 62, 38),
(109, 62, 39),
(110, 64, 38),
(111, 64, 39),
(112, 65, 38),
(113, 65, 39),
(114, 65, 40),
(115, 71, 38),
(116, 72, 38),
(117, 73, 38),
(118, 73, 39),
(119, 73, 40),
(120, 74, 38),
(121, 75, 38),
(122, 75, 39),
(123, 75, 40),
(124, 76, 38),
(125, 76, 39),
(126, 77, 38),
(127, 77, 39),
(128, 78, 38),
(129, 78, 45),
(130, 78, 49),
(131, 79, 38),
(132, 79, 39),
(133, 79, 40),
(134, 82, 38),
(135, 82, 39),
(136, 82, 40),
(137, 84, 38),
(138, 84, 39),
(139, 84, 40),
(140, 85, 38),
(141, 85, 39),
(142, 85, 40),
(143, 86, 38),
(144, 86, 39),
(145, 1, 38),
(146, 1, 38),
(147, 2, 38),
(148, 2, 39),
(149, 2, 40),
(150, 3, 38),
(151, 3, 39),
(152, 4, 38),
(153, 4, 39),
(154, 4, 40),
(155, 5, 38),
(156, 5, 43),
(157, 5, 46),
(158, 5, 49),
(159, 6, 44),
(160, 6, 45),
(161, 6, 46),
(162, 6, 47),
(163, 6, 48),
(164, 6, 49),
(165, 7, 38),
(166, 7, 39),
(167, 8, 38),
(168, 8, 39),
(169, 8, 40),
(170, 9, 38),
(171, 9, 39),
(172, 10, 38),
(173, 10, 39),
(174, 10, 40),
(175, 11, 38),
(176, 11, 39),
(177, 12, 38),
(178, 12, 39),
(179, 13, 45),
(180, 13, 46),
(181, 13, 47),
(182, 14, 38),
(183, 14, 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

DROP TABLE IF EXISTS `casos`;
CREATE TABLE `casos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_ad` timestamp NULL DEFAULT NULL,
  `updated_ad` timestamp NULL DEFAULT NULL,
  `nombre_referencia` varchar(255) DEFAULT NULL,
  `descripcion_caso` varchar(255) DEFAULT NULL,
  `fecha_ingreso` timestamp NULL DEFAULT NULL,
  `modalidad_ingreso` int(11) DEFAULT NULL,
  `organismos` int(11) DEFAULT NULL,
  `cual_otro_organismo` varchar(255) DEFAULT NULL,
  `fiscalia_juzgado` varchar(255) DEFAULT NULL,
  `causa_id_judicial` int(11) DEFAULT NULL,
  `comisaria` varchar(255) DEFAULT NULL,
  `denuncias_previas` int(11) DEFAULT NULL,
  `departamento_judicial` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `nombre_y_apellido_de_la_victima` varchar(255) DEFAULT NULL,
  `motivospasivos` int(11) DEFAULT NULL,
  `cual_otro_motivospasivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casos`
--

INSERT INTO `casos` (`id`, `created_ad`, `updated_ad`, `nombre_referencia`, `descripcion_caso`, `fecha_ingreso`, `modalidad_ingreso`, `organismos`, `cual_otro_organismo`, `fiscalia_juzgado`, `causa_id_judicial`, `comisaria`, `denuncias_previas`, `departamento_judicial`, `estado`, `nombre_y_apellido_de_la_victima`, `motivospasivos`, `cual_otro_motivospasivo`) VALUES
(1, NULL, NULL, 'nombre victima', 'breve desp', '2019-02-09 03:00:00', 1, NULL, NULL, 'amamamam', 123, 'com', 1, 10, 0, NULL, 2, NULL),
(2, NULL, NULL, 'nombreeeeeeeeeeeee', 'breve desp', '2019-02-09 03:00:00', 1, NULL, NULL, 'amamamam', 123, 'com', 2, 9, 1, 'NOMBRE V', NULL, NULL),
(3, NULL, NULL, 'maria ester', 'breve', '2019-02-09 03:00:00', 1, NULL, NULL, 'amamam', 1234, 'comi', 1, 7, 1, 'mario luis', NULL, NULL),
(4, NULL, NULL, 'marta sandra', 'BREVE DESCRIPCION', '2019-02-12 03:00:00', 3, 14, 'OTRO ORGANISMO', 'FISCALIA', 12345, 'COMISARIA', 1, 12, 2, 'NOMBRE VICTIMA', 4, 'OTRO MOTIVO PASIVO'),
(5, NULL, NULL, 'CASO CINCO', 'BREVE CASO CINCO', '2019-02-10 03:00:00', 2, NULL, NULL, 'FISCALIA JUZGADO', 12345, 'COMISARIA CINCO', 1, 14, 1, 'NOMBRE VICTIMA CINCO', NULL, NULL),
(6, NULL, NULL, 'VICTIMA SEIS', 'BREVE SEIS', '2019-02-10 03:00:00', 3, 14, 'OTRO ORGANISMO', 'FISCALIA', 1234, 'COMI SEIS', 1, 7, 2, 'NOMBRE Y APELLIDO VICTIMA SEIS', 2, NULL),
(7, NULL, NULL, 'VICTIMA SIETE', 'BREVE SIETE', '2019-02-10 03:00:00', 1, NULL, NULL, 'FISCALIA', 1234, 'COMI SIETE', 1, 7, 1, 'NOMBRE VICTIMA SIETE', NULL, NULL),
(8, NULL, NULL, 'CASO OCHO', 'BREVE CASO OCHO', '2019-02-10 03:00:00', 3, 14, 'CUAL OTRO', 'FISCALIA', 123, 'COM OCHO', 1, 5, 1, 'VICTIMA OCHO', NULL, NULL),
(9, NULL, NULL, 'CASO NUEVE', 'BREVE CASO NUEVE', '2019-02-10 03:00:00', 2, NULL, NULL, 'FISCALIA', 123, 'COM NUEVE', 1, 14, 1, 'VICTIMA NUEVE', NULL, NULL),
(10, NULL, NULL, 'CASO MIRTA SAENZ', 'BREVE DESCRIPCION', '2019-02-01 03:00:00', 2, NULL, NULL, 'FISCALIA', 123, 'COMISARIA', 1, 12, 1, 'MIRTA SAENZ', NULL, NULL),
(11, NULL, NULL, 'JUAN MOLINA', 'BREVE', '2019-02-10 03:00:00', 1, NULL, NULL, 'FISCALIA', 123, 'COMISARIA', 1, 11, 1, 'JOSE MOLINA', NULL, NULL),
(12, NULL, NULL, 'jose perez', 'breve', '2019-02-10 03:00:00', 2, NULL, NULL, 'fiscalia', 12345, 'comisaria', 1, 16, 1, 'ismael perez', NULL, NULL),
(13, NULL, NULL, 'CASO TRECE', 'BREVE DESCRIP', '2019-02-11 03:00:00', 1, NULL, NULL, 'FISCALIA', 123, 'COMISARIA TRECE', 1, 13, 1, 'NOMBRE VICTIMA TRECE', NULL, NULL),
(14, NULL, NULL, 'kamamam', 'bbbbbbbbbbbbb', '2019-02-19 03:00:00', 1, NULL, NULL, 'ggggggggggggg', 123, 'cnmmmmmm', 1, 12, 1, 'nnnnnnnnnnnnn', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso_cavaj`
--

DROP TABLE IF EXISTS `caso_cavaj`;
CREATE TABLE `caso_cavaj` (
  `id` int(10) UNSIGNED NOT NULL,
  `caso_id` int(11) DEFAULT NULL,
  `cavaj_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caso_cavaj`
--

INSERT INTO `caso_cavaj` (`id`, `caso_id`, `cavaj_id`) VALUES
(1, 28, 1),
(2, 29, 1),
(3, 29, 2),
(4, 29, 3),
(5, 30, 1),
(6, 30, 2),
(7, 30, 3),
(8, 31, 1),
(9, 31, 2),
(10, 32, 1),
(11, 32, 2),
(12, 33, 1),
(13, 33, 2),
(14, 33, 3),
(15, 33, 4),
(16, 33, 5),
(17, 34, 1),
(18, 34, 2),
(19, 35, 1),
(20, 35, 2),
(21, 36, 1),
(22, 36, 2),
(23, 38, 1),
(24, 40, 1),
(25, 41, 1),
(26, 42, 7),
(27, 42, 8),
(28, 43, 7),
(29, 43, 8),
(30, 44, 1),
(31, 45, 11),
(32, 46, 1),
(33, 47, 1),
(34, 48, 1),
(35, 49, 12),
(36, 49, 13),
(37, 50, 1),
(38, 50, 2),
(39, 50, 3),
(40, 51, 12),
(41, 51, 13),
(42, 51, 14),
(43, 52, 1),
(44, 52, 2),
(45, 53, 1),
(46, 53, 2),
(47, 54, 1),
(48, 54, 2),
(49, 55, 1),
(50, 55, 2),
(51, 55, 3),
(52, 57, 1),
(53, 57, 2),
(54, 57, 3),
(55, 58, 1),
(56, 58, 2),
(57, 58, 3),
(58, 59, 1),
(59, 60, 1),
(60, 61, 1),
(61, 62, 1),
(62, 62, 2),
(63, 64, 1),
(64, 65, 12),
(65, 65, 13),
(66, 71, 1),
(67, 72, 1),
(68, 73, 1),
(69, 73, 2),
(70, 74, 12),
(71, 74, 13),
(72, 75, 1),
(73, 75, 2),
(74, 75, 3),
(75, 76, 1),
(76, 77, 1),
(77, 78, 1),
(78, 78, 2),
(79, 78, 5),
(80, 79, 1),
(81, 79, 2),
(82, 79, 3),
(83, 82, 1),
(84, 82, 2),
(85, 82, 3),
(86, 84, 1),
(87, 84, 2),
(88, 84, 3),
(89, 85, 1),
(90, 85, 2),
(91, 86, 1),
(92, 86, 2),
(93, 1, 1),
(94, 1, 1),
(95, 1, 2),
(96, 2, 1),
(97, 2, 2),
(98, 3, 1),
(99, 3, 2),
(100, 3, 3),
(101, 4, 1),
(102, 4, 2),
(103, 4, 3),
(104, 5, 1),
(105, 5, 4),
(106, 5, 5),
(107, 6, 1),
(108, 6, 2),
(109, 6, 3),
(110, 6, 4),
(111, 6, 5),
(112, 6, 6),
(113, 7, 1),
(114, 7, 2),
(115, 8, 1),
(116, 8, 2),
(117, 9, 1),
(118, 9, 2),
(119, 10, 1),
(120, 10, 2),
(121, 11, 1),
(122, 11, 2),
(123, 12, 1),
(124, 12, 2),
(125, 12, 3),
(126, 13, 1),
(127, 13, 2),
(128, 13, 3),
(129, 13, 4),
(130, 13, 5),
(131, 14, 1),
(132, 14, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cavajs`
--

DROP TABLE IF EXISTS `cavajs`;
CREATE TABLE `cavajs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cavajs`
--

INSERT INTO `cavajs` (`id`, `nombre`) VALUES
(1, 'Sede Central (La Plata)  '),
(2, 'Morón '),
(3, 'Azul '),
(4, 'Pergamino '),
(5, 'Bahía Blanca '),
(6, 'Pilar '),
(7, 'Ezeiza '),
(8, 'Pinamar '),
(9, 'Lanús '),
(10, 'Quilmes '),
(11, 'Lomas de Zamora '),
(12, 'San Fernando '),
(13, 'Los Toldos '),
(14, 'San Martín '),
(15, 'Mar del Plata '),
(16, 'Tandil '),
(17, 'Mercedes '),
(18, 'Vicente López '),
(19, 'Moreno '),
(20, 'Zárate '),
(21, 'José C. Paz '),
(22, 'Almirante Brown '),
(23, 'La Matanza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delitos`
--

DROP TABLE IF EXISTS `delitos`;
CREATE TABLE `delitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `delitos`
--

INSERT INTO `delitos` (`id`, `nombre`) VALUES
(38, ' Abandono de persona'),
(39, ' Abuso sexual'),
(40, ' Abuso sexual seguido de muerte'),
(41, ' Acoso sexual'),
(42, ' Amenazas'),
(43, ' Averiguación de causales de muerte'),
(44, ' Bullying'),
(45, ' Catástrofes naturales'),
(46, ' Desaparición de personas'),
(47, ' Femicidio'),
(48, ' Femicidio indirecto'),
(49, ' Grooming'),
(50, ' Homicidio '),
(51, ' Instigación o ayuda al suicidio'),
(52, ' Lesiones '),
(53, ' Pornografía de menores'),
(54, ' Privación ilegal de la libertad '),
(55, ' Promoción y facilitación de corrupción de menores'),
(56, ' Promoción y facilitación de prostitución de mayores'),
(57, ' Promoción y facilitación de prostitución de menores'),
(58, ' Reducción a la servidumbre'),
(59, ' Robo agravado'),
(60, ' Robo seguido de muerte (criminis causa, art. 80 inc. 7)'),
(61, ' Secuestro'),
(62, ' Secuestro seguido de muerte'),
(63, ' Siniestro vial'),
(64, ' Suicidio '),
(65, ' Tentativa de homicidio'),
(66, ' Tentativa de suicidio'),
(67, ' Tortura'),
(68, ' Usurpación'),
(69, ' Violencia de género'),
(70, ' Violencia en espectáculos deportivos '),
(71, ' Violencia institucional'),
(72, ' Violencia familiar'),
(73, ' Cuál');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE `departamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(1, 'Azul'),
(2, 'Bahía Blanca'),
(3, 'Dolores'),
(4, 'General San Martín '),
(5, 'Junín '),
(6, 'La Matanza '),
(7, 'La Plata '),
(8, 'Lomas de Zamora '),
(9, 'Mar del Plata '),
(10, 'Mercedes Moreno - General Rodríguez '),
(11, 'Morón '),
(12, 'Necochea '),
(13, 'Pergamino '),
(14, 'Quilmes '),
(15, 'San Isidro '),
(16, 'San Nicolás '),
(17, 'Trenque '),
(18, 'Lauquen '),
(19, 'Zárate - Campana'),
(20, 'Sede Central (La Plata)  '),
(21, 'Morón '),
(22, 'Azul '),
(23, 'Pergamino '),
(24, 'Bahía Blanca '),
(25, '7Pilar '),
(26, 'Ezeiza '),
(27, 'Pinamar '),
(28, 'Lanús '),
(29, 'Quilmes '),
(30, 'Lomas de Zamora '),
(31, 'San Fernando '),
(32, 'Los Toldos '),
(33, 'San Martín '),
(34, 'Mar del Plata '),
(35, 'Tandil '),
(36, 'Mercedes '),
(37, 'Vicente López '),
(38, 'Moreno '),
(39, 'Zárate '),
(40, 'José C. Paz '),
(41, 'Almirante Brown '),
(42, 'La Matanza'),
(43, 'Sede Central (La Plata)'),
(44, 'Sede Central-La Plata'),
(45, 'Sede Central La Plata'),
(46, 'La Plata'),
(47, 'Sede Central (La Plata)  '),
(48, 'Morón '),
(49, 'Azul '),
(50, 'Pergamino '),
(51, 'Bahía Blanca '),
(52, '7Pilar '),
(53, 'Ezeiza '),
(54, 'Pinamar '),
(55, 'Lanús '),
(56, 'Quilmes '),
(57, 'Lomas de Zamora '),
(58, 'San Fernando '),
(59, 'Los Toldos '),
(60, 'San Martín '),
(61, 'Mar del Plata '),
(62, 'Tandil '),
(63, 'Mercedes '),
(64, 'Vicente López '),
(65, 'Moreno '),
(66, 'Zárate '),
(67, 'José C. Paz '),
(68, 'Almirante Brown '),
(69, 'La Matanza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidades`
--

DROP TABLE IF EXISTS `discapacidades`;
CREATE TABLE `discapacidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `discapacidades`
--

INSERT INTO `discapacidades` (`id`, `nombre`) VALUES
(1, 'Físico/Motriz'),
(2, 'Intelectual/Adaptativo'),
(3, 'Psíquica'),
(4, 'Sensorial'),
(5, 'No'),
(6, 'Se desconoce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `limitaciones`
--

DROP TABLE IF EXISTS `limitaciones`;
CREATE TABLE `limitaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `limitaciones`
--

INSERT INTO `limitaciones` (`id`, `nombre`) VALUES
(1, 'Analfabetismo'),
(2, 'Discapacidad'),
(3, 'Idioma'),
(4, 'No'),
(5, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidades`
--

DROP TABLE IF EXISTS `modalidades`;
CREATE TABLE `modalidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modalidades`
--

INSERT INTO `modalidades` (`id`, `nombre`) VALUES
(1, 'Presentación espontánea'),
(2, 'Intervención de oficio'),
(3, 'Derivación de otro organismo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivospasivos`
--

DROP TABLE IF EXISTS `motivospasivos`;
CREATE TABLE `motivospasivos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `motivospasivos`
--

INSERT INTO `motivospasivos` (`id`, `nombre`) VALUES
(1, 'Se cubrió la demanda inicial'),
(2, 'deja de requerir intervención'),
(3, 'imposibilidad de contacto '),
(4, 'cuál');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `necesidades`
--

DROP TABLE IF EXISTS `necesidades`;
CREATE TABLE `necesidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `necesidades`
--

INSERT INTO `necesidades` (`id`, `nombre`) VALUES
(1, 'Vivienda'),
(2, 'Alimentos'),
(3, 'Capacidad Económica'),
(4, 'Salud'),
(5, 'Vestimenta'),
(6, 'Educación'),
(7, 'Trabajo'),
(8, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organismos`
--

DROP TABLE IF EXISTS `organismos`;
CREATE TABLE `organismos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organismos`
--

INSERT INTO `organismos` (`id`, `nombre`) VALUES
(1, 'ANSES'),
(2, 'Centro de Acceso a Justicia (CAJ)'),
(3, 'Cerca de Noche'),
(4, 'Comisaría'),
(5, 'DDI'),
(6, 'Defensoría del Pueblo'),
(7, 'Dirección Provincial de Equidad de Género y Diversidad Sexual'),
(8, 'Dirección Provincial de Salud Mental y Adicciones'),
(9, 'Equipo territorial de barrios'),
(10, 'Estado en Tu Barrio'),
(11, 'Fiscalía'),
(12, 'Juzgado'),
(13, 'Municipio'),
(14, 'Organismo Provincial de Niñez y Adolescencia'),
(15, 'Otro CAVAJ'),
(16, 'OTRO'),
(17, 'Policía Bonaerense'),
(18, 'Policía Federal'),
(19, 'Policía Local'),
(20, 'Policía Metropolitana'),
(21, 'Portal Mi Provincia'),
(22, 'Programa Provincial Cerca de Noche'),
(23, 'Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)'),
(24, 'Unidad de Ministro (Ministerio de Justicia)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_persona_asistida` varchar(255) DEFAULT NULL,
  `vinculo_persona_asistida` int(11) DEFAULT NULL,
  `otro_vinculo_persona_asistida_cual` varchar(255) DEFAULT NULL,
  `telefono_persona_asistida` int(11) DEFAULT NULL,
  `domicilio_persona_asistida` varchar(255) DEFAULT NULL,
  `localidad_persona_asistida` varchar(255) DEFAULT NULL,
  `idCaso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre_persona_asistida`, `vinculo_persona_asistida`, `otro_vinculo_persona_asistida_cual`, `telefono_persona_asistida`, `domicilio_persona_asistida`, `localidad_persona_asistida`, `idCaso`) VALUES
(1, 'nombre', 2, NULL, 123, 'dom', '1', 65),
(2, 'nombre y apellido', 4, NULL, 123, 'domi', '5', 65),
(3, 'NOMBRE Y APELLIDO', 3, NULL, 123, 'DOMICI', '4', 72),
(4, 'marieos', 2, NULL, 123, 'dom', '3', 73),
(5, 'alkslsl', 3, NULL, 123, 'domicilio', '2', 73),
(6, 'lalala', 3, NULL, 123, 'dom', '4', 73),
(7, 'nombre', 2, NULL, 123, 'domic', '3', 73),
(8, 'lolplp', 2, NULL, 123, 'd', '7', 74),
(9, 'llll', 2, NULL, 123, 'kolp', '8', 74),
(10, 'persona2', 3, NULL, 123456, 'dom2', '2', 74),
(11, 'persona3', 2, NULL, 12345, 'dom3', '3', 74),
(12, NULL, NULL, NULL, NULL, NULL, NULL, 74),
(13, 'mas personas', 2, NULL, 123456, 'dom5', '4', 74),
(14, 'persona 10', 1, NULL, 1234, 'domicilio10', '10', 74),
(15, 'persona11', 3, NULL, 1234, 'domicilio11', '11', 74),
(16, 'persona12', 2, NULL, 123, 'domicilio12', '12', 74),
(17, 'persona77', 3, NULL, 123, 'domicilio77', '77', 77),
(18, 'nueva persona', 2, NULL, 123, 'domi', '90', 77),
(19, 'otra persona', 3, NULL, 123, 'domi otra', '1', 77),
(20, 'PERSONA 20', 3, NULL, 1234, 'DOMI 20', '20', 77),
(21, 'nuevo nombre y apellido', 2, NULL, 123, 'dom', '4', 78),
(22, 'persona asistida', 2, NULL, 123, 'dom', '1', 79),
(23, 'PERSONA ASISTIDA', 2, NULL, 12345, 'DOMICILIO', '7', 79),
(24, 'persona 24', 2, NULL, 4567, 'domicilio', '4', 79),
(25, 'DE BREVE', 2, NULL, 1234, 'DOM', '12', 82),
(26, 'BREVE', 4, NULL, 1234, 'DOMI', '7', 82),
(27, 'PRUEBA CUAL', 4, NULL, 4567, 'DOM', '5', 82),
(28, 'malalala', 4, 'PRUEBA CUAL OTRO', 89000, 'DOMI', '7', 82),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'MM', 3, NULL, 123, 'DOMICILIO', '4', 84),
(32, 'MMM', 1, NULL, 123, 'DOMI', '4', 79),
(33, 'NN', 2, NULL, 123, 'DOM', '3', 86),
(34, NULL, NULL, NULL, NULL, NULL, NULL, 86),
(35, 'NN', 2, NULL, 123, 'DOM', '3', 86),
(36, NULL, NULL, NULL, NULL, NULL, NULL, 86),
(37, 'persona', 3, NULL, 1234, 'domi', '2', 86),
(38, NULL, NULL, NULL, NULL, NULL, NULL, 86),
(39, 'PERSONA NUEVA', 3, NULL, 123, 'DOMICILIO NUEVO', '3', 86),
(40, NULL, NULL, NULL, NULL, NULL, NULL, 86),
(41, NULL, NULL, NULL, NULL, NULL, NULL, 86),
(42, NULL, NULL, NULL, NULL, NULL, NULL, 86),
(43, 'ULTIMA PERSONA', 4, 'OTRO VINCULO', 123, 'DOMI', '10', 86),
(44, 'PRIMERA PERSONA ASISTIDA', 2, NULL, 123, 'DOMI', '1', 2),
(45, 'pablo luis', 4, 'cual otro', 123, 'domi', '1', 3),
(46, 'luis miguel', 2, NULL, 123, 'domi', '4', 3),
(47, '111111111111111', NULL, NULL, NULL, NULL, NULL, 3),
(48, 'prueba', 2, NULL, 123, 'dom', 'loc', 3),
(49, 'mamamamam', 4, 'CICICICI', 123456, 'DOMIC', 'LOCAL', 3),
(50, 'KCKCKCK', 1, NULL, 123, 'DOM', 'LOC', 3),
(51, 'PRUEBA HACIA PROF', 2, NULL, 12345, 'DOMICILIOOOOOOOOOOOOOOOOOO', 'LOCALIDADDDDDDDDDDDDDD', 3),
(52, 'PRUEBA NEW', 4, 'OTRO VINCULO', 12345, 'DOMICILIO DE CONTACTO', 'LOC', 3),
(53, 'NOMBRE PERSONA ASISTIDA CINCO', 4, 'OTRO VINCULO', 123, 'DOMI CINCO', 'LOCALIDAD CINCO', 4),
(54, 'persona', 4, 'otro cual', 1234, 'domi', 'loca', 5),
(55, 'NOMBRE SEIS', 4, 'OTRO VINCULO', 1234, 'DOMI SEIS', 'LOCA SEIS', 5),
(56, 'NOMBRE SEIS BIS', 4, 'OTRO VINCULO SEIS', 1234, 'DOMI SEIS BIS', 'LOCA SEIS BIS', 6),
(57, 'PERSONA ASISTIDA SIETE', 4, 'OTRO VINCULO SIETE', 123, 'DOMISIETE', 'LOCASIETE', 7),
(58, 'PERSONA ASISTIDA SIETEBIS', 4, 'OTRO VINCULO SIETEBIS', 12345, 'DOMI SIETEBIS', 'LOCASIETE', 7),
(59, 'PERSONA ASISTIDA TRES', 4, 'OTRO VINCULO TRES', 1234, 'DOMI TRES', 'LOCA TRES', 7),
(60, 'nombre', 4, 'otro vinculo', 123, 'domi', 'loca', 9),
(61, 'persona nueva', 4, 'otro v', 123, 'dom', 'loc', 9),
(62, 'persona 62', 4, 'otro v', 123, 'dom', 'loc', 9),
(63, 'persona 63', 4, 'cual otro', 123, 'dom', 'loc', 9),
(64, 'persona 64', 4, 'otroV', 123, 'dom', 'loc', 9),
(65, 'personaaaaaaaaaaaaaaaaaaassssssssssssss', 4, 'otrovinculo', 123, 'domiedit', 'locedit', 9),
(66, 'LORENA SAENZ', 4, 'VECINA', 1234, 'DOMICILIO', 'LOCALIDAD', 9),
(67, 'SANDRA SAENZ', 4, 'PRIMA', 123, 'DOMICILIO', 'LOCALIDAD', 10),
(68, 'PERSONA TRECE', 4, 'OTRO VINCULO', 123456, 'DOMIT13', 'LOCA13', 12),
(69, 'PERSONA TRECE BIS', 4, 'OTRO VINCULO', 1234, 'DOMI13BIS', 'LOCA13BIS', 13),
(70, 'mmmmmmmmmmmm', 4, 'kkkkkkkkkkkkk', 134, 'dom', 'lovc', 14),
(71, 'persona', 4, 'otro', 123344, 'dom', 'loc', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

DROP TABLE IF EXISTS `profesionales`;
CREATE TABLE `profesionales` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_profesional_interviniente` varchar(255) DEFAULT NULL,
  `desde_profesional_interviniente` datetime DEFAULT NULL,
  `actual_profesional_interviniente` int(11) DEFAULT NULL,
  `hasta_profesional_interviniente` datetime DEFAULT NULL,
  `idCaso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesionales`
--

INSERT INTO `profesionales` (`id`, `nombre_profesional_interviniente`, `desde_profesional_interviniente`, `actual_profesional_interviniente`, `hasta_profesional_interviniente`, `idCaso`) VALUES
(1, '16', '2019-02-09 00:00:00', 1, NULL, NULL),
(2, '1', '2019-02-04 00:00:00', 2, '2019-02-23 00:00:00', NULL),
(3, '3', '2019-02-06 00:00:00', 1, NULL, 82),
(4, '1', '2019-02-07 00:00:00', 1, NULL, 82),
(5, '4', '2019-02-06 00:00:00', 1, NULL, 82),
(6, '1', '2019-02-05 00:00:00', 1, NULL, 86),
(7, '12', '2019-02-07 00:00:00', 1, NULL, 86),
(8, NULL, NULL, NULL, NULL, 86),
(9, '12', '2019-02-07 00:00:00', 1, NULL, 86),
(10, '3', '2019-02-07 00:00:00', 2, '2019-02-08 00:00:00', 86),
(11, '14', '2019-02-08 00:00:00', 1, NULL, 86),
(12, '13', '2019-02-13 00:00:00', 1, NULL, 2),
(13, '6', '2019-02-13 00:00:00', 2, '2019-02-13 00:00:00', 3),
(14, '1', '2019-02-01 00:00:00', 2, '2019-02-10 00:00:00', 3),
(15, '15', '2019-02-11 00:00:00', 2, '2019-02-26 00:00:00', 5),
(16, '14', '2019-02-20 00:00:00', 2, '2019-02-10 00:00:00', 5),
(17, '12', '2019-02-10 00:00:00', 2, '2019-02-10 00:00:00', 6),
(18, '16', '2019-02-10 00:00:00', 2, '2019-02-10 00:00:00', 6),
(19, '5', '2019-02-10 00:00:00', 2, '2019-02-10 00:00:00', 7),
(20, '15', '2019-02-14 00:00:00', 2, '2019-02-10 00:00:00', 7),
(21, '13', '2019-02-10 00:00:00', 2, '2019-02-10 00:00:00', 10),
(22, '9', '2019-02-10 00:00:00', 2, '2019-02-10 00:00:00', 10),
(23, '17', '2019-02-10 00:00:00', 2, '2019-02-11 00:00:00', 13),
(24, '13', '2019-02-11 00:00:00', 2, '2019-02-11 00:00:00', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

DROP TABLE IF EXISTS `programas`;
CREATE TABLE `programas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `nombre`) VALUES
(1, 'Jubilación'),
(2, 'Asignación Universal por Hijo'),
(3, 'PROGRESAR'),
(4, 'Pensión'),
(5, 'Otro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caratulas`
--
ALTER TABLE `caratulas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `caso_cavaj`
--
ALTER TABLE `caso_cavaj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cavajs`
--
ALTER TABLE `cavajs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `delitos`
--
ALTER TABLE `delitos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `discapacidades`
--
ALTER TABLE `discapacidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `limitaciones`
--
ALTER TABLE `limitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalidades`
--
ALTER TABLE `modalidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivospasivos`
--
ALTER TABLE `motivospasivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `necesidades`
--
ALTER TABLE `necesidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organismos`
--
ALTER TABLE `organismos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caratulas`
--
ALTER TABLE `caratulas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT de la tabla `casos`
--
ALTER TABLE `casos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `caso_cavaj`
--
ALTER TABLE `caso_cavaj`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `cavajs`
--
ALTER TABLE `cavajs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `delitos`
--
ALTER TABLE `delitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `discapacidades`
--
ALTER TABLE `discapacidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `limitaciones`
--
ALTER TABLE `limitaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `modalidades`
--
ALTER TABLE `modalidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `motivospasivos`
--
ALTER TABLE `motivospasivos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `necesidades`
--
ALTER TABLE `necesidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `organismos`
--
ALTER TABLE `organismos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
