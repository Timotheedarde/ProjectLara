-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 fév. 2021 à 10:44
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
-- Base de données : `projectlara`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualities`
--

DROP TABLE IF EXISTS `actualities`;
CREATE TABLE IF NOT EXISTS `actualities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Titre principal',
  `content` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Contenu de l''actualité',
  `picture_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Lien image',
  `link_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Lien vers src externe',
  `category_id` int(11) DEFAULT NULL COMMENT 'Identifiant de la categorie d''une news',
  PRIMARY KEY (`id`),
  KEY `actualities_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualities`
--

INSERT INTO `actualities` (`id`, `created_at`, `updated_at`, `deleted_at`, `title`, `content`, `picture_url`, `link_url`, `category_id`) VALUES
(2, '2021-02-10 10:18:40', '2021-02-10 10:18:40', NULL, 'Live sur Twitch', 'Malgré la fermeture des salles de spectacle, on est toujours là. Retrouvez nous pour un live sur twitch vendredi soir dès 21H. Suprises et Guests', 'https://www.wideagency.ch/sites/default/files/2020-10/twitch.jpg', 'https://www.twitch.tv/yaumii', NULL),
(3, '2021-02-10 16:10:02', '2021-02-10 16:10:02', NULL, 'Prochain concert les amis !', 'La prochaine date est annoncée ! Il est temps de réserver vos places <3', 'https://static.cnews.fr/sites/default/files/olympia_2_5fd09a6ca6a34_0.jpg', 'https://www.ticketmaster.fr/fr/manifestation/alicia-keys-billet/idmanif/486174', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `label` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Label',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `deleted_at`, `label`) VALUES
(1, '2021-02-09 14:34:57', '2021-02-09 14:34:57', NULL, 'Concert'),
(2, '2021-02-09 14:35:00', '2021-02-09 14:35:00', NULL, 'Enregistrement');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `author` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Auteur du commentaire',
  `content` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Contenu du commentaire',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_08_093357_create_categories_table', 1),
(2, '2021_02_08_150819_create_tracks_table', 1),
(3, '2021_02_08_150852_create_comments_table', 1),
(4, '2021_02_08_150932_create_actualities_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tracks`
--

DROP TABLE IF EXISTS `tracks`;
CREATE TABLE IF NOT EXISTS `tracks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Titre de la chanson',
  `track_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL de l''upload',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tracks`
--

INSERT INTO `tracks` (`id`, `created_at`, `updated_at`, `deleted_at`, `title`, `track_url`) VALUES
(1, '2021-02-10 13:56:48', '2021-02-10 14:23:11', NULL, 'Titre 1', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/new_year_dubstep_minimix.ogg'),
(2, '2021-02-10 14:22:35', '2021-02-10 14:22:35', NULL, 'Titre 2', 'https://www.auboutdufil.com/get.php?fla=https://archive.org/download/meydan-changes/Meydan-Changes.mp3'),
(3, '2021-02-10 14:22:52', '2021-02-10 14:22:52', NULL, 'Titre 3', 'https://www.auboutdufil.com/get.php?fla=https://archive.org/download/stellardrone-to-the-great-beyond/Stellardrone-ToTheGreatBeyond.mp3'),
(4, '2021-02-10 14:23:05', '2021-02-10 14:24:08', NULL, 'Titre 4', 'https://www.auboutdufil.com/get.php?fla=https://archive.org/download/underthegaiac-wildbirth/Underthegaiac_wildbirth.mp3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
