-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 11 juin 2018 à 10:30
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
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `ID` int(11) NOT NULL,
  `Nom` char(50) NOT NULL,
  `Prenom` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `Datedenaissance` date NOT NULL,
  `Adresse` text NOT NULL,
  `CodePostal` int(5) NOT NULL,
  `Ville` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `Pays` text NOT NULL,
  `Telephone` int(10) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Statut` varchar(5) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`ID`, `Nom`, `Prenom`, `Email`, `Datedenaissance`, `Adresse`, `CodePostal`, `Ville`, `password`, `Pays`, `Telephone`, `ID_user`, `Statut`) VALUES
(1, 'Ye', 'Kevin', 'admin@admin.fr', '1997-12-20', '27 Rue Jean Bleuzen', 92130, 'Issy-Les-Moulineaux', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'France', 769545454, 0, 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
