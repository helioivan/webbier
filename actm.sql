-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Set 18, 2015 as 09:18 PM
-- Versão do Servidor: 5.5.10
-- Versão do PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `actm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cervejaria`
--

CREATE TABLE IF NOT EXISTS `cervejaria` (
  `ID_CERVEJARIA` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO_CERVEJARIA` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_CERVEJARIA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `cervejaria`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `cervejas`
--

CREATE TABLE IF NOT EXISTS `cervejas` (
  `ID_CERVEJA` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO_CERVEJA` varchar(50) NOT NULL,
  `HBV` decimal(8,3) NOT NULL,
  `IBU` decimal(8,3) NOT NULL,
  `PRATO_CERVEJA` int(11) DEFAULT NULL,
  `TACA_CERVEJA` int(11) DEFAULT NULL,
  `CERVEJARIA_CERVEJA` int(11) NOT NULL,
  PRIMARY KEY (`ID_CERVEJA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `cervejas`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `estilos`
--

CREATE TABLE IF NOT EXISTS `estilos` (
  `ID_ESTILO` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO_ESTILO` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_ESTILO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `estilos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE IF NOT EXISTS `pratos` (
  `ID_PRATO` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO_PRATO` text NOT NULL,
  PRIMARY KEY (`ID_PRATO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `pratos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tacas`
--

CREATE TABLE IF NOT EXISTS `tacas` (
  `ID_TACA` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO_TACA` varchar(35) NOT NULL,
  PRIMARY KEY (`ID_TACA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `tacas`
--

