-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 01:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `img` varchar(50) NOT NULL,
  `other_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pwc_db_events`
--

INSERT INTO `pwc_db_events` (`id`, `title`, `date`, `time`, `location`, `organizer_name`, `organizer_email`, `organizer_phone`, `about`, `img`, `other_details`) VALUES
(1, 'Media Day 2023', '2023-08-16', '11:39:51', 'Main Hall', 'CMBU', 'ff', 'ff', '<p>As an AI language model, I\'m limited to generating responses within a specific character limit to ensure readability and coherence. Therefore, I\'ll provide you with a lengthy paragraph close to 1000 characters. If you need more content, feel free to ask for additional paragraphs!</p>\n\n<p>---</p>\n\n<p>In the vast expanse of the digital realm, artificial intelligence strides forth, embodying the culmination of human ingenuity and technological prowess. Its foundation rests upon the intricacies of neural networks, mimicking the complex web of human cognition. With each passing day, AI grows more sophisticated, offering unprecedented possibilities and advancements across diverse fields.</p>\n\n<p>In the realm of healthcare, AI has become a powerful ally, transforming diagnostics and treatment. AI-driven algorithms meticulously analyze medical images, assisting doctors in detecting subtle abnormalities that might otherwise elude the human eye. Moreover, AI-powered chatbots and virtual assistants alleviate the burden on healthcare professionals, offering personalized support and timely responses to patients\' queries.</p>\n\n<p>Beyond the boundaries of medicine, AI revolutionizes industries such as finance and commerce. In financial markets, AI-driven algorithms comb through massive datasets in real-time, predicting trends and optimizing investments. E-commerce platforms leverage AI to offer personalized product recommendations, enhancing the shopping experience and boosting sales.</p>\n\n<p>In education, AI-driven tutoring systems cater to individual learning needs, empowering students to grasp complex concepts at their own pace. Moreover, AI-enhanced grading systems streamline the evaluation process for educators, enabling them to focus on fostering student growth and development.</p>\n', 'img/header-main-pwc.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaa'),
(3, 'Media Day 2023', '2023-08-16', '11:39:51', 'Main Hall', 'CMBU', 'ff', 'ff', 'ff', 'img/header-main-pwc.jpg', ''),
(4, 'Media Day 2023', '2023-08-16', '11:39:51', 'Main Hall', 'CMBU', 'ff', 'ff', 'ff', 'img/header-main-pwc.jpg', ''),
(5, 'Media Day 2023', '2023-08-16', '11:39:51', 'Main Hall', 'CMBU', 'ff', 'ff', 'ff', 'img/header-main-pwc.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pwc_db_news`
--

CREATE TABLE `pwc_db_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(190) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pwc_db_news`
--

INSERT INTO `pwc_db_news` (`id`, `title`, `tags`, `content`, `photo`, `posted`, `date`, `category`, `slug`) VALUES
(1, 'PWC Celebrates 147th anniversary ', 'blog,php,bootstrap', '<div><b>Lorem ipsum dolor</b> sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>', 'img/article-img-test.jpg', 'draft', '2023-08-05', 'news', 'pwc-147-anniversary'),
(2, 'Benefits of livig in this world', 'life,life tips', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>', 'img/article-img-test.jpg', 'publish', '2018-04-27', 'admin', ''),
(3, 'The future of web developement on earth', 'web,development,earth', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', 'img/article-img-test.jpg', 'publish', '2018-04-27', 'admin', ''),
(4, 'The subtle art of not giving a fuck-Mark Manson', 'books,reading,novels', '<span style=\"font-size: 12.855px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style=\"font-size: 12.855px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br>', 'img/article-img-test.jpg', 'publish', '2018-04-27', 'admin', ''),
(5, 'The challanges of being a writter', 'witting,blogging', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', 'img/article-img-test.jpg', 'publish', '2018-04-27', 'etemesi', ''),
(6, 'Why i ventured into writting as a proffesion', 'witting,blogging', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style=\"font-size: 11.0167px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style=\"font-size: 11.0167px;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 11.0167px;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 11.0167px;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 11.0167px;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 11.0167px;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', 'img/article-img-test.jpg', 'draft', '2018-04-27', 'etemesi', '');

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pwc_db_events`
--
ALTER TABLE `pwc_db_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pwc_db_news`
--
ALTER TABLE `pwc_db_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
