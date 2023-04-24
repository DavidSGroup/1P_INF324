-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2023 a las 15:35:23
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mbasedsalgado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL,
  `carnet` varchar(30) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `nota1` float NOT NULL DEFAULT 0,
  `nota2` float NOT NULL DEFAULT 0,
  `nota3` float NOT NULL DEFAULT 0,
  `notafinal` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `carnet`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES
(1, '1', 'inf-186', 87.17, 1.75, 94.62, 61.18),
(2, '10', 'inf-102', 12.3, 93.09, 96.62, 67.3367),
(3, '11', 'inf-165', 43.03, 59.39, 48.34, 50.2533),
(4, '12', 'inf-153', 51.42, 34.2, 38.44, 41.3533),
(5, '13', 'inf-182', 81.1, 5.85, 10.73, 32.56),
(6, '14', 'inf-148', 87.56, 28.07, 73.89, 63.1733),
(7, '15', 'inf-162', 9.27, 52.14, 21.17, 27.5267),
(8, '16', 'inf-170', 31.71, 46.39, 10.25, 29.45),
(9, '17', 'inf-189', 72.69, 75.2, 96.95, 81.6133),
(10, '18', 'inf-116', 57.66, 28.47, 3.1, 29.7433),
(11, '19', 'inf-184', 98.4, 20.05, 49.46, 55.97),
(12, '2', 'inf-154', 58.24, 37.98, 41.67, 45.9633),
(13, '20', 'inf-124', 8.14, 91.48, 90.93, 63.5167),
(14, '21', 'inf-164', 15.27, 97.79, 21.49, 44.85),
(15, '22', 'inf-124', 42.8, 7.48, 88.22, 46.1667),
(16, '23', 'inf-151', 85.51, 61.03, 23.35, 56.63),
(17, '24', 'inf-162', 10.05, 94.51, 13.71, 39.4233),
(18, '25', 'inf-148', 2.76, 17.25, 28.77, 16.26),
(19, '26', 'inf-112', 1.18, 98.98, 58.32, 52.8267),
(20, '27', 'inf-154', 7.76, 78.47, 49.44, 45.2233),
(21, '28', 'inf-127', 82.71, 58.32, 55.19, 65.4067),
(22, '29', 'inf-175', 6.42, 55.03, 32.27, 31.24),
(23, '3', 'inf-128', 23.68, 71.93, 77.79, 57.8),
(24, '30', 'inf-104', 16.25, 95.65, 3.84, 38.58),
(25, '4', 'inf-153', 24.56, 7.08, 93.8, 41.8133),
(26, '5', 'inf-166', 38.87, 33.58, 3.84, 25.43),
(27, '6', 'inf-155', 12.29, 16.73, 79.69, 36.2367),
(28, '7', 'inf-151', 13.03, 62.13, 87.95, 54.37),
(29, '8', 'inf-163', 91.59, 35.47, 70.95, 66.0033),
(30, '9', 'inf-108', 44.4, 87.72, 45.63, 59.25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(5) NOT NULL,
  `carnet` varchar(30) NOT NULL,
  `ncompleto` varchar(50) NOT NULL,
  `fechanac` date NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `departamento` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `carnet`, `ncompleto`, `fechanac`, `telefono`, `departamento`) VALUES
(1, '14', 'yerson contrerass', '2023-04-18', '59122596598', '02'),
(2, '15', 'carlos Bonilla', '2000-04-12', '459879', '03'),
(12, '16', 'soledad lopez', '1996-03-06', '59189463', '03'),
(13, '17', 'abigail guzman', '1996-03-06', '59189463', '03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(3) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'estudiante'),
(3, 'director'),
(4, 'colab');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` int(20) NOT NULL,
  `carnet` varchar(30) NOT NULL,
  `rol_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `pass`, `carnet`, `rol_id`) VALUES
(1, 'yulisa', 123456, '25433336', 1),
(2, 'leonardo', 123456, '226666', 2),
(3, 'oliver', 123456, '873455', 1),
(4, 'ethan', 123456, '233545', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_ibfk_1` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
