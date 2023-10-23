-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 11:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_activity`
--

CREATE TABLE `login_activity` (
  `Sr_no` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_activity`
--

INSERT INTO `login_activity` (`Sr_no`, `userid`, `book_name`, `review`, `likes`) VALUES
(1, 'Sooraj19', 'theoneyoucannothave', 'Good book.', 0),
(2, 'Sooraj19', 'my journey', 'Inspiring book!', 0),
(3, 'Sooraj19', 'thecall', 'Thriller at its very best!The pace slows down a bit in between but the start and the climax is worth reading! 4/5', 0),
(4, 'Sooraj19', 'till the last breath', 'Best romance book till date! Durjoy literally made me cry! 5/5', 0),
(5, 'Sooraj19', 'playing it my way', 'Inspiring!', 0),
(6, 'Sooraj19', 'accidental apprentice', 'Best Thriller ever! Forces you to turn pages faster! 5/5\r\n', 1),
(7, 'Sooraj19', 'one_night', 'Chetan brings a pretty cool concept and executes it in his own stylish way!', 0),
(8, 'Sooraj19', 'exorcist', 'Horror in every word!', 0),
(9, 'Sooraj19', 'face in the dark', 'Pretty scary in some places! Average overall!', 0),
(10, 'Sooraj19', 'it started with a friend request', 'My fav Sudeep Book till date! Be ready for that twist readers!', 0),
(11, 'Sooraj19', 'dongri to dubai', 'Precisely to the point. Vast research!', 1),
(12, 'Sooraj19', 'dongri to dubai', 'Precisely to the point. Vast research!', 0),
(13, 'Susmitha123', '60 MINUTES', 'Nice one...Liked it', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`fname`, `lname`, `id`, `password`, `gender`, `country`, `date_of_birth`, `email`, `contact`) VALUES
('Samiksha', 'Mokal', 'Samiksha25', 'SAMsam123', 'female', 'ind', '1997-04-30', 'samikshamokal@gmail.com', 8879654512),
('Sooraj', 'Nair', 'Sooraj19', 'SRJsrj123', 'male', 'ind', '1996-10-10', 'sooraj101096@gmail.com', 8097912582),
('Susmitha', 'Nair', 'Susmitha123', 'sush123ABCD', 'female', 'ind', '1996-06-01', 'susfgdfsmusangu@gmail.com', 9989887675);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_activity`
--
ALTER TABLE `login_activity`
  ADD PRIMARY KEY (`Sr_no`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_activity`
--
ALTER TABLE `login_activity`
  MODIFY `Sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
