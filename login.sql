-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 08:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`id`, `name`, `image`) VALUES
(1, 'Mrinmoyee Dey Amin', ''),
(2, 'Tareq Rahman', ''),
(3, 'Nahid Reza', ''),
(4, 'Nadia Rahman', ''),
(5, 'Md. Mahmud Hossain', ''),
(6, 'Md. Asifuzzaman Jishan', ''),
(7, 'Afsana Sikhder Samia', ''),
(8, 'Md. Atikuzzaman', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `myproduct`
--

CREATE TABLE `myproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myproduct`
--

INSERT INTO `myproduct` (`id`, `name`) VALUES
(1, 'Jishan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Asifuzzaman Jishan', 'jishan900@gmail.com', '$2y$10$SX65i609p5GPo.zJ12A13uM5B58/lgbLT0gbrSDqkueJ08LHwCZeq', 'SPpiCciJdfhClDxWed5VdpAH52r7H6xXBNrCTFVeKvoycC1xB1a0OWNOLawv', '2018-08-02 01:59:28', '2018-08-02 01:59:28'),
(2, 'Abedin', 'abedin@gmail.com', '$2y$10$XeAgzkdOruO/1sVh3cWaFOdjbaLY38z5JOfy6TAFvdJsgmid.4BiO', 'DsH6yPLrbzDC2NJWBo0Qu6kGQyOkspBR3NEznED1ncLkbejtuSu8hen2q20p', '2018-09-06 01:41:30', '2018-09-06 01:41:30'),
(3, 'Md Imran Hasan', 'imran.hasan.cse@ulab.edu.bd', '$2y$10$Gy1eokY./PbVTJvrqmpI3e9K9Vrj2m.Vh/H7KiFHgUNoIDqnwUKx2', 'xxJv2zOY3xMiDZhYnc8QfX2wanlqyPwoBfjbuYseuiGjR27nXlFbRnjV2VLj', '2018-09-06 02:49:51', '2018-09-06 02:49:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myproduct`
--
ALTER TABLE `myproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
