-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 10:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gccmonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `time_in` varchar(150) NOT NULL,
  `time_out` varchar(150) NOT NULL,
  `log_date` varchar(150) NOT NULL,
  `role` int(1) NOT NULL,
  `school_year` varchar(50) NOT NULL,
  `date_created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `student_id`, `teacher_id`, `subject`, `time_in`, `time_out`, `log_date`, `role`, `school_year`, `date_created`) VALUES
(1, 2107325, 2107325, 'math', '10:10:01am', '11:10:01am', '2022-10-05', 1, '2021-2022', '2022-10-06 08:22:08.00000'),
(2, 2107325, 1000, 'ap', '01:07:55pm', '02:07:55pm', '2021-10-05', 1, '2020-2021', '2022-10-06 08:24:14.00000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guard`
--

CREATE TABLE `tbl_guard` (
  `id` int(11) NOT NULL,
  `school_id` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `role` int(1) NOT NULL,
  `gate` int(1) NOT NULL,
  `date_created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guard`
--

INSERT INTO `tbl_guard` (`id`, `school_id`, `fname`, `mname`, `lname`, `role`, `gate`, `date_created`) VALUES
(13, '2107325', 'prince cedei', 'rds', 'ali', 4, 1, '2022-10-06 04:46:51.16899');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_attendance`
--

CREATE TABLE `tbl_main_attendance` (
  `id` int(11) NOT NULL,
  `student_id` varchar(150) NOT NULL,
  `time_in` varchar(255) NOT NULL,
  `time_out` varchar(255) DEFAULT NULL,
  `log_date` varchar(150) NOT NULL,
  `status` int(1) NOT NULL,
  `gate` int(1) NOT NULL,
  `date_created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_main_attendance`
--

INSERT INTO `tbl_main_attendance` (`id`, `student_id`, `time_in`, `time_out`, `log_date`, `status`, `gate`, `date_created`) VALUES
(3, '2107325', '10:10:01am', '10:10:09am', '2022-10-05', 1, 2, '2022-10-05 02:10:01.21372'),
(4, '1000', '09:01:09am', '09:01:13am', '2022-10-05', 1, 2, '2022-10-06 01:01:09.92655'),
(5, '1000', '09:16:06am', '09:16:09am', '2022-10-06', 1, 2, '2022-10-06 01:16:06.75998'),
(6, '2107325', '09:27:18am', '09:27:22am', '2022-10-06', 1, 2, '2022-10-06 01:27:18.37571'),
(7, '2107325', '01:07:55pm', NULL, '2022-10-06', 0, 1, '2022-10-06 05:07:55.88988');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `fname` varchar(160) NOT NULL,
  `mname` varchar(160) NOT NULL,
  `lname` varchar(160) NOT NULL,
  `year_level` varchar(5) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `date_created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `school_id`, `fname`, `mname`, `lname`, `year_level`, `contact_no`, `date_created`) VALUES
(25, 10002323, 'prince cedei', 'r', 'boromeo', '3', '09559387300', '2022-10-06 04:45:35.77632'),
(26, 2107325, 'junmark', 'm', 'timon', '3', '09559387210', '2022-10-06 04:46:10.32805');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `id` int(11) NOT NULL,
  `school_id` varchar(150) NOT NULL,
  `fname` varchar(160) NOT NULL,
  `mname` varchar(160) NOT NULL,
  `lname` varchar(160) NOT NULL,
  `date_created` datetime(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`id`, `school_id`, `fname`, `mname`, `lname`, `date_created`) VALUES
(9, '2107325', 'jhon', 'c', 'doe', '2022-10-06 12:46:34.93220');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `gate` int(1) NOT NULL,
  `date_created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `role`, `gate`, `date_created`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 1, 0, '2022-09-29 13:43:59.00000'),
(39, '10002323', 'e6bc30387418c832e138a04488c7ebaf', 3, 0, '2022-10-06 04:45:35.79085'),
(40, '2107325', 'c18bd005a3e26db22dccf373e32bff86', 3, 0, '2022-10-06 04:46:10.33031'),
(41, '2107325', '2829fc16ad8ca5a79da932f910afad1c', 2, 0, '2022-10-06 04:46:34.94239'),
(42, '2107325', '86318e52f5ed4801abe1d13d509443de', 4, 1, '2022-10-06 04:46:51.17525');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guard`
--
ALTER TABLE `tbl_guard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_main_attendance`
--
ALTER TABLE `tbl_main_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_id` (`school_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_id` (`school_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_guard`
--
ALTER TABLE `tbl_guard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_main_attendance`
--
ALTER TABLE `tbl_main_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
