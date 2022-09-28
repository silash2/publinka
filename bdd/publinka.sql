-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 01 jan. 2006 à 00:28
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `publinka`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE `accueil` (
  `id` int(255) NOT NULL,
  `texte` text NOT NULL,
  `date` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscription_admin`
--

CREATE TABLE `inscription_admin` (
  `id` int(255) NOT NULL,
  `nomEtprenom` text NOT NULL,
  `numero` varchar(2000) NOT NULL,
  `dateDenaissance` varchar(2000) NOT NULL,
  `adressse` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `pswrd` varchar(2000) NOT NULL,
  `confpswrd` varchar(2000) NOT NULL,
  `likeCondition` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscription_members`
--

CREATE TABLE `inscription_members` (
  `id` int(255) NOT NULL,
  `nomEtprenom` text NOT NULL,
  `numero` varchar(2000) NOT NULL,
  `dateDenaissance` varchar(2000) NOT NULL,
  `adressse` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `pswrd` varchar(2000) NOT NULL,
  `confpswrd` varchar(2000) NOT NULL,
  `likeCondition` varchar(2000) NOT NULL,
  `verification` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pink`
--

CREATE TABLE `pink` (
  `id` int(255) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `typeFile` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `savefile`
--

CREATE TABLE `savefile` (
  `id` int(255) NOT NULL,
  `numero` varchar(2000) NOT NULL,
  `file_save` varchar(2000) NOT NULL,
  `commente` text NOT NULL,
  `vue` varchar(2000) NOT NULL,
  `commentaire` text NOT NULL,
  `typeFile` varchar(2000) NOT NULL,
  `correction` varchar(2000) NOT NULL,
  `nombreCorrection` int(255) NOT NULL,
  `couleur` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription_admin`
--
ALTER TABLE `inscription_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription_members`
--
ALTER TABLE `inscription_members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pink`
--
ALTER TABLE `pink`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `savefile`
--
ALTER TABLE `savefile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accueil`
--
ALTER TABLE `accueil`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscription_admin`
--
ALTER TABLE `inscription_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscription_members`
--
ALTER TABLE `inscription_members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pink`
--
ALTER TABLE `pink`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `savefile`
--
ALTER TABLE `savefile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
