-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2023 at 03:20 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_number`
--

CREATE TABLE `auto_number` (
  `group` varchar(32) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `optimistic_lock` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auto_number`
--

INSERT INTO `auto_number` (`group`, `number`, `optimistic_lock`, `update_time`) VALUES
('J2309-???', 8, 1, 1694684855);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `computer_type` int(11) DEFAULT NULL COMMENT 'ประเภท',
  `asset_number` varchar(45) DEFAULT NULL COMMENT 'รหัสทรัพย์สิน',
  `hostname` varchar(45) DEFAULT NULL COMMENT 'ชื่อคอมพิวเตอร์',
  `model` varchar(200) DEFAULT NULL COMMENT 'รุ่น',
  `serial` varchar(45) DEFAULT NULL COMMENT 'ซีเรียว',
  `cpu` varchar(45) DEFAULT NULL COMMENT 'ซีพียู',
  `ram` varchar(45) DEFAULT NULL COMMENT 'แรม',
  `hdd1` varchar(45) DEFAULT NULL COMMENT 'HDD หลัก',
  `hdd2` varchar(45) DEFAULT NULL COMMENT 'HDD รอง',
  `ssd1` varchar(45) DEFAULT NULL COMMENT 'SSD หลัก',
  `ssd2` varchar(45) DEFAULT NULL COMMENT 'SSD รอง',
  `vga` varchar(45) DEFAULT NULL COMMENT 'การ์ดจอ',
  `lan_ip_address` varchar(45) DEFAULT NULL COMMENT 'LAN IP',
  `lan_mac_address` varchar(45) DEFAULT NULL COMMENT 'LAN MAC',
  `wifi_ip_address` varchar(45) DEFAULT NULL COMMENT 'WI-FI IP',
  `wifi_mac_address` varchar(45) DEFAULT NULL COMMENT 'WI-FI MAC',
  `install_date` date DEFAULT NULL COMMENT 'วันติดตั้ง',
  `docs` text COMMENT 'ไฟล์แนบ',
  `vendor` text COMMENT 'ผู้ขาย',
  `cost` float DEFAULT NULL COMMENT 'ราคา',
  `remask` text COMMENT 'หมายเหตุ',
  `computer_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `computer_type`, `asset_number`, `hostname`, `model`, `serial`, `cpu`, `ram`, `hdd1`, `hdd2`, `ssd1`, `ssd2`, `vga`, `lan_ip_address`, `lan_mac_address`, `wifi_ip_address`, `wifi_mac_address`, `install_date`, `docs`, `vendor`, `cost`, `remask`, `computer_status`) VALUES
(1, 1, 'F-66-IT-IT-001', 'ACCOUNT01-NFC', 'MS-7D48 Upgrade', '07D4822_N21E604332', '12th Gen Intel Core i3-12100', 'DDR4 3200 8GB', 'SATA 500GB', '', 'SSD 500GB', '', '', '192.168.2.111', '04:7c:16:82:df:17', '', '', '2023-06-10', '', '', NULL, '', 1),
(2, 2, 'F-66-IT-IT-002', 'ACCOUNT02-NFC', 'Dell Optiplex 3000', 'GR3XKF3', 'Intel Core i3-10105T CPU @ 3.00GHz', 'DDR4 3200 4GB', 'WDC WD10SPSX-75A6WT0', 'WD My Passport 0830 USB Device', 'WD_BLACK SN750 SE 250GB', '', 'Intel(R) UHD Graphics 630', '192.168.2.112', '70:b5:e8:6e:b2:cb', '', 'd2:b7:48:ed:96:10', NULL, '', '', NULL, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `computer_status`
--

CREATE TABLE `computer_status` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computer_status`
--

INSERT INTO `computer_status` (`id`, `code`, `name`, `color`) VALUES
(1, 'Used', 'ใช้งาน', '#1A5D1A'),
(2, 'Repair', 'ซ่อม', '#F94C10'),
(3, 'Keep IT', 'เก็บ', '#0D1282');

-- --------------------------------------------------------

--
-- Table structure for table `computer_type`
--

