-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2019 a las 13:58:31
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
(2, 'Tercero', 'Contratado por externo'),
(3, 'Tecnico de Redes y Comunicaciones', 'area de soporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(100) NOT NULL,
  `nom_categoria` varchar(50) NOT NULL,
  `desc_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nom_categoria`, `desc_categoria`) VALUES
(1, 'P-ADA', 'Propios con acceso a directorio Activo'),
(2, 'P-ALA', 'Propios con acceso Local'),
(3, 'A-ADA', 'Alquilados por contrato con acceso a Directorio Activo'),
(4, 'T-ADA', 'Terceros con acceso a Directorio Activo'),
(5, 'T-ALA', 'Terceros con acceso Local'),
(6, 'P-NRD', 'Propios sin conexion a Red de Datos'),
(7, 'P-SRD', 'Propios con conexion a red de Datos'),
(8, 'TEMP', 'Con prÃ©stamo Temporal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_emp` int(100) NOT NULL,
  `nom_emp` varchar(20) NOT NULL,
  `ape_emp` varchar(40) NOT NULL,
  `estado_emp` int(10) NOT NULL,
  `id_cargo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_emp`, `nom_emp`, `ape_emp`, `estado_emp`, `id_cargo`) VALUES
(2, 'Franz', 'Cruz Ucharico', 1, 1),
(3, 'Daniel', 'Ticona chura', 1, 1),
(4, 'Elizabeth', 'Quispe Chambilla', 1, 1),
(5, 'Jose Luis', 'Parihuana', 1, 3),
(6, 'Jose Richard', 'Torres Quispe', 1, 2);

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
  `marca_equipo` varchar(20) NOT NULL,
  `modelo_equipo` varchar(50) NOT NULL,
  `af_equipo` varchar(20) NOT NULL,
  `estado_equipo` varchar(15) NOT NULL,
  `sede_equipo` varchar(100) NOT NULL,
  `detalle_equipo` varchar(200) NOT NULL,
  `id_categoria` int(100) NOT NULL,
  `id_presentacion` int(100) NOT NULL,
  `id_emp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nom_equipo`, `serie_equipo`, `ip_equipo`, `mac_equipo`, `marca_equipo`, `modelo_equipo`, `af_equipo`, `estado_equipo`, `sede_equipo`, `detalle_equipo`, `id_categoria`, `id_presentacion`, `id_emp`) VALUES
(1, 'ELS0331', '', '191.168.6.72', '', 'HP', '', 'AF 312727', 'Operativo', '', '', 2, 4, 2),
(2, 'ELS0080', '', '', '', 'HP', '', '', 'Operativo', '', '', 2, 4, 3),
(3, 'ELS0077', '', '', '', 'LENOVO', '', '', 'Operativo', '', '', 0, 4, 4),
(4, 'ELS0519', '', '', '', 'HP', '', '', 'Operativo', '', '', 1, 4, 5);

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
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `id_presentacion` int(100) NOT NULL,
  `nom_presentacion` varchar(50) NOT NULL,
  `desc_presentacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`id_presentacion`, `nom_presentacion`, `desc_presentacion`) VALUES
(3, 'Laptop', 'Computador personal'),
(4, 'Desktop', 'Computador de escritorio'),
(5, 'Impresora', 'Equipo de ImpresiÃ³n'),
(6, 'Telefono', 'Anexos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(100) NOT NULL,
  `nom_sede` varchar(100) NOT NULL,
  `desc_sede` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(100) NOT NULL,
  `nom_user` varchar(100) NOT NULL,
  `pass_user` varchar(100) NOT NULL,
  `estado_user` varchar(20) NOT NULL,
  `tipo_user` varchar(20) NOT NULL,
  `id_emp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nom_user`, `pass_user`, `estado_user`, `tipo_user`, `id_emp`) VALUES
(1, 'predes', 'admin', 'activo', 'administrador', 2);

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
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  ADD PRIMARY KEY (`id_gerencia`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`id_presentacion`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id_cargo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_emp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  MODIFY `id_gerencia` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `id_presentacion` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
