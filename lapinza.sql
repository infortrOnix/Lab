-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2021 a las 06:16:12
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
-- Base de datos: `lapinza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idcarrito` int(10) NOT NULL,
  `idusuario` int(10) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`idcarrito`, `idusuario`, `precio`) VALUES
(1, 1, 3200),
(2, 1, 1200),
(3, 1, 1550),
(4, 1, 3600),
(7, 1, 6400),
(8, 2, 1800),
(9, 2, 1700),
(10, 2, 1700),
(11, 2, 1700),
(12, 2, 1700),
(13, 2, 700),
(14, 2, 700),
(15, 2, 1800),
(16, 2, 1200),
(17, 2, 3600),
(18, 2, 3200),
(19, 2, 450),
(20, 2, 900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`, `descripcion`) VALUES
(1, 'Construccion', 'Materiales de construccion y Herramientas'),
(2, 'Herramientas de Mano', 'Herraminestas multipropositos de mano electricas, mecanicas o manuales'),
(3, 'Jardin', ''),
(4, 'Camping', ''),
(5, 'Bazar', ''),
(6, 'Pinturas', ''),
(7, 'Electricidad', ''),
(8, 'Iluminacion', ''),
(9, 'Muebles', ''),
(10, 'Pisos', ''),
(11, 'Revestimientos', ''),
(12, 'Maderas', ''),
(13, 'Plomeria', ''),
(14, 'Montoto', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `idOrden` int(11) NOT NULL,
  `idcarrito` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idArticulo` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `detalle` varchar(200) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precioMinorista` float NOT NULL,
  `descuentoMayorista` float NOT NULL,
  `cantidadMinima` int(11) NOT NULL,
  `oferta` tinyint(1) NOT NULL,
  `descuentoOferta` float NOT NULL,
  `stock` int(11) NOT NULL,
  `idcategoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idArticulo`, `descripcion`, `marca`, `detalle`, `imagen`, `precioMinorista`, `descuentoMayorista`, `cantidadMinima`, `oferta`, `descuentoOferta`, `stock`, `idcategoria`) VALUES
(1, 'Caja de Herramientas', 'Stanley', 'Caja Plastica para Herramientas de mano', 'cajaHerramientas.jpg', 1800, 10, 5, 0, 2, 100, 4),
(2, 'Carretilla 75L', 'Garelli', 'Carretilla metálica , rueda de caucho con cámara, capacidad 75 litros', 'carretilla75l.jpg', 3200, 10, 10, 1, 35, 200, 1),
(3, 'Cemento 50Kg', 'Loma Negra', 'Cemento PortLand por bolsa de 50 Kg. marca Loma Negra', 'cementoLomaNegrax50.jpg', 1200, 5, 100, 1, 25, 1000, 1),
(4, 'Pinza Pico de Loro', 'Bako', 'Pinza de mano Pico de Loro', 'pinzaPicoLoro.jpg', 450, 5, 20, 0, 0, 60, 2),
(5, 'Fratacho', 'Frezz', 'Fratacho goma espuma albañil mango pvc', 'fratacho200.jpg', 350, 5, 10, 1, 20, 60, 1),
(6, 'Kit de Herramientas', 'Black&Decker', 'Juego de Herramientas de mano, en caja maletin de plastico reforzado.', 'juegoHerramientasManuales.jpg', 3500, 10, 5, 1, 15, 54, 2),
(7, 'Escalera Tijera Aluminio', 'Halley', 'Escalera aluminio 8 pasos, plegable tipo tijera', 'escalera8pasos.jpg', 1800, 5, 4, 0, 0, 40, 8),
(8, 'Taladro a Baterias', 'TCC', 'Taladro 12 mm con cargador de baterias', 'taladroInalambricoTcc.jpg', 4600, 15, 2, 1, 15, 20, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `idTipoUser` int(10) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `password`, `salt`, `nombre`, `apellido`, `ciudad`, `provincia`, `cp`, `domicilio`, `idTipoUser`, `fecha`) VALUES
(22, 'norbertovaldeon@gmail.com', '304abb52fda3c71cb3efcf4ff1bb60c63cff0a7e67249b9a4a4c781f1fafd958', 'ad822efa28ccee6b084d572f0a6dac6fa00528164078ed9fb06aca16e660b51e', 'Norberto', 'Valdeon', 'La Toma', 'San Luis', '5759', 'Pte Peron mz 42 c1', 1, '2021-07-28 01:08:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idcarrito`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`idOrden`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idcarrito` (`idcarrito`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idcarrito` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `producto` (`idArticulo`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `orden_ibfk_3` FOREIGN KEY (`idcarrito`) REFERENCES `carrito` (`idcarrito`) ON DELETE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
