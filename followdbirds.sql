-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2018 at 07:22 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `followdbirds`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `ads_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `place` varchar(32) NOT NULL,
  `code` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `affiliates_payments`
--

CREATE TABLE IF NOT EXISTS `affiliates_payments` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `email` varchar(64) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `method` varchar(64) NOT NULL,
  `time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `announcement_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(32) NOT NULL,
  `code` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  PRIMARY KEY (`announcement_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `announcements_users`
--

CREATE TABLE IF NOT EXISTS `announcements_users` (
  `announcement_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `announcement_id_user_id` (`announcement_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banned_ips`
--

CREATE TABLE IF NOT EXISTS `banned_ips` (
  `ip_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(64) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`ip_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE IF NOT EXISTS `conversations` (
  `conversation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `last_message_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`conversation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `last_message_id`) VALUES
(1, 2),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `conversations_messages`
--

CREATE TABLE IF NOT EXISTS `conversations_messages` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `conversation_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `message` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=5 ;

--
-- Dumping data for table `conversations_messages`
--

INSERT INTO `conversations_messages` (`message_id`, `conversation_id`, `user_id`, `message`, `image`, `time`) VALUES
(1, 1, 2, 'hi', '', '2018-02-01 07:46:00'),
(2, 1, 1, 'hello', '', '2018-02-01 07:46:10'),
(3, 2, 5, 'dsadsad', '', '2018-02-03 07:45:04'),
(4, 2, 1, 'Hello', '', '2018-02-03 07:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `conversations_users`
--

CREATE TABLE IF NOT EXISTS `conversations_users` (
  `conversation_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  UNIQUE KEY `conversation_id_user_id` (`conversation_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Dumping data for table `conversations_users`
--

INSERT INTO `conversations_users` (`conversation_id`, `user_id`, `seen`, `deleted`) VALUES
(1, 2, '1', '0'),
(1, 1, '1', '0'),
(2, 5, '1', '0'),
(2, 1, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE IF NOT EXISTS `custom_fields` (
  `field_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(32) NOT NULL,
  `select_options` text NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `place` varchar(32) NOT NULL,
  `length` int(10) NOT NULL DEFAULT '32',
  `mandatory` enum('0','1') NOT NULL DEFAULT '0',
  `in_registration` enum('0','1') NOT NULL DEFAULT '0',
  `in_profile` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `emojis`
--

CREATE TABLE IF NOT EXISTS `emojis` (
  `emoji_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pattern` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY (`emoji_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=152 ;

--
-- Dumping data for table `emojis`
--

INSERT INTO `emojis` (`emoji_id`, `pattern`, `class`) VALUES
(1, ':)', 'smile'),
(2, '(&lt;', 'joy'),
(3, ':D', 'smiley'),
(4, ':(', 'worried'),
(5, ':relaxed:', 'relaxed'),
(6, ':P', 'stuck-out-tongue'),
(7, ':O', 'open-mouth'),
(8, ':/', 'confused'),
(9, ';)', 'wink'),
(10, ';(', 'sob'),
(11, 'B|', 'sunglasses'),
(12, ':disappointed:', 'disappointed'),
(13, ':yum:', 'yum'),
(14, '^_^', 'grin'),
(15, ':no_mouth:', 'no-mouth'),
(16, '*_*', 'heart-eyes'),
(17, '*)', 'kissing-heart'),
(18, 'O:)', 'innocent'),
(19, ':angry:', 'angry'),
(20, ':rage:', 'rage'),
(21, ':smirk:', 'smirk'),
(22, ':flushed:', 'flushed'),
(23, ':satisfied:', 'satisfied'),
(24, ':relieved:', 'relieved'),
(25, ':sleeping:', 'sleeping'),
(26, ':stuck_out_tongue:', 'stuck-out-tongue'),
(27, ':stuck_out_tongue_closed_eyes:', 'stuck-out-tongue-closed-eyes'),
(28, ':frowning:', 'frowning'),
(29, ':anguished:', 'anguished'),
(30, ':open_mouth:', 'open-mouth'),
(31, ':grimacing:', 'grimacing'),
(32, ':hushed:', 'hushed'),
(33, ':expressionless:', 'expressionless'),
(34, ':unamused:', 'unamused'),
(35, ':sweat_smile:', 'sweat-smile'),
(36, ':sweat:', 'sweat'),
(37, ':confounded:', 'confounded'),
(38, ':weary:', 'weary'),
(39, ':pensive:', 'pensive'),
(40, ':fearful:', 'fearful'),
(41, ':cold_sweat:', 'cold-sweat'),
(42, ':persevere:', 'persevere'),
(43, ':cry:', 'cry'),
(44, ':astonished:', 'astonished'),
(45, ':scream:', 'scream'),
(46, ':mask:', 'mask'),
(47, ':tired_face:', 'tired-face'),
(48, ':triumph:', 'triumph'),
(49, ':dizzy_face:', 'dizzy-face'),
(50, ':imp:', 'imp'),
(51, ':smiling_imp:', 'smiling-imp'),
(52, ':neutral_face:', 'neutral-face'),
(53, ':alien:', 'alien'),
(54, ':yellow_heart:', 'yellow-heart'),
(55, ':blue_heart:', 'blue-heart'),
(56, ':blue_heart:', 'blue-heart'),
(57, ':heart:', 'heart'),
(58, ':green_heart:', 'green-heart'),
(59, ':broken_heart:', 'broken-heart'),
(60, ':heartbeat:', 'heartbeat'),
(61, ':heartpulse:', 'heartpulse'),
(62, ':two_hearts:', 'two-hearts'),
(63, ':revolving_hearts:', 'revolving-hearts'),
(64, ':cupid:', 'cupid'),
(65, ':sparkling_heart:', 'sparkling-heart'),
(66, ':sparkles:', 'sparkles'),
(67, ':star:', 'star'),
(68, ':star2:', 'star2'),
(69, ':dizzy:', 'dizzy'),
(70, ':boom:', 'boom'),
(71, ':exclamation:', 'exclamation'),
(72, ':anger:', 'anger'),
(73, ':question:', 'question'),
(74, ':grey_exclamation:', 'grey-exclamation'),
(75, ':grey_question:', 'grey-question'),
(76, ':zzz:', 'zzz'),
(77, ':dash:', 'dash'),
(78, ':sweat_drops:', 'sweat-drops'),
(79, ':notes:', 'notes'),
(80, ':musical_note:', 'musical-note'),
(81, ':fire:', 'fire'),
(82, ':poop:', 'poop'),
(83, ':thumbsup:', 'thumbsup'),
(84, ':thumbsdown:', 'thumbsdown'),
(85, ':ok_hand:', 'ok-hand'),
(86, ':punch:', 'punch'),
(87, ':fist:', 'fist'),
(88, ':v:', 'v'),
(89, ':wave:', 'wave'),
(90, ':hand:', 'hand'),
(91, ':raised_hand:', 'raised-hand'),
(92, ':open_hands:', 'open-hands'),
(93, ':point_up:', 'point-up'),
(94, ':point_down:', 'point-down'),
(95, ':point_left:', 'point-left'),
(96, ':point_right:', 'point-right'),
(97, ':raised_hands:', 'raised-hands'),
(98, ':pray:', 'pray'),
(99, ':clap:', 'clap'),
(100, ':muscle:', 'muscle'),
(101, ':runner:', 'runner'),
(102, ':couple:', 'couple'),
(103, ':family:', 'family'),
(104, ':two_men_holding_hands:', 'two-men-holding-hands'),
(105, ':two_women_holding_hands:', 'two-women-holding-hands'),
(106, ':dancer:', 'dancer'),
(107, ':dancers:', 'dancers'),
(108, ':ok_woman:', 'ok-woman'),
(109, ':no_good:', 'no-good'),
(110, ':information_desk_person:', 'information-desk-person'),
(111, ':bride_with_veil:', 'bride-with-veil'),
(112, ':couplekiss:', 'couplekiss'),
(113, ':couple_with_heart:', 'couple-with-heart'),
(114, ':nail_care:', 'nail-care'),
(115, ':boy:', 'boy'),
(116, ':girl:', 'girl'),
(117, ':woman:', 'woman'),
(118, ':man:', 'man'),
(119, ':baby:', 'baby'),
(120, ':older_woman:', 'older-woman'),
(121, ':older_man:', 'older-man'),
(122, ':cop:', 'cop'),
(123, ':angel:', 'angel'),
(124, ':princess:', 'princess'),
(125, ':smiley_cat:', 'smiley-cat'),
(126, ':smile_cat:', 'smile-cat'),
(127, ':heart_eyes_cat:', 'heart-eyes-cat'),
(128, ':kissing_cat:', 'kissing-cat'),
(129, ':smirk_cat:', 'smirk-cat'),
(130, ':scream_cat:', 'scream-cat'),
(131, ':crying_cat_face:', 'crying-cat-face'),
(132, ':joy_cat:', 'joy-cat'),
(133, ':pouting_cat:', 'pouting-cat'),
(134, ':japanese_ogre:', 'japanese-ogre'),
(135, ':see_no_evil:', 'see-no-evil'),
(136, ':hear_no_evil:', 'hear-no-evil'),
(137, ':speak_no_evil:', 'speak-no-evil'),
(138, ':guardsman:', 'guardsman'),
(139, ':skull:', 'skull'),
(140, ':feet:', 'feet'),
(141, ':lips:', 'lips'),
(142, ':kiss:', 'kiss'),
(143, ':droplet:', 'droplet'),
(144, ':ear:', 'ear'),
(145, ':eyes:', 'eyes'),
(146, ':nose:', 'nose'),
(147, ':tongue:', 'tongue'),
(148, ':love_letter:', 'love-letter'),
(149, ':speech_balloon:', 'speech-balloon'),
(150, ':thought_balloon:', 'thought-balloon'),
(151, ':sunny:', 'sunny');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_privacy` enum('secret','closed','public') DEFAULT 'public',
  `event_admin` int(10) unsigned NOT NULL,
  `event_category` int(10) unsigned NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_location` varchar(255) DEFAULT NULL,
  `event_description` text NOT NULL,
  `event_start_date` datetime NOT NULL,
  `event_end_date` datetime NOT NULL,
  `event_cover` varchar(255) DEFAULT NULL,
  `event_cover_id` int(10) unsigned DEFAULT NULL,
  `event_album_covers` int(10) DEFAULT NULL,
  `event_album_timeline` int(10) DEFAULT NULL,
  `event_pinned_post` int(10) DEFAULT NULL,
  `event_invited` int(10) unsigned NOT NULL DEFAULT '0',
  `event_interested` int(10) unsigned NOT NULL DEFAULT '0',
  `event_going` int(10) unsigned NOT NULL DEFAULT '0',
  `event_date` datetime NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events_categories`
--

CREATE TABLE IF NOT EXISTS `events_categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=23 ;

--
-- Dumping data for table `events_categories`
--

INSERT INTO `events_categories` (`category_id`, `category_name`) VALUES
(1, 'Art'),
(2, 'Causes'),
(3, 'Crafts'),
(4, 'Dance'),
(5, 'Drinks'),
(6, 'Film'),
(7, 'Fitness'),
(8, 'Food'),
(9, 'Games'),
(10, 'Gardening'),
(11, 'Health'),
(12, 'Home'),
(13, 'Literature'),
(14, 'Music'),
(15, 'Networking'),
(16, 'Other'),
(17, 'Party'),
(18, 'Religion'),
(19, 'Shopping'),
(20, 'Sports'),
(21, 'Theater'),
(22, 'Wellness');

-- --------------------------------------------------------

--
-- Table structure for table `events_members`
--

CREATE TABLE IF NOT EXISTS `events_members` (
  `event_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `is_invited` enum('0','1') DEFAULT '0',
  `is_interested` enum('0','1') DEFAULT '0',
  `is_going` enum('0','1') DEFAULT '0',
  UNIQUE KEY `group_id_user_id` (`event_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `followings`
--

CREATE TABLE IF NOT EXISTS `followings` (
  `user_id` int(10) unsigned NOT NULL,
  `following_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_id_following_id` (`user_id`,`following_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Dumping data for table `followings`
--

INSERT INTO `followings` (`user_id`, `following_id`) VALUES
(1, 2),
(1, 5),
(1, 8),
(1, 9),
(1, 10),
(1, 15),
(2, 1),
(2, 5),
(2, 8),
(2, 9),
(2, 10),
(5, 1),
(5, 2),
(5, 8),
(5, 9),
(5, 10),
(8, 1),
(8, 2),
(8, 10),
(9, 1),
(9, 2),
(9, 8),
(9, 10),
(10, 1),
(10, 2),
(10, 5),
(10, 8),
(10, 9),
(15, 1),
(15, 9);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_one_id` int(10) unsigned NOT NULL,
  `user_two_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_one_id_user_two_id` (`user_one_id`,`user_two_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_one_id`, `user_two_id`, `status`) VALUES
(1, 2, 1, 1),
(2, 5, 9, 0),
(3, 5, 2, 1),
(4, 5, 1, 1),
(5, 5, 8, 0),
(6, 5, 10, 1),
(7, 9, 2, 1),
(8, 9, 10, 1),
(9, 9, 1, 1),
(10, 9, 8, 0),
(11, 8, 2, 1),
(12, 8, 10, 1),
(13, 8, 1, 1),
(14, 10, 1, 1),
(15, 10, 2, 1),
(17, 15, 9, 0),
(19, 1, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `game_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `source` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `game_players`
--

CREATE TABLE IF NOT EXISTS `game_players` (
  `game_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `game_id_user_id` (`game_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_privacy` enum('secret','closed','public') DEFAULT 'public',
  `group_admin` int(10) unsigned NOT NULL,
  `group_name` varchar(64) NOT NULL,
  `group_title` varchar(255) NOT NULL,
  `group_description` text NOT NULL,
  `group_picture` varchar(255) DEFAULT NULL,
  `group_picture_id` int(10) unsigned DEFAULT NULL,
  `group_cover` varchar(255) DEFAULT NULL,
  `group_cover_id` int(10) unsigned DEFAULT NULL,
  `group_album_pictures` int(10) DEFAULT NULL,
  `group_album_covers` int(10) DEFAULT NULL,
  `group_album_timeline` int(10) DEFAULT NULL,
  `group_pinned_post` int(10) DEFAULT NULL,
  `group_members` int(10) unsigned NOT NULL DEFAULT '0',
  `group_date` datetime NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `username` (`group_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_privacy`, `group_admin`, `group_name`, `group_title`, `group_description`, `group_picture`, `group_picture_id`, `group_cover`, `group_cover_id`, `group_album_pictures`, `group_album_covers`, `group_album_timeline`, `group_pinned_post`, `group_members`, `group_date`) VALUES
(1, 'public', 1, 'natives', 'Natives Of Uniterrenes', 'We All Are Natives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2018-02-15 08:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `groups_members`
--

CREATE TABLE IF NOT EXISTS `groups_members` (
  `group_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `approved` enum('0','1') NOT NULL DEFAULT '0',
  UNIQUE KEY `group_id_user_id` (`group_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Dumping data for table `groups_members`
--

INSERT INTO `groups_members` (`group_id`, `user_id`, `approved`) VALUES
(1, 1, '1'),
(1, 15, '1');

-- --------------------------------------------------------

--
-- Table structure for table `market_categories`
--

CREATE TABLE IF NOT EXISTS `market_categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=12 ;

--
-- Dumping data for table `market_categories`
--

INSERT INTO `market_categories` (`category_id`, `category_name`) VALUES
(1, 'Apparel &amp; Accessories'),
(2, 'Autos &amp; Vehicles'),
(3, 'Baby &amp; Children&#039;s Products'),
(4, 'Beauty Products &amp; Services'),
(5, 'Computers &amp; Peripherals'),
(6, 'Consumer Electronics'),
(7, 'Dating Services'),
(8, 'Financial Services'),
(9, 'Gifts &amp; Occasions'),
(10, 'Home &amp; Garden'),
(11, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `notification_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `to_user_id` int(10) unsigned NOT NULL,
  `from_user_id` int(10) unsigned NOT NULL,
  `action` varchar(32) NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `node_url` varchar(255) NOT NULL,
  `notify_id` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`notification_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `to_user_id`, `from_user_id`, `action`, `node_type`, `node_url`, `notify_id`, `time`, `seen`) VALUES
(1, 1, 2, 'friend_add', '', 'abhik', '', '2018-02-01 07:44:56', '1'),
(2, 1, 2, 'follow', '', '', '', '2018-02-01 07:44:56', '1'),
(3, 2, 1, 'profile_visit', '', '', '', '2018-02-01 07:45:24', '1'),
(4, 2, 1, 'friend_accept', '', 'akash', '', '2018-02-01 07:45:37', '1'),
(5, 2, 1, 'follow', '', '', '', '2018-02-01 07:45:37', '1'),
(6, 5, 1, 'profile_visit', '', '', '', '2018-02-02 06:29:57', '1'),
(7, 9, 5, 'friend_add', '', 'subrat', '', '2018-02-02 06:36:44', '0'),
(8, 9, 5, 'follow', '', '', '', '2018-02-02 06:36:44', '0'),
(9, 2, 5, 'friend_add', '', 'subrat', '', '2018-02-02 06:36:44', '1'),
(10, 2, 5, 'follow', '', '', '', '2018-02-02 06:36:44', '1'),
(11, 1, 5, 'friend_add', '', 'subrat', '', '2018-02-02 06:36:45', '1'),
(12, 1, 5, 'follow', '', '', '', '2018-02-02 06:36:45', '1'),
(13, 8, 5, 'friend_add', '', 'subrat', '', '2018-02-02 06:36:46', '0'),
(14, 8, 5, 'follow', '', '', '', '2018-02-02 06:36:46', '0'),
(15, 10, 5, 'friend_add', '', 'subrat', '', '2018-02-02 06:36:46', '1'),
(16, 10, 5, 'follow', '', '', '', '2018-02-02 06:36:46', '1'),
(17, 9, 1, 'profile_visit', '', '', '', '2018-02-02 06:40:14', '0'),
(18, 2, 9, 'friend_add', '', 'johndoe', '', '2018-02-02 06:40:42', '1'),
(19, 2, 9, 'follow', '', '', '', '2018-02-02 06:40:42', '1'),
(20, 10, 9, 'friend_add', '', 'johndoe', '', '2018-02-02 06:40:42', '1'),
(21, 10, 9, 'follow', '', '', '', '2018-02-02 06:40:42', '1'),
(22, 1, 9, 'friend_add', '', 'johndoe', '', '2018-02-02 06:40:43', '1'),
(23, 1, 9, 'follow', '', '', '', '2018-02-02 06:40:43', '1'),
(24, 8, 9, 'friend_add', '', 'johndoe', '', '2018-02-02 06:40:44', '0'),
(25, 8, 9, 'follow', '', '', '', '2018-02-02 06:40:44', '0'),
(26, 2, 8, 'friend_add', '', 'ranit', '', '2018-02-02 06:41:38', '1'),
(27, 2, 8, 'follow', '', '', '', '2018-02-02 06:41:38', '1'),
(28, 10, 8, 'friend_add', '', 'ranit', '', '2018-02-02 06:41:38', '1'),
(29, 10, 8, 'follow', '', '', '', '2018-02-02 06:41:38', '1'),
(30, 1, 8, 'friend_add', '', 'ranit', '', '2018-02-02 06:41:39', '1'),
(31, 1, 8, 'follow', '', '', '', '2018-02-02 06:41:39', '1'),
(32, 1, 10, 'friend_add', '', 'john', '', '2018-02-02 06:42:21', '1'),
(33, 1, 10, 'follow', '', '', '', '2018-02-02 06:42:21', '1'),
(34, 2, 10, 'friend_add', '', 'john', '', '2018-02-02 06:42:21', '1'),
(35, 2, 10, 'follow', '', '', '', '2018-02-02 06:42:21', '1'),
(36, 8, 10, 'friend_accept', '', 'john', '', '2018-02-02 06:42:31', '0'),
(37, 8, 10, 'follow', '', '', '', '2018-02-02 06:42:31', '0'),
(38, 9, 10, 'friend_accept', '', 'john', '', '2018-02-02 06:42:32', '0'),
(39, 9, 10, 'follow', '', '', '', '2018-02-02 06:42:32', '0'),
(40, 5, 10, 'friend_accept', '', 'john', '', '2018-02-02 06:42:33', '1'),
(41, 5, 10, 'follow', '', '', '', '2018-02-02 06:42:33', '1'),
(42, 10, 1, 'friend_accept', '', 'akash', '', '2018-02-02 06:42:41', '1'),
(43, 10, 1, 'follow', '', '', '', '2018-02-02 06:42:41', '1'),
(44, 8, 1, 'friend_accept', '', 'akash', '', '2018-02-02 06:42:42', '0'),
(45, 8, 1, 'follow', '', '', '', '2018-02-02 06:42:42', '0'),
(46, 9, 1, 'friend_accept', '', 'akash', '', '2018-02-02 06:42:42', '0'),
(47, 9, 1, 'follow', '', '', '', '2018-02-02 06:42:42', '0'),
(48, 5, 1, 'friend_accept', '', 'akash', '', '2018-02-02 06:42:43', '1'),
(49, 5, 1, 'follow', '', '', '', '2018-02-02 06:42:43', '1'),
(50, 8, 1, 'profile_visit', '', '', '', '2018-02-02 06:49:00', '0'),
(51, 10, 2, 'friend_accept', '', 'abhik', '', '2018-02-02 06:52:33', '1'),
(52, 10, 2, 'follow', '', '', '', '2018-02-02 06:52:33', '1'),
(53, 8, 2, 'friend_accept', '', 'abhik', '', '2018-02-02 06:52:33', '0'),
(54, 8, 2, 'follow', '', '', '', '2018-02-02 06:52:33', '0'),
(55, 9, 2, 'friend_accept', '', 'abhik', '', '2018-02-02 06:52:34', '0'),
(56, 9, 2, 'follow', '', '', '', '2018-02-02 06:52:34', '0'),
(57, 5, 2, 'friend_accept', '', 'abhik', '', '2018-02-02 06:52:34', '1'),
(58, 5, 2, 'follow', '', '', '', '2018-02-02 06:52:34', '1'),
(59, 8, 1, 'profile_visit', '', '', '', '2018-02-02 07:28:17', '0'),
(60, 8, 5, 'like', 'post', '7', '', '2018-02-02 07:36:17', '0'),
(61, 2, 5, 'page_invitation', 'Fan Page', 'fanpage', '', '2018-02-02 07:40:50', '1'),
(62, 2, 1, 'profile_visit', '', '', '', '2018-02-15 08:38:36', '0'),
(63, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:25:47', '0'),
(64, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:26:58', '0'),
(65, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:27:21', '0'),
(66, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:27:45', '0'),
(67, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:31:09', '0'),
(68, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:31:41', '0'),
(69, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:33:50', '0'),
(70, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:36:31', '0'),
(72, 11, 1, 'friend_add', '', 'akash', '', '2018-02-16 07:36:44', '0'),
(75, 2, 1, 'profile_visit', '', '', '', '2018-02-16 07:38:02', '0'),
(74, 11, 1, 'profile_visit', '', '', '', '2018-02-16 07:36:49', '0'),
(76, 2, 1, 'profile_visit', '', '', '', '2018-02-16 07:38:57', '0'),
(77, 2, 1, 'profile_visit', '', '', '', '2018-02-16 07:39:04', '0'),
(78, 2, 1, 'profile_visit', '', '', '', '2018-02-16 07:39:15', '0'),
(79, 2, 1, 'profile_visit', '', '', '', '2018-02-16 07:42:46', '0'),
(80, 11, 1, 'profile_visit', '', '', '', '2018-02-16 12:59:43', '0'),
(81, 10, 1, 'profile_visit', '', '', '', '2018-02-17 06:35:15', '0'),
(82, 9, 15, 'friend_add', '', 'tekobarik2', '', '2018-02-17 06:56:16', '0'),
(83, 9, 15, 'follow', '', '', '', '2018-02-17 06:56:16', '0'),
(84, 1, 15, 'friend_add', '', 'tekobarik2', '', '2018-02-19 13:51:15', '1'),
(85, 1, 15, 'follow', '', '', '', '2018-02-19 13:51:15', '1'),
(86, 15, 1, 'friend_accept', '', 'akash', '', '2018-02-19 13:54:44', '1'),
(87, 15, 1, 'follow', '', '', '', '2018-02-19 13:54:44', '1'),
(88, 1, 15, 'profile_visit', '', '', '', '2018-02-19 13:54:59', '1'),
(89, 1, 15, 'profile_visit', '', '', '', '2018-02-19 13:55:00', '1'),
(90, 15, 1, 'profile_visit', '', '', '', '2018-02-19 13:55:06', '1'),
(91, 15, 1, 'friend_add', '', 'akash', '', '2018-02-19 13:59:42', '1'),
(92, 1, 15, 'profile_visit', '', '', '', '2018-02-19 13:59:48', '1'),
(93, 1, 15, 'friend_accept', '', 'tekobarik2', '', '2018-02-19 13:59:51', '1'),
(94, 15, 1, 'profile_visit', '', '', '', '2018-02-19 14:11:09', '1');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `package_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(32) NOT NULL,
  `period_num` int(10) unsigned NOT NULL,
  `period` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `boost_posts_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `boost_posts` int(10) unsigned NOT NULL,
  `boost_pages_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `boost_pages` int(10) unsigned NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `packages_payments`
--

CREATE TABLE IF NOT EXISTS `packages_payments` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_date` datetime NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(32) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_admin` int(10) unsigned NOT NULL,
  `page_category` int(10) unsigned NOT NULL,
  `page_name` varchar(64) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  `page_picture` varchar(255) DEFAULT NULL,
  `page_picture_id` int(10) unsigned DEFAULT NULL,
  `page_cover` varchar(255) DEFAULT NULL,
  `page_cover_id` int(10) unsigned DEFAULT NULL,
  `page_album_pictures` int(10) unsigned DEFAULT NULL,
  `page_album_covers` int(10) unsigned DEFAULT NULL,
  `page_album_timeline` int(10) unsigned DEFAULT NULL,
  `page_pinned_post` int(10) unsigned DEFAULT NULL,
  `page_verified` enum('0','1') NOT NULL DEFAULT '0',
  `page_boosted` enum('0','1') NOT NULL DEFAULT '0',
  `page_likes` int(10) unsigned NOT NULL DEFAULT '0',
  `page_date` datetime NOT NULL,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `username` (`page_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_admin`, `page_category`, `page_name`, `page_title`, `page_description`, `page_picture`, `page_picture_id`, `page_cover`, `page_cover_id`, `page_album_pictures`, `page_album_covers`, `page_album_timeline`, `page_pinned_post`, `page_verified`, `page_boosted`, `page_likes`, `page_date`) VALUES
(1, 5, 1, 'fanpage', 'Fan Page', 'News of Superhero movies', NULL, NULL, NULL, NULL, 9, 8, NULL, NULL, '0', '0', 3, '2018-02-02 07:37:57'),
(7, 1, 7, 'dummy', 'dummy 9062', 'about us', 'photos/2018/02/sngine_a90f89f1a9dc2ebf98a96e3a03761cf4.jpg', 19, 'photos/2018/02/sngine_84f8952f6481f3e0858de334de4e56cb.jpg', 17, 13, 11, NULL, NULL, '0', '0', 1, '2018-02-12 10:18:25'),
(2, 1, 6, 'avenger', 'Avenger Infinity War', 'Mervel Comic Stories', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', 2, '2018-02-03 13:59:24'),
(6, 1, 6, 'panther', 'Black Panther', 'Black Panther', 'photos/2018/02/sngine_50005b57785bf575abeb5a513e1a8805.jpg', 16, 'photos/2018/02/sngine_ba705bb02ca7c0ce6177916b69286738.jpg', 18, 10, 12, NULL, NULL, '0', '0', 1, '2018-02-06 07:23:50'),
(11, 1, 1, 'pre_page', 'Pre Page', 'Pre Page', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', 1, '2018-02-16 06:30:09'),
(12, 1, 2, 'test', 'test', 'sdfdsjfds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', 1, '2018-02-16 06:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `pages_categories`
--

CREATE TABLE IF NOT EXISTS `pages_categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pages_categories`
--

INSERT INTO `pages_categories` (`category_id`, `category_name`) VALUES
(1, 'Service'),
(2, 'Musician/Band'),
(3, 'Brand or Product'),
(4, 'Company, Organization or Institution'),
(5, 'Artist, Public figure'),
(6, 'Entertainment'),
(7, 'Cause or Community');

-- --------------------------------------------------------

--
-- Table structure for table `pages_invites`
--

CREATE TABLE IF NOT EXISTS `pages_invites` (
  `page_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `from_user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `page_id_user_id_from_user_id` (`page_id`,`user_id`,`from_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Dumping data for table `pages_invites`
--

INSERT INTO `pages_invites` (`page_id`, `user_id`, `from_user_id`) VALUES
(1, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages_likes`
--

CREATE TABLE IF NOT EXISTS `pages_likes` (
  `page_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `page_id_user_id` (`page_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Dumping data for table `pages_likes`
--

INSERT INTO `pages_likes` (`page_id`, `user_id`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 1),
(2, 15),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_template`
--

CREATE TABLE IF NOT EXISTS `page_template` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `pageTitle` text NOT NULL,
  `template_content` text NOT NULL,
  `template_content_html` text NOT NULL,
  `jumbotron` int(11) NOT NULL,
  `jumbotron_html` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `page_template`
--

INSERT INTO `page_template` (`template_id`, `page_id`, `pageTitle`, `template_content`, `template_content_html`, `jumbotron`, `jumbotron_html`, `created_at`, `active`) VALUES
(1, 1, 'Akash Demo', '{"data":[{"type":"columns","data":{"columns":[{"width":6,"blocks":[{"type":"heading","data":{"text":"This is the Hoosk demo site.\\n","heading":""}},{"type":"text","data":{"text":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam nisl, sodales id lobortis quis, dapibus quis mauris. Fusce sed placerat risus. Pellentesque imperdiet ex et libero eleifend, ac mattis tortor ultricies. Donec vel ullamcorper purus. Vestibulum dignissim ipsum quis porta finibus.\\n\\n"}},{"type":"text","data":{"text":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam nisl, sodales id lobortis quis, dapibus quis mauris. Fusce sed placerat risus. Pellentesque imperdiet ex et libero eleifend, ac mattis tortkjor ultricies. Donec vel ullamcorper purus. Vestibulum dignissim ipsum quis porta finibus.\\n\\n"}}]},{"width":6,"blocks":[{"type":"image_extended","data":{"file":{"url":"http://beta.hoosk.org/images/responsive_hoosk.png","filename":"responsive_hoosk.png"},"caption":"Hoosk is responsive","source":""}}]}],"preset":"columns-6-6"}}]}', '<div class=''row''><div class=''col-md-6''><>This is the Hoosk demo site.\n</><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam nisl, sodales id lobortis quis, dapibus quis mauris. Fusce sed placerat risus. Pellentesque imperdiet ex et libero eleifend, ac mattis tortor ultricies. Donec vel ullamcorper purus. Vestibulum dignissim ipsum quis porta finibus.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam nisl, sodales id lobortis quis, dapibus quis mauris. Fusce sed placerat risus. Pellentesque imperdiet ex et libero eleifend, ac mattis tortkjor ultricies. Donec vel ullamcorper purus. Vestibulum dignissim ipsum quis porta finibus.</p>\n</div><div class=''col-md-6''><img class="img-responsive" src="http://beta.hoosk.org/images/responsive_hoosk.png" alt="Hoosk is responsive" />\n</div></div>', 0, 0, '2018-02-03 16:01:17', '1'),
(11, 2, 'Lorem Lipsum', '{"data":[{"type":"text","data":{"text":"t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ~The point of using Lorem Ipsum~ is that it has a more\\\\-or\\\\-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like read\\n"}}]}', '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <u>The point of using Lorem Ipsum<u> is that it has a more&#45;or&#45;less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like read</p>\n', 0, 0, '2018-02-06 12:17:48', '0'),
(12, 2, 'Lorem Lipsum Template', '{"data":[{"type":"heading","data":{"heading":"h2","text":"_This Is A D_ummy Lorem Lipsu_m Akash_\\n"}},{"type":"columns","data":{"columns":[{"width":6,"blocks":[{"type":"text","data":{"text":"GrapesJS is an open\\\\-source, multi\\\\-purpose, Web Builder Framework which combines different tools and features with the goal to help you \\\\(or users of your application\\\\) to build HTML templates      without any knowledge of coding. It''s a perfect solution to replace the common WYSIWYG editors, which are good for content editing bu\\n"}},{"type":"image","data":{"file":{"url":"http://localhost/public_sc/Script/content/uploads/page/avengers-infinity-war.jpg","filename":"avengers-infinity-war.jpg"}}}]},{"width":6,"blocks":[{"type":"video","data":{"source":"youtube","remote_id":"3wDrTVFVEYU"}}]}],"preset":"columns-6-6"}},{"type":"columns","data":{"columns":[{"width":6,"blocks":[{"type":"heading","data":{"heading":"h3","text":"Where does it come from?"}},{"type":"text","data":{"text":"**Lorem Ipsum** is simply dummy text of the printing and typesetting industry. **Lorem Ipsum** has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially\\n"}}]},{"width":6,"blocks":[{"type":"heading","data":{"heading":"h3","text":"Where can I get some?"}},{"type":"text","data":{"text":"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more\\\\-or\\\\-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem\\n"}}]}],"preset":"columns-6-6"}},{"type":"columns","data":{"columns":[{"width":3,"blocks":[{"type":"image","data":{"file":{"url":"http://localhost/public_sc/Script/content/uploads/page/1140220800_stylish-profile-pic-for-boys.jpg","filename":"1140220800_stylish-profile-pic-for-boys.jpg"}}}]},{"width":3,"blocks":[{"type":"image","data":{"file":{"url":"http://localhost/public_sc/Script/content/uploads/page/1140220800_latest-dp-for-boys-cool-hairstyles.jpg","filename":"1140220800_latest-dp-for-boys-cool-hairstyles.jpg"}}}]},{"width":3,"blocks":[{"type":"image","data":{"file":{"url":"http://localhost/public_sc/Script/content/uploads/page/1140220800_boys-dp-attitude-pics.jpg","filename":"1140220800_boys-dp-attitude-pics.jpg"}}}]},{"width":3,"blocks":[{"type":"image","data":{"file":{"url":"http://localhost/public_sc/Script/content/uploads/page/1140220800_cool-boys-hd-profile-pictures.jpg","filename":"1140220800_cool-boys-hd-profile-pictures.jpg"}}}]}],"preset":"columns-3-3-3-3"}},{"type":"text","data":{"text":"**Dummy Text**"}}]}', '<h2>_This Is A D_ummy Lorem Lipsu_m Akash_\n</h2><div class=''row''><div class=''col-md-6''><p>GrapesJS is an open&#45;source, multi&#45;purpose, Web Builder Framework which combines different tools and features with the goal to help you &#40;or users of your application&#41; to build HTML templates      without any knowledge of coding. It''s a perfect solution to replace the common WYSIWYG editors, which are good for content editing bu</p>\n<img class="img-responsive" src="http://localhost/public_sc/Script/content/uploads/page/avengers-infinity-war.jpg" />\n</div><div class=''col-md-6''><div class="embed-responsive embed-responsive-16by9"><iframe src="//www.youtube.com/embed/3wDrTVFVEYU?rel=0" frameborder="0" allowfullscreen></iframe></div>\n</div></div><div class=''row''><div class=''col-md-6''><h3>Where does it come from?</h3><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum</strong> has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>\n</div><div class=''col-md-6''><h3>Where can I get some?</h3><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more&#45;or&#45;less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem</p>\n</div></div><div class=''row''><div class=''col-md-3''><img class="img-responsive" src="http://localhost/public_sc/Script/content/uploads/page/1140220800_stylish-profile-pic-for-boys.jpg" />\n</div><div class=''col-md-3''><img class="img-responsive" src="http://localhost/public_sc/Script/content/uploads/page/1140220800_latest-dp-for-boys-cool-hairstyles.jpg" />\n</div><div class=''col-md-3''><img class="img-responsive" src="http://localhost/public_sc/Script/content/uploads/page/1140220800_boys-dp-attitude-pics.jpg" />\n</div><div class=''col-md-3''><img class="img-responsive" src="http://localhost/public_sc/Script/content/uploads/page/1140220800_cool-boys-hd-profile-pictures.jpg" />\n</div></div><p><strong>Dummy Text</strong></p>\n', 0, 0, '2018-02-06 12:21:16', '0'),
(13, 2, 'dsdsad', '{"data":[{"type":"text","data":{"text":"This ~is My New Test~\\n"}}]}', 'This <u>is My New Test</u>\n', 0, 0, '2018-02-08 18:34:27', '0'),
(14, 2, 'dsadsad', '{"data":[{"type":"text","data":{"text":"_**~Akash/~**_ Dutta\\n"}}]}', '<em><strong>~Akash/~</strong></em> Dutta\n', 0, 0, '2018-02-09 10:58:37', '0'),
(15, 2, 'dsad', '{"data":[{"type":"columns","data":{"columns":[{"width":6,"blocks":[{"type":"video","data":{"source":"youtube","remote_id":"6ZfuNTqbHE8"}}]},{"width":6,"blocks":[{"type":"video","data":{"file":{"url":"http://localhost/public_sc/Script/content/uploads/page/1329523200_movie.mp4","filename":"1329523200_movie.mp4"}}}]}],"preset":"columns-6-6"}}]}', '<div class=''row''><div class=''col-md-6''><div class="embed-responsive embed-responsive-16by9"><iframe src="//www.youtube.com/embed/6ZfuNTqbHE8?rel=0" frameborder="0" allowfullscreen></iframe></div>\n</div><div class=''col-md-6''><video> <source src="http://localhost/public_sc/Script/content/uploads/page/1329523200_movie.mp4" type="video/mp4"></source></video>\n</div></div>', 0, 0, '2018-02-12 15:10:32', '1'),
(16, 7, 'Fisrt template', '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"cover","data":{"text":"Cover Photo","cover":"Cover Photo"}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":3,"blocks":[{"type":"profile","data":{"text":"Profile Photo","profile":"Profile Photo"}},{"type":"about","data":{"text":"About Me","about":"About Photo"}},{"type":"photo","data":{"text":"Photos","photo":"Photo"}}]},{"width":9,"blocks":[{"type":"post","data":{"text":"Posts","post":"Post"}}]}],"preset":"columns-3-9"}}]}', '<div class=''row page-builder-container''><div class=''col-md-12''><div class=''page-builder-container''><p style=''''>Cover Photo\n</p></div></div></div><div class=''row page-builder-container''><div class=''col-md-3''><div class=''page-builder-container''><p style=''''>Profile Photo\n</p></div><div class=''page-builder-container''><p style=''''>About Me\n</p></div><div class=''page-builder-container''><p style=''''>Photos\n</p></div></div><div class=''col-md-9''><div class=''page-builder-container''><p style=''''>Posts\n</p></div></div></div>', 0, 0, '2018-02-12 15:54:58', '1'),
(17, 6, 'Blank template', '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"accordion","data":{"panels":[{"title":" Panel Heading ","body":" Panel body "}]}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":6,"blocks":[{"type":"heading","data":{"heading":"h1","text":"dsda"}}]},{"width":6,"blocks":[{"type":"quote","data":{"cite":""}}]}],"preset":"columns-6-6"}}]}', '<div class=''row page-builder-container''><div class=''col-md-12''><div id=''accordion'' class=''panel-group''><div class=''panel panel-default''><div class=''panel-heading''><h4 class=''panel-title''><a data-toggle=''collapse'' data-parent=''#accordion'' href=''#collapse0''> Panel Heading </a></h4></div><div id=''collapse0'' class=''panel-collapse collapse in'' role=''tabpanel''><div class=''panel-body''><p> Panel body </p></div></div></div></div></div></div><div class=''row page-builder-container''><div class=''col-md-6''><div class=''page-builder-container''><h1 style=''''>dsda</h1></div></div><div class=''col-md-6''><blockquote>\n</blockquote></div></div>', 0, 0, '2018-02-14 13:58:26', '0'),
(18, 6, 'Custom Template', '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"cover","data":{"text":"Cover Photo","cover":"Cover Photo"}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":4,"blocks":[{"type":"profile","data":{"text":"Profile Photo","profile":"Profile Photo"}},{"type":"about","data":{"text":"About Me","about":"About Photo"}},{"type":"photo","data":{"text":"Photos","photo":"Photo"}}]},{"width":8,"blocks":[{"type":"post","data":{"text":"Posts","post":"Post"}}]}],"preset":"columns-4-8"}}]}', '<div class=''row page-builder-container''><div class=''col-md-12''><div class=''page-builder-container''><p style=''''>Cover Photo\n</p></div></div></div><div class=''row page-builder-container''><div class=''col-md-4''><div class=''page-builder-container''><p style=''''>Profile Photo\n</p></div><div class=''page-builder-container''><p style=''''>About Me\n</p></div><div class=''page-builder-container''><p style=''''>Photos\n</p></div></div><div class=''col-md-8''><div class=''page-builder-container''><p style=''''>Posts\n</p></div></div></div>', 0, 0, '2018-02-14 19:02:52', '1'),
(20, 11, 'Default Template', '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"cover","data":{"text":"Cover Photo","cover":"Cover Photo"}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":4,"blocks":[{"type":"profile","data":{"text":"Profile Photo","profile":"Profile Photo"}},{"type":"about","data":{"text":"About Me","about":"About Photo"}},{"type":"photo","data":{"text":"Photos","photo":"Photo"}}]},{"width":8,"blocks":[{"type":"post","data":{"text":"Posts","post":"Post"}}]}],"preset":"columns-4-8"}}]}', '', 0, 0, '2018-02-16 12:00:09', '1'),
(21, 12, 'Default Template', '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"cover","data":{"text":"Cover Photo","cover":"Cover Photo"}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":4,"blocks":[{"type":"profile","data":{"text":"Profile Photo ","profile":"Profile Photo"}},{"type":"about","data":{"text":"About Me","about":"About Photo"}},{"type":"photo","data":{"text":"Photos","photo":"Photo"}}]},{"width":8,"blocks":[{"type":"post","data":{"text":"Posts","post":"Post"}}]}],"preset":"columns-4-8"}}]}', '<div class=''row page-builder-container''><div class=''col-md-12''><div class=''page-builder-container''><p style=''''>Cover Photo\n</p></div></div></div><div class=''row page-builder-container''><div class=''col-md-4''><div class=''page-builder-container''><p style=''''>Profile Photo \n</p></div><div class=''page-builder-container''><p style=''''>About Me\n</p></div><div class=''page-builder-container''><p style=''''>Photos\n</p></div></div><div class=''col-md-8''><div class=''page-builder-container''><p style=''''>Posts\n</p></div></div></div>', 0, 0, '2018-02-16 12:03:23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') NOT NULL,
  `in_group` enum('0','1') NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned DEFAULT NULL,
  `in_event` enum('0','1') NOT NULL DEFAULT '0',
  `event_id` int(10) unsigned DEFAULT NULL,
  `in_wall` enum('0','1') NOT NULL DEFAULT '0',
  `wall_id` int(10) unsigned DEFAULT NULL,
  `post_type` varchar(32) NOT NULL,
  `origin_id` int(10) unsigned DEFAULT NULL,
  `time` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `privacy` varchar(32) NOT NULL,
  `text` longtext,
  `feeling_action` varchar(32) DEFAULT NULL,
  `feeling_value` varchar(255) DEFAULT NULL,
  `boosted` enum('0','1') NOT NULL DEFAULT '0',
  `likes` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` int(10) unsigned NOT NULL DEFAULT '0',
  `shares` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `user_type`, `in_group`, `group_id`, `in_event`, `event_id`, `in_wall`, `wall_id`, `post_type`, `origin_id`, `time`, `location`, `privacy`, `text`, `feeling_action`, `feeling_value`, `boosted`, `likes`, `comments`, `shares`) VALUES
(1, 1, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-01 07:36:52', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(2, 1, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_cover', NULL, '2018-02-01 07:38:30', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(3, 1, 'user', '0', 0, '0', 0, '0', 0, '', NULL, '2018-02-01 07:38:39', '', 'public', 'Hello', '', '', '0', 0, 0, 0),
(4, 2, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-01 07:44:46', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(5, 5, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-02 06:36:35', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(6, 9, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-02 06:40:37', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(7, 8, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-02 06:41:33', NULL, 'public', NULL, NULL, NULL, '0', 1, 0, 0),
(8, 10, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-02 06:42:16', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(9, 2, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-02 06:52:55', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(12, 1, 'page', '0', 0, '0', 0, '0', 0, '', NULL, '2018-02-02 12:31:02', '', 'public', 'sadsad', '', '', '0', 0, 0, 0),
(13, 5, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-02 12:48:51', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(14, 5, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-02 13:06:00', NULL, 'public', NULL, NULL, NULL, '0', 1, 0, 0),
(15, 1, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-06 12:45:49', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(16, 1, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-06 12:52:20', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(17, 1, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-06 12:52:33', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(18, 2, 'page', '0', 0, '0', 0, '0', 0, '', NULL, '2018-02-13 06:00:48', '', 'public', 'Hello', '', '', '0', 0, 0, 0),
(19, 6, 'page', '0', 0, '0', 0, '0', 0, '', NULL, '2018-02-13 06:09:42', '', 'public', 'hi', '', '', '0', 0, 0, 0),
(20, 6, 'page', '0', NULL, '0', NULL, '0', NULL, 'page_picture', NULL, '2018-02-13 06:23:41', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(21, 7, 'page', '0', NULL, '0', NULL, '0', NULL, 'page_cover', NULL, '2018-02-13 07:16:10', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(22, 7, 'page', '0', 0, '0', 0, '0', 0, '', NULL, '2018-02-13 07:52:08', '', 'public', 'ewqeqw', '', '', '0', 0, 0, 0),
(23, 7, 'page', '0', 0, '0', 0, '0', 0, '', NULL, '2018-02-13 07:56:44', '', 'public', 'sadasdsadasd', '', '', '0', 0, 0, 0),
(24, 7, 'page', '0', 0, '0', 0, '0', 0, '', NULL, '2018-02-13 11:43:49', '', 'public', 'fdfsdfsfsd', '', '', '0', 0, 0, 0),
(25, 6, 'page', '0', NULL, '0', NULL, '0', NULL, 'page_cover', NULL, '2018-02-14 13:04:05', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(26, 6, 'page', '0', 0, '0', 0, '0', 0, '', NULL, '2018-02-14 13:32:59', '', 'public', 'dsa', '', '', '0', 0, 0, 0),
(27, 7, 'page', '0', NULL, '0', NULL, '0', NULL, 'page_picture', NULL, '2018-02-15 08:14:46', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(28, 1, 'user', '1', 1, '0', 0, '0', 0, '', NULL, '2018-02-15 08:29:44', '', 'custom', 'Natives', '', '', '0', 0, 0, 0),
(29, 1, 'user', '0', 0, '0', 0, '0', 0, 'link', NULL, '2018-02-17 05:35:03', '', 'public', 'http://localhost/public_sc/Script/pages/panther', '', '', '0', 0, 0, 0),
(30, 15, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-17 06:56:03', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(31, 15, 'user', '0', NULL, '0', NULL, '0', NULL, 'profile_picture', NULL, '2018-02-19 13:38:49', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts_articles`
--

CREATE TABLE IF NOT EXISTS `posts_articles` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `cover` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `tags` text NOT NULL,
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_audios`
--

CREATE TABLE IF NOT EXISTS `posts_audios` (
  `audio_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`audio_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_comments`
--

CREATE TABLE IF NOT EXISTS `posts_comments` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` enum('post','photo','comment') NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') NOT NULL,
  `text` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `time` datetime NOT NULL,
  `likes` int(10) unsigned NOT NULL DEFAULT '0',
  `replies` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_comments_likes`
--

CREATE TABLE IF NOT EXISTS `posts_comments_likes` (
  `comment_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `comment_id_user_id` (`comment_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `posts_files`
--

CREATE TABLE IF NOT EXISTS `posts_files` (
  `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_hidden`
--

CREATE TABLE IF NOT EXISTS `posts_hidden` (
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `posts_likes`
--

CREATE TABLE IF NOT EXISTS `posts_likes` (
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts_likes`
--

INSERT INTO `posts_likes` (`post_id`, `user_id`) VALUES
(7, 5),
(14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `posts_links`
--

CREATE TABLE IF NOT EXISTS `posts_links` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `source_url` tinytext NOT NULL,
  `source_host` varchar(255) NOT NULL,
  `source_title` varchar(255) NOT NULL,
  `source_text` text NOT NULL,
  `source_thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts_links`
--

INSERT INTO `posts_links` (`link_id`, `post_id`, `source_url`, `source_host`, `source_title`, `source_text`, `source_thumbnail`) VALUES
(1, 29, 'http://localhost/public_sc/Script/pages/panther', 'localhost', 'Black Panther', '', 'http://localhost/public_sc/Script/content/themes/followthebirds/images/og-image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts_media`
--

CREATE TABLE IF NOT EXISTS `posts_media` (
  `media_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `source_url` text NOT NULL,
  `source_provider` varchar(255) NOT NULL,
  `source_type` varchar(255) NOT NULL,
  `source_title` varchar(255) DEFAULT NULL,
  `source_text` text,
  `source_html` text,
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_photos`
--

CREATE TABLE IF NOT EXISTS `posts_photos` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `album_id` int(10) unsigned DEFAULT NULL,
  `source` varchar(255) NOT NULL,
  `likes` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `posts_photos`
--

INSERT INTO `posts_photos` (`photo_id`, `post_id`, `album_id`, `source`, `likes`, `comments`) VALUES
(1, 1, 1, 'photos/2018/02/sngine_39e4701044f6d3a54df3c3844e8ea2dc.jpg', 0, 0),
(2, 2, 2, 'photos/2018/02/sngine_bb321cfaa49e0c6e203022e60d311e61.jpg', 0, 0),
(3, 4, 3, 'photos/2018/02/sngine_6db8bf7a2f6f5396a20c4f9a3ce0a39d.jpg', 0, 0),
(4, 5, 4, 'photos/2018/02/sngine_8f5ad4c2528a5d38171a9baf81afe4c9.jpg', 0, 0),
(5, 6, 5, 'photos/2018/02/sngine_9bb3a8cf19db6ec7e326ffca8fd3fe2d.jpg', 0, 0),
(6, 7, 6, 'photos/2018/02/sngine_b176efa4bd6eb33a6a677503efc6d565.jpg', 0, 0),
(7, 8, 7, 'photos/2018/02/sngine_26b209fc01de75864f9e63937c9a6c53.jpg', 0, 0),
(8, 9, 3, 'photos/2018/02/sngine_f3b813917ecca495a3b959ec16db2bdd.jpg', 0, 0),
(11, 13, 4, 'photos/2018/02/sngine_f9bf6eaa6b917895bb0628e6cf4a6199.png', 0, 0),
(12, 14, 4, 'photos/2018/02/sngine_1959a9df316cb475117782698bb10c67.jpg', 0, 0),
(13, 15, 1, 'photos/2018/02/sngine_918e48a751f381bb4ce00d3d5b5298c7.jpg', 0, 0),
(14, 16, 1, 'photos/2018/02/sngine_42720bfd1d518edeaf3500faef50aff5.jpg', 0, 0),
(15, 17, 1, 'photos/2018/02/sngine_a33682574cc220aa4a98ea602c9532b1.jpg', 0, 0),
(16, 20, 10, 'photos/2018/02/sngine_50005b57785bf575abeb5a513e1a8805.jpg', 0, 0),
(17, 21, 11, 'photos/2018/02/sngine_84f8952f6481f3e0858de334de4e56cb.jpg', 0, 0),
(18, 25, 12, 'photos/2018/02/sngine_ba705bb02ca7c0ce6177916b69286738.jpg', 0, 0),
(19, 27, 13, 'photos/2018/02/sngine_a90f89f1a9dc2ebf98a96e3a03761cf4.jpg', 0, 0),
(20, 30, 14, 'photos/2018/02/sngine_816868a4897cf65ef76876df62ffcbe8.jpg', 0, 0),
(21, 31, 14, 'photos/2018/02/sngine_1571bd525cbdd1263a994e629b68cfad.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts_photos_albums`
--

CREATE TABLE IF NOT EXISTS `posts_photos_albums` (
  `album_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') NOT NULL,
  `in_group` enum('0','1') NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned DEFAULT NULL,
  `in_event` enum('0','1') NOT NULL DEFAULT '0',
  `event_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `privacy` enum('me','friends','public','custom') NOT NULL DEFAULT 'public',
  PRIMARY KEY (`album_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `posts_photos_albums`
--

INSERT INTO `posts_photos_albums` (`album_id`, `user_id`, `user_type`, `in_group`, `group_id`, `in_event`, `event_id`, `title`, `privacy`) VALUES
(1, 1, 'user', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(2, 1, 'user', '0', NULL, '0', NULL, 'Cover Photos', 'public'),
(3, 2, 'user', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(4, 5, 'user', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(5, 9, 'user', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(6, 8, 'user', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(7, 10, 'user', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(8, 1, 'page', '0', NULL, '0', NULL, 'Cover Photos', 'public'),
(9, 1, 'page', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(10, 6, 'page', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(11, 7, 'page', '0', NULL, '0', NULL, 'Cover Photos', 'public'),
(12, 6, 'page', '0', NULL, '0', NULL, 'Cover Photos', 'public'),
(13, 7, 'page', '0', NULL, '0', NULL, 'Profile Pictures', 'public'),
(14, 15, 'user', '0', NULL, '0', NULL, 'Profile Pictures', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `posts_photos_likes`
--

CREATE TABLE IF NOT EXISTS `posts_photos_likes` (
  `photo_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_id_photo_id` (`user_id`,`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `posts_polls`
--

CREATE TABLE IF NOT EXISTS `posts_polls` (
  `poll_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `votes` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_polls_options`
--

CREATE TABLE IF NOT EXISTS `posts_polls_options` (
  `option_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poll_id` int(10) unsigned NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_products`
--

CREATE TABLE IF NOT EXISTS `posts_products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(32) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `location` varchar(255) NOT NULL,
  `available` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_saved`
--

CREATE TABLE IF NOT EXISTS `posts_saved` (
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts_videos`
--

CREATE TABLE IF NOT EXISTS `posts_videos` (
  `video_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile_template`
--

CREATE TABLE IF NOT EXISTS `profile_template` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pageTitle` text NOT NULL,
  `template_content` text NOT NULL,
  `template_content_html` text NOT NULL,
  `jumbotron` int(11) NOT NULL,
  `jumbotron_html` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profile_template`
--

INSERT INTO `profile_template` (`template_id`, `user_id`, `pageTitle`, `template_content`, `template_content_html`, `jumbotron`, `jumbotron_html`, `created_at`, `active`) VALUES
(2, 1, 'Profile Template', '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"cover","data":{"text":"Cover Photo","cover":"Cover Photo"}},{"type":"text","data":{"text":"Good Evening My All Friends\\n","style_font":"16","style_font_color":"green","style_property":"font-size:16px;color:green;"}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":4,"blocks":[{"type":"video","data":{"file":{"url":"http://localhost/public_sc/Script/content/uploads/page/1645142400_movie.mp4","filename":"1645142400_movie.mp4"}}},{"type":"profile","data":{"text":"Profile Photo ","profile":"Profile Photo"}},{"type":"friends","data":{"text":"Friends","friends":"Friends"}},{"type":"photo","data":{"text":"Photos","photo":"Photo"}},{"type":"pages","data":{"text":"Pages","pages":"Pages"}}]},{"width":8,"blocks":[{"type":"about","data":{"text":"About Me","about":"About Photo"}},{"type":"post","data":{"text":"Posts","post":"Post","style_font":"","style_font_color":"","style_property":""}}]}],"preset":"columns-4-8"}}]}', '<div class=''row page-builder-container''><div class=''col-md-12''><div class=''page-builder-container''><p style=''''>Cover Photo\n</p></div><div class=''page-builder-container''><p style=''font-size:16px;color:green;''>Good Evening My All Friends\n</p></div></div></div><div class=''row page-builder-container''><div class=''col-md-4''><div class="page-builder-container"><video controls> <source src="http://localhost/public_sc/Script/content/uploads/page/1645142400_movie.mp4" type="video/mp4"></source></video>\n</div><div class=''page-builder-container''><p style=''''>Profile Photo \n</p></div><div class=''page-builder-container''><p style=''''>Friends\n</p></div><div class=''page-builder-container''><p style=''''>Photos\n</p></div><div class=''page-builder-container''><p style=''''>Pages\n</p></div></div><div class=''col-md-8''><div class=''page-builder-container''><p style=''''>About Me\n</p></div><div class=''page-builder-container''><p style=''''>Posts\n</p></div></div></div>', 0, 0, '2018-02-16 18:02:50', '1'),
(3, 15, 'Default Template', '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"cover","data":{"text":"Cover Photo","cover":"Cover Photo"}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":4,"blocks":[{"type":"about","data":{"text":"About Me","about":"About Photo"}},{"type":"profile","data":{"text":"Profile Photo ","profile":"Profile Photo"}},{"type":"friends","data":{"text":"Friends","friends":"Friends"}},{"type":"photo","data":{"text":"Photos","photo":"Photo"}},{"type":"pages","data":{"text":"Pages","pages":"Pages"}},{"type":"groups","data":{"text":"Groups","groups":"Groups"}}]},{"width":8,"blocks":[{"type":"post","data":{"text":"Posts","post":"Post"}}]}],"preset":"columns-4-8"}}]}', '<div class=''row page-builder-container''><div class=''col-md-12''><div class=''page-builder-container''><p style=''''>Cover Photo\n</p></div></div></div><div class=''row page-builder-container''><div class=''col-md-4''><div class=''page-builder-container''><p style=''''>About Me\n</p></div><div class=''page-builder-container''><p style=''''>Profile Photo \n</p></div><div class=''page-builder-container''><p style=''''>Friends\n</p></div><div class=''page-builder-container''><p style=''''>Photos\n</p></div><div class=''page-builder-container''><p style=''''>Pages\n</p></div><div class=''page-builder-container''><p style=''''>Groups\n</p></div></div><div class=''col-md-8''><div class=''page-builder-container''><p style=''''>Posts\n</p></div></div></div>', 0, 0, '2018-02-17 12:25:09', '0'),
(4, 15, 'My Template', '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"cover","data":{"text":"Cover Photo","cover":"Cover Photo"}},{"type":"text","data":{"text":"Hello Akash Dutta\\n","style_font":"21","style_font_color":"blue","style_property":"font-size:21px;color:blue;"}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":6,"blocks":[]},{"width":6,"blocks":[{"type":"video","data":{"source":"youtube","remote_id":"YP6G0IzrP1w"}}]}],"preset":"columns-6-6"}},{"type":"columns","data":{"columns":[{"width":3,"blocks":[{"type":"video","data":{"file":{"url":"http://localhost/public_sc/Script/content/uploads/page/1550448000_movie.mp4","filename":"1550448000_movie.mp4"}}},{"type":"profile","data":{"text":"Profile Photo ","profile":"Profile Photo"}},{"type":"pages","data":{"text":"Pages","pages":"Pages"}}]},{"width":6,"blocks":[{"type":"post","data":{"text":"Posts","post":"Post"}}]},{"width":3,"blocks":[{"type":"groups","data":{"text":"Groups","groups":"Groups"}},{"type":"photo","data":{"text":"Photos","photo":"Photo"}},{"type":"friends","data":{"text":"Friends","friends":"Friends"}}]}],"preset":"columns-3-6-3"}}]}', '<div class=''row page-builder-container''><div class=''col-md-12''><div class=''page-builder-container''><p style=''''>Cover Photo\n</p></div><div class=''page-builder-container''><p style=''font-size:21px;color:blue;''>Hello Akash Dutta\n</p></div></div></div><div class=''row page-builder-container''><div class=''col-md-6''></div><div class=''col-md-6''><div class="page-builder-container"><div class="embed-responsive embed-responsive-16by9"><iframe src="//www.youtube.com/embed/YP6G0IzrP1w?rel=0" frameborder="0" allowfullscreen></iframe></div>\n</div></div><div class=''row page-builder-container''><div class=''col-md-3''><div class="page-builder-container"><video controls> <source src="http://localhost/public_sc/Script/content/uploads/page/1550448000_movie.mp4" type="video/mp4"></source></video>\n</div><div class=''page-builder-container''><p style=''''>Profile Photo \n</p></div><div class=''page-builder-container''><p style=''''>Pages\n</p></div></div><div class=''col-md-6''><div class=''page-builder-container''><p style=''''>Posts\n</p></div></div><div class=''col-md-3''><div class=''page-builder-container''><p style=''''>Groups\n</p></div><div class=''page-builder-container''><p style=''''>Photos\n</p></div><div class=''page-builder-container''><p style=''''>Friends\n</p></div></div></div>', 0, 0, '2018-02-17 15:14:37', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE IF NOT EXISTS `static_pages` (
  `page_id` int(10) NOT NULL AUTO_INCREMENT,
  `page_url` varchar(64) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_text` text NOT NULL,
  `in_footer` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `page_url` (`page_url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `static_pages`
--

INSERT INTO `static_pages` (`page_id`, `page_url`, `page_title`, `page_text`, `in_footer`) VALUES
(1, 'about', 'About', '&lt;p&gt;\r\n                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n            &lt;/p&gt;\r\n            &lt;h3 class=&quot;text-info&quot;&gt;\r\n                Big Title\r\n            &lt;/h3&gt;\r\n            &lt;p&gt;\r\n                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n            &lt;/p&gt;\r\n            &lt;h3 class=&quot;text-info&quot;&gt;\r\n                Big Title\r\n            &lt;/h3&gt;\r\n            &lt;p&gt;\r\n               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n            &lt;/p&gt;', '1'),
(2, 'terms', 'Terms', '&lt;p&gt;\r\n    &lt;strong&gt;\r\n        We run this website and permits its use according to the following terms and conditions:\r\n    &lt;/strong&gt;\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Basic Terms:\r\n&lt;/h3&gt;\r\n&lt;ol&gt;\r\n    &lt;li&gt;Using this website implies your acceptance of these conditions. If you do not fully accept them, your entry to this site will be considered unauthorized and you will have to stop using it immediately&lt;/li&gt;\r\n    &lt;li&gt;You must be 13 years or older to use this site.&lt;/li&gt;\r\n    &lt;li&gt;You are responsible for any activity that occurs under your screen name.&lt;/li&gt;\r\n    &lt;li&gt;You are responsible for keeping your account secure.&lt;/li&gt;\r\n    &lt;li&gt;You must not abuse, harass, threaten or intimidate other Sngine users.&lt;/li&gt;\r\n    &lt;li&gt;You are solely responsible for your conduct and any data, text, information, screen names, graphics, photos, profiles, audio and video clips, links (&quot;Content&quot;) that you submit, post, and display on the Sngine service.&lt;/li&gt;\r\n    &lt;li&gt;You must not modify, adapt or hack Sngine or modify another website so as to falsely imply that it is associated with Sngine&lt;/li&gt;\r\n    &lt;li&gt;You must not create or submit unwanted email to any Sngine members (&quot;Spam&quot;).&lt;/li&gt;\r\n    &lt;li&gt;You must not transmit any worms or viruses or any code of a destructive nature.&lt;/li&gt;\r\n    &lt;li&gt;You must not, in the use of Sngine, violate any laws in your jurisdiction (including but not limited to copyright laws).&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;p&gt;\r\n    Violation of any of these agreements will result in the termination of your Sngine account. While Sngine prohibits such conduct and content on its site, you understand and agree that Sngine cannot be responsible for the Content posted on its web site and you nonetheless may be exposed to such materials and that you use the Sngine service at your own risk.\r\n&lt;/p&gt;\r\n\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    General Conditions:\r\n&lt;/h3&gt;\r\n&lt;ol&gt;\r\n    &lt;li&gt;We reserve the right to modify or terminate the Sngine service for any reason, without notice at any time.&lt;/li&gt;\r\n    &lt;li&gt;We reserve the right to alter these Terms of Use at any time. If the alterations constitute a material change to the Terms of Use, we will notify you via internet mail according to the preference expressed on your account. What constitutes a &quot;material change&quot; will be determined at our sole discretion, in good faith and using common sense and reasonable judgement.&lt;/li&gt;\r\n    &lt;li&gt;We reserve the right to refuse service to anyone for any reason at any time.&lt;/li&gt;\r\n    &lt;li&gt;We may, but have no obligation to, remove Content and accounts containing Content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, obscene or otherwise objectionable or violates any party&#039;s intellectual property or these Terms of Use.&lt;/li&gt;\r\n    &lt;li&gt;Sngine service makes it possible to post images and text hosted on Sngine to outside websites. This use is accepted (and even encouraged!). However, pages on other websites which display data hosted on Sngine must provide a link back to Sngine.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Copyright (What&#039;s Yours is Yours):\r\n&lt;/h3&gt;\r\n&lt;ol&gt;\r\n    &lt;li&gt;We claim no intellectual property rights over the material you provide to the Sngine service. Your profile and materials uploaded remain yours. You can remove your profile at any time by deleting your account. This will also remove any text and images you have stored in the system.&lt;/li&gt;\r\n    &lt;li&gt;We encourage users to contribute their creations to the public domain or consider progressive licensing terms.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;small&gt;\r\n    &lt;i&gt;Last updated on: Jan 29, 2016&lt;/i&gt;\r\n&lt;/small&gt;', '1'),
(3, 'privacy', 'Privacy', '&lt;p&gt;\r\n    We recognize that your privacy is very important and take it seriously. This Privacy Policy describes Sngine&#039;s policies and procedures on the collection, use and disclosure of your information when you use the Sngine Service. We will not use or share your information with anyone except as described in this Privacy Policy.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Information Collection and Use\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    We uses information we collect to analyze how the Service is used, diagnose service or technical problems, maintain security, personalize content, remember information to help you efficiently access your account, monitor aggregate metrics such as total number of visitors, traffic, and demographic patterns, and track User Content and users as necessary to comply with the Digital Millennium Copyright Act and other applicable laws.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    User-Provided Information:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    You provide us information about yourself, such as your name and e-mail address, if you register for a member account with the Service. Your name and other information you choose to add to your profile will be available for public viewing on the Service. We may use your email address to send you Service-related notices. You can control receipt of certain Service-related messages on your Settings page. We may also use your contact information to send you marketing messages. If you do not want to receive such messages, you may opt out by following the instructions in the message. If you correspond with us by email, we may retain the content of your email messages, your email address and our responses.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    You also provide us information in User Content you post to the Service. Your posts and other contributions on the Service, and metadata about them (such as when you posted them), are publicly viewable on the Service, along with your name (unless the Service permits you to post anonymously). This information may be searched by search engines and be republished elsewhere on the Web in accordance with our Terms of Service.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    If you choose to use our invitation service to invite a friend to the Service, we will ask you for that person&#039;s email address and automatically send an email invitation. We stores this information to send this email, to register your friend if your invitation is accepted, and to track the success of our invitation service.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Cookies:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    When you visit the Service, we may send one or more &quot;cookies&quot; - small data files - to your computer to uniquely identify your browser and let Sngine help you log in faster and enhance your navigation through the site. A cookie may convey anonymous information about how you browse the Service to us, but does not collect personal information about you. A persistent cookie remains on your computer after you close your browser so that it can be used by your browser on subsequent visits to the Service. Persistent cookies can be removed by following your web browser&#039;s directions. A session cookie is temporary and disappears after you close your browser. You can reset your web browser to refuse all cookies or to indicate when a cookie is being sent. However, some features of the Service may not function properly if the ability to accept cookies is disabled.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Log Files:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    Log file information is automatically reported by your browser each time you access a web page. When you use the Service, our servers automatically record certain information that your web browser sends whenever you visit any website. These server logs may include information such as your web request, Internet Protocol (&quot;IP&quot;) address, browser type, referring / exit pages and URLs, number of clicks, domain names, landing pages, pages viewed, and other such information.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Third Party Services:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    We may use Google Analytics or Mixpanel to help understand use of the Service. Google Analytics and Mixpanel collect the information sent by your browser as part of a web page request, including cookies and your IP address. Google Analytics and Mixpanel also receive this information and their use of it is governed by their Privacy Policies.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    How We Share Your Information\r\n&lt;/h3&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Personally Identifiable Information:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    We may share your personally identifiable information with third parties for the purpose of providing the Service to you. If we do this, such third parties&#039; use of your information will be bound by this Privacy Policy. We may store personal information in locations outside the direct control of Sngine (for instance, on servers or databases co-located with hosting providers).\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    We may share or disclose your information with your consent, such as if you choose to sign on to the Service through a third-party service. We cannot control third parties&#039; use of your information.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    Sngine may disclose your personal information if required to do so by law or subpoena or if we believe that it is reasonably necessary to comply with a law, regulation or legal request; to protect the safety of any person; to address fraud, security or technical issues; or to protect Sngine&#039;s rights or property.\r\n&lt;/p&gt;\r\n&lt;h4 class=&quot;text-danger&quot;&gt;\r\n    Non-Personally Identifiable Information:\r\n&lt;/h5&gt;\r\n&lt;p&gt;\r\n    We may share non-personally identifiable information (such as anonymous usage data, referring/exit pages and URLs, platform types, number of clicks, etc.) with interested third parties to help them understand the usage patterns for certain Sngine services.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n    Sngine may allow third-party ad servers or ad networks to serve advertisements on the Service. These third-party ad servers or ad networks use technology to send, directly to your browser, the advertisements and links that appear on Sngine. They automatically receive your IP address when this happens. They may also use other technologies (such as cookies, JavaScript, or web beacons) to measure the effectiveness of their advertisements and to personalize the advertising content. Sngine does not provide any personally identifiable information to these third-party ad servers or ad networks without your consent. However, please note that if an advertiser asks Sngine to show an advertisement to a certain audience and you respond to that advertisement, the advertiser or ad server may conclude that you fit the description of the audience they are trying to reach. The Sngine Privacy Policy does not apply to, and we cannot control the activities of, third-party advertisers. Please consult the respective privacy policies of such advertisers for more information.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    How We Protect Your Information\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    We uses commercially reasonable physical, managerial, and technical safeguards to preserve the integrity and security of your personal information. We cannot, however, ensure or warrant the security of any information you transmit to Sngine or guarantee that your information on the Service may not be accessed, disclosed, altered, or destroyed by breach of any of our physical, technical, or managerial safeguards.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Your Choices About Your Information\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    You may, of course, decline to submit personally identifiable information through the Service, in which case Sngine may not be able to provide certain services to you. You may update or correct your account information and email preferences at any time by logging in to your account.\r\n&lt;/p&gt;\r\n\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Links to Other Web Sites\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    We are not responsible for the practices employed by websites linked to or from the Service, nor the information or content contained therein. Please remember that when you use a link to go from the Service to another website, our Privacy Policy is no longer in effect. Your browsing and interaction on any other website, including those that have a link on our website, is subject to that website&#039;s own rules and policies.\r\n&lt;/p&gt;\r\n\r\n&lt;h3 class=&quot;text-info&quot;&gt;\r\n    Changes to Our Privacy Policy\r\n&lt;/h3&gt;\r\n&lt;p&gt;\r\n    If we change our privacy policies and procedures, we will post those changes on this page to keep you aware of what information we collect, how we use it and under what circumstances we may disclose it. Changes to this Privacy Policy are effective when they are posted on this page.\r\n&lt;/p&gt;\r\n&lt;small&gt;\r\n    &lt;i&gt;Last updated on: Jan 29, 2016&lt;/i&gt;\r\n&lt;/small&gt;', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stickers`
--

CREATE TABLE IF NOT EXISTS `stickers` (
  `sticker_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`sticker_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=19 ;

--
-- Dumping data for table `stickers`
--

INSERT INTO `stickers` (`sticker_id`, `image`) VALUES
(1, 'stickers/1.png'),
(2, 'stickers/2.png'),
(3, 'stickers/3.png'),
(4, 'stickers/4.png'),
(5, 'stickers/5.png'),
(6, 'stickers/6.png'),
(7, 'stickers/7.png'),
(8, 'stickers/8.png'),
(9, 'stickers/9.png'),
(10, 'stickers/10.png'),
(11, 'stickers/11.png'),
(12, 'stickers/12.png'),
(13, 'stickers/13.png'),
(14, 'stickers/14.png'),
(15, 'stickers/15.png'),
(16, 'stickers/16.png'),
(17, 'stickers/17.png'),
(18, 'stickers/18.png');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE IF NOT EXISTS `stories` (
  `story_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `text` longtext,
  `time` datetime NOT NULL,
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stories_media`
--

CREATE TABLE IF NOT EXISTS `stories_media` (
  `media_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `story_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  `is_photo` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `system_languages`
--

CREATE TABLE IF NOT EXISTS `system_languages` (
  `language_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `flag_icon` varchar(32) NOT NULL,
  `dir` enum('LTR','RTL') NOT NULL,
  `default` enum('0','1') NOT NULL,
  `enabled` enum('0','1') NOT NULL,
  PRIMARY KEY (`language_id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `system_languages`
--

INSERT INTO `system_languages` (`language_id`, `code`, `title`, `flag_icon`, `dir`, `default`, `enabled`) VALUES
(1, 'en_us', 'English', 'us', 'LTR', '1', '1'),
(2, 'ar_sa', 'Arabic', 'sa', 'RTL', '0', '1'),
(3, 'fr_fr', 'Fran&ccedil;ais', 'fr', 'LTR', '0', '1'),
(4, 'es_es', 'Espa&ntilde;ol', 'es', 'LTR', '0', '1'),
(5, 'pt_pt', 'Portugu&ecirc;s', 'pt', 'LTR', '0', '1'),
(6, 'de_de', 'Deutsch', 'de', 'LTR', '0', '1'),
(7, 'tr_tr', 'T&uuml;rk&ccedil;e', 'tr', 'LTR', '0', '1'),
(8, 'nl_nl', 'Dutch', 'nl', 'LTR', '0', '1'),
(9, 'it_it', 'Italiano', 'it', 'LTR', '0', '1'),
(10, 'ru_ru', 'Russian', 'ru', 'LTR', '0', '1'),
(11, 'ro_ro', 'Romaian', 'ro', 'LTR', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `system_options`
--

CREATE TABLE IF NOT EXISTS `system_options` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_public` enum('0','1') NOT NULL DEFAULT '1',
  `system_live` enum('0','1') NOT NULL DEFAULT '1',
  `system_message` text NOT NULL,
  `system_title` varchar(255) NOT NULL DEFAULT 'Sngine',
  `system_description` text NOT NULL,
  `system_keywords` text NOT NULL,
  `system_email` varchar(255) DEFAULT NULL,
  `contact_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `directory_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `pages_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `groups_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `events_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `blogs_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `market_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `games_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `daytime_msg_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `verification_requests` enum('0','1') NOT NULL DEFAULT '1',
  `profile_notification_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `stories_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `wall_posts_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `social_share_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `smart_yt_player` enum('0','1') NOT NULL DEFAULT '1',
  `geolocation_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `geolocation_key` varchar(255) DEFAULT NULL,
  `default_privacy` enum('public','friends','me') NOT NULL DEFAULT 'friends',
  `registration_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `registration_type` enum('free','paid') NOT NULL DEFAULT 'free',
  `packages_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `activation_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `activation_type` enum('email','sms') NOT NULL DEFAULT 'email',
  `age_restriction` enum('0','1') NOT NULL DEFAULT '0',
  `minimum_age` tinyint(1) unsigned DEFAULT NULL,
  `getting_started` enum('0','1') NOT NULL DEFAULT '1',
  `delete_accounts_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_accounts` int(10) unsigned NOT NULL DEFAULT '0',
  `social_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `facebook_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `facebook_appid` varchar(255) DEFAULT NULL,
  `facebook_secret` varchar(255) DEFAULT NULL,
  `twitter_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `twitter_appid` varchar(255) DEFAULT NULL,
  `twitter_secret` varchar(255) DEFAULT NULL,
  `google_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `google_appid` varchar(255) DEFAULT NULL,
  `google_secret` varchar(255) DEFAULT NULL,
  `instagram_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `instagram_appid` varchar(255) DEFAULT NULL,
  `instagram_secret` varchar(255) DEFAULT NULL,
  `linkedin_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `linkedin_appid` varchar(255) DEFAULT NULL,
  `linkedin_secret` varchar(255) DEFAULT NULL,
  `vkontakte_login_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `vkontakte_appid` varchar(255) DEFAULT NULL,
  `vkontakte_secret` varchar(255) DEFAULT NULL,
  `email_smtp_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `email_smtp_authentication` enum('0','1') NOT NULL DEFAULT '1',
  `email_smtp_ssl` enum('0','1') NOT NULL DEFAULT '0',
  `email_smtp_server` varchar(255) DEFAULT NULL,
  `email_smtp_port` varchar(255) DEFAULT NULL,
  `email_smtp_username` varchar(255) DEFAULT NULL,
  `email_smtp_password` varchar(255) DEFAULT NULL,
  `email_smtp_setfrom` varchar(255) DEFAULT NULL,
  `email_notifications` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_likes` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_comments` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_shares` enum('0','1') NOT NULL DEFAULT '1',
  `email_wall_posts` enum('0','1') NOT NULL DEFAULT '1',
  `email_mentions` enum('0','1') NOT NULL DEFAULT '1',
  `email_profile_visits` enum('0','1') NOT NULL DEFAULT '1',
  `email_friend_requests` enum('0','1') NOT NULL DEFAULT '1',
  `twilio_sid` varchar(255) DEFAULT NULL,
  `twilio_token` varchar(255) DEFAULT NULL,
  `twilio_phone` varchar(255) DEFAULT NULL,
  `system_phone` varchar(255) DEFAULT NULL,
  `chat_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `chat_status_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `s3_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `s3_bucket` varchar(255) DEFAULT NULL,
  `s3_region` varchar(255) DEFAULT NULL,
  `s3_key` varchar(255) DEFAULT NULL,
  `s3_secret` varchar(255) DEFAULT NULL,
  `uploads_directory` varchar(255) NOT NULL DEFAULT 'content/uploads',
  `uploads_prefix` varchar(255) DEFAULT 'sngine',
  `max_avatar_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `max_cover_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `photos_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_photo_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `videos_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_video_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `video_extensions` text NOT NULL,
  `audio_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_audio_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `audio_extensions` text NOT NULL,
  `file_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `max_file_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `file_extensions` text NOT NULL,
  `censored_words_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `censored_words` text NOT NULL,
  `reCAPTCHA_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `reCAPTCHA_site_key` varchar(255) DEFAULT NULL,
  `reCAPTCHA_secret_key` varchar(255) DEFAULT NULL,
  `session_hash` varchar(255) NOT NULL,
  `paypal_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `paypal_mode` enum('live','sandbox') NOT NULL DEFAULT 'sandbox',
  `paypal_id` varchar(255) DEFAULT NULL,
  `paypal_secret` varchar(255) DEFAULT NULL,
  `creditcard_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `alipay_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `bitcoin_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `stripe_mode` enum('live','test') NOT NULL DEFAULT 'test',
  `stripe_test_secret` varchar(255) DEFAULT NULL,
  `stripe_test_publishable` varchar(255) DEFAULT NULL,
  `stripe_live_secret` varchar(255) DEFAULT NULL,
  `stripe_live_publishable` varchar(255) DEFAULT NULL,
  `system_currency` varchar(64) DEFAULT 'USD',
  `data_heartbeat` int(10) unsigned NOT NULL DEFAULT '5',
  `chat_heartbeat` int(10) unsigned NOT NULL DEFAULT '5',
  `offline_time` int(10) unsigned NOT NULL DEFAULT '10',
  `min_results` int(10) unsigned NOT NULL DEFAULT '5',
  `max_results` int(10) unsigned NOT NULL DEFAULT '10',
  `min_results_even` int(10) unsigned NOT NULL DEFAULT '6',
  `max_results_even` int(10) unsigned NOT NULL DEFAULT '12',
  `analytics_code` text NOT NULL,
  `system_logo` varchar(255) DEFAULT NULL,
  `system_wallpaper_default` enum('0','1') NOT NULL DEFAULT '1',
  `system_wallpaper` varchar(255) DEFAULT NULL,
  `system_random_profiles` enum('0','1') NOT NULL DEFAULT '1',
  `system_favicon_default` enum('0','1') NOT NULL DEFAULT '1',
  `system_favicon` varchar(255) DEFAULT NULL,
  `system_ogimage_default` enum('0','1') NOT NULL DEFAULT '1',
  `system_ogimage` varchar(255) DEFAULT NULL,
  `css_customized` enum('0','1') NOT NULL DEFAULT '0',
  `css_background` varchar(32) DEFAULT NULL,
  `css_link_color` varchar(32) DEFAULT NULL,
  `css_header` varchar(32) DEFAULT NULL,
  `css_header_search` varchar(32) DEFAULT NULL,
  `css_header_search_color` varchar(32) DEFAULT NULL,
  `css_btn_primary` varchar(32) DEFAULT NULL,
  `css_menu_background` varchar(32) DEFAULT NULL,
  `css_custome_css` text NOT NULL,
  `affiliates_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `affiliate_type` enum('registration','packages') NOT NULL DEFAULT 'registration',
  `affiliate_payment_method` enum('paypal','skrill','both') NOT NULL DEFAULT 'both',
  `affiliates_min_withdrawal` int(10) unsigned NOT NULL DEFAULT '50',
  `affiliates_per_user` varchar(32) NOT NULL DEFAULT '0.1',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `system_options`
--

INSERT INTO `system_options` (`ID`, `system_public`, `system_live`, `system_message`, `system_title`, `system_description`, `system_keywords`, `system_email`, `contact_enabled`, `directory_enabled`, `pages_enabled`, `groups_enabled`, `events_enabled`, `blogs_enabled`, `market_enabled`, `games_enabled`, `daytime_msg_enabled`, `verification_requests`, `profile_notification_enabled`, `stories_enabled`, `wall_posts_enabled`, `social_share_enabled`, `smart_yt_player`, `geolocation_enabled`, `geolocation_key`, `default_privacy`, `registration_enabled`, `registration_type`, `packages_enabled`, `activation_enabled`, `activation_type`, `age_restriction`, `minimum_age`, `getting_started`, `delete_accounts_enabled`, `max_accounts`, `social_login_enabled`, `facebook_login_enabled`, `facebook_appid`, `facebook_secret`, `twitter_login_enabled`, `twitter_appid`, `twitter_secret`, `google_login_enabled`, `google_appid`, `google_secret`, `instagram_login_enabled`, `instagram_appid`, `instagram_secret`, `linkedin_login_enabled`, `linkedin_appid`, `linkedin_secret`, `vkontakte_login_enabled`, `vkontakte_appid`, `vkontakte_secret`, `email_smtp_enabled`, `email_smtp_authentication`, `email_smtp_ssl`, `email_smtp_server`, `email_smtp_port`, `email_smtp_username`, `email_smtp_password`, `email_smtp_setfrom`, `email_notifications`, `email_post_likes`, `email_post_comments`, `email_post_shares`, `email_wall_posts`, `email_mentions`, `email_profile_visits`, `email_friend_requests`, `twilio_sid`, `twilio_token`, `twilio_phone`, `system_phone`, `chat_enabled`, `chat_status_enabled`, `s3_enabled`, `s3_bucket`, `s3_region`, `s3_key`, `s3_secret`, `uploads_directory`, `uploads_prefix`, `max_avatar_size`, `max_cover_size`, `photos_enabled`, `max_photo_size`, `videos_enabled`, `max_video_size`, `video_extensions`, `audio_enabled`, `max_audio_size`, `audio_extensions`, `file_enabled`, `max_file_size`, `file_extensions`, `censored_words_enabled`, `censored_words`, `reCAPTCHA_enabled`, `reCAPTCHA_site_key`, `reCAPTCHA_secret_key`, `session_hash`, `paypal_enabled`, `paypal_mode`, `paypal_id`, `paypal_secret`, `creditcard_enabled`, `alipay_enabled`, `bitcoin_enabled`, `stripe_mode`, `stripe_test_secret`, `stripe_test_publishable`, `stripe_live_secret`, `stripe_live_publishable`, `system_currency`, `data_heartbeat`, `chat_heartbeat`, `offline_time`, `min_results`, `max_results`, `min_results_even`, `max_results_even`, `analytics_code`, `system_logo`, `system_wallpaper_default`, `system_wallpaper`, `system_random_profiles`, `system_favicon_default`, `system_favicon`, `system_ogimage_default`, `system_ogimage`, `css_customized`, `css_background`, `css_link_color`, `css_header`, `css_header_search`, `css_header_search_color`, `css_btn_primary`, `css_menu_background`, `css_custome_css`, `affiliates_enabled`, `affiliate_type`, `affiliate_payment_method`, `affiliates_min_withdrawal`, `affiliates_per_user`) VALUES
(1, '1', '1', '', 'Sngine', '', '', 'akash@uniterrene.com', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', NULL, 'public', '1', 'free', '0', '1', 'email', '0', 13, '1', '1', 0, '0', '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, '1', '1', '0', NULL, NULL, NULL, NULL, 'content/uploads', 'sngine', 5120, 5120, '1', 5120, '1', 5120, 'mp4, mov', '1', 512000, 'mp3, wav', '1', 5120, 'txt, zip', '1', 'pussy,fuck,shit,asshole,dick,tits,boobs', '0', NULL, NULL, 'd3r2c5b7-5rf3-44x6-9d99-7052xxxx8689-9062', '0', 'sandbox', '', '', '0', '0', '0', 'test', NULL, NULL, NULL, NULL, 'USD', 5, 5, 10, 5, 10, 6, 12, '', NULL, '1', NULL, '1', '1', NULL, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 'registration', 'both', 50, '0.10');

-- --------------------------------------------------------

--
-- Table structure for table `system_themes`
--

CREATE TABLE IF NOT EXISTS `system_themes` (
  `theme_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `default` enum('0','1') NOT NULL,
  PRIMARY KEY (`theme_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Dumping data for table `system_themes`
--

INSERT INTO `system_themes` (`theme_id`, `name`, `default`) VALUES
(1, 'default', '0'),
(2, 'followthebirds', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group` tinyint(10) unsigned NOT NULL DEFAULT '3',
  `user_name` varchar(64) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_phone` varchar(64) DEFAULT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_activated` enum('0','1') NOT NULL DEFAULT '0',
  `user_activation_key` varchar(64) DEFAULT NULL,
  `user_reseted` enum('0','1') NOT NULL DEFAULT '0',
  `user_reset_key` varchar(64) DEFAULT NULL,
  `user_subscribed` enum('0','1') NOT NULL DEFAULT '0',
  `user_package` int(10) unsigned DEFAULT NULL,
  `user_subscription_date` datetime DEFAULT NULL,
  `user_boosted_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `user_boosted_pages` int(10) unsigned NOT NULL DEFAULT '0',
  `user_started` enum('0','1') NOT NULL DEFAULT '0',
  `user_verified` enum('0','1') NOT NULL DEFAULT '0',
  `user_banned` enum('0','1') NOT NULL DEFAULT '0',
  `user_live_requests_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_requests_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_messages_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_messages_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_notifications_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_notifications_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_picture` varchar(255) DEFAULT NULL,
  `user_picture_id` int(10) unsigned DEFAULT NULL,
  `user_cover` varchar(255) DEFAULT NULL,
  `user_cover_id` int(10) unsigned DEFAULT NULL,
  `user_album_pictures` int(10) unsigned DEFAULT NULL,
  `user_album_covers` int(10) unsigned DEFAULT NULL,
  `user_album_timeline` int(10) unsigned DEFAULT NULL,
  `user_pinned_post` int(10) unsigned DEFAULT NULL,
  `user_registered` datetime DEFAULT NULL,
  `user_last_login` datetime DEFAULT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_relationship` varchar(255) DEFAULT NULL,
  `user_biography` text,
  `user_website` varchar(255) DEFAULT NULL,
  `user_work_title` varchar(255) DEFAULT NULL,
  `user_work_place` varchar(255) DEFAULT NULL,
  `user_current_city` varchar(255) DEFAULT NULL,
  `user_hometown` varchar(255) DEFAULT NULL,
  `user_edu_major` varchar(255) DEFAULT NULL,
  `user_edu_school` varchar(255) DEFAULT NULL,
  `user_edu_class` varchar(255) DEFAULT NULL,
  `user_social_facebook` varchar(255) DEFAULT NULL,
  `user_social_twitter` varchar(255) DEFAULT NULL,
  `user_social_google` varchar(255) DEFAULT NULL,
  `user_social_youtube` varchar(255) DEFAULT NULL,
  `user_social_instagram` varchar(255) DEFAULT NULL,
  `user_social_linkedin` varchar(255) DEFAULT NULL,
  `user_social_vkontakte` varchar(255) DEFAULT NULL,
  `user_chat_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `user_privacy_wall` enum('me','friends','public') NOT NULL DEFAULT 'friends',
  `user_privacy_birthdate` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_relationship` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_basic` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_work` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_location` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_education` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_other` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_friends` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_photos` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_pages` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_groups` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_events` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `email_post_likes` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_comments` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_shares` enum('0','1') NOT NULL DEFAULT '1',
  `email_wall_posts` enum('0','1') NOT NULL DEFAULT '1',
  `email_mentions` enum('0','1') NOT NULL DEFAULT '1',
  `email_profile_visits` enum('0','1') NOT NULL DEFAULT '1',
  `email_friend_requests` enum('0','1') NOT NULL DEFAULT '1',
  `facebook_connected` enum('0','1') NOT NULL DEFAULT '0',
  `facebook_id` varchar(255) DEFAULT NULL,
  `twitter_connected` enum('0','1') NOT NULL DEFAULT '0',
  `twitter_id` varchar(255) DEFAULT NULL,
  `google_connected` enum('0','1') NOT NULL DEFAULT '0',
  `google_id` varchar(255) DEFAULT NULL,
  `instagram_connected` enum('0','1') NOT NULL DEFAULT '0',
  `instagram_id` varchar(255) DEFAULT NULL,
  `linkedin_connected` enum('0','1') NOT NULL DEFAULT '0',
  `linkedin_id` varchar(255) DEFAULT NULL,
  `vkontakte_connected` enum('0','1') NOT NULL DEFAULT '0',
  `vkontakte_id` varchar(255) DEFAULT NULL,
  `user_referrer_id` int(10) DEFAULT NULL,
  `user_affiliate_balance` varchar(64) NOT NULL DEFAULT '0',
  `notifications_sound` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `facebook_id` (`facebook_id`),
  UNIQUE KEY `twitter_id` (`twitter_id`),
  UNIQUE KEY `google_id` (`google_id`),
  UNIQUE KEY `linkedin_id` (`linkedin_id`),
  UNIQUE KEY `vkontakte_id` (`vkontakte_id`),
  UNIQUE KEY `instagram_id` (`instagram_id`),
  UNIQUE KEY `user_phone` (`user_phone`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_group`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_activated`, `user_activation_key`, `user_reseted`, `user_reset_key`, `user_subscribed`, `user_package`, `user_subscription_date`, `user_boosted_posts`, `user_boosted_pages`, `user_started`, `user_verified`, `user_banned`, `user_live_requests_counter`, `user_live_requests_lastid`, `user_live_messages_counter`, `user_live_messages_lastid`, `user_live_notifications_counter`, `user_live_notifications_lastid`, `user_firstname`, `user_lastname`, `user_gender`, `user_picture`, `user_picture_id`, `user_cover`, `user_cover_id`, `user_album_pictures`, `user_album_covers`, `user_album_timeline`, `user_pinned_post`, `user_registered`, `user_last_login`, `user_birthdate`, `user_relationship`, `user_biography`, `user_website`, `user_work_title`, `user_work_place`, `user_current_city`, `user_hometown`, `user_edu_major`, `user_edu_school`, `user_edu_class`, `user_social_facebook`, `user_social_twitter`, `user_social_google`, `user_social_youtube`, `user_social_instagram`, `user_social_linkedin`, `user_social_vkontakte`, `user_chat_enabled`, `user_privacy_wall`, `user_privacy_birthdate`, `user_privacy_relationship`, `user_privacy_basic`, `user_privacy_work`, `user_privacy_location`, `user_privacy_education`, `user_privacy_other`, `user_privacy_friends`, `user_privacy_photos`, `user_privacy_pages`, `user_privacy_groups`, `user_privacy_events`, `email_post_likes`, `email_post_comments`, `email_post_shares`, `email_wall_posts`, `email_mentions`, `email_profile_visits`, `email_friend_requests`, `facebook_connected`, `facebook_id`, `twitter_connected`, `twitter_id`, `google_connected`, `google_id`, `instagram_connected`, `instagram_id`, `linkedin_connected`, `linkedin_id`, `vkontakte_connected`, `vkontakte_id`, `user_referrer_id`, `user_affiliate_balance`, `notifications_sound`) VALUES
(1, 1, 'akash', 'akash@uniterrene.com', NULL, '$2y$10$3yRRxD.DRt39P9Bn2aioRegf6ezbT1RJMzNtIU0k.RxZ7fck6XpKm', '1', NULL, '0', NULL, '0', NULL, NULL, 0, 0, '1', '1', '0', 0, 0, 0, 4, 0, 0, 'akash', NULL, 'male', 'photos/2018/02/sngine_a33682574cc220aa4a98ea602c9532b1.jpg', 15, 'photos/2018/02/sngine_bb321cfaa49e0c6e203022e60d311e61.jpg', 2, 1, 2, NULL, NULL, '2018-02-01 06:50:54', '2018-03-12 06:17:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0', '1'),
(2, 3, 'abhik', 'abhik@uniterrene.com', NULL, '$2y$10$1Aig92mKS/IJTOikwAvoHuuVlvBkvxWXVSKzDWSXKlOhd6LDMLjLG', '1', 'db978d532882256c8569afcd73ad6a07', '0', NULL, '0', NULL, NULL, 0, 0, '1', '1', '0', 0, 0, 0, 2, 6, 0, 'Abhik', 'Ghosh', 'male', 'photos/2018/02/sngine_f3b813917ecca495a3b959ec16db2bdd.jpg', 8, NULL, NULL, 3, NULL, NULL, NULL, '2018-02-01 07:42:04', '2018-02-02 07:45:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0', '1'),
(8, 3, 'ranit', 'ranit@uniterrene.com', NULL, '$2y$10$eZuIFUujXI2KRgLzP4HZuOGnQRhydDEYZvc.FHEYnVX7tJGZRuq2O', '1', 'aeae8fde93fba98adc1f82367090c061', '0', NULL, '0', NULL, NULL, 0, 0, '1', '1', '0', 2, 0, 0, 0, 13, 0, 'Ranit', 'Mojumber', 'male', 'photos/2018/02/sngine_b176efa4bd6eb33a6a677503efc6d565.jpg', 6, NULL, NULL, 6, NULL, NULL, NULL, '2018-02-01 13:58:00', '2018-02-02 06:41:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0', '1'),
(5, 3, 'subrat', 'subrat@uniterrene.com', NULL, '$2y$10$BbIW9OGVjuTUA4mWqvZ1XeUZiukIwYMucAVz/YD0vvHsePI4GpUy6', '1', '1ba097cd5a425e528e1e259cb78acc0a', '0', NULL, '0', NULL, NULL, 0, 0, '1', '1', '0', 0, 0, 0, 4, 0, 0, 'Teko', 'Hudo', 'male', 'photos/2018/02/sngine_1959a9df316cb475117782698bb10c67.jpg', 12, NULL, NULL, 4, NULL, NULL, NULL, '2018-02-01 13:31:36', '2018-02-03 13:58:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0', '1'),
(9, 3, 'johndoe', 'johndoe@uniterrene.com', NULL, '$2y$10$IjODd5ZjV0NAOys29WzemONkyiLNFHP5MqK7HG1SZvVdQhwXr3Jau', '1', 'f0b34bfe973424306b302cb7c2f02e13', '0', NULL, '0', NULL, NULL, 0, 0, '1', '1', '0', 2, 0, 0, 0, 11, 0, 'John', 'Doe', 'male', 'photos/2018/02/sngine_9bb3a8cf19db6ec7e326ffca8fd3fe2d.jpg', 5, NULL, NULL, 5, NULL, NULL, NULL, '2018-02-01 14:03:53', '2018-02-02 06:41:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0', '1'),
(10, 3, 'john', 'john@example.com', NULL, '$2y$10$wtAP4hBpYJl5DUZVYCgyi.HY.mTqZtPMg9B/am/LyCS8zSmAQNfrK', '1', '0e05068d8f0cc6ce954a4c18ea44c300', '0', NULL, '0', NULL, NULL, 0, 0, '1', '1', '0', 0, 0, 0, 0, 1, 0, 'John', 'Doe', 'male', 'photos/2018/02/sngine_26b209fc01de75864f9e63937c9a6c53.jpg', 7, NULL, NULL, 7, NULL, NULL, NULL, '2018-02-01 14:06:13', '2018-02-15 06:28:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0', '1'),
(15, 3, 'tekobarik2', 'teko@barik.com2', NULL, '$2y$10$elca9e4ycbqjC7oTGJOFWu6Oc4EX9skqqFYQqpYKqOY3RHh7GJdNi', '1', 'aad89df50ade5a0e93e06960c671ab6a', '0', NULL, '0', NULL, NULL, 0, 0, '1', '1', '0', 0, 0, 0, 0, 0, 0, 'Teko', 'Barik', 'male', 'photos/2018/02/sngine_1571bd525cbdd1263a994e629b68cfad.jpg', 21, NULL, NULL, 14, NULL, NULL, NULL, '2018-02-17 06:55:09', '2018-02-22 09:05:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users_blocks`
--

CREATE TABLE IF NOT EXISTS `users_blocks` (
  `user_id` int(10) unsigned NOT NULL,
  `blocked_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_id_blocked_id` (`user_id`,`blocked_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `users_custom_fields`
--

CREATE TABLE IF NOT EXISTS `users_custom_fields` (
  `user_id` int(10) unsigned NOT NULL,
  `field_id` int(10) unsigned NOT NULL,
  `value` text NOT NULL,
  UNIQUE KEY `user_id_field_id` (`user_id`,`field_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE IF NOT EXISTS `users_online` (
  `user_id` int(10) unsigned NOT NULL,
  `last_seen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `UserID` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`user_id`, `last_seen`) VALUES
(1, '2018-03-12 06:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `users_polls_options`
--

CREATE TABLE IF NOT EXISTS `users_polls_options` (
  `user_id` int(10) unsigned NOT NULL,
  `poll_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_id_poll_id` (`user_id`,`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `users_searches`
--

CREATE TABLE IF NOT EXISTS `users_searches` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `node_id_node_type` (`node_id`,`node_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_sessions`
--

CREATE TABLE IF NOT EXISTS `users_sessions` (
  `session_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session_token` varchar(64) NOT NULL,
  `session_date` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_browser` varchar(64) NOT NULL,
  `user_os` varchar(64) NOT NULL,
  `user_ip` varchar(64) NOT NULL,
  PRIMARY KEY (`session_id`),
  UNIQUE KEY `session_token` (`session_token`),
  KEY `user_ip` (`user_ip`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=62 ;

--
-- Dumping data for table `users_sessions`
--

INSERT INTO `users_sessions` (`session_id`, `session_token`, `session_date`, `user_id`, `user_browser`, `user_os`, `user_ip`) VALUES
(22, '914becbcab4b97c2e3fa7c8c6da534b4', '2018-02-02 07:45:06', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(18, '188674db71612ce9252da307255b250b', '2018-02-02 06:48:41', 1, 'Chrome', 'Ubuntu', '::1'),
(27, 'ecd8f9a6c5d6cefef283c3d47ac8b80c', '2018-02-02 12:49:28', 5, 'Firefox', 'Ubuntu', '127.0.0.1'),
(26, '9e173fb4a09a9e1755ab4201774e1d78', '2018-02-02 12:24:32', 5, 'Firefox', 'Ubuntu', '127.0.0.1'),
(32, 'cd582d591357b26ccad8114c14622b49', '2018-02-03 13:58:42', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(33, '100271f81e3ef397fbf1c6273c8cba67', '2018-02-06 05:34:58', 1, 'Chrome', 'Ubuntu', '::1'),
(34, 'ae3be3727b9ed859849e6e430c8da436', '2018-02-06 05:57:47', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(35, 'eb26ce1121e2a430bc1ae8186a163832', '2018-02-06 11:38:05', 1, 'Chrome', 'Ubuntu', '::1'),
(36, '134fe1cf3c998289626c18bbf962a912', '2018-02-09 09:48:12', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(37, '09d146a79d0da918d243883858881f6f', '2018-02-09 12:55:52', 1, 'Chrome', 'Windows 7', '::1'),
(38, 'd42807abbe6e57fff99675bf9b28f3fd', '2018-02-09 13:01:12', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(39, 'f88395eaf9859d975de389447a6783c5', '2018-02-12 07:11:33', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(40, '8e904859fe3ea7e70e5eb972be8bacb4', '2018-02-12 11:10:05', 1, 'Chrome', 'Ubuntu', '::1'),
(41, '5ce7b10bf1d80ab16467671958303a83', '2018-02-12 11:23:12', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(42, '2c77f96a640b57ab3eb86d5a8dbeb53e', '2018-02-13 05:44:27', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(43, '8d6207a7eb899dc5fd5f53e6247cd6ea', '2018-02-13 06:45:42', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(44, 'fd0c2725e32cee0826d0ac91a8eafa3b', '2018-02-13 10:36:09', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(45, 'bb3f09afc3319ff173d59824c18932e3', '2018-02-13 11:49:40', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(48, '41cef8df995dd2b01a7b36116c3a7394', '2018-02-15 06:28:55', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(51, 'c3580b28152851bed2e8f8290ba6ce2e', '2018-02-16 06:47:43', 1, 'Chrome', 'Ubuntu', '::1'),
(52, '8f0b8cdde371d1fe65b51d69fadbeefb', '2018-02-16 06:50:57', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(53, 'd16dc85375a0c5bcbe7611bc984a98e5', '2018-02-17 05:30:12', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(58, '78dc85b55adbd4b37e9db21d2c315f64', '2018-02-17 06:55:21', 15, 'Firefox', 'Ubuntu', '127.0.0.1'),
(55, 'b8bdc318b567839554a5e15736f1d4b0', '2018-02-17 06:04:46', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(59, 'c9381c5d7781b3b6a1d7933ddf26d69a', '2018-02-19 13:53:32', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(60, '39ffe994e1ed6c86746e6218897303f3', '2018-02-22 09:05:05', 1, 'Firefox', 'Ubuntu', '127.0.0.1'),
(61, '7dce33fb30b7e466d8149347a254ebd1', '2018-03-12 06:17:20', 1, 'Firefox', 'Ubuntu', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `verification_requests`
--

CREATE TABLE IF NOT EXISTS `verification_requests` (
  `request_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`request_id`),
  UNIQUE KEY `node_id_node_type` (`node_id`,`node_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `verification_requests`
--

INSERT INTO `verification_requests` (`request_id`, `node_id`, `node_type`, `time`, `status`) VALUES
(1, 1, 'page', '2018-02-03 07:14:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `widget_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `place` varchar(32) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`widget_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
