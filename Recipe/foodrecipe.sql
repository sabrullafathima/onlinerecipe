-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 08:25 AM
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
-- Database: `foodrecipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(25) NOT NULL,
  `r_category` varchar(25) NOT NULL,
  `r_title` varchar(25) NOT NULL,
  `r_image` longtext NOT NULL,
  `ingredients` longtext NOT NULL,
  `directions` longtext NOT NULL,
  `prapare_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `r_category`, `r_title`, `r_image`, `ingredients`, `directions`, `prapare_time`) VALUES
(1, 'BREAD', 'BEST BANANA BREAD', 'upload_image/bread/img1.jpg', '1?2\r\ncup butter, softened\r\n1\r\ncup granulated sugar\r\n2\r\neggs, beaten\r\n3\r\nbananas, finely crushed (for serious and extreme moist and delicious, try 4 bananas)\r\n1 1?2\r\ncups all-purpose flour\r\n1\r\nteaspoon baking soda\r\n1?2\r\nteaspoon salt\r\n1?2\r\nteaspoon vanilla (optional)', 'Remove odd pots and pans from oven.\r\nPreheat oven to 350º / 180º.\r\nCream together butter and sugar.\r\nAdd eggs and crushed bananas.\r\nCombine well.\r\nSift together flour, soda and salt. Add to creamed mixture. Add vanilla.\r\nMix just until combined. Do not overmix.\r\nPour into greased and floured loaf pan.\r\nBake at 350º / 180º for 55 minutes.\r\nKeeps well, refrigerated.', '01:10:00'),
(2, 'BRAED', 'BEER BREAD', 'upload_image/bread/img2.jpg', '3\r\ncups flour (sifted)\r\n3\r\nteaspoons baking powder (omit if using Self-Rising Flour)\r\n1\r\nteaspoon salt (omit if using Self-Rising Flour)\r\n1?4\r\ncup sugar\r\n1\r\n(12 ounce) can beer\r\n1?2\r\ncup melted butter (1/4 cup will do just fine)', 'Preheat oven to 375 degrees.\r\nMix dry ingredients and beer.\r\nPour into a greased loaf pan.\r\nPour melted butter over mixture.\r\nBake 1 hour, remove from pan and cool for at least 15 minutes.\r\nUPDATED NOTES: This recipe makes a very hearty bread with a crunchy, buttery crust. If you prefer a softer crust (like a traditional bread) mix the butter into the batter instead of pouring it over the top.\r\nSifting flour for bread recipes is a must-do. Most people just scoop the 1 cup measure in the flour canister and level it off. That compacts the flour and will turn your bread into a \"hard biscuit\" as some have described. That\'s because they aren\'t sifting their flour! If you do not have a sifter, use a spoon to spoon the flour into the 1 cup measure. Try it once the \"correct\" way and you will see an amazing difference in the end product.\r\nI have had many email from you kind folks about using non-alcoholic beverages instead of beer. That is fine to do but I highly recommend adding a packet of Dry Active Yeast or 2 teaspoons of Bread (Machine) Yeast so that you get a proper rise.\r\nThe final result should be a thick, hearty and very tasteful bread, NOT A BRICK! ;).\r\nThank you all for the incredibly nice comments and those of you who left a bad review - learn to sift sift SIFT! You will be amazed at the results you get.\r\n', '02:00:00'),
(3, 'BRAED', 'SOUR CREAM BANANA BREAD', 'upload_image/bread/img3.jpg', '\r\n1?2\r\ncup margarine or 1/2 cup butter\r\n1\r\ncup sugar\r\n2\r\neggs\r\n1\r\nteaspoon vanilla\r\n1 1?2\r\ncups flour\r\n1\r\nteaspoon baking soda\r\n1?2\r\nteaspoon salt\r\n1\r\ncup mashed banana\r\n1?2\r\ncup chopped nuts (omit if you don\'t like nuts)\r\n1?2\r\ncup sour cream', 'Grease 1 large loaf pan.\r\nCream margarine, sugar, eggs and vanilla.\r\nAdd dry ingredients, then bananas, nuts and sour cream.\r\nMix well.\r\nBake at 350 F for 1 hour.', '01:10:00'),
(4, 'BRAED', 'BANANA BANANA BREAD', 'upload_image/bread/img4.jpg', '2\r\ncups all-purpose flour\r\n1\r\nteaspoon baking soda\r\n1?4\r\nteaspoon salt\r\n1?2\r\ncup butter\r\n3?4\r\ncup brown sugar\r\n2\r\nlarge eggs, beaten\r\n2 1?3\r\ncups mashed very overripe bananas', 'Preheat oven to 350°.\r\nLightly grease 9 x 5 loaf pan.\r\nIn large bowl, combine flour, soda and salt.\r\nIn separate bowl, cream together butter and brown sugar.\r\nStir in eggs and mashed bananas until well blended.\r\nStir banana mixture into flour mixture; stir just to moisten.\r\nPour batter into prepared loaf pan.\r\nBake in preheated oven for 60-65 minutes until a toothpick inserted into center of loaf comes out clean.\r\nLet bread cool in pan for 10 minutes, then turn out onto a wire rack.', '01:10:00'),
(5, 'DESSERT', 'PEACH COBBLER', 'upload_image/dessert/img1.jpg', '', '', '00:00:00'),
(7, 'DESSERT', 'BROWNIES', 'upload_image/dessert/img2.jpg', '1\r\ncup sugar\r\n1?2\r\ncup margarine\r\n1?3\r\ncup unsweetened cocoa powder\r\n2\r\neggs\r\n1\r\nteaspoon vanilla\r\n2?3\r\ncup flour\r\n1?2\r\nteaspoon baking powder\r\n1?4\r\nteaspoon salt\r\n1?2\r\ncup chopped walnuts\r\nCOCOA GLAZE\r\n1\r\ncup icing sugar\r\n2\r\ntablespoons cocoa powder\r\n2\r\ntablespoons margarine (soft)\r\n1?4\r\nteaspoon vanilla', 'The first 3 ingredients cook over a stove on medium heat, till margarine melts.\r\nRemove from heat, add the eggs and vanilla.\r\nThen add the remaining ingredients.\r\nStir in the walnuts.\r\nPut in a greased 8 inch squared pan, bake at 350 for 25 minutes.\r\nI make a double batch.\r\nCocoa Glaze: Combine icing sugar, and cocoa powder.\r\nBeat in margarine, add 1-2 tbsps of boiling water to make a smooth glaze.', '00:00:00'),
(8, 'RICE', 'CHINESE FRIED RICE', '', '', '', '00:00:00'),
(9, 'RICE', 'MEXICAN RICE', '', '', '', '01:00:00'),
(10, 'RICE', 'QUICK SPANISH RICE', '', '', '', '00:00:00'),
(11, 'BUNS', 'HOMEMADE HAMBURGER BUNS', '', '', '', '00:00:00'),
(12, 'BUNS', 'TASTY BUNS', '', '', '', '00:00:00'),
(13, 'BUNS', 'MOM\'S AIR BUNS', '', '', '', '00:00:00'),
(14, 'BUNS', 'STICKY BUNS', '', '1 1?4\r\ncups milk\r\n1\r\nteaspoon vanilla extract\r\n3\r\ntablespoons butter\r\n3\r\ncups all-purpose flour\r\n3\r\ntablespoons sugar\r\n1 1?4\r\nteaspoons salt\r\n2\r\nteaspoons instant yeast\r\n3?4\r\ncup brown sugar\r\n1\r\ntablespoon cinnamon\r\n6\r\ntablespoons butter\r\n1?3\r\ncup butter\r\n1\r\ncup brown sugar\r\n1?4\r\ncup light corn syrup\r\n1\r\ncup pecans, chopped', 'Place the flour, white sugar, salt, yeast, milk, vanilla, and 3 tablespoons of butter into your bread machine as directed in your user\'s manual. Program it for the \"Dough\" cycle.\r\nWhile the dough is mixing, prepare the filling by mixing the 3/4 cup brown sugar and cinnamon together. Let the 6 tablespoons of butter come to room temperature.\r\nGrease the bottom and sides of a 13\"x9\" baking pan.\r\nWhen the dough cycle is nearly finished, make the caramel topping by combining the 1/3 cup butter, 1 cup brown sugar, and corn syrup in a small pan over moderate heat. Heat and stir just until the syrup is dissolved, then pour it into the baking pan and spread it out. Sprinkle the chopped pecans over the caramel.\r\nWhen the dough cycle ends, remove the dough and place on a lightly floured surface. Roll it out to make a 12\" by 15\" rectangle.\r\nSpread the softened butter across the dough, leaving a 1-inch border on all sides. Sprinkle the cinnamon mixture over the butter.\r\nRoll up the dough like a jelly roll, lengthwise. Pinch the seam closed.\r\nCut the dough into 1 1/2\" sections and place them in the baking pan, close together, with the spiral cut down.\r\nCover the buns tightly with plastic wrap and refrigerate overnight.\r\nIn the morning, take the pan out of the refrigreator while you preheat the oven to 350 degrees.\r\nAfter the dough has been out of the refrigerator about 20-30 minutes, bake at 350 degrees for about 30-35 minutes, or until buns are nicely browned on top.\r\nRemove from the oven, then place a wire rack on top the pan. Place another baking sheet or pan over that. While firmly holding these three together, flip the buns over, being careful not to let the hot caramel drip on you.\r\nLet the buns cool 20-30 minutes before serving.', '00:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'fathi', 'sabrullafathima@gmail.com', '1111'),
(2, 'admin', 'admin@gmail.com', 'admin'),
(3, 'abcd', 'abcd@gmail.com', 'abcd'),
(4, 'sabrullafathima', 'sabrullafathima@gmail.com', 'fathi'),
(5, 'hjgu', 'sabrullafathima@gmail.com', '1234'),
(6, 'fathi', 'sabrullafathima@gmail.com', '1111'),
(7, 'fathi', 'sabrullafathima@gmail.com', '1111'),
(8, 'fathi', 'sabrullafathima@gmail.com', '1111'),
(9, 'jiji', 'jiji@gmail.com', 'jiji'),
(10, 'ji', 'jiji@gmail.com', 'jiji'),
(11, 'sachchu', 'sabrullafathima@gmail.com', '1111'),
(12, 'minha', 'minha@gmail.com', '1111'),
(13, 'nandhu', 'sabrullafathima@gmail.com', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
