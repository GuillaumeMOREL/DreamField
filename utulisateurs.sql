-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Mai 2015 à 02:47
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
-- Structure de la table `utulisateurs`
--

CREATE TABLE IF NOT EXISTS `utulisateurs` (
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
-- Contenu de la table `utulisateurs`
--

INSERT INTO `utulisateurs` (`I_D`, `prenom`, `nom`, `adresse`, `codepost`, `mail`, `tel`, `pass`, `passverif`, `conditions`, `date_inscription`, `civilite`) VALUES
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
