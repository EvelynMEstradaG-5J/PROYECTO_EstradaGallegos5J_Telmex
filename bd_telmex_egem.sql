-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 22:36:15
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_telmex_egem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `NoCuenta` int(10) NOT NULL,
  `NombreTitular` varchar(250) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Saldo` varchar(50) NOT NULL,
  `Interes` varchar(50) NOT NULL,
  `NIP` int(4) NOT NULL,
  `EntidadBancaria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`NoCuenta`, `NombreTitular`, `Tipo`, `Saldo`, `Interes`, `NIP`, `EntidadBancaria`) VALUES
(12345, 'Pablo Perez', 'Credito', '$8750', '$500', 1415, 'BBVA Bancomer'),
(101213, 'Manolo Sanchez', 'Debito', '$1800', '$100', 1122, 'HSBC'),
(1234567, 'Ernesto Hernandez', 'Debito', '$1200', '$400', 1206, 'Banamex'),
(5551114, 'Sofia Sosa', 'Credito', '$1412.50', '$600', 8595, 'Banorte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `NoFactura` int(11) NOT NULL,
  `Importe` varchar(11) NOT NULL,
  `NoCuenta` int(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `FechaExpiracion` date NOT NULL,
  `CVV` int(10) NOT NULL,
  `NIP` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`NoFactura`, `Importe`, `NoCuenta`, `Fecha`, `Descripcion`, `FechaExpiracion`, `CVV`, `NIP`) VALUES
(1, '389', 123456, '2021-12-01', 'Pago de servicios de Internet y telefonia 20 Mbps', '2021-12-05', 1234, 2345),
(2, '389', 12345, '2021-12-01', 'Pago de servicios de Internet y telefonia 20 Mbps', '2021-12-10', 1234, 1415),
(3, '489', 789452, '2021-12-01', 'Pago de servicios de Internet y telefonia 30 Mbps', '2021-12-15', 7890, 1030),
(4, '240', 142536, '2021-11-30', 'Pago de servicios de Internet 40 Mbps', '2021-12-03', 7447, 8558);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Fecha` varchar(10) NOT NULL,
  `Horario` varchar(50) NOT NULL,
  `NomCompleto` varchar(250) NOT NULL,
  `Paquete` varchar(100) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `CP` int(5) NOT NULL,
  `Telefono` bigint(13) NOT NULL,
  `EntreCalles` varchar(250) NOT NULL,
  `InfoAdicional` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Fecha`, `Horario`, `NomCompleto`, `Paquete`, `Direccion`, `CP`, `Telefono`, `EntreCalles`, `InfoAdicional`) VALUES
('2021-12-01', '4:00 p.m', 'Jose Perez', 'Internet 20 Mbps', 'Colonia D, Calle D #1004, int. #04', 45678, 789123456, 'Plutarco E. Calles y Zaragoza', 'u-v-u'),
('2021-12-10', '11:00 a.m', 'Paco Lopez Stanley', 'Internet 20 Mbps', 'Colonia A, Calle A #1001, int. #01', 12345, 6561502332, 'Piña y Papaya', 'ewe'),
('2021-12-20', '12:00 p.m', 'Sofia Valencia Martinez', 'Internet y telefonia 40 Mbps', 'Colonia C, Calle C #0003, int. #03', 34567, 4561237890, 'Obaldia e Independencia', 'uwu'),
('2022-01-01', '10:30 a.m', 'Evelyn Estrada Gallegos', 'Internet y telefonia 40 Mbps', 'Colonia E, Calle E #1005, int. #05', 56789, 7410852963, 'Licuado de platano y Limon', 'TwT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `NoUsuario` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` bigint(13) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `FechaDeNacimiento` date NOT NULL,
  `Correo` varchar(250) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`NoUsuario`, `Nombre`, `Apellido`, `Telefono`, `Direccion`, `FechaDeNacimiento`, `Correo`, `Contraseña`) VALUES
(2, 'Evelyn Marisol', 'Estrada Gallegos', 1243567890, 'Colonia A, Calle A #1001, int. #01', '2005-05-05', 'correo1@direccion1.com', '12345contra'),
(3, 'Nombre 1', 'Apellido 1', 2345678901, 'Colonia B, Calle B #1002, int. #02', '2002-02-22', 'correo2@direccion2.com', 'contra2'),
(4, 'Evelyn Marisol', 'Estrada Gallegos', 7890123456, 'Colonia C, Calle C #0003, int. #03', '2001-12-12', 'correo3@direccion3.com', 'contra3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`NoCuenta`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`NoFactura`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Fecha`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`NoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `NoFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `NoUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
