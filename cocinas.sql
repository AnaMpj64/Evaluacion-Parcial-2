-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 18-03-2023 a las 00:44:32
-- Versión del servidor: 10.4.24-MariaDB-log
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cocinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocinas`
--

CREATE TABLE `cocinas` (
  `idCocinas` int(11) NOT NULL,
  `Tipo` varchar(40) NOT NULL,
  `FuenteConsumo` varchar(20) NOT NULL,
  `Tamano` varchar(20) NOT NULL,
  `SistemaVentilacion` varchar(10) NOT NULL,
  `NumeroQuemadores` int(5) NOT NULL,
  `Marca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cocinas`
--

INSERT INTO `cocinas` (`idCocinas`, `Tipo`, `FuenteConsumo`, `Tamano`, `SistemaVentilacion`, `NumeroQuemadores`, `Marca`) VALUES
(1, 'Cocina al piso', 'Gas', '76 cm', 'No', 6, 'Whirlpool'),
(2, 'Encimera', 'Gas', '76 cm', 'No', 5, 'Whirlpool'),
(3, 'Encimera', 'Electricidad', '1m', 'No', 6, 'Mabe'),
(4, 'Cocina al piso', 'Electricidad', '110 cm', 'Si', 8, 'Electrolux');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cocinas`
--
ALTER TABLE `cocinas`
  ADD PRIMARY KEY (`idCocinas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cocinas`
--
ALTER TABLE `cocinas`
  MODIFY `idCocinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
