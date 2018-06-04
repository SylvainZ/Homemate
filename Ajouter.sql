-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 18 mai 2018 à 16:37
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
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `type` varchar(100) NOT NULL,
  `addresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `superficie` int(100) NOT NULL,
  `piece` int(100) NOT NULL,
  `postal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `nom` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `superficie` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`nom`, `type`, `superficie`) VALUES
('dhsg', 'sxvj', 78),
('dhsg', 'sxvj', 78),
('dhsgBKHSV', 'sxvjVCKSJBV ', 7878952);

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
