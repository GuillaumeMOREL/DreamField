-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Mai 2015 à 14:24
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
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fruits` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` text NOT NULL,
  `quantite` tinyint(11) NOT NULL,
  `prix` tinyint(11) NOT NULL,
  `date_offre` date NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_cathegorie`
--

CREATE TABLE IF NOT EXISTS `forum_cathegorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cat_ordr` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_ordr` (`cat_ordr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_forum`
--

CREATE TABLE IF NOT EXISTS `forum_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_cat_id` mediumint(8) NOT NULL,
  `forum_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_desc` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_post_id` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_membres`
--

CREATE TABLE IF NOT EXISTS `forum_membres` (
  `membre_id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_pseudo` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_mdp` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_email` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_msn` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_siteweb` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_avatar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_signature` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_localisation` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_inscrit` int(11) NOT NULL,
  `membre_derniere_visite` int(11) NOT NULL,
  `membre_rang` tinyint(4) DEFAULT '2',
  `membre_post` int(11) NOT NULL,
  PRIMARY KEY (`membre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

CREATE TABLE IF NOT EXISTS `forum_message` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_texte` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_forum_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE IF NOT EXISTS `forum_topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_genre` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  UNIQUE KEY `topic_last_post` (`topic_last_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `I_D` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(15) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 NOT NULL,
  `codepost` int(8) NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tel` int(15) NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8 NOT NULL,
  `passverif` varchar(20) CHARACTER SET utf8 NOT NULL,
  `conditions` tinyint(1) NOT NULL,
  `date_inscription` date NOT NULL,
  `civilite` varchar(15) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`I_D`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`I_D`, `prenom`, `nom`, `adresse`, `codepost`, `mail`, `tel`, `pass`, `passverif`, `conditions`, `date_inscription`, `civilite`) VALUES
(1, 'kjjkh', 'mokkhjh', 'jhhjkhkj', 78754, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', ''),
(2, 'JHJHI', 'LHKHIUI', 'KJHKHHUI', 76506, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', ''),
(3, '', 'huyiuy', 'uyiuuyi', 75016, 'ngoubivr@yahoo.fr', 989878668, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', ''),
(4, 'UYYUTU', 'UYTUTU', 'UYTYUY', 56543, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', ''),
(5, 'uytyut', 'jyutyt', 'kuuiyiy', 76056, 'ngoru@hdg', 661454328, 'ZZZZZZ', 'FFFFFF', 0, '0000-00-00', ''),
(6, '', 'NFEOEJOI', 'OSIRTU', 12345, 'ngoubivr@yahoo.frJ', 989878668, 'aaaaaa', 'aaaaaa', 0, '0000-00-00', ''),
(7, 'michÃ¨le', 'Aboungone', '22 avenue de la porte  ', 34567, 'ngouvictoire@yahoo.fr', 661454328, 'AAAAAAA', 'AAAAAAA', 0, '0000-00-00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
