-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2023 at 08:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xossgamestournament`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game_scores`
--

CREATE TABLE `game_scores` (
  `id` bigint UNSIGNED NOT NULL,
  `subscriber_id` bigint UNSIGNED NOT NULL,
  `tournament_game_id` bigint UNSIGNED DEFAULT NULL,
  `score` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_11_130153_create_game_scores_table', 1),
(6, '2023_06_19_214058_create_tournament_games_table', 1),
(7, '2023_09_12_230339_create_subscribers_table', 2),
(8, '2023_07_13_201744_create_tournament_payment_details_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_otps`
--

CREATE TABLE `reset_password_otps` (
  `id` bigint UNSIGNED NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reset_password_otps`
--

INSERT INTO `reset_password_otps` (`id`, `phone_number`, `otp`, `created_at`, `updated_at`) VALUES
(3, '01715855974', '312808', '2023-10-18 19:02:39', '2023-10-18 19:02:39'),
(4, '01715855974', '237023', '2023-10-18 19:03:57', '2023-10-18 19:03:57'),
(5, '01775484658', '553703', '2023-10-18 19:06:02', '2023-10-18 19:06:02'),
(6, '01715855974', '999120', '2023-10-21 05:17:59', '2023-10-21 05:17:59'),
(7, '01775484658', '314791', '2023-10-21 15:11:47', '2023-10-21 15:11:47'),
(8, '01775484658', '125430', '2023-10-21 15:27:10', '2023-10-21 15:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `phone_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referr_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `get_referr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `phone_num`, `name`, `profile_pic`, `password`, `device_ip`, `country`, `referr_code`, `get_referr`, `created_at`, `updated_at`) VALUES
(1, '01775484658', NULL, NULL, '$2y$10$YILXhAhcgfzJBAn6.zzy6OYNAdOjhXiT29ZfYTjXLPzE2CmPyfqUe', '127.0.0.1', 'United States', 'd8l2', NULL, '2023-10-29 09:35:32', '2023-10-29 09:35:32'),
(2, '01700000000', NULL, NULL, '$2y$10$rm8BTj0j/JrGyBWxUPRk7u9Wfd6S3ib/him1s2ArI8O4GOsv65bu2', '127.0.0.1', 'United States', '7as6', 'd8l2', '2023-10-29 09:36:22', '2023-10-29 09:36:22'),
(3, '01733333333', NULL, NULL, '$2y$10$HUmHIzVrghbOKBvvDQlbduTCzZamt6k1i5TAvZzN/zLB5XEDReGrm', '127.0.0.1', 'United States', 'e0Yb', 'd8l2', '2023-10-29 09:37:20', '2023-10-29 09:37:20'),
(4, '01722222222', NULL, NULL, '$2y$10$ZohrEGHBCcj.FHhU8PloSO.12GQlbbsBkF.gMAfvZ5KPeZTiC.Gse', '127.0.0.1', 'United States', 'TbtG', '7as6', '2023-10-29 09:40:00', '2023-10-29 09:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_games`
--

CREATE TABLE `tournament_games` (
  `id` bigint UNSIGNED NOT NULL,
  `game_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_zip_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `control` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `participate` int DEFAULT NULL,
  `game_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_fee` int DEFAULT NULL,
  `subscription_period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fourth_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournament_games`
--

INSERT INTO `tournament_games` (`id`, `game_name`, `slug`, `game_link`, `game_zip_file`, `image`, `description`, `control`, `participate`, `game_banner`, `start_date`, `end_date`, `game_fee`, `subscription_period`, `first_price`, `second_price`, `third_price`, `fourth_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cricket World Cup', 'cricket-world-cup', 'https://tournament.xoss.games/tournament/game/cricket-world-cup', 'Tournament/cricket-world-cup', '652948d3c6398_tournament.webp', 'Cricket World Cup', 'Cricket World Cup', NULL, '653ce8f3483b8_banner_image_update.webp', '2023-10-13', '2023-10-31', 35, 'P14D', '30 GB GP Internet', '20 GB GP Internet', '5 GB GP Internet', '2 GB GP Internet', NULL, '2023-10-13 11:40:35', '2023-10-28 10:56:51'),
(2, 'Football WorldCup', 'football-worldcup', 'https://tournament.xoss.games/tournament/game/football-worldcup', 'Tournament/football-worldcup', '6533d9af32171_thumbnail_image_update.webp', 'Football WorldCup', 'Football WorldCup', NULL, '653ce8e277de7_banner_image_update.webp', '2023-10-20', '2023-11-08', 55, '14', '5 gb gp Internet', '3 gb gp Internet', '2 gb gp Internet', '1 gb gp Internet', NULL, '2023-10-20 13:37:17', '2023-10-28 10:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_payment_details`
--

CREATE TABLE `tournament_payment_details` (
  `id` bigint UNSIGNED NOT NULL,
  `subscriber_id` bigint UNSIGNED NOT NULL,
  `tournament_game_id` bigint UNSIGNED NOT NULL,
  `amount` int NOT NULL,
  `subscription_day` int DEFAULT NULL,
  `customer_reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consent_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `start_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournament_payment_details`
--

INSERT INTO `tournament_payment_details` (`id`, `subscriber_id`, `tournament_game_id`, `amount`, `subscription_day`, `customer_reference`, `consent_id`, `token`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 35, 3, 'JE9oF4EzpXEnf6o0dI1LZMawzZjcFyoD', 'fc6bbf88-6e42-4fb3-bb06-d4951c161dc2', 'AbQur5lkEBQa6n6j1MOJ2fWKmHAZAeDv', NULL, NULL, '2023-10-29 11:08:34', '2023-10-29 11:08:34'),
(2, 2, 2, 55, 3, 'JE9oF4EzpXEnf6o0QzMhWiH7CDhYw62p', 'aa920550-b05f-4877-b55b-9f01a9337084', '1BzDJndYjOIGNZpZwsJM9cYNZpc8iglV', NULL, NULL, '2023-10-29 11:29:38', '2023-10-29 11:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Xoss Game', 'admin@gmail.com', NULL, '$2y$10$FRfEvY.Ovo6ElPO2XT53ouqIuO7n46.wgP0zv6vuiBjRXVSCQFJnK', NULL, NULL, '2023-09-12 16:28:10', '2023-09-12 16:28:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `game_scores`
--
ALTER TABLE `game_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reset_password_otps`
--
ALTER TABLE `reset_password_otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament_games`
--
ALTER TABLE `tournament_games`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tournament_games_game_name_unique` (`game_name`);

--
-- Indexes for table `tournament_payment_details`
--
ALTER TABLE `tournament_payment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tournament_payment_details_subscriber_id_foreign` (`subscriber_id`),
  ADD KEY `tournament_payment_details_tournament_game_id_foreign` (`tournament_game_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_scores`
--
ALTER TABLE `game_scores`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reset_password_otps`
--
ALTER TABLE `reset_password_otps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tournament_games`
--
ALTER TABLE `tournament_games`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tournament_payment_details`
--
ALTER TABLE `tournament_payment_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tournament_payment_details`
--
ALTER TABLE `tournament_payment_details`
  ADD CONSTRAINT `tournament_payment_details_subscriber_id_foreign` FOREIGN KEY (`subscriber_id`) REFERENCES `subscribers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tournament_payment_details_tournament_game_id_foreign` FOREIGN KEY (`tournament_game_id`) REFERENCES `tournament_games` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
