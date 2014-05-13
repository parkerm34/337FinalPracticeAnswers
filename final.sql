-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2014 at 01:08 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(2048) NOT NULL,
  `image` varchar(128) NOT NULL,
  `imagesmall` varchar(128) NOT NULL,
  `title` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `image`, `imagesmall`, `title`) VALUES
(1, 'Rider in the sunset in a field', 'images/rider.jpg', 'images/rider-small.jpg', ''),
(2, 'Furtado Mountain Bike', 'images/furtado.jpg', 'images/furtado-small.jpg', 'furtado'),
(3, 'Joplin Mountain Bike', 'images/joplin.jpg', 'images/joplin-small.jpg', 'joplin'),
(4, 'Juno Mountain Bike', 'images/juno.jpg', 'images/juno-small.jpg', 'juno'),
(5, 'Nevis Mountain Bike', 'images/nevis.jpg', 'images/nevis-small.jpg', 'nevis'),
(6, 'Origin Mountain Bike', 'images/origin.jpg', 'images/origin-small.jpg', 'origin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
