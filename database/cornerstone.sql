-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2023 at 08:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cornerstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `aboutid` int(10) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aboutid`, `text`) VALUES
(1, 'Since 2002, the school has been in existence and all services running smoothly..');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `applicationid` int(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `document` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applicationid`, `firstname`, `lastname`, `document`, `class`, `contact`, `status`, `date_uploaded`) VALUES
(2, 'BULYERALI', 'ARNOLD', 'code optimization.pdf', 'Senior 1', 'arnold@gmail.com', 'pending', '2023-03-05 21:40:20'),
(3, 'BALIRWA', 'ALVIN', 'Systems Programming pastpapers-1.pdf', 'Senior 4', '0781181958', 'approved', '2023-03-05 21:55:22'),
(4, 'NAKIIRI', 'ASHELY', 'MySQL Exercises.pdf', 'Senior 3', '0708648398', 'rejected', '2023-03-05 22:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(10) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `names`, `phone`, `email`, `message`, `status`, `date`) VALUES
(1, 'CHARLES LUBEGA', '0781181958', 'charles@gmail.com', 'Hello there', 'contacted', '2023-03-04 10:41:36'),
(2, 'SARAH MARGRET', '0781181958', 'sarah@gmail.com', 'I want t o know', 'contacted', '2023-03-04 10:55:14'),
(3, 'MOSES BAGUMA', '0708648398', 'baguma@yahoo.com', 'I want to know about the classes available.', 'not contacted', '2023-03-04 10:57:51'),
(4, 'SSALI BENJAMIN', '0708648398', 'ssali@gmail.com', 'I want to know about the A level classes', 'not contacted', '2023-03-05 22:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `elearning`
--

CREATE TABLE `elearning` (
  `id` int(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `link` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elearning`
--

INSERT INTO `elearning` (`id`, `class`, `time`, `link`, `date`) VALUES
(2, 'senior', '10:00AM', 'LINK', '2023-03-05 21:17:09'),
(3, 'Senior 5', '12:00PM', 'link here', '2023-03-05 21:34:08'),
(5, 'Senior 6', '10:00AM', 'link', '2023-03-07 09:22:17'),
(6, 'Senior 3', '1:00PM', 'link here', '2023-03-07 11:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(10) NOT NULL,
  `eventdate` varchar(10) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `date_entered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `eventdate`, `eventname`, `date_entered`) VALUES
(1, '20/03/23', 'Visitation Day', '2023-03-06 10:17:06'),
(3, '23/03/23', 'General PTA Meeting', '2023-03-06 10:38:42'),
(4, '05/04/23', 'Senior One Welcome Party', '2023-03-07 11:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `image`, `date`) VALUES
(1, 'School library', 'Library.JPG', '2023-03-04 21:24:07'),
(2, 'computer lab', 'computerlab.JPG', '2023-03-04 21:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `feesid` int(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `day` int(20) NOT NULL,
  `boarding` int(20) NOT NULL,
  `admission` int(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`feesid`, `class`, `day`, `boarding`, `admission`, `date`) VALUES
(1, 'SENIOR 1', 450000, 540000, 20000, '2023-03-04 15:03:13'),
(2, 'SENIOR 2', 460000, 570000, 20000, '2023-03-04 15:08:42'),
(4, 'Senior 3', 420000, 560000, 25000, '2023-03-06 16:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photoid` int(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_entered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photoid`, `photo`, `message`, `date_entered`) VALUES
(1, '1.jpg', 'School walk-way', '2023-03-05 14:57:40'),
(2, '2.png', 'Some of the A\'Level students', '2023-03-05 14:58:11'),
(3, '3.png', 'Students in the school library', '2023-03-05 14:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `class`, `subject`, `link`, `date`) VALUES
(1, 'SENIOR 5', 'GEOGRAPHY', 'link 1', '2023-03-04 15:51:52'),
(2, 'SENIOR 3', 'MATHEMATICS', 'MATHS', '2023-03-04 15:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(10) NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `newsinfo` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `newstitle`, `newsinfo`, `image`, `date_uploaded`) VALUES
(1, 'UCE Performance', 'The students that performed well in UCE', '2.png', '2023-03-03 07:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `prefects`
--

CREATE TABLE `prefects` (
  `id` int(11) NOT NULL,
  `year` varchar(15) NOT NULL,
  `post` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prefects`
--

INSERT INTO `prefects` (`id`, `year`, `post`, `name`, `image`, `date`) VALUES
(1, '2022', 'Headgirl', 'Joan.M', '1.png', '2023-03-04 16:38:36'),
(2, '2022', 'Head boy', 'Michael.K', 'headboy.png', '2023-03-04 16:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `title` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `title`, `name`, `image`, `date`) VALUES
(1, 'headmistress', 'name_here', 'hm-min.png', '2023-03-04 16:15:09'),
(2, 'Principal', 'Higenyi', 'principal-min.png', '2023-03-04 16:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `title`, `name`, `image`, `message`, `date`) VALUES
(1, 'Mess Prefect', 'Priscilla.L', '1.png', 'With nice meals, everyone gets to have a nice day at school.', '2023-03-05 06:22:00'),
(2, 'time keeper', 'Lubega.R', 'headboy.png', 'Time waits for no man. ', '2023-03-05 06:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `uneb`
--

CREATE TABLE `uneb` (
  `id` int(10) NOT NULL,
  `year` varchar(20) NOT NULL,
  `senior4` varchar(255) NOT NULL,
  `senior6` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uneb`
--

INSERT INTO `uneb` (`id`, `year`, `senior4`, `senior6`, `date`) VALUES
(1, '2010/2011', 'link 1', 'link 1', '2023-03-04 15:21:06'),
(2, '2011/2012', 'LINK 2', 'LINK 2', '2023-03-04 15:27:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`aboutid`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`applicationid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `elearning`
--
ALTER TABLE `elearning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`feesid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photoid`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `prefects`
--
ALTER TABLE `prefects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uneb`
--
ALTER TABLE `uneb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `aboutid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `applicationid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `elearning`
--
ALTER TABLE `elearning`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `feesid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photoid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prefects`
--
ALTER TABLE `prefects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uneb`
--
ALTER TABLE `uneb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
