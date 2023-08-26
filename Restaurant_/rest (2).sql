-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2023 at 08:32 AM
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_descr`, `created_at`, `updated_at`, `category_img`) VALUES
(1, 'Cake', 'All Cakes Plats', '2023-07-20 08:28:09', NULL, 'c1.jpg'),
(2, 'Juice', 'All Juices', '2023-07-31 10:28:09', NULL, 'c2.jpg'),
(3, 'Fast-food', 'All Cakes Plats', '2023-07-12 14:28:09', NULL, 'c3.jpg'),
(4, 'Chinese', 'All Chinese Plats', '2023-07-24 22:28:09', NULL, 'c4.jpg'),
(5, 'Healthy', 'All Healthy Plats', '2023-07-04 19:28:09', NULL, 'c5.jpg');

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
(1, 'Randy Walker', 'Pastry Chef', 'team1.jpg', NULL, NULL),
(2, 'David Martin', 'Cookie Chef', 'team2.jpg', NULL, NULL),
(3, 'Peter Perkson', 'Pancake Chef', 'team3.jpg', NULL, NULL),
(5, 'Luke jacobs', 'Burger Chef', 'team4.jpg', '2023-08-07 08:59:25', NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_31_113528_create_chefs_table', 1),
(6, '2023_07_31_115120_create_reservations_table', 1),
(7, '2023_07_31_183401_create_categories_table', 1),
(8, '2023_08_02_190143_create_sessions_table', 1),
(9, '2023_08_04_142259_create_plats_table', 2),
(11, '2023_08_05_154707_create_sessions_table', 3),
(13, '2023_08_15_130310_create_orders_table', 4),
(14, '2023_08_15_151219_create_template_table', 5),
(15, '2023_08_16_100940_create_subscriptionplans_table', 6),
(16, '2023_08_18_095355_create_users_table', 7),
(17, '2023_08_19_142628_create_waitress_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `order_amount` int(11) DEFAULT NULL,
  `order_address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `tracking_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `order_amount`, `order_address`, `status`, `payment_method`, `tracking_number`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', '123456789', 50, '123 Main St', 'Completed', 'Credit Card', '101', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(2, 'Jane Smith', 'jane@example.com', '987654321', 75, '456 Elm St', 'Processing', 'Cash Payment', '102', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(3, 'Michael Johnson', 'michael@example.com', '555555555', 120, '789 Oak St', 'Failed', 'Credit Card', '103', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(4, 'Emily Williams', 'emily@example.com', '111111111', 85, '987 Pine St', 'Completed', 'Cash Payment', '104', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(5, 'Sam Brown', 'sam@example.com', '222222222', 95, '654 Cedar St', 'Failed', 'Credit Card', '105', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(6, 'Olivia White', 'olivia@example.com', '333333333', 60, '234 Birch St', 'Processing', 'Cash Payment', '106', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(7, 'Noah Davis', 'noah@example.com', '444444444', 110, '876 Maple St', 'Failed', 'Credit Card', '107', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(8, 'Ava Martinez', 'ava@example.com', '555555555', 70, '543 Walnut St', 'Completed', 'Cash Payment', '108', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(9, 'Ethan Anderson', 'ethan@example.com', '666666666', 55, '765 Cherry St', 'Pending', 'Credit Card', '117', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(10, 'Sophia Wilson', 'sophia@example.com', '777777777', 90, '321 Poplar St', 'Processing', 'Cash Payment', '118', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(11, 'Alexander Moore', 'alexander@example.com', '888888888', 130, '876 Elmwood St', 'Failed', 'Credit Card', '119', '2023-08-15 13:09:55', '2023-08-15 13:09:55'),
(12, 'Isabella Taylor', 'isabella@example.com', '999999999', 78, '987 Birchwood St', 'Completed', 'Cash Payment', '120', '2023-08-15 13:09:55', '2023-08-15 13:09:55');

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
('admin@admin.com', '$2y$10$XXv0T3.UG6UBDD81UjdOC.21LHTyhcpSUZPg9btjfqVnBUu5gQlIG', '2023-08-09 03:06:36');

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
(1, 'Chocolate Cake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 'menu-item-01.jpg', 220, 'Stock', 'Breakfast', 4.50, 1, 1, NULL, '2023-08-07 03:58:11'),
(2, 'Klassy Pancake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 'menu-item-02.jpg', 450, 'Stock', 'Dinner', 4.20, 1, 1, NULL, NULL),
(3, 'Blueberry Cake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 'menu-item-04.jpg', 650, 'Out Of Stock', 'Breakfast', 4.10, 1, 1, NULL, '2023-08-09 07:36:11'),
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `reserv_name`, `reserv_email`, `reserv_phone`, `no_guest`, `reserv_date`, `reserv_time`, `reserv_msg`, `created_at`, `updated_at`, `status`) VALUES
(1, 'John Doe', 'john@example.com', '123-456-7890', '4', '2023-08-02', '19:00:00', 'Table for a birthday', '2023-08-02 08:00:00', '2023-08-02 08:00:00', 0),
(2, 'Jane Smith', 'jane@example.com', '987-654-3210', '2', '2023-08-05', '20:30:00', 'Anniversary dinner', '2023-08-02 10:30:00', '2023-08-02 10:30:00', 2),
(3, 'Michael Johnson', 'michael@example.com', '555-123-4567', '6', '2023-08-10', '18:45:00', 'Business meeting', '2023-08-02 05:15:00', '2023-08-02 05:15:00', 0),
(4, 'Sarah Williams', 'sarah@example.com', '111-222-3333', '3', '2023-08-15', '21:15:00', 'Casual dinner with friends', '2023-08-01 14:30:00', '2023-08-01 14:30:00', 1),
(5, 'Robert Brown', 'robert@example.com', '444-555-6666', '5', '2023-08-20', '19:45:00', 'Celebrating a promotion', '2023-07-30 06:20:00', '2023-07-30 06:20:00', 1),
(6, 'Emily Anderson', 'emily@example.com', '777-888-9999', '4', '2023-08-25', '18:00:00', 'Family gathering', '2023-08-05 07:30:00', '2023-08-05 07:30:00', 0),
(7, 'David Lee', 'david@example.com', '222-333-4444', '2', '2023-09-01', '20:00:00', 'Romantic dinner', '2023-08-10 12:45:00', '2023-08-10 12:45:00', 0),
(8, 'Alexandra White', 'alexandra@example.com', '888-777-6666', '6', '2023-09-05', '19:30:00', 'Bachelorette party', '2023-08-15 09:15:00', '2023-08-15 09:15:00', 1),
(9, 'James Miller', 'james@example.com', '555-444-3333', '3', '2023-09-10', '21:00:00', 'Graduation celebration', '2023-08-20 15:30:00', '2023-08-20 15:30:00', 0),
(10, 'Linda Harris', 'linda@example.com', '999-888-7777', '5', '2023-09-15', '18:45:00', 'Reunion with old friends', '2023-08-25 07:20:00', '2023-08-25 07:20:00', 0),
(11, 'William Turner', 'william@example.com', '111-111-2222', '2', '2023-09-20', '19:30:00', 'Date night', '2023-08-30 12:10:00', '2023-08-30 12:10:00', 2),
(12, 'Olivia Parker', 'olivia@example.com', '333-333-4444', '4', '2023-09-25', '20:15:00', 'Family reunion', '2023-09-02 10:00:00', '2023-09-02 10:00:00', 0),
(13, 'Daniel Martinez', 'daniel@example.com', '555-555-6666', '3', '2023-09-30', '18:30:00', 'Client dinner', '2023-09-05 07:45:00', '2023-09-05 07:45:00', 0),
(14, 'Sophia Adams', 'sophia@example.com', '777-777-8888', '6', '2023-10-05', '21:00:00', 'Friend\'s birthday party', '2023-09-10 14:20:00', '2023-09-10 14:20:00', 2),
(15, 'Matthew Nelson', 'matthew@example.com', '999-999-0000', '5', '2023-10-10', '19:45:00', 'Farewell dinner', '2023-09-15 08:30:00', '2023-09-15 08:30:00', 0),
(16, 'Isabella Clark', 'isabella@example.com', '555-444-1111', '3', '2023-10-15', '18:30:00', 'Special family dinner', '2023-09-20 09:45:00', '2023-09-20 09:45:00', 0),
(17, 'Ethan Johnson', 'ethan@example.com', '777-888-5555', '2', '2023-10-20', '19:00:00', 'Quiet anniversary', '2023-09-25 11:30:00', '2023-09-25 11:30:00', 0),
(18, 'Ava Smith', 'ava@example.com', '111-222-8888', '6', '2023-10-25', '20:30:00', 'Group study session', '2023-09-30 07:15:00', '2023-09-30 07:15:00', 0),
(19, 'Noah Davis', 'noah@example.com', '444-333-9999', '4', '2023-11-01', '18:00:00', 'Birthday dinner', '2023-10-05 12:00:00', '2023-10-05 12:00:00', 0),
(20, 'Mia Wilson', 'mia@example.com', '222-111-7777', '5', '2023-11-05', '21:15:00', 'Casual get-together', '2023-10-10 14:45:00', '2023-10-10 14:45:00', 0);

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
(19, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"bUkWCQ7cI8r1S1erWAkGnekJ7m3KpwuVTqx7atja\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"reservationSuccess\":false,\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691328218, NULL, NULL),
(20, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"4Tj8ziToOSx4S0oPlg4odqpJ7MbOzw2W69tdqNQf\",\"reservationSuccess\":false,\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691329352, NULL, NULL),
(21, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"4lJSg53w3wEbZQiYgl0yCv9qx9dFEqb9Gzg4sTGu\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691333999, NULL, NULL),
(22, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"JqORbb78cXLwAJQq8cOD7hbspUvXbNWc0XwZCtvy\",\"reservationSuccess\":false,\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/chefs\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691338002, NULL, NULL),
(23, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"AqzgDi35LM8IaWFTXgAttyG1HnDxvFpZF3aYwD1g\",\"reservationSuccess\":false,\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691387676, NULL, NULL),
(24, 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"kJNAr09am4osRqsIYGKmKRikNhdITxOrvpu24GXM\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":3}', 1691388106, NULL, NULL),
(25, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"bLyfB0g674CbzVuvpSt0TTtS6HyjLFRThRxgY1E5\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691398450, NULL, NULL),
(26, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"lB6nzDHnUQfb8Pyb4LJGA59IpsVAVa30m1pshu9S\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691471794, NULL, NULL),
(27, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"AF4odMNiWCJJkG0f3HWObh53GqoD1RxFFMsdZfBG\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/reservation\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691490699, NULL, NULL),
(28, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"kIkl2uiqvDhNn7CJaA7d6QFjRquhvcwYXLaB5wPg\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/reservation\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691501775, NULL, NULL),
(29, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"kgHK98YAh031icb1G7KVuRdzrz3XgbM2HFhRWhnG\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/reservation\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691509354, NULL, NULL),
(30, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"oBQJKNxIpChEWiNU9dgSJxkFhBOJtqO19cAT8ZCX\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/qrcode\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691556177, NULL, NULL),
(31, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"AywTdFNrQxlECvBqw3Iaq56o8Ebyb69QlNsiBGBu\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/qrcode\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691557617, NULL, NULL),
(32, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"zHyzEtpP5MEhYuDJKJFJqKV7FTPEhIh2mwsStokg\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/sessions\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/reservation\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691577284, NULL, NULL),
(33, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"w1z0fbcRsK0xOenHosMjOHSc4RyU4Ge8IL62qWxb\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/categories\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691588724, NULL, NULL),
(34, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"EPaEnBkfbXl3IesfNOq7iuP4ctxpgZEWVtRhpco3\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1691654243, NULL, NULL),
(35, 2, '192.168.11.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"cNbS0PR6WPG9aahWiNx9s8DVZoyPJt46kLUOTaV1\",\"_previous\":{\"url\":\"http:\\/\\/192.168.11.102:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/192.168.11.102:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692075137, NULL, NULL),
(36, 2, '192.168.1.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"k5AxCl7L1AItguiYfaU4c0JC5uwrZkgIxxxXTim0\",\"_previous\":{\"url\":\"http:\\/\\/192.168.1.109:8080\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692102708, NULL, NULL),
(37, 2, '192.168.1.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"pBNwNuQuys0sR68msEtiQMBx0uwElMjAcADbYT18\",\"url\":{\"intended\":\"http:\\/\\/192.168.1.109:8080\\/admin\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/192.168.1.109:8080\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692107908, NULL, NULL),
(38, 2, '192.168.1.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"ZyVajSxhv7LxuN6vz38h8FVok0OsqOn0Z0CDWoex\",\"url\":{\"intended\":\"http:\\/\\/192.168.1.109:8080\\/admin\\/sessions\"},\"_previous\":{\"url\":\"http:\\/\\/192.168.1.109:8080\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692112181, NULL, NULL),
(39, 2, '192.168.1.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"VIrlL9yvO4cACQtARqSjfgMw4dZ0rjjocSDyUcpi\",\"url\":{\"intended\":\"http:\\/\\/192.168.1.109:8080\\/add\\/menu\"},\"_previous\":{\"url\":\"http:\\/\\/192.168.1.109:8080\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692117477, NULL, NULL),
(40, 2, '192.168.11.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"xi70ZrBNpdOya76oiHd4Jy4XnzwkldMLGGvaVBAA\",\"url\":{\"intended\":\"http:\\/\\/192.168.11.102:8080\\/template\\/footer\"},\"_previous\":{\"url\":\"http:\\/\\/192.168.11.102:8080\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692160022, NULL, NULL),
(41, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"Hj2Z2x3JlT9RdKgLwYPDdFf70jl2VSVpl79EU3gK\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692165597, NULL, NULL),
(42, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"PWI7TOSYkCONA2zBk3s6T6bTItLXD99I3wel9L8V\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692180134, NULL, NULL),
(43, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"EMBhgoDr0pGJtlylmXQrD37Qqyj1JaRXPoZDNqL5\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692180156, NULL, NULL),
(44, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"I5YHp0zGlCjKOpdvmVGZzwzfhw15ajFLQEqML9q4\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692180244, NULL, NULL),
(45, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"Dulggx2AbM1G2CDr1UYZDnQHAooCbMabOKcR4KFR\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692180256, NULL, NULL),
(46, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"8XP0mWr8HL6FNRCxWKyxyI0YAdQbIz6M3U00nZ27\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/chefs\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692250996, NULL, NULL),
(47, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"LEXy1PXpvpqOgClQCxoql3Q7pnik7y6M5a5Cyw0Q\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692251215, NULL, NULL),
(48, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"haVHU9fuonssZ9KKJxVdS6NfctsYvTHhJ09MkTGG\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692263741, NULL, NULL),
(49, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"t4OaIpiHxN5fI7E2FyixDPio0sfxYsILioVqIjps\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":4}', 1692264712, NULL, NULL),
(50, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"RuW92v3g1zeBLvXp0OB2U9XP0m7grVR20RBDf7v6\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":4}', 1692264884, NULL, NULL),
(51, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"VxSoQfZTqW1ZGU7AFUHI3eefr45BrHaiyO1ncgwc\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":4}', 1692265018, NULL, NULL),
(52, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"xrVm4Wj8bAEGPV5rFEfjax6yA8lDwyWqgHjo3c9Z\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":4}', 1692265343, NULL, NULL),
(53, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"uWDphsZ1d0tuEbxcrOTpG0f5BedJwsyt0IYMA4RI\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692265869, NULL, NULL),
(54, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"fdkrNPlGRrWElth2daWwr0kOFrqopDoHqUTNhZ3O\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":4}', 1692267474, NULL, NULL),
(55, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"y0mZFkco9uqujxeixg4tWi2G6eg2R4Q9A2KlSP5l\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692267630, NULL, NULL),
(56, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"dt2EyvkYBQb04pGK45tqLzExjjsdNN4Sm5otZIFz\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":4}', 1692268418, NULL, NULL),
(57, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"cXecpUGe59PElnQHbBvIO7LktZTipJPXbTQcOpBK\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692268901, NULL, NULL),
(58, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"DWqIE54gMgHzVbyWYSnfpfMGLnIzTTKMV0m9xeuk\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/categories\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692277416, NULL, NULL),
(59, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"W6QGkgu4fPsdnEqEWmMbBcmpLWB3SEN0Go7Arwjy\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692277676, NULL, NULL),
(60, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"WmLoFk8F9sc4YCQ1JkYwdNXPHPyrdqr34sI9fuUv\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692279502, NULL, NULL),
(61, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"zedXe4vz0EVkyYXkd5400SrYiUVVtBsdlWMTeT4S\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/plans\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692285867, NULL, NULL),
(62, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"Mepo3BkPvH1gjVmzCswDPduHkYynZkdaw5yYjs59\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692347763, NULL, NULL),
(63, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"PreVSSbU7P8yrSq2FmjphSmOlrjVLJKKI4wX0gSb\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692352705, NULL, NULL),
(64, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"HtlB1caT8tzq9LcE6y0Ho7kMUzvv9GvoAahRnNQg\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692352785, NULL, NULL),
(65, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"u3GsiLUhGdOWhRlDWyhVVp98O3xebSBlBBOcXvDW\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/menu\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692368732, NULL, NULL),
(66, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"FHkPyQhuS7ds0Jz3d4AbAuSNPVFomsMNUqWDk886\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/food-menu\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692376643, NULL, NULL),
(67, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"C3oIuAuyQDTQJ2Fxl4SFPItBD8cj8KR3aRDBLx2v\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/show\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692426193, NULL, NULL),
(68, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"1OIFnbIIeLmauxdA3iau2WqaPLd1q6bNxL3VF9lv\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692439954, NULL, NULL),
(69, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"6aID4PBT9Itv8ZQsOPQzGWyxOPqOKbdvp8E5LkAy\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692440019, NULL, NULL),
(70, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"Tj9hlji46gAQ7ZvISowBn4NJJ86CwlCqA9AQdlnC\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692441379, NULL, NULL),
(71, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"bmvGIdsEWl0gky2VLBXKGIXhcB68uSPkf1jXCvbD\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692443152, NULL, NULL),
(72, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"w8kFgiXFD4jEYqbikTrDeYac11WQnhOXeaaQGYKZ\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692443297, NULL, NULL),
(73, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"LvtMRQCVzLeVKMIb5wo76nfw2bV29OwDQuNhhXlo\",\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692448935, NULL, NULL),
(74, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"Ui6f4bSdNtWwssSsevOwHBZgmmdQqtQQuQzPDjn2\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692450455, NULL, NULL),
(75, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"y9ajmYaIq9JGa4vdMc38kLfxjUK28sllRBo0fFe5\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692451162, NULL, NULL),
(76, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"fOzePedIn2DOHFbNw4ZrVFImIAT7Qq4CIBsvpLIz\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login?email=admin%40admin.com&password=moha123456\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692451970, NULL, NULL),
(77, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"i2clAq62hD0Gx1pzRC6edAFcfO5pu6HIX8HLawqu\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/orders\\/processing\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692465625, NULL, NULL),
(78, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"sL0DFuRet2o3TC0rWL7IjocUOKijiFdqYwQ95bzL\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/menu\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/orders\\/failed\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692513507, NULL, NULL),
(79, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"emeWvPrw3tGOE0d7GiBmxkVPnGOVeFeMvSxsQWYA\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/index\\/payement\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692521089, NULL, NULL),
(80, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"VECYeT0JuNqR9r9RYzcEcPC00BPHWLHLYS9NFrQ6\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/owners\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692531415, NULL, NULL),
(81, 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"mMJZqlr3Tgb4xTamXWaQ56KCym3JO98eLDIeEsD4\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":9}', 1692532322, NULL, NULL),
(82, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"7Vd0Q2Z4q8JzlRj8RTzMTKTOGbajgY0XmDHrxLPP\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692532446, NULL, NULL),
(83, 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"41IQdfWfWzsjT14FTYIPJOhlLD9cFKhJ4m54I87x\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":9}', 1692532645, NULL, NULL),
(84, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"hywFAl600tz06pllcYZepvVlgrpdOnyfgxdtFz1r\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692596726, NULL, NULL),
(85, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"39IlVG0LXFsMJ4wlSkgDicLPdnlb1y3eKVbruWip\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692600942, NULL, NULL),
(86, 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"941iM9cL2vBtWkeigguM7RkDCwUTQQ5hQjvRMt1f\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":9}', 1692603168, NULL, NULL),
(87, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"zGujEx2NS9rdDXFQKQB1vu66YCo4ozodVtEeMVfF\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692606102, NULL, NULL),
(88, 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"D06SzFMqo9eDmIoIhmM6FgH1aukqvH9roh3tpW3j\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/404\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":10}', 1692612173, NULL, NULL),
(89, 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"8LofYNvbA2nOz9taII7gWKt001zyjvD3DhXGLTg1\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":10}', 1692614365, NULL, NULL),
(90, 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"tV3u7CmUWt51ntZ6SyRcHgUaoc00uGT6gqfQxym0\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":10}', 1692614798, NULL, NULL),
(91, 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"B7BmA4whNZV8f3pZz1W5ktmEp5jVfbLfcz6zmX8w\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":10}', 1692615232, NULL, NULL),
(92, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"tixNb1PvXVuVVLBjKYU8VxS5fz5xnZ25xYMkeU19\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692624209, NULL, NULL),
(93, 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"6PhjFA7d2LdZp6s8og820BUaSns3hOKiI6KP7pmt\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":9}', 1692624300, NULL, NULL),
(94, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"62CfnqVLGftzNhOl0tAL5va4NIrSM4ESOCK6vEMn\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692625773, NULL, NULL),
(95, 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"pdS4K0jIERpXBcpe6Dc3LJb6TMumxauVDerRucuD\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":9}', 1692625810, NULL, NULL),
(96, 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"kZHjWU1QoyrAjuarKJXLPCoSoqk0HjJghK6g1suw\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":12}', 1692625851, NULL, NULL),
(97, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '{\"_token\":\"m7W60mforrdgMhYBbiiz10aMv1zTcJu1o0dEOy87\",\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/dashboard\"},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692629248, NULL, NULL),
(98, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"9xYa2wMTu3cSrISRvqY9Ldr6WsaXFLjSqqjrijHt\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692686514, NULL, NULL),
(99, 13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"BJGQo47jhtFh2fnSa9thVJ08v94J3e97cU7IekwM\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":13}', 1692686568, NULL, NULL),
(100, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"lhfhrtpQU2d1vehv2FN6xPEzjAJJLCg8Vqo30jt5\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692772842, NULL, NULL),
(101, 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"cfcBXkrhVqja6LrGZ0RKAasUEeet1UBVGSdZyPYe\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":12}', 1692772855, NULL, NULL),
(102, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"kh9lNI91TNz830UMAODbFQC5B8G4wl0SqioXPjfN\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692774016, NULL, NULL),
(103, 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"sOaXuNb5ItdpWPgtdNOOm0vrnF76PQ3YoMt8gxcR\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":12}', 1692774519, NULL, NULL),
(104, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"wVcuDKx3abdopAUkfGuEDw7sZ6KoR7bbEWC3PrLm\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692776707, NULL, NULL),
(105, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"3YktqofvbbpJrJFWbJtfemUfq70ONTIgObhVPrQa\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692858446, NULL, NULL),
(106, 14, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"ynPOZd7ijLI08MN5Nxd00CxLIkKZvPNuNg1k78MI\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":14}', 1692858527, NULL, NULL),
(107, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"BIDsUg9MEVw3vz7JHSpe8Lpd7CwqByTGNx8uF85S\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/owner\\/3\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692864884, NULL, NULL),
(108, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"DllPJbzciYWshVGCNzj1MvN63iI7fArgR17z3jy2\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/owner\\/2\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":2}', 1692865512, NULL, NULL),
(109, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"pob8x1chtHGAOCFZxvrDQI6tgIFJFtHHQOpidRDE\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692868385, NULL, NULL),
(110, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"Nvt9gKEGclDsDHWrD5213Xj5DrGObtyuBt4SO5wI\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692940836, NULL, NULL),
(111, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"BRydJQK65CGuaxZo8wbw06nA8WLEdT0Drj5hzR87\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692943820, NULL, NULL),
(112, 18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"TgFM4XwFnglHmRUL9Bopy43nrfT89h7ZaJNbUtIu\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":18}', 1692943850, NULL, NULL),
(113, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"Z5rNtCSvaKRm5qWf9bNgZ6cTzJtBtDSxAmdks5xL\",\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"_flash\":{\"old\":[],\"new\":[]},\"url\":{\"intended\":\"http:\\/\\/127.0.0.1:8000\\/founder\\/dashboard\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1}', 1692951955, NULL, NULL),
(114, 19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '{\"_token\":\"0VSkT39BIeCzQE5LbHT9KufqhJg4s2e5qai89P25\",\"_flash\":{\"old\":[],\"new\":[]},\"_previous\":{\"url\":\"http:\\/\\/127.0.0.1:8000\\/login\"},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":19}', 1692952004, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionplans`
--

