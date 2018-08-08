-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2018 a las 01:13:10
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unishare`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trayecto`
--

CREATE TABLE `trayecto` (
  `id_trayecto` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `uni_seleccion` varchar(200) NOT NULL,
  `ubi_salida_trayecto` varchar(200) NOT NULL,
  `ubi_destino_trayecto` varchar(200) NOT NULL,
  `fecha_trayecto` date NOT NULL,
  `hora_trayecto` time(4) NOT NULL,
  `plazas_trayecto` int(10) NOT NULL,
  `detalles_trayecto` varchar(600) NOT NULL,
  `precio_trayecto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) NOT NULL,
  `nom_completo` varchar(50) NOT NULL,
  `email` varchar(160) NOT NULL,
  `password` varchar(150) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `poblacion` varchar(100) NOT NULL,
  `cod_postal` varchar(300) NOT NULL,
  `ubicacion` varchar(600) NOT NULL,
  `universidad` varchar(200) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nom_completo`, `email`, `password`, `ciudad`, `poblacion`, `cod_postal`, `ubicacion`, `universidad`, `fecha_nac`, `sexo`) VALUES
(1, '32423423', 'qrqrq', 'qwrqwr', 'qwrqwrq', 'zcfadrqw', 'wqrqrq', '', '2018-06-07', '0000-00-00', 'hombre'),
(2, 'Felipe y Andres Mamanis', 'andres@andres.andres', 'caca123', 'Barcelona', 'Terrassa', '08225', '', '2018-06-07', '0000-00-00', 'mujer'),
(3, 'joe', 'joe@joe.joe', '$2y$15$LDDxbp76viD7uf5T8qz5ouckx5s7nG1Uir2lCeM.0n5GpF14pYy1K', 'Barcelona', 'Terrassa', '08225', '', '2018-06-07', '0000-00-00', 'hombre');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trayecto`
--
ALTER TABLE `trayecto`
  ADD PRIMARY KEY (`id_trayecto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trayecto`
--
ALTER TABLE `trayecto`
  MODIFY `id_trayecto` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
