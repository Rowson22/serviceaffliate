-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 11:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hacking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 750354713, 1180043802, 'haklkbja'),
(2, 750354713, 1180043802, 'jkabvjhkavnkl'),
(3, 750354713, 1180043802, 'hjakbhjkjaen'),
(4, 750354713, 1180043802, 'kjahvbhabi'),
(5, 750354713, 1180043802, 'biavjnbah'),
(6, 1180043802, 750354713, 'lkhafjk');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created`, `modified`, `image`) VALUES
(1, 'Rowson', 'Hfdv fakkj faakbf alnbja fakbkjfd asiknf hafojbja', '48', '2021-07-06', '0000-00-00', ''),
(2, 'Jack', 'Hie the ealkdb aflkandf alb afsk', '34', '2021-07-06', '0000-00-00', ''),
(3, 'Hension', 'fHLKB  AKJNFBSA kj a kafjjkdsa ', '34', '2021-07-06', '0000-00-00', ''),
(4, 'fajklnjkb', 'kjhjsakbvfb', '23', '2021-07-06', '0000-00-00', ''),
(5, 'Rawson', 'Hlkb aflkdsn flknf a fknsjkjsnf fkl sfsn ', '22', '2021-07-06', '0000-00-00', ''),
(6, 'Nelson', 'DLK lkdsnf al falka jlsa fslkkjs sflkjfds un', '24', '2021-07-06', '0000-00-00', ''),
(7, 'Gerald', 'hWAKB  AFSDBKJNFV KA HJ S VB   ', '32', '2021-07-06', '0000-00-00', '62f1d68fad7ddc58585688e7d9cdee29d4360a67-white diamond2.jpg'),
(8, 'Qwerty', 'hjvjg vjkvhj hjbhg gjh ghvhj  ', '87', '2021-07-06', '0000-00-00', ''),
(9, 'Rowson', 'klnfsabd', '342', '2021-07-07', '0000-00-00', ''),
(10, 'Iwe', 'm.fna,jnfjvvkls', '78', '2021-07-07', '0000-00-00', ''),
(11, 'Rowson', 'Haisf fkbfs lns slnjkasf ', '89', '2021-07-07', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 750354713, 'jack', 'jack', 'jack@jack.com', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', '1625645319chair-2.jpg', 'Offline now'),
(2, 1180043802, 'ben', 'ben', 'ben@ben.com', '7fe4771c008a22eb763df47d19e2c6aa', '1625645383drip2.jpg', 'Offline now');

-- --------------------------------------------------------

--
-- Table structure for table `userslogin`
--

CREATE TABLE `userslogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userslogin`
--

INSERT INTO `userslogin` (`id`, `username`, `password`) VALUES
(1, 'jack', 'jack');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userslogin`
--
ALTER TABLE `userslogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userslogin`
--
ALTER TABLE `userslogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
