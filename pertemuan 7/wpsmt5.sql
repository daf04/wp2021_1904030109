-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 01:22 PM
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
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'Jason Ranti', 'Kemang', 'Laki Laki', 'Islam', 'SMA 80 Kemang', 'jasonranti.jpg'),
(2, 'Danilla Riyadi', 'Sukabumi', 'Perempuan', 'Islam', 'SMK Tadika Mesra', 'danilla.jpg'),
(3, 'Aldrich Daffa Zalfansyah', 'Kosambi', 'Laki Laki', 'Islam', 'SMA 5 Kab Tangerang', 'pria.png'),
(4, 'Dimas Nur Prasetyo', 'Curug', 'Laki Laki', 'Islam', 'SMK Bhipuri', 'pria.png'),
(5, 'Wahyu Syahril', 'Green Lake City', 'Laki Laki', 'Islam', 'SMK Sasmita Jaya', 'pria.png'),
(6, 'Dzawin Nur Ikram', 'Bogor', 'Laki Laki', 'Islam', 'SMA 10 Bogor', 'pria.png'),
(7, 'Eki Sumeki', 'Bandung', 'Laki Laki', 'Islam', 'SMK 9 Bandung', 'pria.png'),
(8, 'Berli Kobe', 'Meruya', 'Laki Laki', 'Islam', 'SMK Tadika Mesra', 'pria.png'),
(9, 'Putri Wulandari', 'Tangerang', 'Perempuan', 'Islam', 'SMK Yadika 10', 'wanita.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
