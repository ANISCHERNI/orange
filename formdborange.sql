-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 avr. 2020 à 12:33
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formdborange`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaires`
--

DROP TABLE IF EXISTS `formulaires`;
CREATE TABLE IF NOT EXISTS `formulaires` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `population` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chekbox` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formulaires`
--

INSERT INTO `formulaires` (`id`, `nom`, `prenom`, `departement`, `formation`, `autre`, `radio`, `population`, `chekbox`, `created_at`, `updated_at`) VALUES
(1, 'Commodi sint excepte', 'Ducimus deserunt vo', 'Earum sunt quos obca', 'Error elit doloribu', 'Omnis et sequi esse', 'oui', 'Repudiandae quas cup', '1,2', '2020-04-16 09:29:46', '2020-04-16 09:29:46'),
(2, 'Est tenetur odit nat', 'Facere veritatis quo', 'Amet cum ducimus r', 'Dolor magni beatae v', 'Necessitatibus deser', 'oui', 'Maxime id dolores su', '1', '2020-04-16 10:57:42', '2020-04-16 10:57:42'),
(3, 'Ut voluptatibus odio', 'Laborum Porro dolor', 'Doloribus architecto', 'Nisi nulla autem ut', 'Sequi recusandae Qu', 'non', 'Aut tempor ut quo ac', '2,3', '2020-04-16 10:57:49', '2020-04-16 10:57:49'),
(4, 'Id unde enim qui cup', 'Alias numquam minim', 'Dolores quod sapient', 'Non error nihil aut', 'Enim qui illum lore', 'non', 'Deserunt in et est', '1,3,4', '2020-04-16 10:57:55', '2020-04-16 10:57:55'),
(5, 'Corrupti sed ea inc', 'Qui atque blanditiis', 'Qui asperiores volup', 'Est id sunt magna di', 'Tempora ex dolor ess', 'non', 'Rerum quod cupiditat', '1', '2020-04-16 10:58:07', '2020-04-16 10:58:07'),
(6, 'Consectetur fugiat', 'Exercitation eos ver', 'Ratione sit vero ac', 'Voluptate dolor alia', 'Esse quia eius mini', 'non', 'Exercitation neque n', '1,2,3,4', '2020-04-16 10:58:29', '2020-04-16 10:58:29'),
(7, 'Eveniet beatae expl', 'Ipsam perspiciatis', 'Sit commodo et moll', 'Aliquam iusto aliqua', 'Non tempora in ipsam', 'oui', 'Ex doloremque minus', '1,3', '2020-04-16 13:58:35', '2020-04-16 13:58:35'),
(8, 'Aut et et sunt ex iu', 'Non recusandae Magn', 'Reiciendis voluptate', 'Quis irure sit sequ', 'Rerum quia voluptas', 'non', 'Modi eius vel vitae', '3,4', '2020-04-16 13:58:45', '2020-04-16 13:58:45'),
(9, 'Non eveniet nisi ma', 'Voluptatem Voluptat', 'Quasi expedita conse', 'Quis odit qui quae r', 'Itaque et minim plac', 'non', 'Qui veritatis labori', '1,2', '2020-04-21 06:35:24', '2020-04-21 06:35:24'),
(10, 'Libero quia consequa', 'Culpa est reiciendis', 'Nihil sint officia n', 'Dolores sequi adipis', 'Asperiores sit nost', 'non', 'Sed accusantium fugi', '3', '2020-04-21 10:13:43', '2020-04-21 10:13:43');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_15_151716_create_formulaires_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anis', 'anischerni@gmail.com', NULL, '$2y$10$95JSszzEUfVPeV4nYSteMOEv.v/lcCqB2pDTfKRA2oKuGjpzH5J5C', NULL, '2020-04-21 09:31:57', '2020-04-21 09:31:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
