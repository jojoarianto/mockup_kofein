-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2016 at 09:04 AM
-- Server version: 5.6.27-0ubuntu1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kofein`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_user`
--

CREATE TABLE IF NOT EXISTS `jawaban_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `no_opsi` int(11) NOT NULL,
  `is_delete` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opsi_jawaban`
--

CREATE TABLE IF NOT EXISTS `opsi_jawaban` (
  `id` int(11) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `no_opsi` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ujians`
--

CREATE TABLE IF NOT EXISTS `ujians` (
  `id` int(11) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `time_pengumuman` datetime NOT NULL,
  `durasi_ujian` int(11) NOT NULL,
  `jumlah_soal` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujians`
--

INSERT INTO `ujians` (`id`, `time_start`, `time_end`, `time_pengumuman`, `durasi_ujian`, `jumlah_soal`) VALUES
(1, '2016-01-28 00:00:00', '2016-01-28 22:00:00', '2016-01-28 21:00:00', 10, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `salt` varchar(256) NOT NULL,
  `kota_asal` varchar(50) NOT NULL,
  `sekolah_asal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `salt`, `kota_asal`, `sekolah_asal`, `created_at`, `update_at`, `delete_at`) VALUES
(1, 'administrator', 'admin@gmail.com', '46oI34IHQIGTM', '46', 'Surabaya', 'SMA 4 Surabaya', '2016-01-20 00:57:33', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `waktu_ujian`
--

CREATE TABLE IF NOT EXISTS `waktu_ujian` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ujian_id` int(11) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opsi_jawaban`
--
ALTER TABLE `opsi_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujians`
--
ALTER TABLE `ujians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu_ujian`
--
ALTER TABLE `waktu_ujian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opsi_jawaban`
--
ALTER TABLE `opsi_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ujians`
--
ALTER TABLE `ujians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `waktu_ujian`
--
ALTER TABLE `waktu_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
