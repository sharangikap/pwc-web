-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 09:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `about_past_headprefects`
--

CREATE TABLE `about_past_headprefects` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_past_headprefects`
--

INSERT INTO `about_past_headprefects` (`id`, `name`, `year`) VALUES
(1, 'Nevile De Mel', '1940/41'),
(2, 'O.C.De.Alwis', '1941/42'),
(3, 'N.S. Wickramasinghe', '1942/43'),
(4, 'C.E.M De Soysa', '1943/44'),
(5, 'Cecil L Peiris', '1944/45'),
(6, 'A.P.Dias', '1945/46'),
(7, 'D.S.Karangoda', '1946/47'),
(8, 'Claude Fonseka', '1947/48'),
(9, 'Stanly Fonseka', '1948/49'),
(10, 'T.A.T. Fernando', '1949/50'),
(11, 'H.Gunasekara', '1950/51'),
(12, 'Lewellyn Fernando', '1951/52'),
(13, 'Chitradasa De Silva', '1952/53'),
(14, 'Herbert Fonseka', '1954/55'),
(15, 'Stanly De Alwis', '1955/56'),
(16, 'G. Saranasena', '1956/57'),
(17, 'Lasantha Rodrigo', '1957/58'),
(18, 'D.Wijegunawardena', '1958/59'),
(19, 'Nihal De Silva', '1959/61'),
(20, 'Senaka Silva', '1961/63'),
(21, 'L.L. Douglas Silva', '1963/64'),
(22, 'C.G.J. Fonseka', '1964/65'),
(23, 'Leslie De Silva', '1965/66'),
(24, 'Chandra Jayarathna', '1967/68'),
(25, 'M.K.Thusitha Kumara', '1968/69'),
(26, 'Srinimal K.Fernando', '1969/70'),
(27, 'R. Kurukulasooriya', '1970/72'),
(28, 'Sriyan Samararatna', '1972/73'),
(29, 'Srimal Mendis', '1973/74'),
(30, 'Sanath Ushantha', '1974/75'),
(31, 'Shiran Ferdinando', '1975/76'),
(32, 'C.Fernando', '1976/77'),
(33, 'Tyrone Pattreiott', '1976/77'),
(34, 'J.Chandra Dewa', '1977/78'),
(35, 'Wirantha Fernando', '1978/79'),
(36, 'Jayasiri Fernando', '1978/79'),
(37, 'L.C.Peiris', '1979/80'),
(38, 'Nihal Chandrapala', '1980/81'),
(39, 'Sampath De Silva', '1981/82'),
(40, 'Jagath Mahasen', '1982/83'),
(41, 'Jagath Mahasen', '1982/83'),
(42, 'Lalith Weerasinghe', '1982/83'),
(43, 'Rasika Namal', '1983/84'),
(44, 'Geethaka Warnakula', '1983/84'),
(45, 'Lalith Weerasinghe', '1984/85'),
(46, 'Nishan Fernando', '1985/86'),
(47, 'Denil Ajantha', '1986/87'),
(48, 'Pradeep S.Fernando', '1987/88'),
(49, 'Chamaru Alwis', '1988/89'),
(50, 'Kamal Fernando', '1989/90'),
(51, 'Chandana Fernando', '1990/91'),
(52, 'Thushara Wijewardena', '1991/92'),
(53, 'Kavindra Rajapaksha', '1992/93'),
(54, 'Subash Kuruvitage', '1993/94'),
(55, 'Nuwan Gomas', '1994/95'),
(56, 'Panduka Wakwella', '1995/96'),
(57, 'Himal Manerigama', '1996/97'),
(58, 'Ravindra Manoj', '1997/98'),
(59, 'Ushan Wijewardana', '1999/00'),
(60, 'Nalin Wewakumbura', '1998/99'),
(61, 'Ushan Wijewardana', '1999/00'),
(62, 'Nalin Wewakumbura', '1998/99'),
(63, 'Indunil Dananjaya', '2011/12'),
(64, 'Mahesh Chanaka Silva', '2012/13'),
(65, 'Thilanka Ferdinando', '2013/14'),
(66, 'Sharada Ranasinghe', '2014/15'),
(67, 'A.D.Menush Nimeshan Perera', '2015/16'),
(68, 'K.Buwaneka Indunil Rajapakshe', '2016/17'),
(69, 'Dinura Sahanaka De Silva', '2017/18'),
(70, 'H.W.Dinil Avishka', '2018/19'),
(71, 'Thareen Renuja Dayarathne', '2019/20'),
(72, 'G.M.Venura Sachintha Aponso', '2020/21/22'),
(73, 'H.W Thishakya Kumarathunga', '2022/23');

-- --------------------------------------------------------

--
-- Table structure for table `about_past_principals`
--

CREATE TABLE `about_past_principals` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` varchar(1000) NOT NULL,
  `years` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_past_principals`
--

INSERT INTO `about_past_principals` (`id`, `name`, `img`, `years`) VALUES
(1, 'Mr. W. S. Gunawardena', 'content/img/img-history/former-principals/ws-gunawardane-former-principals-pwc.webp', '1876–1891'),
(2, 'Mr. Philip Lewis', 'content/img/img-history/former-principals/pilip-lewis-former-principals-pwc.webp', '1892–1896'),
(3, 'Mr. J. P. C. Mendis', 'content/img/img-history/former-principals/jpc-mendis-former-principals-pwc.webp', '1896–1917'),
(4, 'Mr. G. D. Jayasuriya', 'content/img/img-history/former-principals/gd-jayasooriya-former-principals-pwc.webp', '1917–1925'),
(5, 'Mr. Louis Edmund Blaze', 'content/img/img-history/former-principals/le-blaze-former-principals-pwc.webp', '1926'),
(6, 'Mr. L. P. Crease', 'content/img/img-history/former-principals/lp-crease-former-principal-pwc.webp', '1927–1931'),
(7, 'Mr. Rev. F. R. E. Mendis', 'content/img/img-history/former-principals/ra-mendis-former-principals-pwc.webp', '1931–1932'),
(8, 'Mr. H. Samaranayake', 'content/img/img-history/former-principals/h-samaranayake-former-principals-pwc.webp', '1932–1933'),
(9, 'Mr. J. B. C. Rodrigo', 'content/img/img-history/former-principals/jbc-rodrigo-former-principals-pwc.webp', '1933–1959'),
(10, 'Mr. S. C. H. De Silva', 'content/img/img-history/former-principals/ch-de-silva-former-principals-pwc.webp', '1959–1973'),
(11, 'Mr. L. H. Gunapala', 'content/img/img-history/former-principals/lh-gunapala-former-principals-pwc.webp', '1973–1977'),
(12, 'Mr. M. E. C. Fernando', 'content/img/img-history/former-principals/mec-fernando-former-principal-pwc.webp', '1977–1988'),
(13, 'Mr. H. L. B. Gomes', 'content/img/img-history/former-principals/hlb-gomes-former-principals-pwc.webp', '1989–1998'),
(14, 'Mr. D. A. Ramanayake', 'content/img/img-history/former-principals/da-ramanayake-former-principals-pwc.webp', '1998–2001'),
(15, 'Mr. S. J. P. Wijesinghe', 'content/img/img-history/former-principals/sjp-wejesinghe-former-principals-pwc.webp', '2001–2005'),
(16, 'Mr. Rathnaweera Perera', 'content/img/img-history/former-principals/rathnaweera-perera-former-principals-pwc.webp', '2005–2007'),
(17, 'Mr. Rohana Karunarathna', 'content/img/img-history/former-principals/rohana-karunarathne-former-principals-pwc.webp', '2007–2011'),
(18, 'Mr. W. D. Jayasena', 'content/img/img-history/former-principals/wd-jayasena-former-principals-pwc.webp', '2011–2012'),
(19, 'Mr. Sampath Weragoda', 'content/img/img-history/former-principals/sampath-weragoda-former-principals-pwc.webp', '2012–2013'),
(20, 'Mr. J. W. S. Siriwardane', 'content/img/img-history/former-principals/jws-sririwardane-former-principal-pwc.webp', '2013–2016'),
(21, 'Mr. Kusala Fernando', 'content/img/img-history/former-principals/kusala-fernando-former-principals-pwc.webp', '2017–2021');

-- --------------------------------------------------------

--
-- Table structure for table `about_prefect_topboard`
--

CREATE TABLE `about_prefect_topboard` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_prefect_topboard`
--

