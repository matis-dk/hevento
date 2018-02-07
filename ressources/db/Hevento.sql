-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 06:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hevento`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_events`
--

CREATE TABLE `table_events` (
  `event_id` int(11) UNSIGNED NOT NULL,
  `event_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `event_title` varchar(255) DEFAULT NULL,
  `event_address` varchar(255) DEFAULT NULL,
  `event_town` varchar(255) DEFAULT NULL,
  `event_zip` varchar(255) DEFAULT NULL,
  `event_description` mediumtext,
  `event_capacity` int(255) DEFAULT NULL,
  `event_date` varchar(255) DEFAULT NULL,
  `event_deadline` int(255) DEFAULT NULL,
  `event_price` int(11) DEFAULT NULL,
  `event_category_type` varchar(255) DEFAULT NULL,
  `event_cover` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `event_duration` varchar(255) DEFAULT NULL,
  `event_category_checkboxes` varchar(255) DEFAULT NULL,
  `event_active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_events`
--

INSERT INTO `table_events` (`event_id`, `event_timestamp`, `event_title`, `event_address`, `event_town`, `event_zip`, `event_description`, `event_capacity`, `event_date`, `event_deadline`, `event_price`, `event_category_type`, `event_cover`, `user_id`, `event_duration`, `event_category_checkboxes`, `event_active`) VALUES
(23, '2018-02-07 17:16:13', 'Meetup 2018 for HesteFys', 'Storegade 6', 'Bramming', '6740', '&lt;p&gt;&lt;strong&gt;Meetup 2018&nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Et meetup arrangement for hestefysioterapeuter hvor der bliver pr&aelig;senteret nogle af de nyeste behandlingsmetoder, samt gennemgang af den nuv&aelig;rende konsensus.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;L&aelig;s mere p&aring; &lt;a href=&quot;http://www.google.dk&quot;&gt;www.google.dk&lt;/a&gt;&lt;/p&gt;', 50, '2018-02-28 14:00', 1, 199, 'meetup', '80d53a458a084b6e01f5e9b8988780b5333dfb69.jpg', 83, '02:00', '[\"2\",\"4\"]', 1),
(24, '2018-02-07 17:17:42', 'Weekend kursus for alle', 'Finsensgade 35', 'Esbjerg', '6700', '&lt;p&gt;&lt;strong&gt;Kursus i hoftemanipulation for heste&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Kursus hvor der gennemg&aring;es forskellige manuelle behandlingsmetoder.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Kontakt mig endelig for yderligere information.&lt;/p&gt;', 10, '2018-02-25 12:00', 4, 249, 'kursus', 'f9e512d4d261dde877cad46f95cb42833f164037.jpg', 83, '03:00', '[\"1\"]', 1),
(25, '2018-02-07 17:19:02', 'Arrangement for Hestefysioterapeuter', 'Sønderbyvej 12', 'Tjæreborg', '6731', '&lt;p&gt;&lt;strong&gt;Arrangement for hestefysioterapeuter&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Hvert &aring;r holder danske hestefysioterapeuter for alle deres medlemmer. Arrangementet starter kl 14 og der vil b&aring;de blive serveret mad samt muligheder for at diskuterer branchen fremadrettet diskurs.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Er du blot fysioterapeut er du ogs&aring; mere end &lt;u&gt;velkommen&lt;/u&gt;!&lt;/p&gt;', 10, '2018-02-24 14:25', 2, 49, 'arrangement', 'ce3903817c7d509862f3f3ac672bf4e89892f6aa.jpg', 83, '02:15', '[\"1\",\"3\"]', 1),
(26, '2018-02-07 17:20:22', 'Esbjerg Meetup Febuar!', 'Kongensgade 12', 'Esbjerg', '6700', '&lt;p&gt;&lt;strong&gt;Esbjerg party d. 12 februar!&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Fusce sodales egestas magna sit amet tincidunt. Integer nulla odio, ultrices et mollis ac, sollicitudin non est. Suspendisse nec nunc sed ipsum consectetur accumsan.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Zgestas magna sit amet tincidunt. Integer nulla odio, ultrices et mollis ac, sollicitudin non est. Suspendisse nec nunc sed ipsum consectetur accumsan.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 50, '2018-02-12 12:00', 1, 0, 'arrangement', '0e0f91cdad1fce53b8e3c4ae99996927d4e11403.jpg', 83, '05:00', '[\"4\"]', 1),
(27, '2018-02-07 17:21:22', 'Torvehallerne for fysioterapeuter', 'Gl Vardevej 66', 'Esbjerg', '6700', '&lt;p&gt;&lt;strong&gt;Varius&nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Semper diam sed vulputate. Cras ac imperdiet velit. Etiam fringilla nisi in sagittis ornare. Nulla a metus lobortis, pellentesque orci.&lt;/p&gt;', 100, '2018-02-26 12:00', 1, 75, 'arrangement', '54b1e879b98d1d6a6fb29cd6db10cb8817a418d1.jpg', 83, '00:00', '[\"1\"]', 1),
(28, '2018-02-07 17:23:25', 'Festuge for studernede såvel som erfarne', 'Allegade 3', 'Tønder', '6270', '&lt;p&gt;&lt;strong&gt;T&oslash;nder &aring;bner op for nye konkurrencer!&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;In lacinia fringilla. Nunc cursus, nunc volutpat ornare laoreet, lorem tellus aliquet dui.&lt;/p&gt;', 100, '2018-02-17 12:00', 3, 0, 'arrangement', 'fa9a6fdb42bebe25850a74a459ba33c2fcfbfbb0.jpg', 83, '00:00', '[\"1\",\"4\"]', 1),
(29, '2018-02-07 17:39:51', 'Anerkendt terapeut lære fra sig!', 'Bissensgade', 'Århus', '8000', '&lt;p&gt;&lt;strong&gt;Morris S. Brown kommer til danmark&lt;br&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;Virtute torquatos ex vis, fabulas periculis temporibus no mel, an blandit detraxit his. Nihil elaboraret quo no, idque error te quo. Justo nonumes platonem mei ex, in semper ponderum delicatissimi eum. Hinc diceret no nec, alia principes an sit. An eos diceret&lt;/p&gt;', 100, '2018-02-19 12:15', 3, 599, 'kursus', 'f2bca64994221ce96679e57980ee2e77e338cfd2.jpg', 83, '06:00', '[\"1\"]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_users`
--

CREATE TABLE `table_users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_town` varchar(255) DEFAULT NULL,
  `user_zip` varchar(255) DEFAULT NULL,
  `user_phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_users`
--

INSERT INTO `table_users` (`user_id`, `user_fullname`, `user_email`, `user_password`, `user_address`, `user_town`, `user_zip`, `user_phone`) VALUES
(83, 'Mathias', 'm@gmail.com', '$2y$10$LmVzss.EGpgaAKssTTwpjO9mFEEnwD8n18gIoxTptG4htDyBQdZmy', 'torvegade 68b', 'Esbjerg', '6700', 50586008);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_events`
--
ALTER TABLE `table_events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `fk_grade_id` (`user_id`);

--
-- Indexes for table `table_users`
--
ALTER TABLE `table_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_events`
--
ALTER TABLE `table_events`
  MODIFY `event_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `table_users`
--
ALTER TABLE `table_users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_events`
--
ALTER TABLE `table_events`
  ADD CONSTRAINT `fk_grade_id` FOREIGN KEY (`user_id`) REFERENCES `table_users` (`user_id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `Active/inactive events` ON SCHEDULE EVERY 1 MINUTE STARTS '2018-02-01 00:00:00' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Activity event monitor' DO UPDATE table_events SET event_active=0 WHERE event_date < CURRENT_TIMESTAMP$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
