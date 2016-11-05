-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 07:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `property_mgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `about` text NOT NULL,
  `history` text NOT NULL,
  `name` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `img` varchar(45) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `vision`, `mission`, `about`, `history`, `name`, `position`, `img`) VALUES
(1, '<b><i>"Improve through a devoted service</i></b>"<br>', '<b><i>"Provide a devoted service to the customers”</i></b><br>', 'Now a third generation business, it has always maintained its tradition \r\nfor quality while modernization of its infrastructure has gradually and \r\ncarefully taken place . The New Monis Bakery thus continues the ritual \r\nof baking the crispiest of oven fresh Bread but also offering you \r\ndelectable Cakes, scrumptious Pastries, Delicious Sweet meats and over \r\none hundred other Delicacies. These products are all prepared in a \r\nsterile and hygienic environment by trained bakery staff under strict \r\nsupervision to ensure that all cooked goods are fresh and of the finest \r\nquality. As in the past, The New Monis Bakery refuses to compromise \r\nproduct quality for price. All raw materials are specially selected and \r\nmany are manufactured strictly to our own specifications. The New Monis \r\nBakery follows both national and international trends and translates its\r\n products to be the very best in flavor and taste and continues to give \r\nits customers a high quality product, which has been enjoyed by many for\r\n decades. The company was first started in 1896 with Mr. Monis Fernando \r\nbeing the honorary founder of the company. The year 1985 marks a mile \r\nstone in the history of the company where it was first registered as a \r\ncompany under the name of "Monis Bakery". This was executed under the \r\nguidance of the owner of that time, Mr. B. Vimalasena Fernando.<br>', '<b><i>As in the past, The New Monis Bakery refuses to compromise product \r\nquality for price. All raw materials are specially selected and many are\r\n manufactured strictly to our own specifications. The New Monis Bakery \r\nfollows both national and international trends and translates its \r\nproducts to be the very best in flavor and taste and continues to give \r\nits customers a high quality product, which has been enjoyed by many for\r\n decades</i></b>.<br>', 'Mr.B.Vimalasena', 'DIRECTOR', 'director.png');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE IF NOT EXISTS `billing_details` (
  `order_id` int(11) NOT NULL,
  `add` varchar(45) NOT NULL,
  `add1` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `postal` int(45) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `delivery_method` varchar(45) NOT NULL,
  `payment_method` varchar(45) NOT NULL,
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`order_id`, `add`, `add1`, `city`, `postal`, `mobile`, `delivery_method`, `payment_method`) VALUES
(106, '10931222', 'colombobbdd', 'boralesgamuwabb', 20444, '0718955586', 'Free Delivery', 'Cash On Hand'),
(107, '1093', 'colombobb', 'boralesgamuwabb', 20444, '0718955586', 'Free Delivery', 'Cash On Hand'),
(113, '1093', 'colombobb', 'boralesgamuwabb', 20444, '0718955586', 'Free Delivery', 'Cash On Hand'),
(114, '1093', 'colombobb', 'boralesgamuwabb', 20444, '0718955586', 'Free Delivery', 'Cash On Hand'),
(115, '1093', 'colombobb', 'boralesgamuwabb', 20444, '0718955586', 'Free Delivery', 'Cash On Hand'),
(116, '1093', 'colombobb', 'boralesgamuwabb', 20444, '0718955586', 'Free Delivery', 'Cash On Hand'),
(117, '1093', 'colombobb', 'boralesgamuwabb', 20444, '0718955586', 'Free Delivery', 'Cash On Hand'),
(118, '', 'colombo', '', 204440, '0718955586', 'Free Delivery', 'Cash On Hand'),
(119, '10933', 'colombo', 'boralesgamuwa', 204440, '0718955586', 'Free Delivery', 'Cash On Hand'),
(120, '10933', 'colombo', 'boralesgamuwabba', 204440, '0718955586', 'Free Delivery', 'Cash On Hand'),
(121, '10933', 'colombo', 'boralesgamuwabba', 204440, '0718955586', 'Free Delivery', 'Cash On Hand'),
(122, '10933', 'colombo', 'boralesgamuwabba', 204440, '0718955586', 'Free Delivery', 'Cash On Hand'),
(123, '109/3A', 'colombo', 'boralesgamuwabba', 204440, '0718955586', 'Free Delivery', 'Cash On Hand'),
(124, '109/3A', 'colombo', 'boralesgamuwa', 204440, '0718955586', 'Free Delivery', 'Cash On Hand'),
(125, '109/3A', 'colombo', 'boralesgamuwa', 204440, '0718955586', 'Free Delivery', 'Cash On Hand'),
(126, '108/A', 'pannipitiya', 'kottawa', 1245, '0718955586', 'Free Delivery', 'Cash On Hand'),
(127, '109/3A', 'colombo', 'boralesgamuwa', 204441, '0718955586', 'Free Delivery', 'Cash On Hand');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact1` varchar(45) NOT NULL,
  `contact2` varchar(45) NOT NULL,
  `contact3` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fax` varchar(45) NOT NULL,
  `map` text NOT NULL,
  `contact_person_name` varchar(45) NOT NULL,
  `branch_type` varchar(45) NOT NULL,
  `logo` varchar(45) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `name`, `location`, `address`, `contact1`, `contact2`, `contact3`, `email`, `fax`, `map`, `contact_person_name`, `branch_type`, `logo`) VALUES
(1, 'New Monis Bakery & Restuarent (PVT) Ltd', 'Maggona', 'Galle Road,Maggona,Kalutara, Sri Lanka.', '+94 112 841 263', '+94 112 841 859', '', 'newmonisbakeryrestuarents@gmail.com', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.152217730782!2d79.9799841!3d6.502406599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae231b8d83f6d9f%3A0xde20f028c12b9739!2sNew+Monis+Bakery!5e0!3m2!1sen!2slk!4v1440952605678', '', 'main', 'logo.png'),
(2, '', 'Welipanna', 'Southern Expressway Service Area, Welipanna, Southern Expressway Sri Lanka.', '+94 112 704 858', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `address1` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `postal_code` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `date_of_birth` varchar(45) NOT NULL,
  `news_alert` varchar(12) NOT NULL DEFAULT 'inactive',
  `registered_date` date NOT NULL,
  `account` enum('inactive','active') NOT NULL DEFAULT 'inactive',
  `access` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `title`, `fname`, `lname`, `email`, `password`, `address`, `address1`, `city`, `postal_code`, `telephone`, `mobile`, `date_of_birth`, `news_alert`, `registered_date`, `account`, `access`) VALUES
(36, 'Mr', 'nirman', 'sri', 'nirmansri@gmail.com', 'd94d3fbfa1487788c8e716cc3c82c8382a93f993', 'No: 78/b', 'Megoda Rd', 'Horana', '52384', '0728304216', '', '1994-05-07', 'active', '2014-05-12', 'inactive', 'Yes'),
(57, 'Dr', 'Kamal', 'Perera', 'malinga@gmail.com', '7625ef35194e1f52774abea949617b39e1f27143', '"walawe"', 'Weherahena temple rd', 'Mathara', '84444', '0757455161', '', '1991-01-09', 'active', '2014-05-31', 'active', 'No'),
(122, 'Mr', 'Praveen', 'Tharindu', 'praveenniluu@gmail.com', '510d1b3643948fee7491fb7cec68fb0552b95ea5', 'No: 186', 'Halpita ', 'Plogasowita', '10320', '0757455165', '', '1991-05-23', 'inactive', '2014-06-16', 'active', 'Yes'),
(126, 'Miss', 'Nilushi', 'Ayeshika', 'nilushipra@gmail.com', '72e6fc557b1ca391165af4e27cfeb056e5ac2395', 'no 45/2', 'Katubadda rd', 'Moratuwa', '15221', '0112704356', '0757455161', '1991-03-13', 'inactive', '2014-07-03', 'active', 'Yes'),
(128, 'Miss', 'Kumari', 'Sekara', 'kumarisekara@gmail.com', 'd8ec86575e90bc81ee62be7257558c448378a209', 'No 23', 'Piliyanadala rd', 'Bokundara', '48522', '0114586395', '', '1988-06-11', '', '2014-07-08', 'active', 'Yes'),
(129, 'Mr', 'Malamahuzin', 'Mohomed', 'mlamahuzin@gmail.com', 'edfbf550f634563100e545182c865e0399f0e968', 'No 55', 'Gall rd', 'Dehiwala', '78522', '0728513455', '', '1993-12-05', 'inactive', '2014-07-26', 'inactive', 'Yes'),
(130, 'Mr', 'Azam', 'Rahamen', 'silenthunter748@gmail.com', '507e2dbfe593669cf1e18a48b05d2687f941204a', 'No 23', 'gall rd', 'Dehiwala', '84552', '0728513455', '0728518534', '1993-12-18', 'inactive', '2014-08-04', 'active', 'Yes'),
(131, 'Mr', 'Mohomed', 'Azum', 'azam4636@gmail.com', '5f6ed58d19caa74f7c7f8b682202119c59990fc4', 'No 89/5', 'Temple rd', 'Mount lv', '85462', '0757488652', '', '1995-04-23', 'inactive', '2014-08-12', 'active', 'Yes'),
(132, 'Miss', 'Tharindu', 'Dineth', 'tharindu@gmail.com', '9ad1859b22d1c83ad3b1ba647edab12a38ec958e', '"Sudarma"', 'Agulana Junction', 'katubadda', '78521', '0112704362', '', '1991-08-26', 'inactive', '2014-08-19', 'active', 'Yes'),
(133, 'Mrs', 'Kanachana', 'Sapuni', 'kanachana@gmail.com', '6483cee5e9e34b3e17b317d627e4d713109e12fe', 'No 58', 'Maththegoda', 'Kottawa', '45421', '0776073053', '', '1885-05-14', 'inactive', '2014-08-27', 'active', 'Yes'),
(134, 'Miss', 'Geetha', 'Swarnamali', 'geetha@gmail.com', 'aabb3a72e3d44d0bc1c29018ff6716e951ecdcad', 'No 186 ', 'Kesbawa rd', 'Kesbawa', '11724', '0112704888', '', '1996-09-04', 'active', '2014-09-05', 'active', 'Yes'),
(135, 'Mr', 'Saman', 'perera', 'nilushi@gmail.com', '3fe47a4cd3eee3e0a8c48619f0ea0cdd64bbb374', 'No 186', 'kesbawa', 'Piliyandala', '45551', '0112704956', '', '1996-09-04', 'active', '2014-09-05', 'inactive', 'Yes'),
(136, 'Mr', 'kamal', 'Saman', 'praveenpro236@gmail.com', '3fe47a4cd3eee3e0a8c48619f0ea0cdd64bbb374', 'No 186', 'kesbawa', 'Piliyandala', '45554', '0112704956', '', '1991-05-10', 'active', '2014-09-06', 'active', 'Yes'),
(138, 'Mr', 'Praveen', 'Tharindu', 'newmonisbakeryrestuarents@gmail.com', '3fe47a4cd3eee3e0a8c48619f0ea0cdd64bbb374', 'No 187', '', '', '', '', '', '', 'inactive', '2015-04-18', 'active', 'Yes'),
(140, 'Mr', 'chamira', 'sithmal', 'chamirasithmal@gmail.com', 'be0b83c19d4715753d40960cbfbcc0f368635314', '109/3A', 'colombo', 'boralesgamuwa', '204441', '0718955586', '0112516677', '1991-10-23', 'active', '2015-04-18', 'active', 'Yes'),
(141, 'Mr', 'sadun', 'fonseka', 'chamirasithmal@icloud.com', 'd94d3fbfa1487788c8e716cc3c82c8382a93f993', '108/A', 'kolonawa', 'kolonnawa', '1245', '0718955586', '0112566775', '1997-08-06', 'active', '2015-08-16', 'active', 'Yes'),
(142, 'Mr', 'sasanka', 'Wijewardana', 'sasanka@shoefactory.lk', 'd94d3fbfa1487788c8e716cc3c82c8382a93f993', '108/A', 'pannipitiya', 'kottawa', '01245', '0718955586', '0112516677', '1992-05-06', 'active', '2015-09-05', 'active', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `door/window`
--

CREATE TABLE IF NOT EXISTS `door/window` (
  `id` varchar(5) NOT NULL,
  `door/window` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `door/window`
--

INSERT INTO `door/window` (`id`, `door/window`) VALUES
('d1', 'wooden'),
('d2', 'aluminium');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `message` varchar(200) NOT NULL,
  `status` enum('read','unread') NOT NULL DEFAULT 'unread',
  `type` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`feedback_id`),
  KEY `user_id` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `date`, `time`, `name`, `email`, `phone`, `message`, `status`, `type`) VALUES
(6, '2014-06-26', '06:02:25 PM', 'Nilushi', 'nilushipra@gmail.com', '0757455555', 'Good', 'read', 1),
(8, '2014-06-28', '11:03:06 PM', 'praveen', 'dilshan@shoefactory.lk', '', 'Hi,', 'read', 1),
(14, '2014-07-01', '04:54:02 PM', 'praveen', 'praveenniluu@gmail.com', NULL, 'Do you providing customize mug printing?', 'read', 0),
(15, '2014-07-28', '10:07:02 PM', 'chamira', 'chamirasithmal@icloud.com', NULL, 'Hi,', 'read', 1),
(18, '2014-08-05', '12:28:29 AM', 'shanika', 'shaniz.lakmali@gmail.com ', '', 'Site is not bad', 'read', 1),
(19, '2014-08-12', '05:29:27 PM', 'Mahazuin', 'mlamahuzin@gmail.com', '', 'Customize apparel part is good. look nice', 'read', 1),
(20, '2014-08-23', '12:30:37 AM', 'Azam', 'azam4636@gmail.com', '0724565556', 'How can i returned that part', 'read', 1),
(21, '2014-09-05', '12:32:33 AM', 'chamira', 'chamirasithmal@shoefactory.lk', '', 'Good job', 'read', 1),
(22, '2014-09-06', '06:41:26 AM', 'praveen', 'praveenniluu@gmail.com', '', 'feed', 'read', 1),
(25, '2015-01-11', '05:06:35 PM', 'praveen', 'kasun@gmail.com', '0757455161', 'Good', 'read', 1),
(39, '2015-05-10', '10:55:35 AM', 'pffgf', 'c@gmail.com', '0124578', '0', 'read', 1),
(41, '2015-08-08', '06:36:54 PM', 'chamira', 'chamirasithmal@gmail.com', '0718955586', 'hello, all', 'read', 1),
(42, '2015-09-04', '07:17:25 PM', 'chamira', 'chamirasithmal@icloud.com', NULL, 'ok', 'read', 0),
(43, '2015-09-05', '08:09:12 AM', 'shanika', 'shaniz.lakmali@gmail.com', NULL, 'Thank you for the comments<br>Best Regards <br>', 'read', 0),
(44, '2015-12-06', '01:19:52 AM', 'nuwan', 'nuwan@shoefactory.lk', '0718955584', 'I love new monis bakeyr ', 'unread', 1);

-- --------------------------------------------------------

--
-- Table structure for table `floor_type`
--

CREATE TABLE IF NOT EXISTS `floor_type` (
  `id` varchar(5) NOT NULL,
  `floor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor_type`
--

INSERT INTO `floor_type` (`id`, `floor`) VALUES
('ft1', 'tile'),
('ft2', 'titanium'),
('ft3', 'wooden');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_catergory`
--