INSERT INTO `about_prefect_topboard` (`id`, `name`, `img`, `post`) VALUES
(1, 'Thinuka Fernando', 'content/img/img-about/prefects/thinuka-fernando-hp23-pwc.webp', 'Head Prefect'),
(2, 'Vihanga Kothalawala', 'content/img/img-about/prefects/vihanga-dhp23-pwc.webp', 'Deputy Head Prefect'),
(3, 'Tharusha Deshapriya', 'content/img/img-about/prefects/tharusha-dhp23-pwc.webp', 'Deputy Head Prefect'),
(4, 'Nelindu Nithijaya', 'content/img/img-about/prefects/nelindu-dhp23-pwc.webp', 'Deputy Head Prefect'),
(5, 'Isindu Udaneth', 'content/img/img-about/prefects/isindu-dhp-prefects-pwc.webp', 'Deputy Head Prefect'),
(6, 'Hansana Dulnith', 'content/img/img-about/prefects/hansana-dhp23-pwc.webp', 'Deputy Head Prefect'),
(7, 'Thimira Damsara', 'content/img/img-about/prefects/thimira-damsara-dhp23-pwc.webp', 'Deputy Head Prefect'),
(8, 'Nuran Gunawardane', 'content/img/img-about/prefects/nuran-dhp23-pwc.webp', 'Deputy Head Prefect'),
(9, 'Senitha Nethmika', 'content/img/img-about/prefects/senitha-dhp23-pwc.webp', 'Deputy Head Prefect');

