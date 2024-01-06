-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 04:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cername`
--

CREATE TABLE `cername` (
  `name` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date1` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cername`
--

INSERT INTO `cername` (`name`, `email`, `date1`) VALUES
('JOTHINATHAN', 'jothinathan', '06-01-24'),
('jothi', 'jothi@gmial', '06-01-24242'),
('JOTHINATHAN', 'balajiravi4', '06-01-2024'),
('JOTHINATHAN', 'jothinathan', '06-01-2024'),
('JOTHINATHAN', 'JOTHI@GMAIL', '06-01-2024');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `S.no` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`S.no`, `name`, `email`, `message`) VALUES
(1, 'gopi', 'gopisettu3011@gmail.com', 'your web site was goog'),
(2, 'gopi', 'gopisettu3011@gmail.com', 'your web site was goog'),
(3, 'gopi', 'gpiasdfas@gmail.com', 'sgas'),
(4, 'gopi', 'gpiasdfas@gmail.com', 'sgas'),
(5, 'gopio', 'adsf@gmail.com', 'asdf'),
(6, 'gopio', 'adsf@gmail.com', 'asdf'),
(7, '', '', ''),
(8, '', '', ''),
(9, 'gopi', 'sagdf@gmail.com', 'asdgpij'),
(10, 'gopi', 'sagdf@gmail.com', 'asdgpij'),
(11, 'gopi', 'sagdf@gmail.com', 'asdgpij'),
(12, 'gopi', 'sagdf@gmail.com', 'asdgpij'),
(13, 'sdkfbj', 'sdbdsfbsdf@sfdvb', 'sfv'),
(14, 'asfdvasfv', 'asfv@asdfv', 'fv'),
(15, 'asfdvasfv', 'asfv@asdfv', 'fv'),
(16, 'asfdvasfv', 'asfv@asdfv', 'fv'),
(17, 'asfdvasfv', 'asfv@asdfv', 'fv'),
(18, 'gopi', 'hpo@gmail.cpom', 'khbvhk'),
(19, 'gopi', 'hpo@gmail.cpom', 'khbvhk'),
(20, 'gopi', 'hpo@gmail.cpom', 'khbvhk'),
(21, 'gopi', 'hpo@gmail.cpom', 'khbvhk'),
(22, 'gopi', 'hpo@gmail.cpom', 'khbvhk'),
(23, 'sdfg', 'sdfg@gmail.com', 'asdf'),
(24, 'sdfg', 'sdfg@gmail.com', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `log1`
--

CREATE TABLE `log1` (
  `S.no` int(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log1`
--

INSERT INTO `log1` (`S.no`, `email`, `password`, `password1`) VALUES
(1, 'gopisettu3011@gmail.com', '$2y$10$NAn2cbw0onOFD0OEmpxjL.sPJ7uPJhjVk6w5PbIUNEEMO3D2goty.', 'umagopi'),
(2, 'mailtobharath003@gmail.com', '$2y$10$HCw.8hAX9E2TIeq7Iy/0quq6p.NO9ElSo869E6pwaJMjdfKvJUz6i', '7993'),
(3, 'gopi@gmail.com', '$2y$10$8gLXi9oVDiebl0GBj6w8gu00/qusXsAc.1FHN55TUrqEXpOjWbHMq', 'gopi'),
(4, 'jothinathannagarajan@gmail.com', '$2y$10$gFkuAqPY.xs9rQnCgDLQzu/kPWvHHNWureSEQMk5oOhD/2HCJbf0i', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `log1`
--
ALTER TABLE `log1`
  ADD PRIMARY KEY (`S.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `S.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `log1`
--
ALTER TABLE `log1`
  MODIFY `S.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
