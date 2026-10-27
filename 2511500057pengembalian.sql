-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2026 at 11:22 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwbo_2511500057`
--

-- --------------------------------------------------------

--
-- Table structure for table `2511500057pengembalian`
--

CREATE TABLE `2511500057pengembalian` (
  `Kd_Kembali057` varchar(5) NOT NULL,
  `NimMhs057` varchar(10) NOT NULL,
  `NmMhs057` varchar(30) NOT NULL,
  `NmBuku057` varchar(20) NOT NULL,
  `JumBuku057` int NOT NULL,
  `TglKembali057` date NOT NULL,
  `Denda057` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2511500057pengembalian`
--

INSERT INTO `2511500057pengembalian` (`Kd_Kembali057`, `NimMhs057`, `NmMhs057`, `NmBuku057`, `JumBuku057`, `TglKembali057`, `Denda057`) VALUES
('1', '2511500057', 'Steven Marcelino', 'Seporsi Mie Ayam', 8, '2026-10-27', 55),
('2', '2511500098', 'ZAKI', 'AYAM', 8, '2026-10-27', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2511500057pengembalian`
--
ALTER TABLE `2511500057pengembalian`
  ADD PRIMARY KEY (`Kd_Kembali057`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