CREATE TABLE IF NOT EXISTS `gallery_catergory` (
  `gallery_category_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `catergory_image` varchar(255) NOT NULL,
  PRIMARY KEY (`gallery_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gallery_catergory`
--

INSERT INTO `gallery_catergory` (`gallery_category_id`, `name`, `catergory_image`) VALUES
(2, 'In 1980', 'img_0020.jpg'),
(3, 'In 1990', 'img_0035.jpg'),
(4, 'In 2010', 'img_6699.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE IF NOT EXISTS `gallery_images` (
  `gallery_images_id` int(10) NOT NULL AUTO_INCREMENT,
  `gallery_category_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`gallery_images_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`gallery_images_id`, `gallery_category_id`, `name`, `image`) VALUES
(4, 3, '1980 1', 'img_0007.jpg'),
(5, 4, 'New', 'img_6730.jpg'),
(6, 4, 'new 2', 'img_6747.jpg'),
(7, 4, 'new 3', 'img_6731.jpg'),
(8, 4, 'new 4', 'img_6704.jpg'),
(9, 3, '00012', 'IMG_0031.jpg'),
(10, 3, '1990_1', 'IMG_0013.jpg'),
(11, 3, '1990_2', 'IMG_0014.jpg'),
(12, 3, '1990_3', 'IMG_0016.jpg'),
(13, 3, '1990_4', 'IMG_0036.jpg'),
(14, 3, '1990_5', 'IMG_0036.jpg'),
(15, 3, '1990_5', 'IMG_0038.jpg'),
(16, 3, '1990_6', 'IMG_0003.jpg'),
(17, 3, '1990_7', 'IMG_0009.jpg'),
(18, 3, '1990_8', 'IMG_0019.jpg'),
(19, 2, '1980_1', 'IMG_0006.jpg'),
(20, 2, '1980_2', 'IMG_0020.jpg'),
(21, 2, '1980_3', 'IMG_0021.jpg'),
(22, 2, '1980_4', 'IMG_0023.jpg'),
(23, 2, '1980_5', 'IMG_0024.jpg'),
(24, 2, '1980_6', 'IMG_0025.jpg'),
(25, 2, '1980_7', 'IMG_0027.jpg'),
(26, 2, '1980_8', 'IMG_0035.jpg'),
(40, 2, '2010_14', 'DSC00486.JPG'),
(41, 3, '2010_15', 'IMG_0010.jpg'),
(42, 4, '2010_2', 'DSC00491.JPG'),
(43, 4, '2010_4', 'DSC00492.JPG'),
(47, 4, '2010_3', 'DSC00493.JPG'),
(48, 4, '2010_4', 'DSC00500.JPG'),
(49, 4, '2010_5', 'DSC00502.JPG'),
(50, 4, '2010_6', 'DSC00504.JPG'),
(51, 4, '2010_7', 'DSC00508.JPG'),
(52, 4, '2010_8', 'DSC00513.JPG'),
(53, 4, '2010_9', 'DSC00514.JPG'),
(54, 4, '2010_10', 'DSC00516.JPG'),
(55, 4, '2010_11', 'DSC00522.JPG'),
(59, 4, '2010_12', 'DSC00524.JPG'),
(60, 4, '2010_13', 'DSC00525.JPG'),
(61, 4, '2010_14', 'DSC00526.JPG'),
(63, 4, '2010_15', 'DSC00527.JPG'),
(64, 4, '2010_16', 'DSC00528.JPG'),
(65, 4, '2010_17', 'DSC00533.JPG'),
(66, 4, '2010_18', 'DSC00534.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE IF NOT EXISTS `latest_news` (
  `latest_news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_topic` varchar(200) NOT NULL,
  `news_body` varchar(10000) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `publish_date` varchar(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`latest_news_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`latest_news_id`, `news_topic`, `news_body`, `status`, `image`, `publish_date`, `user_id`) VALUES
