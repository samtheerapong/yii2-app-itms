-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2023 at 02:02 AM
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
-- Database: `adv-docs`
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
