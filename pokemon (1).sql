-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 mars 2020 à 16:25
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pokemon`
--

-- --------------------------------------------------------

--
-- Structure de la table `acier`
--

DROP TABLE IF EXISTS `acier`;
CREATE TABLE IF NOT EXISTS `acier` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `acier`
--

INSERT INTO `acier` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 0.5),
(2, 1, 2),
(3, 1, 0.5),
(4, 0.5, 1),
(5, 0.5, 1),
(6, 2, 0.5),
(7, 0.5, 2),
(8, 2, 0.5),
(9, 1, 0.5),
(10, 1, 0.5),
(11, 1, 0.5),
(12, 1, 0),
(13, 1, 0.5),
(14, 2, 0.5),
(15, 1, 2),
(16, 1, 1),
(17, 1, 1),
(18, 1, 0.5);

-- --------------------------------------------------------

--
-- Structure de la table `combat`
--

DROP TABLE IF EXISTS `combat`;
CREATE TABLE IF NOT EXISTS `combat` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `combat`
--

INSERT INTO `combat` (`id_type_tab`, `offensif`, `defensif`) VALUES
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 0.5, 2),
(7, 1, 1),
(8, 2, 1),
(9, 0.5, 0.5),
(10, 2, 1),
(11, 1, 1),
(12, 0.5, 1),
(13, 0.5, 2),
(14, 2, 0.5),
(15, 1, 1),
(16, 0, 1),
(17, 2, 0.5),
(18, 0.5, 2),
(1, 2, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `dragon`
--

DROP TABLE IF EXISTS `dragon`;
CREATE TABLE IF NOT EXISTS `dragon` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dragon`
--

INSERT INTO `dragon` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 1),
(2, 1, 1),
(3, 2, 2),
(4, 1, 0.5),
(5, 1, 0.5),
(6, 0, 2),
(7, 1, 0.5),
(8, 1, 2),
(9, 1, 1),
(10, 1, 1),
(11, 1, 0.5),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 1, 1),
(17, 1, 1),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `eau`
--

