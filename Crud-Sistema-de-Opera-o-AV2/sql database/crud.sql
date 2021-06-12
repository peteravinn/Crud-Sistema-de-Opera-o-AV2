-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 22:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudante`
--

CREATE TABLE `estudante` (
  `id` int(10) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `aula` int(10) NOT NULL,
  `telefone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estudante`
--

INSERT INTO `estudante` (`id`, `nome`, `endereco`, `aula`, `telefone`) VALUES
(1, 'Maria da Silva', '#34 Rua das ninfas', 1, '8898989874'),
(2, 'Ana Maria', '#65 Casa Amarela', 1, '8894587456'),
(11, 'Jasmim Silva', '#34 Rua da Seis', 1, '8895546546'),
(12, 'Suzana Barros', '#76 Rua Brilhante', 2, '88927135435'),
(13, 'Rita de Cassia', '#45 Rua Branca', 3, '88934435435');

-- --------------------------------------------------------

--
-- Table structure for table `classe de estudante`
--

CREATE TABLE `classe de estudante` (
  `id` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classe de estudante`
--

INSERT INTO `classe de estudante` (`id`, `nome`) VALUES
(1, 'Bsc'),
(2, 'Bsc'),
(3, 'Bsc'),
(4, 'Bsc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classe de estudante`
--
ALTER TABLE `classe de estudante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `classe de estudante`
--
ALTER TABLE `classe de estudante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
