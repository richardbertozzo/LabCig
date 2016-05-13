-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Maio-2016 às 20:25
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labcig`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Email` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Link` varchar(350) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`id`, `Nome`, `Email`, `Link`) VALUES
(2, 'Ana Maria Bencciveni Franzoni', 'franzoni@ecv.ufsc.br', 'http://lattes.cnpq.br/9547378691159321'),
(3, 'Carlos Loch', 'ecv1clo@ecv.ufsc.br', 'http://lattes.cnpq.br/1573696350142408'),
(4, 'Cláudio Cesar Zimmermann', 'claudio.ufsc@gmail.com', 'http://buscatextual.cnpq.br/buscatextual/'),
(5, 'Dora Maria Orth', 'ecv1dmo@ecv.ufsc.br', 'http://lattes.cnpq.br/9692479842063012'),
(6, 'Edesio Elias Lopes', '', 'http://lattes.cnpq.br/8410342213757135'),
(7, 'Jürgen Wilhelm Philips', 'jphilips@gmx.net', 'http://lattes.cnpq.br/7496095027894017'),
(8, 'Lia Caetano Bastos', 'lia@ecv.ufsc.br', 'http://lattes.cnpq.br/7383221421443606'),
(9, 'Sálvio José Vieira', 'ecv8sjv@ecv.ufsc.br', 'http://lattes.cnpq.br/3986651158264695');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
