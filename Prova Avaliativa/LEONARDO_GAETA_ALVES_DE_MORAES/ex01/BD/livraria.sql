-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17/09/2024 às 22:02
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
-- Banco de dados: `livraria`
--
CREATE DATABASE IF NOT EXISTS `livraria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `livraria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `autores`
--

DROP TABLE IF EXISTS `autores`;
CREATE TABLE IF NOT EXISTS `autores` (
  `autor_id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`autor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `autores`
--

INSERT INTO `autores` (`autor_id`, `nome`, `nacionalidade`) VALUES
(1, 'J.K. Rowling', 'Britânica'),
(2, 'George Orwell', 'Britânico'),
(3, 'J.R.R. Tolkien', 'Britânico'),
(4, 'Agatha Christie', 'Britânica'),
(5, 'Dan Brown', 'Americano'),
(6, 'Stephen King', 'Americano'),
(7, 'Isaac Asimov', 'Americano'),
(8, 'Margaret Atwood', 'Canadense'),
(9, 'Haruki Murakami', 'Japonês'),
(10, 'Gabriel García Márquez', 'Colombiano');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `livro_id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `autor_id` int DEFAULT NULL,
  `ano_publicacao` year DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`livro_id`),
  KEY `autor_id` (`autor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`livro_id`, `titulo`, `autor_id`, `ano_publicacao`, `genero`) VALUES
(1, 'Harry Potter e a Pedra Filosofal', 1, '1997', 'Fantasia'),
(2, '1984', 2, '1949', 'Distopia'),
(3, 'O Senhor dos Anéis: A Sociedade do Anel', 3, '1954', 'Fantasia'),
(4, 'Assassinato no Expresso do Oriente', 4, '1934', 'Mistério'),
(5, 'O Código Da Vinci', 5, '2003', 'Mistério'),
(6, 'O Iluminado', 6, '1977', 'Terror'),
(7, 'Fundação', 7, '1951', 'Ficção Científica'),
(8, 'O Conto da Aia', 8, '1985', 'Distopia'),
(9, 'Norwegian Wood', 9, '1987', 'Romance'),
(10, 'Cem Anos de Solidão', 10, '1967', 'Realismo Mágico'),
(11, 'Harry Potter e a Câmara Secreta', 1, '1998', 'Fantasia'),
(12, 'A Revolução dos Bichos', 2, '1945', 'Sátira política'),
(13, 'O Senhor dos Anéis: As Duas Torres', 3, '1954', 'Fantasia'),
(14, 'O Senhor dos Anéis: O Retorno do Rei', 3, '1955', 'Fantasia'),
(15, 'Morte no Nilo', 4, '1937', 'Mistério'),
(16, 'Anjos e Demônios', 5, '2000', 'Mistério'),
(17, 'O Hobbit', 3, '1937', 'Fantasia'),
(18, 'Eu, Robô', 7, '1950', 'Ficção Científica'),
(19, 'O Silmarillion', 3, '1977', 'Fantasia'),
(20, 'A Coisa', 6, '1986', 'Terror');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
