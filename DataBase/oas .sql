-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 05:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
  `question_id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `marks` int(10) NOT NULL,
  `t_code` int(10) unsigned NOT NULL,
  PRIMARY KEY (`question_id`),
  KEY `code` (`t_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `answer`, `marks`, `t_code`) VALUES
(20, 'What is Operating System?', 'An operating system (OS) is system software that manages computer hardware and software resources and provides common services for computer programs. All computer programs, excluding firmware, require an operating system to function.', 7, 111),
(21, 'What is pixel in term of computer Graphics?', 'A minute area of illumination on a display screen, one of many from which an image is composed, in other words an image has many pixels.', 5, 112),
(22, 'What is machine learning?', 'Machine learning is a type of artificial intelligence (AI) that provides computers with the ability to learn without being explicitly programmed. Machine learning focuses on the development of computer programs that can teach themselves to grow and change when exposed to new data.\r\n', 6, 113);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `code` (`code`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `user`, `f_name`, `l_name`, `password`, `email`, `contact`, `address`, `city`, `code`, `image`) VALUES
(12, 'Ausaf', 'Ausaf', 'Sharif', 'ausaf', 'krazzyjoker786@gmail.com', '0300-9695123', 'House No 90, shadmaan Town', 'sahiwal', 'FA12-BCS-10', 'first.jpg'),
(13, 'Mubashar', 'Mubashar', 'Hassan', 'mubashar', 'mubifatyana120@mail.com', '0312-6754374', 'House No 83, shadmaan Town', 'Sahiwal', 'FA12-BCS-12', 'Ali_Sarfraz.jpg'),
(14, 'Mohsin', 'Mohsin', 'Ali', 'mohsin', 'mohsinmoughal1211@yahoo.com', '0301-7823453', 'House No 107, Fateh Sher colony', 'Sahiwal', 'FA12-BCS-13', '606.jpg'),
(15, 'Abdul', 'Abdul', 'Salam', 'abdul', 'abdull.salam100@yahoo.com', '0300-9695664', 'Chak-Alaf 100, near Botipaal terminal ', 'sahiwal', 'FA12-BCS-14', 'Abdul.jpg'),
(16, 'Bilal', 'Bilal', 'Arshad', 'bilal', 'bilalarshad097@yahoo.com', '0321-9056783', 'House No 90-D, Jinnah Colony', 'Faislabad', 'FA12-BCS-16', 'bilal.jpg'),
(17, 'Sannan', 'Sannan', 'Qayyum', 'sannan', 'sunnych123@yahoo.com', '0304-7321751', 'House No 365, Block D Fareed town', 'Sahiwal', 'FA12-BCS-17', 'sannan.jpg'),
(18, 'Ahmad', 'Ahmad', 'Usman', 'ahmad', 'ahmadusmankhattak@yahoo.com', '0342-4248791', 'House No 348, Block w Scheme no 3, Fareed Town ', 'Sahiwal', 'FA12-BCS-18', 'ahmad.jpg'),
(19, 'Mubashaar', 'Mubashaar', 'Saleem', 'mubashaar', 'mubasharsaleem128@hotmail.com', '0333-3637987', 'Chack 134 9/l, Harrapa road', 'Chichawatni', 'FA12-BCS-19', 'mubashar1.jpg'),
(20, 'Asad', 'Asad', 'Haneef', 'asad', 'asadhaneef26@hotmail.com', '0321-9053703', 'Chack 26 A/R, Multan Road', 'Khanewal', 'FA12-BCS-20', 'asad.jpg'),
(21, 'Zarnoosh', 'Zarnoosh', 'Bari', 'zarnoosh', 'zarnooshbari87@yahoo.com', '0312-9874304', 'House No 12-E, Peoples Colony near Mall Road', 'Faislabad', 'FA12-BCS-21', 'zarnoosh.jpg'),
(22, 'Zeeshan', 'Zeeshan', 'Ali', 'zeeshan', 'zeshana90@hotmail.com', '0311-2453421', 'House No.09, shadman town', 'Islamabad', 'FA12-BCS-23', 'zeeshan.jpg'),
(23, 'Ashfaq ', 'Ashfaq', 'Ahmad', 'ashfaq', 'ashfaqahmad345@hotmail.com', '0345-9007865', 'House No 97,Block w', 'Sahiwal', 'FA12-BCS-24', 'ashfaq.jpg'),
(24, 'Manzoor', 'Manzoor', 'Hussain', 'manzoor', 'mahussain_12@gmail.com', '0304-5629856', 'Chak 11 near Tulamba', 'Mian Channun', 'FA12-BCS-25', 'manzoor.jpg'),
(25, 'Abid', 'Muhammad', 'abid', 'abid', 'm.abid_09@hotmail.com', '0301-4539875', 'House No 12, civial colony', 'Faislabad', 'FA12-BCS-27', 'abid.jpg'),
(26, 'Soban', 'Soban', 'Khan', 'soban', 'soban_khan120@yahoo.com', '0312-6756743', 'House no 89,near faisal masjid', 'Arifwala', 'FA12-BCS-29', 'soban.jpg'),
(27, 'df', 'df', 'df', 'df', 'df@gmail.com', '34', 'df', 'df', 'df', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_question`
--

CREATE TABLE IF NOT EXISTS `student_question` (
  `student_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `t_code` int(10) NOT NULL,
  `s_answer` varchar(50000) NOT NULL,
  `answer` enum('answered','unanswered','review') NOT NULL DEFAULT 'answered',
  PRIMARY KEY (`student_id`,`question_id`,`t_code`),
  KEY `student_id` (`student_id`),
  KEY `t_code` (`t_code`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_question`
--

INSERT INTO `student_question` (`student_id`, `question_id`, `t_code`, `s_answer`, `answer`) VALUES
(12, 20, 111, 'Operating system is the software which is closest software connected to tha hardware it manges all the activities and procedures and processes and programs of the system from start to end.', 'answered'),
(12, 21, 112, 'Pixel is the smallest unit of the computer graphics, all the pictures and graphics are ultimately made of so many pixels. Without it the graphics are not possible.', 'answered'),
(12, 22, 113, 'Machine learning is the process by which a machine gets input from the environment ( which can be general or specific)  analysis that input and calculate the result on its own by getting different types of inputs.', 'answered'),
(13, 20, 111, 'Operating system  is utilized by each  general computer to run different programs and applications.It is a Software that speaks with the equipment of the computer system and permits program to run.It performs undertakings, for example, perceiving the contribution from information gadgets and sending output to the show screen furthermore controlling the peripheral devices, for example, printers.It is likewise in charge of security that unapproved clients don''t get to the system.', 'answered'),
(13, 22, 113, 'It is the study of motivating computers to act without being expressly programmed.A method for instructing computers to make and enhance expectations or practices in light of a few information.\r\n', 'answered'),
(14, 20, 111, 'The operating system is the most important program that runs on a computer. Every general purpose computer must have an operating system to run other programs and applications.', 'answered'),
(14, 21, 112, 'pixel is the basic unit of programmable color on a computer display or in a computer image. Think of it as a logical  rather than a physical  unit. A Graphics Interchange Format file, for example, contains a bitmap of an image.\r\n', 'answered'),
(14, 22, 113, ' Machine learning focuses on the development of computer programs that can teach themselves to grow and change when exposed to new data.', 'answered'),
(15, 20, 111, 'The operating system is the most important program that runs on a computer. Every general purpose computer must have an operating system to run other programs and applications.', 'answered'),
(15, 21, 112, 'pixel is the basic unit of programmable color on a computer display or in a computer image. Think of it as a logical  rather than a physical  unit. A Graphics Interchange Format file, for example, contains a bitmap of an image.\r\n', 'answered'),
(15, 22, 113, ' Machine learning focuses on the development of computer programs that can teach themselves to grow and change when exposed to new data.', 'answered'),
(16, 20, 111, 'A software system that manages software and hardware resources and common services provide of computer program. Excluding firmware all program require an operating system to function.\r\n', 'answered'),
(16, 21, 112, ' In computer graphics Pixel is the basic logical unit. Pixels are joined to shape an entire picture, video, content or any visible thing on a PC show. Pixel are also known as picture element. \r\n', 'answered'),
(16, 22, 113, 'Machine learning is a type of artificial intelligence (AI) that enhances the ability to improve its own performance of a machine. Machine learning concentrates on the advancement of computer program that can show themselves to develop and change when presented to new information. \r\n', 'answered'),
(17, 20, 111, 'An operating system is the software of system that can manages the hardware of computer and software resources and provide some basic services for programs of computer. So we can say that this type of software are designed to handle the some basic operations of computer like sending the instructions to hardwareâ€™s devices such as disk driver and computer screen.\n', 'answered'),
(17, 21, 112, 'Pixel is the smallest part or unit of the image that is displayed on television screen, on a printer and on the different type of computers. In a single image pixels are divided into rows and columns. We can estimate the result of an image by pixels. As the number of pixels increase the result of an image will be more clear and good.\r\n', 'answered'),
(17, 22, 113, 'As the name is showing its significance machine learning is the ability of machine to improve the results and performance on the bases of previous results. Machine learning is the class that teach us the end to end process of data investigation.  In this class we have to identify the and extract the useful features that will represent the data in best way and most important machine learning algorithms.\r\n', 'answered'),
(18, 20, 111, 'operating system is software that helps to execute basic functions such as scheduling of task and executing application and showing input output.', 'answered'),
(18, 21, 112, 'a pixel is a smallest portion of an image which combines together to form a image. a single image has many pixels, so we can say that pixel is a unit of image. it has some value which represents color.', 'answered'),
(18, 22, 113, 'Machine learning is knowledge which we give to machine so that it can identify that object or similar object next time on basis of previous knowledge.', 'answered'),
(19, 20, 111, 'Operating System is a software that manages computer hardware and software resources and perform basic functions e.g file management, memory management and handle Input /Output.', 'answered'),
(19, 21, 112, 'Pixel is a smallest unit or dot on computer display or image which have a color.', 'answered'),
(19, 22, 113, ' Machine learning is a type of AI that gives the ability to learn without explicitly programmed.', 'answered'),
(20, 20, 111, 'An operating system is the most important software that runs on a computer. It manages the computer''s memory and processes, as well as all of its software and hardware.\n', 'answered'),
(21, 20, 111, 'Operating system helps build to support the basic functionality of computer it plays important role in basic functionality of system such as schedule management.', 'answered'),
(21, 21, 112, 'Pixel is smalest element of a pic, in other words we can say that an image is composed of many pixels.', 'answered'),
(21, 22, 113, 'Ability of machine like thinking and recognizing objects on the basis of previous knowledge.', 'answered'),
(22, 20, 111, 'Operating system is the layer between hardware and software of any machine, which operates the   system and make it easier for user to communicate with hardware for their problems.\r\n', 'answered'),
(22, 21, 112, 'The single point in two co-ordinates (x,y) forms  a pixel on screen. A simple image consist of thousands of pixels which join to form a single picture.', 'answered'),
(22, 22, 113, 'Machine learning is the algorithms to operate the machine. This learning provides an efficient way for machine to work. Machine learning is the about the learning of different ways to do a same job for a machine.\r\n', 'answered'),
(23, 20, 111, 'An operating system is system software that manages computer hardware and software resources and provides common services for computer programs.\r\n', 'answered'),
(23, 21, 112, 'A pixel (short for picture element, using the common abbreviation "pix" for "picture") is one of the many tiny dots that make up the representation of a picture in a computer’s memory. Each such information element is not really a dot, nor a square, but an abstract sample.', 'answered'),
(23, 22, 113, 'Ability of a machine to improve its own performance through the use of a software that employs artificial intelligence techniques to mimic the ways by which humans seem to learn, such as repetition and experience.', 'answered'),
(24, 20, 111, 'The low-level software that supports a computer''s basic functions, such as scheduling tasks and controlling peripherals.\r\n', 'answered'),
(24, 21, 112, 'Pixel is the basic unit of programmable color on a display or in a computer image. Think of it as a logical - rather than a physical - unit. The physical size of a pixel depends on how you''ve set the resolution for the display screen.\r\n', 'answered'),
(24, 22, 113, 'It is a type of artificial intelligence (AI) that provides computers with the ability to learn without being explicitly programmed. It focus on the development of computer programs that can teach themselves to grow and change when exposed to new data.', 'answered'),
(25, 20, 111, 'Each Software that supports a computer''s basic functions,  scheduling tasks, executing applications LINIX operating system.', 'answered'),
(25, 21, 112, 'A pixel is one of the many illuminated tiny dots that make up the representation of a picture in a computer''s memory.\r\n', 'answered'),
(25, 22, 113, 'Machine learning is a method of data analysis that automates analytical model building. Using algorithms that iteratively learn from data.', 'answered'),
(26, 20, 111, 'It is low-level software that supports a computer''s basic functions such as scheduling tasks and controlling peripherals. operating system also use to run a system or PC. It is very important software for a system.', 'answered'),
(26, 21, 112, 'Pixel Key Word Is Use as a element of a picture. A pixel is a single point in a graphic image. Thousands (or millions) of pixels are used to make a picture also give resolution of picture.', 'answered'),
(26, 22, 113, 'Machine learning is a type of artificial intelligence (AI) that helps computers with Programmed. Machine learning focuses on the development of computer programs that can teach themselves to grow and change when new data is arrived.\r\n', 'answered');

-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

CREATE TABLE IF NOT EXISTS `student_test` (
  `student_id` int(20) NOT NULL,
  `test_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `test_end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `t_code` int(20) NOT NULL,
  `correct_answer` varchar(200) DEFAULT NULL,
  `status` enum('over','inprogress') DEFAULT 'over',
  PRIMARY KEY (`student_id`),
  KEY `test_id` (`t_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `description`) VALUES
(7, 'Operating System', 'study of basics of OS'),
(8, 'Computer Vision', 'To give Vision to computer'),
(9, 'Machine Learning', 'give knowledge to machine');

-- --------------------------------------------------------

--
-- Table structure for table `subject_register`
--

CREATE TABLE IF NOT EXISTS `subject_register` (
  `student_id` int(30) unsigned NOT NULL,
  `subject_id` int(20) unsigned NOT NULL,
  `register` enum('Register','unregister') NOT NULL DEFAULT 'Register',
  PRIMARY KEY (`student_id`,`subject_id`),
  KEY `subject_id` (`subject_id`),
  KEY `student_id` (`student_id`),
  KEY `student_id_2` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_register`
--

INSERT INTO `subject_register` (`student_id`, `subject_id`, `register`) VALUES
(12, 7, 'Register'),
(12, 8, 'Register'),
(12, 9, 'Register'),
(13, 7, 'Register'),
(13, 8, 'Register'),
(13, 9, 'Register'),
(14, 7, 'Register'),
(14, 8, 'Register'),
(14, 9, 'Register'),
(15, 7, 'Register'),
(15, 8, 'Register'),
(15, 9, 'Register'),
(16, 7, 'Register'),
(16, 8, 'Register'),
(16, 9, 'Register'),
(17, 7, 'Register'),
(17, 8, 'Register'),
(17, 9, 'Register'),
(18, 7, 'Register'),
(18, 8, 'Register'),
(18, 9, 'Register'),
(19, 7, 'Register'),
(19, 8, 'Register'),
(19, 9, 'Register'),
(20, 7, 'Register'),
(20, 8, 'Register'),
(20, 9, 'Register'),
(21, 7, 'Register'),
(21, 8, 'Register'),
(21, 9, 'Register'),
(22, 7, 'Register'),
(22, 8, 'Register'),
(22, 9, 'Register'),
(23, 7, 'Register'),
(23, 8, 'Register'),
(23, 9, 'Register'),
(24, 7, 'Register'),
(24, 8, 'Register'),
(24, 9, 'Register'),
(25, 7, 'Register'),
(25, 8, 'Register'),
(25, 9, 'Register'),
(26, 7, 'Register'),
(26, 8, 'Register'),
(26, 9, 'Register'),
(27, 7, 'Register'),
(27, 8, 'Register'),
(27, 9, 'Register');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_conductor`
--

CREATE TABLE IF NOT EXISTS `teacher_conductor` (
  `teacher_id` int(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(17) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `code` int(10) NOT NULL,
  `subject_id` int(20) unsigned DEFAULT NULL,
  `account` enum('Admin','teacher') NOT NULL DEFAULT 'teacher',
  PRIMARY KEY (`teacher_id`),
  UNIQUE KEY `subject_id_2` (`subject_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `teacher_conductor`
--

INSERT INTO `teacher_conductor` (`teacher_id`, `user`, `f_name`, `l_name`, `password`, `email`, `contact`, `address`, `city`, `code`, `subject_id`, `account`) VALUES
(1, 'admin', 'Admin', 'jj', 'admin', 'adminoas@hotmail.com', '0342-6785421', 'House No 34-A, D chowk', 'Faislabad', 7, NULL, 'Admin'),
(9, 'Asif', 'Asif', 'Suryani', 'asif', 'asifsuryani@gmail.com', '0312-7645134', 'Peoples Colony near D chowk ', 'Faislabad', 100, 7, 'teacher'),
(10, 'Ali', 'Ali', 'Abbas', 'ali', 'aliabbas108@yahoo.com', '0301-9087901', 'Defense Housing Authority phase 3', 'Lahore', 105, 9, 'teacher'),
(11, 'Javeed', 'Javeed', 'Ferzand', 'javeed', 'javeedferzand34@gmail.com', '0322-6906925', 'Welfare society near madina masjid', 'Bahawalnagar', 110, 8, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(20) NOT NULL,
  `t_description` varchar(50) NOT NULL,
  `test_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `test_end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `t_from` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `t_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration` int(10) NOT NULL,
  `t_code` int(10) NOT NULL,
  `subject_id` int(10) unsigned DEFAULT NULL,
  `status` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`test_id`),
  UNIQUE KEY `t_code` (`t_code`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `t_name`, `t_description`, `test_start`, `test_end`, `t_from`, `t_to`, `duration`, `t_code`, `subject_id`, `status`) VALUES
(22, 'Quiz 1', 'Basics', '2016-11-26 14:01:22', '2016-11-26 14:07:22', '2016-11-11 19:00:00', '2016-11-29 19:00:00', 6, 111, 7, 'false'),
(23, 'Quiz 2', 'Definations', '2016-11-26 13:37:07', '2016-11-26 13:39:51', '2016-11-11 19:00:00', '2016-11-29 19:00:00', 6, 112, 8, 'false'),
(24, 'Quiz 3', 'basic definations', '2016-11-26 13:37:13', '2016-11-26 13:39:57', '2016-11-11 19:00:00', '2016-11-29 19:00:00', 6, 113, 9, 'false');

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
