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
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Banco de dados: `vendas`
--
CREATE DATABASE IF NOT EXISTS `vendas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `vendas`;
-- --------------------------------------------------------
--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `datacadastro` date DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE = MyISAM AUTO_INCREMENT = 11 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (
    `id_cliente`,
    `nome`,
    `email`,
    `telefone`,
    `endereco`,
    `datacadastro`
  )
VALUES (
    1,
    'Ana Silva',
    'ana.silva@example.com',
    '(11) 98765-4321',
    'Rua A, 123',
    '2024-01-10'
  ),
  (
    2,
    'João Souza',
    'joao.souza@example.com',
    '(21) 91234-5678',
    'Rua B, 456',
    '2024-02-15'
  ),
  (
    3,
    'Maria Oliveira',
    'maria.oliveira@example.com',
    '(31) 92345-6789',
    'Rua C, 789',
    '2024-03-20'
  ),
  (
    4,
    'Carlos Pereira',
    'carlos.pereira@example.com',
    '(41) 93456-7890',
    'Rua D, 101',
    '2024-04-25'
  ),
  (
    5,
    'Patrícia Costa',
    'patricia.costa@example.com',
    '(51) 94567-8901',
    'Rua E, 202',
    '2024-05-30'
  ),
  (
    6,
    'Lucas Martins',
    'lucas.martins@example.com',
    '(61) 95678-9012',
    'Rua F, 303',
    '2024-06-10'
  ),
  (
    7,
    'Fernanda Lima',
    'fernanda.lima@example.com',
    '(71) 96789-0123',
    'Rua G, 404',
    '2024-07-15'
  ),
  (
    8,
    'Bruno Almeida',
    'bruno.almeida@example.com',
    '(81) 97890-1234',
    'Rua H, 505',
    '2024-08-20'
  ),
  (
    9,
    'Juliana Fernandes',
    'juliana.fernandes@example.com',
    '(91) 98901-2345',
    'Rua I, 606',
    '2024-09-25'
  ),
  (
    10,
    'Ricardo Santos',
    'ricardo.santos@example.com',
    '(11) 99012-3456',
    'Rua J, 707',
    '2024-10-30'
  );
-- --------------------------------------------------------
--
-- Estrutura para tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `cliente_id` int DEFAULT NULL,
  `produto_id` int DEFAULT NULL,
  `quantidade` int NOT NULL,
  `datapedido` date DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `cliente_id` (`cliente_id`),
  KEY `produto_id` (`produto_id`)
) ENGINE = MyISAM AUTO_INCREMENT = 11 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (
    `id_pedido`,
    `cliente_id`,
    `produto_id`,
    `quantidade`,
    `datapedido`
  )
VALUES (1, 1, 1, 1, '2024-01-12'),
  (2, 2, 2, 2, '2024-02-16'),
  (3, 3, 3, 1, '2024-03-22'),
  (4, 4, 4, 3, '2024-04-26'),
  (5, 5, 5, 1, '2024-05-31'),
  (6, 6, 6, 1, '2024-06-12'),
  (7, 7, 7, 2, '2024-07-18'),
  (8, 8, 8, 4, '2024-08-21'),
  (9, 9, 9, 1, '2024-09-27'),
  (10, 10, 10, 2, '2024-10-31');
-- --------------------------------------------------------
--
-- Estrutura para tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` text,
  `preco` decimal(10, 2) NOT NULL,
  `estoque` int DEFAULT NULL,
  `datacadastro` date DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE = MyISAM AUTO_INCREMENT = 11 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (
    `id_produto`,
    `nome`,
    `descricao`,
    `preco`,
    `estoque`,
    `datacadastro`
  )
VALUES (
    1,
    'Laptop',
    'Laptop com 16GB RAM e 512GB SSD',
    2999.99,
    10,
    '2024-01-05'
  ),
  (
    2,
    'Smartphone',
    'Smartphone com 128GB de armazenamento',
    1499.99,
    20,
    '2024-01-10'
  ),
  (
    3,
    'Teclado Mecânico',
    'Teclado mecânico com iluminação RGB',
    399.99,
    15,
    '2024-01-15'
  ),
  (
    4,
    'Mouse Gamer',
    'Mouse gamer com DPI ajustável',
    249.99,
    25,
    '2024-01-20'
  ),
  (
    5,
    'Monitor 24\"',
    'Monitor Full HD de 24 polegadas',
    799.99,
    12,
    '2024-01-25'
  ),
  (
    6,
    'Cadeira Ergonômica',
    'Cadeira ergonômica para escritório',
    899.99,
    8,
    '2024-02-01'
  ),
  (
    7,
    'Impressora Laser',
    'Impressora a laser monocromática',
    499.99,
    10,
    '2024-02-05'
  ),
  (
    8,
    'Headset',
    'Headset com microfone embutido',
    299.99,
    18,
    '2024-02-10'
  ),
  (
    9,
    'Webcam HD',
    'Webcam HD para videoconferências',
    199.99,
    22,
    '2024-02-15'
  ),
  (
    10,
    'Router Wi-Fi',
    'Router Wi-Fi com alcance de 500 metros',
    149.99,
    30,
    '2024-02-20'
  );
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;