-- --------------------------------------------------------

--
-- Table structure for table `about_school_administration`
--

CREATE TABLE `about_school_administration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_school_administration`
--

INSERT INTO `about_school_administration` (`id`, `name`, `img`, `post`) VALUES
(1, 'Mr. Hasitha Kesara Weththimuni', 'content/img/img-home/principal-pwc.webp', 'Principal <br> SLEAS-II B.A.,M.A. (UOK) P.G.D.E.(UOC), P.G.D.E.A. P.G.D. in Mass Communication M.Ed.(reaching), LLB(reaching)'),
(2, 'Mr. Ranjith Illapperuma', 'content/img/img-about/administration/Ranjith-sir-administration-pwc.webp', 'Deputy Principal <br> SLPS-I SLPS -1 B.A, M.A, P.G.Dip in Ed, M.Ed, P.G.D.Ed mgt'),
(3, 'Mrs. H. E. Priyanga', 'content/img/img-about/administration/priyanga-madam-administration-pwc.webp', 'Deputy Principal <br> SLPS-I B.A., B.Ed. M.Ed. in Education Management, M.A. in Linguistics P.G.D.E., P.G.D.E.M.'),
(4, 'Mr. Upul Silva', 'content/img/img-about/administration/Upul-sir-administration-pwc.webp', 'Deputy Principal <br> SLPS-III N.C.E. Dip. (English) B.Ed. in Education Management'),
(5, 'Ven. Mathale Sumangala Thero', 'content/img/img-about/administration/sumangala-thero-assit-principal-pwc.webp', 'Assistant Principal'),
(6, 'Mrs. K. Bhagya Sandamali', 'content/img/img-about/administration/Bhagya-madam-administration-pwc.webp', 'Assistant Principal'),
(7, 'Mrs. Ramya Samarasekara', 'content/img/img-about/administration/Primary-madam-administration-pwc.webp', 'Assistant Principal (Primary Section Head)'),
(8, 'Mr. Chathura Mendis', 'content/img/img-about/administration/chathura-sir-administration-pwc.webp', 'Assistant Principal'),
(9, 'Mrs. Duminda Samarajeewa', 'content/img/img-about/administration/duminda-miss-administration-pwc.webp', 'Assistant Principal'),
(10, 'Mr. Chamara Jeewantha', 'content/img/img-about/administration/', 'Assistant Principal'),
(11, 'Mr. Kasun Dewapriya', 'content/img/img-about/administration/kasun-sir-administration-pwc.webp', 'Sports Administrator'),
(12, 'Mrs. Pinipa Gunawardana', 'content/img/img-about/administration/Pinipa-madam-administration-pwc.webp', 'Section Head (AL Science)'),
(13, 'Mrs. Dewika Kulasinghe', 'content/img/img-about/administration/Dewika-madam-administration-pwc.webp', 'Section Head (AL Commerce)'),
(14, 'Mrs. Upeksha De Alwis', 'content/img/img-about/administration/Upeksha-madam-administration-pwc.webp', 'Section Head (AL Arts)');

-- --------------------------------------------------------

--
-- Table structure for table `bigmatch_1day_results`
--

CREATE TABLE `bigmatch_1day_results` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `pwc` text NOT NULL,
  `ssc` text NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bigmatch_1day_results`
--

INSERT INTO `bigmatch_1day_results` (`id`, `year`, `pwc`, `ssc`, `result`) VALUES
(1, '1981', '150/5', '+148', 'PWC won by 5 wickets'),
(2, '1982', '+62', '63/5', 'SSC won by 5 wickets'),
(3, '1983-1987', '-', '-', 'not Played'),
(4, '1988', '+101', '102/6', 'SSC won by 4 wickets'),
(5, '1989', '+193/9', '194/9', 'SSC won by 1 wicket'),
(6, '1990', '48/2', '+164/8', 'No Decision'),
(7, '1991', '+201/8', '180', 'PWC won by 21 runs'),
(8, '1992', '163/2', '+162', 'PWC won by 8 wickets'),
(9, '1993', '144/6', '+143/9', 'PWC won by 4 wickets'),
(10, '1994', '142/8', '+197', 'SSC won by 55 runs'),
(11, '1995', '144/5', '+143', 'PWC won by 5 wickets'),
(12, '1996', '116', '+163/9', 'SSC won by 47 runs'),
(13, '1997', '158', '+250/9', 'SSC won by 92 runs'),
(14, '1998', '156/8', '+192/9', 'SSC won by 36 runs'),
(15, '1999', '+227/8', '206', 'PWC won by 21 runs'),
(16, '2000', '+85', '86/4', 'SSC won by 6 wickets'),
(17, '2001', '92/5', '+90', 'PWC won by 5 wickets'),
(18, '2002', '+220', '225/8', 'SSC won by 2 wickets'),
(19, '2003', '+124', '127/5', 'SSC won by 5 wickets'),
(20, '2004', '+205', '125', 'PWC won by 80 runs'),
(21, '2005', '163', '+176/9', 'SSC won by 13 runs'),
(22, '2006', '151/5', '+149', 'PWC won by 5 wickets'),
(23, '2007', '181/8', '+179', 'PWC won by 2 wickets'),
(24, '2008', 'DNP', '143', 'No Decision'),
(25, '2009', '+282/9', '134', 'PWC won by 148 runs'),
(26, '2010', '159/9', '+158/8', 'PWC won by 1 wicket'),
(27, '2011', '+287/9', '288/4', 'SSC won by 6 wickets'),
(28, '2012', '220', '+275/8', 'SSC won by 55 runs'),
(29, '2013', '91/4', '+89', 'PWC won by 6 wickets'),
(30, '2014', '182', '182/7', 'Tied'),
(31, '2015', '148', '+225/9', 'SSC won by 77 runs'),
(32, '2016', '+171', '172/5', 'SSC won by 5 wickets'),
(33, '2017', '+159', '154/4', 'SSC won by 6 runs on D/L method'),
(34, '2018', '+163/9', '166/4', 'SSC won by 6 wickets'),
(35, '2019', '169/6', '+218/9', 'PWC won by 5 runs on D/L method'),
(36, '2020', '-', '-', 'considered as a no-result'),
(37, '2021', '+134', '132', 'PWC won by 2 runs'),
(38, '2022', '211', '+227/9', 'SSC won by 16 Runs'),
(39, '2023', '+336/7', '295/4', 'SSC won by 6 wickets (DLS)');

-- --------------------------------------------------------

--
-- Table structure for table `bigmatch_2day_results`
--

CREATE TABLE `bigmatch_2day_results` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `pwc_1st` text NOT NULL,
  `pwc_2nd` text NOT NULL,
  `ssc_1st` text NOT NULL,
  `ssc_2nd` text NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bigmatch_2day_results`