DROP TABLE IF EXISTS `eau`;
CREATE TABLE IF NOT EXISTS `eau` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eau`
--

INSERT INTO `eau` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 1, 0.5),
(2, 1, 1),
(3, 0.5, 1),
(4, 0.5, 0.5),
(5, 1, 2),
(6, 1, 1),
(7, 2, 0.5),
(8, 1, 0.5),
(9, 1, 1),
(10, 1, 1),
(11, 0.5, 2),
(12, 1, 1),
(13, 1, 1),
(14, 2, 1),
(15, 2, 1),
(16, 1, 1),
(17, 1, 1),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `electrik`
--

DROP TABLE IF EXISTS `electrik`;
CREATE TABLE IF NOT EXISTS `electrik` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `electrik`
--

INSERT INTO `electrik` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 1, 0.5),
(2, 1, 1),
(3, 0.5, 1),
(4, 2, 1),
(5, 0.5, 0.5),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 0.5, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 0, 2),
(16, 1, 1),
(17, 1, 1),
(18, 2, 0.5);

-- --------------------------------------------------------

--
-- Structure de la table `esttype`
--

DROP TABLE IF EXISTS `esttype`;
CREATE TABLE IF NOT EXISTS `esttype` (
  `id_pok` int(11) NOT NULL,
  `type_pok` varchar(25) NOT NULL,
  `id_type_pok` int(11) NOT NULL,
  KEY `id_pok` (`id_pok`),
  KEY `type_pok` (`type_pok`) USING BTREE,
  KEY `id_type_pok` (`id_type_pok`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `esttype`
--

INSERT INTO `esttype` (`id_pok`, `type_pok`, `id_type_pok`) VALUES
(1, 'Plante', 11),
(1, 'Poison', 12),
(2, 'Plante', 11),
(2, 'Poison', 12),
(3, 'Plante', 11),
(3, 'Poison', 12),
(4, 'Feu', 7),
(5, 'Feu', 7),
(6, 'Feu', 7),
(6, 'Vol', 18),
(7, 'Eau', 4),
(8, 'Eau', 4),
(9, 'Eau', 4),
(10, 'Insecte', 9),
(11, 'Insecte', 9),
(12, 'Insecte', 9),
(12, 'Vol', 18),
(13, 'Insecte', 9),
(13, 'Poison', 12),
(14, 'Insecte', 9),
(14, 'Poison', 12),
(15, 'Insecte', 9),
(15, 'Poison', 12),
(16, 'Normal', 10),
(16, 'Vol', 18),
(17, 'Normal', 10),
(17, 'Vol', 18),
(18, 'Normal', 10),
(18, 'Vol', 18),
(19, 'Normal', 10),
(20, 'Normal', 10),
(21, 'Normal', 10),
(21, 'Vol', 18),
(22, 'Normal', 10),
(22, 'Vol', 18),
(23, 'Poison', 12),
(24, 'Poison', 12),
(25, 'Electrik', 5),
(26, 'Electrik', 5),
(27, 'Sol', 15),
(28, 'Sol', 15),
(29, 'Poison', 12),
(30, 'Poison', 12),
(31, 'Poison', 12),
(31, 'Sol', 15),
(32, 'Poison', 12),
(33, 'Poison', 12),
(34, 'Poison', 12),
(34, 'Sol', 15),
(35, 'Normal', 10),
(36, 'Normal', 10),
(37, 'Feu', 7),
(38, 'Feu', 7),
(39, 'Normal', 10),
(40, 'Normal', 10),
(41, 'Poison', 12),
(41, 'Vol', 18),
(42, 'Poison', 12),
(42, 'Vol', 18),
(43, 'Plante', 11),
(43, 'Poison', 12),
(44, 'Plante', 11),
(44, 'Poison', 12),
(45, 'Plante', 11),
(45, 'Poison', 12),
(46, 'Insecte', 9),
(46, 'Plante', 11),
(47, 'Insecte', 9),
(47, 'Plante', 11),
(48, 'Insecte', 9),
(48, 'Poison', 12),
(49, 'Insecte', 9),
(49, 'Poison', 12),
(50, 'Sol', 15),
(51, 'Sol', 15),
(52, 'Normal', 10),
(53, 'Normal', 10),
(54, 'Eau', 4),
(55, 'Eau', 4),
(56, 'Combat', 2),
(57, 'Combat', 2),
(58, 'Feu', 7),
(59, 'Feu', 7),
(60, 'Eau', 4),
(61, 'Eau', 4),
(62, 'Eau', 4),
(62, 'Combat', 2),
(63, 'Psy', 13),
(64, 'Psy', 13),
(65, 'Psy', 13),
(66, 'Combat', 2),
(67, 'Combat', 2),
(68, 'Combat', 2),
(69, 'Plante', 11),
(69, 'Poison', 12),
(70, 'Plante', 11),
(70, 'Poison', 12),
(71, 'Plante', 11),
(71, 'Poison', 12),
(72, 'Eau', 4),
(72, 'Poison', 12),
(73, 'Eau', 4),
(73, 'Poison', 12),
(74, 'Roche', 14),
(74, 'Sol', 15),
(75, 'Roche', 14),
(75, 'Sol', 15),
(76, 'Roche', 14),
(76, 'Sol', 15),
(77, 'Feu', 7),
(78, 'Feu', 7),
(79, 'Eau', 4),
(79, 'Psy', 13),
(80, 'Eau', 4),
(80, 'Psy', 13),
(81, 'Electrik', 5),
(82, 'Electrik', 5),
(83, 'Normal', 10),
(83, 'Vol', 18),
(84, 'Normal', 10),
(84, 'Vol', 18),
(85, 'Normal', 10),
(85, 'Vol', 18),
(86, 'Eau', 4),
(87, 'Eau', 4),
(87, 'Glace', 8),
(88, 'Poison', 12),
(89, 'Poison', 12),
(90, 'Eau', 4),
(91, 'Eau', 4),
(91, 'Glace', 8),
(92, 'Spectre', 16),
(92, 'Poison', 12),
(93, 'Spectre', 16),
(93, 'Poison', 12),
(94, 'Spectre', 16),
(94, 'Poison', 12),
(95, 'Roche', 14),
(95, 'Sol', 15),
(96, 'Psy', 13),
(97, 'Psy', 13),
(98, 'Eau', 4),
(99, 'Eau', 4),
(100, 'Electrik', 5),
(101, 'Electrik', 5),
(102, 'Plante', 11),
(102, 'Psy', 13),
(103, 'Plante', 11),
(103, 'Psy', 13),
(104, 'Sol', 15),
(105, 'Sol', 15),
(106, 'Combat', 2),
(107, 'Combat', 2),
(108, 'Normal', 10),
(109, 'Poison', 12),
(110, 'Poison', 12),
(111, 'Sol', 15),
(111, 'Roche', 14),
(112, 'Sol', 15),
(112, 'Roche', 14),
(113, 'Normal', 10),
(114, 'Plante', 11),
(115, 'Normal', 10),
(116, 'Eau', 4),
(117, 'Eau', 4),
(118, 'Eau', 4),
(119, 'Eau', 4),
(120, 'Eau', 4),
(121, 'Eau', 4),
(121, 'Psy', 13),
(122, 'Psy', 13),
(123, 'Insecte', 9),
(123, 'Vol', 18),
(124, 'Glace', 8),
(124, 'Psy', 13),
(125, 'Electrik', 5),
(126, 'Feu', 7),
(127, 'Insecte', 9),
(128, 'Normal', 10),
(129, 'Eau', 4),
(130, 'Eau', 4),
(130, 'Vol', 18),
(131, 'Eau', 4),
(131, 'Glace', 8),
(132, 'Normal', 10),
(133, 'Normal', 10),
(134, 'Eau', 4),
(135, 'Electrik', 5),
(136, 'Feu', 7),
(137, 'Normal', 10),
(138, 'Roche', 14),
(138, 'Eau', 4),
(139, 'Roche', 14),
(139, 'Eau', 4),
(140, 'Roche', 14),
(140, 'Eau', 4),
(141, 'Roche', 14),
(141, 'Eau', 4),
(142, 'Roche', 14),
(142, 'Vol', 18),
(143, 'Normal', 10),
(144, 'Glace', 8),
(144, 'Vol', 18),
(145, 'Electrik', 5),
(145, 'Vol', 18),
(146, 'Feu', 7),
(146, 'Vol', 18),
(147, 'Dragon', 3),
(148, 'Dragon', 3),
(149, 'Dragon', 3),
(149, 'Vol', 18),
(150, 'Psy', 13),
(151, 'Psy', 13);

-- --------------------------------------------------------

--
-- Structure de la table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE IF NOT EXISTS `fee` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fee`
--

