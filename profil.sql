-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 04 juin 2018 à 16:26
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
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `ID` int(11) NOT NULL,
  `Nom` char(50) NOT NULL,
  `Prenom` char(50) NOT NULL,
  `Statut` tinytext NOT NULL,
  `NumeroEtage` tinyint(200) NOT NULL,
  `NumeroRue` int(200) NOT NULL,
  `Bis` tinytext,
  `NomRueAveBd` char(50) NOT NULL,
  `NumeroDepartement` int(20) NOT NULL,
  `Ville` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `NumeroTelephone` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Datedenaissance` date NOT NULL,
  `NumeroLogement` int(11) NOT NULL,
  `surface` int(255) NOT NULL,
  `CodePostal` int(5) NOT NULL,
  `Pieces` int(255) NOT NULL,
  `Pays` text NOT NULL,
  `PrefixRue` varchar(255) NOT NULL,
  `TypeHab` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`ID`, `Nom`, `Prenom`, `Statut`, `NumeroEtage`, `NumeroRue`, `Bis`, `NomRueAveBd`, `NumeroDepartement`, `Ville`, `Email`, `NumeroTelephone`, `password`, `Datedenaissance`, `NumeroLogement`, `surface`, `CodePostal`, `Pieces`, `Pays`, `PrefixRue`, `TypeHab`) VALUES
(117, 'dam', 'oi', 'locataire', 2, 5, NULL, '5', 0, '5', 'ggggg@erf.fr', 32767, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '0055-05-05', 13, 5, 5, 5, '5', 'ave', 'Appartement'),
(116, 'Zhou', 'Sylvain', 'locataire', 5, 5, NULL, '5', 0, '5', 'dfg@gh.fr', 32767, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '2018-05-02', 5, 5, 5, 5, '5', 'bd', 'Appartement'),
(115, 'Zhou', 'Sylvain', '', 0, 0, NULL, '', 0, '', 'rshg@hezg.fr', 0, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '0000-00-00', 0, 0, 0, 0, '', '', ''),
(114, 'Zhou', 'Sylvain', 'proprietaire', 127, 6, NULL, 'Sylvain Zhou', 0, 'TORCY', 'sylvainzhou@hotmail.fr', 623875844, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '2018-05-10', 13, 1, 77200, 1, 'France', 'rue', 'Appartement'),
(113, 'Zhou', 'Sylvain', 'proprietaire', 127, 6, NULL, 'Sylvain Zhou', 0, 'TORCY', 'sylvainzhou@hotmail.fr', 623875844, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '2018-05-10', 13, 1, 77200, 1, 'France', 'rue', 'Appartement'),
(112, 'Zhou', 'Sylvain', 'proprietaire', 127, 6, NULL, 'Sylvain Zhou', 0, 'TORCY', 'sylvainzhou@hotmail.fr', 623875844, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '2018-05-10', 13, 1, 77200, 1, 'France', 'rue', 'Appartement'),
(111, 'dam', 'oi', 'locataire', 2, 5, NULL, '5', 0, '5', 'ggggg@erf.fr', 32767, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '0055-05-05', 13, 5, 5, 5, '5', 'ave', 'Appartement'),
(110, 'Zhou', 'Béatrice', 'proprietaire', 0, 0, 'NONE', '/', 0, '/', 'beatrice.tesor@isep.fr', 0, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '0000-00-00', 0, 0, 0, 0, '', '', ''),
(105, 'Zhou', 'Sylvain', 'locataire', 2, 5, NULL, '5', 0, '5', 'ggggg@erf.fr', 32767, '79e476001b0a1bb18a3d4d765c981efb301c2d12', '0055-05-05', 13, 5, 5, 5, '5', 'ave', 'Appartement'),
(106, 'Zhou', 'Sylvain', 'proprietaire', 127, 6, NULL, 'Sylvain Zhou', 0, 'TORCY', 'sylvainzhou@hotmail.fr', 623875844, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '2018-05-10', 13, 1, 77200, 1, 'France', 'rue', 'Appartement'),
(107, 'Mahaut', 'sylviana', 'locataire', 3, 20, 'bis', 'Colonel Pierre Avia', 0, '', 'sylviana.mahaut@isep.fr', 32767, '66c2ea21fffb2ad70dabe90f9144d4fcc73109c6', '1997-12-20', 312, 22, 75015, 1, 'France', 'rue', 'Appartement'),
(121, 'xu', 'leon', '', 0, 0, NULL, '', 0, '', 'leon.xu@isep.fr', 0, 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', '0000-00-00', 0, 0, 0, 0, '', '', ''),
(122, 'ezg', 'zeg', 'locataire', 2, 2, NULL, 'paris', 0, 'Paris', 'zeg@ezgezg.fr', 342314569, 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', '2014-06-04', 2, 45, 75001, 54, 'France', 'bd', 'Maison'),
(103, 'Zhou', 'Sylvain', 'proprietaire', 127, 6, NULL, 'Sylvain Zhou', 0, 'TORCY', 'sylvainzhou@hotmail.fr', 623875844, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '2018-05-10', 13, 1, 77200, 1, 'France', 'rue', 'Appartement'),
(104, 'Zhou', 'Sylvain', 'proprietaire', 127, 6, NULL, 'Sylvain Zhou', 0, 'TORCY', 'sylvainzhou@hotmail.fr', 623875844, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '2018-05-10', 13, 1, 77200, 1, 'France', 'rue', 'Appartement'),
(118, 'Zhou', 'Sylvain', 'proprietaire', 127, 6, NULL, 'Sylvain Zhou', 0, 'TORCY', 'sylvainzhou@hotmail.fr', 623875844, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '2018-05-10', 13, 1, 77200, 1, 'France', 'rue', 'Appartement');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
