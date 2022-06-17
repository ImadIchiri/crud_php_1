-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : ven. 17 juin 2022 à 21:25
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_mysql_crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `matricule` text DEFAULT NULL,
  `departement` varchar(255) NOT NULL DEFAULT 'pas defini',
  `poste` varchar(255) NOT NULL DEFAULT 'pas defini',
  `dateEmbauche` timestamp NOT NULL DEFAULT current_timestamp(),
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `task`
--

INSERT INTO `task` (`id`, `fullName`, `matricule`, `departement`, `poste`, `dateEmbauche`, `statut`) VALUES
(28, 'Ichiri Imad', 'BW29316', 'Informatique', 'Chef De Projet', '2002-05-28 11:45:35', 1),
(29, 'Ermili Mohmed', 'BW35774', 'Informatique', 'Chef De Projet', '2002-01-15 11:45:35', 1),
(30, 'Ettalbi Mohammed', 'BW21832', 'Informatique', 'Chef De Prejet', '2002-02-01 11:45:35', 1),
(31, 'Saad Mouniri', 'BW12345', 'Informatique', 'Dev Web', '2005-12-28 12:45:35', 1),
(32, 'Rajae Samhi', 'BW12346', 'Informatique', 'Dev Moblie', '2007-01-28 12:45:35', 0),
(33, 'Salim Sliman', 'CH12347', 'Chimie', 'Chimie Organique', '1992-01-28 12:45:35', 1),
(34, 'Abd Errahan KHalid', 'CH12348', 'Chimie', 'Chimie Organique', '1999-05-28 07:45:35', 0),
(35, 'Waeil Mansor', 'CH12349', 'Chimie', 'Chimie Organique', '1998-09-28 09:45:35', 1),
(36, 'Oumaima Idrissi', 'CH12350', 'Chimie', 'Chimie Organique', '1972-05-28 13:45:35', 0),
(37, 'Fatima Hssouni', 'CH12351', 'Chimie', 'Chimie Organique', '1972-05-28 11:45:35', 1),
(38, 'Mourad Bajaoui', 'PH12352', 'Physique', 'Physique Nucléaire', '1972-05-28 11:45:35', 1),
(39, 'Samiha Ali', 'PH12353', 'Physique', 'Physique Nucléaire', '2000-03-28 10:45:35', 0),
(40, 'Dounya Sabri', 'PH12354', 'Physique', 'Physique Nucléaire', '2006-05-28 09:45:35', 1),
(41, 'Oumaima Ait Taleb', 'PH12355', 'Physique', 'Physique Nucléaire', '1989-11-28 12:45:35', 0),
(42, 'Saad Lmoumen', 'PH12356', 'Physique', 'Physique Nucléaire', '1972-05-28 18:45:35', 1),
(43, 'Salwa Tibari', 'MT12357', 'Mathematique', 'Analyse', '1982-05-28 17:45:35', 0),
(44, 'Nourredine Bouchtta', 'MT12358', 'Mathematique', 'Algèbre', '0000-00-00 00:00:00', 1),
(45, 'Elghandor Mansour', 'MT12359', 'Mathematique', 'Analyse', '2002-05-28 11:45:35', 0),
(46, 'Abd Echafi Waeil', 'MT12360', 'Mathematique', 'Algèbre', '2006-03-28 12:45:35', 1),
(47, 'Khalid El Alaoui', 'MT12361', 'Mathematique', 'Statistique', '2004-05-28 11:45:35', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
