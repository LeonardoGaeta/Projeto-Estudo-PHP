-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17/09/2024 às 22:48
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
-- Banco de dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cliente_id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `nome`, `email`, `telefone`) VALUES
(1, 'Ana Silva', 'ana.silva@example.com', '1234-5678'),
(2, 'Carlos Oliveira', 'carlos.oliveira@example.com', '2345-6789'),
(3, 'Beatriz Santos', 'beatriz.santos@example.com', '3456-7890'),
(4, 'Eduardo Pereira', 'eduardo.pereira@example.com', '4567-8901'),
(5, 'Mariana Costa', 'mariana.costa@example.com', '5678-9012'),
(6, 'Roberto Almeida', 'roberto.almeida@example.com', '6789-0123'),
(7, 'Fernanda Lima', 'fernanda.lima@example.com', '7890-1234'),
(8, 'Juliano Rocha', 'juliano.rocha@example.com', '8901-2345'),
(9, 'Patricia Souza', 'patricia.souza@example.com', '9012-3456'),
(10, 'Vinícius Mendes', 'vinicius.mendes@example.com', '0123-4567');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `pedido_id` int NOT NULL AUTO_INCREMENT,
  `cliente_id` int DEFAULT NULL,
  `produto_id` int DEFAULT NULL,
  `quantidade` int NOT NULL,
  `data_pedido` date NOT NULL,
  PRIMARY KEY (`pedido_id`),
  KEY `cliente_id` (`cliente_id`),
  KEY `produto_id` (`produto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`pedido_id`, `cliente_id`, `produto_id`, `quantidade`, `data_pedido`) VALUES
(1, 1, 1, 2, '2024-09-01'),
(2, 1, 2, 1, '2024-09-01'),
(3, 2, 3, 3, '2024-09-02'),
(4, 2, 4, 1, '2024-09-02'),
(5, 2, 5, 2, '2024-09-02'),
(6, 3, 6, 1, '2024-09-03'),
(7, 3, 7, 4, '2024-09-03'),
(8, 3, 8, 2, '2024-09-03'),
(9, 1, 9, 3, '2024-09-01'),
(10, 4, 10, 1, '2024-09-04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `produto_id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade_em_estoque` int NOT NULL,
  PRIMARY KEY (`produto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`produto_id`, `nome`, `preco`, `quantidade_em_estoque`) VALUES
(1, 'Camiseta', 29.90, 100),
(2, 'Calça Jeans', 89.90, 50),
(3, 'Tênis Esportivo', 129.90, 30),
(4, 'Jaqueta', 99.90, 20),
(5, 'Boné', 19.90, 70),
(6, 'Óculos de Sol', 49.90, 40),
(7, 'Relógio', 199.90, 15),
(8, 'Bolsa', 159.90, 25),
(9, 'Chinelo', 109.90, 35),
(10, 'Camisa Polo', 39.90, 60);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
