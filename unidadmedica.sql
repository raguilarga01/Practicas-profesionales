-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2022 a las 03:48:50
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
-- Base de datos: `unidadmedica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `n_empleado` int(11) NOT NULL,
  `nom_medico` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL,
  `rfc` varchar(20) NOT NULL,
  `servicio` varchar(50) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `h_inicio` varchar(10) NOT NULL,
  `h_final` varchar(10) NOT NULL,
  `t_consulta` int(11) NOT NULL,
  `n_citas` int(11) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `id_consultorio` int(11) NOT NULL,
  `nom_consultorio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `id_medico`, `n_empleado`, `nom_medico`, `cedula`, `rfc`, `servicio`, `turno`, `h_inicio`, `h_final`, `t_consulta`, `n_citas`, `observaciones`, `id_consultorio`, `nom_consultorio`) VALUES
(1, 9660, 364755, 'DRA. VIRIDANA AVILES BAUTISTA', 7885582, 'AIBV830201', 'MEDICINA FAMILIAR', 'MATUTINO', '08:00', '14:00', 15, 24, 'ANEXO 1', 13356, '01'),
(2, 10938, 137133, 'DR. ANGEL CASASOLA ESTRADA', 1392795, 'CAEA600907', 'MEDICINA FAMILIAR', 'VESPERTINO', '14:00', '20:00', 15, 24, 'ANEXO 1', 13356, '01'),
(3, 9476, 254793, 'DRA. MARIA DEL ROSARIO AGUILAR GUERRERO', 1808260, 'AUGR660505', 'MEDICINA FAMILIAR', 'MATUTINO', '08:00', '14:00', 15, 24, 'ANEXO 2', 13357, '02'),
(4, 9407, 282113, 'DRA. ALEJANDRA ROJO VALDEZ', 3820422, 'ROVA770327', 'MEDICINA FAMILIAR', 'VESPERTINO', '14:30', '20:30', 15, 24, 'ANEXO 2', 13357, '02'),
(5, 9730, 321881, 'DRA. MA. MARICELA JUDITH FERNÁNDEZ LÓPEZ', 2304184, 'FELM620918', 'ODONTOLOGÍA', 'MATUTINO', '08:00', '14:00', 30, 12, 'ABIERTO', 13359, '01D'),
(6, 12563, 376052, 'DR. JOSE DOLORES ROLDAN ALONSO', 5568770, 'ROAD640320', 'ODONTOLOGÍA', 'VESPERTINO', '14:00', '20:00', 30, 12, 'ABIERTO', 13359, '01D'),
(7, 0, 0, 'Sin medico asignado', 0, '', '', '', '', '', 0, 0, '', 13368, '02G');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
