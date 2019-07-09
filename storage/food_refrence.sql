-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 01:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_refrence`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg`
--

CREATE TABLE `bg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bg`
--

INSERT INTO `bg` (`id`, `background`, `title`, `created_at`, `updated_at`) VALUES
(1, 'public/backupload/B6A7qErkqlhm3Qo2Xd1xntyZsIAenRbzfBw3z4ZC.jpeg', 'test', '2019-06-26 03:40:59', '2019-06-26 03:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenismenu` bigint(20) UNSIGNED NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_restoran` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `id_jenismenu`, `harga`, `created_at`, `updated_at`, `id_restoran`) VALUES
(6, 'sdsd', 1, '200', '2019-06-25 02:53:39', '2019-06-25 02:53:39', 1),
(8, 'test', 1, '3000', '2019-06-25 03:29:33', '2019-06-25 03:29:33', 11),
(9, 'Milkshake', 2, '4000', '2019-06-25 03:34:49', '2019-06-25 03:34:49', 1),
(10, 'ayam pedas', 1, '2000', '2019-06-27 09:24:47', '2019-06-27 09:24:47', 13),
(11, 'coca-cola', 2, '1000', '2019-06-27 09:25:01', '2019-06-27 09:25:01', 13);

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
(3, '2019_05_27_070335_create_wilayah_table', 1),
(4, '2019_05_27_080746_create_restoran_table', 2),
(5, '2019_06_19_021221_create_typemenu_table', 3),
(6, '2019_06_19_021442_create_menu_table', 4),
(7, '2019_06_21_030254_update_menu_tables', 5),
(8, '2019_06_25_181531_create_bg_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_wilayah` bigint(20) UNSIGNED NOT NULL,
  `gambar_restoran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_restoran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_restoran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_restoran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `id_wilayah`, `gambar_restoran`, `nama_restoran`, `deskripsi_restoran`, `alamat_restoran`, `created_at`, `updated_at`) VALUES
(1, 2, 'public/utaraupload/dOBbihv4ieLUhNfleNwELeHSxFrxAcZ8ad1HPVVE.jpeg', 'nasgor Maldini', 'Restoran ini adalah resto nasi goreng yang berada di jakarta utara', 'dasdasdaadjfjdjfdf', '2019-06-03 05:21:57', '2019-06-03 05:21:57'),
(7, 4, 'public/utaraupload/p1xdtOXTAlEbiJWf3QGy9T5XITsiRGFbg47HKvjF.jpeg', 'Yamien 88', 'dasdsadasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdsadaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'adasdasdasdasdasdasdasdasdasdasdas', '2019-06-16 23:00:49', '2019-06-16 23:00:49'),
(11, 2, 'public/utaraupload/CcpVZ0XaUIYlQFizrouZRcSNGtmNAVmiUj9dKOdZ.jpeg', 'waroeng steak', 'ddasda', 'dsadadasdas', '2019-06-25 03:26:56', '2019-06-25 03:26:56'),
(13, 2, 'public/utaraupload/qO54CneKjyrLV7b1vFO21Dee5Gg2x7B33TNYH0Jr.jpeg', 'KFC', 'asdsadsadsadas', 'https://www.google.com/maps/place/Taman+Puspa+Security+Check/@-6.3457129,106.8499746,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec4e3e9e16ff:0x5407210cbe5eb815!8m2!3d-6.3457129!4d106.8521633', '2019-06-25 09:12:39', '2019-06-25 09:12:39'),
(14, 2, 'public/utaraupload/fvPFHuvIaKnuevfmSibvHwMqu1wGqLx5QOlCLw6N.jpeg', 'fariz resto', 'dasdasdsadasdasd', 'https://www.google.com/maps/place/Bandung,+Kota+Bandung,+Jawa+Barat/@-6.9034443,107.5731162,12z/data=!3m1!4b1!4m5!3m4!1s0x2e68e6398252477f:0x146a1f93d3e815b2!8m2!3d-6.9174639!4d107.6191228', '2019-06-28 01:05:52', '2019-06-28 01:05:52'),
(15, 3, 'public/timurupload/puv05DSfXKNDN1HBrgpEHHtpCA7xIgzt6GT7iFkJ.jpeg', 'resto timur faris', 'adsdadasdasd', 'https://www.google.com/maps/place/Depok,+Kota+Depok,+Jawa+Barat/@-6.3878438,106.7477561,12z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec0828bcde9f:0x301576d150524f0!8m2!3d-6.4024844!4d106.7942405', '2019-06-28 01:18:32', '2019-06-28 01:18:32'),
(16, 5, 'public/selatanupload/olET2Hu9DIcGRpYflxZt5nqBdV5mKmpoGyT2W8YA.jpeg', 'fariz selatan resto', 'dsadadasdasdasdsadasd', 'https://www.google.com/maps/place/Jl.+Kemang+Raya,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta/@-6.2636432,106.8138529,17z/data=!3m1!4b1!4m8!1m2!2m1!1skemang!3m4!1s0x2e69f186a9954a3f:0x60eeb43b5f490dec!8m2!3d-6.2636432!4d106.8160416', '2019-06-28 01:26:44', '2019-06-28 01:26:44'),
(17, 6, 'public/pusatupload/gAR6eFE1ZXzl9UPdZTwaKTmhm5NB46HLJyrNAaiM.jpeg', 'fariz pusat resto', 'dasdsadsadasd', 'https://www.google.com/maps/place/Monumen+Nasional/@-6.1753924,106.8249641,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f5d2e764b12d:0x3d2ad6e1e0e9bcc8!8m2!3d-6.1753924!4d106.8271528', '2019-06-28 01:27:13', '2019-06-28 01:27:13'),
(18, 5, 'public/selatanupload/ws5f6860uvPRgmT9K0DH2uyQWu9mnPt0a0Vpg5lV.jpeg', 'singgih resto selatan', 'sadasdsadasda', 'https://www.google.com/maps/search/simatupang/@-6.1753923,106.818398,15z/data=!3m1!4b1', '2019-06-28 01:31:45', '2019-06-28 01:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `type_menu`
--

CREATE TABLE `type_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_menu`
--

INSERT INTO `type_menu` (`id`, `jenis_menu`, `created_at`, `updated_at`) VALUES
(1, 'Food', NULL, NULL),
(2, 'Drink', NULL, NULL);

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
(1, 'iqbal', 'iqbal@yahoo.com', NULL, '$2y$10$SdWp2rqwQrvp7m6QZ8OanuhZvVhWnLpd4kDq7DRjNuq0IXTECpsve', 'U2jTobxia82f6GbiJ7fKcO86BoVERCnTUi382ME3VKd8873Mk8YU8q77MUYz', '2019-05-27 00:02:21', '2019-05-27 00:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_wilayah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `nama_wilayah`, `gambar_wilayah`, `deskripsi_wilayah`, `created_at`, `updated_at`) VALUES
(2, 'Jakarta Utaras', 'public/wilayahupload/75jvs6hiMFN2IiDriEdoVMuzEh45Vge774o5Sav8.jpeg', 'Resturan dan Jajanan Di Wilayah Jakarta Utaras', '2019-06-02 02:43:43', '2019-07-07 21:39:14'),
(3, 'Jakarta Timur', 'public/wilayahupload/K2p6bLrzlT39Q0OI6hDv77l9jwDEW2OCYEarzJSF.jpeg', 'Resturan dan Jajanan Di Wilayah Jakarta Timur', '2019-06-02 02:44:31', '2019-07-07 21:39:53'),
(4, 'Jakarta Barat', 'public/wilayahupload/aweY5nN6QHCkBeQunRCTvgAjqL6vxSCPBHsRrCut.jpeg', 'Resturan dan Jajanan Di Wilayah Jakarta Barat', '2019-06-02 02:44:56', '2019-07-07 21:44:18'),
(5, 'Jakarta Selatan', 'public/wilayahupload/qWqMgtKqOfKExsydy04vgUzVZuTh3yV1h4QzrqU0.jpeg', 'Resturan dan Jajanan Di Wilayah Jakarta Selatan', '2019-06-02 02:45:43', '2019-06-02 02:45:43'),
(6, 'Jakarta Pusat', 'public/wilayahupload/T1jNQW6OY4HQo8hP3mWFL2934WRXJgYhxMKpslxx.jpeg', 'Resturan dan Jajanan Di Wilayah Jakarta Pusat', '2019-06-02 02:46:06', '2019-06-02 02:46:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg`
--
ALTER TABLE `bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id_jenismenu_foreign` (`id_jenismenu`),
  ADD KEY `menu_id_restoran_foreign` (`id_restoran`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restoran_id_wilayah_foreign` (`id_wilayah`);

--
-- Indexes for table `type_menu`
--
ALTER TABLE `type_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg`
--
ALTER TABLE `bg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `type_menu`
--
ALTER TABLE `type_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_id_jenismenu_foreign` FOREIGN KEY (`id_jenismenu`) REFERENCES `type_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_id_restoran_foreign` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `restoran_id_wilayah_foreign` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
