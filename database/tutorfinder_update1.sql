-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 09:20 PM
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
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `guardian_users`
--

CREATE TABLE `guardian_users` (
  `id` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `g_post`
--

CREATE TABLE `g_post` (
  `post_id` int(10) NOT NULL,
  `g_id` int(10) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `g_post_temp`
--

CREATE TABLE `g_post_temp` (
  `post_id` int(10) NOT NULL,
  `g_id` int(10) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `students_users`
--

CREATE TABLE `students_users` (
  `id` varchar(15) NOT NULL,
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
  `institutionname` varchar(20) NOT NULL,
  `g_phone` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `address` varchar(15) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `st_post`
--

CREATE TABLE `st_post` (
  `post_id` int(10) NOT NULL,
  `st_id` int(10) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `st_post_temp`
--

CREATE TABLE `st_post_temp` (
  `post_id` int(10) NOT NULL,
  `st_id` int(10) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_info`
--

CREATE TABLE `tutor_info` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `institutionname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_post`
--

CREATE TABLE `tutor_post` (
  `post_id` int(10) NOT NULL,
  `tutor_id` int(10) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_post_temp`
--

CREATE TABLE `tutor_post_temp` (
  `post_id` int(10) NOT NULL,
  `tutor_id` int(10) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_users`
--

CREATE TABLE `tutor_users` (
  `id` varchar(15) NOT NULL,
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
-- Indexes for table `g_post_temp`
--
ALTER TABLE `g_post_temp`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_post_temp`
--
ALTER TABLE `st_post_temp`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tutor_info`
--
ALTER TABLE `tutor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_post_temp`
--
ALTER TABLE `tutor_post_temp`
  ADD PRIMARY KEY (`post_id`);

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
-- AUTO_INCREMENT for table `g_post_temp`
--
ALTER TABLE `g_post_temp`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_post_temp`
--
ALTER TABLE `st_post_temp`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_info`
--
ALTER TABLE `tutor_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_post_temp`
--
ALTER TABLE `tutor_post_temp`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
