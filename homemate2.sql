-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 04 juin 2018 à 15:11
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `homemate`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

CREATE TABLE `actionneur` (
  `ID` int(50) NOT NULL,
  `Type` varchar(11) NOT NULL,
  `NomActionneur` varchar(11) NOT NULL,
  `NumeroSerie` varchar(11) NOT NULL,
  `Etat` varchar(11) NOT NULL,
  `PositionVolet` varchar(11) NOT NULL,
  `PositionInterrupeur` varchar(11) NOT NULL,
  `IdPiece` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `ID` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `NumeroSerie` varchar(255) NOT NULL,
  `Etat` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `SeuilTemperature` int(255) NOT NULL,
  `TemperatureRelevee` int(255) NOT NULL,
  `Presence` varchar(255) NOT NULL,
  `SeuilDistance` int(255) NOT NULL,
  `Luminosite` varchar(255) NOT NULL,
  `SeuilLuminosite` int(255) NOT NULL,
  `IntensiteSonore` int(255) NOT NULL,
  `IdPiece` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `Type` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `Superficie` int(100) NOT NULL,
  `NombrePiece` int(100) NOT NULL,
  `CodePostal` int(100) NOT NULL,
  `IdUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `Nom` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Superficie` int(30) NOT NULL,
  `ID_logement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`Nom`, `Type`, `Superficie`, `ID_logement`) VALUES
('dhsg', 'sxvj', 78, 0),
('dhsg', 'sxvj', 78, 0),
('dhsgBKHSV', 'sxvjVCKSJBV ', 7878952, 0),
('nfdq', 'fndqj', 79, 0);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `ID` int(11) NOT NULL,
  `Nom` char(50) NOT NULL,
  `Prenom` char(50) NOT NULL,
  `Statut` tinytext NOT NULL,
  `NumeroAppartement` int(100) NOT NULL,
  `NumeroEtage` tinyint(200) NOT NULL,
  `NumeroRue` int(200) NOT NULL,
  `Bis` tinytext,
  `PrefixeRueAveBd` tinytext NOT NULL,
  `NomRueAveBd` char(50) NOT NULL,
  `NumeroDepartement` int(20) NOT NULL,
  `Ville` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `NumeroTelephone` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`ID`, `Nom`, `Prenom`, `Statut`, `NumeroAppartement`, `NumeroEtage`, `NumeroRue`, `Bis`, `PrefixeRueAveBd`, `NomRueAveBd`, `NumeroDepartement`, `Ville`, `Email`, `NumeroTelephone`) VALUES
(1, 'Xu', 'Léon', 'proprietaire', 2, 2, 156, 'NONE', 'rue', 'Magenta', 75003, 'Paris', 'leon.xu@isep.fr', 152589793),
(2, 'ce', 'bji', 'proprietaire', 2, 95, 6, 'bis', 'rue', 'pk', 9559, 'Panam', 'lpszsz@szop.de', 156497);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