CREATE TABLE `computer_type` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computer_type`
--

INSERT INTO `computer_type` (`id`, `code`, `name`, `color`) VALUES
(1, 'PC', 'คอมพิวเตอร์', '#9400FF'),
(2, 'NB', 'โน๊ตบุ้ค', '#952323'),
(3, 'AIO', 'ออลอินวัน', '#952323');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `code`, `name`, `color`) VALUES
(1, 'AC', 'แผนกบัญชี (Account )', '#274e13'),
(2, 'EN', 'แผนกวิศวกรรม (Engineer)', '#9900ff'),
(3, 'HR', 'แผนกบุคคล (Human Resources)', '#662549'),
(4, 'PU', 'แผนกจัดซื้อ (Purchasing)', '#ff00ff'),
(5, 'PN', 'ฝ่ายวางแผนและควบคุมการผลิต (Planning)', '#674ea7'),
(6, 'PD', 'ฝ่ายผลิต (Production)', '#4a86e8'),
(7, 'QC', 'แผนกควบคุมคุณภาพ (Quality Control)', '#ff9900'),
(8, 'RD', 'แผนกวิจัยและพัฒนาผลิตภัณฑ์ (R&D)', '#ff0000'),
(9, 'WH', 'แผนกคลังสินค้า (Ware House)', '#980000'),
(10, 'IT', 'แผนกไอที (IT)', '#8e7cc3'),
(11, 'GM', 'ผู้จัดการทั่วไป (General Manager)', '#93c47d'),
(12, 'XX', 'ยังไม่กำหนด (Temp)', '#434343');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `number` varchar(45) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `request_by` int(11) DEFAULT NULL,
  `job_department` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `equipment` varchar(255) DEFAULT NULL,
  `job_type` int(11) DEFAULT NULL,
  `urgency` int(11) DEFAULT NULL,
  `job_status` int(11) DEFAULT NULL,
  `remask` text,
  `docs` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `number`, `request_date`, `title`, `description`, `request_by`, `job_department`, `location`, `equipment`, `job_type`, `urgency`, `job_status`, `remask`, `docs`) VALUES
(1, 'J2309-001', '2023-09-05', 'ติดตั้งคอมพิวเตอร์เครื่องใหม่', 'QA02-NFC', 4, 7, 2, 'QA02-NFC', 1, 1, 3, '', '{\"75be28cf58eed87a23cad0d9f1d91136.jpg\":\"293201_0.jpg\",\"6b22f7fb9ec549b077d5628453ce7468.jpg\":\"293202_0.jpg\"}'),
(2, 'J2309-002', '2023-09-06', 'ประชุมประจำเดือน', '', 11, 11, 11, '', 6, 1, 3, '', 'null'),
(3, 'J2309-003', '2023-09-09', 'สำรวจทรัพย์สินใหม่', '', 12, 1, 6, '', 1, 1, 3, '', '{\"a3f8725227824aab9ee2c6a93aff2392.pdf\":\"Document (10).pdf\"}'),
(4, 'J2309-004', '2023-09-11', 'ประชุมส่งมอบงานจากคุณจันทร์', 'ให้ไอทีตั้งค่าโปรแกรม Digital Signature', 11, 11, 11, '', 6, 1, 3, '', 'null'),
(5, 'J2309-005', '2023-09-11', 'สำรวจจุดติดตั้งเครื่องสแกนนิ้วและกล้องวงจรปิด', 'สำหรับติดตั้งอาคารผลิต B4 ของแผนก PD', 12, 3, 19, '', 1, 1, 3, '', 'null'),
(6, 'J2309-006', '2023-09-12', 'ติดตั้งมือถือใหม่', '', 15, 9, 6, 'มือถือ', 1, 1, 3, '', 'null'),
(7, 'J2309-007', '2023-09-13', 'เปิดสิทธิ์ MRP', '', 4, 7, 2, 'MRP', 1, 1, 3, '', 'null'),
(8, 'J2309-008', '2023-09-13', 'ตรวจรับ Switch PoE', '', 16, 4, 6, 'Switch PoE', 3, 1, 3, '', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `job_status`
--

CREATE TABLE `job_status` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_status`
--

INSERT INTO `job_status` (`id`, `code`, `name`, `color`) VALUES
(1, 'New Request', 'แจ้งงาน', '#df2e39'),
(2, 'In Progress', 'ดำเนินการ', '#ff00ff'),
(3, 'Finished', 'เสร็จสิ้น', '#1A5D1A'),
(4, 'Canceled', 'ยกเลิก', '#454545');

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`id`, `code`, `name`, `color`) VALUES
(1, 'Service', 'Support & Service', '#11468F'),
(2, 'Server', 'Server & Network', '#F58840'),
(3, 'Supply', 'Supply', '#DA1212'),
(4, 'Devalop', 'Devaloper and Coding', '#125C13'),
(5, 'CCTV', 'CCTV', '#3d85c6'),
(6, 'Meeting', 'Meeting', '#9900ff'),
(7, 'PM', 'PM', '#002B5B'),
(8, 'Backup', 'Backup', '#19A7CE'),
(9, 'Other', 'Other', '#9A9483');

-- --------------------------------------------------------

--
-- Table structure for table `job_urgency`
--

