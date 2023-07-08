-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-07-2023 a las 04:26:41
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.29

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
  `domicilio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel2` int(11) NOT NULL,
  `nombre_tutor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel_tutor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `aprobar` int(11) DEFAULT NULL,
  `id_ext` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `fecha_reserva`, `hora`, `nivel`, `lugar`, `lugar_otro`, `nombre`, `apellido`, `domicilio`, `email`, `tel1`, `tel2`, `nombre_tutor`, `tel_tutor`, `aprobar`, `id_ext`) VALUES
(1, '2022-11-01', 14, 0, 0, NULL, 'Jesus', 'Leaños', 'Tulipanes 12 a', 'jesusrlv@gmail.com', '', 0, '', '', 0, ''),
(2, '2022-11-02', 9, 0, 0, NULL, 'Villegas', 'Leañois', 'Tulipanes 12 A El Carmen', 'jesusrlvrojo@gmail.com', '', 0, '', '', NULL, ''),
(3, '2022-12-01', 11, 0, 1, NULL, 'd', 'd', 'd', 'd', '', 0, '', '', NULL, ''),
(4, '2023-07-14', 17, 4, 3, 'ddsasa', 'jhg', 'xcx', '768', 'jesusrlvrojo@gmail.com', '78687', 8687, 'cxzcxz', '13131232', 1, 'Nat-0aea6u4a2-072023'),
(5, '2023-07-12', 12, 4, 3, 'ddsasa', 'jhg', 'xcx', '768', 'jesusrlvrojo@gmail.com', '78687', 8687, 'cxzcxz', '13131232', 1, 'Nat-hfprz8p9t-072023'),
(6, '2023-07-09', 10, 2, 3, 'sadasd', 'adsadsa', 'dasdasd', '2313123', 'jesusrlvrojo@gmail.com', '3423432', 234234, 'sdsf', '3244324', 1, 'Nat-kc8t7zb1x-072023'),
(7, '2023-07-08', 12, 3, 3, 'wdsds', 'wrwr', 'werwer', '3223', 's@w.net', '334', 43434, 'dd', '13331', 1, 'Nat-hy7g5gyah-072023'),
(8, '2023-07-08', 12, 3, 3, 'wdsds', 'wrwr', 'werwer', '3223', 's@w.net', '334', 43434, 'dd', '13331', 1, 'Nat-hy7g5gyah-072023'),
(9, '2023-07-12', 13, 4, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-kgq54jr7z-072023'),
(10, '2023-07-12', 13, 4, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-g84vdt2sf-072023'),
(11, '2023-07-12', 17, 3, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-o6z0i279k-072023'),
(12, '2023-07-12', 14, 3, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-rny4bd80d-072023'),
(13, '2023-07-12', 18, 3, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-7g5luvzwe-072023');

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
(2, 'Redmond eaves campus community'),
(3, 'At home');

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
  `num_c` int(20) DEFAULT NULL,
  `cc_expiration` int(11) NOT NULL,
  `id_ext` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'aleatorio para identificar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `fecha_pago`, `estatus`, `tipo_tarjeta`, `nombre_card`, `num_c`, `cc_expiration`, `id_ext`) VALUES
(1, '2023-07-07 21:24:44', 1, 2, 'dwewe', 222112112, 1122, 'Nat-hzwn2r6ch-072023'),
(2, '2023-07-07 21:26:10', 1, 2, 'dwewe', 222112112, 1122, 'Nat-7g5luvzwe-072023');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `catalogo_hour`
--
ALTER TABLE `catalogo_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catalogo_places`
--
ALTER TABLE `catalogo_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
