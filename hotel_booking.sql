-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 06:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `sr_no` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `total_pay` int(11) NOT NULL,
  `room_no` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`sr_no`, `booking_id`, `room_name`, `price`, `total_pay`, `room_no`, `user_name`, `phonenum`, `address`) VALUES
(28, 42, 'Executive room', 90000000, 90000000, NULL, 'Tran Minh Chinh', '0123456789', 'tp Hồ Chí Minh'),
(29, 43, 'VIP room', 100000000, 100000000, 'a15', 'Tran Minh Chinh', '0123456789', 'tp Hồ Chí Minh'),
(30, 44, 'Executive room', 90000000, 90000000, 'a1', 'Tran Minh Chinh', '0123456789', 'tp Hồ Chí Minh'),
(31, 45, 'VIP room', 100000000, 200000000, NULL, 'Tran Minh Chinh', '0123456789', 'tp Hồ Chí Minh'),
(32, 46, 'VIP room', 100000000, 100000000, NULL, 'Tran Minh Chinh', '0123456789', 'tp Hồ Chí Minh'),
(33, 47, 'VIP room', 100000000, 200000000, NULL, 'Tran Minh Chinh', '0123456789', 'tp Hồ Chí Minh'),
(34, 48, 'VIP room', 100000000, 200000000, NULL, 'Tran Minh Chinh', '0123456789', 'tp Hồ Chí Minh'),
(35, 49, 'Executive room', 90000000, 270000000, NULL, 'Bui Thi Huong', '0986313977', 'tp Hồ Chí Minh'),
(36, 50, 'Double room', 3333333, 3333333, 'P701', 'Bui Thi Huong', '0986313977', 'tp Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `booking_order`
--

CREATE TABLE `booking_order` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `arrival` int(11) NOT NULL DEFAULT 0,
  `booking_status` varchar(100) NOT NULL DEFAULT 'booked',
  `order_id` varchar(150) NOT NULL,
  `datentime` datetime NOT NULL DEFAULT current_timestamp(),
  `refund` int(11) DEFAULT NULL,
  `rate_review` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_order`
--

INSERT INTO `booking_order` (`booking_id`, `room_id`, `user_id`, `check_in`, `check_out`, `arrival`, `booking_status`, `order_id`, `datentime`, `refund`, `rate_review`) VALUES
(42, 26, 11, '2023-12-28', '2023-12-29', 0, 'cancelled', 'ORD_1112433', '2023-12-26 23:23:36', 1, NULL),
(43, 25, 11, '2023-12-27', '2023-12-28', 1, 'booked', 'ORD_1157053', '2023-12-26 23:26:22', NULL, 1),
(44, 26, 11, '2023-12-29', '2023-12-30', 1, 'booked', 'ORD_1117127', '2023-12-26 23:30:12', NULL, 1),
(45, 25, 11, '2023-12-28', '2023-12-30', 0, 'booked', 'ORD_1188262', '2023-12-26 23:33:30', NULL, NULL),
(46, 25, 11, '2023-12-29', '2023-12-30', 0, 'booked', 'ORD_1141893', '2023-12-26 23:33:43', NULL, NULL),
(47, 25, 11, '2023-12-28', '2023-12-30', 0, 'booked', 'ORD_1112426', '2023-12-26 23:34:14', NULL, NULL),
(48, 25, 11, '2023-12-28', '2023-12-30', 0, 'booked', 'ORD_1138689', '2023-07-04 23:34:24', NULL, NULL),
(49, 26, 8, '2023-12-27', '2023-12-30', 0, 'cancelled', 'ORD_846672', '2023-07-11 00:05:07', 1, NULL),
(50, 22, 8, '2023-12-28', '2023-12-29', 1, 'booked', 'ORD_842591', '2023-12-27 00:09:56', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`sr_no`, `image`) VALUES
(1, 'IMG78032.png'),
(3, 'IMG25288.png'),
(4, 'IMG11909.png'),
(5, 'IMG23830.png'),
(6, 'IMG95956.png'),
(7, 'IMG72851.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gmap` varchar(255) NOT NULL,
  `pn1` varchar(10) NOT NULL,
  `pn2` varchar(10) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `git` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `fb`, `git`, `insta`, `iframe`) VALUES
