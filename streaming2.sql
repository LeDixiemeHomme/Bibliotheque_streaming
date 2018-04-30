-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 30 avr. 2018 à 06:21
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `streaming2`
--
CREATE DATABASE IF NOT EXISTS `streaming2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `streaming2`;

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `nom_abo` varchar(20) NOT NULL,
  `prix_abo` int(11) NOT NULL,
  `duree_abo` int(11) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id_a`, `nom_abo`, `prix_abo`, `duree_abo`) VALUES
(1, 'Abonnement_1', 10, 2),
(2, 'Abonnement_2', 15, 3),
(3, 'Abonnement_3', 20, 5);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_c` int(30) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_c`, `libelle`) VALUES
(1, 'drame'),
(2, 'horreur'),
(3, 'aventure'),
(4, 'humour'),
(5, 'romance'),
(6, 'action'),
(7, 'super_hero'),
(8, 'enquete'),
(9, 'guerre');

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--

DROP TABLE IF EXISTS `episode`;
CREATE TABLE IF NOT EXISTS `episode` (
  `id_episode` int(11) NOT NULL AUTO_INCREMENT,
  `numero_epi` int(11) NOT NULL,
  `location_URL_episode` varchar(1000) NOT NULL,
  `id_sai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_episode`),
  KEY `id_sai` (`id_sai`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `episode`
--

INSERT INTO `episode` (`id_episode`, `numero_epi`, `location_URL_episode`, `id_sai`) VALUES
(2, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aAF12LNAeNI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 2);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id_f` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `desc_film` varchar(255) DEFAULT NULL,
  `id_c` int(11) DEFAULT NULL,
  `location_URL_film` varchar(1000) NOT NULL,
  `location_aff_film` varchar(255) NOT NULL,
  PRIMARY KEY (`id_f`),
  KEY `id_c` (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_f`, `titre`, `desc_film`, `id_c`, `location_URL_film`, `location_aff_film`) VALUES
(1, 'American History X', NULL, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZmSPND_VCU8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_americanhistoryx.png'),
(2, 'Ça', NULL, 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Tw3yT-qAbvc\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_ca.png'),
(3, 'Jurassic Park', NULL, 3, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZEY7iMX_oZs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_jurassicpark.png'),
(4, 'La cité de dieu', NULL, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AVQx4cfyiE4\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_lacitededieu.png'),
(5, 'Lalaland', NULL, 5, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vOBtJWG_KlI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_lalaland.png'),
(6, 'Man of steel', NULL, 7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Xw4VeR7tCxU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_manofsteel.png'),
(7, 'Oss 117', NULL, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KSnoKZuKUgU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_oss117.png'),
(8, 'Piège de cristal', NULL, 6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XDg9AkYRWCc\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_piegedecristal.png'),
(9, 'Stalingrad', NULL, 9, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nyW5fd_2ZhI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_stalingrad.png'),
(10, 'Watchmen', NULL, 7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0WeYJ0gCFow\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'pictures/affiches/affiche_film_watchmen.png');

-- --------------------------------------------------------

--
-- Structure de la table `note_film`
--

DROP TABLE IF EXISTS `note_film`;
CREATE TABLE IF NOT EXISTS `note_film` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `note` int(5) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_f` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_note`),
  KEY `id_u` (`id_u`),
  KEY `id_f` (`id_f`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `saison`
--

DROP TABLE IF EXISTS `saison`;
CREATE TABLE IF NOT EXISTS `saison` (
  `id_sai` int(11) NOT NULL AUTO_INCREMENT,
  `numero_sai` int(11) NOT NULL,
  `id_s` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sai`),
  KEY `id_s` (`id_s`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `saison`
--

INSERT INTO `saison` (`id_sai`, `numero_sai`, `id_s`) VALUES
(2, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

DROP TABLE IF EXISTS `serie`;
CREATE TABLE IF NOT EXISTS `serie` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `desc_serie` varchar(255) DEFAULT NULL,
  `id_c` int(11) DEFAULT NULL,
  `location_aff_serie` varchar(255) NOT NULL,
  PRIMARY KEY (`id_s`),
  KEY `id_c` (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `serie`
--

INSERT INTO `serie` (`id_s`, `titre`, `desc_serie`, `id_c`, `location_aff_serie`) VALUES
(1, 'Better Call Saul', NULL, 4, 'pictures/affiches/affiche_serie_bettercallsaul.png'),
(2, 'Breaking Bad', NULL, 1, 'pictures/affiches/affiche_serie_breakingbad.png'),
(3, 'Daredevil', NULL, 7, 'pictures/affiches/affiche_serie_daredevil.png'),
(4, 'Friends', NULL, 4, 'pictures/affiches/affiche_serie_friends.png'),
(5, 'Game of Thrones', NULL, 1, 'pictures/affiches/affiche_serie_gameofthrones.png'),
(6, 'Kaamelott', NULL, 4, 'pictures/affiches/affiche_serie_kaamelott.png'),
(7, 'Malcolm', NULL, 4, 'pictures/affiches/affiche_serie_malcolm.png'),
(8, 'Punisher', NULL, 9, 'pictures/affiches/affiche_serie_punisher.png'),
(9, 'Sherlock', NULL, 8, 'pictures/affiches/affiche_serie_sherlock.png'),
(10, 'Stranger Things', NULL, 3, 'pictures/affiches/affiche_serie_strangerthings.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_u` int(200) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `prenom` varchar(200) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `datelastco` datetime DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `lvl` int(11) DEFAULT '1',
  `id_a` int(11) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`id_u`),
  KEY `id_a` (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_u`, `login`, `mdp`, `nom`, `prenom`, `mail`, `ip`, `datelastco`, `date_inscription`, `lvl`, `id_a`, `date_debut`, `date_fin`) VALUES
(1, 'Benoit', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'valle', 'benoit', 'valle.ea@benoit.fr', '127.0.0.1', '2018-04-30 03:42:53', '2018-04-29 00:02:32', 3, 1, '2018-04-29 19:10:41', '2018-05-01 19:10:41'),
(11, 'test', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'testnom', 'testprenom', 'aze@aze.fr', '127.0.0.1', '2018-04-29 22:08:07', '2018-04-29 00:11:20', 1, 3, '2018-04-29 19:47:59', '2018-05-04 19:47:59'),
(15, 'zeaze', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'qsdaze', 'azesqd', 'azeaze@azeaze.fr', '127.0.0.1', '2018-04-30 01:59:50', '2018-04-29 21:17:37', 1, NULL, NULL, NULL),
(16, '&lt;&lt;&lt;&lt;&lt;&lt;', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'azeaze', 'azeaze', 'euu@hhh.fr', '127.0.0.1', NULL, '2018-04-29 22:06:48', 1, NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_ibfk_1` FOREIGN KEY (`id_sai`) REFERENCES `saison` (`id_sai`);

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `categorie` (`id_c`);

--
-- Contraintes pour la table `note_film`
--
ALTER TABLE `note_film`
  ADD CONSTRAINT `note_film_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`),
  ADD CONSTRAINT `note_film_ibfk_2` FOREIGN KEY (`id_f`) REFERENCES `film` (`id_f`);

--
-- Contraintes pour la table `saison`
--
ALTER TABLE `saison`
  ADD CONSTRAINT `saison_ibfk_1` FOREIGN KEY (`id_s`) REFERENCES `serie` (`id_s`);

--
-- Contraintes pour la table `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `serie_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `categorie` (`id_c`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `abonnement` (`id_a`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
