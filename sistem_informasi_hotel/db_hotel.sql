-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 01:58 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kamar` int(10) UNSIGNED NOT NULL,
  `kode_booking` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_in` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_out` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enable','disabled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_kamar`, `kode_booking`, `nama`, `no_hp`, `alamat`, `check_in`, `check_out`, `status`, `deleted`, `created_at`, `updated_at`) VALUES
(20, 3, 'a201907140643571', 'Siti Komariyah', '085212222324', 'brekat', '07/15/2019', '07/20/2019', 'enable', '1', '2019-07-13 23:44:41', '2019-07-14 12:04:23'),
(21, 2, 'a201907141309011', 'Siti Nuraini', '08188339394', 'Ds.Setu Tarub Tegal', '07/15/2019', '07/16/2019', 'enable', '0', '2019-07-14 06:09:56', '2019-07-14 12:10:20'),
(22, 4, 'a201907150338101', 'Anisa Kumalasari', '08188997742', 'jl.anggrek no.10 desa gembongdadi suradadi tegal', '07/16/2019', '07/27/2019', 'disabled', '1', '2019-07-14 20:40:21', '2019-07-15 00:03:54'),
(23, 1, 'a201907150642521', 'Siti Nuraini Alfiah', '08177556622', 'desa karangsari suradadi tegal', '07/16/2019', '07/27/2019', 'disabled', '1', '2019-07-14 23:44:21', '2019-07-15 00:12:03'),
(24, 1, 'a201907150747251', 'Siti Nuryani', '08521667443', 'mangunsaren', '07/16/2019', '07/20/2019', 'enable', '1', '2019-07-15 00:48:57', '2019-07-15 00:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_fasilitas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_fasilitas`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Wi FI', 'Vestibulum ante ipsum primis in faucibus orci luctus et\r\n ultrices posuere cubilia Curae; Suspendisse nec faucibus \r\nvelit. Quisque eleifend orci ipsum, a bibendum..', 'fotoupload/20190710044632.png', '2019-07-09 21:46:32', '2019-07-13 12:30:41'),
(2, 'AC', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum.', 'fotoupload/20190710044653.png', '2019-07-09 21:46:53', '2019-07-13 08:15:10'),
(3, 'Swimming Pool', 'Vestibulum ante ipsum primis in faucibus orci luctus et\r\n ultrices posuere cubilia Curae; Suspendisse nec faucibus \r\nvelit. Quisque eleifend orci ipsum, a bibendum.', 'fotoupload/20190713151322.png', '2019-07-13 08:13:22', '2019-07-13 08:13:22'),
(4, 'LCD', 'Vestibulum ante ipsum primis in faucibus orci luctus et\r\n ultrices posuere cubilia Curae; Suspendisse nec faucibus \r\nvelit. Quisque eleifend orci ipsum, a bibendum..', 'fotoupload/20190715075613.png', '2019-07-15 00:56:13', '2019-07-15 00:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id_kamar` int(10) UNSIGNED NOT NULL,
  `id_fasilitas` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id_kamar`, `id_fasilitas`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-07-09 21:53:26', '2019-07-09 21:53:26'),
(1, 2, '2019-07-09 21:53:26', '2019-07-09 21:53:26'),
(2, 1, '2019-07-13 07:25:17', '2019-07-13 07:25:17'),
(3, 1, '2019-07-13 08:54:18', '2019-07-13 08:54:18'),
(3, 3, '2019-07-13 08:54:18', '2019-07-13 08:54:18'),
(4, 1, '2019-07-14 20:35:53', '2019-07-14 20:35:53'),
(4, 2, '2019-07-14 20:35:53', '2019-07-14 20:35:53'),
(6, 1, '2019-07-15 00:36:08', '2019-07-15 00:36:08'),
(6, 2, '2019-07-15 00:36:08', '2019-07-15 00:36:08'),
(6, 3, '2019-07-15 00:36:08', '2019-07-15 00:36:08'),
(7, 1, '2019-07-15 00:59:00', '2019-07-15 00:59:00'),
(7, 2, '2019-07-15 00:59:00', '2019-07-15 00:59:00'),
(7, 3, '2019-07-15 00:59:00', '2019-07-15 00:59:00'),
(7, 4, '2019-07-15 00:59:00', '2019-07-15 00:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_kamar` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kamar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipekamar` int(10) UNSIGNED NOT NULL,
  `harga` double NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `no_kamar`, `nama_kamar`, `id_tipekamar`, `harga`, `keterangan`, `foto`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Lavender', 2, 2000000, '-', 'fotoupload/20190710045326.jpg', '1', '2019-07-09 21:53:26', '2019-07-15 00:48:57'),
(2, 'A03', 'Couplea', 1, 700000, '-', 'fotoupload/20190713142517.jpg', '1', '2019-07-13 07:25:17', '2019-07-14 06:09:56'),
(3, 'A04', 'Couple', 3, 2000000, '-', 'fotoupload/20190713155418.jpg', '0', '2019-07-13 08:54:18', '2019-07-14 20:33:50'),
(4, 'A05', 'Single Room', 2, 1000000, '-', 'fotoupload/20190715033617.jpg', '0', '2019-07-14 20:35:53', '2019-07-14 20:40:21'),
(6, 'A05', 'Familiy Room', 3, 3000000, 'Bagus nih buat keluarga yang sedang berlibur', 'fotoupload/20190715073608.jpg', '1', '2019-07-15 00:36:08', '2019-07-15 00:36:08'),
(7, 'A07', 'Familiy Room', 1, 3000000, '-', 'fotoupload/20190715075900.jpg', '1', '2019-07-15 00:59:00', '2019-07-15 01:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `id_user`, `act`, `created_at`, `updated_at`) VALUES
(1, '1', 'on dashboard', '2019-07-09 21:24:43', '2019-07-09 21:24:43'),
(2, '1', 'create fasilitas', '2019-07-09 21:46:32', '2019-07-09 21:46:32'),
(3, '1', 'create fasilitas', '2019-07-09 21:46:53', '2019-07-09 21:46:53'),
(4, '1', 'create kamar', '2019-07-09 21:53:26', '2019-07-09 21:53:26'),
(5, '1', 'on dashboard', '2019-07-10 01:19:54', '2019-07-10 01:19:54'),
(6, '1', 'on dashboard', '2019-07-10 02:39:32', '2019-07-10 02:39:32'),
(7, '1', 'on dashboard', '2019-07-10 03:30:50', '2019-07-10 03:30:50'),
(8, '1', 'on dashboard', '2019-07-10 12:03:31', '2019-07-10 12:03:31'),
(9, '1', 'on dashboard', '2019-07-13 00:08:40', '2019-07-13 00:08:40'),
(10, '1', 'on dashboard', '2019-07-13 00:15:25', '2019-07-13 00:15:25'),
(11, '1', 'on dashboard', '2019-07-13 05:44:27', '2019-07-13 05:44:27'),
(12, '1', 'update kamar', '2019-07-13 06:50:00', '2019-07-13 06:50:00'),
(13, '1', 'update kamar', '2019-07-13 07:01:42', '2019-07-13 07:01:42'),
(14, '1', 'update kamar', '2019-07-13 07:03:05', '2019-07-13 07:03:05'),
(15, '1', 'update kamar', '2019-07-13 07:04:48', '2019-07-13 07:04:48'),
(16, '1', 'update kamar', '2019-07-13 07:05:37', '2019-07-13 07:05:37'),
(17, '1', 'update kamar', '2019-07-13 07:07:10', '2019-07-13 07:07:10'),
(18, '1', 'create kamar', '2019-07-13 07:25:17', '2019-07-13 07:25:17'),
(19, '1', 'update fasilitas', '2019-07-13 08:08:46', '2019-07-13 08:08:46'),
(20, '1', 'update fasilitas', '2019-07-13 08:09:07', '2019-07-13 08:09:07'),
(21, '1', 'create fasilitas', '2019-07-13 08:13:22', '2019-07-13 08:13:22'),
(22, '1', 'update fasilitas', '2019-07-13 08:14:15', '2019-07-13 08:14:15'),
(23, '1', 'update fasilitas', '2019-07-13 08:15:10', '2019-07-13 08:15:10'),
(24, '1', 'create kamar', '2019-07-13 08:54:18', '2019-07-13 08:54:18'),
(25, '2', 'on dashboard', '2019-07-13 10:47:27', '2019-07-13 10:47:27'),
(26, '2', 'on dashboard', '2019-07-13 11:01:55', '2019-07-13 11:01:55'),
(27, '2', 'on dashboard', '2019-07-13 11:21:35', '2019-07-13 11:21:35'),
(28, '1', 'on dashboard', '2019-07-13 11:22:11', '2019-07-13 11:22:11'),
(29, '2', 'update fasilitas', '2019-07-13 12:30:41', '2019-07-13 12:30:41'),
(30, '1', 'on dashboard', '2019-07-13 20:33:20', '2019-07-13 20:33:20'),
(31, '1', 'on dashboard', '2019-07-14 05:24:50', '2019-07-14 05:24:50'),
(32, '1', 'on dashboard', '2019-07-14 07:59:38', '2019-07-14 07:59:38'),
(33, '1', 'on dashboard', '2019-07-14 08:00:11', '2019-07-14 08:00:11'),
(34, '1', 'on dashboard', '2019-07-14 08:00:42', '2019-07-14 08:00:42'),
(35, '2', 'on dashboard', '2019-07-14 08:01:42', '2019-07-14 08:01:42'),
(36, '2', 'on dashboard', '2019-07-14 08:06:27', '2019-07-14 08:06:27'),
(37, '2', 'on dashboard', '2019-07-14 08:06:38', '2019-07-14 08:06:38'),
(38, '2', 'on dashboard', '2019-07-14 08:31:05', '2019-07-14 08:31:05'),
(39, '2', 'on dashboard', '2019-07-14 08:31:28', '2019-07-14 08:31:28'),
(40, '2', 'on dashboard', '2019-07-14 08:31:39', '2019-07-14 08:31:39'),
(41, '2', 'on dashboard', '2019-07-14 08:32:07', '2019-07-14 08:32:07'),
(42, '2', 'on dashboard', '2019-07-14 08:32:34', '2019-07-14 08:32:34'),
(43, '1', 'on dashboard', '2019-07-14 08:32:54', '2019-07-14 08:32:54'),
(44, '1', 'on dashboard', '2019-07-14 08:35:09', '2019-07-14 08:35:09'),
(45, '2', 'on dashboard', '2019-07-14 08:38:34', '2019-07-14 08:38:34'),
(46, '2', 'on dashboard', '2019-07-14 08:40:12', '2019-07-14 08:40:12'),
(47, '2', 'on dashboard', '2019-07-14 08:40:29', '2019-07-14 08:40:29'),
(48, '2', 'on dashboard', '2019-07-14 08:47:21', '2019-07-14 08:47:21'),
(49, '2', 'on dashboard', '2019-07-14 08:52:11', '2019-07-14 08:52:11'),
(50, '2', 'on dashboard', '2019-07-14 09:31:53', '2019-07-14 09:31:53'),
(51, '2', 'on dashboard', '2019-07-14 09:32:09', '2019-07-14 09:32:09'),
(52, '2', 'on dashboard', '2019-07-14 09:38:32', '2019-07-14 09:38:32'),
(53, '2', 'on dashboard', '2019-07-14 09:39:27', '2019-07-14 09:39:27'),
(54, '2', 'on dashboard', '2019-07-14 09:39:32', '2019-07-14 09:39:32'),
(55, '2', 'on dashboard', '2019-07-14 09:40:02', '2019-07-14 09:40:02'),
(56, '2', 'on dashboard', '2019-07-14 09:45:01', '2019-07-14 09:45:01'),
(57, '2', 'on dashboard', '2019-07-14 10:28:15', '2019-07-14 10:28:15'),
(58, '1', 'on dashboard', '2019-07-14 10:39:38', '2019-07-14 10:39:38'),
(59, '1', 'hapus booking', '2019-07-14 12:04:23', '2019-07-14 12:04:23'),
(60, '1', 'edit booking', '2019-07-14 12:10:20', '2019-07-14 12:10:20'),
(61, '1', 'on dashboard', '2019-07-14 12:19:44', '2019-07-14 12:19:44'),
(62, '1', 'on dashboard', '2019-07-14 12:26:39', '2019-07-14 12:26:39'),
(63, '1', 'on dashboard', '2019-07-14 12:39:25', '2019-07-14 12:39:25'),
(64, '1', 'on dashboard', '2019-07-14 19:48:51', '2019-07-14 19:48:51'),
(65, '1', 'update kamar', '2019-07-14 20:33:50', '2019-07-14 20:33:50'),
(66, '1', 'create kamar', '2019-07-14 20:35:53', '2019-07-14 20:35:53'),
(67, '1', 'update kamar', '2019-07-14 20:36:17', '2019-07-14 20:36:17'),
(68, '1', 'on dashboard', '2019-07-14 22:23:42', '2019-07-14 22:23:42'),
(69, '1', 'on dashboard', '2019-07-14 23:46:02', '2019-07-14 23:46:02'),
(70, '1', 'on dashboard', '2019-07-14 23:46:52', '2019-07-14 23:46:52'),
(71, '1', 'edit booking', '2019-07-14 23:50:24', '2019-07-14 23:50:24'),
(72, '1', 'edit booking', '2019-07-14 23:51:27', '2019-07-14 23:51:27'),
(73, '1', 'edit booking', '2019-07-15 00:03:54', '2019-07-15 00:03:54'),
(74, '1', 'edit booking', '2019-07-15 00:12:03', '2019-07-15 00:12:03'),
(75, '1', 'create kamar', '2019-07-15 00:35:37', '2019-07-15 00:35:37'),
(76, '1', 'create kamar', '2019-07-15 00:36:08', '2019-07-15 00:36:08'),
(77, '4', 'on dashboard', '2019-07-15 00:50:23', '2019-07-15 00:50:23'),
(78, '1', 'on dashboard', '2019-07-15 00:51:24', '2019-07-15 00:51:24'),
(79, '1', 'create fasilitas', '2019-07-15 00:56:13', '2019-07-15 00:56:13'),
(80, '1', 'create kamar', '2019-07-15 00:58:59', '2019-07-15 00:58:59'),
(81, '1', 'update kamar', '2019-07-15 00:59:48', '2019-07-15 00:59:48'),
(82, '1', 'hapus kamar', '2019-07-15 01:00:06', '2019-07-15 01:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_13_161938_create-table-kamar', 1),
(4, '2019_04_13_163040_create-table-pelanggan', 1),
(5, '2019_05_24_161917_create_booking_table', 1),
(6, '2019_07_03_094126_create_fasilitas_table', 1),
(7, '2019_07_03_094933_create_tentang_table', 1),
(8, '2019_07_06_172616_create_tipe_kamar_table', 1),
(9, '2019_07_06_195314_create_fasilitas_hotel_table', 1),
(10, '2019_07_07_162316_create_table_logs', 1);

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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_pelanggan` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmpt_lahir` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipe_kamar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id`, `tipe_kamar`, `created_at`, `updated_at`) VALUES
(1, 'Moon', '2019-07-09 21:28:36', '2019-07-09 21:28:36'),
(2, 'Start', '2019-07-09 21:28:43', '2019-07-09 21:28:43'),
(3, 'TypeA', '2019-07-09 21:29:15', '2019-07-09 21:29:15');

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
  `level` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'nisa', 'nisa@gmail.com', NULL, '$2y$12$Zz6sRp9HC89i9u/5b.2ExOpxI1LBPvOWfQORLK35uad4oRPNmGLQy', NULL, 'admin', NULL, NULL, 1),
