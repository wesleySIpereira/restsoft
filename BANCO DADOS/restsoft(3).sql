-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2017 at 07:11 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bairro`
--

CREATE TABLE `tb_bairro` (
  `id_bairro` int(11) NOT NULL,
  `bairro_nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bairro`
--

INSERT INTO `tb_bairro` (`id_bairro`, `bairro_nome`) VALUES
(10, 'ENEIAS FERREIRA DE AGUIAR'),
(11, 'MARCIANO BRANDÃO'),
(12, 'ASDASD'),
(13, 'cusao');

-- --------------------------------------------------------

--
-- Table structure for table `tb_caixa`
--

CREATE TABLE `tb_caixa` (
  `id_caixa` int(11) NOT NULL,
  `caixa_data` date DEFAULT NULL,
  `caixa_hora` time DEFAULT NULL,
  `caixa_valor` decimal(10,2) DEFAULT NULL,
  `c_idfuncionario` int(11) DEFAULT NULL,
  `caixa_mov` varchar(45) DEFAULT 'ENTRADA',
  `c_idpedido` int(11) DEFAULT NULL,
  `caixa_obs` varchar(60) NOT NULL DEFAULT 'VENDA DIRETA',
  `caixa_func` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_caixa`
--

INSERT INTO `tb_caixa` (`id_caixa`, `caixa_data`, `caixa_hora`, `caixa_valor`, `c_idfuncionario`, `caixa_mov`, `c_idpedido`, `caixa_obs`, `caixa_func`) VALUES
(66, '2017-08-26', '01:18:13', '500.00', 15, 'SAÍDA', NULL, 'VENDA DIRETA', ''),
(67, '2017-08-26', '01:19:19', '500.00', 15, 'ENTRADA', NULL, 'VENDA DIRETA', ''),
(68, '2017-08-26', '01:20:35', '0.00', 15, 'SAÍDA', NULL, 'VENDA DIRETA', ''),
(69, '2017-08-26', '01:21:03', '111.00', 15, 'SAÍDA', NULL, 'VENDA DIRETA', ''),
(70, '2017-08-26', '01:21:33', '111.00', 15, 'SAÍDA', NULL, 'VENDA DIRETA', ''),
(71, '2017-08-26', '01:23:35', '300.00', 15, 'ENTRADA', NULL, 'VENDA DIRETA', ''),
(72, '2017-08-26', '01:24:01', '90.00', 15, 'SAÍDA', NULL, 'VENDA DIRETA', ''),
(73, '2017-08-26', '01:26:14', '100.00', 15, 'ENTRADA', NULL, 'VENDA DIRETA', ''),
(74, '2017-08-26', '01:29:30', '40.00', 15, 'SAÍDA', NULL, 'VENDA DIRETA', ''),
(75, '2017-08-26', '02:13:15', '15.00', 15, 'SAÍDA', NULL, 'PAGAMENTO LUZ', 'admin'),
(76, '2017-08-26', '02:18:47', '17.98', 15, 'ENTRADA', 89, 'VENDA DIRETA', 'El chapo'),
(77, '2017-08-26', '02:21:01', '50.00', 15, 'SAÍDA', NULL, 'PAGAMENTO BOLETO INTERNET', 'admin'),
(78, '2017-08-26', '02:22:14', '0.00', 15, 'SAÍDA', NULL, 'PAGAMENTO BOLETO INTERNET', 'admin'),
(79, '2017-08-26', '02:22:36', '0.00', 15, 'SAÍDA', NULL, 'ASDF', 'admin'),
(80, '2017-08-26', '02:23:43', '0.00', 15, 'SAÍDA', NULL, 'PAGAMENTO BOLETO INTERNET', 'admin'),
(81, '2017-08-27', '18:07:18', '100.00', 15, 'ENTRADA', NULL, 'teste', 'admin'),
(82, '2017-08-27', '18:07:40', '100.00', 15, 'SAÍDA', NULL, '1000', 'admin'),
(83, '2017-08-27', '18:08:31', '0.00', 15, 'SAÍDA', NULL, 'teste', 'admin'),
(84, '2017-08-27', '23:20:39', '0.98', 15, 'SAÍDA', NULL, 'asdf', 'admin'),
(85, '2017-08-27', '23:23:15', '0.00', 15, 'ENTRADA', NULL, 'entrada', 'admin'),
(86, '2017-08-27', '23:23:44', '10.00', 15, 'ENTRADA', NULL, 'asdf', 'admin'),
(87, '2017-08-27', '23:24:14', '10.00', 15, 'ENTRADA', NULL, 'asdf', 'admin'),
(88, '2017-08-27', '23:24:39', '0.00', 15, 'SAÍDA', NULL, 'lçj', 'admin'),
(89, '2017-08-27', '23:25:31', '0.00', 15, 'SAÍDA', NULL, 'lçj', 'admin'),
(90, '2017-08-27', '23:26:34', '0.00', 15, 'SAÍDA', NULL, 'lçj', 'admin'),
(91, '2017-08-27', '23:27:00', '0.00', 15, 'SAÍDA', NULL, 'asdfasdf', 'admin'),
(92, '2017-08-27', '23:27:23', '0.05', 15, 'SAÍDA', NULL, 'asdf', 'admin'),
(93, '2017-08-27', '23:33:16', '0.00', 15, 'SAÍDA', NULL, 'asdf', 'admin'),
(94, '2017-08-27', '23:33:35', '0.00', 15, 'SAÍDA', NULL, 'asdf', 'admin'),
(95, '2017-08-27', '23:34:18', '0.16', 15, 'SAÍDA', NULL, 'asdf', 'admin'),
(96, '2017-08-27', '23:36:52', '0.16', 15, 'SAÍDA', NULL, 'asdf', 'admin'),
(97, '2017-08-27', '23:37:15', '0.90', 15, 'SAÍDA', NULL, 'saida teste', 'admin'),
(98, '2017-08-27', '23:37:43', '0.73', 15, 'SAÍDA', NULL, 'qwerqwe', 'admin'),
(99, '2017-08-27', '23:41:43', '17.98', 15, 'ENTRADA', 90, 'VENDA DIRETA', 'El chapo'),
(100, '2017-08-27', '23:55:57', '2655.00', 15, 'ENTRADA', 91, 'VENDA DIRETA', 'El chapo'),
(101, '2017-08-27', '23:57:11', '0.98', 15, 'SAÍDA', NULL, 'sair', 'admin'),
(102, '2017-08-29', '01:26:24', '553.08', 15, 'ENTRADA', 92, 'VENDA DIRETA', 'El chapo'),
(103, '2017-08-29', '01:27:17', '3.00', 15, 'SAÍDA', NULL, 'retirada', 'admin'),
(104, '2017-08-29', '01:27:51', '330.00', 15, 'SAÍDA', NULL, 'asdf', 'admin'),
(105, '2017-09-01', '00:58:06', '34.75', 15, 'ENTRADA', 93, 'VENDA DIRETA', 'El chapo'),
(106, '2017-09-01', '01:01:02', '200.00', 15, 'SAÍDA', NULL, 'teste', 'admin'),
(107, '2017-09-01', '01:02:20', '700.00', 15, 'SAÍDA', NULL, 'rdrd', 'admin'),
(108, '2017-09-01', '01:02:49', '100.00', 15, 'ENTRADA', NULL, 'troco', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int(11) NOT NULL,
  `cliente_cadastro` date DEFAULT NULL,
  `cliente_status` varchar(45) DEFAULT 'ATIVO',
  `c_idpessoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `cliente_cadastro`, `cliente_status`, `c_idpessoa`) VALUES
(16, '0000-00-00', 'INATIVO', 18),
(17, '0000-00-00', 'INATIVO', 19),
(18, '0000-00-00', 'INATIVO', 20),
(19, '2017-07-03', 'INATIVO', 21),
(20, '0000-00-00', 'INATIVO', 22),
(21, '0000-00-00', 'INATIVO', 23),
(22, '0000-00-00', 'INATIVO', 24),
(23, '0000-00-00', 'INATIVO', 25),
(24, NULL, 'ATIVO', NULL),
(25, NULL, 'ATIVO', NULL),
(26, NULL, 'INATIVO', 18),
(27, NULL, 'ATIVO', NULL),
(28, NULL, 'INATIVO', NULL),
(29, NULL, 'INATIVO', NULL),
(30, NULL, 'INATIVO', NULL),
(31, NULL, 'INATIVO', NULL),
(32, NULL, 'INATIVO', NULL),
(33, NULL, 'INATIVO', NULL),
(34, NULL, 'INATIVO', NULL),
(35, NULL, 'INATIVO', NULL),
(36, NULL, 'INATIVO', NULL),
(37, '0000-00-00', 'INATIVO', 26),
(38, '0000-00-00', 'INATIVO', 27),
(39, '0000-00-00', 'INATIVO', 28),
(40, '0000-00-00', 'ATIVO', NULL),
(41, '0000-00-00', 'INATIVO', 30),
(42, '0000-00-00', 'INATIVO', 41),
(43, '0000-00-00', 'ATIVO', NULL),
(44, '0000-00-00', 'ATIVO', NULL),
(45, '0000-00-00', 'ATIVO', NULL),
(46, '0000-00-00', 'INATIVO', 45),
(47, '0000-00-00', 'INATIVO', 46),
(48, '0000-00-00', 'INATIVO', 47),
(49, '0000-00-00', 'INATIVO', 48),
(50, '0000-00-00', 'INATIVO', 49),
(51, '0000-00-00', 'INATIVO', 50),
(52, '0000-00-00', 'ATIVO', 51),
(53, '2017-09-03', 'ATIVO', 57),
(54, '2017-09-03', 'ATIVO', 58),
(55, '2017-09-03', 'ATIVO', 59),
(56, '2017-09-03', 'ATIVO', 60),
(57, '2017-09-03', 'ATIVO', 61),
(58, '2017-09-03', 'ATIVO', 62),
(59, '2017-09-03', 'ATIVO', 63),
(60, '2017-09-03', 'ATIVO', 64),
(61, '2017-09-03', 'ATIVO', 65),
(62, '2017-09-03', 'ATIVO', 66);

-- --------------------------------------------------------

--
-- Table structure for table `tb_endereco`
--

CREATE TABLE `tb_endereco` (
  `id_endereco` int(11) NOT NULL,
  `end_cidade` varchar(45) DEFAULT 'PATROCINIO',
  `end_estado` varchar(45) DEFAULT 'MG',
  `end_rua` varchar(45) DEFAULT NULL,
  `c_idrua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_endereco`
--

INSERT INTO `tb_endereco` (`id_endereco`, `end_cidade`, `end_estado`, `end_rua`, `c_idrua`) VALUES
(35, 'PATROCINIO', 'MG', 'ASDASDA', 13),
(36, 'PATROCINIO', 'MG', 'hhgg', 13),
(37, 'PATROCINIO', 'MG', 'hhgg', NULL),
(38, 'PATROCINIO', 'MG', 'hhgg', 13),
(39, 'PATROCINIO', 'MG', 'hhggg', 13),
(40, 'PATROCINIO', 'MG', NULL, NULL),
(41, 'PATROCINIO', 'MG', 'hhggg', 13),
(42, 'PATROCINIO', 'MG', 'hhggg', 13),
(43, 'PATROCINIO', 'MG', 'numero', 13),
(44, 'PATROCINIO', 'MG', 'numero', 13),
(45, 'PATROCINIO', 'MG', 'numero', 13),
(46, 'PATROCINIO', 'MG', '11111111111', 13),
(47, 'PATROCINIO', 'MG', '11111111111', 13),
(48, 'PATROCINIO', 'MG', '11111111111', 13),
(49, 'PATROCINIO', 'MG', '11111111111', 13),
(50, 'PATROCINIO', 'MG', '11111111111', 13),
(51, 'PATROCINIO', 'MG', 'ASDF', 13),
(52, 'PATROCINIO', 'MG', '111111111111', 13),
(53, 'PATROCINIO', 'MG', '111', 13),
(54, 'PATROCINIO', 'MG', '111', 13),
(55, 'PATROCINIO', 'MG', 'E234', 13),
(56, 'PATROCINIO', 'MG', 'TTTT', 13),
(57, 'PATROCINIO', 'MG', NULL, NULL),
(58, 'PATROCINIO', 'MG', '1058', 15),
(59, 'PATROCINIO', 'MG', '1058', 17),
(60, 'PATROCINIO', 'MG', '1058', 14),
(61, 'PATROCINIO', 'MG', '1058', 14),
(62, 'PATROCINIO', 'MG', '1058', 14),
(63, 'PATROCINIO', 'MG', '7655', 14),
(64, 'PATROCINIO', 'MG', '1212', 17),
(65, 'PATROCINIO', 'MG', '1212', 16),
(66, 'PATROCINIO', 'MG', '1212', 14),
(67, 'PATROCINIO', 'MG', '1111111111', 14),
(68, 'PATROCINIO', 'MG', 'gsgsgsg', 20),
(69, 'PATROCINIO', 'MG', '1051', 17),
(70, 'PATROCINIO', 'MG', '1028', NULL),
(71, 'PATROCINIO', 'MG', '234', 18),
(72, 'PATROCINIO', 'MG', 'bosta', 15),
(73, 'PATROCINIO', 'MG', '123', 14),
(74, 'PATROCINIO', 'MG', '123', 14),
(75, 'PATROCINIO', 'MG', '234234', 17),
(76, 'PATROCINIO', 'MG', '234234', 17),
(77, 'PATROCINIO', 'MG', '234234', 17),
(78, 'PATROCINIO', 'MG', '234234', 17),
(79, 'PATROCINIO', 'MG', '234234', 17),
(80, 'PATROCINIO', 'MG', '234234', 17),
(81, 'PATROCINIO', 'MG', '234234', 17),
(82, 'PATROCINIO', 'MG', '1111111111', 16),
(83, 'PATROCINIO', 'MG', '11111111', NULL),
(84, 'PATROCINIO', 'MG', '11111111', NULL),
(85, 'PATROCINIO', 'MG', '11111111', NULL),
(86, 'PATROCINIO', 'MG', '2546', 16),
(87, 'PATROCINIO', 'MG', '2546', 17),
(88, 'PATROCINIO', 'MG', 'asfqwerfqw', 16),
(89, 'PATROCINIO', 'MG', '123', 14),
(90, 'PATROCINIO', 'MG', '456', 14),
(91, 'PATROCINIO', 'MG', '123', 14),
(92, 'PATROCINIO', 'MG', '1520', 14),
(93, 'PATROCINIO', 'MG', '1522', 14),
(94, 'PATROCINIO', 'MG', '1058', 15),
(95, 'PATROCINIO', 'MG', '243', 16),
(96, 'PATROCINIO', 'MG', '1058', 15),
(97, 'PATROCINIO', 'MG', '1212', 14),
(98, 'PATROCINIO', 'MG', 'asdf', 14),
(99, 'PATROCINIO', 'MG', '234234', 14),
(100, 'PATROCINIO', 'MG', '12341', 14),
(101, 'PATROCINIO', 'MG', 'DFASDF', 14),
(102, 'PATROCINIO', 'MG', 'adsf', 14),
(103, 'PATROCINIO', 'MG', '1231', 14),
(104, 'PATROCINIO', 'MG', 'asfd', 14),
(105, 'PATROCINIO', 'MG', '111', 15),
(106, 'PATROCINIO', 'MG', '12341234', 16),
(107, 'PATROCINIO', 'MG', '11111111111', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `fun_cadastro` varchar(45) DEFAULT NULL,
  `func_status` varchar(45) DEFAULT 'ATIVO',
  `c_idpessoa` int(11) DEFAULT NULL,
  `tem_usuario` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`id_funcionario`, `fun_cadastro`, `func_status`, `c_idpessoa`, `tem_usuario`) VALUES
(15, '2017-08-2020', 'ATIVO', 55, 1),
(16, '2017-08-2020', 'ATIVO', 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_itenspedido`
--

CREATE TABLE `tb_itenspedido` (
  `id_item` int(11) NOT NULL,
  `c_idproduto` int(11) DEFAULT NULL,
  `item_qtd` float DEFAULT NULL,
  `item_total` float DEFAULT NULL,
  `c_idpedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_itenspedido`
--

INSERT INTO `tb_itenspedido` (`id_item`, `c_idproduto`, `item_qtd`, `item_total`, `c_idpedido`) VALUES
(25, 13, 1, 15, 33),
(26, 14, 2, 22, 33),
(27, 13, 1, 15, 34),
(28, 14, 5, 32.5, 34),
(29, 13, 1, 15, 35),
(30, 14, 1, 18.5, 35),
(31, 13, 1, 15, 36),
(32, 13, 1, 15, 37),
(33, 14, 3, 10.5, 38),
(34, 13, 1, 25.5, 38),
(35, 13, 2, 30, 39),
(36, 14, 1, 33.5, 39),
(37, 14, 3, 10.5, 40),
(38, 13, 1, 25.5, 40),
(39, 13, 1, 15, 41),
(40, 15, 2, 14.72, 42),
(41, 15, 3, 22.08, 43),
(42, 15, 5, 36.8, 44),
(43, 15, 2, 14.72, 45),
(44, 15, 3, 22.08, 46),
(45, 15, 1, 7.36, 47),
(46, 16, 25, 132.75, 48),
(47, 15, 2, 147.47, 48),
(48, 16, 1, 5.31, 49),
(49, 15, 1, 12.67, 49),
(50, 16, 1, 5.31, 50),
(51, 15, 1, 12.67, 50),
(52, 16, 2, 10.62, 51),
(53, 15, 2, 25.34, 51),
(54, 16, 1, 5.31, 52),
(55, 16, 1, 5.31, 53),
(56, 16, 1, 5.31, 54),
(57, 15, 1, 12.67, 54),
(58, 16, 1, 5.31, 55),
(59, 16, 1, 5.31, 56),
(60, 15, 1, 7.36, 57),
(61, 15, 1, 7.36, 58),
(62, 15, 1, 7.36, 59),
(63, 16, 1, 12.67, 59),
(64, 15, 2, 14.72, 60),
(65, 16, 2, 25.34, 60),
(66, 16, 1, 5.31, 61),
(67, 15, 1, 12.67, 61),
(68, 15, 1, 7.36, 62),
(69, 16, 1, 5.31, 63),
(70, 15, 1, 7.36, 64),
(71, 16, 1, 5.31, 65),
(72, 16, 1, 5.31, 66),
(73, 15, 1, 7.36, 67),
(74, 15, 1, 7.36, 68),
(75, 16, 1, 12.67, 68),
(76, 16, 300, 1593, 69),
(77, 15, 1, 7.36, 70),
(78, 16, 1, 12.67, 70),
(79, 16, 1, 5.31, 71),
(80, 15, 1, 12.67, 71),
(81, 15, 1, 7.36, 72),
(82, 16, 1, 12.67, 72),
(83, 16, 1, 5.31, 73),
(84, 16, 1, 5.31, 74),
(85, 15, 1, 12.67, 74),
(86, 16, 1, 5.31, 75),
(87, 15, 1, 12.67, 75),
(88, 16, 1, 5.31, 76),
(89, 16, 1, 5.31, 77),
(90, 16, 1, 5.31, 78),
(91, 15, 1, 12.67, 78),
(92, 16, 1, 5.31, 79),
(93, 15, 1, 12.67, 79),
(94, 16, 1, 5.31, 80),
(95, 16, 1, 5.31, 81),
(96, 16, 1, 5.31, 82),
(97, 16, 1, 5.31, 83),
(98, 15, 1, 12.67, 83),
(99, 16, 4000, 21240, 84),
(100, 16, 1, 5.31, 85),
(101, 16, 2, 10.62, 86),
(102, 15, 2, 25.34, 86),
(103, 16, 1, 5.31, 87),
(104, 16, 1, 5.31, 88),
(105, 16, 1, 5.31, 89),
(106, 15, 1, 12.67, 89),
(107, 16, 1, 5.31, 90),
(108, 15, 1, 12.67, 90),
(109, 16, 500, 2655, 91),
(110, 16, 50, 265.5, 92),
(111, 15, 3, 287.58, 92),
(112, 15, 2, 14.72, 93),
(113, 16, 1, 20.03, 93),
(114, 16, 1, 5.31, 94),
(115, 16, 2, 10.62, 95),
(116, 15, 1, 17.98, 95),
(117, 16, 1, 5.31, 96),
(118, 15, 1, 12.67, 96);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `c_idfuncionario` int(11) DEFAULT NULL,
  `login_status` varchar(10) DEFAULT 'ATIVO',
  `login_tipo` varchar(45) DEFAULT NULL,
  `login_permicao` varchar(45) DEFAULT NULL,
  `login_nome` varchar(45) DEFAULT NULL,
  `login_senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `c_idfuncionario`, `login_status`, `login_tipo`, `login_permicao`, `login_nome`, `login_senha`) VALUES
(13, 15, 'ATIVO', 'ADMINISTRADOR', 'ADMINISTRADOR', 'admin', 'admin'),
(14, 16, 'DESATIVADO', 'ADMINISTRADOR', 'ADMINISTRADOR', 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `id_pedido` int(11) NOT NULL,
  `pedido_data` date DEFAULT NULL,
  `pedido_hora` time DEFAULT NULL,
  `pedido_status` varchar(10) NOT NULL DEFAULT 'PENDENTE',
  `c_idcliente` int(11) DEFAULT NULL,
  `c_idfuncionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_pedido`, `pedido_data`, `pedido_hora`, `pedido_status`, `c_idcliente`, `c_idfuncionario`) VALUES
(33, '2017-08-06', '03:20:51', 'FINALIZADO', 49, 2),
(34, '2017-08-06', '20:03:32', 'FINALIZADO', 46, 2),
(35, '2017-08-07', '00:23:52', 'FINALIZADO', 47, 2),
(36, '2017-08-07', '00:24:43', 'FINALIZADO', 49, 2),
(37, '2017-08-07', '21:39:02', 'FINALIZADO', 49, 2),
(38, '2017-08-07', '22:01:45', 'FINALIZADO', 46, 2),
(39, '2017-08-07', '22:02:47', 'FINALIZADO', 49, 2),
(40, '2017-08-07', '22:13:29', 'FINALIZADO', 46, 2),
(41, '2017-08-07', '22:14:16', 'FINALIZADO', 49, 2),
(42, '2017-08-12', '01:47:57', 'FINALIZADO', 51, 2),
(43, '2017-08-12', '18:56:40', 'FINALIZADO', 51, 2),
(44, '2017-08-12', '22:46:53', 'FINALIZADO', 51, 2),
(45, '2017-08-16', '20:35:04', 'FINALIZADO', 52, 2),
(46, '2017-08-16', '21:43:26', 'FINALIZADO', 52, 1),
(47, '2017-08-16', '22:02:14', 'FINALIZADO', 52, 1),
(48, '2017-08-16', '22:03:34', 'FINALIZADO', 52, 1),
(49, '2017-08-16', '22:04:43', 'FINALIZADO', 52, 1),
(50, '2017-08-18', '17:18:05', 'FINALIZADO', 52, 1),
(51, '2017-08-18', '17:18:18', 'FINALIZADO', 52, 1),
(52, '2017-08-18', '17:18:25', 'FINALIZADO', 52, 1),
(53, '2017-08-18', '17:18:33', 'FINALIZADO', 52, 1),
(54, '2017-08-18', '17:18:41', 'FINALIZADO', 52, 1),
(55, '2017-08-18', '17:19:47', 'FINALIZADO', 52, 1),
(56, '2017-08-18', '17:19:54', 'FINALIZADO', 52, 1),
(57, '2017-08-18', '17:20:02', 'FINALIZADO', 52, 1),
(58, '2017-08-18', '17:20:14', 'FINALIZADO', 52, 1),
(59, '2017-08-18', '17:20:23', 'FINALIZADO', 52, 1),
(60, '2017-08-18', '17:20:37', 'FINALIZADO', 52, 1),
(61, '2017-08-20', '00:42:52', 'FINALIZADO', 52, 1),
(62, '2017-08-20', '00:43:01', 'FINALIZADO', 52, 1),
(63, '2017-08-20', '00:43:16', 'FINALIZADO', 52, 1),
(64, '2017-08-20', '00:43:46', 'FINALIZADO', 52, 1),
(65, '2017-08-20', '00:44:09', 'FINALIZADO', 52, 1),
(66, '2017-08-20', '01:09:14', 'FINALIZADO', 52, 1),
(67, '2017-08-20', '01:09:22', 'FINALIZADO', 52, 1),
(68, '2017-08-20', '01:09:30', 'FINALIZADO', 52, 1),
(69, '2017-08-20', '01:09:42', 'FINALIZADO', 52, 1),
(70, '2017-08-20', '01:09:51', 'FINALIZADO', 52, 1),
(71, '2017-08-20', '01:09:58', 'FINALIZADO', 52, 1),
(72, '2017-08-20', '01:10:06', 'FINALIZADO', 52, 1),
(73, '2017-08-20', '01:10:28', 'FINALIZADO', 52, 1),
(74, '2017-08-20', '01:10:39', 'FINALIZADO', 52, 1),
(75, '2017-08-20', '01:10:46', 'FINALIZADO', 52, 1),
(76, '2017-08-20', '01:10:53', 'FINALIZADO', 52, 1),
(77, '2017-08-20', '01:11:01', 'FINALIZADO', 52, 1),
(78, '2017-08-20', '01:11:10', 'FINALIZADO', 52, 1),
(79, '2017-08-20', '01:11:18', 'FINALIZADO', 52, 1),
(80, '2017-08-20', '01:11:24', 'FINALIZADO', 52, 1),
(81, '2017-08-20', '01:11:36', 'FINALIZADO', 52, 1),
(82, '2017-08-20', '01:39:10', 'FINALIZADO', 52, 1),
(83, '2017-08-20', '02:55:19', 'FINALIZADO', 52, 1),
(84, '2017-08-20', '03:07:29', 'FINALIZADO', 52, 1),
(85, '2017-08-21', '00:10:43', 'FINALIZADO', 52, 15),
(86, '2017-08-23', '00:16:24', 'FINALIZADO', 52, 15),
(87, '2017-08-24', '00:40:24', 'FINALIZADO', 52, 15),
(88, '2017-08-25', '22:17:58', 'FINALIZADO', 52, 15),
(89, '2017-08-26', '02:17:22', 'FINALIZADO', 52, 15),
(90, '2017-08-27', '23:39:50', 'FINALIZADO', 52, 15),
(91, '2017-08-27', '23:55:52', 'FINALIZADO', 52, 15),
(92, '2017-08-29', '01:26:12', 'FINALIZADO', 52, 15),
(93, '2017-09-01', '00:56:01', 'FINALIZADO', 52, 15),
(94, '2017-09-01', '00:57:30', 'ENTREGA', 52, 15),
(95, '2017-09-23', '12:53:15', 'PENDENTE', 62, 15),
(96, '2017-10-01', '17:17:05', 'PENDENTE', 55, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `pessoa_nome` varchar(45) DEFAULT NULL,
  `pessoa_mae` varchar(45) DEFAULT NULL,
  `pessoa_pai` varchar(45) DEFAULT NULL,
  `pessoa_nascimento` date DEFAULT NULL,
  `pessoa_cpf` varchar(45) DEFAULT NULL,
  `pessoa_rg` varchar(45) DEFAULT NULL,
  `pessoa_email` varchar(45) DEFAULT NULL,
  `pessoa_celular` varchar(45) DEFAULT NULL,
  `pessoa_telefone` varchar(45) DEFAULT NULL,
  `c_idendereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`id_pessoa`, `pessoa_nome`, `pessoa_mae`, `pessoa_pai`, `pessoa_nascimento`, `pessoa_cpf`, `pessoa_rg`, `pessoa_email`, `pessoa_celular`, `pessoa_telefone`, `c_idendereco`) VALUES
(18, 'ZE BILINGO', 'NELIA', 'VICENTE', NULL, '111.111.111-11', 'seu bosta', 'wesley_cras@hotmail.com', '(34)-7 7777-7777', '(34)-8888-8888', 59),
(19, 'PRISICILA JOYCELI SILVA DE LIMA PEREIRA', 'NELIA', 'VICENTE', NULL, '091.171.666-16', '1341234', 'wesley_cras@hotmail.com', '(34)-7 7777-7777', '(34)-8888-8888', 58),
(20, 'LUIZ INACIO LULA DOS SANTOS', 'NELIA', 'VICENTE', NULL, '091.171.666-16', '1341234', 'wesley_cras@hotmail.com', '(34)-7 7777-7777', '(34)-8888-8888', 58),
(21, 'LUIZ INACIO LULA DOS SANTOS almeida', 'NELIA', 'VICENTE', NULL, '091.171.666-16', '1341234', 'wesley_cras@hotmail.com', '(34)-7 7777-7777', '(34)-8888-8888', 58),
(22, 'AUGUSTO LIBERATO', 'PINTINHO AMARELINHO', 'SILVIO SANTO', NULL, '134.124.123-41', '141234', 'asfasdf@sfsdf', '(12)-3 4123-4123', '(12)-3412-3412', 63),
(23, 'MARCOS ANTONIO', '2334234234\'', 'ASDFASDF', NULL, '123.123.123-12', '12312312312\'', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 64),
(24, 'buceta rosa', '2334234234\'', 'porra loca', NULL, '123.123.123-12', '12312312312\'', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 64),
(25, 'MARCOS ANTONIO da silva amarante', '2334234234\'', 'ASDFASDF', NULL, '123.123.123-12', '12312312312\'', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 66),
(26, 'WESLEY DA SILVA PEREIRA', '11111111111111', '11111111111111', NULL, '111.111.111-11', '111111111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 67),
(27, 'Manolo', 'hfhdg', 'csgfd', NULL, '111.111.111-11', 'fdgg', 'asfa@add', '(11)-1 1111-1112', '(11)-1111-1111', 68),
(28, 'manolo da silva', 'asdfa', 'asdfasdf', NULL, '111.111.111-11', 'asdfasdf\'', 'asdfasd@asdf', '(11)-1 1111-1111', '(11)-1111-1111', 69),
(29, 'WESLEY DA SILVA PEREIRA silva', '11111111', '122222222222', NULL, '111.111.111-11', '1111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', NULL),
(30, 'vanessa da mata', 'sdfsdf', 'sdfsdf', NULL, '111.111.111-11', 'sdf', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 71),
(31, 'jumelão', '111111111111', '11111111111', NULL, '111.111.111-11', '111111111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 72),
(32, 'WESLEY DA SILVA PEREIRA', '111111111111111111', '111111111111111111', NULL, '111.111.111-11', '11111111111111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 73),
(33, 'WESLEY DA SILVA PEREIRA', '111111111111111111', '111111111111111111', NULL, '111.111.111-11', '11111111111111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 73),
(34, 'WESLEY DA SILVA PEREIRA', '123412341', '2341234', NULL, '111.111.111-11', 'qwerqwer\'qwer\'q\'', '13123123@fsdfsf', '(11)-1 1111-1111', '(11)-1111-1111', 75),
(35, 'WESLEY DA SILVA PEREIRA', '123412341', '2341234', NULL, '111.111.111-11', 'qwerqwer\'qwer\'q\'', '13123123@fsdfsf', '(11)-1 1111-1111', '(11)-1111-1111', 75),
(36, 'WESLEY DA SILVA PEREIRA', '123412341', '2341234', NULL, '111.111.111-11', 'qwerqwer\'qwer\'q\'', '13123123@fsdfsf', '(11)-1 1111-1111', '(11)-1111-1111', 75),
(37, 'WESLEY DA SILVA PEREIRA', '123412341', '2341234', NULL, '111.111.111-11', 'qwerqwer\'qwer\'q\'', '13123123@fsdfsf', '(11)-1 1111-1111', '(11)-1111-1111', 75),
(38, 'WESLEY DA SILVA PEREIRA', '123412341', '2341234', NULL, '111.111.111-11', 'qwerqwer\'qwer\'q\'', '13123123@fsdfsf', '(11)-1 1111-1111', '(11)-1111-1111', 75),
(39, 'WESLEY DA SILVA PEREIRA', '123412341', '2341234', NULL, '111.111.111-11', 'qwerqwer\'qwer\'q\'', '13123123@fsdfsf', '(11)-1 1111-1111', '(11)-1111-1111', 75),
(40, 'WESLEY DA SILVA PEREIRA', '123412341', '2341234', NULL, '111.111.111-11', 'qwerqwer\'qwer\'q\'', '13123123@fsdfsf', '(11)-1 1111-1111', '(11)-1111-1111', 75),
(41, '1111111111', '111111111111', '11111111111111', NULL, '111.111.111-11', '11111111111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 82),
(42, 'WESLEY DA SILVA PEREIRA d', '11111111111', '11111111111111', NULL, '111.111.111-11', '11111111111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', NULL),
(43, 'WESLEY DA SILVA PEREIRA d', '11111111111', '11111111111111', NULL, '111.111.111-11', '11111111111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', NULL),
(44, 'WESLEY DA SILVA PEREIRA d', '11111111111', '11111111111111', NULL, '111.111.111-11', '11111111111', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', NULL),
(45, 'SILVIO SANTOS ', 'ASDFASDF', 'ASFDASF', NULL, '123.412.412-34', 'AFASDFASDF', 'asfasdf@sfsdf', '(12)-3 1231-2312', '(41)-2313-1231', 86),
(46, 'SILVIO SANTOS amaral', 'ASDFASDF', 'ASFDASF', NULL, '123.412.412-34', 'AFASDFASDF', 'asfasdf@sfsdf', '(12)-3 1231-2312', '(41)-2313-1231', 87),
(47, 'asdfasdf', 'asdfasdf', 'dsafasdf', NULL, '111.111.111-11', 'asfasdf', 'fadsfa@sdfa', '(11)-1 1111-1111', '(11)-1111-1111', 88),
(48, 'JULIO ELIAS ', '1231231231', '123123123', NULL, '123.123.123-12', '123123123', '13123123@fsdfsf', '(31)-2 3123-1231', '(13)-1231-2312', 73),
(49, 'jurandir', 'lsjdflasj', 'lsdfalskjdf', NULL, '123.412.341-23', 'asldfjaljsdf', 'asdfasd@asdf', '(12)-3 4124-3123', '(12)-3412-4123', 90),
(50, 'ALEX', 'ASDFA', 'ASDFASD', NULL, '234.132.123-12', '\'123123123\'', 'wesley_cras@hotmail.coma', '(12)-3 4123-4123', '(12)-3412-3412', 73),
(51, 'wesley manolo da silva', 'asldkfjak', 'asdfjaslkdfja', NULL, '123.412.341-23', '123412341', 'wesley_cras@hotmail.com', '(11)-1 1111-1111', '(11)-1111-1111', 92),
(52, 'PRISCILA JOSCELI', '654646', '65464', NULL, '091.154.646-54', '6465465', 'PRISCILA_JOSCILI@HOTMAIL.COM', '(32)-1 3132-1321', '(32)-1321-3213', 93),
(53, 'neoHacker', '3131', '3232', NULL, '231.321.321-32', '3213132', 'wesley_cras@hotmail.com', '(13)-2 3131-3213', '(32)-1321-3213', 58),
(54, 'michael', '12341234', '12341234', NULL, '123.412.341-23', '12341234', 'wesley_cras@hotmail.com', '(12)-1 2341-2341', '(12)-3412-3412', 95),
(55, 'El chapo', '3213213', '321321', NULL, '131.321.313-21', '32132132', '323213@31321', '(32)-1 3213-2132', '(32)-1313-2131', 58),
(56, 'aline', '12341234', '1241243123412341', NULL, '134.124.123-41', '123412412', 'QWERQWER@ASDF', '(14)-1 2341-2341', '(12)-4123-4123', 66),
(57, 'valtinho', 'asdfasd', 'asdf', NULL, '321.321.321-32', 'asdfasdf', 'fadsfa@sdfa', '(13)-2 4124-3123', '(12)-3412-3412', 98),
(58, 'MARMITA BABY', '65464', '654654', NULL, '165.645.464-65', '65464', 'asdfasd@asdf', '(12)-4 1234-1234', '(12)-3412-3412', 99),
(59, '124124', '12312', '123123', NULL, '123.123.123-12', '12312312312\'', 'wesley_cras@hotmail.com', '(12)-3 4123-4123', '(12)-3412-3412', 100),
(60, 'EQWEQWE', 'ASDFSD', 'ad', NULL, '121.213.132-13', 'af', 'wesley_cras@hotmail.com', '(13)-1 2312-3123', '(12)-3123-1231', 101),
(61, 'jumelão asdfasdf', '12341234', '12342134', NULL, '123.412.431-23', '12431234', 'wesley_cras@hotmail.com', '(12)-3 4124-3123', '(12)-3412-3412', 102),
(62, 'nome', '12312', '12312', NULL, '123.123.123-12', '123', 'wesley_cras@hotmail.com', '(12)-3 1231-2312', '(12)-3123-1231', 103),
(63, 'SILVIO SANTOS', '654', '654', NULL, '654.654.654-65', '654654654', 'QWERQWER@ASDF', '(11)-1 1111-1111', '(11)-1111-1111', 104),
(64, 'perereca gostosa', '1111111111', '111', NULL, '111.111.111-11', '11111', 'wesley_cras@hotmail.com', '(11)-1 1111-1111', '(11)-1111-1111', 105),
(65, 'WESLEY DA SILVA PEREIRA', '123412341', '2341234', NULL, '222.222.222-22', 'qwerqwer\'qwer\'q\'', 'wesley_cras@hotmail.com', '(22)-2 2222-2222', '(22)-2222-2222', 106),
(66, 'jananina', 'qrqwerqwe\'\'', 'qwerqwerqw', '1921-02-15', '111.111.111-11', '111111111', 'wesley_cras@hotmail.com', '(11)-1 1111-1111', '(11)-1111-1111', 107);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int(11) NOT NULL,
  `produto_nome` varchar(45) DEFAULT NULL,
  `produto_descri` varchar(100) DEFAULT NULL,
  `produto_valor` float DEFAULT NULL,
  `produto_status` varchar(45) DEFAULT 'ATIVO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `produto_nome`, `produto_descri`, `produto_valor`, `produto_status`) VALUES
(3, 'MARMITA GRANDE', 'MARMITA GRANDE 500 GRAMAS', 10, 'INATIVO'),
(4, 'MARMITA MÉDIA', 'MARMITA MÉDIA 300 GRAMAS ', 9, 'INATIVO'),
(5, 'MARMITA BABY', 'MARMITA 200 GRAMAS ', 20, 'INATIVO'),
(6, 'suco de groselha', 'asdf', 15, 'INATIVO'),
(7, 'MARMITA BABY 2', 'MARMITA 200 GRAMAS', 50, 'INATIVO'),
(8, 'WESLEY DA SILVA PEREIRA', '4234324', 22.34, 'INATIVO'),
(9, 'WESLEY DA SILVA PEREIRA', '4234324', 22.34, 'INATIVO'),
(10, 'sdfasdf', 'dfasdfasdf', 12.12, 'INATIVO'),
(11, 'asdfsdf', 'sdfasdfas', 12.32, 'INATIVO'),
(12, 'asdfsdf', 'sdfasdfas', 12.32, 'INATIVO'),
(13, 'MARMITA GRANDE', 'MARMITA DE 500 GRAMAS', 15, 'INATIVO'),
(14, 'SUCO DE FRUTAS DOLLY', 'GOSTOSO DE MAIS', 3.5, 'INATIVO'),
(15, 'Marmita Grande', 'MARMITA MÉDIA 300 GRAMAS', 7.36, 'ATIVO'),
(16, 'doly ', 'suco doly', 5.31, 'ATIVO');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rua`
--

CREATE TABLE `tb_rua` (
  `id_rua` int(11) NOT NULL,
  `rua_nome` varchar(45) DEFAULT NULL,
  `c_idbairro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rua`
--

INSERT INTO `tb_rua` (`id_rua`, `rua_nome`, `c_idbairro`) VALUES
(14, 'VICENTE ESTEVES DOS REIS', 10),
(15, 'AFONSO PENA', 11),
(16, 'AV. ALTINO GUIMARAES', 10),
(17, 'LIBELULA', 10),
(18, 'CHEBA', 11),
(19, 'major tobias machado', 10),
(20, 'jvjfjfi', 12),
(21, '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tb_venda`
--

CREATE TABLE `tb_venda` (
  `id_venda` int(11) NOT NULL,
  `venda_data` date DEFAULT NULL,
  `c_idpedido` int(11) DEFAULT NULL,
  `venda_valor` decimal(10,2) DEFAULT NULL,
  `venda_hora` time DEFAULT NULL,
  `tipo_venda` varchar(15) NOT NULL DEFAULT 'ENTRADA',
  `c_idfuncionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_venda`
--

INSERT INTO `tb_venda` (`id_venda`, `venda_data`, `c_idpedido`, `venda_valor`, `venda_hora`, `tipo_venda`, `c_idfuncionario`) VALUES
(4, '2017-08-16', 47, '7.36', '22:02:18', 'ENTRADA', 1),
(5, '2017-08-16', 48, '280.22', '22:03:41', 'ENTRADA', 1),
(6, '2017-08-16', 49, '17.98', '22:04:52', 'ENTRADA', 1),
(7, '2017-08-20', 52, '5.31', '02:55:25', 'ENTRADA', 1),
(8, '2017-08-20', 52, '5.31', '02:57:25', 'ENTRADA', 1),
(9, '2017-08-20', 50, '17.98', '02:57:29', 'ENTRADA', 1),
(10, '2017-08-20', 50, '17.98', '02:58:27', 'ENTRADA', 1),
(11, '2017-08-20', 51, '35.96', '03:01:50', 'ENTRADA', 1),
(12, '2017-08-20', 53, '5.31', '03:02:57', 'ENTRADA', 1),
(13, '2017-08-20', 54, '17.98', '03:03:02', 'ENTRADA', 1),
(14, '2017-08-20', 55, '5.31', '03:03:06', 'ENTRADA', 1),
(15, '2017-08-20', 56, '5.31', '03:03:10', 'ENTRADA', 1),
(16, '2017-08-20', 57, '7.36', '03:03:16', 'ENTRADA', 1),
(17, '2017-08-20', 58, '7.36', '03:03:20', 'ENTRADA', 1),
(18, '2017-08-20', 59, '20.03', '03:04:41', 'ENTRADA', 1),
(19, '2017-08-20', 60, '40.06', '03:04:45', 'ENTRADA', 1),
(20, '2017-08-20', 61, '17.98', '03:04:49', 'ENTRADA', 1),
(21, '2017-08-20', 62, '7.36', '03:04:54', 'ENTRADA', 1),
(22, '2017-08-20', 63, '5.31', '03:04:58', 'ENTRADA', 1),
(23, '2017-08-20', 64, '7.36', '03:05:07', 'ENTRADA', 1),
(24, '2017-08-20', 66, '5.31', '03:05:10', 'ENTRADA', 1),
(25, '2017-08-20', 68, '20.03', '03:05:11', 'ENTRADA', 1),
(26, '2017-08-20', 65, '5.31', '03:05:13', 'ENTRADA', 1),
(27, '2017-08-20', 67, '7.36', '03:05:15', 'ENTRADA', 1),
(28, '2017-08-20', 73, '5.31', '03:05:35', 'ENTRADA', 1),
(29, '2017-08-20', 72, '20.03', '03:05:37', 'ENTRADA', 1),
(30, '2017-08-20', 74, '17.98', '03:05:39', 'ENTRADA', 1),
(31, '2017-08-20', 76, '5.31', '03:05:44', 'ENTRADA', 1),
(32, '2017-08-20', 75, '17.98', '03:05:46', 'ENTRADA', 1),
(33, '2017-08-20', 70, '20.03', '03:05:48', 'ENTRADA', 1),
(34, '2017-08-20', 69, '1593.00', '03:05:50', 'ENTRADA', 1),
(35, '2017-08-20', 71, '17.98', '03:05:58', 'ENTRADA', 1),
(36, '2017-08-20', 77, '5.31', '03:06:00', 'ENTRADA', 1),
(37, '2017-08-20', 79, '17.98', '03:06:02', 'ENTRADA', 1),
(38, '2017-08-20', 78, '17.98', '03:06:03', 'ENTRADA', 1),
(39, '2017-08-20', 80, '5.31', '03:06:05', 'ENTRADA', 1),
(40, '2017-08-20', 82, '5.31', '03:06:10', 'ENTRADA', 1),
(41, '2017-08-20', 81, '5.31', '03:06:12', 'ENTRADA', 1),
(42, '2017-08-20', 83, '17.98', '03:06:13', 'ENTRADA', 1),
(43, '2017-08-20', 84, '21240.00', '03:07:33', 'ENTRADA', 1),
(44, '2017-08-23', 85, '5.31', '00:16:48', 'ENTRADA', 15),
(45, '2017-08-23', 86, '35.96', '00:16:50', 'ENTRADA', 15),
(46, '2017-08-24', 87, '5.31', '00:40:30', 'ENTRADA', 15),
(47, '2017-08-25', 88, '5.31', '22:18:02', 'ENTRADA', 15),
(48, '2017-08-26', 89, '17.98', '02:18:27', 'ENTRADA', 15),
(49, '2017-08-26', 89, '17.98', '02:18:47', 'ENTRADA', 15),
(50, '2017-08-27', 90, '17.98', '23:41:43', 'ENTRADA', 15),
(51, '2017-08-27', 91, '2655.00', '23:55:57', 'ENTRADA', 15),
(52, '2017-08-29', 92, '553.08', '01:26:24', 'ENTRADA', 15),
(53, '2017-09-01', 93, '34.75', '00:58:06', 'ENTRADA', 15);

-- --------------------------------------------------------

--
-- Stand-in structure for view `visao_cliente`
--
CREATE TABLE `visao_cliente` (
`id_pessoa` int(11)
,`nome` varchar(45)
,`mae` varchar(45)
,`pai` varchar(45)
,`nascimento` date
,`cpf` varchar(45)
,`rg` varchar(45)
,`email` varchar(45)
,`celular` varchar(45)
,`telefone` varchar(45)
,`c_idendereco` int(11)
,`id_endereco` int(11)
,`cidade` varchar(45)
,`uf` varchar(45)
,`rua` varchar(45)
,`c_idrua` int(11)
,`id_rua` int(11)
,`nm_rua` varchar(45)
,`c_idbairro` int(11)
,`id_bairro` int(11)
,`nm_bairro` varchar(45)
,`id_cliente` int(11)
,`dt_cadastro` date
,`cli_estatus` varchar(45)
,`c_idpessoa` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `visao_endereco`
--
CREATE TABLE `visao_endereco` (
`id_endereco` int(11)
,`end_cidade` varchar(45)
,`end_estado` varchar(45)
,`end_rua` varchar(45)
,`c_idrua` int(11)
,`id_rua` int(11)
,`rua_nome` varchar(45)
,`idbairro` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `visao_funcionario`
--
CREATE TABLE `visao_funcionario` (
`id_pessoa` int(11)
,`nome` varchar(45)
,`mae` varchar(45)
,`pai` varchar(45)
,`nascimento` date
,`cpf` varchar(45)
,`rg` varchar(45)
,`email` varchar(45)
,`celular` varchar(45)
,`telefone` varchar(45)
,`c_idendereco` int(11)
,`id_endereco` int(11)
,`cidade` varchar(45)
,`uf` varchar(45)
,`rua` varchar(45)
,`c_idrua` int(11)
,`id_rua` int(11)
,`nm_rua` varchar(45)
,`c_idbairro` int(11)
,`id_bairro` int(11)
,`nm_bairro` varchar(45)
,`id_funcionario` int(11)
,`dt_cadastro` varchar(45)
,`fun_estatus` varchar(45)
,`tem_usuario` int(11)
,`c_idpessoa` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `visao_pedido`
--
CREATE TABLE `visao_pedido` (
`id_pedido` int(11)
,`data_pedido` date
,`hora_pedido` time
,`pedido_status` varchar(10)
,`c_idcliente` int(11)
,`c_idfuncionario` int(11)
,`id_item` int(11)
,`c_idproduto` int(11)
,`item_qtd` float
,`item_total` float
,`c_idpedido` int(11)
,`id_produto` int(11)
,`produto_nome` varchar(45)
,`produto_descri` varchar(100)
,`produto_valor` float
,`produto_status` varchar(45)
,`id_pessoa` int(11)
,`pessoa_nome` varchar(45)
,`c_idendereco` int(11)
,`id_endereco` int(11)
,`end_cidade` varchar(45)
,`end_estado` varchar(45)
,`end_rua` varchar(45)
,`c_idrua` int(11)
,`id_rua` int(11)
,`id_cliente` int(11)
,`id_funcionario` int(11)
,`rua_nome` varchar(45)
,`id_bairro` int(11)
,`bairro_nome` varchar(45)
);

-- --------------------------------------------------------

--
-- Structure for view `visao_cliente`
--
DROP TABLE IF EXISTS `visao_cliente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `visao_cliente`  AS  select `p`.`id_pessoa` AS `id_pessoa`,`p`.`pessoa_nome` AS `nome`,`p`.`pessoa_mae` AS `mae`,`p`.`pessoa_pai` AS `pai`,`p`.`pessoa_nascimento` AS `nascimento`,`p`.`pessoa_cpf` AS `cpf`,`p`.`pessoa_rg` AS `rg`,`p`.`pessoa_email` AS `email`,`p`.`pessoa_celular` AS `celular`,`p`.`pessoa_telefone` AS `telefone`,`p`.`c_idendereco` AS `c_idendereco`,`e`.`id_endereco` AS `id_endereco`,`e`.`end_cidade` AS `cidade`,`e`.`end_estado` AS `uf`,`e`.`end_rua` AS `rua`,`e`.`c_idrua` AS `c_idrua`,`r`.`id_rua` AS `id_rua`,`r`.`rua_nome` AS `nm_rua`,`r`.`c_idbairro` AS `c_idbairro`,`b`.`id_bairro` AS `id_bairro`,`b`.`bairro_nome` AS `nm_bairro`,`c`.`id_cliente` AS `id_cliente`,`c`.`cliente_cadastro` AS `dt_cadastro`,`c`.`cliente_status` AS `cli_estatus`,`c`.`c_idpessoa` AS `c_idpessoa` from ((((`tb_cliente` `c` join `tb_pessoa` `p` on((`p`.`id_pessoa` = `c`.`c_idpessoa`))) join `tb_endereco` `e` on((`p`.`c_idendereco` = `e`.`id_endereco`))) join `tb_rua` `r` on((`e`.`c_idrua` = `r`.`id_rua`))) join `tb_bairro` `b` on((`r`.`c_idbairro` = `b`.`id_bairro`))) ;

-- --------------------------------------------------------

--
-- Structure for view `visao_endereco`
--
DROP TABLE IF EXISTS `visao_endereco`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `visao_endereco`  AS  select `e`.`id_endereco` AS `id_endereco`,`e`.`end_cidade` AS `end_cidade`,`e`.`end_estado` AS `end_estado`,`e`.`end_rua` AS `end_rua`,`e`.`c_idrua` AS `c_idrua`,`r`.`id_rua` AS `id_rua`,`r`.`rua_nome` AS `rua_nome`,`r`.`c_idbairro` AS `idbairro` from (`tb_endereco` `e` join `tb_rua` `r` on((`e`.`c_idrua` = `r`.`id_rua`))) ;

-- --------------------------------------------------------

--
-- Structure for view `visao_funcionario`
--
DROP TABLE IF EXISTS `visao_funcionario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `visao_funcionario`  AS  select `p`.`id_pessoa` AS `id_pessoa`,`p`.`pessoa_nome` AS `nome`,`p`.`pessoa_mae` AS `mae`,`p`.`pessoa_pai` AS `pai`,`p`.`pessoa_nascimento` AS `nascimento`,`p`.`pessoa_cpf` AS `cpf`,`p`.`pessoa_rg` AS `rg`,`p`.`pessoa_email` AS `email`,`p`.`pessoa_celular` AS `celular`,`p`.`pessoa_telefone` AS `telefone`,`p`.`c_idendereco` AS `c_idendereco`,`e`.`id_endereco` AS `id_endereco`,`e`.`end_cidade` AS `cidade`,`e`.`end_estado` AS `uf`,`e`.`end_rua` AS `rua`,`e`.`c_idrua` AS `c_idrua`,`r`.`id_rua` AS `id_rua`,`r`.`rua_nome` AS `nm_rua`,`r`.`c_idbairro` AS `c_idbairro`,`b`.`id_bairro` AS `id_bairro`,`b`.`bairro_nome` AS `nm_bairro`,`c`.`id_funcionario` AS `id_funcionario`,`c`.`fun_cadastro` AS `dt_cadastro`,`c`.`func_status` AS `fun_estatus`,`c`.`tem_usuario` AS `tem_usuario`,`c`.`c_idpessoa` AS `c_idpessoa` from ((((`tb_funcionario` `c` join `tb_pessoa` `p` on((`p`.`id_pessoa` = `c`.`c_idpessoa`))) join `tb_endereco` `e` on((`p`.`c_idendereco` = `e`.`id_endereco`))) join `tb_rua` `r` on((`e`.`c_idrua` = `r`.`id_rua`))) join `tb_bairro` `b` on((`r`.`c_idbairro` = `b`.`id_bairro`))) ;

-- --------------------------------------------------------

--
-- Structure for view `visao_pedido`
--
DROP TABLE IF EXISTS `visao_pedido`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `visao_pedido`  AS  select `pe`.`id_pedido` AS `id_pedido`,`pe`.`pedido_data` AS `data_pedido`,`pe`.`pedido_hora` AS `hora_pedido`,`pe`.`pedido_status` AS `pedido_status`,`pe`.`c_idcliente` AS `c_idcliente`,`pe`.`c_idfuncionario` AS `c_idfuncionario`,`it`.`id_item` AS `id_item`,`it`.`c_idproduto` AS `c_idproduto`,`it`.`item_qtd` AS `item_qtd`,`it`.`item_total` AS `item_total`,`it`.`c_idpedido` AS `c_idpedido`,`pr`.`id_produto` AS `id_produto`,`pr`.`produto_nome` AS `produto_nome`,`pr`.`produto_descri` AS `produto_descri`,`pr`.`produto_valor` AS `produto_valor`,`pr`.`produto_status` AS `produto_status`,`p`.`id_pessoa` AS `id_pessoa`,`p`.`pessoa_nome` AS `pessoa_nome`,`p`.`c_idendereco` AS `c_idendereco`,`e`.`id_endereco` AS `id_endereco`,`e`.`end_cidade` AS `end_cidade`,`e`.`end_estado` AS `end_estado`,`e`.`end_rua` AS `end_rua`,`e`.`c_idrua` AS `c_idrua`,`r`.`id_rua` AS `id_rua`,`cl`.`id_cliente` AS `id_cliente`,`f`.`id_funcionario` AS `id_funcionario`,`e`.`end_rua` AS `rua_nome`,`b`.`id_bairro` AS `id_bairro`,`b`.`bairro_nome` AS `bairro_nome` from ((((((((`tb_itenspedido` `it` join `tb_pedido` `pe` on((`it`.`c_idpedido` = `pe`.`id_pedido`))) join `tb_produto` `pr` on((`it`.`c_idproduto` = `pr`.`id_produto`))) join `tb_cliente` `cl` on((`cl`.`id_cliente` = `pe`.`c_idcliente`))) join `tb_funcionario` `f` on((`pe`.`c_idfuncionario` = `f`.`id_funcionario`))) join `tb_pessoa` `p` on((`cl`.`c_idpessoa` = `p`.`id_pessoa`))) join `tb_endereco` `e` on((`p`.`c_idendereco` = `e`.`id_endereco`))) join `tb_rua` `r` on((`e`.`c_idrua` = `r`.`id_rua`))) join `tb_bairro` `b` on((`r`.`c_idbairro` = `b`.`id_bairro`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bairro`
--
ALTER TABLE `tb_bairro`
  ADD PRIMARY KEY (`id_bairro`);

--
-- Indexes for table `tb_caixa`
--
ALTER TABLE `tb_caixa`
  ADD PRIMARY KEY (`id_caixa`),
  ADD KEY `caixa_x_fucionario_idx` (`c_idfuncionario`),
  ADD KEY `index3` (`c_idpedido`);

--
-- Indexes for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `index2` (`c_idpessoa`);

--
-- Indexes for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `index2` (`c_idrua`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `index2` (`c_idpessoa`);

--
-- Indexes for table `tb_itenspedido`
--
ALTER TABLE `tb_itenspedido`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `index2` (`c_idproduto`),
  ADD KEY `index3` (`c_idpedido`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `index2` (`c_idfuncionario`);

--
-- Indexes for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `index2` (`c_idcliente`),
  ADD KEY `index3` (`c_idfuncionario`);

--
-- Indexes for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`id_pessoa`),
  ADD KEY `index2` (`c_idendereco`);

--
-- Indexes for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `tb_rua`
--
ALTER TABLE `tb_rua`
  ADD PRIMARY KEY (`id_rua`),
  ADD KEY `index2` (`c_idbairro`);

--
-- Indexes for table `tb_venda`
--
ALTER TABLE `tb_venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `index2` (`c_idpedido`),
  ADD KEY `index3` (`c_idfuncionario`),
  ADD KEY `asdf` (`c_idfuncionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bairro`
--
ALTER TABLE `tb_bairro`
  MODIFY `id_bairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_caixa`
--
ALTER TABLE `tb_caixa`
  MODIFY `id_caixa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_itenspedido`
--
ALTER TABLE `tb_itenspedido`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_rua`
--
ALTER TABLE `tb_rua`
  MODIFY `id_rua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_venda`
--
ALTER TABLE `tb_venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_caixa`
--
ALTER TABLE `tb_caixa`
  ADD CONSTRAINT `caixa_x_fucionario` FOREIGN KEY (`c_idfuncionario`) REFERENCES `tb_funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `caixa_x_pedido` FOREIGN KEY (`c_idpedido`) REFERENCES `tb_pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD CONSTRAINT `cliente_x_pessoa` FOREIGN KEY (`c_idpessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD CONSTRAINT `endereco_x_rua` FOREIGN KEY (`c_idrua`) REFERENCES `tb_rua` (`id_rua`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD CONSTRAINT `pessoa_x_funcionario` FOREIGN KEY (`c_idpessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_itenspedido`
--
ALTER TABLE `tb_itenspedido`
  ADD CONSTRAINT `item_x_pedido` FOREIGN KEY (`c_idpedido`) REFERENCES `tb_pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `item_x_produto` FOREIGN KEY (`c_idproduto`) REFERENCES `tb_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `login_x_funcionario` FOREIGN KEY (`c_idfuncionario`) REFERENCES `tb_funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `pedido_x_cliente` FOREIGN KEY (`c_idcliente`) REFERENCES `tb_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pedido_x_funcionario` FOREIGN KEY (`c_idfuncionario`) REFERENCES `tb_funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD CONSTRAINT `pessoa_x_endereco` FOREIGN KEY (`c_idendereco`) REFERENCES `tb_endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_rua`
--
ALTER TABLE `tb_rua`
  ADD CONSTRAINT `rua_x_bairro` FOREIGN KEY (`c_idbairro`) REFERENCES `tb_bairro` (`id_bairro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_venda`
--
ALTER TABLE `tb_venda`
  ADD CONSTRAINT `venda_x_funcionario` FOREIGN KEY (`c_idfuncionario`) REFERENCES `tb_funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `venda_x_pedido` FOREIGN KEY (`c_idpedido`) REFERENCES `tb_pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
