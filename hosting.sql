-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 03:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `id_domain` int(10) UNSIGNED NOT NULL,
  `nama_domain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`id_domain`, `nama_domain`) VALUES
(11, 'newdomain123'),
(19, 'newdomain12');

-- --------------------------------------------------------

--
-- Table structure for table `hosting`
--

CREATE TABLE `hosting` (
  `id_hosting` int(10) UNSIGNED NOT NULL,
  `nama_hosting` varchar(25) DEFAULT NULL,
  `has_cpanel` char(1) DEFAULT NULL,
  `has_ssl` char(1) DEFAULT NULL,
  `has_subdomain` char(1) DEFAULT NULL,
  `has_storage` int(10) UNSIGNED DEFAULT NULL,
  `num_database` int(10) UNSIGNED DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hosting`
--

INSERT INTO `hosting` (`id_hosting`, `nama_hosting`, `has_cpanel`, `has_ssl`, `has_subdomain`, `has_storage`, `num_database`, `harga`) VALUES
(1, 'Free Plan', 'n', 'y', '0', 500, 3, 0),
(2, 'Lite Plan', 'y', 'y', '3', 1500, 5, 25000),
(3, 'Premium Plan', 'y', 'y', '5', 5000, 10, 75000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id_domain`);

--
-- Indexes for table `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`id_hosting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `id_domain` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hosting`
--
ALTER TABLE `hosting`
  MODIFY `id_hosting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
