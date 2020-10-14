-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 05:16:48
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aromaticos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Incienso'),
(2, 'Sahumerio'),
(3, 'Cono'),
(5, 'Bomba de humo'),
(6, 'Aceite para hornillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `aroma` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `propiedad` text NOT NULL,
  `duracion` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `aroma`, `precio`, `propiedad`, `duracion`, `id_categoria`) VALUES
(3, 'Mirra', 80, 'Indicado para tos seca y tos productiva.', 15, 3),
(4, 'Arandanos', 180, ' Comparte beneficios con el aceite esencial de limón (energizante y facilita la respiración), además ayuda a calmarnos y a relajarnos. También puede ser un buen repelente de mosquitos. Estimula las defensas del organismo.', 20, 1),
(5, 'Limon', 200, 'Ayuda a crear energía en el ambiente y nos impulsa para ser más activos, facilita la respiración.', 20, 6),
(6, 'Fresias', 100, 'Ayuda a crear energía en el ambiente y nos impulsa a ser más activos.', 15, 3),
(7, 'Melon y miel', 250, 'facilita la respiración, ya sea porque estemos refriados o simplemente queramos abrir más nuestras vías respiratorias. También puede ser un buen repelente de mosquitos. Estimula las defensas del organismo.', 45, 6),
(8, 'Limon', 100, 'Ayuda a crear energía en el ambiente y nos impulsa para ser más activos, facilita la respiración.', 15, 3),
(11, 'Arandanos', 380, 'Comparte beneficios con el aceite esencial de limón (energizante y facilita la respiración), además ayuda a calmarnos y a relajarnos. También puede ser un buen repelente de mosquitos. Estimula las defensas del organismo.', 120, 5),
(13, 'Fresias', 180, 'Ayuda a crear energía en el ambiente y nos impulsa a ser más activos, ayuda a calmarnos y a relajarnos.', 20, 1),
(14, 'Limon', 200, 'Ayuda a crear energía en el ambiente y nos impulsa para ser más activos, facilita la respiración.', 20, 6),
(16, 'Mirra', 250, 'Indicado para tos seca y tos productiva.', 45, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`) VALUES
(1, 'fran_tandil@hotmail.com', '$2y$10$9g2SqNeA.2S1i6v/sZeadu7VmweQipVFqQa/FMpJG8niPAqREoL5W');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
