-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-10-2022 a las 05:06:50
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descripcion`, `fecha_creacion`) VALUES
(1, 'Matrimonial', '2022-06-09 04:27:02'),
(2, 'Doble', '2022-06-09 04:27:02'),
(3, 'Individual', '2022-06-09 04:27:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_detalle_venta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_habitacion`
--

CREATE TABLE `estado_habitacion` (
  `id_estado_habitacion` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_habitacion`
--

INSERT INTO `estado_habitacion` (`id_estado_habitacion`, `descripcion`, `estado`, `fecha_creacion`) VALUES
(1, 'DISPONIBLE', NULL, '2022-06-09 04:24:03'),
(2, 'OCUPADO', NULL, '2022-06-09 04:24:03'),
(3, 'LIMPIEZA', NULL, '2022-06-09 04:24:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `numero` int(255) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `id_estado_habitacion` int(11) NOT NULL,
  `id_piso` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id_habitacion`, `numero`, `detalle`, `precio`, `id_estado_habitacion`, `id_piso`, `id_categoria`, `fecha_creacion`) VALUES
(1, 1, 'WIFI + BAÑO + TV + CABLE', 70, 2, 1, 3, '2022-06-11 20:10:31'),
(2, 2, 'WIFI + BAÑO + TV + CABLE', 80, 1, 1, 2, '2022-06-09 04:29:22'),
(3, 3, 'BAÑO + TV + CABLE', 60, 2, 1, 3, '2022-06-11 20:10:00'),
(4, 4, 'WIFI + BAÑO + TV + CABLE', 80, 1, 1, 2, '2022-06-09 04:29:22'),
(5, 5, 'WIFI + BAÑO', 50, 1, 1, 3, '2022-06-09 04:29:22'),
(6, 6, 'WIFI + BAÑO + TV 4K + CABLE', 80, 3, 2, 3, '2022-06-11 20:10:08'),
(7, 7, 'WIFI + BAÑO + TV 4K + CABLE', 90, 1, 2, 2, '2022-06-09 04:29:22'),
(8, 8, 'WIFI + BAÑO + TV + CABLE', 70, 1, 2, 3, '2022-06-09 04:29:22'),
(9, 9, 'WIFI + BAÑO + TV + CABLE', 80, 2, 2, 2, '2022-06-11 20:10:24'),
(10, 10, 'WIFI + BAÑO + TV + CABLE', 70, 1, 2, 3, '2022-06-09 04:29:22'),
(11, 11, 'WIFI + BAÑO + TV 4K + CABLE', 120, 3, 3, 1, '2022-06-11 20:10:13'),
(12, 12, 'WIFI + BAÑO + TV 4K + CABLE', 120, 1, 3, 1, '2022-06-09 04:29:22'),
(13, 13, 'WIFI + BAÑO + TV 4K + CABLE', 120, 2, 3, 1, '2022-06-11 20:10:41'),
(14, 14, 'WIFI + BAÑO + TV + CABLE', 85, 1, 3, 2, '2022-06-09 04:29:22'),
(15, 15, 'WIFI + BAÑO + TV + CABLE', 75, 2, 3, 3, '2022-06-11 20:10:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `tipo_documento` enum('carnet identidad','licencia conducir','libreta militar','pasaporte') NOT NULL,
  `nro_documento` int(15) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) DEFAULT NULL,
  `nombres` varchar(30) NOT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `numero_celular` varchar(15) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `tipo_documento`, `nro_documento`, `apellido_paterno`, `apellido_materno`, `nombres`, `nacionalidad`, `fecha_nacimiento`, `correo`, `numero_celular`, `estado`, `fecha_creacion`) VALUES
