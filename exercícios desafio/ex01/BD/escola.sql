-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16/04/2024 às 21:41
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `idaluno` mediumint NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idaluno`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `nome`, `email`, `telefone`, `endereco`) VALUES
(1, 'Clementine Torres', 'facilisis.eget@hotmail.couk', '68 78662-7645', 'Ap #158-478 Luctus St.'),
(2, 'Melanie da Cruz', 'velit@outlook.org', '84 21824-2447', 'Ap #356-2421 Tellus Rd.'),
(3, 'Felicia Marques', 'lorem.ipsum@yahoo.couk', '82 40357-6282', 'Ap #615-4796 Adipiscing. Av.'),
(4, 'Tanisha de Freitas', 'sapien.molestie@google.com', '37 12834-5626', 'Ap #318-2125 Lectus Av.'),
(5, 'Macaulay Bezerra', 'vitae.orci@yahoo.edu', '91 39216-1593', 'Ap #685-2423 Commodo St.'),
(6, 'Sylvester Das Chagas', 'varius.nam@outlook.org', '62 55214-6316', '296-1950 Id Rd.'),
(7, 'Andrew Leal', 'magna@google.org', '42 48664-2458', '918-5047 Viverra. Street'),
(8, 'Jacob do Nascimento', 'sit@outlook.net', '23 86251-1767', 'P.O. Box 942, 5375 Sem, St.'),
(9, 'Mariko Guedes', 'etiam.ligula@yahoo.org', '97 85415-2677', '393-924 Integer Rd.'),
(10, 'Kai Amaral', 'turpis.in@outlook.couk', '46 86771-7959', 'P.O. Box 600, 1792 Elit, Road');

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `nome`) VALUES
(1, 'Desenvolvimento de Sistemas'),
(2, 'MTec PI - Desenvolvimento de Sistemas'),
(3, 'AMS - Desenvolvimento de Sistemas'),
(4, 'Informática'),
(5, 'Informática para Internet'),
(6, 'Manutenção e Suporte em Informática'),
(7, 'Redes de Computadores'),
(8, 'Programação de Jogos Digitais'),
(9, 'Instrumento Musical'),
(10, 'Lazer');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `idprofessor` mediumint NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idprofessor`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `professor`
--

INSERT INTO `professor` (`idprofessor`, `nome`, `email`, `telefone`, `endereco`) VALUES
(1, 'Cameron Machado', 'diam@aol.net', '51 65981-4870', '372-6500 Diam Ave'),
(2, 'Althea Faria', 'amet@google.couk', '65 93776-0548', '583-4165 Ante Rd.'),
(3, 'Kai Guimaraes', 'lobortis@hotmail.net', '43 44837-5475', '864 Tellus Road'),
(4, 'Shoshana da Silveira', 'morbi.accumsan@protonmail.edu', '36 81281-5321', '583-3601 Scelerisque Ave'),
(5, 'Hammett Morais', 'at.arcu.vestibulum@yahoo.org', '81 38157-4572', '768-2822 Placerat, Avenue'),
(6, 'Macaulay Araujo', 'urna.suscipit@aol.edu', '75 44125-4882', '833-6314 Convallis Ave'),
(7, 'Zoe do Nascimento', 'risus.morbi.metus@hotmail.ca', '32 66172-2871', 'Ap #707-9292 Lorem Avenue'),
(8, 'Bevis Siqueira', 'tristique.senectus@icloud.com', '33 64928-8833', '633-537 Tristique Av.'),
(9, 'Chelsea Mota', 'congue.turpis@hotmail.net', '70 24985-4775', 'Ap #140-8685 Id, Street'),
(10, 'Xaviera Pereira', 'vivamus.rhoncus@google.ca', '49 82119-6660', '639-4985 Torquent Avenue');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
