-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30-Abr-2019 às 14:28
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque_rede_inova`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

DROP TABLE IF EXISTS `equipamentos`;
CREATE TABLE IF NOT EXISTS `equipamentos` (
  `id_equipamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_equipamento` varchar(255) NOT NULL,
  `caixa` enum('1 - TELEFONIA','2 - TELEFONIA','3 - ENERGIA','4 - TELEFONIA(CABOS)','5 - INTERNET','6 - CABOS(VGA,HDMI,ETC)','7 - TONNER: IMPRESSORA','8 PENDRIVE E ADPADORES DE TOMADA','9 - EQUIP. DE TOMADAS','10 - MOUSES') DEFAULT NULL,
  `ocupado` enum('SIM','NAO') DEFAULT NULL,
  PRIMARY KEY (`id_equipamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos_usuarios`
--

DROP TABLE IF EXISTS `equipamentos_usuarios`;
CREATE TABLE IF NOT EXISTS `equipamentos_usuarios` (
  `id_equipamento_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipamento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  PRIMARY KEY (`id_equipamento_usuario`),
  KEY `fk_equipamento` (`id_equipamento`),
  KEY `fk_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(255) NOT NULL,
  `setor` enum('ANJO','ADMINISTRATIVO','COMERCIAL','MARKETING','TECNOLOGIA') DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `equipamentos_usuarios`
--
ALTER TABLE `equipamentos_usuarios`
  ADD CONSTRAINT `fk_equipamento` FOREIGN KEY (`id_equipamento`) REFERENCES `equipamentos` (`id_equipamento`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
