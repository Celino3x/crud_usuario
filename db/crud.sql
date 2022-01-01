-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jan-2022 às 20:28
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_pessoa`
--

CREATE TABLE `cad_pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_pessoa`
--

INSERT INTO `cad_pessoa` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Exemplo', 'exemplo@exemplo.com', '(21) 99999-9999'),
(2, 'Juscelino', 'exemplo@exemplo.com', '(21) 98989-0000'),
(3, 'João Gomes', 'jgomes@exemplo.com', '(21) 00909-9999'),
(4, 'Maria Ferreira', 'm.ferreira@exemplo.com', '(21) 00909-9999'),
(5, 'Sofia', 'sofia32@exemplo.com', '(21) 00909-9999'),
(6, 'Jonathan', 'jj@exemplo.com', '(21) 00909-9999'),
(7, 'Alexandro', 'alexandro@exemplo.com', '(21) 00909-9999'),
(8, 'Lucas', 'lucas@exemplo.com', '(21) 00909-9999'),
(9, 'Alex', 'a@exemplo.com', '(21) 00909-9999'),
(10, 'Pedro', 'pedro123@gmail.com', '(21) 00909-9999'),
(11, 'Ruth', 'ruth@outlook.com', '(21) 00909-9999'),
(12, 'Rosana', 'rosana@gmail.com', '(21) 00909-9999'),
(13, 'Maria Gomes', 'Maria@exemplo.com', '(21) 00909-9999'),
(14, 'Juscelino Campos', 'celino3x@gmail.com', '(21) 98083-4347'),
(15, 'Marjoree Campos', 'marjonata2013@gmail.com', '(21) 98159-4314');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_pessoa`
--
ALTER TABLE `cad_pessoa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_pessoa`
--
ALTER TABLE `cad_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
