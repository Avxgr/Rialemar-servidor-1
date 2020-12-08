-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2020 a las 10:47:00
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rialemar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carros`
--

CREATE TABLE `carros` (
  `ID_Carro` int(11) NOT NULL,
  `Marca_Carro` varchar(15) NOT NULL,
  `Modelo_Carro` varchar(15) NOT NULL,
  `Color_Carro` varchar(10) NOT NULL,
  `Tipo_Transmision` varchar(20) NOT NULL,
  `Tipo_Traccion` varchar(20) NOT NULL,
  `Fecha_Salida` date NOT NULL,
  `Precio_Carro` int(11) NOT NULL,
  `Porcentaje_Costo_Renta` int(2) NOT NULL DEFAULT 20,
  `Porcentaje_Descuento_Membresia` int(2) NOT NULL,
  `Imagen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carros`
--

INSERT INTO `carros` (`ID_Carro`, `Marca_Carro`, `Modelo_Carro`, `Color_Carro`, `Tipo_Transmision`, `Tipo_Traccion`, `Fecha_Salida`, `Precio_Carro`, `Porcentaje_Costo_Renta`, `Porcentaje_Descuento_Membresia`, `Imagen`) VALUES
(2, 'Ferrari', '2GOligo', 'Rojo', 'Automatico', '22-GR', '2019-05-11', 15000000, 20, 0, '2.jpeg'),
(3, 'AC Cars', 'Cobra', 'Azul-Blanc', 'Manual', 'gr2', '1963-05-28', 3000000, 20, 0, 'cobra.jpg'),
(5, 'bmw', 'GTX', 'Gris', 'Automatico', 'GR2', '2020-03-05', 200000, 20, 0, 'bmw.jpg'),
(6, 'Lotus', 'MAX-EX', 'Blanco', 'Manual', 'Con3d', '2020-05-01', 300000, 20, 0, 'lotus.jpg'),
(7, 'tesla', 'chipll', 'Gris', 'Automatico', 'Marks', '2020-05-05', 20000000, 20, 0, 'tesla.jpg'),
(8, 'mercedes benz', 'Mark2', 'Azul', 'Manual', 'GR2', '2020-05-19', 3000000, 20, 0, 'mercedes.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_Cliente` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `APaterno` varchar(20) NOT NULL,
  `AMaterno` varchar(20) NOT NULL,
  `Edad` int(2) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Domicilio` varchar(60) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Nombre_Usuario` varchar(24) NOT NULL,
  `Contra_Usuario` varchar(24) NOT NULL,
  `Membresia` varchar(8) NOT NULL DEFAULT 'Inactivo'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_Cliente`, `Nombre`, `APaterno`, `AMaterno`, `Edad`, `Telefono`, `Domicilio`, `Correo`, `Nombre_Usuario`, `Contra_Usuario`, `Membresia`) VALUES
(1, 'Martha', 'Flores', 'Atenco', 16, '6641111111', 'Casa', 'atenco@hotmail.com', 'marflor', '123456', 'Activo'),
(2, 'alejandro', 'vaquera', 'lopez', 13, '6647773882', 'Comunidad Centro', 'alejandro.vaquera@gmail.com', 'alexer', '123', 'Activo'),
(3, 'Omar', 'Morales', 'Calvo', 25, '664388299', 'Col:Palmas', 'omar@gmail.com', 'omar', '123', 'Activo'),
(4, 'Luis', 'Castillo', 'Barrera', 24, '664883839', 'Col:Alubijes Calle:Centro', 'Luis@gmail.com', 'luis', '123', 'Inactivo'),
(5, 'Amelia', 'Valtierra', 'Jimenez', 25, '664737882', 'Col:losiana Calle:Esculto', 'Amelia@gmail.com', 'Amelia', '123', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos_descuentos`
--

