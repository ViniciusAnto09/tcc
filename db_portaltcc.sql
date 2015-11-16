-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2015 às 01:54
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_portaltcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_colaboracao`
--

CREATE TABLE IF NOT EXISTS `tb_colaboracao` (
  `id_colaboracao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text COLLATE latin1_general_ci NOT NULL,
  `dataCriacao` datetime NOT NULL,
  `dataAceite` datetime DEFAULT NULL,
  `status` char(1) COLLATE latin1_general_ci NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_trabalho` int(10) NOT NULL,
  PRIMARY KEY (`id_colaboracao`),
  KEY `FKtb_colabor667850` (`id_usuario`,`id_trabalho`),
  FULLTEXT KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_colaboracao`
--

INSERT INTO `tb_colaboracao` (`id_colaboracao`, `descricao`, `dataCriacao`, `dataAceite`, `status`, `id_usuario`, `id_trabalho`) VALUES
(1, '<p>Bom Vin&iacute;cius estava lendo seu trabalho e percebi uma duv&iacute;da da sua parte ent&atilde;o</p>\r\n<p>Os grupos de processos do gerenciamento de projetos s&atilde;o 5: In&iacute;cio, Planejamento, Execu&ccedil;&atilde;o, Monitoramento e Controle, Encerramento</p>', '2015-11-15 19:09:02', NULL, 'O', 5, 25),
(2, '<p>Bom Vin&iacute;cius as dicas que eu te dou e , no slide imagem bonita e no maximo 4 palavras, e treinar muita a apresenta&ccedil;&atilde;o.</p>', '2015-11-15 19:16:00', NULL, 'O', 6, 26),
(3, '<p>Obrigado Jos&eacute; Corr&ecirc;a me ajudou muito</p>', '2015-11-15 19:19:46', NULL, 'O', 3, 25),
(4, '<p>Obrigado Filipe</p>', '2015-11-15 19:20:25', NULL, 'O', 3, 26),
(5, '<p>Gostei da ide&iacute;a Vin&iacute;cius tente pesquisar sobre sistemas colaborativos vai te ajudar muito</p>', '2015-11-15 21:59:37', NULL, 'O', 5, 27),
(6, '<p>Ent&atilde;o como o Jos&eacute; Corr&ecirc;a disse para voc&ecirc; procurar sobre sistemas colaborativos, conhe&ccedil;o um livro muito bom do Mariano Pimentel e do Hugo Fuks cham-se Sistemas Colaborativos , tenta procurar na internet ou compra ele vale a pena.</p>', '2015-11-15 22:06:05', NULL, 'O', 4, 27),
(7, '<p>Ent&atilde;o atraves das dicas que voc&ecirc;s me deram, fiz algumas pesquisas na internet e no livro recomendado pelo Carlos , conseguir ver outros problemas que o sistemas colaborativos conseguem possibilita resolver, que os integrantes de um grupo n&atilde;o necessitam estar em um mesmo espa&ccedil;o fisico para realizar o trabalho, e como minha ideia e fazer um sistema Web ele encaixa direitinho.</p>\r\n<p>Ent&atilde;o vou come&ccedil;ar os desenvolvimentos nas proximas semanas alguma dica para me dar?</p>', '2015-11-15 22:17:18', NULL, 'O', 3, 27),
(8, '<p>Ent&atilde;o Vin&iacute;cius como voc&ecirc; vai come&ccedil;ar o desenvolvimento , lhe recomendo a utiliza&ccedil;&atilde;o do PUA - processo unificado agil , aqui est&aacute; um site onde voc&ecirc; vai ter uma vis&atilde;o melhor dessa metodologia: <a href="http://www.ambysoft.com/unifiedprocess/agileUP.html#SuggestedReading">http://www.ambysoft.com/unifiedprocess/agileUP.html#SuggestedReading</a></p>\r\n<p>Essa metodologia vai permite maior flexibilidade na hora do seu desenvolvimento, da uma olhada nesse site que te passei e qualquer duvida estou a disposi&ccedil;&atilde;o</p>', '2015-11-15 22:23:47', NULL, 'O', 5, 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_trabalho`
--

CREATE TABLE IF NOT EXISTS `tb_trabalho` (
  `id_trabalho` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `descricao` text COLLATE latin1_general_ci NOT NULL,
  `token` varchar(10) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_trabalho`),
  UNIQUE KEY `token` (`token`),
  KEY `FKtb_trabalh834859` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `tb_trabalho`
--

