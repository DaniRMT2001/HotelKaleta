-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 10:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `habit`
--

CREATE TABLE `habit` (
  `id_hab` int(11) NOT NULL,
  `camas_hab` int(11) NOT NULL,
  `num_hab` int(11) NOT NULL,
  `edificio_hab` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `tipo_hab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `habit`
--

INSERT INTO `habit` (`id_hab`, `camas_hab`, `num_hab`, `edificio_hab`, `imagen`, `precio`, `descripcion`, `tipo_hab`) VALUES
(1, 4, 210, 'Naranja', 'img/habitacion1.jpg', '$1500', 'Habitación con cama Queen size. Decoración elegante y clásica con lujosas telas. Sala de estar separada con sofá y sillones. Vistas a la villa de Estoril. Baño en mármol; algunos con bañera y ducha separados.', 'Deluxe '),
(2, 2, 211, 'Naranja', 'img/habitacion2.jpg', '$300', 'Alojamiento lujoso y confortable para 2 personas con jacuzzi circular, baño de hidromasaje y ducha con cascada emocional,Aire Acondicionado,Secador de pelo,Conexión a Internet con línea rápida,Baño con ducha, Dispositivo para el calentamiento espontáneo y aire acondicionado, Frigobar,Teléfono de línea directa, Tv al plasma satellitare,Tv al plasma satellitare en el baño,Sofa-Cama para dos person', 'Sencilla'),
(3, 2, 310, 'blanco', 'img/habitacion3.jpg', '1000$', 'Gran habitación con cama King size, dotada de una esmerada exquisitez y decorada con elegantes y lujosos textiles. Sala de estar de grandes dimensiones con un sofá, sillones y mesa de café; además las suites pueden incluir habitación comunicada. Baño en mármol con bañera y ducha separados. Preciosas vistas a los jardines de Estoril y al mar, en los pisos superiores.', 'Doble'),
(4, 2, 215, 'blanco', 'img/habitacion4.jpg', '800$', 'Gran habitación con cama Queen o King size, dotada de una esmerada exquisitez. Decoración elegante y lujosa con ricos tejidos. Sala de estar separada con sofá y sillones. La mayoría de las suites poseen terraza y maravillosas vista a los jardines del hotel y de Estoril (los pisos superiores tienen vistas al mar). Baño en mármol; algunos con bañera y ducha separados.', 'Vistar al Mar'),
(5, 1, 310, 'blanco', 'img/habitacion5.jpg', '500$', 'En el ala del edificio que da al jardín, conectada al edificio principal del hotel, se hallan las suites dúplex, Habitaciones con 45 m2, con un salón en el bajo y el dormitorio arriba. Con una decoración más contemporánea, estas son suites idóneas para familias.', 'Deluxe VIP'),
(6, 1, 110, 'blanco', 'img/habitacion6.jpg', '300$', 'Habitación de lujo y un elegante baño con ducha emocional\r\nAire Acondicionado,Secador de pelo,Conexión a Internet con línea rápida,Baño con ducha,Dispositivo para el calentamiento espontáneo y aire acondicionado,Frigobar,Teléfono de línea directa,Tv al plasma satellitare', 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `id_res` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `id_hab` int(11) NOT NULL,
  `fecha_entrada` varchar(15) NOT NULL,
  `fecha_salida` varchar(15) NOT NULL,
  `habitacion_res` varchar(5) NOT NULL,
  `personas_res` int(5) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`id_res`, `id_usu`, `id_hab`, `fecha_entrada`, `fecha_salida`, `habitacion_res`, `personas_res`, `estado`) VALUES
(8, 1, 2, '2022-06-10', '2022-06-13', '121.0', 2, 'activo'),
(9, 1, 2, '2022-06-21', '2022-06-24', '389.1', 3, 'cancelada'),
(12, 1, 3, '2022-06-18', '2022-06-20', '446.2', 4, 'cancelada'),
(13, 1, 1, '2022-06-01', '2022-06-04', '498.2', 2, 'cancelada'),
(14, 1, 2, '2022-06-25', '2022-06-27', '217', 3, 'activo'),
(15, 1, 6, '2022-06-29', '2022-06-30', '488', 1, 'cancelada'),
(16, 1, 1, '2022-06-13', '2022-06-15', '271', 4, 'activo'),
(17, 1, 1, '2022-06-28', '2022-06-30', '463', 2, 'cancelada'),
(18, 2, 2, '2022-07-01', '2022-07-04', '434', 3, 'cancelada'),
(19, 2, 3, '2022-06-21', '2022-06-22', '210', 1, 'cancelada'),
(20, 2, 3, '2022-07-08', '2022-07-11', '400', 4, 'activo'),
(21, 2, 6, '2022-06-05', '2022-06-07', '247', 1, 'cancelada'),
(22, 2, 3, '2022-06-21', '2022-06-29', '209', 5, 'activo'),
(23, 1, 5, '2022-06-14', '2022-06-29', '161', 5, 'cancelada'),
(24, 1, 4, '2022-06-19', '2022-06-15', '221', 5, 'activo');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nombre_usu` varchar(50) NOT NULL,
  `correo_usu` varchar(50) NOT NULL,
  `contra_usu` varchar(15) NOT NULL,
  `direccion_usu` varchar(50) NOT NULL,
  `telefono_usu` varchar(15) NOT NULL,
  `tipo_usu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre_usu`, `correo_usu`, `contra_usu`, `direccion_usu`, `telefono_usu`, `tipo_usu`) VALUES
(1, 'Daniel Tejada', 'daniel@gmail.com', '1234', 'asdasdasd', '97987879', 1),
(2, 'isaias', 'isaias@gmail.com', '1234', 'el millon', '8469013275', 1),
(3, 'Dueño', 'admi@gmail.com', 'admi', 'add', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `habit`
--
ALTER TABLE `habit`
  ADD PRIMARY KEY (`id_hab`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_res`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `habit`
--
ALTER TABLE `habit`
  MODIFY `id_hab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
