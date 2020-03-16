-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2020 at 06:10 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electronix`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_log`
--

CREATE TABLE IF NOT EXISTS `ad_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) DEFAULT NULL,
  `apwd` varchar(50) DEFAULT NULL,
  `secques` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aname` (`aname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ad_log`
--

INSERT INTO `ad_log` (`id`, `aname`, `apwd`, `secques`) VALUES
(1, 'electronixadmin', '12345678', 'dreaming'),
(2, 'kushan', '1997', 'dreaming');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Asus'),
(3, 'Dell'),
(4, 'Nikon'),
(5, 'Samsung'),
(7, 'Motorola'),
(8, 'Intel'),
(9, 'text');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(14, '127.0.0.1', 1),
(15, '127.0.0.1', 1),
(16, '127.0.0.1', 1),
(17, '127.0.0.1', 1),
(18, '127.0.0.1', 1),
(19, '::1', 0),
(20, '127.0.0.1', 1),
(21, '127.0.0.1', 1),
(23, '127.0.0.1', 1),
(24, '127.0.0.1', 1),
(25, '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops'),
(2, 'Motherboards'),
(3, 'Desktops'),
(4, 'Cameras'),
(5, 'Mobiles'),
(6, 'tex');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prd_id` int(100) NOT NULL AUTO_INCREMENT,
  `prd_cat` int(100) NOT NULL,
  `prd_brand` int(100) NOT NULL,
  `prd_title` varchar(255) NOT NULL,
  `prd_price` int(100) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_img` text NOT NULL,
  `prd_img1` text NOT NULL,
  `prd_img2` text NOT NULL,
  `prd_img3` text NOT NULL,
  `prd_keyword` text NOT NULL,
  PRIMARY KEY (`prd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='r' AUTO_INCREMENT=29 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `prd_cat`, `prd_brand`, `prd_title`, `prd_price`, `prd_desc`, `prd_img`, `prd_img1`, `prd_img2`, `prd_img3`, `prd_keyword`) VALUES
(14, 4, 5, 'Samsung webcam', 6500, 'digital webcam with optical zoom', 'Baba-Deep-Singh_art.jpg', '', '', '', 'webcam,samsung,camera,samsung camera,cameras'),
(15, 5, 7, 'Motorola maxi m23', 3800, '5 MP Primary Camera\n2 MP Secondary Camera\nDual Sim (GSM + UMTS)\nAndroid v4.4 (KitKat)', '20140904-193820-moto-e.jpg', '', '', '', 'motorola mobile,android,motorola,android phone,android mobiles'),
(16, 5, 7, 'Moto-Turbo mx888', 4800, 'Android v4.4.4 OS\r\nDual Sim (GSM + GSM)\r\n5 inch HD Screen\r\n8 MP Primary Camera', '20150312-04712-moto-turbo.jpg', 'Screenshot (39).png', 'Screenshot (40).png', 'Screenshot (41).png', 'motorola mobile,android,motorola,android phone,android mobiles'),
(17, 5, 2, 'Asus568-molixva', 4300, '1 GB RAM\n8 MP Primary Camera\n2 MP Secondary Camera\n1.2 Ghz Quad Core', 'asus-ze550ml-ze550ml-1a076ww-125x125-imae6qafassv5kcz.jpeg', '', '', '', 'Asus mobile,android,asus,android phone,android mobiles'),
(18, 5, 5, 'Samsung galaxy ace', 5000, '5 Inch Super AMOLED ...\nDual SIM (LTE + GSM)\n13 MP | 5 MP Camera ...\n2600 mAh Battery', 'samsung-galaxy-ace-nxt-sm-g313hrwdinu-sm-g313hrwdins-125x125-imae2fjadm7qrghm.jpeg', '', '', '', 'samsung mobile,android,samsung,android phone,android mobiles,galaxy,ace'),
(19, 2, 8, 'Intel DZ68BC Motherboard', 6999, 'form factor:ATX\r\nCore i7\r\nLGA1155\r\nDDR3 SDRAM\r\nGigabit Ethernet', '$_35.JPG', '', '', '', 'motherboard,intel,core i7,ethernet'),
(20, 2, 2, 'ASUS M5A78L-M LX Motherboard', 3895, 'Form Factor Micro-ATX\r\nSocket type AM3+\r\nAudio Codec Realtec ALC887\r\nBuffered Memory', '18279201679984motherboard138606973113875996181389273744.jpg', '', '', '', 'asus,gaming,raltek,motherboard'),
(21, 1, 1, 'HP Pavilion P245SA', 33990, 'OS W8.1\r\nNotebook\r\n1TB Hard disk\r\n15.6" screen size ', '$_35(2).JPG', '', '', '', 'notebook,1tb,hp,laptop'),
(23, 4, 4, 'Nikon Coolpix P600  Optical Zoom', 18000, '16.1 Megapixel,\r\ncolor:black,\r\n60X Otical Zoom,\r\nISO 100 to 6400 Senstivity,\r\n3 inch vari Angle Display', 'digital-camera-391444626208.jpg', '', '', '', 'nikon,camera,black,zoom,cameras'),
(24, 2, 3, '5', 4, 'sscdw', 'back02.jpg', '', '', '', 'ky'),
(25, 3, 3, 'computer', 4, 'asdfgh', 'Capturegf.PNG', '', '', '', 'computer'),
(26, 3, 3, 'computer', 4, 'asdfgh', 'Capturegf.PNG', '', '', '', 'computer');
