-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 08:50 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmbdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Panitia PSB'),
(2, 'superadmin', 'Pimpinan Yayasan'),
(3, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 2),
(2, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 11),
(2, 10),
(3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin', NULL, '2021-07-26 03:02:15', 0),
(2, '::1', 'admin', NULL, '2021-07-26 03:02:30', 0),
(3, '::1', 'admin@tpqalfatih.id', NULL, '2021-07-26 03:03:04', 0),
(4, '::1', 'admin@tpqalfatih.id', NULL, '2021-07-26 03:27:39', 0),
(5, '::1', 'pimpinan', 9, '2021-07-26 03:55:57', 0),
(6, '::1', 'admin', NULL, '2021-07-26 03:56:38', 0),
(7, '::1', 'admin@tpqalfatih.id', 8, '2021-07-26 03:56:56', 0),
(8, '::1', 'admin@tpqalfatih.id', 11, '2021-07-26 04:02:44', 1),
(9, '::1', 'pendaftar@gmail.com', 12, '2021-07-26 04:32:31', 1),
(10, '::1', 'pimpinanyayasan@tpqalfatih.id', 10, '2021-07-26 04:42:55', 1),
(11, '::1', 'admin@tpqalfatih.id', 11, '2021-07-26 04:47:18', 1),
(12, '::1', 'pendaftar@gmail.com', 12, '2021-07-26 04:55:43', 1),
(13, '::1', 'pimpinanyayasan@tpqalfatih.id', 10, '2021-07-26 04:56:19', 1),
(14, '::1', 'admin@tpqalfatih.id', 11, '2021-07-26 04:57:40', 1),
(15, '::1', 'pim', NULL, '2021-07-26 05:41:20', 0),
(16, '::1', 'pimpinanyayasan@tpqalfatih.id', 10, '2021-07-26 05:41:32', 1),
(17, '::1', 'pendaftar@gmail.com', 12, '2021-07-26 11:14:23', 1),
(18, '::1', 'admin@tpqalfatih.id', 11, '2021-07-28 04:45:40', 1),
(19, '::1', 'pendaftar@gmail.com', 12, '2021-07-28 04:46:02', 1),
(20, '::1', 'pimpinanyayasan@tpqalfatih.id', 10, '2021-07-28 04:50:22', 1),
(21, '::1', 'pendaftar@gmail.com', 12, '2021-07-28 04:51:37', 1),
(22, '::1', 'admin@tpqalfatih.id', 11, '2021-07-28 04:52:24', 1),
(23, '::1', 'pendaftar@gmail.com', 12, '2021-07-28 04:52:41', 1),
(24, '::1', 'pendaftar@gmail.com', 12, '2021-07-28 21:56:09', 1),
(25, '::1', 'pimpinanyayasan@tpqalfatih.id', 10, '2021-07-29 04:28:38', 1),
(26, '::1', 'pendaftar@gmail.com', 12, '2021-07-30 04:14:20', 1),
(27, '::1', 'pendaftar@gmail.com', 12, '2021-07-30 09:06:28', 1),
(28, '::1', 'pendaftar@gmail.com', 12, '2021-07-31 09:10:23', 1),
(29, '::1', 'pendaftar@gmail.com', 12, '2021-08-03 09:25:51', 1),
(30, '::1', 'pendaftar@gmail.com', 12, '2021-08-06 20:37:16', 1),
(31, '::1', 'admin@tpqalfatih.id', 11, '2021-08-06 20:55:50', 1),
(32, '::1', 'pendaftar', NULL, '2021-08-06 20:57:43', 0),
(33, '::1', 'pendaftar@gmail.com', 12, '2021-08-06 20:57:53', 1),
(34, '::1', 'admin@tpqalfatih.id', NULL, '2021-08-06 20:58:10', 0),
(35, '::1', 'admin@tpqalfatih.id', 11, '2021-08-06 20:58:18', 1),
(36, '::1', 'admin@tpqalfatih.id', 11, '2021-08-07 02:32:00', 1),
(37, '::1', 'pimpinanyayasan@tpqalfatih.id', 10, '2021-08-07 04:11:10', 1),
(38, '::1', 'admin@tpqalfatih.id', 11, '2021-08-08 23:16:51', 1),
(39, '::1', 'admin@tpqalfatih.id', 11, '2021-08-09 03:17:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'manage all users'),
(2, 'manage-profile', 'manage users profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1627278794, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `namaPanggilan` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `kotaKelahiran` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `anakKe` int(15) NOT NULL,
  `jmlSaudara` int(15) NOT NULL,
  `statusKeluarga` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `namaAyah` varchar(255) NOT NULL,
  `kotaKelahiranAyah` varchar(50) NOT NULL,
  `tanggalLahirAyah` date NOT NULL,
  `agamaAyah` varchar(50) NOT NULL,
  `wnAyah` varchar(50) NOT NULL,
  `pekerjaanAyah` varchar(50) NOT NULL,
  `pendidikanAyah` varchar(50) NOT NULL,
  `namaIbu` varchar(255) NOT NULL,
  `kotaKelahiranIbu` varchar(50) NOT NULL,
  `tanggalLahirIbu` date NOT NULL,
  `agamaIbu` varchar(50) NOT NULL,
  `wnIbu` varchar(50) NOT NULL,
  `pekerjaanIbu` varchar(50) NOT NULL,
  `pendidikanIbu` varchar(50) NOT NULL,
  `nohp` int(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_approve` int(2) NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `namaLengkap`, `namaPanggilan`, `tanggalLahir`, `kotaKelahiran`, `jk`, `anakKe`, `jmlSaudara`, `statusKeluarga`, `kewarganegaraan`, `namaAyah`, `kotaKelahiranAyah`, `tanggalLahirAyah`, `agamaAyah`, `wnAyah`, `pekerjaanAyah`, `pendidikanAyah`, `namaIbu`, `kotaKelahiranIbu`, `tanggalLahirIbu`, `agamaIbu`, `wnIbu`, `pekerjaanIbu`, `pendidikanIbu`, `nohp`, `alamat`, `status_approve`, `oleh`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '2021-07-08', 'Tangerang', 'Laki-laki', 1, 1, 'Anak Kandung', 'Indonesia', 'test', 'Tangerang', '2021-07-09', 'Islam', 'Indonesia', 'Karyawan Swasta', 'Sarjana 1 (S1)', 'test', 'Mojokerto', '2021-07-02', 'Islam', 'Indonesia', 'Ibu Rumah Tangga', 'Sarjana 1 (S1)', 2147483647, 'Jl. Syech Nawawi  no. 74, Tangerang, Banten', 1, 'pendaftar', '2021-07-31 09:49:32', '2021-08-07 03:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbguru`
--

CREATE TABLE `tbguru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbguru`
--

INSERT INTO `tbguru` (`id`, `nama`, `jabatan`) VALUES
(3, 'Suci Arum', 'Guru Tahsin');

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE `tbkelas` (
  `id` int(11) NOT NULL,
  `namaSantri` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`id`, `namaSantri`, `kelas`) VALUES
(2, 'Suci Arum', 'Abbas');

-- --------------------------------------------------------

--
-- Table structure for table `tbpersyaratan`
--

CREATE TABLE `tbpersyaratan` (
  `id` int(11) NOT NULL,
  `namaPersyaratan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpersyaratan`
--

INSERT INTO `tbpersyaratan` (`id`, `namaPersyaratan`) VALUES
(2, 'Fotocopy Kartu Keluarga (KK)'),
(3, 'Fotocopy Akta Kelahiran'),
(4, 'Pas photo calon santri  ukuran 3x4 sebanyak 2 lembar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT '3.jpg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'pimpinanyayasan@tpqalfatih.id', 'pimpinan', NULL, '3.jpg', '$2y$10$0B6doi.ES.I8hb1aSAQjnOLWjo3uUjxCqg0jHPx.NdgtPkg9t6Rem', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-26 04:00:09', '2021-07-26 04:00:09', NULL),
(11, 'admin@tpqalfatih.id', 'admin', NULL, '3.jpg', '$2y$10$iwLHHmJKpr57MmNu7C/Fd.9T7CKiV.EWyT7wFN9b7FNR2yu6fGq3q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-26 04:01:49', '2021-08-09 05:15:28', NULL),
(12, 'pendaftar@gmail.com', 'pendaftar', NULL, '3.jpg', '$2y$10$M3bGTUJjNqt.1e8wF30aBuQ7viuoLsJOx2aj2BlLl1yCLFjMUSYpO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-26 04:29:56', '2021-07-26 04:29:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbpersyaratan`
--
ALTER TABLE `tbpersyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbguru`
--
ALTER TABLE `tbguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbpersyaratan`
--
ALTER TABLE `tbpersyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
