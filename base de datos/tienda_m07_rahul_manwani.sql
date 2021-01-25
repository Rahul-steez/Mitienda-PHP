-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2021 a las 04:16:18
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda m07 rahul manwani`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `nick` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`nick`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logo`
--

CREATE TABLE `logo` (
  `id` int(6) UNSIGNED NOT NULL,
  `productos_id` int(50) NOT NULL,
  `cantidad` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `logo`
--

INSERT INTO `logo` (`id`, `productos_id`, `cantidad`) VALUES
(5, 6, 0),
(7, 5, 0),
(8, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Descripción` text COLLATE utf8_spanish_ci NOT NULL,
  `Precio` float(10,2) NOT NULL,
  `Imagen` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Name`, `Descripción`, `Precio`, `Imagen`) VALUES
(1, 'Iman Caldea', 'Tipico Iman de Caldea', 2.99, 'caldea.jpg'),
(2, 'Iman Ski', 'Tipico Iman de ski!', 2.99, 'ski.jpg'),
(3, 'Iman Casita', 'Tipico Iman de una Casita', 2.99, 'casita.jpg'),
(4, 'Silla Gaming', 'Tipica silla Gaming', 40.80, 'sillagaming.jfif'),
(5, 'Silla de Oficina', 'Tipica Silla de oficina', 50.90, 'sillaoficina.jpg'),
(6, 'Butaca de salon', 'Tipica Butaca de Salon!', 42.60, 'butaca.jfif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quars`
--

CREATE TABLE `quars` (
  `id` int(6) UNSIGNED NOT NULL,
  `productos_id` int(50) NOT NULL,
  `cantidad` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `quars`
--

INSERT INTO `quars` (`id`, `productos_id`, `cantidad`) VALUES
(1, 3, 0),
(2, 2, 0),
(4, 3, 0),
(5, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rhea`
--

CREATE TABLE `rhea` (
  `id` int(6) UNSIGNED NOT NULL,
  `productos_id` int(50) NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rhea`
--

INSERT INTO `rhea` (`id`, `productos_id`, `apellidos`) VALUES
(8, 1, ''),
(9, 1, ''),
(10, 1, ''),
(17, 1, ''),
(18, 1, ''),
(19, 1, ''),
(20, 1, ''),
(21, 1, ''),
(22, 1, ''),
(23, 1, ''),
(24, 1, ''),
(25, 1, ''),
(28, 2, ''),
(29, 3, ''),
(30, 5, ''),
(31, 5, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soldiera`
--

CREATE TABLE `soldiera` (
  `id` int(6) UNSIGNED NOT NULL,
  `productos_id` int(50) NOT NULL,
  `cantidad` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nick` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nick`, `password`) VALUES
('Coozie', 'Losmanwani01'),
('buble', 'Losmanwani01'),
('hey', '1234'),
('rio', 'NO'),
('Rahul', ''),
('eazy', 'lado'),
('cool', 'gang'),
('dam', 'religion'),
('uy', 'siempre'),
('vuelve', 'lado'),
('lazy', 'bones'),
('greg', 'regerg'),
('ytry', 'rytry'),
('hyh', 'thr'),
('liul', 'lilu'),
('nvcnv', 'vbnv'),
('Rhea', 'Lafamilia'),
('rgr', 'rgr'),
('pup', 'pup'),
('fr', 'fr'),
('yh', 'yh'),
('op', 'op'),
('rhea', 'login'),
('soldier', 'soldier'),
('quars', 'quars');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id` (`productos_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `quars`
--
ALTER TABLE `quars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id` (`productos_id`);

--
-- Indices de la tabla `rhea`
--
ALTER TABLE `rhea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id` (`productos_id`);

--
-- Indices de la tabla `soldiera`
--
ALTER TABLE `soldiera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id` (`productos_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `quars`
--
ALTER TABLE `quars`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rhea`
--
ALTER TABLE `rhea`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `soldiera`
--
ALTER TABLE `soldiera`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `logo`
--
ALTER TABLE `logo`
  ADD CONSTRAINT `logo_ibfk_1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`Id`);

--
-- Filtros para la tabla `quars`
--
ALTER TABLE `quars`
  ADD CONSTRAINT `quars_ibfk_1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`Id`);

--
-- Filtros para la tabla `soldiera`
--
ALTER TABLE `soldiera`
  ADD CONSTRAINT `soldiera_ibfk_1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
