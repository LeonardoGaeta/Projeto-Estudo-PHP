-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12/11/2024 às 12:22
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
-- Banco de dados: `aluguelcarros`
--
CREATE DATABASE IF NOT EXISTS `aluguelcarros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `aluguelcarros`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluguel`
--

DROP TABLE IF EXISTS `aluguel`;
CREATE TABLE IF NOT EXISTS `aluguel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_carro` int DEFAULT NULL,
  `quantidade_dias` int NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_carro` (`id_carro`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `aluguel`
--

INSERT INTO `aluguel` (`id`, `id_carro`, `quantidade_dias`, `valor_total`, `data_inicio`, `data_fim`) VALUES
(1, 1, 5, 750.00, '2024-11-01', '2024-11-06'),
(2, 2, 3, 540.00, '2024-11-10', '2024-11-13'),
(3, 3, 7, 1540.00, '2024-10-15', '2024-10-22'),
(4, 4, 2, 200.00, '2024-11-05', '2024-11-07'),
(5, 5, 10, 1200.00, '2024-10-20', '2024-10-30'),
(6, 6, 6, 780.00, '2024-11-01', '2024-11-07'),
(7, 7, 4, 560.00, '2024-10-15', '2024-10-19'),
(8, 8, 8, 1360.00, '2024-11-02', '2024-11-10'),
(9, 9, 5, 1250.00, '2024-10-15', '2024-10-20'),
(10, 10, 3, 330.00, '2024-11-12', '2024-11-15'),
(11, 11, 7, 1400.00, '2024-10-25', '2024-11-01'),
(12, 12, 9, 1800.00, '2024-11-03', '2024-11-12'),
(13, 13, 12, 2640.00, '2024-11-05', '2024-11-17'),
(14, 14, 4, 2000.00, '2024-11-09', '2024-11-13'),
(15, 15, 6, 3000.00, '2024-11-01', '2024-11-07'),
(16, 16, 11, 5500.00, '2024-11-01', '2024-11-12'),
(17, 17, 5, 900.00, '2024-11-06', '2024-11-11'),
(18, 18, 4, 960.00, '2024-10-14', '2024-10-18'),
(19, 19, 3, 720.00, '2024-11-10', '2024-11-13'),
(20, 20, 6, 780.00, '2024-11-01', '2024-11-07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros`
--

DROP TABLE IF EXISTS `carros`;
CREATE TABLE IF NOT EXISTS `carros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `modelo` varchar(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `ano` int NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `valor_aluguel` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `carros`
--

INSERT INTO `carros` (`id`, `modelo`, `marca`, `ano`, `categoria`, `valor_aluguel`) VALUES
(1, 'Civic', 'Honda', 2020, 'Sedan', 150.00),
(2, 'Corolla', 'Toyota', 2021, 'Sedan', 180.00),
(3, 'Tucson', 'Hyundai', 2022, 'SUV', 220.00),
(4, 'Fusca', 'Volkswagen', 1967, 'Hatch', 100.00),
(5, 'Gol', 'Volkswagen', 2019, 'Hatch', 120.00),
(6, 'Onix', 'Chevrolet', 2021, 'Hatch', 130.00),
(7, 'Fiesta', 'Ford', 2020, 'Hatch', 140.00),
(8, 'Jetta', 'Volkswagen', 2020, 'Sedan', 170.00),
(9, 'A3', 'Audi', 2021, 'Sedan', 250.00),
(10, 'Kwid', 'Renault', 2022, 'Hatch', 110.00),
(11, 'HR-V', 'Honda', 2021, 'SUV', 200.00),
(12, 'Renegade', 'Jeep', 2020, 'SUV', 210.00),
(13, 'X6', 'BMW', 2021, 'SUV', 500.00),
(14, 'Range Rover', 'Land Rover', 2020, 'SUV', 600.00),
(15, 'Tivoli', 'SsangYong', 2019, 'SUV', 180.00),
(16, 'Picanto', 'Kia', 2021, 'Hatch', 130.00),
(17, 'Compass', 'Jeep', 2021, 'SUV', 240.00),
(18, 'Chery Tiggo', 'Chery', 2020, 'SUV', 160.00),
(19, 'Mobi', 'Fiat', 2021, 'Hatch', 115.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
