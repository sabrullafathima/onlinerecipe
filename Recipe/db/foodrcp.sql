-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 08:58 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodrcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` int(11) NOT NULL,
  `c_email` int(11) NOT NULL,
  `c_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_password`) VALUES
(0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(4) NOT NULL,
  `course_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(9, 'breakfast'),
(5, 'Crew'),
(1, 'fresh'),
(3, 'New'),
(4, 'Top'),
(2, 'Trend');

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory`
--

CREATE TABLE `foodcategory` (
  `food_category_id` int(4) NOT NULL,
  `food_category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodcategory`
--

INSERT INTO `foodcategory` (`food_category_id`, `food_category_name`) VALUES
(3, 'Breakfast'),
(4, 'Dessert'),
(2, 'Dinner'),
(5, 'Easy'),
(9, 'Healthy'),
(1, 'Lunch'),
(23, 'nnnnnnnnn'),
(24, 'xxxxxxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredient_id` int(4) NOT NULL,
  `ingredient_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredient_id`, `ingredient_name`) VALUES
(18, ' banana instant pudding'),
(16, ' bananas'),
(12, ' butter'),
(19, ' milk'),
(6, 'balsamic vinegar'),
(15, 'Cool Whip'),
(13, 'cream cheese'),
(4, 'extra virgin olive oil'),
(11, 'flour'),
(3, 'fresh basil'),
(2, 'mozzarella cheese'),
(7, 'pepper'),
(14, 'powdered sugar'),
(5, 'salt'),
(1, 'tomatoes'),
(17, 'vanilla');

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `measurement_id` int(4) NOT NULL,
  `measurement_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurements`
--

INSERT INTO `measurements` (`measurement_id`, `measurement_name`) VALUES
(2, 'cups'),
(1, 'large'),
(3, 'leaves'),
(5, 'ounce'),
(4, 'tablespoons');

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `quantity_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `measurement_id` int(11) NOT NULL,
  `ingredient_quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`quantity_id`, `recipe_id`, `ingredient_id`, `measurement_id`, `ingredient_quantity`) VALUES
(1, 1, 1, 1, 4),
(2, 1, 3, 3, 8),
(3, 1, 4, 4, 4),
(4, 1, 5, 1, 7),
(5, 1, 6, 0, 0),
(10, 1, 7, 0, 0),
(11, 1, 7, 0, 0),
(12, 2, 11, 2, 1),
(13, 2, 12, 2, 1),
(14, 2, 14, 2, 1),
(15, 2, 13, 5, 8),
(16, 2, 15, 1, 3),
(17, 2, 16, 1, 3),
(18, 2, 17, 5, 6),
(19, 2, 19, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `publisher_name` varchar(30) NOT NULL,
  `recipe_id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `recipe_name` varchar(40) NOT NULL,
  `cook_time` varchar(30) NOT NULL,
  `recipe_image` longtext NOT NULL,
  `pre_time` varchar(30) NOT NULL,
  `ingredients` text NOT NULL,
  `directions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`publisher_name`, `recipe_id`, `course_id`, `sub_category_id`, `recipe_name`, `cook_time`, `recipe_image`, `pre_time`, `ingredients`, `directions`) VALUES
