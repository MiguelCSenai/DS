-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Set-2024 às 13:29
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--
CREATE DATABASE IF NOT EXISTS `empresa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `empresa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadfun`
--

DROP TABLE IF EXISTS `cadfun`;
CREATE TABLE IF NOT EXISTS `cadfun` (
  `CodFun` int NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Depto` char(2) DEFAULT NULL,
  `Funcao` char(20) DEFAULT NULL,
  `Salario` decimal(10,2) DEFAULT NULL,
  `Admissao` date DEFAULT NULL,
  PRIMARY KEY (`CodFun`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadfun`
--

INSERT INTO `cadfun` (`CodFun`, `Nome`, `Depto`, `Funcao`, `Salario`, `Admissao`) VALUES
(12, 'Carlos Alberto', '3', 'Vendedor', '1683.76', NULL),
(15, 'Marcos Henrique', '2', 'Gerente', '2184.33', NULL),
(7, 'Aparecida Silva', '3', 'Secretaria', '2530.62', NULL),
(4, 'Carlos Bastos', '5', 'Vendedor', '1683.00', NULL),
(25, 'Pedro Silva', '3', 'Supervisor', '1759.46', NULL),
(3, 'Ana Bastos', '3', 'Vendedora', '1683.76', NULL),
(10, 'Paulo da Silva', '2', 'Vendedor', '1683.76', NULL),
(9, 'Solange Pacheco', '5', 'Supervisora', '1759.46', NULL),
(1, 'Celia Nascimento', '2', 'Secretaria', '1320.55', '2006-01-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `morto`
--

DROP TABLE IF EXISTS `morto`;
CREATE TABLE IF NOT EXISTS `morto` (
  `CodFun` int NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Depto` char(2) DEFAULT NULL,
  `Funcao` char(20) DEFAULT NULL,
  `Salario` decimal(10,2) DEFAULT NULL,
  `Admissao` date DEFAULT NULL,
  PRIMARY KEY (`CodFun`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
