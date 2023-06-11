-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jun-2023 às 20:38
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo`, `nome`, `endereco`, `telefone`) VALUES
(1, 'Maria das Dores dos Santos', 'Rua da Praia 2344', '239807540'),
(2, 'Ana Maria Braga', 'Avenida SÃ£o SebastiÃ£o 2344', '9187652552'),
(3, 'Beatriz Azevedo de Lima', 'Travessa dos Carneiros 433', '9827635653'),
(4, 'Edson Silva do Nascimento', 'PaÃ§a Diogo de Braga 4556', '11987265'),
(5, 'Vilma Flintstones', 'Rua da Pedra 45', '98766252'),
(6, 'Carla de Moura', 'Avenida dos Palmares 345', '8765344'),
(7, 'JosÃ© do PatrocÃ­nio', 'Rua das CalÃ§adas 9087', '98763433434');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
