-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 08, 2023 at 03:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `skincare`
--

CREATE TABLE `skincare` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fungsi` varchar(300) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skincare`
--

INSERT INTO `skincare` (`id`, `nama`, `fungsi`, `harga`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Wardah Hydrating Aloe Vera Gel', 'Melembapkan dan memberikan efek tenang pada wajah.', 'Rp 35.000', 'images/E0GGGsrHSEzmzXE33P0tx2tveM9mEXvzTkWZP0iF.webp', NULL, NULL),
(2, 'Skin Aqua Moisture Milk', 'Melindungi dari paparan sinar matahari, menutrisi kulit.', 'Rp. 60.000', 'images/eT2KRom8ELIMkMrdEmG0u9foxpuB0VMYT8OBw8Kk.webp', NULL, NULL),
(5, 'Garnier Serum Hydra Bomb Pomegranate', 'Membuat kulit terasa lebih kenyal, menyamarkan garis halus.', 'Rp 18.000', 'images/FjVJ4kvmKrfVjNTkLuRdtID57rItdTMDgzYxrMrm.jpg', NULL, NULL),
(6, 'Vaseline Petroleum Jelly', 'Melembabkan kulit, mengatasi bibir kering, menyamarkan garis halus, menyembuhkan luka gores kecil, kulit mengelupas, dan luka bakar.', 'Rp 37.000', 'images/jORNME6C3iz35Px5Cle9nA6pmOHch70QojhyGBnu.jpg', NULL, NULL),
(7, 'Emina Creamy Milk Cleansing', 'Mengangkat kotoran sisa makeup tanpa membuat wajah terasa kering', 'Rp 23.000', 'images/4EN7duylBiLB9S0S8BqPyYVe9KdO6D2VuinKxNo5.jpg', NULL, NULL),
(8, 'Hada Labo Gokujyun Facial Wash', 'Membersihkan wajah secara menyeluruh tanpa membuat kulit terasa kering dan kencang', 'Rp 35.000', 'images/4OtkMZUFH5vRJllfgk1q7YHStqerUNq9ksUOSrY9.jpg', NULL, NULL),
(9, 'Pixy Fresh Brightening Toner', 'Membersihkan sisa kotoran yang masih tertinggal di wajah, membuat kulit lebih cerah dan lembab', 'Rp 20.000', 'images/ooChs0fmrrnfDcrm617cK1NU2x5sRU2zNR78nfWe.jpg', NULL, NULL),
(10, 'Acnes UV Tint SPF 35 PA++', 'Membantu melindungi kulit dari sinar UV', 'Rp 46.800', 'images/Kt2rAM9qxKO4cvDej9bFnzcmU3Sfg9P0pxOTqC5M.jpg', NULL, NULL),
(11, 'Avoskin Yout Skin Bae Glow Concentrate Tratment', 'Menghidrasi kulit, mengatasi kulit iritasi, mengatasi kulit kering mengelupas', 'Rp 95.000', 'images/99MDwIQHkyylWlTJ3LCHAwzt6MZegH6II7fyC63Z.jpg', NULL, NULL),
(12, 'Somethinc Ceramic Skin Saviour Moisturizer Gel', 'Memlembabkan kulit yang kering, mencerahkan kulit, mencegah penuaan dini.', 'Rp 299.000', 'images/cgZhxXVmepznxVDpiDJO9HvFh4aqlNLLYZRv5yir.jpg', NULL, NULL),
(13, 'Emina Sun protection SPF 30 PA+++', 'Melindungi kulit dari sinar UV, memberikan efek calming pada kulit, melembabkan, menutrisi kulit dari dalam', 'Rp 30.000', 'images/re0iyYrDilw8NLSxdIG9drU4QDcEbW1Xpdu4VFgF.jpg', NULL, NULL),
(14, 'Erha 21 8 Moisturizer for Very Dry Skin', 'melembabkan, mencegah munculnya tanda-tanda penuaan, membuat wajah tampak lebih cerah', 'Rp 94.000', 'images/K0xxNHulZo7KjAjFcpqA3dAIaLJPYIUZgF5WDKtU.jpg', NULL, NULL),
(15, 'Senka Perfect White Clay', 'Memberihkan kotoran di wajah hingga ke pori-pori, melembabkan, mencerahkan kulit wajah', 'Rp 77.000', 'images/3mL6ofZnF98y3cCEX98H8WJJ6GXjt70QK5A5PMZT.jpg', NULL, NULL),
(16, 'The Body Shop Vitamin E Gentle Face Wash', 'Memberikan efek segar pada kulit', 'Rp 169.000', 'images/Y8n4FZ8PDYmkT1KOjBP3lYwU0z0iolkcgHZr7hfn.jpg', NULL, NULL),
(17, 'Whitelab Cera-Mug Barrier Moisturizing Gel', 'Melembabkan, merawat, menutrisi kulit agar lebih sehat, menyamarkan tanda-tanda penuaan dini, membuat kulit tampak lebih halus', 'Rp 162.000', 'images/9U8GRPLYndMiThBOZcHMNb0nTyAX7epWpz87nMFJ.jpg', NULL, NULL),
(20, 'Rangkaian Wardah Hydra Rose', 'Melembabkan kulit yang kering, mencerahkan wajah.', 'Rp 50.000', 'images/1MD9upymH7HO4Xu4X1lQ6FQspO918r47RgBFAxPC.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(4, 'Delphia', 'delphiaaryana@gmail.com', '$2y$10$j/34SgHz9HTXxEc4kyBxzOn4EKpvLj6zD7NU4baq5fGPjpGDRPr.K', 1, NULL, NULL),
(5, 'Adel Delepipipi', 'delepipipi@gmail.com', '$2y$10$M42AalvSUGOTOqN6HkhrEOTht8FI5075vdR3ya/pmZXaFKEymAIQi', 0, NULL, NULL),
(18, 'evi delphia', 'eviiii@gmail.com', 'evi250803', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skincare`
--
ALTER TABLE `skincare`
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
-- AUTO_INCREMENT for table `skincare`
--
ALTER TABLE `skincare`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
