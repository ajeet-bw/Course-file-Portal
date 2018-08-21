-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2018 at 04:41 अपराह्न
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `ques`, `image`, `video`) VALUES
(1, 'name', NULL, NULL),
(2, 'my', NULL, NULL),
(3, 'ghgh', NULL, NULL),
(4, 'hlo', 'images/IMG_20170820_190234.jpg', ''),
(5, 'hlo', 'images/IMG_20170820_190234.jpg', ''),
(6, 'me', 'images/eula.1028.txt', ''),
(9, 'unit 1', 'images/Dbms_unit1_chap2_20170830101137.pdf', '12'),
(10, '123', 'images/Dbms_unit1_chap1_20170830101112.pdf', '12'),
(11, '5 file', '5.pdf', '5'),
(12, '4 file', '4.pdf', '4'),
(13, '15 file', '15.pdf', '15'),
(14, '17 file', '17.pdf', '17'),
(15, '16 file', '16.pdf', '16'),
(16, '13 file', '13.pdf', '13'),
(17, '2 file', '2.pdf', '2'),
(18, '3 file', '3.pdf', '3'),
(19, '18 file', '18.pdf', '18');

-- --------------------------------------------------------

--
-- Table structure for table `subject_assign`
--

CREATE TABLE `subject_assign` (
  `sno` int(100) NOT NULL,
  `t_id` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `year` int(20) NOT NULL,
  `section` varchar(200) NOT NULL,
  `exist` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_assign`
--

INSERT INTO `subject_assign` (`sno`, `t_id`, `subject`, `year`, `section`, `exist`) VALUES
(1, '12', 'DAA', 2017, 'A', 0),
(2, '12', 'DBMS', 2017, 'A', 1),
(3, '12', 'CA', 2017, 'A', 1),
(4, '17', 'EE', 2017, 'A', 1),
(5, '17', 'HV', 2017, 'A', 1),
(6, '17', 'DLD', 2017, 'A', 1),
(7, '2', 'TAFL', 2017, 'A', 0),
(8, '3', 'PPL', 2017, 'A', 0),
(9, '19', 'DBMS', 2, 'C', 0),
(10, '19', 'DSGT', 3, 'A', 0),
(11, '20', 'DSUC', 2, 'A', 1),
(12, '20', 'DBMS', 3, 'B', 0),
(13, '20', 'FUZZY', 4, 'A', 1),
(14, '20', 'FUZZY', 4, 'A', 0),
(15, '21', 'DAA', 3, 'A', 1),
(16, '21', 'OS', 2, 'C', 1),
(17, '21', 'TAFL', 2, 'B', 1),
(18, '22', 'DBMS', 2, 'A', 1),
(19, '22', 'DLD', 3, 'B', 0),
(20, '13', 'dbms', 3, 'a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `rank` varchar(20) NOT NULL DEFAULT 'teacher'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `rank`) VALUES
(12, 'pk sharma', 'stu@gmail.com', '123', 'teacher'),
(13, 'Shivam', 'shivam@gmail.com', '123', 'teacher'),
(14, 'Anmol', 'a@gmail.com', '123', 'teacher'),
(17, 'PK SHARMA', 'pk@gmail.com', '123', 'teacher'),
(18, 'HEAD', 'admin@gmail.com', '123', 'admin'),
(19, 'ankur', 'ankur@gmail.com', '12345', 'student'),
(20, 'AK SHARMA', 'aksharma@gmail.com', '123', 'teacher'),
(21, 'ayush', 'ayush@gmail.com', 'ayush123', 'teacher'),
(22, 'AKS', 'aks@gmail.com', '123', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `subject_assign`
--
ALTER TABLE `subject_assign`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `subject_assign`
--
ALTER TABLE `subject_assign`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
