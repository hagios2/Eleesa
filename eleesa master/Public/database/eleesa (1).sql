-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2019 at 09:31 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eleesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(100) NOT NULL,
  `sem_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course`, `sem_id`) VALUES
(1, 'ELNG 103 Applied Electricity', 1),
(2, 'MECH 103 Technical Drawing', 1),
(3, 'MATH 109 Engineering Mathematics I', 1),
(4, 'ELNG 101 Electrical Engineering Technology', 1),
(5, 'SENG 101 Intro To Environmental Studies', 1),
(6, 'UENR 101 Communication Skills', 1),
(7, 'UENR 103 Computer Literacy and Information Technology', 1),
(8, 'UENR 105 Intro To French I', 1),
(9, 'CENG 102 Basic Electronics', 2),
(10, 'ELNG 102 Electrical Engineering Drawing', 2),
(11, 'MATH 114 Engineering Mathematics II', 2),
(12, 'MECH 106 Basic Mechanics', 2),
(13, 'ELNG 114 Intro to Electrical Machines', 2),
(14, 'MECH 122 Thermodynamics For Electrical Eng.', 2),
(15, 'UENR 110 Ghanaian & African Studies', 2),
(16, 'UENR 106 Intro To French II', 2),
(17, 'CENG 201 Electric Circuits Design ', 3),
(18, 'CENG 205 Computer Programming for Engineers', 3),
(19, 'CENG 207 Solid State Electronic Devices', 3),
(20, 'CENG 209 Web Page Design', 3),
(21, 'CENG 203 Computer Engineering Lab I', 3),
(22, 'MATH 209 Linear Algebra for Engineers', 3),
(23, 'UENR 201 Analytical Reading and Reasoning', 3),
(24, 'UENR 203 French for General Communication I', 3),
(25, 'CENG 206 Digital Logic Design', 4),
(26, 'CENG 208 Data Structures & Algorithms', 4),
(27, 'ELNG 204 Matlab and Labview For Electrical Eng.', 4),
(28, 'MATH 204 Differential Equations & Applications', 4),
(29, 'ELNG 222 Signals & Systems', 4),
(30, 'ELNG 208 Electromagnetic Field Theory', 4),
(31, 'ELNG 202 Electrical Measurements & Instrumentation', 4),
(32, 'UENR 202 Science, Technology and Society', 4),
(33, 'UENR 204 French for General Communication II', 4),
(34, 'CENG 303 Computer Engineering Lab II ', 5),
(35, 'ELNG 301 Microprocessor', 5),
(36, 'ELNG 303 Linear Electronic Circuits', 5),
(37, 'ELNG 305 Classical Control Systems', 5),
(38, 'ELNG 307 Analog and Digital Communications', 5),
(39, 'MATH 305 Numerical Methods for Engineers', 5),
(40, 'STAT 309 Probability & Statistics for Engineers', 5),
(41, 'UENR 301 Oral French for General Communication', 5),
(42, 'ELNG 103 Applied Electricity', 9),
(43, 'ELNG 101 Electrical Engineering Technology', 9),
(44, 'MATH 109 Engineering Math I', 9),
(45, 'SENG 105 Intro To Environmental Studies', 9),
(46, 'UENR 101 Academic writing and Communication Skills', 9),
(47, 'UENR 103 Computer Literacy & Information Technology', 9),
(48, 'MECH 103 Technical Drawing', 9),
(49, 'UENR 105 Intro To French I ', 9),
(50, 'CENG 102 Basic Electronics', 10),
(51, 'ELNG 102 Electrical Engineering Drawing', 10),
(52, 'MATH 114 Engineering Mathematics II', 10),
(53, 'MECH 106 Basic Mechanics', 10),
(54, 'MECH 122 Themodynamics for Electrical Eng.', 10),
(55, 'ELNG 106 Transformers and Electromechanical Energy Conversion', 10),
(56, 'UENR 110 Ghanaian & African Studies', 10),
(57, 'UENR 106 Intro To French II', 10),
(58, 'CENG 201 Electric Circuits Design', 11),
(59, 'CENG 205 Computer Programming for Engineers', 11),
(60, 'CEN 207 Solid State Electronic Devices', 11),
(61, 'ELNG 205 Direct Current and Induction Machines', 11),
(62, 'MATH 209 Linear Algebra for Engineers', 11),
(63, 'UENR 201 Analytical Reading and Reasoning', 11),
(64, 'UENR 202 French for General Communication I', 11),
(65, 'ELNG 201 Electrical Engineering Lab I', 11),
(66, 'CENG 206 Digital Logic Design', 12),
(67, 'ELNG 218 Synchronous Machines', 12),
(68, 'ELNG 202 Electrical Measurements & Instrumentation', 12),
(69, 'ELNG 204 Matlab & Labview for Electrical Eng.', 12),
(70, 'ELNG 208 Electromagnetic Field Theory', 12),
(71, 'ELNG 222 Signals & Systems', 12),
(72, 'MATH 204 Differential Equations & Applications', 12),
(73, 'UENR 202 Science, Technology and Society', 12),
(74, 'UENR 204 French for General Communications II', 12),
(75, 'ELNG 309 Electrical Power Generation, Transmission and Distribution', 13),
(76, 'ELNG 301 Microprocessor', 13),
(77, 'ELNG 303 Linear Electronic Circuits', 13),
(78, 'ELNG 305 Classical Control Systems', 13),
(79, 'ELNG 307 Analog & Digital Communications', 13),
(80, 'MATH 305 Numerical Methods for Engineers', 13),
(81, 'STAT 309 Probability & Statistics for Engineers', 13),
(82, 'UENR 301 Oral French for General Communications', 13),
(83, 'ELNG 311 Electrical Engineering Lab II ', 13);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `mat_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `book` varchar(100) DEFAULT NULL,
  `slide` varchar(100) DEFAULT NULL,
  `pasco` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`mat_id`, `course_id`, `book`, `slide`, `pasco`) VALUES
(1, 1, 'Fundamentals of Electric Circuits.pdf', NULL, NULL),
(2, 5, 'Env Sci1.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `prog_id` int(11) NOT NULL AUTO_INCREMENT,
  `program` varchar(10) NOT NULL,
  PRIMARY KEY (`prog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`prog_id`, `program`) VALUES
(1, 'ce100'),
(2, 'ce200'),
(3, 'ce300'),
(4, 'ce400'),
(5, 'eee100'),
(6, 'eee200'),
(7, 'eee300'),
(8, 'eee400');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_id` int(11) NOT NULL,
  `sem` varchar(40) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `prog_id`, `sem`) VALUES
(1, 1, 'CE100 First Semester'),
(2, 1, 'CE100 Second Semester'),
(3, 2, 'CE200 First Semester'),
(4, 2, 'CE200 Second Semester'),
(5, 3, 'CE300 First Semester'),
(6, 3, 'CE300 Second Semester'),
(7, 4, 'CE400 First Semester'),
(8, 4, 'CE400 Second Semester'),
(9, 5, 'EEE100 First Semester'),
(10, 5, 'EEE100 Second Semester'),
(11, 6, 'EEE200 First Semester'),
(12, 6, 'EEE200 Second Semester'),
(13, 7, 'EEE300 First Semester'),
(14, 7, 'EEE300 Second Semester'),
(15, 8, 'EEE400 First Semester'),
(16, 8, 'EEE400 Second Semester');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
