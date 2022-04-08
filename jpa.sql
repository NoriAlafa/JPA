-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 04:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `slug` text NOT NULL,
  `pre-content` varchar(50) NOT NULL,
  `penjelasan` text NOT NULL,
  `content` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id_blog`, `judul`, `slug`, `pre-content`, `penjelasan`, `content`, `img`, `created_at`, `updated_at`) VALUES
(1, 'HIRAGANA', 'alfa-hiragana', 'Alfabet dasar bahasa jepang', 'O-negai shimasu. Please. Tolong<br/> \nおねがいします。<br/> <br/>   \nArigatō. Thank you. Terima kasih.<br/> \n ありがとう。<br/> <br/> \nDōitashimashite. You’re welcome. Sama-sama<br/> \nどういたしまして。<br/> <br/>   \nSumimasen. Excuse me. Permisi.<br/>  \nすみません<br/> <br/>   \nGomennasai. I am sorry. Saya minta maaf.<br/>  \nごめんなさい<br/> <br/>   \nOhayō gozaimasu. Good morning. Selamat pagi.<br/>  \nおはようございます<br/> <br/>   \nKonbanwa. Good evening. Selamat malam.<br/>  \nこんばんは。', 'Bahasa Jepang memiliki tiga jenis huruf: Hiragana, Katakana dan Kanji.Hiragana dan Katakana merupakan simbol fonetik, setiap hurufnya mewakili penyebutan satu suku kata.Sedangkan Kanji adalah ideogram, yang dipakai untuk menggambarkan makna dari setiap ujaran.', '', '2022-04-04 13:27:20', '2022-04-04 13:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access` enum('user','admin') NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `access`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Alfa', '$2y$10$yZtd9vWshbR/IOJzfr7zq.9kO29U55wGAjyFvfeVsd0sm6uzQdfny', 'admin', 'alafanori@gmail.com', '2022-04-05 02:02:14', '2022-04-05 02:02:14'),
(3, 'baba', '$2y$10$z3lW0TLnzN/MVZueOLCgVu9U/i/s/vIBj8EW6HG23jWGHLai0Ab/a', 'user', 'baba@gmail.com', '2022-04-05 02:21:48', '2022-04-05 02:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
