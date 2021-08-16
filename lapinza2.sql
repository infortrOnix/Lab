-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2020 a las 05:16:47
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
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
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idArticulo`, `descripcion`, `marca`, `detalle`, `imagen`, `precioMinorista`, `descuentoMayorista`, `cantidadMinima`, `oferta`, `descuentoOferta`, `stock`, `idcategoria`) VALUES
(1, 'Caja de Herramientas', 'Stanley', 'Caja Plastica para Herramientas de mano', 'cajaHerramientas.jpg', 1800, 10, 5, 0, 2, 100, 1),
(2, 'Carretilla 75L', 'Garelli', 'Carretilla metálica , rueda de caucho con cámara, capacidad 75 litros', 'carretilla75l.jpg', 3200, 10, 10, 0, 5, 200, 2),
(3, 'Cemento Loma negra 50Kg', 'Loma Negra', 'Cemento PortLand por bolsa de 50 Kg. marca Loma Negra', 'cementoLomaNegrax50.jpg', 1200, 5, 100, 0, 2, 1000, 2),
(4, 'Pinza Pico de Loro', 'Bako', 'Pinza de mano Pico de Loro', 'pinzaPicoLoro.jpg', 450, 5, 20, 0, 0, 60, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idcarrito` int(10) NOT NULL,
  `idusuario` varchar(100) NOT NULL,
  `idproducto` int(10) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(8) NOT NULL,
  `idTipoUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idArticulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
