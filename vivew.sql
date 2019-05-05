-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2019 a las 21:41:03
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vivew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `nombre`) VALUES
(1, 'Comedia'),
(2, 'RPG'),
(3, 'Aventuras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `director` varchar(200) NOT NULL,
  `año` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `titulo_original` varchar(200) NOT NULL,
  `sinopsis` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `director`, `año`, `duracion`, `pais`, `titulo_original`, `sinopsis`, `imagen`) VALUES
(1, 'La vida de Brian', 'Terry Jones', 94, 1979, 'Reino Unido', 'Life Of Brian', 'Trata la historia de un judío que nace el mismo día que Jesucristo y ya de adulto es varias veces confundido con él.', ''),
(3, 'Test', 'Testing', 120, 1990, 'España', 'Test de esto', 'Una corrección de duración-año', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_genero`
--

CREATE TABLE `pelicula_genero` (
  `id_pelicula` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula_genero`
--

INSERT INTO `pelicula_genero` (`id_pelicula`, `id_genero`) VALUES
(1, 1),
(3, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `año` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plataforma`
--

INSERT INTO `plataforma` (`id`, `nombre`, `empresa`, `año`) VALUES
(1, 'Nintendo DS', 'Nintendo', 2004);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_videojuego` int(11) NOT NULL,
  `id_serie` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `review` text NOT NULL,
  `valoracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `director` varchar(200) NOT NULL,
  `año` int(11) NOT NULL,
  `temporadas` int(11) NOT NULL,
  `episodios` int(11) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `titulo_original` varchar(200) NOT NULL,
  `sinopsis` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`id`, `nombre`, `director`, `año`, `temporadas`, `episodios`, `pais`, `titulo_original`, `sinopsis`, `imagen`) VALUES
(4, 'Friends', 'David Crane', 1994, 10, 236, 'Estados Unidos', 'F.R.I.E.N.D.S', 'La serie trata sobre la vida de un grupo de amigos —Chandler Bing, Phoebe Buffay, Monica Geller, Ross Geller, Rachel Green y Joey Tribbiani— que residen en Manhattan, Nueva York. Suceden tanto buenos como malos momentos, pero con una crítica cómica a los hechos más trascendentales de la actualidad.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie_genero`
--

CREATE TABLE `serie_genero` (
  `id_serie` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `serie_genero`
--

INSERT INTO `serie_genero` (`id_serie`, `id_genero`) VALUES
(4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `password`, `email`, `rol`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '', 'admin'),
(3, 'b1', '3d7e851b031e23173b21f97b5d149d46b293d6d90182ed5eb615472c03103398cc40e1ae5f07f623e0c61fd0fa591178cff1c90579587a9de7c7876fccabee66', 'b1@b1.es', ''),
(4, 't1', '015372f33a73d9926cf32893b7b3a0bbe3980c9319f6868fdfc452679f2a583a07162dfff30dfefd2dd2662fa2658db21f69c9be61a22756079dccc40c192969', 't1@t1.es', ''),
(9, 'test', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'test@test.es', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `director` varchar(200) NOT NULL,
  `año` int(11) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `titulo_original` varchar(200) NOT NULL,
  `sinopsis` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `nombre`, `director`, `año`, `pais`, `titulo_original`, `sinopsis`, `imagen`) VALUES
(1, 'The world ends with you', 'Tetsura Nomura', 2007, 'Japón', 'It\'s a wonderful world', 'El juego se desarrolla en el distrito comercial de Shibuya, en Tokio. Mientras la vida continúa como de costumbre en el mundo real (llamado Realground, RG o MR), unos pocos elegidos de entre los muertos son transportados a un universo paralelo llamado Underground (UG) o Submundo (SM). Es en este plano de existencia dónde tiene lugar el juego en el que participan los protagonistas: el Juego de los Reapers.\r\n\r\nEl premio por ganar el juego es ser devuelto a la vida o ascender a un cargo de más poder en el mundo de los espíritus, y para poder participar como jugadores, los muertos deben entregar su posesión más preciada. La mayor parte de los jugadores que eligen permanecer en el mundo de los espíritus tras ganar, se convierten en Reapers, los oponentes de los jugadores en el Juego de los Reapers.', '/images/twewy.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego_genero`
--

CREATE TABLE `videojuego_genero` (
  `id_videojuego` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videojuego_genero`
--

INSERT INTO `videojuego_genero` (`id_videojuego`, `id_genero`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego_plataforma`
--

CREATE TABLE `videojuego_plataforma` (
  `id_videojuego` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pelicula_genero`
--
ALTER TABLE `pelicula_genero`
  ADD PRIMARY KEY (`id_pelicula`,`id_genero`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`,`id_videojuego`,`id_serie`,`id_pelicula`),
  ADD KEY `id_pelicula` (`id_pelicula`),
  ADD KEY `id_serie` (`id_serie`),
  ADD KEY `id_videojuego` (`id_videojuego`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `serie_genero`
--
ALTER TABLE `serie_genero`
  ADD PRIMARY KEY (`id_serie`,`id_genero`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videojuego_genero`
--
ALTER TABLE `videojuego_genero`
  ADD PRIMARY KEY (`id_videojuego`,`id_genero`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `videojuego_plataforma`
--
ALTER TABLE `videojuego_plataforma`
  ADD PRIMARY KEY (`id_videojuego`,`id_plataforma`),
  ADD KEY `id_plataforma` (`id_plataforma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula_genero`
--
ALTER TABLE `pelicula_genero`
  ADD CONSTRAINT `pelicula_genero_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`),
  ADD CONSTRAINT `pelicula_genero_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`);

--
-- Filtros para la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`),
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`id_serie`) REFERENCES `series` (`id`),
  ADD CONSTRAINT `reviews_ibfk_4` FOREIGN KEY (`id_videojuego`) REFERENCES `videojuegos` (`id`);

--
-- Filtros para la tabla `serie_genero`
--
ALTER TABLE `serie_genero`
  ADD CONSTRAINT `serie_genero_ibfk_1` FOREIGN KEY (`id_serie`) REFERENCES `series` (`id`),
  ADD CONSTRAINT `serie_genero_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`);

--
-- Filtros para la tabla `videojuego_genero`
--
ALTER TABLE `videojuego_genero`
  ADD CONSTRAINT `videojuego_genero_ibfk_1` FOREIGN KEY (`id_videojuego`) REFERENCES `videojuegos` (`id`),
  ADD CONSTRAINT `videojuego_genero_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`);

--
-- Filtros para la tabla `videojuego_plataforma`
--
ALTER TABLE `videojuego_plataforma`
  ADD CONSTRAINT `videojuego_plataforma_ibfk_1` FOREIGN KEY (`id_videojuego`) REFERENCES `videojuegos` (`id`),
  ADD CONSTRAINT `videojuego_plataforma_ibfk_2` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
