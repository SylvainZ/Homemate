-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 12 juin 2018 à 12:07
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

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
-- Structure de la table `actionneurs`
--

CREATE TABLE `actionneurs` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Numserie` int(255) NOT NULL,
  `Etat` int(1) NOT NULL,
  `volet` int(11) NOT NULL,
  `interrupteur` int(11) NOT NULL,
  `idpiece` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `iduser` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actionneurs`
--

INSERT INTO `actionneurs` (`ID`, `nom`, `Numserie`, `Etat`, `volet`, `interrupteur`, `idpiece`, `type`, `iduser`) VALUES
(4, 'volet', 878, 0, 0, 0, 29, 'volet', 124),
(6, 'Interrupteur', 65375375, 0, 0, 0, 0, 'Interrupteur', 124),
(9, 'Interrupteur', 61655, 1, 0, 0, 29, 'Interrupteur', 124);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actionneurs`
--
ALTER TABLE `actionneurs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actionneurs`
--
ALTER TABLE `actionneurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
