-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 00:17:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdestaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaciones`
--

CREATE TABLE `estaciones` (
  `idEstaciones` int(11) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Longitud` double NOT NULL,
  `Latitud` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`idEstaciones`, `Nombre`, `Longitud`, `Latitud`) VALUES
(1, 'Estación 1', -104.353466, 19.76488),
(2, 'Estación 2', -104.363879, 19.77777),
(3, 'Estación 3', -104.376035, 19.763157),
(4, 'Estación 4', -104.36444, 19.78472),
(5, 'Estación 5', -104.36776, 19.77888);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `Usuario` varchar(10) NOT NULL,
  `Contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idRegistro` int(11) NOT NULL,
  `estaciones_nombre` varchar(35) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `Temp_Out` float NOT NULL,
  `Hi_Temp` float NOT NULL,
  `Low_Temp` float NOT NULL,
  `Out_Hum` int(10) NOT NULL,
  `Dew_Pt` float NOT NULL,
  `Wind_Speed` float NOT NULL,
  `Wind_Dir` varchar(10) NOT NULL,
  `Wind_Run` float NOT NULL,
  `Hi_Speed` float NOT NULL,
  `Hi_Dir` varchar(10) NOT NULL,
  `Wind_Chill` float NOT NULL,
  `Heat_Index` float NOT NULL,
  `THW_Index` float NOT NULL,
  `THWS_Index` float NOT NULL,
  `Bar` float NOT NULL,
  `Rain` float NOT NULL,
  `Rain_Rate` float NOT NULL,
  `Solar_Rad` int(10) NOT NULL,
  `Solar_Energy` float NOT NULL,
  `Hi_Solar_Rad` int(10) NOT NULL,
  `Uv_Index` float NOT NULL,
  `Uv_Dose` float NOT NULL,
  `Hi_Uv` float NOT NULL,
  `Heat_D-D` float NOT NULL,
  `Cool_D-D` float NOT NULL,
  `In_Temp` float NOT NULL,
  `In_Hum` int(10) NOT NULL,
  `In_Dew` float NOT NULL,
  `In_Heat` float NOT NULL,
  `In_EMC` float NOT NULL,
  `In_Air_Den` float NOT NULL,
  `ET` float NOT NULL,
  `Wind_Samp` int(10) NOT NULL,
  `Wind_TX` int(10) NOT NULL,
  `ISS_Recept` int(10) NOT NULL,
  `Arc_Int` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idRegistro`, `estaciones_nombre`, `fecha`, `hora`, `Temp_Out`, `Hi_Temp`, `Low_Temp`, `Out_Hum`, `Dew_Pt`, `Wind_Speed`, `Wind_Dir`, `Wind_Run`, `Hi_Speed`, `Hi_Dir`, `Wind_Chill`, `Heat_Index`, `THW_Index`, `THWS_Index`, `Bar`, `Rain`, `Rain_Rate`, `Solar_Rad`, `Solar_Energy`, `Hi_Solar_Rad`, `Uv_Index`, `Uv_Dose`, `Hi_Uv`, `Heat_D-D`, `Cool_D-D`, `In_Temp`, `In_Hum`, `In_Dew`, `In_Heat`, `In_EMC`, `In_Air_Den`, `ET`, `Wind_Samp`, `Wind_TX`, `ISS_Recept`, `Arc_Int`) VALUES
(7, 'Estación 2', '2023-09-23', '17:50:24', 31, 33, 27, 1, 0, 0, 'NNE', 0, 0, '', 0, 0, 0, 0, 0, 0, 1.6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Estación 3', '2023-09-22', '17:56:41', 28, 34, 24, 0, 0, 0, 'W', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Estación 1', '2021-06-26', '08:00:00', 20.6, 20.6, 20.4, 91, 19, 0, 'NNE', 0, 1.6, 'NNE', 20.6, 21.8, 21.8, 21.2, 1003.5, 0, 0, 49, 0.7, 56, 0, 0, 0, 0, 0.015, 27.6, 61, 19.4, 28.8, 10.95, 1.1372, 0, 234, 1, 100, 10),
(14, 'Estación 1', '2021-06-26', '08:10:00', 20.8, 20.8, 20.6, 90, 19.1, 0, 'NNE', 0, 3.2, 'NNE', 20.8, 22, 22, 21.6, 1003.6, 0, 0, 67, 0.96, 79, 0, 0, 0, 0, 0.017, 27.6, 61, 19.4, 28.9, 10.95, 1.137, 0, 233, 1, 100, 10),
(15, 'Estación 1', '2021-06-26', '08:20:00', 21.2, 21.3, 20.8, 89, 19.3, 0, 'NNE', 0, 1.6, 'NNE', 21.2, 22.3, 22.3, 22.4, 1003.6, 0, 0, 102, 1.46, 118, 0.2, 0.01, 0.5, 0, 0.02, 27.6, 61, 19.4, 28.9, 10.95, 1.137, 0, 232, 1, 100, 10),
(20, 'Estación 2', '2023-10-03', '08:40:00', 23.2, 23.7, 23.2, 81, 19.8, 14.5, 'WSW', 2.41, 27.4, 'WSW', 22.5, 24.3, 23.6, 22.6, 1003.3, 0, 0, 1, 0.01, 5, 0, 0, 0, 0, 0.034, 27.4, 63, 19.8, 28.8, 11.32, 1.1367, 0, 233, 1, 100, 10),
(22, 'Estación 2', '2023-10-02', '09:00:00', 22.7, 22.9, 22.7, 84, 19.9, 11.3, 'WSW', 1.88, 24.1, 'SW', 22.7, 23.7, 23.7, 22.6, 1003.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.03, 27.4, 64, 20, 29, 11.52, 1.1368, 0.05, 234, 1, 100, 10),
(25, 'Estación 3', '2023-10-01', '09:50:00', 22.8, 22.8, 22.8, 83, 19.8, 9.7, 'WSW', 1.61, 19.3, 'WSW', 22.8, 23.8, 23.8, 22.6, 1004, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.031, 27.3, 64, 19.9, 28.8, 11.53, 1.1377, 0, 232, 1, 100, 10),
(26, 'Estación 4', '2023-09-27', '10:00:00', 26.4, 26.4, 26, 67, 19.8, 1.6, 'E', 0.27, 6.4, 'E', 26.4, 27.7, 27.7, 37.1, 1003.3, 0, 0, 581, 8.33, 659, 3.7, 0.2, 4.1, 0, 0.056, 27.9, 58, 18.9, 29, 10.35, 1.1365, 0.2, 232, 1, 100, 10),
(27, 'Estación 2', '2021-06-26', '11:50:00', 28.8, 29, 28.8, 52, 18, 3.2, 'ESE', 0.54, 11.3, 'ESE', 28.8, 29.7, 29.7, 35.3, 1002.8, 0, 0, 554, 7.94, 596, 6.2, 0.33, 6.6, 0, 0.073, 28, 55, 18.1, 28.8, 9.85, 1.1366, 0, 234, 1, 100, 10),
(28, 'Estación 3', '2021-06-26', '12:00:00', 29.1, 29.2, 28.8, 50, 17.6, 3.2, 'SE', 0.54, 8, 'SE', 29.1, 29.9, 29.9, 35.7, 1003, 0, 0, 610, 8.74, 661, 6.9, 0.37, 7.3, 0, 0.075, 28, 54, 17.8, 28.7, 9.75, 1.1372, 0.46, 233, 1, 100, 10),
(29, 'Estación 4', '2021-06-26', '12:10:00', 29.3, 29.3, 29.1, 48, 17.2, 1.6, 'ENE', 0.27, 6.4, 'E', 29.3, 29.9, 29.9, 35.6, 1003, 0, 0, 601, 8.62, 679, 7, 0.38, 7.5, 0, 0.076, 28.1, 53, 17.6, 28.7, 9.6, 1.1374, 0, 232, 1, 100, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `usuario`) VALUES
(1, 'Admin'),
(2, 'Usuario1'),
(3, 'Usuario2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(15) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellidoP` varchar(35) NOT NULL,
  `apellidoM` varchar(35) NOT NULL,
  `profesion` varchar(35) NOT NULL,
  `institucion` varchar(35) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `tipoUsuario_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellidoP`, `apellidoM`, `profesion`, `institucion`, `contraseña`, `tipoUsuario_usuario`) VALUES
