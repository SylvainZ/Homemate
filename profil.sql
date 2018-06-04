-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 04 juin 2018 à 15:04
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
  `NomRueAveBd` char(50) NOT NULL,
  `NumeroDepartement` int(20) NOT NULL,
  `Ville` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `NumeroTelephone` int(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Datedenaissance` date NOT NULL,
  `NumeroLogement` int(11) NOT NULL,
  `surface` int(255) NOT NULL,
  `CodePostal` int(5) NOT NULL,
  `NumeroPièce` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`ID`, `Nom`, `Prenom`, `Statut`, `NumeroAppartement`, `NumeroEtage`, `NumeroRue`, `Bis`, `NomRueAveBd`, `NumeroDepartement`, `Ville`, `Email`, `NumeroTelephone`, `password`, `Datedenaissance`, `NumeroLogement`, `surface`, `CodePostal`, `NumeroPièce`) VALUES
(1, 'nom', 'preomn', 'Gérant', 5, 5, 46, NULL, 'Champs de Mars', 71, 'Paris', 'fr@fr.fr', 32, '0', '0000-00-00', 0, 0, 0, 0),
(2, 'ce', 'bji', 'proprietaire', 2, 95, 6, 'bis', 'pk', 9559, 'Panam', 'lpszsz@szop.de', 156497, '0', '0000-00-00', 0, 0, 0, 0),
(3, 'zhou', 'sylvain', '', 0, 0, 0, NULL, '', 0, '', 'srre@hotmail.fr', 0, 'azerty', '0000-00-00', 0, 0, 0, 0),
(4, 'sylvain', 'zhou', '', 0, 0, 0, NULL, '', 0, '', 'sylvainzhou@hotmail.fr', 0, 'azeztesg', '0000-00-00', 0, 0, 0, 0),
(5, 'sylvain', 'zhou', '', 0, 0, 0, NULL, '', 0, '', 'sylvainzhou@hotmail.fr', 0, 'azeztesg', '0000-00-00', 0, 0, 0, 0),
(7, 'efgez', 'zdgzer', '', 0, 0, 0, NULL, '', 0, '', 'dszgzer', 0, 'gzg', '0000-00-00', 0, 0, 0, 0),
(8, 'cz', '', '', 0, 0, 0, NULL, '', 0, '', '', 0, '', '0000-00-00', 0, 0, 0, 0),
(10, 'deddezdz', 'dedede', '', 0, 0, 0, NULL, '', 0, '', 'beatrice.tesor@gmail.com', 0, 'azertyuiop', '0000-00-00', 0, 0, 0, 0),
(11, 'Tésor', 'Béatrice', 'locataire', 0, 1, 27, 'NONE', 'Jean', 0, 'Vanves', 'beatrice.tesor@isep.fr', 769296947, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '0000-00-00', 118, 0, 92170, 0);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
