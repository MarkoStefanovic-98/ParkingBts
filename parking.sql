-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 05 Juin 2019 à 00:48
-- Version du serveur :  5.7.26-0ubuntu0.16.04.1
-- Version de PHP :  7.0.33-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `parking`
--

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE `place` (
  `id_p` int(10) NOT NULL,
  `nom_p` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `place`
--

INSERT INTO `place` (`id_p`, `nom_p`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

CREATE TABLE `reserver` (
  `id_r` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `date_deb` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `lvl` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reserver`
--

INSERT INTO `reserver` (`id_r`, `id_u`, `id_p`, `date_deb`, `date_fin`, `lvl`, `timestamp`) VALUES
(1, 15, 1, '2019-01-01', '2019-07-10', 1, '2019-06-04 19:39:39'),
(18, 22, 3, '2019-06-04', '2019-06-13', 1, '2019-06-04 21:17:59'),
(19, 22, 4, '2019-06-06', '2019-06-14', 2, '2019-06-04 21:17:22'),
(20, 16, 5, '2019-06-05', '2019-06-06', 1, '2019-06-04 21:17:56');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `attente` int(11) NOT NULL DEFAULT '1',
  `lvl` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `nom`, `prenom`, `mail`, `mdp`, `attente`, `lvl`) VALUES
(16, 'user', 'user', 'user@user.fr', '12dea96fec20593566ab75692c9949596833adc9', 1, 2),
(15, 'stefanovic', 'marko', 'markostef@hotmail.fr', '9efe9a5a1da5f41a4eb7599f2715dc24abf5bbc8', 1, 3),
(17, 'admin', 'admin', 'admin@admin.fr', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 3),
(22, 'Demandeur', 'demandeur', 'demandeur@demandeur.fr', '8452ab647f6437b9e88d7b67cf77dee1c446f272', 1, 2),
(25, 'stefanovic', 'mar', 'marko@hotmail.fr', '9efe9a5a1da5f41a4eb7599f2715dc24abf5bbc8', 1, 2),
(28, 'Inscrit', 'Inscrit', 'inscrit@inscrit.fr', 'df536ab98561c8ac1c4c0491022b90acae3602eb', 1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `nom_p` (`nom_p`);

--
-- Index pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_p` (`id_p`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `place`
--
ALTER TABLE `place`
  MODIFY `id_p` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `reserver`
--
ALTER TABLE `reserver`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
