-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : lun. 03 juin 2024 à 16:07
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myecolo2`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `picture`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ensias', 'admin@um5.ac.ma', 'ADMIN_IMG_89111717402696665d7c483fd4b.jpg', '$2y$10$GpWQclbQIisq9ojXEYGQDuOw7OB1KRt2O/zDfjfO2WCQKH2PIj2Bu', NULL, '2024-06-02 22:54:17', '2024-06-03 07:18:16');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT 10000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `ordering`, `created_at`, `updated_at`) VALUES
(1, 'Fruits', 'fruits', 1, '2024-06-02 22:55:07', '2024-06-03 12:58:00'),
(2, 'Légumes', 'legumes', 2, '2024-06-02 22:55:13', '2024-06-03 12:58:00'),
(3, 'Produits Laitiers', 'produits-laitiers', 6, '2024-06-02 22:55:21', '2024-06-03 00:25:51'),
(4, 'Boulangerie', 'boulangerie', 7, '2024-06-02 22:55:25', '2024-06-03 00:25:51'),
(5, 'Épicerie', 'epicerie', 3, '2024-06-02 22:55:28', '2024-06-03 12:58:00'),
(6, 'Boissons et Liquides', 'boissons-et-liquides', 5, '2024-06-02 22:55:33', '2024-06-03 00:25:51'),
(7, 'Biscuiterie et Confiserie', 'biscuiterie-et-confiserie', 8, '2024-06-02 22:55:37', '2024-06-03 00:25:51'),
(8, 'Charcuterie et Saurisserie', 'charcuterie-et-saurisserie', 9, '2024-06-02 22:55:42', '2024-06-03 00:25:51'),
(9, 'Boucherie', 'boucherie', 4, '2024-06-02 22:55:46', '2024-06-03 00:35:29'),
(10, 'Poissonnerie', 'poissonnerie', 10, '2024-06-02 22:55:50', '2024-06-03 00:25:51');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `username`, `email`, `email_verified_at`, `verified`, `password`, `picture`, `address`, `phone`, `city`, `created_at`, `updated_at`) VALUES
(1, 'nada', 'nada0303', 'nada@um5.ac.ma', '2024-06-02 22:54:18', 1, '$2y$10$yjcjKyrnvZ3LikfwNN9kseY8MaS7ranjxWyl6WMNqMrvZtLmfgpqu', 'CLIENT_IMG_48711717416883665db3b38ce0b.jpg', NULL, NULL, NULL, '2024-06-02 22:54:18', '2024-06-03 11:14:56'),
(2, 'wiame', 'wiame03', 'wiame@um5.ac.ma', '2024-06-02 22:54:18', 1, '$2y$10$dDYU4zla6fvvWt43NJbBAOShnxCWKDUxczsSG2uA8fG4CM0r0UhiK', NULL, NULL, NULL, NULL, '2024-06-02 22:54:18', '2024-06-02 22:54:18');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_meta_keywords` varchar(255) DEFAULT NULL,
  `site_meta_description` text DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL,
  `site_address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_name`, `site_email`, `site_phone`, `site_meta_keywords`, `site_meta_description`, `site_logo`, `site_favicon`, `site_address`, `created_at`, `updated_at`) VALUES
(1, 'MyEcolo', 'info@myecolo.test', '+212 5378614066', 'Food,waste,management,shop,myecolo', 'Chez MyEcolo, nous sommes passionnés par la réduction du gaspillage alimentaire tout en offrant des produits de haute qualité.\nRejoignez notre communauté et faites la différence avec nous. Ensemble, nous pouvons créer un avenir plus sain et plus durable.', 'LOGO_665d06e3df6a2.png', 'FAV_665d06e8cb117.png', 'Av. Inaouin, Rabat', NULL, '2024-06-03 11:51:05');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(88, '2014_10_12_000000_create_users_table', 1),
(89, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(90, '2019_08_19_000000_create_failed_jobs_table', 1),
(91, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(92, '2024_05_29_215704_create_admins_table', 1),
(93, '2024_05_29_215711_create_clients_table', 1),
(94, '2024_05_29_215716_create_sellers_table', 1),
(95, '2024_05_31_125934_create_verification_tokens_table', 1),
(96, '2024_06_01_154356_create_general_settings_table', 1),
(97, '2024_06_01_204919_create_social_networks_table', 1),
(98, '2024_06_02_222729_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `guard` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `autorisation` varchar(255) DEFAULT NULL,
  `status` enum('Pending','inReview','Active') NOT NULL DEFAULT 'Pending',
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `username`, `email`, `email_verified_at`, `verified`, `password`, `picture`, `address`, `phone`, `city`, `autorisation`, `status`, `payment_method`, `payment_email`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed', 'hanout', 'hanout@gmail.com', '2024-06-02 22:54:18', 1, '$2y$10$dSvWHomAKdQQqgcvu2SjAOnqR0wx51GTD1EC625T9CqOXXWHWQoga', 'SELLER_IMG_42911717405494665d87360ad8c.jpg', NULL, NULL, NULL, NULL, 'Pending', NULL, NULL, '2024-06-02 22:54:18', '2024-06-03 08:04:54'),
(2, 'Jaafar', 'supermarket jaafar', 'jaafar@gmail.com', '2024-06-02 22:54:18', 1, '$2y$10$e9lHvN9JlIFmPj5LAcvLRenouYvVTtkATIp/v8upsubYs3KhkbnFe', NULL, NULL, NULL, NULL, NULL, 'Pending', NULL, NULL, '2024-06-02 22:54:18', '2024-06-02 22:54:18');

-- --------------------------------------------------------

--
-- Structure de la table `social_networks`
--

CREATE TABLE `social_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `github_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `social_networks`
--

INSERT INTO `social_networks` (`id`, `facebook_url`, `twitter_url`, `instagram_url`, `youtube_url`, `github_url`, `linkedin_url`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `verification_tokens`
--

CREATE TABLE `verification_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Index pour la table `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `verification_tokens`
--
ALTER TABLE `verification_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `verification_tokens`
--
ALTER TABLE `verification_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
