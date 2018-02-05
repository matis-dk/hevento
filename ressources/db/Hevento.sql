-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 10:53 AM
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
  `event_timestamp` datetime DEFAULT CURRENT_TIMESTAMP,
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
(2, '2018-01-28 19:22:01', 'Meetup 2018 for HesteFys', 'Storegade 6', 'Bramming', '6740', 'Et meetup arrangement for hestefysioterapeuter hvor der bliver præsenteret nogle af de nyeste behandlingsmetoder, samt gennemgang af den nuværende konsensus', 120, '2017-02-26', 2018, 180, 'Enkelt dags arragement', '', 2, NULL, NULL, 0),
(3, '2018-01-28 19:24:58', 'Weekend kursus for alle', 'Finsensgade 35', 'Esbjerg', '6700', 'Kursus hvor der gennemgåes forskellige manuelle behandlingsmetoder', 30, '2018-02-13', 2018, 299, 'Kursus', '', 2, NULL, NULL, 0),
(4, '2018-01-28 19:27:16', 'Fælles arrangement for Danske Hestefysioterapeuter', 'Sønderbyvej 12', 'Tjæreborg', '6731', 'Hvert år holder danske hestefysioterapeuter for alle deres medlemmer. Arrangementet starter kl 14 og der vil både blive serveret mad samt muligheder for at diskuterer branchen fremadrettet diskurs', 100, '2018-02-29', 2018, 150, 'Årlig arrangement', '', 1, NULL, NULL, 0),
(5, '2018-01-28 19:28:29', 'Esbjerg Meetup Febuar!', 'Kongensgade 12', 'Esbjerg', '6700', 'Fusce sodales egestas magna sit amet tincidunt. Integer nulla odio, ultrices et mollis ac, sollicitudin non est. Suspendisse nec nunc sed ipsum consectetur accumsan.', 80, '2018-02-25', 2018, 0, 'Enkelt dags arragement', '', 2, NULL, NULL, 0),
(6, '2018-01-28 19:29:51', 'Torvehallerne for fysioterapeuter', 'Gl Vardevej 66', 'Esbjerg', '6700', 'Varius semper diam sed vulputate. Cras ac imperdiet velit. Etiam fringilla nisi in sagittis ornare. Nulla a metus lobortis, pellentesque orci', 195, '2018-02-12', 2018, 499, 'Kursus', '', 2, NULL, NULL, 0),
(7, '2018-01-28 19:31:01', 'Festuge for studernede såvel som erfarne', 'Allegade 3', 'Tønder', '6270', 'In lacinia fringilla. Nunc cursus, nunc volutpat ornare laoreet, lorem tellus aliquet dui', 500, '2018-03-05', 2018, 320, 'Årlig arrangement', '', 1, NULL, NULL, 0),
(8, '2018-01-28 19:32:17', 'Rødding årlige fysioterapeuter seminar', 'Gramvej 2', 'Rødding', '6510', 'Consectetur adipiscing elit. Suspendisse sed odio sem. Sed venenatis sem in iaculis iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum in tempus orci. Fusce quis tincidunt ligula, viverra aliq', 200, '2018-03-25', 2018, 100, 'Årlig arrangement', '', 2, NULL, NULL, 0),
(9, '2018-02-03 23:36:56', 'Super fedt arrangement', 'torvegade 68b', 'Esbjerg', '6700', '&lt;p&gt;&lt;strong&gt;Fysioterapeut arrangement med heste&lt;br&gt;&lt;/strong&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;Vi holder et super fedt arrangement engang i midt februar hvor alle er inviteret!&lt;br&gt;&lt;br&gt;Projektet bliver og er inspireret er farverig tema der s&aelig;rlig er popul&aelig;rt i tyskland.&lt;br&gt;&lt;br&gt;L&aelig;s mere om f&oslash;lgende p&aring; &lt;a href=&quot;http://www.dankehestefysioterapeuter.dk&quot;&gt;DanskeHestefysioterapeuter&lt;/a&gt;.&lt;br&gt;&lt;br&gt;&lt;br&gt;Programmet der skal gennemg&aring;es er f&oslash;lgende liste:&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;/p&gt;', 100, '2018-03-22 14:00', 3, 199, 'kursus', 'e3ee3922985b79efe5e11ddb1bfc48f218ce29d4.jpg', 70, '01:00', '[\"1\",\"4\"]', 0),
(10, '2018-02-04 01:22:29', 'asdasdas', 'asdasdas', 'sadasdasd', 'asdasd', '&lt;p&gt;Om det her arrangement&lt;/p&gt;', 100, '2018-02-13 12:10', 3, 111, 'meetup', 'e3ee3922985b79efe5e11ddb1bfc48f218ce29d4.jpg', 70, '00:00', '[\"1\",\"2\",\"4\"]', 0),
(11, '2018-02-04 02:44:55', 'Nyeste Kursus', 'torvegade 68b', 'Esbjerg', '6700', '&lt;p&gt;Det her bliver omkring hvorledes mad er tilg&aelig;ngelig i n&aelig;romr&aring;der&lt;/p&gt;', 100, '2018-03-20 15:20', 3, 199, 'kursus', '2267bffe573d5c708e7648a6348be4cb7c9164dc.jpg', 77, '00:00', '[\"1\",\"4\"]', 1),
(12, '2018-02-04 03:30:48', 'aaaaa', 'torvegade 68b', 'Esbjerg', '8220', '&lt;p&gt;&lt;strong&gt;asdasdsa&lt;/strong&gt;&lt;/p&gt;', 100, '2018-02-07 12:00', 3, 199, 'meetup', 'c9f0f7c34a6e4e4f2325f2cad82c6f305a6468de.jpg', 70, '00:00', '[\"1\"]', 0),
(13, '2018-02-04 15:45:06', 'asdas', 'Sødalsparken 20', 'Brabrand', '8220', '&lt;p&gt;adsasdas&lt;/p&gt;', 100, '2018-02-20 12:00', 1, 111, 'kursus', 'e3ee3922985b79efe5e11ddb1bfc48f218ce29d4.jpg', 70, '02:00', '[\"3\"]', 0),
(15, '2018-02-04 18:10:10', 'asdasdasd', 'asdas', 'asdasdas', 'dasdasd', '&lt;p&gt;adasdasd&lt;/p&gt;', 100, '2018-02-13 12:00', 1, 111, 'meetup', 'e3ee3922985b79efe5e11ddb1bfc48f218ce29d4.jpg', 70, '00:00', '[\"3\"]', 1);

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
(1, 'Mathias Piletti', 'mathiasp@gmail.com', 'mathias', 'Torvegade 68B 1.th.', 'Esbjerg', '6700', 50586008),
(2, 'Jeppe Skovsgaard', 'js@skovsgaardgrafisk.dk', 'jeppe', 'Niels bohrs vej 6', 'Esbjerg', '6700', 60796074),
(70, 'asdasdasdasd', 'mmm@gmail.com', '$2y$10$1GOgCBsoAmRvCL1kiEYEs.oArwg468xPGTfjAeCQrK.ZW9QoJgkk.', 'sdsad', 'asdasd', 'asda', 2147483647),
(77, 'Lukas Jensen', 'lukas@gmail.com', '$2y$10$m/6OkGF3/epzuHGCmXcoX.rGqKJlbukd4YRl1oVoAPa3dFWIHALjS', 'torvegade 68b', 'Esbjerg', '6700', 55771188);

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
  MODIFY `event_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `table_users`
--
ALTER TABLE `table_users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

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
