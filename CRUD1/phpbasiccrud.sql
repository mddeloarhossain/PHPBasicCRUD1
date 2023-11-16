-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 03:09 PM
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
-- Database: `phpbasiccrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mobile`, `address`) VALUES
(1, 'Amzad', 'Hossain', 'amzad@gmail.com', '01552626262', 'Dhaka'),
(2, 'Deloar', 'Hossain', 'deloar@gmail.com', '01312336666', 'Rajshahi'),
(3, 'Abul', 'Hossain', 'abul@gmail.com', '01551121212', 'Khulna'),
(4, 'Labib', 'Hossain', 'labib@gmail.com', '01312441122', 'Barisal'),
(5, 'Jakir', 'Hossain', 'jakir@gmail.com', '01321562525', 'Sylhet'),
(6, 'Abdur', 'Rahim', 'rahim@gmail.com', '01412252525', 'Rangpur'),
(7, 'Sakil', 'Hossain', 'sakil@gmail.com', '01312363636', 'Chittagong'),
(8, 'Mamun', 'Rashid', 'mamun@gmail.com', '01515252624', 'Noakhali'),
(9, 'Atik', 'Islam', 'atik@gmail.com', '01315252624', 'Dinajpur'),
(10, 'Sohel', 'Ahmed', 'sohel@gmail.com', '01718411665', 'Bogra'),
(11, 'Mijanur', 'Rahman', 'mijanur@gmail.com', '01625012651', 'Naogaon'),
(12, 'Ekramur', 'Rahman', 'ekramur@gmail.com', '01556252415', 'Dhaka');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
