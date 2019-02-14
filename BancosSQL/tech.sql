-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Fev-2019 às 15:18
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `data` date DEFAULT NULL,
  `hora` datetime(6) DEFAULT NULL,
  `descricao_problema` text,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `fk_id_empresa` double DEFAULT NULL,
  `fk_usuario` double DEFAULT NULL,
  `id_agendamento` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `codigo` int(11) NOT NULL,
  `arquivo` varchar(40) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `email`, `comentario`) VALUES
(1, 'Teste', 'tester@gmail.com', 'Só comentando...'),
(2, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sitema 17'),
(3, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sistema 20'),
(4, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sistema 21'),
(5, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sistema 22'),
(6, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o sistema 23'),
(7, 'Luiz', 'luizcanf@gmail.com', 'NÃ£o funciona! NOTA 0!!'),
(8, 'Cleiton', 'cleitonbraga56@gmail.com', 'Faz isso comigo n, velho'),
(9, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando sem o SELECT * FROM'),
(10, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando o alert do cadastro'),
(11, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios'),
(12, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 2'),
(13, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 3'),
(14, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 4'),
(15, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 5'),
(16, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 6'),
(17, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 7'),
(18, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 8'),
(19, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 9'),
(20, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 10'),
(21, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 11'),
(22, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 12'),
(23, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 14'),
(24, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 15'),
(25, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 16'),
(26, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 17\r\n'),
(27, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 18'),
(28, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 19'),
(29, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 19'),
(30, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 20'),
(31, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 21'),
(32, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 22'),
(33, 'Cleiton', 'cleitonbraga56@gmail.com', 'Testando a exibiÃ§Ã£o de comentÃ¡rios 23'),
(34, 'UsuÃ¡rio', 'user@gmail.com', 'Testando para ver se ainda funciona'),
(35, '', '', ''),
(36, 'UsuÃ¡rio', 'user@gmail.com', 'Testando para ver se ainda funciona'),
(37, 'UsuÃ¡rio', 'user@gmail.com', 'Sistema de comentÃ¡rios 1.0'),
(38, '', '', ''),
(39, '', '', ''),
(40, 'Cleiton', 'user@gmail.com', 'Sistema de comentÃ¡rios 1.0'),
(41, 'Cleiton', 'cleitonbraga56@gmail.com', 'nmbvdajkda dada dajkdaj sda'),
(42, '', 'cleitonbraga56@gmail.com', 'nmbvdajkda dada dajkdaj sda'),
(43, 'Cleiton', '', 'nmbvdajkda dada dajkdaj sda'),
(44, 'Roger', 'cleitonbraga56@gmail.com', 'oi guys'),
(45, 'CGLM', 'geral@gmail.com', 'Todos os nossos sistemas estÃ£o funcionando!'),
(46, 'CGLM', 'geral@gmail.com', 'Todos os nossos sistemas estÃ£o funcionando!'),
(47, 'Real Madrid', 'RealMadridOfficial@gmail.com', 'O Real Madrid Club de FÃºtbol, mais conhecido como Real Madrid ou simplesmente Real, Ã© um clube polidesportivo espanhol, com sede em Madrid. Foi fundado oficialmente no dia 6 de marÃ§o de 1902 pelos irmÃ£os Juan PadrÃ³s e Carlos PadrÃ³s, com o nome de (Sociedad) Madrid Foot-Ball Club.[2][nota 1] Iniciado como um clube de futebol, logo adquiriu um carÃ¡ter polidesportivo que o levou a desenvolver vÃ¡rios departamentos esportivos dentro da entidade, embora a maioria destes departamentos estejam desativados atualmente. Participa da Primeira DivisÃ£o da Espanha, a mais alta categoria do Campeonato Espanhol de Futebol, desde a sua fundaÃ§Ã£o, em 1929, sendo um dos trÃªs Ãºnicos clubes que nunca foram rebaixados, assim como o Athletic Club e o Barcelona.[3]\r\n\r\nDisputa suas partidas como mandante desde 1947 no EstÃ¡dio Santiago BernabÃ©u, anteriormente chamado Novo EstÃ¡dio de ChamartÃ­n, que conta com uma capacidade de 81.044 espectadores, o terceiro maior em capacidade da Europa. Ã‰ um dos clubes mais populares de seu paÃ­s.[4][5] A relevÃ¢ncia do clube, que se estende para fora da Espanha tornando-o um dos mais aclamados mundialmente,[6] e uma das entidades esportivas de maior valor de mercado e detentora de uma das maiores receitas anuais.[7][8] A propriedade do clube recai sobre seus mais de 100.000 mil membros associados e organizados, sendo um dos quatro Ãºnicos clubes profissionais da Espanha cuja entidade jurÃ­dica nÃ£o Ã© a de Sociedade AnÃ´nima Esportiva (S. A. D.).['),
(48, 'Instituto Federal Fluminense', 'institutoiff@gmail.com', 'Alunos, hoje serÃ¡ mais um glorioso dia de aula. Aproveitem!!!'),
(49, 'Alunos do IFF', 'alunosIFF@gmail.com', 'Eu sÃ³ quero sair daqui e ter longas fÃ©rias. Faz isso comigo nÃ£o, velho. '),
(50, 'Testando', 'cleitonbraga56@gmail.com', 'Testando por dÃºvida'),
(51, 'Cleitinho', 'cleitonbraga56@gmail.com', 'Fiz uma bagunÃ§a. Quero saber se ainda funciona'),
(52, 'Nome:', 'dfh', 'sdg'),
(53, 'Oi', 'Rapaziada!', 'Tudo bem com vocÃªs?!'),
(54, 'Cleiton', 'de Jesus', 'Braga'),
(55, 'Luiz', 'Cesar', 'Semana que vem Ã© o visto'),
(56, 'Luiz', 'Cesar', 'Semana que vem Ã© o visto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `idemp` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `endereco` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `fund` varchar(10) NOT NULL,
  `creat` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `sobre` varchar(1000) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`idemp`, `username`, `cnpj`, `senha`, `endereco`, `email`, `fund`, `creat`, `telefone`, `sobre`, `nome`, `estado`, `bairro`, `cidade`) VALUES
(1, 'TechFix', '123', '123', 'rua', 'fix@tech.com', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` double NOT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero_local` decimal(4,0) DEFAULT NULL,
  `cep` decimal(8,0) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `pais`, `estado`, `cidade`, `rua`, `numero_local`, `cep`, `complemento`) VALUES
(887454654, 'europa', 'ohio', 'Quissamã', 'visconde de quissamã', '100', '28735000', 'em frente ao iff'),
(65165165, 'PAIS', 'ESTADO', 'CIDADE', 'NUMERO ZERO', '0', '98652111', 'NENHUM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum`
--

CREATE TABLE `forum` (
  `texto` longtext,
  `video` longblob,
  `foto` longblob,
  `id_forum` double NOT NULL,
  `fk_empresa` double DEFAULT NULL,
  `fk_usuario` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` double NOT NULL,
  `marca` varchar(10) DEFAULT NULL,
  `problema` text,
  `estado_preservacao` varchar(10) DEFAULT NULL,
  `tipo_equipamento` varchar(20) DEFAULT NULL,
  `fk_usuario` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `marca`, `problema`, `estado_preservacao`, `tipo_equipamento`, `fk_usuario`) VALUES
(362151651, 'positivo', 'Aquecendo Muito', 'Novo', 'Notebook', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `serv` varchar(30) NOT NULL,
  `descr` varchar(2000) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `id_serv` int(11) NOT NULL,
  `fkemp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`serv`, `descr`, `preco`, `id_serv`, `fkemp`) VALUES
('fdbgfb', 'gbfg', 'gfbgb', 15, '0'),
('rter', 'gerg', 'reg', 16, '0'),
('f', 'r', 'r', 17, ''),
('g', 'g', 't', 18, '1'),
('Funciona', 'disgraça', '34', 19, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(100) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cidade` varchar(15) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cod_usuario` int(11) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `dt_nascimento`, `email`, `estado`, `cidade`, `senha`, `cpf`, `rg`, `cod_usuario`, `username`) VALUES
('helloworld', NULL, 'nein@gmail.com', NULL, NULL, '123', NULL, NULL, 1, 'hittler'),
('SEUQENCIA', NULL, 'flIFFamengo@gmail.com', NULL, NULL, '12546563', NULL, NULL, 2, ''),
('algumnome', NULL, 'EFSDWEH@gmail.com', NULL, NULL, '12546563', NULL, NULL, 3, ''),
('BRFJJKFe', NULL, 'EFSTRTGHH@gmail.com', NULL, NULL, '12546563', NULL, NULL, 4, ''),
('BRFJJKFSFFFe', NULL, 'EFSTRTGHTDGRSDGH@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 5, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 6, ''),
('OUTLfdffK', NULL, 'Gkbhjhj@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 7, ''),
('OUTLfdNNNNNNNNNNNNNNNNNffK', NULL, 'GkbNNNNNNhjhj@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 8, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 9, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 10, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 11, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 12, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 13, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, ''),
('2018-03-01', NULL, 'gfthgfh@gmail.com', NULL, NULL, 'frgftgfthgfh', NULL, NULL, 16, ''),
(NULL, NULL, 'FUNCIONA@gmail.com', NULL, NULL, 'DGHGFHFH', NULL, NULL, 17, ''),
('FUNCIONADISGRACA', NULL, 'FUNCIONADISGRACA@GMAIL.COM', NULL, NULL, 'DFHDFJKHDFJKG', NULL, NULL, 18, ''),
('PRIMEIROCLIENTEBIANKA', NULL, 'UYGYUH@GMAIL.COM', NULL, NULL, 'RTHGFRBHBGF', NULL, NULL, 19, ''),
('JOSEVALDO', NULL, 'SONSERINA.NAO.DRAGO@GMAIL.COM', NULL, NULL, 'BERRO123', NULL, NULL, 20, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 21, ''),
('Jonny', NULL, 'jonny@gmailo.com', NULL, NULL, 'gfghjhjgh', NULL, NULL, 22, ''),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, ''),
('khjkhjkh', NULL, 'gdjk@gmail.com', NULL, NULL, 'jfljrflkd', NULL, NULL, 24, ''),
('FUNCIONANDO', NULL, 'FUNCIONANDOAGORA@GMAIL.COM', NULL, NULL, 'DJFREFKLEJ', NULL, NULL, 25, ''),
('kjhkjhjk', NULL, 'jdfjkdjh@gmail.com', NULL, NULL, 'rwfjhljfdl', NULL, NULL, 26, ''),
('OUTLOOK', NULL, 'GMAIL@gmail.com', NULL, NULL, '125F52546563', NULL, NULL, 27, ''),
('FDGBFB', NULL, 'gdjFk@gmail.com', 'RJ', NULL, 'jfljrflkd', NULL, NULL, 28, ''),
('testando', NULL, 'testando@gmail.com', 'Rio de Janeiro', NULL, '123123', NULL, NULL, 29, ''),
('giyukyuk', NULL, 'uykyukuy@gmail.com', '8978987', NULL, 'jfljrflkd', NULL, NULL, 30, ''),
('Gabriel souza', NULL, 'cadastrando@gmail.com', 'Rio De Janeiro', NULL, 'senhasenhando', NULL, NULL, 31, ''),
('name', NULL, 'PASSEI@gmail.com', 'RJ', NULL, 'senha', '5874126982', '2365412879', 32, ''),
('Data', NULL, 'gmaill@hotmail.com', 'RJ', NULL, '123', '9856321470', '9856321470', 33, ''),
('Nome', NULL, 'mein@gmail.com', 'Rj', NULL, 'senha', '12345678', '87654321', 34, ''),
('Cadastre', NULL, 'ajn@gmail.com', 'RJ', 'QuissamÃ£', 'senha', '9876543', '12345678', 35, ''),
('Marcos', NULL, 'marquinhos2@gmail.com', 'RJ', 'quissamÃ£', '123', '12345678923', '13642371368', 36, 'Marcos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD KEY `id_agendamento` (`id_agendamento`);

--
-- Indexes for table `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idemp`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_serv`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idemp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id_serv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
