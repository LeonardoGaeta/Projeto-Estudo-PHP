-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11/09/2024 às 01:17
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
-- Banco de dados: `gerenciamentoeventos`
--
CREATE DATABASE IF NOT EXISTS `gerenciamentoeventos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `gerenciamentoeventos`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id_evento` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `descricao` text,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nome`, `data`, `descricao`) VALUES
(1, 'Festa de Aniversário', '2024-01-20', 'Celebração de aniversário com música e comida.'),
(2, 'Conferência de Tecnologia', '2024-02-15', 'Evento de tecnologia com palestras e workshops.'),
(3, 'Show de Música', '2024-03-10', 'Show ao vivo com bandas locais.'),
(4, 'Encontro de Networking', '2024-04-05', 'Evento para profissionais se conectarem e trocarem experiências.'),
(5, 'Feira de Empregos', '2024-05-12', 'Feira para busca de oportunidades de emprego.'),
(6, 'Workshop de Culinária', '2024-06-22', 'Workshop sobre técnicas de culinária.'),
(7, 'Palestra Motivacional', '2024-07-18', 'Palestra com oradores inspiradores.'),
(8, 'Exposição de Arte', '2024-08-25', 'Exposição de arte com obras de artistas locais.'),
(9, 'Festival de Cinema', '2024-09-15', 'Festival com exibições de filmes e debates.'),
(10, 'Festa de Formatura', '2024-10-10', 'Celebração de formatura com jantar e dança.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `locais`
--

DROP TABLE IF EXISTS `locais`;
CREATE TABLE IF NOT EXISTS `locais` (
  `id_local` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `capacidade` int DEFAULT NULL,
  PRIMARY KEY (`id_local`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `locais`
--

INSERT INTO `locais` (`id_local`, `nome`, `endereco`, `capacidade`) VALUES
(1, 'Centro de Convenções', 'Av. Principal, 1000', 500),
(2, 'Salão de Festas Bela Vista', 'Rua das Flores, 123', 200),
(3, 'Auditório Municipal', 'Praça da Liberdade, 45', 300),
(4, 'Espaço Gourmet', 'Rua do Comércio, 678', 150),
(5, 'Teatro Central', 'Avenida Cultural, 234', 400),
(6, 'Clube de Campo', 'Estrada do Sol, 789', 250),
(7, 'Hotel Lux', 'Rua do Luxo, 101', 100),
(8, 'Parque de Eventos', 'Av. das Águas, 222', 600),
(9, 'Arena de Shows', 'Av. dos Esportes, 500', 700),
(10, 'Casa de Festas Amarela', 'Rua do Encanto, 90', 180);

-- --------------------------------------------------------

--
-- Estrutura para tabela `participantes`
--

DROP TABLE IF EXISTS `participantes`;
CREATE TABLE IF NOT EXISTS `participantes` (
  `id_participante` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_participante`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `participantes`
--

INSERT INTO `participantes` (`id_participante`, `nome`, `email`, `telefone`) VALUES
(1, 'Ana Silva', 'ana.silva@example.com', '(11) 98765-4321'),
(2, 'João Souza', 'joao.souza@example.com', '(21) 91234-5678'),
(3, 'Maria Oliveira', 'maria.oliveira@example.com', '(31) 92345-6789'),
(4, 'Carlos Pereira', 'carlos.pereira@example.com', '(41) 93456-7890'),
(5, 'Patrícia Costa', 'patricia.costa@example.com', '(51) 94567-8901'),
(6, 'Lucas Martins', 'lucas.martins@example.com', '(61) 95678-9012'),
(7, 'Fernanda Lima', 'fernanda.lima@example.com', '(71) 96789-0123'),
(8, 'Bruno Almeida', 'bruno.almeida@example.com', '(81) 97890-1234'),
(9, 'Juliana Fernandes', 'juliana.fernandes@example.com', '(91) 98901-2345'),
(10, 'Ricardo Santos', 'ricardo.santos@example.com', '(11) 99012-3456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
