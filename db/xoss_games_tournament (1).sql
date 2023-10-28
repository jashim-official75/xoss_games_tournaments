-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2023 at 01:51 PM
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
-- Database: `xoss_games_tournament`
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

--
-- Dumping data for table `game_scores`
--

INSERT INTO `game_scores` (`id`, `subscriber_id`, `tournament_game_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 807, '2023-10-13 11:46:40', '2023-10-19 13:31:28'),
(2, 2, 1, 364, '2023-10-13 11:54:46', '2023-10-15 16:58:37'),
(3, 3, 1, 422, '2023-10-13 14:07:12', '2023-10-13 14:22:09');

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
(5, '01775484658', '553703', '2023-10-18 19:06:02', '2023-10-18 19:06:02');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `phone_num`, `name`, `profile_pic`, `password`, `device_ip`, `country`, `created_at`, `updated_at`) VALUES
(1, '01775484658', 'Sohel Rana', '6507613a94eb7_01775484658.webp', '$2y$10$7S.3SRsgg4yfGBGJZLuJCOzkH.6wkmrrybT5I6Oyjul48tkfTwLnK', '127.0.0.1', 'United States', '2023-09-16 19:42:34', '2023-09-18 09:18:16'),
(2, '01715855974', 'Xoss Games', '650767722dabc_01715855974.jpg', '$2y$10$JlEq7gfK5lcFwM.440gaeOErx5CqqCssjY.MyoSllkMemP3E1kqCS', '157.119.186.134', 'Bangladesh', '2023-09-17 18:48:36', '2023-09-18 05:41:12'),
(3, '01733592016', 'Virat Kohli', '65296ff513082_01733592016.jpg', '$2y$10$DTMrJ6cHfyaYQEtHrChq4.5RxdOGRXjlIScwO3OZrNS1J2RRxIRiS', '103.141.134.33', 'Bangladesh', '2023-09-17 19:31:35', '2023-10-13 14:27:33'),
(4, '01775484655', NULL, NULL, '$2y$10$IywzWBeEA1DYTKmI5j74LeE0IhZmXPyeF3jXb0Hz.LkhBMXVmuTey', '157.119.186.134', 'Bangladesh', '2023-09-18 08:08:40', '2023-09-18 08:08:40'),
(5, '01775154785', NULL, NULL, '$2y$10$2kzuHE.KpXkfI1wpnowsLuc3qMDzpNUdiVmExYZ6AWvWBKviz.spC', '103.141.134.33', 'Bangladesh', '2023-09-24 14:46:47', '2023-09-24 14:46:47');

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
(1, 'Cricket World Cup', 'cricket-world-cup', 'https://tournament.xoss.games/tournament/game/cricket-world-cup', 'Tournament/cricket-world-cup', '652948d3c6398_tournament.webp', 'Cricket World Cup', 'Cricket World Cup', NULL, '652948d3c7036_tournament_banner.webp', '2023-10-13', '2023-10-31', 35, 'P14D', '30 GB GP Internet', '20 GB GP Internet', '5 GB GP Internet', '2 GB GP Internet', NULL, '2023-10-13 11:40:35', '2023-10-13 11:40:35');

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
(9, 1, 1, 35, 3, 'JE9oF4EzpXEnf6o1SxV8AlNKdCcKABNH', '9b32377d-5500-497c-8f6a-23a161990431', '2rd0DbNwIPLpLTBhvwHUEwRPybkGJGhv', NULL, NULL, '2023-10-13 11:41:16', '2023-10-13 11:41:16'),
(10, 2, 1, 35, 3, '8oRMheRgFmOPfgW07dPC7Vhdb02itmpi', 'bbf60491-f979-47c6-89df-7cf7d8cbacfc', 'vV5CdLeyzBCpKLOlnRQe41O598VBWdN2', NULL, NULL, '2023-10-13 11:52:19', '2023-10-13 11:52:19'),
(11, 3, 1, 35, 3, '7TdlAhg3DwwJvwH1N2cHJlxYg95Sjwi8', 'fd6836bb-4b48-4592-8b6c-f9e2d493e847', 'VJMlbneg5WS3tIUDjrqwScea5jqjN5w5', NULL, NULL, '2023-10-13 14:03:48', '2023-10-13 14:03:48');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tournament_games`
--
ALTER TABLE `tournament_games`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tournament_payment_details`
--
ALTER TABLE `tournament_payment_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
