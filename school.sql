-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2020 at 08:23 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `stdCode` varchar(5) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(80) NOT NULL,
  `department` varchar(20) NOT NULL,
  `englishScore` int(11) NOT NULL,
  `passComprehensive` tinyint(1) NOT NULL,
  `gpa` float NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stdCode`, `firstName`, `lastName`, `department`, `englishScore`, `passComprehensive`, `gpa`, `picture`) VALUES
(1, '13398', 'วสุธร', 'วรโชติเมธี', 'เทคโนโลยีสารสนเทศ', 650, 1, 3.76, '13398.jpg'),
(2, '13394', 'วิชัย', 'ทรายเงิน', 'วิศวกรรม', 595, 0, 3.42, '13394.jpg'),
(3, '13383', 'ชญานิศ', 'ปราชญ์คริษฐ์', 'วิทยาศาสตร์', 680, 1, 3.67, '13383.jpg'),
(4, '13393', 'พัชมณ', 'ปิติวงกรณ์', 'พลศึกษา', 750, 0, 3.54, '13393.jpg'),
(5, '13405', 'ไอริณ', 'จรัสพรรณ', 'สื่อสารมวลชน', 805, 1, 3.43, '13405.jpg'),
(6, '13388', 'ปุณณ์', 'ทวีศิลป์', 'ดุริยางคศิลป์', 880, 0, 3.86, '13388.jpg'),
(7, '13386', 'ธนากร', 'กอบกุล', 'ปรัชญา', 600, 1, 3.31, '13386.jpg'),
(8, '13389', 'ปวเรศ', 'เสริมฤทธิรงค์', 'นิติศาสตร์', 630, 0, 3.22, '13389.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stdCode` (`stdCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
