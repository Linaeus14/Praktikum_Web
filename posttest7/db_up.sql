-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 11:13 AM
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
(33, '9S.jpg', '31/10/2022'),
(35, '9So.jpg', '01/11/2022'),
(36, 'Osame2.jpg', '02/11/2022'),
(37, 'shuten1_16_9.jpg', '02/11/2022'),
(38, 'shuten1.jpg', '02/11/2022'),
(39, 'mash1.jpg', '02/11/2022'),
(40, 'Florance1.jpg', '02/11/2022');

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
(45, 'Aku yang sedang menunggu', 'Lnn', 'Saat sendiri, manusia akan mulai berpikir lebih banyak. Cendrung mengabaikan hal disekitar, yang tidak terjangkau oleh tangan. Untuk diriku, melihat ke arah dunia menjadi kebiasaanku. Warna langit, awan yang terus bergerak, cahaya yang masuk ke mata. \"Ahh, indahnya dunia\". Tetapi bagaimana didalamnya? Kebanyakan orang sudah tau dengan phrasa \"Jangan nilai sesuatu dari sampulnya\". Penipuan, konflik, penindasan, tidakkah itu indah? Pengalaman diri terhadap kehidupan, umur, waktu, Kau akan melihat dunia untuk kedua kalinya. Jadi, saat ada yang bertanya \"Bukankah dunia begitu indah?\". Bagaimana kau akan menjawabnya?', 'Saat sendiri, manusia akan mulai berpikir lebih banyak. Cendrung mengabaikan hal disekitar, yang tidak terjangkau oleh tangan. Untuk diriku, melihat ke arah dunia menjadi kebiasaanku. Warna langit, awan yang terus bergerak, cahaya yang masuk ke mata. \"Ahh, indahnya dunia\". Tetapi bagaimana didalamnya? Kebanyakan orang sudah tau dengan phrasa \"Jangan nilai sesuatu dari sampulnya\". Penipuan, konflik, penindasan, tidakkah itu indah? Pengalaman diri terhadap kehidupan, umur, waktu, Kau akan melihat dunia untuk kedua kalinya. Jadi, saat ada yang bertanya \"Bukankah dunia begitu indah?\". Bagaimana kau akan menjawabnya?\r\n\r\nAbc', 33),
(47, 'Apel', 'me', 'Saat sendiri, manusia akan mulai berpikir lebih banyak. Cendrung mengabaikan hal disekitar, yang tidak terjangkau oleh tangan. Untuk diriku, melihat ke arah dunia menjadi kebiasaanku. Warna langit, awan yang terus bergerak, cahaya yang masuk ke mata. \"Ahh, indahnya dunia\". Tetapi bagaimana didalamnya? Kebanyakan orang sudah tau dengan phrasa \"Jangan nilai sesuatu dari sampulnya\". Penipuan, konflik, penindasan, tidakkah itu indah? Pengalaman diri terhadap kehidupan, umur, waktu, Kau akan melihat dunia untuk kedua kalinya. Jadi, saat ada yang bertanya \"Bukankah dunia begitu indah?\". Bagaimana kau akan menjawabnya?', 'Saat sendiri, manusia akan mulai berpikir lebih banyak. Cendrung mengabaikan hal disekitar, yang tidak terjangkau oleh tangan. Untuk diriku, melihat ke arah dunia menjadi kebiasaanku. Warna langit, awan yang terus bergerak, cahaya yang masuk ke mata. \"Ahh, indahnya dunia\". Tetapi bagaimana didalamnya? Kebanyakan orang sudah tau dengan phrasa \"Jangan nilai sesuatu dari sampulnya\". Penipuan, konflik, penindasan, tidakkah itu indah? Pengalaman diri terhadap kehidupan, umur, waktu, Kau akan melihat dunia untuk kedua kalinya. Jadi, saat ada yang bertanya \"Bukankah dunia begitu indah?\". Bagaimana kau akan menjawabnya?', 35),
(48, '12312', 'me2', 'aa', 'aa', 36),
(49, 'dasdadasdsa', 'dasda', 'asbab', 'fasfas', 37),
(50, 'adasdadw', 'hreht', 'adsad', 'hrtrhr', 38),
(51, 'dasdsahw', 'asda', 'fdh', 'asdfas', 39),
(52, 'adsa', 'dassdasfasfasf', 'dadsa', 'afasf', 40);

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
