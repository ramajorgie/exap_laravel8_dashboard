-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2021 pada 11.23
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
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `status` varchar(120) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `msg`, `status`, `waktu`) VALUES
(3, 'rama andika jorgie', 'ramaandikajorgie@gmail.com', 'kunam 123', 'Menurut Kamus Besar Bahasa Indonesia (KBBI), artikel merupakan suatu karya tulis yang ditulis secara lengkap.\r\n\r\nAdapun tujuan secara umum dari pembuatan artikel ialah untuk memengaruhi, mendidik, memberitahu, meyakinkan, serta menghibur pembacanya.\r\n\r\nArtikel tersebut biasanya dipublikasikan di suatu media, mulai buletin, majalah, koran hingga website.\r\n\r\nNah, untuk memahami lebih jelas tentang artikel, bisa membaca pengertian dari para ahli, ciri-ciri, kaidah kebahasaan hingga strukturnya.\r\n\r\nBerikut ini rangkuman tentang pengertian artikel menurut ahli, ciri-ciri, tujuan, manfaat, kaidah kebahasaan hingga strukturnya, seperti dilansir dari laman Gurupendidikan dan Serupa, Rabu (10/3/2021).', 'Terbaca', '2021-04-22'),
(4, 'ram', 'ramaandikajorgie@gmail.com', 'kunam 123', 'ra', 'Terbaca', '2021-04-22'),
(5, 'kiki', 'kiki@gmail.com', 'tees kiki', 'tes kiki @123', 'Terbaca', '2021-04-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_visi_misi`
--

CREATE TABLE `data_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` varchar(1000) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_visi_misi`
--

INSERT INTO `data_visi_misi` (`id`, `visi_misi`, `status`) VALUES
(2, 'Committed to provide good energy, solutions innovatively, cost effective, and  environmentally friendly', 'Visi'),
(3, 'Fully contribute to bringing and developing renewable energy throughout the country with a sustainable power', 'Misi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exp_team`
--

CREATE TABLE `exp_team` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `biografi` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `exp_team`
--

INSERT INTO `exp_team` (`id`, `nama`, `posisi`, `biografi`, `foto`, `waktu`, `updated_at`, `created_at`) VALUES
(7, 'Iskandar', 'Chief Executive Officer', 'President Director of\r\nPT. Sientratek Energi  Indonesia\r\nPresident Director of\r\nPT. GLEnergi  Teknologi Indonesia\r\nExecutive Director of \r\nPT. Daiwatech  Indonesia International', '1619934702.jpg', '2021-05-02', '2021-05-02 05:51:42', '2021-05-02 05:51:42'),
(8, 'Abdul Malik', 'Chief Marketing Officer', 'Direktur utama \r\nPT Alihdaya Megah Bersatu Indonesia\r\nGeneral Manager \r\nPT Eksekutif\r\nNational Business Development \r\nPT The Service Line ( SOS TBK group)\r\nGeneral Manager \r\nPT Tritunggal Sejahtera Margawi', '1619934770.jpg', '2021-05-02', '2021-05-02 05:52:50', '2021-05-02 05:52:50'),
(9, 'Arief Nur Hidayat', 'Chief Technology Officer', 'General Manager of Maluku & Maluku Utara Region \r\nPT. PLN (Persero)\r\nOperational Director \r\nPT. Lestari Satyagraha Kompetensi\r\nSenior Expert Electric Power Distribution \r\nPT. Energi Terbarukan Persada Surya\r\nTechnical Director \r\nPT. Sientratek Energi Indonesia', '1619934841.jpg', '2021-05-02', '2021-05-02 05:54:01', '2021-05-02 05:54:01');

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
  `gambar` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `bahasa` text NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post_about`
--

INSERT INTO `post_about` (`id`, `judul_about`, `isi`, `gambar`, `waktu`, `bahasa`, `updated_at`, `created_at`) VALUES
(1, 'PT.NOOR SURYA SEMBADA INDONESIA 1', '<p><strong>PT. NOOR ENERGI BAIK</strong> &nbsp;known as</p>\r\n\r\n<p>NOORenergi was founded in 2021 is a global&nbsp; Renewable Energy Service Company (RESCO) in &nbsp;Indonesia.</p>\r\n\r\n<p>With a strong capability, innovation, partnership, and &nbsp;technology, NOORenergi delivers solutions and &nbsp;high quality renewable energy projects for Utility, &nbsp;Government, Commercial and Purposes.</p>\r\n\r\n<p>We have the experience team and capacity to support &nbsp;renewable energy project that specializes in Solar &nbsp;Power , Wind Power, Geothermal Power and Waste To Energy in Indonesia&nbsp; through well-known partners from Europe, China &nbsp;and Singapore.</p>\r\n\r\n<p>We provide :</p>\r\n\r\n<p>&bull;Engineering</p>\r\n\r\n<p>&bull;Procurement</p>\r\n\r\n<p>&bull;Construction</p>\r\n\r\n<p>&bull;Operation and maintenance.</p>', '1619934244.jpg', '2021-05-02', 'Indonesia', '2021-04-04 18:12:46', '2021-04-04 18:12:46');

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
(4, 'Album januarin 2022', '1618761465.jpg', 'Tampilkan', '2021-04-18 15:57:45', '2021-04-18 15:57:45'),
(5, 'sampul', '1619931619.jpg', 'Tampilkan', '2021-05-02 05:00:19', '2021-05-02 05:00:19');

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
(9, 'Project 1', '<p>Experienced in working on energy projects that are spread throughout Indonesia based on solar energy. With commitment and passionate, we have had ongoing projects from several of our experienced team personnel. Currently more than 38 MW spread across 30 locations in East Java, Central Java, Bali and NTT have worked with us, which includes factories, hotels and malls, and also for investment projects / Independent Power Producers (IPP)</p>', '2021-05-02', 'Indonesia', '1619945671.jpg', 'Tampilkan', '2021-05-02 08:54:31', '2021-05-02 08:54:31'),
(10, 'project 2', '<p>Experienced in working on energy projects that are spread throughout Indonesia based on solar energy. With commitment and passionate, we have had ongoing projects from several of our experienced team personnel. Currently more than 38 MW spread across 30 locations in East Java, Central Java, Bali and NTT have worked with us, which includes factories, hotels and malls, and also for investment projects / Independent Power Producers (IPP)</p>', '2021-05-02', 'Indonesia', '1619945862.jpg', 'Sembunyikan', '2021-05-02 08:57:42', '2021-05-02 08:57:42'),
(11, 'project 3', '<p>Experienced in working on energy projects that are spread throughout Indonesia based on solar energy. With commitment and passionate, we have had ongoing projects from several of our experienced team personnel. Currently more than 38 MW spread across 30 locations in East Java, Central Java, Bali and NTT have worked with us, which includes factories, hotels and malls, and also for investment projects / Independent Power Producers (IPP)</p>', '2021-05-02', 'Indonesia', '1619945883.jpg', 'Sembunyikan', '2021-05-02 08:58:03', '2021-05-02 08:58:03'),
(12, 'project 4', '<p>Experienced in working on energy projects that are spread throughout Indonesia based on solar energy. With commitment and passionate, we have had ongoing projects from several of our experienced team personnel. Currently more than 38 MW spread across 30 locations in East Java, Central Java, Bali and NTT have worked with us, which includes factories, hotels and malls, and also for investment projects / Independent Power Producers (IPP)</p>', '2021-05-02', 'Indonesia', '1619945973.jpg', 'Sembunyikan', '2021-05-02 08:59:33', '2021-05-02 08:59:33');

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
(1, 'Rama Andika Jorgie', 'noor@gmail.com', NULL, '$2y$10$x..nztfVJm.1Ls2vdk0OHuRB20uuL37mysf8RwNvoriVyPQG.bgYu', 'Super Admin', '1619088844.jpg', 'UAJIFRIJQaWocXOqEaK9n0dAAjQOPH82qXMtu7HQd8DxjzdUWA4d5WcWrd0t', '2021-04-10 20:59:42', '2021-04-10 20:59:42'),
(4, 'Rama S.Kom', 'ramaandikajorgie@gmail.com', NULL, '$2y$10$vqZ1IaKcgIFi1/7FCEih1e2afHJMQKNhmIWFvHrNfWK/gbp09sQyu', 'Admin', '1619080158.jpg', NULL, NULL, NULL),
(6, 'Kiki Yuniar', 'kkikiyuniar@yahoo.co.id', NULL, '$2y$10$YRAf8xBlyuehxC3iSq59xOpAhM/0/c7w778lhiVEBWCKK/nn7mSPC', 'Admin', '1619932667.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_visi_misi`
--
ALTER TABLE `data_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `exp_team`
--
ALTER TABLE `exp_team`
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
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_visi_misi`
--
ALTER TABLE `data_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `exp_team`
--
ALTER TABLE `exp_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `post_project`
--
ALTER TABLE `post_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
