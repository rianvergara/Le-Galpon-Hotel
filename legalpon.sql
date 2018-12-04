-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Dez-2018 às 04:54
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalpon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cd_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `rg` int(10) NOT NULL,
  `fone` int(15) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  PRIMARY KEY (`cd_cliente`),
  UNIQUE KEY `rg` (`rg`),
  UNIQUE KEY `fone` (`fone`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cd_cliente`, `rg`, `fone`, `nome_cliente`) VALUES
(1, 1234567890, 12345678, 'xalassa'),
(2, 789456123, 98765432, 'abu'),
(3, 1239876548, 32589647, 'tata');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quartos`
--

DROP TABLE IF EXISTS `quartos`;
CREATE TABLE IF NOT EXISTS `quartos` (
  `nr_quarto` int(11) NOT NULL,
  `cama_casal` tinyint(1) NOT NULL,
  `camas_solteiro` tinyint(1) NOT NULL,
  `disponibilidade` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`nr_quarto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quartos`
--

INSERT INTO `quartos` (`nr_quarto`, `cama_casal`, `camas_solteiro`, `disponibilidade`) VALUES
(101, 1, 0, 1),
(102, 1, 0, 1),
(103, 0, 1, 1),
(104, 0, 1, 1),
(201, 0, 1, 1),
(202, 0, 1, 1),
(203, 1, 0, 1),
(204, 1, 0, 1),
(301, 1, 0, 1),
(302, 1, 0, 1),
(303, 0, 1, 1),
(304, 0, 1, 1),
(401, 0, 1, 1),
(402, 0, 1, 1),
(403, 1, 0, 1),
(404, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(4, 'fulano', 'fulano@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'igor', 'igor@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'ciclano', 'ciclano@gmail.com', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