(1, 'carnet identidad', 34345656, 'Perez', 'Torrez', 'Daniel Rodrigo', 'Boliviana', NULL, 'dperezt@gmail.com', NULL, '1', '2022-06-09 05:10:39'),
(2, 'carnet identidad', 34399056, 'Salazar', 'Perez', 'Pablo Cesar', 'Boliviana', NULL, 'psalazarp@gmail.com', NULL, '1', '2022-06-09 05:10:39'),
(3, 'pasaporte', 34113459, 'Blanco', 'Salazar', 'Luis Alberto', 'Boliviana', NULL, 'lblancos@gmail.com', NULL, '1', '2022-06-09 05:10:39'),
(4, 'carnet identidad', 36458791, 'Ramirez', 'Bautista', 'Sandra', 'Boliviana', NULL, 'sramirezb@gmail.com', NULL, '1', '2022-06-09 05:10:39'),
(5, 'pasaporte', 31227685, 'Bautista', 'Tomas', 'Cinthia katherine', 'Boliviana', NULL, 'cbautistat@gmail.com', NULL, '0', '2022-06-09 05:10:39'),
(6, 'carnet identidad', 44121978, 'Paiva', 'Agostopa', 'Raquel', 'Boliviana', NULL, 'rpaivaa@gmail.com', NULL, '1', '2022-06-09 05:10:39'),
(7, 'carnet identidad', 43310056, 'Mamani', 'Salazar', 'Ivan Rodrigo', 'Boliviana', NULL, 'imamanis@gmail.com', NULL, '0', '2022-06-09 05:10:39'),
(8, 'carnet identidad', 31200438, 'Benabides', 'Lopez', 'Carmen Patricia', 'Boliviana', NULL, 'cbenabidesl@gmail.com', NULL, '1', '2022-06-09 05:10:39'),
(9, 'pasaporte', 44009876, 'Lopez', '', 'Abraham', 'Boliviana', NULL, 'alopez1@gmail.com', NULL, '0', '2022-06-09 05:10:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piso`
--

CREATE TABLE `piso` (
  `id_piso` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `piso`
--

INSERT INTO `piso` (`id_piso`, `descripcion`, `estado`, `fecha_creacion`) VALUES
(1, 'PRIMERO', NULL, '2022-06-09 04:22:34'),
(2, 'SEGUNDO', NULL, '2022-06-09 04:22:34'),
(3, 'TERCERO', NULL, '2022-06-09 04:22:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion`
--

CREATE TABLE `recepcion` (
  `id_recepcion` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_habitacion` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_salida_confirmacion` date NOT NULL,
  `precio_inicial` int(11) NOT NULL,
  `adelanto` int(11) NOT NULL,
  `precio_restante` int(11) NOT NULL,
  `total_pagado` int(11) NOT NULL,
  `costo_penalidad` int(11) NOT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recepcion`
--

INSERT INTO `recepcion` (`id_recepcion`, `id_persona`, `id_habitacion`, `fecha_ingreso`, `fecha_salida`, `fecha_salida_confirmacion`, `precio_inicial`, `adelanto`, `precio_restante`, `total_pagado`, `costo_penalidad`, `observacion`, `fecha_creacion`) VALUES
(1, 1, 1, '2022-06-05', '2022-06-10', '2022-06-10', 70, 70, 0, 70, 0, '', '2022-06-17 03:49:17'),
(2, 2, 13, '2022-06-01', '2022-06-02', '2022-06-02', 100, 100, 0, 100, 0, NULL, '2022-06-17 03:52:08'),
(3, 4, 14, '2022-06-03', '2022-06-15', '2022-06-15', 90, 90, 0, 90, 0, NULL, '2022-06-17 13:53:52'),
(4, 6, 14, '2022-06-20', '2022-06-25', '2022-06-22', 70, 70, 0, 70, 0, NULL, '2022-06-17 14:31:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `perfil` text NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `verificacion` int(11) NOT NULL,
  `email_encriptado` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `perfil`, `nombre`, `email`, `password`, `verificacion`, `email_encriptado`, `foto`, `fecha`) VALUES
(1, 'usuario', 'Camino Real', 'caminoReal@gmail.com', '123456', 1, NULL, NULL, '2022-06-03 05:58:12'),
(2, 'admin', 'Luis Blanco Salazar', 'luis73025288@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 1, 'd976cc5b071ff0f99e2bdd6855b7f05b', 'vistas/img/usuarios/2/508.jpg', '2022-06-03 18:26:00'),
(3, 'usuario', 'Daniela Gutierrez', 'danielag@gmail.com', '123456', 1, NULL, NULL, '2022-06-10 19:09:46'),
(4, 'usuario', 'CInthia Bautista Tomas', 'cinthia.katherine15@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 1, '9b0621ca989e3eafc990caaffacf39f6', NULL, '2022-06-10 23:11:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `estado` enum('1','0') NOT NULL,
  `id_recepcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalle_venta`),
  ADD KEY `fk_id_venta` (`id_venta`);

--
-- Indices de la tabla `estado_habitacion`
--
ALTER TABLE `estado_habitacion`
  ADD PRIMARY KEY (`id_estado_habitacion`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_habitacion`),
  ADD KEY `fk_id_estado_habitacion` (`id_estado_habitacion`),
  ADD KEY `fk_id_piso` (`id_piso`),
  ADD KEY `fk_id_categoria` (`id_categoria`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `piso`
--
ALTER TABLE `piso`
  ADD PRIMARY KEY (`id_piso`);

--
-- Indices de la tabla `recepcion`
--
ALTER TABLE `recepcion`
  ADD PRIMARY KEY (`id_recepcion`),
  ADD KEY `fk_id_persona` (`id_persona`),
  ADD KEY `fk_id_habitacion` (`id_habitacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_habitacion`
--
ALTER TABLE `estado_habitacion`
  MODIFY `id_estado_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `piso`
--
ALTER TABLE `piso`
  MODIFY `id_piso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recepcion`
--
ALTER TABLE `recepcion`
  MODIFY `id_recepcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fk_id_venta` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`);

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `fk_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `fk_id_estado_habitacion` FOREIGN KEY (`id_estado_habitacion`) REFERENCES `estado_habitacion` (`id_estado_habitacion`),
  ADD CONSTRAINT `fk_id_piso` FOREIGN KEY (`id_piso`) REFERENCES `piso` (`id_piso`);

--
-- Filtros para la tabla `recepcion`
--
ALTER TABLE `recepcion`
  ADD CONSTRAINT `fk_id_habitacion` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id_habitacion`),
  ADD CONSTRAINT `fk_id_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_id_recepcion` FOREIGN KEY (`id_venta`) REFERENCES `recepcion` (`id_recepcion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
