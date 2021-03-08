-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2020 at 01:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocate`
--

CREATE TABLE `advocate` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `barId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advocate`
--

INSERT INTO `advocate` (`id`, `userId`, `barId`) VALUES
(1, 30, '590'),
(2, 30, '590'),
(3, 30, '590'),
(4, 41, '123123123'),
(5, 42, '986754');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `CatStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `CatStatus`) VALUES
(3, 'Government', 1),
(4, 'Legal', 1),
(5, 'asdasda', 0),
(6, 'akjdjajsd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `popular` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `popular`) VALUES
(1, 'Delhi', 1),
(2, 'Lucknow', 1),
(5, 'aas', 0),
(6, 'Ghaziabad', 0),
(7, 'Noida', 0),
(8, 'shud', 1),
(9, 'sjhadhald', 0),
(10, 'adskj', 0),
(11, 'asdkj', 0),
(12, 'kjadj', 0),
(13, 'kdjjksjdk', 0),
(14, ',mdn', 0),
(15, 'skdfkjn', 0),
(16, 'sknnjkadnd', 0),
(17, 'sdkjkjdfn', 0),
(18, 'sdkjfjkdsfn', 0),
(19, 'sxkdfjkdsfn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `mobile`, `email`) VALUES
(1, ' asd4r353', ' + 01 234 567 88', ' info@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `about`, `copyright`) VALUES
(1, 'Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. ////////////////', 'E-Barister© 2020 Copyright: ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `created_at`, `category`) VALUES
(26, 'Legal 1', 1235, '2020-06-23 12:15:11', 4);

-- --------------------------------------------------------

--
-- Table structure for table `productDetail`
--

CREATE TABLE `productDetail` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `overview` text NOT NULL,
  `payment` text NOT NULL,
  `document` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productDetail`
--

INSERT INTO `productDetail` (`id`, `productId`, `overview`, `payment`, `document`, `status`) VALUES
(28, 26, '<p>over</p>', '<p>123123<br></p>', '<p>123123<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `image`, `name`, `caption`) VALUES
(1, 'https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg', 'Anna Aston', 'Neque cupiditate assumenda in\r\n            maiores repudiandae mollitia architecto.'),
(2, 'https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg', 'John Doe', 'Lorem ipsum dolor sit amet eos\r\n            adipisci, consectetur adipisicing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `email`, `password`, `role`, `created_at`, `status`, `name`) VALUES
(1, 'admin', '1', 'admin', 'admin', '2020-06-13 09:13:03', 1, 'admin'),
(2, 'in', '', 'as', 'user', '2020-06-13 10:34:41', 1, 'lalit saini'),
(5, 'admin1', 'admin@admin.in', '123', 'user', '2020-06-13 10:37:49', 1, 'lalit saini'),
(8, '123', 'principal@sis.com', '', 'user', '2020-06-18 10:12:01', 1, 'asd'),
(10, 'salamd', 'sa@sdc.com', '123', 'advocate', '2020-06-18 10:13:03', 1, 'Lalit'),
(23, '12346', '12345@1234.com', '123123', 'advocate', '2020-06-18 10:27:21', 1, 'lalit'),
(26, '3345678', '3455678@1224.com', '123', 'advocate', '2020-06-18 10:29:02', 1, '098'),
(28, '-09876', '009876@23412.com', '908765', 'advocate', '2020-06-18 10:30:07', 1, '09876'),
(30, '44567890', '43567890', '567890', 'advocate', '2020-06-18 10:30:48', 1, '0987'),
(41, '123123123', '123123123', '123123123', 'advocate', '2020-06-18 10:39:11', 1, 'lalit Saini'),
(42, '1929835', '87654', '098754', 'advocate', '2020-06-18 10:39:51', 1, 'it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocate`
--
ALTER TABLE `advocate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `productDetail`
--
ALTER TABLE `productDetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocate`
--
ALTER TABLE `advocate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `productDetail`
--
ALTER TABLE `productDetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advocate`
--
ALTER TABLE `advocate`
  ADD CONSTRAINT `advocate_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);

--
-- Constraints for table `productDetail`
--
ALTER TABLE `productDetail`
  ADD CONSTRAINT `productDetail_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`id`);

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
