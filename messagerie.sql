-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 juin 2018 à 12:54
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

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

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Expediteur` text NOT NULL,
  `Sujet` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time(6) NOT NULL,
  `Reception` text NOT NULL,
  `Message` text NOT NULL,
  `Statut` varchar(12) NOT NULL,
  `Corbeille` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`ID`, `Expediteur`, `Sujet`, `Date`, `Heure`, `Reception`, `Message`, `Statut`, `Corbeille`) VALUES
(1, 'Toi', 'Teste', '2006-05-08', '00:00:00.000000', 'Moi', 'Bonjour', 'Admin', 1),
(2, 'Sylvain', 'Bonjour', '2018-05-23', '00:00:00.000000', 'Kévin', 'Cordialement', 'Admin', 1),
(3, 'Sylvain', 'Bonjour', '2018-05-23', '00:00:00.000000', 'Kévin', 'Cordialement', 'Admin', 0),
(4, 'fez,ok;', 'buhnij,', '2018-05-30', '00:00:00.000000', 'moi', 'vebcundi,okxps', 'admin', 1),
(5, 'fez,ok;', 'buhnij,', '2018-05-30', '00:00:00.000000', 'moi', 'vebcundi,okxps', 'admin', 1),
(7, 'Tésorleon.xu@isep.fr', 'TEST', '2018-05-25', '12:45:35.000000', 'Leon', 'lol\r\n', 'admin', 0),
(8, 'Tésor ; leon.xu@isep.fr', 'TEST', '2018-05-25', '12:47:55.000000', 'Leon', 'oh oh', 'admin', 1),
(9, 'XU ; ', 'TEST', '2018-05-25', '01:46:24.000000', 'Leon', '', 'admin', 1),
(10, 'Urchade ; leon.xu@isep.fr', 'TEST', '2018-05-25', '02:23:36.000000', 'Leon', 'cgrfhtgdhd', 'admin', 1),
(11, 'Picone ; leon.xu@isep.fr', 'TEST', '2018-05-25', '02:40:29.000000', 'Leon', 'youpi', 'admin', 1),
(12, 'Mahaut ; fr@fr.fr', 'TEST', '2018-05-29', '09:28:43.000000', 'Leon', 'peu importe', 'admin', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
