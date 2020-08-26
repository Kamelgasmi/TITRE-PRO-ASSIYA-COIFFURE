-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 juil. 2020 à 12:13
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `assiyacoiffure`
--

-- --------------------------------------------------------

--
-- Structure de la table `kgtp_categories`
--

CREATE TABLE IF NOT EXISTS `kgtp_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `simplifiedName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kgtp_categories`
--

INSERT INTO `kgtp_categories` (`id`, `name`, `simplifiedName`) VALUES
(1, 'tous types de cheveux', 'tous-types-de-cheveux'),
(2, 'cheveux boucles', 'cheveux-boucles'),
(3, 'cheveux colores', 'cheveux-colores'),
(4, 'cheveux abimes', 'cheveux-abimes'),
(5, 'cheveux secs', 'cheveux-secs'),
(6, 'coiffants', 'coiffants');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
