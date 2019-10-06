-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 09:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecops`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `country`, `message`) VALUES
('frt', 'rft@fg', 'dfhs', ''),
('frt', 'rft@fg', 'dfhs', '     hfghsd\r\n	 '),
('trvtrt', 'sharmaayush981@gmail', 'India', '     rcttrtr\r\n	 '),
('trvtrt', 'sharmaayush981@gmail', 'India', '     rcttrtr\r\n	 '),
('dsfsfsd', 'dftgyh@kdahs.com', 'dff', '     \r\n	 fdf'),
('ayush studenr', 'sharmaayush981@gmail', 'India', '     \r\n	 great experience');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `country` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_complaints`
--

CREATE TABLE `registered_complaints` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` text NOT NULL,
  `country` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `aadharno` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `id` int(11) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Accused` varchar(20) NOT NULL,
  `Police_station` varchar(20) NOT NULL,
  `People_involved` varchar(20) NOT NULL,
  `Incident` text NOT NULL,
  `Date` date NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_complaints`
--

INSERT INTO `registered_complaints` (`name`, `email`, `mobile`, `address1`, `country`, `occupation`, `age`, `aadharno`, `state`, `city`, `pin`, `id`, `Status`, `Accused`, `Police_station`, `People_involved`, `Incident`, `Date`, `Location`) VALUES
('ayush', 'sharmaayush981@gmail.com', '9872577654', 'chandigarh university', 'India', 'student', 20, '5684565815678', 'punjab', 'kharar', 140413, 197, 0, '', '', '', '', '0000-00-00', ''),
('siddharth', 'sidjain@gmail.com', '9971160940', 'delhi', 'india', 'student', 20, '789456123', 'delhi', 'rohini', 456131, 198, 0, 'Cobu Momo Gagdu Kann', 'Rohini', 'Cobu Momo Gagdu Kann', 'Ladai ho gye', '2018-04-09', 'rohini'),
('shreya', 'shreyakamboj98@gmail.com', '9815840832', 'Mohali', 'India', 'student', 19, '456945210', 'chandigarh', 'mohali', 140413, 199, 0, 'ayush ', 'mohali', 'ayush ', 'love peace', '2018-04-09', 'mohali'),
('ayush', 'sharmaayush981@gmail.com', '990', '0', '098', 's', 127, '8099', '08', '080', 80, 200, 1, '808', '08', '80', '8', '2018-04-09', '80'),
('ayush', 'sharmaayush981@gmail.com', '990', '0', '098', 's', 127, '8099', '08', '080', 80, 201, 0, '808', '08', '80', '8', '2018-04-09', '80'),
('87676', '67', '88', '8', '86', '86', 68, '876', '6', '86', 6, 202, 2, '68', '68', '68', '8', '2018-04-09', '686'),
('vasu', 'vasukamboj98@gmail.com', '9815840839', 'Mohali', 'India', 'student', 18, '123456789123', 'punjab', 'mohali', 140413, 203, 2, 'no', 'mohali', 'no', 'try to abuse a girl', '2018-04-09', 'phase11'),
('vasu', 'vasukamboj98@gmail.com', '9815840839', 'Mohali', 'India', 'student', 18, '123456789123', 'punjab', 'mohali', 140413, 204, 1, 'no', 'mohali', 'no', 'try to abuse a girl', '2018-04-09', 'phase11'),
('sonali kapahi', 'sonalikapahi12@gmail.com', '0000000000', 'lahore,pakistan', 'Pakistan', 'terrorist', 77, 'pakistan', 'lahore', 'lahore', 0, 205, 3, 'sonali kapahi', 'lahore', 'sonali kapahi', 'pakistan se ayi ha tarro ke neeche se ayi hai\r\nbhagg ke dun dun dun dun', '2018-04-10', 'lahore'),
('h', 'g', 'uh', 'u', 'ih', 'u', 0, 'iuh', 'ihg', 'yg', 0, 206, 0, 'hgiui', 'uy', 'hgiui', 'gg', '2018-04-15', 'y'),
('Ayush Sharma', 'sharmaayush981@gmail.com', '8894120985', 'Mandi', 'India', 'STUDENT', 21, '5684565815678', 'Himachal Pradesh', 'mandi', 175015, 207, 0, 'Karan, shivam', 'mohali', 'Karan, shivam', 'Stop me and beat me up', '2018-04-16', 'chandigarh'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 50, '7845120', 'Himachal Pradesh', 'mandi', 175015, 208, 3, 'Mandi', 'mohali', 'Mandi', 'maar', '2018-06-23', 'chandigarh'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 20, '5414123.0', 'Himachal Pradesh', 'mandi', 175015, 209, 1, '75', 'mohali', '75', 'm,bhjvhjj', '2018-07-09', 'chandigarh'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 20, '5414123.0', 'Himachal Pradesh', 'mandi', 175015, 210, 2, '75', 'mohali', '75', 'm,bhjvhjj', '2018-07-09', 'chandigarh'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 20, '223156331+', 'Himachal Pradesh', 'mandi', 175015, 211, 3, '2.1.1', '3311', '2.1.1', '', '2018-07-09', '1435'),
('ayush', 'sharmaayush981@gmail.com', '9872577654', 'chandigarh university', 'India', 's', 20, '313', 'punjab', 'kharar', 140413, 212, 2, '3535', '3', '3535', '', '2018-07-10', '35'),
('ed', 'ew', 'fwf', 'f', 'fqwfqwqewwew', 'efe', 0, 'ewq', 'wf', 'wf', 0, 213, 0, 'ewq', 'wq', 'ewq', '', '2018-07-10', 'ewqf'),
('edeqfefefewf', 'f', 'wqf', 'ewq', 'qew', 'fewq', 0, 'ewfew', 'ew', 'ewqfew', 0, 214, 0, 'fweew', 'ef', 'fweew', '', '2018-07-10', 'ew'),
('ayush', 'sharmaayush981@gmail.com', '9872577654', 'chandigarh university', 'India', 's', 52, '22', 'punjab', 'kharar', 140413, 215, 0, '513', '5655', '513', '', '2018-07-10', '22'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 11, '9741354230', 'Himachal Pradesh', 'mandi', 175015, 216, 2, 'ayush', 'dcrtfvgybh', 'ayush', 'ZDFBHGFDSA', '2018-07-18', 'chandigarh');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` text NOT NULL,
  `country` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `aadharno` varchar(20) NOT NULL,
  `address2` text NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `other` text NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`name`, `email`, `mobile`, `address1`, `country`, `occupation`, `age`, `aadharno`, `address2`, `state`, `city`, `pin`, `other`, `id`, `password`) VALUES
