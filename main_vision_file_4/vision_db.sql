-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 10:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vision_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` int(11) NOT NULL,
  `order_random_id` int(222) NOT NULL,
  `order_user_id` int(222) NOT NULL,
  `order_seller_id` int(222) NOT NULL,
  `order_cat_id` int(11) NOT NULL,
  `order_cat` varchar(222) NOT NULL,
  `order_price` varchar(222) NOT NULL,
  `order_req_day` varchar(222) NOT NULL,
  `order_cat_location` varchar(222) NOT NULL,
  `order_guest_range` varchar(222) NOT NULL,
  `order_status` varchar(222) NOT NULL,
  `order_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `regi_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `reg_user_name` varchar(233) NOT NULL,
  `reg_title` varchar(222) NOT NULL,
  `reg_cat` varchar(222) NOT NULL,
  `reg_phone` varchar(222) NOT NULL,
  `reg_address` varchar(222) NOT NULL,
  `reg_price` varchar(222) NOT NULL,
  `reg_range` varchar(222) NOT NULL,
  `reg_desc` varchar(5000) NOT NULL,
  `reg_img_1` varchar(222) NOT NULL,
  `reg_img_2` varchar(222) NOT NULL,
  `reg_img_3` varchar(222) NOT NULL,
  `reg_publish_date` datetime NOT NULL DEFAULT current_timestamp(),
  `reg_status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`regi_id`, `reg_user_id`, `reg_user_name`, `reg_title`, `reg_cat`, `reg_phone`, `reg_address`, `reg_price`, `reg_range`, `reg_desc`, `reg_img_1`, `reg_img_2`, `reg_img_3`, `reg_publish_date`, `reg_status`) VALUES
