-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jul-2020 às 18:01
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `supergiantgames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `form_contact`
--

CREATE TABLE `form_contact` (
  `id` int(11) NOT NULL,
  `form_title` varchar(30) NOT NULL,
  `form_description` text NOT NULL,
  `form_email_receiver` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `form_contact`
--

INSERT INTO `form_contact` (`id`, `form_title`, `form_description`, `form_email_receiver`) VALUES
(1, 'Formulário', 'Esta é uma descrição longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa, muito longa.', 'transistor@supergiantgames.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_image` varchar(255) NOT NULL,
  `game_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `games`
--

INSERT INTO `games` (`id`, `game_image`, `game_description`) VALUES
(1, 'Grant.png', 'A Camerata foi apenas os dois no início, e suas fileiras nunca foram destinadas a exceder um número a ser contado em uma mão'),
(2, 'Sybil.png', 'Sybil é descrita pelo Transistor como sendo os &#34;olhos e ouvidos&#34; da Camerata.'),
(3, 'Red.png', 'Red, uma jovem cantora, entrou em posse do Transistor. O grupo Possessores quer tanto ela quanto o Transistor e está perseguindo implacavelmente a sua procura.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message_name` varchar(80) NOT NULL,
  `message_email` varchar(255) NOT NULL,
  `message_text` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`id`, `message_name`, `message_email`, `message_text`, `status`) VALUES
(1, 'Kelly Alves', 'kelly@sorocabacom.com.br', 'Boa, Lailson. Ficou perfeito. Vamos analisar seu código! :)', 0),
(2, 'Lailson', 'lailsondev@gmail.com', 'Oi, Kelly. Finalizei o projeto. Muito obrigado por me deixar participar.', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `spotlight_game`
--

CREATE TABLE `spotlight_game` (
  `id` int(11) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `game_title` varchar(255) NOT NULL,
  `game_image` varchar(255) NOT NULL,
  `game_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `spotlight_game`
--

INSERT INTO `spotlight_game` (`id`, `background_image`, `game_title`, `game_image`, `game_description`) VALUES
(1, 'transistor---red-the-singer-background.png', 'Transistor - Red The Singer', 'transistor---red-the-singer-spotlight.png', 'Olha, o que quer que você esteja pensando, me faça um favor, não solte.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `form_contact`
--
ALTER TABLE `form_contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `spotlight_game`
--
ALTER TABLE `spotlight_game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `form_contact`
--
ALTER TABLE `form_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `spotlight_game`
--
ALTER TABLE `spotlight_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
