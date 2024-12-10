-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Ago-2024 às 11:52
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--
CREATE DATABASE IF NOT EXISTS `agenda` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `telefone` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Safado', 'gamesgames@games.com', '123456789'),
(2, 'Jubilu', 'tostadosofc@gmail.com', '5555585555'),
(3, 'Oi oi oi', 'OiOiOi@oIoIoI.com', '010101'),
(4, 'Freddy', 'aaaaaaaaaaaaa@gmail.com', '954667988008'),
(11, 'Coco do Bogão', 'qwert@asdf.com', '5555585555'),
(12, 'Coco do Bogão', 'qwert@asdf.com', '5555585555'),
(13, 'tert', 'qwert@asdf.com', 'eter'),
(14, 'tert', 'qwert@asdf.com', 'eter'),
(15, 'Safado', 'tumtum@gmail.com', '010101'),
(16, '\"drop database agenda\"', 'tumtum@gmail.com', '9184032112'),
(17, '\"drop database agenda\"', 'tumtum@gmail.com', '9184032112'),
(18, '\"drop database agenda\"', 'gamesgames@games.com', '9184032112'),
(19, '\"drop database agenda\"', 'gamesgames@games.com', '9184032112'),
(20, '\"drop database agenda\"', 'gamesgames@games.com', '9184032112'),
(21, 'esx', 'fasda@dasd', 'esac'),
(22, 'er5fsd', 'OiOiOi@oIoIoI.com', '24r sdf f342\\was');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
