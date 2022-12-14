-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 06:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natal2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ibadah`
--

CREATE TABLE `ibadah` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ibadah`
--

INSERT INTO `ibadah` (`id`, `nama`, `qty`, `contact_person`, `created_at`) VALUES
(1, 'Aruna 08.00', 1125, '628122046786', '2022-10-25 10:14:44'),
(2, 'Aruna 10.30', 1125, '628122046786', '2022-10-25 10:14:44'),
(3, 'Aruna 15.00', 1125, '628122046786', '2022-10-25 10:14:44'),
(4, 'Aruna 17.30', 1125, '628122046786', '2022-10-25 10:14:44'),
(5, 'Baranangsiang 08.00', 1325, '6281802254520', '2022-10-25 10:14:44'),
(6, 'Baranangsiang 10.30', 1325, '6281802254520', '2022-10-25 10:14:44'),
(7, 'Baranangsiang 15.00', 1325, '6281802254520', '2022-10-25 10:14:44'),
(8, 'Baranangsiang 17.30', 1325, '6281802254520', '2022-10-25 10:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `ibadah_asal`
--

CREATE TABLE `ibadah_asal` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `counter` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ibadah_asal`
--

INSERT INTO `ibadah_asal` (`id`, `nama`, `counter`, `created_at`) VALUES
(1, 'Aruna 1', 1, '2022-10-25 10:17:25'),
(2, 'Aruna 2', 0, '2022-10-25 10:17:25'),
(3, 'Aruna 3', 0, '2022-10-25 10:17:25'),
(4, 'Aruna 4', 0, '2022-10-25 10:17:25'),
(5, 'Aruna 5', 0, '2022-10-25 10:17:25'),
(6, 'Baranangsiang 1', 0, '2022-10-25 10:17:25'),
(7, 'Baranangsiang 2', 0, '2022-10-25 10:17:25'),
(8, 'Baranangsiang 3', 0, '2022-10-25 10:17:25'),
(9, 'Baranangsiang 4', 0, '2022-10-25 10:17:25'),
(10, 'Baranangsiang 5', 0, '2022-10-25 10:17:25'),
(11, 'Gedebage', 0, '2022-10-25 10:17:25'),
(12, 'Regency 1', 0, '2022-10-25 10:17:25'),
(13, 'Regency 2', 0, '2022-10-25 10:17:25'),
(14, 'Regency 3', 0, '2022-10-25 10:17:25'),
(15, 'Regency 4', 0, '2022-10-25 10:17:25'),
(16, 'Regency 5', 0, '2022-10-25 10:17:25'),
(17, 'Regency 4', 0, '2022-10-25 10:17:25'),
(18, 'Regency 5', 0, '2022-10-25 10:17:25'),
(19, 'Piset 1', 0, '2022-10-25 10:17:25'),
(20, 'Piset 2', 0, '2022-10-25 10:17:25'),
(21, 'Piset 3', 0, '2022-10-25 10:17:25'),
(22, 'Soekarno Hatta 1', 0, '2022-10-25 10:17:25'),
(23, 'Soekarno Hatta 2', 0, '2022-10-25 10:17:25'),
(24, 'Soekarno Hatta 3', 0, '2022-10-25 10:17:25'),
(25, 'Yello', 0, '2022-10-25 10:17:25'),
(26, 'Lainnya', 0, '2022-10-25 10:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrant`
--

CREATE TABLE `registrant` (
  `id` int(50) NOT NULL,
  `kaj` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `m-class` tinyint(1) NOT NULL DEFAULT 0,
  `ibadah_asal` int(11) NOT NULL,
  `ibadah` int(11) NOT NULL,
  `qr_code` varchar(255) DEFAULT NULL,
  `attend` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrant`
--

INSERT INTO `registrant` (`id`, `kaj`, `nama`, `email`, `phone`, `dob`, `m-class`, `ibadah_asal`, `ibadah`, `qr_code`, `attend`, `created_at`) VALUES
(1, 1234, 'Abraham Rendy Hermawan', 'aeroponse@gmail.com', '08986806006', '2022-11-23', 0, 15, 6, '1234', 0, '2022-11-01 09:57:37'),
(2, 1234124, '12341', 'aeroponse@gmail.com', '08986806006', '2022-11-24', 0, 15, 6, '1234124', 0, '2022-11-01 09:58:44'),
(3, NULL, 'asda', 'aeroponse@gmail.com', '08986806006', '2022-11-03', 0, 17, 6, '2022173', 0, '2022-11-01 10:07:33'),
(4, NULL, 'asdf', 'aeroponse@gmail.com', '08986806006', '2022-11-13', 0, 13, 5, '2022134', 0, '2022-11-01 10:19:17'),
(5, NULL, 'asdafs', 'aeroponse@gmail.com', '08986806006', '2022-11-29', 0, 16, 5, '2022165', 0, '2022-11-01 10:19:50'),
(6, NULL, 'asdfzxc', '1234@1234.com', '08986806006', '2022-11-06', 1, 1, 4, '202211', 0, '2022-11-01 15:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@arh.com', NULL, '$2y$10$fxZz19276k2VjlZCqm9RD.jH21w7F9fGX/S1oe5Ym8VQFtxn70j.i', NULL, '2022-09-13 02:16:13', '2022-09-13 02:16:13');

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
-- Indexes for table `ibadah`
--
ALTER TABLE `ibadah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ibadah_asal`
--
ALTER TABLE `ibadah_asal`
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
-- Indexes for table `registrant`
--
ALTER TABLE `registrant`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `ibadah`
--
ALTER TABLE `ibadah`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ibadah_asal`
--
ALTER TABLE `ibadah_asal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrant`
--
ALTER TABLE `registrant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