CREATE TABLE `subscriptionplans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration_months` int(11) NOT NULL,
  `features` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptionplans`
--

INSERT INTO `subscriptionplans` (`id`, `name`, `price`, `duration_months`, `features`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Basic', 4.99, 1, 'Dashboard Page\nManage Menu\nManage Chefs\nManage Reservations', '2023-08-16 10:41:04', '2023-08-16 10:41:04', 'Ideal plan for new users'),
(2, 'Standard', 19.99, 1, 'All Basic Features\nManage Admins\nManage Categories\nManage Orders\nCustomize Template', '2023-08-16 10:41:04', '2023-08-16 10:41:04', 'Best Seller Plan'),
(3, 'Premium', 29.99, 1, 'All Features of Standard Plan\nManage Sessions\nGenerate QR Code\nAttention to a Client', '2023-08-16 10:41:04', '2023-08-16 10:41:04', 'Ideal plan for food lovers');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_bigtitle` varchar(255) DEFAULT NULL,
  `contact_title` varchar(255) DEFAULT NULL,
  `contact_description` varchar(255) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_map` longtext DEFAULT NULL,
  `about_bigtitle` varchar(255) DEFAULT NULL,
  `about_img` varchar(255) DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_description` varchar(255) DEFAULT NULL,
  `about_video` varchar(255) DEFAULT NULL,
  `home_title` varchar(255) DEFAULT NULL,
  `home_description` varchar(255) DEFAULT NULL,
  `home_story_video` varchar(255) DEFAULT NULL,
  `home_story_title` varchar(255) DEFAULT NULL,
  `home_story_description` varchar(255) DEFAULT NULL,
  `footer_description` varchar(255) DEFAULT NULL,
  `restaurant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `contact_bigtitle`, `contact_title`, `contact_description`, `contact_address`, `contact_email`, `contact_phone`, `contact_map`, `about_bigtitle`, `about_img`, `about_title`, `about_description`, `about_video`, `home_title`, `home_description`, `home_story_video`, `home_story_title`, `home_story_description`, `footer_description`, `restaurant`) VALUES
(1, 'Contact US', 'Get in touch with us', 'Your email address will not be published. Required fields are marked *', 'Burger Bun, 208 Trainer Avenue street, Corner Market, NY - 62617.', 'mdoukkani8@gmail.com', '+212696807732', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.23055443112!2d-9.230025695346852!3d32.292991451658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi%2C%20Morocco!5e0!3m2!1sen!2sin!4v1691394689423!5m2!1sen!2sin', 'About US', 'about1.jpg', 'Hello and welcome to our restaurant! Right Ingredients for the Right Food', 'Lorem me viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Delight your best.', 'We are dedicated to the safety of our guests and employees and have updated our safety measures. Lorem ipsum dolor sit amet elit. Provident. fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac cursus quis, leo.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Burgers! You won\'t Find Anywhere Else with Best Quality', 'Lorem meme viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, consequatur voluptatem ad.', 'We are dedicated to the safety of our guests and employees and have updated our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a Retina and Responsive approched. Browse the amazing Features this template offers.', 'index'),
(2, 'Contact US', 'Get in touch with us', 'Your email address will not be published. Required fields are marked *', 'Burger Bun, 208 Trainer Avenue street, Corner Market, NY - 62617.', 'mdoukkani8@gmail.com', '+212696807732', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.23055443112!2d-9.230025695346852!3d32.292991451658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi%2C%20Morocco!5e0!3m2!1sen!2sin!4v1691394689423!5m2!1sen!2sin', 'About US', 'about1.jpg', 'Hello and welcome to our restaurant! Right Ingredients for the Right Food', 'Lorem me viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Delight your best.', 'We are dedicated to the safety of our guests and employees and have updated our safety measures. Lorem ipsum dolor sit amet elit. Provident. fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac cursus quis, leo.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Burgers! You won\'t Find Anywhere Else with Best Quality', 'Lorem meme viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, consequatur voluptatem ad.', 'We are imi to the safety of our guests and employees and have updated our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a Retina and Responsive approched. Browse the amazing Features this template offers.', 'snackahmed'),
(3, 'Contact US', 'Get in touch with us', 'Your email address will not be published. Required fields are marked *', 'Burger Bun, 208 Trainer Avenue street, Corner Market, NY - 62617.', 'mdoukkani8@gmail.com', '+212696807732', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.23055443112!2d-9.230025695346852!3d32.292991451658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi%2C%20Morocco!5e0!3m2!1sen!2sin!4v1691394689423!5m2!1sen!2sin', 'About US', 'about1.jpg', 'Hello and welcome to our restaurant! Right Ingredients for the Right Food', 'Lorem me viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Delight your Best.', 'We are dedicated to the safety of our guests and employees and have updated our safety measures. Lorem ipsum dolor sit amet elit. Provident. fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac cursus quis, leo.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Burgers! You won\'t Find Anywhere Else with Best Quality', 'Lorem meme viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, consequatur voluptatem ad.', 'We are dedicated to the safety of our guests and employees and have updated our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a Retina and Responsive approched. Browse the amazing Features this template offers.', '4saisons'),
(4, 'Contact US', 'Get in touch with us', 'Your email address will not be published. Required fields are marked *', 'Burger Bun, 208 Trainer Avenue street, Corner Market, NY - 62617.', 'mdoukkani8@gmail.com', '+212696807732', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.23055443112!2d-9.230025695346852!3d32.292991451658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi%2C%20Morocco!5e0!3m2!1sen!2sin!4v1691394689423!5m2!1sen!2sin', 'About US', 'about1.jpg', 'Hello and welcome to our restaurant! Right Ingredients for the Right Food', 'Lorem me viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Delight your best.', 'We are dedicated to the safety of our guests and employees and have updated our safety measures. Lorem ipsum dolor sit amet elit. Provident. fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac cursus quis, leo.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Burgers! You won\'t Find Anywhere Else with Best Quality', 'Lorem meme viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, consequatur voluptatem ad.', 'We are imi to the safety of our guests and employees and have updated our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a Retina and Responsive approched. Browse the amazing Features this template offers.', 'Mcdonald'),
(5, 'Contact US', 'Get in touch with us', 'Your email address will not be published. Required fields are marked *', 'Burger Bun, 208 Trainer Avenue street, Corner Market, NY - 62617.', 'mdoukkani8@gmail.com', '+212696807732', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.23055443112!2d-9.230025695346852!3d32.292991451658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi%2C%20Morocco!5e0!3m2!1sen!2sin!4v1691394689423!5m2!1sen!2sin', 'About US', 'about1.jpg', 'Hello and welcome to our restaurant! Right Ingredients for the Right Food', 'Lorem me viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Delight your best.', 'We are dedicated to the safety of our guests and employees and have updated our safety measures. Lorem ipsum dolor sit amet elit. Provident. fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac cursus quis, leo.', 'https://www.youtube.com/embed/dCVEY88Fn1k', 'Burgers! You won\'t Find Anywhere Else with Best Quality', 'Lorem meme viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, consequatur voluptatem ad.', 'We are dedicated to the safety of our guests and employees and have updated our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a Retina and Responsive approched. Browse the amazing Features this template offers.', 'Mcdonald');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'owner',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `Plan` varchar(255) NOT NULL DEFAULT 'free',
  `remember_token` varchar(100) DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cardnumber` varchar(255) DEFAULT NULL,
  `expirydate` varchar(255) DEFAULT NULL,
  `cvc` varchar(255) DEFAULT NULL,
  `restaurant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `Plan`, `remember_token`, `profile_photo_path`, `status`, `created_at`, `updated_at`, `phone`, `cardnumber`, `expirydate`, `cvc`, `restaurant`) VALUES
(1, 'Mohamed Doukkani', 'admin@admin.com', 'founder', '2023-08-05 11:49:11', '$2y$10$KGVGOP4hIdHOAdRpOJ3Mmuwas.db9jTngmUfIZPl00sZl3djjhFRi', '', 'j6MKsfhwiaD1gk1k8l74AIKWq9Rpem30NlK2eo7KFL5voJ4x9WomafGHkpAf', '417099125.jpeg', 1, '2023-08-04 16:00:08', '2023-08-05 11:49:11', '0696807732', NULL, NULL, NULL, 'index'),
(2, 'Ali doukkani', 'doukkani.moha@gmail.com', 'owner', '2023-08-05 11:52:46', '$2y$10$ur6Ih6xkchnTdK9jAz8VoOFYvFmIp6rkC8BynEGzeRdVc7KIiYo12', 'Premium', 'BACjkc9GVMikDazy8o71IrEdiu1PXz669585uXNbA9iZBY5I7USvdkryAJjT', '1679775093.png', 1, '2023-08-04 17:15:08', '2023-08-05 11:52:46', '+212696807732', '1234567812345678', '04/25', '124', 'snackahmed'),
(3, 'Redouane Doukkani', 'contact.booksm@gmail.com', 'owner', '2023-08-24 04:26:24', '$2y$10$og.WjRTOUOCvGJOYn8aHrOFxIDH5GlFFtBMfLUSfobQCpDT2338h.', 'Premium', NULL, NULL, 1, '2023-08-24 04:26:00', '2023-08-24 04:26:24', NULL, '1234567812345678', '04/25', '124', '4saisons'),
(19, 'Bouchra Robai', 'bouchrarobai0@gmail.com', 'owner', '2023-08-25 06:25:04', '$2y$10$tTxCReTiGd4K70mMG4VORuT2Gl7MP3VRQtUsHRr9zdoeiIatys5Hm', 'Premium', NULL, NULL, 1, '2023-08-25 06:24:42', '2023-08-25 06:25:04', NULL, '1234567812345678', '04/25', '124', 'Mcdonald');

-- --------------------------------------------------------

--
-- Table structure for table `waitress`
--

CREATE TABLE `waitress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datetime_created` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waitress`
--

