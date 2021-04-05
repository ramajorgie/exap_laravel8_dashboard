-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 06:20 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

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
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_project`
--

INSERT INTO `post_project` (`id`, `judul_project`, `isi`, `waktu`, `bahasa`, `foto`, `updated_at`, `created_at`) VALUES
(4, 'project 1', '<p>project 2</p>', '2021-04-30', 'Indonesia', '1617558827.jpg', '2021-04-04 17:53:47', '2021-04-04 17:53:47'),
(5, 'dasdad', '<p>dasdas</p>', '2021-04-30', 'Indonesia', '1617558930.jpg', '2021-04-04 17:55:30', '2021-04-04 17:55:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
