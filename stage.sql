-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Juin 2020 à 20:41
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `sot_pays`
--

CREATE TABLE IF NOT EXISTS `sot_pays` (
  `idpays` int(11) NOT NULL AUTO_INCREMENT,
  `codepays` varchar(254) NOT NULL,
  `libellepays` varchar(254) NOT NULL,
  `indicepays` varchar(254) NOT NULL,
  `etatpays` tinyint(1) DEFAULT '1',
  `datepays` datetime DEFAULT NULL,
  PRIMARY KEY (`idpays`),
  UNIQUE KEY `codepays` (`codepays`)
) /*!50100 TABLESPACE sotcocog_sot */ ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `sot_pays`
--

INSERT INTO `sot_pays` (`idpays`, `codepays`, `libellepays`, `indicepays`, `etatpays`, `datepays`) VALUES
(1, 'CMR', 'Cameroun', '+237', 1, '2019-02-09 09:50:14'),
(2, 'TCH', 'Tchad', '+002', 1, '2019-02-09 12:28:49'),
(3, 'FR', 'France', '0033', 1, '2020-05-18 10:41:43'),
(5, 'AS', 'Afrique Du Sud', '00578', 1, '2020-05-18 14:52:10'),
(6, 'IT', 'Itali', '0047', 1, '2020-05-21 09:00:28');

-- --------------------------------------------------------

--
-- Structure de la table `sot_utilisateur`
--

CREATE TABLE IF NOT EXISTS `sot_utilisateur` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nomuser` varchar(254) NOT NULL,
  `prenomuser` varchar(254) DEFAULT NULL,
  `teluser` varchar(254) DEFAULT NULL,
  `emailuser` varchar(254) DEFAULT NULL,
  `ligneuser` varchar(254) DEFAULT NULL,
  `genreuser` varchar(254) DEFAULT NULL,
  `roleuser` varchar(254) NOT NULL,
  `loginuser` varchar(254) NOT NULL,
  `motdepasseuser` varchar(254) NOT NULL,
  `photouser` varchar(254) DEFAULT NULL,
  `etatuser` tinyint(1) DEFAULT '1',
  `dateuser` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `loginuser` (`loginuser`),
  UNIQUE KEY `modepasseuser` (`motdepasseuser`)
) /*!50100 TABLESPACE sotcocog_sot */ ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `sot_utilisateur`
--

INSERT INTO `sot_utilisateur` (`iduser`, `nomuser`, `prenomuser`, `teluser`, `emailuser`, `ligneuser`, `genreuser`, `roleuser`, `loginuser`, `motdepasseuser`, `photouser`, `etatuser`, `dateuser`) VALUES
(1, 'GAPIAPSI N.', 'martial', '697866127', 'info@universbinaire.com', '674783450', 'Monsieur', 'Administrateur', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '28.jpeg', 1, '2020-05-18 09:40:00'),
(2, 'NGUETO', 'Martial', '690034292', 'lngueto@gmail.com', '', 'Monsieur', 'Directeur GÃ©nÃ©ral', 'super', '8451ba8a14d79753d34cb33b51ba46b4b025eb81', 'aaaaa.jpg', 1, '2020-05-18 19:19:38');

-- --------------------------------------------------------

--
-- Structure de la table `sot_ville`
--

CREATE TABLE IF NOT EXISTS `sot_ville` (
  `idville` int(11) NOT NULL AUTO_INCREMENT,
  `idpays` int(11) NOT NULL,
  `libelleville` varchar(254) NOT NULL,
  `etatville` tinyint(1) DEFAULT '1',
  `dateville` datetime DEFAULT NULL,
  PRIMARY KEY (`idville`),
  UNIQUE KEY `libelleville` (`libelleville`),
  KEY `fk_villepays` (`idpays`)
) /*!50100 TABLESPACE sotcocog_sot */ ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `sot_ville`
--

INSERT INTO `sot_ville` (`idville`, `idpays`, `libelleville`, `etatville`, `dateville`) VALUES
(1, 1, 'Bafoussam', 1, '2019-02-10 01:10:32'),
(2, 2, 'Bongor', 1, '2019-02-10 01:15:44'),
(3, 1, 'YaoundÃ©', 1, '2019-04-04 21:14:40'),
(4, 3, 'Paris', 1, '2020-05-18 10:42:08'),
(5, 5, 'Jb', 1, '2020-05-18 14:54:19'),
(6, 6, 'Rome', 1, '2020-05-21 09:01:09'),
(7, 1, 'Dschang', 1, '2020-05-27 11:07:55'),
(8, 1, 'Douala', 1, '2020-05-27 13:28:15');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `sot_ville`
--
ALTER TABLE `sot_ville`
  ADD CONSTRAINT `fk_villepays` FOREIGN KEY (`idpays`) REFERENCES `sot_pays` (`idpays`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