(8, 'How to made a cake', 'Measure flour into quart size mason jar.\r\n    Add sugar on top, then baking powder, then salt. Place lid on jar. (My ingredients JUST fit)\r\n    When ready to prepare cake batter:\r\n    Place softened butter into stand mixer and mix on medium for 1-2 minutes.\r\n    Place dry ingredients into stand mixer and combine with butter for 30 seconds.\r\n    Add milk, oil, vanilla and eggs and mix on medium-high for one minute.\r\n    Pour batter into prepare pans. Bake at 350. For 9-inch pans its 20-25 minutes. For cupcakes start checking around 15 minutes.', NULL, 'homemade_cake.jpg', '2015-08-30', 2),
(9, 'How to Made a Busicutes', 'Roll dough out into a 1/2 inch thick sheet and cut with a floured biscuit or cookie cutter. Press together unused dough and repeat rolling and cutting procedure. Place biscuits on unreleased baking sheets and bake in preheated oven until golden brown, about 10 minutes.dough out onto a lightly floured surface and toss with fl', NULL, 'busicute.jpg', '2015-08-30', 2),
(13, 'Cup Cake', 'To make buttercream, sieve the icing sugar into slightly softened butter (for quantities, see our Vanilla cake recipe) and beat or whisk to combine.', NULL, 'butter_cup_cakes.jpg', '2015-08-30', 2),
(14, 'Piping', 'Drop the nozzle into a piping bag. For cupcakes and rosettes a large star works well, for writing a fine round one is best. \r\nFill no more than two thirds full with icing, twist and hold the end with one hand (usually your writing hand) and rest the tip of the bag in your other hand. Squeeze the icing at the top (not the middle!) of the bag to eliminate air bubbles. Do a little test squirt before starting on your cupcake or cake.', NULL, 'piping.jpg', '2015-08-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_subcriber`
--

CREATE TABLE IF NOT EXISTS `news_subcriber` (
  `subcriber_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  PRIMARY KEY (`subcriber_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `news_subcriber`
--

INSERT INTO `news_subcriber` (`subcriber_id`, `email`, `status`) VALUES
(32, 'chamirasithmal@gmail.com ', 'active'),
(33, 'a@mail.com', 'inactive'),
(36, 'sanjeanenterprises@gmail.com', 'active'),
(37, 'a@mail.co', 'inactive'),
(38, 'asjflk@mail.com', 'inactive'),
(39, 'chamirasithmal@icloud.com', 'active'),
(40, 'sasanka@shoefactory.lk', 'active'),
(41, 'lakshan@shoefactory.lk', 'inactive'),
(42, 'nuwan@shoefactory.lk', 'active'),
(43, 'kasun@MAIL.COM', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `no_of_floors`
--

CREATE TABLE IF NOT EXISTS `no_of_floors` (
  `id` varchar(5) NOT NULL,
  `no_of_floors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `no_of_floors`
--

INSERT INTO `no_of_floors` (`id`, `no_of_floors`) VALUES
('f1', 1),
('f2', 2),
('f3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `order_date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `status` enum('Pending','Delivered','Canceled') NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `amount`, `order_date`, `time`, `delivery_date`, `status`) VALUES
(106, 140, '95 ', '2015-06-14', '05:14:35 PM', NULL, 'Canceled'),
(107, 140, '95 ', '2015-06-14', '05:20:33 PM', NULL, 'Pending'),
(108, 140, '285 ', '2015-06-14', '05:26:01 PM', '2015-07-12', 'Delivered'),
(109, 140, '380 ', '2015-06-14', '05:29:41 PM', '2015-07-12', 'Delivered'),
(110, 140, '190 ', '2015-06-14', '05:32:51 PM', NULL, 'Pending'),
(111, 140, '190 ', '2015-06-14', '05:33:35 PM', NULL, 'Pending'),
(112, 140, '190 ', '2015-06-14', '05:39:24 PM', NULL, 'Pending'),
(113, 140, '285 ', '2015-06-14', '05:40:04 PM', NULL, 'Pending'),
(114, 140, '190 ', '2015-06-14', '05:43:08 PM', NULL, 'Pending'),
(115, 140, '95 ', '2015-06-27', '09:00:06 PM', NULL, 'Pending'),
(116, 140, '345 ', '2015-06-28', '03:27:05 AM', NULL, 'Pending'),
(117, 140, '250 ', '2015-08-02', '09:05:42 PM', NULL, 'Pending'),
(118, 140, '950 ', '2015-08-09', '02:43:04 AM', '2015-08-08', 'Delivered'),
(119, 140, '95 ', '2015-08-09', '04:08:14 PM', '2015-08-23', 'Delivered'),
(120, 140, '190 ', '2015-08-17', '06:02:27 PM', NULL, 'Canceled'),
(121, 140, '190 ', '2015-08-23', '07:29:39 PM', '2015-08-23', 'Delivered'),
(122, 140, '190 ', '2015-08-26', '11:24:11 PM', NULL, 'Pending'),
(123, 140, '410 ', '2015-09-04', '09:56:26 AM', NULL, 'Pending'),
(124, 140, '780 ', '2015-09-04', '09:03:26 PM', NULL, 'Pending'),
(125, 140, '240 ', '2015-09-05', '03:24:16 PM', '2015-09-05', 'Delivered'),
(126, 142, '160 ', '2015-09-05', '03:33:50 PM', NULL, 'Pending'),
(127, 140, '690 ', '2015-12-06', '09:09:45 AM', '2015-12-06', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `price`) VALUES
(106, 1, 1, 95),
(107, 1, 1, 95),
(108, 1, 3, 95),
(109, 1, 4, 95),
(111, 1, 2, 95),
(112, 4, 2, 95),
(113, 4, 3, 95),
(114, 4, 2, 95),
(115, 4, 1, 95),
(116, 5, 1, 125),
(116, 4, 1, 95),
(116, 6, 1, 125),
(117, 5, 2, 125),
(118, 4, 10, 95),
(119, 4, 1, 95),
(120, 4, 2, 95),
(121, 4, 2, 95),
(122, 4, 2, 95),
(123, 23, 1, 90),
(123, 8, 2, 60),
(123, 11, 2, 100),
(124, 23, 2, 90),
(124, 25, 2, 250),
(124, 12, 1, 100),
(125, 17, 4, 60),
(126, 21, 2, 80),
(127, 25, 2, 250),
(127, 4, 2, 95);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `product_type_id` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `description` text NOT NULL,
  `last_updated_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `reorder_level` int(11) NOT NULL,
  `folder_name` varchar(45) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `img4` varchar(50) NOT NULL,
  `no_bits` varchar(20) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_type_id` (`product_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type_id`, `price`, `description`, `last_updated_date`, `quantity`, `reorder_level`, `folder_name`, `img1`, `img2`, `img3`, `img4`, `no_bits`) VALUES
(32, 'chamira', 1, 1000000, 'aasfasf', '0000-00-00', 0, 0, '', '', '', '', '', ''),
(33, 'malka', 3, 254200, 'asdas', '0000-00-00', 0, 0, '', '', '', '', '', ''),
(34, 'test', 1, 200, 'dfdsf', '2016-08-05', 2, 2, '', 'nature.jpg', '', '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE IF NOT EXISTS `product_review` (
  `product_review_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `status` enum('inactive','active') NOT NULL DEFAULT 'inactive',
  `date` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`product_review_id`),
  KEY `product_id` (`product_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `product_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(45) NOT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  PRIMARY KEY (`product_type_id`),
  UNIQUE KEY `type_name_2` (`type_name`),
  KEY `type_name` (`type_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `type_name`, `status`) VALUES
(1, 'Biscuits', 'active'),
(3, 'Cakes', 'active'),
(4, 'Drinks', 'active'),
(5, 'jjj', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_perch` int(11) NOT NULL,
  `no_of_bedrooms` int(11) NOT NULL,
  `no_of_bathrooms` int(11) NOT NULL,
  `location` varchar(10) NOT NULL,
  `type(sale/rent)` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `property_name` varchar(10) NOT NULL,
  `description` varchar(15) NOT NULL,
  `favourative` tinyint(1) NOT NULL,
  `review` varchar(10) NOT NULL,
  `image` varchar(10) NOT NULL,
  `slider` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roof_type`
--

CREATE TABLE IF NOT EXISTS `roof_type` (
  `id` varchar(5) NOT NULL,
  `roof` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roof_type`
--

INSERT INTO `roof_type` (`id`, `roof`) VALUES
('r1', 'asbestose'),
('r2', 'tile');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_img` varchar(45) DEFAULT NULL,
  `img1` varchar(45) DEFAULT NULL,
  `img2` varchar(45) DEFAULT NULL,
  `img3` varchar(45) DEFAULT NULL,
  `main_text` varchar(45) DEFAULT NULL,
  `sub_text` varchar(45) DEFAULT NULL,
  `main_link` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `main_img`, `img1`, `img2`, `img3`, `main_text`, `sub_text`, `main_link`) VALUES
(1, 'main-slider.jpg', '', '', '', 'Short Eats', 'Banis', NULL),
(2, '2.jpg', '', '', '', 'Biscuits', '', NULL),
(3, '3.jpg', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `squarefeet_range`
--

CREATE TABLE IF NOT EXISTS `squarefeet_range` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min_feet` int(11) NOT NULL,
  `max_feet` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `squarefeet_range`
--

INSERT INTO `squarefeet_range` (`id`, `min_feet`, `max_feet`) VALUES
(1, 0, 699),
(2, 700, 799),
(3, 800, 899),
(4, 900, 999),
(5, 1000, 1199),
(6, 1200, 1299),
(7, 1300, 1399),
(8, 1400, 1499),
(9, 1500, 1599),
(10, 1600, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(10) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(50) NOT NULL,
  `test_address` varchar(50) NOT NULL,
  `test_number` int(15) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `test_address`, `test_number`) VALUES
(1, '3333dd', 'asdassafasfa', 123456789),
(3, '3333dd', 'sadasd', 123456789),
(4, '3333dd', 'dsdffd', 123456789),
(5, '3333dd', 'weraera', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `address1` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `add_date` varchar(45) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `user_role_id` (`user_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `title`, `fname`, `lname`, `email`, `password`, `address`, `address1`, `city`, `contact_no`, `add_date`, `user_role_id`, `status`) VALUES
(2, 'Mr', 'chamira', 'sithmal', 'chamirasithmal@gmail.com', 'be0b83c19d4715753d40960cbfbcc0f368635314', 'NO: 109/3A', 'Werahera', 'Boralesgamuwa', '0718955586', '2015-01-17', 1, 'active'),
(3, 'Mr', 'Nimal', 'perera', 'sasanka@shoefactory.lk', 'd94d3fbfa1487788c8e716cc3c82c8382a93f993', 'aa', 'aa', 'aa', '0718955586', '2015-01-19', 2, 'active'),
(8, 'Mr', 'kasun', 'perera', 'kasun@gmail.com', '3daa2c246564baf6d1909404d0c52ca53c9e7917', '186', 'kesbawa', 'piliyanadala', '0757455161', '2015-02-14', 1, 'inactive'),
(11, 'Mr', 'Amila', 'Perera', 'amila@gmail.com', 'd94d3fbfa1487788c8e716cc3c82c8382a93f993', 'No 87/b', 'Bokundara Rd', 'Piliyandala', '0776073053', '2015-02-24', 3, 'active'),
(12, 'Mr', 'Azam', 'Mohomed', 'azam4636@gmail.com', '30caee2682ab94cfc4675ff450f4c2c4e63d37d8', 'No 38', 'Galle Rd', 'Dehiwala', '0757455161', '2015-03-01', 2, 'active'),
(13, 'Mrs', 'tharindu', 'Dineth', 'tharindu@gmail.com', '9ad1859b22d1c83ad3b1ba647edab12a38ec958e', 'No 45', 'Suwarapola', 'Katubadda', '0776652035', '2015-03-01', 4, 'active'),
(14, 'Mr', 'Prageeth', 'Wanigasuriya', 'prageeth124@gmail.com', 'ff931fcba1e5ad87dd338db241a08dff99f43db8', 'No 67/a', 'Kollonnawa Rd', 'Angoda', '0719846242', '2015-03-25', 3, 'active'),
(15, 'Mrs', 'Isuru', 'Perera', 'isuruperera@gmail.com', 'd94d3fbfa1487788c8e716cc3c82c8382a93f993', 'No 44/c', 'Abuldeniya', 'Maharagama', '0719846245', '2015-04-05', 4, 'active'),
(16, 'Mr', 'Indika', 'Hemalal', 'indikahemalal@gmail.com', 'bcfcef8d9386aa1525e5a8d6d2574f21b3450426', '"wasna home"', 'Halpita', 'Polgasowita', '0778521602', '2015-05-05', 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE IF NOT EXISTS `user_menu` (
  `user_role_id` int(11) NOT NULL,
  `user_menu_type_id` int(11) NOT NULL,
  PRIMARY KEY (`user_role_id`,`user_menu_type_id`),
  KEY `user_menu_type_id` (`user_menu_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`user_role_id`, `user_menu_type_id`) VALUES
(1, 1),
(2, 1),
(4, 1),
(1, 2),
(2, 2),
(4, 2),
(1, 4),
(1, 5),
(2, 5),
(4, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(2, 14),
(4, 14),
(1, 15),
(2, 15),
(4, 15),
(1, 16),
(3, 16),
(1, 17),
(3, 17),
(1, 18),
(2, 18),
(1, 19),
(1, 20),
(1, 21),
(2, 21),
(1, 22),
(2, 22),
(1, 23),
(1, 24),
(3, 24),
(1, 25),
(1, 26),
(1, 27),
(2, 27);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu_type`
--

CREATE TABLE IF NOT EXISTS `user_menu_type` (
  `user_menu_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_menu_type_name` varchar(45) NOT NULL,
  PRIMARY KEY (`user_menu_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user_menu_type`
--

INSERT INTO `user_menu_type` (`user_menu_type_id`, `user_menu_type_name`) VALUES
(1, 'product_category'),
(2, 'cake_category'),
(4, 'color_category'),
(5, 'products_reviews'),
(6, 'user_role'),
(7, 'user_menu'),
(8, 'user_privileges'),
(11, 'system_users'),
(12, 'brand_category'),
(13, 'productgender_category'),
(14, 'products'),
(15, 'orders'),
(16, 'apparel_category'),
(17, 'apparels'),
(18, 'news'),
(19, 'about_us'),
(20, 'branch_information'),
(21, 'customers'),
(22, 'feedback'),
(23, 'report'),
(24, 'slider'),
(25, 'reservation'),
(26, 'cake_category'),
(27, 'cakes');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role_name` varchar(45) NOT NULL,
  PRIMARY KEY (`user_role_id`),
  UNIQUE KEY `user_role_name` (`user_role_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_role_id`, `user_role_name`) VALUES
(4, 'business handler'),
(2, 'customer coordinator'),
(3, 'design handler'),
(1, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `value`
--

CREATE TABLE IF NOT EXISTS `value` (
  `id` varchar(5) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `value`
--

INSERT INTO `value` (`id`, `type`) VALUES
('w1', '1000'),
('w2', '1000'),
('ft1', '1000'),
('ft2', '1000'),
('ft3', '1000'),
('r1', '1000'),
('r2', '1000'),
('d1', '1000'),
('d2', '1000'),
('sq', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `walls`
--

CREATE TABLE IF NOT EXISTS `walls` (
  `id` varchar(5) NOT NULL,
  `wall` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walls`
--

INSERT INTO `walls` (`id`, `wall`) VALUES
('w1', 'bric'),
('w2', 'block');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE IF NOT EXISTS `wish_list` (
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`customer_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`customer_id`, `product_id`) VALUES
(140, 4),
(140, 5),
(140, 6),
(142, 25),
(140, 29);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD CONSTRAINT `billing_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD CONSTRAINT `latest_news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`product_type_id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `product_review_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_review_ibfk_5` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`user_role_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD CONSTRAINT `user_menu_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`user_role_id`),
  ADD CONSTRAINT `user_menu_ibfk_2` FOREIGN KEY (`user_menu_type_id`) REFERENCES `user_menu_type` (`user_menu_type_id`);

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
