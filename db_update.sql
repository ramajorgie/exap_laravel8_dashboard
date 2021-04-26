-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 05:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt_noor`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
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
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `level_account`, `status`) VALUES
(1, 'Super Admin', 'noor@gmail.com', 'noor', 1, 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
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
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `msg`, `status`, `waktu`) VALUES
(3, 'rama andika jorgie', 'ramaandikajorgie@gmail.com', 'kunam 123', 'Menurut Kamus Besar Bahasa Indonesia (KBBI), artikel merupakan suatu karya tulis yang ditulis secara lengkap.\r\n\r\nAdapun tujuan secara umum dari pembuatan artikel ialah untuk memengaruhi, mendidik, memberitahu, meyakinkan, serta menghibur pembacanya.\r\n\r\nArtikel tersebut biasanya dipublikasikan di suatu media, mulai buletin, majalah, koran hingga website.\r\n\r\nNah, untuk memahami lebih jelas tentang artikel, bisa membaca pengertian dari para ahli, ciri-ciri, kaidah kebahasaan hingga strukturnya.\r\n\r\nBerikut ini rangkuman tentang pengertian artikel menurut ahli, ciri-ciri, tujuan, manfaat, kaidah kebahasaan hingga strukturnya, seperti dilansir dari laman Gurupendidikan dan Serupa, Rabu (10/3/2021).', 'Terbaca', '2021-04-22'),
(4, 'ram', 'ramaandikajorgie@gmail.com', 'kunam 123', 'ra', 'Terbaca', '2021-04-22'),
(5, 'kiki', 'kiki@gmail.com', 'tees kiki', 'tes kiki @123', 'Terbaca', '2021-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `data_visi_misi`
--

CREATE TABLE `data_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` varchar(1000) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_visi_misi`
--

INSERT INTO `data_visi_misi` (`id`, `visi_misi`, `status`) VALUES
(2, '1.visi pertama', 'Visi'),
(3, '1.misi pertama', 'Misi'),
(4, '3.persekutuan', 'Visi');

-- --------------------------------------------------------

--
-- Table structure for table `exp_team`
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
-- Dumping data for table `exp_team`
--

