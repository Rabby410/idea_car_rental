-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 11:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `daily_rent_price` decimal(10,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `model`, `year`, `car_type`, `daily_rent_price`, `availability`, `image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, 'PERODUA AXIA', 'PERODUA', 'AXIA', '2024', 'Economy 4 Sitter', 8000.00, 1, '2xap0mcbFTyQNWWFfUm0J8lFbc4fereQC2v9s1ye.png', '2024-09-21 08:55:06', '2024-09-21 08:55:06', NULL, NULL),
(4, 'Proton Saga 1.3', 'Proton', 'Saga 1.3', '2022', 'Economy 4 Sitter', 7000.00, 1, 'SoGoy4skLFKMq32ChIkZyWEwHzC2OuurLOcnbllf.jpg', '2024-09-21 09:53:00', '2024-09-21 09:53:00', NULL, NULL),
(5, 'Honda City 1.5', 'Honda', 'City 1.5', '2024', 'Economy 4 Sitter', 10000.00, 1, 't3zTrRUiCFqYzT5NrvhOOzejwCLcKMdO1dFWHLs5.jpg', '2024-09-21 09:53:44', '2024-09-21 09:53:44', NULL, NULL),
(6, 'Proton Iriz 1.3', 'Proton', 'Iriz 1.3', '2023', 'Economy 4 Sitter', 7000.00, 1, 'ZN8JvxajvHvJxGZVghtVGgVpvb9FRSjsCq29TfJe.jpg', '2024-09-21 09:54:42', '2024-09-21 10:00:15', NULL, NULL),
(7, 'Toyota Innova 2.0', 'Toyota', 'Innova 2.0', '2024', 'Business Class 12 Setter', 15000.00, 1, 'lUBfq7SH95GUhRBrQrWZTjazu34oLXmrAtSyFnip.jpg', '2024-09-21 10:01:17', '2024-09-21 10:01:17', NULL, NULL),
(8, 'Hyundai Starex', 'Hyundai', 'Starex', '2024', 'Business Class 12 Setter', 15000.00, 1, 'Vbba5btajGhYiHiACdkazgbgGf4OW5aBNXEpRh4O.jpg', '2024-09-21 10:02:18', '2024-09-21 10:02:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_09_19_042405_create_cars_table', 1),
(7, '2024_09_19_042415_create_rentals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `status` enum('pending','ongoing','completed','canceled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `car_id`, `start_date`, `end_date`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2024-09-22', '2024-09-24', 16000.00, 'ongoing', '2024-09-21 09:22:06', '2024-09-22 00:21:39'),
(2, 1, 3, '2024-09-23', '2024-09-24', 8000.00, 'pending', '2024-09-21 09:43:42', '2024-09-21 09:43:42'),
(4, 1, 6, '2024-09-27', '2024-09-28', 7000.00, 'pending', '2024-09-21 10:15:10', '2024-09-21 10:15:10'),
(7, 1, 6, '2024-09-23', '2024-09-24', 7000.00, 'pending', '2024-09-22 02:27:35', '2024-09-22 02:27:35'),
(10, 5, 4, '2024-09-24', '2024-09-26', 14000.00, 'canceled', '2024-09-22 02:49:46', '2024-09-22 02:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Shahadath Hossian Rabby', 'rabby410@gmail.com', '01602066256', 'H#1102, R#11, Block-C, Pallabi, Mirpur, Section-12 -1216', 'admin', NULL, '$2y$12$dYpOYEjb9/QsrHLDpPu1GOwaKLQuCaxhmScupq.ejr.qWBbtRAsam', NULL, '2024-09-21 00:46:17', '2024-09-22 01:08:01', NULL, NULL),
(2, 'Maria Akter Nirjon', 'nirjon@gmail.com', NULL, NULL, 'customer', NULL, '$2y$12$4LdvvHsT6Szr6VHddMepFOjUWLMyeU4ZZRR87e7Xzy7XtNn06no32', NULL, '2024-09-21 01:17:55', '2024-09-21 01:17:55', NULL, NULL),
(3, 'Apon', 'apon@gmail.com', NULL, NULL, 'customer', NULL, '$2y$12$pN9cqgLt5Lyvd54xDZCNnOOFpjUi5QTrxZakhYthti5G8nMciKLRu', NULL, '2024-09-21 10:36:59', '2024-09-21 10:36:59', NULL, NULL),
(4, 'Nasrin Akter', 'nasrin@gmail.com', '01602066666', 'Demo Address, Asdsadassd, Dhaka', 'customer', NULL, '$2y$12$RhCSu1QsLkGMkbegq7YkcOq.Vi3KBDTXQXLzUqoFsJcO0KPDrgI3i', NULL, '2024-09-22 02:46:53', '2024-09-22 02:46:53', NULL, NULL),
(5, 'Mim', 'mim@gmail.com', '01365256333', 'Demo, Meeeee', 'customer', NULL, '$2y$12$kNc4QcY2SIikURm1tFe23.2p8VaXWguMtwZh8baf7LCi2WiEBN2Pm', NULL, '2024-09-22 02:49:27', '2024-09-22 02:49:27', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_created_by_foreign` (`created_by`),
  ADD KEY `cars_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_car_id_foreign` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_created_by_foreign` (`created_by`),
  ADD KEY `users_updated_by_foreign` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `cars_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
