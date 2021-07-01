-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2021 at 10:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pente-magico`
--

-- --------------------------------------------------------

--
-- Table structure for table `convites`
--

CREATE TABLE `convites` (
  `id_convite` int(11) NOT NULL,
  `fk_id_destinatario` int(11) NOT NULL,
  `fk_id_remetente` int(11) NOT NULL,
  `fk_id_evento` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `convites`
--

INSERT INTO `convites` (`id_convite`, `fk_id_destinatario`, `fk_id_remetente`, `fk_id_evento`, `status`) VALUES
(1, 2, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `idcursos` int(11) NOT NULL,
  `nome-curso` varchar(45) NOT NULL,
  `preco` varchar(45) NOT NULL,
  `duracao` varchar(200) DEFAULT NULL,
  `lotacao` varchar(45) DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `data-de-inicio-curso` date DEFAULT NULL,
  `data` datetime NOT NULL,
  `dataupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `desc_resumida` varchar(100) DEFAULT NULL,
  `desc_detalhada` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`idcursos`, `nome-curso`, `preco`, `duracao`, `lotacao`, `lugar`, `data-de-inicio-curso`, `data`, `dataupdate`, `desc_resumida`, `desc_detalhada`) VALUES
(7, 'Penteados casuais', '5000', '45 dias', '10', 'Matola, bairro t3- Salao Rita', '2021-07-30', '2021-06-30 00:00:00', '2021-06-30 21:25:26', 'Neste curso, voce ira aprender tecnicas para ', 'Neste curso, voce ira aprender tecnicas para '),
(8, 'Auto-Maquilhagem', '3000', '15 dias', '20', 'Boane, Bairro Juba-Irina Croche', '2021-10-04', '2021-06-30 00:00:00', '2021-06-30 21:25:26', 'Neste curso, voce ira aprender tecnicas para ', 'Neste curso, voce ira aprender tecnicas para '),
(9, 'Texturizacao', '2000', '5 dias', '10', 'Matola, bairro t3- Salao Rita', '2021-07-30', '2021-06-30 00:00:00', '2021-06-30 21:25:26', '2021-06-30', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `cor` varchar(7) DEFAULT NULL,
  `inicio` datetime NOT NULL,
  `termino` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id_evento`, `fk_id_usuario`, `titulo`, `descricao`, `cor`, `inicio`, `termino`) VALUES
(1, 1, 'Curso de Penteados para Noiva', 'Curso de Penteados para Noiva na sircursal da Matola', '#40E0D0', '2021-07-13 13:30:00', '2021-08-06 16:30:00'),
(2, 1, 'Entrevista Tecnica', 'Entrevista com Carlos da TokenLab.', '#FF0000', '2021-07-21 04:59:38', '2021-08-11 10:30:00'),
(3, 2, 'Capacitação dos Formandores', 'Formacao de Formandores todos os da Pente Magico para aprimorar as suas compentenncais', '#0071c5', '2021-07-12 18:00:00', '2021-07-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `formador`
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
-- Dumping data for table `formador`
--

INSERT INTO `formador` (`idformador`, `nomeformador`, `especialidade`, `endereco`, `cidade`, `email`, `telefone`) VALUES
(5, 'Marta Mavie', 'saude capilar', 'Marracuene', 'Maputo', 'martamavie@gmail.com', '87103577'),
(6, 'Joana Baloi', 'Maquilhagem', 'Matola', 'Matola', 'jbaloi@gmail.com', '841097788'),
(7, 'Percia Bambo', 'Penteados', 'Boane', 'Matola', 'perciabambo@gmail.com', '841098877');

-- --------------------------------------------------------

--
-- Table structure for table `formando`
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
-- Dumping data for table `formando`
--

INSERT INTO `formando` (`idformando`, `nomeformando`, `endereco`, `cidade`, `telefone`, `email`) VALUES
(7, 'Angela da Graca', 'Patrice Lumumba', 'Matola', '841068822', '841068822'),
(8, 'Lola Mulungo', 'Bairro Liberdade', 'Matola', '845125144', 'lola@email.com'),
(9, 'Ema da Silva', 'Ema da Silva', 'Matola', '865712698', 'emasilva@email.com'),
(10, 'Dorca Donga', 'Coop', 'Maputo', '826571495', 'domga@email.com'),
(11, 'Silviana Figo', 'Costa do Sol', 'Maputo', '8432165984', 'sfigo@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `senha` text NOT NULL,
  `nomecompleto` varchar(45) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `senha`, `nomecompleto`, `cargo`) VALUES
(1, 'Jacinto', '63ab910cb3a7bc89faae5a46aa337aa22f5f4d30', 'Jacinto Mulungo', 'Gerente'),
(2, 'Angela', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Angela', 'Formador'),
(5, 'Marta', '348162101fc6f7e624681b7400b085eeac6df7bd', 'Marta Mavie', 'Formador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `convites`
--
ALTER TABLE `convites`
  ADD PRIMARY KEY (`id_convite`),
  ADD KEY `fk_id_destinatario` (`fk_id_destinatario`),
  ADD KEY `fk_id_remetente` (`fk_id_remetente`),
  ADD KEY `fk_id_evento` (`fk_id_evento`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `convites`
--
ALTER TABLE `convites`
  MODIFY `id_convite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `convites`
--
ALTER TABLE `convites`
  ADD CONSTRAINT `convites_ibfk_1` FOREIGN KEY (`fk_id_destinatario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `convites_ibfk_2` FOREIGN KEY (`fk_id_remetente`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `convites_ibfk_3` FOREIGN KEY (`fk_id_evento`) REFERENCES `eventos` (`id_evento`);

--
-- Constraints for table `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
