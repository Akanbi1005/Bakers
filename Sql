-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 05:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_img` text NOT NULL,
  `about_header` varchar(255) NOT NULL,
  `about_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_img`, `about_header`, `about_body`) VALUES
(1, 'img/ser01.png', 'Creative Concept', 'A creative concept is an overarching Big Idea that captures audience interest, influences their emotional response and inspires them to take action.'),
(2, 'img/ser02.png', 'Amazing Design', 'Amazing drawing produced to show the look and function or workings of a building, garment, or other object before it is made.Are what we do best '),
(3, 'img/ser03.png', 'Cost effective', 'effective or productive in relation to its cost.we consider and help our client with'),
(4, 'img/ser04.png', 'Secure', 'We keep track of fixed or fastened goods so as not to give way, become loose, or be lost.');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `website_name` varchar(225) NOT NULL,
  `banner_header` varchar(50) NOT NULL,
  `banner_body1` varchar(255) NOT NULL,
  `banner_body2` varchar(255) NOT NULL,
  `banner_btn` varchar(30) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `website_name`, `banner_header`, `banner_body1`, `banner_body2`, `banner_btn`, `img`) VALUES
(1, 'CodeHolla', 'We Are Bakers', 'Welcome Bakers', 'The journey is never ending. There''s always gonna be growth, improvement, adversity; you just gotta take it all in and do what''s right, continue to grow, continue to live in the moment.', 'Join Us', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_header` varchar(100) NOT NULL,
  `blog_body` text NOT NULL,
  `blog_img` text NOT NULL,
  `blog_img_header` varchar(225) NOT NULL,
  `blog_postby` varchar(225) NOT NULL,
  `blog_img_body` varchar(225) NOT NULL,
  `blog_img_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_header`, `blog_body`, `blog_img`, `blog_img_header`, `blog_postby`, `blog_img_body`, `blog_img_link`) VALUES
(1, 'Latest from our blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua', 'img/blog02.jpg', 'This is Lorem ipsum heading.', 'Posted In: <span>Legal Advice</span>', 'The House that Still Speak.', 'https://mail.google.com/mail/u/0/?zx=n3rx5bn1qzyk#inbox'),
(2, '', '', 'img/blog03.jpg', 'This is Lorem ipsum heading.', 'Posted In: <span>Legal Advice</span>', 'Summer Pictures', 'https://en.wikipedia.org/wiki/Main_Page'),
(3, '', '', 'img/blog01.jpg', 'This is Lorem ipsum heading.', 'Posted In: <span>Legal Advice', 'trip to wonder land', 'https://en.wikipedia.org/wiki/Company');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_header` varchar(225) NOT NULL,
  `contact_body` text NOT NULL,
  `contact_addr` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_num` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_header`, `contact_body`, `contact_addr`, `contact_email`, `contact_num`) VALUES
(1, 'Keep in touch with us...', 'We will love to have you leave us a Feedback', 'A99 Adam Street<br>Texas, TX 555072', 'akanbiolamilekan6@gmail.com', '+2348109832786');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `copyright` text NOT NULL,
  `owner_link` varchar(225) NOT NULL,
  `owner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copyright`, `owner_link`, `owner`) VALUES
(1, 'CodeHolla. All Rights Reserved.', 'https://www.krystaldigitalng.com...', 'CodeHolla');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `sign_title` varchar(225) NOT NULL,
  `sign_title1` varchar(225) NOT NULL,
  `sign_header` varchar(225) NOT NULL,
  `sign_body` varchar(225) NOT NULL,
  `sign_footer_link` varchar(225) NOT NULL,
  `sign_footer_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `sign_title`, `sign_title1`, `sign_header`, `sign_body`, `sign_footer_link`, `sign_footer_name`) VALUES
