-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 05:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storemovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'alex', '$2y$10$PHCOK1f.OQp/23qIEDmcJ.JG9jgyPLnmGazmLoEFdR/ozZX09TBem', '2020-02-01 15:38:02'),
(2, 'amina', '$2y$10$NRNW8ZQqg0USbUXwR7z/NuYiztM6SuxnayafrpNSB92ZXJzYXSUnS', '2020-02-01 17:27:09'),
(3, 'Shirley', '$2y$10$/oW14M/63LD7ekcwZaC9Ne2RGwFyxhWZnphAqEOiuVV5SyHsuYKHK', '2020-02-02 15:55:03'),
(4, 'Lusukama', '$2y$10$pYTMnazeNecyH/KyeutIAe0yPlBIze5TA83tWY1TnyOtCJHvysfsS', '2020-02-02 16:44:38'),
(5, 'Tshego', '$2y$10$ll0dMB1WQAVjQXkRloeHv.VLgi99k/sxR7qeBnSq2dbmTNosGWgx2', '2020-02-02 17:49:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
