-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2026 at 06:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteens`
--

DROP TABLE IF EXISTS `canteens`;
CREATE TABLE `canteens` (
  `canteen_id` int(11) NOT NULL,
  `canteen_name` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `canteens`
--

INSERT INTO `canteens` (`canteen_id`, `canteen_name`, `location`) VALUES
(1, 'โรงอาหาร A', 'คณะวิศวกรรมศาสตร์'),
(2, 'โรงอาหาร B', 'คณะวิทยาศาสตร์'),
(3, 'โรงอาหาร C', 'คณะครุศาสตร์');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL,
  `stall_id` int(11) NOT NULL,
  `complaint_date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `status` enum('รอตรวจสอบ','ดำเนินการแล้ว') NOT NULL DEFAULT 'รอตรวจสอบ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_id`, `stall_id`, `complaint_date`, `category`, `details`, `status`) VALUES
(1, 1, '2026-01-15', 'ความสะอาด', 'พบแมลงสาบในอาหาร', 'ดำเนินการแล้ว'),
(2, 2, '2026-01-16', 'คุณภาพอาหาร', 'ก๋วยเตี๋ยวมีกลิ่นบูด น้ำซุปไม่สด', 'ดำเนินการแล้ว'),
(3, 3, '2026-01-18', 'การบริการ', 'พนักงานพูดจาไม่สุภาพกับลูกค้า', 'ดำเนินการแล้ว'),
(4, 4, '2026-01-20', 'ความสะอาด', 'โต๊ะกินข้าวสกปรก ไม่มีคนเช็ดทำความสะอาด', 'รอตรวจสอบ'),
(5, 5, '2026-01-22', 'คุณภาพอาหาร', 'ข้าวมันไก่ ไก่ไม่สุก มีเลือดออก', 'ดำเนินการแล้ว'),
(6, 1, '2026-01-25', 'ราคา', 'ขึ้นราคาอาหารโดยไม่แจ้งล่วงหน้า', 'รอตรวจสอบ'),
(7, 6, '2026-01-28', 'ความสะอาด', 'พบเส้นผมในผัดไทย', 'ดำเนินการแล้ว'),
(8, 7, '2026-02-01', 'คุณภาพอาหาร', 'กาแฟมีรสชาติแปลก เหมือนใช้นมหมดอายุ', 'รอตรวจสอบ'),
(9, 8, '2026-02-03', 'การบริการ', 'รอออร์เดอร์นานมากกว่า 40 นาที', 'ดำเนินการแล้ว'),
(10, 2, '2026-02-05', 'ความสะอาด', 'ชามก๋วยเตี๋ยวล้างไม่สะอาด มีคราบเก่าติดอยู่', 'ดำเนินการแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

DROP TABLE IF EXISTS `responses`;
CREATE TABLE `responses` (
  `response_id` int(11) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `response_date` date NOT NULL,
  `response_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`response_id`, `complaint_id`, `response_date`, `response_message`) VALUES
(1, 1, '2026-01-17', 'ได้ทำการตรวจสอบและแจ้งร้านค้าให้ทำความสะอาดครัวทั้งหมด พร้อมฉีดยากำจัดแมลง'),
(2, 2, '2026-01-18', 'ได้ตักเตือนร้านค้าเรื่องวัตถุดิบและให้ปรับปรุงการเก็บรักษาอาหาร'),
(3, 5, '2026-01-24', 'ได้ตรวจสอบแล้ว สั่งให้ร้านปรับปรุงกระบวนการปรุงอาหารให้สุกทั่วถึง'),
(4, 7, '2026-01-30', 'ได้แจ้งเตือนร้านค้าเรื่องความสะอาดในการประกอบอาหาร และให้สวมหมวกคลุมผม'),
(5, 10, '2026-02-07', 'ได้ตรวจสอบและสั่งให้ร้านค้าปรับปรุงการล้างภาชนะใหม่ทั้งหมด'),
(6, 10, '2026-02-08', 'ตรวจสอบครั้งที่ 2'),
(7, 10, '2026-02-08', 'ตรวจสอบครั้งที่ 3'),
(8, 9, '2026-02-08', 'ตรวจสอบและแก้ไขแล้ว'),
(9, 9, '2026-02-08', 'ตรวจสอบครั้งที่ 2'),
(10, 10, '2026-02-08', 'ตรวจสอบครั้งที่ 4'),
(11, 3, '2026-02-08', 'ตรวจสอบและแก้ไขแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `stalls`
--

DROP TABLE IF EXISTS `stalls`;
CREATE TABLE `stalls` (
  `stall_id` int(11) NOT NULL,
  `stall_name` varchar(100) NOT NULL,
  `canteen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stalls`
--

INSERT INTO `stalls` (`stall_id`, `stall_name`, `canteen_id`) VALUES
(1, 'ร้านข้าวแกงป้าแก้ว', 1),
(2, 'ร้านก๋วยเตี๋ยวเจ๊หน่อย', 1),
(3, 'ร้านส้มตำไก่ย่าง', 1),
(4, 'ร้านอาหารตามสั่งลุงชาติ', 2),
(5, 'ร้านข้าวมันไก่เฮียหลี', 2),
(6, 'ร้านผัดไทยแม่นภา', 2),
(7, 'ร้านกาแฟ&เบเกอรี่', 3),
(8, 'ร้านข้าวหมูแดงสูตรเด็ด', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canteens`
--
ALTER TABLE `canteens`
  ADD PRIMARY KEY (`canteen_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `stall_id` (`stall_id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`response_id`),
  ADD KEY `complaint_id` (`complaint_id`);

--
-- Indexes for table `stalls`
--
ALTER TABLE `stalls`
  ADD PRIMARY KEY (`stall_id`),
  ADD KEY `canteen_id` (`canteen_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canteens`
--
ALTER TABLE `canteens`
  MODIFY `canteen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stalls`
--
ALTER TABLE `stalls`
  MODIFY `stall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`stall_id`) REFERENCES `stalls` (`stall_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `responses_ibfk_1` FOREIGN KEY (`complaint_id`) REFERENCES `complaints` (`complaint_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stalls`
--
ALTER TABLE `stalls`
  ADD CONSTRAINT `stalls_ibfk_1` FOREIGN KEY (`canteen_id`) REFERENCES `canteens` (`canteen_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
