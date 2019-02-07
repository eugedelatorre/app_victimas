-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2019 a las 03:35:10
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

CREATE TABLE `casos` (
  `id_casos` int(10) UNSIGNED NOT NULL,
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
  `motivospasivos` int(11) DEFAULT NULL,
  `cual_otro_motivospasivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casos`
--

INSERT INTO `casos` (`id_casos`, `nombre_referencia`, `descripcion_caso`, `fecha_ingreso`, `modalidad_ingreso`, `organismos`, `cual_otro_organismo`, `fiscalia_juzgado`, `causa_id_judicial`, `comisaria`, `denuncias_previas`, `departamento_judicial`, `estado`, `motivospasivos`, `cual_otro_motivospasivo`) VALUES
(1, 'NOMBRE', 'BREVE', '2019-02-06 00:00:00', 3, 14, 'CUAL', '123', 123, 'COMISARIA', 1, 14, 1, NULL, NULL),
(2, 'NOMBRE DE REFERENCIA', 'BREVE DESCRIPCION', '2019-02-06 00:00:00', 3, 14, 'OTRO ORGANISMO', '123', 123, 'COMISARIA', 1, 19, 2, 4, 'OTRO MOTIVO A PASIVO'),
(3, 'nombre prueba', 'descripcion', '2019-02-06 00:00:00', 2, NULL, NULL, '123', 123, 'comisaria', 2, 15, 1, NULL, NULL),
(4, 'nombres', 'breve', '2019-02-05 00:00:00', 2, NULL, NULL, '123', 123, 'com', 2, 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cavajes`
--

CREATE TABLE `cavajes` (
  `id_cavajes` int(10) UNSIGNED NOT NULL,
  `Sede_Central_La_Plata` int(11) DEFAULT NULL,
  `Moron` int(11) DEFAULT NULL,
  `Azul` int(11) DEFAULT NULL,
  `Pergamino` int(11) DEFAULT NULL,
  `Bahia_Blanca` int(11) DEFAULT NULL,
  `Pilar` int(11) DEFAULT NULL,
  `Ezeiza` int(11) DEFAULT NULL,
  `Pinamar` int(11) DEFAULT NULL,
  `Lanus` int(11) DEFAULT NULL,
  `Quilmes` int(11) DEFAULT NULL,
  `Lomas_de_Zamora` int(11) DEFAULT NULL,
  `San_Fernando` int(11) DEFAULT NULL,
  `Los_Toldos` int(11) DEFAULT NULL,
  `San_Martin` int(11) DEFAULT NULL,
  `Mar_del_Plata` int(11) DEFAULT NULL,
  `Tandil` int(11) DEFAULT NULL,
  `Mercedes` int(11) DEFAULT NULL,
  `Vicente_Lopez` int(11) DEFAULT NULL,
  `Moreno` int(11) DEFAULT NULL,
  `Zarate` int(11) DEFAULT NULL,
  `Jose_C_Paz` int(11) DEFAULT NULL,
  `Almirante_Brown` int(11) DEFAULT NULL,
  `La_Matanza` int(11) DEFAULT NULL,
  `idCasos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cavajs`
--

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
-- Estructura de tabla para la tabla `delitoes`
--

CREATE TABLE `delitoes` (
  `id_delitoes` int(10) UNSIGNED NOT NULL,
  `Abandono_persona` int(11) DEFAULT NULL,
  `Abuso_sexual` int(11) DEFAULT NULL,
  `Abuso_sexual_muerte` int(11) DEFAULT NULL,
  `Acoso_sexual` int(11) DEFAULT NULL,
  `Amenazas` int(11) DEFAULT NULL,
  `Averiguacion_causales_muerte` int(11) DEFAULT NULL,
  `Bullying` int(11) DEFAULT NULL,
  `Catastrofes_naturales` int(11) DEFAULT NULL,
  `Desaparicion_personas` int(11) DEFAULT NULL,
  `Femicidio` int(11) DEFAULT NULL,
  `Femicidio_indirecto` int(11) DEFAULT NULL,
  `Grooming` int(11) DEFAULT NULL,
  `Homicidio` int(11) DEFAULT NULL,
  `Instigacion_ayuda_suicidio` int(11) DEFAULT NULL,
  `Lesiones` int(11) DEFAULT NULL,
  `Pornografia_menores` int(11) DEFAULT NULL,
  `Privacion_ilegal_libertad` int(11) DEFAULT NULL,
  `Promocion_corrupcion_menores` int(11) DEFAULT NULL,
  `Promocion_prostitucion_mayores` int(11) DEFAULT NULL,
  `Promocion_prostitucion_menores` int(11) DEFAULT NULL,
  `Reduccion_servidumbre` int(11) DEFAULT NULL,
  `Robo_agravado` int(11) DEFAULT NULL,
  `Robo_seguido_muerte` int(11) DEFAULT NULL,
  `Secuestro` int(11) DEFAULT NULL,
  `Secuestro_seguido_muerte` int(11) DEFAULT NULL,
  `Siniestro_vial` int(11) DEFAULT NULL,
  `Suicidio` int(11) DEFAULT NULL,
  `Tentativa_homicidio` int(11) DEFAULT NULL,
  `Tentativa_suicidio` int(11) DEFAULT NULL,
  `Tortura` int(11) DEFAULT NULL,
  `Usurpacion` int(11) DEFAULT NULL,
  `Violencia_genero` int(11) DEFAULT NULL,
  `Violencia_espectaculos_deportivos` int(11) DEFAULT NULL,
  `Violencia_institucional` int(11) DEFAULT NULL,
  `Violencia_familiar` int(11) DEFAULT NULL,
  `Otro_delito` int(11) DEFAULT NULL,
  `Otro_delito_cual` int(11) DEFAULT NULL,
  `idCasos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delitos`
--

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
-- Estructura de tabla para la tabla `modalidades`
--

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
-- Estructura de tabla para la tabla `organismos`
--

CREATE TABLE `organismos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organismos`
--

INSERT INTO `organismos` (`id`, `nombre`) VALUES
(1, 'Unidad de Ministro (Ministerio de Justicia)  '),
(2, 'Organismo Provincial de Niñez y Adolescencia  '),
(3, 'Portal Mi Provincia  '),
(4, 'Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)  '),
(5, 'Fiscalía  '),
(6, 'Comisaría  '),
(7, 'Municipio  '),
(8, 'Centro de Acceso a Justicia (CAJ)  '),
(9, 'Defensoría del Pueblo  '),
(10, 'Estado en Tu Barrio  '),
(11, 'DDI  '),
(12, 'Cerca de Noche  '),
(13, 'Equipo territorial de barrios  '),
(14, 'Cuál');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_asistidas`
--

CREATE TABLE `personas_asistidas` (
  `id_personas_asistidas` int(10) UNSIGNED NOT NULL,
  `nombre_persona_asistida` varchar(255) DEFAULT NULL,
  `vinculo_persona_asistida` int(11) DEFAULT NULL,
  `otro_vinculo_persona_asistida_cual` varchar(255) DEFAULT NULL,
  `telefono_persona_asistida` int(11) DEFAULT NULL,
  `domicilio_persona_asistida` varchar(255) DEFAULT NULL,
  `localidad_persona_asistida` int(11) DEFAULT NULL,
  `idCasos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE `profesionales` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales_intervinientes`
--

CREATE TABLE `profesionales_intervinientes` (
  `id_profesionales_intervinientes` int(10) UNSIGNED NOT NULL,
  `nombre_profesional_interviniente` varchar(255) DEFAULT NULL,
  `desde_profesional_interviniente` datetime DEFAULT NULL,
  `actual_profesional_interviniente` int(11) DEFAULT NULL,
  `hasta_profesional_interviniente` datetime DEFAULT NULL,
  `idCasos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`id_casos`);

--
-- Indices de la tabla `cavajes`
--
ALTER TABLE `cavajes`
  ADD PRIMARY KEY (`id_cavajes`);

--
-- Indices de la tabla `cavajs`
--
ALTER TABLE `cavajs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `delitoes`
--
ALTER TABLE `delitoes`
  ADD PRIMARY KEY (`id_delitoes`);

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
-- Indices de la tabla `organismos`
--
ALTER TABLE `organismos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas_asistidas`
--
ALTER TABLE `personas_asistidas`
  ADD PRIMARY KEY (`id_personas_asistidas`);

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesionales_intervinientes`
--
ALTER TABLE `profesionales_intervinientes`
  ADD PRIMARY KEY (`id_profesionales_intervinientes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casos`
--
ALTER TABLE `casos`
  MODIFY `id_casos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cavajes`
--
ALTER TABLE `cavajes`
  MODIFY `id_cavajes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cavajs`
--
ALTER TABLE `cavajs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `delitoes`
--
ALTER TABLE `delitoes`
  MODIFY `id_delitoes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de la tabla `organismos`
--
ALTER TABLE `organismos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `personas_asistidas`
--
ALTER TABLE `personas_asistidas`
  MODIFY `id_personas_asistidas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesionales_intervinientes`
--
ALTER TABLE `profesionales_intervinientes`
  MODIFY `id_profesionales_intervinientes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
