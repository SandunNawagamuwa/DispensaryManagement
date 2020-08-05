-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 01:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dispensary`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collestrols`
--

CREATE TABLE `collestrols` (
  `id` int(20) NOT NULL,
  `rate` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collestrols`
--

INSERT INTO `collestrols` (`id`, `rate`, `comment`, `created_at`, `c_id`, `updated_at`) VALUES
(6, '90', NULL, '2020-08-02 10:43:30', 73, NULL),
(7, '99', NULL, '2020-08-02 12:32:36', 75, NULL),
(8, '99', NULL, '2020-08-03 06:40:25', 75, NULL),
(9, '155', NULL, '2020-08-03 06:40:39', 75, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dispensaries`
--

CREATE TABLE `dispensaries` (
  `App_ID` bigint(20) UNSIGNED NOT NULL,
  `P_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Doc_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `E_mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dispensaries`
--

INSERT INTO `dispensaries` (`App_ID`, `P_ID`, `Doc_ID`, `Date`, `E_mail`, `created_at`, `updated_at`, `status`) VALUES
(1, '1', 'Dr.asiri', '2020-07-26', 'hju@gmail.com', '2020-07-22 06:35:09', '2020-07-31 19:16:29', 1),
(2, '32', 'Dr.perea', '2020-07-29', 'upeksha951023@gmail.com', '2020-07-22 06:36:28', '2020-07-31 21:30:17', 1),
(3, '4', '54', '2020-08-05', 'patient@patient.com', NULL, NULL, 1),
(4, '4', '56', '2020-08-06', 'patient@patient.com', NULL, NULL, 1),
(5, '4', '54', '2020-08-05', 'patient@patient.com', NULL, NULL, 1),
(6, '4', '54', '2020-08-05', 'patient@patient.com', NULL, NULL, 1),
(7, '75', '56', '2020-08-04', 'sudarshana@ramesh.com', NULL, NULL, 1),
(8, '75', '54', '2020-08-12', 'sudarshana@ramesh.com', '2020-08-03 11:03:40', '2020-08-03 11:03:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `medical_record` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_records`
--

INSERT INTO `medical_records` (`id`, `created_at`, `updated_at`, `medical_record`, `patient_id`) VALUES
(5, '2020-08-02 07:26:38', '2020-08-02 07:26:38', '1596372998.jpeg', 75),
(6, '2020-08-02 07:28:31', '2020-08-02 07:28:31', '1596373111.jpeg', 75),
(7, '2020-08-02 07:29:52', '2020-08-02 07:29:52', '1596373192.jpeg', 75),
(8, '2020-08-02 07:35:56', '2020-08-02 07:35:56', '1596373556.jpeg', 75),
(9, '2020-08-02 07:36:18', '2020-08-02 07:36:18', '1596373578.jpeg', 75),
(10, '2020-08-02 07:54:18', '2020-08-02 07:54:18', '1596374658.jpeg', 75),
(11, '2020-08-02 07:55:14', '2020-08-02 07:55:14', '1596374714.jpeg', 75),
(12, '2020-08-02 07:59:12', '2020-08-02 07:59:12', '1596374952.jpeg', 75),
(13, '2020-08-02 08:00:00', '2020-08-02 08:00:00', '1596374999.jpeg', 75),
(14, '2020-08-02 08:00:45', '2020-08-02 08:00:45', '1596375045.jpeg', 75),
(15, '2020-08-02 08:01:34', '2020-08-02 08:01:34', '1596375094.jpeg', 75),
(16, '2020-08-02 08:02:22', '2020-08-02 08:02:22', '1596375142.jpeg', 75),
(17, '2020-08-02 08:02:46', '2020-08-02 08:02:46', '1596375166.jpeg', 75),
(18, '2020-08-02 08:04:02', '2020-08-02 08:04:02', '1596375241.jpeg', 75),
(19, '2020-08-02 08:04:11', '2020-08-02 08:04:11', '1596375251.jpeg', 75),
(20, '2020-08-02 08:10:23', '2020-08-02 08:10:23', '1596375623.jpeg', 75),
(21, '2020-08-02 08:18:15', '2020-08-02 08:18:15', '1596376095.jpeg', 75),
(22, '2020-08-02 08:24:20', '2020-08-02 08:24:20', '1596376460.jpeg', 73),
(23, '2020-08-02 08:24:38', '2020-08-02 08:24:38', '1596376478.jpeg', 73);

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
(3, '2020_01_12_063403_create_user1_table', 1),
(4, '2014_10_12_000000_create_users_table', 2),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2020_04_01_120724_create_roles_table', 3),
(7, '2020_04_01_121710_create_role_user_table', 3),
(8, '2020_04_03_165118_create_user_infos_table', 4),
(9, '2020_04_03_165142_create_patient_infos_table', 5),
(10, '2020_04_03_164834_create_medical_records_table', 6),
(11, '2020_04_03_165255_create_appointments_table', 6),
(12, '2020_04_08_065539_add_columns_to_medical_records_table', 6),
(13, '2020_04_08_070218_add_columns_to_appointments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_infos`
--

CREATE TABLE `patient_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bday` date NOT NULL,
  `blood_group` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberof_child` int(11) NOT NULL,
  `allergies` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_infos`
--

INSERT INTO `patient_infos` (`id`, `bday`, `blood_group`, `civil_status`, `numberof_child`, `allergies`, `user_id`, `created_at`, `updated_at`) VALUES
(5, '1995-12-21', 'B+', 'Married', 2, 'Fever', 58, '2020-08-02 01:23:02', '2020-08-02 01:23:02'),
(6, '1995-06-23', 'A+', 'married', 8, 'head', 59, '2020-08-02 01:31:34', '2020-08-02 01:31:34'),
(7, '1998-04-25', 'B+', 'Married', 4, 'head', 60, '2020-08-02 01:34:06', '2020-08-02 01:34:06'),
(8, '1989-03-10', 'A+', 'Married', 3, 'Potatoes', 61, '2020-08-02 01:38:11', '2020-08-02 01:38:11'),
(9, '1995-02-01', 'A+', 'Married', 4, 'Chicken', 62, '2020-08-02 01:44:31', '2020-08-02 01:44:31'),
(10, '1996-12-03', 'B-', 'Married', 1, 'fish', 63, '2020-08-02 01:50:06', '2020-08-02 01:50:06'),
(11, '1998-12-03', 'B-', 'Married', 2, 'cho', 64, '2020-08-02 01:53:56', '2020-08-02 01:53:56'),
(12, '1998-12-03', 'A-', 'Unm', 1, 'dog', 65, '2020-08-02 01:58:59', '2020-08-02 01:58:59'),
(13, '1995-12-03', 'A-', 'Married', 2, 'cat', 66, '2020-08-02 02:00:53', '2020-08-02 02:00:53'),
(14, '1993-04-02', 'B-', 'unma', 1, 'car', 67, '2020-08-02 02:06:47', '2020-08-02 02:06:47'),
(15, '1995-04-02', 'A', 'mar', 1, 'jkj', 69, '2020-08-02 02:09:17', '2020-08-02 02:09:17'),
(16, '1988-03-02', 'AB+', 'Married', 5, 'children', 70, '2020-08-02 02:11:25', '2020-08-02 02:11:25'),
(17, '1999-05-21', 'O-', 'Unmarried', 0, 'Chicken', 71, '2020-08-02 02:14:33', '2020-08-02 02:14:33'),
(18, '1999-05-21', 'O-', 'Unmarried', 1, 'Chicken', 72, '2020-08-02 02:15:48', '2020-08-02 02:15:48'),
(19, '1978-12-08', 'A+', 'married', 5, 'Cat', 73, '2020-08-02 02:22:06', '2020-08-02 02:22:06'),
(20, '1995-02-15', 'A-', 'unmarried', 3, 'Pine Apple', 75, '2020-08-02 02:38:50', '2020-08-03 02:59:50'),
(21, '1995-12-25', 'AB', 'Married', 2, 'Potatoes', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preasures`
--

CREATE TABLE `preasures` (
  `id` int(20) NOT NULL,
  `pr_id` bigint(20) UNSIGNED DEFAULT NULL,
  `upper_rate` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lower_rate` int(11) NOT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preasures`
--

INSERT INTO `preasures` (`id`, `pr_id`, `upper_rate`, `lower_rate`, `comment`, `created_at`, `updated_at`) VALUES
(8, NULL, '140', 80, NULL, '2020-08-02 10:36:27', NULL),
(9, 73, '140', 80, NULL, '2020-08-02 10:38:18', NULL),
(10, 73, '170', 100, NULL, '2020-08-02 10:40:41', NULL),
(11, 75, '25', 18, NULL, '2020-08-03 06:38:22', NULL),
(12, 75, '28', 24, NULL, '2020-08-03 06:39:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-04-02 04:49:57', '2020-04-02 04:49:57'),
(2, 'registrar', '2020-04-02 04:49:58', '2020-04-02 04:49:58'),
(3, 'doctor', '2020-04-02 04:49:58', '2020-04-02 04:49:58'),
(4, 'patient', '2020-04-02 04:49:58', '2020-04-02 04:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 3, 8, NULL, NULL),
(9, 3, 9, NULL, NULL),
(10, 3, 10, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 3, 12, NULL, NULL),
(13, 3, 13, NULL, NULL),
(14, 3, 14, NULL, NULL),
(15, 3, 15, NULL, NULL),
(16, 3, 16, NULL, NULL),
(17, 3, 17, NULL, NULL),
(18, 3, 18, NULL, NULL),
(19, 3, 19, NULL, NULL),
(20, 3, 20, NULL, NULL),
(21, 3, 21, NULL, NULL),
(22, 3, 22, NULL, NULL),
(23, 3, 23, NULL, NULL),
(24, 3, 24, NULL, NULL),
(25, 3, 25, NULL, NULL),
(26, 3, 26, NULL, NULL),
(27, 2, 27, NULL, NULL),
(28, 2, 28, NULL, NULL),
(29, 2, 29, NULL, NULL),
(30, 2, 30, NULL, NULL),
(31, 2, 31, NULL, NULL),
(32, 3, 32, NULL, NULL),
(33, 2, 33, NULL, NULL),
(34, 3, 34, NULL, NULL),
(35, 4, 35, NULL, NULL),
(36, 4, 36, NULL, NULL),
(37, 4, 37, NULL, NULL),
(38, 4, 38, NULL, NULL),
(39, 4, 39, NULL, NULL),
(40, 4, 40, NULL, NULL),
(41, 4, 41, NULL, NULL),
(42, 4, 42, NULL, NULL),
(43, 4, 43, NULL, NULL),
(44, 3, 44, NULL, NULL),
(45, 2, 45, NULL, NULL),
(46, 3, 46, NULL, NULL),
(47, 4, 47, NULL, NULL),
(48, 4, 48, NULL, NULL),
(49, 3, 49, NULL, NULL),
(50, 4, 50, NULL, NULL),
(51, 3, 51, NULL, NULL),
(52, 3, 52, NULL, NULL),
(53, 3, 53, NULL, NULL),
(54, 3, 54, NULL, NULL),
(55, 2, 55, NULL, NULL),
(56, 3, 56, NULL, NULL),
(57, 2, 57, NULL, NULL),
(58, 4, 58, NULL, NULL),
(59, 4, 59, NULL, NULL),
(60, 4, 60, NULL, NULL),
(61, 4, 61, NULL, NULL),
(62, 4, 62, NULL, NULL),
(63, 4, 63, NULL, NULL),
(64, 4, 64, NULL, NULL),
(65, 4, 65, NULL, NULL),
(66, 4, 66, NULL, NULL),
(67, 4, 67, NULL, NULL),
(68, 4, 68, NULL, NULL),
(69, 4, 69, NULL, NULL),
(70, 4, 70, NULL, NULL),
(71, 4, 71, NULL, NULL),
(72, 4, 72, NULL, NULL),
(73, 4, 73, NULL, NULL),
(74, 4, 74, NULL, NULL),
(75, 4, 75, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(11) NOT NULL,
  `P_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `rate` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `P_Id`, `rate`, `comment`, `created_at`, `updated_at`) VALUES
(22, 75, '100', NULL, '2020-08-02 10:07:40', NULL),
(23, 75, '100', NULL, '2020-08-02 10:08:32', NULL),
(24, 73, '454', NULL, '2020-08-02 10:20:20', NULL),
(25, 75, '50', NULL, '2020-08-03 05:12:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploadimage`
--

CREATE TABLE `uploadimage` (
  `id` int(11) NOT NULL,
  `Img_Id` int(11) NOT NULL,
  `prescription` binary(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$gTCNF.79c3Uk6acVkBNKHOiLZlp7Cj2a2R6e4S4aFDgv.z4XbayGi', NULL, '2020-04-02 04:49:57', '2020-04-02 04:49:57', 1),
(2, 'Registrar', 'registrar@registrar.com', NULL, '$2y$10$GYgrfyO8dbEkHeEQGJvKTOIMOie/G0uH1fonX2dZekFmRoMoie3lS', NULL, '2020-04-02 04:49:57', '2020-04-25 01:27:25', 0),
(3, 'Doctor', 'doctor@doctor.com', NULL, '$2y$10$rvCwxDalMEX.7h52l2P5lOXKGZSLpG5D0uWLBSrHaKpJH5GY5Sc2S', NULL, '2020-04-02 04:49:57', '2020-04-02 04:49:57', 1),
(4, 'Patient', 'patient@patient.com', NULL, '$2y$10$erHbXYfqJKV2DGzJqDIQHe0y9/2Q/cJE8Ov/55Z5RPDY8XgFMVdoG', NULL, '2020-04-02 04:49:57', '2020-04-02 04:49:57', 1),
(51, 'Sahan', 'sahan@gmail.com', NULL, '$2y$10$tDe7mP.iA4fMbWvUH4sRQ.V6NQhyHpJDjON.Rr0BjnTlOoRLiGzZO', NULL, '2020-08-02 00:05:53', '2020-08-02 00:05:53', 1),
(52, 'udesh', 'udesh@gmail.com', NULL, '$2y$10$MEjRtb1XbOjd0rKmsGvyT.DkslrI1IBZzc1Y/uUgxfQcVS3xQqrcC', NULL, '2020-08-02 00:21:39', '2020-08-02 00:21:39', 1),
(53, 'Shali', 'Shalia@gmail.com', NULL, '$2y$10$yCiQOo.oPRnwFKnCUld3be/Fi2S7.zKuZB8M4Ra8ilnC54htkto/e', NULL, '2020-08-02 00:44:26', '2020-08-02 00:50:50', 1),
(54, 'sadunif', 'sadun@gmail.com', NULL, '$2y$10$WLaSCMxLeRe3i3vyBEUemuzi.v43TsdplHB57VoPglNCJnnpd/cL.', NULL, '2020-08-02 00:58:32', '2020-08-02 01:14:23', 1),
(55, 'Supun', 'supun@gmail.com', NULL, '$2y$10$c/KqBQAC28zpTiOTaQFZpOlSP8v5uvHAL9ucJaskl1q.MX2QOD6gK', NULL, '2020-08-02 01:11:05', '2020-08-02 01:11:05', 1),
(56, 'gayana', 'gayana@gmail.com', NULL, '$2y$10$tW.DoYWLAdJepRSBRS6MT.KQcJhin/HTd.yZ.rbtMjGw2eEmAzXXm', NULL, '2020-08-02 01:17:23', '2020-08-02 01:17:23', 1),
(57, 'disal', 'disal@gmail.com', NULL, '$2y$10$rvCwxDalMEX.7h52l2P5lOXKGZSLpG5D0uWLBSrHaKpJH5GY5Sc2S', NULL, '2020-08-02 01:18:52', '2020-08-02 01:18:52', 1),
(58, 'Kisal', 'kisal@gmail.com', NULL, '$2y$10$/gZlVkIdNk86uY6mw4/Yu.DqpqvigIN/55n77ifuz1DPf5gcRk20S', NULL, '2020-08-02 01:23:02', '2020-08-02 01:23:02', 1),
(59, 'udesh', 'udeshika@gmail.com', NULL, '$2y$10$zaM3rpd4sD7zxW/CP2Wr8.5/uKuyAqrMnMnQyd.9HJxz24ItM0GQ2', NULL, '2020-08-02 01:31:33', '2020-08-02 01:31:33', 1),
(60, 'kusum', 'kusum@gmail.com', NULL, '$2y$10$AlSny4eFaiy9.mtD0.p49.7tl6k1me1gPYFbA94l0t9uUnYYmDrUK', NULL, '2020-08-02 01:34:06', '2020-08-02 01:34:06', 1),
(61, 'sunil', 'sunil@gmail.com', NULL, '$2y$10$/A8GGMzOpKYfkg5RHg.Voes90ZC4236gnXIvXvMYbZs.1D86frnPm', NULL, '2020-08-02 01:38:11', '2020-08-02 01:38:11', 1),
(62, 'himal', 'himal@gmail.com', NULL, '$2y$10$JTdYRnJY5BVDsc1P9FWNEeXOLc2G23XSHH/u1TjL3/iPc3kMA8iK2', NULL, '2020-08-02 01:44:31', '2020-08-02 01:44:31', 1),
(63, 'ruwan', 'ruwan@gmail.com', NULL, '$2y$10$SUoRYVqLYTq29/cfNXHWtO6N4pP7tE3lrgt2jK1X4sikEpUdbFV2a', NULL, '2020-08-02 01:50:06', '2020-08-02 01:50:06', 1),
(64, 'ruwan', 'ruwani@gmail.com', NULL, '$2y$10$dt29iKC/DUEpVPkzki78LOGQ.A1TxPWJr9Ghy3ZwCeMkrmJFlbjde', NULL, '2020-08-02 01:53:55', '2020-08-02 01:53:55', 1),
(65, 'prasad', 'prasad@gmail.com', NULL, '$2y$10$foeR4ffiS4VcUgmKask7P.jYntwgalVow5B/4Q38lCyEuEAnep7f2', NULL, '2020-08-02 01:58:59', '2020-08-02 01:58:59', 1),
(66, 'huththa', 'huththa@gmail.com', NULL, '$2y$10$tFBXMde.oyA9XG49rsA/recQrn4VFZe9ayCDhsMNDjxUPAMxNWWKG', NULL, '2020-08-02 02:00:52', '2020-08-02 02:00:52', 1),
(67, 'jasa', 'jasa@gmail.com', NULL, '$2y$10$A4WnEe285ZvXOGioSSkJiepmcivZj9P/mwRpDL6VIhIhSryucqA6K', NULL, '2020-08-02 02:06:47', '2020-08-02 02:06:47', 1),
(68, 'humara', 'humara@gmail.com', NULL, '$2y$10$Q2HM4IRnb2nVy2q/lyMi8uwfpGBQ07TD8Vj2PhBB1WLCbDub6SAri', NULL, '2020-08-02 02:08:26', '2020-08-02 02:08:26', 1),
(69, 'humara', 'humara7@gmail.com', NULL, '$2y$10$Z/X0JXEeFvgL5Yiycmp5xeP/rAgUAyPL8iU44GnXEcCZhB4OSBPKq', NULL, '2020-08-02 02:09:17', '2020-08-02 02:09:17', 1),
(70, 'saman', 'saman@gmail.com', NULL, '$2y$10$6Y2yJk9v6tM7yMIca10nj.N5D9yiX4SgJX1Hf/otmJgEdW8D86xr2', NULL, '2020-08-02 02:11:25', '2020-08-02 02:11:25', 1),
(71, 'Kusal', 'kusal@gmail.com', NULL, '$2y$10$IXy9/OLf6OvxP7RvZOv7n.VQWKrPH20BOHkcBR1dzSxFM./KQo8ka', NULL, '2020-08-02 02:14:32', '2020-08-02 02:14:32', 1),
(72, 'Kausal', 'kausal@gmail.com', NULL, '$2y$10$pMe7E5Btoa/wKHYZzfqYY.ViMdBN5h.nL7uIKz2Z82ohQ/4TLV3Qi', NULL, '2020-08-02 02:15:48', '2020-08-02 02:15:48', 1),
(73, 'sudesh', 'sudesh@gmail.com', NULL, '$2y$10$vGP/vNWthGQCNOP.UsZkmOfemppgpCYyBycgH1W5jrx4L2tBX5z1S', NULL, '2020-08-02 02:22:05', '2020-08-02 02:22:05', 1),
(74, 'do', 'sjk@h.com', NULL, '$2y$10$VBJPcvwvyg1CjrN4FivSCesLyJAIMT7mHzy0mA0yN8vxR2Xji0FMG', NULL, '2020-08-02 02:37:53', '2020-08-02 02:37:53', 1),
(75, 'Sudarshana', 'sudarshana@ramesh.com', NULL, '$2y$10$erHbXYfqJKV2DGzJqDIQHe0y9/2Q/cJE8Ov/55Z5RPDY8XgFMVdoG', NULL, '2020-08-02 02:38:49', '2020-08-03 02:59:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialized_field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `first_name`, `last_name`, `nic`, `contact`, `gender`, `specialized_field`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(34, 'Saduniff', 'pathirana', '996532145V', '0789654123', 'female', 'required', 'Galle', 54, '2020-08-02 00:58:32', '2020-08-02 01:16:28'),
(35, 'Supunog', 'supun@gmail.com', '945678320V', '0726283256', NULL, NULL, 'Matara', 55, '2020-08-02 01:11:05', '2020-08-02 01:16:35'),
(36, 'gayana', 'perera', '956478120V', '0714567891', 'female', NULL, 'jaela', 56, '2020-08-02 01:17:23', '2020-08-02 01:17:23'),
(37, 'disal', 'disal@gmail.com', '784545645V', '0745684521', 'male', NULL, 'kolaba', 57, '2020-08-02 01:18:53', '2020-08-02 01:18:53'),
(38, 'Kisal', 'kisal@gmail.com', '956432056V', '0723204805', 'male', NULL, 'horana', 58, '2020-08-02 01:23:02', '2020-08-02 01:23:02'),
(39, 'udesh', 'udeshika@gmail.com', '456787978V', '0784584564', 'male', NULL, 'Halawatha', 59, '2020-08-02 01:31:33', '2020-08-02 01:31:33'),
(40, 'kusum', 'kusum@gmail.com', '895645123V', '0714567891', 'male', NULL, 'Halawatha', 60, '2020-08-02 01:34:06', '2020-08-02 01:34:06'),
(41, 'sunil', 'sunil@gmail.com', '896532145V', '0778965412', 'male', NULL, 'Moratuwa', 61, '2020-08-02 01:38:11', '2020-08-02 01:38:11'),
(42, 'himal', 'himal@gmail.com', '953564123V', '0784512123', 'male', NULL, 'biyagam', 62, '2020-08-02 01:44:31', '2020-08-02 01:44:31'),
(43, 'ruwan', 'ruwan@gmail.com', '784578456V', '0714578456', 'male', NULL, 'ranna', 63, '2020-08-02 01:50:06', '2020-08-02 01:50:06'),
(44, 'ruwan', 'ruwani@gmail.com', '567845452V', '0714567894', 'male', NULL, 'jaela', 64, '2020-08-02 01:53:56', '2020-08-02 01:53:56'),
(45, 'prasad', 'prasad@gmail.com', '45612378V', '0714561234', 'male', NULL, 'homagama', 65, '2020-08-02 01:58:59', '2020-08-02 01:58:59'),
(46, 'huththa', 'huththa@gmail.com', '953565123V', '0714567845', 'male', NULL, 'kolaba', 66, '2020-08-02 02:00:53', '2020-08-02 02:00:53'),
(47, 'jasa', 'jasa@gmail.com', '956586561V', '0714567891', 'male', NULL, 'horana', 67, '2020-08-02 02:06:47', '2020-08-02 02:06:47'),
(48, 'humara', 'humara@gmail.com', '45678912V', '4578457812', 'male', NULL, 'hoy', 68, '2020-08-02 02:08:26', '2020-08-02 02:08:26'),
(49, 'humara', 'humara7@gmail.com', '45678912V', '4578457812', 'male', NULL, 'hoy', 69, '2020-08-02 02:09:17', '2020-08-02 02:09:17'),
(50, 'saman', 'saman@gmail.com', '889654121V', '0778965412', 'male', NULL, 'Matara', 70, '2020-08-02 02:11:25', '2020-08-02 02:11:25'),
(51, 'Kusal', 'kusal@gmail.com', '996532145V', '0714563214', 'male', NULL, 'Kadawatha', 71, '2020-08-02 02:14:33', '2020-08-02 02:14:33'),
(52, 'Kausal', 'kausal@gmail.com', '996532145V', '0714563214', 'male', NULL, 'Kadawatha', 72, '2020-08-02 02:15:48', '2020-08-02 02:15:48'),
(53, 'sudesh', 'sudesh@gmail.com', '756984545V', '0778965412', 'male', NULL, 'Kanthale', 73, '2020-08-02 02:22:06', '2020-08-02 02:22:06'),
(54, 'do', 'sjk@h.com', '456665454V', '0112365477', 'male', NULL, 'dkp', 74, '2020-08-02 02:37:53', '2020-08-02 02:37:53'),
(55, 'Sudarshana', 'Ramesh', '456665454V', '0112365477', 'male', NULL, 'Matara,', 75, '2020-08-02 02:38:50', '2020-08-03 02:59:50'),
(56, 'Patient', 'Test', '9500100110v', '0712457810', 'male', 'acvds', 'asdfc', 4, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `collestrols`
--
ALTER TABLE `collestrols`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `dispensaries`
--
ALTER TABLE `dispensaries`
  ADD PRIMARY KEY (`App_ID`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
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
-- Indexes for table `patient_infos`
--
ALTER TABLE `patient_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `preasures`
--
ALTER TABLE `preasures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pr_id` (`pr_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `P_Id` (`P_Id`);

--
-- Indexes for table `uploadimage`
--
ALTER TABLE `uploadimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_infos_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collestrols`
--
ALTER TABLE `collestrols`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dispensaries`
--
ALTER TABLE `dispensaries`
  MODIFY `App_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient_infos`
--
ALTER TABLE `patient_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `preasures`
--
ALTER TABLE `preasures`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `uploadimage`
--
ALTER TABLE `uploadimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patient_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `collestrols`
--
ALTER TABLE `collestrols`
  ADD CONSTRAINT `collestrols_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `patient_infos` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_infos`
--
ALTER TABLE `patient_infos`
  ADD CONSTRAINT `patient_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `preasures`
--
ALTER TABLE `preasures`
  ADD CONSTRAINT `preasures_ibfk_1` FOREIGN KEY (`pr_id`) REFERENCES `patient_infos` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`P_Id`) REFERENCES `patient_infos` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD CONSTRAINT `user_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
