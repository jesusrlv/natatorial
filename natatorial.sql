-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-09-2023 a las 20:10:59
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
(4, '2023-07-14', 17, 4, 3, 'ddsasa', 'jhg', 'xcx', '768', 'jesusrlvrojo@gmail.com', '78687', 8687, 'cxzcxz', '13131232', 0, 'Nat-0aea6u4a2-072023'),
(5, '2023-07-12', 12, 4, 3, 'ddsasa', 'jhg', 'xcx', '768', 'jesusrlvrojo@gmail.com', '78687', 8687, 'cxzcxz', '13131232', 0, 'Nat-hfprz8p9t-072023'),
(6, '2023-07-09', 10, 2, 3, 'sadasd', 'adsadsa', 'dasdasd', '2313123', 'jesusrlvrojo@gmail.com', '3423432', 234234, 'sdsf', '3244324', 1, 'Nat-kc8t7zb1x-072023'),
(9, '2023-07-12', 13, 4, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 0, 'Nat-kgq54jr7z-072023'),
(10, '2023-07-12', 13, 4, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-g84vdt2sf-072023'),
(11, '2023-07-12', 17, 3, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-o6z0i279k-072023'),
(12, '2023-07-12', 14, 3, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-rny4bd80d-072023'),
(13, '2023-07-12', 18, 3, 3, '232223', 'sd', 'sd', '12', 'e@w.vpo', '21', 21, 'dsads', 'dsds', 1, 'Nat-7g5luvzwe-072023'),
(14, '2023-07-08', 12, 3, 3, 'sadas', 'asd', 'asd', '1321', 'e@w.vpo', '34234', 324234, 'ddasdasd', '3213213', 1, 'Nat-segt0eyc0-072023'),
(15, '2023-09-12', 11, 2, 1, 'No location at home', 'wq', 'qw', 'e', 'jesusrlvrojo@gmail.com', '1111', 111, '', '', 1, 'Nat-cq8re8gfc-092023'),
(16, '2023-09-18', 9, 1, 1, 'No location at home', 'e', 'e', 'e', 'jesusrlvrojo@gmail.com', '22', 22, '', '', 2, 'Nat-tm819aqfg-092023'),
(17, '2023-09-06', 12, 3, 1, 'No location at home', '', '', 'dsds', 'jesusrlvrojo@gmail.com', '33', 33, 'No apply', '0', 2, 'Nat-dlijfnatx-092023'),
(18, '2023-09-06', 12, 3, 1, 'No location at home', '', 'dsd', 'dsds', 'jesusrlvrojo@gmail.com', '33', 33, 'No apply', '0', 0, 'Nat-n7mj1xswk-092023'),
(19, '2023-09-06', 12, 3, 1, 'No location at home', 'dsdsd', 'dsd', 'dsds', 'jesusrlvrojo@gmail.com', '33', 33, 'No apply', '0', 1, 'Nat-z9q8n4d5u-092023'),
(20, '2023-09-07', 8, 1, 1, 'No location at home', '1', '1', 'q', 'jesusrlvrojo@gmail.com', '2', 2, 'No apply', '0', 1, 'Nat-bdj5kf4so-092023'),
(21, '2023-09-05', 7, 2, 1, 'No location at home', 'w', 'w', 'W', 'jesusrlvrojo@gmail.com', '11', 111, 'No apply', '0', 0, 'Nat-q2tz82ufq-092023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_hour`
--

CREATE TABLE `catalogo_hour` (
  `id` int(11) NOT NULL,
  `hour` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `catalogo_hour`
--

INSERT INTO `catalogo_hour` (`id`, `hour`) VALUES
(10, '10.30'),
(11, '11.30'),
(12, '12.30'),
(13, '13.30'),
(14, '14.30'),
(15, '15.30'),
(16, '16.30'),
(17, '17.30'),
(18, '18.30');

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
-- Estructura de tabla para la tabla `dayHourLocation`
--

CREATE TABLE `dayHourLocation` (
  `id` int(11) NOT NULL,
  `day` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dayHourLocation`
--

INSERT INTO `dayHourLocation` (`id`, `day`, `hour`, `location`) VALUES
(1, 'Monday', '7', 1),
(2, 'Monday', '8', 1),
(3, 'Monday', '9', 1),
(4, 'Monday', '10', 1),
(5, 'Monday', '11', 1),
(6, 'Monday', '12', 1),
(7, 'Monday', '14.30', 1),
(8, 'Monday', '15', 1),
(9, 'Monday', '15.30', 1),
(10, 'Monday', '16', 1),
(11, 'Monday', '16.30', 1),
(12, 'Monday', '17', 1),
(13, 'Monday', '17.30', 1),
(14, 'Monday', '18', 1),
(15, 'Monday', '18.30', 1),
(16, 'Monday', '19', 1),
(17, 'Monday', '19.30', 1),
(21, 'Tuesday', '7', 1),
(22, 'Tuesday', '8', 1),
(23, 'Tuesday', '9', 1),
(24, 'Tuesday', '10', 1),
(25, 'Tuesday', '11', 1),
(26, 'Tuesday', '12', 1),
(27, 'Wednesday', '7', 1),
(28, 'Wednesday', '8', 1),
(29, 'Wednesday', '9', 1),
(30, 'Wednesday', '10', 1),
(31, 'Wednesday', '11', 1),
(32, 'Wednesday', '12', 1),
(33, 'Wednesday', '14.30', 1),
(34, 'Wednesday', '15', 1),
(35, 'Wednesday', '15.30', 1),
(36, 'Wednesday', '16', 1),
(37, 'Wednesday', '16.30', 1),
(38, 'Wednesday', '17', 1),
(39, 'Wednesday', '17.30', 1),
(40, 'Wednesday', '18', 1),
(41, 'Wednesday', '18.30', 1),
(42, 'Wednesday', '19', 1),
(43, 'Wednesday', '19.30', 1),
(44, 'Thursday', '7', 1),
(45, 'Thursday', '8', 1),
(46, 'Thursday', '9', 1),
(47, 'Thursday', '10', 1),
(48, 'Thursday', '11', 1),
(49, 'Thursday', '12', 1),
(50, 'Friday', '7', 1),
(51, 'Friday', '8', 1),
(52, 'Friday', '9', 1),
(53, 'Friday', '10', 1),
(54, 'Friday', '11', 1),
(55, 'Friday', '12', 1),
(56, 'Friday', '14.30', 1),
(57, 'Friday', '15', 1),
(58, 'Friday', '15.30', 1),
(59, 'Friday', '16', 1),
(60, 'Friday', '16.30', 1),
(61, 'Friday', '17', 1),
(62, 'Friday', '17.30', 1),
(63, 'Friday', '18', 1),
(64, 'Friday', '18.30', 1),
(65, 'Friday', '19', 1),
(66, 'Friday', '19.30', 1);

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
(16, 'hola', '2023-09-06 10:35:20', 2);

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
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `usr`, `pwd`, `perfil`) VALUES
(1, 'admin', '123456789', 1);

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
-- Indices de la tabla `dayHourLocation`
--
ALTER TABLE `dayHourLocation`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `catalogo_hour`
--
ALTER TABLE `catalogo_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `catalogo_places`
--
ALTER TABLE `catalogo_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dayHourLocation`
--
ALTER TABLE `dayHourLocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