('ayush', 'sharmaayush981@gmail.com', '9872577654', 'chandigarh university', 'India', 'student', 20, '5684565815678', 'mohali', 'punjab', 'kharar', 140413, 'Good BOy', 197, ''),
('kaundal', 'kaundal@bjdkf.com', '879654368', 'fchhvmj', 'India', 'defence', 21, '1234464152', 'vhjvjh', 'vgj', 'goa', 458987654, 'nlsdxbw', 198, 'qwerty'),
('Ayush Sharma', 'sharmaayush981@gmail.com', '8894120985', 'Mandi ', 'India', 'STUDENT', 21, '5684565815678', 'Padhar', 'Himachal Pradesh', 'mandi', 175015, 'Ayush Sharma Cse 6 16BCS1550', 199, 'AYUSH98'),
('shreya', 'shreyakamboj98@gmail.com', '9815840832', 'gagalady', 'India', 'defence', 25, '4789512364136545', 'saharnpur', 'punjab', 'kharar', 140413, 'godd bachi', 200, 'shreya0011'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '0701882018', 'Mandi', 'India', 'P', 33, '987654321', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 741852, '', 220, ''),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '0701882018', 'Mandi', 'India', 'P', 33, '987654321', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 741852, '', 221, ''),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '0701882018', 'Mandi', 'India', 'P', 33, '987654321', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 741852, '', 222, ''),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 20, '74185200', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 175015, '', 223, ''),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 20, '74185200', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 175015, '', 224, ''),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 50, '3012478650', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 175015, '', 225, ''),
('ambika', 'ambika@gmail.com', '9857119684', 'urla', 'india', 'teacher', 43, '12456978331', 'hiyun', 'hp', 'mandi', 175015, 'xcvbn', 226, ''),
('ambika', 'ambika@gmail.com', '9857119684', 'urla', 'india', 'teacher', 43, '12456978331', 'hiyun', 'hp', 'mandi', 175015, 'xcvbn', 227, ''),
('ambika', 'ambika@gmail.com', '9857119684', 'urla', 'india', 'teacher', 43, '12456978331', 'hiyun', 'hp', 'mandi', 175015, 'xcvbn', 228, ''),
('ambika', 'ambika@gmail.com', '9857119684', 'urla', 'india', 'teacher', 43, '12456978331', 'hiyun', 'hp', 'mandi', 175015, 'xcvbn', 229, ''),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 0, '00.13', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 175015, '', 230, ''),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 0, '00.13', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 175015, '', 231, ''),
('ambika', 'ambika@gmail.com', '9857119684', 'urla', 'India', 't', 43, '741852963', 'hiyun', 'hp', 'mandi', 175015, '', 232, ''),
('ambika', 'ambika@gmail.com', '9857119684', 'urla', 'India', 't', 43, '741852963', 'hiyun', 'hp', 'mandi', 175015, '', 233, ''),
('ambika', 'ambika@gmail.com', '9857119684', 'urla', 'India', 't', 43, '741852963', 'hiyun', 'hp', 'mandi', 175015, '', 234, 'rajat'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 20, '5684565815678', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 175015, '', 235, 'poikjhgv'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 20, '123456789', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 175015, '', 236, 'papa'),
('NAVEEN SHARMA', 'SHARMANAVEEN39@GMAIL.COM', '7018820186', 'Mandi', 'India', 'P', 23, '9652745263', 'VPO URLA . MANDI', 'Himachal Pradesh', 'mandi', 175015, '', 237, 'password'),
('ef', 'w', 'f', 'fewf', 'f', 'ef', 0, 'e', 'f', 'f', 'f', 0, '', 238, ''),
('ef', 'w', 'f', 'fewf', 'f', 'ef', 0, 'e', 'f', 'f', 'f', 0, '', 239, ''),
('ef', 'w', 'f', 'fewf', 'f', 'ef', 0, 'e', 'f', 'f', 'f', 0, '', 240, ''),
('shreya', 'shreyakamboj98@gmail.com', '9815840832', 'gagalady', 'India', 'd', 11, '9841036523652', 'saharnpur', 'punjab', 'kharar', 140413, 'ASDFBN', 241, 'password');