INSERT INTO `fee` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 2),
(2, 2, 0.5),
(3, 2, 0),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 0.5, 1),
(8, 1, 1),
(9, 1, 0.5),
(10, 1, 1),
(11, 1, 1),
(12, 0.5, 2),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 1, 1),
(17, 2, 0.5),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `feu`
--

DROP TABLE IF EXISTS `feu`;
CREATE TABLE IF NOT EXISTS `feu` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `feu`
--

INSERT INTO `feu` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 2, 0.5),
(2, 1, 1),
(3, 0.5, 1),
(4, 0.5, 2),
(5, 1, 1),
(6, 1, 0.5),
(7, 0.5, 0.5),
(8, 2, 0.5),
(9, 2, 0.5),
(10, 1, 1),
(11, 2, 0.5),
(12, 1, 1),
(13, 1, 1),
(14, 0.5, 2),
(15, 1, 2),
(16, 1, 1),
(17, 1, 1),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `glace`
--

DROP TABLE IF EXISTS `glace`;
CREATE TABLE IF NOT EXISTS `glace` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `glace`
--

INSERT INTO `glace` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 2),
(2, 1, 2),
(3, 2, 1),
(4, 0.5, 1),
(5, 1, 1),
(6, 1, 1),
(7, 0.5, 2),
(8, 0.5, 0.5),
(9, 1, 1),
(10, 1, 1),
(11, 2, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 2),
(15, 2, 1),
(16, 1, 1),
(17, 1, 1),
(18, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `insecte`
--

DROP TABLE IF EXISTS `insecte`;
CREATE TABLE IF NOT EXISTS `insecte` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `insecte`
--

INSERT INTO `insecte` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 1),
(2, 0.5, 0.5),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 0.5, 1),
(7, 0.5, 2),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 2, 0.5),
(12, 0.5, 1),
(13, 2, 1),
(14, 1, 2),
(15, 1, 0.5),
(16, 0.5, 1),
(17, 2, 1),
(18, 0.5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `molosse`
--

DROP TABLE IF EXISTS `molosse`;
CREATE TABLE IF NOT EXISTS `molosse` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float DEFAULT NULL,
  KEY `Molosse_ibfk_1` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `normal`
--

DROP TABLE IF EXISTS `normal`;
CREATE TABLE IF NOT EXISTS `normal` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `normal`
--

INSERT INTO `normal` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 1),
(2, 1, 2),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 0.5, 1),
(15, 1, 1),
(16, 0, 0),
(17, 1, 1),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