CREATE TABLE `job_urgency` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_urgency`
--

INSERT INTO `job_urgency` (`id`, `code`, `name`, `color`) VALUES
(1, 'Medium', 'ปกติ', '#279EFF'),
(2, 'High', 'ด่วน', '#ff0000'),
(3, 'Low', 'ต่ำ', '#6aa84f');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `code`, `name`, `color`) VALUES
(1, 'B1', 'อาคารสำนักงาน (Office)', '#1C6758'),
(2, 'QC', 'ห้องควบคุมคุณภาพ (Quality Control)', '#1C6758'),
(3, 'PU', 'ห้องจัดซื้อ (Purchasing )', '#1C6758'),
(4, 'HR', 'ห้องบุคคล (Human Resources)', '#1C6758'),
(5, 'PD', 'ห้องผลิต (Production)', '#1C6758'),
(6, 'IT', 'ห้องคอมพิวเตอร์ (Information Technology)', '#1C6758'),
(7, 'WH', 'คลังเก็บสินค้า (Warehouse)', '#1C6758'),
(8, 'RE', 'ห้องน้ำ (Restroom)', '#1C6758'),
(9, 'BF', 'ห้องนมแม่ (Breast Feeding Room)', '#1C6758'),
(10, 'KC', 'ห้องครัว (Kitchen )', '#1C6758'),
(11, 'MT', 'ห้องประชุม (Meeting)', '#1C6758'),
(12, 'AC', 'ห้องบัญชี (Accounting)', '#1C6758'),
(13, 'CT', 'ห้องรับประทานอาหาร (Canteen)', '#1C6758'),
(14, 'GM', 'ห้องผู้จัดการทั่วไป (General Manager)', '#1C6758'),
(15, '2K', 'อาคารB2 (Koji)', '#EC7272'),
(16, '3M', 'อาคารB3 (Moromi)', '#F7A76C'),
(17, '4P', 'อาคารB4 ส่วนคั้น (Pressing)', '#2B7A0B'),
(18, '4F', 'อาคารB4 ส่วนกรอง (Filter)', '#2B7A0B'),
(19, '4G', 'อาคารB4 ส่วนบรรจุ (Packing)', '#2B7A0B'),
(20, '5V', 'อาคารB5 ส่วนน้ำส้ม (Rice Vinegar)', '#876445'),
(21, '5R', 'อาคารB5 ส่วนล้างวัตถุดิบ (Raw Material)', '#876445'),
(22, 'EN', 'อาคารวิศวกรรม (Engineering)', '#FF9F29'),
(23, 'BO', 'อาคารบอยเลอร์ (Boiler)', '#FF9F29'),
(24, 'RD', 'ห้องวิจัยและพัฒนา (Research & Development )', '#1C6758'),
(25, 'GU', 'ป้อมยาม (Guardhouse)', '#990000'),
(26, 'GB', 'โรงเก็บขยะ (Garbage Shed)', '#990000'),
(27, 'WS', 'บ่อบำบัดน้ำเสีย (Wastewater Stabilization Pon', '#990000');

-- --------------------------------------------------------

--
-- Table structure for table `monitors`
--

CREATE TABLE `monitors` (
  `id` int(11) NOT NULL,
  `asset_number` varchar(45) DEFAULT NULL COMMENT 'รหัสทรัพย์สิน',
  `model` varchar(200) DEFAULT NULL COMMENT 'รุ่น',
  `serial` varchar(45) DEFAULT NULL COMMENT 'ซีเรียว',
  `monitor_size` float DEFAULT NULL COMMENT 'ขนาดจอภาพ',
  `port_connected` varchar(45) DEFAULT NULL COMMENT 'การเชื่อมต่อ',
  `install_date` date DEFAULT NULL COMMENT 'วันที่ติดตั้ง',
  `docs` text COMMENT 'ไฟล์แนบ',
  `vendor` text COMMENT 'ผู้ขาย',
  `cost` float DEFAULT NULL COMMENT 'ราคา',
  `remask` text COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `asset_no` varchar(45) DEFAULT NULL COMMENT 'รหัสทรัพย์สิน',
  `name` varchar(100) DEFAULT NULL COMMENT 'ชื่อ',
  `key` varchar(45) DEFAULT NULL COMMENT 'KEY',
  `install_date` date DEFAULT NULL COMMENT 'วันที่ติดตั้ง',
  `email_actived` varchar(45) DEFAULT NULL COMMENT 'Actived Email',
  `email_password` varchar(45) DEFAULT NULL COMMENT 'Email Password',
  `vendor` text COMMENT 'ผู้ขาย',
  `exp_date` date DEFAULT NULL COMMENT 'วันหมดอายุ',
  `docs` text COMMENT 'ไฟล์แนบ',
  `cost` float DEFAULT NULL COMMENT 'ราคา',
  `remask` text COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `asset_no`, `name`, `key`, `install_date`, `email_actived`, `email_password`, `vendor`, `exp_date`, `docs`, `cost`, `remask`) VALUES
(1, 'F-58-PD-IT-015', 'Office 2013 Home&Business', 'DK8MH-NHGYR-F68YX-DD9BV-B7RP3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'F-58-QC-IT-027', 'Office 2013 Home&Business', 'D6P7N-82KHY-C7F97-BCD84-BY2XD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'F-58-PU-IT-011', 'Office 2013 Home&Business', '9NVQ9-Y2JF7-DQWM7-X8VPH-R889D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'F-58-PU-IT-010', 'Office 2013 Home&Business', 'CDNTH-BTMT4-36DDR-3RHTF-QGJ9D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'F-58-HR-IT-016', 'Office 2013 Home&Business', '44NX7-3RGKP-7JBKV-FTQMD-7T7GQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'F-58-PD-IT-014', 'Office 2013 Home&Business', '7NG7W-K9JR4-62K8F-MHKBH-8HRP3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'F-58-PD-IT-013', 'Office 2013 Home&Business', 'PHFF6-MNTDQ-94HCK-MCT84-VMFP3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'F-58-AC-IT-012', 'Office 2013 Home&Business', 'MMMQ9-3RXXB-WB3CG-XQPWM-R6WC3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'F-64-PU-RD-057', 'Office 2019 Home&Business', 'CYWWJ-KQR4H-M3VCM-G7GVH-TDCHZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'F-64-AC-IT-063', 'Office 2019 Home&Business', '3GKF2-MQTG6-PPTGM-9W7CJ-4XJGZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'F-64-AC-IT-062', 'Office 2019 Home&Business', 'J796J-DMKJH-PHCM7-C3Q97-6YQJZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'F-64-EN-IT-084', 'Office 2021 Home&Business', '4DK4M-MKT9H-F4J4F-6K3W4-TGD2Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'F-64-IT-IT-074', 'Office 2021 Home&Business', 'Q4R3P-VYDP4-2R3XD-RJMM6-6DCVZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'F-64-IT-IT-092', 'Office 2021 Home&Business', '7TRV4-MKJFP-R793M-2VYHW-KYQHZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'รอ1', 'Office 2021 Home&Business', 'DYR2X-7CH2H-V37FD-GX7KJ-PMDXZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'F-64-PU-IT-093', 'Office 2021 Home&Business', 'DCYMJ-4H7TQ-FKVCW-G4DXC-4K9TZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'รอ2', 'Office 2021 Home&Business', '9M6PT-HKMVR-42JP2-QD2CW-39GGZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'F-64-HR-IT-075', 'Office 2021 Home&Business', 'KF97X-YVRYD-KP2C7-7JHPQ-JMCCZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'F-64-HR-IT-087', 'Office 2021 Home&Business', 'PKDHG-CF9JQ-7M744-GQ9QF-WCPHZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'F-64-PD-IT-083', 'Office 2021 Home&Business', 'XKGV7-774H2-RY9HH-KK9DY-H9H3Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'รอ3', 'Office 2021 Home&Business', 'PYYQP-9Y3XX-MKC9V-62K7X-DYD7Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'F-64-IT-IT-088', 'Office 2021 Home&Business', '2GCKJ-7GYTY-H3JC2-HFY7T-R92MZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'F-64-PD-IT-XXX', 'Office 2021 Home&Business', 'QPPDK-DTQKH-RGMKJ-3VCMH-PDD9Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'F-64-GM-IT-070', 'Office 2021 Home&Business', 'XDPPJ-Y63H4-KPF9T-KTDPP-9YDDZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'F-64-EN-EN-XXX', 'Office 2021 Home&Student', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'F-64-QA-QA-XXX', 'Office 2021 Home&Student', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `operator_by` int(11) DEFAULT NULL,
  `details` text,
  `sparepart_list` text,
  `cost` decimal(10,2) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `remask` text,
  `docs` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`id`, `job_id`, `operator_by`, `details`, `sparepart_list`, `cost`, `start_date`, `end_date`, `remask`, `docs`) VALUES
(1, 1, 1, '', '', '30650.00', '2023-09-05 08:00:00', '2023-09-05 12:00:00', 'http://192.168.2.4/glpi/front/computer.form.php?id=46', '{\"01893b333ae0c002e9526b8b8aa6726a.jpg\":\"qa02.jpg\"}'),
(2, 2, 1, '', '', '0.00', '2023-09-06 08:00:00', '2023-09-06 12:00:00', '', 'null'),
(3, 3, 1, '', '', '0.00', '2023-09-09 09:00:00', '2023-09-09 12:00:00', '', 'null'),
(4, 4, 1, '', '', '0.00', '2023-09-11 13:00:00', '2023-09-11 15:00:00', 'ไม่สามารถติดตั้งเครื่องคุณยศได้', '{\"181247fcfa64c8257cbf830fa774b6f8.xlsx\":\"งานจันโอนโรงงาน (1).xlsx\"}'),
(5, 5, 1, 'ติดตั้งตรงเสาทางซ้าย ตรงทางเข้า', 'เครื่องสแแกนนิ้ว, กล้อง IP Camera, ระบบNetwork', '0.00', '2023-09-11 10:00:00', '2023-09-11 11:30:00', '', '{\"06b0aa4675ddd9ba019235a15f8b135a.jpg\":\"293657.jpg\"}'),
(6, 6, 1, '', '', '3400.00', '2023-09-12 13:00:00', '2023-09-12 14:00:00', '', '{\"8fbe636eba15466c68312d924c3278c5.jpg\":\"293658_0.jpg\",\"193fd4903fe913fc1fe90222869260a1.jpg\":\"293659_0.jpg\"}'),
(7, 7, 1, '', '', '0.00', '2023-09-14 10:00:00', '2023-09-14 12:00:00', '', '{\"fa5da34151cbdbef071ad6f4110c5d50.jpg\":\"13-9-2566 16-31-09.jpg\"}'),
(8, 8, 1, '', '', '3580.00', '2023-09-13 14:00:00', '2023-09-13 15:00:00', '', '{\"189c8f6df934b71c8fc9befab66c7da4.jpg\":\"13-9-2566 16-25-52.jpg\"}');

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `id` int(11) NOT NULL,
  `thai_name` varchar(200) DEFAULT NULL,
  `eng_name` varchar(200) DEFAULT NULL,
  `nick_name` varchar(45) DEFAULT NULL,
  `team_name` varchar(200) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tel1` varchar(45) DEFAULT NULL,
  `tel2` varchar(45) DEFAULT NULL,
  `line` varchar(200) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `thai_name`, `eng_name`, `nick_name`, `team_name`, `parent`, `department`, `email`, `tel1`, `tel2`, `line`, `avatar`, `status`) VALUES
