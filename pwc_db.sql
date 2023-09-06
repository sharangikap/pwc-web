-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2023 at 11:16 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwc_db_admin`
--

CREATE TABLE `pwc_db_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwc_db_admin`
--

INSERT INTO `pwc_db_admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@princeofwales.edu.lk', 'Jpp6*u%t$Vy6z9&P(0Z66zJw');

-- --------------------------------------------------------

--
-- Table structure for table `pwc_db_events`
--

CREATE TABLE `pwc_db_events` (
  `id` int(10) NOT NULL,
  `title` varchar(190) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(190) NOT NULL,
  `organizer_name` varchar(190) NOT NULL,
  `organizer_email` varchar(190) NOT NULL,
  `organizer_phone` varchar(190) NOT NULL,
  `about` longtext NOT NULL,
  `img` varchar(1000) NOT NULL,
  `other_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwc_db_events`
--

INSERT INTO `pwc_db_events` (`id`, `title`, `date`, `time`, `location`, `organizer_name`, `organizer_email`, `organizer_phone`, `about`, `img`, `other_details`) VALUES
(1, '4th Battle of the Prides (Annual Hockey Encounter)', '2023-09-01', '15:00:00', 'Colombo Malay Grounds', 'Prince of Wales\' College, Moratuwa', '', '94', 'Join us on September 1st at Malay Grounds, Colombo, as the ice heats up for the 4th Hockey encounter between Prince of Wales College, Moratuwa, and Presidents College, Maharagama!  <br><br> Witness an epic clash of skills, determination, and school pride!', '815890952-hockey-big-match.jpg', 'No Information');

-- --------------------------------------------------------

--
-- Table structure for table `pwc_db_news`
--

CREATE TABLE `pwc_db_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(190) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `content` longtext NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `excerpt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pwc_db_news`
--

INSERT INTO `pwc_db_news` (`id`, `title`, `tags`, `content`, `photo`, `posted`, `date`, `category`, `excerpt`) VALUES
(1, 'Cambrians Achieved Three 1st Places in Provincial Level Western Music Competitions 2023', '', 'In the recent provincial-level Western Music competition, Prince of Wales College achieved a remarkable feat by securing three 1st places. The college\'s talents shined brightly as they clinched the top spot in various categories.  <br><br>  The Senior Choir from Prince of Wales College claimed the 1st place ðŸ¥‡, showcasing their exceptional musical prowess. The Junior Choir also brought home the 1st place ðŸ¥‡, displaying their impressive skills at a young age. Adding to their victories, Rometh Thenuka from 9B amazed the judges with a stellar recorder solo, securing the 1st place ðŸ¥‡ in that category.  <br><br>  Such outstanding performances have not only brought pride to Prince of Wales College but have also earned them a well-deserved ticket to the National level competition. Their hard work and dedication have paid off, as they now get ready to represent their college on a larger stage.  <br><br>  A heartfelt congratulations to all the talented participants from Western Music Society of Prince of Wales College! ðŸŽ‰ðŸŽ‰ Your musical achievements are an inspiration to the entire community.', 'wm-competitions-2023-pwc.webp', '', '2023-08-29', 'Achievements - Aesthetics', 'In the recent provincial-level Western Music competition, Prince of Wales College achieved a remarkable feat by securing three 1st places. The college'),
(3, 'Junior Prefects Applications', '', 'Junior Prefects Applications', '423831531-news-psd.png', '', '2023-08-30', 'Special Announcements', 'Junior Prefects Applications');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwc_db_admin`
--
ALTER TABLE `pwc_db_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `pwc_db_events`
--
ALTER TABLE `pwc_db_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwc_db_news`
--
ALTER TABLE `pwc_db_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pwc_db_admin`
--
ALTER TABLE `pwc_db_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pwc_db_events`
--
ALTER TABLE `pwc_db_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pwc_db_news`
--
ALTER TABLE `pwc_db_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
