-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Out-2024 às 14:14
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
-- Banco de dados: `eleicao`
--
CREATE DATABASE IF NOT EXISTS `eleicao` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `eleicao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
CREATE TABLE IF NOT EXISTS `candidatos` (
  `cand_id` int NOT NULL AUTO_INCREMENT,
  `cand_nome` varchar(50) NOT NULL,
  `cand_partido` text NOT NULL,
  `cand_numero` text NOT NULL,
  `cand_img` text NOT NULL,
  PRIMARY KEY (`cand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`cand_id`, `cand_nome`, `cand_partido`, `cand_numero`, `cand_img`) VALUES
(1, 'Erick \"Aspas\" dos Santos', 'LOUD', '22', 'https://prosettings.net/wp-content/uploads/aspas.png'),
(2, 'Peixonauta', 'PPA (Partido dos Peixes Anárquicos)', '09', 'https://static.wikia.nocookie.net/dublagem/images/0/0e/PEIXONAUTA.jpg/revision/latest?cb=20210606224247&path-prefix=pt-br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleitores`
--

DROP TABLE IF EXISTS `eleitores`;
CREATE TABLE IF NOT EXISTS `eleitores` (
  `elei_id` int NOT NULL AUTO_INCREMENT,
  `elei_nome` varchar(50) NOT NULL,
  `elei_cpf` text NOT NULL,
  PRIMARY KEY (`elei_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `eleitores`
--

INSERT INTO `eleitores` (`elei_id`, `elei_nome`, `elei_cpf`) VALUES
(1, 'Miguel Caires Montalvão', '51012267857'),
(2, 'Rafael Julio Garcia', '80846131544');

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

DROP TABLE IF EXISTS `votos`;
CREATE TABLE IF NOT EXISTS `votos` (
  `voto_id` int NOT NULL,
  `voto_tipo` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