DROP TABLE IF EXISTS `plante`;
CREATE TABLE IF NOT EXISTS `plante` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plante`
--

INSERT INTO `plante` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 1),
(2, 1, 1),
(3, 0.5, 1),
(4, 2, 0.5),
(5, 1, 0.5),
(6, 1, 1),
(9, 0.5, 2),
(10, 1, 1),
(11, 0.5, 0.5),
(12, 0.5, 2),
(13, 1, 1),
(14, 2, 1),
(15, 2, 0.5),
(16, 1, 1),
(17, 1, 1),
(18, 0.5, 2),
(7, 0.5, 2),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `poison`
--

DROP TABLE IF EXISTS `poison`;
CREATE TABLE IF NOT EXISTS `poison` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poison`
--

INSERT INTO `poison` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0, 1),
(2, 1, 0.5),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 2, 0.5),
(7, 1, 1),
(8, 1, 1),
(9, 1, 0.5),
(10, 1, 1),
(11, 2, 0.5),
(12, 0.5, 0.5),
(13, 1, 2),
(14, 0.5, 1),
(15, 0.5, 2),
(16, 0.5, 1),
(17, 1, 1),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE IF NOT EXISTS `pokemon` (
  `id_pok` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_pok` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pok`),
  UNIQUE KEY `id_pok` (`id_pok`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`id_pok`, `nom_pok`) VALUES
(1, 'Bulbizarre'),
(2, 'Herbizarre'),
(3, 'Florizarre'),
(4, 'Salameche'),
(5, 'Reptincel'),
(6, 'Dracaufeu'),
(7, 'Carapuce'),
(8, 'Carabaffe'),
(9, 'Tortank'),
(10, 'Chenipan'),
(11, 'Chrysacier'),
(12, 'Papilusion'),
(13, 'Aspicot'),
(14, 'Coconfort'),
(15, 'Dardargnan'),
(16, 'Roucool'),
(17, 'Roucoups'),
(18, 'Roucarnage'),
(19, 'Rattata'),
(20, 'Rattatac'),
(21, 'Piafabec'),
(22, 'Rapasdepic'),
(23, 'Abo'),
(24, 'Arbok'),
(25, 'Pikachu'),
(26, 'Raichu'),
(27, 'Sabelette'),
(28, 'Sablaireau'),
(29, 'NidoranF'),
(30, 'Nidorina'),
(31, 'Nidoqueen'),
(32, 'NidoranM'),
(33, 'Nidorino'),
(34, 'Nidoking'),
(35, 'Melofee'),
(36, 'Melodelfe'),
(37, 'Goupix'),
(38, 'Feunard'),
(39, 'Rondoudou'),
(40, 'Grodoudou'),
(41, 'Nosferapti'),
(42, 'Nosferalto'),
(43, 'Mystherbe'),
(44, 'Ortide'),
(45, 'Rafflesia'),
(46, 'Paras'),
(47, 'Parasect'),
(48, 'Mimitoss'),
(49, 'Aeromite'),
(50, 'Taupiqueur'),
(51, 'Triopikeur'),
(52, 'Miaouss'),
(53, 'Persian'),
(54, 'Psykokwak'),
(55, 'Akwakwak'),
(56, 'Ferosinge'),
(57, 'Colossinge'),
(58, 'Caninos'),
(59, 'Arcanin'),
(60, 'Ptitard'),
(61, 'Tetarte'),
(62, 'Tartard'),
(63, 'Abra'),
(64, 'Kadabra'),
(65, 'Alakazam'),
(66, 'Machoc'),
(67, 'Machopeur'),
(68, 'Mackogneur'),
(69, 'Chetiflor'),
(70, 'Boustiflor'),
(71, 'Empiflor'),
(72, 'Tentacool'),
(73, 'Tentacruel'),
(74, 'Racaillou'),
(75, 'Gravalanch'),
(76, 'Grolem'),
(77, 'Ponyta'),
(78, 'Galopa'),
(79, 'Ramoloss'),
(80, 'Flagadoss'),
(81, 'Magneti'),
(82, 'Magneton'),
(83, 'Canarticho'),
(84, 'Doduo'),
(85, 'Dodrio'),
(86, 'Otaria'),
(87, 'Lamantine'),
(88, 'Tadmorv'),
(89, 'Grotadmorv'),
(90, 'Kokiyas'),
(91, 'Crustabri'),
(92, 'Fantominus'),
(93, 'Spectrum'),
(94, 'Ectoplasma'),
(95, 'Onix'),
(96, 'Soporifik'),
(97, 'Hypnomade'),
(98, 'Krabby'),
(99, 'Krabboss'),
(100, 'Voltorbe'),
(101, 'Electrode'),
(102, 'Noeunoeuf'),
(103, 'Noadkoko'),
(104, 'Osselait'),
(105, 'Ossatueur'),
(106, 'Kicklee'),
(107, 'Tygnon'),
(108, 'Excelangue'),
(109, 'Smogo'),
(110, 'Smogogo'),
(111, 'Rhinocorne'),
(112, 'Rhinoferos'),
(113, 'Leveinard'),
(114, 'Saquedeneu'),
(115, 'Kangourex'),
(116, 'Hypotrempe'),
(117, 'Hypocean'),
(118, 'Poissirene'),
(119, 'Poissoroy'),
(120, 'Stari'),
(121, 'Staross'),
(122, 'M. Mime'),
(123, 'Insecateur'),
(124, 'Lippoutou'),
(125, 'Elektek'),
(126, 'Magmar'),
(127, 'Scarabrute'),
(128, 'Tauros'),
(129, 'Magicarpe'),
(130, 'Leviator'),
(131, 'Lokhlass'),
(132, 'Metamorph'),
(133, 'Evoli'),
(134, 'Aquali'),
(135, 'Voltali'),
(136, 'Pyroli'),
(137, 'Porygon'),
(138, 'Amonita'),
(139, 'Amonistar'),
(140, 'Kabuto'),
(141, 'Kabutops'),
(142, 'Ptera'),
(143, 'Ronflex'),
(144, 'Artikodin'),
(145, 'Electhor'),
(146, 'Sulfura'),
(147, 'Minidraco'),
(148, 'Draco'),
(149, 'Dracolosse'),
(150, 'Mewtwo'),
(151, 'Mew');

