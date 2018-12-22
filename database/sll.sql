-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table pangpong.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `body` longtext,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pangpong.berita: ~1 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
REPLACE INTO `berita` (`id`, `judul`, `url`, `body`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, 'Kegiatan KKN Pelatihan Minat dan Bakat SMP di Desa Pangpong', 'storage/cover/cover_1_.jpg', '<p><span style="font-family: &quot;Comic Sans MS&quot;;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodasdasd</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p><p><img src="storage/foto/foto_5_.jpg" style="width: 50%;"><span style="font-family: &quot;Comic Sans MS&quot;;"><br></span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span></p><p><span style="font-family: &quot;Comic Sans MS&quot;;">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p><p><img src="storage/foto/foto_4_.jpg" style="width: 50%;"><span style="font-family: &quot;Comic Sans MS&quot;;"><br></span></p>', 1, '2018-12-21 15:52:00', '2018-12-21 15:52:00');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

-- Dumping structure for table pangpong.carousel
CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pangpong.carousel: ~5 rows (approximately)
/*!40000 ALTER TABLE `carousel` DISABLE KEYS */;
REPLACE INTO `carousel` (`id`, `url`, `created_at`, `updated_at`) VALUES
	(1, 'storage/carousel/carousel_1_.jpg', '2018-12-21 15:21:46', '2018-12-21 15:21:46'),
	(2, 'storage/carousel/carousel_2_.jpg', '2018-12-21 15:21:46', '2018-12-21 15:21:46'),
	(3, 'storage/carousel/carousel_3_.jpg', '2018-12-21 15:21:46', '2018-12-21 15:21:46'),
	(4, 'storage/carousel/carousel_4_.jpg', '2018-12-21 15:21:46', '2018-12-21 15:21:46'),
	(5, 'storage/carousel/carousel_5_.jpg', '2018-12-21 15:21:46', '2018-12-21 15:21:46');
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;

-- Dumping structure for table pangpong.foto
CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `status` enum('Y','N') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pangpong.foto: ~6 rows (approximately)
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
REPLACE INTO `foto` (`id`, `url`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'storage/foto/foto_1_.jpg', NULL, '2018-12-21 15:21:54', '2018-12-21 15:21:54'),
	(2, 'storage/foto/foto_2_.jpg', NULL, '2018-12-21 15:22:00', '2018-12-21 15:22:00'),
	(3, 'storage/foto/foto_3_.jpg', NULL, '2018-12-21 15:22:06', '2018-12-21 15:22:06'),
	(4, 'storage/foto/foto_4_.jpg', NULL, '2018-12-21 15:22:13', '2018-12-21 15:22:13'),
	(5, 'storage/foto/foto_5_.jpg', NULL, '2018-12-21 15:22:21', '2018-12-21 15:22:21'),
	(7, 'storage/foto/foto_7_.png', NULL, '2018-12-18 13:34:53', '2018-12-18 13:34:53');
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;

-- Dumping structure for table pangpong.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pangpong.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table pangpong.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pangpong.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table pangpong.perangkat_desa
CREATE TABLE IF NOT EXISTS `perangkat_desa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `url` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pangpong.perangkat_desa: ~2 rows (approximately)
/*!40000 ALTER TABLE `perangkat_desa` DISABLE KEYS */;
REPLACE INTO `perangkat_desa` (`id`, `nama`, `jabatan`, `keterangan`, `url`, `created_at`, `updated_at`) VALUES
	(2, 'yani', 'bu desa', 'tes', 'storage/perangkat_desa/perangkat_desa_2_.png', '2018-12-18 15:04:50', '2018-12-21 15:24:00'),
	(3, 'NANI', 'KLEBUN', 'TES', 'storage/perangkat_desa/perangkat_desa_3_.png', '2018-12-18 15:05:21', '2018-12-21 15:24:08');
/*!40000 ALTER TABLE `perangkat_desa` ENABLE KEYS */;

-- Dumping structure for table pangpong.profil_desa
CREATE TABLE IF NOT EXISTS `profil_desa` (
  `id` int(11) NOT NULL,
  `body` longtext,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table pangpong.profil_desa: ~1 rows (approximately)
/*!40000 ALTER TABLE `profil_desa` DISABLE KEYS */;
REPLACE INTO `profil_desa` (`id`, `body`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, '<p><img src="storage/foto/foto_7_.png" style="width: 50%;"></p><p><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px; font-weight: initial;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px; font-weight: initial;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px; font-weight: initial;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px; font-weight: initial;">Pangpong adalah sebuah desa</span></p><p><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa</span></p><p><span style="font-size: 14.08px;">&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa</span><span style="font-size: 14.08px;"><br></span><span style="font-size: 14.08px; font-weight: initial;"><br></span><br></p>', 1, '2018-12-21 16:10:43', '2018-12-21 16:10:43');
/*!40000 ALTER TABLE `profil_desa` ENABLE KEYS */;

-- Dumping structure for table pangpong.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pangpong.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'adi wielijarni', 'dewa17a@gmail.com', NULL, '$2y$10$fhPB.kldNBkHhhWXZfbB1uGNVRdwrREE5bG2h5LgEpD3KQxB2tpk6', 'oyneR2JL19ON1FDJlqZh7Ysemy1JZGA3jEZR49zVCir7d9IWP6RypF5qCeZo', '2018-12-17 17:18:57', '2018-12-17 17:18:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table pangpong.video
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `status` enum('Y','N') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table pangpong.video: ~1 rows (approximately)
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
REPLACE INTO `video` (`id`, `url`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'storage/video/video_1_.mp4', NULL, '2018-12-18 15:33:32', '2018-12-18 15:33:32');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;

-- Dumping structure for table pangpong.wilayah
CREATE TABLE IF NOT EXISTS `wilayah` (
  `id` int(11) NOT NULL,
  `body` longtext,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table pangpong.wilayah: ~1 rows (approximately)
/*!40000 ALTER TABLE `wilayah` DISABLE KEYS */;
REPLACE INTO `wilayah` (`id`, `body`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, '<p><img src="storage/foto/foto_7_.png" style="width: 50%;"></p><p><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px; font-weight: initial;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px; font-weight: initial;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px; font-weight: initial;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px; font-weight: initial;">Pangpong adalah sebuah desa</span></p><p><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa</span></p><p><span style="font-size: 14.08px;">&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa&nbsp;</span><span style="font-size: 14.08px;">Pangpong adalah sebuah desa</span><span style="font-size: 14.08px;"><br></span><span style="font-size: 14.08px; font-weight: initial;"><br></span><br></p>', 1, '2018-12-21 16:29:11', '2018-12-21 16:29:11');
/*!40000 ALTER TABLE `wilayah` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
