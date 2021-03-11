-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 08:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneyliteracy`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `budget_id` int(255) NOT NULL,
  `budget_details` varchar(255) NOT NULL,
  `budget_date` datetime(6) NOT NULL,
  `budget_total` double NOT NULL,
  `students_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`budget_id`, `budget_details`, `budget_date`, `budget_total`, `students_id`) VALUES
(5, 'Food & beverage', '2020-09-30 09:00:00.000000', 10, 15),
(6, 'Food & beverage', '2020-09-30 09:00:00.000000', 10, 15),
(7, 'Stationery', '2020-09-15 07:30:00.000000', 20, 16),
(8, 'Stationery', '2020-09-15 07:30:00.000000', 20, 16),
(9, 'Gadget', '2020-10-09 16:02:00.000000', 40, 17),
(10, 'Gadget', '2020-10-09 16:02:00.000000', 40, 17),
(11, 'Food & beverage', '2020-10-09 16:37:00.000000', 20, 20),
(13, 'Food & beverage', '2020-10-17 21:43:00.000000', 15, 20);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(255) NOT NULL,
  `feedback_details` varchar(255) NOT NULL,
  `parents_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_details`, `parents_id`) VALUES
(3, 'Devhiya, try to work on you budget control. Good job dear.', 18),
(4, 'Min Wei, excellent progress!', 19),
(5, 'Aisya, you doing good. Good job dear, keep it up! xx', 21);

-- --------------------------------------------------------

--
-- Table structure for table `learning history`
--

CREATE TABLE `learning history` (
  `history_id` int(255) NOT NULL,
  `history_details` varchar(255) NOT NULL,
  `history_datetime` datetime(6) NOT NULL,
  `students_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parents_id` int(255) NOT NULL,
  `parents_name` varchar(255) NOT NULL,
  `parents_address` varchar(255) NOT NULL,
  `parents_phone` varchar(255) NOT NULL,
  `parents_email` varchar(255) NOT NULL,
  `parents_password` varchar(255) NOT NULL,
  `parents_maritalstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parents_id`, `parents_name`, `parents_address`, `parents_phone`, `parents_email`, `parents_password`, `parents_maritalstatus`) VALUES
(17, 'Maimunah Ahmad', 'No. 30, Jalan Raja Haji, Taman Indera Putra', '0146782345', 'maimunah@gmail.com', 'a7154127db054a4ff55d2b987b08d19f', 'married'),
(18, 'Gunasaren', 'No. 76, Jalan Lee Kok, Taman Ehsan ', '0187652390', 'guna@gmail.com', '937eae9b0ee86a37fa75dbb5cf94abd1', 'widowed'),
(19, 'Michelle Tan', 'No. 10, Jalan Kasih Sayang, Taman Seri Murni', '0195467890', 'tan@gmail.com', '38040d2bbad2296223c15c51fb7dcf8e', 'divorced'),
(21, 'Mohd Yusof', '', '0113450987', 'yusof@gmail.com', '9d16cacda0197c51de529c424ddd8e03', 'married');

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `savings_id` int(255) NOT NULL,
  `savings_details` varchar(255) NOT NULL,
  `savings_date` datetime(6) NOT NULL,
  `savings_total` double NOT NULL,
  `students_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savings`
--

