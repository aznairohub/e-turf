-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 07:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` varchar(750) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `created_at`, `updated_at`) VALUES
(2, 'Our mission is making it easier for everyone to play sports and increasing the utilisation of facilities as a result.\n\nSports play a pivotal role in bringing people together, sharing moments and enhancing the well-being are reasons that form the  essence of PlaySpots.\n\nOur Goal is making the sports simple #LetTheWorldPlay..!', NULL, NULL),
(4, 'We aim to be the leading Sports Infrastructure and Education company in India, empowering India to become a sporting powerhouse.', NULL, NULL),
(5, '“Book My Turf” makes it easy for youngsters to select , book and play at their favourite or best turf near your location or place with the ease of payment.\r\n\r\nBook My Turf is all about sports youngsters who love to play football and cricket on turf or ground or arena along with their friends and families.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `name`, `tname`, `ttype`, `place`, `date`, `time`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sandra', 'Play Spots', 'Landscape Grass Turf', 'Angamaly', '2021-12-17', '07:30', 'Rs.1200', 'Payment Recieved', NULL, NULL),
(2, 'Amritha', 'Play Spots', 'Landscape Lawn Turf', 'Aluva', '2021-12-23', '07:30', 'Rs.1200', 'Payment Recieved', NULL, NULL),
(3, 'Azna', 'Play Spots', 'Garden Grass Turf', 'Kochi', '2021-12-08', '06:30', 'Rs.1100', 'Payment Recieved', NULL, NULL),
(4, 'Sincy', 'Play Spots', 'Garden Grass Turf', 'Kochi', '2021-12-24', '07:00', 'Rs.1100', 'Payment Recieved', NULL, NULL),
(5, 'Safal', 'Play Spots', 'Garden Lawn Turf', 'Kakkanad', '2021-12-22', '07:15', 'Rs.1000', 'Payment Recieved', NULL, NULL),
(6, 'Calgan', 'Play Spots', 'Garden Lawn Turf', 'Kakkanad', '2021-12-31', '07:00', 'Rs.1000', 'Payment Recieved', NULL, NULL),
(7, 'Anusha', 'Play Spots', 'Garden Lawn Turf', 'Kakkanad', '2021-12-30', '07:30', 'Rs.1000', 'Payment Recieved', NULL, NULL),
(8, 'Anusha', 'Play Spots', 'Garden Lawn Turf', 'Kakkanad', '2021-12-30', '07:30', 'Rs.1000', 'Payment Recieved', NULL, NULL),
(9, 'Anusha', 'Play Spots', 'Garden Lawn Turf', 'Kakkanad', '2021-12-30', '07:30', 'Rs.1000', 'Payment Recieved', NULL, NULL),
(10, 'Anusha', 'Play Spots', 'Garden Lawn Turf', 'Kakkanad', '2021-12-30', '07:30', 'Rs.1200', 'Payment Recieved', NULL, NULL),
(13, 'Kukku', 'Sporloc', 'Garden Grass Turf', 'Aluva', '2022-01-09', '07:30', 'Rs.1400', 'Payment Recieved', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bstatus` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `userid`, `tname`, `ttype`, `price`, `place`, `date`, `time`, `status`, `bstatus`, `created_at`, `updated_at`) VALUES
(1, '1', 'Play Spots', 'Garden Grass Turf', 'Rs.1100 (90 minutes)', 'Kochi', '2021-12-08', '06:30', 'Paid', 'Generated', NULL, NULL),
(4, '2', 'Play Spots', 'Garden Grass Turf', 'Rs.1100 (90 minutes)', 'Kochi', '2021-12-24', '07:00', 'Paid', 'Generated', NULL, NULL),
(8, '3', 'Play Spots', 'Garden Lawn Turf', 'Rs.1000 (90 minutes)', 'Kakkanad', '2021-12-22', '07:15', 'Paid', 'Generated', NULL, NULL),
(9, '4', 'Play Spots', 'Landscape Lawn Turf', 'Rs.1200 (90 minutes)', 'Aluva', '2021-12-23', '07:30', 'Paid', 'Generated', NULL, NULL),
(10, '5', 'Play Spots', 'Landscape Grass Turf', 'Rs.1200 (90 minutes)', 'Angamaly', '2021-12-17', '07:30', 'Paid', 'Generated', NULL, NULL),
(11, '6', 'Play Spots', 'Garden Lawn Turf', 'Rs.1000 (90 minutes)', 'Kakkanad', '2021-12-31', '07:00', 'Paid', 'Generated', NULL, NULL),
(12, '7', 'Play Spots', 'Garden Lawn Turf', 'Rs.1000 (90 minutes)', 'Kakkanad', '2021-12-30', '07:30', 'Paid', 'Waiting', NULL, '2021-12-21 01:39:54'),
(15, '10', 'Sporloc', 'Garden Grass Turf', 'Rs.1400', 'Aluva', '2022-01-09', '07:30', 'Paid', 'Waiting', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `place`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Ernakulam,Kerala.', 'bookurturf@gmail.com', '74108520963', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'g5.jpg', 'American Football', NULL, NULL),
(2, 'g4.jpg', 'Cricket', NULL, NULL),
(3, 't3.jpg', 'Warm up', NULL, NULL),
(4, 'g2.jpg', 'Football', NULL, NULL),
(5, 'b1.jpg', 'Basket Ball', NULL, NULL),
(6, 'golf.jpg', 'Golf', NULL, NULL),
(8, 'new.jpg', 'Football', NULL, NULL),
(9, 'download.jfif', 'Night View', NULL, NULL),
(10, 'download.jpg', 'Play Time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Azna', 'azna@gmail.com', 'abc', 'abcdefghijk', NULL, NULL),
(2, 'Calgan', 'cal@gmail.com', 'bcf', 'nmhkjhbnmmnjhgvh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_12_01_150952_create_admins_table', 1),
(3, '2021_12_02_150803_create_abouts_table', 2),
(4, '2021_12_06_044638_create_turfs_table', 3),
(5, '2021_12_06_054647_create_contacts_table', 4),
(7, '2021_12_07_044226_create_mregisters_table', 5),
(8, '2021_12_08_043811_create_uregisters_table', 6),
(9, '2021_12_08_061111_create_galleries_table', 7),
(10, '2021_12_10_055406_create_books_table', 8),
(11, '2021_12_13_051030_create_messages_table', 9),
(14, '2021_12_15_044647_create_payments_table', 10),
(15, '2021_12_15_062901_create_bills_table', 11),
(16, '2021_12_20_055737_create_tncs_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `mregisters`
--

CREATE TABLE `mregisters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mregisters`
--

INSERT INTO `mregisters` (`id`, `mname`, `uname`, `phone`, `city`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Anoop', 'M1Anoop', '9874563214', 'Kochi', 'an@gmail.com', '123', 'Approved', NULL, NULL),
(2, 'Annu', 'M2Annu', '7894561234', 'Kakkanad', 'annu@gmail.com', '123', 'Approved', NULL, NULL),
(3, 'Renu', 'M3Renu', '74108520962', 'Tripunithura', 'renu@gmail.com', '123', 'Approved', NULL, '2021-12-23 01:32:32'),
(4, 'Arya', 'M4Arya', '74108520963', 'Tripunithura', 'arya@gmail.com', '123', 'Approved', NULL, NULL),
(5, 'Reenu', 'M5Reenu', '1563249875', 'Ernakulam', 'reenu@gmail.com', '123', 'Approved', NULL, NULL),
(6, 'Rabeena', 'M6Rabeena', '7485963214', 'Pallikkara', 'rb@gmail.com', '123', 'Approved', NULL, NULL),
(7, 'Mariya', 'M7Mariya', '753952148', 'Pukattupady', 'm@gmail.com', '123', 'Approved', NULL, NULL),
(8, 'Fathima', 'M8Fathima', '72852964', 'Pallikkara', 'f@gmail.com', '123', 'Waiting', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `uid`, `cnumber`, `name`, `amount`, `expdate`, `cvv`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '4567891235', 'Sincy', '1200', '2025-01-09', '123', 'Paid', NULL, NULL),
(2, '1', '7894561236', 'Azna', '1000', '2025-01-09', '123', 'Paid', NULL, NULL),
(3, '1', '1234567896', 'Azna', '1200', '2025-01-08', '123', 'Paid', NULL, NULL),
(4, '3', '1234567895', 'Safal', '1000', '2024-01-08', '123', 'Paid', NULL, NULL),
(5, '4', '7896541862', 'Amritha', '1200', '2025-01-06', '123', 'Paid', NULL, NULL),
(6, '5', '1236547896', 'Sandra', '1200', '2025-02-05', '123', 'Paid', NULL, NULL),
(7, '6', '7415896320', 'Calgan', '1000', '2025-12-31', '123', 'Paid', NULL, NULL),
(8, '7', '1234567895', 'Anusha', '1000', '2023-02-23', '123', 'Paid', NULL, NULL),
(11, '10', '7894563120', 'Kukku', '1400', '2026-12-30', '123', 'Paid', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tncs`
--

CREATE TABLE `tncs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tc` varchar(800) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tncs`
--

INSERT INTO `tncs` (`id`, `tc`, `created_at`, `updated_at`) VALUES
(1, 'Please arrive 15 min before the booking time at the turfs. Not more than 15 Players will be allowed on each turfs. No external coaches, training sessions and parties will be permitted. No outside food or drink will be allowed on site. Smoking and the consumption of alcohol are strictly prohibited in all areas of the turfs and will result in an immediate expulsion..', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `turfs`
--

CREATE TABLE `turfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `turfs`
--

INSERT INTO `turfs` (`id`, `tname`, `place`, `type`, `desc`, `price`, `manager`, `created_at`, `updated_at`) VALUES
(1, 'Play Spots', 'Kakkanad', 'Garden Lawn Turf', 'A lawn is an area where grass is grown as a green carpet for a landscape and is the basic feature of any garden', 'Rs.1200', '1', NULL, '2021-12-21 01:09:19'),
(2, 'Play Spots', 'Kochi', 'Garden Grass Turf', 'A lawn is an area where grass is grown as a green carpet for a landscape and is the basic feature of any garden..', 'Rs.1300', '2', NULL, '2021-12-21 01:03:49'),
(3, 'Play Spots', 'Aluva', 'Landscape Lawn Turf', 'A lawn is an area where grass is grown as a green carpet for a landscape and is the basic feature of any garden..', 'Rs.1400', '3', NULL, '2021-12-21 01:04:21'),
(4, 'Play Spots', 'Angamaly', 'Landscape Grass Turf', 'A lawn is an area where grass is grown as a green carpet for a landscape and is the basic feature of any garden..', 'Rs.1500', '4', NULL, '2021-12-21 01:05:02'),
(5, 'Sporloc', 'Kaloor', 'Garden Grass Turf', 'Sporloc.com is India\'s best sporting website, helping you discover sports venues and book them online. Find list of most popular grounds in your city.', 'Rs.1400', '5', NULL, NULL),
(6, 'Sporloc', 'Aluva', 'Garden Grass Turf', 'Sporloc is India\'s best sporting website, helping you discover sports venues and book them online. Find list of most popular grounds in your city.', 'Rs.1400', '6', NULL, NULL),
(7, 'Sporloc', 'Aluva', 'Landscape Grass Turf', 'A lawn is an area where grass is grown as a green carpet for a landscape and is the basic feature of any garden..', 'Rs.1300', '7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uregisters`
--

CREATE TABLE `uregisters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uregisters`
--

INSERT INTO `uregisters` (`id`, `name`, `uname`, `phone`, `city`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Azna', 'Azna', '7034950812', 'Aluva', 'a@gmail.com', '123', NULL, '2021-12-23 00:01:57'),
(2, 'Sincy', 'Sincy', '7896541563', 'Kaloor', 'sincy@gmail.com', '123', NULL, NULL),
(3, 'Safal', 'Safal', '15485125521', 'Thrikkakkara', 's@gmail.com', '123', NULL, NULL),
(4, 'Amritha', 'Amritha', '8529637452', 'Tripunithura', 'am@gmail.com', '123', NULL, NULL),
(5, 'Sandra', 'Sandra', '9587653223', 'Maradu', 'san@gmail.com', '123', NULL, NULL),
(6, 'Calgan', 'Calgan', '8796541230', 'Vypin', 'cal@gmail.com', '123', NULL, NULL),
(7, 'Anusha', 'Anusha', '9899457610', 'Kaloor', 'anusha@gmail.com', '123', NULL, NULL),
(10, 'Kukku', 'Kukku', '7418563965', 'Kakkanad', 'k@gmail.com', '123', NULL, NULL),
(11, 'Anu', 'Anu', '789564135', 'Tripunithura', 'anu@gmail.com', '123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mregisters`
--
ALTER TABLE `mregisters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tncs`
--
ALTER TABLE `tncs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turfs`
--
ALTER TABLE `turfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uregisters`
--
ALTER TABLE `uregisters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mregisters`
--
ALTER TABLE `mregisters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tncs`
--
ALTER TABLE `tncs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `turfs`
--
ALTER TABLE `turfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uregisters`
--
ALTER TABLE `uregisters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
