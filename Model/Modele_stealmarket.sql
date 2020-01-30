-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 30 jan. 2020 à 15:24
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stealmarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `articles` varchar(22) NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `ur` varchar(355) NOT NULL DEFAULT 'nourl',
  `prix_ali_express` int(11) NOT NULL DEFAULT '0',
  `promo_ali_express` int(11) NOT NULL DEFAULT '0',
  `src` varchar(355) NOT NULL DEFAULT 'nosrc',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID`, `articles`, `categorie`, `prix`, `stock`, `ur`, `prix_ali_express`, `promo_ali_express`, `src`) VALUES
(1, 'Boucle a pince en or', 'Boucle', 359, 10, 'nourl', 0, 0, 'nosrc'),
(2, 'Chevalière Vermeil', 'Bague', 90, 20, 'nourl', 0, 0, 'nosrc'),
(3, 'pull beige laine', 'Homme', 70, 60, 'nourl', 0, 0, 'nosrc'),
(4, 'Robe a dentelle', 'Femme', 99, 6, 'nourl', 0, 0, 'nosrc'),
(5, 'Robe bleu avec dentell', '', 60, 12, 'nourl', 0, 0, 'nosrc'),
(6, 'Bague de fiançaille', 'Bague', 350, 3, 'nourl', 0, 0, 'nosrc'),
(7, 'Chemise en lin', 'Homme', 105, 25, 'nourl', 0, 0, 'nosrc'),
(8, 'Montre clueless', 'Montre', 145, 10, 'nourl', 0, 0, 'nosrc'),
(9, 'Montre lee Cooper', 'Montre', 350, 20, 'nourl', 0, 0, 'nosrc'),
(10, 'Montre Emilio Zagato', 'Montre', 299, 23, 'nourl', 0, 0, 'nosrc'),
(11, 'Boucle d\'oreille Noir', 'Boucle', 29, 10, 'nourl', 0, 0, 'nosrc'),
(12, 'Collier infini', 'Collier', 89, 20, 'nourl', 0, 0, 'nosrc'),
(13, 'Collier discret', 'Collier', 59, 10, 'nourl', 0, 0, 'nosrc'),
(14, 'Robe blanche ', 'Femme', 49, 50, 'nourl', 0, 0, 'nosrc'),
(15, 'Homme1', 'Homme', 25, 50, 'nourl', 0, 0, 'nosrc'),
(16, 'Homme2', 'Homme', 30, 60, 'nourl', 0, 0, 'nosrc'),
(17, 'Homme3', 'Homme', 25, 50, 'nourl', 0, 0, 'nosrc'),
(18, 'Homme4', 'Homme', 25, 50, 'nourl', 0, 0, 'nosrc'),
(19, 'poi', 'Homme', 20, 100, 'nourl', 0, 0, 'nosrc'),
(20, 'poiuy', 'Homme', 123, 100, 'nourl', 0, 0, 'nosrc'),
(21, 'p', 'Homme', 123, 100, 'nourl', 83, 0, 'nosrc'),
(22, 'poiu', 'Homme', 123, 100, 'nourl', 83, 0, 'nosrc'),
(23, 'az', 'Homme', 123, 100, 'https://fr.aliexpress.com/item/32907322816.html?spm=a2g01.12597576.p99adbb.16.392d51857z0Ru1&amp;gps-id=7317040&amp;scm=1007.19881.118560.0&amp;scm_id=1007.19881.118560.0&amp;scm-url=1007.19881.118560.0&amp;pvid=def20a7e-a7e5-4f93-be90-e3666e4111b2', 83, 0, 'nosrc'),
(24, 'ml', 'Homme', 123, 100, 'https://fr.aliexpress.com/item/32907322816.html?spm=a2g01.12597576.p99adbb.16.392d51857z0Ru1&amp;gps-id=7317040&amp;scm=1007.19881.118560.0&amp;scm_id=1007.19881.118560.0&amp;scm-url=1007.19881.118560.0&amp;pvid=def20a7e-a7e5-4f93-be90-e3666e4111b2', 83, 53, 'nosrc'),
(25, 'ldld', 'Homme', 78, 100, 'https://fr.aliexpress.com/item/32974182227.html?spm=a2g0o.detail.1000060.2.6f7f77ddsn19Xm&amp;gps-id=pcDetailBottomMoreThisSeller&amp;scm=1007.13339.146401.0&amp;scm_id=1007.13339.146401.0&amp;scm-url=1007.13339.146401.0&amp;pvid=40ecd392-df2c-4b1e-a0d4-1d00940278eb', 52, 53, 'https://ae01.alicdn.com/kf/H7f6253f1209947d4a540eba8fd42221do/Tiger-Force-grande-taille-hommes-printemps-automne-veste-hommes-Parka-solide-veste-m-le-capuche-manteau.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
