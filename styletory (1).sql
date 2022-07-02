-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2022 at 07:06 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `styletory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullName`, `username`, `email`, `password`) VALUES
(1, 'Muhammad Haseeb Butt', 'M_HASEEB_BUTT', 'haseebmuhammad438@gmail.com', '$2y$10$6efBXpnaUEi7yY4SkCgPd.d4RM5aFl.MXjfTv1fxShCdtACY2OAFW');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `status` enum('approved','rejected','pending','') NOT NULL DEFAULT 'pending',
  `booking_date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `total_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `vendor_service_id` (`service_id`),
  KEY `vendorr_id` (`vendor_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `customer_id`, `vendor_id`, `member_id`, `service_id`, `status`, `booking_date`, `time_from`, `time_to`, `total_amount`) VALUES
(10, 16, 11, 19, 3, 'approved', '2022-05-16', '10:00:00', '11:00:00', 1),
(11, 16, 11, 19, 3, 'rejected', '2022-05-15', '17:00:00', '18:00:00', 1),
(12, 16, 11, 19, 3, 'rejected', '2022-08-15', '16:06:00', '17:06:00', 1),
(13, 16, 11, 19, 6, 'rejected', '2022-08-15', '09:00:00', '09:30:00', 1),
(14, 16, 11, 19, 4, 'rejected', '2022-05-16', '09:00:00', '09:30:00', 1),
(15, 16, 11, 19, 2, 'rejected', '2022-05-16', '09:00:00', '09:20:00', 1000),
(16, 16, 11, 19, 3, 'approved', '2022-05-16', '09:00:00', '09:15:00', 50),
(17, 16, 11, 19, 2, 'approved', '2022-04-18', '13:00:00', '13:20:00', 1000),
(19, 16, 11, 18, 2, 'rejected', '2022-05-23', '09:00:00', '09:20:00', 1000),
(24, 16, 11, 19, 1, 'approved', '2022-05-23', '09:00:00', '09:30:00', 2121),
(25, 17, 12, 21, 1, 'approved', '2022-05-23', '17:02:00', '00:00:00', 400),
(29, 17, 11, 18, 6, 'pending', '2022-05-30', '09:10:00', '09:20:00', 123),
(31, 16, 11, 19, 6, 'pending', '2022-05-23', '10:04:00', '00:00:00', 123),
(32, 16, 28, 23, 1, 'approved', '2022-05-23', '09:10:00', '09:40:00', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `username`, `city`, `age`, `address`, `email`, `image`, `phoneNo`, `password`, `confirm_password`, `dob`) VALUES
(15, 'jansher Ali', 'jansher', 'Rawalpindi', 12, 'Rawalpindi', 'haseebmuhammad438@gmail.com', '', '0331-5921701', '$2y$10$8HsrKMX9.wyVzXsnCKx.p.gegGyMEh1wkvyCIcLOwPvD7pM47g6wW', '0', '2000-05-05'),
(16, 'Muhammad Haseeb Butt', 'haseebbutt', 'Rawalpindi', 22, 'Rawalpindi', 'haseebmuhammad@gmail.com', 'download (1).jpg', '0331-5999791', '$2y$10$oz92Ie0VBw0AhFzO5WzYMe5nAgOKdtnKkK9yv/optizHGw5eveAde', '$2y$10$0E8Op7WjLO9KsreKy3wQz.bCF7jv.7www1JyGIUf.psf.ct590leS', '2000-05-05'),
(17, 'shehryar hafeez', 'shehryar12', 'Rawalpindi', 24, 'Sadiqabaad,Rawalpindi', 'mh5436768@gmail.com', '', '0322-1342321', '$2y$10$/Q/PhkszlwRCjs2FKPsOgut7Wd34gEGOtwDPIlf3UXVJq00kDyphu', '0', '2000-05-05'),
(18, 'test', 'testing', 'Islamabad', 22, 'Rawalpindi', 'test@gmail.com', '', '0345-9890010', '$2y$10$ImWW3nhwETzuy7iO4X4vZ.Xu4IjxlgNRzOlIgLAoffuZEhANl5uNi', '$2y$10$hmpWj69v9OOK8Tiqgasvxey9pBsbBMQj29ZJ96lu/4rsbD8QCowcW', '2000-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'Hair Cut'),
(2, 'Hair Styling'),
(3, 'Hair Dye'),
(4, 'Facial'),
(6, 'Pedicure'),
(9, 'Some service'),
(12, 'Some Other Services');

-- --------------------------------------------------------

--
-- Table structure for table `staff_members`
--

DROP TABLE IF EXISTS `staff_members`;
CREATE TABLE IF NOT EXISTS `staff_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `speciality` int(11) NOT NULL,
  `cell_no` int(15) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `vendor_Id` int(11) NOT NULL,
  `picture` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Vendor_id` (`vendor_Id`),
  KEY `Speciality` (`speciality`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_members`
--

INSERT INTO `staff_members` (`id`, `name`, `speciality`, `cell_no`, `experience`, `vendor_Id`, `picture`) VALUES
(18, 'Ahmed Aliii', 2, 123123123, '2 Years', 11, '_img/profile/220514164717.jpg'),
(19, 'Kashif Iqbal', 4, 23123, '2 Years', 11, '_img/profile/220514161418.jpg'),
(21, 'test', 2, 2147483647, '2 Months', 12, ''),
(23, 'shehryar', 1, 2147483647, '1 year', 28, '_img/profile/220519151355.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `time_schedules`
--

DROP TABLE IF EXISTS `time_schedules`;
CREATE TABLE IF NOT EXISTS `time_schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `from` varchar(10) NOT NULL,
  `to` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_schedules`
--

INSERT INTO `time_schedules` (`id`, `vendor_id`, `day`, `from`, `to`) VALUES
(23, 24, 'monday', '9:00', '18:00'),
(22, 12, 'monday', '9:00', '18:00'),
(25, 12, 'tuesday', '09:00', '18:00'),
(20, 11, 'monday', '09:00', '18:00'),
(26, 28, 'monday', '09:00', '19:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `vendorID` (`vendor_id`),
  KEY `customerID` (`customer_id`),
  KEY `adminID` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `image` text,
  `services` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `min_price` int(11) DEFAULT NULL,
  `max_price` int(11) DEFAULT NULL,
  `awards` varchar(255) DEFAULT NULL,
  `award_year` int(11) DEFAULT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `latitude` varchar(40) DEFAULT NULL,
  `longitude` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `fullname`, `username`, `address`, `phoneNo`, `email`, `dob`, `image`, `services`, `specialization`, `min_price`, `max_price`, `awards`, `award_year`, `description`, `password`, `confirm_password`, `latitude`, `longitude`) VALUES
(10, 'Jugnu Saloon', 'jugnu13', 'Murree Road, Rawalpindi', '0331-1199701', 'urghanoon@hotmail.com', '2020-01-04', 'images.jpg', 'Hair Dye,Facial,Pedicure,', 'Hair Cut', 350, 40000, 'Hum Award', 2000, 'We offer new services', '$2y$10$EhvAbWIAnSXQFiZjTpzalOQMHgRA3K8v/tGIOFGvOZ/xIrE4bE.ly', '$2y$10$G6ZQw1DI25SNxvhU1B1/r.829hRjY6UgTMee8fp621QTfsOGiH3iq', '33.5858775764799', '73.49172471729264'),
(11, 'Depilex', 'Depilex21', 'Commercial Market, Satellite Town, Rawalpindi', '0331-5912702', 'depilex@gmail.com', '2020-01-04', 'download (2).jpg', 'Pedicure,', 'Hair Stylist', 400, 55000, 'Best Sales', 2020, 'Depilex is one of the top leading names of such stylists’ corner, and Musarrat Misbah, is the name behind this big beauty salon. Stylist Musarrat Misbah brought some revolution in the scenario, with the launch of Depilex. Stylist Musarrat Misbah has got proper training of make-up and beauty therapy.Over the years, Depilex has gained greater expertise and wider exposure in each of its specialized service areas. Depilex is passionate and takes pride in providing its customers with the best in Customer Service, Professionalism and Expertise. Hence, it is always at the forefront of Hair, Beauty and Fashion trends in Pakistan. Hard work, consistency in high standards and the fact that Masarrat Misbah (CEO) is well versed and internationally qualified in this field are the main reasons for the success achieved by Depilex.Over the years, Depilex has gained greater expertise and wider exposure in each of its specialized service areas. Depilex is passionate and takes pride in providing its customers with the best in Customer Service, Professionalism and Expertise. Hence, it is always at the forefront of Hair, Beauty and Fashion trends in Pakistan. Hard work, consistency in high standards and the fact that Masarrat Misbah (CEO) is well versed and internationally qualified in this field are the main reasons for the success achieved by Depilex.\n\n', '$2y$10$5g2HVNdCGJJyxLPXQWDxGe3MfQNvWaXA4sH9gYA3xnucitYSXfKj6', '$2y$10$Hz0.XOra4gaYgltAQoBpGO5PcIbSQrYx1Zr5C8yLNQZ4fXgJC2M0O', '33.5958775764799', '73.45172471729264'),
(12, 'Toni And Guy', 'Toni22', 'F-9 Markaz, Islamabad, Pakistan', '0341-0988123', 'mh5436768@gmail.com', '2019-12-29', 'istockphoto-1030255416-612x612.jpg', 'Hair Cut,Hair Styling,Some service,', 'Hair Stylist', 330, 10000, 'Best Year Award', 2021, 'WE are here to serve you', '$2y$10$LgYHTH.Jk67bMl0B9ltKcuLjYDxjO1/B6YJLvzFiDpWYI3UqoC6Ii', '0', '34.5958775764799', '73.49172471727264'),
(24, 'zia saloon', 'zia22', 'F-9 Markaz, Islamabad, Pakistan', '0312-1149999', 'haseebmuhammad438@gmail.com', '2020-01-04', 'pexels-photo-705255.jpeg', 'Hair Cut,Hair Dye,Facial + HairCut,Pedicure,', 'Makeup Artist', 0, 0, 'Professionalism', 0, '', '$2y$10$feOFWJMEAMCNKH17PjvUkeqQDjK24jhQJBsF0gRakHps85wuN1G3e', '$2y$10$5iuAl4aKNIIQnvNqVulQe.EJ3sYcixA10DaDxdGzzbQpH2GfdcMqi', '73.49172471729264', '73.49172471729444'),
(28, 'jugnu waseem', 'jugnu12', 'Phase 4', '0332-5979701', 'jugnu@gmail.com', '2020-02-04', NULL, 'Hair Cut,Hair Styling,', 'Hair Cut', NULL, NULL, NULL, NULL, NULL, '$2y$10$mZoSDQRPdv.MLFohv1QYNuACKHDp2caMXtWahEWOSyIuCJh8Y/rRe', '$2y$10$YNTI389vrO4SREwyEpYGcehO/IGDprgDFM4ja8f0i/4mJLwcy6abu', '33.5471961', '73.1847081');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_services`
--

DROP TABLE IF EXISTS `vendor_services`;
CREATE TABLE IF NOT EXISTS `vendor_services` (
  `vs_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendors_id` int(11) NOT NULL,
  `services_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `time` varchar(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`vs_id`),
  KEY `vendors_id` (`vendors_id`),
  KEY `services_id` (`services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_services`
--

INSERT INTO `vendor_services` (`vs_id`, `vendors_id`, `services_id`, `price`, `time`) VALUES
(38, 10, 3, 120, '30'),
(39, 10, 4, 400, '50'),
(40, 10, 6, 1000, '60'),
(41, 12, 1, 400, '50'),
(42, 12, 2, 0, '0'),
(43, 12, 9, 0, '0'),
(44, 28, 1, 1000, '30'),
(45, 28, 2, 2000, '40'),
(91, 11, 2, 1200, '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_id` FOREIGN KEY (`member_id`) REFERENCES `staff_members` (`id`),
  ADD CONSTRAINT `service_id` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_members`
--
ALTER TABLE `staff_members`
  ADD CONSTRAINT `Speciality` FOREIGN KEY (`speciality`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `Vendor_id` FOREIGN KEY (`vendor_Id`) REFERENCES `vendor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `adminID` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customerID` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendorID` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vendor_services`
--
ALTER TABLE `vendor_services`
  ADD CONSTRAINT `services_id` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendors_id` FOREIGN KEY (`vendors_id`) REFERENCES `vendor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
