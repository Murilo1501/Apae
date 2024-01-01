-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/01/2024 às 22:40
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `apae`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresasparceiras`
--

CREATE TABLE `empresasparceiras` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `ramoAtiv` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `empresasparceiras`
--

INSERT INTO `empresasparceiras` (`id`, `nome`, `ramoAtiv`, `email`, `senha`, `status`, `data_cadastro`) VALUES
(1, 'Amazon', 'distribuidora', 'amazon@gmail.com', 'Admin123', 'inativo', '2023-12-18'),
(2, 'eniac', 'distribuidora', 'eniac@gmail.com', 'Admin123', 'inativo', '2023-12-23'),
(3, 'tower', 'automotiva', 'tower@gmail.com', '$2y$10$ndHbWVKaK2TIVYj5RYVO7u9VUWJHzyPRB2SNdYyU9P6PK.AlD.SIS', 'ativo', '2023-12-31');

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventsnotices`
--

CREATE TABLE `eventsnotices` (
  `id` int(11) NOT NULL,
  `titulo` varchar(55) NOT NULL,
  `texto` text NOT NULL,
  `tipo` varchar(55) NOT NULL,
  `termino` date DEFAULT NULL,
  `inicio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `eventsnotices`
--

INSERT INTO `eventsnotices` (`id`, `titulo`, `texto`, `tipo`, `termino`, `inicio`) VALUES
(1, 'teste evento', 'fwafawfawfawfawfawfawfawfaw', 'evento', '2023-11-10', '2023-10-29'),
(2, 'noticia dia 01/11/2023', 'qualquer coisa ', 'noticia', '2023-11-02', '2023-11-01'),
(3, 'teste', 'wdasdawd', 'eventos', '0000-00-00', '0000-00-00'),
(4, 'teste', 'wdasdawd', 'eventos', '0000-00-00', '0000-00-00'),
(5, 'teste', 'wdasdawd', 'eventos', '0000-00-00', '0000-00-00'),
(6, 'teste2', 'wdasdwadsa', 'noticias', '0000-00-00', '0000-00-00'),
(7, 'teste2', 'wdasdwadsa', 'noticias', '0000-00-00', '0000-00-00'),
(8, 'teste4', 'dwasdawds', 'noticias', '0000-00-00', '0000-00-00'),
(9, 'dawdas', 'dwadawdsda', 'noticias', '0000-00-00', '0000-00-00'),
(10, 'tseawdsad', 'wfdfregfrtghjujmuku', 'eventos', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `cep` varchar(55) NOT NULL,
  `cpf` varchar(55) NOT NULL,
  `data_nasc` date NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `complemento` varchar(55) NOT NULL,
  `telefone` varchar(55) NOT NULL,
  `data_vencimento` date NOT NULL,
  `nivel` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `data_cadastro` date NOT NULL,
  `iv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `cep`, `cpf`, `data_nasc`, `senha`, `endereco`, `complemento`, `telefone`, `data_vencimento`, `nivel`, `status`, `data_cadastro`, `iv`) VALUES
(87, 'admin', 'admin@gmail.com', '07411-395', '16053728896', '2007-01-15', '$2y$10$mvl7OUJEjfphrmGUtvw7o./Z5whrkcQdKLdmedA4f5ncOaAcLy5ni', 'Rua Nossa Senhora da Pompéia, Cidade Nova Arujá, Arujá, SP', 'qualquercoisa', '2147483647', '2007-01-15', 'admin', 'ativo', '2023-12-30', ''),
(88, 'murilo', 'murilo@gmail.com', '07411-395', '16053728896', '2007-01-15', '$2y$10$ldJ.ernXc37UJRA/02rfgeQ5w9mdO1FIyv9mickf2F9N4kWshQYG.', 'Rua Nossa Senhora da Pompéia, Cidade Nova Arujá, Arujá, SP', 'qualquercoisa', '11933089944', '2007-01-15', 'comum', 'ativo', '2023-12-31', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `empresasparceiras`
--
ALTER TABLE `empresasparceiras`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `eventsnotices`
--
ALTER TABLE `eventsnotices`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresasparceiras`
--
ALTER TABLE `empresasparceiras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `eventsnotices`
--
ALTER TABLE `eventsnotices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
