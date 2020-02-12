-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 05:31 PM
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
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `mov_title` varchar(50) NOT NULL,
  `mov_duration` time(2) NOT NULL,
  `mov_rating` int(5) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `mov_title`, `mov_duration`, `mov_rating`, `created_at`) VALUES
(1, 'Blood Sport', '00:02:30.00', 5, '2020-02-02 14:12:55'),
(3, 'Ninja 3', '00:23:45.00', 9, '2020-02-02 14:15:56'),
(4, 'So Close', '00:02:34.00', 7, '2020-02-02 14:26:04'),
(5, 'Prison Beak', '00:00:24.00', 10, '2020-02-02 14:37:19'),
(6, 'Mission Impossible', '02:34:11.00', 6, '2020-02-02 14:43:33'),
(7, 'Terminator', '02:54:12.00', 11, '2020-02-02 15:56:27'),
(8, 'Dernier Train du Katanga', '03:24:51.00', 25, '2020-02-02 16:45:54'),
(10, 'My Love', '01:23:45.00', 12345, '2020-02-02 17:37:51'),
(11, 'Sarafina', '00:00:00.00', 1234, '2020-02-02 17:50:35'),
(12, 'Solo', '01:23:45.00', 234, '2020-02-02 17:51:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mov_title` (`mov_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
