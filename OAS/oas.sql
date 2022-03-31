-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 05:48 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`question_id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `marks` int(10) NOT NULL,
  `t_code` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `answer`, `marks`, `t_code`) VALUES
(15, 'eeee', 'eeeeee', 3, 7),
(16, 'gkgkkgkg', 'fkkkkffffffffffffffff', 22, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`student_id` int(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `code` int(20) NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `user`, `f_name`, `l_name`, `password`, `email`, `contact`, `address`, `city`, `code`, `image`) VALUES
(6, 'abdul', 'abdul', 'salam', 'abdul', 'abdslaam@gmail.com', 200000, 'ajdjj', 'sahiwal', 11, 'photo_0162531454foirkw.jpg'),
(7, 'ahmad', 'ahmad', 'ahmad', 'ahmad', 'ahmadusman@gmail.com', 2147483647, 'Farid Town Sahiwal F BLock Sahiwal', 'Sahiwal', 33, '532051_512764388787931_886952548_n.jpg'),
(8, 'farooq', 'farooq', 'dogar', '1234', 'farooq@gmail.com', 988767655, 'dfjfjfffffffffffffffffffffffffffff', 'sahiwal', 22, '10703846_666423296808756_2601343077058275881_n.jpg'),
(10, 'ssssss', 'ssssssssss', 'sssssss', 'ssssssss', 'sssgmg.com', 3333333, 'sddd', 'ddd', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_question`
--

CREATE TABLE IF NOT EXISTS `student_question` (
`id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `t_code` int(10) NOT NULL,
  `s_answer` varchar(5000) NOT NULL,
  `answer` enum('answered','unanswered','review') NOT NULL DEFAULT 'answered'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

CREATE TABLE IF NOT EXISTS `student_test` (
  `student_id` int(20) NOT NULL,
  `t_code` int(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `correct_answer` varchar(200) DEFAULT NULL,
  `status` enum('over','inprogress') DEFAULT 'over'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`subject_id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `description`) VALUES
(2, 'cc', 'ccc'),
(3, 'Ai', 'ai'),
(4, 'Compile Construction', 'Complier Construction\r\n'),
(5, 'kk', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `subject_register`
--

CREATE TABLE IF NOT EXISTS `subject_register` (
`id` int(20) NOT NULL,
  `student_id` int(30) unsigned NOT NULL,
  `subject_id` int(20) unsigned NOT NULL,
  `register` enum('Register','unregister') NOT NULL DEFAULT 'Register'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_register`
--

INSERT INTO `subject_register` (`id`, `student_id`, `subject_id`, `register`) VALUES
(8, 7, 2, 'Register'),
(9, 6, 2, 'Register'),
(10, 6, 3, 'Register'),
(11, 6, 4, 'Register'),
(13, 7, 3, 'Register'),
(14, 7, 4, 'Register');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_conductor`
--

CREATE TABLE IF NOT EXISTS `teacher_conductor` (
`teacher_id` int(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(17) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `code` int(10) NOT NULL,
  `subject_id` int(20) unsigned DEFAULT NULL,
  `account` enum('Admin','teacher') NOT NULL DEFAULT 'teacher'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_conductor`
--

INSERT INTO `teacher_conductor` (`teacher_id`, `user`, `f_name`, `l_name`, `password`, `email`, `contact`, `address`, `city`, `code`, `subject_id`, `account`) VALUES
(1, 'admin', 'j', 'jj', 'admin', 'jj', 3, 'i', '6', 7, NULL, 'Admin'),
(2, 'Asif', 'Asif', 'Suryani', 'asif', 'asif@gmail.com', 2147483647, 'chak no 123GB tidiyan wala', 'Faislabad', 33, 3, 'teacher'),
(5, 'h', 'g', 'w', '22', 'a@gmai.com', 4, '4', '4', 4, 4, 'teacher'),
(6, 'koo', 'y', 't', 't', 't@gmail.com', 2, '2', '2', 2, 2, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
`test_id` int(10) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_description` varchar(50) NOT NULL,
  `total_question` int(10) NOT NULL,
  `t_date` date NOT NULL,
  `t_time` time NOT NULL,
  `t_from` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `t_to` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `duration` int(10) NOT NULL,
  `t_code` int(10) NOT NULL,
  `subject_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `t_name`, `t_description`, `total_question`, `t_date`, `t_time`, `t_from`, `t_to`, `duration`, `t_code`, `subject_id`) VALUES
(6, 'gg', 'xlx', 1, '0000-00-00', '00:00:00', '2016-09-28 14:48:06', '0000-00-00 00:00:00', 2, 2, 3),
(8, 'jjj', 'hhh', 7, '0000-00-00', '00:00:00', '2016-09-28 14:52:30', '0000-00-00 00:00:00', 6, 7, 2),
(9, 'fkfk', 'eelkek1`', 2, '0000-00-00', '00:00:00', '2016-09-28 15:06:36', '0000-00-00 00:00:00', 2, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`question_id`), ADD KEY `code` (`t_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`student_id`), ADD UNIQUE KEY `code` (`code`), ADD KEY `user` (`user`);

--
-- Indexes for table `student_question`
--
ALTER TABLE `student_question`
 ADD PRIMARY KEY (`id`), ADD KEY `student_id` (`student_id`), ADD KEY `t_code` (`t_code`), ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `student_test`
--
ALTER TABLE `student_test`
 ADD PRIMARY KEY (`student_id`), ADD KEY `test_id` (`t_code`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subject_register`
--
ALTER TABLE `subject_register`
 ADD PRIMARY KEY (`id`), ADD KEY `subject_id` (`subject_id`), ADD KEY `student_id` (`student_id`), ADD KEY `student_id_2` (`student_id`);

--
-- Indexes for table `teacher_conductor`
--
ALTER TABLE `teacher_conductor`
 ADD PRIMARY KEY (`teacher_id`), ADD UNIQUE KEY `subject_id_2` (`subject_id`), ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`test_id`), ADD UNIQUE KEY `t_code` (`t_code`), ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `student_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student_question`
--
ALTER TABLE `student_question`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `subject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subject_register`
--
ALTER TABLE `subject_register`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `teacher_conductor`
--
ALTER TABLE `teacher_conductor`
MODIFY `teacher_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_question`
--
ALTER TABLE `student_question`
ADD CONSTRAINT `s_q_fk` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`),
ADD CONSTRAINT `s_student_fk` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
ADD CONSTRAINT `s_t_fk` FOREIGN KEY (`t_code`) REFERENCES `test` (`t_code`);

--
-- Constraints for table `student_test`
--
ALTER TABLE `student_test`
ADD CONSTRAINT `student_student_test_fk` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
ADD CONSTRAINT `student_test_fk` FOREIGN KEY (`t_code`) REFERENCES `test` (`t_code`);

--
-- Constraints for table `subject_register`
--
ALTER TABLE `subject_register`
ADD CONSTRAINT `s_y_fk` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `teacher_conductor`
--
ALTER TABLE `teacher_conductor`
ADD CONSTRAINT `techer_s_fk` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
ADD CONSTRAINT `test_subject_fk` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
