-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14/04/2024 às 23:00
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_ifood`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_comida`
--

CREATE TABLE `tb_comida` (
  `id` int NOT NULL,
  `nome` varchar(200) NOT NULL,
  `ingredientes` varchar(250) NOT NULL,
  `preco` double(255,2) NOT NULL,
  `id_restaurante` int NOT NULL,
  `nome_restaurante` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_comida`
--

INSERT INTO `tb_comida` (`id`, `nome`, `ingredientes`, `preco`, `id_restaurante`, `nome_restaurante`) VALUES
(1, 'Pão de mel', 'Açúcar, mel, trigo', 22.90, 6, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_restaurantes`
--

CREATE TABLE `tb_restaurantes` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_restaurantes`
--

INSERT INTO `tb_restaurantes` (`id`, `nome`, `descricao`, `categoria`, `url`) VALUES
(2, 'Caldos levitantes', 'Oferecemos caldos que te fazem chegar nas nuvens', 'Caldos', 'https://th.bing.com/th/id/R.0d61ee387716742a9de1b237cc9f8fb9?rik=4NnKpPTMhee5xg&pid=ImgRaw&r=0'),
(3, 'Tempero do Interior', 'Comidas típicas de cidades pequenas do centro-oeste', 'Almoço', 'https://th.bing.com/th/id/OIP.TgnNbFAmeFl46bW9cE_u7QHaD6?rs=1&pid=ImgDetMain'),
(4, 'Milkshake ataque do tubarão', 'Trazendo a experiência da pista ataque do tubarão (hot wheels) ao seu paladar', 'Bebidas', 'https://th.bing.com/th/id/OIP.DEjoi-j62UopkUsrAYdWtgHaHa?rs=1&pid=ImgDetMain'),
(6, 'Adocicados de mel', 'Pratos com as mais diversas variações de melados', 'Favo de mel', 'img/restaurantes/pao de mel.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Everton Cebolinha', 'cebolinha@ifg', 'everton1234'),
(2, 'Hendrew', 'hendrewzinho@ifg', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_comida`
--
ALTER TABLE `tb_comida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_restaurante` (`id_restaurante`);

--
-- Índices de tabela `tb_restaurantes`
--
ALTER TABLE `tb_restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_comida`
--
ALTER TABLE `tb_comida`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_restaurantes`
--
ALTER TABLE `tb_restaurantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_comida`
--
ALTER TABLE `tb_comida`
  ADD CONSTRAINT `tb_comida_ibfk_1` FOREIGN KEY (`id_restaurante`) REFERENCES `tb_restaurantes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
