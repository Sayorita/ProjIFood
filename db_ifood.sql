-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10/03/2024 às 15:20
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
(1, 'Bolos da dona Chica', 'Os mais saborosos e criativos bolos de pote.', 'Bolos', 'https://docepedia.com/wp-content/uploads/2019/12/bolos-pote-d-1.jpg'),
(2, 'Caldos levitantes', 'Oferecemos caldos que te fazem chegar nas nuvens', 'Caldos', 'https://th.bing.com/th/id/R.0d61ee387716742a9de1b237cc9f8fb9?rik=4NnKpPTMhee5xg&pid=ImgRaw&r=0'),
(3, 'Tempero do Interior', 'Comidas típicas de cidades pequenas do centro-oeste', 'Almoço', 'https://th.bing.com/th/id/OIP.TgnNbFAmeFl46bW9cE_u7QHaD6?rs=1&pid=ImgDetMain'),
(4, 'Milkshake ataque do tubarão', 'Trazendo a experiência da pista ataque do tubarão (hot wheels) ao seu paladar', 'Bebidas', 'https://th.bing.com/th/id/OIP.DEjoi-j62UopkUsrAYdWtgHaHa?rs=1&pid=ImgDetMain');

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
-- AUTO_INCREMENT de tabela `tb_restaurantes`
--
ALTER TABLE `tb_restaurantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
