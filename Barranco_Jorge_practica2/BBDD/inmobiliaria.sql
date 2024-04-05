-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2024 a las 20:08:28
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprados`
--

CREATE TABLE `comprados` (
  `usuario_comprador` int(5) DEFAULT NULL,
  `Codigo_piso` int(11) DEFAULT NULL,
  `Precio_final` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `Codigo_piso` int(11) NOT NULL,
  `calle` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `puerta` varchar(5) NOT NULL,
  `cp` int(11) NOT NULL,
  `metros` int(11) NOT NULL,
  `zona` varchar(15) DEFAULT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `usuario_id` int(5) DEFAULT NULL,
  `estado_reserva` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`Codigo_piso`, `calle`, `numero`, `piso`, `puerta`, `cp`, `metros`, `zona`, `precio`, `imagen`, `usuario_id`, `estado_reserva`) VALUES
(10, 'Calle de los Cantos', 3, 7, 'D', 28922, 120, 'Alcorcon', 220000, '../img/piso2.jpg', 16, 'Reservado'),
(11, 'Albacete', 5, 7, 'A', 28922, 110, 'Alcorcon', 100000, '../img/piso1.jpg', 16, 'Reservado'),
(12, 'aaaaa', 111, 222, '333', 44444, 100, 'zzzzz', 80000, '../img/piso3.jpg', 12, 'Disponible'),
(13, 'eeeee', 123, 123, '123', 28922, 123123, '123123', 212323, '../img/piso4.webp', 12, 'Disponible'),
(14, 'alburquerque', 1, 2, '4', 11445, 12345, 'ewewew', 500000, '../img/piso1.jpg', 12, 'Disponible'),
(15, 'aaaaaa', 1, 2, '3', 22222, 233, 'ssssss', 1111110, '../img/fondo1.jpg', 12, 'Disponible'),
(16, 'asd', 234, 2, '23', 23423, 23222, 'asdasd', 12321, '../img/fondo1.jpg', 16, 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(5) NOT NULL,
  `nombres` varchar(35) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(80) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nombres`, `correo`, `clave`, `tipo_usuario`) VALUES
(12, 'David', 'david@gmail.com', '$2y$10$lwMZORTfywOPOYaCuRnQteHLr5Ux3hGCbpS3.AmTUdKQ2vYR1G00.', 'Vendedor'),
(13, 'Dani', 'Dani@gmail.com', '$2y$10$E6Q1.hTUbnyv/ODe9WeoBeVAVdXLe7I6OSoALD8Qr0BkyyCmgvjIG', 'Comprador'),
(14, 'Alberto', 'alberto@gmail.com', '$2y$10$le3yJnpjqZnE14e93zZeiuFeDxP.HQJLqASYSgp5PyYy8tQoLTE.O', 'Comprador'),
(15, 'Manuel', 'jorgebarvaz2@gmail.com', '$2y$10$e27QzyKFJlmCwg7vj2zqvenLOd5I9tSXEOUGCXjtsYGs3UCePmMTW', 'Vendedor'),
(16, 'Jorge', 'jorgebarvaz@gmail.com', '$2y$10$NNrutzohNH2FRIBsQzuQhe1gKE99hQRz7MOBwMfF6u94dn0spMyCS', 'Vendedor'),
(17, 'Jesus', 'jesus@gmail.com', '$2y$10$vceQAdqy2REAO9sEu/NC7OwFDajLEVHx46yP0GRNac6ZNwm3BO5t6', 'Comprador'),
(18, 'alvaro', 'alvaro@gmail.com', '$2y$10$kN8Vlo7wzdEgvDcrNvIAX.5..S6hS/as2cjiMzPArKNufaVu89HGm', 'Comprador'),
(19, 'guille', 'guille@gmail.com', '$2y$10$Ul0wwgT1jvB9Dj57abqZZeS0ks6paA6kV1Wq1VTvCgmWyD9Dzuqnq', 'Comprador'),
(20, 'a', 'a@a.com', '$2y$10$57QAm9ZgnBcKwnzo6SR4P.I4zrrKLmolgyTJt9Qenvn5HoCdScN4K', 'Comprador'),
(21, 'alba', 'alba@gmail.com', '$2y$10$3SIq6/d8oLfXl5yIGANFE.NBdmY79J0v6BFsYf4IAqUcpK6M0WZ9C', 'Vendedor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`Codigo_piso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `Codigo_piso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
