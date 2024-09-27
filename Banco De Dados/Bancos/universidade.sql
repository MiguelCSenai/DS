-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Set-2024 às 14:02
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
-- Banco de dados: `universidade`
--
CREATE DATABASE IF NOT EXISTS `universidade` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `universidade`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `ra_aluno` varchar(10) NOT NULL,
  `nome_aluno` varchar(80) NOT NULL,
  `endereco_aluno` varchar(80) DEFAULT NULL,
  `cidade_aluno` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ra_aluno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ra_aluno`, `nome_aluno`, `endereco_aluno`, `cidade_aluno`) VALUES
('130000001', 'José Cunha', 'Rua Maranhão, 222', 'Santa Bárbara'),
('130000002', 'Maria Silva', 'Rua 2, 222', 'Rio Claro'),
('130000003', 'Luiz Lima', 'Rua Xavier, 232', 'Piracicaba'),
('10000004', 'Lilian Lopes', 'Rua Campos, 221', 'Piracicaba'),
('10000005', 'Carlos Cunha', 'Rua Lee, 45', 'Santa Bárbara'),
('140000001', 'Maria Therezinha', 'Rua Souzas, 32', 'Campinas'),
('140000002', 'Laurindo José', 'Rua da Ladeira, 23', 'Santa Bárbara'),
('140000003', 'Joceli Cunha', 'Rua Maranhão, 222', 'Santa Bárbara'),
('150000001', 'Jair Luiz', 'Rua da Ladeira, 323', 'Santa Bárbara'),
('150000002', 'Marcia Cunha', 'Rua Maranhão, 222', 'Santa Bárbara'),
('150000003', 'Norberto Zaer', 'Rua Silva, 22', 'Piracicaba'),
('160000001', 'Nair José', 'Rua Asdrubal, 21', 'Campinas'),
('160000002', 'Amarildo José', 'Rua 5, 555', 'Rio Claro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disc` int NOT NULL AUTO_INCREMENT,
  `nome_disc` varchar(80) NOT NULL,
  `cargahoraria_disc` int NOT NULL,
  PRIMARY KEY (`id_disc`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disc`, `nome_disc`, `cargahoraria_disc`) VALUES
(1, 'BD', 30),
(2, 'PDM', 150),
(3, 'WEB', 150),
(4, 'COE', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

DROP TABLE IF EXISTS `historico`;
CREATE TABLE IF NOT EXISTS `historico` (
  `cod_hist` int NOT NULL AUTO_INCREMENT,
  `ra_aluno` varchar(10) NOT NULL,
  `cod_disc` int NOT NULL,
  `cod_turma` int NOT NULL,
  `cod_prof` int NOT NULL,
  `ano` int NOT NULL,
  `frequencia` int NOT NULL,
  `nota` int NOT NULL,
  PRIMARY KEY (`cod_hist`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`cod_hist`, `ra_aluno`, `cod_disc`, `cod_turma`, `cod_prof`, `ano`, `frequencia`, `nota`) VALUES
(1, '160000001', 2, 1, 2, 2016, 10, 7),
(2, '160000001', 2, 1, 2, 2016, 10, 9),
(3, '160000001', 2, 1, 2, 2016, 10, 9),
(4, '130000001', 2, 1, 2, 2013, 10, 6),
(5, '130000001', 2, 1, 2, 2013, 10, 9),
(6, '130000002', 2, 1, 2, 2013, 10, 4),
(7, '130000002', 2, 1, 2, 2013, 10, 7),
(8, '130000003', 2, 1, 2, 2013, 9, 9),
(9, '130000003', 2, 1, 2, 2013, 9, 9),
(10, '160000001', 1, 1, 2, 2016, 9, 9),
(11, '160000001', 1, 1, 2, 2016, 9, 4),
(12, '140000001', 3, 6, 2, 2014, 100, 3),
(13, '140000001', 3, 6, 2, 2014, 100, 8),
(14, '140000002', 3, 6, 2, 2014, 100, 2),
(15, '140000002', 3, 6, 2, 2014, 100, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `cod_prof` int NOT NULL AUTO_INCREMENT,
  `nome_prof` varchar(80) NOT NULL,
  `endereco_prof` varchar(80) NOT NULL,
  `cidade_prof` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`cod_prof`, `nome_prof`, `endereco_prof`, `cidade_prof`) VALUES
(1, 'Marco Campos', 'Rua z, 222', 'Santa Bárbara'),
(2, 'João Guassi', 'Rua y, 333', 'Santa Bárbara'),
(3, 'Nilva Melo', 'Rua x, 32', 'Campinas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `cod_turma` int NOT NULL AUTO_INCREMENT,
  `cod_disc` int NOT NULL,
  `cod_prof` int NOT NULL,
  `ano_turma` int NOT NULL,
  `horario_turma` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_turma`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`cod_turma`, `cod_disc`, `cod_prof`, `ano_turma`, `horario_turma`) VALUES
(1, 2, 1, 2013, '7-12'),
(2, 2, 1, 2014, '7-12'),
(3, 2, 1, 2015, '7-12'),
(4, 2, 1, 2016, '7-12'),
(5, 1, 1, 2016, '7-12'),
(6, 3, 2, 2014, '7-12'),
(7, 3, 2, 2015, '7-12'),
(8, 3, 2, 2016, '7-12'),
(9, 1, 3, 2016, '7-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