CREATE TABLE `codigos_descuentos` (
  `ID_Codigo` int(11) NOT NULL,
  `Codigo` varchar(6) NOT NULL,
  `Porcentaje_Descuento` int(2) NOT NULL DEFAULT 5,
  `Estado` varchar(8) NOT NULL,
  `Categoria` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codigos_descuentos`
--

INSERT INTO `codigos_descuentos` (`ID_Codigo`, `Codigo`, `Porcentaje_Descuento`, `Estado`, `Categoria`) VALUES
(1, 'ABCDE1', 5, 'Activo', 'Carros'),
(3, 'AEIOU2', 15, 'Activo', 'Partes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `ID_Compra` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  `Producto` varchar(5) NOT NULL,
  `Fecha_Compra` date NOT NULL,
  `Monto` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL COMMENT 'Aceptado- Se envía a la tabla Ventas, Espera - La solicitud no ha sido procesada, por lo que permanece en espera'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`ID_Compra`, `ID_Cliente`, `ID_Producto`, `Producto`, `Fecha_Compra`, `Monto`, `Estado`) VALUES
(2, 3, 2, '', '2020-12-08', 0, 'Aceptado'),
(3, 3, 2, '', '2020-12-08', 0, 'Espera'),
(4, 3, 2, '', '2020-12-08', 0, 'Espera'),
(5, 3, 2, '', '2020-12-08', 0, 'Espera'),
(6, 3, 2, '', '2020-12-08', 0, 'Espera'),
(7, 3, 2, '', '2020-12-08', 0, 'Espera'),
(8, 3, 2, '', '2020-12-08', 0, 'Espera'),
(9, 3, 3, '', '2020-12-08', 0, 'Espera'),
(10, 3, 2, '', '2020-12-08', 0, 'Espera'),
(11, 3, 2, '', '2020-12-08', 15000000, 'Espera'),
(12, 3, 2, '', '2020-12-08', 15000000, 'Espera'),
(13, 3, 2, '', '2020-12-08', 14250000, 'Espera'),
(14, 3, 2, 'Carro', '2020-12-08', 15000000, 'Espera'),
(15, 3, 1, 'Parte', '2020-12-08', 0, 'Espera'),
(16, 3, 1, 'Parte', '2020-12-08', 0, 'Espera'),
(17, 3, 1, 'Parte', '2020-12-08', 300, 'Espera'),
(18, 3, 1, 'Parte', '2020-12-08', 255, 'Espera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_Empleado` int(5) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `APaterno` varchar(30) NOT NULL,
  `AMaterno` varchar(30) NOT NULL,
  `Edad` int(2) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Domicilio` varchar(100) NOT NULL,
  `User` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `TipoUsuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_Empleado`, `Nombre`, `APaterno`, `AMaterno`, `Edad`, `Telefono`, `Correo`, `Fecha_Inicio`, `Domicilio`, `User`, `Password`, `TipoUsuario`) VALUES
(6, 'violeta', 'vaquera', 'lopez', 20, '664555555', 'ale@lopiz.com', '2020-05-21', 'Calle lomas #45', 'viole', '123', 2),
(7, 'administrador', 'admin', 'istrador', 23, '664889490', 'admin@gmail.com', '2020-05-01', 'Col:Valle', 'administrador', '123', 1),
(8, 'Luisa', 'Valadez', 'Aquino', 24, '664883939', 'Luisa@gmail.com', '2020-05-01', 'Col:Laguna', 'luisa', '123', 2),
(9, 'Julian', 'Lopez', 'Torres', 34, '664773627', 'jergan@gmail.com', '2020-05-11', 'Col:Caliu', 'julian', '123', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE `membresia` (
  `ID_Membresia` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `membresia`
--

INSERT INTO `membresia` (`ID_Membresia`, `ID_Cliente`, `Fecha_Inicio`, `Fecha_Fin`) VALUES
(1, 3, '2020-12-05', '2021-12-05'),
(2, 1, '2020-12-05', '2021-12-05'),
(3, 2, '2020-12-06', '2021-12-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes`
--

CREATE TABLE `partes` (
  `ID_Parte` int(11) NOT NULL,
  `Nombre_Parte` varchar(50) NOT NULL,
  `Modelo_Parte` varchar(15) NOT NULL,
  `Marca_Parte` varchar(15) NOT NULL,
  `Precio_Parte` int(11) NOT NULL,
  `Porcentaje_Descuento_Membresia` int(2) NOT NULL,
  `Imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partes`
--

INSERT INTO `partes` (`ID_Parte`, `Nombre_Parte`, `Modelo_Parte`, `Marca_Parte`, `Precio_Parte`, `Porcentaje_Descuento_Membresia`, `Imagen`) VALUES
(1, 'Faro', 'Xtat', 'Ferrari', 300, 0, 'faro-ferrari.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentas`
--

CREATE TABLE `rentas` (
  `ID_Renta` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `ID_Carro` int(11) NOT NULL,
  `Fecha_Renta` date NOT NULL,
  `Duracion` int(2) NOT NULL,
  `Monto` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL COMMENT 'Aceptado-Se envía a la tabla de venta. Espera- La solicitud de renta no ha sido procesada'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rentas`
--

INSERT INTO `rentas` (`ID_Renta`, `ID_Cliente`, `ID_Carro`, `Fecha_Renta`, `Duracion`, `Monto`, `Estado`) VALUES
(1, 3, 2, '2020-12-08', 7, 1500000, 'Aceptado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_Venta` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `ID_Empleado` int(11) NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  `Producto` varchar(5) NOT NULL,
  `Fecha_Venta` date NOT NULL,
  `Monto` int(11) NOT NULL,
  `Movimiento` varchar(10) NOT NULL COMMENT 'Compra- Que viene de la tabla de compras. Renta- Que viene la tabla de Rentas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_Venta`, `ID_Cliente`, `ID_Empleado`, `ID_Producto`, `Producto`, `Fecha_Venta`, `Monto`, `Movimiento`) VALUES
(7, 21, 22, 1, '', '2020-03-18', 200000, 'venta'),
(9, 0, 1, 2, '', '2020-05-15', 15000000, 'Renta'),
(10, 22, 1, 332, '', '2020-05-15', 200000, 'Renta'),
(12, 6, 1, 3, '', '2020-05-24', 3000000, 'Renta'),
(13, 2, 1, 5, '', '2020-05-25', 200000, 'Compra'),
(14, 3, 0, 2, 'Carro', '2020-12-08', 1500000, 'Renta'),
(15, 3, 0, 2, 'Carro', '2020-12-08', 1500000, 'Renta'),
(16, 3, 0, 2, 'Carro', '2020-12-08', 1500000, 'Renta'),
(17, 3, 7, 2, 'Carro', '2020-12-08', 1500000, 'Renta'),
(18, 3, 7, 2, 'Carro', '2020-12-08', 1500000, 'Renta'),
(19, 3, 7, 2, 'Carro', '2020-12-08', 1500000, 'Renta'),
(20, 3, 7, 2, 'Carro', '2020-12-08', 1500000, 'Renta'),
(21, 3, 7, 2, '', '2020-12-08', 0, 'Compra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`ID_Carro`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indices de la tabla `codigos_descuentos`
--
ALTER TABLE `codigos_descuentos`
  ADD PRIMARY KEY (`ID_Codigo`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`ID_Compra`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_Empleado`);

--
-- Indices de la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`ID_Membresia`);

--
-- Indices de la tabla `partes`
--
ALTER TABLE `partes`
  ADD PRIMARY KEY (`ID_Parte`);

--
-- Indices de la tabla `rentas`
--
ALTER TABLE `rentas`
  ADD PRIMARY KEY (`ID_Renta`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_Venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carros`
--
ALTER TABLE `carros`
  MODIFY `ID_Carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `codigos_descuentos`
--
ALTER TABLE `codigos_descuentos`
  MODIFY `ID_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `ID_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID_Empleado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `membresia`
--
ALTER TABLE `membresia`
  MODIFY `ID_Membresia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `partes`
--
ALTER TABLE `partes`
  MODIFY `ID_Parte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rentas`
--
ALTER TABLE `rentas`
  MODIFY `ID_Renta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