(1, 1, 'sheraz saqib', 'this is a card title ', 'hall', '564456465', 'karachi', '$ 500', '500', 'Baisakhi is the major festival of Sikhs. For the Sikhs it is not only a festival of harvest but also marks the birth of Sikh brotherhood and Sikh unity. It was on this day in 1699 that the last Sikh Guru, Guru Gobind Singh organised the Sikhs into Khalsa or the pure ones.', '1693807882hall 1.jpeg', '1693807882hall 2.jpg', '1693807882hall 3.jpg', '2023-09-04 11:11:22', 'verify'),
(2, 1, 'sheraz saqib', '333', 'hall', '564456465', 'karachi', '$ 333', '700', 'Baisakhi is the major festival of Sikhs. For the Sikhs it is not only a festival of harvest but also marks the birth of Sikh brotherhood and Sikh unity. It was on this day in 1699 that the last Sikh Guru, Guru Gobind Singh organised the Sikhs into Khalsa or the pure ones.', '1693807959hall-1 p-3.jpg', '1693807959hall 3.jpg', '1693807959hall-1  p-2.jpg', '2023-09-04 11:12:39', 'verify'),
(3, 1, 'sheraz saqib', '232323', 'restuarent', '12223232', 'karachi', '$ 222', '222', 'Baisakhi is the major festival of Sikhs. For the Sikhs it is not only a festival of harvest but also marks the birth of Sikh brotherhood and Sikh unity. It was on this day in 1699 that the last Sikh Guru, Guru Gobind Singh organised the Sikhs into Khalsa or the pure ones.', '1693811711hall 1.jpeg', '1693811711hall 2.jpg', '1693811711hall 3.jpg', '2023-09-04 12:15:11', ''),
(4, 1, 'sheraz saqib', '232323', 'restuarent', '12223232', 'karachi', '$ 222', '222', 'Baisakhi is the major festival of Sikhs. For the Sikhs it is not only a festival of harvest but also marks the birth of Sikh brotherhood and Sikh unity. It was on this day in 1699 that the last Sikh Guru, Guru Gobind Singh organised the Sikhs into Khalsa or the pure ones.Baisakhi is the major festival of Sikhs. For the Sikhs it is not only a festival of harvest but also marks the birth of Sikh brotherhood and Sikh unity. It was on this day in 1699 that the last Sikh Guru, Guru Gobind Singh organised the Sikhs into Khalsa or the pure ones.', '1693811735hall 1.jpeg', '1693811735hall 2.jpg', '1693811735hall 3.jpg', '2023-09-04 12:15:35', ''),
(5, 1, 'sheraz saqib', 'this is a title ', 'hall', '12223232', 'karachi', '$ 500', '222', 'Baisakhi is the major festival of Sikhs. For the Sikhs it is not only a festival of harvest but also marks the birth of Sikh brotherhood and Sikh unity. It was on this day in 1699 that the last Sikh Guru, Guru Gobind Singh organised the Sikhs into Khalsa or the pure ones.', '1693811911hall 1.jpeg', '', '', '2023-09-04 12:18:31', 'verify'),
(6, 1, 'sheraz saqib', 'this is a title ', 'hall', '12223232', 'karachi', '$ 500', '222', 'Baisakhi is the major festival of Sikhs. For the Sikhs it is not only a festival of harvest but also marks the birth of Sikh brotherhood and Sikh unity. It was on this day in 1699 that the last Sikh Guru, Guru Gobind Singh organised the Sikhs into Khalsa or the pure ones.', '1693812242hall 1.jpeg', '1693812242hall 3.jpg', '', '2023-09-04 12:24:02', ''),
(7, 1, 'sheraz saqib', '2323', 'hall', '12223232', 'karachi', '$ 22', '32323', '$img_name_2 == \' || $img_name_3 == \'', 'hall 1.jpeg', '', '', '2023-09-04 12:37:03', ''),
(8, 1, 'sheraz saqib', '2323', 'hall', '12223232', 'karachi', '$ 22', '32323', '$img_name_2 == \' || $img_name_3 == \'', 'hall 3.jpg', '', '', '2023-09-04 12:37:14', 'verify'),
(9, 1, 'sheraz saqib', '323', 'hall', '12223232', 'karachi', '$ 3232', '323', '32323', 'hall 1.jpeg', '', '', '2023-09-04 12:39:30', ''),
(10, 2, 'hamza khan', 'this is post by hamza', 'restuarent', '54545465454', 'karachi', '$ 500', '520', 'this is post by hamza\r\n', 'hall-1  p-2.jpg', 'hall-1  p-1.jpg', 'hall 3.jpg', '2023-09-04 12:47:08', 'verify');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(222) NOT NULL,
  `user_position` int(11) NOT NULL COMMENT '0 is a simple user,1 is admin,2 is seller',
  `user_last_name` varchar(222) NOT NULL,
  `user_email` varchar(222) NOT NULL,
  `user_phone` varchar(222) NOT NULL,
  `user_pass` varchar(222) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  `user_create_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_position`, `user_last_name`, `user_email`, `user_phone`, `user_pass`, `user_image`, `user_create_time`) VALUES
(1, 'sheraz', 2, 'saqib', 'sheraz@gmail.com', '12223232', '$2y$10$hZ1DnmMUXG8xf2rsHrfzzuQcha7sNDZg5HNa89gLaAaUOBQDGoga.', '1693810734IMG_20230516_215751_903.jpg', '2023-09-04 11:58:54'),
(2, 'hamza', 0, 'khan', 'hamza@gmail.com', '54545465454', '$2y$10$oHs.xfeU0AA6qboDtKSN5ent5EUFd.pX/fRhIjR7lzSnld/Cvrbre', '1693813572boy.jpeg', '2023-09-04 12:46:12'),
(3, 'fdf', 0, 'sdsd', 'abdul@gmail.com', '232323', '$2y$10$zSN.SzfMW1TX3dAm8..ZJefJ2L2tQ1XRTbsMRTzIhA6s.UPlqH3zO', '1694241105boy.jpeg', '2023-09-09 11:31:45'),
(4, 'dsd', 2, 'sdsd', 'abc@gmail.com', '434343', '$2y$10$WJeotZs4dczQ/EkY.zDC8OauMftaBfIaD9HBr..trQS8V7YdN28ce', '1694241143boy.jpeg', '2023-09-09 11:32:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`regi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `regi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
