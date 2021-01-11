-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2021 a las 20:26:16
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
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `paterno`, `materno`, `cuenta`, `estado`, `modalidad`, `carrera`, `sementre`, `externo`, `facultad`, `ocultar`, `Pregistro`, `Pagado`, `Acreditado`, `Entregado`, `updated_at`, `id`) VALUES
('Kiana ', 'Chávez ', 'Ceballos', 313217915, 'Egresado', 'Egresado', 'Ingeniería En Computación', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '', 0, 0, 0, '2020-09-10 23:36:03', 6),
('Kianita Alejandra', 'Sama-sama', 'Sama-sama', 313217915, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '', 0, 0, 0, '2020-09-10 23:36:03', 8),
('Angel Albarez ', 'Chavez', 'Albarez', 317896457, 'Egresado', 'Presencial', 'Diseño Industrial', 'Noveno', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '', 0, 0, 0, '2020-09-10 23:37:45', 11),
('Maria de Lourdes', 'C', 'Plaza', 313896753, 'Alumno', 'Presencial', 'Ingeniería Civil', 'Sexto', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '', 0, 0, 0, '2020-09-17 23:12:08', 12),
('David', 'Ceballos', 'Plaza', 313217986, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '', 0, 0, 0, '2020-09-18 22:43:22', 13),
('Paquita Navaja', 'Ceballos Plaza', 'Plaza', 313217915, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, 'Kiana Alejandra Chavez Ceballos', 0, 0, 0, '2021-01-06 21:13:31', 14),
('Yama', 'Mouto', 'Moto', 313217915, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, 'Luis', 0, 0, 0, '2021-01-07 03:59:38', 15),
('Maria sasuke ', 'Ceballos Plaza jorge', 'Plaza jorge', 313217915, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, 'Kiana Alejadnara', 0, 0, 0, '2021-01-07 04:00:28', 16),
('Maria de Lourdes', 'Ceballos Plaza', 'Plaza', 313217195, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, 'jose', 0, 0, 0, '2021-01-07 11:26:23', 19),
('Maria de Lourdes', 'Ceballos Plaza', 'Albarez', 313985642, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, 'Maria  Antonita ', 1, 0, 0, '2021-01-07 11:43:10', 20),
('David', 'Sasuke', 'Plaza', 0, '', '', '', '', '', '', 0, '', 0, 0, 0, '2021-01-10 23:57:12', 25),
('Sasuke', 'Uchiha', 'Uzumaki', 0, '', '', '', '', '', '', 0, '', 0, 0, 0, '2021-01-10 23:59:00', 26),
('Sasuke', 'Uchiha', 'Uzumaki', 0, '', '', '', '', '', '', 0, '', 0, 0, 0, '2021-01-10 23:59:14', 27),
('Sasuke', 'Uchiha', 'Uzumaki', 0, '', '', '', '', '', '', 0, '', 0, 0, 0, '2021-01-11 00:00:46', 28),
('Naruto', 'Naruto', 'Uzumaki', 0, '', '', '', '', '', '', 0, '', 0, 0, 0, '2021-01-11 00:02:20', 29),
('Maria de Lourdes', 'Ceballos Plaza', 'Plaza', 0, '', '', '', '', '', '', 0, '', 0, 0, 0, '2021-01-11 00:03:01', 30),
('Maria de Lourdes', 'Ceballos Plaza', 'Plaza', 0, '', '', '', '', '', '', 0, '', 0, 0, 0, '2021-01-11 00:03:17', 31);

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
(7, 'KianitaSama', 'Sama', 'arimayukinoanime@gmail.com', '$2y$10$wfTQprk5muhoemqRLzZbQumGevq858nw7A1d9txGuoyJx7WTdPg3m', 'Administrador', '2020-09-08 02:39:59', '2020-09-08 02:39:59'),
(12, 'Alejandra', 'Chavez', 'semiotaku_anime@hotmail.com', '$2y$10$/LPl.94XRt5BejOTB3eigOVIvfKmr08MIBWZvl8y.Scd65z5zwrOK', 'Usuario', '2020-10-11 23:25:41', '2020-10-11 23:25:41'),
(14, 'Maria', 'Lourdes', 'marilucep17@gmail.com', '$2y$10$5h7Fksdy9DZp1CwtUDiOYOys1HyADvI/rm4skIXGwiUThjbeKLD5K', 'Maestro', '2020-10-11 23:51:43', '2020-10-11 23:51:43');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