INSERT INTO `tb_trabalho` (`id_trabalho`, `id_usuario`, `nome`, `descricao`, `token`) VALUES
(25, 3, 'Gerência de projetos', '<p>Estou desenvolvendo um trabalho sobre ger&ecirc;ncia de projeto ja defini oque &eacute; a ger&ecirc;ncia como mostrado abaixo:</p>\r\n<p style="text-align: justify;">O Gerenciamento de Projetos, portanto, &eacute; a aplica&ccedil;&atilde;o de conhecimentos, habilidades e t&eacute;cnicas para a execu&ccedil;&atilde;o de projetos de forma efetiva e eficaz. Trata-se de uma compet&ecirc;ncia estrat&eacute;gica para organiza&ccedil;&otilde;es, permitindo com que elas unam os resultados dos projetos com os objetivos do neg&oacute;cio &ndash; e, assim, melhor competir em seus mercados.</p>\r\n<p>so que estou precisando saber qual s&atilde;o os grupos de processos do gerenciamento de projetos?</p>', 'y6DwZCS6jo'),
(26, 3, 'Trabalho de PI Pitch', '<p>Estou com algumas duvidas de como preparar uma apresenta&ccedil;&atilde;o de pitch, queria algumas dicas de como montar meu slide para apresenta&ccedil;&atilde;o.</p>', '1Ye8hEPBW8'),
(27, 3, 'Trabalho de conclusão de curso', '<p>Estou penssando em desenvolver um sistema de colabora&ccedil;&atilde;o para trabalhos acad&ecirc;micos. onde alunos vao poder expor seus trabalhos, e receber colabora&ccedil;&otilde;es para auxiliar no desenvolvimento desses trabalhos. Al&eacute;m disso tenho a ideia de professor poder monitorar esses trabalhos quando eles forem aplicados em grupo, por que o que mais acontece e nesses trabalhos de grupo s&atilde;o pessoas que fazem de mais e outra n&atilde;o que fazem nada.</p>', 'CkNDkuDBLg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `imagem` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `bio` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome`, `email`, `telefone`, `senha`, `imagem`, `bio`) VALUES
(3, 'Vinícius Antônio', 'viniciusanto09@gmail.com', '(34)99172-8343', 'd033e22ae348aeb5660fc2140aec35850c4da997', '../../assets/img/uploads/9de4a0412c799698ff0dc24bea1ec3f4.jpg', 'Aluno do Curso de Sistema de informação 8º período no UNIPAM - Centro Universitário de Patos de Minas'),
(4, 'Carlos Augusto', 'carlostwmf@gmail.com', '(34) 9174-8856', 'd033e22ae348aeb5660fc2140aec35850c4da997', '../../assets/img/uploads/a9cc0040c24dddfd384019a9477f680f.png', 'Aluno da UNIPAM - Centro Universitário de Patos de Minas'),
(5, 'José Corrêa', 'jcorrea@unipam.edu.br', '(34)99999-9999', '482d51600ff750cbe5d5e81ac21e4dc9eedcd4f5', '../../assets/img/uploads/9cf89bcaac1ba5209cea7a3e588638a2.jpg', 'Professor no Curso de Sistemas de Informação no Centro Universitário de Patos de Minas - UNIPAM'),
(6, 'Filipe Guelber', 'filipegm@unipam.edu.br', '(34)99999-9999', '083492e00133365f6cb687f28d18f33c902ff499', '../../assets/img/uploads/2b9c91b826a8f2087e1b76ad37a5f62f.jpg', 'Professor no Curso de Sistemas de Informação no Centro Universitário de Patos de Minas - UNIPAM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_trabalho`
--

CREATE TABLE IF NOT EXISTS `tb_usuario_trabalho` (
  `id_usuario` int(10) NOT NULL,
  `id_trabalho` int(10) NOT NULL,
  PRIMARY KEY (`id_usuario`,`id_trabalho`),
  KEY `FKtb_usuario392215` (`id_usuario`),
  KEY `FKtb_usuario953120` (`id_trabalho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tb_usuario_trabalho`
--

INSERT INTO `tb_usuario_trabalho` (`id_usuario`, `id_trabalho`) VALUES
(3, 25),
(3, 26),
(3, 27),
(4, 27),
(5, 25),
(5, 27),
(6, 26);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_colaboracao`
--
ALTER TABLE `tb_colaboracao`
  ADD CONSTRAINT `FKtb_colabor667850` FOREIGN KEY (`id_usuario`, `id_trabalho`) REFERENCES `tb_usuario_trabalho` (`id_usuario`, `id_trabalho`);

--
-- Limitadores para a tabela `tb_trabalho`
--
ALTER TABLE `tb_trabalho`
  ADD CONSTRAINT `FKtb_trabalh834859` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`);

--
-- Limitadores para a tabela `tb_usuario_trabalho`
--
ALTER TABLE `tb_usuario_trabalho`
  ADD CONSTRAINT `FKtb_usuario392215` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`),
  ADD CONSTRAINT `FKtb_usuario953120` FOREIGN KEY (`id_trabalho`) REFERENCES `tb_trabalho` (`id_trabalho`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