(2, 'Nur Fazriyatunnisa', 'nur123@gmail.com', NULL, '$2y$10$9AwJx9IhTVGvx6lv7UC2ieZ/2E/e4PO./9qKyrgrE5oHHBbI8Wd.K', NULL, 'user', '2019-07-13 10:40:19', '2019-07-13 10:40:19', NULL),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$Bhc5qryod7tusUe72MI.leanvtaej46oYNXeDst.mdI0Pcy/Trggy', NULL, 'admin', '2019-07-14 12:32:44', '2019-07-14 12:33:22', NULL),
(4, 'siti nuryani', 'siti123@gmail.com', NULL, '$2y$10$bw2wI7qKbO0.hTH3eK2JiemUJLsKA9J8by9BmrmqOOp1Q3dViVqtO', NULL, 'admin', '2019-07-15 00:47:07', '2019-07-15 00:47:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id_kamar`,`id_fasilitas`),
  ADD KEY `fasilitas_hotel_id_kamar_index` (`id_kamar`),
  ADD KEY `fasilitas_hotel_id_fasilitas_index` (`id_fasilitas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamar_id_tipekamar_foreign` (`id_tipekamar`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD CONSTRAINT `fasilitas_hotel_id_fasilitas_foreign` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fasilitas_hotel_id_kamar_foreign` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_id_tipekamar_foreign` FOREIGN KEY (`id_tipekamar`) REFERENCES `tipe_kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
