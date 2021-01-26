-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2021 a las 19:22:40
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `paterno` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `materno` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cuenta` int(9) NOT NULL,
  `estado` varchar(50) CHARACTER SET utf8 NOT NULL,
  `modalidad` varchar(50) CHARACTER SET utf8 NOT NULL,
  `carrera` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sementre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `externo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `facultad` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ocultar` int(11) NOT NULL DEFAULT 0,
  `Pregistro` varchar(50) NOT NULL,
  `Pagado` int(2) NOT NULL,
  `Acreditado` int(2) NOT NULL,
  `Entregado` int(2) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `paterno`, `materno`, `cuenta`, `estado`, `modalidad`, `carrera`, `sementre`, `externo`, `facultad`, `ocultar`, `Pregistro`, `Pagado`, `Acreditado`, `Entregado`, `curso`, `updated_at`, `id`) VALUES
('jorge ', 'arturo', 'lopez', 232536789, 'Alumno', 'Presencial', 'Ingeniería En Computación', 'Septimo', 'Distancia', 'Facultad de Ingeniería', 0, 'Kiana ALEJANDR chavez ceballos', 0, 0, 0, '', '2021-01-26 01:47:16', 32),
('Maria de Lourdes', 'Ceballos ', 'PLAZA', 313217915, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, 'SASUKE UCHIHA', 0, 0, 0, '', '2021-01-26 02:17:31', 33),
('JORGE ANTONIO', 'LOPEZ', 'HERNANDEZ', 313217985, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, 'KIANA ALEJANDRA CHAVEZ CEBALLOS', 0, 0, 0, '', '2021-01-26 02:44:04', 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `paterno` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `materno` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cuenta` int(9) NOT NULL,
  `estado` varchar(50) CHARACTER SET utf8 NOT NULL,
  `modalidad` varchar(50) CHARACTER SET utf8 NOT NULL,
  `carrera` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sementre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `externo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `facultad` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ocultar` int(11) NOT NULL DEFAULT 0,
  `Pregistro` varchar(50) NOT NULL,
  `Pagado` int(2) NOT NULL,
  `Acreditado` int(2) NOT NULL,
  `Entregado` int(2) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`nombre`, `paterno`, `materno`, `cuenta`, `estado`, `modalidad`, `carrera`, `sementre`, `externo`, `facultad`, `ocultar`, `Pregistro`, `Pagado`, `Acreditado`, `Entregado`, `updated_at`, `id`) VALUES
('JORGE ARTURO', 'LOPEZ', 'HERNANDEZ', 313217985, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, 'KIANA ALEJANDRA CHAVEZ CEBALLOS', 0, 0, 0, '2021-01-26 02:44:04', 0),
('JORGE ANTONIO', 'LOPEZ', 'HERNANDEZ', 0, '', '', '', '', '', '', 0, '', 0, 0, 0, '2021-01-26 02:45:40', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Privilegio` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `Privilegio`, `created_at`, `updated_at`) VALUES
(15, 'Administrador', 'Administrador', 'semiotaku_anime@hotmail.com', '$2y$10$mVLUxuGGxyek1xTGTzI2xer1FSJg0VKsAZfjOw4vpDRMf5xuCAgPu', '', '2021-01-26 00:56:42', '2021-01-26 00:56:42'),
(16, 'Maestro', 'Maestro', 'mastre@gmail.com', '$2y$10$O7YlKm58IEgC8yM0THNYlelG5HHXm91ynPpJG8nuFQy7PPHBxeFKe', '', '2021-01-26 00:58:48', '2021-01-26 00:58:48'),
(17, 'Uusuario', 'Usuario', 'usuario@gamil.com', '$2y$10$wJjp.ZL44OFNaOHrgDadHOVdly3SOQkJaeszmSky0bVqZIgFMxvSG', '', '2021-01-26 01:44:25', '2021-01-26 01:44:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
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
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
