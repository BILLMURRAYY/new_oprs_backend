-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 05:49 PM
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
-- Database: `oprs_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `flow_report` varchar(255) NOT NULL,
  `flow_estimate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `level`, `flow_report`, `flow_estimate`) VALUES
(1, 'admin', 'admin', 'หัวหน้าคณบดี', ''),
(2, 'หัวหน้าคณบดี', 'boss', 'รองคณบดีฝ่ายบริหาร', 'admin,รองคณบดีฝ่ายบริหาร'),
(3, 'รองคณบดีฝ่ายบริหาร', 'staff', 'หัวหน้าคณบดี', 'หัวหน้าคณบดี'),
(4, 'รองคณบดีฝ่ายวิชาการและวิเทศสัมพันธ์', 'staff', '', ''),
(5, 'รองคณบดีฝ่ายวิจัยและประกันคุณภาพการศึกษา', 'staff', '', ''),
(6, 'หัวหน้าสำนักงานคณบดี', 'staff', '', ''),
(7, 'กลุ่มงานบริหารและพัฒนาบุคคลกร', 'staff', '', ''),
(8, 'หน่วยบุคคล', 'employee', '', ''),
(9, 'หน่วยสารบรรณ', 'employee', '', ''),
(10, 'กลุ่มงานคลังและพัสดุ', 'staff', '', ''),
(11, 'หน่วยการเงินและบัญชี', 'employee', '', ''),
(12, 'หน่วยพัสดุและครุภัณฑ์', 'employee', '', ''),
(13, 'กลุ่มงานอาคารสถานที่และยานพาหนะ', 'staff', '', ''),
(14, 'หน่วยอาคารสถานที่และบริหาร', 'employee', '', ''),
(15, 'หน่วยพัฒนาสิ่งแวดล้อม', 'employee', '', ''),
(16, 'กลุ่มงานนโยบายและแผน', 'staff', '', ''),
(17, 'หน่วยแผนและงบประมาณ', 'employee', '', ''),
(18, 'หน่วยยุทธศาสตร์และการประเมินผล', 'employee', '', ''),
(19, 'กลุ่มงานอาคารสถานที่และยานพาหนะ', 'staff', '', ''),
(20, 'หน่วยเทคโนโลยีสารสนเทศและโสดทัศรศึกษา', 'employee', '', ''),
(21, 'หน่วยทะเบียนและการประเมินผลการศึกษา', 'employee', '', ''),
(22, 'หน่วยกิจกรรมนักศึกษา', 'employee', '', ''),
(23, 'กลุ่มงานงนาประกันคุณภาพการศึกษา', 'staff', '', ''),
(24, 'หน่วยพัฒนาคุณภาพการศึกษา', 'employee', '', ''),
(25, 'หน่วยประเมินผลคุณภาพการศึกษา', 'employee', '', ''),
(26, 'หน่วยจัดการความรู้และพัฒนา', 'employee', '', ''),
(27, 'ศูนย์วิจัยและพัฒนาทางศิลปศาสตร์ประยุกต์', 'staff', '', ''),
(28, 'หน่วยส่งเสริมและพัฒนางานวิจัย', 'employee', '', ''),
(29, 'กลุ่มวิจัย', 'employee', '', ''),
(30, 'กลุ่มงานคลังและพัสดุa', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `estimate_id` int(11) NOT NULL,
  `K` varchar(20) NOT NULL,
  `M` varchar(20) NOT NULL,
  `U` varchar(20) NOT NULL,
  `T` varchar(20) NOT NULL,
  `N` varchar(20) NOT NULL,
  `B` varchar(20) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`estimate_id`, `K`, `M`, `U`, `T`, `N`, `B`, `detail`) VALUES
