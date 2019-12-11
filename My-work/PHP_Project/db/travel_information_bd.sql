-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 06:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_information_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE `birthday` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `data_of_birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `soft_deleted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `id` int(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `is_trashed` varchar(100) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`id`, `book_title`, `author_name`, `is_trashed`) VALUES
(2, 'Gias', 'afasdjfklaj@gmail.com', 'No'),
(3, 'rasel', 'teafa@gmail.com', 'No'),
(4, 'adadf', 'adadafa', 'No'),
(5, 'adfadfasadadfd', 'fdadsfd', 'No'),
(6, 'Muntasir', 'muntasir@gmail.com', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `historical_background`
--

CREATE TABLE `historical_background` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historical_background`
--

INSERT INTO `historical_background` (`id`, `first_name`, `description`) VALUES
(1, 'Historical Background', 'The song was written in 1905 during the divident of the two nation between Hindu and Muslim.');

-- --------------------------------------------------------

--
-- Table structure for table `road_service`
--

CREATE TABLE `road_service` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(100) NOT NULL,
  `member` int(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `fromWhere` varchar(100) NOT NULL,
  `toWhere` varchar(100) NOT NULL,
  `is_trashed` varchar(100) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `road_service`
--

INSERT INTO `road_service` (`id`, `name`, `email`, `telephone`, `member`, `message`, `fromWhere`, `toWhere`, `is_trashed`) VALUES
(1, 'Shamsur ', 'shamsurrahaman132@gmail.com', 1515221134, 9, '', 'Chittagong', 'Dhaka', 'No'),
(2, 'Shamsur rahaman111', 'shamsurrahaman132@gmail.com', 0, 0, '', '', '', 'No'),
(3, 'asdf', 'asdf', 0, 0, '', '', '', 'No'),
(5, 'Gias', 'gias@gmail.com', 11, 10, '', 'dhaka', 'chittagong', '2017-07-07 18:53:01'),
(7, 'Resel', 'rasel@gmil.com', 1515222222, 4, '', 'Chittagong', 'Dhaka', 'No'),
(8, 'sam', 'sam@gmil.com', 151515, 9, '', 'Chittagong', 'Dhaka', 'No'),
(9, 'Sabrina Sharmin', 'sabrina@gmail.com', 2147483647, 11, '', 'Chittagong', 'Satkhitra', 'No'),
(10, 'KhanKhan Thihid', 'shamsurrahaman132@gmail.com', 1515221134, 9, '', 'Chittagong', 'Dhaka', 'No'),
(11, 'Shamsur rahaman', 'shamsurrahaman132@gmail.com', 2147483647, 10, '', 'Chittagong', 'Dhaka', 'No'),
(12, 'Shamsur rahaman', 'shamsurrahaman132@gmail.com', 2147483647, 8, '', 'Chittagong', 'Dhaka', 'No'),
(13, 'Shamsur rahaman', 'shamsurrahaman132@gmail.com', 2147483647, 10, '', 'Chittagong', 'Dhaka', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetail`
--

CREATE TABLE `roomdetail` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `no_of_room` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomdetail`
--

INSERT INTO `roomdetail` (`id`, `username`, `checkin_date`, `checkout_date`, `room_type`, `no_of_room`, `amount`) VALUES
(2, 'joy@mendis.com', '2014-06-16', '2014-06-20', '250', '5', '1250');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_price` varchar(50) NOT NULL,
  `room_seson` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`room_id`, `room_type`, `room_price`, `room_seson`) VALUES
(1, 'Garden view', '100', 'low season'),
(2, 'Garden view', '200', 'high season'),
(3, 'Street view', '45', 'low season'),
(4, 'Street view', '90', 'high season'),
(5, 'Ocean view', '250', 'low season'),
(6, 'Ocean view', '500', 'high season');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `day_phone` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `day_phone`, `user_name`, `user_password`, `city`, `country`, `payment_type`) VALUES
(1, 'joy', 'mendis', '8123432111', 'joy@mendis.com', '12345', 'ontario', 'canada', 'paypal'),
(2, 'shamsur', 'r', '10', 'shamsurrahaman132@gmail.com', '123', 'Chittagong', 'Bangladesh', 'cash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthday`
--
ALTER TABLE `birthday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historical_background`
--
ALTER TABLE `historical_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `road_service`
--
ALTER TABLE `road_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomdetail`
--
ALTER TABLE `roomdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthday`
--
ALTER TABLE `birthday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `historical_background`
--
ALTER TABLE `historical_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `road_service`
--
ALTER TABLE `road_service`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `roomdetail`
--
ALTER TABLE `roomdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