('Fathima', 2, 1, 5, 'CREAMY BANANA CREAM PIE', '3500', 'fresh/img1.jpg', '0', '', ''),
('Sunil', 3, 1, 2, 'BARB\'S GUMBO', '10500', 'fresh/img2.jpg', '0', '', ''),
('Sachini', 4, 1, 2, 'STUFFED PORK CHOPS', '4100', 'fresh/img3.jpg', '0', '', ''),
('Sunil', 5, 1, 29, 'ZUCCHINI PASTA WITH CHILI', '5100', 'fresh/img4.jpg', '0', '', ''),
('Fathima', 7, 1, 5, 'SHOULD BE ILLEGAL OVEN BBQ RIBS', '470000', 'fresh/img5.jpg', '0', '', ''),
('Sunil', 8, 1, 5, 'SPINACH, TOMATO AND FETA QUICHE', '1600', 'fresh/img4.jpg', '0', '', ''),
('Sunil', 9, 2, 1, 'LOBSTER ROLLS', '4200', 'fresh/img4.jpg', '0', '', ''),
('Sachini', 11, 4, 1, 'SPICY FRITO CORN SALAD', '4200', 'fresh/img6.jpg', '0', '', ''),
('Sachini', 12, 3, 1, 'SPICY PORK ENCHILADAS WITH MOLE SAUCE', '2200', 'fresh/img3.jpg', '0', '', ''),
('Sachini', 25, 2, 2, 'MOMMY\'S PAN-FRIED PORK CHOPS', '61500', 'new/img1.jpg', '0', '', ''),
('Sara', 26, 0, 2, 'GRAPE NUTS CUSTARD', '1900', 'new/img2.jpg', '0', '', ''),
('Sara', 32, 1, 2, 'HUSHPUPPY SKILLET CORNBREAD WITH WHOLE W', '2200', 'new/img3.jpg', '0', '', ''),
('Sara', 33, 1, 2, 'BEST-EVER STRAWBERRY JAM', '3000', 'new/img4.jpg', '0', '', ''),
('Fathima', 34, 1, 2, 'APPLE CINNAMON LATTICED HAND PIES', '2000', 'new/img5.jpg', '0', '', ''),
('Sara', 40, 2, 3, 'ELOTE PASTA SALAD', '2700', 'fresh/img1.jpg', '2300', '', ''),
('Nimal', 42, 3, 3, 'BOURBON CHICKEN', '4200', 'nw/img1.jpg', '2300', '', ''),
('Nimal', 43, 3, 3, 'JAMAICAN JERK CHICKEN AND SEASONING', '5900', 'nw/img2.jpg', '3900', '', ''),
('Anoka', 44, 1, 3, 'ZUCCHINI RIBBONS WITH BASIL BUTTER', '300', 'nw/img3.jpg', '0', '', ''),
('Maali', 45, 2, 3, 'LEFTOVER PORK CHOP STIR FRY', '2000', 'nw/img4.jpg', '0', '', ''),
('Nimal', 46, 1, 1, '2- HANDED KITCHEN SINK TOMATO SANDWICH', '0', 'nw/img5.jpg', '0', '', ''),
('fathi', 49, 3, 53, 'QUICK BREADS', '0', 'upload_image/img2.jpg', '200000', '', ''),
('', 51, 0, 0, '', '0', 'upload_image/', '0', '', ''),
('amil', 52, 5, 1, 'BEST BANANA BREAD', '0', 'upload_image/img4.jpg', '11', '', ''),
('fathi', 53, 5, 1, 'BREAD  with Nuts', '0', 'upload_image/bread2.jpg', '2', '', ''),
('amil', 54, 5, 1, 'chies bread', '0', 'upload_image/bread3.jpg', '4', '', ''),
('', 56, 0, 0, 'llllllllllllllllllllllllllllll', '0', '', '0', '', ''),
('', 60, 1, 0, 'nnnmmmmmmmmmmmmmmmm', '0', '', '0', '', ''),
('', 64, 9, 3, 'abcdefg', '0', '', '0', '', ''),
('', 66, 9, 1, 'hm hbj', '0', 'upload_image/', '0', '', ''),
('', 67, 9, 1, 'nnn', '0', 'upload_image/', '0', '', ''),
('nbnm, .', 68, 9, 1, 'Mickey', '0', 'upload_image/bread4.jpg', '8', '', ''),
('', 71, 9, 1, 'fathima', '0', '', '0', '', ''),
('', 73, 9, 1, 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', '0', '', '0', '', ''),
('', 74, 9, 1, 'bbb', '0', 'upload_image/', '0', '', ''),
('', 76, 9, 1, 'gggggg', '0', '', '0', '', ''),
('', 77, 9, 1, 'sab', '0', '', '0', '', ''),
('', 78, 9, 1, 'nhui', '0', 'bread4.jpg', '0', '', ''),
('', 81, 9, 1, 'kdfyfusdTUWK', '0', '', '0', '', ''),
('', 82, 9, 1, 'mkmkmkmk', '0', 'upload_image/', '0', '', ''),
('', 83, 9, 1, 'bbbbbb', '0', 'upload_image/', '0', '', ''),
('', 84, 9, 1, 'mnj', '0', 'upload_image/', '0', '', ''),
('', 85, 9, 1, 'thtikfvbkdhsg', '0', '', '0', '', ''),
('', 86, 9, 1, 'n', '0', '', '0', '', ''),
('', 87, 9, 1, 'nm', '0', 'upload_image/', '0', '', ''),
('', 88, 9, 1, 'mbhvufyaegclbawx efy', '0', 'upload_image/', '0', '', ''),
('', 89, 9, 1, 'bjbh', '0', '', '0', '', ''),
('', 91, 9, 1, 'ndccivsl;gdhjk,n.k,', '0', 'upload_image/bread4.jpg', '0', '  m,n;klÃ¸Â©zdsfgjnmk,l', 'hsjdkl;skgopibu2rdegp[d'),
('', 98, 5, 53, 'bwjn chkn brd', '0', 'upload_image/bread4.jpg', '4', '1 cup rice , 1 cup....', 'mix it.............'),
('', 99, 4, 60, 'yyyyy', '0', 'upload_image/bread4.jpg', '4', '1 cup suger', 'ingredienyts............'),
('', 106, 9, 1, 'hhhhhhhhhhhhhhhhhhhhhh', 'r_cooktm', 'upload_image/bread4.jpg', '4', 'mmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmmmmmmm'),
('', 112, 9, 54, 'chies pallandi', '4', 'upload_image/bread4.jpg', '4', '1 spoon chili', 'mix it...............'),
('', 113, 9, 1, 'oh ', '4min', 'upload_image/bread4.jpg', '4 hr', '1 ,mmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm');

-- --------------------------------------------------------

--
-- Table structure for table `recipesteps`
--

CREATE TABLE `recipesteps` (
  `step_id` int(4) NOT NULL,
  `recipe_id` int(4) NOT NULL,
  `step_number` int(4) NOT NULL,
  `step_description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipesteps`
--

INSERT INTO `recipesteps` (`step_id`, `recipe_id`, `step_number`, `step_description`) VALUES
(1, 1, 1, 'Slice tomatoes and mozzarella '),
(2, 1, 2, 'Arrange the tomatoes, mozzarel'),
(3, 1, 3, 'Drizzle with olive oil (and ba'),
(4, 1, 4, 'Serve with salt and pepper to '),
(9, 2, 1, 'Combine flour, butter and peca'),
(10, 2, 2, 'Bake at 350 degrees Fahrenheit'),
(11, 2, 3, 'Beat cream cheese and sugar to'),
(12, 2, 4, 'Slice bananas and arrange on t'),
(13, 2, 5, 'Whisk pudding mix and milk.'),
(14, 2, 6, 'Mix in remaining Cool Whip.'),
(15, 2, 7, 'Spread on top of bananas.'),
(16, 2, 8, 'Refrigerate.');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_category_id` int(11) NOT NULL,
  `sub_category_name` varchar(30) NOT NULL,
  `food_category_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_category_id`, `sub_category_name`, `food_category_id`) VALUES
(1, 'Breads', 3),
(2, 'Rice', 1),
(3, 'Ice Cream', 4),
(4, 'Drinks', 4),
(5, 'Cake', 3),
(6, 'Salad', 4),
(7, 'Side Dish', 1),
(9, 'Snacks', 5),
(10, 'Chicken', 2),
(11, 'American', 2),
(12, 'Asian', 2),
(13, 'Indian', 2),
(14, 'Mexican', 2),
(16, 'Diabetic', 9),
(17, 'Free Of...', 9),
(19, 'High In...', 1),
(20, 'Kid-Friendly', 9),
(21, 'Vegetarian', 9),
(22, 'Low In...', 3),
(23, 'Beans', 1),
(24, 'Chocolate', 4),
(25, 'Eggs/Dairy', 4),
(26, 'Fruit', 4),
(27, 'Meat', 1),
(28, 'Nuts', 4),
(29, 'Pasta and Grains', 4),
(30, 'Peanut Butter', 4),
(31, 'Seafood', 4),
(32, 'Vegetable', 4),
(33, 'Birthday', 5),
(34, 'Dinner Party', 5),
(35, 'Gifts', 5),
(36, 'Holiday', 5),
(37, 'Taste/Mood', 5),
(38, 'Weeknight', 5),
(39, 'Easy', 9),
(40, 'Time to Make', 9),
(53, 'bread', 3),
(54, 'Noodles', 3),
(60, 'egg', 3),
(61, 'milk', 2),
(64, 'Chocolates', 4),
(70, 'nnnnnnnnnnn', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `user_image` longtext NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_image`, `user_name`, `user_email`, `user_password`) VALUES
(1, '', 'fathi', 'fathi@gmail.com', 'fathi'),
(2, '', 'admin', 'admin@gmail.com', 'admin'),
(3, '', 'aysha', 'aysha@gmail.com', 'aysh'),
(5, '', 'tst', '', ''),
(8, '', 'abcd', 'sabrullafathima@gmail.com', '111'),
(9, '', 'sach', 'sabrullafathima@gmail.com', 'such123'),
(10, '', '`fathi123', 'gg@gmail.com', 'jiji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_id` (`course_id`),
  ADD UNIQUE KEY `course_name` (`course_name`);

--
-- Indexes for table `foodcategory`
--
ALTER TABLE `foodcategory`
  ADD PRIMARY KEY (`food_category_id`),
  ADD UNIQUE KEY `food_category_name` (`food_category_name`),
  ADD UNIQUE KEY `food_category_id` (`food_category_id`,`food_category_name`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredient_id`),
  ADD UNIQUE KEY `ingredient_name` (`ingredient_name`),
  ADD UNIQUE KEY `ingredient_id` (`ingredient_id`);

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`measurement_id`),
  ADD UNIQUE KEY `measurement_id` (`measurement_id`),
  ADD UNIQUE KEY `measurement_name` (`measurement_name`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`quantity_id`),
  ADD UNIQUE KEY `quantity_id` (`quantity_id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `ingredient_id` (`ingredient_id`),
  ADD KEY `ingredient_measurement_id` (`measurement_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`),
  ADD UNIQUE KEY `recipe_name` (`recipe_name`),
  ADD UNIQUE KEY `recipe_id` (`recipe_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `recipesteps`
--
ALTER TABLE `recipesteps`
  ADD PRIMARY KEY (`step_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD UNIQUE KEY `sub_category_name` (`sub_category_name`),
  ADD UNIQUE KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `food_category_id` (`food_category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `foodcategory`
--
ALTER TABLE `foodcategory`
  MODIFY `food_category_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ingredient_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `measurement_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `quantity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `recipesteps`
--
ALTER TABLE `recipesteps`
  MODIFY `step_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quantity`
--
ALTER TABLE `quantity`
  ADD CONSTRAINT `FK` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`ingredient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
