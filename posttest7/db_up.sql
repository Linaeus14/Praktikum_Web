-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 02:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_up`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sta` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `pass`, `email`, `sta`) VALUES
(1, 'admin', '$2y$10$B51KOGL5ZHqDiFTnKDOjMOPNlAF1HeFw3o68aaxAMXct3RAMpsZd.', '-', 'admin'),
(2, 'user1', '$2y$10$gpKC3QLz/SbM55SCVAzIk.2z0EoqukEaNgyZnhhb9SrQcj1uYYRJ.', 'titoblack098@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(4) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `tanggal_up` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `tanggal_up`) VALUES
(41, '20221107_114508.jpg', '11/11/2022'),
(42, '1040264.png', '11/11/2022'),
(43, 'IMG_20221110_112357.jpg', '11/11/2022');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(4) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `sinopsis` text NOT NULL,
  `cerita` longtext NOT NULL,
  `file_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `judul`, `penulis`, `sinopsis`, `cerita`, `file_id`) VALUES
(53, 'Apel', 'me', 'aa a a a a a a a a a a a aaaaaaaaaaaa  a a a aaa', 'aa a a a a a a a a a a a aaaaaaaaaaaa  a a a aaa a a a a aaaaa', 41),
(54, 'Orange', 'me', 'bbbbbbbb bbbbbbbbbbb bbbbbbbb bbbbbbb bbbbbbbbb bbbbbbbbb', 'bbbbbbbb bbbbbbbbbbb bbbbbbbb bbbbbbb bbbbbbbbb bbbbbbbbb', 42),
(55, 'Not Wise With The Existence', 'Nae', 'Saat sendiri, manusia akan mulai berpikir lebih banyak. \r\n                Cendrung mengabaikan hal disekitar, yang tidak terjangkau oleh tangan. \r\n                Untuk diriku, melihat ke arah dunia menjadi kebiasaanku. \r\n                Warna langit, awan yang terus bergerak, cahaya yang masuk ke mata.\r\n                \"Ahh, indahnya dunia\". \r\n                Tetapi bagaimana didalamnya? Kebanyakan orang sudah tau dengan phrasa \"Jangan nilai sesuatu dari sampulnya\". \r\n                Penipuan, konflik, penindasan, tidakkah itu indah? \r\n                Pengalaman diri terhadap kehidupan, umur, waktu, Kau akan melihat dunia untuk kedua kalinya.\r\n                Jadi, saat ada yang bertanya \"Bukankah dunia begitu indah?\". Bagaimana kau akan menjawabnya?. ', 'Saat sendiri, manusia akan mulai berpikir lebih banyak. \r\n                Cendrung mengabaikan hal disekitar, yang tidak terjangkau oleh tangan. \r\n                Untuk diriku, melihat ke arah dunia menjadi kebiasaanku. \r\n                Warna langit, awan yang terus bergerak, cahaya yang masuk ke mata.\r\n                \"Ahh, indahnya dunia\". \r\n                Tetapi bagaimana didalamnya? Kebanyakan orang sudah tau dengan phrasa \"Jangan nilai sesuatu dari sampulnya\". \r\n                Penipuan, konflik, penindasan, tidakkah itu indah? \r\n                Pengalaman diri terhadap kehidupan, umur, waktu, Kau akan melihat dunia untuk kedua kalinya.\r\n                Jadi, saat ada yang bertanya \"Bukankah dunia begitu indah?\". Bagaimana kau akan menjawabnya?. ', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_id` (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `story_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
