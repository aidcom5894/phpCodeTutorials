-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2023 at 12:57 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpOpenSource`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int NOT NULL,
  `admin_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_contact` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_password` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `referal_id` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_avatar` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `registrationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `admin_name`, `admin_email`, `admin_contact`, `admin_password`, `referal_id`, `admin_avatar`, `registrationDate`) VALUES
(1, 'V Robin Kujur', 'robin@aidcom.in', '9199450345', 'admin', 'VROBI03230345', 'http://localhost/phpCodeTutorials/adminAvatar/Vivek Robin.jpeg', '2023-03-08 18:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `individual_users`
--

CREATE TABLE `individual_users` (
  `id` int NOT NULL,
  `fullname` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `referal_code` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_avatar` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `portal_registration_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `individual_users`
--

INSERT INTO `individual_users` (`id`, `fullname`, `email`, `contact`, `password`, `user_bio`, `referal_code`, `user_avatar`, `portal_registration_date`) VALUES
(1, 'Demo Users', 'demo@gmail.com', '98754621', 'Admin', 'Aspiring for the position of Full Stack Developer where I can use my extensive knowledge of programming languages and frameworks to develop efficient web applications.', '', 'http://localhost/phpCodeTutorials/useravatar/Vivek Robin.jpeg', '2023-03-08 11:53:46'),
(2, 'Demo Users', 'demo@gmail.com', '98754621', 'Admin', 'Aspiring for the position of Full Stack Developer where I can use my extensive knowledge of programming languages and frameworks to develop efficient web applications.', '', 'http://localhost/phpCodeTutorials/useravatar/image2.jpg', '2023-03-08 13:50:56'),
(4, 'new user1', 'user@gmail.com', '1234545', '1234', 'To pursue a fulfilling career in the sales industry utilizing skills in management to provide clients with an outstanding experience while increasing company profitability', '', 'http://localhost/phpCodeTutorials/useravatar/beautiful_landscape.jpg', '2023-03-09 11:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_users`
--
ALTER TABLE `individual_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `individual_users`
--
ALTER TABLE `individual_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
