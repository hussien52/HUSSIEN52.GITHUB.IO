-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 12:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibraryga`
--
CREATE DATABASE IF NOT EXISTS `elibraryga` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elibraryga`;

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `comment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`id`, `usr_id`, `content_id`, `name`, `comment`, `status`) VALUES
(9, 9, 1, 'r7yVjcZhXSjyUp6w2yntaPwgLKPMS3', '', 0),
(10, 9, 1, 'cnl6ixtwDY0LbDBHpRi7pCadMllguu', '', 0),
(12, 2, 3, 'Suam5ql0jIK3D4cU4dJeXkuKQLNaPL', '', 0),
(13, 2, 3, 'CQ9kPYW7jTAHJsomdCG2IPndnJBm4G', '', 0),
(14, 9, 4, 'MJl32bg1ZGobGCKbLhMoxjS9qz30AM', '', 0),
(15, 9, 6, 'U13GpQSm4IdIlrgz5dcS5IJxl6PUyV', '', 1),
(16, 9, 10, 'JK9IkrxOyDBTSi1KkdIl7gdFb5dqjv', '', 0),
(17, 9, 11, 'J1PxVnN2fAPbtnH8O1MMJGhhPm3vVM', '', 0),
(18, 9, 12, '7xBiyMKTO9Zs4Jz5nMPF7EctLVDC3l', '', 0),
(19, 6, 13, 'S8omdCG2IPndnJBm4GL141AFJQnx7W', '', 0),
(20, 6, 13, 'sl6gT3JGGW02uGjZQOzhE6RVK9ljnG', '', 0),
(21, 9, 14, '4FBi4Rl9YCyLoWaXk7uOUBRmKOPuU0', '', 0),
(22, 9, 15, '3NaPLCQ9kPYW7jTAHJsomdCG2IPndn', '', 0),
(23, 11, 16, 'hRbMSgHOe0DyF6IowB91aBCYN7ixFf', '', 0),
(24, 11, 16, 'xBrpFckTFZF49O2V1ySc9EbLRoGTfP', '', 0),
(25, 11, 17, 'qix53u2DnGEdFNPQeSkqICRbMSgHOe', '', 0),
(26, 11, 17, '0DyF6IowB91aBCYN7ixFfxBrpFckTF', '', 0),
(27, 11, 17, 'ZF49O2V1ySc9EbLRoGTfPIZFO0tCSU', '', 0),
(28, 11, 17, 'BJwMMOOLOZyDWksyof56WOtI95dt4O', '', 0),
(29, 11, 17, 'vVawxBiyMKTO9Zs4Jz5nMPF7EctLVD', '', 0),
(30, 11, 17, 'C3l33fiSi1j6FYra0EtwDMtl0JDojo', '', 0),
(31, 11, 17, '4cZXeDjH7WZSMfmOMYsTOFhiABk3O6', '', 0),
(32, 11, 18, 'RtUYtBwMZx4ZqWTxvDorgFdNnNJl32', '', 1),
(33, 11, 18, 'bg1ZGobGCKbLhMoxjS9qz30AMuPPRI', '', 1),
(34, 11, 18, 'AhmcG2g0U7FfrcrquXns1rrXsHZiaN', '', 1),
(35, 11, 18, '1wfOzEXX42nFBi4Rl9YCyLoWaXk7uO', '', 1),
(36, 11, 19, 'ECPMS3cnl6ixtwDY0LbDBHpRi7pCad', '', 1),
(37, 11, 19, 'MllguuLfoMGnam5ql0jIK3D4cU4dJe', '', 1),
(38, 11, 19, 'XkuKQLNaPLCQ9kPYW7jTAHJsomdCG2', '', 1),
(39, 11, 19, 'IPndnJBm4GL141AFJQnx7Wsl6gT3JG', '', 1),
(40, 11, 20, 'ndnJBm4GL141AFJQnx7Wsl6gT3JGGW', '', 1),
(41, 11, 21, 'ZkZF49O2V1ySc9EbLRoGTfPIZFO0tC', '', 0),
(42, 11, 21, 'SUBJwMMOOLOZyDWksyof56WOtI95dt', '', 0),
(43, 11, 21, '4OvVawxBiyMKTO9Zs4Jz5nMPF7EctL', '', 0),
(44, 11, 22, 'ZBOzhE6RVK9ljnGVt7l6YVwyyh36mP', '', 0),
(45, 11, 22, '6heEJvUlAoznVnvNVH820vFzi9On4F', '', 0),
(46, 11, 22, 'ZT9IkrxOyDBTSi1KkdIl7gdFb5dqjv', '', 0),
(47, 11, 22, 'OihsJ1PxVnN2fAPbtnH8O1MMJGhhPm', '', 0),
(48, 11, 22, '3vVMtgC79UMsK4oxUBix53u2DnGEdF', '', 0),
(49, 11, 22, 'NPQeSkqICRbMSgHOe0DyF6IowB91aB', '', 0),
(50, 11, 22, 'CYN7ixFfxBrpFckTFZF49O2V1ySc9E', '', 0),
(51, 11, 23, 'Gi1j6FYra0EtwDMtl0JDojo4cZXeDj', '', 0),
(52, 11, 23, 'H7WZSMfmOMYsTOFhiABk3O6do6r575', '', 0),
(53, 11, 23, 'dStUYtBwMZx4ZqWTxvDorgFdNnNJl3', '', 0),
(54, 11, 23, '2bg1ZGobGCKbLhMoxjS9qz30AMuPPR', '', 0),
(55, 11, 23, 'IAhmcG2g0U7FfrcrquXns1rrXsHZia', '', 0),
(56, 11, 23, 'N1wfOzEXX42nFBi4Rl9YCyLoWaXk7u', '', 0),
(57, 11, 23, 'OUBRmKOPuU0nYz8Q7ky0HkC1FUIPem', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `status`) VALUES
(1, 'HND 2', 'full time\r\nbsc 400\r\npart time', 0),
(2, 'HND 1', 'full time\r\nbsc 300\r\npart time', 0),
(3, 'ND 2', 'full time\r\nbsc 200\r\npart time', 0),
(4, 'ND 1', 'full time\r\nbsc 100\r\npart time', 0),
(5, 'Pre ND', 'full time\r\nO level\r\njambite\r\npost utme', 0),
(6, 'sports', 'football\r\ntennis\r\nswimming\r\nbasket ball\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `file` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `save_date` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `save_time` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `usr_id`, `title`, `cat`, `content`, `file`, `save_date`, `save_time`, `status`) VALUES
(1, 9, 'the new look of cardsenda', 'social', 'the cardsenda applications is an innovative application that allow user to transfer there mood and mind into a party, by providing a platform where users can instantly send invitation messages of cards, mail and sms to lovers', 'attached', '2016.08.09', '11:52:51', 1),
(2, 9, 'stolen money', 'social', 'the jasper report is a plugin that can be integrated with  java to provide report base on the style chosen that can be print, save or render into the web page.\nthe below contents the document of jasper report ', '', '2016.08.10', '10:19:07', 1),
(3, 2, 'jquery', 'education', 'jQuery is a JavaScript Library.\n\njQuery greatly simplifies JavaScript programming.\n\njQuery is easy to learn.\n\nwww.w3schools.com/jquery/default.html\n\nto know more about jquery click <a href=''http://localhost/w3schools/www.w3schools.com/jquery/default.html''>here</a>', 'attached', '2016.08.12', '09:22:34', 1),
(4, 9, 'obafemi biography', 'social', 'Name: Obafemi Obuju Area\nDate of Birth: 20th of April, 1965\nOccupation: Politician, Medical Doctor\nand many more ...', 'attached', '2016.08.12', '11:23:02', 1),
(5, 9, 'MY SCHOOL DOC', 'education', 'This is a sample of what you need to submit your semester file', '', '2017.11.14', '03:03:48', 1),
(6, 9, 'test', 'test', 'test', 'attached', '2017.11.14', '03:25:22', 1),
(7, 5, 'computer', 'education', 'this is my computer information', 'attached', '2017.11.20', '11:21:53', 1),
(9, 9, 'my book', 'education', 'my entertainment book', 'attached', '2017.11.22', '12:22:26', 1),
(10, 9, 'this work', 'social', 'i think this will work for this', 'attached', '2017.11.22', '08:58:34', 1),
(11, 9, 'Angular js', 'education', 'Study angular js online', 'attached', '2017.11.22', '08:59:54', 1),
(12, 9, 'Learn Web Building', 'education', 'Learn how to create a website on your own computer Learn the basics of web building in less than a day Learn how to add a database to your website', 'attached', '2017.11.22', '09:06:27', 1),
(13, 6, 'Biola Information', 'social', 'this is my information on social world', 'attached', '2017.11.28', '04:02:37', 1),
(14, 9, 'yabatech update', 'education', 'Strike continues despite dialogue', 'attached', '2017.11.29', '03:22:00', 1),
(15, 9, 'this is new', 'Computer Science HND 2', 'IT IS FEW', 'attached', '2018.01.12', '12:15:03', 1),
(16, 11, 'Computer Science ', 'HND 2', 'Computer Graphics', 'attached', '2018.02.01', '09:29:51', 1),
(17, 11, 'Computer Science ', 'HND 2', 'Artificial intelligence, computer graphic', 'attached', '2018.02.01', '10:10:09', 0),
(18, 11, 'Computer Science ', 'HND 2', 'videos file', 'attached', '2018.02.01', '10:15:22', 1),
(19, 11, 'Computer Science ', 'HND 2', 'Video Files', 'attached', '2018.02.01', '10:30:40', 1),
(20, 11, 'Testing', 'HND 2', 'ok', 'attached', '2018.02.01', '10:50:28', 1),
(21, 11, 'Computer Technology', 'ND 2', 'System Analysis and design, uml, basics', 'attached', '2018.02.01', '10:55:47', 0),
(22, 11, 'Computer Science ', 'ND 2', 'Descrete maths, fortran, java, system analysis and design, uml', 'attached', '2018.02.01', '11:57:06', 0),
(23, 11, 'Computer Science ', 'HND 1', 'pc upgrade, discrete maths, introduction to programming, login and linear algebra, visual studio', 'attached', '2018.02.02', '12:01:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `password` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `password`, `user_type`, `status`) VALUES
(1, 'admin', '36b664527d14f8b142dbcf29b5ac7ac7705ad9fa57956e3b08f03c834fd0396f', 1, 0),
(2, 'user', '9d2e8cd575e4dff9facb58a0c9b74a8b1c819aafdfed99c48cb27a2c261ea113', 1, 0),
(3, 'test', 'dbc63eeded5452f7ed8d11d645de459d7027d8b19742521f4460119ba7b53e24', 1, 0),
(4, 'tolu', 'ea0c70f2af398efa61499f3c745727ca1224b36694c7363dc7beef19dd8f6e46', 1, 0),
(5, 'computer', 'e70609e65a646e5d2341594641829aa859aea27621eabbc9dea42b8e93eaaea0', 1, 0),
(6, 'biola', '1edccdc34140bc62d870f80e9c02f2e45a64126a64a802d1c96a03c090a20997', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `matricno` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobileno` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(200) NOT NULL,
  `level` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `matricno`, `mobileno`, `department`, `level`, `password`, `status`) VALUES
(9, 'OGINNI', 'f/hn/14', '09011111111', 'Food Technology', 'HND 1', '55112e203e33a96d68666f11859d01d4118306f0ed6f4ef539c075f202fb1305', 0),
(10, 'tosin', 'f/hn/14', '09011111111', 'Computer Science', 'HND 2', 'c4b845918830955b470eb214bc0e5ac00e2bc9e789e5d5d62354e92df55185be', 0),
(11, 'admin', 'admin', '090763757635', 'Computer Science', 'HND 2', '36b664527d14f8b142dbcf29b5ac7ac7705ad9fa57956e3b08f03c834fd0396f', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
