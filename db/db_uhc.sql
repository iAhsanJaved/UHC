-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 11:40 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uhc`
--

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `info_title` varchar(30) NOT NULL,
  `info_value` varchar(50) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`info_title`, `info_value`, `modified_by`) VALUES
('address', '03-Hometex Export Zone, Multan - Pakistan', 2),
('contact_number1', '+92 61 6771551', 2),
('contact_number2', '+92 61 6771552', 2),
('email', 'sales@unityhomecollections.com', 2),
('facebook_url', '#', 2),
('fax_number', '+92 61 6771724', 2),
('instagram_username', '#', 2),
('main_logo', 'UnityHomesCollections.png', 2),
('site_description', 'XYZ', 2),
('site_name', 'United Home Collections', 2),
('site_url', 'http://localhost/CMS', 2),
('tagline', 'Tagline', 2),
('timing', '9:00 AM - 6:00 PM', 2),
('twitter_username', '#', 2);

-- --------------------------------------------------------

--
-- Table structure for table `site_menu`
--

CREATE TABLE `site_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(35) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `menu_location` tinyint(1) NOT NULL,
  `menu_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_menu`
--

INSERT INTO `site_menu` (`menu_id`, `menu_name`, `menu_url`, `menu_location`, `menu_order`) VALUES
(1, 'Home', 'http://localhost/CMS/', 0, 1),
(2, 'Contact Us', '#', 0, 3),
(4, 'Home', '#', 1, 1),
(5, 'Contact Us', '#', 1, 2),
(6, 'About Us', '#', 1, 4),
(12, 'About Us', 'http://localhost/CMS/', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

CREATE TABLE `site_options` (
  `option_name` varchar(35) NOT NULL,
  `option_value` varchar(50) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_pages`
--

CREATE TABLE `site_pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(80) NOT NULL,
  `page_content` text NOT NULL,
  `page_img` varchar(50) NOT NULL,
  `page_link` varchar(100) NOT NULL,
  `page_keywords` varchar(200) NOT NULL,
  `page_description` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_products`
--

CREATE TABLE `site_products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(80) NOT NULL,
  `product_content` text NOT NULL,
  `product_img` varchar(50) NOT NULL,
  `product_link` varchar(100) NOT NULL,
  `product_keywords` varchar(200) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_slides`
--

CREATE TABLE `site_slides` (
  `slide_id` int(11) NOT NULL,
  `slide_title` varchar(35) NOT NULL,
  `slide_img` varchar(50) NOT NULL,
  `slide_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_slides`
--

INSERT INTO `site_slides` (`slide_id`, `slide_title`, `slide_img`, `slide_order`) VALUES
(5, 'Slide 1', 'slide1.jpg', NULL),
(6, 'Slide 3', 'slide2.jpg', NULL),
(7, 'Slide 3', 'slide3.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(35) NOT NULL,
  `name` varchar(30) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `name`, `user_type_id`, `created_on`, `modified_on`) VALUES
(2, 'iAhsanJaved', '$2y$10$VOrhuEMDdcccjeo2SCcB/uWJprBSiRFShHWj2BzzxWn1vYs.UqVuS', 'iahsanjaved@hotmail.com', 'Ahsan Javed', 1, '2018-05-10 19:09:44', '2018-05-30 16:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_title`) VALUES
(1, 'Admin'),
(2, 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`info_title`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `site_menu`
--
ALTER TABLE `site_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `site_options`
--
ALTER TABLE `site_options`
  ADD PRIMARY KEY (`option_name`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `site_pages`
--
ALTER TABLE `site_pages`
  ADD PRIMARY KEY (`page_id`),
  ADD UNIQUE KEY `page_link` (`page_link`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `site_products`
--
ALTER TABLE `site_products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `site_slides`
--
ALTER TABLE `site_slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`),
  ADD UNIQUE KEY `user_type_title` (`user_type_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `site_menu`
--
ALTER TABLE `site_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `site_pages`
--
ALTER TABLE `site_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_products`
--
ALTER TABLE `site_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_slides`
--
ALTER TABLE `site_slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `site_info`
--
ALTER TABLE `site_info`
  ADD CONSTRAINT `site_info_ibfk_1` FOREIGN KEY (`modified_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `site_options`
--
ALTER TABLE `site_options`
  ADD CONSTRAINT `site_options_ibfk_1` FOREIGN KEY (`modified_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `site_pages`
--
ALTER TABLE `site_pages`
  ADD CONSTRAINT `site_pages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `site_products`
--
ALTER TABLE `site_products`
  ADD CONSTRAINT `site_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`user_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
