-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 12 juin 2018 à 10:50
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
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nom` text NOT NULL,
  `NumSerie` varchar(255) NOT NULL,
  `Etat` tinyint(1) NOT NULL,
  `Description` text NOT NULL,
  `seuilT` int(255) NOT NULL,
  `temperature` int(255) NOT NULL,
  `SeuilD` int(255) NOT NULL,
  `Presence` tinyint(1) NOT NULL,
  `SeuilL` int(255) NOT NULL,
  `Luminosite` int(255) NOT NULL,
  `sonore` int(255) NOT NULL,
  `idpiece` int(11) NOT NULL,
  `piece` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`id`, `type`, `nom`, `NumSerie`, `Etat`, `Description`, `seuilT`, `temperature`, `SeuilD`, `Presence`, `SeuilL`, `Luminosite`, `sonore`, `idpiece`, `piece`, `iduser`) VALUES
(1, 'température', 'chaud', ' 15663663', 0, ' ahaha', 15, 0, 0, 0, 0, 0, 0, 0, 'salon', 0),
(2, 'Temperature', 'Temperature-froid', '453453', 0, 'ahaha', 53, 0, 0, 0, 0, 0, 0, 0, 'chambre1', 0),
(3, 'Temperature', 'Temperature-thermomètre', '545353', 0, 'ahaha', 10, 0, 0, 0, 0, 0, 0, 0, 'salon', 0),
(4, 'Temperature', 'Luminosite-globe', '4253453', 0, 'ahah', 10, 0, 0, 0, 0, 0, 0, 0, 'salle_de_bain2', 0),
(5, 'Luminosite', 'Luminosite-globe', '4253453', 0, 'ahah', 0, 0, 0, 0, 10, 0, 0, 0, 'salle_de_bain2', 0),
(6, 'Presence', 'Presence-mouvement', '151515', 0, 'ahah', 0, 0, 15, 0, 0, 0, 0, 0, 'toilettes', 0),
(7, 'Presence', 'Presence-mouvement', '151515', 0, 'ahah', 0, 0, 15, 0, 0, 0, 0, 0, 'toilettes', 0),
(8, 'Luminosite', 'Luminosite-globe', '1651615615', 0, 'ahaha', 0, 0, 0, 0, 20, 0, 0, 0, 'salle_de_bain1', 0),
(9, 'Luminosite', 'Luminosite-globe', '1651615615', 0, 'ahaha', 0, 0, 0, 0, 20, 0, 0, 0, 'salle_de_bain1', 0),
(10, 'Presence', 'Presence-present', '234435', 0, 'ahah', 0, 0, 2345, 0, 0, 0, 0, 0, 'chambre1', 0),
(11, 'Presence', 'Presence-present', '234435', 0, 'ahah', 0, 0, 2345, 0, 0, 0, 0, 0, 'chambre1', 0),
(12, 'Luminosite', 'Luminosite-ampoule', '252453', 0, 'ahah', 0, 0, 0, 0, 12, 0, 0, 0, 'cuisine', 0),
(13, 'Luminosite', 'Luminosite-ampoule', '252453', 0, 'ahah', 0, 0, 0, 0, 12, 0, 0, 0, 'cuisine', 0),
(14, 'Luminosite', 'Luminosite-ampoule', '252453', 0, 'ahah', 0, 0, 0, 0, 12, 0, 0, 0, 'cuisine', 0),
(15, 'Temperature', 'Temperature-thermomètre', '285', 0, 'iuoi', 158, 0, 0, 0, 0, 0, 0, 0, 'chambre1', 0),
(16, 'Presence', 'Presence-bouge', '132121', 0, 'ihihi', 0, 0, 15, 0, 0, 0, 0, 0, 'cuisine', 0),
(17, 'Luminosite', 'Luminosite-lustre', '64646', 0, 'hnijh', 0, 0, 0, 0, 85, 0, 0, 0, 'toilettes', 0),
(18, 'Luminosite', 'Luminosite-lampe_de_bureau', '45345345', 0, 'ohoh', 0, 0, 0, 0, 12, 0, 0, 0, 'salle_de_bain2', 0),
(19, 'Luminosite', 'Luminosite-lustre', '22222', 0, 'LOL', 0, 0, 0, 0, 22, 0, 0, 0, 'salon', 123),
(20, 'Temperature', 'Temperature-thermomètre', '5555', 0, 'Près du robinet', 10, 0, 0, 0, 0, 0, 0, 6, '', 123);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
