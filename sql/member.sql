-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 03:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testmember`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `departmentName` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `flow_report` varchar(255) NOT NULL,
  `flow_estimate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentName`, `level`, `flow_report`, `flow_estimate`) VALUES
(1, 'หัวหน้าคณบดี', 'boss', '', 'รองคณบดีฝ่ายบริหาร,รองคณบดีฝ่ายวิชาการและวิเทศสัมพันธ์,รองคณบดีฝ่ายวิจัยและประกันคุณภาพการศึกษา'),
(2, 'รองคณบดีฝ่ายบริหาร', 'staff', 'หัวหน้าคณบดี', 'หัวหน้าสำนักงานคณบดี'),
(3, 'รองคณบดีฝ่ายวิชาการและวิเทศสัมพันธ์', 'staff', 'หัวหน้าคณบดี', 'หัวหน้าสำนักงานคณบดี'),
(4, 'รองคณบดีฝ่ายวิจัยและประกันคุณภาพการศึกษา', 'staff', 'หัวหน้าคณบดี', 'หัวหน้าสำนักงานคณบดี'),
(5, 'หัวหน้าสำนักงานคณบดี', 'staff', '', 'กลุ่มงานบริหารและพัฒนาบุคคลกร'),
(6, 'กลุ่มงานบริหารและพัฒนาบุคคลกร', 'staff', 'หัวหน้าคณบดี,รองคณบดีฝ่ายบริหาร', 'หน่วยบุคคล'),
(7, 'หน่วยบุคคล', 'employee', 'หัวหน้าคณบดี,รองคณบดีฝ่ายบริหาร,กลุ่มงานบริหารและพัฒนาบุคคลกร', ''),
(8, 'หน่วยสารบรรณ', 'employee', '', ''),
(9, 'กลุ่มงานคลังและพัสดุ', 'staff', '', ''),
(10, 'หน่วยการเงินและบัญชี', 'employee', '', ''),
(11, 'หน่วยพัสดุและครุภัณฑ์', 'employee', '', ''),
(12, 'กลุ่มงานอาคารสถานที่และยานพาหนะ', 'staff', '', ''),
(13, 'หน่วยอาคารสถานที่และบริหาร', 'employee', '', ''),
(14, 'หน่วยพัฒนาสิ่งแวดล้อม', 'employee', '', ''),
(15, 'กลุ่มงานนโยบายและแผน', 'staff', '', ''),
(16, 'หน่วยแผนและงบประมาณ', 'employee', '', ''),
(17, 'หน่วยยุทธศาสตร์และการประเมินผล', 'employee', '', ''),
(18, 'กลุ่มงานอาคารสถานที่และยานพาหนะ', 'staff', '', ''),
(19, 'หน่วยเทคโนโลยีสารสนเทศและโสดทัศรศึกษา', 'employee', '', ''),
(20, 'หน่วยทะเบียนและการประเมินผลการศึกษา', 'employee', '', ''),
(21, 'หน่วยกิจกรรมนักศึกษา', 'employee', '', ''),
(22, 'กลุ่มงานงนาประกันคุณภาพการศึกษา', 'staff', '', ''),
(23, 'หน่วยพัฒนาคุณภาพการศึกษา', 'employee', '', ''),
(24, 'หน่วยประเมินผลคุณภาพการศึกษา', 'employee', '', ''),
(25, 'หน่วยจัดการความรู้และพัฒนา', 'employee', '', ''),
(26, 'ศูนย์วิจัยและพัฒนาทางศิลปศาสตร์ประยุกต์', 'staff', '', ''),
(27, 'หน่วยส่งเสริมและพัฒนางานวิจัย', 'employee', '', ''),
(28, 'กลุ่มวิจัย', 'employee', '', ''),
(29, 'admin', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `id` int(11) NOT NULL,
  `K` varchar(255) NOT NULL,
  `M` varchar(255) NOT NULL,
  `U` varchar(255) NOT NULL,
  `T` varchar(255) NOT NULL,
  `N` varchar(255) NOT NULL,
  `B` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`id`, `K`, `M`, `U`, `T`, `N`, `B`, `date`) VALUES
(1, '3,3,4', '1,3,5', '4,4,5', '5,5,4', '5,1,3', '3,5,4', '2022-04-02 18:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `detail`, `date`) VALUES
(1, 'A to B', '2022-03-20 20:52:46'),
(2, 'A to C', '2022-03-20 20:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `prefix` varchar(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `prefix`, `first_name`, `last_name`, `email`, `password`, `id_department`) VALUES
(1, '', 'admin', 'lastname', '', '', 29),
(2, '', 'หัวหน้าคณบดี', 'lastname', '', '', 1),
(3, '', 'รองคณบดีฝ่ายบริหาร', 'lastname', '', '', 2),
(4, '', 'กลุ่มงานบริหารและพัฒนาบุคคลกร', 'lastname', '', '', 6),
(5, '', 'หน่วยบุคคล', 'lastname', '', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `workplace` varchar(255) NOT NULL,
  `job_success` int(11) NOT NULL,
  `working range` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `problems` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `header`, `detail`, `workplace`, `job_success`, `working range`, `file`, `problems`, `date`) VALUES
(1, 'detailtest1', 'หน่วยบุคคล send to หัวหน้าคณบดี,รองคณบดีฝ่ายบริหาร,กลุ่มงานบริหารและพัฒนาบุคคลกร', 'บ้าน', 100, '', '', '', '2022-04-03 11:41:30'),
(2, 'detailtest2', 'กลุ่มงานบริหารและพัฒนาบุคคลกร send to หัวหน้าคณบดี,รองคณบดีฝ่ายบริหาร', 'บ้าน', 90, '', '', '', '2022-04-03 11:41:54'),
(3, 'detailtest3', 'รองคณบดีฝ่ายบริหาร send to หัวหน้าคณบดี', 'บ้าน', 80, '', '', '', '2022-04-03 11:42:03'),
(4, 'testdetail1', 'testdetail1', 'บ้าน', 60, '', '', '', '2022-04-02 18:45:07'),
(5, 'testdetail2', 'testdetail2', 'บ้าน', 70, '', '', '', '2022-04-02 18:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `send_estimate`
--

CREATE TABLE `send_estimate` (
  `id` int(11) NOT NULL,
  `id_member_send` int(11) NOT NULL,
  `id_member_receive` int(11) NOT NULL,
  `id_estimate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_estimate`
--

INSERT INTO `send_estimate` (`id`, `id_member_send`, `id_member_receive`, `id_estimate`) VALUES
(1, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `send_feedback`
--

CREATE TABLE `send_feedback` (
  `id` int(11) NOT NULL,
  `id_member_send` int(11) NOT NULL,
  `id_member_receive` int(11) NOT NULL,
  `id_feedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_feedback`
--

INSERT INTO `send_feedback` (`id`, `id_member_send`, `id_member_receive`, `id_feedback`) VALUES
(1, 2, 3, 1),
(2, 3, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `send_report`
--

CREATE TABLE `send_report` (
  `id` int(11) NOT NULL,
  `id_member_send` int(11) NOT NULL,
  `department_receive` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_report`