(1, 'University of Infodfdfrmation Technology', 'HCM', '986313973', '1234567892', 'facedfdfbook.com', 'gitsdsdsdhdfdfub.com', 'uiyiyui', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62691.69982340449!2d106.803054!3d10.870009!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf:0xafa66f9c8be3c91!2sUniversity of Information Technology - VNUHCM!5e0!3m2!1sen!2sus!4v1700055158674!5m2!1sen!2sus');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `name`, `description`) VALUES
(17, 'IMG_45415.svg', 'Tivi', 'The TV is 50 inches long and 30 inches wide'),
(18, 'IMG_41790.svg', 'Parking', 'Parkiing here'),
(21, 'IMG_52823.svg', 'Tea', 'Tea'),
(22, 'IMG_90095.svg', 'Wifi', 'Wifi'),
(23, 'IMG_84411.svg', 'Air-conditioner', 'Air-conditioner'),
(24, 'IMG_24073.svg', 'Star', 'Star'),
(26, 'IMG_26427.svg', 'Geyser', 'Geyser is a natural wonder that captivates visitors with its breathtaking displays of water and stea'),
(27, 'IMG_45422.svg', 'Television', 'Television'),
(28, 'IMG_89014.svg', 'Pool', 'Pool'),
(29, 'IMG_81743.svg', 'Spa', 'With a team of professional and experienced customer care specialists, we provide a variety of spa s'),
(30, 'IMG_50523.svg', 'Room heater', 'Our heater is designed to deliver consistent and adjustable heat, allowing you to create a cozy envi');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(9, 'bedroom'),
(10, 'bancony'),
(11, 'kitchen'),
(12, 'bool'),
(13, 'Parking');

-- --------------------------------------------------------

--
-- Table structure for table `rating_review`
--

CREATE TABLE `rating_review` (
  `sr_no` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(200) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0,
  `datentime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating_review`
--

INSERT INTO `rating_review` (`sr_no`, `booking_id`, `room_id`, `user_id`, `rating`, `review`, `seen`, `datentime`) VALUES
(10, 43, 25, 11, 5, 'Phòng rất sạch sẽ, quá tuyệt vời', 1, '2023-12-26 23:29:37'),
(11, 44, 26, 11, 1, 'Không hài lòng thái độ nhân viên', 1, '2023-12-26 23:31:45'),
(12, 50, 22, 8, 4, 'Phong ok', 0, '2023-12-27 00:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `area` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `removed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `area`, `price`, `quantity`, `adult`, `children`, `description`, `status`, `removed`) VALUES
(21, 'Single room', 3, 3333333, 3, 3, 3, 'Our simple rooms are the perfect choice for solo travelers or couples looking for a comfortable and affordable stay. Each room is spacious and bright, with a queen-size bed, a desk, a chair, a TV, and a private bathroom. The rooms are also equipped with f', 1, 0),
(22, 'Double room', 3, 3333333, 3, 3, 3, 'A room suitable for two people, equipped with a double bed or twin beds and basic facilities.', 1, 0),
(23, 'Family room', 400, 4444444, 4, 4, 4, 'A spacious room suitable for families, offering multiple beds or a combination of double and single beds.', 1, 0),
(24, 'Deluxe room', 5, 300000, 5, 2, 2, 'A high-quality and well-appointed room with additional amenities and luxurious features for enhanced comfort.', 1, 0),
(25, 'VIP room', 4, 100000000, 4, 4, 2, 'An exclusive and luxurious room offering top-tier amenities, personalized services, and special privileges.\r\nExperience a comfortable stay within a relaxed setting at our Normal Room, where affordability meets comfort without compromising on quality and c', 1, 0),
(26, 'Executive room', 4, 90000000, 5, 2, 2, 'A room designed for business travelers, often featuring a dedicated workspace and access to executive lounge facilities.\r\nExperience a comfortable stay within a relaxed setting at our Normal Room, where affordability meets comfort without compromising on ', 1, 0),
(27, 'Normal', 10, 2000, 20, 2, 2, 'The Normal Room is a comfortable and affordable accommodation option within our hotel. Designed with simplicity and functionality in mind, it offers a cozy retreat for guests seeking a pleasant stay at a reasonable price.\r\n\r\nUpon entering the Normal Room,', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_facilities`
--

CREATE TABLE `room_facilities` (
  `sr_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `facilities_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_facilities`
--

INSERT INTO `room_facilities` (`sr_no`, `room_id`, `facilities_id`) VALUES
(145, 21, 22),
(146, 22, 17),
(147, 22, 18),
(148, 22, 23),
(149, 23, 18),
(150, 23, 22),
(151, 23, 23),
(152, 23, 27),
(153, 24, 17),
(154, 24, 18),
(155, 24, 21),
(156, 24, 22),
(157, 24, 23),
(158, 24, 24),
(159, 24, 27),
(160, 24, 28),
(197, 27, 17),
(198, 27, 18),
(199, 27, 21),
(200, 27, 22),
(201, 27, 23),
(202, 27, 27),
(203, 25, 17),
(204, 25, 18),
(205, 25, 21),
(206, 25, 22),
(207, 25, 23),
(208, 25, 24),
(209, 25, 26),
(210, 25, 27),
(211, 25, 28),
(212, 25, 29),
(213, 25, 30),
(214, 26, 17),
(215, 26, 18),
(216, 26, 21),
(217, 26, 22),
(218, 26, 23),
(219, 26, 24),
(220, 26, 26),
(221, 26, 27);

-- --------------------------------------------------------

--
-- Table structure for table `room_features`
--

CREATE TABLE `room_features` (
  `sr_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `features_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_features`
--

INSERT INTO `room_features` (`sr_no`, `room_id`, `features_id`) VALUES
(73, 21, 9),
(74, 21, 13),
(75, 22, 9),
(76, 22, 10),
(77, 23, 9),
(78, 23, 10),
(79, 23, 13),
(80, 24, 9),
(81, 24, 10),
(82, 24, 13),
(103, 27, 9),
(104, 27, 10),
(105, 27, 11),
(106, 27, 12),
(107, 27, 13),
(108, 25, 9),
(109, 25, 10),
(110, 25, 11),
(111, 25, 12),
(112, 25, 13),
(113, 26, 9),
(114, 26, 10),
(115, 26, 11),
(116, 26, 12),
(117, 26, 13);

-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `sr_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `thumb` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_images`
--

INSERT INTO `room_images` (`sr_no`, `room_id`, `image`, `thumb`) VALUES
(2, 21, 'IMG14903.png', 0),
(3, 22, 'IMG54359.png', 0),
(4, 21, 'IMG52757.png', 1),
(5, 22, 'IMG80611.png', 1),
(6, 22, 'IMG74138.png', 0),
(7, 21, 'IMG86623.png', 0),
(8, 22, 'IMG52459.png', 0),
(9, 23, 'IMG16310.png', 1),
(10, 23, 'IMG24840.png', 0),
(11, 23, 'IMG86652.png', 0),
(12, 24, 'IMG16247.png', 0),
(13, 24, 'IMG45431.png', 1),
(14, 24, 'IMG51845.png', 0),
(15, 25, 'IMG88211.png', 1),
(16, 25, 'IMG73646.png', 0),
(17, 25, 'IMG12486.png', 0),
(18, 26, 'IMG11601.png', 0),
(19, 26, 'IMG37131.png', 0),
(20, 26, 'IMG81141.png', 1),
(21, 27, 'IMG41356.png', 0),
(22, 27, 'IMG91251.png', 0),
(23, 27, 'IMG33528.png', 1),
(24, 24, 'IMG24209.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(150) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'Paradise Hotel', '🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴🌴', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`sr_no`, `name`, `picture`) VALUES
(18, 'dsd', 'IMG26487.png'),
(19, 'dsd', 'IMG57751.png'),
(20, 'vcvc', 'IMG78314.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_cred`
--

CREATE TABLE `user_cred` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `profile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `datentime` datetime NOT NULL DEFAULT current_timestamp(),
  `is_verified` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_cred`
--

INSERT INTO `user_cred` (`id`, `name`, `email`, `phonenum`, `dob`, `profile`, `address`, `password`, `datentime`, `is_verified`) VALUES
(8, 'Bui Thi Huong', '21522130@gm.uit.edu.vn', '0986313977', '2023-12-01', 'IMG_11712.jpeg', 'tp Hồ Chí Minh', '1', '2023-12-08 19:12:06', 1),
(10, 'Bui Thi Huong', 'abc@gm.uit.edu.vn', '1234567890', '2023-12-04', 'IMG_47849.jpeg', 'tp Hồ Chí Minh', '1', '2023-12-10 11:47:40', 1),
(11, 'Tran Minh Chinh', '21521066@gm.uit.edu.vn', '0123456789', '2023-11-29', 'IMG_97130.jpeg', 'tp Hồ Chí Minh', '2', '2023-12-10 12:31:13', 1),
(12, 'Minh', '21521111@gm.uit.edu.vn', '32323232', '2023-11-30', 'IMG_91270.jpeg', '3232', '1', '2023-12-10 14:13:33', 0),
(13, 'Le Thi Kieu', '21522268@gm.uit.edu.vn', '0989666666', '2023-12-01', 'IMG_69106.jpeg', 'tp Hồ Chí Minh', '1', '2023-06-06 23:07:27', 1),
(14, 'Duong Nhat Minh', '20522130@gm.uit.edu.vn', '0986313911', '2023-11-30', 'IMG_84548.jpeg', 'tp Hồ Chí Minh', '1', '2023-12-10 23:08:42', 1),
(15, 'test', 'test@gmail.com', '55454545', '2023-12-01', 'IMG_53105.jpeg', 'tp Hồ Chí Minh', '1', '2023-07-12 23:09:24', 0),
(18, 'Nhat Minh', 'nhatminh@gmail.com', '07777777777', '2023-11-29', 'IMG_50583.jpeg', 'tp Hồ Chí Minh', '1', '2023-12-19 21:58:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `datentime` datetime NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_review`
--
ALTER TABLE `rating_review`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `facilities id` (`facilities_id`),
  ADD KEY `room id` (`room_id`);

--
-- Indexes for table `room_features`
--
ALTER TABLE `room_features`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `rm id` (`room_id`),
  ADD KEY `features id` (`features_id`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_cred`
--
ALTER TABLE `user_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `booking_order`
--
ALTER TABLE `booking_order`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rating_review`
--
ALTER TABLE `rating_review`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `room_facilities`
--
ALTER TABLE `room_facilities`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `room_features`
--
ALTER TABLE `room_features`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_cred`
--
ALTER TABLE `user_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_order` (`booking_id`);

--
-- Constraints for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD CONSTRAINT `booking_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_cred` (`id`),
  ADD CONSTRAINT `booking_order_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `rating_review`
--
ALTER TABLE `rating_review`
  ADD CONSTRAINT `rating_review_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_order` (`booking_id`),
  ADD CONSTRAINT `rating_review_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `rating_review_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user_cred` (`id`);

--
-- Constraints for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD CONSTRAINT `facilities id` FOREIGN KEY (`facilities_id`) REFERENCES `facilities` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `room id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `room_features`
--
ALTER TABLE `room_features`
  ADD CONSTRAINT `features id` FOREIGN KEY (`features_id`) REFERENCES `features` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `rm id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
