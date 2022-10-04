-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 05:31 AM
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
  `role` int(1) NOT NULL,
  `school_year` varchar(50) NOT NULL,
  `date_created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, '1980', 'prince cedei', 'rds', 'boromeo', 0, 1, '2022-10-04 00:44:58.70998'),
(4, '1000', 'jun', 'mar', 'm', 4, 1, '2022-10-04 03:04:47.63764'),
(5, '10002323', 'prince cedei', 'r', 'ali123', 4, 1, '2022-10-04 03:05:10.74783');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_attendance`
--

CREATE TABLE `tbl_main_attendance` (
  `id` int(11) NOT NULL,
  `student_id` varchar(150) NOT NULL,
  `teacher_id` varchar(150) NOT NULL,
  `time_in` varchar(255) NOT NULL,
  `time_out` varchar(255) NOT NULL,
  `log_date` varchar(150) NOT NULL,
  `status` int(1) NOT NULL,
  `gate` int(1) NOT NULL,
  `date_created` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(16, 1000, 'Prince Cedei', 'R', 'Adaya', '2', '09559387300', '2022-10-03 07:24:35.42081'),
(17, 10002323, 'Prince Cedei', 'Rds', 'Boromeo', '3', '09559387210', '2022-10-03 07:24:47.35594'),
(18, 2107325, 'Junmark', 'Mejorada', 'Timon', '3', '09559387210', '2022-10-03 07:39:00.12105'),
(19, 20010, 'aqwe', 'a', 'aqwe', '3', '09559387217', '2022-10-03 23:58:53.00000'),
(20, 1000123, 'Queen Faith Agustin', 'Rds', 'Alora', '4', '09559387300', '2022-10-04 00:00:44.20724'),
(21, 10006546, 'rohaina', 'rds', 'adaya12344', '3', '09559387210', '2022-10-04 00:06:36.05687');

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
(3, '20001', 'Queen Faith Agustin', 'A', 'Alll', '2022-10-03 15:25:00.60412'),
(4, '1000123', 'Carl Ninio', 'Sin- Ingan', 'Ampalid', '2022-10-03 15:25:47.90025');

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
(13, '1000', 'a168370defdf17cde41071bf23e44b08', 3, 0, '2022-10-03 07:24:35.42327'),
(14, '10002323', '51e1cd3d4a6f5da58a0b09b0dc99ee4b', 3, 0, '2022-10-03 07:24:47.37614'),
(15, '20001', '7a9b46ab6d983a85dd4d9a1aa64a3945', 2, 0, '2022-10-03 07:25:00.60709'),
(16, '1000123', 'c7cc0b7df14a996cbfb993a7161587bd', 2, 0, '2022-10-03 07:25:47.91908'),
(17, '2107325', '5cf9d1ce84e738684a7855b797e87183', 3, 0, '2022-10-03 07:39:00.12340'),
(18, '1000123', 'a3f69b490212133ea87ab9c7f62fc1ef', 3, 0, '2022-10-04 00:00:44.21008'),
(19, '10006546', '77c7319076302d17d70091647f18af16', 3, 0, '2022-10-04 00:06:36.05860'),
(22, 'prince cedei', 'e6bc30387418c832e138a04488c7ebaf', 4, 1, '2022-10-04 00:44:58.73254'),
(24, '1000', '6f8f57715090da2632453988d9a1501b', 4, 1, '2022-10-04 03:04:47.63907'),
(25, '10002323', '86318e52f5ed4801abe1d13d509443de', 4, 1, '2022-10-04 03:05:10.75005');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guard`
--
ALTER TABLE `tbl_guard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_main_attendance`
--
ALTER TABLE `tbl_main_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
