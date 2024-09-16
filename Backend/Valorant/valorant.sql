-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Set-2024 às 13:31
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
-- Banco de dados: `valorant`
--
CREATE DATABASE IF NOT EXISTS `valorant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `valorant`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `guns`
--

DROP TABLE IF EXISTS `guns`;
CREATE TABLE IF NOT EXISTS `guns` (
  `gun_id` int NOT NULL AUTO_INCREMENT,
  `gun_name` varchar(15) DEFAULT NULL,
  `gun_magazine` int DEFAULT NULL,
  `gun_reload` float DEFAULT NULL,
  `gun_cost` int DEFAULT NULL,
  `gun_run` float DEFAULT NULL,
  `gun_alt` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`gun_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `guns`
--

INSERT INTO `guns` (`gun_id`, `gun_name`, `gun_magazine`, `gun_reload`, `gun_cost`, `gun_run`, `gun_alt`) VALUES
(1, 'Vandal', 25, 2.5, 2900, 5.4, 'Sim'),
(2, 'Phantom', 30, 2.5, 2900, 5.4, 'Sim'),
(3, 'Sheriff', 6, 2.25, 800, 5.4, 'Não'),
(4, 'Operator', 5, 3.7, 4700, 5.13, 'Sim'),
(5, 'Judge', 5, 2.2, 1850, 5.06, 'Não'),
(6, 'Outlaw', 2, 3.8, 2400, 5.4, 'Sim'),
(7, 'Spectre', 30, 2.25, 1600, 5.73, 'Sim');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
