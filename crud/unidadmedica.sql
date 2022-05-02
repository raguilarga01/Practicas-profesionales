-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 20:52:18
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
(1, 9660, 364755, 'DRA. VIRIDANA AVILES BAUTISTA', 7885582, 'AIBV830201', 'MEDICINA FAMILIAR', 'MATUTINO', '08:00 a.m.', '02:00 p.m.', 15, 24, 'ANEXO 1', 13356, '01'),
(2, 10938, 137133, 'DR. ANGEL CASASOLA ESTRADA', 1392795, 'CAEA600907', 'MEDICINA FAMILIAR', 'VESPERTINO', '02:00 p.m.', '08:00 p.m.', 15, 24, 'ANEXO 1', 13356, '01');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