-- --------------------------------------------------------

--
-- Table structure for table `registered_women`
--

CREATE TABLE `registered_women` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` text NOT NULL,
  `country` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `aadharno` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `id` int(11) NOT NULL,
  `hide_details` tinyint(1) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Accused` varchar(20) NOT NULL,
  `Police_station` varchar(20) NOT NULL,
  `People_involved` varchar(20) NOT NULL,
  `Incident` text NOT NULL,
  `Date` date NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_women`
--

INSERT INTO `registered_women` (`name`, `email`, `mobile`, `address1`, `country`, `occupation`, `age`, `aadharno`, `state`, `city`, `pin`, `id`, `hide_details`, `Type`, `Status`, `Accused`, `Police_station`, `People_involved`, `Incident`, `Date`, `Location`) VALUES
('shreya', 'shreyakamboj98@gmail.com', '9815840832', 'saharanpur', 'India', 'student', 24, '000000000000', 'up', 'gagalady', 11111, 23, 0, 'murder', 0, 'LEEZA', 'RURKEE', 'AYUSH', 'MAAR DIYA', '0000-00-00', 'SAHARANPUR'),
('shreya', 'shreyakamboj98@gmail.com', '9815840832', 'saharanpur', 'India', 'student', 24, '000000000000', 'up', 'gagalady', 11111, 24, 0, 'murder', 0, 'LEEZA', 'RURKEE', 'AYUSH', 'MAAR DIYA', '2018-06-13', 'SAHARANPUR'),
('sf', 'afafsasfss', 'sf', 'saf', 'sf', 'df', 0, 'sf', 'saf', 's', 0, 25, 0, 'f', 0, 'sg', 'asggs', 'ga', '', '2018-06-13', 'sf');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_complaints`
--
ALTER TABLE `registered_complaints`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `registered_women`
--
ALTER TABLE `registered_women`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_complaints`
--
ALTER TABLE `registered_complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `registered_women`
--
ALTER TABLE `registered_women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
