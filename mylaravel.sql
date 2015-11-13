-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2015 at 06:45 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mylaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_11_13_052521_create_mytests_table', 1),
('2015_11_13_095540_create_session_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mytests`
--

CREATE TABLE IF NOT EXISTS `mytests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `mytests`
--

INSERT INTO `mytests` (`id`, `user_id`, `title`, `description`, `tag`, `created_at`, `updated_at`) VALUES
(1, '1', 'My first post', 'My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '1', 'My second post title', 'My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. My second post description. ', '', '2015-11-10 18:00:00', '2015-11-11 18:00:00'),
(3, '1', 'My third post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'Forth post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', 'Five post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', 'Six post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', 'Seven post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', 'Eight post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 'Nine post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 'Ten post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '', 'Ten', 'Ten post description', '', '2015-11-13 03:07:46', '2015-11-13 03:07:46'),
(12, '', 'Eleven', 'Eleven description', '', '2015-11-13 03:12:38', '2015-11-13 03:12:38'),
(13, '', 'Eleven', 'Eleven description', '', '2015-11-13 03:13:12', '2015-11-13 03:13:12'),
(14, '', 'Eleven', 'Eleven description', '', '2015-11-13 03:13:15', '2015-11-13 03:13:15'),
(19, '', 'Thirteen', 'Thirteen post description', '', '2015-11-13 03:24:19', '2015-11-13 03:24:19'),
(20, '', 'Fourtheen', 'fourteen post description', '', '2015-11-13 03:25:38', '2015-11-13 03:25:38'),
(21, '', 'Fifteeen', 'Fifteen post description. ', '', '2015-11-13 03:26:26', '2015-11-13 03:26:26'),
(22, '', 'Sixteen', 'Sixteen post description', '', '2015-11-13 03:33:45', '2015-11-13 03:33:45'),
(23, '', 'Seventeen', 'seventeen post description', '', '2015-11-13 03:48:48', '2015-11-13 03:48:48'),
(24, '', 'Tweenty', 'Twenty description. ', '', '2015-11-13 04:01:40', '2015-11-13 04:01:40'),
(25, '', 'Tweenty', 'Twenty description. ', '', '2015-11-13 04:02:58', '2015-11-13 04:02:58'),
(26, '', 'Twenty One', 'Twenty one description', '', '2015-11-13 04:06:35', '2015-11-13 04:06:35'),
(27, '', 'Twenty Two', 'Twenty two description', '', '2015-11-13 04:07:28', '2015-11-13 04:07:28'),
(35, '', 'My last post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '2015-11-13 06:13:39', '2015-11-13 06:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