(4, 'Gerardo', 'Nuñez', 'Gonzalez', 'Profesor', 'CUCSur', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'Admin'),
(7, 'Esmeralda', 'Saldaña', 'Villafaña', 'Estudiante', 'CUCSur', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'Admin'),
(8, 'Lizbeth', 'Ortiz', 'Gonzales', 'Estudiante', 'CUCSur', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'Usuario1'),
(9, 'Luis', 'Regalado', 'Barreto', 'Estudiante', 'CUCSur', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'Usuario2'),
(12, 'Isidro', 'Salas', 'Aguirre', 'Profesor', 'CUCSur', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'Admin'),
(22, 'Fabrizzio', 'Carbonell', 'Bigurra', 'Estudiante', 'CUCSur', 'aeec0569af9b4bfd6de21f5013cadfd2cbf568c1930a95c6abc9a31c48d1c01a7cb165ad6a1d158fb92b60dcc6c6fa0d2218bf2403799ea49978737e8fadd033', 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables`
--

CREATE TABLE `variables` (
  `idVariables` int(11) NOT NULL,
  `variable` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `variables`
--

INSERT INTO `variables` (`idVariables`, `variable`) VALUES
(38, 'Temp_Out'),
(39, 'Hi_Temp'),
(40, 'Low_Temp'),
(41, 'Out_Hum'),
(42, 'Dew_Pt'),
(43, 'Wind_Speed'),
(44, 'Wind_Dir'),
(45, 'Wind_Run'),
(46, 'Hi_Speed'),
(47, 'Hi_Dir'),
(48, 'Wind_Chill'),
(49, 'Heat_Index'),
(50, 'THW_Index'),
(51, 'THWS_Index'),
(52, 'Bar'),
(53, 'Rain'),
(54, 'Rain_Rate'),
(55, 'Solar_Rad'),
(56, 'Solar_Energy'),
(57, 'Hi_Solar_Rad'),
(58, 'Uv_Index'),
(59, 'Uv_Dose'),
(60, 'Hi_Uv'),
(61, 'Heat_D-D'),
(62, 'Cool_D-D'),
(63, 'In_Temp'),
(64, 'In_Hum'),
(65, 'In_Dew'),
(66, 'In_Heat'),
(67, 'In_EMC'),
(68, 'In_Air_Den'),
(69, 'Et'),
(70, 'Wind_Samp'),
(71, 'Wind_Tx'),
(72, 'Iss_Recept'),
(73, 'Arc_Int');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD PRIMARY KEY (`idEstaciones`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idRegistro`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`idVariables`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  MODIFY `idEstaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `variables`
--
ALTER TABLE `variables`
  MODIFY `idVariables` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
