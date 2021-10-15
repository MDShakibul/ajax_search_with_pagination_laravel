-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 02:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `address`) VALUES
(1, 'shakib', 'khulna'),
(2, 'shakib', 'daulatpur'),
(3, 'shakib', 'rupsha'),
(4, 'shakib', 'moylapota'),
(5, 'shakib', 'sonadanga'),
(6, 'rahul', 'khulna'),
(7, 'rahul', 'daulatpur'),
(8, 'rahul', 'rupsha'),
(9, 'rahul', 'moylapota'),
(10, 'rahul', 'sonadanga'),
(11, 'rakib', 'khulna'),
(12, 'rakib', 'daulatpur'),
(13, 'rakib', 'rupsha'),
(14, 'rakib', 'moylapota'),
(15, 'rakib', 'sonadanga'),
(16, 'pranto dada', 'khulna'),
(17, 'pranto dada', 'daulatpur'),
(18, 'pranto dada', 'rupsha'),
(19, 'pranto dada', 'moylapota'),
(20, 'pranto dada', 'sonadanga'),
(21, 'shipon dada', 'khulna'),
(22, 'shipon dada', 'daulatpur'),
(23, 'shipon dada', 'rupsha'),
(24, 'shipon dada', 'moylapota'),
(25, 'shipon dada', 'sonadanga'),
(26, 'shakib', 'shibbari area'),
(27, 'shakib', 'Religate'),
(28, 'shakib', 'Fulbarigate'),
(29, 'shakib', 'KMC'),
(30, 'Shakib', 'Boyra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
