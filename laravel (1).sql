-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2021 pada 15.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `level_account` int(11) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `level_account`, `status`) VALUES
(1, 'Super Admin', 'noor@gmail.com', 'noor', 1, 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_about`
--

CREATE TABLE `post_about` (
  `id` int(11) NOT NULL,
  `judul_about` varchar(500) NOT NULL,
  `isi` mediumtext NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `bahasa` text NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post_about`
--

INSERT INTO `post_about` (`id`, `judul_about`, `isi`, `gambar`, `waktu`, `bahasa`, `updated_at`, `created_at`) VALUES
(1, 'PT.NOOR SURYA SEMBADA INDONESIA 1', '<p><strong>PT. Noor Energi Baik&nbsp;</strong><br />\r\nknown as&nbsp;NOORenergi was founded in 2021 is a global Renewable Energy Service Company (RESCO) in Indonesia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>PT. Noor Energi Baik&nbsp;</strong>With a strong capability, innovation, partnership, and technology, NOORenergi delivers solutions and high quality renewable energy projects for Utility, Government, Commercial and Purposes.</p>\r\n\r\n<hr />\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/assets_foto_post/1619007632.jpg\" style=\"border-style:solid; border-width:0px; float:left; height:133px; margin-left:0px; margin-right:0px; width:125px\" />&nbsp; <strong>H. Zulmi Noor Hasani</strong></p>\r\n\r\n<p>&nbsp; President Commissioner</p>\r\n\r\n<p>&nbsp; PT. Noor Energi Baik</p>', '1618979167.jpg', '2021-04-21', 'Indonesia', '2021-04-04 18:12:46', '2021-04-04 18:12:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_album`
--

CREATE TABLE `post_album` (
  `id` int(11) NOT NULL,
  `judul_album` varchar(500) NOT NULL,
  `foto_album` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post_album`
--

INSERT INTO `post_album` (`id`, `judul_album`, `foto_album`, `status`, `updated_at`, `created_at`) VALUES
(1, 'kunam', '1617561493.png', 'Tampilkan', '2021-04-04 18:38:13', '2021-04-04 18:38:13'),
(2, 'iskandar', '1619007502.jpg', 'Tampilkan', '2021-04-21 12:18:22', '2021-04-21 12:18:22'),
(3, 'Abdul Malik', '1619007530.jpg', 'Tampilkan', '2021-04-21 12:18:51', '2021-04-21 12:18:51'),
(4, 'ARIEF NUR HIDAYAT', '1619007564.jpg', 'Tampilkan', '2021-04-21 12:19:24', '2021-04-21 12:19:24'),
(5, 'HERRY AGUSMAN', '1619007593.jpg', 'Tampilkan', '2021-04-21 12:19:53', '2021-04-21 12:19:53'),
(6, 'H. Zulmi Noor Hasani', '1619007632.jpg', 'Tampilkan', '2021-04-21 12:20:32', '2021-04-21 12:20:32'),
(7, 'Johny Hartono Poernomo', '1619007655.jpg', 'Tampilkan', '2021-04-21 12:20:55', '2021-04-21 12:20:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_project`
--

CREATE TABLE `post_project` (
  `id` int(11) NOT NULL,
  `judul_project` varchar(500) NOT NULL,
  `isi` mediumtext NOT NULL,
  `waktu` varchar(500) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post_project`
--

INSERT INTO `post_project` (`id`, `judul_project`, `isi`, `waktu`, `bahasa`, `foto`, `status`, `updated_at`, `created_at`) VALUES
(6, 'Project Tahun 2021', '<p>KOMPAS.com - Artikel merupakan salah satu jenis karya tulis. Teks artikel ada yang berisikan persuasi atau berbagai informasi tambahan untuk pembaca. Teks artikel biasanya ditulis secara singkat, padat dan jelas agar pembaca lebih mudah mengerti. Tidak hanya itu, biasanya dalam artikel ada opini yang turut didukung dengan fakta. Selain itu, artikel juga bersifat faktual dan informatif. Artinya sesuai', '2021-04-29', 'Indonesia', '1618977722.jpg', 'Tampilkan', '2021-04-13 08:48:14', '2021-04-13 08:48:14'),
(7, 'Project Tahun 2022', '<p>contoh</p>', '2021-04-23', 'Indonesia', '1618304366.png', 'Sembunyikan', '2021-04-13 08:59:26', '2021-04-13 08:59:26'),
(8, 'Project Tahun 2023', '<p>dakjdoajdioajdi</p>', '2021-04-24', 'Indonesia', '1618304382.jpg', 'Sembunyikan', '2021-04-13 08:59:42', '2021-04-13 08:59:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'noor@gmail.com', NULL, '$2y$10$x..nztfVJm.1Ls2vdk0OHuRB20uuL37mysf8RwNvoriVyPQG.bgYu', 'Super Admin', '1618995315.png', 'AO9YKWfx6X495SPR7Mh3Ro0xqeTjV1dP2zSvyW0df5eLhEky6CFOVDK42y8D', '2021-04-10 20:59:42', '2021-04-10 20:59:42'),
(4, 'kiki', 'kiki@gmail.com', NULL, '$2y$10$EnvNQvnO50KquKth5wXpEOTtgO8p/ZrSbqx6D9KSv49NSQUL3uqXy', 'Admin', 'profile909010.png', NULL, NULL, NULL),
(6, 'Kiki Yuniar Kristiawan', 'kiki.nagh.arwolves@gmail.com', NULL, '$2y$10$IMk7SkBQD2dV3kC90ZslD.EIR6EyggjwVUGm6ZOllD0Kj3ylY9cJK', 'Admin', 'profile909010.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `post_about`
--
ALTER TABLE `post_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_album`
--
ALTER TABLE `post_album`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_project`
--
ALTER TABLE `post_project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `post_about`
--
ALTER TABLE `post_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `post_album`
--
ALTER TABLE `post_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `post_project`
--
ALTER TABLE `post_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