-- --------------------------------------------------------

--
-- Structure de la table `psy`
--

DROP TABLE IF EXISTS `psy`;
CREATE TABLE IF NOT EXISTS `psy` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `psy`
--

INSERT INTO `psy` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 1),
(2, 2, 0.5),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 2),
(10, 1, 1),
(11, 1, 1),
(12, 2, 1),
(13, 0.5, 0.5),
(14, 1, 1),
(15, 1, 1),
(16, 1, 2),
(17, 0, 2),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roche`
--

DROP TABLE IF EXISTS `roche`;
CREATE TABLE IF NOT EXISTS `roche` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roche`
--

INSERT INTO `roche` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 2),
(2, 0.5, 2),
(3, 1, 1),
(4, 1, 2),
(5, 1, 1),
(6, 1, 1),
(7, 2, 0.5),
(8, 2, 1),
(9, 2, 1),
(10, 1, 0.5),
(11, 1, 2),
(12, 1, 0.5),
(13, 1, 1),
(14, 1, 1),
(15, 0.5, 2),
(16, 1, 1),
(17, 1, 1),
(18, 2, 0.5);

-- --------------------------------------------------------

--
-- Structure de la table `sol`
--

DROP TABLE IF EXISTS `sol`;
CREATE TABLE IF NOT EXISTS `sol` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sol`
--

INSERT INTO `sol` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 2),
(5, 2, 0),
(6, 1, 1),
(7, 2, 1),
(8, 1, 2),
(9, 0.5, 1),
(10, 1, 1),
(11, 0.5, 2),
(12, 2, 0.5),
(13, 1, 1),
(14, 2, 0.5),
(15, 1, 1),
(16, 1, 1),
(17, 1, 1),
(18, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `spectre`
--

DROP TABLE IF EXISTS `spectre`;
CREATE TABLE IF NOT EXISTS `spectre` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `spectre`
--

INSERT INTO `spectre` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 1, 1),
(2, 1, 0),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 0.5),
(10, 0, 0),
(11, 1, 1),
(12, 1, 0.5),
(13, 2, 1),
(14, 1, 1),
(15, 1, 1),
(16, 2, 2),
(17, 0.5, 2),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tenebres`
--

