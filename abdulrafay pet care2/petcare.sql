-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2025 at 12:17 PM
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
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_products`
--

CREATE TABLE `admin_products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_products`
--

INSERT INTO `admin_products` (`id`, `name`, `description`, `price`) VALUES
(1, 'belt', 'this is a dog belt', '120'),
(2, 'paw', 'this is cat paws', '100');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `vet_id` int(11) DEFAULT NULL,
  `owner_name` varchar(100) DEFAULT NULL,
  `pet_name` varchar(100) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` enum('pending','approved','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `vet_id`, `owner_name`, `pet_name`, `reason`, `date`, `time`, `status`, `created_at`) VALUES
(1, 1, 'haris', 'tom', 'hw is ill', '2025-09-05', '14:29:00', 'pending', '2025-09-12 08:29:58'),
(2, 1, 'haris', 'tom', 'hw is ill', '2025-09-05', '14:29:00', 'pending', '2025-09-12 08:30:33'),
(3, 1, 'haris', 'tom', 'this is my name', '2025-09-26', '13:49:00', 'pending', '2025-09-12 08:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `owner_pet_profile`
--

CREATE TABLE `owner_pet_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `health-records` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_pet_profile`
--

INSERT INTO `owner_pet_profile` (`id`, `name`, `type`, `breed`, `age`, `gender`, `health-records`) VALUES
(1, 'spike', 'dog', 'persian', 2, 'male', ''),
(2, 'spike', 'dog', 'persian', 2, 'male', ''),
(3, 'tom', 'cat', 'persian', 4, 'female', '');

-- --------------------------------------------------------

--
-- Table structure for table `owner_registration`
--

CREATE TABLE `owner_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_registration`
--

INSERT INTO `owner_registration` (`id`, `name`, `email`, `password`, `number`, `address`) VALUES
(1, 'abdulrafay', 'rafay@gmail.com', 'rafay123', 123456789, 'karachi,pakistan'),
(2, 'abdul rafay', 'abdulrafayjunaid123@gmail.com', 'rafay123', 123456789, 'karachi,pakistan'),
(3, 'abdul rafay', 'abdulrafayjunaid123@gmail.com', 'jhgjhjhj', 123456789, 'karachi,pakistan'),
(4, 'abdul rafay', 'abdulrafayjunaid123@gmail.com', 'hgdjhagsdshgd', 2147483647, 'karachi,pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `shelter_registration`
--

CREATE TABLE `shelter_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shelter_registration`
--

INSERT INTO `shelter_registration` (`id`, `name`, `email`, `password`, `number`, `address`, `role`) VALUES
(1, 'abdul rafay', 'abdulrafayjunaid123@gmail.com', '1121222', 12121, 'karachi,pakistan', 'shelter');

-- --------------------------------------------------------

--
-- Table structure for table `vet_profile`
--

CREATE TABLE `vet_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `zip` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `speciality` varchar(50) NOT NULL,
  `years_of_xp` int(50) NOT NULL,
  `about` varchar(200) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vet_profile`
--

INSERT INTO `vet_profile` (`id`, `name`, `email`, `zip`, `city`, `state`, `country`, `speciality`, `years_of_xp`, `about`, `phone`, `address`) VALUES
(1, 'abdul rafay ', 'abdulrafayjunaid123@gmail.com', 12234, 'West-Berlin &gt; Berlin (West), Berlin', 'pakistan', 'Pakistan', 'heart', 4, 'hello ther im a heart doctor', 12345, 'karachi,pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `vet_registration`
--

CREATE TABLE `vet_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vet_registration`
--

INSERT INTO `vet_registration` (`id`, `name`, `email`, `password`, `number`, `address`, `role`) VALUES
(1, 'abdul rafay', 'abdulrafayjunaid123@gmail.com', 'rafay123', 1222, 'karachi,pakistan', 'vet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_products`
--
ALTER TABLE `admin_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_pet_profile`
--
ALTER TABLE `owner_pet_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_registration`
--
ALTER TABLE `owner_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shelter_registration`
--
ALTER TABLE `shelter_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vet_profile`
--
ALTER TABLE `vet_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vet_registration`
--
ALTER TABLE `vet_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_products`
--
ALTER TABLE `admin_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owner_pet_profile`
--
ALTER TABLE `owner_pet_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owner_registration`
--
ALTER TABLE `owner_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shelter_registration`
--
ALTER TABLE `shelter_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vet_profile`
--
ALTER TABLE `vet_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vet_registration`
--
ALTER TABLE `vet_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
