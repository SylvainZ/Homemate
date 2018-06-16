-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 juin 2018 à 08:26
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
  `nomExp` char(50) NOT NULL,
  `Expediteur` text NOT NULL,
  `Sujet` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time(6) NOT NULL,
  `Reception` text NOT NULL,
  `Message` text NOT NULL,
  `Statut` varchar(12) NOT NULL,
  `Corbeille` tinyint(1) NOT NULL DEFAULT '0',
  `Consulte` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`ID`, `nomExp`, `Expediteur`, `Sujet`, `Date`, `Heure`, `Reception`, `Message`, `Statut`, `Corbeille`, `Consulte`) VALUES
(15, '', 'beatrice.tesor@isep.fr', 'Porte qui grince', '2018-06-08', '03:50:51.000000', 'admin@admin.fr', 'Ma porte grince.\r\n\r\nCordialement, Tésor Béatrice', 'locataire', 0, 0),
(16, '', 'beatrice.tesor@isep.fr', 'Porte qui grince', '2018-06-08', '03:51:02.000000', 'admin@admin.fr', 'okk', 'locataire', 0, 0),
(17, '', 'admin@admin.fr', 'Retard de paiement', '2018-06-10', '08:15:30.000000', 'beatrice.tesor@isep.fr', 'Blablabla blablabla', 'admin', 0, 0),
(18, '', 'Sylvain', 'Question', '2018-06-10', '08:31:12.000000', 'admin@admin.fr', 'J\'aimerai créer un compte', 'Internaute e', 0, 0),
(19, 'Léon', 'leon.xu@isep.fr', 'Demande', '2018-06-10', '09:18:14.000000', 'admin@admin.fr', 'J\'aimerai avoir plus d\'informations svp', 'Internaute', 0, 0),
(20, 'Ye', 'admin@admin.fr', 'Re : Porte qui grince', '2018-06-10', '09:27:17.000000', 'beatrice.tesor@isep.fr', 'Je ne peux malheureusement pas vous aider\r\n\r\nCordialement, Kevin Ye', 'admin', 1, 0),
(21, 'TésorBéatrice', 'beatrice.tesor@isep.fr', 'Chaise cassée', '2018-06-10', '09:32:43.000000', 'admin@admin.fr', 'Ma chaise est cassée.\r\nCordialement, TESOR Béatrice', 'proprietaire', 0, 0),
(22, 'Ye Kevin', 'admin@admin.fr', 'Re : chaise cassée', '2018-06-10', '09:34:10.000000', 'beatrice.tesor@isep.fr', 'Je ne peux rien faire non plus.\r\nCordialement, Kevin Ye', 'admin', 1, 0),
(23, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 1, 0),
(24, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 1, 0),
(25, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 1, 0),
(26, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 1, 0),
(27, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 1, 0),
(28, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 1, 0),
(29, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 1, 0),
(30, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 0, 0),
(31, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 0, 0),
(32, 'Léon', 'leon.xu@isep.fr', 'Affichage par page', '2018-06-11', '08:21:22.403201', 'beatrice.tesor@isep.fr', 'PAR PAGES', 'prop', 0, 0),
(33, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(34, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(35, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(36, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(37, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(38, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(39, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(40, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(41, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(42, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(43, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(44, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(45, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(46, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(47, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(48, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(49, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(50, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(51, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(52, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(53, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(54, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(55, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(56, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(57, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(58, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(59, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(60, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(61, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(62, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(63, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(64, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(65, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(66, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(67, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(68, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0),
(69, 'Léon', 'leon.xu@isep.fr', 'Tjrs plus de message', '2018-06-11', '06:12:39.497458', 'beatrice.tesor@isep.fr', 'Toujours plus !!!', 'prop', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
