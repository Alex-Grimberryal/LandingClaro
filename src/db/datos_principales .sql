-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2023 a las 16:32:41
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos_principales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dauxiliares`
--

CREATE TABLE `dauxiliares` (
  `id` int(9) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `texto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dprincipales`
--

INSERT INTO `dprincipales` (`id`, `numb`, `email`, `lstOp`, `texto`) VALUES
(1, 0, 'nose@nose.com', 3, 'asf'),
(2, 0, 'asddas@asd.com', 2, 'asd'),
(3, 0, 'nose@nose.com', 5, 'asf'),
(4, 0, 'nose@nose.com', 3, 'asf'),
(5, 0, 'nose@nose.com', 2, 'estdfhjg'),
(6, 0, 'nose@nose.com', 2, 'estdfhjg'),
(7, 0, 'nose@nose.com', 3, 'AFDSGFDG'),
(8, 0, 'adsadssa@safdsc.com', 1, 'adgsfbcvz'),
(9, 0, 'adsadssa@safdsc.com', 1, 'adgsfbcvz'),
(10, 0, 'WASDGXFVB@si.com', 3, 'asdsgfv'),
(11, 0, 'nose@nose.com', 2, 'ewgfd'),
(12, 0, 'nose@nose.com', 2, 'ewgfd'),
(13, 0, 'nose@nose.com', 3, 'ghjk'),
(14, 0, 'resgf@fdsgfnfb.com', 1, 'd tj'),
(15, 0, 'svcx@dsafd.c', 1, 'sd'),
(16, 0, 'asddas@asd.com', 1, 'zcxbvmn, '),
(17, 0, '', 1, ''),
(18, 0, '', 1, ''),
(19, 0, 'asddas@asd.com', 3, 'EXGM'),
(20, 0, 'dfsd@esgfxv.com', 2, 'dsfbvc'),
(21, 0, 'dfsd@esgfxv.com', 2, 'dsfbvc'),
(22, 0, 'dfsd@esgfxv.com', 2, 'dsfbvc'),
(23, 0, 'asdgs@sd.si', 3, 'un celular bueno, bonito y barato'),
(24, 975683234, 'nose@nose.com', 4, 'wtary'),
(25, 973573957, 'asdfsbdvvz@asf.com', 0, NULL),
(26, 976284918, 'si@siuuu', 2, 'Nose, espero haberte ayudado '),
(27, 976284918, 'si@siuuu', 2, 'Nose, espero haberte ayudado '),
(28, 965208467, 'nose@nose.com', 0, NULL),
(29, 965208467, 'tumama@nose.com', 0, NULL),
(30, 647587564, 'asgfmv@2sdg.com', 0, NULL),
(31, 2147483647, 'v@2sdg.com', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `email` varchar(40) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
