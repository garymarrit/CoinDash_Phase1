-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2014 at 03:14 AM
-- Server version: 5.5.32-cll-lve
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coindash`
--

-- --------------------------------------------------------

--
-- Table structure for table `md5`
--

CREATE TABLE IF NOT EXISTS `md5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `md5` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `md5`
--

INSERT INTO `md5` (`id`, `md5`, `value`) VALUES
(2, '1f55431c1b51b36c1863090ea2e56cd6', 'asLK12'),
(3, 'eb43d76a3e2ba5c71b32ece145fb6bb1', 'Hello@12345'),
(4, '229c3f7e7b9c1be5bfa2f46d90c4ab00', 'A12345678a'),
(5, '229c3f7e7b9c1be5bfa2f46d90c4ab00', 'A12345678a'),
(6, 'dcacc6f86515548d1894b8b1fe9a1811', '123456Tom'),
(7, '4837a6a7fe837c1257aef43195fd26dd', 'Testpassword2014');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'mohit@sitssolutions.com'),
(2, 'hello@hello.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_activated` enum('0','1','2') NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `is_activated`, `key`) VALUES
(27, 'mohit@sitssolutions.com', '1f55431c1b51b36c1863090ea2e56cd6', '1', '2fcb6fa8e9dfd6f3562290f37b9720bc'),
(28, 'gaurav@sitssolutions.com', 'eb43d76a3e2ba5c71b32ece145fb6bb1', '1', 'ff103b63b9a8f1a35a231749ea38231a'),
(29, 'jain.animesh@ymail.com', '229c3f7e7b9c1be5bfa2f46d90c4ab00', '1', 'ce7e5d19a713264ca2f5dcd39747ab27'),
(30, 'jainn.animesh@ymail.com', '229c3f7e7b9c1be5bfa2f46d90c4ab00', '0', '5cae6f3b07623f19ec1bbdc6790af093'),
(31, 'tomji8008@gmail.com', 'dcacc6f86515548d1894b8b1fe9a1811', '2', '9cceb1cc8fcd840ef116dab93c07b998'),
(32, 'coindash@gmail.com', '4837a6a7fe837c1257aef43195fd26dd', '2', '4987d25d91970bdb80eea4f3861b7628');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
