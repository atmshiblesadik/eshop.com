-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 05:59 PM
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
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE `childrens` (
  `id` int(11) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mens`
--

CREATE TABLE `mens` (
  `id` int(11) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mens`
--

INSERT INTO `mens` (`id`, `pName`, `category`, `price`, `details`, `image`) VALUES
(1000, 'Avengers', 'tshirt', '799', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/menstshirt1556461929.jpg'),
(1001, 'Avengers', 'tshirt', '799', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/menstshirt1556461996.jpg'),
(1002, 'Avengers', 'tshirt', '799', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/menstshirt1556462037.jpeg'),
(1003, 'Avengers Thanos', 'tshirt', '1000', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/menstshirt1556462087.jpg'),
(1004, 'Easy Tshirt', 'tshirt', '500', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/menstshirt1556462135.jpg'),
(1005, 'Fashion Summer', 'tshirt', '440', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/menstshirt1556462192.jpg'),
(1006, 'Avengers Thor', 'tshirt', '799', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/menstshirt1556462229.jpg'),
(1007, 'Long Sleeve Shirt', 'shirt', '550', 'This shirt is comfortable and can worn for regular use. It is a perfect wear for men like you. You will love to wear this luxurious shirt just for its versatile usability and diversified fashion sense. It is generally made of a light, great quality cotton fabrics, and are easy to clean. It is perfect to wear with jeans and gabardine pant. Long sleeves design with a regular fit for men. This shirt is very versatile because it is useful on formal as well as casual occasion. This shirt is designed to be comfortable and durable.', 'img/mensshirt1556462693.jpg'),
(1008, 'Long Sleeve Shirt', 'shirt', '500', 'This shirt is comfortable and can worn for regular use. It is a perfect wear for men like you. You will love to wear this luxurious shirt just for its versatile usability and diversified fashion sense. It is generally made of a light, great quality cotton fabrics, and are easy to clean. It is perfect to wear with jeans and gabardine pant. Long sleeves design with a regular fit for men. This shirt is very versatile because it is useful on formal as well as casual occasion. This shirt is designed to be comfortable and durable.', 'img/mensshirt1556462717.jpg'),
(1009, 'Long Sleeve Shirt', 'shirt', '550', 'This shirt is comfortable and can worn for regular use. It is a perfect wear for men like you. You will love to wear this luxurious shirt just for its versatile usability and diversified fashion sense. It is generally made of a light, great quality cotton fabrics, and are easy to clean. It is perfect to wear with jeans and gabardine pant. Long sleeves design with a regular fit for men. This shirt is very versatile because it is useful on formal as well as casual occasion. This shirt is designed to be comfortable and durable.', 'img/mensshirt1556462757.jpg'),
(1010, 'Long Sleeve Shirt', 'shirt', '799', 'This shirt is comfortable and can worn for regular use. It is a perfect wear for men like you. You will love to wear this luxurious shirt just for its versatile usability and diversified fashion sense. It is generally made of a light, great quality cotton fabrics, and are easy to clean. It is perfect to wear with jeans and gabardine pant. Long sleeves design with a regular fit for men. This shirt is very versatile because it is useful on formal as well as casual occasion. This shirt is designed to be comfortable and durable.', 'img/mensshirt1556462777.jpg'),
(1011, 'Long Sleeve Shirt', 'shirt', '440', 'This shirt is comfortable and can worn for regular use. It is a perfect wear for men like you. You will love to wear this luxurious shirt just for its versatile usability and diversified fashion sense. It is generally made of a light, great quality cotton fabrics, and are easy to clean. It is perfect to wear with jeans and gabardine pant. Long sleeves design with a regular fit for men. This shirt is very versatile because it is useful on formal as well as casual occasion. This shirt is designed to be comfortable and durable.', 'img/mensshirt1556462816.jpg'),
(1012, 'Smart Shirt', 'shirt', '440', 'The Brand, Kanon, offers a wide selection of products in Bangladesh with a promise of fast, safe and easy online shopping. The brand comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent for achieving higher customer satisfaction. ', 'img/mensshirt1556462846.jpg'),
(1013, 'Denim Shirt', 'shirt', '550', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/mensshirt1556462875.jpg'),
(1014, 'Denim Jeans', 'pants', '799', 'These are high quality denim jeans. There is a mix of polyesters in the jean fabric, so there is some shine to these. Not bad, just know that it is not 100% jean. The pads are not cheap foam/rubbery stuff like Bilt or J. Rocket. The knee pads are multi-adjustable, but the hip pads are not.', 'img/menspants1556463291.jpg'),
(1015, 'Denim Jeans', 'pants', '1099', 'Jeans are pants made from denim or dungaree cloth. Denim is highly durable, and that is why he was used by people that needed clothes that would last long. Men look very gorgeous in colorful Pant, and so they love to wear and have luxurious and colorful pant for different social and cultural functions.', 'img/menspants1556463319.jpg'),
(1016, 'Denim Jeans', 'pants', '799', 'Jeans are pants made from denim or dungaree cloth. Denim is highly durable, and that is why he was used by people that needed clothes that would last long. Men look very gorgeous in colorful Pant, and so they love to wear and have luxurious and colorful pant for different social and cultural functions.', 'img/menspants1556463344.jpg'),
(1017, 'Cargo pants', 'pants', '550', 'The Brand, Kanon, offers a wide selection of products in Bangladesh with a promise of fast, safe and easy online shopping. The brand comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent for achieving higher customer satisfaction. ', 'img/menspants1556463383.jpg'),
(1018, 'Long Pants', 'pants', '799', 'The Brand, Kanon, offers a wide selection of products in Bangladesh with a promise of fast, safe and easy online shopping. The brand comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent for achieving higher customer satisfaction. ', 'img/menspants1556463426.jpg'),
(1019, 'Casual Pants', 'pants', '440', 'The Brand, Kanon, offers a wide selection of products in Bangladesh with a promise of fast, safe and easy online shopping. The brand comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent for achieving higher customer satisfaction. ', 'img/menspants1556463520.jpg'),
(1020, 'G-6 Jackets', 'jackets', '1200', 'A jacket is a mid-stomachâ€“length garment for the upper body. A jacket typically has sleeves, and fastens in the front or slightly the side. A jacket is generally lighter, tighter-fitting, and less insulating than a coat, which is outerwear. Some jackets are fashionable, while others serve as protective clothing.', 'img/mensjackets1556463860.jpg'),
(1021, 'Denim Jackets', 'jackets', '550', 'A jacket is a mid-stomachâ€“length garment for the upper body. A jacket typically has sleeves, and fastens in the front or slightly the side. A jacket is generally lighter, tighter-fitting, and less insulating than a coat, which is outerwear. Some jackets are fashionable, while others serve as protective clothing.', 'img/mensjackets1556463920.jpg'),
(1022, 'G-6 Jackets', 'jackets', '1299', 'A jacket is a mid-stomachâ€“length garment for the upper body. A jacket typically has sleeves, and fastens in the front or slightly the side. A jacket is generally lighter, tighter-fitting, and less insulating than a coat, which is outerwear. Some jackets are fashionable, while others serve as protective clothing.', 'img/mensjackets1556463951.jpg'),
(1023, 'G-6 Jackets', 'jackets', '1400', 'A jacket is a mid-stomachâ€“length garment for the upper body. A jacket typically has sleeves, and fastens in the front or slightly the side. A jacket is generally lighter, tighter-fitting, and less insulating than a coat, which is outerwear. Some jackets are fashionable, while others serve as protective clothing.', 'img/mensjackets1556463977.jpg'),
(1024, 'Denim Jackets', 'jackets', '1200', 'A jacket is a mid-stomachâ€“length garment for the upper body. A jacket typically has sleeves, and fastens in the front or slightly the side. A jacket is generally lighter, tighter-fitting, and less insulating than a coat, which is outerwear. Some jackets are fashionable, while others serve as protective clothing.', 'img/mensjackets1556464006.jpg'),
(1026, 'Colors', 'traditional', '799', 'Aarong products are handcrafted and minor differences can occur from the photograph. Variations within the same design can be observed as well.', 'img/menstraditional1556464680.jpeg'),
(1027, 'Aarong Panjabi ', 'traditional', '1200', 'Aarong products are handcrafted and minor differences can occur from the photograph. Variations within the same design can be observed as well.', 'img/menstraditional1556464717.jpg'),
(1028, 'Aarong Panjabi ', 'traditional', '1100', 'Aarong products are handcrafted and minor differences can occur from the photograph. Variations within the same design can be observed as well.', 'img/menstraditional1556464735.jpeg'),
(1029, 'Aarong Panjabi ', 'traditional', '1200', 'Aarong products are handcrafted and minor differences can occur from the photograph. Variations within the same design can be observed as well.', 'img/menstraditional1556464767.jpeg'),
(1030, 'LL Stylish', 'traditional', '1100', 'Aarong products are handcrafted and minor differences can occur from the photograph. Variations within the same design can be observed as well.', 'img/menstraditional1556464799.jpeg'),
(1031, 'Aarong Panjabi ', 'traditional', '1299', 'Aarong products are handcrafted and minor differences can occur from the photograph. Variations within the same design can be observed as well.', 'img/menstraditional1556464821.jpg'),
(1032, 'LL Stylish', 'traditional', '1200', 'Aarong products are handcrafted and minor differences can occur from the photograph. Variations within the same design can be observed as well.', 'img/menstraditional1556464847.jpg'),
(1033, 'Stylish Blazer', 'blazers', '5000', 'Navy blue woven casual blazer, has a notched lapel, single-breasted with double button closures, long sleeves, three pockets, and two in-built pockets, a double vented back hem', 'img/mensblazers1556465272.jpg'),
(1034, 'Myntra Blazer', 'blazers', '2200', 'Navy blue woven casual blazer, has a notched lapel, single-breasted with double button closures, long sleeves, three pockets, and two in-built pockets, a double vented back hem', 'img/mensblazers1556465363.jpg'),
(1035, 'Myntra Blazer', 'blazers', '1200', 'Navy blue woven casual blazer, has a notched lapel, single-breasted with double button closures, long sleeves, three pockets, and two in-built pockets, a double vented back hem', 'img/mensblazers1556465403.jpeg'),
(1036, 'Denim Blazer', 'blazers', '1260', 'Blazers made from denim or dungaree cloth. Denim is highly durable, and that is why he was used by people that needed clothes that would last long. Men look very gorgeous in colorful Pant, and so they love to wear and have luxurious and colorful pant for different social and cultural functions.', 'img/mensblazers1556465450.jpg'),
(1037, 'Myntra Blazer', 'blazers', '1200', 'The Brand, Kanon, offers a wide selection of products in Bangladesh with a promise of fast, safe and easy online shopping. The brand comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent for achieving higher customer satisfaction. ', 'img/mensblazers1556465476.jpg'),
(1039, 'Long Sleeve Blazer', 'blazers', '799', 'Aarong products are handcrafted and minor differences can occur from the photograph. Variations within the same design can be observed as well.', 'img/mensblazers1556465575.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` int(11) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `womens`
--

CREATE TABLE `womens` (
  `id` int(11) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womens`
--

INSERT INTO `womens` (`id`, `pName`, `category`, `price`, `details`, `image`) VALUES
(1, 'Avengers', 'tshirt', '799', '100% Cotton You will love these awesome Superhero Tee shirt ! Perfect for any fan of Marvel. Great quality print that is sure to not crack after washing. Officially liscened product Screenprinted graphic, 100% cotton Machine Washable and Dryer Safe', 'img/womens1556461571.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mens`
--
ALTER TABLE `mens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womens`
--
ALTER TABLE `womens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4000;
--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3000;
--
-- AUTO_INCREMENT for table `mens`
--
ALTER TABLE `mens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1040;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000;
--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6000;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `womens`
--
ALTER TABLE `womens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
