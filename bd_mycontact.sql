-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2016 a las 09:10:12
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_mycontact`
--
CREATE DATABASE IF NOT EXISTS `bd_mycontact` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_mycontact`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacts`
--

CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `con_id` int(4) NOT NULL,
  `con_name` varchar(15) COLLATE utf8_bin NOT NULL,
  `con_surname` varchar(30) COLLATE utf8_bin NOT NULL,
  `con_phone` int(9) NOT NULL,
  `con_phone2` int(9) NOT NULL,
  `con_mail` varchar(35) COLLATE utf8_bin NOT NULL,
  `con_address` varchar(50) COLLATE utf8_bin NOT NULL,
  `con_lat_home` int(15) NOT NULL,
  `con_len_home` int(15) NOT NULL,
  `con_lat_other` int(15) NOT NULL,
  `con_len_other` int(15) NOT NULL,
  `con_text` text COLLATE utf8_bin NOT NULL,
  `usu_mail` varchar(35) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `usu_mail` varchar(35) COLLATE utf8_bin NOT NULL,
  `usu_password` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_name` varchar(15) COLLATE utf8_bin NOT NULL,
  `usu_surname` varchar(30) COLLATE utf8_bin NOT NULL,
  `usu_phone` int(9) NOT NULL,
  `usu_phone2` int(9) DEFAULT NULL,
  `usu_zipcode` int(15) NOT NULL,
  `usu_city` varchar(30) COLLATE utf8_bin NOT NULL,
  `usu_level` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`usu_mail`, `usu_password`, `usu_name`, `usu_surname`, `usu_phone`, `usu_phone2`, `usu_zipcode`, `usu_city`, `usu_level`) VALUES
('carlos@gmail.com', 'carlos', 'Carlos', 'Sanchez Vargas', 123456789, NULL, 8901, 'Hospitalet de Llobregat', 'root'),
('dani@gmail.com', 'dani', 'Daniel', 'Lorenzo Dominguez', 987654321, NULL, 8830, 'Sant Boi de Llobregat', 'root'),
('david@gmail.com', 'david', 'David', 'Marin', 987126534, NULL, 8005, 'Barcelona', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `usu_mail` (`usu_mail`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`usu_mail`),
  ADD KEY `usu_mail` (`usu_mail`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  MODIFY `con_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD CONSTRAINT `tbl_contacts_ibfk_1` FOREIGN KEY (`usu_mail`) REFERENCES `tbl_users` (`usu_mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
