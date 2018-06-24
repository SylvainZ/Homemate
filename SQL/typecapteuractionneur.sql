-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 24 juin 2018 à 22:49
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
-- Structure de la table `typecapteuractionneur`
--

CREATE TABLE `typecapteuractionneur` (
  `ID_type` int(11) NOT NULL,
  `nomType` char(50) NOT NULL,
  `Capteur` int(1) NOT NULL DEFAULT '0',
  `Actionneur` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typecapteuractionneur`
--

INSERT INTO `typecapteuractionneur` (`ID_type`, `nomType`, `Capteur`, `Actionneur`) VALUES
(1, 'Sonore', 1, 0),
(3, 'Lampe', 0, 1),
(4, 'Humidité', 1, 0),
(5, 'Presence', 1, 0),
(7, 'Volet', 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `typecapteuractionneur`
--
ALTER TABLE `typecapteuractionneur`
  ADD PRIMARY KEY (`ID_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `typecapteuractionneur`
--
ALTER TABLE `typecapteuractionneur`
  MODIFY `ID_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
