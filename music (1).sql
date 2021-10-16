-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 02:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_number` int(11) NOT NULL,
  `song_name` varchar(256) NOT NULL,
  `artist` varchar(128) NOT NULL,
  `album_name` varchar(256) NOT NULL,
  `rating` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_number`, `song_name`, `artist`, `album_name`, `rating`) VALUES
(1, 'Roller Coaster', 'Luke Bryan', 'Crash My Party ', 10),
(2, 'Drunk on You', 'Luke Bryan', 'Tailgates and Tanlines', 9),
(3, 'Fly Like an Eagle', 'Steve Miller Band', 'Fly like an Eagle ', 8),
(4, 'Kyrie', 'Mr.Mister', 'Welcome to the Real World', 10),
(5, 'Got what I got', 'Jason Aldean', 'Rearview Town', 6),
(6, 'Tattoos on This Town', 'Jason Aldean', 'My kinda party', 7),
(7, 'Before he cheats', 'Carrie Underwood', 'Some Hearts', 9),
(8, 'Cover Me Up', 'Morgan Wallan', 'Dangerous', 10),
(9, 'Don\'t Stop Belevin\'', 'Journey', 'Escape', 10),
(10, 'Separate Ways', 'Journey', 'Frontiers', 4),
(11, 'Crazy in Love', 'Beyonce', 'Dangerously in Love', 7),
(12, 'Flashing Lights', 'Kanye West', 'Graduation', 4),
(13, 'One Dance', 'Drake', 'Views', 9),
(14, 'In my Feelings', 'Drake', 'Scorpion', 5),
(15, 'Settling Down', 'Miranda Lambert', 'Wildcard', 6),
(16, 'Somethi\'n Bad', 'Miranda Lambert ', 'Platnium ', 6),
(17, 'Don\'t Speak', 'Gwen Stefani', 'Tragic Kingdom', 7),
(18, 'Just a Girl', 'Gwen Stefani', 'TRagic Kingdom', 8),
(19, 'God Gave me You', 'Blake Shelton', 'Red River Blue', 9),
(20, 'I\'d Name the Dogs', 'Blake Shelton', 'Texoma Shore', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
