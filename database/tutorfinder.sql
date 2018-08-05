-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2018 at 08:39 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--
CREATE DATABASE IF NOT EXISTS `tutorfinder` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `tutorfinder`;

CREATE TABLE `admin_info` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `guardian_info`
--

CREATE TABLE `guardian_info` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `guardian_users`
--

CREATE TABLE `guardian_users` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `students_users`
--

CREATE TABLE `students_users` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `institutionname` varchar(20) NOT NULL,
  `g_phone` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `address` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_info`
--

CREATE TABLE `tutor_info` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `institutionname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_users`
--

CREATE TABLE `tutor_users` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian_info`
--
ALTER TABLE `guardian_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_info`
--
ALTER TABLE `tutor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardian_info`
--
ALTER TABLE `guardian_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_info`
--
ALTER TABLE `tutor_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