--

INSERT INTO `bigmatch_2day_results` (`id`, `year`, `pwc_1st`, `pwc_2nd`, `ssc_1st`, `ssc_2nd`, `result`) VALUES
(1, '1933', '+145', '98/7', '88', '43/8', 'Drawn'),
(2, '1934', '+269', '-', '71', '45/2', 'Drawn'),
(3, '1935', '114', '102/6', '+127', '88', 'Won by PWC'),
(4, '1936', '+105', '237', '140', '159', 'Won by PWC'),
(5, '1937', '292', '-', '+169', '36', 'Won by PWC'),
(6, '1938-1953', '-', '-', '-', '-', 'not Played'),
(7, '1954', '+242', '184/2', '365/7', '16/2', 'Drawn'),
(8, '1955', '274', '56/1', '+139', '190', 'Won by PWC'),
(9, '1956', '+213/3', '115/3', '180/9', '117/6', 'Drawn'),
(10, '1957', '245', '56/4', '+140', '233/6', 'Drawn'),
(11, '1958', '415/9', '-', '+319', '69/4', 'Drawn'),
(12, '1959', '+263', '-', '119', '88', 'Won by PWC'),
(13, '1960', '+325/1', '-', '113', '182/5', 'Drawn'),
(14, '1961', '199', '72/3', '+178', '155/9', 'Drawn'),
(15, '1962', '+170', '161', '174', '159/5', 'Won by SSC'),
(16, '1963', '303/8', '-', '+176', '139/6', 'Drawn'),
(17, '1964', '+176', '160/7', '195', '50/7', 'Drawn'),
(18, '1965', '208', '160/6', '186', '138/5', 'Drawn'),
(19, '1966', '76', '93', '+321/7', '-', 'Won by SSC'),
(20, '1967', '+259/6', '111/5', '215', '-', 'Drawn'),
(21, '1968', '+285', '-', '143', '280/8', 'Drawn'),
(22, '1969', '-', '-', '-', '-', 'not Played'),
(23, '1970', '-', '-', '-', '-', 'not Played'),
(24, '1971', '+200/7', '69', '180/5', '17/4', 'Drawn'),
(25, '1972', '152', '61/2', '+124', '197/4', 'Drawn'),
(26, '1973', '151', '29/0', '+206/8', '111/5', 'Drawn'),
(27, '1974', '124', '295/7', '215/8', '-', 'Drawn'),
(28, '1975', '+199/6', '85/9', '171/3', '27/4', 'Drawn'),
(29, '1976', '+169', '140/7', '150/7', '64/2', 'Drawn'),
(30, '1977', '117/9', '41/2', '+86', '70', 'Won by PWC'),
(31, '1978', '+169', '140/7', '150/7', '64/2', 'Drawn'),
(32, '1979', '+168/9', '80/5', '198/9', '-', 'Drawn'),
(33, '1980', '161', '76/3', '+118', '73', 'Drawn'),
(34, '1981', '+181/8', '106/8', '158', '52/2', 'Drawn'),
(35, '1982', '+192/9', '105/6', '192/7', '-', 'Drawn'),
(36, '1983', '+161', '141/6', '196/5', '-', 'Drawn'),
(37, '1984', '+163', '67', '144/7', '55/7', 'Drawn'),
(38, '1985', '+137', '57/4', '192/8', '-', 'Drawn'),
(39, '1986', '127/5', '60/4', '+188/6', '73/4', 'Drawn'),
(40, '1987', '+165/9', '162/8', '148/8', '87/1', 'Drawn'),
(41, '1988', '+186/8', '77/4', '105/9', '60/4', 'Drawn'),
(42, '1989', '159', '54/3', '+208/2', '85/4', 'Drawn'),
(43, '1990', '+191/7', '102/1', '131/8', '78/1', 'Drawn'),
(44, '1991', '351/5', '-', '+174/6', '-', 'Drawn'),
(45, '1992', '213/9', '-', '287/9', '-', 'Drawn'),
(46, '1993', '262/9', '-', '+187/8', '106/5', 'Drawn'),
(47, '1994', '+120', '113/9', '184', '-', 'Drawn'),
(48, '1995', '+175', '97/7', '144', '18/0', 'Drawn'),
(49, '1996', '+91', '116/8', '154/9', '-', 'Drawn'),
(50, '1997', '+197/8', '131/4', '325/4', '-', 'Drawn'),
(51, '1998', '172/5', '-', '285/9', '-', 'Drawn'),
(52, '1999', '246', '-', '+219', '123/2', 'Drawn'),
(53, '2000', '166/7', '-', '+162', '119/8', 'Drawn'),
(54, '2001', '191/5', '161/4', '255/8', '-', 'Drawn'),
(55, '2002', '232/9', '211/7', '255/9', '-', 'Drawn'),
(56, '2003', '+200/9', '25/1', '271/7', '-', 'Drawn'),
(57, '2004', '173', '121', '+120', '87/7', 'Drawn'),
(58, '2005', '111', '31/2', '+158', '94/7', 'Drawn'),
(59, '2006', '+179', '135/3', '271/8', '-', 'Drawn'),
(60, '2007', '+192', '177/9', '198', '71/2', 'Drawn'),
(61, '2008', '+257/6', '-', '153', '-', 'Drawn'),
(62, '2009', '+209', '120/8', '161', '44/2', 'Drawn'),
(63, '2010', '+185', '157', '167/6', '23/2', 'Drawn'),
(64, '2011', '+201', '176', '363/3', '17/0', 'Won by SSC'),
(65, '2012', '+161', '160/8', '252/8', '-', 'Drawn'),
(66, '2013', '+162', '135/5', '180', '-', 'Drawn'),
(67, '2014', '221/9', '32/2', '220', '221', 'Drawn'),
(68, '2015', '262/7', '-', '33/1', '-', 'Drawn'),
(69, '2016', '141', '148/4', '188', '182/6', 'Drawn'),
(70, '2017', '+230', '41/1', '221', '-', 'Drawn'),
(71, '2018', '227/7', '-', '+159', '153/6', 'Drawn'),
(72, '2019', '+194', '51/3', '220/8 d', '-', 'Drawn'),
(73, '2020', '-', '-', '-', '-', 'considered as a no-result'),
(74, '2021', '174', '17/0', '+254', '167/2 d', 'Drawn'),
(75, '2022', '149', '186/9 d', '158/8 d', '103/2', 'Drawn'),
(76, '2023', '208', '-', '219/7', '207/2', 'Drawn');

