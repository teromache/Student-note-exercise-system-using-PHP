-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 01:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(100) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `lect_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`, `lect_id`) VALUES
(6, 'CSC2306A', 1),
(7, 'CSC2306B', 1),
(8, 'CSC2306C', 2);

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL,
  `exercise_name` varchar(255) NOT NULL,
  `attachment_file` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `upload_by` varchar(255) NOT NULL,
  `size` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`id`, `exercise_name`, `attachment_file`, `start_date`, `end_date`, `subject_name`, `upload_by`, `size`) VALUES
(22, 'exercise1', 'ICT652-MOVIE ASSIGNMENT-WAN PUTERA NUR SYAFIQ BIN WAN JEFERI-2020836988.docx', '2022-07-13', '2022-07-14', 'CSC574', 'lect1', 14578);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `email`, `password`, `name`) VALUES
(1, 'lecturer@gmail.com', '1234', 'Sir Wan Ya'),
(2, 'haslizatulFairuz@gmail.com', '1234', 'Haslizatul Fairuz'),
(5, 'teromache99@gmail.com', '1234', 'tero'),
(7, 'syukri@gmail.com', '1234', 'Syukri'),
(8, 'lecturer1@gmail.com', '1234', 'lect1');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(100) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `upload_on` date NOT NULL DEFAULT current_timestamp(),
  `upload_by` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `file_name`, `upload_on`, `upload_by`, `size`, `downloads`, `subject_name`) VALUES
(32, 'how odl vs traditional implementation.docx', '2022-07-13', 'lect1', 14932, 0, 'CSC574');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `password`, `name`) VALUES
(1, 'azri@gmail.com', '1234', 'Azri Mustaqim'),
(2, 'putera@gmail.com', '1234', 'Wan Putera'),
(3, 'arif@gmail.com', '1234', 'Arif Fikri'),
(4, 'arifazmie@gmail.com', '1234', 'arif azmi'),
(5, 'dayana@gmail.com', '1234', 'dayana'),
(6, 'student1@gmail.com', '1234', 'afiq aiman'),
(7, 'student2@gmail.com', '1234', 'student2');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `attachment_file` varchar(100) NOT NULL,
  `upload_on` varchar(100) NOT NULL,
  `exercise_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id`, `student_name`, `attachment_file`, `upload_on`, `exercise_name`, `subject`, `status`, `class_name`) VALUES
(59, 'afiq aiman', 'WAN PUTERA NUR SYAFIQ BIN WAN JEFERI (FINDING FORRESTER) - Copy.docx', '2022-07-13 21:36:44', 'exercise1', 'CSC574', 'Completed', ''),
(60, 'student2', 'SLIDE.pdf', '2022-07-13 21:41:15', 'exercise1', 'CSC574', 'Completed', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lect_id` (`lect_id`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
