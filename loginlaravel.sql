-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Agu 2017 pada 05.15
-- Versi Server: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginlaravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `intern`
--

CREATE TABLE `intern` (
  `id` int(10) UNSIGNED NOT NULL,
  `kepada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_02_041828_Create_surat_table', 1),
(4, '2017_08_02_063119_Create_Interen_table', 1),
(5, '2017_08_02_063156_Create_SuratEdaran_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(10) UNSIGNED NOT NULL,
  `kepada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `kepada`, `dari`, `no`, `tanggal`, `hal`, `isi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bagian Tanaman', 'Bagian Teknik', '123/teknik', '2017-08-19', 'permohonan izin', '<p>surat pertama&nbsp;</p><p>isi surat</p>', 0, '2017-08-17 18:51:16', '2017-08-20 20:14:25'),
(2, 'Bagian Teknik', 'Bagian Tanaman', '123/tanaman', '2017-08-20', 'balasan surat', 'balasan surat surat balasan&nbsp;', 1, '2017-08-17 18:53:52', '2017-08-20 23:53:37'),
(3, 'Bagian Teknik', 'Bagian Tanaman', '124/teknik', '2017-08-11', 'penjurusan', 'isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat&nbsp;', 1, '2017-08-17 18:59:39', '2017-08-20 23:53:35'),
(4, 'Bagian Keuangan', 'Bagian Teknik', '125/teknik', '2017-08-20', 'permohonan surat keuangan', 'surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi&nbsp;', 0, '2017-08-17 19:03:29', '2017-08-20 20:37:49'),
(5, 'Bagian Teknik', 'Bagian Keuangan', '123/keuangan', '2017-08-12', 'surat balasan', 'isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat isi surat&nbsp;', 0, '2017-08-17 19:06:53', '2017-08-20 21:54:38'),
(6, 'Bagian Tanaman', 'Bagian Teknik', '126/teknik', '2017-08-17', 'surat balasa 2', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Surat balasan</p>', 0, '2017-08-17 19:48:36', '2017-08-20 20:22:48'),
(7, 'Bagian Teknik', 'Bagian Tanaman', 'aaaaaaa', '2017-08-09', 'aAPAAPUN', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aasas <span style=\"background-color: rgb(255, 255, 0);\">pengertian aasas </span>pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian aasas pengertian&nbsp;</p><p><br></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KEPALA BIDANG<br></p>', 1, '2017-08-17 21:32:47', '2017-08-21 00:36:46'),
(10, 'Bagian Tanaman', 'Bagian Keuangan', '123/baru', '2017-08-12', 'permohonan izin', 'pertemuan pada hari ini akan diselenggarakan pada jam&nbsp;', 1, '2017-08-20 23:57:46', '2017-08-20 23:59:11'),
(12, 'Bagian Keuangan', 'Bagian Teknik', 'baru', '2017-08-22', 'baru', 'barubarubarubarubarubarubaruba<span style=\"background-color: rgb(255, 255, 0);\">rubarubaru\r\n                  </span>', 1, '2017-08-21 18:48:13', '2017-08-21 18:49:34'),
(13, 'Bagian SPI', 'Bagian SDM', 'SDM/1', '2017-08-22', 'peringatan', '<p>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; peringatan peringatan&nbsp;<br></p>', 1, '2017-08-21 19:51:08', '2017-08-21 19:52:28'),
(14, 'Bagian SDM', 'Bagian SPI', 'SPI/1', '2017-08-22', 'balasan surat', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Balasan surat dari SPI</p>', NULL, '2017-08-21 20:14:03', '2017-08-21 20:14:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_edaran`
--

CREATE TABLE `surat_edaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `kepada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `bagian` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `status`, `bagian`, `created_at`, `updated_at`) VALUES
(1, 'Bagian Teknik', 'bagianteknik@gmail.com', '$2y$10$KL/3rgC9eN8D0bEuZKU/x.emzVowTj1akq0Kxk.umQJ6fkw6ocKYy', 'c9iYJbpJcxAgZ4LgJIvzKWwC77C0Ibb6ylZjHdGnKKLZRvivVR8DlK6dQARI', NULL, 'Bagian Teknik', '2017-08-17 18:50:16', '2017-08-17 18:50:16'),
(2, 'Bagian Tanaman', 'bagiantanaman@gmail.com', '$2y$10$ENn.mwAP9.6Pxy3047R08Oz1v6rqDe4zhKvkCkLlShhLW5yxzKa/a', 'NFMs5diDbL8iiYX6niGYrAPZh5pbWeQkgP7OQlaNHrURp82UIcwxq1s7dhxs', NULL, 'Bagian Tanaman', '2017-08-17 18:52:05', '2017-08-17 18:52:05'),
(3, 'Bagian Keuangan', 'bagiankeuangan@gmail.com', '$2y$10$FoLMrgueeHl/VEU5WUvvOu3nOVKWhxtDwTHn39rIBrIKNGKqqtFpy', 'kNCpNn2k2II7dKVUDNpbDyI19w5jCVagTsLSui5l9a66DzWT1jgsAJT3WKpf', NULL, 'Bagian Keuangan', '2017-08-17 19:04:20', '2017-08-17 19:04:20'),
(4, 'Kepala Urusan Teknik', 'urusanteknik@gmail.com', '$2y$10$FqLNI0sJE0IWG0atZiXatOmH3Objuw9wU3BqgWRWY8SYXavWssJHe', '5JZ8vG6mVKBwDcD18BxhsLKP7N7fNp5GldzZlkZBMyu5DWsJmWytgDQm3a1z', 1, 'Bagian Teknik', '2017-08-20 18:40:51', '2017-08-20 18:40:51'),
(5, 'Kepala Urusan Keuangan', 'urusankeuangan@gmail.com', '$2y$10$sz9LIVFc5jQ7/XrVJtC6qeEYZXfO.MqWXW1JnMgngEVH4gbQHxofG', '5OVpIAzvx84BqAMXq9ISLozomtY6LEqpnKvTrdngRAQu8qoasY29swmpk4cj', 1, 'Bagian Keuangan', '2017-08-20 21:29:45', '2017-08-20 21:29:45'),
(6, 'Kepala Urusan Tanaman', 'urusantanaman@gmail.com', '$2y$10$xLFPKfFy2MQTmaiFZirwvu99F8/JUfeSd0Nlz6efBNKuyL3GN9QIS', 'Be0wdlsUsROdRZizQy8RWAMAQAsWXEYRP9lTDcY3iMa8z1FSVPCLnyFmUNoa', 1, 'Bagian Tanaman', '2017-08-20 23:52:32', '2017-08-20 23:52:32'),
(9, 'Bagian Teknologi', 'bagianteknologi@gmail.com', '$2y$10$5kVUAloUxcfj0tSZ8B/0..3Fdd9dO/rGi/G9IFJS9D70u.y8xkAcq', 'iPurMRDekXu77pkkzwJqw8vKsFPMnWro5xYDvsgJyNFC7opnsvrmjX28RIj9', NULL, 'Bagian Teknologi', '2017-08-21 19:16:22', '2017-08-21 19:16:22'),
(10, 'Bagian Perencanan & Pengembangan', 'bagianperencanaan&pengembangan@gmail.com', '$2y$10$VRGsJ7/6C630awwHPGECQuT4F9q/uczcRDEiORALLr9gkWctaOSFW', 'ERK0rbm5RBJo8PUYY1Tp8HCCo4Z9A0xZM5eW7gZVcThbCChoaO4pgpz2jsiB', NULL, 'Bagian Perencanan & Pengembangan', '2017-08-21 19:20:48', '2017-08-21 19:20:48'),
(11, 'Bagian Sekretariat', 'bagiansekretariat@gmail.com', '$2y$10$f4bpU9AQPvTXPmGlluiKc.n91MT8bY.yV3hVMDqOmNk375u7scYaq', 'HYz1NQaDRMS5Fj7RApc9zsIsWqLEvN72DhV6HMvEK8ILPd4RAadegeLEtwKn', NULL, 'Bagian Sekretariat', '2017-08-21 19:21:43', '2017-08-21 19:21:43'),
(12, 'Bagian Akutansi', 'bagianakutansi@gmail.com', '$2y$10$cPpVkaST0SRzH44lACDso.1aWZfeuAR7WWUFIzT.cz/2x5o22v2cu', 'MuNZSBbK445SH44c1nDDw4cAXNRfGAum5gKYvRKzIyTLYTJlWB8F8PLpJZfQ', NULL, 'Bagian Akutansi', '2017-08-21 19:22:25', '2017-08-21 19:22:25'),
(13, 'Bagian Komersil', 'bagiankemorsil@gmail.com', '$2y$10$3cMUpoTrYiMVDc4NL9raGe3lUq2IiUOsdztINr6FVDSPZ2.gdS0FK', 'wa1CJ4bl3tGxGePseYvM11yQ7T4n0SX2P8ijAPFL9l3UqZdfQ1HuhKyGNbCO', NULL, 'Bagian Komersil', '2017-08-21 19:23:02', '2017-08-21 19:23:02'),
(14, 'Bagian TI/TB & Manajemen Resiko', 'bagianti@gmail.com', '$2y$10$hgXmdRBGQGn1sWwdzONVq.0YjEYFTUVmIrnwu43TJSkLWTogcBwkC', 'n1JPWQTW1Rgt0b7m3P6CrvJXo7U9DJ42fwtq1LAFwrbBJfYHCrWQqeRaGODe', NULL, 'Bagian TI/TB & Manajemen Resiko', '2017-08-21 19:24:59', '2017-08-21 19:24:59'),
(15, 'Bagian SDM', 'bagiansdm@gmail.com', '$2y$10$.rmmFp0i4zPp0OoWlo./IuIx8aMLBHZjPbbLZk6QrZIu8ZPNLJvFy', 'Odj8l1OYPV09AAsjr3XtgAZi3c1FMmTza70Vc6llUdFyIw6TvoDmaM0EQTdE', NULL, 'Bagian SDM', '2017-08-21 19:25:57', '2017-08-21 19:25:57'),
(16, 'Bagian Hukum', 'bagianhukum@gmail.com', '$2y$10$Wsi5wPz8fpaEXJ284LiFgOA0TKlTK7PSwMcZHpWGKPYpZm.b9/WoO', '8tpxOe78uDLvfGpaFbwfOktLJktsXcpSt9KUFMW9I4PVsHeZN87ycai31Sle', NULL, 'Bagian Hukum', '2017-08-21 19:26:41', '2017-08-21 19:26:41'),
(17, 'Bagian PKBL', 'bagianpkbl@gmail.com', '$2y$10$2dRB1.zaWjcqU5YLi1EwHOcObuZE6wX36LEDxTpop6deUAcS.X93K', 'v8BY3zAZf0IgnQj0zJ3b1ShZvWboLidjLRjqR2UmjcnEZtIfsC07RWhlNOxc', NULL, 'Bagian PKBL', '2017-08-21 19:27:19', '2017-08-21 19:27:19'),
(18, 'Bagian Pelelangan', 'bagianpelelangan@gmail.com', '$2y$10$pZmeY7YtIe6AJZWGMEV2TuKg8qEH9EO4358aTvHuc/KaxQEpEEOz.', 'dywF2C44xGK0da0NdbteyV2KZ3qDx6XEZSm1X11283mXDttN2UmSuSWB4ku0', NULL, 'Bagian Pelelangan', '2017-08-21 19:28:05', '2017-08-21 19:28:05'),
(19, 'Bagian SPI', 'bagianspi@gmail.com', '$2y$10$aIIZ0xDlOaFltaBWLVXNpefHH6M/.LiSXp3rPeme2g.hRa61lZI0a', 'CEvobmQnRKcOcfU0zL1ZazIAdjwFmEOI0ksLnxr1pEddFGNd6FCwyS1FlvjA', NULL, 'Bagian SPI', '2017-08-21 19:28:40', '2017-08-21 19:28:40'),
(20, 'Kepala Urusan Sekretariat', 'urusansekretariat@gmail.com', '$2y$10$7MWBjRBqO/O886IkLYE54eUVmlZKpqGE8ab4US/.uf/8j04sHhdT.', 'JcHjtdjUOf2HoTQAqsTfRxeL177gBtxxgPhunKAUb5qp1JWaXa8GoDcYI9Ai', 1, 'Bagian Sekretariat', '2017-08-21 19:34:44', '2017-08-21 19:34:44'),
(21, 'Kepala Urusan Teknologi', 'urusanteknologi@gmail.com', '$2y$10$fIikkzntfvGBdgPqjH5jleUSO6SGE24.c5x6n4AsR6QBT9CbFKPX.', 'DMQng42KM9mzTzvccwUiYa24W8vZV4mvYhi0BNUN2K5e0XhiXhEyjDg0FuRg', 1, 'Bagian Teknologi', '2017-08-21 19:35:26', '2017-08-21 19:35:26'),
(22, 'Kepala Urusan Perencanaan & Pengembangan', 'urusanperencanaan@gmail.com', '$2y$10$hUkzJXMhUA4/Tc5IFIDW7.4CPvRJvKsKaWSnqMjvtU2nolavUFshe', 'l4fknNAmGmckzFsysjExAW303gb9PUZEuWPVbeWHs8jaAo7ND6Hec444jvBh', 1, 'Bagian Perencanaan & Pengembangan', '2017-08-21 19:36:37', '2017-08-21 19:36:37'),
(23, 'Kepala Urusan Akutansi', 'urusanakutansi@gmail.com', '$2y$10$SMEZ30sNpQ9Rxcc0/vFyAeIhIhda13ymZOXccmIYWuLmvpF3P8EHa', 'ZUZQbCN6GEUIjZKThKxtZLVMimoN8ZonJJKyA1XPN0yloAZrubAkqpcdqowD', 1, 'Bagian Akutansi', '2017-08-21 19:37:16', '2017-08-21 19:37:16'),
(24, 'Kepala Urusan Komersil', 'urusankomersil@gmail.com', '$2y$10$mJFj9CMzSmI2wQCLtPzA0.p3Yb/PApvLA/ZgsvjSZgOvhbrRb7YUG', 'BiZPPqbbeito7apZyn7hIZDBeo1DjPD1nBemfV6m7qNTqGTpWvL0gjOIJcMK', 1, 'Bagian Komersil', '2017-08-21 19:37:57', '2017-08-21 19:37:57'),
(25, 'Kepala Urusan TI/TB & Manajemen Resiko', 'urusanti@gmail.com', '$2y$10$trEMogL1mzG6tFqCeFEgU.Mff4N1Xu6.rfa7XRISiw/8vWLyJZBWK', 'LANMhMeE4kGP0bMbLscx7ToiYKTogVsYeiCVEDI2lGlwnHqvBSQA0rhSwZoB', 1, 'Bagian Urusan TI/TB & Manajemen Resiko', '2017-08-21 19:38:50', '2017-08-21 19:38:50'),
(26, 'Kepala Urusan SDM', 'urusansdm@gmail.com', '$2y$10$2qtssU2NC2A8LXp8KIg9j.cL5No9RiYA1x2hJfqfp59qM7OX5kePy', 'YcJThAxdqZTYcfbQDu3fbgXK5ooO9gWOX1UhM34tu9X74qAvXadqac52Ejjv', 1, 'Bagian SDM', '2017-08-21 19:39:51', '2017-08-21 19:39:51'),
(27, 'Kepala Urusan Hukum', 'urusanhukum@gmail.com', '$2y$10$EgekA2kJZ.5Hj6yeZ5eJku1pDF3gOT.u4m1eZQHeKTX8j2Srh4ts2', 'xRr5fNaaTw2SV14k4rkjpzLFxpeYoW6EEphmjMUsVZTL37P5DTqwYFOnVVsO', 1, 'Bagian Hukum', '2017-08-21 19:40:30', '2017-08-21 19:40:30'),
(28, 'Kepala Urusan PKBL', 'urusanpkbl@gmail.com', '$2y$10$nwqj3HLYBRAGkYqUfP.XA.d6i6M1pmtljB3pGNDayzIxgvsFiQ.Km', 'u8txpw7k3GwAUvzXgptoc8LIGOJK86ZMPOyILmgU1gaM3L5xYwoHqt2p1kyK', 1, 'Bagian PKBL', '2017-08-21 19:41:06', '2017-08-21 19:41:06'),
(29, 'Kepala Urusan Pelelangan', 'urusanpelelangan@gmail.com', '$2y$10$AsLeJHoLdK1QXuE/bU8H5eHps8TGhJOpKYYf/MopBD74IXkiT6tjW', 'WocnE5sWO402qlExA4kJfxQPJTtYiA5IIXBRAdHNcg68btmGLq7evpfrMww7', 1, 'Bagian Pelelangan', '2017-08-21 19:41:49', '2017-08-21 19:41:49'),
(30, 'Kepala Urusan SPI', 'urusanspi@gmail.com', '$2y$10$7G82jmZhheT51t0CiHFo4eNtCDqv3qwTXpdLotXwmQc0ZKjI0zWDm', 'kpnCxawZPVSgtvY8Pcrvb3pcIceGOnwmIUQOnMNsYXdsoIpGrK1rh7Dp8DKl', 1, 'Bagian SPI', '2017-08-21 19:42:21', '2017-08-21 19:42:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_edaran`
--
ALTER TABLE `surat_edaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `surat_edaran`
--
ALTER TABLE `surat_edaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
