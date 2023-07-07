-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2023 a las 02:59:00
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `natatorial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `hora` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `lugar` int(11) NOT NULL,
  `lugar_otro` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel2` int(11) NOT NULL,
  `nombre_tutor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel_tutor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aprobar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `fecha_reserva`, `hora`, `nivel`, `lugar`, `lugar_otro`, `nombre`, `apellido`, `email`, `tel1`, `tel2`, `nombre_tutor`, `tel_tutor`, `domicilio`, `aprobar`) VALUES
(1, '2022-11-01', 14, 0, 0, NULL, 'Jesus', 'Leaños', 'jesusrlv@gmail.com', '', 0, '', '', 'Tulipanes 12 a', 0),
(2, '2022-11-02', 9, 0, 0, NULL, 'Villegas', 'Leañois', 'jesusrlvrojo@gmail.com', '', 0, '', '', 'Tulipanes 12 A El Carmen', NULL),
(3, '2022-12-01', 11, 0, 1, NULL, 'd', 'd', 'd', '', 0, '', '', 'd', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_hour`
--

CREATE TABLE `catalogo_hour` (
  `id` int(11) NOT NULL,
  `hour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_places`
--

CREATE TABLE `catalogo_places` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `catalogo_places`
--

INSERT INTO `catalogo_places` (`id`, `name`) VALUES
(1, 'Evegreen community acuatic center'),
(2, 'Redmond eaves campus community');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `estatus` int(11) DEFAULT NULL COMMENT '0= no pagado 1=pagado',
  `tipo_tarjeta` int(11) NOT NULL COMMENT 'débito o crédito',
  `nombre_card` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `num_c` int(4) DEFAULT NULL,
  `id_ext` varchar(12) COLLATE utf8_unicode_ci NOT NULL COMMENT 'aleatorio para identificar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `testimonial` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dateT` datetime NOT NULL,
  `calif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial`, `dateT`, `calif`) VALUES
(1, 'x', '2023-06-22 16:26:55', 5),
(2, 'd', '2023-06-22 16:53:38', 3),
(3, 'r', '2023-06-22 16:53:48', 3),
(4, 'ww', '2023-06-22 16:53:54', 2),
(5, 'yyyt', '2023-06-22 16:54:01', 1),
(6, 'Buen servicio!', '2023-06-22 16:54:22', 4),
(7, 'sssssssssssssssssssssssssssssssss', '2023-06-22 17:14:16', 2),
(8, 'x sd c', '2023-06-22 17:16:58', 2),
(9, 'jsonData.successjsonData.successjsonData.successjsonData.successjsonData.successjsonData.successjsonData.success jsonData.successjsonData.successjsonData.success', '2023-06-22 17:27:54', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `usr` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_hour`
--
ALTER TABLE `catalogo_hour`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_places`
--
ALTER TABLE `catalogo_places`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `catalogo_hour`
--
ALTER TABLE `catalogo_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catalogo_places`
--
ALTER TABLE `catalogo_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
