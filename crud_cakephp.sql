-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2017 at 03:09 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_cakephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','usuario') DEFAULT NULL,
  `nombre` varchar(60) NOT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `rol`, `nombre`, `telefono`, `direccion`, `estado`, `created`, `modified`) VALUES
(3, 'jorgedavidc99@gmail.com', '$2y$10$agqWrw3.jpLHgUVIjF1I0.IYKqabqPFBXoTYOq6GKR4JJND4dVbj6', 'admin', 'Jorge Olmedo', '06', 'km7', b'1', '2017-01-12 01:03:03', '2017-09-29 00:55:23'),
(13, 'oscar@gmail.com', '$2y$10$UVtqJC5F.3JrrDB.IYfUDOMVMHEWGZ76/Q.gvM.tL5dESxycsgMnu', 'admin', 'Oscar olmedo ', '0973 ', 'op ', b'1', '2017-01-12 01:03:03', '2017-11-03 14:03:08'),
(21, 'admin@gmail.com', '$2y$10$BVn7neUaxwtsbE/GZJ5.AuI/1ZrIQD83WF.7/geGXv7fa2pj1JlVq', 'admin', 'Admin', '123', 'Asuncion', b'1', '2017-11-03 11:07:57', '2017-11-03 11:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
