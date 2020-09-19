-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2020 a las 05:19:26
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
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `paterno`, `materno`, `cuenta`, `estado`, `modalidad`, `carrera`, `sementre`, `externo`, `facultad`, `ocultar`, `updated_at`, `id`) VALUES
('Kiana Alejandra', 'Chávez ', 'Ceballos', 313217915, 'Egresado', 'Egresado', 'Ingeniería En Computación', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '2020-09-10 23:36:03', 6),
('Kianita', 'Sama', 'Sama', 313217915, 'Egresado', 'Egresado', 'Derecho', 'Egresado', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '2020-09-10 23:36:03', 8),
('Angel Albarez ', 'Chavez', 'Albarez', 317896457, 'Egresado', 'Presencial', 'Diseño Industrial', 'Noveno', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '2020-09-10 23:37:45', 11),
('Maria de Lourdes', 'C', 'Plaza', 313896753, 'Alumno', 'Presencial', 'Ingeniería Civil', 'Sexto', 'Interno', 'Facultad de Estudios Superiores Aragón', 0, '2020-09-17 23:12:08', 12);

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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(7, 'KianitaSama', 'Sama', 'arimayukinoanime@gmail.com', '$2y$10$w/SlgYbBLL4Q2IKfuMFe5u/rLmDvLoiXKJmD9klQzfHojktfz4iY.', '2020-09-08 02:39:59', '2020-09-08 02:39:59'),
(11, 'Kianita', 'Sama', 'semiotaku_anime@hotmail.com', '$2y$10$la7txD6JdNBlF7UAWPVJX.mn.I.a7UrQ6ENeijrHR.NWV7eQjmnIC', '2020-09-10 03:24:27', '2020-09-10 03:24:27');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