-- --------------------------------------------------------

--
-- Table structure for table `bigmatch_t20_results`
--

CREATE TABLE `bigmatch_t20_results` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `pwc` text NOT NULL,
  `ssc` text NOT NULL,
  `result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bigmatch_t20_results`
--

INSERT INTO `bigmatch_t20_results` (`id`, `year`, `pwc`, `ssc`, `result`) VALUES
(1, '2023', '+162/7', '163/5', 'SSC Won by 5 Wickets');

-- --------------------------------------------------------

--
-- Table structure for table `pwc_db_admin`
--

CREATE TABLE `pwc_db_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pwc_db_admin`
--

INSERT INTO `pwc_db_admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@princeofwales.edu.lk', '#~3FLAs19Fjbo9');

-- --------------------------------------------------------

--
-- Table structure for table `pwc_db_al25`
--

CREATE TABLE `pwc_db_al25` (
  `Reference_no` int(11) NOT NULL,
  `Stream` varchar(100) NOT NULL,
  `Subject` varchar(1000) NOT NULL,
  `almedium` varchar(100) NOT NULL,
  `pwc_Other` varchar(1000) NOT NULL,
  `olclass` text NOT NULL,
  `School_Private_Candidate` varchar(1000) NOT NULL,
  `School` varchar(1000) NOT NULL,
  `S_District` varchar(1000) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Name_with_Initials` varchar(1000) NOT NULL,
  `Birthday` date NOT NULL,
  `NIC` int(11) NOT NULL,
  `Address1` varchar(1000) NOT NULL,
  `Address2` varchar(1000) NOT NULL,
  `City` varchar(1000) NOT NULL,
  `Guardian_Name` varchar(1000) NOT NULL,
  `ResidentialNo` int(11) NOT NULL,
  `Mobile1` int(11) NOT NULL,
  `Mobile2` int(11) NOT NULL,
  `E_mail` varchar(1000) NOT NULL,
  `Distance` int(11) NOT NULL,
  `Transport` varchar(100) NOT NULL,
  `IndexNo` int(11) NOT NULL,
  `olMedium` varchar(10) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Sinhala` varchar(10) NOT NULL,
  `English` varchar(10) NOT NULL,
  `Science` varchar(10) NOT NULL,
  `Mathematics` varchar(10) NOT NULL,
  `History` varchar(10) NOT NULL,
  `Optional1` varchar(1000) NOT NULL,
  `Result1` varchar(10) NOT NULL,
  `Optional2` varchar(1000) NOT NULL,
  `Result2` varchar(10) NOT NULL,
  `Optional3` varchar(1000) NOT NULL,
  `Result3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pwc_db_events`
--

INSERT INTO `pwc_db_events` (`id`, `title`, `date`, `time`, `location`, `organizer_name`, `organizer_email`, `organizer_phone`, `about`, `img`, `other_details`) VALUES
(1, '4th Battle of the Prides (Annual Hockey Encounter)', '2023-09-01', '15:00:00', 'Colombo Malay Grounds', 'Prince of Wales\' College, Moratuwa', '', '94', 'Join us on September 1st at Malay Grounds, Colombo, as the ice heats up for the 4th Hockey encounter between Prince of Wales College, Moratuwa, and Presidents College, Maharagama!  <br><br> Witness an epic clash of skills, determination, and school pride!', '815890952-hockey-big-match.jpg', 'No Information'),
(2, 'Pirith and Alms Giving (147th Anniversary)', '2023-09-13', '21:00:00', 'School Main Hall', 'PWC', 'info@princeofwales.edu.lk', '0112645628', 'The holy hour, which is lined up properly for the wonderful moment of Kumara Vidhu Bima, a sacred ground blessed by Seth Pathumavas to open the future of a proud history of 147 years....', 'pirith-event-pwc.webp', 'No information'),
(3, 'Cambrian Dinner Dance 2023', '2023-10-14', '19:30:00', 'Grand Ballroom, Waters Edge Hotel, Battaramulla', 'PWC OBA', 'media@pwcoba.lk', '0112645336', 'Cambrians Are you Ready to Party! Cambrian Dinner Dance 2023, Keep the Date Free... 14th October, Saturday  Tickets will be Available Soon for Online VISA/MASTER cards!  Stay Tuned, and don\'t forget to keep the date free.', '1040048686-373662867_632755345656187_5316122287395985578_n.jpg', '7:30pm - 2:00am: Full Event');

-- --------------------------------------------------------

--
-- Table structure for table `pwc_db_news`
--

CREATE TABLE `pwc_db_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(190) NOT NULL,
  `content` longtext NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `excerpt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pwc_db_news`
