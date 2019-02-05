-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 10:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Acmedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vid_id` int(10) NOT NULL,
  `vid_cat` int(10) NOT NULL,
  `vid_title` varchar(200) NOT NULL,
  `vid_desc` varchar(2000) NOT NULL,
  `vid` varchar(2000) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'Acme@gmail.com', '123Acme');



CREATE TABLE `Services` (
  `serv_id` int(100) NOT NULL,
  `serv_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`serv_id`, `serv_title`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'PHP'),
(4, 'JAVASCRIPT');


ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vid_id`);
ALTER TABLE `Services`
  ADD PRIMARY KEY (`serv_id`);
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `videos`
  MODIFY `vid_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `Services`
  MODIFY `serv_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