INSERT INTO `exp_team` (`id`, `nama`, `posisi`, `biografi`, `foto`, `waktu`, `updated_at`, `created_at`) VALUES
(2, 'Rama Andika J', 'Ketua Umum', '<p>INI BIOGRAFI KU</p>', '1619018444.jpg', '2021-04-10', '2021-04-21 15:20:44', '2021-04-21 15:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_about`
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
-- Dumping data for table `post_about`
--

INSERT INTO `post_about` (`id`, `judul_about`, `isi`, `gambar`, `waktu`, `bahasa`, `updated_at`, `created_at`) VALUES
(1, 'PT.NOOR SURYA SEMBADA INDONESIA 1', '<h3><strong>Bergerak dalam bidang panel</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Untung Rugi Energi Ramah Lingkungan Panel Surya - YouTube\" src=\"https://i.ytimg.com/vi/wo3_7dD1HLQ/maxresdefault.jpg\" style=\"height:140px; width:249px\" /></p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>1. Fokus pada keterampilan dan prestasi yang dimiliki</strong></h3>\r\n\r\n<p>Ada hal pertama yang tidak boleh dilupakan saat membuat deskripsi diri yaitu mencantumkan keterampilan dan prestasi.</p>\r\n\r\n<p>Menurut&nbsp;<a href=\"https://www.thebalancecareers.com/how-to-write-job-descriptions-for-your-resume-2063182\" target=\"_blank\">The Balance Career</a>, pernyataan yang dibuat dalam deskripsi diri harus memberikan dampak, tapi juga tetap dibuat singkat.</p>\r\n\r\n<p>Agar tetap ringkas, kamu tidak perlu menuliskan semua keterampilan atau prestasi yang dimiliki.</p>\r\n\r\n<p>Cukup pilih keterampilan yang paling dikuasai dan prestasi yang paling membanggakan.</p>\r\n\r\n<p>Usahakan membuat deskripsi diri yang singkat dan padat akan informasi.</p>\r\n\r\n<p>Pasalnya, dalam CV masih ada bagian lain yang juga perlu dicantumkan.</p>\r\n\r\n<p>Jangan lupa juga untuk membuat kalimat dengan kata yang bermakna positif untuk menggambarkan dirimu, ya.</p>\r\n\r\n<h3><strong>2. Lebih selektif dalam memberikan informasi</strong></h3>\r\n\r\n<p>Dalam menulis CV kamu tidak perlu menuliskan semua riwayat pekerjaan yang pernah dilalui, apalagi menuliskan semua&nbsp;<em>job description</em>&nbsp;tiap jabatan.</p>\r\n\r\n<p>Dalam deskripsi diri, kamu bisa menuliskan apa saja informasi yang relevan sesuai info pekerjaan yang sedang dilamar.</p>\r\n\r\n<p>Jadi, mengetahui lebih dahulu apa saja keterampilan yang sesuai dengan lamaran&nbsp;akan sangat menguntungkan.</p>\r\n\r\n<p>Hindari juga menjelaskan dengan kata-kata yang kaku.</p>\r\n\r\n<p>Misalnya, &ldquo;Menanggapi email pelanggan&rdquo; atau &ldquo;Menjawab telepon pelanggan.&rdquo; bisa diganti menjadi&nbsp;&ldquo;Menyelesaikan masalah yang dialami oleh pelanggan melalui percakapan telepon dan email.&rdquo;</p>\r\n\r\n<h3><strong>3. Gunakan angka dan simbol</strong></h3>\r\n\r\n<p>Salah satu tips yang perlu kamu perhatikan untuk menulis deskripsi diri yaitu mencantumkan angka dan simbol.</p>\r\n\r\n<p>Penggunaan angka atau simbol seperti akan lebih mudah dibaca oleh rekruter.</p>\r\n\r\n<p>Hal ini untuk membuat deskripsi dirimu lebih menarik, detail, dan menjelaskan.</p>\r\n\r\n<p>Misalnya, kalimat seperti &ldquo;Berhasil menaikkan&nbsp;<em>traffic&nbsp;</em>setiap bulan.&rdquo; bisa menjadi&nbsp;&ldquo;Berhasil menaikkan&nbsp;<em>traffic</em>&nbsp;hingga 35% setiap bulan.&rdquo;</p>\r\n\r\n<p>Bahkan, untuk pekerjaan pramusaji pun kamu bisa menuliskannya dengan angka agar lebih terlihat mengagumkan.</p>\r\n\r\n<p>Jadi, saat menulis contoh deskripsi diri dalam CV cobalah menuliskannya dengan menggunakan angka untuk menjelaskan pencapaianmu. Hal itu pasti akan membuat CV-mu lebih dilirik oleh&nbsp;rekruter.</p>\r\n\r\n<h3><strong>4. Tekankan pencapaian</strong></h3>\r\n\r\n<p>Dalam menulis deskripsi diri dalam CV, penjelasan mengenai tanggung jawab dalam pekerjaan sebelumnya memang diperlukan.</p>\r\n\r\n<p>Namun<em>,&nbsp;</em>rekruter&nbsp;akan lebih tertarik jika kamu menjelaskan mengenai apa saja pencapaian yang telah diraih di pekerjaan sebelumnya.</p>\r\n\r\n<p>Apalagi, jika pencapaian tersebut memang cukup relevan dengan posisi pekerjaan yang sedang dilamar. Dijamin CV-mu akan menjadi salah satu kandidat utama.</p>\r\n\r\n<p>Seperti yang disebutkan sebelumnya, sisipkan juga penggunaan angka dan data agar lebih menarik dibaca ya.</p>\r\n\r\n<p>Misalnya, &ldquo;Mampu meningkatkan penjualan sebesar 5% dalam setahun&rdquo; atau &ldquo;Berhasil menambah&nbsp;<em>followers</em>&nbsp;hingga 30% dalam 12 bulan.&rdquo;</p>\r\n\r\n<p>Pencapaian yang dijelaskan dengan angka akan lebih terlihat akurat dan menonjol. Jadi saat menuliskan deskripsi diri jangan lupa untuk menerapkannya ya.</p>\r\n\r\n<p>&nbsp;</p>', '1619081222.png', '2021-04-13', 'Indonesia', '2021-04-04 18:12:46', '2021-04-04 18:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `post_album`
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
-- Dumping data for table `post_album`
--

INSERT INTO `post_album` (`id`, `judul_album`, `foto_album`, `status`, `updated_at`, `created_at`) VALUES
(1, 'kunam', '1617561493.png', 'Tampilkan', '2021-04-04 18:38:13', '2021-04-04 18:38:13'),
(4, 'Album januarin 2022', '1618761465.jpg', 'Tampilkan', '2021-04-18 15:57:45', '2021-04-18 15:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `post_project`
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
-- Dumping data for table `post_project`
--

INSERT INTO `post_project` (`id`, `judul_project`, `isi`, `waktu`, `bahasa`, `foto`, `status`, `updated_at`, `created_at`) VALUES
(6, 'Project Tahun 2022-part1-part2-part3', '<p>update 1 -2 -3</p>', '2021-04-29', 'Indonesia', '1619023775.jpg', 'Tampilkan', '2021-04-13 08:48:14', '2021-04-13 08:48:14'),
(7, 'Project Tahun 2022-part10', '<p>update 1mkkkkmk</p>', '2021-04-23', 'Indonesia', '1619024004.jpg', 'Sembunyikan', '2021-04-13 08:59:26', '2021-04-13 08:59:26'),
(8, 'Project Tahun 2022-part1', '<p>update 1</p>', '2021-04-24', 'Indonesia', '1619023648.jpg', 'Tampilkan', '2021-04-13 08:59:42', '2021-04-13 08:59:42');

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
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rama Andika Jorgie', 'noor@gmail.com', NULL, '$2y$10$x..nztfVJm.1Ls2vdk0OHuRB20uuL37mysf8RwNvoriVyPQG.bgYu', 'Super Admin', '1619088844.jpg', 'r7v3B5Lpwvtw05lO8Lgpfk1wvqtUUu0LG60RUeIiMVeFLlphrvUlltg7aHzg', '2021-04-10 20:59:42', '2021-04-10 20:59:42'),
(4, 'Rama S.Kom', 'ramaandikajorgie@gmail.com', NULL, '$2y$10$vqZ1IaKcgIFi1/7FCEih1e2afHJMQKNhmIWFvHrNfWK/gbp09sQyu', 'Admin', '1619080158.jpg', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_visi_misi`
--
ALTER TABLE `data_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp_team`
--
ALTER TABLE `exp_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `post_about`
--
ALTER TABLE `post_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_album`
--
ALTER TABLE `post_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_project`
--
ALTER TABLE `post_project`
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
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_visi_misi`
--
ALTER TABLE `data_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exp_team`
--
ALTER TABLE `exp_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_about`
--
ALTER TABLE `post_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_album`
--
ALTER TABLE `post_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_project`
--
ALTER TABLE `post_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