--

INSERT INTO `pwc_db_news` (`id`, `title`, `content`, `photo`, `posted`, `date`, `category`, `excerpt`) VALUES
(1, 'Cambrians Achieved Three 1st Places in Provincial Level Western Music Competitions 2023', 'The Senior Choir from Prince of Wales College claimed the 1st place 🥇, showcasing their exceptional musical prowess. The Junior Choir also brought home the 1st place 🥇, displaying their impressive skills at a young age. Adding to their victories, Rometh Thenuka from 9B amazed the judges with a stellar recorder solo, securing the 1st place 🥇 in that category. <br><br>\n\nSuch outstanding performances have not only brought pride to Prince of Wales College but have also earned them a well-deserved ticket to the National level competition. Their hard work and dedication have paid off, as they now get ready to represent their college on a larger stage. <br><br>\n\nA heartfelt congratulations to all the talented participants from Western Music Society of Prince of Wales College! 🎉🎉 Your musical achievements are an inspiration to the entire community. 🎶👏', 'wm-competitions-2023-pwc.webp', '', '2023-08-29', 'Achievements - Aesthetic Sector', 'In the recent provincial-level Western Music competition, Prince of Wales College achieved a remarkable feat by securing three 1st places. The college'),
(2, 'The Senior and Junior Choirs of Prince of Wales\' College won 2nd Place in the All-Island Western Music Competition', 'Great news! Our choir groups have won 2nd place in the All Island Western Music Competition - Junior and Senior Choir. The competition took place at the National College of Education in Maharagama.  \n<br><br>\nWe want to give a big congratulations to our talented singers for their fantastic performance. \n<br><br>\nThe choir groups worked hard and practiced under the guidance of dedicated teachers, Mrs. Anne Shaluka and Mrs. Deepthika Ranasinghe.  Well done to everyone involved in this achievement!', '252941670-choir-(2).webp', '', '2023-09-11', 'Achievements - Aesthetic Sector', 'Great news! Our choir groups have won 2nd place in the All Island Western Music Competition - Junior and Senior Choir. The competition took place at t'),
(3, 'Wales Handball Team Takes Second Place in Under-16 All-Island Tournament', 'In a thrilling showdown, the Wales Handball Team secured second place in the Under-16 All-Island Handball Tournament, held in Kuliyapitiya Central. The final match, which took place against the host team, Kuliyapitiya Central, ended with a nail-biting score of 5-6 in favor of the local team. <br><br> Under the guidance of Coach Mr. Suminda Karunarathne and the Master in Charge (MIC) Mrs. Aruni Jayawardane, the Wales Handball Team exhibited exceptional skills and teamwork throughout the tournament. Despite their commendable efforts, they narrowly missed out on the championship but left a lasting impression with their remarkable performance. <br><br> The tournament, which brought together young handball enthusiasts from across the island, showcased the growing talent and passion for the sport in Wales. The Wales Handball Team\'s journey to the finals was a testament to their dedication and hard work, earning them well-deserved recognition. <br><br> The Wales Handball Team\'s outstanding performance in the Under-16 All-Island Tournament has not only raised their profile but also inspired young handball players to follow in their footsteps. This tournament serves as a stepping stone for these aspiring athletes, providing a platform to hone their talents and compete at a higher level in the future.', '1529616043-handball.webp', '', '2023-09-10', 'Achievements - Sports Sector', 'In a thrilling showdown, the Wales Handball Team secured second place in the Under-16 All-Island Handball Tournament, held in Kuliyapitiya Central. Th'),
(4, 'ශ්‍රේෂ්ඨ වේල්ස් මවුන්ගේ 147 වන ජන්ම දිනය පිළිවෙතට මුල් තැන දෙමින් ආගමානුකූලව සමරමු - විදුහල්පති නිවේදනය', 'ඔබ දැනටමත් දන්නා පරිදි වේල්ස් කුමර විද්‍යාල මාතාවගේ 147 වන ජන්ම දින සැමරුම වෙනුවෙන් පැවැත්වෙන  සර්වරාත්‍රික පිරිත් පිංකම දහතුන් වන බදාදා රාත්‍රියේත් සංඝයා වහන්සේ විෂයෙහි දානමය පිංකම බ්‍රහස්පතින්දා උදෑසන කාලයේදීත් විද්‍යාල පරිශ්‍රයේදී පැවැත්වේ.<br><br>\n\nපිරිත් සජ්ඣායනය සඳහා ස්වාමීන් වහන්සේලා හතළිස් නමක් වැඩම කිරීමට නියමිත අතර දානමය පුණ්‍ය කර්මය සඳහා ස්වාමීන් වහන්සේලා තිස් පස් නමක් වැඩම කිරීමට නියමිත ය. <br><br>\n\nමෙම මාහැඟි පිංකම සඳහා ඔබ සැමට ගෞරවයෙන් ඇරයුම් කරන අතර ඒ සදහා සුවිශේෂී ව දායකවීමට කැමති පින්වතුන් වෙතොත් අංශ ප්‍රධාන ගුරුභවතුන් හෝ දායකවීමට කැමැති ආදි ශිෂ්‍යයන් වෙතොත් ආදි ශිෂ්‍ය සංගමය අමතන මෙන් දන්වමි.<br><br>\n\nඑසේම 147 වන ජන්ම දිනයට සමගාමී කතෝලික ආගමික ආශිර්වාද දේව මෙහෙය ශුද්ධ වූ එම්මානුවෙල් දේවස්ථානයේදී පහළොස් වන දින උදෑසන පැවැත්වේ. මෙම අවස්ථාවට වේල්ස් කුමර විද්‍යාලය සමග වේල්ස් කුමරි විද්‍යාලය ද ඒකාබද්ධව සම්බන්ධවන බැවින් විද්‍යාල ද්විත්වයටම අදාළ සමස්ත ප්‍රජාවට එම අවස්ථාවට සම්බන්ධ වන මෙන් ගෞරවයෙන් ආරාධනා කර සිටිමි.<br><br>\n\nඅප ශ්‍රේෂ්ඨ වේල්ස් මවුන්ගේ 147 වන ජන්ම දිනය පිළිවෙතට මුල් තැන දෙමින් ආගමානුකූලව සමරමු..\nචිරන් ජයතු වේල්ස් මවුනි...!🌹🌹🌹<br><br>\n\nවිදුහල්පති<br>\nවේල්ස් කුමර විද්‍යාලය.', '374442436-principal-announcement-9-11.png', '', '2023-09-12', 'Principal Announcements', 'වේල්ස් කුමර විද්‍යාල මාතාවගේ 147 වන ජන්ම දින සැමරුම වෙනුවෙන් පැවැත්වෙන  සර්වරාත්‍රික පිරිත් පිංකම දහතුන් වන බදාදා රාත්‍රියේත් සංඝයා වහන්සේ විෂයෙහි දාන'),
(5, 'Under-16 Basketball Team of Prince of Wales College Crowned as the Champions of Western Province', 'Cambrian Basketball team became champions in the western province basketball tournament.The tournament which was taken place at Royal College sports complex and the finals were held between Prince Of Wales college and Loyola college Negombo.After a heated up match between two schools,scores ended up as 51 to 47 <br><br> Cambrian\'s team which was captained by Nejan Fernando was able to achieve this victory under the guidance of the head coach Mr.Tharaka Dharmakumara and Masters In charge Mrs.Himali Sewwandi and Mrs.Chamalka Dissanayaka.Cambrian basketball team showcased their outstanding talents and skills throughout the tournament. <br><br> Such extraordinary performance has brought pride to our alma mater.At last a heartful congratulations to all the talanted basketball players of cambrian basketball team.', '1186430182-basketball-09-16-pwc.webp', '', '2023-09-15', 'Achievements - Sports Sector', 'Cambrian Basketball team became champions in the western province basketball tournament.The tournament which was taken place at Royal College sports c'),
(6, 'Wales Carrom Team Secures Second Place in Under-20 Boys Category at All Island School Games 2023', 'In an exciting match at the All Island School Games 2023, organized by the Ministry of Education, the carrom team from Prince of Wales College, Moratuwa, achieved a remarkable feat. They secured the runners-up position in the under-20 boys category, showcasing their impressive skills and teamwork. Coach Mr. Dinesh Nishantha Fernando\'s guidance and the hard work of the young players brought them to this significant achievement, making their school proud. <br><br> This accomplishment highlights the dedication and sportsmanship of the students from Prince of Wales College, Moratuwa, as they competed on a national level. The carrom team\'s success in the tournament serves as an inspiration to their fellow students and encourages the development of sports in the school.', '1710761248-achivements-carrom-(2).webp', '', '2023-09-19', 'Achievements - Sports Sector', 'In an exciting match at the All Island School Games 2023, organized by the Ministry of Education, the carrom team from Prince of Wales College, Moratu'),
(7, 'Cambrian Wrestlers Eraned Runners Up Title in the National Stage', 'At the National Wrestling Meet, the students from Prince of Wales College in Moratuwa did really well. They didn\'t win the top prize, but they became proud runners-up. This means they were second-best in the whole country! <br><br> These young wrestlers worked really hard and showed how determined they were. They left a big impression on the national stage because of their effort. <br><br> We want to say a big thank you to their coach. The coach helped them a lot and without the coach, they couldn\'t have done this well. The coach trained and guided them, and it made a big difference in their journey at the National Wrestling Meet.', '441935520-achivements-3-copy-(2).webp', '', '2023-09-20', 'Achievements - Sports Sector', 'At the National Wrestling Meet, the students from Prince of Wales College in Moratuwa did really well. They didn\'t win the top prize, but they became '),
(8, 'Gold Medal Glory for Young Wrestlers at National Wrestling Meet 2023', 'Our young wrestling champions, Mewan Sankalpa (U18, 45kg), Dinith Liyanage (U18, 51kg), and Seneru Dilmith (U16, 52kg), have made us incredibly proud! They won gold medals at the National Wrestling Meet. <br><br> A special thanks goes to their dedicated coach, who played a crucial role in their success. Hats off to their coach for their outstanding guidance and support! <br><br> Congratulations to these talented wrestlers.. You are true champions!', '1826833991-achivements-copy-(2).webp', '', '2023-09-20', 'Achievements - Sports Sector', 'Our young wrestling champions, Mewan Sankalpa (U18, 45kg), Dinith Liyanage (U18, 51kg), and Seneru Dilmith (U16, 52kg), have made us incredibly proud!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_past_headprefects`
--
ALTER TABLE `about_past_headprefects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_past_principals`
--
ALTER TABLE `about_past_principals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_prefect_topboard`
--
ALTER TABLE `about_prefect_topboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_school_administration`
--
ALTER TABLE `about_school_administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bigmatch_1day_results`
--
ALTER TABLE `bigmatch_1day_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bigmatch_2day_results`
--
ALTER TABLE `bigmatch_2day_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bigmatch_t20_results`
--
ALTER TABLE `bigmatch_t20_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwc_db_admin`
--
ALTER TABLE `pwc_db_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `pwc_db_al25`
--
ALTER TABLE `pwc_db_al25`
  ADD PRIMARY KEY (`Reference_no`);

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
-- AUTO_INCREMENT for table `about_past_headprefects`
--
ALTER TABLE `about_past_headprefects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `about_past_principals`
--
ALTER TABLE `about_past_principals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `about_prefect_topboard`
--
ALTER TABLE `about_prefect_topboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `about_school_administration`
--
ALTER TABLE `about_school_administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bigmatch_1day_results`
--
ALTER TABLE `bigmatch_1day_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `bigmatch_2day_results`
--
ALTER TABLE `bigmatch_2day_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `bigmatch_t20_results`
--
ALTER TABLE `bigmatch_t20_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pwc_db_admin`
--
ALTER TABLE `pwc_db_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pwc_db_events`
--
ALTER TABLE `pwc_db_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pwc_db_news`
--
ALTER TABLE `pwc_db_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
