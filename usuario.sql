-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2024 às 22:25
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
-- Banco de dados: `cadastrousuarioturma33`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `telefone`, `senha`) VALUES
(1, 'raquelmarques', 'raquelleiriaomarques@gmail.com', '365', '5dbd0227c19f86032b551bc863dabc98'),
(3, 'Thiago Almeida', 'thiagoalmeida@live.com', '999999', '1e425dd3ff3196b0fa1ac19b126e929b'),
(4, 'eueu', 'eueueu@gmail.com', '39484858', 'cd139eea70a69111db3d589c5794f3e5'),
(5, 'leirião', 'leiriao@gmail.com', '00099938374', '5dbd0227c19f86032b551bc863dabc98'),
(6, 'marques', 'marques@gmail.com', '2049858368', '04a9392f260f171fa153db9f0a84a6b2'),
(7, 'ccccc', 'oooo@gmail.com', '20598062', 'bc4fa564ee4b54f88299635cb931264c'),
(8, 'rqllm', 'rqllm@gmail.com', '769538475', '5fdbe67143d66563c2bdd66ef9c4ce70'),
(10, 'enilda', 'enilda@gmail.com', '147852', '202cb962ac59075b964b07152d234b70'),
(11, 'nynyny', 'ny@gmail.com', '47776674756', '289ca425eb368f1d582b6be2be0d3dfc'),
(38, 'thiagao do bairro', 'thiagao@gmail.com', '0000', '670da91be64127c92faac35c8300e814');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
