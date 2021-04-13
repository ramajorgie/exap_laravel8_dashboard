-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 01:35 PM
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
  `waktu` varchar(100) NOT NULL,
  `bahasa` text NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_about`
--

INSERT INTO `post_about` (`id`, `judul_about`, `isi`, `waktu`, `bahasa`, `updated_at`, `created_at`) VALUES
(1, 'rama', '<p><strong>dadadjjoiadjoij</strong></p>', '2021-04-04', 'Indonesia', '2021-04-04 18:12:46', '2021-04-04 18:12:46'),
(2, 'dada', '<p>dadadasda</p>', '2021-04-04', 'Indonesia', '2021-04-04 18:14:39', '2021-04-04 18:14:39');

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
(1, 'kunam', '1617561493.png', 'Tampilkan', '2021-04-04 18:38:13', '2021-04-04 18:38:13');

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
(6, 'Project Tahun 2021', '<p>KOMPAS.com - Artikel merupakan salah satu jenis karya tulis. Teks artikel ada yang berisikan persuasi atau berbagai informasi tambahan untuk pembaca. Teks artikel biasanya ditulis secara singkat, padat dan jelas agar pembaca lebih mudah mengerti. Tidak hanya itu, biasanya dalam artikel ada opini yang turut didukung dengan fakta. Selain itu, artikel juga bersifat faktual dan informatif. Artinya sesuai dengan fakta di lapangan serta untuk memberi informasi atau pengetahuan kepada pembaca. Mengutip dari&nbsp;Buku Cepat Menguasai Soal Bahasa Indonesia SMA dan MA&nbsp;(2019) karya Tomi Rianto, teks artikel memiliki tiga struktur, yaitu: Tesis Tesis adalah gagasan utama dari permasalahan yang akan dibahas. Tesis berangkat dari fakta yang ada. Argumentasi Argumentasi adalah pendapat yang disampaikan penulis yang juga harus disesuaikan dengan fakta. Penegasan ulang Penegasan ulang adalah bentuk penjelasan ulang untuk memperkuat argumentasi yang dibuat penulis dan harus sesuai dengan fakta. Bagaimana contoh teks artikel beserta strukturnya? Contoh 1: Pentingnya melakukan Peregangan Sebelum Olahraga Peregangan sebelum berolahraga sangatlah penting. Tujuannya untuk menghindari cedera serius dan ketegangan pada tubuh. Melakukan peregangan sebelum berolahraga memang memiliki banyak manfaat yang sangat baik untuk kesehatan tubuh. Para ahli menyarankan jika sebaiknya peregangan dilakukan saat pagi hari, tepatnya sebelum memulai aktivitas fisik. Bentuk peregangan yang paling mudah dan menyehatkan adalah berlari. Para ahli mengatakan jika berlari membawa dampak positif bagi orang yang melakukannya. Berlari dapat melatih&nbsp;kekuatan dan kesehatan otot jantung. Baca juga: Teks Artikel: Pengertian, Ciri-ciri, Jenis, Struktur, dan Kebahasaan &nbsp; Bentuk peregangan mudah lainnya adalah dengan memutar kepala, tangan, pundak dan kaki searah jarum jam. Peregangan ini sangat mudah untuk dilakukan di mana saja tanpa perlu mengeluarkan biaya untuk melakukannya. Contoh bentuk peregangan lainnya adalah dengan melakukan squat. Squat dapat melatih banyak fungsi tubuh dalam satu gerakan serta melatih kekuatan sendi serta ligamen dalam tubuh. Maka disarankan untuk tidak lupa melakukan peregangan sebelum berolahraga agar tubuh tetap sehat dan tidak mengalami cedera.&nbsp; Tesis:&nbsp; Dalam contoh di atas, tesis berada di paragraf pertama karena gagasan utama dari permasalahan yang dibahas adalah dampak negatif jika tidak melakukan peregangan.&nbsp; Argumentasi:&nbsp; Dalam contoh di atas, argumentasi berada di paragraf ketiga karena penulis menyampaikan pendapat jika berlari merupakan olahraga yang paling mudah dan menyehatkan. Pendapat dari penulis ini dibuktikan dengan perkataan dari para ahli. Penegasan ulang:&nbsp; Dalam contoh di atas, penegasan ulang berada di paragraf terakhir karena penulis ingin mengingatkan agar pembaca melakukan pemanasan sebelum berolahraga. Contoh 2: Mengapa masih suka buang sampah sembarangan? Tiap tahunnya jumlah sampah atau limbah di Indonesia terus meningkat. Contohnya adalah limbah medis yang terus meningkat selama pandemi ini. Membuang sampah sembarangan tidak hanya berdampak buruk untuk keindahan dan kebersihan lingkungan, namun juga berdampak buruk untuk kesehatan tubuh. Contohnya lingkungan menjadi lebih terlihat kumuh dan tubuh menjadi lebih rentan terkena penyakit menular. Tampaknya masyarakat Indonesia masih suka membuang sampah sembarangan karena beranggapan akan ada orang yang membersihkan sisa sampah miliknya. Seorang sosiolog dari Universitas Sebelas Maret (UNS) Surakarta, Drajat Tri Kartono mengatakan jika masyarakat Indonesia cenderung menganggap jika sampah yang dibuangnya secara sembarangan, bukan tanggung jawabnya karena ada orang yang bertugas untuk membersihkannya. Salah satu cara untuk menghilangkan kebiasaan membuang sampah sembarangan adalah dengan membiasakan diri untuk bertanggung jawab dan membiasakan diri untuk membuang sampah pada tempatnya. Baca juga: Argumentasi dalam Debat Maka dari itu, ayo biasakan diri sendiri untuk selalu membuang sampah pada tempatnya. Jika ingin lingkungan sekitar kita tetap bersih dan indah serta kesehatan tubuh tetap terjaga.&nbsp; Tesis:&nbsp; Dalam contoh di atas, tesis berada di paragraf pertama dan kedua. Karena gagasan utama dari permasalahan yang dibahas adalah tentang membuang sampah serta dampak buruknya untuk lingkungan dan kesehatan. Argumentasi:&nbsp; Dalam contoh di atas, argumentasi berada di paragraf ketiga. Karena penulis berpendapat jika masyarakat suka membuang sampah sembarangan karena beranggapan jika ada orang yang akan membersihkannya. Argumentasi dari penulis ini disertai dengan pendapat dari sosiolog tersebut. Penegasan ulang:&nbsp; Dalam contoh di atas, penegasan ulang berada di paragraf terakhir, yakni penulis ingin mengingatkan pembaca untuk selalu membuang sampah pada tempat yang telah tersedia.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"https://www.kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Contoh Teks Artikel dan Strukturnya&quot;, Klik untuk baca:&nbsp;<a href=\"https://www.kompas.com/skola/read/2021/01/28/140503769/contoh-teks-artikel-dan-strukturnya?page=all\">https://www.kompas.com/skola/read/2021/01/28/140503769/contoh-teks-artikel-dan-strukturnya?page=all</a>.<br />\r\nPenulis : Vanya Karunia Mulia Putri<br />\r\nEditor : Nibras Nada Nailufar<br />\r\n<br />\r\nDownload aplikasi&nbsp;<a href=\"https://www.kompas.com/\">Kompas.com</a>&nbsp;untuk akses berita lebih mudah dan cepat:<br />\r\nAndroid:&nbsp;<a href=\"https://bit.ly/3g85pkA\">https://bit.ly/3g85pkA</a><br />\r\niOS:&nbsp;<a href=\"https://apple.co/3hXWJ0L\">https://apple.co/3hXWJ0L</a></p>', '2021-04-29', 'Indonesia', '1618303694.jpg', 'Sembunyikan', '2021-04-13 08:48:14', '2021-04-13 08:48:14'),
(7, 'Project Tahun 2022', '<p>contoh</p>', '2021-04-23', 'Indonesia', '1618304366.png', 'Sembunyikan', '2021-04-13 08:59:26', '2021-04-13 08:59:26'),
(8, 'Project Tahun 2023', '<p>dakjdoajdioajdi</p>', '2021-04-24', 'Indonesia', '1618304382.jpg', 'Tampilkan', '2021-04-13 08:59:42', '2021-04-13 08:59:42');

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
(1, 'admin', 'noor@gmail.com', NULL, '$2y$10$x..nztfVJm.1Ls2vdk0OHuRB20uuL37mysf8RwNvoriVyPQG.bgYu', '5x8bEI6ea3txhmYLjsuqZQDyJm5iEJhEv1pz6gN5Yuz2tdzh8B', '2021-04-10 20:59:42', '2021-04-10 20:59:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_project`
--
ALTER TABLE `post_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