INSERT INTO `waitress` (`id`, `datetime_created`, `created_at`, `updated_at`, `status`) VALUES
(1, '2023-08-07 05:58:11', NULL, NULL, 0),
(2, '2023-08-07 05:58:11', NULL, NULL, 0),
(3, '2023-08-07 05:58:11', NULL, NULL, 0),
(4, '2023-08-07 05:58:11', NULL, NULL, 0),
(5, '2023-08-07 05:58:11', NULL, NULL, 0),
(6, '2023-08-07 05:58:11', NULL, NULL, 0),
(7, '2023-08-19 15:13:01', NULL, NULL, 0),
(8, '2023-08-19 15:14:03', NULL, NULL, 0),
(9, '2023-08-19 15:14:47', NULL, NULL, 0),
(10, '2023-08-19 15:14:52', NULL, NULL, 0),
(11, '2023-08-19 15:15:19', NULL, NULL, 0),
(12, '2023-08-19 15:19:34', NULL, NULL, 0),
(13, '2023-08-19 15:21:06', NULL, NULL, 0),
(14, '2023-08-19 15:24:20', NULL, NULL, 1),
(15, '2023-08-22 06:44:20', NULL, NULL, 0),
(16, '2023-08-24 06:29:50', NULL, NULL, 0);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `subscriptionplans`
--
ALTER TABLE `subscriptionplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `waitress`
--
ALTER TABLE `waitress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `subscriptionplans`
--
ALTER TABLE `subscriptionplans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `waitress`
--
ALTER TABLE `waitress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
