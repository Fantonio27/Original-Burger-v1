-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 03:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `original_burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `firstname`, `lastname`, `birthdate`, `email`, `address`, `password`, `date_created`) VALUES
(4, ' Aling', 'Tessy', '2002-05-01', 'miguelbautista005@gmail.com', 'Navotas city', '25d55ad283aa400af464c76d713c07ad', '0000-00-00'),
(1, 'francis', 'antonio', '0000-00-00', 'Admin1100', 'Quezon city', 'Admin1100', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `NO` int(11) NOT NULL,
  `PRODUCT_NO` varchar(200) NOT NULL,
  `PRODUCT_NAME` varchar(200) NOT NULL,
  `QUANTITY` int(50) NOT NULL,
  `UNIT_PRICE` double NOT NULL,
  `TOTAL` double NOT NULL,
  `IMAGE` varchar(200) NOT NULL,
  `USER_ID` int(20) NOT NULL,
  `ORDER_NO` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`NO`, `PRODUCT_NO`, `PRODUCT_NAME`, `QUANTITY`, `UNIT_PRICE`, `TOTAL`, `IMAGE`, `USER_ID`, `ORDER_NO`) VALUES
(68, '', 'The Smokin Patty', 1, 120, 120, 'pictures/burger1.png', 19, 20),
(69, '', 'Gentle Burger', 1, 250, 250, 'pictures/b1.png', 19, 20),
(70, '', 'Cannon Burger', 1, 300, 300, 'pictures/burger5.png', 19, 20),
(104, '', 'Zen Burger', 3, 90, 270, 'pictures/burger10.png', 10, 29),
(105, '', 'Cannon Burger', 1, 300, 300, 'pictures/burger5.png', 10, 29),
(121, '', 'The Smokin Patty', 1, 120, 120, 'pictures/burger1.png', 26, 42),
(122, '', 'The Smokin Patty', 2, 120, 240, 'pictures/burger1.png', 27, 40),
(123, '', 'Gentle Burger', 2, 250, 500, 'pictures/b1.png', 27, 40),
(124, '', 'Sassy Burger', 1, 100, 100, 'pictures/burger4.png', 27, 40),
(125, '', 'Cannon Burger', 2, 300, 600, 'pictures/burger5.png', 27, 40),
(126, '', 'Burma Burger', 1, 80, 80, 'pictures/burger2.png', 27, 40),
(127, '', 'Burger Quake', 2, 150, 300, 'pictures/burger8.png', 27, 40),
(128, '', 'Burger Buzz', 1, 220, 220, 'pictures/burger6(1).png', 27, 40),
(129, '', 'Patriot Burger', 1, 100, 100, 'pictures/burger9.png', 27, 40),
(130, '', 'Burma Burger', 10, 80, 800, 'Image/burger20.png', 26, 42),
(131, '', 'The Smokin Patty', 1, 120, 120, 'pictures/burger1.png', 26, 42),
(132, '', 'The Smokin Patty', 1, 120, 120, 'pictures/burger1.png', 26, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ORDER_NO` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `PHONE_NO` int(50) NOT NULL,
  `EMAIL_ADDRESS` varchar(200) NOT NULL,
  `DELIVERY_DATE` varchar(200) NOT NULL,
  `DELIVERY_TIME` varchar(200) NOT NULL,
  `TOTAL` double NOT NULL,
  `USER_ID` int(50) NOT NULL,
  `STATUS` varchar(200) NOT NULL,
  `DATE_ORDER` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ORDER_NO`, `NAME`, `ADDRESS`, `PHONE_NO`, `EMAIL_ADDRESS`, `DELIVERY_DATE`, `DELIVERY_TIME`, `TOTAL`, `USER_ID`, `STATUS`, `DATE_ORDER`) VALUES
(20, 'Francis Antonio', 'Seminary Road , 1106', 9332442, 'francislouie.antonio@gmail.com', '2022-07-14', '18:29:57', 670, 19, 'Pending', ''),
(29, 'Francis Antonio', 'Seminary Road , 1106', 9332442, 'francislouie.antonio@gmail.com', '2022-07-15', '8:14:3', 550, 10, 'Pending', '2022-07-17'),
(30, 'justin louie', 'MANILA CITY', 2147483647, 'antonio.francislouie@ue.edu.ph', '2022-07-27', '12:09', 620, 10, 'Pending', '2022-07-17'),
(38, 'Francis Antonio', 'bahay toro', 2147483647, 'francis.antonio0927@gmail.com', '2022-07-18', '8:20:25', 370, 26, 'Pending', '2022-07-18'),
(39, 'Francis Antonio', 'bahay toro', 2147483647, 'francis.antonio0927@gmail.com', '2022-07-18', '8:37:55', 120, 26, 'Pending', '2022-07-18'),
(40, 'Francis Antonio', 'Seminary Road', 2147483647, 'antonio.francislouie@ue.edu.ph', '2022-07-18', '9:42:18', 1820, 27, 'Pending', '2022-07-18'),
(41, 'Francis Antonio', 'Seminary Road', 2147483647, 'antonio.francislouie@ue.edu.ph', '2022-07-18', '9:45:4', 320, 27, 'Pending', '2022-07-18'),
(42, 'Francis Antonio', 'bahay toro', 2147483647, 'francis.antonio0927@gmail.com', '2022-07-18', '9:51:43', 800, 26, 'Pending', '2022-07-18'),
(43, 'Francis Antonio', 'bahay toro', 2147483647, 'francis.antonio0927@gmail.com', '2022-07-18', '20:23:57', 120, 26, 'Pending', '2022-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(200) NOT NULL,
  `availability` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `availability`) VALUES
(1, 'The Smokin Patty', 120.00, 'pictures/burger1.png', 'Features ¼ lb*. of flame-grilled beef with avocado spread, crispy bacon, seasoned tortilla strips, American cheese, crisp lettuce, sliced white onions, juicy tomatoes, and creamy spicy sauce on a toas', 'YES'),
(2, 'Gentle Burger', 250.00, 'pictures/b1.png', 'Features ¼ lb*. of flame-grilled beef with avocado spread, crispy bacon, seasoned tortilla strips, American cheese, crisp lettuce, sliced white onions, juicy tomatoes, and creamy spicy sauce on a toas', 'YES'),
(3, 'Patty Bins Burger', 200.00, 'pictures/burger3.png', 'Features a flame-grilled Impossible™ patty made from plants with avocado spread, crispy bacon, seasoned tortilla strips, American cheese, crisp lettuce, sliced white onions, juicy tomatoes, and creamy', 'NO'),
(4, 'Sassy Burger', 100.00, 'pictures/burger4.png', 'Features a flame-grilled patty* made from plants topped with melty American cheese, sliced white onions, crunchy pickles, ketchup, and mustard all on a toasted sesame seed bun.', 'YES'),
(5, 'Cannon Burger', 300.00, 'pictures/burger5.png', 'Features a flame-grilled beef patty with avocado spread, crispy bacon, seasoned tortilla strips, American cheese, crisp lettuce, sliced white onions, juicy tomatoes, and creamy spicy sauce on a toaste', 'YES'),
(6, 'Burma Burger', 80.00, 'pictures/burger2.png', 'Our Burma Burger is a ¼ lb* of savory flame-grilled beef topped with juicy tomatoes, fresh lettuce, creamy mayonnaise, ketchup, crunchy pickles, and sliced white onions on a soft sesame seed bun.', 'YES'),
(8, 'Burger Quake', 150.00, 'pictures/burger8.png', 'You can’t go wrong with our Bacon Cheeseburger, a signature flame-grilled beef patty topped with smoked bacon and a layer of melted American cheese, crinkle cut pickles, yellow mustard, and ketchup on', 'YES'),
(9, ' Patriot Burger ', 120.00, '', 'Our Hamburger is a signature flame-grilled beef patty topped with a simple layer of crinkle cut pickles, yellow mustard, and ketchup on a toasted sesame seed bun.', 'NO'),
(10, 'Zen Burger', 90.00, 'pictures/burger10.png', 'Our new Rodeo Burger features a savory flame-grilled beef patty topped with sweet and smoky BBQ sauce and crispy, golden onion rings served on a toasted, sesame seed bun.', 'YES'),
(11, 'Burger Buzz', 220.00, 'pictures/burger6(1).png', 'Make room for our Bacon Double Cheeseburger, two signature flame-grilled beef patties topped with smoked bacon and a simple layer of melted American cheese, crinkle cut pickles, yellow mustard, and ke', 'YES'),
(21, 'Burma Burger', 80.00, 'Image/burger20.png', 'Our Burma Burger is a ¼ lb* of savory flame-grilled beef topped with juicy', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(200) NOT NULL,
  `LAST_NAME` varchar(200) NOT NULL,
  `AGE` int(50) NOT NULL,
  `BIRTHDATE` varchar(200) NOT NULL,
  `GENDER` varchar(200) NOT NULL,
  `EMAIL_ADDRESS` varchar(200) NOT NULL,
  `PHONE_NO` varchar(50) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `USERNAME` varchar(200) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `CODE` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `AGE`, `BIRTHDATE`, `GENDER`, `EMAIL_ADDRESS`, `PHONE_NO`, `ADDRESS`, `USERNAME`, `PASSWORD`, `CODE`) VALUES
(10, ' Francis louie', 'Antonio', 20, '2002-03-26', 'Male', 'francislouie.antonio@gmail.com', '09666376662', 'Quezon City', 'F_antonio0927', 'Admin0927', 577303),
(26, 'Francis', 'Antonio', 18, '2003-12-16', 'Male', 'francis.antonio0927@gmail.com', '09666376662', 'bahay toro', 'F_antonio27', 'Admin0927', 521031),
(27, 'Francis', 'Antonio', 18, '2003-12-17', 'Male', 'antonio.francislouie@ue.edu.ph', '09666376662', 'Seminary Road', 'Antonio0927', 'password', 580490);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDER_NO`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ORDER_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
