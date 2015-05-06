-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Mai 2015 à 17:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dreamfield`
--

-- --------------------------------------------------------

--
-- Structure de la table `catégorie`
--

CREATE TABLE IF NOT EXISTS `catégorie` (
  `I_D` int(11) NOT NULL AUTO_INCREMENT,
  `catégorie_produits` varchar(100) NOT NULL,
  `nom_produits` varchar(100) NOT NULL,
  PRIMARY KEY (`I_D`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Contenu de la table `catégorie`
--

INSERT INTO `catégorie` (`I_D`, `catégorie_produits`, `nom_produits`) VALUES
(1, 'fruit', 'coing'),
(2, 'fruit', 'corme'),
(3, 'fruit', 'nèfle'),
(4, 'fruit', 'pêche'),
(5, 'fruit', 'poire'),
(6, 'fruit', 'pomme'),
(7, 'fruit', 'raisin'),
(8, 'fruit', 'amande'),
(9, 'fruit', 'noisette'),
(10, 'fruit', 'noix'),
(11, 'fuit', 'noix de cajou'),
(12, 'fruit', 'noix de coco'),
(13, 'fruit', 'pistache'),
(14, 'fruit', 'curuba'),
(15, 'fruit', 'fruit de la passion'),
(16, 'fruit', 'grenadelle'),
(17, 'fruit', 'kiwai'),
(18, 'fruit', 'kiwano'),
(19, 'fruit', 'prunelle'),
(20, 'fruit', 'kiwi'),
(21, 'fruit', 'mûre'),
(22, 'fruit', 'abricot'),
(23, 'fruit', 'cerise'),
(24, 'fruit', 'prune'),
(25, 'fruit', 'citron'),
(26, 'fruit', 'figue'),
(27, 'fruit', 'goyave'),
(28, 'fruit', 'grenade'),
(29, 'fruit', 'jujube'),
(30, 'fruit', 'kaki'),
(31, 'fruit', 'mandarine'),
(32, 'fruit', 'olive'),
(33, 'fruit', 'orange'),
(34, 'fruit', 'canneberge'),
(35, 'fruit', 'aronia'),
(36, 'fruit', 'fraise'),
(37, 'fruit', 'framboise'),
(38, 'fruit', 'groseille'),
(39, 'fruit', 'myrtille'),
(40, 'fruit', 'avocat'),
(41, 'fruit', 'banane'),
(42, 'fruit', 'cacao'),
(43, 'fruit', 'carambole'),
(44, 'fruit', 'corossol'),
(45, 'fruit', 'datte'),
(46, 'fruit', 'litchi'),
(47, 'fruit', 'mangue'),
(48, 'fruit', 'pamplemousse'),
(49, 'fruit', 'papaye'),
(50, 'fruit', 'pomme de cythère'),
(51, 'légume', 'asperge'),
(52, 'légume', 'céleri-rave'),
(53, 'légume', 'choux pommé'),
(54, 'légume', 'choux vert'),
(55, 'légume', 'choux de milan'),
(56, 'légume', 'choux chinois'),
(57, 'légume', 'choux-fleur'),
(58, 'légume', 'brocoli'),
(59, 'légume', 'chou romanesco'),
(60, 'légume', 'choux de bruxelles'),
(61, 'légume', 'épinard'),
(62, 'légume', 'poireau'),
(63, 'légume', 'laitue'),
(64, 'légume', 'chicorée'),
(65, 'légume', 'mâche'),
(66, 'légume', 'roquette'),
(67, 'légume', 'aubergine'),
(68, 'légume', 'concombre'),
(69, 'légume', 'cornichon'),
(70, 'légume', 'courge'),
(71, 'légume', 'potiron'),
(72, 'légume', 'citrouille'),
(73, 'légume', 'melon'),
(74, 'légume', 'tomate'),
(75, 'légume', 'piment'),
(76, 'légume', 'poivron'),
(77, 'légume', 'banane plantain'),
(78, 'légume', 'betterave'),
(79, 'légume', 'carotte'),
(80, 'légume', 'courgette'),
(81, 'légume', 'navet'),
(82, 'légume', 'radis'),
(83, 'légume', 'patate'),
(84, 'légume', 'pomme de terre'),
(85, 'légume', 'fève '),
(86, 'légume', 'haricot vert'),
(87, 'légume', 'haricot blanc'),
(88, 'légume', 'petit pois'),
(89, 'légume', 'ail'),
(90, 'légume', 'échalote'),
(91, 'légume', 'oignon'),
(92, 'légume', 'ciboulette'),
(93, 'légume', 'champignon'),
(94, 'fruit', 'cassis'),
(95, 'fruit', 'ananas'),
(96, 'légume', 'maïs'),
(97, 'fruit', 'pastèque');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
