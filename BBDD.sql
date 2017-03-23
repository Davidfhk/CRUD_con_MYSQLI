-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2017 a las 20:35:42
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gest_pisos`
--
CREATE DATABASE IF NOT EXISTS `gest_pisos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gest_pisos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_de_pisos`
--

CREATE TABLE `gestion_de_pisos` (
  `id` int(11) NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gestion_de_pisos`
--

INSERT INTO `gestion_de_pisos` (`id`, `direccion`, `precio`, `descripcion`) VALUES
(3, 'NUEVO', 100000, 'momomo'),
(4, 'calle castalla', 50, 'piso, con ascensor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gestion_de_pisos`
--
ALTER TABLE `gestion_de_pisos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gestion_de_pisos`
--
ALTER TABLE `gestion_de_pisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
