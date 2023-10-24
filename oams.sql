-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 06:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oams`
--

-- --------------------------------------------------------

--
-- Table structure for table `challan_table`
--

CREATE TABLE `challan_table` (
  `id` int(255) NOT NULL,
  `challan_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `amount` decimal(55,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `challan_table`
--

INSERT INTO `challan_table` (`id`, `challan_code`, `name`, `email`, `cnic`, `amount`) VALUES
(21, 'CH650df8dd5ce6e', 'jabbar', 'jabbarjalbani1633@gmail.com', '4540359792409', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(13) NOT NULL,
  `CNIC` int(255) NOT NULL,
  `sscii_Seat_No` varchar(255) NOT NULL,
  `departments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `CNIC`, `sscii_Seat_No`, `departments`) VALUES
(1, 2147483647, '99014', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `sscii_Seat_No` varchar(255) NOT NULL,
  `CNIC` int(255) NOT NULL,
  `sscii_Obtained_Marks` int(255) NOT NULL,
  `sscii_Total_Marks` int(255) NOT NULL,
  `sscii_Passing_Year` int(255) NOT NULL,
  `sscii_Grade` varchar(255) NOT NULL,
  `sscii_Board` varchar(255) NOT NULL,
  `sscii_sheet` varchar(255) NOT NULL,
  `hsci_Seat_No` varchar(255) NOT NULL,
  `hsci_Obtained_Marks` int(255) NOT NULL,
  `hsci_Total_Marks` int(255) NOT NULL,
  `hsci_Passing_Year` int(255) NOT NULL,
  `hsci_Grade` varchar(255) NOT NULL,
  `hsci_Board` varchar(255) NOT NULL,
  `hsci_sheet` varchar(255) NOT NULL,
  `hscii_Seat_No` varchar(255) NOT NULL,
  `hscii_Obtained_Marks` int(255) NOT NULL,
  `hscii_Total_Marks` int(255) NOT NULL,
  `hscii_Passing_Year` int(255) NOT NULL,
  `hscii_Grade` varchar(255) NOT NULL,
  `hscii_Board` varchar(255) NOT NULL,
  `hscii_sheet` varchar(255) NOT NULL,
  `dae_Seat_No` varchar(255) NOT NULL,
  `dae_Obtained_Marks` int(255) NOT NULL,
  `dae_Total_Marks` int(255) NOT NULL,
  `dae_Passing_Year` int(255) NOT NULL,
  `dae_Grade` varchar(255) NOT NULL,
  `dae_Board` varchar(255) NOT NULL,
  `dae_sheet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`sscii_Seat_No`, `CNIC`, `sscii_Obtained_Marks`, `sscii_Total_Marks`, `sscii_Passing_Year`, `sscii_Grade`, `sscii_Board`, `sscii_sheet`, `hsci_Seat_No`, `hsci_Obtained_Marks`, `hsci_Total_Marks`, `hsci_Passing_Year`, `hsci_Grade`, `hsci_Board`, `hsci_sheet`, `hscii_Seat_No`, `hscii_Obtained_Marks`, `hscii_Total_Marks`, `hscii_Passing_Year`, `hscii_Grade`, `hscii_Board`, `hscii_sheet`, `dae_Seat_No`, `dae_Obtained_Marks`, `dae_Total_Marks`, `dae_Passing_Year`, `dae_Grade`, `dae_Board`, `dae_sheet`) VALUES
('111111', 2147483647, 629, 850, 2017, 'A', 'hyderabad', 'departments.sql', '13770', 336, 550, 2018, 'B', 'hyderabad', 'departments.sql', '', 0, 1100, 0, 'F', '', '', '', 0, 1100, 0, 'F', '', ''),
('56834', 2147483647, 629, 850, 2017, 'A', 'hyderabad', 'Class diagram.PNG', '13770', 336, 550, 2018, 'B', 'hyderabad', 'compox.JPG', '', 0, 1100, 0, 'F', '', '', '', 0, 1100, 0, 'F', '', ''),
('99014', 2147483647, 629, 850, 2017, 'A', 'hyderabad', 'lab16.pdf', '13770', 336, 550, 2018, 'B', 'hyderabad', 'lab16.pdf', '', 0, 1100, 0, 'F', '', '', '', 0, 1100, 0, 'F', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_users`
--

CREATE TABLE `quiz_users` (
  `id` int(255) NOT NULL,
  `user_identifier` varchar(255) NOT NULL,
  `total_questions_attempted` int(255) NOT NULL,
  `total_score` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_users`
--

INSERT INTO `quiz_users` (`id`, `user_identifier`, `total_questions_attempted`, `total_score`) VALUES
(8, '4540308052625', 10, 3),
(11, '4530312894207', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `role` varchar(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phNumber` varchar(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `role`, `name`, `email`, `password`, `phNumber`, `gender`, `zipcode`, `about`) VALUES
(20, 'admin', 'abdul jabbar', 'jabbarjalbani1633@gmail.com', 'jabbar123', '89237493485', 'm', 67210, 'sasdkff'),
(24, 'student', 'jabbar', 'jabbar123@gmail.com', 'jabbar', '4958349839', 'm', 67210, 'hi jabbar');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `CNIC` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `file_cnic` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dob` datetime(6) NOT NULL,
  `religion` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `fcnic` varchar(13) NOT NULL,
  `fmobile` varchar(11) NOT NULL,
  `file_fcnic` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `domicile` varchar(255) NOT NULL,
  `postal_address` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`CNIC`, `name`, `mobile`, `file_cnic`, `surname`, `dob`, `religion`, `fname`, `fcnic`, `fmobile`, `file_fcnic`, `district`, `domicile`, `postal_address`, `group`) VALUES
('4530312894207', 'samad ali', '03043204504', 'challan.JPG', 'baloch', '2023-09-26 00:00:00.000000', 0, 'sikandar', '4540308052625', '03426787234', 'chat.JPG', 'nawabshah', 'Rural', 'mari jalbani', 'Pre Engineering'),
('4540308052625', 'samad', '03043204504', 'departments.sql', 'jalbani', '2023-09-06 00:00:00.000000', 0, 'Rano', '4540308052625', '03003275116', 'departments.sql', 'nawabshah', 'Urban', 'hi dear', 'Pre Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challan_table`
--
ALTER TABLE `challan_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`CNIC`),
  ADD KEY `education` (`sscii_Seat_No`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`sscii_Seat_No`),
  ADD KEY `Test` (`CNIC`);

--
-- Indexes for table `quiz_users`
--
ALTER TABLE `quiz_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`CNIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challan_table`
--
ALTER TABLE `challan_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_users`
--
ALTER TABLE `quiz_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `education` FOREIGN KEY (`sscii_Seat_No`) REFERENCES `education` (`sscii_Seat_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
