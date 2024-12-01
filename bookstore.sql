-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2024 at 04:17 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--
CREATE DATABASE IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `genre` text NOT NULL,
  `price` double NOT NULL,
  `published_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `price`, `published_date`) VALUES
(100, 'Midnight Moon', 'Reinhold Hayden', 'drama', 8155.13, '2016-03-30'),
(99, 'Emerald Isle', 'Rhiamon Bramford', 'romance', 5750.27, '2008-04-03'),
(98, 'The Secret Garden', 'Garvy Marchington', 'western', 4589.39, '2012-04-19'),
(97, 'Midnight Moon', 'Elsinore Philot', 'superhero', 8142.32, '2004-07-06'),
(96, 'Mystic Shadows', 'Jeremy Castellini', 'documentary', 3728.75, '2012-02-28'),
(95, 'The Secret Garden', 'Armand Aikenhead', 'thriller', 3669.17, '2008-03-12'),
(94, 'Whispers in the Wind', 'Gideon McCullogh', 'superhero', 8101.28, '2014-02-12'),
(93, 'Golden Horizon', 'Candy Hardman', 'mystery', 5117.38, '2020-03-23'),
(92, 'Starlight Serenade', 'Mikael Baptiste', 'thriller', 490.27, '2002-05-26'),
(91, 'Golden Horizon', 'Arin Kurton', 'historical', 383.21, '2013-10-22'),
(90, 'The Secret Garden', 'Rock Puvia', 'horror', 6423, '2009-11-25'),
(89, 'Enchanted Dreams', 'Isa Widocks', 'fantasy', 6907.02, '2015-06-24'),
(88, 'The Secret Garden', 'Bobbie Duddy', 'documentary', 8121.06, '2018-10-21'),
(87, 'Starlight Serenade', 'Veradis Tilbey', 'comedy', 2605.44, '2008-12-13'),
(86, 'Echoes of Eternity', 'Aeriel Crosdill', 'horror', 1360.72, '2005-03-29'),
(85, 'Whispers in the Wind', 'Freddy Felder', 'superhero', 1843.97, '2014-04-11'),
(84, 'Starlight Serenade', 'Euell Gravell', 'romance', 4828.57, '2001-08-27'),
(83, 'Sapphire Skies', 'Aileen Syres', 'sports', 2278.84, '2001-04-24'),
(82, 'Sapphire Skies', 'Morty Benkhe', 'family', 2481.66, '2004-01-21'),
(81, 'Midnight Moon', 'Randee Tyce', 'family', 5627.45, '2008-03-16'),
(80, 'Echoes of Eternity', 'Norton Pott', 'western', 9039.36, '2005-01-15'),
(79, 'Whispers in the Wind', 'Romeo Jaslem', 'action', 7410.31, '2015-09-02'),
(78, 'Mystic Shadows', 'Ryann Clemmens', 'musical', 3372.05, '2014-06-25'),
(77, 'Emerald Isle', 'Ilario Pilling', 'adventure', 3038.47, '2007-09-13'),
(76, 'Enchanted Dreams', 'Ellynn Reiner', 'fantasy', 5440.38, '2005-09-13'),
(75, 'Starlight Serenade', 'Wilmer Black', 'adventure', 4699, '2013-08-04'),
(74, 'Midnight Moon', 'Honey Girardez', 'drama', 5455, '2011-09-20'),
(73, 'Echoes of Eternity', 'Bailie Ives', 'adventure', 2009.57, '2008-11-13'),
(72, 'Mystic Shadows', 'Carlynne Drewett', 'family', 77.74, '2006-10-22'),
(71, 'Midnight Moon', 'Latia Le - Count', 'documentary', 3502.25, '2016-12-04'),
(70, 'Golden Horizon', 'Mariquilla Kolodziej', 'documentary', 2221.64, '2010-09-08'),
(69, 'Starlight Serenade', 'Benoite Sleeman', 'historical', 7951.78, '2002-12-17'),
(68, 'Starlight Serenade', 'Blaine Seilmann', 'animation', 8106.61, '2013-01-23'),
(67, 'Starlight Serenade', 'Rockey Powles', 'mystery', 4182.94, '2012-05-07'),
(66, 'Enchanted Dreams', 'Devon Dovington', 'romance', 2746.09, '2020-02-26'),
(65, 'Starlight Serenade', 'Bev Mordanti', 'western', 2393.63, '2016-09-21'),
(64, 'Midnight Moon', 'Nancy Chatenier', 'animation', 2828.54, '2011-11-08'),
(63, 'Starlight Serenade', 'Rona Arnecke', 'superhero', 3330.99, '2001-08-24'),
(62, 'The Secret Garden', 'Yasmin Bolf', 'musical', 4290.26, '2006-12-24'),
(61, 'Whispers in the Wind', 'Jasen Rymmer', 'thriller', 2827.84, '2003-10-31'),
(60, 'Mystic Shadows', 'Alvin Grinov', 'crime', 6480.31, '2015-11-30'),
(59, 'Whispers in the Wind', 'Amabel Alentyev', 'western', 6064.17, '2003-10-31'),
(58, 'Echoes of Eternity', 'Rudd Purslow', 'superhero', 621.03, '2018-12-18'),
(57, 'The Secret Garden', 'Anatollo Oakland', 'animation', 3043.75, '2013-12-09'),
(56, 'Starlight Serenade', 'Merwyn Ainge', 'historical', 3060.54, '2014-12-11'),
(55, 'Emerald Isle', 'Kristoforo Tunstall', 'sci-fi', 1311.49, '2014-11-24'),
(54, 'Whispers in the Wind', 'Rosco Enrdigo', 'animation', 6900.19, '2016-03-08'),
(53, 'The Secret Garden', 'Jasmin Tertre', 'fantasy', 5584.99, '2017-08-03'),
(52, 'Whispers in the Wind', 'Nettle Craigmyle', 'mystery', 3186.05, '2017-05-29'),
(51, 'Emerald Isle', 'Violette Bode', 'musical', 1035.8, '2005-04-16'),
(50, 'Sapphire Skies', 'Margaux Tonna', 'horror', 1835.38, '2005-06-13'),
(2, 'Whispers in the Wind', 'Melodee Phillis', 'family', 58.3, '2018-07-24'),
(3, 'Mystic Shadows', 'Marvin Maddocks', 'family', 6888.38, '2003-08-03'),
(4, 'Echoes of Eternity', 'Peter McTiernan', 'musical', 5125.42, '2010-07-11'),
(5, 'Mystic Shadows', 'Val Honeywood', 'mystery', 5497.87, '2013-08-23'),
(6, 'Mystic Shadows', 'Arlie Alyukin', 'adventure', 2858.34, '2008-11-30'),
(7, 'Enchanted Dreams', 'Fidelio Lequeux', 'horror', 3432.7, '2018-09-18'),
(8, 'Echoes of Eternity', 'Ronny Frude', 'superhero', 9466.54, '2016-07-11'),
(9, 'Sapphire Skies', 'Marcelle Steet', 'romance', 177.09, '2018-01-14'),
(10, 'Whispers in the Wind', 'Esra Dominico', 'war', 5181.16, '2010-10-02'),
(11, 'Enchanted Dreams', 'Juditha Gimert', 'comedy', 2917.69, '2011-09-03'),
(12, 'Sapphire Skies', 'Grantley Heifer', 'thriller', 5014.23, '2012-09-06'),
(13, 'Mystic Shadows', 'Phillida Corn', 'drama', 900.33, '2018-04-21'),
(14, 'Mystic Shadows', 'Jennine Cockren', 'musical', 7212.92, '2016-07-15'),
(15, 'The Secret Garden', 'Lauralee Medgewick', 'romance', 6247.89, '2008-11-04'),
(16, 'Echoes of Eternity', 'Dacey Ambage', 'family', 1690.76, '2016-09-10'),
(17, 'Midnight Moon', 'Tybalt Allderidge', 'sci-fi', 6671.3, '2001-01-25'),
(18, 'The Secret Garden', 'Rivalee Shark', 'family', 1300.69, '2016-12-17'),
(19, 'Whispers in the Wind', 'Leone Ashtonhurst', 'fantasy', 5425.57, '2005-01-31'),
(20, 'Midnight Moon', 'Layla Cobbled', 'sci-fi', 2073.07, '2005-11-11'),
(21, 'Enchanted Dreams', 'Page Lytell', 'drama', 5186.52, '2008-11-02'),
(22, 'Enchanted Dreams', 'Marabel Spofford', 'romance', 3714.82, '2007-10-23'),
(23, 'Enchanted Dreams', 'Paulette Lofthouse', 'historical', 4173.75, '2006-01-04'),
(24, 'Starlight Serenade', 'Zabrina Lernihan', 'drama', 9013.19, '2016-07-29'),
(25, 'Whispers in the Wind', 'Jennette Cassam', 'action', 5404.63, '2013-07-09'),
(26, 'Mystic Shadows', 'Riordan Beaby', 'drama', 1961.8, '2004-08-15'),
(27, 'Mystic Shadows', 'Allegra Woolen', 'animation', 9391.17, '2020-03-18'),
(28, 'Whispers in the Wind', 'Lola Giaomozzo', 'comedy', 3698.57, '2014-12-25'),
(29, 'Echoes of Eternity', 'Collette Gerauld', 'mystery', 4289.52, '2003-04-17'),
(30, 'Starlight Serenade', 'Mendy Aylesbury', 'historical', 507.85, '2019-04-23'),
(31, 'Golden Horizon', 'Suzy Fayers', 'war', 8953.79, '2014-09-11'),
(32, 'Enchanted Dreams', 'Barnabe Crudge', 'family', 3510.29, '2016-01-06'),
(33, 'Enchanted Dreams', 'Gwendolin Bein', 'fantasy', 4035.73, '2006-10-27'),
(34, 'Starlight Serenade', 'Jacob Witter', 'adventure', 6447.6, '2017-11-06'),
(35, 'The Secret Garden', 'Carly Kaplan', 'documentary', 1794, '2020-11-03'),
(36, 'Enchanted Dreams', 'Alric Hentze', 'western', 2111.68, '2018-03-15'),
(37, 'Midnight Moon', 'Patrizius Inger', 'historical', 757.69, '2009-05-05'),
(38, 'Starlight Serenade', 'Ashil Frier', 'comedy', 8757.36, '2002-02-08'),
(39, 'Sapphire Skies', 'Rey Flaws', 'adventure', 4996.42, '2005-06-23'),
(40, 'Mystic Shadows', 'Adriaens Hanwright', 'animation', 4933.32, '2015-06-19'),
(41, 'Emerald Isle', 'Kaleb Shepcutt', 'family', 5919.67, '2013-03-06'),
(42, 'Echoes of Eternity', 'Lewes Minker', 'adventure', 9587.54, '2003-05-31'),
(43, 'Sapphire Skies', 'Merralee Rabl', 'drama', 2936.52, '2019-05-22'),
(44, 'Whispers in the Wind', 'Jephthah Pinckstone', 'documentary', 1209.8, '2012-05-08'),
(45, 'Echoes of Eternity', 'Emiline Brainsby', 'animation', 2073.05, '2012-07-17'),
(46, 'Enchanted Dreams', 'Abbey Mowles', 'documentary', 6365.74, '2017-06-22'),
(47, 'Sapphire Skies', 'Veradis Sweeney', 'war', 6626.79, '2012-11-22'),
(48, 'Starlight Serenade', 'Emma Helliar', 'comedy', 3364.38, '2014-05-09'),
(49, 'Starlight Serenade', 'Dan Eastby', 'musical', 1959, '2003-04-09');

SELECT Iid FROM books
ORDER BY id ASC;

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

DROP TABLE IF EXISTS `borrowed_books`;
CREATE TABLE IF NOT EXISTS `borrowed_books` (
  `borrow_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `book_id` int DEFAULT NULL,
  `borrow_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  PRIMARY KEY (`borrow_id`),
  KEY `user_id` (`user_id`),
  KEY `book_id` (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`borrow_id`, `user_id`, `book_id`, `borrow_date`, `return_date`) VALUES
(1, 2, 2, '2024-11-05', '2024-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'jessy', 'jessy', 'jessyj@gmail.com', '$2y$10$bBsXc9MbPVOsSWv39myzt.ewuQxBkK3TTayz9aeRzsSTMu/.fUbp.'),
(6, 'allysia', 'ally', 'ally@gmail.com', '$2y$10$4GqCOwnSrP5yfZY/aXkwY.wD0X/Infpm70jWhXf7q/8mTFfi.bxeS'),
(5, 'qwerty', 'qwerty', 'qwerty@gmail.com', '$2y$10$WJl7.1//tPNJcDLCsZ12lOe5B6PPZhDxLAt2Lo0XP0ITRVD8VjvQm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
