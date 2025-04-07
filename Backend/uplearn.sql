-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Abr-2025 às 11:08
-- Versão do servidor: 8.3.0
-- versão do PHP: 8.2.18

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
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `alu_id` int NOT NULL AUTO_INCREMENT,
  `alu_nome` varchar(50) NOT NULL,
  `alu_turma` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alu_note` varchar(2) DEFAULT NULL,
  `alu_note_car` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`alu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`alu_id`, `alu_nome`, `alu_turma`, `alu_note`, `alu_note_car`) VALUES
(1, 'Ana Beatriz', '2INTDSSS', NULL, NULL),
(2, 'Ana Luísa', '2INTDSSS', NULL, NULL),
(3, 'Davi', '2INTDSSS', NULL, NULL),
(4, 'Enzo Nardo', '2INTDSSS', NULL, NULL),
(5, 'Felipe dos Santos', '2INTDSSS', NULL, NULL),
(6, 'Felipe Oliveira', '2INTDSSS', NULL, NULL),
(7, 'Gabrielly Gomes', '2INTDSSS', NULL, NULL),
(8, 'Geovana Santos', '2INTDSSS', NULL, NULL),
(9, 'Guilherme Brocatto', '2INTDSSS', NULL, NULL),
(10, 'Henrique Santarosa', '2INTDSSS', NULL, NULL),
(11, 'Julia Pacheco', '2INTDSSS', NULL, NULL),
(12, 'Julio César', '2INTDSSS', NULL, NULL),
(13, 'Kamilly dos Santos', '2INTDSSS', NULL, NULL),
(14, 'Laura Vidal', '2INTDSSS', NULL, NULL),
(15, 'Leonardo Silva', '2INTDSSS', NULL, NULL),
(16, 'Marcos Oliveira', '2INTDSSS', NULL, NULL),
(17, 'Maria Clara', '2INTDSSS', NULL, NULL),
(18, 'Maria Fernanda', '2INTDSSS', NULL, NULL),
(19, 'Mariana Araújo', '2INTDSSS', NULL, NULL),
(20, 'Mariana Jacomussi', '2INTDSSS', NULL, NULL),
(21, 'Matheus Araújo', '2INTDSSS', NULL, NULL),
(22, 'Nicole Cristina', '2INTDSSS', NULL, NULL),
(23, 'Otavio Monteiro', '2INTDSSS', NULL, NULL),
(24, 'Daniel', '2INTDSSS', NULL, NULL),
(25, 'Rafael Julio', '2INTDSSS', NULL, NULL),
(26, 'Vinícius Roberto', '2INTDSSS', NULL, NULL),
(27, 'Wina Hidie', '2INTDSSS', NULL, NULL),
(28, 'José Luiz', '2INTDSSS', NULL, NULL),
(29, 'Miguel Caires', '2INTDSSS', NULL, NULL),
(30, 'Gabriel Baroni', '2INTDSSS', NULL, NULL),
(31, 'Maria Eduarda', '2INTDSSS', NULL, NULL),
(32, 'Ciclano', '1INTDSSEDUC', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notebooks`
--

DROP TABLE IF EXISTS `notebooks`;
CREATE TABLE IF NOT EXISTS `notebooks` (
  `note_id` int NOT NULL AUTO_INCREMENT,
  `note_num` varchar(3) NOT NULL,
  `note_car` int NOT NULL,
  `note_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `notebooks`
--

INSERT INTO `notebooks` (`note_id`, `note_num`, `note_car`, `note_status`) VALUES
(1, '00', 1, 1),
(2, '01', 1, 1),
(3, '02', 1, 1),
(4, '03', 1, 1),
(5, '04', 1, 1),
(6, '05', 1, 1),
(7, '06', 1, 1),
(8, '07', 1, 1),
(9, '08', 1, 1),
(10, '09', 1, 1),
(11, '10', 1, 1),
(12, '11', 1, 1),
(13, '12', 1, 1),
(14, '13', 1, 1),
(15, '14', 1, 1),
(16, '15', 1, 1),
(17, '16', 1, 1),
(18, '17', 1, 1),
(19, '18', 1, 1),
(20, '19', 1, 1),
(36, '04', 2, 1),
(33, '01', 2, 1),
(34, '02', 2, 1),
(35, '03', 2, 1),
(32, '00', 2, 1),
(31, '20', 1, 1),
(37, '05', 2, 1),
(38, '06', 2, 1),
(39, '07', 2, 1),
(40, '08', 2, 1),
(41, '09', 2, 1),
(42, '10', 2, 1),
(43, '11', 2, 1),
(44, '13', 2, 1),
(45, '14', 2, 1),
(46, '15', 2, 1),
(47, '16', 2, 1),
(48, '17', 2, 1),
(49, '18', 2, 1),
(50, '19', 2, 1),
(51, '20', 2, 1),
(52, '12', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

DROP TABLE IF EXISTS `professores`;
CREATE TABLE IF NOT EXISTS `professores` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_nome` varchar(50) NOT NULL,
  `pro_senha` varchar(20) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`pro_id`, `pro_nome`, `pro_senha`) VALUES
(1, 'Alexandre', '1234'),
(2, 'Marco', '5678'),
(4, 'Barreto', '6969');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessoes`
--

DROP TABLE IF EXISTS `sessoes`;
CREATE TABLE IF NOT EXISTS `sessoes` (
  `ses_id` int NOT NULL AUTO_INCREMENT,
  `ses_aluno` varchar(50) NOT NULL,
  `ses_notebook` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ses_note_car` varchar(2) NOT NULL,
  `ses_turma` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ses_prof` varchar(50) NOT NULL,
  `ses_retirada` timestamp NOT NULL,
  `ses_devolucao` timestamp NULL DEFAULT NULL,
  `ses_status` varchar(20) NOT NULL,
  PRIMARY KEY (`ses_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `sessoes`
--

INSERT INTO `sessoes` (`ses_id`, `ses_aluno`, `ses_notebook`, `ses_note_car`, `ses_turma`, `ses_prof`, `ses_retirada`, `ses_devolucao`, `ses_status`) VALUES
(1, 'Miguel Caires', '2', '1', '2INTDSSS', 'Marco', '2025-03-27 01:05:32', '2025-03-27 01:16:35', 'OK'),
(2, 'Ana Beatriz', '6', '1', '2INTDSSS', 'Marco', '2025-03-27 01:05:35', '2025-03-27 01:14:20', 'OK'),
(3, 'Gabrielly Gomes', '1', '2', '2INTDSSS', 'Marco', '2025-03-27 01:05:39', '2025-03-27 01:15:19', 'OK'),
(4, 'José Luiz', '6', '2', '2INTDSSS', 'Marco', '2025-03-27 01:05:44', '2025-03-27 01:15:44', 'OK'),
(5, 'Ana Luísa', '0', '2', '2INTDSSS', 'Marco', '2025-03-27 01:05:48', '2025-03-27 01:14:24', 'OK'),
(6, 'Daniel', '1', '1', '2INTDSSS', 'Marco', '2025-03-27 01:05:53', '2025-03-27 01:14:29', 'OK'),
(7, 'Davi', '4', '1', '2INTDSSS', 'Marco', '2025-03-27 01:05:58', '2025-03-27 01:14:38', 'OK'),
(8, 'Enzo Nardo', '0', '1', '2INTDSSS', 'Marco', '2025-03-27 01:06:02', '2025-03-27 01:14:45', 'OK'),
(9, 'Felipe dos Santos', '8', '1', '2INTDSSS', 'Marco', '2025-03-27 01:06:09', '2025-03-27 01:14:57', 'OK'),
(10, 'Felipe Oliveira', '4', '2', '2INTDSSS', 'Marco', '2025-03-27 01:06:16', '2025-03-27 01:15:04', 'OK'),
(11, 'Gabriel Baroni', '3', '2', '2INTDSSS', 'Marco', '2025-03-27 01:06:24', '2025-03-27 01:15:12', 'OK'),
(12, 'Geovana Santos', '3', '1', '2INTDSSS', 'Marco', '2025-03-27 01:06:49', '2025-03-27 01:15:23', 'OK'),
(13, 'Guilherme Brocatto', '5', '1', '2INTDSSS', 'Marco', '2025-03-27 01:06:55', '2025-03-27 01:15:29', 'OK'),
(14, 'Henrique Santarosa', '8', '2', '2INTDSSS', 'Marco', '2025-03-27 01:07:02', '2025-03-27 01:15:38', 'OK'),
(15, 'Julia Pacheco', '2', '2', '2INTDSSS', 'Marco', '2025-03-27 01:07:21', '2025-03-27 01:15:49', 'OK'),
(16, 'Julio César', '5', '2', '2INTDSSS', 'Marco', '2025-03-27 01:07:29', '2025-03-27 01:15:58', 'OK'),
(17, 'Kamilly dos Santos', '7', '1', '2INTDSSS', 'Marco', '2025-03-27 01:07:36', '2025-03-27 01:16:04', 'OK'),
(18, 'Laura Vidal', '7', '2', '2INTDSSS', 'Marco', '2025-03-27 01:07:43', '2025-03-27 01:16:11', 'OK'),
(19, 'Leonardo Silva', '9', '1', '2INTDSSS', 'Marco', '2025-03-27 01:07:52', '2025-03-27 01:16:19', 'OK'),
(20, 'Marcos Oliveira', '9', '2', '2INTDSSS', 'Marco', '2025-03-27 01:08:01', '2025-03-27 01:16:29', 'OK'),
(21, 'Maria Clara', '10', '1', '2INTDSSS', 'Marco', '2025-03-27 01:08:13', '2025-03-27 01:16:44', 'OK'),
(22, 'Maria Eduarda', '10', '2', '2INTDSSS', 'Marco', '2025-03-27 01:08:22', '2025-03-27 01:16:52', 'OK'),
(23, 'Maria Fernanda', '11', '1', '2INTDSSS', 'Marco', '2025-03-27 01:08:30', '2025-03-27 01:17:01', 'OK'),
(24, 'Mariana Araújo', '11', '2', '2INTDSSS', 'Marco', '2025-03-27 01:08:38', '2025-03-27 01:17:12', 'OK'),
(25, 'Mariana Jacomussi', '12', '1', '2INTDSSS', 'Marco', '2025-03-27 01:08:50', '2025-03-27 01:17:25', 'OK'),
(26, 'Matheus Araújo', '12', '2', '2INTDSSS', 'Marco', '2025-03-27 01:09:03', '2025-03-27 01:17:33', 'OK'),
(27, 'Nicole Cristina', '13', '1', '2INTDSSS', 'Marco', '2025-03-27 01:09:35', '2025-03-27 01:17:48', 'OK'),
(28, 'Otavio Monteiro', '13', '2', '2INTDSSS', 'Marco', '2025-03-27 01:09:44', '2025-03-27 01:17:55', 'OK'),
(29, 'Rafael Julio', '14', '1', '2INTDSSS', 'Marco', '2025-03-27 01:09:53', '2025-03-27 01:18:03', 'OK'),
(30, 'Vinícius Roberto', '14', '2', '2INTDSSS', 'Marco', '2025-03-27 01:10:03', '2025-03-27 01:18:07', 'OK'),
(31, 'Wina Hidie', '15', '1', '2INTDSSS', 'Marco', '2025-03-27 01:10:09', '2025-03-27 01:18:15', 'OK'),
(32, 'Miguel Caires', '1', '1', '2INTDSSS', 'Marco', '2025-03-27 01:20:53', '2025-03-27 01:21:14', 'OK'),
(33, 'Enzo Nardo', '0', '2', '2INTDSSS', 'Marco', '2025-03-27 01:21:02', '2025-03-27 01:21:18', 'OK'),
(34, 'Daniel', '0', '2', '2INTDSSS', 'Marco', '2025-03-27 01:21:23', '2025-03-27 01:22:12', 'OK'),
(35, 'Miguel Caires', '0', '1', '2INTDSSS', 'Marco', '2025-03-28 13:38:23', '2025-03-28 13:38:37', 'OK'),
(36, 'Daniel', '1', '1', '2INTDSSS', 'Marco', '2025-03-28 13:38:27', '2025-03-28 13:38:52', 'OK'),
(37, 'Miguel Caires', '1', '1', '2INTDSSS', 'Marco', '2025-03-28 17:34:45', '2025-03-28 17:35:10', 'OK'),
(38, 'Guilherme Brocatto', '0', '1', '2INTDSSS', 'Marco', '2025-03-28 17:34:58', '2025-03-28 17:35:35', 'OK'),
(39, 'Ana Luísa', '0', '1', '2INTDSSS', 'Marco', '2025-03-28 17:38:46', '2025-03-28 17:41:53', 'OK'),
(40, 'Guilherme Brocatto', '0', '1', '2INTDSSS', 'Alexandre', '2025-04-04 16:24:44', '2025-04-04 16:25:17', 'OK'),
(41, 'Davi', '1', '1', '2INTDSSS', 'Alexandre', '2025-04-04 16:24:53', '2025-04-04 16:26:36', 'OK'),
(42, 'Ciclano', '0', '1', '1INTDSSEDUC', 'Barreto', '2025-04-04 16:27:53', '2025-04-04 16:27:56', 'OK');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

DROP TABLE IF EXISTS `turmas`;
CREATE TABLE IF NOT EXISTS `turmas` (
  `tur_id` int NOT NULL AUTO_INCREMENT,
  `tur_nome` varchar(20) NOT NULL,
  `tur_prof` json NOT NULL,
  PRIMARY KEY (`tur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`tur_id`, `tur_nome`, `tur_prof`) VALUES
(1, '2INTDSSS', '[\"Alexandre\", \"Marco\"]'),
(2, '1INTDSSEDUC', '[\"Barreto\"]'),
(3, '1INTDSSS', '[\"Alexandre\", \"Marco\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
