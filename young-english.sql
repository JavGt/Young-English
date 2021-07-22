-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2021 a las 10:34:42
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `young-english`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `IdTemas` int(10) NOT NULL,
  `Leccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`IdTemas`, `Leccion`) VALUES
(1, 'Estaciones del año'),
(2, 'Colores'),
(3, 'Abecedario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuarios` int(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Clave` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuarios`, `Nombre`, `Correo`, `Clave`) VALUES
(13, 'Javier', 'zazrb136@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usutem`
--

CREATE TABLE `usutem` (
  `IdUsuarios` int(10) NOT NULL,
  `IdTemas` int(10) NOT NULL,
  `Estatus` varchar(50) NOT NULL,
  `CalOpt` int(3) NOT NULL,
  `CalTot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usutem`
--

INSERT INTO `usutem` (`IdUsuarios`, `IdTemas`, `Estatus`, `CalOpt`, `CalTot`) VALUES
(13, 1, '1', 1, 1),
(13, 2, '2', 2, 2),
(13, 3, '3', 3, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`IdTemas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuarios`);

--
-- Indices de la tabla `usutem`
--
ALTER TABLE `usutem`
  ADD PRIMARY KEY (`IdUsuarios`,`IdTemas`),
  ADD KEY `IdTemas` (`IdTemas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `IdTemas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuarios` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usutem`
--
ALTER TABLE `usutem`
  ADD CONSTRAINT `usutem_ibfk_1` FOREIGN KEY (`IdTemas`) REFERENCES `temas` (`IdTemas`),
  ADD CONSTRAINT `usutem_ibfk_2` FOREIGN KEY (`IdUsuarios`) REFERENCES `usuarios` (`IdUsuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
