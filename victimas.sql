# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.34-MariaDB)
# Base de datos: victimas
# Tiempo de Generación: 2019-02-27 15:27:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla administrativos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `administrativos`;

CREATE TABLE `administrativos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_y_apellido` varchar(255) DEFAULT NULL,
  `sede` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `administrativos` WRITE;
/*!40000 ALTER TABLE `administrativos` DISABLE KEYS */;

INSERT INTO `administrativos` (`id`, `nombre_y_apellido`, `sede`, `area`, `email`)
VALUES
	(1,'Martín IGLESIA-ADMINISTRATIVO','BAHIA BLANCA','ADMINISTRATIVO','iglesiabraun@hotmail.com.ar'),
	(2,'Agustín BEJARANO-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','elbeca_81@hotmail.com'),
	(3,'Agustina Soledad DE ANDREIS-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','deandreisagustina@gmail.com'),
	(4,'Lucía DE ANTONI-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','ludeantoni@hotmail.com'),
	(5,' María Carolina GASSULL-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','carogassull@gmail.com'),
	(6,'Dante Bautista GUILIANI-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','dantegiu@yahoo.com.ar'),
	(7,'Martín Darío MAC LOUGHLIN-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','macloughlinmartin@gmail.com'),
	(8,'Sebastián  MACUCHO-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','slommac@hotmail.com'),
	(9,'Agustín MONTONE-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','agus_montone@hotmail.com'),
	(10,'Héctor Rubén PELLEGRINI-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','cuchipellegrini@hotmail.com'),
	(11,'Maria Guadalupe SOSA-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','cpvconsultadir@gmail.com'),
	(12,'Paula STROPPOLO-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','paustroppolo25@hotmail.com'),
	(13,'Jacqueline Melina SULAS-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','meelinasulasguzman@gmail.com'),
	(14,'María Alejandra ARRIETA-ADMINISTRATIVA','LOMAS Z.','ADMINISTRATIVA','malearrieta76@hotmail.com'),
	(15,'Mónica DI MAURO-ADMINISTRATIVA','MAR DEL PLATA','ADMINISTRATIVA','monidimauro@hotmail.com'),
	(16,'Malena PEREZ SOTO-ADMINISTRATIVA','MORON','ADMINISTRATIVA','malenap_@hotmail.com'),
	(17,'CAROLINA PALACIOS-ADMINISTRATIVA','QUILMES','ADMINISTRATIVA','palacios669@hotmail.com'),
	(18,'María Inés DAVERIO-ADMINISTRATIVA','SAN FERNANDO','ADMINISTRATIVA','midaverio@hotmail.com'),
	(19,'Verónica SORIANO-ADMINISTRATIVA','SAN FERNANDO','ADMINISTRATIVA','veronicasoriano@yahoo.com'),
	(20,'Lorena MAGISTA-ADMINISTRATIVA','SAN MARTIN','ADMINISTRATIVA','loremagista@gmail.com');

/*!40000 ALTER TABLE `administrativos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla caratulas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `caratulas`;

CREATE TABLE `caratulas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caso_id` int(11) DEFAULT NULL,
  `delito_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `caratulas` WRITE;
/*!40000 ALTER TABLE `caratulas` DISABLE KEYS */;

INSERT INTO `caratulas` (`id`, `caso_id`, `delito_id`)
VALUES
	(1,8,38),
	(2,8,40),
	(3,8,42),
	(4,8,69),
	(5,8,70),
	(6,8,71),
	(7,8,72),
	(8,9,38),
	(9,9,40),
	(10,9,43),
	(11,9,72),
	(12,10,38),
	(13,11,38),
	(14,11,39),
	(15,11,40),
	(16,11,41),
	(17,11,42),
	(18,12,38),
	(19,12,39),
	(20,13,38),
	(21,13,39),
	(22,13,71),
	(23,13,72),
	(24,14,38),
	(25,14,39),
	(26,15,38),
	(27,15,39),
	(28,16,38),
	(29,16,39),
	(30,16,40),
	(31,17,44),
	(32,17,45),
	(33,17,46),
	(34,18,38),
	(35,18,41),
	(36,19,38),
	(37,19,42),
	(38,20,38),
	(39,20,39),
	(40,21,38),
	(41,21,39),
	(42,22,38),
	(43,22,39),
	(44,23,38),
	(45,23,39),
	(46,24,38),
	(47,24,39),
	(48,25,38),
	(49,25,39),
	(50,26,38),
	(51,26,39),
	(52,27,38),
	(53,27,39),
	(54,28,38),
	(55,28,39),
	(56,29,38),
	(57,29,39),
	(58,29,40),
	(59,30,38),
	(60,30,39),
	(61,31,38),
	(62,32,38),
	(63,32,39),
	(64,33,38),
	(65,33,40),
	(66,33,42),
	(67,34,38),
	(68,34,39),
	(69,35,38),
	(70,35,39),
	(71,36,38),
	(72,36,39),
	(73,38,38),
	(74,38,39),
	(75,40,47),
	(76,41,38),
	(77,42,38),
	(78,43,38),
	(79,44,38),
	(80,45,38),
	(81,46,38),
	(82,47,38),
	(83,48,38),
	(84,49,38),
	(85,49,39),
	(86,50,38),
	(87,50,39),
	(88,50,40),
	(89,51,41),
	(90,51,42),
	(91,51,43),
	(92,52,38),
	(93,52,39),
	(94,53,38),
	(95,54,38),
	(96,55,38),
	(97,55,39),
	(98,55,40),
	(99,57,38),
	(100,57,39),
	(101,57,40),
	(102,58,38),
	(103,58,39),
	(104,58,40),
	(105,59,38),
	(106,60,38),
	(107,61,38),
	(108,62,38),
	(109,62,39),
	(110,64,38),
	(111,64,39),
	(112,65,38),
	(113,65,39),
	(114,65,40),
	(115,71,38),
	(116,72,38),
	(117,73,38),
	(118,73,39),
	(119,73,40),
	(120,74,38),
	(121,75,38),
	(122,75,39),
	(123,75,40),
	(124,76,38),
	(125,76,39),
	(126,77,38),
	(127,77,39),
	(128,78,38),
	(129,78,45),
	(130,78,49),
	(131,79,38),
	(132,79,39),
	(133,79,40),
	(134,82,38),
	(135,82,39),
	(136,82,40),
	(137,84,38),
	(138,84,39),
	(139,84,40),
	(140,85,38),
	(141,85,39),
	(142,85,40),
	(143,86,38),
	(144,86,39),
	(145,1,38),
	(146,1,38),
	(147,2,38),
	(148,2,39),
	(149,2,40),
	(150,3,38),
	(151,3,39),
	(152,4,38),
	(153,4,39),
	(154,4,40),
	(155,5,38),
	(156,5,43),
	(157,5,46),
	(158,5,49),
	(159,6,44),
	(160,6,45),
	(161,6,46),
	(162,6,47),
	(163,6,48),
	(164,6,49),
	(165,7,38),
	(166,7,39),
	(167,8,38),
	(168,8,39),
	(169,8,40),
	(170,9,38),
	(171,9,39),
	(172,10,38),
	(173,10,39),
	(174,10,40),
	(175,11,38),
	(176,11,39),
	(177,12,38),
	(178,12,39),
	(179,13,45),
	(180,13,46),
	(181,13,47),
	(182,14,38),
	(183,14,39),
	(184,21,42),
	(185,21,44),
	(186,21,45),
	(187,22,42),
	(188,22,44),
	(189,22,45),
	(190,23,43),
	(191,23,47),
	(192,23,63),
	(193,24,59),
	(194,24,61),
	(195,25,38),
	(196,25,39),
	(197,25,40),
	(198,26,38),
	(199,26,40),
	(200,26,41),
	(201,26,42),
	(202,27,38),
	(203,27,39),
	(204,27,40),
	(205,28,38),
	(206,28,39),
	(207,28,40),
	(208,29,38),
	(209,29,39),
	(210,30,38),
	(211,30,39),
	(212,31,38),
	(213,31,39),
	(214,31,40),
	(215,32,38),
	(216,32,39),
	(217,32,40),
	(218,33,38),
	(219,33,39),
	(220,34,38),
	(221,34,39),
	(222,34,40),
	(223,36,38),
	(224,36,39),
	(225,37,38),
	(226,37,39),
	(227,37,40),
	(228,38,38),
	(229,38,39),
	(230,43,38),
	(231,43,39),
	(232,43,40),
	(233,52,38),
	(234,52,39),
	(235,52,40),
	(236,53,38),
	(237,53,39),
	(238,53,40),
	(239,54,38),
	(240,54,39),
	(241,54,40),
	(242,55,38),
	(243,55,39),
	(244,66,38),
	(245,66,39),
	(246,67,38),
	(247,67,39),
	(248,68,38),
	(249,68,39),
	(250,69,38),
	(251,69,39),
	(252,70,38),
	(253,70,39),
	(254,71,38),
	(255,71,39),
	(256,75,38),
	(257,75,39),
	(258,76,38),
	(259,76,39),
	(260,78,38),
	(261,78,39),
	(262,79,38),
	(263,79,39),
	(264,80,38),
	(265,80,39),
	(266,80,40),
	(267,81,38),
	(268,81,39),
	(269,82,38),
	(270,82,39),
	(271,83,38),
	(272,83,39),
	(273,83,40),
	(274,85,38),
	(275,85,40),
	(276,87,40),
	(277,87,43),
	(278,88,47),
	(279,88,70),
	(280,89,41),
	(281,89,44),
	(282,90,43),
	(283,90,46),
	(284,91,39),
	(285,91,43),
	(286,92,39),
	(287,92,40),
	(288,93,38),
	(289,93,39),
	(290,94,38),
	(291,94,40),
	(292,95,44),
	(293,95,45),
	(294,96,39),
	(295,96,43),
	(296,97,38),
	(297,97,39),
	(298,97,40),
	(299,98,40),
	(300,98,43),
	(301,99,40),
	(302,99,41),
	(303,100,39),
	(304,100,41),
	(305,101,38),
	(306,101,39),
	(307,101,40),
	(308,102,39),
	(309,102,40),
	(310,102,41),
	(311,102,42),
	(312,103,43),
	(313,103,44),
	(314,104,41),
	(315,104,44),
	(316,105,40),
	(317,105,45),
	(318,105,62),
	(319,105,69),
	(320,106,39),
	(321,106,40),
	(322,106,47),
	(323,106,49),
	(324,107,48),
	(325,107,58);

/*!40000 ALTER TABLE `caratulas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla caso_cavaj
# ------------------------------------------------------------

DROP TABLE IF EXISTS `caso_cavaj`;

CREATE TABLE `caso_cavaj` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caso_id` int(11) DEFAULT NULL,
  `cavaj_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `caso_cavaj` WRITE;
/*!40000 ALTER TABLE `caso_cavaj` DISABLE KEYS */;

INSERT INTO `caso_cavaj` (`id`, `caso_id`, `cavaj_id`)
VALUES
	(1,28,1),
	(2,29,1),
	(3,29,2),
	(4,29,3),
	(5,30,1),
	(6,30,2),
	(7,30,3),
	(8,31,1),
	(9,31,2),
	(10,32,1),
	(11,32,2),
	(12,33,1),
	(13,33,2),
	(14,33,3),
	(15,33,4),
	(16,33,5),
	(17,34,1),
	(18,34,2),
	(19,35,1),
	(20,35,2),
	(21,36,1),
	(22,36,2),
	(23,38,1),
	(24,40,1),
	(25,41,1),
	(26,42,7),
	(27,42,8),
	(28,43,7),
	(29,43,8),
	(30,44,1),
	(31,45,11),
	(32,46,1),
	(33,47,1),
	(34,48,1),
	(35,49,12),
	(36,49,13),
	(37,50,1),
	(38,50,2),
	(39,50,3),
	(40,51,12),
	(41,51,13),
	(42,51,14),
	(43,52,1),
	(44,52,2),
	(45,53,1),
	(46,53,2),
	(47,54,1),
	(48,54,2),
	(49,55,1),
	(50,55,2),
	(51,55,3),
	(52,57,1),
	(53,57,2),
	(54,57,3),
	(55,58,1),
	(56,58,2),
	(57,58,3),
	(58,59,1),
	(59,60,1),
	(60,61,1),
	(61,62,1),
	(62,62,2),
	(63,64,1),
	(64,65,12),
	(65,65,13),
	(66,71,1),
	(67,72,1),
	(68,73,1),
	(69,73,2),
	(70,74,12),
	(71,74,13),
	(72,75,1),
	(73,75,2),
	(74,75,3),
	(75,76,1),
	(76,77,1),
	(77,78,1),
	(78,78,2),
	(79,78,5),
	(80,79,1),
	(81,79,2),
	(82,79,3),
	(83,82,1),
	(84,82,2),
	(85,82,3),
	(86,84,1),
	(87,84,2),
	(88,84,3),
	(89,85,1),
	(90,85,2),
	(91,86,1),
	(92,86,2),
	(93,1,1),
	(94,1,1),
	(95,1,2),
	(96,2,1),
	(97,2,2),
	(98,3,1),
	(99,3,2),
	(100,3,3),
	(101,4,1),
	(102,4,2),
	(103,4,3),
	(104,5,1),
	(105,5,4),
	(106,5,5),
	(107,6,1),
	(108,6,2),
	(109,6,3),
	(110,6,4),
	(111,6,5),
	(112,6,6),
	(113,7,1),
	(114,7,2),
	(115,8,1),
	(116,8,2),
	(117,9,1),
	(118,9,2),
	(119,10,1),
	(120,10,2),
	(121,11,1),
	(122,11,2),
	(123,12,1),
	(124,12,2),
	(125,12,3),
	(126,13,1),
	(127,13,2),
	(128,13,3),
	(129,13,4),
	(130,13,5),
	(131,14,1),
	(132,14,2),
	(133,21,2),
	(134,22,2),
	(135,23,5),
	(136,23,10),
	(137,24,2),
	(138,24,3),
	(139,25,1),
	(140,25,2),
	(141,25,3),
	(142,26,1),
	(143,26,2),
	(144,26,3),
	(145,27,1),
	(146,27,2),
	(147,28,1),
	(148,28,2),
	(149,28,3),
	(150,29,1),
	(151,29,2),
	(152,30,1),
	(153,30,2),
	(154,31,1),
	(155,31,2),
	(156,31,3),
	(157,32,1),
	(158,32,2),
	(159,33,1),
	(160,33,2),
	(161,34,1),
	(162,34,2),
	(163,36,7),
	(164,36,8),
	(165,36,9),
	(166,37,1),
	(167,37,2),
	(168,37,3),
	(169,38,1),
	(170,38,2),
	(171,38,3),
	(172,43,1),
	(173,43,2),
	(174,52,1),
	(175,52,2),
	(176,53,1),
	(177,53,2),
	(178,54,1),
	(179,54,2),
	(180,54,3),
	(181,55,1),
	(182,55,2),
	(183,55,3),
	(184,66,1),
	(185,66,2),
	(186,67,1),
	(187,67,2),
	(188,68,1),
	(189,68,2),
	(190,69,1),
	(191,70,1),
	(192,70,2),
	(193,71,1),
	(194,71,2),
	(195,75,1),
	(196,75,2),
	(197,76,1),
	(198,76,2),
	(199,78,1),
	(200,78,2),
	(201,79,1),
	(202,79,2),
	(203,80,1),
	(204,80,2),
	(205,80,3),
	(206,81,1),
	(207,81,2),
	(208,82,1),
	(209,82,2),
	(210,83,1),
	(211,83,2),
	(212,83,3),
	(213,85,5),
	(214,87,11),
	(215,87,14),
	(216,88,4),
	(217,88,6),
	(218,89,13),
	(219,89,20),
	(220,89,23),
	(221,90,4),
	(222,90,7),
	(223,91,1),
	(224,91,11),
	(225,91,16),
	(226,92,3),
	(227,92,5),
	(228,93,3),
	(229,93,5),
	(230,94,1),
	(231,94,4),
	(232,95,1),
	(233,95,2),
	(234,96,6),
	(235,97,1),
	(236,97,2),
	(237,97,3),
	(238,98,8),
	(239,98,10),
	(240,99,1),
	(241,100,2),
	(242,100,4),
	(243,101,1),
	(244,101,2),
	(245,101,3),
	(246,102,5),
	(247,102,9),
	(248,103,1),
	(249,103,2),
	(250,104,5),
	(251,104,8),
	(252,105,5),
	(253,105,10),
	(254,106,10),
	(255,106,14),
	(256,107,4),
	(257,107,7);

/*!40000 ALTER TABLE `caso_cavaj` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla casos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `casos`;

CREATE TABLE `casos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_ad` timestamp NULL DEFAULT NULL,
  `updated_ad` timestamp NULL DEFAULT NULL,
  `nombre_referencia` varchar(255) DEFAULT NULL,
  `descripcion_caso` varchar(255) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
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
  `cual_otro_motivospasivo` varchar(255) DEFAULT NULL,
  `usuarios` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `casos` WRITE;
/*!40000 ALTER TABLE `casos` DISABLE KEYS */;

