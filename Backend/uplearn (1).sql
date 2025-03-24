-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24/03/2025 às 14:27
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `uplearn`
--
CREATE DATABASE IF NOT EXISTS `uplearn` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `uplearn`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `alu_id` int NOT NULL AUTO_INCREMENT,
  `alu_nome` varchar(50) NOT NULL,
  `alu_turma` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alu_note` varchar(2) DEFAULT NULL,
  `alu_note_car` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`alu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`alu_id`, `alu_nome`, `alu_turma`, `alu_note`, `alu_note_car`) VALUES
(1, 'Miguel', '2INTDSS', NULL, NULL),
(2, 'Brocatto', '2INTDSS', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `notebooks`
--

DROP TABLE IF EXISTS `notebooks`;
CREATE TABLE IF NOT EXISTS `notebooks` (
  `note_id` int NOT NULL AUTO_INCREMENT,
  `note_num` varchar(3) NOT NULL,
  `note_car` int NOT NULL,
  `note_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `notebooks`
--

INSERT INTO `notebooks` (`note_id`, `note_num`, `note_car`, `note_status`) VALUES
(1, '01', 2, 1),
(2, '03', 1, 1),
(3, '25', 1, 1),
(4, '00', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

DROP TABLE IF EXISTS `professores`;
CREATE TABLE IF NOT EXISTS `professores` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_nome` varchar(50) NOT NULL,
  `pro_senha` varchar(20) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`pro_id`, `pro_nome`, `pro_senha`) VALUES
(1, 'Alexandre', '1234'),
(2, 'Marco', '5678'),
(4, 'Barreto', '6969');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessoes`
--

DROP TABLE IF EXISTS `sessoes`;
CREATE TABLE IF NOT EXISTS `sessoes` (
  `ses_id` int NOT NULL AUTO_INCREMENT,
  `ses_aluno` varchar(50) NOT NULL,
  `ses_notebook` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ses_note_car` varchar(2) NOT NULL,
  `ses_turma` varchar(10) NOT NULL,
  `ses_prof` varchar(50) NOT NULL,
  `ses_retirada` timestamp NOT NULL,
  `ses_devolucao` timestamp NULL DEFAULT NULL,
  `ses_status` varchar(20) NOT NULL,
  PRIMARY KEY (`ses_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `sessoes`
--

INSERT INTO `sessoes` (`ses_id`, `ses_aluno`, `ses_notebook`, `ses_note_car`, `ses_turma`, `ses_prof`, `ses_retirada`, `ses_devolucao`, `ses_status`) VALUES
(1, 'Miguel', '03', '1', '2INTDSS', 'Alexandre', '2025-03-24 04:58:19', '2025-03-24 04:58:34', 'OK'),
(2, 'Brocatto', '01', '2', '2INTDSS', 'Alexandre', '2025-03-24 04:58:54', '2025-03-24 04:59:13', 'OK'),
(3, 'Miguel', '01', '2', '2INTDSS', 'Alexandre', '2025-03-24 05:02:21', '2025-03-24 05:02:27', 'OK'),
(4, 'Miguel', '03', '1', '2INTDSS', 'Alexandre', '2025-03-24 05:10:08', '2025-03-24 05:10:23', 'OK'),
(5, 'Miguel', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 05:12:04', '2025-03-24 05:14:44', 'OK'),
(6, 'Miguel', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 05:24:51', '2025-03-24 05:25:56', 'OK'),
(7, 'Miguel', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 05:43:37', '2025-03-24 05:43:42', 'OK'),
(8, 'Miguel', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 05:48:39', '2025-03-24 05:48:44', 'OK'),
(9, 'Brocatto', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 05:48:59', '2025-03-24 05:49:04', 'OK'),
(10, 'Miguel', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:02:39', '2025-03-24 06:02:49', 'OK'),
(11, 'Miguel', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:05:05', '2025-03-24 06:05:25', 'OK'),
(12, 'Brocatto', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:05:09', '2025-03-24 06:05:16', 'OK'),
(13, 'Miguel', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:06:17', '2025-03-24 06:06:19', 'OK'),
(14, 'Miguel', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:09:42', '2025-03-24 06:09:45', 'OK'),
(15, 'Miguel', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:10:11', '2025-03-24 06:10:21', 'OK'),
(16, 'Brocatto', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:11:18', '2025-03-24 06:12:07', 'OK'),
(17, 'Miguel', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:12:01', '2025-03-24 06:12:05', 'OK'),
(18, 'Miguel', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:15:03', '2025-03-24 06:15:13', 'OK'),
(19, 'Brocatto', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:15:08', '2025-03-24 06:15:20', 'OK'),
(20, 'Miguel', '25', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:19:00', '2025-03-24 06:23:35', 'OK'),
(21, 'Brocatto', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 06:19:03', '2025-03-24 06:23:39', 'OK'),
(22, 'Miguel', '25', '1', '2INTDSS', 'Marco', '2025-03-24 10:50:11', '2025-03-24 10:50:29', 'OK'),
(23, 'Brocatto', '3', '1', '2INTDSS', 'Marco', '2025-03-24 10:50:22', '2025-03-24 10:50:35', 'OK'),
(24, 'Miguel', '3', '1', '2INTDSS', 'Marco', '2025-03-24 10:50:49', '2025-03-24 10:52:16', 'OK'),
(25, 'Miguel', '25', '1', '2INTDSS', 'Marco', '2025-03-24 11:24:22', '2025-03-24 11:30:38', 'OK'),
(26, 'Brocatto', '3', '1', '2INTDSS', 'Marco', '2025-03-24 11:24:40', '2025-03-24 11:30:23', 'OK'),
(27, 'Brocatto', '0', '2', '2INTDSS', 'Marco', '2025-03-24 11:30:26', '2025-03-24 11:30:35', 'OK'),
(28, 'Miguel', '3', '1', '2INTDSS', 'Marco', '2025-03-24 11:33:08', '2025-03-24 11:33:36', 'OK'),
(29, 'Brocatto', '0', '2', '2INTDSS', 'Marco', '2025-03-24 11:33:11', '2025-03-24 11:33:33', 'OK'),
(30, 'Miguel', '3', '1', '2INTDSS', 'Marco', '2025-03-24 11:36:24', '2025-03-24 11:44:40', 'OK'),
(31, 'Miguel', '3', '1', '2INTDSS', 'Marco', '2025-03-24 12:51:58', '2025-03-24 12:54:21', 'OK'),
(32, 'Miguel', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 13:25:08', '2025-03-24 13:25:19', 'OK'),
(33, 'Miguel', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 13:25:28', '2025-03-24 13:26:15', 'OK'),
(34, 'Brocatto', '0', '2', '2INTDSS', 'Alexandre', '2025-03-24 13:25:32', '2025-03-24 13:26:12', 'OK'),
(35, 'Miguel', '3', '1', '2INTDSS', 'Alexandre', '2025-03-24 13:44:33', '2025-03-24 13:46:52', 'OK');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

DROP TABLE IF EXISTS `turmas`;
CREATE TABLE IF NOT EXISTS `turmas` (
  `tur_id` int NOT NULL AUTO_INCREMENT,
  `tur_nome` varchar(20) NOT NULL,
  `tur_prof` json NOT NULL,
  PRIMARY KEY (`tur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `turmas`
--

INSERT INTO `turmas` (`tur_id`, `tur_nome`, `tur_prof`) VALUES
(1, '2INTDSS', '[\"Alexandre\", \"Marco\"]'),
(2, '1INTDSSEDUC', '[\"Barreto\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
