-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Jan-2022 às 13:51
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `correspondencia`
--
CREATE DATABASE IF NOT EXISTS `correspondencia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `correspondencia`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `correspondencia`
--

CREATE TABLE `correspondencia` (
  `id_correspondencia` int(11) NOT NULL,
  `nome_empresa` varchar(150) NOT NULL,
  `destinatario` varchar(150) NOT NULL,
  `logradouro` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(3) NOT NULL,
  `remetente` varchar(150) NOT NULL,
  `tipo` int(11) NOT NULL,
  `ar` text NOT NULL,
  `data_envio` date NOT NULL,
  `cod_rastreio` varchar(15) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `date_create` date NOT NULL,
  `date_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `correspondencia`
--

INSERT INTO `correspondencia` (`id_correspondencia`, `nome_empresa`, `destinatario`, `logradouro`, `numero`, `complemento`, `cep`, `cidade`, `estado`, `remetente`, `tipo`, `ar`, `data_envio`, `cod_rastreio`, `usuario`, `date_create`, `date_update`) VALUES
(1, 'Teste', 'Sdad', 'Rua Teste', '123', '', '1234567', 'City', 'Sta', 'Testador', 1, 'sdfsd', '2022-01-29', 'WD123123123ED', 'Leandroyellow', '0000-00-00', '0000-00-00'),
(2, 'Teste', 'Sdad', 'Rua Teste', '123', '', '1234567', 'City', 'Sta', 'Testador', 1, 'sdfsd', '2022-01-29', 'WD123123123ED', 'Leandroyellow', '0000-00-00', '0000-00-00'),
(11, 'Teste', 'H', 'Rua Teste', 'h', '', '1234567', 'City', 'Sta', 'H', 3, 'h', '2022-01-29', 'H', 'H', '0000-00-00', '0000-00-00'),
(12, 'Wert Wert', 'Qq', 'Q', 'q', 'q', 'q', 'Q', 'Q', 'Q', 2, 'q', '2022-01-22', 'Q', 'Wert', '2022-01-18', '2022-01-27'),
(17, 'Teste', 'Sdad', 'Rua Teste', '123', '', '1234567', 'City', 'Sta', 'Testador', 1, 'sdfsd\r\nsdfsdfsdf\r\nsdfsdf\r\nsdfsdf\r\nsdfsdf', '2022-01-29', 'WD123123123ED', 'Leandroyellow', '0000-00-00', '0000-00-00'),
(18, 'Leandro', 'Leandro', 'Leandro', '123', '', '123', 'Leandro', 'Lea', '123', 3, 'leandro', '2022-01-30', '1223', 'Leandro', '2022-01-30', '2022-12-31');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `correspondencia`
--
ALTER TABLE `correspondencia`
  ADD PRIMARY KEY (`id_correspondencia`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `correspondencia`
--
ALTER TABLE `correspondencia`
  MODIFY `id_correspondencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