DROP TABLE IF EXISTS `tenebres`;
CREATE TABLE IF NOT EXISTS `tenebres` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tenebres`
--

INSERT INTO `tenebres` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 1, 1),
(2, 0.5, 2),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 0.5, 2),
(7, 1, 1),
(8, 1, 1),
(9, 1, 2),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 2, 0),
(14, 1, 1),
(15, 1, 1),
(16, 2, 0.5),
(17, 0.5, 0.5),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id_type`),
  KEY `nom_type` (`nom_type`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `nom_type`, `img_type`) VALUES
(1, 'Acier', 'img/acier.png'),
(2, 'Combat', 'img/combat.png'),
(3, 'Dragon', 'img/dragon.png'),
(4, 'Eau', 'img/eau.png'),
(5, 'Electrik', 'img/electrik.png'),
(6, 'Fee', 'img/fee.png'),
(7, 'Feu', 'img/feu.png'),
(8, 'Glace', 'img/glace.png'),
(9, 'Insecte', 'img/insecte.png'),
(10, 'Normal', 'img/normal.png'),
(11, 'Plante', 'img/plante.png'),
(12, 'Poison', 'img/poison.png'),
(13, 'Psy', 'img/psy.png'),
(14, 'Roche', 'img/roche.png'),
(15, 'Sol', 'img/sol.png'),
(16, 'Spectre', 'img/spectre.png'),
(17, 'Tenebres', 'img/tenebres.png'),
(18, 'Vol', 'img/vol.png'),
(21, 'Molosse', 'img/molosse.png');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

DROP TABLE IF EXISTS `vol`;
CREATE TABLE IF NOT EXISTS `vol` (
  `id_type_tab` int(11) NOT NULL,
  `offensif` float NOT NULL,
  `defensif` float NOT NULL,
  KEY `id_type_tab` (`id_type_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`id_type_tab`, `offensif`, `defensif`) VALUES
(1, 0.5, 1),
(2, 2, 0.5),
(3, 1, 1),
(4, 1, 1),
(5, 0.5, 2),
(6, 1, 1),
(7, 1, 1),
(8, 1, 2),
(9, 2, 0.5),
(10, 1, 1),
(11, 2, 0.5),
(12, 1, 1),
(13, 1, 1),
(14, 0.5, 2),
(15, 1, 0),
(16, 1, 1),
(17, 1, 1),
(18, 1, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `acier`
--
ALTER TABLE `acier`
  ADD CONSTRAINT `Acier_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `combat`
--
ALTER TABLE `combat`
  ADD CONSTRAINT `Combat_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `dragon`
--
ALTER TABLE `dragon`
  ADD CONSTRAINT `Dragon_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `electrik`
--
ALTER TABLE `electrik`
  ADD CONSTRAINT `electrik_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `feu`
--
ALTER TABLE `feu`
  ADD CONSTRAINT `feu_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `glace`
--
ALTER TABLE `glace`
  ADD CONSTRAINT `glace_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `insecte`
--
ALTER TABLE `insecte`
  ADD CONSTRAINT `insecte_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `molosse`
--
ALTER TABLE `molosse`
  ADD CONSTRAINT `Molosse_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `normal`
--
ALTER TABLE `normal`
  ADD CONSTRAINT `normal_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `plante`
--
ALTER TABLE `plante`
  ADD CONSTRAINT `plante_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `poison`
--
ALTER TABLE `poison`
  ADD CONSTRAINT `poison_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `psy`
--
ALTER TABLE `psy`
  ADD CONSTRAINT `psy_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `roche`
--
ALTER TABLE `roche`
  ADD CONSTRAINT `roche_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `sol`
--
ALTER TABLE `sol`
  ADD CONSTRAINT `sol_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `spectre`
--
ALTER TABLE `spectre`
  ADD CONSTRAINT `spectre_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `tenebres`
--
ALTER TABLE `tenebres`
  ADD CONSTRAINT `tenebres_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `vol`
--
ALTER TABLE `vol`
  ADD CONSTRAINT `vol_ibfk_1` FOREIGN KEY (`id_type_tab`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