INSERT INTO `casos` (`id`, `created_ad`, `updated_ad`, `nombre_referencia`, `descripcion_caso`, `fecha_ingreso`, `modalidad_ingreso`, `organismos`, `cual_otro_organismo`, `fiscalia_juzgado`, `causa_id_judicial`, `comisaria`, `denuncias_previas`, `departamento_judicial`, `estado`, `nombre_y_apellido_de_la_victima`, `motivospasivos`, `cual_otro_motivospasivo`, `usuarios`)
VALUES
	(1,NULL,NULL,'nombre victima','breve desp','2019-02-09 00:00:00',1,NULL,NULL,'amamamam',123,'com',1,10,0,NULL,2,NULL,NULL),
	(2,NULL,NULL,'nombreeeeeeeeeeeee','breve desp','2019-02-09 00:00:00',1,NULL,NULL,'amamamam',123,'com',2,9,1,'NOMBRE V',NULL,NULL,NULL),
	(3,NULL,NULL,'maria ester','breve','2019-02-09 00:00:00',1,NULL,NULL,'amamam',1234,'comi',1,7,1,'mario luis',NULL,NULL,NULL),
	(4,NULL,NULL,'marta sandra','BREVE DESCRIPCION','2019-02-12 00:00:00',3,14,'OTRO ORGANISMO','FISCALIA',12345,'COMISARIA',1,12,2,'NOMBRE VICTIMA',4,'OTRO MOTIVO PASIVO',NULL),
	(5,NULL,NULL,'CASO CINCO','BREVE CASO CINCO','2019-02-10 00:00:00',2,NULL,NULL,'FISCALIA JUZGADO',12345,'COMISARIA CINCO',1,14,1,'NOMBRE VICTIMA CINCO',NULL,NULL,NULL),
	(6,NULL,NULL,'VICTIMA SEIS','BREVE SEIS','2019-02-10 00:00:00',3,14,'OTRO ORGANISMO','FISCALIA',1234,'COMI SEIS',1,7,2,'NOMBRE Y APELLIDO VICTIMA SEIS',2,NULL,NULL),
	(7,NULL,NULL,'VICTIMA SIETE','BREVE SIETE','2019-02-10 00:00:00',1,NULL,NULL,'FISCALIA',1234,'COMI SIETE',1,7,1,'NOMBRE VICTIMA SIETE',NULL,NULL,NULL),
	(8,NULL,NULL,'CASO OCHO','BREVE CASO OCHO','2019-02-10 00:00:00',3,14,'CUAL OTRO','FISCALIA',123,'COM OCHO',1,5,1,'VICTIMA OCHO',NULL,NULL,NULL),
	(9,NULL,NULL,'CASO NUEVE','BREVE CASO NUEVE','2019-02-10 00:00:00',2,NULL,NULL,'FISCALIA',123,'COM NUEVE',1,14,1,'VICTIMA NUEVE',NULL,NULL,NULL),
	(10,NULL,NULL,'CASO MIRTA SAENZ','BREVE DESCRIPCION','2019-02-01 00:00:00',2,NULL,NULL,'FISCALIA',123,'COMISARIA',1,12,1,'MIRTA SAENZ',NULL,NULL,NULL),
	(11,NULL,NULL,'JUAN MOLINA','BREVE','2019-02-10 00:00:00',1,NULL,NULL,'FISCALIA',123,'COMISARIA',1,11,1,'JOSE MOLINA',NULL,NULL,NULL),
	(12,NULL,NULL,'jose perez','breve','2019-02-10 00:00:00',2,NULL,NULL,'fiscalia',12345,'comisaria',1,16,1,'ismael perez',NULL,NULL,NULL),
	(13,NULL,NULL,'CASO TRECE','BREVE DESCRIP','2019-02-11 00:00:00',1,NULL,NULL,'FISCALIA',123,'COMISARIA TRECE',1,13,1,'NOMBRE VICTIMA TRECE',NULL,NULL,NULL),
	(14,NULL,NULL,'kamamam','bbbbbbbbbbbbb','2019-02-19 00:00:00',1,NULL,NULL,'ggggggggggggg',123,'cnmmmmmm',1,12,1,'nnnnnnnnnnnnn',NULL,NULL,NULL),
	(15,NULL,NULL,'Eugenia','dwdw','2019-02-03 00:00:00',1,NULL,NULL,'dddd',5555,'ddddd',2,17,1,'karina',NULL,NULL,NULL),
	(16,NULL,NULL,'Eugenia','dwdw','2019-02-03 00:00:00',1,NULL,NULL,'dddd',5555,'ddddd',2,17,1,'karina',NULL,NULL,NULL),
	(17,NULL,NULL,'Eugenia','dwdw','2019-02-03 00:00:00',1,NULL,NULL,'dddd',5555,'ddddd',2,17,1,'karina',NULL,NULL,NULL),
	(18,NULL,NULL,'Eugenia','dwdw','2019-02-03 00:00:00',1,NULL,NULL,'dddd',5555,'ddddd',2,17,1,'karina',NULL,NULL,NULL),
	(19,NULL,NULL,'Lucky','fefefefe','2019-02-03 00:00:00',1,NULL,NULL,'eeeeeeee',111,'dadad',1,18,1,'laura',NULL,NULL,NULL),
	(20,NULL,NULL,'Lucky','fefefefe','2019-02-03 00:00:00',1,NULL,NULL,'eeeeeeee',111,'dadad',1,18,1,'laura',NULL,NULL,NULL),
	(21,NULL,NULL,'Lucky','fefefefe','2019-02-03 00:00:00',1,NULL,NULL,'eeeeeeee',111,'dadad',1,18,1,'laura',NULL,NULL,NULL),
	(22,NULL,NULL,'Lucky','fefefefe','2019-02-03 00:00:00',1,NULL,NULL,'eeeeeeee',111,'dadad',1,18,1,'laura',NULL,NULL,NULL),
	(23,NULL,NULL,'Roberta','murio','2019-01-22 00:00:00',1,NULL,NULL,'errr',123,'string',2,17,1,'hola',NULL,NULL,NULL),
	(24,NULL,NULL,'Aldo','un caso feo','2019-02-03 00:00:00',2,NULL,NULL,'sarasa',2,'casa',2,18,1,'sarasa',NULL,NULL,NULL),
	(25,NULL,NULL,'CASO NUEVO','BREVE','2019-02-12 00:00:00',2,NULL,NULL,'FIS',123,'COM',1,17,1,'MARIA',NULL,NULL,NULL),
	(26,NULL,NULL,'caspveintiseis','breve','2019-02-12 00:00:00',2,NULL,NULL,'fiscalia',123,'com',1,10,1,'VICTIMA',NULL,NULL,NULL),
	(27,NULL,NULL,'CASOCASO','BREVE CASO','2019-02-13 00:00:00',2,NULL,NULL,'FISCALIA',1234,'COM',1,10,1,'NOMBRE VICTIMA',NULL,NULL,NULL),
	(28,NULL,NULL,'CASOCASOCASO','BREVE CASO','2019-02-13 00:00:00',1,NULL,NULL,'FISCA',123,'COM',1,16,1,'NOMBRE VICTIMA',NULL,NULL,NULL),
	(29,NULL,NULL,'MARIA ESTER','BREVE','2019-02-13 00:00:00',1,NULL,NULL,'FISCALIA',1234,'COM',1,13,1,'MARIA ESTER L',NULL,NULL,NULL),
	(30,NULL,NULL,'lalalla','BREVE','2019-02-13 00:00:00',1,NULL,NULL,'FISC',123,'COM',2,18,1,'NOMBRE',NULL,NULL,NULL),
	(31,NULL,NULL,'EUGE-LUCKY','BREVE','2019-02-12 00:00:00',2,NULL,NULL,'FISCALIA',123,'COMI',1,2,1,'NOMBRE VICTIMA',NULL,NULL,NULL),
	(32,NULL,NULL,'CASO DE PRUEBO','BREVE CASO','2019-02-13 00:00:00',1,NULL,NULL,'FISCALIA',123,'COMISARIA',1,7,1,'VICTIMA PRUEBA',NULL,NULL,NULL),
	(33,NULL,NULL,'PRUEBA PRUEBA','BREVE DATE','2019-02-13 00:00:00',1,NULL,NULL,'FISCALIA',1234,'COMI',1,12,1,'NOMBRE NOMBRE',NULL,NULL,NULL),
	(34,NULL,NULL,'CASO MODIFICADO','BREVE MODIFICADO','2019-02-13 00:00:00',1,NULL,NULL,'FISCA',1234,'COMIS',1,17,1,'VICTIMA MODIFICADO',NULL,NULL,NULL),
	(35,NULL,NULL,'PRUEBA PROGRAMA','BREVE PROGRAMA','2019-02-14 00:00:00',3,14,'OTRO ORGANISMO','FISCALIA',1234,'COMI',1,6,1,'VICTIMA PROGRAMA',NULL,NULL,NULL),
	(36,NULL,NULL,'PRUEBA PROGRAMA','BREVE PROGRAMA','2019-02-14 00:00:00',3,14,'OTRO ORGANISMO','FISCALIA',1234,'COMI',1,6,1,'VICTIMA PROGRAMA',NULL,NULL,NULL),
	(37,NULL,NULL,'PRUEBA AC','BREVE AC','2019-02-14 00:00:00',1,NULL,NULL,'FISCA',12345,'COM',1,12,1,'VICTIMA AC',NULL,NULL,NULL),
	(38,NULL,NULL,'CASO AC','BREVE','2019-02-14 00:00:00',1,NULL,NULL,'FISC',123,'COM',1,14,1,'PRUEBA AC',NULL,NULL,NULL),
	(39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(43,NULL,NULL,'msososoos','ATACH','2019-02-14 00:00:00',1,NULL,NULL,'FISAC',123,'COM',1,2,1,'PRUEBA PRUEBA',NULL,NULL,NULL),
	(44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(45,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(46,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(47,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(48,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(49,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(51,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(52,NULL,NULL,'CASOSSSS','BREVE','2019-02-14 00:00:00',2,NULL,NULL,'FISCA',1234,'COMI',1,16,1,'VICTIMA',NULL,NULL,NULL),
	(53,NULL,NULL,'ULTIMO','BREVE','2019-02-15 00:00:00',3,6,NULL,'FISCA',1234,'COMI',1,11,1,'NOMBRE VICTIMA',NULL,NULL,NULL),
	(54,NULL,NULL,'MARIA','BREVE DESCRIPCION','2019-02-15 00:00:00',1,NULL,NULL,'FISCALIA',12345,'COM',1,12,1,'MARIA ESTER',NULL,NULL,NULL),
	(55,NULL,NULL,'MARIA','BREVE','2019-02-15 00:00:00',1,NULL,NULL,'FISCA',1234,'COM',1,13,1,'MARIA EUGENIA',NULL,NULL,NULL),
	(56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(57,NULL,NULL,'NOMBRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(58,NULL,NULL,'NOMBRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(59,NULL,NULL,'NOMBRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(60,NULL,NULL,'NOMBRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(61,NULL,NULL,'KKKKKKKKKKKK',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(62,NULL,NULL,'NOMBRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(63,NULL,NULL,'NOMBRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(64,NULL,NULL,'NOMBRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(65,NULL,NULL,'NOMBRE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(66,NULL,NULL,'NOMBRE CAUSA','BREVE','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',1234,'COM',1,16,1,'MARTA',NULL,NULL,NULL),
	(67,NULL,NULL,'NOMBRE CAUSA','BREVE','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',1234,'COM',1,16,1,'MARTA',NULL,NULL,NULL),
	(68,NULL,NULL,'NOMBRE CAUSA','BREVE','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',1234,'COM',1,16,1,'MARTA',NULL,NULL,NULL),
	(69,NULL,NULL,'NOMBRE','BREVE','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',12345,'COM',1,6,1,'MARTA',NULL,NULL,NULL),
	(70,NULL,NULL,'NOMBRE CAUSA','BREVE','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',1234,'COM',1,16,1,'MARTA',NULL,NULL,NULL),
	(71,NULL,NULL,'NOMBRE CAUSA','BREVE','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',1234,'COM',1,16,1,'MARTA',NULL,NULL,NULL),
	(72,NULL,NULL,'NOMBRE CAUSA','BREVE','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',1234,'COM',1,16,1,'MARTA',NULL,NULL,NULL),
	(73,NULL,NULL,'NOMBRE CAUSA','BREVE','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',1234,'COM',1,16,1,'MARTA',NULL,NULL,NULL),
	(74,NULL,NULL,'NOMBRE','BREVE','2019-02-16 00:00:00',1,NULL,NULL,'FISCA',1234,'COM',2,14,1,'MARTA',NULL,NULL,NULL),
	(75,NULL,NULL,'NOMBRE','BREVE','2019-02-16 00:00:00',1,NULL,NULL,'FISCALIA',1234,'COMI',2,17,1,'NOMBRE',NULL,NULL,NULL),
	(76,NULL,NULL,'NOMBRE','BREVE','2019-02-16 00:00:00',1,NULL,NULL,'FISCALIA',1234,'COMI',2,17,1,'NOMBRE',NULL,NULL,NULL),
	(77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(79,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(80,NULL,NULL,'CASO CON USUARIO','BREVE CON USUARIO','2019-02-16 00:00:00',2,NULL,NULL,'FISCA',1234,'COMI',1,17,1,'VICTIMA CON USUARIO',NULL,NULL,1),
	(81,NULL,NULL,'caso prof1','BREVE PROF1','2019-02-16 00:00:00',1,NULL,NULL,'FISCA',1234,'COMI',1,15,1,'VICTIMA PROF 1',NULL,NULL,1),
	(82,NULL,NULL,'REFERENCIA PROF2','BREVE DOS','2019-02-16 00:00:00',2,NULL,NULL,'FISCAL',1234,'COMI',1,15,1,'VICTIMA PROF',NULL,NULL,2),
	(83,NULL,NULL,'PRUEBA FINAL','BREVE PRUEBA FINAL','2019-02-17 00:00:00',3,22,'OTRO ORGANISMO','FISCA',1234,'COMI',1,9,1,'MARCELA PEREZ',NULL,NULL,1),
	(84,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(85,NULL,NULL,'Carla Conte','Muy largo de contar','2018-12-20 00:00:00',1,NULL,NULL,'fisc',12,'com',2,32,1,'fernando lobo',NULL,NULL,3),
	(86,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(87,NULL,NULL,'walter Olmos','Muy largo de contar','2019-02-05 00:00:00',1,NULL,NULL,'fisc',12,'com',2,4,1,'fernando lobo',NULL,NULL,2),
	(88,NULL,NULL,'walter Olmos 2','Muy largo de contar','2019-02-04 00:00:00',2,NULL,NULL,'fisc',12,'com',1,5,2,'fernando lobo',2,NULL,2),
	(89,NULL,NULL,'walter Olmos','Muy largo de contar','2019-02-19 00:00:00',1,NULL,NULL,'fisc',12,'com',2,5,1,'fernando lobo',NULL,NULL,7),
	(90,NULL,NULL,'Teresa May','Muy largo de contar','2019-02-16 00:00:00',1,NULL,NULL,'fisc',12,'com',1,1,1,'fernando lobo',NULL,NULL,1),
	(91,NULL,NULL,'walter Olmos 2','Muy largo de contar','2019-01-31 00:00:00',2,NULL,NULL,'fisc',12,'com',1,3,1,'fernando lobo',NULL,NULL,6),
	(92,NULL,NULL,'MARIA MARIA','Muy largo de contar','2019-02-14 00:00:00',1,NULL,NULL,'fisc',12,'com',1,3,1,'fernando lobo',NULL,NULL,7),
	(93,NULL,NULL,'ALFREDO CASEROS','Muy largo de contar','2019-02-04 00:00:00',1,NULL,NULL,'fisc',12,'com',2,2,1,'fernando lobo',NULL,NULL,15),
	(94,NULL,NULL,'AMALIA GRANATA','Muy largo de contar','2019-02-05 00:00:00',1,NULL,NULL,'fisc',12,'com',2,2,1,'fernando lobo',NULL,NULL,2),
	(95,NULL,NULL,'PAZ MARTINEZ','Muy largo de contar','2019-02-28 00:00:00',2,NULL,NULL,'fisc',12,'com',1,2,1,'fernando lobo',NULL,NULL,21),
	(96,NULL,NULL,'LAURA CASA','alallala','2019-02-28 00:00:00',2,NULL,NULL,'fisc',12,'com',1,2,1,'fernando lobo',NULL,NULL,20),
	(97,NULL,NULL,'CASO PROVINCIA','BREVE DESCRIP','2019-02-24 00:00:00',2,NULL,NULL,'FISCALIA',1234,'com',2,3,1,'MARIA TERESA',NULL,NULL,2),
	(98,NULL,NULL,'HORACIO FERNANDEZ ASESINO','BREVE DESCRIP','2019-02-22 00:00:00',1,NULL,NULL,'FISCALIA',1234,'com',2,3,1,'MARIA TERESA',NULL,NULL,12),
	(99,NULL,NULL,'ANABELLA ARJONA','alallala','2019-02-15 00:00:00',1,NULL,NULL,'fisc',12,'com',2,36,1,'MARIA TERESA',NULL,NULL,6),
	(100,NULL,NULL,'ROSANA BERMEJO','alallala','2019-02-20 00:00:00',1,NULL,NULL,'FISCALIA',12,'com',2,5,1,'MARIA TERESA',NULL,NULL,7),
	(101,NULL,NULL,'CASO PROVINCIA','BREVE DESCRIP','2019-02-24 00:00:00',1,NULL,NULL,'FISCALIA',1234,'COMISARIA',1,1,1,'FLORENCIA PEREZ',NULL,NULL,2),
	(102,NULL,NULL,'JACINTO LOPEZ','BREVE DESCRIP','2019-02-14 00:00:00',1,NULL,NULL,'fisc',1234,'COMISARIA',2,1,1,'FLORENCIA PEREZ',NULL,NULL,7),
	(103,NULL,NULL,'AMANDA CLARKE','Muy largo de contar','2019-02-08 00:00:00',1,NULL,NULL,'fisc',12,'com',2,2,1,'MARIA TERESA',NULL,NULL,2),
	(104,NULL,NULL,'MARIANO LOPEZ','BREVE DESCRIP','2019-02-15 00:00:00',1,NULL,NULL,'fisc',1234,'COMISARIA',2,2,1,'CARLA PAZ',NULL,NULL,3),
	(105,NULL,NULL,'BRIAN LANZELOTA','alallala','2019-02-21 00:00:00',1,NULL,NULL,'FISCALIA',12,'COMISARIA',2,2,1,'MARIA TERESA',NULL,NULL,7),
	(106,NULL,NULL,'QUISPE MAMANI','Muy largo de contar','2019-02-11 00:00:00',1,NULL,NULL,'FISCALIA',1234,'com',1,1,1,'MARIA TERESA',NULL,NULL,16),
	(107,NULL,NULL,'PRUEBA FINAL','Muy largo de contar','2019-02-16 00:00:00',1,NULL,NULL,'FISCALIA',1234,'COMISARIA',1,2,1,'PRUEBA FINAL',NULL,NULL,4);

/*!40000 ALTER TABLE `casos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla cavajs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cavajs`;

CREATE TABLE `cavajs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cavajs` WRITE;
/*!40000 ALTER TABLE `cavajs` DISABLE KEYS */;

INSERT INTO `cavajs` (`id`, `nombre`)
VALUES
	(1,'Sede Central (La Plata)  '),
	(2,'Morón '),
	(3,'Azul '),
	(4,'Pergamino '),
	(5,'Bahía Blanca '),
	(6,'Pilar '),
	(7,'Ezeiza '),
	(8,'Pinamar '),
	(9,'Lanús '),
	(10,'Quilmes '),
	(11,'Lomas de Zamora '),
	(12,'San Fernando '),
	(13,'Los Toldos '),
	(14,'San Martín '),
	(15,'Mar del Plata '),
	(16,'Tandil '),
	(17,'Mercedes '),
	(18,'Vicente López '),
	(19,'Moreno '),
	(20,'Zárate '),
	(21,'José C. Paz '),
	(22,'Almirante Brown '),
	(23,'La Matanza');

/*!40000 ALTER TABLE `cavajs` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla convivientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `convivientes`;

CREATE TABLE `convivientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_y_apellido` varchar(100) DEFAULT NULL,
  `edad` varchar(22) DEFAULT NULL,
  `vinculo_victima` int(11) DEFAULT NULL,
  `niveleducativo_id` int(11) DEFAULT NULL,
  `condiciones_de_trabajo` int(11) DEFAULT NULL,
  `idCaso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `convivientes` WRITE;
/*!40000 ALTER TABLE `convivientes` DISABLE KEYS */;

INSERT INTO `convivientes` (`id`, `nombre_y_apellido`, `edad`, `vinculo_victima`, `niveleducativo_id`, `condiciones_de_trabajo`, `idCaso`)
VALUES
	(1,'eugenia',NULL,NULL,NULL,NULL,NULL),
	(2,'Se desconoce',NULL,NULL,NULL,NULL,NULL),
	(3,'Josefa','Se desconoce',NULL,NULL,NULL,NULL),
	(4,'Cecilia','33',2,NULL,NULL,NULL),
	(5,'María Josefa','37',3,2,1,99999),
	(6,'Lorenzo Gomez','21',1,1,3,99999),
	(7,'Cecilia Benitez','18',1,4,2,99999),
	(8,'Romina','22',1,1,2,99999),
	(9,'Cecilia','25',2,2,2,99999),
	(10,'maria de las calandras','97',1,2,2,99999),
	(11,'tomasa','21',3,1,4,99999),
	(12,'NOMBRE CONVIVIENTE 1','32',6,3,2,99999),
	(13,'CONVIVIENTE 2','30',2,4,2,99999),
	(14,'Se desconoce','43',6,4,5,99999),
	(15,'NOMBRE CONOCIDO','Se desconoce',6,6,5,99999),
	(16,'NOMBRE Y APELLIDA','23',1,6,2,34),
	(17,'NOMBRE Y APELLIDO 3','19',2,4,2,34),
	(18,'CONVI1','45',3,5,3,35),
	(19,'CONVI2','56',4,2,2,35),
	(20,'NO FUNCIONA A D','20',4,1,2,35),
	(21,'CONVI1','23',6,2,2,43),
	(22,'CONVI2','20',6,2,2,43),
	(23,NULL,NULL,NULL,NULL,NULL,43),
	(24,'CONVI3','40',6,4,2,43),
	(25,NULL,NULL,NULL,NULL,NULL,43),
	(26,NULL,NULL,NULL,NULL,NULL,43),
	(27,NULL,NULL,NULL,NULL,NULL,43),
	(28,NULL,NULL,NULL,NULL,NULL,43),
	(29,NULL,NULL,NULL,NULL,NULL,43),
	(30,NULL,NULL,NULL,NULL,NULL,43),
	(31,NULL,NULL,NULL,NULL,NULL,43),
	(32,NULL,NULL,NULL,NULL,NULL,43),
	(33,NULL,NULL,NULL,NULL,NULL,43),
	(34,NULL,NULL,NULL,NULL,NULL,43),
	(35,NULL,NULL,NULL,NULL,NULL,43),
	(36,NULL,NULL,NULL,NULL,NULL,43),
	(37,NULL,NULL,NULL,NULL,NULL,43),
	(38,NULL,NULL,NULL,NULL,NULL,43),
	(39,NULL,NULL,NULL,NULL,NULL,43),
	(40,NULL,NULL,NULL,NULL,NULL,43),
	(41,NULL,NULL,NULL,NULL,NULL,43),
	(42,NULL,NULL,NULL,NULL,NULL,43),
	(43,NULL,NULL,NULL,NULL,NULL,43),
	(44,'CONVIVIENTE 2','20',6,4,3,52),
	(45,'JOSE ALBERTO','25',2,6,1,54),
	(46,'MATIAS','30',2,5,4,54),
	(57,'PEDRO ANTONIO','Se desconoce',6,5,3,56),
	(58,'KKAKALALAL',NULL,NULL,NULL,NULL,56),
	(62,'NUEVO CONVIVIENTE','Se desconoce',6,4,4,82),
	(63,'nuevo','23',3,6,3,82),
	(64,'Se desconoce','Se desconoce',NULL,NULL,NULL,82),
	(65,'Se desconoce','Se desconoce',NULL,NULL,NULL,82),
	(66,'Se desconoce','Se desconoce',1,NULL,NULL,82),
	(67,'Se desconoce','Se desconoce',1,NULL,NULL,82),
	(68,'Se desconoce','Se desconoce',1,NULL,NULL,82),
	(69,'Se desconoce','Se desconoce',1,NULL,NULL,82),
	(73,'lola',NULL,NULL,NULL,NULL,NULL),
	(74,'lola',NULL,NULL,NULL,NULL,NULL),
	(75,'lola','12',NULL,NULL,NULL,NULL),
	(76,'tere',NULL,NULL,NULL,NULL,NULL),
	(77,'Se desconoce','Se desconoce',2,3,2,NULL),
	(78,'MARTA LORENA','12',2,3,1,92),
	(79,'CARLA PERALTA','12',1,2,2,92),
	(80,'CECILIA LOPEZ','12',3,2,3,92),
	(81,'CARLOS RICARDO','12',2,3,1,93),
	(82,'MARTA LORENA','Se desconoce',2,3,2,93),
	(83,'ROSANA ROJAS','12',3,3,2,93),
	(84,'MARTA LORENA','12',2,2,2,95),
	(85,'tere','12',2,3,3,95),
	(86,'MARTA LORENA','12',3,2,1,96),
	(87,'MARTA LORENA 2','Se desconoce',5,3,2,96),
	(88,'MARTA LORENA','78',3,2,2,97),
	(89,'lola','76',2,2,2,97),
	(90,'MARTA LORENA','78',2,2,1,102),
	(91,'tere','Se desconoce',2,2,2,102),
	(92,'MARTA LORENA','78',2,2,2,103),
	(93,'JOSEFA PEREZ','12',2,2,1,103),
	(94,'ROMINA LOPEZ','78',2,1,2,103),
	(95,'MARTA LORENA','Se desconoce',3,2,1,104),
	(96,'PAPA NOEL','78',3,2,2,104),
	(97,'BRIAN MUCHOS','Se desconoce',3,2,1,105),
	(98,'OTRO BRIAN','12',3,2,2,105),
	(99,'PRUEBA FINAL','78',2,2,1,107);

/*!40000 ALTER TABLE `convivientes` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla delitos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `delitos`;

CREATE TABLE `delitos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `delitos` WRITE;
/*!40000 ALTER TABLE `delitos` DISABLE KEYS */;

INSERT INTO `delitos` (`id`, `nombre`)
VALUES
	(38,' Abandono de persona'),
	(39,' Abuso sexual'),
	(40,' Abuso sexual seguido de muerte'),
	(41,' Acoso sexual'),
	(42,' Amenazas'),
	(43,' Averiguación de causales de muerte'),
	(44,' Bullying'),
	(45,' Catástrofes naturales'),
	(46,' Desaparición de personas'),
	(47,' Femicidio'),
	(48,' Femicidio indirecto'),
	(49,' Grooming'),
	(50,' Homicidio '),
	(51,' Instigación o ayuda al suicidio'),
	(52,' Lesiones '),
	(53,' Pornografía de menores'),
	(54,' Privación ilegal de la libertad '),
	(55,' Promoción y facilitación de corrupción de menores'),
	(56,' Promoción y facilitación de prostitución de mayores'),
	(57,' Promoción y facilitación de prostitución de menores'),
	(58,' Reducción a la servidumbre'),
	(59,' Robo agravado'),
	(60,' Robo seguido de muerte (criminis causa, art. 80 inc. 7)'),
	(61,' Secuestro'),
	(62,' Secuestro seguido de muerte'),
	(63,' Siniestro vial'),
	(64,' Suicidio '),
	(65,' Tentativa de homicidio'),
	(66,' Tentativa de suicidio'),
	(67,' Tortura'),
	(68,' Usurpación'),
	(69,' Violencia de género'),
	(70,' Violencia en espectáculos deportivos '),
	(71,' Violencia institucional'),
	(72,' Violencia familiar'),
	(73,' Otro');

/*!40000 ALTER TABLE `delitos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla departamentos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `departamentos`;

CREATE TABLE `departamentos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;

INSERT INTO `departamentos` (`id`, `nombre`)
VALUES
	(1,'Azul'),
	(2,'Bahía Blanca'),
	(3,'Dolores'),
	(4,'General San Martín '),
	(5,'Junín '),
	(6,'La Matanza '),
	(7,'La Plata '),
	(8,'Lomas de Zamora '),
	(9,'Mar del Plata '),
	(10,'Mercedes Moreno - General Rodríguez '),
	(11,'Morón '),
	(12,'Necochea '),
	(13,'Pergamino '),
	(14,'Quilmes '),
	(15,'San Isidro '),
	(16,'San Nicolás '),
	(17,'Trenque '),
	(18,'Lauquen '),
	(19,'Zárate - Campana'),
	(20,'Sede Central (La Plata)  '),
	(21,'Morón '),
	(22,'Azul '),
	(23,'Pergamino '),
	(24,'Bahía Blanca '),
	(25,'7Pilar '),
	(26,'Ezeiza '),
	(27,'Pinamar '),
	(28,'Lanús '),
	(29,'Quilmes '),
	(30,'Lomas de Zamora '),
	(31,'San Fernando '),
	(32,'Los Toldos '),
	(33,'San Martín '),
	(34,'Mar del Plata '),
	(35,'Tandil '),
	(36,'Mercedes '),
	(37,'Vicente López '),
	(38,'Moreno '),
	(39,'Zárate '),
	(40,'José C. Paz '),
	(41,'Almirante Brown '),
	(42,'La Matanza'),
	(43,'Sede Central (La Plata)'),
	(44,'Sede Central-La Plata'),
	(45,'Sede Central La Plata'),
	(46,'La Plata'),
	(47,'Sede Central (La Plata)  '),
	(48,'Morón '),
	(49,'Azul '),
	(50,'Pergamino '),
	(51,'Bahía Blanca '),
	(52,'7Pilar '),
	(53,'Ezeiza '),
	(54,'Pinamar '),
	(55,'Lanús '),
	(56,'Quilmes '),
	(57,'Lomas de Zamora '),
	(58,'San Fernando '),
	(59,'Los Toldos '),
	(60,'San Martín '),
	(61,'Mar del Plata '),
	(62,'Tandil '),
	(63,'Mercedes '),
	(64,'Vicente López '),
	(65,'Moreno '),
	(66,'Zárate '),
	(67,'José C. Paz '),
	(68,'Almirante Brown '),
	(69,'La Matanza');

/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla directores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directores`;

CREATE TABLE `directores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_y_apellido` varchar(255) DEFAULT NULL,
  `sede` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `directores` WRITE;
/*!40000 ALTER TABLE `directores` DISABLE KEYS */;

INSERT INTO `directores` (`id`, `nombre_y_apellido`, `sede`, `area`, `email`)
VALUES
	(1,'Veronica Haydeé BINCAZ -DIRECTORA PROVINCIAL','LA PLATA','DIRECTORA PROVINCIAL','VEROBINCAZ@hotmail.com '),
	(2,'LUCIA TEALDI-DIRECTORA DE SEDES DECENTRALIZADAS','LA PLATA','DIRECTORA DE SEDES DECENTRALIZADAS','lic.juanbombelli@gmail.com'),
	(3,'Juan Ignacio BOMBELLI-DIRECTOR DE ASISTENCIA Y PROTECCIÓN A LA VÍCTIMA','LA PLATA','DIRECTOR DE ASISTENCIA Y PROTECCIÓN A LA VÍCTIMA','tealdi.lucia@gmail.com'),
	(4,'Maia Yésica CALABRESE-EQUIPO DIRECCIÓN','LA PLATA','EQUIPO DIRECCIÓN','maiacalabrese85@gmail.com'),
	(5,'Lucia COMPAGNUCCI-EQUIPO DIRECCIÓN','LA PLATA','EQUIPO DIRECCIÓN','lu.comp1989@gmail.com');

/*!40000 ALTER TABLE `directores` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla discapacidades
# ------------------------------------------------------------

DROP TABLE IF EXISTS `discapacidades`;

CREATE TABLE `discapacidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `discapacidades` WRITE;
/*!40000 ALTER TABLE `discapacidades` DISABLE KEYS */;

INSERT INTO `discapacidades` (`id`, `nombre`)
VALUES
	(1,'Físico/Motriz'),
	(2,'Intelectual/Adaptativo'),
	(3,'Psíquica'),
	(4,'Sensorial'),
	(5,'Se desconoce');

/*!40000 ALTER TABLE `discapacidades` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla hechos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hechos`;

CREATE TABLE `hechos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `caratulacion_judicial` varchar(100) NOT NULL,
  `fecha_hecho` varchar(20) NOT NULL DEFAULT '',
  `pais_hecho` varchar(60) NOT NULL DEFAULT '',
  `provincia_hecho` varchar(60) NOT NULL DEFAULT '',
  `localidad_hecho` varchar(60) NOT NULL DEFAULT '',
  `idCaso` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `hechos` WRITE;
/*!40000 ALTER TABLE `hechos` DISABLE KEYS */;

INSERT INTO `hechos` (`id`, `caratulacion_judicial`, `fecha_hecho`, `pais_hecho`, `provincia_hecho`, `localidad_hecho`, `idCaso`)
VALUES
	(1,'delito grave','2019-02-04','1','1','3',92),
	(2,'DELITOS VARIOS','2019-02-08','2','2','4',93),
	(3,'DELITOS VARIOS','2019-02-09','3','2','4',95),
	(4,'DELITOS VARIOS','2019-02-09','3','2','4',95),
	(5,'DELITOS VARIOS 2','2019-02-07','3','2','1',96),
	(6,'delito grave','2019-02-24','1','1','2',97),
	(7,'DELITOS VARIOS final','2019-02-05','1','1','4',102),
	(8,'DELITO LARGOOOO','2019-02-08','1','2','3',103),
	(9,'MUCHOS DELITOS','2019-02-18','1','1','4',104),
	(10,'DELITO DE ESOS VARIOS','2019-02-12','2','3','4',105),
	(11,'PRUEBA FINAL','2019-02-08','2','2','3',107);

/*!40000 ALTER TABLE `hechos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla imputados
# ------------------------------------------------------------

DROP TABLE IF EXISTS `imputados`;

CREATE TABLE `imputados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_y_apellido` varchar(255) DEFAULT NULL,
  `tipo_documento_id` varchar(11) DEFAULT NULL,
  `tipo_documento_otro` varchar(255) DEFAULT NULL,
  `documento_nro` varchar(255) DEFAULT NULL,
  `vinculo_id` int(11) DEFAULT NULL,
  `vinculo_otro` varchar(255) DEFAULT NULL,
  `antecedentes_id` int(11) DEFAULT NULL,
  `defensoria_nro` varchar(255) DEFAULT NULL,
  `idCaso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `imputados` WRITE;
/*!40000 ALTER TABLE `imputados` DISABLE KEYS */;

INSERT INTO `imputados` (`id`, `nombre_y_apellido`, `tipo_documento_id`, `tipo_documento_otro`, `documento_nro`, `vinculo_id`, `vinculo_otro`, `antecedentes_id`, `defensoria_nro`, `idCaso`)
VALUES
	(1,'PRUEBA LUCKY','1',NULL,'25364569',2,NULL,2,'DEFEN34',5),
	(2,'Se desconoce','4',NULL,'No posee',6,'OTRO VINC',2,'DEFEN4',9),
	(3,'Se desconoce','1',NULL,'Se desconoce',2,NULL,2,'Se desconoce',22),
	(4,'Federico','3',NULL,'222',2,NULL,1,'234',102),
	(5,'Federico','3',NULL,'222',2,NULL,1,'234',102),
	(6,'ROBERTO LOPEZ','5',NULL,'222',2,NULL,1,'234',102),
	(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,102),
	(8,'jacinto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,102),
	(9,'ROMINA LOPEZ','2',NULL,NULL,NULL,NULL,NULL,NULL,102),
	(10,'ROMINA LOPEZ','1',NULL,NULL,NULL,NULL,NULL,NULL,102),
	(11,'ROMINA LOPEZ','2',NULL,'222',1,NULL,2,'123456',102),
	(12,'MARIA JUANA LOPEZ','1',NULL,'22222',1,NULL,2,'1234',102),
	(13,'PAOLO CECILIO','1',NULL,'111111',1,NULL,1,'12345',103),
	(14,'MARIA NEREA','3',NULL,'12345',1,NULL,1,'22',103),
	(15,'JONAHATAN GUTIERREZ','1',NULL,'22222',1,NULL,1,'123456',104),
	(16,'BRIAN PEREZ CALVO','1',NULL,'2222',2,NULL,2,'22',104),
	(17,'EL AMIGO DEL BRIAN','2',NULL,'111111',1,NULL,1,'lejos',105),
	(18,'EL OTRO AMIGO DEL BRIAN','2',NULL,'12345',3,NULL,2,'1234',105),
	(19,'PRUEBA FINAL','2',NULL,'12345',2,NULL,2,'1234',107),
	(20,'PRUEBA FINAL 2','4',NULL,'2222',2,NULL,2,'123456',107);

/*!40000 ALTER TABLE `imputados` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla institucion_oarticula
# ------------------------------------------------------------

DROP TABLE IF EXISTS `institucion_oarticula`;

CREATE TABLE `institucion_oarticula` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) DEFAULT NULL,
  `oarticula_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `institucion_oarticula` WRITE;
/*!40000 ALTER TABLE `institucion_oarticula` DISABLE KEYS */;

INSERT INTO `institucion_oarticula` (`id`, `institucion_id`, `oarticula_id`)
VALUES
	(1,9,1),
	(2,9,2),
	(3,10,1),
	(4,10,2),
	(5,10,3),
	(6,10,21),
	(7,14,1),
	(8,14,2),
	(9,15,1),
	(10,15,2),
	(11,16,1),
	(12,16,2),
	(13,17,1),
	(14,17,2),
	(15,17,3),
	(16,18,1),
	(17,18,2),
	(18,19,1),
	(19,19,2),
	(20,20,1),
	(21,20,2),
	(22,21,1),
	(23,21,2),
	(24,21,3),
	(25,21,21),
	(26,22,1),
	(27,22,2),
	(28,23,1),
	(29,23,2),
	(30,24,1),
	(31,24,2),
	(32,25,1),
	(33,25,2),
	(34,25,21),
	(35,29,1),
	(36,29,2),
	(37,29,3),
	(38,30,1),
	(39,30,2),
	(40,30,10),
	(41,30,11),
	(42,33,9),
	(43,33,13),
	(44,33,21),
	(45,34,9),
	(46,34,13),
	(47,34,21),
	(48,35,9),
	(49,35,13),
	(50,35,21),
	(51,36,9),
	(52,36,21),
	(53,37,21),
	(54,38,6),
	(55,38,9),
	(56,38,21);

/*!40000 ALTER TABLE `institucion_oarticula` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla institucion_oprevio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `institucion_oprevio`;

CREATE TABLE `institucion_oprevio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) DEFAULT NULL,
  `oprevio_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `institucion_oprevio` WRITE;
/*!40000 ALTER TABLE `institucion_oprevio` DISABLE KEYS */;

INSERT INTO `institucion_oprevio` (`id`, `institucion_id`, `oprevio_id`)
VALUES
	(1,5,5),
	(2,5,1),
	(3,7,5),
	(4,7,1),
	(5,7,2),
	(6,8,5),
	(7,8,1),
	(8,8,2),
	(9,8,3),
	(10,9,5),
	(11,9,1),
	(12,9,2),
	(13,10,5),
	(14,10,1),
	(15,10,2),
	(16,10,16),
	(17,13,5),
	(18,13,1),
	(19,14,5),
	(20,14,1),
	(21,15,5),
	(22,15,1),
	(23,24,5),
	(24,24,1),
	(25,25,5),
	(26,25,1),
	(27,25,2),
	(28,25,16),
	(29,29,1),
	(30,29,2),
	(31,30,1),
	(32,30,2),
	(33,33,18),
	(34,33,22),
	(35,34,18),
	(36,34,22),
	(37,35,18),
	(38,35,22),
	(39,36,6),
	(40,36,11),
	(41,36,22),
	(42,37,14),
	(43,37,17),
	(44,38,13),
	(45,38,21),
	(46,38,22);

/*!40000 ALTER TABLE `institucion_oprevio` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla institucion_socioeconomico
# ------------------------------------------------------------

DROP TABLE IF EXISTS `institucion_socioeconomico`;

CREATE TABLE `institucion_socioeconomico` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) DEFAULT NULL,
  `socioeconomico_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `institucion_socioeconomico` WRITE;
/*!40000 ALTER TABLE `institucion_socioeconomico` DISABLE KEYS */;

INSERT INTO `institucion_socioeconomico` (`id`, `institucion_id`, `socioeconomico_id`)
VALUES
	(1,9,1),
	(2,9,2),
	(3,10,1),
	(4,10,2),
	(5,10,3),
	(6,10,6),
	(7,15,1),
	(8,15,2),
	(9,16,1),
	(10,16,2),
	(11,17,1),
	(12,17,2),
	(13,17,3),
	(14,18,1),
	(15,20,1),
	(16,20,2),
	(17,21,1),
	(18,21,2),
	(19,22,1),
	(20,22,2),
	(21,22,3),
	(22,22,6),
	(23,23,1),
	(24,23,2),
	(25,23,3),
	(26,23,4),
	(27,24,1),
	(28,24,2),
	(29,25,2),
	(30,25,3),
	(31,25,6),
	(32,29,1),
	(33,29,2),
	(34,29,3),
	(35,30,1),
	(36,30,2),
	(37,38,2),
	(38,38,4);

/*!40000 ALTER TABLE `institucion_socioeconomico` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla instituciones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `instituciones`;

CREATE TABLE `instituciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `organismos_intervinieron` int(11) DEFAULT NULL,
  `cual_otro_organismo` varchar(255) DEFAULT NULL,
  `requiere_asistencia` int(11) DEFAULT NULL,
  `asistencia_juridica` int(11) DEFAULT NULL,
  `asistencia_psicologica` int(11) DEFAULT NULL,
  `asistencia_socioeconomica` int(11) DEFAULT NULL,
  `socioeconomica_otro` varchar(255) DEFAULT NULL,
  `organismos_actual_otro` varchar(255) DEFAULT NULL,
  `pratocinio_gratuito` int(11) DEFAULT NULL,
  `letrado_designado` varchar(255) DEFAULT NULL,
  `pratocinio_conformidad` int(11) DEFAULT NULL,
  `colegio_departamental` int(11) DEFAULT NULL,
  `fecha_designacion` datetime DEFAULT NULL,
  `abogado_particular` varchar(255) DEFAULT NULL,
  `idCaso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `instituciones` WRITE;
/*!40000 ALTER TABLE `instituciones` DISABLE KEYS */;

INSERT INTO `instituciones` (`id`, `organismos_intervinieron`, `cual_otro_organismo`, `requiere_asistencia`, `asistencia_juridica`, `asistencia_psicologica`, `asistencia_socioeconomica`, `socioeconomica_otro`, `organismos_actual_otro`, `pratocinio_gratuito`, `letrado_designado`, `pratocinio_conformidad`, `colegio_departamental`, `fecha_designacion`, `abogado_particular`, `idCaso`)
VALUES
	(2,1,NULL,NULL,1,2,NULL,NULL,NULL,1,NULL,NULL,1,NULL,'1',105),
	(3,1,NULL,NULL,1,NULL,3,NULL,NULL,1,NULL,NULL,1,NULL,'1',105),
	(4,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(5,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(7,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(8,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(9,1,NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(10,1,NULL,NULL,1,2,3,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,10),
	(11,2,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(12,2,NULL,NULL,1,2,NULL,NULL,NULL,1,NULL,NULL,1,NULL,'1',105),
	(13,1,NULL,NULL,1,2,NULL,NULL,NULL,1,NULL,NULL,1,NULL,'1',105),
	(14,1,NULL,NULL,1,2,NULL,NULL,NULL,1,NULL,NULL,1,NULL,'1',105),
	(15,1,NULL,NULL,1,2,3,NULL,NULL,1,NULL,NULL,1,NULL,'1',105),
	(16,2,NULL,NULL,1,NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(17,2,NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(18,2,NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(19,2,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105),
	(21,1,NULL,NULL,1,NULL,3,NULL,'otro',3,NULL,NULL,1,'2019-02-21 00:00:00','1',106),
	(22,1,NULL,NULL,1,NULL,3,'OTRA SOCIOECO',NULL,3,NULL,NULL,1,'2019-02-22 00:00:00','1',110),
	(23,1,NULL,NULL,1,NULL,3,NULL,NULL,1,NULL,NULL,1,NULL,'2',110),
	(24,1,NULL,NULL,1,NULL,3,NULL,NULL,1,NULL,NULL,1,NULL,'1',110),
	(25,1,NULL,NULL,1,NULL,3,'YYYYYYYYYYYYYYYY','ZZZZZZZZZZZZZZ',3,NULL,NULL,1,'2019-02-22 00:00:00','1',110),
	(26,2,NULL,NULL,1,NULL,3,NULL,NULL,2,NULL,NULL,1,NULL,'1',111),
	(27,2,NULL,NULL,1,NULL,3,NULL,NULL,2,NULL,NULL,1,NULL,'1',111),
	(28,2,NULL,NULL,1,NULL,3,NULL,NULL,2,NULL,NULL,1,NULL,'1',111),
	(29,1,NULL,NULL,1,2,3,'otro socioeconomico',NULL,3,NULL,NULL,1,NULL,NULL,111),
	(30,1,NULL,NULL,1,NULL,3,NULL,NULL,1,NULL,NULL,1,NULL,'1',112),
	(31,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,102),
	(32,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,103),
	(33,1,'otro orga',1,0,0,1,NULL,'mucho',1,NULL,NULL,NULL,NULL,'1',104),
	(34,1,'otro orga',1,0,0,1,NULL,'mucho',1,NULL,NULL,NULL,NULL,'1',104),
	(35,1,'otro orga',2,0,0,1,NULL,'mucho',1,NULL,NULL,NULL,NULL,'1',104),
	(36,1,'otro orga',1,0,0,1,NULL,'mucho',4,NULL,NULL,NULL,NULL,'3',104),
	(37,1,NULL,1,0,0,1,NULL,'mucho',1,NULL,NULL,NULL,NULL,'1',104),
	(38,1,'otro orga',1,0,0,1,NULL,'mucho',3,'Mario',1,1,'2019-02-12 00:00:00','1',105);

/*!40000 ALTER TABLE `instituciones` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla limitaciones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `limitaciones`;

CREATE TABLE `limitaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `limitaciones` WRITE;
/*!40000 ALTER TABLE `limitaciones` DISABLE KEYS */;

INSERT INTO `limitaciones` (`id`, `nombre`)
VALUES
	(1,'Analfabetismo'),
	(2,'Discapacidad'),
	(3,'Idioma'),
	(4,'Otro');

/*!40000 ALTER TABLE `limitaciones` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla modalidades
# ------------------------------------------------------------

DROP TABLE IF EXISTS `modalidades`;

CREATE TABLE `modalidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `modalidades` WRITE;
/*!40000 ALTER TABLE `modalidades` DISABLE KEYS */;

INSERT INTO `modalidades` (`id`, `nombre`)
VALUES
	(1,'Presentación espontánea'),
	(2,'Intervención de oficio'),
	(3,'Derivación de otro organismo ');

/*!40000 ALTER TABLE `modalidades` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla motivospasivos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `motivospasivos`;

CREATE TABLE `motivospasivos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `motivospasivos` WRITE;
/*!40000 ALTER TABLE `motivospasivos` DISABLE KEYS */;

INSERT INTO `motivospasivos` (`id`, `nombre`)
VALUES
	(1,'Se cubrió la demanda inicial'),
	(2,'deja de requerir intervención'),
	(3,'imposibilidad de contacto '),
	(4,'cuál');

/*!40000 ALTER TABLE `motivospasivos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla necesidades
# ------------------------------------------------------------

DROP TABLE IF EXISTS `necesidades`;

CREATE TABLE `necesidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `necesidades` WRITE;
/*!40000 ALTER TABLE `necesidades` DISABLE KEYS */;

INSERT INTO `necesidades` (`id`, `nombre`)
VALUES
	(1,'Vivienda'),
	(2,'Alimentos'),
	(3,'Capacidad Económica'),
	(4,'Salud'),
	(5,'Vestimenta'),
	(6,'Educación'),
	(7,'Trabajo'),
	(8,'Otra');

/*!40000 ALTER TABLE `necesidades` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla oarticulas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oarticulas`;

CREATE TABLE `oarticulas` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `oarticulas` WRITE;
/*!40000 ALTER TABLE `oarticulas` DISABLE KEYS */;

INSERT INTO `oarticulas` (`id`, `nombre`)
VALUES
	(1,' Colegio de Abogados'),
	(2,' Abogado Particular '),
	(3,' Fiscalía'),
	(4,' Juzgado de Paz'),
	(5,' Juzgado de Familia'),
	(6,' Casa de Justicia(Ministerio Público)'),
	(7,' Consultorio Jurídico Gratuito'),
	(8,' Estado en tu barrio'),
	(9,' Centro de Acceso a Justicia (CAJ)'),
	(10,' ANSES'),
	(11,' Otro CAVAJ'),
	(12,' Organismo Provincial de Niñez y Adolescencia'),
	(13,' Programa Provincial Cerca de Noche'),
	(14,' Dirección Provincial de Equidad de Género y Diversidad Sexual'),
	(15,' Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)'),
	(16,' Dirección Provincial de Salud Mental y Adicciones'),
	(17,' Policía Federal'),
	(18,' Policía Bonaerense'),
	(19,' Policía Local'),
	(20,' Policía Metropolitana'),
	(21,'Otro');

/*!40000 ALTER TABLE `oarticulas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla oprevios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oprevios`;

CREATE TABLE `oprevios` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `oprevios` WRITE;
/*!40000 ALTER TABLE `oprevios` DISABLE KEYS */;

INSERT INTO `oprevios` (`id`, `nombre`)
VALUES
	(1,'ANSES'),
	(2,' Comisaría '),
	(3,' DDI '),
	(4,' Defensoría del Pueblo'),
	(5,' Municipio'),
	(6,' Portal Mi Provincia  '),
	(7,' Unidad de Ministro (Ministerio de Justicia) '),
	(8,'Centro de Acceso a Justicia (CAJ)'),
	(9,'Dirección Provincial de Equidad de Género y Diversidad Sexual'),
	(10,'Dirección Provincial de Salud Mental y Adicciones'),
	(11,'Estado en Tu Barrio'),
	(12,'Fiscalía'),
	(13,'Juzgado'),
	(14,'Organismo Provincial de Niñez y Adolescencia'),
	(15,'Otro CAVAJ'),
	(16,'Policía Bonaerense'),
	(17,'Policía Federal'),
	(18,'Policía Local'),
	(19,'Policía Metropolitana'),
	(20,'Programa Provincial Cerca de Noche'),
	(21,'Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)'),
	(22,'Otro organismo');

/*!40000 ALTER TABLE `oprevios` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla organismos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `organismos`;

CREATE TABLE `organismos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `organismos` WRITE;
/*!40000 ALTER TABLE `organismos` DISABLE KEYS */;

INSERT INTO `organismos` (`id`, `nombre`)
VALUES
	(1,'ANSES'),
	(2,' Comisaría '),
	(3,' DDI '),
	(4,' Defensoría del Pueblo'),
	(5,' Municipio'),
	(6,' Portal Mi Provincia  '),
	(7,' Unidad de Ministro (Ministerio de Justicia) '),
	(8,'Centro de Acceso a Justicia (CAJ)'),
	(9,'Dirección Provincial de Equidad de Género y Diversidad Sexual'),
	(10,'Dirección Provincial de Salud Mental y Adicciones'),
	(11,'Estado en Tu Barrio'),
	(12,'Fiscalía'),
	(13,'Juzgado'),
	(14,'Organismo Provincial de Niñez y Adolescencia'),
	(15,'Otro CAVAJ'),
	(16,'Policía Bonaerense'),
	(17,'Policía Federal'),
	(18,'Policía Local'),
	(19,'Policía Metropolitana'),
	(20,'Programa Provincial Cerca de Noche'),
	(21,'Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)');

/*!40000 ALTER TABLE `organismos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla personas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personas`;

CREATE TABLE `personas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_persona_asistida` varchar(255) DEFAULT NULL,
  `vinculo_persona_asistida` int(11) DEFAULT NULL,
  `otro_vinculo_persona_asistida_cual` varchar(255) DEFAULT NULL,
  `telefono_persona_asistida` int(11) DEFAULT NULL,
  `domicilio_persona_asistida` varchar(255) DEFAULT NULL,
  `localidad_persona_asistida` varchar(255) DEFAULT NULL,
  `idCaso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;

INSERT INTO `personas` (`id`, `nombre_persona_asistida`, `vinculo_persona_asistida`, `otro_vinculo_persona_asistida_cual`, `telefono_persona_asistida`, `domicilio_persona_asistida`, `localidad_persona_asistida`, `idCaso`)
VALUES
	(1,'nombre',2,NULL,123,'dom','1',65),
	(2,'nombre y apellido',4,NULL,123,'domi','5',65),
	(3,'NOMBRE Y APELLIDO',3,NULL,123,'DOMICI','4',72),
	(5,'alkslsl',3,NULL,123,'domicilio','2',73),
	(6,'lalala',3,NULL,123,'dom','4',73),
	(7,'nombre',2,NULL,123,'domic','3',73),
	(8,'lolplp',2,NULL,123,'d','7',74),
	(9,'llll',2,NULL,123,'kolp','8',74),
	(10,'persona2',3,NULL,123456,'dom2','2',74),
	(11,'persona3',2,NULL,12345,'dom3','3',74),
	(12,NULL,NULL,NULL,NULL,NULL,NULL,74),
	(13,'mas personas',2,NULL,123456,'dom5','4',74),
	(14,'persona 10',1,NULL,1234,'domicilio10','10',74),
	(15,'persona11',3,NULL,1234,'domicilio11','11',74),
	(16,'persona12',2,NULL,123,'domicilio12','12',74),
	(17,'persona77',3,NULL,123,'domicilio77','77',77),
	(18,'nueva persona',2,NULL,123,'domi','90',77),
	(19,'otra persona',3,NULL,123,'domi otra','1',77),
	(20,'PERSONA 20',3,NULL,1234,'DOMI 20','20',77),
	(21,'nuevo nombre y apellido',2,NULL,123,'dom','4',78),
	(22,'persona asistida',2,NULL,123,'dom','1',79),
	(23,'PERSONA ASISTIDA',2,NULL,12345,'DOMICILIO','7',79),
	(24,'persona 24',2,NULL,4567,'domicilio','4',79),
	(25,'DE BREVE',2,NULL,1234,'DOM','12',82),
	(26,'BREVE',4,NULL,1234,'DOMI','7',82),
	(27,'PRUEBA CUAL',4,NULL,4567,'DOM','5',82),
	(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(30,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(31,'MM',3,NULL,123,'DOMICILIO','4',84),
	(32,'MMM',1,NULL,123,'DOMI','4',79),
	(33,'NN',2,NULL,123,'DOM','3',86),
	(34,NULL,NULL,NULL,NULL,NULL,NULL,86),
	(35,'NN',2,NULL,123,'DOM','3',86),
	(36,NULL,NULL,NULL,NULL,NULL,NULL,86),
	(37,'persona',3,NULL,1234,'domi','2',86),
	(38,NULL,NULL,NULL,NULL,NULL,NULL,86),
	(39,'PERSONA NUEVA',3,NULL,123,'DOMICILIO NUEVO','3',86),
	(40,NULL,NULL,NULL,NULL,NULL,NULL,86),
	(41,NULL,NULL,NULL,NULL,NULL,NULL,86),
	(42,NULL,NULL,NULL,NULL,NULL,NULL,86),
	(43,'ULTIMA PERSONA',4,'OTRO VINCULO',123,'DOMI','10',86),
	(44,'PRIMERA PERSONA ASISTIDA',2,NULL,123,'DOMI','1',2),
	(45,'pablo luis',4,'cual otro',123,'domi','1',3),
	(46,'luis miguel',2,NULL,123,'domi','4',3),
	(47,'111111111111111',NULL,NULL,NULL,NULL,NULL,3),
	(48,'prueba',2,NULL,123,'dom','loc',3),
	(49,'mamamamam',4,'CICICICI',123456,'DOMIC','LOCAL',3),
	(50,'KCKCKCK',1,NULL,123,'DOM','LOC',3),
	(51,'PRUEBA HACIA PROF',2,NULL,12345,'DOMICILIOOOOOOOOOOOOOOOOOO','LOCALIDADDDDDDDDDDDDDD',3),
	(52,'PRUEBA NEW',4,'OTRO VINCULO',12345,'DOMICILIO DE CONTACTO','LOC',3),
	(53,'NOMBRE PERSONA ASISTIDA CINCO',4,'OTRO VINCULO',123,'DOMI CINCO','LOCALIDAD CINCO',4),
	(54,'persona',4,'otro cual',1234,'domi','loca',5),
	(55,'NOMBRE SEIS',4,'OTRO VINCULO',1234,'DOMI SEIS','LOCA SEIS',5),
	(56,'NOMBRE SEIS BIS',4,'OTRO VINCULO SEIS',1234,'DOMI SEIS BIS','LOCA SEIS BIS',6),
	(57,'PERSONA ASISTIDA SIETE',4,'OTRO VINCULO SIETE',123,'DOMISIETE','LOCASIETE',7),
	(58,'PERSONA ASISTIDA SIETEBIS',4,'OTRO VINCULO SIETEBIS',12345,'DOMI SIETEBIS','LOCASIETE',7),
	(59,'PERSONA ASISTIDA TRES',4,'OTRO VINCULO TRES',1234,'DOMI TRES','LOCA TRES',7),
	(60,'nombre',4,'otro vinculo',123,'domi','loca',9),
	(61,'persona nueva',4,'otro v',123,'dom','loc',9),
	(62,'persona 62',4,'otro v',123,'dom','loc',9),
	(63,'persona 63',4,'cual otro',123,'dom','loc',9),
	(64,'persona 64',4,'otroV',123,'dom','loc',9),
	(65,'personaaaaaaaaaaaaaaaaaaassssssssssssss',4,'otrovinculo',123,'domiedit','locedit',9),
	(66,'LORENA SAENZ',4,'VECINA',1234,'DOMICILIO','LOCALIDAD',9),
	(67,'SANDRA SAENZ',4,'PRIMA',123,'DOMICILIO','LOCALIDAD',10),
	(68,'PERSONA TRECE',4,'OTRO VINCULO',123456,'DOMIT13','LOCA13',12),
	(69,'PERSONA TRECE BIS',4,'OTRO VINCULO',1234,'DOMI13BIS','LOCA13BIS',13),
	(70,'mmmmmmmmmmmm',4,'kkkkkkkkkkkkk',134,'dom','lovc',14),
	(71,'persona',4,'otro',123344,'dom','loc',14),
	(72,'lalalalal',4,'kakkaka',123,'domi','loc',14),
	(73,'kaklalala',2,NULL,111111,'dom','loc',14),
	(74,'EUGENIA',2,NULL,12345,'DOMI','LOCAL',14),
	(75,'LUCKY',2,NULL,163737,'DOM','LOC',14),
	(76,'Josefa',2,NULL,123,'japon','japon',23),
	(77,'rosalinda',3,NULL,123,'Polonia','Polonia',23),
	(78,'roberto',4,'jefa',1234,'string','string',24),
	(79,'MARIA ESTER',4,'OTRO',123,'DOM','LOC',25),
	(80,'MARIO',4,'OTRO MARIO',1234,'DOMIC','LOC',25),
	(81,'PERSONA1',4,'OTRO VINCULO',123,'DOM','LOCAL',26),
	(82,'PERSONA 2',4,'OTRO',123,'DOM','LOCAL',26),
	(83,'PERSONA1CASO',4,'OTRO V',123,'DOM','LOC',26),
	(84,'PERSONA2',4,'OTRO V',123,'DOM','LOC',27),
	(85,'PERSO',4,'OTRO CUAL',123,'DOM','LOCAL',28),
	(86,'PERSONASSSSSSSSSS',4,'OTRO VINCULO',1234,'DOM','LOCA',29),
	(87,'PERSONA ASISTIDA',4,'OTRO',1234,'DOM','LOCAL',31),
	(88,'PERSONA ASISTIDA DOS',4,'OTRO V',1234,'DOMI','LOCA',31),
	(89,'PER1',4,'OTRO LAZO',123,'DOMI1','DOMI2',32),
	(90,'PER2',4,'OTRO V',1234,'DOM2','LOCA2',32),
	(91,'PER3',4,'VINCULO TRES',1234,'DOMI3','LOCA3',32),
	(92,'PERSO1',4,'OTRO V',123,'DOMI','LOC',32),
	(93,'PERSO2',4,'OTRO L',123,'DOMI','LOCAL',33),
	(94,'PROFESIONAL MODIFICADO',4,'OTRO V',123,'DOM','LOCA',34),
	(95,'PROFESIONAL MODIFICADO 2',4,'OTRO LAZO',123,'DOMI','LOCA',34),
	(96,'PROFESIONAL PROGRAMA1',4,'OTRO V',12345,'DOMI','LOCA',34),
	(97,'PERSONA PROGRAMA2',4,'OTRO VIN',123,'DOMI','LOCA',35),
	(98,'PERSONA ASISTIDA1',4,'OTROV',1234,'DOM','LOCA',36),
	(99,'PERSONA ASISTIDA 2',4,'OTRO L',1234,'DOM','LOCA',36),
	(100,'PERSO3',4,'OTROV',123,'DOM','LOC',36),
	(101,'PERSONA1',4,'OTRO V1',1234,'DOM1','LOC1',43),
	(102,'PERSONA2',4,'OTROV2',1234,'DOM2','LOC2',43),
	(120,'HECTOR MARIO',4,'VECINO',123,'DOMI','LOCA',52),
	(121,'HECTOR MARIO',4,'VECINO',123,'DOMI','LOCA',52),
	(122,'HECTOR',4,'VECINO',123,'DOMI','LOCA',52),
	(123,'JUANA',2,NULL,123,'DOMI','LOCA',52),
	(128,'MARIO ALBERTO',4,'OTRO V',123456,'DOMI','LOCAL',54),
	(129,'MARIA LUISA',4,'OTRO LAZO',123456,'DOMI','LOCAL',54),
	(157,'NOMBRE PRUEBA',4,'OTRO',1234,'DOMI','LOCAL',71),
	(158,'PERSONA ASIS',4,'OTRA',1234,'DOMI','LOCAL',76),
	(159,'MARIA MARTA',4,'OTRO LAZO',1234,'DOMIC','LOCAL',76),
	(160,'PERSONA',4,'OTRO VINCULO',1234,'DOMIC','LOCAL',76),
	(161,'PERSONA COMPARTIDA',4,'OTRO LAZO',1234,'DOMIC','LOCAL',76),
	(162,'PERSONA ULTIMO ID',4,'OTRO V',123,'DOMI','LOCAL',53),
	(163,'PERSONA ULTIMO ID BIS',4,'OTRO VIN',123,'DOMIC','LOCAL',53),
	(164,'PERSONA ASISTIDA CON USUARIO',4,'OTRO V',1234,'DOMI','LOCAL',53),
	(165,'VICTIMA CON PROFESIONAL1',4,'OTRO',123,'DOMI','LOCAL',81),
	(166,'PERSONA ASISTIDA CON PROFESIONAL1',4,'OTRO',123,'DOM','LOCAL',81),
	(167,'PERSONA PROF2',4,'OTRO LAZO',1234,'DOMI','LOCAL',81),
	(168,'SONIA JUAREZ',4,'VECINA',1234,'DOMI','LOCA',82),
	(169,'gabriel lucero',4,'varios',1234,'lejos','mas lejos',85),
	(170,'Rosalia Perez',1,NULL,1234,'lejos','mas lejos',87),
	(171,'jacinto lopez',2,NULL,1234,'lejos','mas lejos',87),
	(172,'Teresa May',3,NULL,1234,'lejos','mas lejos',87),
	(173,'Monica fernandez',3,NULL,1234,'lejos','mas lejos',87),
	(174,'Carlos Calvo',2,NULL,1234,'lejos','mas lejos',87),
	(175,'Rosalia Perez',1,NULL,1234,'lejos','mas lejos',88),
	(176,'jacinto lopez',1,NULL,1234,'lejos','mas lejos',88),
	(177,'Carlos Calvo',3,NULL,1234,'lejos','mas lejos',88),
	(178,'Carlos Calvo',1,NULL,1234,'lejos','mas lejos',89),
	(179,'Rosalia Perez',4,'varios',1234,'lejos','mas lejos',89),
	(180,'Carlos Calvo',2,NULL,1234,'lejos','mas lejos',90),
	(181,'Rosalia Perez',1,NULL,1234,'lejos','mas lejos',91),
	(182,'Roberta fritz',1,NULL,1234,'lejos','mas lejos',92),
	(183,'jacinto lopez',2,NULL,1234,'lejos','mas lejos',92),
	(184,'Chela Martinez',2,NULL,1234,'lejos','mas lejos',92),
	(185,'ROBERTO PETINATO',2,NULL,1234,'lejos','mas lejos',93),
	(186,'TOMASA FLORES',1,NULL,1234,'lejos','mas lejos',93),
	(187,'FERNANDO PERALTA',1,NULL,1234,'lejos','mas lejos',94),
	(188,'DELIA LAMARQUE',2,NULL,1234,'lejos','mas lejos',94),
	(189,'ANALIA ROSALES',2,NULL,1234,'lejos','mas lejos',95),
	(190,'GABRIELA LOPEZ',2,NULL,1234,'lejos','mas lejos',95),
	(191,'jacinto lopez',2,NULL,1234,'lejos','mas lejos',96),
	(192,'PERSONA ASISTIDA 1',1,NULL,1234,'domicilio','localidad',97),
	(193,'persona asistida 2',2,NULL,1234,'lejos','localidad',97),
	(194,'ROMINA MERCEDES',1,NULL,1234,'lejos','mas lejos',98),
	(195,'Rosalia Perez',2,NULL,1234,'lejos','localidad',98),
	(196,'Roberta fritz',2,NULL,1234,'lejos','mas lejos',99),
	(197,'jacinto lopez',2,NULL,1234,'lejos','mas lejos',100),
	(198,'Carlos Calvo',3,NULL,1234,'lejos','localidad',100),
	(199,'PERSONA 1',1,NULL,1234,'domicilio','LOCALIDAD',101),
	(200,'PERSONA 2',3,NULL,12345,'DOMILICIO','LOCALIDAD',101),
	(201,'jacinto lopez',2,NULL,1234,'domicilio','LOCALIDAD',102),
	(202,'MANUELA LOPEZ',2,NULL,1234,'lejos','LOCALIDAD',103),
	(203,'LORENA SOLEDAD',2,NULL,12345,'lejos','LOCALIDAD',103),
	(204,'ROMINA BALBOA',2,NULL,12345,'lejos','LOCALIDAD',104),
	(205,'MARIA GABRIELA',2,NULL,1234,'lejos','localidad',104),
	(206,'BRIAN 1',1,NULL,1234,'lejos','LOCALIDAD',105),
	(207,'BRIAN 2',1,NULL,12345,'domicilio','localidad',105),
	(208,'Roberta fritz',1,NULL,12345,'lejos','LOCALIDAD',106),
	(209,'Rosalia Perez',3,NULL,1234,'domicilio','localidad',106),
	(210,'PRUEBA FINAL',1,NULL,1234,'lejos','LOCALIDAD',107);

/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla profesionales
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profesionales`;

CREATE TABLE `profesionales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_profesional_interviniente` varchar(255) DEFAULT NULL,
  `desde_profesional_interviniente` datetime DEFAULT NULL,
  `actual_profesional_interviniente` int(11) DEFAULT NULL,
  `hasta_profesional_interviniente` datetime DEFAULT NULL,
  `idCaso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `profesionales` WRITE;
/*!40000 ALTER TABLE `profesionales` DISABLE KEYS */;

INSERT INTO `profesionales` (`id`, `nombre_profesional_interviniente`, `desde_profesional_interviniente`, `actual_profesional_interviniente`, `hasta_profesional_interviniente`, `idCaso`)
VALUES
	(1,'16','2019-02-09 00:00:00',1,NULL,NULL),
	(2,'1','2019-02-04 00:00:00',2,'2019-02-23 00:00:00',NULL),
	(6,'1','2019-02-05 00:00:00',1,NULL,86),
	(7,'12','2019-02-07 00:00:00',1,NULL,86),
	(8,NULL,NULL,NULL,NULL,86),
	(9,'12','2019-02-07 00:00:00',1,NULL,86),
	(10,'3','2019-02-07 00:00:00',2,'2019-02-08 00:00:00',86),
	(11,'14','2019-02-08 00:00:00',1,NULL,86),
	(12,'13','2019-02-13 00:00:00',1,NULL,2),
	(13,'6','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',3),
	(14,'1','2019-02-01 00:00:00',2,'2019-02-10 00:00:00',3),
	(15,'15','2019-02-11 00:00:00',2,'2019-02-26 00:00:00',5),
	(16,'14','2019-02-20 00:00:00',2,'2019-02-10 00:00:00',5),
	(17,'12','2019-02-10 00:00:00',2,'2019-02-10 00:00:00',6),
	(18,'16','2019-02-10 00:00:00',2,'2019-02-10 00:00:00',6),
	(19,'5','2019-02-10 00:00:00',2,'2019-02-10 00:00:00',7),
	(20,'15','2019-02-14 00:00:00',2,'2019-02-10 00:00:00',7),
	(21,'13','2019-02-10 00:00:00',2,'2019-02-10 00:00:00',10),
	(22,'9','2019-02-10 00:00:00',2,'2019-02-10 00:00:00',10),
	(23,'17','2019-02-10 00:00:00',2,'2019-02-11 00:00:00',13),
	(24,'13','2019-02-11 00:00:00',2,'2019-02-11 00:00:00',13),
	(25,'17','2019-02-03 00:00:00',2,'2019-02-19 00:00:00',23),
	(26,'16','2019-02-03 00:00:00',2,'2019-02-03 00:00:00',23),
	(27,'17','2019-01-07 00:00:00',2,'2019-02-03 00:00:00',24),
	(28,'11','2019-02-12 00:00:00',2,'2019-02-12 00:00:00',24),
	(29,'1','2019-02-12 00:00:00',2,'2019-02-12 00:00:00',24),
	(30,'1','2019-02-12 00:00:00',2,'2019-02-12 00:00:00',25),
	(31,'16','2019-02-12 00:00:00',2,'2019-02-13 00:00:00',25),
	(32,'1','2019-02-12 00:00:00',2,'2019-02-12 00:00:00',26),
	(33,'2','2019-02-12 00:00:00',2,'2019-02-13 00:00:00',26),
	(34,'13','2019-02-06 00:00:00',2,'2019-02-12 00:00:00',26),
	(35,'15','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',27),
	(36,'1','2019-02-01 00:00:00',2,'2019-02-13 00:00:00',27),
	(37,'17','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',28),
	(38,'12','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',29),
	(39,'17','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',29),
	(40,'10','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',30),
	(41,'1','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',31),
	(42,'2','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',31),
	(43,'1','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',32),
	(44,'2','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',32),
	(45,'1','2019-02-12 00:00:00',2,'2019-02-13 00:00:00',32),
	(46,'1','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',33),
	(47,'3','2019-02-13 00:00:00',2,'2019-02-13 00:00:00',34),
	(48,'1','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',35),
	(49,'2','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',35),
	(50,'7','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',35),
	(51,'8','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',35),
	(52,'14','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',35),
	(53,'5','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',36),
	(54,'12','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',36),
	(55,'15','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',36),
	(56,'4','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',43),
	(57,'12','2019-02-13 00:00:00',2,'2019-02-14 00:00:00',52),
	(58,'16','2019-02-14 00:00:00',2,'2019-02-14 00:00:00',52),
	(59,'1','2019-02-15 00:00:00',2,'2019-02-15 00:00:00',53),
	(60,'8','2019-02-15 00:00:00',2,'2019-02-15 00:00:00',53),
	(61,'9','2019-02-15 00:00:00',2,'2019-02-15 00:00:00',54),
	(62,'11','2019-02-10 00:00:00',2,'2019-02-15 00:00:00',54),
	(63,'1','2019-02-15 00:00:00',2,'2019-02-19 00:00:00',56),
	(64,'12','2019-02-14 00:00:00',2,'2019-02-15 00:00:00',56),
	(71,'4','2019-02-16 00:00:00',2,'2019-02-23 00:00:00',82),
	(72,'14','2019-02-16 00:00:00',2,'2019-02-16 00:00:00',82),
	(73,'16','2019-02-16 00:00:00',2,'2019-02-16 00:00:00',82),
	(74,'5','2019-02-16 00:00:00',2,'2019-02-16 00:00:00',82),
	(75,'20','2019-02-17 00:00:00',2,'2019-02-04 00:00:00',82),
	(76,'1','2019-02-17 00:00:00',2,'2019-02-17 00:00:00',82),
	(77,'1','2019-02-17 00:00:00',2,'2019-02-17 00:00:00',82),
	(80,'11','2019-02-17 00:00:00',2,'2019-02-17 00:00:00',82),
	(81,'1','2019-02-09 00:00:00',2,'2019-02-26 00:00:00',85),
	(82,'3','2019-02-04 00:00:00',2,'2019-02-16 00:00:00',87),
	(83,'5','2019-02-08 00:00:00',2,'2019-02-12 00:00:00',87),
	(84,'4','2019-02-04 00:00:00',2,'2019-02-12 00:00:00',88),
	(85,'2','2019-02-04 00:00:00',2,'2019-02-04 00:00:00',88),
	(86,'1','2019-02-05 00:00:00',1,NULL,88),
	(87,'2','2019-02-05 00:00:00',1,NULL,89),
	(88,'1','2019-02-08 00:00:00',1,NULL,89),
	(89,'4','2019-02-07 00:00:00',1,NULL,89),
	(90,'6','2019-02-13 00:00:00',1,'2019-02-04 00:00:00',89),
	(91,'4','2019-02-05 00:00:00',2,'2019-02-11 00:00:00',90),
	(92,'2','2019-02-08 00:00:00',2,'2019-02-21 00:00:00',91),
	(93,'7','2019-02-04 00:00:00',1,NULL,91),
	(94,'5','2019-02-14 00:00:00',1,NULL,92),
	(95,'15','2019-02-20 00:00:00',2,'2019-02-22 00:00:00',92),
	(96,'2','2019-02-01 00:00:00',2,'2019-02-13 00:00:00',93),
	(97,'7','2019-02-19 00:00:00',1,NULL,93),
	(98,'2','2019-02-13 00:00:00',1,NULL,94),
	(99,'17','2019-02-04 00:00:00',2,'2019-02-22 00:00:00',94),
	(100,'20','2019-02-12 00:00:00',2,'2019-02-21 00:00:00',95),
	(101,'10','2019-02-07 00:00:00',1,NULL,95),
	(102,'3','2019-02-20 00:00:00',1,NULL,96),
	(103,'4','2019-02-24 00:00:00',1,'2019-02-24 00:00:00',97),
	(104,'7','2019-02-23 00:00:00',2,'2019-02-24 00:00:00',97),
	(105,'14','2019-02-16 00:00:00',1,NULL,98),
	(106,'7','2019-02-12 00:00:00',2,'2019-02-16 00:00:00',98),
	(107,'3','2019-02-09 00:00:00',1,NULL,99),
	(108,'8','2019-02-21 00:00:00',1,NULL,99),
	(109,'4','2019-02-08 00:00:00',1,NULL,100),
	(110,'1','2019-02-21 00:00:00',2,'2019-02-24 00:00:00',101),
	(111,'5','2019-02-01 00:00:00',1,NULL,101),
	(112,'4','2019-02-15 00:00:00',1,NULL,102),
	(113,'2','2019-02-22 00:00:00',1,NULL,103),
	(114,'3','2019-02-13 00:00:00',1,NULL,104),
	(115,'6','2019-02-07 00:00:00',2,'2019-02-20 00:00:00',104),
	(116,'3','2019-02-06 00:00:00',1,NULL,105),
	(117,'13','2019-02-21 00:00:00',1,NULL,105),
	(118,'4','2019-01-31 00:00:00',2,'2019-02-13 00:00:00',106),
	(119,'2','2019-02-08 00:00:00',1,NULL,107);

/*!40000 ALTER TABLE `profesionales` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla programas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `programas`;

CREATE TABLE `programas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `programas` WRITE;
/*!40000 ALTER TABLE `programas` DISABLE KEYS */;

INSERT INTO `programas` (`id`, `nombre`)
VALUES
	(1,'Jubilación'),
	(2,'Asignación Universal por Hijo'),
	(3,'PROGRESAR'),
	(4,'Pensión'),
	(5,'Otro');

/*!40000 ALTER TABLE `programas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla socioeconomicos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `socioeconomicos`;

CREATE TABLE `socioeconomicos` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `socioeconomicos` WRITE;
/*!40000 ALTER TABLE `socioeconomicos` DISABLE KEYS */;

INSERT INTO `socioeconomicos` (`id`, `nombre`)
VALUES
	(1,'Salud'),
	(2,'Educación '),
	(3,'Trabajo'),
	(4,'Vivienda'),
	(5,'Vincular'),
	(6,'Otra');

/*!40000 ALTER TABLE `socioeconomicos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_y_apellido` varchar(255) DEFAULT NULL,
  `sede` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id`, `nombre_y_apellido`, `sede`, `area`, `email`)
VALUES
	(1,'Veronica Haydeé BINCAZ -DIRECTORA PROVINCIAL','LA PLATA','DIRECTORA PROVINCIAL','VEROBINCAZ@hotmail.com '),
	(2,'LUCIA TEALDI-DIRECTORA DE SEDES DECENTRALIZADAS','LA PLATA','DIRECTORA DE SEDES DECENTRALIZADAS','lic.juanbombelli@gmail.com'),
	(3,'Juan Ignacio BOMBELLI-DIRECTOR DE ASISTENCIA Y PROTECCIÓN A LA VÍCTIMA','LA PLATA','DIRECTOR DE ASISTENCIA Y PROTECCIÓN A LA VÍCTIMA','tealdi.lucia@gmail.com'),
	(4,'Romina BENITEZ-PSICÓLOGA','ALTE. BRWON','PSICÓLOGA','rominabenitezar@hotmail.com'),
	(5,'Verónica PEREZ  -TRABAJADORA SOCIAL','ALTE. BRWON','TRABAJADORA SOCIAL','veritoapc@hotmail.com'),
	(6,'Norberto RICCO -ABOGADO','ALTE. BRWON','ABOGADO','norbertoricco@hotmail.com'),
	(7,'María Florencia ARAMBURU-ABOGADA','AZUL','ABOGADA','mflorencia_aramburu@hotmail.com'),
	(8,'Josefina CASADO-PSICÓLOGA','AZUL','PSICÓLOGA','josefina.casado@gmail.com'),
	(9,'María Jimena CIAPPINA-TRABAJADORA SOCIAL','AZUL','TRABAJADORA SOCIAL','jime_ciappina@hotmail.com'),
	(10,'Ignacio Armando BARSELLINI-ABOGADO','BAHIA BLANCA','ABOGADO','ignaciobarsellini@estudiobarsellini.com'),
	(11,'Martín IGLESIA-ADMINISTRATIVO','BAHIA BLANCA','ADMINISTRATIVO','iglesiabraun@hotmail.com.ar'),
	(12,'Ana Catalina OTERO D.-PSICÓLOGA','BAHIA BLANCA','PSICÓLOGA','catalinaotero.bblanca@gmail.com'),
	(13,'Mariela FORNARI-TRABAJADORA SOCIAL','EZEIZA','TRABAJADORA SOCIAL','mariela_delf@hotmail.com'),
	(14,'Noelia LOMBARDO-ABOGADA','EZEIZA','ABOGADA','noeliadlombardo@gmail.com'),
	(15,'Gladys Mabel MATTHESIUS-PSICÓLOGA','EZEIZA','PSICÓLOGA','gmatthesius@hotmail.com'),
	(16,'María Soledad CORTES-ABOGADA','JOSE C. PAZ','ABOGADA','cortes.m.soledad@gmail.com'),
	(17,'Alicia MICHELA-PSICÓLOGA','JOSE C. PAZ','PSICÓLOGA','alimichela@hotmail.com'),
	(18,'Soledad Anabela ROMERO-TRABAJADORA SOCIAL','JOSE C. PAZ','TRABAJADORA SOCIAL','anabela_romero_03@hotmail.com'),
	(19,'Giulietta CUOZZO-PSICÓLOGA','LA MATANZA','PSICÓLOGA','giuliettacuozzo@hotmail.com'),
	(20,'Jesica CRUZ-TRABAJADORA SOCIAL','LA MATANZA','TRABAJADORA SOCIAL','jecru@yahoo.com.ar'),
	(21,'AGUSTINA A. IRIONDO-PSICÓLOGA','LA MATANZA','PSICÓLOGA','agustina.iriondo@hotmail.es'),
	(22,'Rafaela Mariel Velazquez-ABOGADA','LA MATANZA','ABOGADA','mariel_velazquez@hotmail.com.ar'),
	(23,'Jorge APECECHEA-ABOGADO','LA PLATA','ABOGADO','rjapecechea@gmail.com'),
	(24,'Julieta Anahí ARAGUES-PSICÓLOGA','LA PLATA','PSICÓLOGA','julietapsi@gmail.com'),
	(25,'Veronica Haydeé ARDOHAIN-TRABAJADORA SOCIAL','LA PLATA','TRABAJADORA SOCIAL','veronica.ardohain76@gmail.com'),
	(26,'Agustín BEJARANO-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','elbeca_81@hotmail.com'),
	(27,'Maia Yésica CALABRESE-EQUIPO DIRECCIÓN','LA PLATA','EQUIPO DIRECCIÓN','maiacalabrese85@gmail.com'),
	(28,'Maria Lujan CICCONI-PSICÓLOGA','LA PLATA','PSICÓLOGA','marialujancic@gmail.com'),
	(29,'Lucia COMPAGNUCCI-EQUIPO DIRECCIÓN','LA PLATA','EQUIPO DIRECCIÓN','lu.comp1989@gmail.com'),
	(30,'Rosario Leontina CUCCIA-PSICÓLOGA','LA PLATA','PSICÓLOGA','rocuccia@hotmail.com'),
	(31,'Agustina Soledad DE ANDREIS-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','deandreisagustina@gmail.com'),
	(32,'Lucía DE ANTONI-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','ludeantoni@hotmail.com'),
	(33,'Juan Francisco DI NARDO-ABOGADO','LA PLATA','ABOGADO','juanfdinardo@gmail.com'),
	(34,' María Carolina GASSULL-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','carogassull@gmail.com'),
	(35,'Andrea Daniela GIACOMINO-PSICÓLOGA','LA PLATA','PSICÓLOGA','andreagiacomino04@yahoo.com.ar'),
	(36,'Dante Bautista GUILIANI-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','dantegiu@yahoo.com.ar'),
	(37,'Azul LABALTA R.-ABOGADA','LA PLATA','ABOGADA','azul.labalta@gmail.com'),
	(38,'Milagros Aldana LUAYZA T.-ABOGADA','LA PLATA','ABOGADA','MilagrosLuayza@hotmail.com'),
	(39,'Martín Darío MAC LOUGHLIN-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','macloughlinmartin@gmail.com'),
	(40,'Luciano MACIEL-PSICÓLOGO','LA PLATA','PSICÓLOGO','lucianomac@gmail.com'),
	(41,'Sebastián  MACUCHO-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','slommac@hotmail.com'),
	(42,'Verónica Isabel MARTINUZZI R.-PSICÓLOGA','LA PLATA','PSICÓLOGA','veropsicol@hotmail.com'),
	(43,'Silvio Gabriel MONTI-PSICÓLOGO','LA PLATA','PSICÓLOGO','silviomonti@gmail.com'),
	(44,'Agustín MONTONE-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','agus_montone@hotmail.com'),
	(45,'Eliana Silvina MORRONE-PSICÓLOGO','LA PLATA','PSICÓLOGO','elimorrone@gmail.com'),
	(46,'Lisandro Ariel PANELLI-ABOGADO','LA PLATA','ABOGADO','lisandropanelli@gmail.com'),
	(47,'Héctor Rubén PELLEGRINI-ADMINISTRATIVO','LA PLATA','ADMINISTRATIVO','cuchipellegrini@hotmail.com'),
	(48,'Guillermina RISSO-PSICÓLOGA','LA PLATA','PSICÓLOGA','guillerisso@hotmail.com'),
	(49,'Vanina Eleonora SEMINARA-PSICÓLOGA','LA PLATA','PSICÓLOGA','vaninaseminara@hotmail.com'),
	(50,'M. PATRICIA RACK-TRABAJADORA SOCIAL','LA PLATA','TRABAJADORA SOCIAL','patriciarack@gmail.com'),
	(51,'Valeria SOTO-TRABAJADORA SOCIAL','LA PLATA','TRABAJADORA SOCIAL','valerinasoto12@gmail.com'),
	(52,'Maria Guadalupe SOSA-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','cpvconsultadir@gmail.com'),
	(53,'María Candela SERVIN-PSICÓLOGA','LA PLATA','PSICÓLOGA','candeservin@gmail.com'),
	(54,'Paula STROPPOLO-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','paustroppolo25@hotmail.com'),
	(55,'Jacqueline Melina SULAS-ADMINISTRATIVA','LA PLATA','ADMINISTRATIVA','meelinasulasguzman@gmail.com'),
	(56,'Alfonso VICINANZAS-ABOGADO','LA PLATA','ABOGADO','alfonsovicinanza@yahoo.com.ar'),
	(57,'Laura LOGRIEGO-ABOGADA','LANUS','ABOGADA','laura_logriego@yahoo.com.ar'),
	(58,'Ramona RUIZ DIAZ-TRABAJADORA SOCIAL','LANUS','TRABAJADORA SOCIAL','ramonaruizdiaz@hotmail.com'),
	(59,'María Victoria TEMUDIO-PSICÓLOGA','LANUS','PSICÓLOGA','mvtemudio@hotmail.com'),
	(60,'María Alejandra ARRIETA-ADMINISTRATIVA','LOMAS Z.','ADMINISTRATIVA','malearrieta76@hotmail.com'),
	(61,'Analía GALLO-PSICÓLOGA','LOMAS Z.','PSICÓLOGA','ana_liagallo@yahoo.com.ar'),
	(62,'Virginia GALVAN-TRABAJADORA SOCIAL','LOMAS Z.','TRABAJADORA SOCIAL','galvanvirginia@yahoo.com.ar'),
	(63,'Natalia JOFRE-ABOGADA','LOMAS Z.','ABOGADA','nataliajofre22@gmail.com'),
	(64,'Mariciel ORDOÑEZ-TRABAJADORA SOCIAL','LOS TOLDOS','TRABAJADORA SOCIAL','ordoñez.sol85@gmail.com'),
	(65,'LIA SANCHEZ-PSICÓLOGA','LOS TOLDOS','PSICÓLOGA','lia_sanchez8@yahoo.com.ar'),
	(66,'María Belén TAGLIAFERRO-PSICÓLOGA','LOS TOLDOS','PSICÓLOGA','cpvgralviamonte@hotmail.com'),
	(67,'Natalia CASCARDO-PSICÓLOGA','MAR DEL PLATA','PSICÓLOGA','natalia_cascardo@hotmail.com'),
	(68,'Mónica DI MAURO-ADMINISTRATIVA','MAR DEL PLATA','ADMINISTRATIVA','monidimauro@hotmail.com'),
	(69,'Patricio HORN-ABOGADO','MAR DEL PLATA','ABOGADO','patriciohorn@hotmail.com'),
	(70,' José Luis MARTINS-ABOGADO','MAR DEL PLATA','ABOGADO','joseluismartins@hotmail.com'),
	(71,'Luz MUÑIZ-TRABAJADORA SOCIAL','MAR DEL PLATA','TRABAJADORA SOCIAL','luz_22_mm@hotmail.com'),
	(72,'Florencia NOVELLO-PSICÓLOGA','MAR DEL PLATA','PSICÓLOGA','florencianovello@yahoo.com.ar'),
	(73,'Catalina ESPIL-PSICÓLOGA','MERCEDES','PSICÓLOGA','catalinaespil@hotmail.com'),
	(74,'María Pía FRATTINI-TRABAJADORA SOCIAL','MERCEDES','TRABAJADORA SOCIAL','pia.frattini@hotmail.com'),
	(75,'Valeria MANFRIA MASSA-ABOGADA','MERECEDES','ABOGADA','valeriamanfria@gmail.com'),
	(76,'Jorge Gonzalo SESSAREGO B.-ABOGADO','MORENO','ABOGADO','sb.gonzalo@hotmail.com'),
	(77,'Germán LANDGRAF-ABOGADO','MORENO','ABOGADO','german.landgraf@gmail.com'),
	(78,'VALERIA SANCHEZ-PSICÓLOGA','MORENO','PSICÓLOGA','valtasan0910@gmail.com'),
	(79,'Miguel Angel GOMEZ-TRABAJADOR SOCIAL','MORON','TRABAJADOR SOCIAL','gomezmiguelangel12@yahoo.com.ar'),
	(80,'Yésica IZARRIAGA-ABOGADA','MORON','ABOGADA','jessin23@hotmail.com'),
	(81,'Viviana LUCERO-ABOGADA','MORON','ABOGADA','dralucero@live.com'),
	(82,'Isabel MENGHINI-PSICÓLOGA','MORON','PSICÓLOGA','isabel_men@hotmail.com'),
	(83,'Malena PEREZ SOTO-ADMINISTRATIVA','MORON','ADMINISTRATIVA','malenap_@hotmail.com'),
	(84,'EMANUEL FANTE-TRABAJADOR SOCIAL','PERGAMINO','TRABAJADOR SOCIAL','fantemanuel2@gmail.com'),
	(85,'Cecilia MARQUISELLI-PSICÓLOGA','PERGAMINO','PSICÓLOGA','cecimarquiselli@hotmail.com'),
	(86,'Valentina PICCINI M.-ABOGADA','PERGAMINO','ABOGADA','valentinapiccinimanfredini@gmail.com'),
	(87,'Cecilia DIAZ-ABOGADA','PILAR','ABOGADA','dra.diazcecilia@gmail.com'),
	(88,'Bárbara Mariela RAMALLO-TRABAJADORA SOCIAL','PILAR','TRABAJADORA SOCIAL','barbara.ramallo.1980@outlook.com'),
	(89,'Mariana SEMENZATO V.-PSICÓLOGA','PILAR','PSICÓLOGA','mariana_sv3@hotmail.com'),
	(90,'María José DOÑA-ABOGADA','PINAMAR','ABOGADA','estudiojuridicodona@gmail.com'),
	(91,'Matilde PAGGI-PSICÓLOGA','PINAMAR','PSICÓLOGA','matutaur2@hotmail.com'),
	(92,'María José RIVERO-PSICÓLOGA','PINAMAR','PSICÓLOGA','RIVEROMARIAJ@GMAIL.COM'),
	(93,'Alejandra CACERES-TRABAJADORA SOCIAL','QUILMES','TRABAJADORA SOCIAL','alejandracaceres07@yahoo.com>'),
	(94,'CAROLINA PALACIOS-ADMINISTRATIVA','QUILMES','ADMINISTRATIVA','palacios669@hotmail.com'),
	(95,'Marina RIVAROLA-ABOGADA','QUILMES','ABOGADA','rivarolamarinag@gmail.com'),
	(96,'Carolina VENOSA-PSICÓLOGA','QUILMES','PSICÓLOGA','carolinavenosa@gmail.com'),
	(97,'Florencia CAMPI-ABOGADA','SAN FERNANDO','ABOGADA','campiflorencia@hotmail.com'),
	(98,'María Inés DAVERIO-ADMINISTRATIVA','SAN FERNANDO','ADMINISTRATIVA','midaverio@hotmail.com'),
	(99,'María Julia PALAVICINI-PSICÓLOGA','SAN FERNANDO','PSICÓLOGA','jupa_8@hotmail.com'),
	(100,'Verónica SORIANO-ADMINISTRATIVA','SAN FERNANDO','ADMINISTRATIVA','veronicasoriano@yahoo.com'),
	(101,'Carolina BUSQUIER-PSICÓLOGA','SAN MARTIN','PSICÓLOGA','carobusquier@yahoo.com.ar'),
	(102,'Daiana CORDOBA-ABOGADA','SAN MARTIN','ABOGADA','daianabrendacordoba@yahoo.com.ar'),
	(103,'Diego DALLA TORRE-ABOGADO','SAN MARTIN','ABOGADO','estudiodt@gmail.com'),
	(104,'Lorena MAGISTA-ADMINISTRATIVA','SAN MARTIN','ADMINISTRATIVA','loremagista@gmail.com'),
	(105,'Micaela ALCUAZ-ABOGADA','TANDIL','ABOGADA','alcuazm@hotmail.com'),
	(106,'Silvana CERDA-PSICÓLOGA','TANDIL','PSICÓLOGA','casilvana@hotmail.com'),
	(107,'Alicia RUBILAR-TRABAJADORA SOCIAL','TANDIL','TRABAJADORA SOCIAL','alicia_rubilar@hotmail.com'),
	(108,'Verónica ATTALA-PSICÓLOGA','VICENTE LOPEZ','PSICÓLOGA','verocracea@yahoo.com'),
	(109,'Lucía PIROVANI-ABOGADA','VICENTE LOPEZ','ABOGADA','lutipirovani@hotmail.com'),
	(110,'Pablo PORUBSKY-ABOGADO','VICENTE LOPEZ','ABOGADO','pablo.porubsky@gmail.com'),
	(111,'Natalia CRIBELLI-PSICÓLOGA','ZARATE','PSICÓLOGA','nataliacribelli@hotmail.com.a'),
	(112,'Lucía FRACCAROLLI-ABOGADA','ZARATE','ABOGADA','l.fraccarolli@live.com'),
	(113,'Solange MINUCCI-TRABAJADORA SOCIAL','BAHIA BLANCA','TRABAJADORA SOCIAL','minuccisol@gmail.com'),
	(114,'Ignacio  KLENA-ABOGADO','LA PLATA','ABOGADO','ignacioklena@hotmail.com'),
	(115,'Maria Emilia MATHE-ABOGADA','SAN ISIDRO','ABOGADA','mariaemiliamathe@gmail.com');

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla usuariosprofesionales
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuariosprofesionales`;

CREATE TABLE `usuariosprofesionales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_y_apellido` varchar(255) DEFAULT NULL,
  `sede` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `usuariosprofesionales` WRITE;
/*!40000 ALTER TABLE `usuariosprofesionales` DISABLE KEYS */;

INSERT INTO `usuariosprofesionales` (`id`, `nombre_y_apellido`, `sede`, `area`, `email`)
VALUES
	(1,'Romina BENITEZ-PSICÓLOGA','ALTE. BRWON','PSICÓLOGA','rominabenitezar@hotmail.com'),
	(2,'Verónica PEREZ  -TRABAJADORA SOCIAL','ALTE. BRWON','TRABAJADORA SOCIAL','veritoapc@hotmail.com'),
	(3,'Norberto RICCO -ABOGADO','ALTE. BRWON','ABOGADO','norbertoricco@hotmail.com'),
	(4,'María Florencia ARAMBURU-ABOGADA','AZUL','ABOGADA','mflorencia_aramburu@hotmail.com'),
	(5,'Josefina CASADO-PSICÓLOGA','AZUL','PSICÓLOGA','josefina.casado@gmail.com'),
	(6,'María Jimena CIAPPINA-TRABAJADORA SOCIAL','AZUL','TRABAJADORA SOCIAL','jime_ciappina@hotmail.com'),
	(7,'Ignacio Armando BARSELLINI-ABOGADO','BAHIA BLANCA','ABOGADO','ignaciobarsellini@estudiobarsellini.com'),
	(8,'Ana Catalina OTERO D.-PSICÓLOGA','BAHIA BLANCA','PSICÓLOGA','catalinaotero.bblanca@gmail.com'),
	(9,'Mariela FORNARI-TRABAJADORA SOCIAL','EZEIZA','TRABAJADORA SOCIAL','mariela_delf@hotmail.com'),
	(10,'Noelia LOMBARDO-ABOGADA','EZEIZA','ABOGADA','noeliadlombardo@gmail.com'),
	(11,'Gladys Mabel MATTHESIUS-PSICÓLOGA','EZEIZA','PSICÓLOGA','gmatthesius@hotmail.com'),
	(12,'María Soledad CORTES-ABOGADA','JOSE C. PAZ','ABOGADA','cortes.m.soledad@gmail.com'),
	(13,'Alicia MICHELA-PSICÓLOGA','JOSE C. PAZ','PSICÓLOGA','alimichela@hotmail.com'),
	(14,'Soledad Anabela ROMERO-TRABAJADORA SOCIAL','JOSE C. PAZ','TRABAJADORA SOCIAL','anabela_romero_03@hotmail.com'),
	(15,'Giulietta CUOZZO-PSICÓLOGA','LA MATANZA','PSICÓLOGA','giuliettacuozzo@hotmail.com'),
	(16,'Jesica CRUZ-TRABAJADORA SOCIAL','LA MATANZA','TRABAJADORA SOCIAL','jecru@yahoo.com.ar'),
	(17,'AGUSTINA A. IRIONDO-PSICÓLOGA','LA MATANZA','PSICÓLOGA','agustina.iriondo@hotmail.es'),
	(18,'Rafaela Mariel Velazquez-ABOGADA','LA MATANZA','ABOGADA','mariel_velazquez@hotmail.com.ar'),
	(19,'Jorge APECECHEA-ABOGADO','LA PLATA','ABOGADO','rjapecechea@gmail.com'),
	(20,'Julieta Anahí ARAGUES-PSICÓLOGA','LA PLATA','PSICÓLOGA','julietapsi@gmail.com'),
	(21,'Veronica Haydeé ARDOHAIN-TRABAJADORA SOCIAL','LA PLATA','TRABAJADORA SOCIAL','veronica.ardohain76@gmail.com'),
	(22,'Maria Lujan CICCONI-PSICÓLOGA','LA PLATA','PSICÓLOGA','marialujancic@gmail.com'),
	(23,'Rosario Leontina CUCCIA-PSICÓLOGA','LA PLATA','PSICÓLOGA','rocuccia@hotmail.com'),
	(24,'Juan Francisco DI NARDO-ABOGADO','LA PLATA','ABOGADO','juanfdinardo@gmail.com'),
	(25,'Andrea Daniela GIACOMINO-PSICÓLOGA','LA PLATA','PSICÓLOGA','andreagiacomino04@yahoo.com.ar'),
	(26,'Azul LABALTA R.-ABOGADA','LA PLATA','ABOGADA','azul.labalta@gmail.com'),
	(27,'Milagros Aldana LUAYZA T.-ABOGADA','LA PLATA','ABOGADA','MilagrosLuayza@hotmail.com'),
	(28,'Luciano MACIEL-PSICÓLOGO','LA PLATA','PSICÓLOGO','lucianomac@gmail.com'),
	(29,'Verónica Isabel MARTINUZZI R.-PSICÓLOGA','LA PLATA','PSICÓLOGA','veropsicol@hotmail.com'),
	(30,'Silvio Gabriel MONTI-PSICÓLOGO','LA PLATA','PSICÓLOGO','silviomonti@gmail.com'),
	(31,'Eliana Silvina MORRONE-PSICÓLOGO','LA PLATA','PSICÓLOGO','elimorrone@gmail.com'),
	(32,'Lisandro Ariel PANELLI-ABOGADO','LA PLATA','ABOGADO','lisandropanelli@gmail.com'),
	(33,'Guillermina RISSO-PSICÓLOGA','LA PLATA','PSICÓLOGA','guillerisso@hotmail.com'),
	(34,'Vanina Eleonora SEMINARA-PSICÓLOGA','LA PLATA','PSICÓLOGA','vaninaseminara@hotmail.com'),
	(35,'M. PATRICIA RACK-TRABAJADORA SOCIAL','LA PLATA','TRABAJADORA SOCIAL','patriciarack@gmail.com'),
	(36,'Valeria SOTO-TRABAJADORA SOCIAL','LA PLATA','TRABAJADORA SOCIAL','valerinasoto12@gmail.com'),
	(37,'María Candela SERVIN-PSICÓLOGA','LA PLATA','PSICÓLOGA','candeservin@gmail.com'),
	(38,'Alfonso VICINANZAS-ABOGADO','LA PLATA','ABOGADO','alfonsovicinanza@yahoo.com.ar'),
	(39,'Laura LOGRIEGO-ABOGADA','LANUS','ABOGADA','laura_logriego@yahoo.com.ar'),
	(40,'Ramona RUIZ DIAZ-TRABAJADORA SOCIAL','LANUS','TRABAJADORA SOCIAL','ramonaruizdiaz@hotmail.com'),
	(41,'María Victoria TEMUDIO-PSICÓLOGA','LANUS','PSICÓLOGA','mvtemudio@hotmail.com'),
	(42,'Analía GALLO-PSICÓLOGA','LOMAS Z.','PSICÓLOGA','ana_liagallo@yahoo.com.ar'),
	(43,'Virginia GALVAN-TRABAJADORA SOCIAL','LOMAS Z.','TRABAJADORA SOCIAL','galvanvirginia@yahoo.com.ar'),
	(44,'Natalia JOFRE-ABOGADA','LOMAS Z.','ABOGADA','nataliajofre22@gmail.com'),
	(45,'Mariciel ORDOÑEZ-TRABAJADORA SOCIAL','LOS TOLDOS','TRABAJADORA SOCIAL','ordoñez.sol85@gmail.com'),
	(46,'LIA SANCHEZ-PSICÓLOGA','LOS TOLDOS','PSICÓLOGA','lia_sanchez8@yahoo.com.ar'),
	(47,'María Belén TAGLIAFERRO-PSICÓLOGA','LOS TOLDOS','PSICÓLOGA','cpvgralviamonte@hotmail.com'),
	(48,'Natalia CASCARDO-PSICÓLOGA','MAR DEL PLATA','PSICÓLOGA','natalia_cascardo@hotmail.com'),
	(49,'Patricio HORN-ABOGADO','MAR DEL PLATA','ABOGADO','patriciohorn@hotmail.com'),
	(50,' José Luis MARTINS-ABOGADO','MAR DEL PLATA','ABOGADO','joseluismartins@hotmail.com'),
	(51,'Luz MUÑIZ-TRABAJADORA SOCIAL','MAR DEL PLATA','TRABAJADORA SOCIAL','luz_22_mm@hotmail.com'),
	(52,'Florencia NOVELLO-PSICÓLOGA','MAR DEL PLATA','PSICÓLOGA','florencianovello@yahoo.com.ar'),
	(53,'Catalina ESPIL-PSICÓLOGA','MERCEDES','PSICÓLOGA','catalinaespil@hotmail.com'),
	(54,'María Pía FRATTINI-TRABAJADORA SOCIAL','MERCEDES','TRABAJADORA SOCIAL','pia.frattini@hotmail.com'),
	(55,'Valeria MANFRIA MASSA-ABOGADA','MERECEDES','ABOGADA','valeriamanfria@gmail.com'),
	(56,'Jorge Gonzalo SESSAREGO B.-ABOGADO','MORENO','ABOGADO','sb.gonzalo@hotmail.com'),
	(57,'Germán LANDGRAF-ABOGADO','MORENO','ABOGADO','german.landgraf@gmail.com'),
	(58,'VALERIA SANCHEZ-PSICÓLOGA','MORENO','PSICÓLOGA','valtasan0910@gmail.com'),
	(59,'Miguel Angel GOMEZ-TRABAJADOR SOCIAL','MORON','TRABAJADOR SOCIAL','gomezmiguelangel12@yahoo.com.ar'),
	(60,'Yésica IZARRIAGA-ABOGADA','MORON','ABOGADA','jessin23@hotmail.com'),
	(61,'Viviana LUCERO-ABOGADA','MORON','ABOGADA','dralucero@live.com'),
	(62,'Isabel MENGHINI-PSICÓLOGA','MORON','PSICÓLOGA','isabel_men@hotmail.com'),
	(63,'EMANUEL FANTE-TRABAJADOR SOCIAL','PERGAMINO','TRABAJADOR SOCIAL','fantemanuel2@gmail.com'),
	(64,'Cecilia MARQUISELLI-PSICÓLOGA','PERGAMINO','PSICÓLOGA','cecimarquiselli@hotmail.com'),
	(65,'Valentina PICCINI M.-ABOGADA','PERGAMINO','ABOGADA','valentinapiccinimanfredini@gmail.com'),
	(66,'Cecilia DIAZ-ABOGADA','PILAR','ABOGADA','dra.diazcecilia@gmail.com'),
	(67,'Bárbara Mariela RAMALLO-TRABAJADORA SOCIAL','PILAR','TRABAJADORA SOCIAL','barbara.ramallo.1980@outlook.com'),
	(68,'Mariana SEMENZATO V.-PSICÓLOGA','PILAR','PSICÓLOGA','mariana_sv3@hotmail.com'),
	(69,'María José DOÑA-ABOGADA','PINAMAR','ABOGADA','estudiojuridicodona@gmail.com'),
	(70,'Matilde PAGGI-PSICÓLOGA','PINAMAR','PSICÓLOGA','matutaur2@hotmail.com'),
	(71,'María José RIVERO-PSICÓLOGA','PINAMAR','PSICÓLOGA','RIVEROMARIAJ@GMAIL.COM'),
	(72,'Alejandra CACERES-TRABAJADORA SOCIAL','QUILMES','TRABAJADORA SOCIAL','alejandracaceres07@yahoo.com>'),
	(73,'Marina RIVAROLA-ABOGADA','QUILMES','ABOGADA','rivarolamarinag@gmail.com'),
	(74,'Carolina VENOSA-PSICÓLOGA','QUILMES','PSICÓLOGA','carolinavenosa@gmail.com'),
	(75,'Florencia CAMPI-ABOGADA','SAN FERNANDO','ABOGADA','campiflorencia@hotmail.com'),
	(76,'María Julia PALAVICINI-PSICÓLOGA','SAN FERNANDO','PSICÓLOGA','jupa_8@hotmail.com'),
	(77,'Carolina BUSQUIER-PSICÓLOGA','SAN MARTIN','PSICÓLOGA','carobusquier@yahoo.com.ar'),
	(78,'Daiana CORDOBA-ABOGADA','SAN MARTIN','ABOGADA','daianabrendacordoba@yahoo.com.ar'),
	(79,'Diego DALLA TORRE-ABOGADO','SAN MARTIN','ABOGADO','estudiodt@gmail.com'),
	(80,'Micaela ALCUAZ-ABOGADA','TANDIL','ABOGADA','alcuazm@hotmail.com'),
	(81,'Silvana CERDA-PSICÓLOGA','TANDIL','PSICÓLOGA','casilvana@hotmail.com'),
	(82,'Alicia RUBILAR-TRABAJADORA SOCIAL','TANDIL','TRABAJADORA SOCIAL','alicia_rubilar@hotmail.com'),
	(83,'Verónica ATTALA-PSICÓLOGA','VICENTE LOPEZ','PSICÓLOGA','verocracea@yahoo.com'),
	(84,'Lucía PIROVANI-ABOGADA','VICENTE LOPEZ','ABOGADA','lutipirovani@hotmail.com'),
	(85,'Pablo PORUBSKY-ABOGADO','VICENTE LOPEZ','ABOGADO','pablo.porubsky@gmail.com'),
	(86,'Natalia CRIBELLI-PSICÓLOGA','ZARATE','PSICÓLOGA','nataliacribelli@hotmail.com.a'),
	(87,'Lucía FRACCAROLLI-ABOGADA','ZARATE','ABOGADA','l.fraccarolli@live.com'),
	(88,'Solange MINUCCI-TRABAJADORA SOCIAL','BAHIA BLANCA','TRABAJADORA SOCIAL','minuccisol@gmail.com'),
	(89,'Ignacio  KLENA-ABOGADO','LA PLATA','ABOGADO','ignacioklena@hotmail.com'),
	(90,'Maria Emilia MATHE-ABOGADA','SAN ISIDRO','ABOGADA','mariaemiliamathe@gmail.com');

/*!40000 ALTER TABLE `usuariosprofesionales` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla victima_discapacidad
# ------------------------------------------------------------

DROP TABLE IF EXISTS `victima_discapacidad`;

CREATE TABLE `victima_discapacidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `victima_id` int(11) DEFAULT NULL,
  `discapacidad_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `victima_discapacidad` WRITE;
/*!40000 ALTER TABLE `victima_discapacidad` DISABLE KEYS */;

INSERT INTO `victima_discapacidad` (`id`, `victima_id`, `discapacidad_id`)
VALUES
	(1,75,1),
	(2,75,2),
	(3,75,3),
	(4,75,4),
	(5,76,1),
	(6,76,2),
	(7,86,3),
	(8,87,3),
	(9,88,2),
	(10,88,3);

/*!40000 ALTER TABLE `victima_discapacidad` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla victima_limitacion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `victima_limitacion`;

CREATE TABLE `victima_limitacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `victima_id` int(11) DEFAULT NULL,
  `limitacion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `victima_limitacion` WRITE;
/*!40000 ALTER TABLE `victima_limitacion` DISABLE KEYS */;

INSERT INTO `victima_limitacion` (`id`, `victima_id`, `limitacion_id`)
VALUES
	(1,76,1),
	(2,76,2),
	(3,86,2),
	(4,87,2),
	(5,88,2),
	(6,88,3);

/*!40000 ALTER TABLE `victima_limitacion` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla victima_necesidad
# ------------------------------------------------------------

DROP TABLE IF EXISTS `victima_necesidad`;

CREATE TABLE `victima_necesidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `victima_id` int(11) DEFAULT NULL,
  `necesidad_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `victima_necesidad` WRITE;
/*!40000 ALTER TABLE `victima_necesidad` DISABLE KEYS */;

INSERT INTO `victima_necesidad` (`id`, `victima_id`, `necesidad_id`)
VALUES
	(1,26,6),
	(2,26,7),
	(3,26,8),
	(4,27,1),
	(5,27,3),
	(6,27,5),
	(7,27,7),
	(8,28,1),
	(9,28,2),
	(10,29,1),
	(11,29,2),
	(12,30,1),
	(13,30,2),
	(14,30,3),
	(15,30,4),
	(16,30,5),
	(17,30,6),
	(18,31,1),
	(19,31,2),
	(20,32,1),
	(21,32,2),
	(22,33,1),
	(23,33,2),
	(24,33,3),
	(25,34,1),
	(26,34,2),
	(27,35,1),
	(28,35,2),
	(29,36,1),
	(30,36,2),
	(31,37,1),
	(32,37,2),
	(33,38,1),
	(34,38,2),
	(35,39,1),
	(36,39,2),
	(37,40,1),
	(38,40,2),
	(39,41,1),
	(40,41,2),
	(41,42,1),
	(42,42,2),
	(43,43,1),
	(44,43,2),
	(45,44,1),
	(46,44,2),
	(47,44,3),
	(48,44,4),
	(49,44,5),
	(50,44,6),
	(51,44,7),
	(52,45,1),
	(53,45,2),
	(54,46,1),
	(55,46,2),
	(56,48,1),
	(57,48,2),
	(58,49,1),
	(59,49,2),
	(60,50,1),
	(61,50,2),
	(62,51,1),
	(63,51,2),
	(64,52,1),
	(65,52,2),
	(66,52,3),
	(67,53,1),
	(68,53,2),
	(69,54,1),
	(70,54,2),
	(71,55,1),
	(72,55,2),
	(73,55,3),
	(74,69,1),
	(75,69,2),
	(76,69,3),
	(77,70,1),
	(78,70,2),
	(79,70,3),
	(80,70,4),
	(81,70,5),
	(82,70,6),
	(83,70,7),
	(84,71,1),
	(85,71,2),
	(86,71,3),
	(87,71,4),
	(88,72,1),
	(89,72,2),
	(90,72,3),
	(91,72,4),
	(92,73,1),
	(93,73,2),
	(94,73,3),
	(95,73,4),
	(96,74,1),
	(97,74,2),
	(98,74,3),
	(99,75,1),
	(100,75,2),
	(101,75,3),
	(102,75,4),
	(103,76,1),
	(104,76,2),
	(105,79,3),
	(106,79,5),
	(107,86,3),
	(108,86,4),
	(109,87,3),
	(110,88,5),
	(111,88,6);

/*!40000 ALTER TABLE `victima_necesidad` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla victima_programa
# ------------------------------------------------------------

DROP TABLE IF EXISTS `victima_programa`;

CREATE TABLE `victima_programa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `victima_id` int(11) DEFAULT NULL,
  `programa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `victima_programa` WRITE;
/*!40000 ALTER TABLE `victima_programa` DISABLE KEYS */;

INSERT INTO `victima_programa` (`id`, `victima_id`, `programa_id`)
VALUES
	(1,74,1),
	(2,74,2),
	(3,75,1),
	(4,75,2),
	(5,75,3),
	(6,75,4),
	(7,76,1),
	(8,76,2),
	(9,86,1),
	(10,87,2),
	(11,88,3);

/*!40000 ALTER TABLE `victima_programa` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla victims
# ------------------------------------------------------------

DROP TABLE IF EXISTS `victims`;

CREATE TABLE `victims` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `victima_nombre_y_apellido` varchar(255) DEFAULT NULL,
  `genero` int(11) DEFAULT NULL,
  `victima_fecha_nacimiento` datetime DEFAULT NULL,
  `victima_edad` int(11) DEFAULT NULL,
  `franjaetaria` int(11) DEFAULT NULL,
  `tienedoc` varchar(11) DEFAULT NULL,
  `tipodocumento` varchar(11) DEFAULT NULL,
  `tipo_documento_otro` varchar(255) DEFAULT NULL,
  `residenciaprecaria` int(11) DEFAULT NULL,
  `victima_numero_documento` int(11) DEFAULT NULL,
  `niveleducativo` int(11) DEFAULT NULL,
  `condiciones_de_trabajo` int(11) NOT NULL,
  `necesidades_socioeconomicas_insatisfechas` int(11) DEFAULT NULL,
  `necesidades_socioeconomicas_insatisfechas_otro` varchar(255) DEFAULT NULL,
  `programa_subsidio` int(11) DEFAULT NULL,
  `programa_subsidio_otro` varchar(255) DEFAULT NULL,
  `embarazorelevamiento` int(11) DEFAULT NULL,
  `tiene_discapacidad` int(11) DEFAULT NULL,
  `tienelesion` int(11) DEFAULT NULL,
  `tipo_lesion` varchar(255) DEFAULT NULL,
  `enfermedadcronica` int(11) DEFAULT NULL,
  `tipo_enfermedad_cronica` varchar(255) DEFAULT NULL,
  `tiene_limitacion` int(11) DEFAULT NULL,
  `limitacion_otro` varchar(255) DEFAULT NULL,
  `idCaso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `victims` WRITE;
/*!40000 ALTER TABLE `victims` DISABLE KEYS */;

INSERT INTO `victims` (`id`, `victima_nombre_y_apellido`, `genero`, `victima_fecha_nacimiento`, `victima_edad`, `franjaetaria`, `tienedoc`, `tipodocumento`, `tipo_documento_otro`, `residenciaprecaria`, `victima_numero_documento`, `niveleducativo`, `condiciones_de_trabajo`, `necesidades_socioeconomicas_insatisfechas`, `necesidades_socioeconomicas_insatisfechas_otro`, `programa_subsidio`, `programa_subsidio_otro`, `embarazorelevamiento`, `tiene_discapacidad`, `tienelesion`, `tipo_lesion`, `enfermedadcronica`, `tipo_enfermedad_cronica`, `tiene_limitacion`, `limitacion_otro`, `idCaso`)
VALUES
	(1,'maoaoaoaooa',1,'2019-02-13 00:00:00',25,3,'5','1',NULL,NULL,25341693,4,1,2,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,NULL),
	(2,'VICTIMA DOS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(3,'CASO DOS',4,'2019-02-13 00:00:00',30,3,'1','1',NULL,NULL,253416,1,2,2,NULL,2,NULL,NULL,NULL,1,'LESIONES',1,'CRONICAS',NULL,NULL,NULL),
	(4,'VICTIMA NUEVA',3,'2019-02-14 00:00:00',20,3,'1','3',NULL,NULL,2536147,4,3,1,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,NULL),
	(5,'UNA VICTIMA',1,'2019-02-06 00:00:00',33,4,'1','1',NULL,NULL,2536596,3,2,1,NULL,2,NULL,1,NULL,1,'LESIONES',1,'CRONICA',NULL,NULL,NULL),
	(6,'VICTIMA-CASO',3,'2019-02-13 00:00:00',45,4,'5','1',NULL,NULL,254693,2,2,2,NULL,2,NULL,NULL,NULL,1,'LESION',1,'ENF CRONICA',NULL,NULL,NULL),
	(7,'AGREGADO DE VICTIMA',1,'2019-02-13 00:00:00',40,4,'1','9',NULL,NULL,25365987,3,2,2,NULL,2,NULL,1,NULL,1,'LESIONES LESIONES',1,'CRONICAS CRONICAS',NULL,NULL,32),
	(8,'PERONA PERSONA',2,'2019-02-13 00:00:00',50,4,'5','9',NULL,NULL,2536212,4,1,1,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,32),
	(9,'VICTIMA-NECESIDAD',3,'2019-02-13 00:00:00',35,4,'1','1',NULL,NULL,2534693,1,4,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,32),
	(10,'VICTIMA-NECESIDADES',3,'2019-02-13 00:00:00',34,4,'1','1',NULL,NULL,2536987,NULL,2,1,NULL,2,NULL,NULL,NULL,1,'LESIONES',1,'CRONICAS',NULL,NULL,32),
	(11,'PRUEBASSSSS',3,'2019-02-13 00:00:00',34,4,'3','7',NULL,NULL,2533156,3,2,1,NULL,2,NULL,2,NULL,1,'LESION V',1,'CRONICA',NULL,NULL,33),
	(12,'PRUEBASSSSS',3,'2019-02-13 00:00:00',34,4,'3','7',NULL,NULL,2533156,3,2,1,NULL,2,NULL,2,NULL,1,'LESION V',1,'CRONICA',NULL,NULL,33),
	(13,'PRUEBASSSSS',3,'2019-02-13 00:00:00',34,4,'3','7',NULL,NULL,2533156,3,2,1,NULL,2,NULL,2,NULL,1,'LESION V',1,'CRONICA',NULL,NULL,33),
	(14,'PRUEBA',1,'2019-02-13 00:00:00',32,4,'5','1',NULL,NULL,213625,1,2,1,NULL,NULL,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(15,'VICTIMA VICTIMA',3,'2019-02-13 00:00:00',30,3,'5','1',NULL,NULL,2534569,1,2,1,NULL,2,NULL,NULL,NULL,1,'LESIONES',1,'CRONICAS',NULL,NULL,34),
	(16,'VICTIMA VICTIMA',3,'2019-02-13 00:00:00',30,3,'5','1',NULL,NULL,2534569,1,2,1,NULL,2,NULL,2,NULL,1,'LESIONES',1,'CRONICAS',NULL,NULL,34),
	(17,'NECESITADES',3,'2019-02-13 00:00:00',42,4,'1','5',NULL,NULL,3265987,3,4,1,NULL,2,NULL,NULL,NULL,1,'LESIONES',1,'ENFERMEDADES',NULL,NULL,34),
	(18,'NECESITADES',3,'2019-02-13 00:00:00',42,4,'1','5',NULL,NULL,3265987,3,4,1,NULL,2,NULL,2,NULL,1,'LESIONES',1,'ENFERMEDADES',NULL,NULL,34),
	(19,'VICTIMASSS',2,'2019-02-13 00:00:00',25,3,'1',NULL,NULL,NULL,256326,7,1,1,NULL,1,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(20,'VICTIMASSS',2,'2019-02-13 00:00:00',25,3,'1',NULL,NULL,NULL,256326,7,1,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(21,'VICTIMASSS',2,'2019-02-13 00:00:00',25,3,'1',NULL,NULL,NULL,256326,7,1,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(22,'PRUEBASSS',3,'2019-02-13 00:00:00',45,4,'1','3',NULL,NULL,2536987,4,1,1,'OTRA NECESIDAD',2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(23,'kakalalal',2,'2019-02-13 00:00:00',45,4,'1','3',NULL,NULL,1236548989,4,2,1,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(24,'kakalalal',2,'2019-02-13 00:00:00',45,4,'1','3',NULL,NULL,1236548989,4,2,1,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(25,'kakalalal',2,'2019-02-13 00:00:00',45,4,'1','3',NULL,NULL,1236548989,4,2,1,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(26,'kakalalal',2,'2019-02-13 00:00:00',45,4,'1','3',NULL,NULL,1236548989,4,2,1,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,34),
	(27,'PRUEBA OK',2,'2019-02-13 00:00:00',23,3,'1',NULL,NULL,NULL,2365456,4,2,1,'OTRA NECESIDAD',2,NULL,NULL,NULL,1,'LESIONES',1,'ENFERMEDADES CRONICAS',NULL,NULL,34),
	(28,'VICTIMA PROGRAMA',2,'2019-02-14 00:00:00',27,3,'1','1',NULL,NULL,25364198,3,1,1,'OTRA NECESIDAD',2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(29,'VICTIMA PROGRAMA',2,'2019-02-14 00:00:00',27,3,'1','1',NULL,NULL,25364198,3,1,1,'OTRA NECESIDAD',2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(30,'VICTIMA PROGRAMA 2',2,'2019-02-14 00:00:00',NULL,NULL,'1','1',NULL,NULL,2536987,2,2,1,'OTRA NECESIDAD',2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(31,'VICTIMA PROGRAMA NUEVA PRUEBA',2,'2019-02-14 00:00:00',56,5,'1','1',NULL,NULL,2536987,1,2,1,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(32,'VICTIMA PROGRAMA',2,'2019-02-14 00:00:00',23,3,'1','2',NULL,NULL,2536987,3,1,1,NULL,1,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(33,'PRUEBA NUEVA PROGRAMA',2,'2019-02-14 00:00:00',45,4,'1','1',NULL,NULL,23659456,1,2,1,NULL,1,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(34,'mmmmmmmmmmmmm',1,'2019-02-14 00:00:00',45,4,'1','2',NULL,NULL,2536266,2,3,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(35,'VICTIMA PROGRAMA',2,'2019-02-14 00:00:00',23,3,'1','2',NULL,NULL,2536987,3,1,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(36,'lllllllllllllll',2,'2019-02-14 00:00:00',42,4,'1','1',NULL,NULL,25364789,6,1,1,NULL,1,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(37,'lllllllllllllll',2,'2019-02-14 00:00:00',42,4,'1','1',NULL,NULL,25364789,6,1,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(38,'lllllllllllllll',2,'2019-02-14 00:00:00',42,4,'1','1',NULL,NULL,25364789,6,1,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(39,'lllllllllllllll',2,'2019-02-14 00:00:00',42,4,'1','1',NULL,NULL,25364789,6,1,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(40,'lllllllllllll',2,'2019-02-14 00:00:00',18,2,'3','7',NULL,NULL,2536987,2,1,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(41,'lllllllllllll',2,'2019-02-14 00:00:00',18,2,'3','7',NULL,NULL,2536987,2,1,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(42,'lflflflfl',1,'2019-02-14 00:00:00',47,4,'1','1',NULL,NULL,2536589,1,4,1,NULL,1,NULL,1,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(43,'lflflflfl',1,'2019-02-14 00:00:00',47,4,'1','1',NULL,NULL,2536589,1,4,1,NULL,1,NULL,1,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(44,'lflflflfl',1,'2019-02-14 00:00:00',47,4,'1','1',NULL,NULL,2536589,1,4,1,'OTRA NECESIDAD',1,NULL,1,NULL,2,NULL,2,NULL,NULL,NULL,35),
	(45,'lalalalla',2,'2019-02-14 00:00:00',56,5,'5','1',NULL,NULL,2536987,2,3,1,NULL,1,NULL,NULL,NULL,1,'lesion',1,'cronicas',NULL,NULL,36),
	(46,'lalalalla',2,'2019-02-14 00:00:00',56,5,'5','1',NULL,NULL,2536987,2,3,1,NULL,1,NULL,2,NULL,1,'lesion',1,'cronicas',NULL,NULL,36),
	(47,'lalallala',1,'2019-02-14 00:00:00',58,5,'1',NULL,NULL,NULL,256399,2,1,1,NULL,1,NULL,1,NULL,2,NULL,2,NULL,NULL,NULL,36),
	(48,'NO ENVIA PROGRAMAS AL FORM',1,'2019-02-14 00:00:00',58,5,'1',NULL,NULL,NULL,256399,2,1,1,NULL,1,NULL,1,NULL,2,NULL,2,NULL,NULL,NULL,36),
	(49,'VICTIMA PROGRAMASSSSSSSSS',2,'2019-02-14 00:00:00',23,3,'1','1',NULL,NULL,253698,1,2,1,NULL,1,NULL,NULL,NULL,1,'LESIONES',2,NULL,NULL,NULL,36),
	(50,'VICTIMA PROGRAMASSSSSSSSS',2,'2019-02-14 00:00:00',23,3,'1','1',NULL,NULL,253698,1,2,1,NULL,1,NULL,2,NULL,1,'LESIONES',2,NULL,NULL,NULL,36),
	(51,'VICTIMA PROGRAMASSSSSSSSS',2,'2019-02-14 00:00:00',23,3,'1','1',NULL,NULL,253698,1,2,1,NULL,1,NULL,2,NULL,1,'LESIONES',2,NULL,NULL,NULL,36),
	(52,'DISCAPACIDADES',2,'2019-02-14 00:00:00',36,4,'5','1',NULL,NULL,253698,2,1,1,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,36),
	(53,'PRUEBA FINAL',2,'2019-02-14 00:00:00',56,5,'1','1',NULL,NULL,25364569,1,2,1,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,36),
	(54,'PRUEBA FINAL',2,'2019-02-14 00:00:00',56,5,'1','1',NULL,NULL,25364569,1,2,1,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,36),
	(55,'PRUEBA FINAL FINAL',2,'2019-02-14 00:00:00',28,3,'1','2',NULL,NULL,25369878,1,4,1,'OTRA NECESIDAD',1,'OTRO PROGRAMA',NULL,NULL,1,'LESIONES LESIONES',1,'CRONICO CRONICO',NULL,'OTRA LIMITACION',36),
	(56,'VICTIMA1',3,'2019-02-15 00:00:00',24,3,'1','1',NULL,NULL,2541369,2,4,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,43),
	(57,'VICTIMA1',3,'2019-02-15 00:00:00',24,3,'1','1',NULL,NULL,2541369,2,4,NULL,NULL,NULL,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,43),
	(58,'VICTIM2',2,'2019-02-14 00:00:00',52,5,'1','1',NULL,NULL,253698,6,4,2,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,43),
	(59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,43),
	(60,'VICTIMA1',1,NULL,20,3,'1','1',NULL,NULL,253698,4,2,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,NULL,NULL,52),
	(61,'MARIA MARTA',1,'2019-02-15 00:00:00',28,3,'1','4',NULL,NULL,2536987,2,3,1,'OTRA NECESIDAD',1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,54),
	(62,'VICTIMA 1',3,'2019-02-15 00:00:00',23,3,'1','3',NULL,NULL,2365974,5,1,1,NULL,1,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,56),
	(68,'NECESIDADES',NULL,'2019-02-16 00:00:00',40,4,'1','2',NULL,NULL,2563598,2,2,1,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,82),
	(69,'PRUEBA ATACH NECESIDADES',2,'2019-02-17 00:00:00',45,4,'1','3',NULL,NULL,253668,4,1,1,NULL,1,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,82),
	(70,'OTRA PRUEBA ATACH',3,'2019-02-17 00:00:00',45,4,'1','3',NULL,NULL,2536987,4,1,1,'OTRA NECESIDAD',NULL,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,82),
	(71,'PRUEBA PROGRAMAS',1,'2019-02-17 00:00:00',45,4,'3','7',NULL,NULL,25369878,2,1,1,'OTRA NECESIDAD',1,'OTRO PROGRAMA',2,NULL,2,NULL,2,NULL,NULL,NULL,82),
	(72,'PRUEBA PROGRAMAS',1,'2019-02-17 00:00:00',45,4,'3','7',NULL,NULL,25369878,2,1,1,'OTRA NECESIDAD',1,'OTRO PROGRAMA',2,NULL,2,NULL,2,NULL,NULL,NULL,82),
	(73,'PRUEBA PROGRAMAS',1,'2019-02-17 00:00:00',45,4,'3','7',NULL,NULL,25369878,2,1,1,'OTRA NECESIDAD',1,'OTRO PROGRAMA',2,NULL,2,NULL,2,NULL,NULL,NULL,82),
	(75,'DISCAPACIDADES',1,'2019-02-17 00:00:00',55,5,'1',NULL,NULL,NULL,25366958,6,3,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,82),
	(76,'LIMITACIONES',2,'2019-02-17 00:00:00',56,5,'1',NULL,NULL,NULL,254369,4,1,1,NULL,1,NULL,NULL,NULL,1,'LESIONES',1,'CRONICAS',NULL,NULL,82),
	(77,'ALDANA MARTINEZ',2,'2019-02-05 00:00:00',23,3,'5','2',NULL,NULL,2636354,6,1,2,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,97),
	(78,'ALDANA MARTINEZ',2,'2019-02-05 00:00:00',23,3,'5','2',NULL,NULL,2636354,6,1,2,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,97),
	(79,'PAULA MORALES',1,'2019-02-16 00:00:00',23,3,'1','1',NULL,NULL,2636354,1,1,1,NULL,2,NULL,1,NULL,1,'1111',2,NULL,NULL,NULL,97),
	(80,'TERESA MAY',3,'2019-02-19 00:00:00',23,3,'1','1',NULL,NULL,234567,2,1,2,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,97),
	(81,'TERESA MAY',3,'2019-02-19 00:00:00',23,3,'1','1',NULL,NULL,234567,2,1,2,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,97),
	(82,'ROMINA TIRES',3,'2019-02-19 00:00:00',23,3,'1','1',NULL,NULL,234567,2,1,2,NULL,2,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,97),
	(83,'JOSEFINA PEREZ',3,'2019-02-13 00:00:00',34,4,'1','1',NULL,NULL,234567,2,1,2,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,97),
	(84,'ROMINA PERALTA',3,'2019-02-20 00:00:00',23,3,'1','2',NULL,NULL,2636354,2,2,2,NULL,2,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,98),
	(85,'PAMELA PEREZ',3,'2019-02-15 00:00:00',34,4,'1','3',NULL,NULL,2636354,3,3,2,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,99),
	(86,'TERESA MAY',2,'2019-02-22 00:00:00',34,4,'1','1',NULL,NULL,234567,2,2,1,NULL,1,NULL,2,NULL,2,NULL,2,NULL,NULL,NULL,99),
	(87,'SUERTUDA LOPEZ',3,'2019-02-13 00:00:00',34,4,'1','2',NULL,NULL,234567,2,1,1,NULL,1,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,100),
	(88,'ROBERTA SUERTUDA',3,'2019-02-22 00:00:00',23,3,'1','1',NULL,NULL,30000000,1,2,1,NULL,1,NULL,NULL,NULL,1,'NOSE',2,NULL,NULL,NULL,100),
	(89,'MARIA JOSEFE',3,'2019-02-19 00:00:00',32,4,'1','1',NULL,NULL,2636354,2,1,1,NULL,1,NULL,2,NULL,2,NULL,1,'dolor',NULL,NULL,102);

/*!40000 ALTER TABLE `victims` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
