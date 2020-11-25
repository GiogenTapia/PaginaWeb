-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2020 a las 22:30:57
-- Versión del servidor: 10.5.5-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paginaweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID_login` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID_login`, `nombre`, `pass`, `correo`, `apellidos`, `telefono`) VALUES
(1, 'EdgarLM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'edgar@gmail.com', 'Lopez', 4451125),
(2, 'GiovanniTM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'giovanni@hotmail.com', 'Tapia', 1212),
(3, 'Betoxx', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Alberto', 'Nava', 32323),
(5, 'Litos', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Litos@hotmail.com', 'Romero', 12121),
(6, '13121', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2323', '213', 1213),
(7, 'ElPapu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'eds@hotmail.com', 'dsfsdf', 23232),
(8, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'eds2@hotmail.com', '121', 1212),
(9, 'ElPapu3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'edsd@hotmail.com', '232', 232);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


create table foros(
id int auto_increment not null primary key,
id_us int not null ,
titulo varchar(50) not null,
categoria varchar(50) not null,
contenido longtext not null,
fecha datetime not null,
constraint foreign key (id_us) references login(ID_login)
);