INSERT INTO `savings` (`savings_id`, `savings_details`, `savings_date`, `savings_total`, `students_id`) VALUES
(3, 'Food & beverage', '2020-09-30 14:00:00.000000', 4, 15),
(4, 'Food & beverage', '2020-09-30 14:00:00.000000', 4, 15),
(5, 'Stationery', '2020-09-15 10:00:00.000000', 5, 16),
(6, 'Stationery', '2020-09-15 10:00:00.000000', 5, 16),
(7, 'Gadget', '2020-10-09 16:10:00.000000', 2, 17),
(8, 'Gadget', '2020-10-09 16:10:00.000000', 2, 17),
(9, 'Food & beverage', '2020-10-09 16:39:00.000000', 5, 20),
(11, 'Food & beverage', '2020-10-15 22:45:00.000000', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(255) NOT NULL,
  `schedule_details` varchar(255) NOT NULL,
  `schedule_date` datetime(6) NOT NULL,
  `students_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spending`
--

CREATE TABLE `spending` (
  `spending_id` int(255) NOT NULL,
  `spending_details` varchar(255) NOT NULL,
  `spending_date` datetime(6) NOT NULL,
  `spending_total` double NOT NULL,
  `students_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spending`
--

INSERT INTO `spending` (`spending_id`, `spending_details`, `spending_date`, `spending_total`, `students_id`) VALUES
(5, 'Food & beverage', '2020-09-30 12:00:00.000000', 6, 15),
(6, 'Food & beverage', '2020-09-30 12:00:00.000000', 6, 15),
(7, 'Stationery', '2020-10-09 03:30:00.000000', 15, 16),
(8, 'Stationery', '2020-09-15 09:30:00.000000', 15, 16),
(9, 'Gadget', '2020-10-09 16:30:00.000000', 38, 17),
(10, 'Gadget', '2020-10-09 16:30:00.000000', 38, 17),
(11, 'Food & beverage', '2020-10-09 16:41:00.000000', 15, 20),
(12, 'Food & beverage', '2020-10-09 17:43:00.000000', 15, 20);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `students_id` int(255) NOT NULL,
  `students_name` varchar(255) NOT NULL,
  `students_schoolyear` text NOT NULL,
  `students_email` text NOT NULL,
  `students_password` varchar(255) NOT NULL,
  `students_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`students_id`, `students_name`, `students_schoolyear`, `students_email`, `students_password`, `students_phone`) VALUES
(15, 'Ahmad Haikal', '4', 'haikal@gmail.com', 'e6622d8b1b53d157a432861ad739a9da', '0172456456'),
(16, 'Lee Min Wei', '5', 'leemin@gmail.com', 'd9695e3c1819ab5002b5f44787d5b72b', '0128762345'),
(17, 'Devhiya ', '6', 'devhiya@gmail.com', '197a19288bcd8bc2a9956f9e3ba075bf', '0194127809'),
(20, 'Aisya Fatina Binti Mohd Yusof', '6', 'aisya@gmail.com', '8fcc0b3155723bc7b94c5a18d350ef44', '0123435678'),
(21, 'henry', '4', 'lawjunwei@gmail.com', '49cc042dc833bd0c2742a713c0378175', '0172482672');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budget_id`),
  ADD KEY `students_id` (`students_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `parents_id` (`parents_id`);

--
-- Indexes for table `learning history`
--
ALTER TABLE `learning history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `students_id` (`students_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parents_id`);

--
-- Indexes for table `savings`
--
ALTER TABLE `savings`
  ADD PRIMARY KEY (`savings_id`),
  ADD KEY `students_id` (`students_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `students_id` (`students_id`);

--
-- Indexes for table `spending`
--
ALTER TABLE `spending`
  ADD PRIMARY KEY (`spending_id`),
  ADD KEY `students_id` (`students_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`students_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `budget_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `learning history`
--
ALTER TABLE `learning history`
  MODIFY `history_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parents_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `savings`
--
ALTER TABLE `savings`
  MODIFY `savings_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spending`
--
ALTER TABLE `spending`
  MODIFY `spending_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`students_id`) REFERENCES `students` (`students_id`);

--
-- Constraints for table `learning history`
--
ALTER TABLE `learning history`
  ADD CONSTRAINT `learning history_ibfk_1` FOREIGN KEY (`students_id`) REFERENCES `students` (`students_id`);

--
-- Constraints for table `savings`
--
ALTER TABLE `savings`
  ADD CONSTRAINT `savings_ibfk_1` FOREIGN KEY (`students_id`) REFERENCES `students` (`students_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`students_id`) REFERENCES `students` (`students_id`);

--
-- Constraints for table `spending`
--
ALTER TABLE `spending`
  ADD CONSTRAINT `spending_ibfk_1` FOREIGN KEY (`students_id`) REFERENCES `students` (`students_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
