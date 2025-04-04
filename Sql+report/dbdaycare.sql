-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 07:28 AM
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
-- Database: `dbdaycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbblog`
--

CREATE TABLE `tbblog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `submitby` varchar(100) NOT NULL,
  `currentdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbblog`
--

INSERT INTO `tbblog` (`id`, `title`, `image`, `description`, `submitby`, `currentdate`) VALUES
(1, 'Nurturing Little Hearts: ', 'DBLOG.JPG', 'Childcare environments provide a safe space for children to express and regulate their emotions. Through interactions with peers and caring educators, children learn to identify ', '', '2024-07-02 07:03:51'),
(2, 'Empowering Futures: ', 'blog2.WEBP', 'Childcare education offers children early exposure to structured learning environments. This introduction to educational settings lays a foundation for', '', '2024-07-03 06:43:44'),
(3, 'Foundation for Life:', 'blog3.JPG', 'The early years of a child\'s life are nothing short of a miracle, laying the cornerstone for their future. In this exploration, we uncover why early childhood development is not just', '', '2024-07-03 06:47:49'),
(4, 'Setting the Stage:', 'blog5.JPG', 'Embarking on the journey of childcare marks a significant milestone for both parents and their little ones. To ensure a smooth transition, preparing kids at home becomes', '', '2024-07-03 07:18:04'),
(5, 'Unlocking Potential:', 'blog6.WEBP', 'Educational toys are designed with a purpose – to stimulate your child\'s cognitive abilities. Whether it\'s puzzles, building blocks, or interactive games, these toys engage your child\'s mind, encour', '', '2024-07-03 07:20:11'),
(6, 'Navigating the Choice: ', 'blog7.JPG', 'Choosing the right childcare center for your little one is a significant decision, and Australian parents often find themselves navigating through a myriad of options.\r\n\r\n\r\n', '', '2024-07-03 07:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbcareer`
--

CREATE TABLE `tbcareer` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `phonetype` varchar(100) NOT NULL,
  `altphone` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `availability2` varchar(100) NOT NULL,
  `currentdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbcareer`
--

INSERT INTO `tbcareer` (`id`, `fname`, `lname`, `email`, `phone`, `phonetype`, `altphone`, `address1`, `address2`, `city`, `state`, `zip`, `availability`, `availability2`, `currentdate`) VALUES
(1, '0', '0', '', 0, '0', '', '', '', '', '', 0, '', '', '2024-07-10 07:15:07'),
(2, 'zdxv', 'sfhbedh', 'dhn@rfhftgj', 0, 'Home', 'zfdhb', 'zdgjn', 'dztgjn', 'dfhb', 'dgnj', 0, 'on', 'on', '2024-07-10 07:28:53'),
(3, 'zdxv', 'sfhbedh', 'dhn@rfhftgj', 0, 'Home', 'zfdhb', 'zdgjn', 'dztgjn', 'dfhb', 'dgnj', 0, 'on', 'on', '2024-07-10 07:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `id` int(11) NOT NULL,
  `Pname` varchar(100) NOT NULL,
  `Pphone` varchar(100) NOT NULL,
  `Pemail` varchar(100) NOT NULL,
  `Cname` varchar(100) NOT NULL,
  `Cbirthdate` varchar(100) NOT NULL,
  `interestedin` varchar(11) NOT NULL,
  `startdate` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `currentdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`id`, `Pname`, `Pphone`, `Pemail`, `Cname`, `Cbirthdate`, `interestedin`, `startdate`, `message`, `currentdate`) VALUES
(1, '', '', '', '', '', 'Please Choo', '', '', '2024-06-28 06:47:26'),
(2, 'ghrfhf', 'rthjrdtj6ur', 'sr@ghf', 'drg', ' njhnbjn', 'Full-Time', 'fcgn', 'nhbg', '2024-06-28 06:48:00'),
(3, 'dfg', 'fghzd', 'fgf@fggn', 'fg', 'fg', 'part-Time', 'fgf', 'fgf', '2024-06-28 06:49:26'),
(4, 'dfg', 'fghzd', 'fgf@fggn', 'fg', 'fg', 'part-Time', 'fgf', 'fgf', '2024-06-28 06:50:47'),
(5, 'dfg', 'fghzd', 'fgf@fggn', 'fg', 'fg', 'part-Time', 'fgf', 'fgf', '2024-06-28 06:51:38'),
(6, 'loveleenu6uj', 'SA', 'sgs@dgd', 'fg', 'fg', 'Please Choo', 'fgf', 'fgf', '2024-07-01 05:30:14'),
(7, '', '', '', '', '', 'Please Choo', '', '', '2024-07-10 06:15:36'),
(8, 'loveleenu6uj', '24578887667', 'abc@gmail.com', 'rhthtr', 'trytry', 'part-Time', 'fgf', 'dgrsfgb', '2024-07-10 06:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbsignup`
--

CREATE TABLE `tbsignup` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Currentdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbsignup`
--

INSERT INTO `tbsignup` (`id`, `Name`, `Email`, `Password`, `Currentdate`) VALUES
(2, 'loveleen', 'abc@gmail.com', '123', '2024-07-05 06:31:18'),
(12, 'prince', 'kamboj2002prince@gmail.con', '12345', '2024-07-08 06:03:59'),
(13, 'prince', 'kamboj2002prince@gmail.con', '12345', '2024-07-08 06:36:42'),
(14, 'prince', 'kamboj2002prince@gmail.con', '12345', '2024-07-08 06:38:43'),
(15, 'loveleen', 'abc@gmail.com', '123', '2024-07-08 06:49:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbblog`
--
ALTER TABLE `tbblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbcareer`
--
ALTER TABLE `tbcareer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsignup`
--
ALTER TABLE `tbsignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbblog`
--
ALTER TABLE `tbblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbcareer`
--
ALTER TABLE `tbcareer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbsignup`
--
ALTER TABLE `tbsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
