-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 12:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_manager`
--

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
(5, '2023_09_13_141431_create_tasks_table', 2);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'API TOKEN', '0ae8a7e3c86fe8abc9b363d662f4caba3f23c22e1762daf0ffbae74eba2f0464', '[\"*\"]', NULL, NULL, '2023-09-13 08:29:55', '2023-09-13 08:29:55'),
(2, 'App\\Models\\User', 1, 'API TOKEN', '182c89719f5e2f7b606b74e8d5ef2e685da958dd17208afc823162d74b24156b', '[\"*\"]', NULL, NULL, '2023-09-13 08:31:02', '2023-09-13 08:31:02'),
(3, 'App\\Models\\User', 1, 'API TOKEN', '930105412fda5402b7717d74c74780fc9026c905a93ae85fc83014da55effcec', '[\"*\"]', NULL, NULL, '2023-09-13 08:32:30', '2023-09-13 08:32:30'),
(4, 'App\\Models\\User', 2, 'API TOKEN', 'ed2ea1081d26c82784cf33faaa24e386b62d33a2523ba459f2ee43b380384b32', '[\"*\"]', NULL, NULL, '2023-09-13 12:58:42', '2023-09-13 12:58:42'),
(5, 'App\\Models\\User', 3, 'API TOKEN', '5a90e10753e3246a780bd69b088114ecf2d1344ad9dc8dbbced2ed7abba6482e', '[\"*\"]', NULL, NULL, '2023-09-13 12:59:13', '2023-09-13 12:59:13'),
(6, 'App\\Models\\User', 4, 'API TOKEN', '4f9cb268220ad16f6c6bb3a5ec4a33b514c80a151a8baf5403b3a39cef1cfd59', '[\"*\"]', NULL, NULL, '2023-09-13 12:59:50', '2023-09-13 12:59:50'),
(7, 'App\\Models\\User', 5, 'API TOKEN', 'a5d723add74b7ae0d3b7967973973cb82ea932a46f9a8cc666bd21f6df8be38a', '[\"*\"]', NULL, NULL, '2023-09-13 13:00:29', '2023-09-13 13:00:29'),
(8, 'App\\Models\\User', 1, 'API TOKEN', '7f885e90f99df8cfacfaaa58548e10da180a850eae2eff12bd269a4c8de4016a', '[\"*\"]', NULL, NULL, '2023-09-14 03:00:27', '2023-09-14 03:00:27'),
(9, 'App\\Models\\User', 1, 'API TOKEN', 'f11897edef642d9ab84db038c5d6e358c8a6af3217948e3dc44f7a77d2f8fff8', '[\"*\"]', NULL, NULL, '2023-09-14 03:44:50', '2023-09-14 03:44:50'),
(10, 'App\\Models\\User', 1, 'API TOKEN', '0cfa7cc9bee2a83285716d7f8ad741a77b6300a9abc2e9685f838a55c2822511', '[\"*\"]', NULL, NULL, '2023-09-14 03:45:12', '2023-09-14 03:45:12'),
(11, 'App\\Models\\User', 1, 'API TOKEN', 'baee3a5a7b6094546b8526f79830ed56fe6a8a4a3199479f319bd5d91aa55829', '[\"*\"]', NULL, NULL, '2023-09-14 03:45:52', '2023-09-14 03:45:52'),
(12, 'App\\Models\\User', 6, 'API TOKEN', 'f0858ff7cf34ece56491b003f4eb7b354a474009aa81be657f6396e1dc5cd3da', '[\"*\"]', NULL, NULL, '2023-09-14 03:59:06', '2023-09-14 03:59:06'),
(13, 'App\\Models\\User', 1, 'API TOKEN', '8a8deebca0ffdaf69c8078c5027ebb5c3477aa5522bb78ae5411641c0de23483', '[\"*\"]', NULL, NULL, '2023-09-14 04:00:45', '2023-09-14 04:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user` int(11) NOT NULL,
  `status` enum('Assigned','Ongoing','Completed') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `title`, `body`, `user`, `status`, `created_at`, `updated_at`) VALUES
(1, 'task 1', 'description testing of task 1', 3, 'Assigned', '2023-09-13 13:27:21', '2023-09-13 13:27:21'),
(2, 'test 222', 'rewrewrwe3333', 3, 'Ongoing', '2023-09-14 00:31:08', '2023-09-14 02:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$78sdUG3H0eA.OFGo2xOFXeEltZbxASv4cHAqtXzwMENBdoehwiHPu', NULL, '2023-09-13 08:29:55', '2023-09-13 08:29:55'),
(2, 'Ani', 'ani@ani.com', NULL, '$2y$10$0JhzWEnRWn0W3GO5qJl7UOobv9aQMBjeOCU1MDtlhaBNJvy/2mRKm', NULL, '2023-09-13 12:58:42', '2023-09-13 12:58:42'),
(3, 'John Doe', 'johndoe@john.com', NULL, '$2y$10$QQdef2gUyHevXXWYhHskiuWJhaxpTl1lZx88yLzXn9WwJ7BrKWP0G', NULL, '2023-09-13 12:59:13', '2023-09-13 12:59:13'),
(4, 'Lorem Ipsum', 'lorem@ipsum.com', NULL, '$2y$10$h7pcUk46JfojumlzvB/esOrOajem30rTp0Sp/N01J/KUrclv3IqHW', NULL, '2023-09-13 12:59:50', '2023-09-13 12:59:50'),
(5, 'Mathew', 'mathew@mathew.com', NULL, '$2y$10$/pmq2gGwy2cAi9NP/m3A8ujT8OTWgR4aZrgUCjBalpiyag0a2CdyS', NULL, '2023-09-13 13:00:29', '2023-09-13 13:00:29'),
(6, 'new test', 'newtest@new.com', NULL, '$2y$10$ZXMKy.X6anEz9hj7brVNCOLd4ETWL7LSAGJaYr9BaQKi02PgNms0e', NULL, '2023-09-14 03:59:05', '2023-09-14 03:59:05'),
(7, 'test1', 'test1@test1.com', NULL, '$2y$10$ulx1veOnen91itEt/Cjp5.jom2nx2klhdgkJbU4t1zAYTZ3qkG0Ca', NULL, '2023-09-14 04:00:31', '2023-09-14 04:00:31');

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
