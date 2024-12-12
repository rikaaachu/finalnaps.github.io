-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 05:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menuu`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `surnames` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `userType` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `surnames`, `email`, `password`, `created_at`, `userType`) VALUES
(1, 'enzo', 'de', 'stanenxo@gmail.com', '$2y$10$Z5lP7XDLWQFfEvHKhxUTMuDLHb6dNqWvbvZ6YBqmgt3YuJDkiaNLq', '2024-11-16 14:19:19', 'user'),
(2, 'lorenzo', 'silva', 'lrnz@gmail.com', '$2y$10$hd7pXID5ix4PZxImvHGoN.UW76EnkZNuWPGC1hj/fgnopYfpSLhh6', '2024-11-16 14:22:47', 'user'),
(4, 'enzo', 'de', 'yes@gmail.com', '$2y$10$YjARwRCQ35W1f.eKxITcl.nmg17fW8avH9/nDH3mjcHPdr2ZGVqDi', '2024-11-16 14:31:58', 'user'),
(5, '32', '32', 'luisa@gmail.com', '$2y$10$Zpxiw1OLgLXf..mQQmdEGusZkq.zqDr4Dl5EU.efJsNoNQHtFNp7.', '2024-11-16 14:48:12', 'user'),
(8, '32', '32', 'luisa12@gmail.com', '$2y$10$5bDFA3bU3nTZktEhgqsSD.pgzhArApc1SiH8pfYAncwxiV7uA8YyS', '2024-11-16 14:49:01', 'user'),
(9, 'dsdsds', 'ds', 'yes12@gmail.com', '$2y$10$.7t6DyyNQ94dJOGlc1UWqulfs4AVfK8tYDeqyEeOiJYjEUMAj41YC', '2024-11-16 15:50:33', 'user'),
(10, 'NAPS', 'RESTO', 'naps.resto@gmail.com', 'NAPSrestobar2017', '0000-00-00 00:00:00', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
