-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 04 août 2020 à 14:39
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
-- Structure de la table `kgtp_deliveryprice`
--

DROP TABLE IF EXISTS `kgtp_deliveryprice`;
CREATE TABLE IF NOT EXISTS `kgtp_deliveryprice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weight min` int(20) NOT NULL,
  `weight max` int(20) NOT NULL,
  `price` float NOT NULL,
  `id_kgtp_deliveryMethod` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `_kgtp_deliveryPrice_kgtp_deliveryMethod_FK` (`id_kgtp_deliveryMethod`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kgtp_deliveryprice`
--

INSERT INTO `kgtp_deliveryprice` (`id`, `weight min`, `weight max`, `price`, `id_kgtp_deliveryMethod`) VALUES
(1, 10, 250, 4.95, 1),
(2, 251, 500, 6.35, 1),
(3, 501, 750, 7.25, 1),
(4, 751, 1000, 7.95, 1),
(5, 1001, 2000, 8.95, 1),
(6, 2001, 5000, 13.75, 1),
(7, 5001, 10000, 20.05, 1),
(8, 10001, 30000, 28.55, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `kgtp_deliveryprice`
--
ALTER TABLE `kgtp_deliveryprice`
  ADD CONSTRAINT `_kgtp_deliveryPrice_kgtp_deliveryMethod_FK` FOREIGN KEY (`id_kgtp_deliveryMethod`) REFERENCES `kgtp_deliverymethod` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
