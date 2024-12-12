-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 12:53 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `dish_id`, `quantity`, `date added`, `date_added`) VALUES
(75, 4, 4, 2, '2024-11-16 16:53:11', '2024-11-16 16:53:11'),
(81, 4, 11, 1, '2024-11-16 16:54:38', '2024-11-16 16:54:38'),
(89, 9, 23, 2, '2024-11-16 17:09:17', '2024-11-16 17:09:17'),
(110, 1, 4, 2, '2024-11-16 17:56:02', '2024-11-16 17:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `category` varchar(222) NOT NULL,
  `dish` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `category`, `dish`, `price`) VALUES
(1, 'specialties', 'Fried Chicken', 420.00),
(2, 'specialties', 'Fried Chicken (Half)', 210.00),
(3, 'specialties', 'Crispy Pata', 499.00),
(4, 'specialties', 'Crispy Ulo (Half)', 599.00),
(5, 'soup', 'Cream of Mushroom', 180.00),
(6, 'soup', 'Crab & Corn', 180.00),
(7, 'soup', 'Ensaladang Talong', 100.00),
(8, 'soup', 'Nachos', 120.00),
(9, 'soup', 'Nachos Special', 160.00),
(10, 'soup', 'French Fries', 110.00),
(11, 'soup', 'Cheese Sticks', 110.00),
(12, 'side', 'Plain Rice', 25.00),
(13, 'side', 'Garlic Rice', 30.00),
(14, 'side', 'Toasted Bread', 20.00),
(15, 'side', 'Egg', 15.00),
(16, 'side', 'Shanghai Fried Rice', 105.00),
(17, 'side', 'Short Order Pancit Canton / Bihon', 185.00),
(18, 'side', 'Bilao Pancit Canton / Bihon (Small, 15 Pax)', 650.00),
(19, 'side', 'Bilao Pancit Canton / Bihon (Medium, 20 Pax)', 900.00),
(20, 'side', 'Bilao Pancit Canton / Bihon (Large, 30 Pax)', 1250.00),
(21, 'side', 'Short Order Spaghetti', 200.00),
(22, 'side', 'Bilao Spaghetti (Small, 15 Pax)', 800.00),
(23, 'side', 'Bilao Spaghetti (Medium, 20 Pax)', 1100.00),
(24, 'side', 'Bilao Spaghetti (Large, 30 Pax)', 1350.00),
(25, 'group-meals', 'Group A: Soup, Fried Chicken Whole, Lumpia Shanghai, Pancit Canton, Boneless Bangus, Chopsuey, Plain Rice, Pitcher of Ice Tea, Leche Flan\r\n', 3500.00),
(26, 'group-meals', 'Group B: Sinigang na Hipon, Lechin Kawali, Pancit Canton, Chopsuey, Fried Chicken Whole, Boneless Bangus, Plain Rice, Pitcher of Ice Tea, Leche Flan', 3900.00),
(27, 'group-meals', 'Group C: Sinigang na Hipon, Chopsuey, Fried Chicken Whole, Crispy Pata, Pancit Canton, Sweet & Sour Fish Fillet, Plain Rice, Pitcher of Ice Tea, Leche Flan', 4200.00),
(28, 'group-meals', 'Group D: Sinigang na Hipon, Fried Chicken Whole, Crispy Pata, Boneless Bangus, Kare kare, Plain Rice, pitcher of Ice Tea, Leche Flan', 4500.00),
(29, 'pulutan', 'Dinakdakan', 270.00),
(30, 'pulutan', 'Kilawin Tuna', 260.00),
(31, 'pulutan', 'Sizzling Hotdog', 160.00),
(32, 'pulutan', 'Shrimp Gambas', 260.00),
(33, 'pulutan', 'Tokwa\'t Baboy', 150.00),
(34, 'pulutan', 'Inihaw na Blue Marlin / Tuna / Tanigue', 200.00),
(35, 'sisig', 'Tofu Sisig', 219.00),
(36, 'sisig', 'Chicken Sisig', 215.00),
(37, 'sisig', 'Pork Sisig', 215.00),
(38, 'sisig', 'Sizzling Seafood', 280.00),
(39, 'sisig', 'Boneless Bangus', 260.00),
(40, 'sisig', 'Pan Fry Fish', 250.00),
(41, 'sisig', 'Sweet & Sour Fish Fillet', 205.00),
(42, 'sisig', 'Calamares ', 230.00),
(43, 'sisig', 'Adobong Pusit', 205.00),
(44, 'sisig', 'Sinigang na Hipon', 330.00),
(45, 'sisig', 'Sinigang na Isda (Bangus Belly, Tanigue, Talakitok, Tuna)', 320.00),
(46, 'sarap', 'Chicken Canton Meal', 220.00),
(47, 'sarap', 'Chicken Chopsuey Meal', 220.00),
(48, 'sarap', 'Chicken Meal', 170.00),
(49, 'sarap', 'Chicken Lumpia Meal', 220.00),
(50, 'sarap', 'Lechon Kawali Meal ', 220.00),
(51, 'sarap', 'Canton Shanghai Meal', 195.00),
(52, 'sarap', 'Tofu Sisig Meal', 199.00),
(53, 'sarap', 'Pork Sisig Meal', 199.00),
(54, 'sarap', 'Chicken Sisig Meal', 199.00),
(55, 'sarap', 'Pork Steak Meal', 199.00),
(56, 'sarap', 'Burger Steak Meal', 199.00),
(57, 'bestseller', 'Lechon Kawali', 260.00),
(58, 'bestseller', 'Pork Adobo', 225.00),
(59, 'bestseller', 'Grilled Liempo', 250.00),
(60, 'bestseller', 'Sinigang na Baboy', 310.00),
(61, 'bestseller', 'Lumpia Shanghai', 220.00),
(62, 'bestseller', 'Pork BBQ on Stick', 220.00),
(63, 'bestseller', 'Pork Steak', 220.00),
(64, 'bestseller', 'Buttered Chicken', 240.00),
(65, 'bestseller', 'Sizzling Sweet & Spicy Chicken', 240.00),
(66, 'bestseller', 'Buffalo Wings (Hot & Spicy)', 240.00),
(67, 'bestseller', 'Parmesan Chicken Wings', 240.00),
(68, 'bestseller', 'Chicken Adobo', 225.00),
(69, 'bestseller', 'Chicken Pork Adobo', 225.00),
(70, 'favorite', 'Kare-kare', 398.00),
(71, 'favorite', 'Bulalo', 520.00),
(72, 'favorite', 'Nilagang Baka', 325.00),
(73, 'favorite', 'Sinigang na Hipon', 250.00),
(74, 'vegetables', 'Chopsuey', 205.00),
(75, 'vegetables', 'Caesar Salad', 130.00),
(76, 'vegetables', 'Pinakbet', 205.00),
(77, 'vegetables', 'Tortang Talong', 180.00),
(78, 'vegetables', 'Gising Gising', 195.00),
(79, 'breakfast', 'Tapsilog', 150.00),
(80, 'breakfast', 'Bangsilog', 150.00),
(81, 'breakfast', 'Hamsilog', 150.00),
(82, 'breakfast', 'Longsilog', 135.00),
(83, 'breakfast', 'Hotsilog', 125.00),
(84, 'breakfast', 'Cornsilog', 125.00),
(85, 'breakfast', 'Tocilog', 150.00),
(86, 'merienda', 'Chicken Salad Sandwich', 100.00),
(87, 'merienda', 'Cheese Burger Sandwich', 100.00),
(88, 'merienda', 'Ham & Cheese Sandwich', 80.00),
(89, 'merienda', 'Monte Cristo Sandwich', 120.00),
(90, 'merienda', 'Clubhouse', 140.00),
(91, 'pizza', 'Sisig Pizza', 279.00),
(92, 'pizza', 'Ham & Cheese', 279.00),
(93, 'pizza', 'Hawaiian Style', 289.00),
(94, 'pizza', 'Chicken Parmesan Pizza', 289.00),
(95, 'dessert', 'Leche Flan (Small)', 50.00),
(96, 'dessert', 'Leche Flan (Big)', 150.00),
(97, 'dessert', 'Fruit Salad', 50.00),
(98, 'dessert', 'Yema Cake (Small)', 150.00),
(99, 'dessert', 'Halo-halo (Regular)', 120.00),
(100, 'tower', 'Blue Lagoon', 399.00),
(101, 'tower', 'Tequila Downers', 399.00),
(102, 'tower', 'Gin Fiss', 430.00),
(103, 'tower', 'Margarita Cocktail', 430.00),
(104, 'tower', 'The Bomb', 430.00),
(105, 'tower', 'Red Horse', 550.00),
(106, 'alcohol', 'Black Label', 1800.00),
(107, 'alcohol', 'Fundador Solera', 1100.00),
(108, 'alcohol', 'Fundador Light', 750.00),
(109, 'alcohol', 'Alfonso I', 750.00),
(110, 'alcohol', 'Emperador Light', 350.00),
(111, 'alcohol', 'Fundador Double Light', 450.00),
(112, 'alcohol', 'Fundador Gold Reserve', 450.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `date_ordered` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(10, 'NAPS', 'RESTO', 'naps.resto@gmail.com', '1ea5b06c214929539bb4acc6371d9016', '0000-00-00 00:00:00', 'admin'),
(11, 'enzo', 'de', '1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-12-07 08:25:26', 'user'),
(12, 'enzo', 'yess', 'napss@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-12-07 08:47:57', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`dish_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
