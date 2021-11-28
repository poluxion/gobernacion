-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-11-2021 a las 00:05:49
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gobernacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calenenvios`
--

CREATE TABLE `calenenvios` (
  `idCalendario` int(11) NOT NULL,
  `codReporte` int(11) NOT NULL,
  `fechaEnvio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diasnohabiles`
--

CREATE TABLE `diasnohabiles` (
  `idDiaNoHabil` int(11) NOT NULL,
  `fechaNoHabil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diasnohabiles`
--

INSERT INTO `diasnohabiles` (`idDiaNoHabil`, `fechaNoHabil`) VALUES
(1, '2021-12-05'),
(2, '2021-12-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencia`
--

CREATE TABLE `frecuencia` (
  `idFrecuencia` int(11) NOT NULL,
  `nombreFrecuencia` varchar(255) NOT NULL,
  `dias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `frecuencia`
--

INSERT INTO `frecuencia` (`idFrecuencia`, `nombreFrecuencia`, `dias`) VALUES
(1, 'Semanal', 7),
(2, 'Quincenal', 15),
(3, 'Mensual', 30),
(4, 'Diaria', 1),
(5, 'Anual', 360),
(6, 'Semestral', 180);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `idMovimiento` int(11) NOT NULL,
  `reporte` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`idMovimiento`, `reporte`, `fecha`) VALUES
(1, 35, '2021-11-27 08:20:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `idReportes` int(11) NOT NULL,
  `nombreReportes` varchar(255) NOT NULL,
  `frecuencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`idReportes`, `nombreReportes`, `frecuencia`) VALUES
(2, 'Quejitas de usuarios', 2),
(4, 'Tramites pendientes', 3),
(32, '111111', 2),
(33, '111111', 1),
(35, '12222222222221312', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cedula` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `usuario`, `nombre`, `apellido`, `cedula`, `password`, `telefono`, `correo`, `tipo`) VALUES
(45, 'admin', 'Pablo Andrés', 'Salazar', 11111111, '$2y$10$HzWmpmrQctyeZoAMz0dqNeRif/DS8/xm/Gu6mdFEJU8S2y/XWPowm', 2147483647, 'pablo_rua182@hotmail.com', 'Admin'),
(48, 'poluxion', 'Pablo', 'Rua', 11234556, '$2y$10$OgZFFP4/daB9bM8mKiQ93.ujFnZbHqV3QMa9VLd/VQF.mBW.epO6q', 2147483647, 'pablo_rua182@hotmail.com', 'Usuario'),
(49, 'po', 'Pablo', 'Rua', 1, '$2y$10$5yIZm/.DDg/PPaUAfLzoDOuNZMMJpetu9cs.OW3CXFj6/jjYmOTU6', 2147483647, 'pablo_rua182@hotmail.com', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calenenvios`
--
ALTER TABLE `calenenvios`
  ADD PRIMARY KEY (`idCalendario`);

--
-- Indices de la tabla `diasnohabiles`
--
ALTER TABLE `diasnohabiles`
  ADD PRIMARY KEY (`idDiaNoHabil`);

--
-- Indices de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  ADD PRIMARY KEY (`idFrecuencia`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`idMovimiento`),
  ADD UNIQUE KEY `reporte` (`reporte`) USING BTREE;

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`idReportes`),
  ADD KEY `Frecuencia` (`frecuencia`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calenenvios`
--
ALTER TABLE `calenenvios`
  MODIFY `idCalendario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diasnohabiles`
--
ALTER TABLE `diasnohabiles`
  MODIFY `idDiaNoHabil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  MODIFY `idFrecuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  MODIFY `idMovimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `idReportes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD CONSTRAINT `movimiento_ibfk_1` FOREIGN KEY (`reporte`) REFERENCES `reportes` (`idReportes`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`frecuencia`) REFERENCES `frecuencia` (`idFrecuencia`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
