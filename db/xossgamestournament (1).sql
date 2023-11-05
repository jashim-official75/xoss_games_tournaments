-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2023 at 12:32 PM
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
-- Table structure for table `game_prizes`
--

CREATE TABLE `game_prizes` (
  `id` bigint UNSIGNED NOT NULL,
  `tournament_game_id` bigint UNSIGNED NOT NULL,
  `prize_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_prizes`
--

INSERT INTO `game_prizes` (`id`, `tournament_game_id`, `prize_name`, `slug`, `image`, `position`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Smart Watchss', 'smart-watchss', 'uploads/Tournamant/GamePrize/game_id_1-654523bdc48da-smart-watch.webp', 1, 1, '2023-11-03 15:28:12', '2023-11-04 12:32:31'),
(3, 1, 'Ear Phone', 'ear-phone', 'uploads/Tournamant/GamePrize/game_id_1-654523a3ab42d-ear-phone.webp', 3, 1, '2023-11-03 15:47:32', '2023-11-04 12:17:53'),
(4, 2, 'Head Phoness', 'head-phoness', 'uploads/Tournamant/GamePrize/game_id_2-6545242d74099-head-phoness.webp', 1, 1, '2023-11-03 15:58:53', '2023-11-04 12:55:55'),
(5, 1, 'test', 'test', 'uploads/Tournamant/GamePrize/game_id_1-65452396ea57a-test.webp', 2, 1, '2023-11-03 16:11:25', '2023-11-04 12:17:50'),
(6, 2, 'Smart Watch', 'smart-watch', 'uploads/Tournamant/GamePrize/game_id_2-6545242092d00-smart-watch.webp', 3, 1, '2023-11-03 16:12:23', '2023-11-03 19:14:40'),
(7, 2, 'Bluetooth speaker', 'bluetooth-speaker', 'uploads/Tournamant/GamePrize/game_id_2-65452484b60be-bluetooth-speaker.webp', 2, 1, '2023-11-03 16:49:08', '2023-11-04 12:37:32');

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
(8, '2023_07_13_201744_create_tournament_payment_details_table', 3),
(9, '2023_11_02_182928_create_prizes_table', 4),
(10, '2023_11_03_210309_create_game_prizes_table', 5),
(11, '2023_11_05_003929_create_subscriber_number_verifies_table', 6);

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
-- Table structure for table `prizes`
--

CREATE TABLE `prizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prizes`
--

INSERT INTO `prizes` (`id`, `name`, `slug`, `sub_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Head Phone', 'sdsds', NULL, 'uploads/Prize/head-phone.webp', '0', '2023-11-02 15:25:20', '2023-11-03 13:05:14'),
(2, 'Smart Watch', 'smart-watch', NULL, 'uploads/Prize/smart-watch.webp', '0', '2023-11-02 16:52:52', '2023-11-03 13:05:06'),
(3, 'Bluetooth Speaker', 'bluetooth-speaker', NULL, 'uploads/Prize/bluetooth-speaker.webp', '0', '2023-11-02 16:53:38', '2023-11-03 13:04:59'),
(5, 'Ear Phone', 'ear-phone', NULL, 'uploads/Prize/ear-phone.webp', '0', '2023-11-03 09:30:27', '2023-11-03 13:04:52'),
(6, 'Mobile Phone', 'mobile-phone', NULL, 'uploads/Prize/mobile-phone.webp', '0', '2023-11-03 09:30:59', '2023-11-03 13:04:45');

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
  `otp_verify` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `phone_num`, `name`, `profile_pic`, `password`, `device_ip`, `country`, `referr_code`, `get_referr`, `otp_verify`, `created_at`, `updated_at`) VALUES
(1, '01775484658', NULL, '65427c22b047c_01775484658.webp', '$2y$10$YILXhAhcgfzJBAn6.zzy6OYNAdOjhXiT29ZfYTjXLPzE2CmPyfqUe', '127.0.0.1', 'United States', 'd8l2', NULL, 0, '2023-10-29 09:35:32', '2023-11-01 16:26:10'),
(2, '01700000000', 'Rasel', NULL, '$2y$10$rm8BTj0j/JrGyBWxUPRk7u9Wfd6S3ib/him1s2ArI8O4GOsv65bu2', '127.0.0.1', 'United States', '7as6', 'd8l2', 0, '2023-10-29 09:36:22', '2023-11-03 16:59:09'),
(3, '01733333333', NULL, NULL, '$2y$10$HUmHIzVrghbOKBvvDQlbduTCzZamt6k1i5TAvZzN/zLB5XEDReGrm', '127.0.0.1', 'United States', 'e0Yb', 'd8l2', 0, '2023-10-29 09:37:20', '2023-10-29 09:37:20'),
(4, '01722222222', NULL, NULL, '$2y$10$ZohrEGHBCcj.FHhU8PloSO.12GQlbbsBkF.gMAfvZ5KPeZTiC.Gse', '127.0.0.1', 'United States', 'TbtG', '7as6', 0, '2023-10-29 09:40:00', '2023-10-29 09:40:00'),
(5, '01712345678', NULL, NULL, '$2y$10$AEvb5mUtES.k20prmbdVpuHeM6MQb7BcfBeb8BwIXLJLET3KWusHa', '127.0.0.1', 'United States', 'KsQs', 'd8l2', 0, '2023-11-02 10:09:22', '2023-11-02 10:09:22'),
(6, '01777777777', NULL, NULL, '$2y$10$0nfDM9WVpUKI1Ke7HdFzwu63LrvKpA.o3/tStDYddSIE7ylV.XfSi', '127.0.0.1', 'United States', 'T7TH', '7as6', 0, '2023-11-02 18:21:04', '2023-11-02 18:21:04'),
(15, '01568562265', NULL, NULL, '$2y$10$.WqYkZTEI/sV.FV7CRN.DucI0K2wrW6IJtvNhtjSwk.oPHziL19u6', '127.0.0.1', 'United States', 's0AC', NULL, 1, '2023-11-04 19:23:06', '2023-11-04 19:23:33'),
(16, '01752525252', NULL, NULL, '$2y$10$nYLn1qvpVVdNklDy2Zrhn.bM/FTiLC0KYzdv4o62Bbu8MQAhy9mue', '127.0.0.1', 'United States', 'rgBV', NULL, 1, '2023-11-05 06:49:25', '2023-11-05 06:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_number_verifies`
--

CREATE TABLE `subscriber_number_verifies` (
  `id` bigint UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `game_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `status` tinyint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournament_games`
--

INSERT INTO `tournament_games` (`id`, `game_name`, `slug`, `game_link`, `game_zip_file`, `image`, `game_background`, `description`, `control`, `participate`, `game_banner`, `start_date`, `end_date`, `game_fee`, `subscription_period`, `first_price`, `second_price`, `third_price`, `fourth_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cricket World Cup', 'cricket-world-cup', 'https://tournament.xoss.games/tournament/game/cricket-world-cup', 'Tournament/cricket-world-cup', '652948d3c6398_tournament.webp', '6544ee6d8d55a_game_background_update.webp', 'Cricket World Cup', 'Cricket World Cup', NULL, '653ce8f3483b8_banner_image_update.webp', '2023-10-13', '2023-11-10', 35, 'P14D', '30 GB GP Internet', '20 GB GP Internet', '5 GB GP Internet', '2 GB GP Internet', 1, '2023-10-13 11:40:35', '2023-11-03 19:22:58'),
(2, 'Football WorldCup', 'football-worldcup', 'http://xoss_games_tournaments.test/tournament/game/football-worldcup', 'Tournament/football-worldcup', '6533d9af32171_thumbnail_image_update.webp', '6544ee78383e4_game_background_update.webp', 'Football WorldCup', 'Football WorldCup', NULL, '653ce8e277de7_banner_image_update.webp', '2023-10-20', '2023-11-08', 55, '14', '5 gb gp Internet', '3 gb gp Internet', '2 gb gp Internet', '1 gb gp Internet', 1, '2023-10-20 13:37:17', '2023-11-03 19:22:31');

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
-- Indexes for table `game_prizes`
--
ALTER TABLE `game_prizes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `prizes`
--
ALTER TABLE `prizes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `subscriber_number_verifies`
--
ALTER TABLE `subscriber_number_verifies`
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
-- AUTO_INCREMENT for table `game_prizes`
--
ALTER TABLE `game_prizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `game_scores`
--
ALTER TABLE `game_scores`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prizes`
--
ALTER TABLE `prizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reset_password_otps`
--
ALTER TABLE `reset_password_otps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subscriber_number_verifies`
--
ALTER TABLE `subscriber_number_verifies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tournament_games`
--
ALTER TABLE `tournament_games`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
