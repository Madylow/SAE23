-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 30 Mai 2022 à 10:59
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `SAe23`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE IF NOT EXISTS `administration` (
  `login_admin` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mdp_administrateur` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `batiments`
--

CREATE TABLE IF NOT EXISTS `batiments` (
`id_bat` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `login_gest` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mdp_gest` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE IF NOT EXISTS `capteurs` (
`id_capt` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type_capt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bat` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `mesures`
--

CREATE TABLE IF NOT EXISTS `mesures` (
`id_mesure` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` datetime NOT NULL,
  `valeur` int(11) NOT NULL,
  `capteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
 ADD PRIMARY KEY (`login_admin`), ADD UNIQUE KEY `mdp_administrateur` (`mdp_administrateur`);

--
-- Index pour la table `batiments`
--
ALTER TABLE `batiments`
 ADD PRIMARY KEY (`id_bat`), ADD UNIQUE KEY `login` (`login_gest`,`mdp_gest`);

--
-- Index pour la table `capteurs`
--
ALTER TABLE `capteurs`
 ADD PRIMARY KEY (`id_capt`), ADD UNIQUE KEY `FK_bat` (`bat`);

--
-- Index pour la table `mesures`
--
ALTER TABLE `mesures`
 ADD PRIMARY KEY (`id_mesure`), ADD UNIQUE KEY `FK_capt` (`capteur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `batiments`
--
ALTER TABLE `batiments`
MODIFY `id_bat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `capteurs`
--
ALTER TABLE `capteurs`
MODIFY `id_capt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `mesures`
--
ALTER TABLE `mesures`
MODIFY `id_mesure` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `capteurs`
--
ALTER TABLE `capteurs`
ADD CONSTRAINT `FK_Bat` FOREIGN KEY (`bat`) REFERENCES `batiments` (`id_bat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mesures`
--
ALTER TABLE `mesures`
ADD CONSTRAINT `FK_Capt` FOREIGN KEY (`capteur`) REFERENCES `capteurs` (`id_capt`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
