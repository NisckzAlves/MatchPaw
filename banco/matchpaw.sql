CREATE DATABASE matchpaw;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2022 às 00:06
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `matchpaw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(130) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `endereco` varchar(130) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `senha` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `nome`, `email`, `cpf`, `telefone`, `endereco`, `usuario`, `senha`) VALUES
(1, 'nicole', 'teste@gmail', '152.255.555-55', '18996030506', 'aaaaaaaaaaaaaaaaaa', 'nick', '202cb962ac59075b964b07152d234b70'),
(2, 'Luis', 'luis@gmail.com', '152.255.555-55', '18996030506', 'aaaaaaaaaaaaaaaaaaaaa', 'luis', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
