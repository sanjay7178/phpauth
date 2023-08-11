-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 12:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `sno` int(30) NOT NULL,
  `movie_name` text NOT NULL,
  `movie_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`sno`, `movie_name`, `movie_url`) VALUES
(1, 'Ante Sundaraniki', 'https://sbflix.xyz/d/ki2sy44xe6te.html');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `dt`, `email`) VALUES
(69, 'sanjay', 'admin', '2022-07-12 11:40:37', 'saisanjay8156@gmail.com'),
(70, 'sanjay', 'admin1', '2022-07-12 11:40:53', 'saisanjay8156@gmail.com'),
(71, 'sanjay', 'admin2', '2022-07-12 11:41:05', 'saisanjay8156@gmail.com'),
(72, 'sanjay', 'admin', '2022-07-12 11:42:17', 'saisanjay8156@gmail.com'),
(73, 'sanjay', 'sanjay', '2022-07-12 15:40:21', 'saisanjay8156@gmail.com'),
(74, 'test', 'test123', '2022-11-16 20:12:02', 'dhashdhhd@gmail.com'),
(75, 'test2', 'test123', '2022-11-16 20:12:45', 'sjdjsdjjd@gmail.com'),
(76, 'test3', 'test123', '2022-11-16 20:13:29', 'sdjdsjdjj@gmail.com'),
(77, 'test123789', 'test123789', '2022-12-19 14:47:40', 'test123789@gmail.com'),
(78, 'test123788', 'test123788', '2022-12-19 14:50:05', 'test123788@gmail.com'),
(79, 'test1237891', 'test1237891', '2022-12-19 14:56:30', 'test1237891@gmail.com'),
(80, 'test1237891', 'test1237891', '2022-12-19 14:56:44', 'test12378891@gmail.com'),
(81, 'saisanjay81', 'saisanjay81156@gmail.com', '2022-12-19 14:57:02', 'saisanjay81156@gmail.com'),
(82, 'saisanjay81', 'saisanjay81156@gmail.com', '2022-12-19 14:57:14', 'saisanjay811256@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
