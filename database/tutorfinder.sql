-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 11:06 PM
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
  `iddddd` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`iddddd`, `username`, `password`, `email`, `id`) VALUES
(1, 'amin', '123', 'amin@gmail.com', '01535421971'),
(2, 'ruba', '123', 'ruba@gmail.com', '01714014666');

-- --------------------------------------------------------

--
-- Table structure for table `apply_g_post`
--

CREATE TABLE `apply_g_post` (
  `post_id` int(10) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  `post_separate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `apply_g_post`
--

INSERT INTO `apply_g_post` (`post_id`, `g_id`, `tutor_id`, `post_separate`) VALUES
(1, '01698456325', '01232154971', 1),
(1, '01698456325', '01420420520', 2),
(1, '01698456325', '01535421971', 3),
(4, '01478963215', '017986352141', 4);

-- --------------------------------------------------------

--
-- Table structure for table `guardian_info`
--

CREATE TABLE `guardian_info` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `guardian_info`
--

INSERT INTO `guardian_info` (`id`, `fullname`, `phone`, `nid`, `email`, `address`) VALUES
(1, 'wer', 'ertre', 'ertret', 'sdf@gmail.com', ''),
(2, '', 'ertre', 'ertret', 'sdf@gmail.com', ''),
(3, '', 'ertre', 'ertret', 'sdf@gmail.com', ''),
(4, '', 'ertre', 'ertret', 'sdf@gmail.com', ''),
(5, 'Senior Rubayet', '01897589512', '2159857981', 'sn@gmail.com', 'Jashor'),
(6, 'Senior Rubayet', '01897589512', '2159857981', 'sn@gmail.com', 'Jashor'),
(7, 'Muslim', '01714014666', '6663336981', 'mizi@gmail.com', 'Banani'),
(8, 'Sokhina Begun', '01698456325', '5236548961', 'Sokhina@outlook.com', 'CoxBazar'),
(9, 'Salamat Ullah', '01705566399', '9936655071', 'ullah@gmail.com', 'Notunbazar'),
(10, 'Siddikur Rahman', '01698732561', '1652378961', 'rahman@gmail.co', 'Chandpur'),
(11, 'Raubayeah ', '01705566333', '3336655071', 'ruba@gmail.com', 'Notun'),
(12, 'Ayesha Akter', '01589411239', '9999999999', 'ayesha@gmail.com', 'Notunbazar'),
(13, 'Mizi Haque', '01478963215', '5698451236', 'mizi@gmail.com', 'Notunbazar');

-- --------------------------------------------------------

--
-- Table structure for table `guardian_users`
--

CREATE TABLE `guardian_users` (
  `id` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `guardian_users`
--

INSERT INTO `guardian_users` (`id`, `username`, `password`) VALUES
('01478963215', 'mizi', '123456789'),
('01589411239', 'ayesha', '12345678'),
('01698456325', 'nesa', 'nesa123456'),
('01698732561', 'siddik02', '12345678'),
('01705566333', 'ruba', '12345678'),
('01705566399', 'ullah10', '12345678'),
('7', 'mizivhie', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `g_post`
--

CREATE TABLE `g_post` (
  `post_id` int(10) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `g_post`
--

INSERT INTO `g_post` (`post_id`, `g_id`, `subjects`, `medium`, `salary`, `divisions`, `address`, `dateTime`) VALUES
(1, '01698456325', 'Bangla', 'English', 5000, 'Dhaka', 'Notunbazar', '2018-08-13 00:39:07'),
(2, '01698456325', 'English', 'Bangla', 9000, 'Rajshahi', 'Mohammadpur', '2018-08-13 00:39:25'),
(3, '01478963215', 'Math', 'English', 6000, 'Dhaka', 'Uttara', '2018-09-04 00:53:47'),
(4, '01478963215', 'Agriculture', 'Bangla', 3000, 'Dhaka', 'Notunbazar', '2018-09-04 00:54:07'),
(11, '01478963215', 'Bangla', 'Bangla', 2000, 'Dhaka', 'Notunbazar', '2018-09-04 01:46:40'),
(12, '01478963215', 'Math', 'English', 1000, 'Dhaka', 'Badda', '2018-09-04 01:46:52'),
(13, '01478963215', 'Bangla', 'English', 1000, 'Chittagong', 'Gulshan', '2018-09-04 01:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `g_post_temp`
--

CREATE TABLE `g_post_temp` (
  `post_id` int(10) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `g_post_temp`
--

INSERT INTO `g_post_temp` (`post_id`, `g_id`, `subjects`, `medium`, `salary`, `divisions`, `address`, `dateTime`) VALUES
(14, '01478963215', 'Math', 'Bangla', 8000, 'Dhaka', 'Sadarghat', '2018-09-04 01:47:30'),
(15, '01478963215', 'Bangla', 'English', 6000, 'Dhaka', 'Kuratoli', '2018-09-04 01:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `g_rating`
--

CREATE TABLE `g_rating` (
  `id` int(5) NOT NULL,
  `rating_value` int(5) NOT NULL,
  `rater_id` varchar(15) NOT NULL,
  `g_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `g_rating`
--

INSERT INTO `g_rating` (`id`, `rating_value`, `rater_id`, `g_id`) VALUES
(2, 0, '1', '01698456325'),
(3, 3, '01420420520', '01698456325'),
(10, 3, '01352569854', '01698456325'),
(11, 1, '01478963215', '01478963215'),
(12, 3, '017986352141', '01478963215');

-- --------------------------------------------------------

--
-- Table structure for table `request_tutor`
--

CREATE TABLE `request_tutor` (
  `post_id` int(10) NOT NULL,
  `t_id` varchar(15) NOT NULL,
  `g_id` varchar(15) NOT NULL,
  `separate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `request_tutor`
--

INSERT INTO `request_tutor` (`post_id`, `t_id`, `g_id`, `separate`) VALUES
(2, '01420420520', '01698456325', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_users`
--

CREATE TABLE `students_users` (
  `id` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `students_users`
--

INSERT INTO `students_users` (`id`, `username`, `password`) VALUES
('27', 'alu', '12345678'),
('28', 'rty', '456123123'),
('29', 'kala', '12345678'),
('01796514789', 'jnkodu', '12345678'),
('01777777777', 'reema', '12345678'),
('01423698571', 'shanto', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `institutionname` varchar(20) NOT NULL,
  `g_phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(15) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `fullname`, `institutionname`, `g_phone`, `email`, `address`, `dob`) VALUES
(14, 'kodu', 'dfgert', '01535421971', 'sdf@gmail.com', 'lala', '2018-08-29'),
(15, 'kodu', 'Stamford', '78965432112', 'kodu@gmail.com', 'Kodu', '2018-08-07'),
(16, 'Jowel', 'BBN', '01552431452', 'jowel@gmail.com', 'Notun', '2018-08-14'),
(17, 'sdf', 'sdf', '01552431452', 'jowel@gmail.com', 'Banani', '2018-08-13'),
(18, 'Jowel', 'BBN', '01552431452', 'jowel@gmail.com', 'Banani', '2018-08-15'),
(19, 'Lala', 'aaa', '01535421891', 'aa@gmail.com', 'badda', '2018-08-14'),
(20, 'Jowel', 'BBN', '01552431452', 'jowel@gmail.com', 'Banani', '2018-08-22'),
(21, 'Muslim', 'BBN', '01552431452', 'jowel@gmail.com', 'Notun', '2018-08-21'),
(22, 'Jowel', 'BBN', '01552431452', 'dsf@gmail.com', 'Banani', '2018-08-14'),
(23, 'sdfsf', 'df', '01535421971', 'fdgg@gmail.com', 'Banani', '2018-08-14'),
(24, 'sdf', 'BBN', '01535421971', 'jowel@gmail.com', 'janina', '2018-08-13'),
(25, 'sdf', 'BBN', '01535421979', 'jowel@gmail.com', 'janina', '2018-08-13'),
(26, 'Alu', 'AIUB', '01714014665', 'mohammad@gmail.', 'Ko', '2018-08-15'),
(27, 'Alu', 'AIUB', '01714014655', 'mohammad@gmail.', 'Ko', '2018-08-15'),
(28, 'Alu', 'AIUB', '01714014659', 'mohammad@gmail.', 'Ko', '2018-08-15'),
(29, 'Kala Bandor', 'AIUB', '01850351220', 'mohammad@gmail.', 'Banani', '2018-08-14'),
(30, 'Junior Kodu', 'BBN', '01796514789', 'junkodu@gmail.c', 'Bhutergoli', '2018-08-14'),
(31, 'Khadija Kubra', 'AIUB', '01777777777', 'reema@yahoo.com', 'Sahjadpur', '1997-07-26'),
(32, 'Santo Rahman', 'BBN', '01423698571', 'santo@gmail.com', 'Badda', '2018-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `st_post`
--

CREATE TABLE `st_post` (
  `post_id` int(10) NOT NULL,
  `st_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `st_post_temp`
--

CREATE TABLE `st_post_temp` (
  `post_id` int(10) NOT NULL,
  `st_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `email` varchar(30) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tutor_info`
--

INSERT INTO `tutor_info` (`id`, `fullname`, `institutionname`, `phone`, `email`, `nid`, `address`) VALUES
(1, 'wer', 'dfgert', 'ertre', 'sdf@gmail.com', 'ertret', ''),
(2, '', 'dfgert', 'ertre', 'sdf@gmail.com', 'ertret', ''),
(3, 'Mohammad Al Amin', 'AIUB', '01535421971', 'mohamamin@gmail', '0153542197', 'Notun Bazar'),
(4, 'Rubayet', 'AIUB', '01896375961', 'ruba@gmail.com', '1234567895', 'Mohammd'),
(5, 'Golam Kibria', 'UITS', '01234567892', 'emon@gmail.com', '0123356789', 'Badda'),
(6, 'Rasel Ahmed', 'Stamford', '78945612322', 'rasel@gmail.com', '9638527415', 'Nurerchala'),
(7, 'Sarfuddin Mahmud', 'AIUB', '01463987451', 'sarfu@gmail.com', '1547893641', 'Basundhara'),
(8, 'Muslim', 'sdfs', '01535421975', 'jowel@gmail.com', '6663336981', 'badda'),
(9, 'Sifu Dada', 'America', '01420420520', 'sifuda@gmail.com', '4204204201', 'Norway'),
(10, 'Mohammad Alu', 'AIUB', '01352569854', 'alu@gmail.com', '1352569854', 'Uttara'),
(11, 'Sifat Hassan', 'AIUB', '017986352141', 'sifat@gmail.com', '1114445556', 'Mirpur'),
(12, 'Jowel', 'MIST', '01714014669', 'jowel@gmail.com', '9999888771', 'amin');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_post`
--

CREATE TABLE `tutor_post` (
  `post_id` int(10) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_post_temp`
--

CREATE TABLE `tutor_post_temp` (
  `post_id` int(10) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  `subjects` varchar(15) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL,
  `divisions` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tutor_post_temp`
--

INSERT INTO `tutor_post_temp` (`post_id`, `tutor_id`, `subjects`, `medium`, `salary`, `divisions`, `address`, `dateTime`) VALUES
(1, '01420420520', 'English', 'English', 8000, 'Chittagong', 'Janina kisu', '2018-08-13 00:37:44');

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
-- Dumping data for table `tutor_users`
--

INSERT INTO `tutor_users` (`id`, `username`, `password`) VALUES
('6', 'rasel', '12345678'),
('01420420520', 'sefuda', '123456789'),
('01352569854', 'alu123', '12345678'),
('017986352141', 'sifat', '123456789'),
('01714014669', 'jowel', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `t_rating`
--

CREATE TABLE `t_rating` (
  `id` int(5) NOT NULL,
  `rating_value` int(5) NOT NULL,
  `rater_id` varchar(15) NOT NULL,
  `t_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `t_rating`
--

INSERT INTO `t_rating` (`id`, `rating_value`, `rater_id`, `t_id`) VALUES
(1, 5, '01698456325', '01420420520'),
(2, 1, '017986352141', '017986352141'),
(3, 1, '01714014669', '01714014669');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`iddddd`);

--
-- Indexes for table `apply_g_post`
--
ALTER TABLE `apply_g_post`
  ADD PRIMARY KEY (`post_separate`);

--
-- Indexes for table `guardian_info`
--
ALTER TABLE `guardian_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian_users`
--
ALTER TABLE `guardian_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_post_temp`
--
ALTER TABLE `g_post_temp`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `g_rating`
--
ALTER TABLE `g_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_tutor`
--
ALTER TABLE `request_tutor`
  ADD PRIMARY KEY (`separate`);

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
-- Indexes for table `t_rating`
--
ALTER TABLE `t_rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `iddddd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply_g_post`
--
ALTER TABLE `apply_g_post`
  MODIFY `post_separate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guardian_info`
--
ALTER TABLE `guardian_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `g_post_temp`
--
ALTER TABLE `g_post_temp`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `g_rating`
--
ALTER TABLE `g_rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_tutor`
--
ALTER TABLE `request_tutor`
  MODIFY `separate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `st_post_temp`
--
ALTER TABLE `st_post_temp`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_info`
--
ALTER TABLE `tutor_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tutor_post_temp`
--
ALTER TABLE `tutor_post_temp`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_rating`
--
ALTER TABLE `t_rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
