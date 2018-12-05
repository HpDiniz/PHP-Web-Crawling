-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 06-Nov-2018 às 03:57
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inf493`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `IDreceita` int(11) UNSIGNED NOT NULL,
  `IDusuario` int(11) UNSIGNED NOT NULL,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingrediente`
--

CREATE TABLE `ingrediente` (
  `IDingrediente` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ingrediente`
--

INSERT INTO `ingrediente` (`IDingrediente`, `nome`) VALUES
(1, 'açucar'),
(2, 'leite'),
(3, 'leite condensado'),
(4, 'ovo'),
(5, 'margarina'),
(6, 'coco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE `receita` (
  `IDreceita` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL DEFAULT '',
  `preparo` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`IDreceita`, `nome`, `preparo`) VALUES
(2, 'Pudim de leite', 'Bata todos os ingredientes do pudim no liquidificador e despeje na forma reservada.\r\nAsse em banho-maria, em forno médio (180º C), por cerca de 1 hora e 30 minutos.\r\nDepois de frio, leve para gelar por cerca de 6 horas.\r\nDesenforme e sirva a seguir.'),
(3, 'Cocada de Forno', 'Em uma tigela, coloque 3 xícaras (chá) de açúcar cristal, 300 g de coco fresco ralado, 1 colher (sopa) de manteiga, 2 ovos batidos e 1 xícara (chá) de leite e misture bem.\r\n\r\nTransfira a mistura para um refratário e leve ao forno médio pré-aquecido a 180 °C por aproximadamente 40 minutos ou até dourar. Retire do forno e sirva quente ou gelado.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita_ingrediente`
--

CREATE TABLE `receita_ingrediente` (
  `IDreceita` int(11) UNSIGNED NOT NULL,
  `IDingrediente` int(11) UNSIGNED NOT NULL,
  `quantidade` varchar(23) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receita_ingrediente`
--

INSERT INTO `receita_ingrediente` (`IDreceita`, `IDingrediente`, `quantidade`) VALUES
(2, 1, '1 xicara de cha'),
(2, 2, '2 latas'),
(2, 3, '1 lata'),
(2, 4, '3'),
(3, 5, '20 g'),
(3, 1, '600 g'),
(3, 6, '300 g'),
(3, 4, '2'),
(3, 2, '200 ml');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `IDusuario` int(11) UNSIGNED NOT NULL,
  `login` varchar(23) NOT NULL DEFAULT '',
  `senha` varchar(32) NOT NULL DEFAULT '',
  `sexo` enum('M','F','N') NOT NULL DEFAULT 'M',
  `email` varchar(39) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`IDreceita`,`IDusuario`),
  ADD KEY `IDusuario` (`IDusuario`);

--
-- Indexes for table `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD PRIMARY KEY (`IDingrediente`),
  ADD KEY `nome` (`nome`);

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`IDreceita`),
  ADD KEY `nome` (`nome`);

--
-- Indexes for table `receita_ingrediente`
--
ALTER TABLE `receita_ingrediente`
  ADD PRIMARY KEY (`IDreceita`,`IDingrediente`),
  ADD KEY `IDingrediente` (`IDingrediente`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDusuario`),
  ADD KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingrediente`
--
ALTER TABLE `ingrediente`
  MODIFY `IDingrediente` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `receita`
--
ALTER TABLE `receita`
  MODIFY `IDreceita` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDusuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
