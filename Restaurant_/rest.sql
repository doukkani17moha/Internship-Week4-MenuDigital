-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2023 at 03:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_descr` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_descr`, `created_at`, `updated_at`) VALUES
(1, 'Cake', 'All Cakes Plats', '2023-07-20 08:28:09', NULL),
(2, 'Juice', 'All Juices', '2023-07-31 10:28:09', NULL),
(3, 'Fast-food', 'All Cakes Plats', '2023-07-12 14:28:09', NULL),
(4, 'Chinese', 'All Chinese Plats', '2023-07-24 22:28:09', NULL),
(5, 'Healthy', 'All Healthy Plats', '2023-07-04 19:28:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chef_name` varchar(255) NOT NULL,
  `chef_job` varchar(255) DEFAULT NULL,
  `chef_img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `chef_name`, `chef_job`, `chef_img`, `created_at`, `updated_at`) VALUES
(1, 'Randy Walker', 'Pastry Chef', 'chefs-01.jpg', NULL, NULL),
(2, 'David Martin', 'Cookie Chef', 'chefs-02.jpg', NULL, NULL),
(3, 'Peter Perkson', 'Pancake Chef', 'chefs-03.jpg', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_31_113528_create_chefs_table', 1),
(6, '2023_07_31_115120_create_reservations_table', 1),
(7, '2023_07_31_183401_create_categories_table', 1),
(8, '2023_08_02_190143_create_sessions_table', 1),
(9, '2023_08_04_142259_create_plats_table', 2),
(10, '2023_08_04_204641_create_users_table', 2),
(11, '2023_08_05_154707_create_sessions_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$sJ3izBh91rMkod8jzxWqzeeMjkuBZYtbP.G6yudT54FMow3mKFjBK', '2023-08-05 09:53:59');

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
-- Table structure for table `plats`
--

CREATE TABLE `plats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plat_name` varchar(255) NOT NULL,
  `plat_descr` text DEFAULT NULL,
  `plat_img` varchar(255) DEFAULT NULL,
  `plat_price` int(11) DEFAULT NULL,
  `plat_avail` varchar(255) DEFAULT NULL,
  `plat_time` varchar(255) DEFAULT NULL,
  `rating` decimal(4,2) DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `enable` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plats`
--

INSERT INTO `plats` (`id`, `plat_name`, `plat_descr`, `plat_img`, `plat_price`, `plat_avail`, `plat_time`, `rating`, `categorie_id`, `enable`, `created_at`, `updated_at`) VALUES
(1, 'Chocolate Cake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 'menu-item-01.jpg', 220, 'Stock', 'Breakfast', 4.50, 1, 1, NULL, '2023-08-05 09:20:35'),
(2, 'Klassy Pancake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 'menu-item-02.jpg', 450, 'Stock', 'Dinner', 4.20, 1, 1, NULL, NULL),
(3, 'Blueberry Cake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 'menu-item-04.jpg', 650, 'Out Of Stock', 'Breakfast', 4.10, 1, 1, NULL, NULL),
(4, 'Klassy Cup Cake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 'menu-item-05.jpg', 80, 'Stock', 'Dinner', 4.30, 1, 1, NULL, NULL),
(5, 'Orange Juice', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 'juice2.jpg', 90, 'Stock', 'Breakfast', 4.20, 2, 1, NULL, NULL),
(6, 'Strawbery Juice', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 'juice1.jpg', 15, 'Stock', 'Breakfast', 4.30, 2, 1, NULL, NULL),
(7, 'Cheeze Burger', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 'fast1.jpg', 25, 'Stock', 'Dinner', 4.60, 3, 1, NULL, NULL),
(8, 'Chicken', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 'fast2.jpg', 30, 'Stock', 'Dinner', 4.80, 3, 1, NULL, NULL),
(9, 'Circle Pizza', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 'fast3.jpg', 28, 'Stock', 'Lunch', 4.90, 3, 1, NULL, NULL),
(10, 'Hot Dog', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 'fast4.jpg', 40, 'Stock', 'Lunch', 4.20, 3, 1, NULL, NULL),
(11, 'Healthy Plat', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 'healthy.jpg', 19, 'Stock', 'Lunch', 4.70, 5, 1, NULL, NULL),
(12, 'Chineese Plat', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 'chineese.jpg', 50, 'Stock', 'Lunch', 4.60, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reserv_name` varchar(255) NOT NULL,
  `reserv_email` varchar(255) DEFAULT NULL,
  `reserv_phone` varchar(255) DEFAULT NULL,
  `no_guest` varchar(255) DEFAULT NULL,
  `reserv_date` varchar(255) DEFAULT NULL,
  `reserv_time` varchar(255) DEFAULT NULL,
  `reserv_msg` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `reserv_name`, `reserv_email`, `reserv_phone`, `no_guest`, `reserv_date`, `reserv_time`, `reserv_msg`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', '123-456-7890', '4', '2023-08-02', '19:00:00', 'Table for a birthday', '2023-08-02 08:00:00', '2023-08-02 08:00:00'),
(2, 'Jane Smith', 'jane@example.com', '987-654-3210', '2', '2023-08-05', '20:30:00', 'Anniversary dinner', '2023-08-02 10:30:00', '2023-08-02 10:30:00'),
(3, 'Michael Johnson', 'michael@example.com', '555-123-4567', '6', '2023-08-10', '18:45:00', 'Business meeting', '2023-08-02 05:15:00', '2023-08-02 05:15:00'),
(4, 'Sarah Williams', 'sarah@example.com', '111-222-3333', '3', '2023-08-15', '21:15:00', 'Casual dinner with friends', '2023-08-01 14:30:00', '2023-08-01 14:30:00'),
(5, 'Robert Brown', 'robert@example.com', '444-555-6666', '5', '2023-08-20', '19:45:00', 'Celebrating a promotion', '2023-07-30 06:20:00', '2023-07-30 06:20:00'),
(6, 'Emily Anderson', 'emily@example.com', '777-888-9999', '4', '2023-08-25', '18:00:00', 'Family gathering', '2023-08-05 07:30:00', '2023-08-05 07:30:00'),
(7, 'David Lee', 'david@example.com', '222-333-4444', '2', '2023-09-01', '20:00:00', 'Romantic dinner', '2023-08-10 12:45:00', '2023-08-10 12:45:00'),
(8, 'Alexandra White', 'alexandra@example.com', '888-777-6666', '6', '2023-09-05', '19:30:00', 'Bachelorette party', '2023-08-15 09:15:00', '2023-08-15 09:15:00'),
(9, 'James Miller', 'james@example.com', '555-444-3333', '3', '2023-09-10', '21:00:00', 'Graduation celebration', '2023-08-20 15:30:00', '2023-08-20 15:30:00'),
(10, 'Linda Harris', 'linda@example.com', '999-888-7777', '5', '2023-09-15', '18:45:00', 'Reunion with old friends', '2023-08-25 07:20:00', '2023-08-25 07:20:00'),
(11, 'William Turner', 'william@example.com', '111-111-2222', '2', '2023-09-20', '19:30:00', 'Date night', '2023-08-30 12:10:00', '2023-08-30 12:10:00'),
(12, 'Olivia Parker', 'olivia@example.com', '333-333-4444', '4', '2023-09-25', '20:15:00', 'Family reunion', '2023-09-02 10:00:00', '2023-09-02 10:00:00'),
(13, 'Daniel Martinez', 'daniel@example.com', '555-555-6666', '3', '2023-09-30', '18:30:00', 'Client dinner', '2023-09-05 07:45:00', '2023-09-05 07:45:00'),
(14, 'Sophia Adams', 'sophia@example.com', '777-777-8888', '6', '2023-10-05', '21:00:00', 'Friend\'s birthday party', '2023-09-10 14:20:00', '2023-09-10 14:20:00'),
(15, 'Matthew Nelson', 'matthew@example.com', '999-999-0000', '5', '2023-10-10', '19:45:00', 'Farewell dinner', '2023-09-15 08:30:00', '2023-09-15 08:30:00'),
(16, 'Isabella Clark', 'isabella@example.com', '555-444-1111', '3', '2023-10-15', '18:30:00', 'Special family dinner', '2023-09-20 09:45:00', '2023-09-20 09:45:00'),
(17, 'Ethan Johnson', 'ethan@example.com', '777-888-5555', '2', '2023-10-20', '19:00:00', 'Quiet anniversary', '2023-09-25 11:30:00', '2023-09-25 11:30:00'),
(18, 'Ava Smith', 'ava@example.com', '111-222-8888', '6', '2023-10-25', '20:30:00', 'Group study session', '2023-09-30 07:15:00', '2023-09-30 07:15:00'),
(19, 'Noah Davis', 'noah@example.com', '444-333-9999', '4', '2023-11-01', '18:00:00', 'Birthday dinner', '2023-10-05 12:00:00', '2023-10-05 12:00:00'),
(20, 'Mia Wilson', 'mia@example.com', '222-111-7777', '5', '2023-11-05', '21:15:00', 'Casual get-together', '2023-10-10 14:45:00', '2023-10-10 14:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`, `created_at`, `updated_at`) VALUES
(11, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"29WWV4T17almglDnTWQ2IMHStdRZXsgIXmXlPR89\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691307014, NULL, NULL),
(12, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"HS3RRE3Z3HkImXUBNxoRU2EWseAJy1FzFPzpeIZ7\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691317888, NULL, NULL),
(13, 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"WbEOmZQlOaZdgk6IbdaEW1izRNj2oEvQ8ZXZJAIv\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":7}', 1691319086, NULL, NULL),
(14, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"1iqFMnhECl7klPutBd59E7dJGjYY4j3TYGhnWBPS\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1691319173, NULL, NULL),
(15, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"uXqzNJ5Le45KI5cMJ6YNLI5Qc04B6lpvZuSkttzy\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1691319290, NULL, NULL),
(16, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"trU6RfAnKiWGW7lb1aNxk368nJ4LlHHC0qAVBiXT\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691319635, NULL, NULL),
(17, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"2I5GchpCpt38pSbu0vGnEUkQzHAz1pjE06ri64dW\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691319989, NULL, NULL),
(18, 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"n7UG3x6Yse5bYEVVbHF9NRfBdSzKeDTsWEwVS2ao\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":3}', 1691324752, NULL, NULL),
(19, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"bUkWCQ7cI8r1S1erWAkGnekJ7m3KpwuVTqx7atja\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"reservationSuccess\":false,\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691328218, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'Sub Admin',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Bouchra Roubai', 'mdoukkani10@gmail.com', 'Sub Admin', '2023-08-06 08:58:04', '$2y$10$l7fAEAupfq/oj6Qgfi8t7uINQwXcZgi2WRwxJiff0TOTcwHculUDW', 'c2iP3ovTq9RN64FGFiPzN1RCnYYrFSEP3OUuPqazF9qRFwHs8uKbkHsNdsaT', '269190758.png', '2023-08-04 18:54:08', '2023-08-06 08:58:04'),
(2, 'Mohamed Doukkani', 'admin@admin.com', 'Super Admin', '2023-08-05 13:49:11', '$2y$10$KGVGOP4hIdHOAdRpOJ3Mmuwas.db9jTngmUfIZPl00sZl3djjhFRi', NULL, '417099125.jpeg', '2023-08-04 18:00:08', '2023-08-05 13:49:11'),
(3, 'Ali doukkani', 'doukkani.moha@gmail.com', 'Sub Admin', '2023-08-05 13:52:46', '$2y$10$ur6Ih6xkchnTdK9jAz8VoOFYvFmIp6rkC8BynEGzeRdVc7KIiYo12', NULL, '1679775093.png', '2023-08-04 19:15:08', '2023-08-05 13:52:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plats_categorie_id_index` (`categorie_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
