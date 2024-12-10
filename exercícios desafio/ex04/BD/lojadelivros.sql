-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11/09/2024 às 01:18
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
-- Banco de dados: `lojadelivros`
--
CREATE DATABASE IF NOT EXISTS `lojadelivros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `lojadelivros`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `autores`
--

DROP TABLE IF EXISTS `autores`;
CREATE TABLE IF NOT EXISTS `autores` (
  `id_autor` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `autores`
--

INSERT INTO `autores` (`id_autor`, `nome`, `nacionalidade`) VALUES
(1, 'J.K. Rowling', 'Britânica'),
(2, 'George Orwell', 'Britânico'),
(3, 'J.R.R. Tolkien', 'Britânico'),
(4, 'Agatha Christie', 'Britânica'),
(5, 'Mark Twain', 'Americano'),
(6, 'Stephen King', 'Americano'),
(7, 'Isaac Asimov', 'Russo'),
(8, 'Arthur Conan Doyle', 'Britânico'),
(9, 'Jane Austen', 'Britânica'),
(10, 'F. Scott Fitzgerald', 'Americano');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome`) VALUES
(1, 'Ficção'),
(2, 'Romance'),
(3, 'Mistério'),
(4, 'Fantasia'),
(5, 'Ciência Fiction'),
(6, 'Biografia'),
(7, 'História'),
(8, 'Aventura'),
(9, 'Drama'),
(10, 'Clássico');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id_livro` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `autor_id` int DEFAULT NULL,
  `categoria_id` int DEFAULT NULL,
  `anopublicacao` int DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_livro`),
  KEY `autor_id` (`autor_id`),
  KEY `categoria_id` (`categoria_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `titulo`, `autor_id`, `categoria_id`, `anopublicacao`, `preco`) VALUES
(1, 'Harry Potter e a Pedra Filosofal', 1, 4, 1997, 39.90),
(2, '1984', 2, 1, 1949, 29.90),
(3, 'O Hobbit', 3, 4, 1937, 34.90),
(4, 'Assassinato no Expresso do Oriente', 4, 3, 1934, 27.90),
(5, 'As Aventuras de Tom Sawyer', 5, 8, 1876, 22.90),
(6, 'O Iluminado', 6, 1, 1977, 42.90),
(7, 'Fundação', 7, 5, 1951, 31.90),
(8, 'Sherlock Holmes: Um Estudo em Vermelho', 8, 3, 1887, 25.90),
(9, 'Orgulho e Preconceito', 9, 2, 1813, 19.90),
(10, 'O Grande Gatsby', 10, 10, 1925, 28.90);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
