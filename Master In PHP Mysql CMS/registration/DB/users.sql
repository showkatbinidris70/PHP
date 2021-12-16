-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 03:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdevelopers`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_avater` text NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `user_email`, `user_phone`, `user_avater`, `user_address`) VALUES
(1, 'showkat ali', ' f2c2a529a41a5b7e1622560bc3d6d3124aba5702', 'showkatbinidris70@gmail.com', '01921839596', 'Picture-Sowkat.jpg', 'Dhaka, Bangladesh'),
(2, 'momo akter', 'momo@gmail.com', 'momo@gmail.com', '01316307788', 'momo.jpg', 'Saver, Bangladesh'),
(3, 'alamgir hossen', 'alamgir@gmail.com', 'alamgir@gmail.com', '01932386509', '', 'Kishoregonj, Bangladesh'),
(5, 'alamgir hossen abir', 'alamgir@gmail.com', 'alamgir@gmail.com', '01932386509', '', 'Kishoregonj, Bangladesh'),
(11, 'alamgir', '1234', 'alamgir@gmail.com', '01932386509', '', 'Kishoregonj, Bangladesh'),
(14, 'bithi', '1234', 'bithi@gmail.com', '01315652635', '', 'Dhaka, Bangladesh'),
(18, 'ladiba', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'ladiba@gmail.com', '01652895425', '', 'Kishoregonj, Bangladesh'),
(19, 'sufia', '1234', 'sufia@gmail.com', '25965485695', '', 'Kalkata, India'),
(20, 'Akter Hossen', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'akter@gmail.com', '01659259878', '', 'Sylhet'),
(21, 'Hamid', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'hamid@gmail.com', '0154896523', '', 'dhaka, bd'),
(22, 'Hamid Miah', ' ce4582ff75db2184201a98866480473727c2b138', 'hamid@gmail.com', '0154896523', '', 'dhaka, bd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
