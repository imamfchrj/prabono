-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2019 at 01:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_probono`
--

-- --------------------------------------------------------

--
-- Table structure for table `advokat_profiles`
--

CREATE TABLE `advokat_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nik` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `firtname` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `kta_advokat` text COLLATE utf8_bin,
  `alamat_domisili` text COLLATE utf8_bin,
  `lokasi_praktek` text COLLATE utf8_bin,
  `alamat_ktp` text COLLATE utf8_bin,
  `province` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `photo_ktp` text COLLATE utf8_bin,
  `hp` char(15) COLLATE utf8_bin DEFAULT NULL,
  `hp_alt` char(15) COLLATE utf8_bin DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `oto_biografi` text COLLATE utf8_bin NOT NULL,
  `edukasi` text COLLATE utf8_bin NOT NULL,
  `is_verified` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `advokat_profiles`
--


-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `penulis` varchar(100) NOT NULL DEFAULT 'ADMIN',
  `deskripsi` text NOT NULL,
  `tags` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bidang_advokat`
--

CREATE TABLE `bidang_advokat` (
  `id` int(11) NOT NULL,
  `advokat_id` int(11) NOT NULL,
  `bidang_keahlian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `kasus`
--

CREATE TABLE `kasus` (
  `id` int(11) NOT NULL,
  `is_kusus` int(11) NOT NULL,
  `is_hidden` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kronologi_masalah` text NOT NULL,
  `lokasi_kejadian` varchar(50) NOT NULL,
  `ekspektasi_kasus` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasus_bidang_keahlian`
--

CREATE TABLE `kasus_bidang_keahlian` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) NOT NULL,
  `id_bidang_keahlian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasus_file`
--

CREATE TABLE `kasus_file` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) NOT NULL,
  `judul_file` varchar(100) NOT NULL,
  `file_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `id` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `deskripsi` int(11) NOT NULL,
  `pengacara_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login_attempts`
--


-- --------------------------------------------------------

--
-- Table structure for table `master_bidang_keahlian`
--

CREATE TABLE `master_bidang_keahlian` (
  `id` int(11) NOT NULL,
  `bidang_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_jasa`
--

CREATE TABLE `master_jasa` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_jasa`
--

INSERT INTO `master_jasa` (`id`, `title`, `thumbnail`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Pernikahan & Perceraian', 'v1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', '2019-01-27 11:40:33', '2019-01-27 11:45:16'),
(2, 'Pajak', 'v1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', '2019-01-27 11:40:33', '2019-01-27 11:45:18'),
(3, 'Audit & Asuransi', 'v1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', '2019-01-27 11:41:02', '2019-01-27 11:45:19'),
(4, 'Penjahat Cyber', 'v1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', '2019-01-27 11:41:02', '2019-01-27 11:45:20'),
(5, 'Instusi Keuangan', 'v1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', '2019-01-27 11:41:20', '2019-01-27 11:45:21'),
(6, 'UU ITE', 'v1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', '2019-01-27 11:41:20', '2019-01-27 11:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `master_kategori`
--

CREATE TABLE `master_kategori` (
  `id` int(11) NOT NULL,
  `judul_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kategori`
--

INSERT INTO `master_kategori` (`id`, `judul_kategori`) VALUES
(1, 'UU ITE'),
(2, 'UUD 1945'),
(3, 'Advokat'),
(4, 'Advokat'),
(5, 'Hakim');

-- --------------------------------------------------------

--
-- Table structure for table `master_komplain`
--

CREATE TABLE `master_komplain` (
  `id` int(11) NOT NULL,
  `judul_komplain` varchar(100) NOT NULL,
  `deskripsi_komplain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_publikasi`
--

CREATE TABLE `master_publikasi` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `thumbnail` text NOT NULL,
  `text` text NOT NULL,
  `penulis` int(11) NOT NULL,
  `file_pendukung` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_publikasi`
--

INSERT INTO `master_publikasi` (`id`, `title`, `thumbnail`, `text`, `penulis`, `file_pendukung`, `created_at`, `updated_at`) VALUES
(1, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 12:03:06', '2019-01-27 12:03:06'),
(2, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06'),
(3, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06'),
(4, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06'),
(5, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06'),
(6, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06'),
(7, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06'),
(8, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06'),
(9, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06'),
(10, 'Perencanaan Strategis', 'p1.jpg', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit sed quia consequuntur.', 1, 'kambing.pdf', '2019-01-27 05:03:06', '2019-01-27 05:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_advokat`
--

CREATE TABLE `users_advokat` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users_advokat`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firtname` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nama_samaran` varchar(100) COLLATE utf8_bin NOT NULL,
  `province` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nik` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `photo_ktp` text COLLATE utf8_bin,
  `surat_tidak_mampu` text COLLATE utf8_bin,
  `surat_pendukung` text COLLATE utf8_bin,
  `hp` char(15) COLLATE utf8_bin DEFAULT NULL,
  `hp_alt` char(15) COLLATE utf8_bin DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_profiles`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advokat_profiles`
--
ALTER TABLE `advokat_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `bidang_advokat`
--
ALTER TABLE `bidang_advokat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `kasus_bidang_keahlian`
--
ALTER TABLE `kasus_bidang_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasus_file`
--
ALTER TABLE `kasus_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_bidang_keahlian`
--
ALTER TABLE `master_bidang_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jasa`
--
ALTER TABLE `master_jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_komplain`
--
ALTER TABLE `master_komplain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_publikasi`
--
ALTER TABLE `master_publikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_advokat`
--
ALTER TABLE `users_advokat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advokat_profiles`
--
ALTER TABLE `advokat_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT for table `bidang_advokat`
--
ALTER TABLE `bidang_advokat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasus_bidang_keahlian`
--
ALTER TABLE `kasus_bidang_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasus_file`
--
ALTER TABLE `kasus_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komplain`
--
ALTER TABLE `komplain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_bidang_keahlian`
--
ALTER TABLE `master_bidang_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jasa`
--
ALTER TABLE `master_jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_kategori`
--
ALTER TABLE `master_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_komplain`
--
ALTER TABLE `master_komplain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_publikasi`
--
ALTER TABLE `master_publikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT for table `users_advokat`
--
ALTER TABLE `users_advokat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
