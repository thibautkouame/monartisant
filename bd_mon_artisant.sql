-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mai 2023 à 14:43
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_mon_artisant`
--

-- --------------------------------------------------------

--
-- Structure de la table `table_admin`
--

DROP TABLE IF EXISTS `table_admin`;
CREATE TABLE IF NOT EXISTS `table_admin` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `mail_admin` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_admin`
--

INSERT INTO `table_admin` (`id`, `mail_admin`) VALUES
(1, 'contact@monartisant.ci');

-- --------------------------------------------------------

--
-- Structure de la table `table_assurances`
--

DROP TABLE IF EXISTS `table_assurances`;
CREATE TABLE IF NOT EXISTS `table_assurances` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `libele_assurance` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_assurances`
--

INSERT INTO `table_assurances` (`id`, `libele_assurance`) VALUES
(1, 'SNU'),
(2, 'COFINA'),
(3, 'LOYAL ASSURANCE'),
(4, 'OLA  ASSURANCE');

-- --------------------------------------------------------

--
-- Structure de la table `table_clients`
--

DROP TABLE IF EXISTS `table_clients`;
CREATE TABLE IF NOT EXISTS `table_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assurance` varchar(191) NOT NULL,
  `nomprenoms` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `contact` int(191) NOT NULL,
  `lieudusinistre` varchar(191) NOT NULL,
  `datesinistre` date NOT NULL,
  `natureinter` varchar(191) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_clients`
--

INSERT INTO `table_clients` (`id`, `assurance`, `nomprenoms`, `email`, `contact`, `lieudusinistre`, `datesinistre`, `natureinter`, `details`) VALUES
(1, 'SNU', 'Kouame Thibaut', 'thibautkouame10@gmail.com', 768981189, 'Bingerville CitÃ© Laurier 18', '2023-05-31', 'Serrurerie\r\n', 'test monartisant');

-- --------------------------------------------------------

--
-- Structure de la table `table_services`
--

DROP TABLE IF EXISTS `table_services`;
CREATE TABLE IF NOT EXISTS `table_services` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `libele_service` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_services`
--

INSERT INTO `table_services` (`id`, `libele_service`) VALUES
(1, 'Plomberie'),
(2, 'Serrurerie\r\n'),
(3, 'Electricite'),
(4, 'Etancheite'),
(5, 'Vitrerie'),
(6, 'Froid et Electromenager');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