(1, '5,5,4', '3,4,5', '3,3,4', '5,2,4', '3,4,5', '3,4,4', 'feedback'),
(2, '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', 'qwertyuhgc');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `header`, `detail`, `date`) VALUES
(1, '', '', '2022-04-06 13:53:50'),
(2, 'detailtest3', 'qwer', '2022-04-06 13:57:44'),
(3, 'detailtest3', 'qwer', '2022-04-06 14:00:01'),
(4, 'detailtest3', '4 gggaasdasd', '2022-04-06 14:00:24'),
(5, 'detailtest3', 'test1', '2022-04-06 14:56:25'),
(6, 'detailtest3', 'test2', '2022-04-06 14:57:25'),
(7, 'detailtest3', 'test2', '2022-04-06 14:57:25'),
(8, 'detailtest3', 'test3', '2022-04-06 14:58:06'),
(9, 'test2', 'fdhgfjgglijhmk.njh', '2022-04-11 14:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `prefix` varchar(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `prefix`, `first_name`, `last_name`, `tel`, `email`, `password`, `img`, `department_id`) VALUES
(1, 'นาย', 'Ally', 'Aagaard', '0800000000', 'admin@gmail.com', '11111', '2022041140990953.png', 1),
(2, 'นาย', 'Joe', 'คณบดี', '0800000000', 'boss@gmail.com', '1111', '', 2),
(3, 'นาง', 'Time', 'รองคณบดี', '0800000000', 'staff@gmail.com', '11111', '', 3),
(4, 'นาย', 'Bill', 'Murray', '0800000000', 'emp@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 10),
(5, 'นาย', 'test2', 'lastname', '0800000000', 'emp1@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '', 1),
(6, 'นาย', 'test1', 'lastname', '0800000000', 'emp2@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '20220411444106198.png', 1),
(7, 'นาย', 'test3', 'lastname', '0800000000', 'emp3@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '', 8),
(8, 'นาย', 'test1', 'lastname', '0800000000', 'emp4@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '', 16),
(9, 'นาย', 'test1', 'lastname', '0800000000', 'emp5@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '2022041137314397', 14),
(10, 'นางสาว', 'test1', 'lastname', '0800000000', 'emp6@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '202204111604388118', 23),
(11, 'นางสาว', 'test1', 'lastname', '0800000000', 'emp7@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '202204112128908621', 13),
(12, 'นาย', 'test1', 'lastname', '0800000000', 'emp8@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '202204111745404280', 15),
(13, 'นางสาว', 'test1', 'lastname', '0800000000', 'emp9@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '', 1),
(14, 'นาย', 'test1', 'lastname', '0800000000', 'emp10@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '20220411111297099.png', 1),
(15, 'นาย', 'test1', 'lastname', '0800000000', 'emp11@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '', 1),
(16, 'นางสาว', 'test1', 'lastname', '0800000000', 'emp12@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '202204111092004299.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `workplace` varchar(50) NOT NULL,
  `success` int(11) NOT NULL,
  `working_range_start` date NOT NULL,
  `working_range_end` date NOT NULL,
  `problem` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `header`, `detail`, `workplace`, `success`, `working_range_start`, `working_range_end`, `problem`, `date`) VALUES
(1, 'detailtest1', 'detailtest1', 'บ้าน', 80, '2022-04-06', '2022-04-07', 'detailtest1', '2022-04-06 10:54:27'),
(2, 'detailtest2', 'detailtest2', 'บ้าน', 60, '2022-03-02', '2022-03-17', 'detailtest2', '2022-04-06 10:55:01'),
(3, 'detailtest3', 'detailtest3', 'มจพใ', 90, '2022-04-01', '2022-04-05', 'detailtest3', '2022-04-06 11:04:40'),
(4, 'header_1', 'detail_1', 'place_1', 60, '2022-04-01', '2022-04-05', 'problem_1', '2022-04-08 08:01:10'),
(5, 'header_2', 'detail_2', 'place_2', 70, '2022-04-01', '2022-04-05', 'problem_2', '2022-04-08 08:01:10'),
(6, 'header_3', 'detail_3', 'place_3', 80, '2022-04-01', '2022-04-05', 'problem_3', '2022-04-08 08:01:10'),
(7, 'header_4', 'detail_4', 'place_4', 90, '2022-04-01', '2022-04-05', 'problem_4', '2022-04-08 08:01:10'),
(8, 'header_5', 'detail_5', 'place_5', 100, '2022-04-01', '2022-04-05', 'problem_5', '2022-04-08 08:01:10'),
(9, 'test1', 'test1', 'สำนักงาน', 10, '2022-04-07', '2022-04-09', '', '2022-04-09 17:15:29'),
(10, 'test1', 'test1', 'สำนักงาน', 10, '2022-04-15', '2022-04-09', '', '2022-04-09 17:23:26'),
(11, 'test2', 'test2', 'บ้าน', 50, '2022-04-06', '2022-04-08', 'test2', '2022-04-09 17:23:26'),
(12, '', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-09 17:30:41'),
(13, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-09 17:46:53'),
(14, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-09 17:48:34'),
(15, 'test1', 'test1', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', 'test1', '2022-04-11 09:22:32'),
(16, 'test2', 'test2', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', 'test2', '2022-04-11 09:22:32'),
(17, 'test1', 'test1', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', 'test1', '2022-04-11 09:23:14'),
(18, 'test2', 'test2', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', 'test2', '2022-04-11 09:23:14'),
(19, 'test1', 'test2', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', 'test2', '2022-04-11 09:23:45'),
(20, '', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 09:40:38'),
(21, 'test1', 'test1', 'สำนักงาน', 10, '2022-04-11', '0000-00-00', '', '2022-04-11 09:51:16'),
(22, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 09:55:25'),
(23, 'test1', 'test1', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', 'test1', '2022-04-11 09:57:51'),
(24, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 09:58:21'),
(25, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:02:27'),
(26, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:02:57'),
(27, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:04:02'),
(28, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:04:46'),
(29, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:06:03'),
(30, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:06:44'),
(31, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:08:23'),
(32, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:12:27'),
(33, 'test', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 14:12:26'),
(34, 'test', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 14:12:22'),
(35, 'test1', '', 'สำนักงาน', 10, '0000-00-00', '0000-00-00', '', '2022-04-11 10:30:29'),
(36, 'test1', 'test1', 'สำนักงาน', 10, '2022-04-12', '2022-04-12', '', '2022-04-11 10:38:08'),
(37, 'test1', 'test1', 'สำนักงาน', 10, '2022-04-12', '2022-04-13', '', '2022-04-11 10:38:46'),
(38, 'test1', 'test1', 'สำนักงาน', 10, '2022-04-11', '2022-04-12', 'test1', '2022-04-11 14:19:30'),
(39, 'test2', 'test2', 'สำนักงาน', 10, '2022-04-13', '2022-04-13', '', '2022-04-11 14:19:30'),
(40, 'test3', 'test3', 'สำนักงาน', 10, '2022-04-06', '2022-04-12', '', '2022-04-11 14:19:30'),
(41, 'test1', 'q', 'สำนักงาน', 10, '2022-04-13', '2022-04-13', '', '2022-04-12 17:08:04'),
(42, 'test2', 'we', 'สำนักงาน', 10, '2022-04-06', '2022-04-14', '', '2022-04-12 17:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `send_estimate`
--

CREATE TABLE `send_estimate` (
  `send_estimate_id` int(11) NOT NULL,
  `member_send_id` int(11) NOT NULL,
  `member_receive_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estimate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_estimate`
--

INSERT INTO `send_estimate` (`send_estimate_id`, `member_send_id`, `member_receive_id`, `date`, `estimate_id`) VALUES
(3, 2, 3, '2022-04-07 14:31:54', 1),
(4, 2, 1, '2022-04-11 14:28:02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `send_feedback`
--

CREATE TABLE `send_feedback` (
  `send_feedback_id` int(11) NOT NULL,
  `member_send_id` int(11) NOT NULL,
  `member_receive_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `feedback_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_feedback`
--

INSERT INTO `send_feedback` (`send_feedback_id`, `member_send_id`, `member_receive_id`, `date`, `feedback_id`) VALUES
(1, 1, 3, '2022-04-06 14:58:06', 8),
(2, 2, 3, '2022-04-06 16:36:23', 7),
(3, 2, 3, '2022-04-11 14:25:31', 9);

-- --------------------------------------------------------

--
-- Table structure for table `send_report`
--

CREATE TABLE `send_report` (
  `send_report_id` int(11) NOT NULL,
  `member_send_id` int(11) NOT NULL,
  `department_receive` varchar(255) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `report_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_report`
--

INSERT INTO `send_report` (`send_report_id`, `member_send_id`, `department_receive`, `file`, `date`, `report_id`) VALUES
(1, 2, 'รองคณบดีฝ่ายบริหาร', '', '2022-04-06 11:03:59', '1,2'),
(2, 3, 'หัวหน้าคณบดี', '', '2022-04-06 11:05:08', '3'),
(3, 3, 'หัวหน้าคณบดี', '', '2022-04-08 08:01:10', '4,5,6,7,8'),
(4, 3, 'หัวหน้าคณบดี', '202204101073484711.png', '2022-04-09 17:15:29', '9'),
(5, 3, 'หัวหน้าคณบดี', '20220410392011136.pdf', '2022-04-09 17:23:26', '10,11'),
(6, 3, 'หัวหน้าคณบดี', '', '2022-04-09 17:30:41', '12'),
(7, 3, 'หัวหน้าคณบดี', '', '2022-04-09 18:59:41', '13'),
(8, 3, 'หัวหน้าคณบดี', '', '2022-04-09 17:48:34', '14'),
(9, 3, 'หัวหน้าคณบดี', '', '2022-04-11 09:22:32', '15,16'),
(10, 3, 'หัวหน้าคณบดี', '', '2022-04-11 09:23:14', '17,18'),
(11, 3, 'หัวหน้าคณบดี', '202204111762700395.pdf', '2022-04-11 09:23:45', '19'),
(12, 3, 'หัวหน้าคณบดี', '', '2022-04-11 09:40:38', '20'),
(13, 3, 'หัวหน้าคณบดี', '', '2022-04-11 09:40:39', '0,0,0,0,0'),
(14, 3, 'หัวหน้าคณบดี', '', '2022-04-11 09:51:16', '21'),
(15, 3, 'หัวหน้าคณบดี', '', '2022-04-11 09:55:25', '22'),
(16, 3, 'หัวหน้าคณบดี', '', '2022-04-11 09:57:51', '23'),
(17, 3, 'หัวหน้าคณบดี', '202204111167328081.pdf', '2022-04-11 09:58:21', '24'),
(18, 3, 'หัวหน้าคณบดี', '20220411302908594.pdf', '2022-04-11 10:02:27', '25'),
(19, 3, 'หัวหน้าคณบดี', '202204111406418950.pdf', '2022-04-11 10:02:57', '26'),
(20, 3, 'หัวหน้าคณบดี', '202204112099243911.pdf', '2022-04-11 10:04:02', '27'),
(21, 3, 'หัวหน้าคณบดี', '', '2022-04-11 10:04:46', '28'),
(22, 3, 'หัวหน้าคณบดี', '', '2022-04-11 10:06:03', '29'),
(23, 3, 'หัวหน้าคณบดี', '', '2022-04-11 10:06:44', '30'),
(24, 3, 'หัวหน้าคณบดี', '', '2022-04-11 10:08:23', '31'),
(25, 3, 'หัวหน้าคณบดี', '', '2022-04-11 10:12:27', '32'),
(26, 3, 'หัวหน้าคณบดี', '20220411181343446.pdf', '2022-04-11 10:15:46', '33'),
(27, 3, 'หัวหน้าคณบดี', '', '2022-04-11 10:28:29', '34'),
(28, 3, 'หัวหน้าคณบดี', '20220411887791877.pdf', '2022-04-11 14:14:56', '35'),
(29, 3, 'หัวหน้าคณบดี', '202204111169456073.pdf', '2022-04-11 10:30:29', '35'),
(30, 3, 'หัวหน้าคณบดี', '2022041149384585.pdf', '2022-04-11 10:38:08', '36'),
(31, 3, 'หัวหน้าคณบดี', '', '2022-04-11 10:38:46', '37'),
(32, 3, 'หัวหน้าคณบดี', '202204112096785664.pdf', '2022-04-11 14:19:30', '38,39,40'),
(33, 3, 'หัวหน้าคณบดี', '', '2022-04-12 17:08:04', '41'),
(34, 3, 'หัวหน้าคณบดี', '', '2022-04-12 17:10:52', '42');

-- --------------------------------------------------------

--
-- Table structure for table `test_report`
--

CREATE TABLE `test_report` (
  `report_id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `workplace` varchar(50) NOT NULL,
  `success` varchar(11) NOT NULL,
  `working_range_start` varchar(255) NOT NULL,
  `working_range_end` varchar(255) NOT NULL,
  `file` varchar(50) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_report`
--

INSERT INTO `test_report` (`report_id`, `header`, `detail`, `workplace`, `success`, `working_range_start`, `working_range_end`, `file`, `problem`, `date`) VALUES
(1, 'detailtest1', 'detailtest1', 'บ้าน', '80', '2022-04-06', '2022-04-07', '', 'detailtest1', '2022-04-06 10:54:27'),
(2, 'detailtest2', 'detailtest2', 'บ้าน', '60', '2022-03-02', '2022-03-17', '', 'detailtest2', '2022-04-06 10:55:01'),
(3, 'detailtest3', 'detailtest3', 'มจพใ', '90', '2022-04-01', '2022-04-05', '', 'detailtest3', '2022-04-06 11:04:40'),
(4, 'header_1', 'detail_1', 'place_1', 'succ_1', 's_range_1', 'e_range_1', 'file_1', 'problem_1', '2022-04-08 07:31:53'),
(5, 'header_2', 'detail_2', 'place_2', 'succ_2', 's_range_2', 'e_range_2', 'file_2', 'problem_2', '2022-04-08 07:31:53'),
(6, 'header_3', 'detail_3', 'place_3', 'succ_3', 's_range_3', 'e_range_3', 'file_3', 'problem_3', '2022-04-08 07:31:53'),
(7, 'header_4', 'detail_4', 'place_4', 'succ_4', 's_range_4', 'e_range_4', 'file_4', 'problem_4', '2022-04-08 07:31:53'),
(8, 'header_5', 'detail_5', 'place_5', 'succ_5', 's_range_5', 'e_range_5', 'file_5', 'problem_5', '2022-04-08 07:31:53'),
(9, 'header_1', 'detail_1', 'place_1', 'succ_1', 's_range_1', 'e_range_1', 'file_1', 'problem_1', '2022-04-08 07:32:24'),
(10, 'header_2', 'detail_2', 'place_2', 'succ_2', 's_range_2', 'e_range_2', 'file_2', 'problem_2', '2022-04-08 07:32:24'),
(11, 'header_3', 'detail_3', 'place_3', 'succ_3', 's_range_3', 'e_range_3', 'file_3', 'problem_3', '2022-04-08 07:32:24'),
(12, 'header_4', 'detail_4', 'place_4', 'succ_4', 's_range_4', 'e_range_4', 'file_4', 'problem_4', '2022-04-08 07:32:24'),
(13, 'header_5', 'detail_5', 'place_5', 'succ_5', 's_range_5', 'e_range_5', 'file_5', 'problem_5', '2022-04-08 07:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `test_send_report`
--

CREATE TABLE `test_send_report` (
  `send_report_id` int(11) NOT NULL,
  `member_send_id` int(11) NOT NULL,
  `department_receive` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `report_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_send_report`
--

INSERT INTO `test_send_report` (`send_report_id`, `member_send_id`, `department_receive`, `date`, `report_id`) VALUES
(1, 2, 'รองคณบดีฝ่ายบริหาร', '2022-04-06 11:03:59', '1,2'),
(2, 3, 'หัวหน้าคณบดี', '2022-04-06 11:05:08', '3'),
(3, 3, 'หัวหน้าคณบดี', '2022-04-08 07:26:56', '0,0,0,0,0'),
(4, 3, 'หัวหน้าคณบดี', '2022-04-08 07:31:53', '4,5,6,7,8'),
(5, 3, 'หัวหน้าคณบดี', '2022-04-08 07:32:24', '9,10,11,12,13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`estimate_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `send_estimate`
--
ALTER TABLE `send_estimate`
  ADD PRIMARY KEY (`send_estimate_id`),
  ADD KEY `member_send_id` (`member_send_id`),
  ADD KEY `member_receive_id` (`member_receive_id`),
  ADD KEY `estimate_id` (`estimate_id`);

--
-- Indexes for table `send_feedback`
--
ALTER TABLE `send_feedback`
  ADD PRIMARY KEY (`send_feedback_id`),
  ADD KEY `member_send_id` (`member_send_id`),
  ADD KEY `member_receive_id` (`member_receive_id`),
  ADD KEY `feedback_id` (`feedback_id`);

--
-- Indexes for table `send_report`
--
ALTER TABLE `send_report`
  ADD PRIMARY KEY (`send_report_id`),
  ADD KEY `member_send_id` (`member_send_id`);

--
-- Indexes for table `test_report`
--
ALTER TABLE `test_report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `test_send_report`
--
ALTER TABLE `test_send_report`
  ADD PRIMARY KEY (`send_report_id`),
  ADD KEY `member_send_id` (`member_send_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `estimate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `send_estimate`
--
ALTER TABLE `send_estimate`
  MODIFY `send_estimate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `send_feedback`
--
ALTER TABLE `send_feedback`
  MODIFY `send_feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `send_report`
--
ALTER TABLE `send_report`
  MODIFY `send_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `test_report`
--
ALTER TABLE `test_report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `test_send_report`
--
ALTER TABLE `test_send_report`
  MODIFY `send_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `send_estimate`
--
ALTER TABLE `send_estimate`
  ADD CONSTRAINT `send_estimate_ibfk_1` FOREIGN KEY (`member_send_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `send_estimate_ibfk_2` FOREIGN KEY (`member_receive_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `send_estimate_ibfk_3` FOREIGN KEY (`estimate_id`) REFERENCES `estimate` (`estimate_id`);

--
-- Constraints for table `send_feedback`
--
ALTER TABLE `send_feedback`
  ADD CONSTRAINT `send_feedback_ibfk_1` FOREIGN KEY (`member_send_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `send_feedback_ibfk_2` FOREIGN KEY (`member_receive_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `send_feedback_ibfk_3` FOREIGN KEY (`feedback_id`) REFERENCES `feedback` (`feedback_id`);

--
-- Constraints for table `send_report`
--
ALTER TABLE `send_report`
  ADD CONSTRAINT `send_report_ibfk_1` FOREIGN KEY (`member_send_id`) REFERENCES `member` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
