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
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `ID` int(11) NOT NULL,
  `nomExp` char(50) NOT NULL,
  `Expediteur` text NOT NULL,
  `Sujet` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time(6) NOT NULL,
  `Reception` text NOT NULL,
  `Message` text NOT NULL,
  `Statut` varchar(12) NOT NULL,
  `Corbeille` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`ID`, `nomExp`, `Expediteur`, `Sujet`, `Date`, `Heure`, `Reception`, `Message`, `Statut`, `Corbeille`) VALUES
(15, '', 'beatrice.tesor@isep.fr', 'Porte qui grince', '2018-06-08', '03:50:51.000000', 'admin@admin.fr', 'Ma porte grince.\r\n\r\nCordialement, Tésor Béatrice', 'locataire', 0),
(16, '', 'beatrice.tesor@isep.fr', 'Porte qui grince', '2018-06-08', '03:51:02.000000', 'admin@admin.fr', 'okk', 'locataire', 0),
(17, '', 'admin@admin.fr', 'Retard de paiement', '2018-06-10', '08:15:30.000000', 'beatrice.tesor@isep.fr', 'Blablabla blablabla', 'admin', 0),
(18, '', 'Sylvain', 'Question', '2018-06-10', '08:31:12.000000', 'admin@admin.fr', 'J\'aimerai créer un compte', 'Internaute e', 0),
(19, 'Léon', 'leon.xu@isep.fr', 'Demande', '2018-06-10', '09:18:14.000000', 'admin@admin.fr', 'J\'aimerai avoir plus d\'informations svp', 'Internaute', 0),
(20, 'Ye', 'admin@admin.fr', 'Re : Porte qui grince', '2018-06-10', '09:27:17.000000', 'beatrice.tesor@isep.fr', 'Je ne peux malheureusement pas vous aider\r\n\r\nCordialement, Kevin Ye', 'admin', 0),
(21, 'TésorBéatrice', 'beatrice.tesor@isep.fr', 'Chaise cassée', '2018-06-10', '09:32:43.000000', 'admin@admin.fr', 'Ma chaise est cassée.\r\nCordialement, TESOR Béatrice', 'proprietaire', 0),
(22, 'Ye Kevin', 'admin@admin.fr', 'Re : chaise cassée', '2018-06-10', '09:34:10.000000', 'beatrice.tesor@isep.fr', 'Je ne peux rien faire non plus.\r\nCordialement, Kevin Ye', 'admin', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
