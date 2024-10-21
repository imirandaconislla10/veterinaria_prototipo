-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2019 a las 20:56:05
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterisystem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja_ventas`
--

CREATE TABLE `caja_ventas` (
  `id_ventas` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `concepto` varchar(200) NOT NULL,
  `medio_de_pago` varchar(200) NOT NULL,
  `importe` varchar(200) NOT NULL,
  `comprobante` varchar(200) NOT NULL,
  `nota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `cod_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `asunto` varchar(250) NOT NULL,
  `mensaje` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `tipo_mascota` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_mascota` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `edad` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `enfermedad` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `foto1` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `foto2` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `foto3` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `medicinas_aplicadas` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `sexo` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `mas` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id_mascota` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `raza` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `edad` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `fecha_nacimiento` varchar(250) NOT NULL,
  `medicinas_aplicadas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id_mascota`, `id`, `nombre`, `especie`, `raza`, `color`, `edad`, `sexo`, `fecha_nacimiento`, `medicinas_aplicadas`) VALUES
('123654789', 1, 'lulu', 'perro', 'chike', 'black', '13', 'macho', '29/05/2019', 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(11) NOT NULL,
  `serial_id` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `grado` varchar(255) NOT NULL,
  `aplicacion` varchar(255) NOT NULL,
  `preciounitario` varchar(255) NOT NULL,
  `preciototal` varchar(255) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mismascotas`
--

CREATE TABLE `mismascotas` (
  `id` int(11) NOT NULL,
  `foto1` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_n` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `raza` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `especie` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `color` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `mensaje` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `nombre`, `mensaje`, `foto`, `link`) VALUES
(1, 'VeteriSystem', 'Bienvenid@s', 'assets/images/icono.png', '#'),
(2, 'VeteriSystem', 'Como usar el sistema', 'assets/images/icono.png', 'https://www.youtube.com/watch?v=J1KK1kSbcTw&t=43s');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

CREATE TABLE `planilla` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `texto` varchar(200) NOT NULL,
  `campo` varchar(200) NOT NULL,
  `descuento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planilla`
--

INSERT INTO `planilla` (`id`, `nombre`, `texto`, `campo`, `descuento`) VALUES
(1, 'Jhonatan', 'Descuento en nuestros servicios', 'label label-success', '50%'),
(2, 'Jhonatan', 'Descuento en plantillas', 'label label-warning', '30%'),
(3, 'Jhonatan', 'Descuento en sistemas', 'label label-danger', '20%');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperar`
--

CREATE TABLE `recuperar` (
  `id_password` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pagos` int(250) NOT NULL,
  `fecha_pago` varchar(200) NOT NULL,
  `pasadmin` varchar(200) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id`, `nombre`, `apellido`, `pais`, `ciudad`, `telefono`, `password`, `email`, `pagos`, `fecha_pago`, `pasadmin`, `rol`) VALUES
('123654789', 1, 'admin', 'admin', 'colombia', 'medellin', '3227709374', '', 'admin@gmail.com', 0, '0', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja_ventas`
--
ALTER TABLE `caja_ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mismascotas`
--
ALTER TABLE `mismascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planilla`
--
ALTER TABLE `planilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recuperar`
--
ALTER TABLE `recuperar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja_ventas`
--
ALTER TABLE `caja_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mismascotas`
--
ALTER TABLE `mismascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `planilla`
--
ALTER TABLE `planilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recuperar`
--
ALTER TABLE `recuperar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
