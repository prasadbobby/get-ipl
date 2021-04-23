-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 08:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `matchinfo`
--

CREATE TABLE `matchinfo` (
  `id` int(11) NOT NULL,
  `info` longtext NOT NULL,
  `score` longtext NOT NULL,
  `bowler` longtext NOT NULL,
  `batclass` longtext NOT NULL,
  `limg` text NOT NULL,
  `rimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matchinfo`
--

INSERT INTO `matchinfo` (`id`, `info`, `score`, `bowler`, `batclass`, `limg`, `rimg`) VALUES
(0, 'https://www.cricbuzz.com/cricket-match/live-scores', 'https://www.news18.com/cricketnext/cricket-live-scorecard/kings-xi-punjab-vs-mumbai-indians-live-score-full-kpmi10012020197700.html', 'https://www.news18.com/cricketnext/cricket-live-scorecard/delhi-capitals-vs-kolkata-knight-riders-live-score-ddkr10032020197703.html', 'match-table battingInfo_mumbai_indians_firstInnings', 'hyderabad.png', 'bangalore.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `TXNDATE` datetime NOT NULL,
  `USER_NAME` varchar(60) NOT NULL,
  `TXNID` longtext NOT NULL,
  `TXNAMOUNT` int(11) NOT NULL,
  `ORDERID` mediumtext NOT NULL,
  `STATUS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `TXNDATE`, `USER_NAME`, `TXNID`, `TXNAMOUNT`, `ORDERID`, `STATUS`) VALUES
(1, '2020-06-25 17:06:17', 'vicky', '20200625111212800110168742401670665', 10, 'ORDS82658748', 'TXN_SUCCESS'),
(2, '2020-10-05 00:02:06', 'new', '20201005111212800110168986701962838', 10, 'ORDS61632413', 'TXN_FAILURE'),
(3, '2020-10-05 00:14:01', 'bobby', '20201005111212800110168000001963987', 10, 'ORDS55462655', 'TXN_SUCCESS'),
(4, '2020-10-05 00:27:38', 'yogender', '20201005111212800110168012801951675', 10, 'ORDS34338938', 'TXN_SUCCESS'),
(5, '2020-10-05 12:12:07', 'new', '20201005111212800110168597201975112', 10, 'ORDS82683970', 'TXN_SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `email` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `count` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date_time`, `username`, `email`, `password`, `count`) VALUES
(1, '2020-10-02 14:13:04', 'vicky', 'vikash9jat@gmail.com', '123', '0'),
(2, '2020-10-02 14:56:29', 'bobby', 'knvdurgaprasad610@gmail.com', '12345', '0'),
(3, '2020-10-02 16:49:07', 'new', 'Vikash9d9jat@gmail.com', '1234', '1'),
(4, '2020-10-02 18:15:58', 'hdus', 'q@s.v', '1234', '0'),
(5, '2020-10-02 18:59:20', 'yogender', 'yogichoudhary351@gmail.com', 'Yogender@1999', '0'),
(6, '2020-10-05 00:36:14', 'Hello hell', 'shwetachauhan1805@gmail.com', '123456789', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matchinfo`
--
ALTER TABLE `matchinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
