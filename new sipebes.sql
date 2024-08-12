-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2024 at 05:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipebes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_orders`
--

CREATE TABLE `admin_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `admin_id` bigint UNSIGNED NOT NULL,
  `seller_id` bigint UNSIGNED NOT NULL,
  `order_date` timestamp NOT NULL,
  `status` enum('pending','confirmed','shipped','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_orders`
--

INSERT INTO `admin_orders` (`id`, `admin_id`, `seller_id`, `order_date`, `status`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2024-06-23 20:16:30', 'confirmed', 1000000.00, '2024-06-23 20:16:30', '2024-06-23 20:16:30'),
(40, 3, 1, '2024-06-25 00:43:02', 'confirmed', 210000.00, '2024-06-25 00:43:02', '2024-06-25 00:43:02'),
(41, 3, 1, '2024-06-25 00:43:59', 'confirmed', 2500000.00, '2024-06-25 00:43:59', '2024-06-25 00:43:59'),
(42, 3, 1, '2024-06-25 00:44:40', 'confirmed', 1800000.00, '2024-06-25 00:44:40', '2024-06-25 00:44:40'),
(43, 3, 1, '2024-06-25 22:20:32', 'confirmed', 560000.00, '2024-06-25 22:20:32', '2024-06-25 22:20:32'),
(44, 3, 1, '2024-07-17 22:25:00', 'confirmed', 700000.00, '2024-07-17 22:25:00', '2024-07-17 22:25:00'),
(45, 3, 1, '2024-08-08 23:31:56', 'confirmed', 1070000.00, '2024-08-08 23:31:56', '2024-08-08 23:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `admin_order_details`
--

CREATE TABLE `admin_order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `admin_order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_order_details`
--

INSERT INTO `admin_order_details` (`id`, `admin_order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 500000.00, '2024-06-23 20:16:30', '2024-06-23 20:16:30'),
(32, 40, 2, 3, 70000.00, '2024-06-25 00:43:02', '2024-06-25 00:43:02'),
(33, 41, 1, 5, 500000.00, '2024-06-25 00:43:59', '2024-06-25 00:43:59'),
(34, 42, 3, 9, 200000.00, '2024-06-25 00:44:40', '2024-06-25 00:44:40'),
(35, 43, 2, 8, 70000.00, '2024-06-25 22:20:32', '2024-06-25 22:20:32'),
(36, 44, 2, 10, 70000.00, '2024-07-17 22:25:00', '2024-07-17 22:25:00'),
(37, 45, 1, 2, 500000.00, '2024-08-08 23:31:56', '2024-08-08 23:31:56'),
(38, 45, 2, 1, 70000.00, '2024-08-08 23:31:56', '2024-08-08 23:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2024_06_16_070020_create_products_penjual', 1),
(15, '0001_01_01_000000_create_users_table', 2),
(16, '0001_01_01_000001_create_cache_table', 2),
(17, '0001_01_01_000002_create_jobs_table', 2),
(30, '2024_06_13_020316_create_products_table', 3),
(31, '2024_06_13_020502_create_orders_table', 3),
(32, '2024_06_13_020639_create_notifications_table', 3),
(33, '2024_06_13_020727_create_payments_table', 3),
(34, '2024_06_13_020907_create_shipping_table', 3),
(35, '2024_06_13_020955_create_cancellations_table', 3),
(36, '2024_06_16_083403_create_product_penjuals_table', 3),
(37, '2024_06_19_133950_create_seller_order_histories_table', 3),
(38, '2024_06_19_141729_create_admin_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `buyer_id` bigint UNSIGNED NOT NULL,
  `seller_id` bigint UNSIGNED NOT NULL,
  `order_date` timestamp NOT NULL,
  `status` enum('pending','confirmed','shipped','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `buyer_id`, `seller_id`, `order_date`, `status`, `total_amount`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2024-06-23 21:09:36', 'confirmed', 4000000.00, 1, 2, 2000000.00, '2024-06-23 21:09:36', '2024-06-24 00:56:42'),
(6, 2, 3, '2024-06-24 01:00:24', 'confirmed', 30000000.00, 3, 1, 30000000.00, '2024-06-24 01:00:24', '2024-06-24 01:00:51'),
(7, 2, 3, '2024-06-24 01:02:39', 'confirmed', 5000000.00, 2, 5, 1000000.00, '2024-06-24 01:02:39', '2024-06-24 01:02:52'),
(8, 2, 3, '2024-06-24 19:13:08', 'confirmed', 60000000.00, 3, 2, 30000000.00, '2024-06-24 19:13:08', '2024-07-17 22:15:34'),
(9, 2, 3, '2024-07-23 22:04:48', 'confirmed', 30000000.00, 3, 1, 30000000.00, '2024-07-23 22:04:48', '2024-07-23 22:06:28'),
(10, 2, 3, '2024-07-23 22:05:24', 'pending', 2000000.00, 2, 2, 1000000.00, '2024-07-23 22:05:24', '2024-07-23 22:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `payment_date` timestamp NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_date`, `amount`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-06-24 00:56:42', 4000000.00, 'cash', 'completed', '2024-06-24 00:56:42', '2024-06-24 00:56:42'),
(2, 6, '2024-06-24 01:00:51', 30000000.00, 'bank_transfer', 'completed', '2024-06-24 01:00:51', '2024-06-24 01:00:51'),
(3, 7, '2024-06-24 01:02:52', 5000000.00, 'qris', 'completed', '2024-06-24 01:02:52', '2024-06-24 01:02:52'),
(4, 8, '2024-07-17 22:15:34', 60000000.00, 'qris', 'completed', '2024-07-17 22:15:34', '2024-07-17 22:15:34'),
(5, 9, '2024-07-23 22:06:28', 30000000.00, 'qris', 'completed', '2024-07-23 22:06:28', '2024-07-23 22:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int NOT NULL,
  `seller_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `price`, `description`, `color`, `quantity`, `seller_id`, `created_at`, `updated_at`) VALUES
(1, 'Pintu Besi', 'product_photos/JkLMSG0tq5LpplWChzoHHROFVNrGEPA301kahDmI.jpg', 2000000.00, 'Pintu besi adalah jenis pintu yang terbuat dari bahan besi. Pintu ini umumnya digunakan sebagai pintu rumah, garasi, toko, dan bangunan komersial lainnya.', 'custom colour', 146, 3, '2024-06-23 20:09:33', '2024-06-23 20:10:02'),
(2, 'Jerjak Jendela', 'product_photos/tTbSsGxbUslW8ELy5reZ4BU3ycAHKjpx8LVeo2Ei.jpg', 1000000.00, 'Jerjak jendela, yang juga dikenal sebagai teralis jendela, adalah kisi-kisi atau pagar yang dipasang pada jendela untuk meningkatkan keamanan dan mencegah pencurian. Jerjak jendela biasanya terbuat dari besi, baja, aluminium, atau kayu.', 'custom colour', 242, 3, '2024-06-23 20:11:12', '2024-06-23 20:11:12'),
(3, 'Tangga Model Melingkar', 'product_photos/LADzUzckyuVtmfdq0uR5fBq11CV4gsWl3VBfWNqR.jpg', 30000000.00, 'Tangga melingkar, juga dikenal sebagai tangga spiral, adalah jenis tangga yang berputar ke atas dengan bentuk melingkar. Tangga ini umumnya digunakan di ruangan dengan ruang terbatas, karena desainnya yang hemat ruang. Tangga melingkar tersedia dalam berbagai bahan, gaya, dan ukuran, sehingga dapat menjadi pilihan yang menarik untuk berbagai jenis rumah.', 'custom colour', 90, 3, '2024-06-23 20:12:12', '2024-06-23 20:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_penjuals`
--

CREATE TABLE `product_penjuals` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int NOT NULL,
  `seller_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_penjuals`
--

INSERT INTO `product_penjuals` (`id`, `name`, `photo`, `price`, `description`, `color`, `quantity`, `seller_id`, `created_at`, `updated_at`) VALUES
(1, 'Elektroda Las', 'product_photos/78k6G7xOq6Qjz4a7JBxytbhG0nXRYUykCj3NR5cM.jpg', 500000.00, 'Elektroda las adalah batang logam tipis yang dilapisi dengan bahan fluks. Fluks ini membantu melindungi logam yang dilas dari kontaminasi dan membantu menciptakan sambungan las yang kuat. Elektroda las digunakan dalam pengelasan busur listrik, di mana panas dan cahaya dihasilkan oleh busur listrik yang dibuat antara elektroda dan benda kerja.', 'Silver', 100, 1, '2024-06-23 20:13:43', '2024-06-23 20:13:43'),
(2, 'Besi Profile Hollow', 'product_photos/Opp7c7MJbUVZD3k9HX3WUSpUCaATQtPS2rvOoJyC.jpg', 70000.00, 'Besi profil hollow, juga dikenal sebagai pipa kotak atau HSS (Hollow Structural Section), adalah batang besi berongga dengan penampang segi empat. Besi ini banyak digunakan dalam konstruksi bangunan, furniture, dan berbagai aplikasi lainnya.', 'Putih', 350, 1, '2024-06-23 20:14:40', '2024-06-23 20:14:40'),
(3, 'Batu Gerinda Potong', 'product_photos/SY32Om2rmZ74WExtzKfsZp3wDQitS82hLMTGp1XP.jpg', 200000.00, 'Batu gerinda potong, juga dikenal sebagai cutting disc atau grinding wheel, adalah roda abrasif yang dipasang pada mesin gerinda untuk memotong berbagai bahan, seperti logam, batu, dan keramik. Batu gerinda potong terbuat dari berbagai bahan abrasif, seperti alumina, silikon karbida, dan boron nitrida kubik. Bahan abrasif ini diikat bersama dengan resin atau bahan pengikat lainnya.', 'Coklat', 264, 1, '2024-06-23 20:15:37', '2024-06-23 20:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `seller_order_details`
--

CREATE TABLE `seller_order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `seller_order_history_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_order_histories`
--

CREATE TABLE `seller_order_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `admin_id` bigint UNSIGNED NOT NULL,
  `seller_id` bigint UNSIGNED NOT NULL,
  `order_date` timestamp NOT NULL,
  `status` enum('pending','confirmed','shipped','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LdFfePm4ssfrXqtWQcYx6gNWm1vn6NG5JkCnW9bI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQm9seTFPeldSeHZjTzN1b1RvN3gyQ1dvc2E5Z0NjNmdETlpZQ2x5NiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1723394378),
('lYqidHEwlqLBddLN2IVbbfnLxssVuFv4OkDobLFL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXYzZklmMW83OGZ0T1Bxc0o2RTNkWjRtTmM3c1hyY2NyWlc4R1h4NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723441168);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pembeli',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Axel', '$2y$12$3wkHdnF.khr.YqFLEFz4SewD3f0HEZyDNcFLTtBICRj1.FD2fiflq', 'axel@gmail.com', 'penjual', 1, '2024-06-22 04:20:48', '2024-06-22 04:20:48'),
(2, 'Paulo', '$2y$12$/f6hpq0fSZB47tWbPBnxpedt0QSHBOhDtBJ131Mo4FwxiGzYQnFIa', 'paulo@gmail.com', 'pembeli', 1, '2024-06-22 04:20:48', '2024-06-22 04:20:48'),
(3, 'AdminParis', '$2y$12$pBtACu5cmR14JyRHm.vsQ.vxPiz5ZYaFiYTIUnvhSMPt5Vdekys86', 'admin@gmail.com', 'admin', 1, '2024-06-22 04:20:49', '2024-06-22 04:20:49'),
(8, 'maudy', '$2y$12$3NhdPHjkTnPX1em.mbReKOsIyjRsB1HIspGb/GcE8JKDUT6f8gkXi', 'maudy@gmail.com', 'pembeli', 1, '2024-08-01 03:28:02', '2024-08-01 03:28:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_orders`
--
ALTER TABLE `admin_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_orders_admin_id_foreign` (`admin_id`),
  ADD KEY `admin_orders_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `admin_order_details`
--
ALTER TABLE `admin_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_order_details_admin_order_id_foreign` (`admin_order_id`),
  ADD KEY `admin_order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_buyer_id_foreign` (`buyer_id`),
  ADD KEY `orders_seller_id_foreign` (`seller_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `product_penjuals`
--
ALTER TABLE `product_penjuals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_penjuals_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `seller_order_details`
--
ALTER TABLE `seller_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_order_details_seller_order_history_id_foreign` (`seller_order_history_id`),
  ADD KEY `seller_order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `seller_order_histories`
--
ALTER TABLE `seller_order_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_order_histories_admin_id_foreign` (`admin_id`),
  ADD KEY `seller_order_histories_seller_id_foreign` (`seller_id`);

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
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_orders`
--
ALTER TABLE `admin_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `admin_order_details`
--
ALTER TABLE `admin_order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_penjuals`
--
ALTER TABLE `product_penjuals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_order_details`
--
ALTER TABLE `seller_order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_order_histories`
--
ALTER TABLE `seller_order_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_orders`
--
ALTER TABLE `admin_orders`
  ADD CONSTRAINT `admin_orders_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_orders_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_order_details`
--
ALTER TABLE `admin_order_details`
  ADD CONSTRAINT `admin_order_details_admin_order_id_foreign` FOREIGN KEY (`admin_order_id`) REFERENCES `admin_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product_penjuals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_penjuals`
--
ALTER TABLE `product_penjuals`
  ADD CONSTRAINT `product_penjuals_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seller_order_details`
--
ALTER TABLE `seller_order_details`
  ADD CONSTRAINT `seller_order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seller_order_details_seller_order_history_id_foreign` FOREIGN KEY (`seller_order_history_id`) REFERENCES `seller_order_histories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seller_order_histories`
--
ALTER TABLE `seller_order_histories`
  ADD CONSTRAINT `seller_order_histories_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seller_order_histories_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
