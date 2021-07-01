-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jul-2021 às 03:12
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pente-magico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursoformando`
--

CREATE TABLE `cursoformando` (
  `idcursoformando` int(10) UNSIGNED NOT NULL,
  `formando_idformando` int(11) NOT NULL,
  `cursos_idcursos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursoformando`
--

INSERT INTO `cursoformando` (`idcursoformando`, `formando_idformando`, `cursos_idcursos`) VALUES
(1, 7, 8),
(2, 8, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `idcursos` int(11) NOT NULL,
  `nome-curso` varchar(45) NOT NULL,
  `preco` varchar(45) NOT NULL,
  `duracao` varchar(200) DEFAULT NULL,
  `lotacao` varchar(45) DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `data-de-inicio-curso` varchar(45) DEFAULT NULL,
  `data` date NOT NULL,
  `dataupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `desc_resumida` varchar(100) DEFAULT NULL,
  `desc_detalhada` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`idcursos`, `nome-curso`, `preco`, `duracao`, `lotacao`, `lugar`, `data-de-inicio-curso`, `data`, `dataupdate`, `desc_resumida`, `desc_detalhada`) VALUES
(7, 'Penteados casuais', '5000', '45 dias', '10', 'Matola, bairro t3- Salao Rita', '03-09-2021', '0000-00-00', '2021-06-30 23:25:26', 'Neste curso, voce ira aprender tecnicas para ', 'Neste curso, voce ira aprender tecnicas para '),
(8, 'Auto-Maquilhagem', '3000', '15 dias', '20', 'Boane, Bairro Juba-Irina Croche', '04-10-2021', '0000-00-00', '2021-06-30 23:25:26', 'Neste curso, voce ira aprender tecnicas para ', 'Neste curso, voce ira aprender tecnicas para '),
(9, 'Texturizacao', '2000', '5 dias', '10', 'Matola, bairro t3- Salao Rita', '03-09-2021', '0000-00-00', '2021-06-30 23:25:26', '03/09/2021', '03/09/2021');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formador`
--

CREATE TABLE `formador` (
  `idformador` int(11) NOT NULL,
  `nomeformador` varchar(45) DEFAULT NULL,
  `especialidade` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formador`
--

INSERT INTO `formador` (`idformador`, `nomeformador`, `especialidade`, `endereco`, `cidade`, `email`, `telefone`) VALUES
(5, 'Marta Mavie', 'saude capilar', 'Marracuene', 'Maputo', 'martamavie@gmail.com', '87103577'),
(6, 'Joana Baloi', 'Maquilhagem', 'Matola', 'Matola', 'jbaloi@gmail.com', '841097788'),
(7, 'Percia Bambo', 'Penteados', 'Boane', 'Matola', 'perciabambo@gmail.com', '841098877');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formando`
--

CREATE TABLE `formando` (
  `idformando` int(11) NOT NULL,
  `nomeformando` varchar(45) NOT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formando`
--

INSERT INTO `formando` (`idformando`, `nomeformando`, `endereco`, `cidade`, `telefone`, `email`) VALUES
(7, 'Angela da Graca', 'Patrice Lumumba', 'Matola', '841068822', '841068822'),
(8, 'Lola Mulungo', 'Bairro Liberdade', 'Matola', '845125144', 'lola@email.com'),
(9, 'Ema da Silva', 'Ema da Silva', 'Matola', '865712698', 'emasilva@email.com'),
(10, 'Dorca Donga', 'Coop', 'Maputo', '826571495', 'domga@email.com'),
(11, 'Silviana Figo', 'Costa do Sol', 'Maputo', '8432165984', 'sfigo@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `nomeperfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idperfil`, `nomeperfil`) VALUES
(1, 'Admin'),
(2, 'Formador'),
(3, 'Formando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `perfil_idperfil` int(11) NOT NULL COMMENT '''admin'',''formando'', ''formador'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `email`, `senha`, `perfil_idperfil`) VALUES
(6, 'emasilva@email.com', '1111', 3),
(7, 'emasilva@email.com', '2222', 3),
(8, 'martamavie@gmail.com', '3333', 2),
(9, 'marressane@gmail.com', '4444', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursoformando`
--
ALTER TABLE `cursoformando`
  ADD PRIMARY KEY (`idcursoformando`),
  ADD KEY `formando_idformando` (`formando_idformando`),
  ADD KEY `cursos_idcursos` (`cursos_idcursos`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcursos`);

--
-- Índices para tabela `formador`
--
ALTER TABLE `formador`
  ADD PRIMARY KEY (`idformador`);

--
-- Índices para tabela `formando`
--
ALTER TABLE `formando`
  ADD PRIMARY KEY (`idformando`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`,`perfil_idperfil`),
  ADD KEY `perfil_idperfil` (`perfil_idperfil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `formador`
--
ALTER TABLE `formador`
  MODIFY `idformador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `formando`
--
ALTER TABLE `formando`
  MODIFY `idformando` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cursoformando`
--
ALTER TABLE `cursoformando`
  ADD CONSTRAINT `cursoformando_ibfk_1` FOREIGN KEY (`formando_idformando`) REFERENCES `formando` (`idformando`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cursoformando_ibfk_2` FOREIGN KEY (`cursos_idcursos`) REFERENCES `cursos` (`idcursos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`perfil_idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
