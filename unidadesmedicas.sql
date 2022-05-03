-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2022 a las 20:39:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unidadesmedicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `id` int(11) NOT NULL,
  `id_consultorio` int(11) NOT NULL,
  `nom_consultorio` varchar(10) NOT NULL,
  `id_unidadmedica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultorio`
--

INSERT INTO `consultorio` (`id`, `id_consultorio`, `nom_consultorio`, `id_unidadmedica`) VALUES
(1, 13356, '01', 1),
(2, 13357, '02', 1),
(3, 13359, '01D', 1),
(4, 13528, '01', 2),
(5, 13530, '02', 2),
(6, 13532, '03', 2),
(7, 13533, '04', 2),
(8, 13534, '05', 2),
(9, 13535, '06', 2),
(10, 13536, '07', 2),
(11, 13537, '08', 2),
(12, 13538, '09', 2),
(13, 13539, '10', 2),
(14, 13540, '11', 2),
(15, 13541, '12', 2),
(16, 13529, '01D', 2),
(17, 13531, '02D', 2),
(18, 0, '01', 3),
(19, 0, '02', 3),
(20, 0, '03', 3),
(21, 0, '04', 3),
(22, 0, '05', 3),
(28, 16145, '02', 4),
(29, 16146, '03', 4),
(30, 16147, '01D', 4),
(31, 16150, '01DH', 4),
(32, 16144, '02DH', 4),
(33, 0, '01', 5),
(34, 16148, '01', 6),
(35, 16149, '02', 6),
(36, 15804, '03DH', 6),
(37, 15806, '05DH', 6),
(38, 13181, '01', 7),
(39, 13184, '02', 7),
(40, 0, '03', 7),
(41, 13186, '05', 7),
(42, 13187, '06', 7),
(43, 0, '07', 7),
(44, 0, '08', 7),
(45, 0, '09', 7),
(46, 13182, '12', 7),
(47, 0, '14', 7),
(48, 13371, '15', 7),
(49, 13372, '16', 7),
(50, 13183, '11D', 7),
(51, 13323, '13D', 7),
(52, 0, '01DH', 7),
(53, 15490, '03M', 7),
(54, 15491, '04SR', 7),
(55, 15492, '06DH', 7),
(56, 15493, '10DH', 7),
(57, 15494, '14DH', 7),
(58, 15495, '17PS', 7),
(59, 13374, '18G', 7),
(60, 15496, '19N', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delegaciones`
--

CREATE TABLE `delegaciones` (
  `id` int(11) NOT NULL,
  `ur` int(11) NOT NULL,
  `nom_delegacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `delegaciones`
--

INSERT INTO `delegaciones` (`id`, `ur`, `nom_delegacion`) VALUES
(1, 93, 'ZONA SUR'),
(2, 13, 'HIDALGO'),
(3, 15, 'ESTADO DE MÉXICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `nom_medico` varchar(50) NOT NULL,
  `rfc` varchar(20) NOT NULL,
  `cedula` int(11) NOT NULL,
  `n_empleado` int(11) NOT NULL,
  `servicio` varchar(20) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `h_inicial` varchar(10) NOT NULL,
  `h_final` varchar(10) NOT NULL,
  `t_consulta` int(11) NOT NULL,
  `n_citas` int(11) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `id_unidadmedica` int(11) NOT NULL,
  `id_consultorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedica`
--

CREATE TABLE `unidadmedica` (
  `id` int(11) NOT NULL,
  `ct` int(11) NOT NULL,
  `aux` int(11) NOT NULL,
  `nom_unidadmedica` varchar(50) NOT NULL,
  `id_delegacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidadmedica`
--

INSERT INTO `unidadmedica` (`id`, `ct`, `aux`, `nom_unidadmedica`, `id_delegacion`) VALUES
(1, 208, 0, 'CMF.  MIXQUIAHUALA', 2),
(2, 211, 0, 'C.M.F.E.Q. XALOSTOC', 3),
(3, 204, 1, 'UMF ACTOPAN', 2),
(4, 210, 1, 'UMF AMECAMECA', 3),
(5, 204, 6, 'UMF MINERAL DEL MONTE', 2),
(6, 208, 1, 'UMF. TEPATEPEC', 2),
(7, 210, 0, 'CMF. DIVISION DEL NORTE', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unidadMedica01` (`id_unidadmedica`);

--
-- Indices de la tabla `delegaciones`
--
ALTER TABLE `delegaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `consultorio` (`id_consultorio`),
  ADD KEY `unidadmedica` (`id_unidadmedica`);

--
-- Indices de la tabla `unidadmedica`
--
ALTER TABLE `unidadmedica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delegacion01` (`id_delegacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `delegaciones`
--
ALTER TABLE `delegaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `unidadmedica`
--
ALTER TABLE `unidadmedica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD CONSTRAINT `unidadMedica01` FOREIGN KEY (`id_unidadmedica`) REFERENCES `unidadmedica` (`id`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `consultorio` FOREIGN KEY (`id_consultorio`) REFERENCES `consultorio` (`id`),
  ADD CONSTRAINT `unidadmedica` FOREIGN KEY (`id_unidadmedica`) REFERENCES `unidadmedica` (`id`);

--
-- Filtros para la tabla `unidadmedica`
--
ALTER TABLE `unidadmedica`
  ADD CONSTRAINT `delegacion01` FOREIGN KEY (`id_delegacion`) REFERENCES `delegaciones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
