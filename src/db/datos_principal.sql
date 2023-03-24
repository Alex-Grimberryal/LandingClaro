-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2023 a las 22:48:44
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
-- Base de datos: `datos_principal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dauxiliares`
--

CREATE TABLE `dauxiliares` (
  `id` int(9) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dauxiliares`
--

INSERT INTO `dauxiliares` (`id`, `email`) VALUES
(0, 'assssa@gmail.com'),
(0, 'assssa@gmail.com'),
(0, 'asdfsbdvvz@asf.com'),
(0, 'asdfsbdvvz@asf.com'),
(0, 'asdzvcz@dsbxc.com'),
(0, 'fdhhx12@fadsd.com'),
(0, 'assssa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dprincipales`
--

CREATE TABLE `dprincipales` (
  `id` int(9) NOT NULL,
  `numb` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lstOp` int(1) NOT NULL,
  `dni` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dprincipales`
--

INSERT INTO `dprincipales` (`id`, `numb`, `email`, `lstOp`, `dni`) VALUES
(1, 0, 'nose@nose.com', 3, 0),
(2, 0, 'asddas@asd.com', 2, 0),
(3, 0, 'nose@nose.com', 5, 0),
(4, 0, 'nose@nose.com', 3, 0),
(5, 0, 'nose@nose.com', 2, 0),
(6, 0, 'nose@nose.com', 2, 0),
(7, 0, 'nose@nose.com', 3, 0),
(8, 0, 'adsadssa@safdsc.com', 1, 0),
(9, 0, 'adsadssa@safdsc.com', 1, 0),
(10, 0, 'WASDGXFVB@si.com', 3, 0),
(11, 0, 'nose@nose.com', 2, 0),
(12, 0, 'nose@nose.com', 2, 0),
(13, 0, 'nose@nose.com', 3, 0),
(14, 0, 'resgf@fdsgfnfb.com', 1, 0),
(15, 0, 'svcx@dsafd.c', 1, 0),
(16, 0, 'asddas@asd.com', 1, 0),
(17, 0, '', 1, 0),
(18, 0, '', 1, 0),
(19, 0, 'asddas@asd.com', 3, 0),
(20, 0, 'dfsd@esgfxv.com', 2, 0),
(21, 0, 'dfsd@esgfxv.com', 2, 0),
(22, 0, 'dfsd@esgfxv.com', 2, 0),
(23, 0, 'asdgs@sd.si', 3, 0),
(24, 975683234, 'nose@nose.com', 4, 0),
(25, 973573957, 'asdfsbdvvz@asf.com', 0, 0),
(26, 976284918, 'si@siuuu', 2, 0),
(27, 976284918, 'si@siuuu', 2, 0),
(28, 965208467, 'nose@nose.com', 0, 0),
(29, 965208467, 'tumama@nose.com', 0, 0),
(30, 647587564, 'asgfmv@2sdg.com', 0, 0),
(31, 2147483647, 'v@2sdg.com', 0, 0),
(32, 132456, 'nose@nose.com', 3, 0),
(33, 3254647, 'dfsd@esgfxv.com', 3, 0),
(34, 965208467, 'nose@nose.com', 2, 79876544);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` int(4) NOT NULL,
  `nombrePlan` varchar(20) NOT NULL,
  `velocidad` int(4) NOT NULL,
  `duracionProm` int(1) NOT NULL,
  `precioProm` decimal(5,2) NOT NULL,
  `precioReal` decimal(5,2) NOT NULL,
  `velEstandar` int(4) NOT NULL,
  `velFullClaro` int(4) NOT NULL,
  `ghz` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `nombrePlan`, `velocidad`, `duracionProm`, `precioProm`, `precioReal`, `velEstandar`, `velFullClaro`, `ghz`) VALUES
(1, 'Plan Claro 75.50', 50, 3, '77.50', '155.00', 30, 45, '2.4GHz y 5GHz'),
(2, 'Plan Claro 100.90', 100, 0, '56.00', '101.00', 100, 200, '2.4GHz y 5GHz'),
(3, 'Plan Claro 100.90', 100, 0, '56.00', '101.00', 100, 200, '2.4GHz y 5GHz'),
(4, 'Plan Claro 100.90', 100, 0, '56.00', '101.00', 100, 200, '2.4GHz y 5GHz'),
(5, 'Plan Claro 100.90', 100, 0, '56.00', '101.00', 100, 200, '2.4GHz y 5GHz'),
(6, 'Plan Claro 100.90', 100, 0, '56.00', '101.00', 100, 200, '2.4GHz y 5GHz'),
(7, 'Plan Claro 100.90', 100, 0, '56.00', '101.00', 100, 200, '2.4GHz y 5GHz'),
(8, 'Plan Claro 100.90', 100, 0, '56.00', '101.00', 100, 200, '2.4GHz y 5GHz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `email` varchar(40) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `usuario`, `password`) VALUES
(1, 'zakrest@gmail.com', 'admin', '$2y$10$EZ.GVvb9qbHjR5sLfc4emu6GR0VsrzwC8mg9TlPlHtwRvMfhxoGVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dprincipales`
--
ALTER TABLE `dprincipales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dprincipales`
--
ALTER TABLE `dprincipales`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
