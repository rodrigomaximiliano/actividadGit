-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2023 a las 21:17:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `databasermp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `password`, `perfil_id`, `baja`) VALUES
(1, 'rodrigo', 'portillo', 'maxi', 'maxi@gmail.com', '$2y$10$1NVPpRhZ/McMVvBt3oTgeONUSJGnTIu2GVu2pY.v18yx.yoyc/4uu', 2, 'No'),
(2, 'maximilian', 'portillo', 'maxi', 'maximiliano@gmail.com', '$2y$10$wOJGVD/Lq9IFeHs6yZVqker50rjtokAK6l9nUu3oqpQ3I9vU2qBXG', 2, 'No'),
(3, 'maxis', 'portillos', 'maxi', 'rodrigom_006@hotmail.com', '$2y$10$FA.42/2o3W00stJ.AvV1Fe3dNreNr6aKs1c/6K3M7JjLT5kAcxNL2', 2, 'No'),
(4, 'sadasdasd', 'asdasdasd', 'sadas', 'asdasdasd@gmail.com', '$2y$10$lVCU8oHSgBp1rh8Oewk3ZuMB58wl4HQgT7j4YzwRv2rl0AqgkeOXy', 2, 'No'),
(6, 'rodrigom', 'portillo', 'lcksly', 'lcksly@gmail.com', '$2y$10$a0vbXLSdTbOA882BArGDO.KSZxkL4yRi75aBxqdlNGcJAUyLoQ2EW', 2, 'No'),
(7, 'usuario1', 'usuario9', 'usuario', 'usuario@gmail.com', '$2y$10$YV6bwcYy0ecdSyuoNvlre.zYYaeSxF99U6NBmNS84yyQr2MEjLXW6', 2, 'No'),
(8, 'rodrigo', 'portillo', 'registro', 'maxilcksly@gmail.com', '$2y$10$knTxxK1lwBQzFIPZB3TkgumTMNGbNNQLL.J9MwmH/AJTDOm55tTmm', 1, 'No'),
(9, 'login', 'login', 'login', 'login@gmail.com', '$2y$10$6Q3VnoQL.VuCRXM/wn4JTO1zZStnZ64GJZf.2VoIWR1iOzBUf7QNK', 2, 'No'),
(10, 'maximiliano', 'portillo', 'rodrigo', 'rodrigom@hotmail.com', '$2y$10$/97Q1nSu4P65zpdwzd03G.4F03qKYF6bDlArngQkJDZuI89BauV4C', 2, 'No'),
(11, 'portill', 'rodrigo', 'usuario', 'usuarios@gmail.com', '$2y$10$rnpz4ENzdSlbJ.dDIrD6ZumfgBhn2PzV7WhMn8yktJ6zPf8YvbDm2', 2, 'No'),
(12, 'seleniumide', 'seleniumsito', 'selenium', 'selenium@gmail.com', '$2y$10$eG7BlzDYTzfm67fkerEHveruOAGEc6hCprd97c1O4lcBKs.oPOgRO', 2, 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
