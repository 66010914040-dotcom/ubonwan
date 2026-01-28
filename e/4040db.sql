-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 10:54 AM
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
-- Database: `4040db`
--
CREATE DATABASE IF NOT EXISTS `4040db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4040db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(6) NOT NULL,
  `a_position` varchar(255) NOT NULL,
  `a_prefix` varchar(255) NOT NULL,
  `a_firstName` varchar(255) NOT NULL,
  `a_lastName` varchar(255) NOT NULL,
  `a_birthDate` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_phone` varchar(255) NOT NULL,
  `a_major` varchar(255) NOT NULL,
  `a_university` varchar(255) NOT NULL,
  `a_specialSkills` varchar(255) NOT NULL,
  `a_workExperience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_prefix`, `a_firstName`, `a_lastName`, `a_birthDate`, `a_email`, `a_phone`, `a_major`, `a_university`, `a_specialSkills`, `a_workExperience`) VALUES
(1, 'Data Analyst', 'นาง', 'อุบลวรรณ', '{ ลีล้าน้อย}', '2004-07-08', '66010914040@msu.ac.th', '0000000000', '{ คอมพิวเตอร์ธุรกิจ}', 'มหาวิทยาลัยมหาสารคาม', '88', '88'),
(2, 'Data Analyst', 'นางสาว', 'อุบลวรรณ', 'ลีล้าน้อย', '2004-07-08', '66010914040@msu.ac.th', '0000000000', 'คอมพิวเตอร์ธุรกิจ', 'มหาวิทยาลัยมหาสารคาม', '000', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(6) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_heigth` varchar(255) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_birthday` varchar(255) NOT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_heigth`, `r_address`, `r_birthday`, `r_color`, `r_major`) VALUES
(1, 'อุบลวรรณ ลีล้าน้อย', '', '', '', '', '', ''),
(2, 'อิศรกร เจริญศรี', '', '', '', '', '', ''),
(3, 'ชญาณี รุ่งนภากานต์', '', '', '', '', '', ''),
(4, 'แก๊บ บ่กี้', '{ 0988888888}', '', '', '', '', ''),
(5, 'กลอย ชอบหลอย', '0888888888', '160', '', '', '', ''),
(6, 'ตังเม นะจู้', '1234567890', '170', 'สาวหอใน', '', '', ''),
(7, 'มิน ใภ้กาสิน', '0123456789', '160', 'อรัญชัย', '2005-09-06', '', ''),
(8, 'มิน ใภ้กาสิน', '0123456789', '160', 'อรัญชัย', '2005-09-06', '#563d7c', ''),
(9, 'หัวโปก นะจ๊ะ', '0898989998', '120', 'ซอยวว.', '2005-01-09', '#7b3d3d', ''),
(10, 'เตย เตะบอล', '0999999999', '170', 'หน้ามอ อิอิ', '2025-12-17', '#7b593d', 'คอมพิวเตอร์ธุรกิจ'),
(11, 'อิศรกร เจริญศรี', '0984746396', '170', 'มมส', '2025-12-17', '#3dbce6', 'คอมพิวเตอร์ธุรกิจ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
