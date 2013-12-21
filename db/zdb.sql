-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2013 at 09:01 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `zcms_tmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modulebody` text COLLATE utf8_unicode_ci NOT NULL,
  `showing` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagetitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linklabel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pagebody` text COLLATE utf8_unicode_ci NOT NULL,
  `pageorder` int(11) NOT NULL,
  `showing` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastmodified` date NOT NULL,
  `extra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagetitle`, `linklabel`, `pagebody`, `pageorder`, `showing`, `keywords`, `description`, `lastmodified`, `extra`) VALUES
(1, 'Z-Burger | Home', 'Home', '<p style="text-align: center;">\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<img alt="" src="img/logostroke.png" /></p>\r\n', 1, '1', 'Home, Z-Burger, Glover Park,DC, Georgetown', '', '0000-00-00', ''),
(2, 'Menu', 'Menu', '<table width="500" border="0">\r\n  <tr>\r\n    <th scope="col" colspan="3">Hand-Crafted Burgers</th>\r\n  </tr>\r\n  <tr>\r\n    <td>Hamburger</td>\r\n    <td>$5.59 double</td>\r\n    <td>$3.89 single</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Cheeseburger</td>\r\n    <td>$6.29 double</td>\r\n    <td>$4.59 single</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Bacon Cheeseburger</td>\r\n    <td>$7.29 double</td>\r\n    <td>$5.59 single</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Turkey Burger (5.oz)</td>\r\n    <td colspan="2">$5.79</td>\r\n    \r\n  </tr>\r\n</table>\r\n<table width="500" border="0">\r\n    \r\n       <tr>\r\n    <th scope="col" colspan="3">Vegetarian</th>\r\n  </tr>\r\n    \r\n    <tr>\r\n      <td width="242">Grilled Cheese Sandwich</td>\r\n      <td width="242">$3.69</td>\r\n    </tr>\r\n    <tr>\r\n      <td>Veggie Burger (Black Bean)</td>\r\n      <td>$5.79</td>\r\n    </tr>\r\n</table>\r\n<br />\r\n<table width="500" border="0">\r\n  <tr>\r\n    <th scope="col" colspan="3">Kosher Hot Dogs</th>\r\n  </tr>\r\n  <tr>\r\n    <td width="242">100% Kosher Hot Dog</td>\r\n    <td width="242">$3.69</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Cheese or Bacon Dog</td>\r\n    <td>$4.59</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Bacon Cheese Dog</td>\r\n    <td>$5.39</td>\r\n  </tr>\r\n</table>\r\n<br />\r\n<table width="500" border="0">\r\n  <tr>\r\n    <th scope="col" colspan="3">Cheesesteaks</th>\r\n  </tr>\r\n  <tr>\r\n    <td width="242">8&quot; Philly Cheesesteak</td>\r\n    <td width="242">$7.49</td>\r\n  </tr>\r\n  <tr>\r\n    <td>8&quot; Original Cheesesteak</td>\r\n    <td>$7.49</td>\r\n  </tr>\r\n  <tr>\r\n    <td>8&quot; Bacon Philly Cheesesteak</td>\r\n    <td>$8.25</td>\r\n  </tr>\r\n  <tr>\r\n    <td>8&quot; Chicken Philly Cheesesteak</td>\r\n    <td>$7.99</td>\r\n  </tr>\r\n</table>\r\n  <p class="listulheader">Let your tastebuds run wild with any of our FREE toppings &amp; more!<br />\r\n  Say &quot;Everything&quot; or &quot;Loaded&quot; with order and receive all toppings shown below:</p>\r\n <ul>\r\n 	<li>Mayo,</li>\r\n    <li>Lettuce,</li>\r\n    <li>Tomato,</li>\r\n    <li>Pickles,</li>\r\n    <li>Fried Onion,</li>\r\n    <br />\r\n    <li>Sauteed Mushrooms,</li>\r\n    <li>Ketchup,</li>\r\n    <li>Mustard</li>\r\n </ul>\r\n \r\n <span class="listulheader">Sauces:</span> \r\n<ul>\r\n <li>Z-Sauce,</li>	\r\n <li>Bar-B-Q Sauce,</li>\r\n <li>Hot Sauce,</li>\r\n <li>A1 Sauce,</li>\r\n <br />\r\n <li>Honey Mustard,</li>\r\n <li>Mango Mayo,</li>\r\n <li>Chipotle Mayo</li>\r\n</ul>\r\n\r\n<p class="listulheader">Upon Request, Also Free: </p>\r\n<ul>\r\n <li>Raw Onion,</li>	\r\n <li>Jalepeno Peppers,</li>\r\n <li>Green Peppers,</li>\r\n <li>Relish,</li>\r\n <br />\r\n <li>Banana Peppers,</li>\r\n <li>Crushed Red Pepeprs,</li>\r\n <li>Sweet Pepper,</li>\r\n <br />\r\n  <li>Sauerkraut,</li>	\r\n <li>Honey Mustard,</li>\r\n <li>Pepper &amp; Salt,</li>\r\n <li>Z-Seasoning</li>\r\n</ul>\r\n<p class="listulheader">Premium Toppings (Add .75 Each)</p>\r\n<ul>\r\n 	<li>2 Onion Rings,</li>\r\n    <li>Applewood Bacon,</li>\r\n    <li>Fried Egg,</li>\r\n    <li>Guacamole,</li>\r\n    <li>Potato Chips</li>\r\n  <p>&nbsp;</p>\r\n</ul>\r\n<span class="itemheader">Fresh-cut Potatoes &amp; Onion Rings</span><br />\r\n<span class="listulheader">(We use Cholesterol-Free 100% Pure Peanut Oil)</span><br />\r\n<table width="500" border="0">\r\n<tr>\r\n	<td>Fries (Z-Style or Seasoned)</td>\r\n    <td>$2.99 regular</td>\r\n    <td>$4.99 large</td>\r\n</tr>\r\n<tr>\r\n	<td>Onion Rings</td>\r\n    <td colspan="2">$4.99 (large)\r\n</tr>\r\n<tr>\r\n	<td>1/2 Fries &amp; 1/2 Onion Rings</td>\r\n    <td colspan="2">$5.99</td>\r\n</tr>\r\n</table>\r\n<span class="itemheader">Drinks</span><br />\r\n<table width="500" border="0">\r\n<tr>\r\n<td>Fountain drinks</td>\r\n<td>$1.89 regular</td>\r\n<td>$2.19 large (free refills)</td>\r\n</tr>\r\n</table>\r\n<span class="zmenufooter">Z-Burger offers you food made fresh daily from ingredients of the highest quality. Our burgers are hand-formed ... our potatoes are fresh cut <br />... always fresh, never frozen. Period.</span><br />\r\n<span class="healthnotice">Note: Consuming raw or undercooked poultry or meat may increase risk of foodborne illness</span>', 2, '1', 'Menu, food, burgers, fries', '', '0000-00-00', ''),
(3, 'Events | ZBurger Glover Park', 'Events', '<p>\r\n	No events scheduled at this time.</p>\r\n', 3, '1', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hashed_password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hashed_password`) VALUES
(1, 'dredmin', '3ed11f39d608dbe88a79275119e3a85577181741');
