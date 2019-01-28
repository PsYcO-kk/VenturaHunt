-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 10:43 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venturahunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `attempted_answers` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `hash` varchar(300) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `notification` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(350) NOT NULL,
  `round1` int(11) NOT NULL DEFAULT '0',
  `mobileno` varchar(15) NOT NULL,
  `college` varchar(100) NOT NULL,
  `pic` int(11) NOT NULL DEFAULT '0',
  `solvedquestions` varchar(300) NOT NULL DEFAULT '0',
  `current` int(11) NOT NULL DEFAULT '1',
  `tym` int(11) NOT NULL DEFAULT '0',
  `hint` int(11) NOT NULL DEFAULT '1',
  `thint` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `questionpath` varchar(300) NOT NULL,
  `hint1` varchar(300) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionpath`, `hint1`, `description`, `answer`) VALUES
(1, 'questionsimages/014f026d330b7d7d8841fa80f2da8442.png', '1st image represents your venture', 'Name the event', '108C42B6C593A1DBD79EA1AF13D90085CBFDB8495C6BCB288FBBABC26C1714D0||4F0600C979AFA210165B1EECEB0837637800EDD8C7C4BE62D4FD8BB5FFE116DB'),
(2, 'questionsimages/ae3a205fc564eec8ac17ab9b5bc2a37e.png', 'A DOG', 'NAME RELATED TO THE IMAGES', 'E2E7D3D809E7A12B8F08BD7D328F04E31698EAD8A4E7ED4B4E7409C57F1AFE0A'),
(3, 'questionsimages/f42baa8b849c9a535500e48d1a4e927e.png', 'que1 is related to me', 'Say my name!!', '1D01C5612A6438D374E22C5957484A173BEEA79F782909563B7C57A6E8A1951C'),
(4, 'questionsimages/f61238b0ea795582f3b5d46448e6afa3.png', '2nd IMAGE IS RELATED TO THE PERSON BIRTHPLACE', 'YOUNGER PERSON RELATED WITH IMAGES', '11AE41BAABAEDCE339DD9EC3FF602F3B50C4D85483F2BB735E0B5F9593B29E8C'),
(5, 'questionsimages/a98f7b72f6b33ebeaaeddf4326d216ea.png', 'sportsperson', 'name the personality', 'BDAD3A03A377546C4BA158F7C6A7D88ABC90D33FC94D4717531EE8AC3DAEF412'),
(6, 'questionsimages/7a1f5340ad257526367d0fc55e901cc0.png', 'it is also related to the war in history', 'name the computered relation between the images', 'AC5C9F538C67C6C6FD016E2072628F9E6CEE2D6C6A84652E6CF8C3A34009EF63'),
(7, 'questionsimages/cef13d26d17ee410554443ae8bab9e1e.png', '2nd image takes to the company logo', 'name related to both images\r\n', 'F745A15153C4DACF0EA4BBF57265E73283941F8335939B33C693975315CF5916'),
(8, 'questionsimages/22aa0c5b819295a0db0c444cc4eaa34d.png', 'it is associated with world war 2', 'name of the movie', '6EC72E660F2C7A786A5C3D46C76A4D5527A50A488A79E741A229D1C202E6FCD8'),
(9, 'questionsimages/ecf7a94397352ec27f87bbe481e04cdb.png', 'Family support made him no. 1', 'Name the personality', '68CAD334CA6D0FAC871D825BDA9801363B77666BDBF678AB964791043F7B4369'),
(10, 'questionsimages/910ee7b039ca13d4d0a1a528f275b369.jpeg', '1 billion', '', 'D8DA77F935D6FF381CAF15BCFD61BC26B1CF0E3AF22D816053F6E1AD0DEA95B2'),
(11, 'questionsimages/7ec21daad867f1ad9433a53cfe5e1d10.png', 'Among forbes list of super achievers from asia under the age of 40', 'Name of person', 'DCC50023C91A42758923BF879F00BDEC689368B9B6026C2F73903044ABA08369'),
(12, 'questionsimages/5a04e998aa689758d605e7e6b3e6cb2d.jpg', 'A nice gesture', 'Relate the images', '03A0C1F8BBFC4D4B533121FB2810E33064E589E7486E3E6779BA051C314B777F'),
(13, 'questionsimages/d13d88a69f304112dfbcdebfa63b0957.jpeg', 'Name is still a vegetable.', '', 'C88B9D2BF3D58B4888EF0B94D7C6F1F9D42B798BADF922B09367CE1D423EEB5B'),
(14, 'questionsimages/ad556dc8382de2b7a0e0d1f67be256be.jpeg', 'Wood', '', '3F6B9E34DDCECCF143FF8701B442B55C1FAC1E009E39306AF1FD9EC82E40C9EB'),
(15, 'questionsimages/3ba979fc3c54347ccccf1d1a8628c7b7.jpeg', 'Reverse', '', 'DD805812F2FD7FF1476C5ABB96D09D0D09B7C810A4310186817EFA810D911594'),
(16, 'questionsimages/438f0ca879aa83d5c941830e21aa9f80.jpeg', 'Stephen Baxter', '', '004B372CB547494DB2F62D4B28602329781F2B358E5DBB14A62AD7E5767B3B4A'),
(17, 'questionsimages/db2d183d9d3847ff9084e6dcb6856d6e.png', 'Your Past holds the key to your present.', '', 'B60123EB42606D7D27A0A77CD6A5344D8A439E2BF461FC6BAEB63E61F00F781D'),
(18, 'questionsimages/181ea842de23594d827df2dfdd0a5212.jpg', '', 'Name the Restaurant.', 'E27797B32B19552709C85D7F966DE773FFC790D77310F02724D37190021B5736'),
(19, 'questionsimages/59820ff0c0b9df0cc5aa329d712185c5.jpeg', '', '', '1F6F699C758927BAADC825AD46BF7476D650B346A294B2BF9D457887B57F5153'),
(20, 'questionsimages/8926ccc52f15ffef2c0061af829bab39.png', '', '', '0DF7457B0EAABFB771C510234945D60E7FBCF5BF47F687C63E40A716B0482198');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