(1, 'Log in ', 'Sign Up', 'Welcome to the Log in Dashboard', 'Note:Here are CodeHolla We Provide you with the best of the best Technology regarding Web Content.', 'index.php', 'CodeHolla');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `port_header` varchar(225) NOT NULL,
  `port_body_` varchar(225) NOT NULL,
  `port_image` text NOT NULL,
  `port_image_header` text NOT NULL,
  `port_img_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `port_header`, `port_body_`, `port_image`, `port_image_header`, `port_img_text`) VALUES
(2, 'OUR RECENT WORKS', 'portfolio is a grouping of financial assets such as stocks, bonds, commodities, currencies and cash equivalents, as well as their fund counterparts, including mutual, exchange-traded and closed funds.', 'img/port01.jpg', 'Project For Everyone', 'Love'),
(3, '', '', 'img/port02.jpg', 'Project For Everyone', 'Peace'),
(4, '', '', 'img/port03.jpg', 'Project For Everyone', 'Joy'),
(5, '', '', 'img/port04.jpg', 'Project For Everyone', 'Happiness'),
(6, '', '', 'img/port05.jpg', 'Project For Everyone', 'Wealth'),
(7, '', '', 'img/port06.jpg', 'Project For Everyone', 'Long Life');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `service_header` varchar(225) NOT NULL,
  `service_body` text NOT NULL,
  `service_offer` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `header`, `body`, `service_header`, `service_body`, `service_offer`) VALUES
(1, 'What We Do?', 'Design is the creation of a plan or convention for the <br>construction of an object, system or measurable human interaction. Design has different connotations in different fields', '<span>D</span>esign And Developement', 'Product design. Product design as a verb is to create a new product to be sold by a business to its customers. ', 'https://www.facebook.com/akanbilk'),
(2, '', '', '<span>W</span>ebsite Maintenance', 'Sometimes people ask what the definition of “website maintenance” really is. Here''s how we would define it: Performing all the tasks necessary to keep a website up to date and in good', 'https://www.facebook.com/akanbilk'),
(3, '', '', '<span>S</span>eo Optimization', 'Search engine optimization is a methodology of strategies, techniques and tactics used to increase the amount of visitors to a website by obtaining a high-ranking placement in the search results page of a search engine', 'facebook.com'),
(4, '', '', '<span>D</span>igital Marketing', 'digital marketing. The marketing of products or services using digital channels to reach consumers. The key objective is to promote brands through various forms of digital media. Digital marketing extends beyond internet marketing to include channels that do not require the use of the internet.', 'facebook.com/akanbilk');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `FullName` varchar(225) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Image` text NOT NULL,
  `log` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `FullName`, `Username`, `Email`, `Password`, `Image`, `log`) VALUES
(8, 'Akanbi Olamilekan', 'Olami000', 'akanbiolamilekan6@gmail.com', '$2y$10$6pBvcCs3zwOfFPhIQiI1pOLlWGjUBttTxpvOqiHTPNZSkYjaBvTF.', '5babf22bee0989.58146200.jpg', 'Admin'),
(9, 'Akanbi Olamilekan Ibrahim', 'Olami11', 'akanbiolamilekan6@gmail.com', '$2y$10$y4qGPHuD9u7UmC8ykygTLeVBRNqiLfdNZsYOJA/95kd10TKPoCsQy', '5babf30d68e896.46871645.jpg', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE `success` (
  `id` int(11) NOT NULL,
  `web_name` varchar(225) NOT NULL,
  `web_header` varchar(225) NOT NULL,
  `web_body` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success`
--

INSERT INTO `success` (`id`, `web_name`, `web_header`, `web_body`) VALUES
(1, 'Code Holla..', 'THANK YOU', 'You are now one of us');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test_image` text NOT NULL,
  `test_comment` text NOT NULL,
  `text_commenter` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test_image`, `test_comment`, `text_commenter`) VALUES
(1, 'thumb.png', 'Lovly Website,Cool Stuff....', 'Akanbi Olamilekan, Client'),
(2, 'thumb.png', 'So here is us, on the raggedy edge. Don''t push me, and I won''t push you.', 'Marry Smith, Client'),
(3, 'thumb.pnG', 'Come a day there won''t be room for naughty men like us to slip about at all. This job goes south, there well may not be another.', 'Vivek Singh, Client'),
(4, 'thumb.png', 'So here is us, on the raggedy edge. Don''t push me, and I won''t push you.', 'John Doe, Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `success`
--
ALTER TABLE `success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
