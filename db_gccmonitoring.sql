-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 06:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
(8, 20001, 'Junmark', 'M', 'Timon', '2', '09559387310', '2022-09-29 16:52:14.35838'),
(9, 1000, 'Samplw', 'Sam', 'Sampo', '5', '09559387210', '2022-09-30 00:02:56.19593'),
(10, 10002323, 'Queen Faith Agustin', 'Rds', 'Adaya', '3', '09559387300', '2022-09-30 00:07:45.78204');

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
(3, '20001', '5cf9d1ce84e738684a7855b797e87183', 3, 0, '2022-09-29 16:52:14.49839'),
(4, '1000', 'efabdb74bf88b1f4165f3e2d0fa9b8b8', 3, 0, '2022-09-30 00:02:56.21982'),
(5, '10001', 'a168370defdf17cde41071bf23e44b08', 3, 0, '2022-09-30 00:07:45.80329');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