--

INSERT INTO `send_report` (`id`, `id_member_send`, `department_receive`, `date`, `id_report`) VALUES
(1, 5, 'หัวหน้าคณบดี,รองคณบดีฝ่ายบริหาร,กลุ่มงานบริหารและพัฒนาบุคคลกร', '2022-04-02 18:45:15', '1,2'),
(2, 4, 'หัวหน้าคณบดี,รองคณบดีฝ่ายบริหาร', '2022-04-02 18:45:09', '3'),
(3, 3, 'หัวหน้าคณบดี', '2022-04-02 18:44:35', '4,5');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `receive` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `receive`) VALUES
(1, 'รองคณบดี1,รองคณบดี2,หัวหน้าคณบดี'),
(2, 'หัวหน้าคณบดี'),
(3, 'หัวหน้าคณบดี,รองคณบดี2'),
(4, 'รองคณบดี1,รองคณบดี2'),
(5, 'รองคณบดี1'),
(6, 'รองคณบดี2'),
(7, 'รองคณบดี2,รองคณบดี1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_estimate`
--
ALTER TABLE `send_estimate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `send_estimate_ibfk_1` (`id_member_send`),
  ADD KEY `send_estimate_ibfk_2` (`id_member_receive`),
  ADD KEY `id_estimate` (`id_estimate`);

--
-- Indexes for table `send_feedback`
--
ALTER TABLE `send_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member_send` (`id_member_send`),
  ADD KEY `id_member_receive` (`id_member_receive`),
  ADD KEY `id_feedback` (`id_feedback`);

--
-- Indexes for table `send_report`
--
ALTER TABLE `send_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member_send` (`id_member_send`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `send_estimate`
--
ALTER TABLE `send_estimate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_feedback`
--
ALTER TABLE `send_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `send_report`
--
ALTER TABLE `send_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`);

--
-- Constraints for table `send_estimate`
--
ALTER TABLE `send_estimate`
  ADD CONSTRAINT `send_estimate_ibfk_1` FOREIGN KEY (`id_member_send`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `send_estimate_ibfk_2` FOREIGN KEY (`id_member_receive`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `send_estimate_ibfk_3` FOREIGN KEY (`id_estimate`) REFERENCES `estimate` (`id`);

--
-- Constraints for table `send_feedback`
--
ALTER TABLE `send_feedback`
  ADD CONSTRAINT `send_feedback_ibfk_1` FOREIGN KEY (`id_member_send`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `send_feedback_ibfk_2` FOREIGN KEY (`id_member_receive`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `send_feedback_ibfk_3` FOREIGN KEY (`id_feedback`) REFERENCES `feedback` (`id`);

--
-- Constraints for table `send_report`
--
ALTER TABLE `send_report`
  ADD CONSTRAINT `send_report_ibfk_1` FOREIGN KEY (`id_member_send`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
