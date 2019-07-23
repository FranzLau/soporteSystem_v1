-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2019 a las 06:29:25
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlsoporte_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(100) NOT NULL,
  `nom_area` varchar(100) NOT NULL,
  `desc_area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(100) NOT NULL,
  `nom_cargo` varchar(100) NOT NULL,
  `desc_cargo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nom_cargo`, `desc_cargo`) VALUES
(1, 'Practicante', 'Recien egresados de la U'),
(2, 'Tercero', 'Contratado por externo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(100) NOT NULL,
  `nom_categoria` varchar(20) NOT NULL,
  `desc_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nom_categoria`, `desc_categoria`) VALUES
(1, 'Laptop', 'computadora personal'),
(2, 'Desktop', 'computadora de Escritorio'),
(3, 'Impresora', 'Equipo de impresion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_emp` int(100) NOT NULL,
  `nom_emp` varchar(20) NOT NULL,
  `ape_emp` varchar(40) NOT NULL,
  `doc_emp` varchar(20) NOT NULL,
  `estado_emp` int(10) NOT NULL,
  `user_emp` varchar(20) NOT NULL,
  `pass_emp` varchar(20) NOT NULL,
  `id_cargo` int(100) NOT NULL,
  `id_area` int(100) NOT NULL,
  `id_gerencia` int(100) NOT NULL,
  `id_sede` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_emp`, `nom_emp`, `ape_emp`, `doc_emp`, `estado_emp`, `user_emp`, `pass_emp`, `id_cargo`, `id_area`, `id_gerencia`, `id_sede`) VALUES
(2, 'Franz Lau', 'Cruz Ucharico', '70209626', 1, 'Administrador', 'admin', 1, 1, 1, 1),
(3, 'Daniel Jose', 'Ticona chura', 'dticona', 1, 'Usuario', '', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(100) NOT NULL,
  `nom_equipo` varchar(50) NOT NULL,
  `serie_equipo` varchar(20) NOT NULL,
  `ip_equipo` varchar(15) NOT NULL,
  `mac_equipo` varchar(20) NOT NULL,
  `estado_equipo` varchar(15) NOT NULL,
  `id_categoria` int(100) NOT NULL,
  `id_emp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencia`
--

CREATE TABLE `gerencia` (
  `id_gerencia` int(100) NOT NULL,
  `nom_gerencia` varchar(100) NOT NULL,
  `desc_gerencia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(100) NOT NULL,
  `nom_sede` varchar(100) NOT NULL,
  `desc_sede` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indices de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  ADD PRIMARY KEY (`id_gerencia`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_emp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  MODIFY `id_gerencia` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
