-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 06 jan. 2020 à 18:31
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

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

CREATE TABLE `articles` (
  `ID` int(11) NOT NULL,
  `articles` varchar(50) NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID`, `articles`, `categorie`, `prix`, `stock`) VALUES
(1, 'Femme Top Noir', 'Femme', 10, 50),
(2, 'Femme Robe moulante bo', 'Femme', 10, 150),
(6, 'Robe bordeau', 'Femme', 40, 0),
(10, 'femme pull bleu', 'Femme', 15, 0),
(9, 'Femme robe verte', 'Femme', 58, 0),
(16, 'pull homme', '', 50, 46),
(15, 'Femme jean bleu', '', 25, 3),
(14, 'Boucle d\'oreille', '', 30, 20),
(17, 'Robe bleu avec dentell', '', 60, 12);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `ID` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ID_utilisateurs` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commandes`
--

CREATE TABLE `ligne_commandes` (
  `ID` int(11) NOT NULL,
  `ligne_comandes` varchar(45) NOT NULL,
  `ID_articles` int(11) NOT NULL,
  `ID_commandes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `liste_paiements`
--

CREATE TABLE `liste_paiements` (
  `ID` int(11) NOT NULL,
  `paiement_restant_a_effectuer` int(11) NOT NULL,
  `ID_paiement(s)` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `ID` int(11) NOT NULL,
  `ID_commandes` int(11) NOT NULL,
  `paiement(s)` int(11) NOT NULL,
  `mode de paiement` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `fonction` varchar(45) NOT NULL DEFAULT 'utilisateur',
  `mdp` varchar(45) NOT NULL,
  `adresse_mail` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `complement` varchar(50) NOT NULL,
  `telephone` bigint(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `nom`, `prenom`, `fonction`, `mdp`, `adresse_mail`, `adresse`, `code_postal`, `ville`, `pays`, `complement`, `telephone`) VALUES
(1, 'mpassy', 'william', '', 'Xaaa', 'williammpassy@gmail.com', '13 rue patoche', 75000, 'paris', 'france', '3', 2147483647),
(2, 'mpassy', 'william', 'utilisateur', 'Xaaa', 'williammpassy@gmail.com', '13 rue patoche', 75000, 'paris', 'france', '3', 2147483647),
(3, 'mpassy', 'william', 'utilisateur', 'Xaaa', 'williammpassy@gmail.com', '13 rue patoche', 75000, 'paris', 'france', '3', 2147483647),
(4, 'mpassy', 'william', 'utilisateur', 'Xaaa', 'williammpassy@gmail.com', '13 rue patoche', 75000, 'paris', 'france', '3', 6650657755),
(5, 'mpassy', 'william', 'utilisateur', 'Xaaaa', 'iExterminity@gmail.com', '13 rue du Cognassier', 91270, 'vigneux-sur-seine', 'france', '13', 665065731),
(6, 'mpassy', 'william', 'utilisateur', 'Zaaa', 'iExterminity@gmail.com', '13 rue du Cognassier', 91270, 'vigneux-sur-seine', 'france', '13', 665065731),
(7, 'renÃ©e louis', 'thylane', 'utilisateur', 'Xaaaa', 'po@.fr', '13 rue du Cognassier', 91, 'vigneux-sur-seine', 'france', '3', 3240);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
