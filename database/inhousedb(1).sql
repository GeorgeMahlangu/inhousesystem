-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 04:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inhousedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `staffNum` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cellphone` varchar(15) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(30) NOT NULL,
  `campus` varchar(30) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`staffNum`, `firstname`, `lastname`, `email`, `cellphone`, `address`, `city`, `campus`, `password`) VALUES
('99999999', 'Moleboleng', 'Mashilo', 'mashilom1@tut.ac.za', '0813207253', 'Ga-Rankuwa: Building 4 Room 4-G30', 'Pretoria', 'Soshanguve', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `admin_has_student`
--

CREATE TABLE `admin_has_student` (
  `staffNum` varchar(10) NOT NULL,
  `studentNum` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin_has_tutor`
--

CREATE TABLE `admin_has_tutor` (
  `staffNum` varchar(10) NOT NULL,
  `studentNum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseCode` varchar(10) NOT NULL,
  `courseName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `subjectCode` varchar(15) NOT NULL,
  `courseCode` varchar(10) NOT NULL,
  `staffNumber(subjectHead)` varchar(10) NOT NULL,
  `subjectName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentNum` varchar(9) NOT NULL,
  `initials` varchar(4) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contactNr` varchar(13) NOT NULL,
  `password` varchar(80) DEFAULT NULL,
  `condition_reAdmission` varchar(200) NOT NULL,
  `reason` varchar(400) NOT NULL,
  `subjCode` varchar(150) NOT NULL,
  `interviewed` int(5) NOT NULL,
  `highSchool` varchar(45) DEFAULT NULL,
  `Province` varchar(45) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentNum`, `initials`, `lastname`, `email`, `contactNr`, `password`, `condition_reAdmission`, `reason`, `subjCode`, `interviewed`, `highSchool`, `Province`, `town`) VALUES
('215266397', 'GG', 'Mahlangu', 'given@gmail.com', '0823207253', '12345678', 'IDK what this means', 'Same here', 'TPG12AT', 1, 'Kgomotso', 'Gauteng', 'Pretoria'),
('215296355', 'HH', 'Maseko', '215296355@tut4life.ac.za', '0823207253', '12345678', 'NONE', 'NONE', 'DSO34AT, TPG201T', 1, NULL, NULL, NULL),
('sczxcz', 'sdas', 'asdsa', 'xczxczx@gmai.com', 'asdcdsgvsdf', '12345678', 'dfbdfb', 'dfbdfb', 'gdvb', 1, NULL, NULL, NULL),
('sdcvsdv', 'TM', 'sdas', 'sdvsd@gmail.com', 'ascdffcvsdfcv', '12345678', 'cvsdvsdv', 'sdfsdfsd', 'dfsdf', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_has_module`
--

CREATE TABLE `student_has_module` (
  `studentNum` varchar(9) NOT NULL,
  `subjectCode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subj_head`
--

CREATE TABLE `subj_head` (
  `staffNumber(subjectHead)` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `staffNum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `studentNum` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `noAssignedModules` int(11) NOT NULL,
  `campus` varchar(30) NOT NULL,
  `cellphone` varchar(15) NOT NULL,
  `department` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`studentNum`, `firstname`, `lastname`, `email`, `noAssignedModules`, `campus`, `cellphone`, `department`, `password`, `active`) VALUES
('215266397', 'George', 'Mahlangu', '', 2, 'Soshanguve', '0823207253', 'Computer Science', '5555', 0),
('215269854', 'John', 'Mahlangu', 'john@sce.co.za', 0, 'Soshanguve', '0823207253', 'Computer Systems Engineering', '123456', 1),
('218027296', 'Benny', 'Maluleque', '', 3, 'Soshanguve', '0736117558', 'Computer Science', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_has_student`
--

CREATE TABLE `tutor_has_student` (
  `student_studentNum` varchar(9) NOT NULL,
  `tutor_studentNum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`staffNum`);

--
-- Indexes for table `admin_has_student`
--
ALTER TABLE `admin_has_student`
  ADD PRIMARY KEY (`staffNum`,`studentNum`),
  ADD KEY `fk_admin_has_student_student1_idx` (`studentNum`),
  ADD KEY `fk_admin_has_student_admin1_idx` (`staffNum`);

--
-- Indexes for table `admin_has_tutor`
--
ALTER TABLE `admin_has_tutor`
  ADD PRIMARY KEY (`staffNum`,`studentNum`),
  ADD KEY `fk_admin_has_tutor_tutor1_idx` (`studentNum`),
  ADD KEY `fk_admin_has_tutor_admin1_idx` (`staffNum`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseCode`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`subjectCode`,`courseCode`,`staffNumber(subjectHead)`),
  ADD KEY `fk_module_course1_idx` (`courseCode`),
  ADD KEY `fk_module_subj_head1_idx` (`staffNumber(subjectHead)`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentNum`);

--
-- Indexes for table `student_has_module`
--
ALTER TABLE `student_has_module`
  ADD PRIMARY KEY (`studentNum`,`subjectCode`),
  ADD KEY `fk_module_has_student_student1_idx` (`studentNum`),
  ADD KEY `fk_module_has_student_module_idx` (`subjectCode`);

--
-- Indexes for table `subj_head`
--
ALTER TABLE `subj_head`
  ADD PRIMARY KEY (`staffNumber(subjectHead)`,`staffNum`),
  ADD KEY `fk_subj_head_admin1_idx` (`staffNum`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`studentNum`);

--
-- Indexes for table `tutor_has_student`
--
ALTER TABLE `tutor_has_student`
  ADD PRIMARY KEY (`student_studentNum`,`tutor_studentNum`),
  ADD KEY `fk_student_has_tutor_tutor1_idx` (`tutor_studentNum`),
  ADD KEY `fk_student_has_tutor_student1_idx` (`student_studentNum`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_has_student`
--
ALTER TABLE `admin_has_student`
  ADD CONSTRAINT `fk_admin_has_student_admin1` FOREIGN KEY (`staffNum`) REFERENCES `admin` (`staffNum`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_admin_has_student_student1` FOREIGN KEY (`studentNum`) REFERENCES `student` (`studentNum`) ON DELETE CASCADE;

--
-- Constraints for table `admin_has_tutor`
--
ALTER TABLE `admin_has_tutor`
  ADD CONSTRAINT `fk_admin_has_tutor_admin1` FOREIGN KEY (`staffNum`) REFERENCES `admin` (`staffNum`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_admin_has_tutor_tutor1` FOREIGN KEY (`studentNum`) REFERENCES `tutor` (`studentNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `fk_module_course1` FOREIGN KEY (`courseCode`) REFERENCES `course` (`courseCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_module_subj_head1` FOREIGN KEY (`staffNumber(subjectHead)`) REFERENCES `subj_head` (`staffNumber(subjectHead)`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_has_module`
--
ALTER TABLE `student_has_module`
  ADD CONSTRAINT `fk_module_has_student_module` FOREIGN KEY (`subjectCode`) REFERENCES `module` (`subjectCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_module_has_student_student1` FOREIGN KEY (`studentNum`) REFERENCES `student` (`studentNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subj_head`
--
ALTER TABLE `subj_head`
  ADD CONSTRAINT `fk_subj_head_admin1` FOREIGN KEY (`staffNum`) REFERENCES `admin` (`staffNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutor_has_student`
--
ALTER TABLE `tutor_has_student`
  ADD CONSTRAINT `fk_student_has_tutor_student1` FOREIGN KEY (`student_studentNum`) REFERENCES `student` (`studentNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_has_tutor_tutor1` FOREIGN KEY (`tutor_studentNum`) REFERENCES `tutor` (`studentNum`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
