-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2022 a las 06:14:10
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbautos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `Patente` varchar(10) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Km` varchar(6) NOT NULL,
  `Anio` int(4) NOT NULL,
  `Observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`Patente`, `Marca`, `Modelo`, `Km`, `Anio`, `Observaciones`) VALUES
('ABC 123', 'FORD', 'FOCUS', '120000', 2018, 'BUENA MECANICA. POCOS DETALLES EN LA CARROCERIA.'),
('ADF 987', 'CHEVROLET', 'AGILE', '120000', 2019, 'DETALLES MINIMOS EN LA CARROCERIA. UNICA MANO. CUBIERTAS NUEVAS. PAPELES AL DIA.'),
('AYT 445', 'AUDI', 'Q5', '50000', 2018, 'SE ENCUENTRA EN EXCELENTES CONDICIONES. UNICO DUEñO'),
('CAB 889', 'TOYOTA', 'COROLLA', '95000', 2020, 'MINIMOS DETALLES. NEUMATICOS NUEVOS. MUY BIEN CUIDADO'),
('EPU 546', 'FORD', 'KA', '130000', 2000, 'MOTOR 1.2 . PAPELES AL DIA. BUENA MECANICA. SOLO DETALLES A LA VISTA'),
('MUA 123', 'TOYOTA', 'ETIOS', '85000', 2020, 'UNICO DUEÑO. PAPELES AL DIA. CUBIERTAS NUEVAS.'),
('YTM 999', 'CHEVROLET', 'CORSA', '140000', 2010, 'TRANSMISIóN MANUAL. TRES PUERTAS. SEGUNDO DUEÑO. DETALLES A LA VISTA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`Patente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