(1, 'ธีรพงศ์ ขันตา', 'Theerapong Khanta', 'แซม', 'IT', NULL, 1, 'itnfc@northernfoodcomplex.com', '', '', '', '', 1),
(2, 'ช่างแผนกวิศวกรรม', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(3, 'เจษกร คำวรรณ์', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(4, 'คมสันต์ สมบูรณ์ชัย', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(5, 'มานพ ศรีจุมปา', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(6, 'ณรงค์ศักดิ์ แซ่จาว', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(7, 'ณัฐพล ขันเขียว', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(8, 'ภานุวัฒน์ ยางรัมย์', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(9, 'พงศพัศ สมใหม่', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(10, 'สราวุฒิ โฆษิตเกียรติคุณ', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(11, 'สุพจน์ ช่างฆ้อง', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(12, 'สุเทพ ปวงรังษี', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(13, 'สุริยา สมเพชร', '', '', '', NULL, NULL, '', '', '', '', '', NULL),
(14, 'ยศพนธ์ โพธิ', '', '', '', NULL, NULL, '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `code`, `name`, `color`) VALUES
(1, 'General Manager', 'ผู้จัดการทั่วไป', NULL),
(2, 'Department Manager', 'ผู้จัดการฝ่าย', NULL),
(3, 'Assistant Department Manager', 'ผู้ช่วยผู้จัดการฝ่าย', NULL),
(4, 'Department Head', 'หัวหน้าแผนก', NULL),
(5, 'Assistant Department Head', 'ผู้ช่วยหัวหน้าแผนก', NULL),
(6, 'Supervisor', 'หัวหน้างาน', NULL),
(7, 'Assistant Supervisor', 'ผู้ช่วยหัวหน้างาน', NULL),
(8, 'Administrative officer', 'พนักงานธุรการ', NULL),
(9, 'Accountant officer', 'พนักงานบัญชี', NULL),
(10, 'Packing staff', 'พนักงานบรรจุ', NULL),
(11, 'Warehouse officer', 'พนักงานคลังสินค้า', NULL),
(12, 'Crusher staff', 'พนักงานคั้น', NULL),
(13, 'Filter staff', 'พนักงานกรอง', NULL),
(14, 'Packing staff', 'พนักงานบรรจุ', NULL),
(15, 'Production staff', 'พนักงานผลิต', NULL),
(16, 'Quality control officer', 'พนักงานควบคุมคุณภาพ', NULL),
(17, 'Document controller officer', 'พนักงานควบคุมเอกสาร', NULL),
(18, 'Technician', 'พนักงานช่าง', NULL),
(19, 'Engineer', 'วิศวกร', NULL),
(20, 'officer', 'พนักงาน', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

CREATE TABLE `printers` (
  `id` int(11) NOT NULL,
  `asset_number` varchar(45) DEFAULT NULL COMMENT 'รหัสทรัพย์สิน',
  `model` varchar(200) DEFAULT NULL COMMENT 'รุ่น',
  `serial` varchar(45) DEFAULT NULL COMMENT 'ซีเรียว',
  `printer_type` varchar(45) DEFAULT NULL COMMENT 'ประเภท',
  `details` text COMMENT 'รายละเอียด',
  `install_date` date DEFAULT NULL COMMENT 'วันที่ติดตั้ง',
  `docs` text COMMENT 'ไฟล์แนบ',
  `vendor` text COMMENT 'ผู้ขาย',
  `cost` float DEFAULT NULL COMMENT 'ราคา',
  `port_connected` varchar(45) DEFAULT NULL COMMENT 'การเชื่อมต่อ',
  `ip_address` varchar(45) DEFAULT NULL COMMENT 'IP',
  `mac_address` varchar(45) DEFAULT NULL COMMENT 'Mac',
  `remask` text COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

CREATE TABLE `system_user` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL COMMENT 'ผู้ครอบครอง',
  `default_username` varchar(200) DEFAULT NULL COMMENT 'Username',
  `default_password` varchar(200) DEFAULT NULL COMMENT 'DefaultPassword',
  `department` int(11) DEFAULT NULL COMMENT 'แผนก',
  `position` int(11) DEFAULT NULL COMMENT 'ตำแหน่ง',
  `role` int(11) DEFAULT NULL COMMENT 'สิทธิ์',
  `location` int(11) DEFAULT NULL COMMENT 'สถานที่',
  `company_email` varchar(200) DEFAULT NULL COMMENT 'อีเมลบริษัท',
  `company_phone` varchar(45) DEFAULT NULL COMMENT 'เบอร์ภายใน',
  `private_phone` varchar(45) DEFAULT NULL COMMENT 'เบอร์ส่วนตัว',
  `line_id` varchar(45) DEFAULT NULL COMMENT 'ไลน์ไอดี',
  `code_mfc` int(11) DEFAULT NULL COMMENT 'รหัสเครื่องถ่ายเอกสาร',
  `computer` int(11) DEFAULT NULL COMMENT 'คอมพิวเตอร์',
  `monitor_main` int(11) DEFAULT NULL COMMENT 'จอหลัก',
  `monitor_secondary` int(11) DEFAULT NULL COMMENT 'จอรอง',
  `license_windows` int(11) DEFAULT NULL COMMENT 'ลิขสิทธิ์วินโดส์',
  `license_office` int(11) DEFAULT NULL COMMENT 'ลิขสิทธิ์ออฟฟิส',
  `printer_1` int(11) DEFAULT NULL COMMENT 'เครื่องพิมพ์หลัก',
  `printer_2` int(11) DEFAULT NULL COMMENT 'เครื่องพิมพ์รอง',
  `ups` int(11) DEFAULT NULL COMMENT 'เครื่องสำรองไฟ',
  `status` int(11) DEFAULT NULL COMMENT 'สถานะ',
  `remask` text COMMENT 'หมายเหตุ',
  `total` float DEFAULT NULL COMMENT 'รวม',
  `image` text COMMENT 'รูปภาพ',
  `docs` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ups`
--

CREATE TABLE `ups` (
  `id` int(11) NOT NULL,
  `asset_number` varchar(45) DEFAULT NULL COMMENT 'รหัสทรัพย์สิน',
  `model` varchar(200) DEFAULT NULL COMMENT 'รุ่น',
  `serial` varchar(45) DEFAULT NULL COMMENT 'ซีเรียว',
  `details` text COMMENT 'รายละเอียด',
  `install_date` date DEFAULT NULL COMMENT 'วันที่ติดตั้ง',
  `docs` text COMMENT 'ไฟล์แนบ',
  `vendor` text COMMENT 'ผู้ขาย',
  `cost` float DEFAULT NULL COMMENT 'ราคา',
  `remask` text COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thai_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ชื่อ-สกุล',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `thai_name`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `role`) VALUES
(1, 'admin', 'ผู้ดูแลระบบ', '2tzscTHLNpS0rJlIJx_Uz1qZnvi6yS_q', '$2y$13$HwJ0Osagp4BHhcjKJMS.Su1kte.bpcDMCIusYWpu088FzQai9YqC6', NULL, 'admin@admin.com', 10, 1689666356, 1691635667, 'SA3gozOob2BBbQR0Ue5t4mJQpoyb0gcp_1689666356', 10),
(2, 'demo', 'ทดสอบระบบ', 'lJsMEFiO-XjqJrVhH2aDcjXyrP0oC0vy', '$2y$13$9cR6h5aFzqkDiaIYP4DQYuywLj.cgAyUBuIexfQNZCqaJQ.T/Zxfi', NULL, 'demo@demo.com', 10, 1689756005, 1691656266, 'sfLH5psKTa0wMf7dH-kiSrkNcSPqn9OD_1689756005', 1),
(3, 'onanong', 'อรอนงค์ ชมภู', '2bj5VmZ1PEwJDerqRsj3fhE8i2zvsVZq', '$2y$13$08zXpjOdJu83tT84JNqebe3SMFVctXSfynLDfss3sFMiveC7tPEUS', NULL, 'onanong@nfc.com', 10, 1689759317, 1692406656, '9NqfkSJcx8KkIodMLNCeH9HLqhOUmcxw_1689759317', 10),
(4, 'phitchai', 'พิชญ์ชัย พิชญ์ชานุวัฒน์', 'yJwBMulOJv3IDmDkCXrdYZ-VMEw_zwLZ', '$2y$13$wGZx2YliuaqG5mjrTzY4AupjPJBT15DBgnkqqj8MiCcwCT6z1PJl.', NULL, 'p@nfc.com', 10, 1689759339, 1693979177, '4Zgy1uVGJvXg2nZOAHcFCSj0NK0Ll3Ze_1689759339', 9),
(5, 'prakaiwan', 'ประกายวรรณ เทพมณี', 'y2RYhV3E1NG68CUaa8svzBknRdbCTO79', '$2y$13$Skm6AuVq/Qi/E2r6BouzBOn.3GR8aJT5.iaHIpr2KCDsJLUPKU8B2', NULL, 'prakaiwan@nfc.com', 10, 1689759362, 1692760776, '2qNZk71gb01_K-bdCiscD38z36G9exZH_1689759362', 10),
(6, 'sale', 'ฝ่ายขาย', 'EHSvx6uElywR8fG2XRQ_xKE4sups-8cO', '$2y$13$0UZFJxx7tUAPdy972cvXEejPhldI17L0Ld7C3KnSKUk7KTLYVUP0y', NULL, 'sale@nfc.com', 10, 1689759388, 1691648993, '9ZnxmSRzPpvLgxD0MPSamdokpcp_eMul_1689759388', 8),
(7, 'planning', 'ฝ่ายวางแผน', 'JWT4BgIkYF4TIN62mLaKv5iL0uLMn7C9', '$2y$13$g08zQ7xjXISzs99kS2yApuOCRcV6QpMOfdzNAwYY8fP9N96pEuAye', NULL, 'planning@nfc.com', 9, 1689759413, 1691634989, '7xCjBXE9xNLx1gWqKX2LaVex2ah0IWt4_1689759413', 1),
(8, 'production', 'ฝ่ายผลิต', 'FjE8vrSWJ1uVTanpvQJDnpq_OiUySrzg', '$2y$13$Oa3U4rEqDwN8W0ytkDHCjuPw8CW4d44l9tEWbi3N3myBogr4mmzBy', NULL, 'production@nfc.com', 9, 1689759430, 1689759430, 'qNJ-e9RkWlfqvHqmvmSsItU1rlpb_D3j_1689759430', 1),
(9, 'watsara', 'วรรษรา หลวงเป็ง', 'XEPSPmb7Bt0oI_tklPUc5Uh4Jq4HM4Ig', '$2y$13$5iA/KWda5k7mbunRRwdNUOXn62jWJ/Ipoc.CzW3XYr69iVHThV1yC', NULL, 'watsara.nfc@gmail.com', 10, 1690430330, 1692612092, 't1iesBNA9TNHWotQHvGzbLCVhrK6LF9O_1690430330', 8),
(10, 'somsak', 'สมศักดิ์ ชาญเกียรติก้อง', '3tiUcswenYgRTZTfuvfv_Tv4V7BXwAcn', '$2y$13$RaVMZpvieW5IfdwpInG4JejNTn8rb7rTCluwPUDO6R8kAJBj1l7D.', NULL, 'somsak@northernfoodcomplex.com', 10, 1691631165, 1692172148, 'Pj5G3y6R8VeykAb0cyXVIHChtnlpquo9_1691631165', 8),
(11, 'peeranai', 'พีรนัย โสทรทวีพงศ์', 'G3b3XCgv3uFzzly7jDX0cJXzNm45qoUV', '$2y$13$5gM/232mFQdlLwbqiQOdE.n2zbN3cLuDGdhIsTK0USk.ASVILRPZy', NULL, 'peeranai@northernfoodcomplex.com', 10, 1691631423, 1692172158, 'HmjAFfcWByo3VbwpZDD9qeBA-shqds8q_1691631423', 8),
(12, 'theerapong', 'ธีรพงศ์ ขันตา', 'tWXwJZ5JEXbWCN0M-0zpCouAUJcL5BwZ', '$2y$13$WG5mTZIZ4ZcL3BoA/vA/7urFzlU2xQ2g4NU29gJegyCCcIte0TCP.', NULL, 'sam47290800@gmail.com', 10, 1691639318, 1691639449, NULL, 10),
(14, 'yosaporn', 'ยศพร พยัคฆญาติ', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$gnj.Vuf7hYLvMcPCesdU4eXqC4GAZR0iwhYbvBcVxlPNnTvB9mmji', NULL, 'ypayakayat@yahoo.com', 10, 1692180393, 1692180393, NULL, 8),
(15, 'sawika', 'สาวิกา พินิจ', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$ggQkc27TiQ2iQSAW6jcr3OpNGzVRjsE5/etsA7BeM5MubC/RwnhP.', NULL, 'sawika_pinit@yahoo.co.th', 10, 1692180393, 1692612391, NULL, 8),
(16, 'premmika', 'เปรมมิกา พินิจ', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'pinit@yahoo.co.th', 10, 1692180393, 1694742451, NULL, 8),
(18, 'araya', 'อารยา เทพโพธา', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'acc.nfcfa@gmail.com', 10, 1692180393, 1694742451, NULL, 1),
(20, 'kannika', 'กรรณิกา คำภีระ', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'kannika@local.com', 10, 1692180393, 1694742451, NULL, 1),
(21, 'sasicha', 'ศศิชา นัตสิทธิ์', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'sasicha@local.com', 10, 1692180393, 1694742451, NULL, 1),
(22, 'taweekiat', 'ทวีเกียรติ คำเทพ', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'd.taweekiat@gmail.com', 10, 1692180393, 1694742451, NULL, 1),
(23, 'kullanisnaree', 'กุลนิษฐ์นรี เจริญจิตรวี', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'kullanisnaree@local.com', 10, 1692180393, 1694742451, NULL, 1),
(24, 'lapaeporn', 'ลภีพร กาบแก้ว', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'lapaeporn@local.com', 10, 1692180393, 1694742451, NULL, 1),
(25, 'ratsamee', 'รัศมี ศศิยศพงศ์', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'ratsamee@local.com', 10, 1692180393, 1694742451, NULL, 1),
(26, 'thaksin', 'ทักษิณ อินทรศิลา', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'thaksin@local.com', 10, 1692180393, 1694742451, NULL, 1),
(27, 'chadaporn', 'ชฎาภรณ์ แก้วคำ', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'chadaporn@local.com', 10, 1692180393, 1694742451, NULL, 1),
(28, 'pranee', 'ปราณี แดงโคตร', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'pranee@local.com', 10, 1692180393, 1694742451, NULL, 1),
(29, 'tanyarat', 'ธัญญารัตน์ นิ่มวงษ์', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'tanyarat@local.com', 10, 1692180393, 1694742451, NULL, 1),
(30, 'charinee', 'ชาริณี จันต๊ะนาเขต', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'charinee@local.com', 10, 1692180393, 1694742451, NULL, 1),
(31, 'natthaphon', 'ณัฐพล ขันเขียว', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'natthaphon@local.com', 10, 1692180393, 1694742451, NULL, 1),
(32, 'sarawut', 'สราวุฒิ โฆษิตเกียรติคุณ', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'sarawut@local.com', 10, 1692180393, 1694742451, NULL, 1),
(33, 'yosapon', 'ยศพนธ์ โพธิ', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'yosapon@local.com', 10, 1692180393, 1694742451, NULL, 1),
(34, 'natthawat', 'ณัฐวัฒน์ วรรณราช', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'natthawat@local.com', 10, 1692180393, 1694742451, NULL, 1),
(35, 'engineer', 'แผนกวิศวกรรม', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'engineer@local.com', 10, 1692180393, 1694742451, NULL, 1),
(36, 'jessakorn', 'เจษกร คำวรรณ์', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'jessakorn@local.com', 10, 1692180393, 1694742451, NULL, 1),
(37, 'khomsan', 'คมสันต์ สมบูรณ์ชัย', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'khomsan@local.com', 10, 1692180393, 1694742451, NULL, 1),
(38, 'manop', 'มานพ ศรีจุมปา', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'manop@local.com', 10, 1692180393, 1694742451, NULL, 1),
(39, 'narongsak', 'ณรงค์ศักดิ์ แซ่จาว', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'narongsak@local.com', 10, 1692180393, 1694742451, NULL, 1),
(40, 'panuwat', 'ภานุวัฒน์ ยางรัมย์', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'panuwat@local.com', 10, 1692180393, 1694742451, NULL, 1),
(41, 'pongsapat', 'พงศพัศ สมใหม่', 'GOI-0AQj0nAYGBIpppuSe-O3IK4OSs2h', '$2y$13$4EN3L5jlZD5RDFUPH8TfNOD2/YgXtMw3FzzQNq6aCaF5j6HGh6rkC', NULL, 'pongsapat@local.com', 10, 1692180393, 1694742451, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `windows`
--

CREATE TABLE `windows` (
  `id` int(11) NOT NULL,
  `asset_no` varchar(45) DEFAULT NULL COMMENT 'รหัสทรัพย์สิน',
  `name` varchar(100) DEFAULT NULL COMMENT 'ชื่อ',
  `key` varchar(45) DEFAULT NULL COMMENT 'KEY',
  `install_date` date DEFAULT NULL COMMENT 'วันที่ติดตั้ง',
  `email_actived` varchar(45) DEFAULT NULL COMMENT 'Actived Email',
  `email_password` varchar(45) DEFAULT NULL COMMENT 'Email Password',
  `exp_date` date DEFAULT NULL COMMENT 'วันหมดอายุ',
  `vendor` text COMMENT 'ผู้ขาย',
  `docs` text COMMENT 'ไฟล์แนบ',
  `cost` float DEFAULT NULL COMMENT 'ราคา',
  `remask` text COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `windows`
--

INSERT INTO `windows` (`id`, `asset_no`, `name`, `key`, `install_date`, `email_actived`, `email_password`, `exp_date`, `vendor`, `docs`, `cost`, `remask`) VALUES
(1, 'รอซื้อเพิ่ม', 'Microsoft Windows 10 Pro (No License)', '', NULL, '', '', NULL, '', '', NULL, 'รอซื้อเพิ่มเติม'),
(2, 'F-64-AC-IT-072', 'Microsoft Windows 10 Pro', 'TGTND-26P7W-M82F6-Y4H4K-FRG6T', '2021-10-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'F-64-AC-IT-071', 'Microsoft Windows 11 Pro', 'TDCWG-NRYKX-KBYHB-4CVY4-HQWXG', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'F-64-EN-IT-091', 'Microsoft Windows 10 Pro', 'YNT9F-6D796-PY72H-7DBC3-JTYP6', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'F-64-IT-IT-094', 'Microsoft Windows 10 Pro', 'B8BNT-GMTRP-3X7TC-YC8CX-TF4C6', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'F-64-PU-IT-061', 'Microsoft Windows 10 Pro', 'B3TDP-NXJCC-X7VDY-BKYV2-DDBP6', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'F-64-HR-IT-086', 'Microsoft Windows 10 Pro', 'XWNY3-8KWMB-C3Q6P-PR3Q2-6JF9G', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'F-64-HR-IT-060', 'Microsoft Windows 10 Pro', 'M9XBN-GBJ9G-VK86V-MJ4JP-4RG6T', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'F-64-PD-IT-082', 'Microsoft Windows 10 Pro', 'Y8NDQ-3DJ34-CT8YP-RG374-CR4C6', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'F-64-AC-IT-098', 'Microsoft Windows 10 Pro', 'JR47N-BW960-RGWHQ-M67XT-VCFC6', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'F-61-GM-IT-004', 'Microsoft Windows 10 Pro', 'P3K9N-42PJ3-D3K4B-TFTBK-XKXTT', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'F-64-IT-IT-099', 'Microsoft Windows 10 Pro', 'D3NJW-29TR9-F9G8M-CQKJC-D69TT', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, 'Install 11 Pro'),
(13, 'F-64-PU-IT-081', 'Microsoft Windows 11 Pro', 'QRT3D-GJNJ4-B8HBG-46CJJ -XW3GT', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(14, 'รอ QA', 'Microsoft Windows 11 Pro', 'T3WHP-VM46G-683MB-8R2VX-DYJGG', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(15, 'F-52-HR-IT-050', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(16, 'F-52-QC-IT-053', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(17, 'F-52-PD-IT-054', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(18, 'F-52-PD-IT-048', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(19, 'F-52-EN-IT-052', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(20, 'F-58-IT-IT-026', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21, 'F-58-IT-IT-022', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(22, 'F-58-PD-IT-019', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(23, 'F-58-PU-IT-017', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(24, 'F-58-PU-IT-018', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(25, 'F-58-PD-IT-023', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(26, 'F-58-PD-IT-024', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(27, 'F-58-EN-IT-020', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(28, 'ว่าง 1', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(29, 'ว่าง 2', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(30, 'ว่าง 3', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(31, 'ว่าง 4', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(32, 'ว่าง 5', 'Microsoft Windows 7 Pro', 'H6MCP-YTQ3D-QKKFY-TD9RP-GRF8M', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, '9/10 ว่าง 1', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(34, '10/10 ว่าง 2', 'Microsoft Windows 8 Pro', 'RJ6NB-97RW7-HWV3G-VFXY8-TQ6VD', '2022-12-22', NULL, NULL, NULL, NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_number`
--
ALTER TABLE `auto_number`
  ADD PRIMARY KEY (`group`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostname_UNIQUE` (`hostname`),
  ADD UNIQUE KEY `asset_number_UNIQUE` (`asset_number`),
  ADD KEY `fk_computers_computer_type1_idx` (`computer_type`),
  ADD KEY `fk_computers_computer_status1_idx` (`computer_status`);

--
-- Indexes for table `computer_status`
--
ALTER TABLE `computer_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer_type`
--
ALTER TABLE `computer_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jobs_job_type1_idx` (`job_type`),
  ADD KEY `fk_jobs_job_urgency1_idx` (`urgency`),
  ADD KEY `fk_jobs_job_status1_idx` (`job_status`),
  ADD KEY `fk_jobs_location1_idx` (`location`),
  ADD KEY `fk_jobs_department1_idx` (`job_department`);

--
-- Indexes for table `job_status`
--
ALTER TABLE `job_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_urgency`
--
ALTER TABLE `job_urgency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitors`
--
ALTER TABLE `monitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostname_UNIQUE` (`serial`),
  ADD UNIQUE KEY `asset_number_UNIQUE` (`asset_number`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asset_no_UNIQUE` (`asset_no`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operations_jobs1_idx` (`job_id`);

--
-- Indexes for table `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostname_UNIQUE` (`serial`),
  ADD UNIQUE KEY `asset_number_UNIQUE` (`asset_number`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_user`
--
ALTER TABLE `system_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_system_user_office_idx` (`license_office`),
  ADD KEY `fk_system_user_windows1_idx` (`license_windows`),
  ADD KEY `fk_system_user_computers1_idx` (`computer`),
  ADD KEY `fk_system_user_monitors1_idx` (`monitor_main`),
  ADD KEY `fk_system_user_monitors2_idx` (`monitor_secondary`),
  ADD KEY `fk_system_user_ups1_idx` (`ups`),
  ADD KEY `fk_system_user_printers1_idx` (`printer_1`),
  ADD KEY `fk_system_user_printers2_idx` (`printer_2`),
  ADD KEY `fk_system_user_position1_idx` (`position`),
  ADD KEY `fk_system_user_department1_idx` (`department`),
  ADD KEY `fk_system_user_role1_idx` (`role`),
  ADD KEY `fk_system_user_system_status1_idx` (`status`),
  ADD KEY `fk_system_user_location1_idx` (`location`);

--
-- Indexes for table `ups`
--
ALTER TABLE `ups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostname_UNIQUE` (`serial`),
  ADD UNIQUE KEY `asset_number_UNIQUE` (`asset_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `windows`
--
ALTER TABLE `windows`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asset_no_UNIQUE` (`asset_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `computer_status`
--
ALTER TABLE `computer_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `computer_type`
--
ALTER TABLE `computer_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_status`
--
ALTER TABLE `job_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_urgency`
--
ALTER TABLE `job_urgency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `monitors`
--
ALTER TABLE `monitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `operators`
--
ALTER TABLE `operators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `printers`
--
ALTER TABLE `printers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_user`
--
ALTER TABLE `system_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ups`
--
ALTER TABLE `ups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `windows`
--
ALTER TABLE `windows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `computers`
--
ALTER TABLE `computers`
  ADD CONSTRAINT `fk_computers_computer_status1` FOREIGN KEY (`computer_status`) REFERENCES `computer_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_computers_computer_type1` FOREIGN KEY (`computer_type`) REFERENCES `computer_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `fk_jobs_department1` FOREIGN KEY (`job_department`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs_job_status1` FOREIGN KEY (`job_status`) REFERENCES `job_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs_job_type1` FOREIGN KEY (`job_type`) REFERENCES `job_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs_job_urgency1` FOREIGN KEY (`urgency`) REFERENCES `job_urgency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs_location1` FOREIGN KEY (`location`) REFERENCES `location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `fk_operations_jobs1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `system_user`
--
ALTER TABLE `system_user`
  ADD CONSTRAINT `fk_system_user_computers1` FOREIGN KEY (`computer`) REFERENCES `computers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_department1` FOREIGN KEY (`department`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_location1` FOREIGN KEY (`location`) REFERENCES `location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_monitors1` FOREIGN KEY (`monitor_main`) REFERENCES `monitors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_monitors2` FOREIGN KEY (`monitor_secondary`) REFERENCES `monitors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_office` FOREIGN KEY (`license_office`) REFERENCES `office` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_position1` FOREIGN KEY (`position`) REFERENCES `position` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_printers1` FOREIGN KEY (`printer_1`) REFERENCES `printers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_printers2` FOREIGN KEY (`printer_2`) REFERENCES `printers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_role1` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_system_status1` FOREIGN KEY (`status`) REFERENCES `system_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_ups1` FOREIGN KEY (`ups`) REFERENCES `ups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_system_user_windows1` FOREIGN KEY (`license_windows`) REFERENCES `windows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
