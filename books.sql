-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 07:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `bookImg` varchar(255) DEFAULT NULL,
  `genre` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `title`, `bookImg`, `genre`, `author`, `condition`, `volume`, `email`, `website`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(12, 5, 'Turtles All The Way Down', 'bookImages/MQlJvQIiC3lCcIepw1zjmAiWKS8aaoBVmb1ZJ84b.jpg', 'Fiction, Romance, Adventure', 'John D. Green', 'Good as new', 'N/A', 'toffer_giganto@yahoo.com', 'johngreen.com', '09457955547', 'Very interesting plot. A must read! Such a wonderful book', '2023-05-30 08:28:41', '2023-05-30 08:30:52'),
(14, 1, 'Eloquent Javascript', 'bookImages/drwjvCaFlCywpyrPozkNzRCPr46YfPHhj6XjKQS6.jpg', 'Coding, Web Development, Javascript', 'Marijn Haverbeke', 'New', 'Third Edition', 'kristoffersoncool@gmail.com', 'webdev.com', '09064866168', 'Book about javascript and web dev.', '2023-05-30 08:49:47', '2023-05-30 08:49:47'),
(15, 6, 'Harry Potter', NULL, 'Fiction, Adventure, Magic, Wizards', 'J.K. Rowling', 'Fair', 'Book 3', 'kayla@gmail.com', 'harrypotter.com', '0192314123', 'Harry Potter book, story is about the prisoner of azkaban', '2023-05-30 08:51:42', '2023-05-30 08:51:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pets_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `pets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
