-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 09:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mylogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firsname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 1 COMMENT '1= user, 0=admin',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firsname`, `lastname`, `email`, `password`, `phone`, `birthday`, `address`, `usertype`, `created`, `modified`) VALUES
(11, 'adv', 'wefw', 't@gmail.com', '$2y$10$omuoBWCUPTdslIKy8m2dBeIV8NRLVtSb3r.ZwVBMnHHbQH73QRzs6', '01234567899', '2023-08-08', 'West shewrapara, Mirpur, Dhaka', 1, '2023-08-21 13:42:11', '2023-08-21 13:42:11'),
(12, 'Sanjida', 'Aziz', 'a@gmail.com', '$2y$10$K2HR3HNFoXN0nOul7oVz7ODlPKrj05l6TMl7VA9BbiGiP2HURFG3G', '3453637', '2000-11-02', 'Mirpur,Dhaka', 1, '2023-08-21 13:46:07', '2023-08-22 08:49:51'),
(13, 'Default', 'Admin', 'admin@localhost.local', '$2y$10$vgXwB/2yKbXtUTwfzJABhul3hmV30/W4zVDZ5/uEGKroWuXk4YBZK', '1234567', '2001-01-01', 'xyz', 0, '2023-08-22 09:05:08', '2023-08-22 09:05:08'),
(14, 'Sanjida', 'wefw', 'b@gmail.com', '$2y$10$G698IquIRXOFGg26bPMQ9.GhnJnVt2IAjusm6uthYbWFNJtwmH0ZG', '3453637', '2023-08-26', 'West shewrapara, Mirpur, Dhaka', 1, '2023-08-22 20:06:37', '2023-08-22 20:06:37'),
(15, 'Bella', 'Bose', 'bella@gmail.com', '$2y$10$CTejY/WS/kMIC6KQZULTYOtz92JRyRZXt.NRnyAaTmPe5fgDyjyRu', '2441139', '1990-12-01', 'Dhaka', 1, '2023-08-23 07:25:10', '2023-08-23 07:25:10'),
(16, 'Regular', 'User', 'user@localhost.local', '$2y$10$d4IgXu0TgLU1Ic9ujG1C2.JLd.VDJToS1.K8CpuR80W0vKEqQUvdK', '346576878', '1999-01-08', 'Gazipur', 1, '2023-08-23 07:26:34', '2023-08-23 07:26:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
