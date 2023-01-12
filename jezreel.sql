-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2022 a las 22:58:12
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jezreel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `ID` int(10) NOT NULL,
  `ancho` int(2) NOT NULL,
  `alto` int(2) NOT NULL,
  `piezas` int(2) NOT NULL,
  `color` text NOT NULL,
  `diseno` text NOT NULL,
  `tipo` text NOT NULL,
  `vinilo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`ID`, `ancho`, `alto`, `piezas`, `color`, `diseno`, `tipo`, `vinilo`) VALUES
(1, 5, 5, 5, 'negro', 'Si', 'normal', 'vinilo uno'),
(2, 7, 5, 9, ' blanco', 'No', ' opalizado', ' vinilo dos'),
(3, 5, 6, 7, ' gris', 'Si', ' metalizado', ' vinilo 3'),
(4, 8, 9, 10, ' gris', 'Si', ' normal', ' vinilo 1'),
(5, 3, 4, 5, ' negro', 'No', ' opalizado', ' vinilo dos'),
(6, 6, 6, 6, ' negro', 'No', 'Metalizado', ' vinilo 3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
