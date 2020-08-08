-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 07:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(15) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `Name`, `Password`, `Date`) VALUES
(1, 'admin', 'admin', '2020-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `id` int(11) NOT NULL,
  `image_dir` varchar(1300) DEFAULT NULL,
  `advertise_by` varchar(1300) DEFAULT NULL,
  `about_info` varchar(1300) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `image_dir`, `advertise_by`, `about_info`, `user_id`) VALUES
(1, 'images/ss1.jpeg', 'Rohit Shetty', 'Sooryavanshi is an upcoming Indian Hindi-language action film directed by Rohit Shetty and written by Yunus Sajawal. Produced by Hiroo Yash Johar, Aruna Bhatia, Apoorva Mehta and Rohit Shetty.', NULL),
(2, 'images/ff9poster.jpg', 'Production Companies Of FF9', 'Dominic Toretto and his crew join forces to battle the most skilled assassin and high-performance driver they\'ve ever encountered -- his forsaken brother.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aliabhatt`
--

CREATE TABLE `aliabhatt` (
  `Movie_id` int(10) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted_with` varchar(255) NOT NULL,
  `Release_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aliabhatt`
--

INSERT INTO `aliabhatt` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted_with`, `Release_year`) VALUES
(1, 'Student of the Year', '109.10', 'romantic,\r\ncomedy,\r\ndrama ', '109.10', 'Sidharth Malhotra\r\nVarun Dhawan,\r\nRishi Kapoor,\r\nRonit Roy,\r\nRam Kapoor,\r\nSana Saeed', '2012'),
(2, 'Kalank', '146.31', 'period drama ', '146.31', 'Madhuri Dixit,\r\nSonakshi Sinha,\r\nVarun Dhawan,\r\nAditya Roy Kapur,\r\nSanjay Dutt', '2019'),
(3, 'Gully Boy', '238.16', 'musical\r\ndrama', '238.16', 'Siddhant Chaturvedi,	\r\nRanveer Singh', '2019'),
(4, 'Raazi', '207', 'spy thriller', '207', 'Vicky Kaushal', '2018'),
(5, 'Badrinath Ki Dulhania', '200.45', 'romantic,\r\ncomedy', '200.45', 'Varun Dhawan', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `aliabhatt1`
--

CREATE TABLE `aliabhatt1` (
  `Movie_id` int(11) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted_with` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aliabhatt1`
--

INSERT INTO `aliabhatt1` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted_with`) VALUES
(1, 'Student of the Year', '109.10', 'romantic\r\ncomedy\r\ndrama', '109.10', 'Sidharth Malhotra\r\nVarun Dhawan\r\nAlia Bhatt\r\nRishi Kapoor\r\nRonit Roy\r\nRam Kapoor\r\nSana Saeed'),
(2, 'Kalank', '146.31', 'period drama', '146.31', 'Madhuri Dixit\r\nSonakshi Sinha\r\nAlia Bhatt\r\nVarun Dhawan\r\nAditya Roy Kapur\r\nSanjay Dutt'),
(3, 'Gully boy', '238.16', 'musical-drama', '238.16', 'Ranveer singh'),
(4, 'Raazi', '207', 'spy-thriller', '207', 'Vicky kaushal'),
(5, 'Badrinath Ki dulhaniya', '200.45', 'romantic,\r\ncomedy', '200.45', 'Varun Dhawan');

-- --------------------------------------------------------

--
-- Table structure for table `analyst`
--

CREATE TABLE `analyst` (
  `id` int(15) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analyst`
--

INSERT INTO `analyst` (`id`, `Name`, `E-mail`, `Password`, `Date`, `username`) VALUES
(1, 'Harshiv', 'patelharshiv575@gmail.com', 'jaymataji123', '2020-01-27', 'patelharshiv');

-- --------------------------------------------------------

--
-- Table structure for table `anushkashetty`
--

CREATE TABLE `anushkashetty` (
  `Movie_id` int(10) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted_with` varchar(255) NOT NULL,
  `Release_year` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anushkashetty`
--

INSERT INTO `anushkashetty` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted_with`, `Release_year`) VALUES
(1, 'Baahubali 2: The Conclusion', '1,810', 'action', '1,810', 'Tamannaah,\r\nRamya Krishna,\r\nSathyaraj,\r\nNassar,\r\nPrabhas,\r\nRana Daggubati', '2017'),
(2, 'Lingaa', '188', 'action,\r\ndrama', '188', 'Sonakshi Sinha,\r\nJagapathi Babu,\r\nSanthanam,	\r\nRajinikanth', '2014'),
(3, 'Singam III ', '135', 'action', '135', 'Suriya,\r\nHansika Motwani,\r\nDanny Sapani,\r\nVivek Kumar,\r\nSanthanam', '2017'),
(4, 'Bhaagamathie', '90', 'horror', '90', 'Jayaram,\r\nUnni Mukundan,\r\nAsha Sarath,\r\nMurali Sharma', '2018'),
(5, 'Sye Raa Narasimha Reddy', '246.60', 'action', '246.60', 'Chiranjeevi', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `ayushmannkhurrana`
--

CREATE TABLE `ayushmannkhurrana` (
  `Movie_id` int(255) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted_with` varchar(255) NOT NULL,
  `Release_year` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ayushmannkhurrana`
--

INSERT INTO `ayushmannkhurrana` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted_with`, `Release_year`) VALUES
(1, 'Shubh Mangal Zyada Saavdhan', '80.59 ', 'romantic,\r\ncomedy', '80.59', 'Neena Gupta', '2020'),
(2, 'bala', '171', 'comedy', '171', 'Bhumi Pednekar,\r\nYami Gautam', '2019'),
(3, 'Dream Girl', '200.8', 'comedy', '200.8', 'Nushrat Bharucha', '2019'),
(4, 'Article 15 ', '93.08', 'crime,\r\ndrama', '93.08', 'Isha Talwar,\r\nSayani Gupta', '2019'),
(5, 'Andhadhun', '400.56', 'comedy,\r\ncrime', '400.56', 'Radhika Apte,\r\nTabu', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `checkrow`
--

CREATE TABLE `checkrow` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `data` int(15) DEFAULT NULL,
  `data1` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkrow`
--

INSERT INTO `checkrow` (`id`, `user`, `data`, `data1`) VALUES
(1, NULL, NULL, NULL),
(2, 2, NULL, NULL),
(3, NULL, NULL, NULL),
(4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `message`, `Name`) VALUES
(1, 'patelharshiv575@gmail.com', 'Hii this is Harshiv Patel', 'Harshiv Sarvoday Patel'),
(2, 'patelharshiv575@gmail.com', 'This is another message from harshiv....', 'Harshiv Patel');

-- --------------------------------------------------------

--
-- Table structure for table `deepikapadukone`
--

CREATE TABLE `deepikapadukone` (
  `Movie_id` int(10) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted_with` varchar(255) NOT NULL,
  `Release_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deepikapadukone`
--

INSERT INTO `deepikapadukone` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted_with`, `Release_year`) VALUES
(1, 'Chhapaak', '55.44', 'Drama ', '55.44', 'Vikrant Massey', 2020),
(2, 'Padmaavat', '585', 'epic period drama', '585', 'Shahid Kapoor,\r\nRanveer Singh', 2018),
(3, 'Bajirao Mastani', '356', 'epic historical romance', '356', 'Priyanka Chopra,\r\nRanveer Singh', 2015),
(4, 'Tamasha', '130.21', 'romance', '130.21', 'Ranbir Kapoor', 2015),
(5, 'Piku', '141', 'comedy,\r\ndrama', '141', 'Irrfan Khan,	\r\nAmitabh Bachchan', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `form12`
--

CREATE TABLE `form12` (
  `id` int(15) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `Mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `answered` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form12`
--

INSERT INTO `form12` (`id`, `firstname`, `lastname`, `Mobileno`, `email`, `username`, `password`, `answered`) VALUES
(1, 'Harshiv', 'Patel', '07874658301', 'patelharshiv575@gmail.com', 'patelharshiv', 'jaymataji', 'yes'),
(2, 'sam', 'patel', '8160846014', 'sam143np@gmail.com', 'patelsam', 'jaymataji@123', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `justinlin`
--

CREATE TABLE `justinlin` (
  `director_id` int(10) NOT NULL,
  `director_movie` varchar(255) NOT NULL,
  `take_actor` varchar(255) NOT NULL,
  `take_actress` varchar(255) NOT NULL,
  `which_type_of_movie` varchar(255) NOT NULL,
  `earned_movie` varchar(255) NOT NULL,
  `Release_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `justinlin`
--

INSERT INTO `justinlin` (`director_id`, `director_movie`, `take_actor`, `take_actress`, `which_type_of_movie`, `earned_movie`, `Release_year`) VALUES
(1, 'Fast & Furious (2009 film)', 'Vin Diesel\r\nPaul Walker\r\nJohn Ortiz\r\nLaz Alonso', 'Michelle Rodriguez\r\nJordana Brewster', 'action,\r\nadventure', '363.2', 2009),
(2, 'Fast Five', 'Tyrese Gibson\r\nChris \"Ludacris\" Bridges\r\nMatt Schulze\r\nSung Kang\r\nDwayne Johnson	\r\nVin Diesel\r\nPaul Walker', 'Jordana Brewster', 'action', '626.1', 2011),
(3, 'Star Trek Beyond', 'John Cho\r\nSimon Pegg\r\nChris Pine\r\nZachary Quinto\r\nKarl Urban\r\nAnton Yelchin\r\nIdris Elba', 'Zoe Saldana', 'action', '343.5', 2016),
(4, 'Finishing the Game', 'Roger Fan, \r\nSung Kang, \r\nMousa Kraish,\r\n Meredith Scott Lynn,\r\nDustin Nguyen', 'Monique Gabriela Curnen,', 'mockumentary ', '88', 2017),
(5, 'The Fast and the Furious: Tokyo Drift', 'Lucas Black\r\nSung Kang\r\nBow Wow\r\nBrian Tee', 'Nathalie Kelley', 'action', '159', 2006);

-- --------------------------------------------------------

--
-- Table structure for table `karanjohar`
--

CREATE TABLE `karanjohar` (
  `director_id` int(11) NOT NULL,
  `director_movie` varchar(255) NOT NULL,
  `take_actor` varchar(255) NOT NULL,
  `take_actress` varchar(255) NOT NULL,
  `which_type_of_movie` varchar(255) NOT NULL,
  `earned_movie` varchar(255) NOT NULL,
  `Release_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karanjohar`
--

INSERT INTO `karanjohar` (`director_id`, `director_movie`, `take_actor`, `take_actress`, `which_type_of_movie`, `earned_movie`, `Release_year`) VALUES
(1, 'Kuch Kuch Hota Hai', 'Shah Rukh Khan,\r\nSalman Khan', 'Kajol,\r\nRani Mukerji,\r\nSana Saeed', 'Romantic,\r\nDrama', '100.07', 1998),
(2, 'Kabhi Khushi Kabhie Gham...', 'Hrithik Roshan,\r\nAmitabh Bachchan,\r\nShah Rukh Khan\r\n', 'Kareena Kapoor,\r\nKajol,\r\nJaya Bachchan', 'Drama', '100.36', 2001),
(3, 'Kabhi Alvida Naa Kehna', '	\r\nAmitabh Bachchan,\r\nShah Rukh Khan,\r\nAbhishek Bachchan', 'Rani Mukerji,\r\nPreity Zinta,\r\nKirron Kher', 'Romantic,\r\nDrama', '115', 2006),
(4, 'My Name Is Khan', 'Shah Rukh Khan', 'Kajol,\r\nSonya Jehan', 'Drama', '200.23', 2010),
(5, 'Lust Stories', 'Sanjay Kapoor,\r\nAkash Thosar,\r\nvicky Kaushal', 'Radhika Apte,\r\nBhumi Pednekar,\r\nKiara Advani,\r\nManisha Koirala', 'anthology film ', '75', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `kartikaryan`
--

CREATE TABLE `kartikaryan` (
  `Movie_id` int(255) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted_with` varchar(255) NOT NULL,
  `Release_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartikaryan`
--

INSERT INTO `kartikaryan` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted_with`, `Release_year`) VALUES
(1, 'Pyaar Ka Punchnama', '175', 'romantic,\r\ncomedy', '175', 'Nushrat Bharucha', 2011),
(2, 'Pati Patni Aur Woh', '117.70', 'Drama,\r\nComedy', '117.70', 'Bhumi Pednekar,\r\nAnanya Panday', 2019),
(3, 'Love Aaj Kal', '50', 'Drama,\r\nRomance ', '50', 'Sara Khan', 2020),
(4, 'Luka chuppi', '128.86', 'Romance/Comedy', '128.86', 'Kriti Sanon', 2019),
(5, 'Sonu Ke Titu Ki Sweety', '156.46', 'romance,\r\ncomedy', '156.46', 'Nushrat Bharucha', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `knowingpublic`
--

CREATE TABLE `knowingpublic` (
  `id` int(15) NOT NULL,
  `user_id` int(15) DEFAULT NULL,
  `question1` varchar(255) DEFAULT NULL,
  `question2` varchar(255) DEFAULT NULL,
  `question3` varchar(255) DEFAULT NULL,
  `question40` varchar(255) DEFAULT NULL,
  `question41` varchar(255) DEFAULT NULL,
  `question42` varchar(255) DEFAULT NULL,
  `question50` varchar(255) DEFAULT NULL,
  `question51` varchar(255) DEFAULT NULL,
  `question52` varchar(255) DEFAULT NULL,
  `question53` varchar(255) DEFAULT NULL,
  `question60` varchar(255) DEFAULT NULL,
  `question61` varchar(255) DEFAULT NULL,
  `question62` varchar(255) DEFAULT NULL,
  `question7` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowingpublic`
--

INSERT INTO `knowingpublic` (`id`, `user_id`, `question1`, `question2`, `question3`, `question40`, `question41`, `question42`, `question50`, `question51`, `question52`, `question53`, `question60`, `question61`, `question62`, `question7`) VALUES
(1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Action,Thriller,Horror,Sci-Fi,Comedy,Mystery,Crime,Adventure,War films', 'Sanjay Leela Bhansali,Yash Chopra', 'Martin Scorsese,David Fincher,Peter Berg', 'Hollywood', 'Bollywood', 'Gujarati', 'Kartik aryan,Ranbir Kapoor,Ranveer Kapoor,Irrfan Khan,Manoj Bajpayee,Nawazuddin Siddiqui,Rajkummar Rao,Ayushmann Khurrana,John Abraham', 'Dwayne \"The Rock\" Johnson,Vin Diesel ,Robert Downey Jr.,Tom Cruise,Chris Hemsworth,Chris Evans,Chris Pratt,Mark Ruffalo', 'Allu Arjun,Prabhas', 'Malhar Thakkar,Mitra Gadhvi', 'Deepika Padukon,Shraddha Kapoor,Kriti Sanon,Alia Bhatt,Kiara Advani', 'Kajal Agarwal,Samantha Ruth Prabhu,Shruti Hassan', 'Aarohi Patel,Prachi Desai', 'Sony Pictures Motion Picture Group,Walt Disney Studios,Universal Pictures,20th Century Fox,DC,Marvel,Eros International Media Ltd,Fox Star Studio India Pvt Ltd,Reliance Big Entertainment Pvt Ltd,Yash Raj Films Pvt Ltd'),
(3, 259587, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 519177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1038357, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2076717, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 4153947, 'Action,Thriller,Biography', 'Rajkumar Hirani,Neeraj Pandey,Sanjay Leela Bhansali', 'James Cameron,Woody Allen', 'Hollywood', 'Bollywood', 'Gujarati', 'Kartik aryan,Ranbir Kapoor,Ranveer Kapoor', 'Vin Diesel ,Tom Cruise,Tom Hanks', 'Allu Arjun,Prabhas', 'Malhar Thakkar,Divyang Thakkar', 'Sonam Kapoor,Sara Ali Khan', 'Kajal Agarwal,Samantha Ruth Prabhu', 'Aarohi Patel,Prachi Desai', NULL),
(8, 4154457, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 4154967, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likedpost`
--

CREATE TABLE `likedpost` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `liked` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likedpost`
--

INSERT INTO `likedpost` (`id`, `movie_id`, `user_id`, `liked`) VALUES
(1, 15, 1, 'yes'),
(2, 14, 1, 'yes'),
(3, 13, 1, 'no'),
(4, 12, 1, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `malharthakar`
--

CREATE TABLE `malharthakar` (
  `movie_id` int(255) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted _with` varchar(255) NOT NULL,
  `Release_year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `malharthakar`
--

INSERT INTO `malharthakar` (`movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted _with`, `Release_year`) VALUES
(1, 'Chhello Divas', '18', 'comedy', '18', 'Kinjal Rajpriya,\r\nJanki Bodiwala,\r\nNetri Trivedi', 2015),
(2, 'Shu Thayu?', '21', 'comedy', '21', 'Mitra Gadhvi', 2018),
(3, 'Love ni bhavai', '8', 'romance,\r\ndrama', '8', 'Aarohi Patel', 2017),
(4, 'Reva', '3', 'adventure,\r\ndrama', '3', 'Monal Gajjar', 2018),
(5, 'Ventilator', '1', 'drama,\r\ncomedy', '1', 'Suchita Trivedi,\r\nTejal Vyas', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_actor_name` varchar(255) NOT NULL,
  `movie_actress_name` varchar(255) NOT NULL,
  `movie_category` varchar(255) NOT NULL,
  `movie_release_date` date NOT NULL,
  `movie_production_name` varchar(255) NOT NULL,
  `movie_directed_by` varchar(255) NOT NULL,
  `movie_budget` varchar(255) NOT NULL,
  `movie_box_office_collection` varchar(255) NOT NULL,
  `movie_img_dir` varchar(255) DEFAULT NULL,
  `about_movie` varchar(2400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_actor_name`, `movie_actress_name`, `movie_category`, `movie_release_date`, `movie_production_name`, `movie_directed_by`, `movie_budget`, `movie_box_office_collection`, `movie_img_dir`, `about_movie`) VALUES
(1, 'Avenger:Infinity war\r\n', 'Robert Downey Jr.,\r\nChris Hemsworth,\r\nMark Ruffalo,\r\nChris Evans', 'Scarlett Johansson,\r\nElizabeth Olsen,\r\nDanai Gurira,\r\nZoe Saldana\r\n', 'Fantasy,Sci-fi \r\n', '2018-04-27', 'MARVEL STUDIOS\r\n', 'Russo Brothers\r\n', '31.6 crores USD\r\n', '204.84 crores USD\r\n', 'images/avengersendgame.jpg', 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the direct sequel to Avengers: Infinity War (2018) and the 22nd film in the Marvel Cinematic Universe (MCU). It was directed by Anthony and Joe Russo and written by Christopher Markus and Stephen McFeely, and features an ensemble cast including Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Brie Larson, Karen Gillan, Danai Gurira, Benedict Wong, Jon Favreau, Bradley Cooper, Gwyneth Paltrow, and Josh Brolin. In the film, the surviving members of the Avengers and their allies attempt to reverse the damage caused by Thanos in Infinity War.'),
(2, 'Fast 7\r\n', 'Paul Walker,\r\nVin Diesel,\r\nTyrese Gibson,\r\nJason Statham,\r\nChris \"Ludacris\" Bridges\r\n', 'Michelle Rodriguez,\r\nJordana Brewster\r\n\r\n', 'Mystery/Crime\r\n', '2015-04-02', 'Original Film,\r\nOne Race Films,\r\nMRC,\r\nChina Film', 'James Wan\r\n', '19 crores USD\r\n', ' 151.6 crores USD\r\n', 'images/ff9poster.jpg', 'urious 7 (titled onscreen as Fast & Furious 7) is a 2015 American action film directed by James Wan and written by Chris Morgan. A sequel to 2013\'s Fast & Furious 6, it is the seventh installment in the Fast & Furious franchise and stars Vin Diesel, Paul Walker, Dwayne Johnson, Michelle Rodriguez, Tyrese Gibson, Chris \"Ludacris\" Bridges, Jordana Brewster, Djimon Hounsou, Kurt Russell and Jason Statham. Furious 7 follows Dominic Toretto (Diesel), Brian O\'Conner (Walker), and the rest of their team, who have returned to the United States to live normal lives after securing amnesty for their past crimes in Fast & Furious 6, until Deckard Shaw (Statham), a rogue special forces assassin seeking to avenge his comatose younger brother Owen Shaw, puts the team in danger once again.'),
(3, 'pyar ka punchnama 2\r\n', 'Kartik Aaryan\r\nOmkar Kapoor,\r\nSunny Singh,\r\n', 'Nushrat Bharucha,\r\nSonnalli Seygall,\r\nIshita Raj Sharma\r\n\r\n', 'Drama/Romance\r\n', '2015-10-16', 'Panorama Studios,\r\nViacom 18 Motion Pictures\r\n\r\n', 'Luv Ranjan\r\n', '₹22 crore (US$3.1 million)\r\n', '₹88 crore (US$12 million)\r\n', 'images/m4.jpg', 'Pyaar Ka Punchnama 2 (transl. Case file of love 2) is a 2015 Indian Hindi-language romantic comedy film, it is a sequel to the 2011 film Pyaar Ka Punchnama.[1] The sequel is directed by Luv Ranjan and produced by Viacom 18 Motion Pictures and Panorama Studios Production.[2] The film stars Kartik Aaryan, Omkar Kapoor, Sunny Singh, Nushrat Bharucha, Ishita Raj Sharma and Sonnalli Seygall. The film was released on 16 October 2015.[3]'),
(4, 'Kabir singh\r\n', 'Shahid Kapoor\r\n', 'Kiara Advani\r\n', 'Drama/Action \r\n', '2019-06-21', 'Cine1 Studios,\r\nT-Series\r\n', 'Sandeep Reddy Vanga\r\n', '₹60 crore\r\n', 'est. ₹379 crore\r\n', 'images/kabirsinghposter.jpg', 'Kabir Singh is a 2019 Indian Hindi-language romantic drama film written and directed by Sandeep Vanga. It is a remake of his own Telugu film Arjun Reddy (2017). Jointly produced by Cine1 Studios and T-Series, the film stars Shahid Kapoor and Kiara Advani. Kapoor plays Kabir Singh, a surgeon who spirals into self-destruction when his girlfriend, Preeti leaves him desperately.\r\n\r\nPrincipal photography began in October 2018 and ended in March 2019. The film was theatrically released in India on 21 June 2019 and received mixed reviews, with criticism directed at it for glamorising misogyny and toxic masculinity, though Kapoor\'s performance was praised. It grossed over ₹379 crore, becoming the second highest grossing Bollywood film of 2019.[4]'),
(5, 'bhoot part 1\r\n', 'Vicky Kaushal,\r\nAshutosh Rana\r\n', 'Bhumi Pednekar\r\n', 'Mystery/Thriller\r\n', '2020-02-21', 'Dharma Productions,\r\nZee Studios\r\n', 'Bhanu Pratap Singh\r\n', '₹50.00 crore\r\n\r\n', 'est. ₹38.88 crore\r\n', 'uploadtrailer/bh2.jpg', 'Bhoot – Part One: The Haunted Ship is a 2020 Indian Hindi-language horror thriller film written and directed by Bhanu Pratap Singh and jointly produced by Karan Johar, Hiroo Yash Johar, Apoorva Mehta and Shashank Khaitan. It is based on a true accident that took place in Mumbai,[4] and tells the story of a couple on an abandoned ship lying static on a beach. The film features Vicky Kaushal, Bhumi Pednekar and Ashutosh Rana in lead roles,[5][6] and is the first film of a planned horror film franchise.\r\n\r\nPrincipal photography began in December 2018 and was wrapped up in September 2019.[7] It was theatrically released in India on February 21, 2020.[8] It will start streaming on it\'s streaming partner, Amazon Prime Video from 22nd April.'),
(6, 'Bharat\r\n', 'Salman Khan,\r\nSunil Grover,\r\nJackie Shroff\r\n', 'Katrina Kaif,\r\nDisha Pathani\r\n\r\n', 'drama film\r\n\r\n', '2019-06-05', 'Reel Life Productions,\r\nSalman Khan Films,\r\nT-Series\r\n', 'Ali Abbas Zafar\r\n\r\n', '₹100 crore\r\n', '₹325.58 crore\r\n', 'images/bharatposter.jpg', 'Bharat (transl. India)[a] is a 2019 Indian Hindi-language drama film written and directed by Ali Abbas Zafar. It is jointly produced by Atul Agnihotri, Alvira Khan Agnihotri, Bhushan Kumar, Krishan Kumar, Nikhil Namit and Salman Khan under the banners Reel Life Productions, Salman Khan Films and T-Series. The film stars Salman Khan, Katrina Kaif, Sunil Grover, Disha Patani and Jackie Shroff. Tabu makes a friendly appearance. It traces India\'s post-independence history from the perspective of a common man, and follows his life from the age of 8 to 70.\r\n\r\nBased on the 2014 South Korean film Ode to My Father, principal photography for Bharat began in April 2018. Shooting took place at such locations as Abu Dhabi, Spain, Malta, Punjab and Delhi. Kaif joined the cast soon after Priyanka Chopra opted out of the role after filming commenced, for her impending engagement to Nick Jonas. Filming concluded in March 2019. The film\'s score was composed by Julius Packiam and the songs were composed '),
(7, 'Chennai express\r\n', 'Shah Rukh Khan\r\n', 'Deepika Padukone\r\n\r\n', 'Action,Comedy\r\n\r\n', '2013-08-09', 'Red Chillies Entertainment\r\n\r\n', 'Rohit Shetty\r\n', '₹115 crore\r\n', '₹423 crore\r\n', 'images/Chennaiexpress.jpg', 'Chennai Express (/tʃɪˈnaɪ/ (About this soundlisten)) is a 2013 Indian Hindi-language action comedy film[3] directed by Rohit Shetty from a story by K. Subash, with the screenplay written by Yunus Sajawal and the dialogues by Sajid-Farhad. Produced by Gauri Khan, Karim Morani, Ronnie Screwvala and Siddharth Roy Kapur, the film stars Shah Rukh Khan as Rahul Mithaiwala, a man who accidentally boards the eponymous train and journeys from Mumbai to Rameswaram, falling in love with the daughter of a local don, played by Deepika Padukone. Chennai Express had Nikitin Dheer and Sathyaraj play supporting roles. It was released with subtitles in English, French, Spanish, Arabic, German, Hebrew, Dutch, Turkish and Malay.[8]\r\n\r\nThe first planned collaboration between Khan and Shetty was a remake of Angoor (1982). The script of Chennai Express, which was initially written as a backup project for Khan, was chosen instead. Conceived as a \"commercial\" romance, the film was originally titled Ready Steady Po. Filming began in Mehboob Studio in October 2012 and was completed by May 2013. A large part of the film was set in Ooty, for which sets were constructed in Wai. The soundtrack for Chennai Express was composed by Vishal–Shekhar, with the background score being composed by Amar Mohile. UTV Motion Pictures acquired the distribution rights of the film.'),
(8, 'Conjuring\r\n', 'Patrick Wilson,\r\nRon Livingston\r\n', 'Lili Taylor,\r\nVera Farmiga\r\n', 'horror film\r\n', '2013-07-19', 'New Line Cinema,\r\nThe Safran Company,\r\nEvergreen Media Group\r\n', 'James Wan\r\n', '$20 million\r\n', '$319.5 million\r\n', 'uploadtrailer/m12.jpg', 'The Conjuring: The Devil Made Me Do It (also known as The Conjuring 3) is an upcoming American supernatural horror film, directed by Michael Chaves, with a screenplay by David Leslie Johnson-McGoldrick, from a story by Johnson-McGoldrick and James Wan.[2] The film will serve as a sequel to 2013\'s The Conjuring and 2016\'s The Conjuring 2, and as the eighth installment overall in the Conjuring Universe franchise. Patrick Wilson and Vera Farmiga will be reprising their roles as paranormal investigators and authors Ed and Lorraine Warren, with Sterling Jerins, Julian Hilliard, Sarah Catherine Hook, Charlene Amoia and Ruairi O\'Connor also starring. Wan and Peter Safran are returning to co-produce the project. The film is based on the trial of Arne Cheyenne Johnson, a murder trial that took place in 1981 in Connecticut.\r\n\r\nInitial development for a third Conjuring film began in 2016, though Wan stated that he would not be directing another film in the series due to scheduling conflicts with other projects. Safran confirmed that the next film would not be a haunted house movie. By June 2017, it was officially announced that a third installment was in development, with David Leslie Johnson hired to write the screenplay. Michael Chaves was announced as the film\'s director, after previously directing The Curse of La Llorona.'),
(9, '6 Undergrounds', 'Corey Hawkins,\r\nRyan Reynolds,\r\nManuel Garcia-Rulfo,\r\nPayman Maadi,\r\nBen Hardy,\r\nDave Franco\r\n\r\n', 'Mélanie Laurent,\r\nAdria Arjona\r\n\r\n', 'action,\r\nthriller\r\n\r\n', '2019-12-13', 'Skydance Media,\r\nBay Films\r\n', 'Michael Bay\r\n\r\n', '$150 million\r\n', '$275 million\r\n', 'images/6undergroundposter.jpg', '6 Underground is a 2019 American action thriller film directed by Michael Bay and written by Paul Wernick and Rhett Reese. The film stars Ryan Reynolds, Mélanie Laurent, Manuel Garcia-Rulfo, Adria Arjona, Corey Hawkins, Ben Hardy and Dave Franco.[2] Bay produced the film with his longtime business partner Ian Bryce and Skydance\'s David Ellison, Dana Goldberg and Don Granger.\r\n\r\n6 Underground premiered at The Shed in New York City on December 10, 2019, and was released by Netflix on December 13, 2019.'),
(10, 'love ni bhavai\r\n', 'Malhar Thakar,\r\nPratik Gandhi\r\n', 'Aarohi Patel\r\n\r\n', 'Romance\r\n', '2017-11-17', 'gold mines films', 'Sandeep Patel\r\n', '2 crores INR', '8 crores INR \r\n', 'images/Lovenibhavaiposter.jpg', 'Love Ni Bhavai is a 2017 Gujarati romantic drama film directed by Sandeep Patel[2] and produced by Aarti Patel. Its plot is heavily based on the 2008 Hollywood Film The Accidental Husband. The background score and soundtrack was composed by Sachin-Jigar, with lyrics from Niren Bhatt.\r\nRJ Antara, who works in a FM Radio, is loved by the entire Ahmedabad due to her energetic voice and solid attitude. She was against love and relationships initially and told her boss K (Krishna) that she would never fall in love that are meaningless and selfish. She was awarded the youngest RJ achiever award due to her contribution to the Radio. Aditya, a rich business man, was once stuck in a heavy traffic. He observed Antara helping clearing the traffic and fell in love with her. In the award ceremony, Antara met Aaditya. He tries to maintain relation with her. He considered her as his best friend and told her that he wants to see her happy, whether as a friend or anything else. Their regular talks became a headline news, and her boss K (Krishna) regularly teases her. Once Antara got a call from Swati, who asked her what to answer because her boyfriend Sagar was going to propose her on Valentines Day. '),
(11, 'Pirates of carribean 1-5\r\n', 'Bill Nighy,\r\nJohnny Depp,\r\nGeoffrey Rush (1–5),\r\nOrlando Bloom\r\n', 'Keira Knightley\r\n', 'Fantasy film\r\n', '2017-05-26', 'Walt Disney Pictures,\r\nJerry Bruckheimer Films\r\n\r\n', 'Gore Verbinski (1–3),\r\nGore Verbinski (1–3),\r\nGore Verbinski (1–3),\r\nEspen Sandberg (5),\r\nJoachim Rønning (5)\r\n', '$1.274 billion\r\n', '$4.524 billion\r\n', 'images/piratesposter.jpg', 'Pirates of the Caribbean is a series of fantasy swashbuckler films produced by Jerry Bruckheimer and loosely based on Walt Disney\'s eponymous theme park attraction.\r\n\r\nDirectors of the series include Gore Verbinski (films 1–3), Rob Marshall (4), Joachim Rønning, and Espen Sandberg (5). The series is primarily written by Ted Elliott and Terry Rossio (1–4); other writers include Stuart Beattie (1), Jay Wolpert (1), Jeff Nathanson (5), Craig Mazin (6). The stories follow the adventures of Captain Jack Sparrow (Johnny Depp), Will Turner (Orlando Bloom) and Elizabeth Swann (Keira Knightley). Characters such as Hector Barbossa (Geoffrey Rush) and Joshamee Gibbs (Kevin McNally) follow Jack, Will and Elizabeth in the course of the films. The fourth film features Blackbeard (Ian McShane) and Angelica (Penélope Cruz), while the fifth film features Armando Salazar (Javier Bardem), Henry Turner (Brenton Thwaites) and Carina Smyth (Kaya Scodelario). The films take place in a fictionalized historical setting; a world ruled by the British Empire, the East India Trading Company (based on the real East India Trading Company) and the Spanish Empire, with pirates representing freedom from the ruling powers.\r\n\r\nThe film series started in 2003 with Pirates of the Caribbean: The Curse of the Black Pearl, which received positive reviews from critics and grossed US$654 million worldwide.[1] After the first film\'s success, Walt Disney Pictures revealed that a film series was in the works. The franchise\'s second film, subtitled Dead Man\'s Chest, was released three years later in 2006; the sequel proved successful, breaking financial records worldwide the day of its premiere. Dead Man\'s Chest ended up being the number one film of the year upon earning almost $1.1 billion at the worldwide box office. The third film in the series, subtitled At World\'s End, followed in 2007 earning $960 million, and Disney released a fourth film, subtitled On Stranger Tides, in 2011 in conventional 2D, Digital 3-D and IMAX 3D. On Stranger Tides succeeded in also grossing more than $1 billion,[1] becoming the second film in the franchise and only the eighth film in history to achieve this.\r\n\r\nThe franchise has grossed over $4.5 billion worldwide;[1] it is the 14th-highest-grossing film series of all time, and it was the first franchise where more than one film grossed $1 billion worldwide.'),
(12, 'Joker (2019)\r\n', 'Joaquin Phoenix\r\n', 'Zazie Beetz\r\n', 'Drama,Thriller\r\n', '2019-10-02', 'Warner Bros. Pictures,\r\nDC Films,\r\nJoint Effort,\r\nBron Creative,\r\nVillage Roadshow Pictures', 'Todd Phillips\r\n', '$55–70 million\r\n', '$55–70 million\r\n', 'images/joker.jpg', 'Joaquin Phoenix expressed interest in acting in a low-budget \"character study\" type of film about a comic book villain, like the DC Comics character Joker.Phoenix had previously declined to act in the Marvel Cinematic Universe because he would have been required to play the roles, such as the Hulk and Doctor Strange, in multiple films.He did not believe his idea for a film should cover the Joker, as he thought the character had been depicted in a similar way before, and tried to think of a different one. Phoenix\'s agent suggested setting up a meeting with Warner Bros., but he declined.Similarly, Todd Phillips had been offered to direct comic-based films a number of times, but declined because he thought they were \"loud\" and did not interest him. According to Phillips, Joker was created from his idea to create a different, more grounded comic book film.He was attracted to the Joker because he did not think there was a definitive portrayal of the character, which he knew would provide considerable creative freedom.'),
(13, 'Rocket man\r\n', 'Taron Egerton,\r\nJamie Bell,\r\nRichard Madden\r\n', 'Bryce Dallas Howard\r\n', 'Fantasy,Drama\r\n', '2019-05-22', 'New Republic Pictures,\r\nMarv Films,\r\nRocket Pictures\r\n', 'Dexter Fletcher\r\n', '$40 million\r\n\r\n', '19.52 crores USD\r\n\r\n', 'images/Rocketmanposter.jpg', 'Rocketman is a 2019 biographical musical film based on the life of British musician Elton John. Directed by Dexter Fletcher and written by Lee Hall, it stars Taron Egerton as Elton John, with Jamie Bell as Bernie Taupin, Richard Madden as John Reid, and Bryce Dallas Howard as Sheila Eileen. The film follows John in his early days in England as a prodigy at the Royal Academy of Music through his musical partnership with Taupin. The film is titled after John\'s 1972 song \"Rocket Man\".\r\n\r\nThe film had been in development since the 2000s before it was initially announced in 2013 where Focus Features acquired the rights to the film and director Michael Gracey and actor Tom Hardy were set to direct and star in the project respectively. After Hardy and Gracey left the project following creative differences between Focus and John that halted an initial production start in fall 2014, the project languished for several years until Paramount Pictures and New Republic Pictures took over as distributor in April 2018, where Egerton and Fletcher signed on. Principal photography began in August 2018 and was completed later that year. John served as executive producer, while husband David Furnish produced the film through their Rocket Pictures, alongside Matthew Vaughn\'s Marv Films'),
(14, 'John wick 3\r\n', 'Keanu Reeves,\r\nLaurence Fishburne,\r\nAsia Kate Dillon,\r\nLance Reddick,\r\nIan McShane\r\n', 'Halle Berry,\r\nAnjelica Huston\r\n\r\n', 'Thriller,Crime\r\n\r\n', '2019-05-09', 'Summit Entertainment,\r\nThunder Road Pictures,\r\n87Eleven Productions\r\n', ' Chad Stahelski', '32.67 crores USD\r\n\r\n', '7.5 crores USD\r\n\r\n', 'images/johnwick.jpg', 'John Wick (retroactively known as John Wick: Chapter 1) is a 2014 American neo-noir action film directed by Chad Stahelski, in his directorial debut, and written by Derek Kolstad. It stars Keanu Reeves, Michael Nyqvist, Alfie Allen, Adrianne Palicki, Bridget Moynahan, Dean Winters, Ian McShane, John Leguizamo, and Willem Dafoe. It is the first installment in the John Wick film series.\r\n\r\nThe story focuses on John Wick (Reeves) searching for the men who broke into his home, stole his vintage car and killed his puppy, which was a last gift to him from his recently deceased wife (Moynahan).[6] Stahelski and David Leitch directed the film together, though only Stahelski was credited.[1]\r\n\r\nKolstad had completed the screenplay in 2012 and further developed it for Thunder Road Pictures.[7] The film was produced by Basil Iwanyk of Thunder Road Pictures, Leitch, Eva Longoria, and Michael Witherill. It marks Stahelski and Leitch\'s directorial debut as a team after multiple separate credits as second-unit directors and stunt coordinators. They previously worked with Reeves as stunt doubles on The Matrix trilogy.[8]\r\n\r\nStahelski and Leitch\'s approach to action scenes drew upon their admiration for anime[9] and martial arts films.[10] The film used fight choreographers[11] and gun fu techniques[12] from Hong Kong action cinema.[13] The film also pays homage to works such as John Woo\'s The Killer, Jean-Pierre Melville\'s Le Cercle Rouge and Le Samouraï,[14] John Boorman\'s Point Blank, and the spaghetti western films.[15]\r\n\r\nThe film was met with positive reviews, with critics calling it one of Reeves\' best performances and one of the best action films of 2014. It grossed $86 million worldwide against a production budget of $20 million. Two sequels, John Wick: Chapter 2, and John Wick: Chapter 3 – Parabellum, were released in February 2017 and May 2019 respectively, both to comparable critical and commercial success, with another sequel, John Wick: Chapter 4, set for a May 2021 release. It is also the only film in the series to be distributed by Summit Entertainment, as the other films are distributed by Lionsgate Films.'),
(15, 'Geeta Govindam\r\n', 'Vijay Deverakonda\r\n', 'Rashmika Mandanna\r\n', 'Romance\r\n', '2018-08-15', 'GA2 Pictures\r\n', 'Parasuram\r\n', '₹15 crore\r\n', 'est. ₹123 crores\r\n', 'images/geetagovindaposter.jpg', 'Geetha Govindam is a 2018 Indian Telugu-language romantic comedy film written and directed by Parasuram, produced by Bunny Vasu under the banner of GA2 Pictures. The film stars Vijay Devarakonda and Rashmika Mandanna, while Subbaraju, Nithya Menon, Rahul Ramakrishna, and Nagendra Babu play supporting roles. It was released on 15 August 2018 in India and on 14 August 2018 in the US. The film released to positive reviews and was a commercial success.');

-- --------------------------------------------------------

--
-- Table structure for table `personalnew`
--

CREATE TABLE `personalnew` (
  `Q_ID` int(20) NOT NULL,
  `Q_name` varchar(255) NOT NULL,
  `Sub_Q_` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personalnew`
--

INSERT INTO `personalnew` (`Q_ID`, `Q_name`, `Sub_Q_`) VALUES
(1, 'Which type of movie you prefer the most ?\r\n', ''),
(2, ' Which Bollywood Director you trust the most ?\r\n', ''),
(3, ' Which Hollywood Director you trust the most ?\r\n', ''),
(4, 'Which movie you prefer first?\r\n', '4.1) Which movie you prefer second?\r\nBollywood \r\n\r\n4.2) Which movie you prefer third?\r\n'),
(5, 'Which Bollywood actor you fond of ?\r\n', '5.1) Which Hollywood actor you fond of ?\r\n\r\n5.2) Which Tollywood actor you fond of ?\r\n\r\n5.3) Which Gujarati actor you fond of ?\r\n\r\n'),
(6, 'Which Bollywood actress you fond of ?\r\n', '6.1) Which Tollywood actress you fond of ?\r\n\r\n6.2) Which Gujarai actress you fond of ?\r\n\r\n'),
(7, 'Whose Production you like the most ?\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE `profilepic` (
  `id` int(15) NOT NULL,
  `user_id` int(15) DEFAULT NULL,
  `img_name` varchar(255) DEFAULT 'pp1.png',
  `img_dir` varchar(255) DEFAULT 'uploadimages/pp1.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilepic`
--

INSERT INTO `profilepic` (`id`, `user_id`, `img_name`, `img_dir`) VALUES
(1, 2, 'pp1.png', 'uploadimages/pp1.png'),
(2, 1, 'IMG_20200215_133017_2.jpg', 'uploadimages/IMG_20200215_133017_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rajkumarhirani`
--

CREATE TABLE `rajkumarhirani` (
  `director_movie` varchar(255) NOT NULL,
  `director_takes_actor and actress` varchar(255) NOT NULL,
  `earned_movie` varchar(255) NOT NULL,
  `which type of movie` varchar(255) NOT NULL,
  `Release_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rajkumarhirani`
--

INSERT INTO `rajkumarhirani` (`director_movie`, `director_takes_actor and actress`, `earned_movie`, `which type of movie`, `Release_year`) VALUES
('3 Idiots', 'Aamir Khan,\r\nMadhavan,\r\nSharman Joshi,\r\nKareena Kapoor,\r\nBoman Irani,\r\nOmi Vaidya', '460', 'comedy,\r\ndrama', 2009),
('Munna Bhai M.B.B.S.', 'Sanjay Dutt,\r\nGracy Singh,\r\nArshad Warsi,\r\nSunil Dutt,\r\nJimmy Sheirgill,\r\nBoman Irani', '138.85', 'comedy,\r\ndrama', 2009),
('PK ', 'Aamir Khan,\r\nAnushka Sharma,\r\nSushant Singh Rajput,\r\nBoman Irani,\r\nSaurabh Shukla,\r\nSanjay Dutt', '854', ' comedy-drama', 2014),
('sala khadoos', 'Madhavan\r\nRitika Singh', '171', 'sports,\r\ndrama', 2016),
('Sanju', 'Ranbir Kapoor,\r\nParesh Rawal,\r\nVicky Kaushal,\r\nManisha Koirala,\r\nDia Mirza,\r\nSonam Kapoor,\r\nAnushka Sharma,\r\nJim Sarbh', '586.65', ' biographical film ', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `rajkumar hirani 1`
--

CREATE TABLE `rajkumar hirani 1` (
  `director_id` int(10) NOT NULL,
  `director_movie` varchar(255) NOT NULL,
  `take_actor` varchar(255) NOT NULL,
  `take_actress` varchar(255) NOT NULL,
  `which_type_of_movie` varchar(255) NOT NULL,
  `earned_movie` varchar(255) NOT NULL,
  `Release year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rajkumar hirani 1`
--

INSERT INTO `rajkumar hirani 1` (`director_id`, `director_movie`, `take_actor`, `take_actress`, `which_type_of_movie`, `earned_movie`, `Release year`) VALUES
(1, 'Sanju', 'Ranbir Kapoor,\r\nvicky Kaushal,\r\nParesh Rawal,\r\nJim Sarbh', 'Dia Mirza,\r\nSonam Kapoor,\r\nAnushka Sharma', 'biographical film ', '586.85', 2018),
(2, 'Munna Bhai M.B.B.S.', 'Sanjay Dutt,\r\nArshad Warsi,\r\nSunil Dutt,\r\nJimmy Sheirgill,\r\nBoman Irani\r\n', 'Gracy Singh', 'comedy,\r\ndrama', '138.65', 2003),
(3, 'Lage Raho Munna Bhai', 'Sanjay Dutt\r\nArshad Warsi\r\nVidya Balan\r\nBoman Irani\r\nDilip Prabhavalkar\r\nJimmy Sheirgill\r\nKulbhushan Kharbanda\r\nSaurabh Shukla', 'Vidya Balan', 'comedy,\r\ndrama', '127.55', 2006),
(4, '3 Idiots', 'Aamir Khan\r\nMadhavan\r\nSharman Joshi\r\nboman Irani', 'Kareena Kapoor', 'comedy,\r\ndrama', '460', 2009),
(5, 'PK', 'Aamir khan,\r\nSushant Singh Rajput\r\nBoman Irani\r\nSaurabh Shukla\r\nSanjay Dutt', 'Anushka Sharma', 'Comedy,\r\ndrama', '854', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `releaseposter`
--

CREATE TABLE `releaseposter` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movie_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `releasetrailer`
--

CREATE TABLE `releasetrailer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movie_name` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_dir` varchar(255) DEFAULT NULL,
  `video_name` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `releasetrailer`
--

INSERT INTO `releasetrailer` (`id`, `user_id`, `movie_name`, `image_name`, `image_dir`, `video_name`, `video_url`) VALUES
(1, NULL, 'The Conjuring', 'm12.jpg', 'uploadtrailer/m12.jpg', 'v1.mp4', 'uploadtrailer/v1.mp4'),
(2, NULL, 'Avengers: The End Game', 'aiw.jpg', 'uploadtrailer/aiw.jpg', 'v2.mp4', 'uploadtrailer/v2.mp4'),
(3, NULL, 'Love Ni Bhavay', 'bh4.jpg', 'uploadtrailer/bh4.jpg', 'v6.mp4', 'uploadtrailer/v6.mp4'),
(4, NULL, 'Fast & Furious 9', 'ff91.jpg', 'uploadtrailer/ff91.jpg', 'v3.mp4', 'uploadtrailer/v3.mp4'),
(5, NULL, 'The Forgotten Army', 'm6.jpg', 'uploadtrailer/m6.jpg', 'v4.mp4', 'uploadtrailer/v4.mp4'),
(6, NULL, 'Bhoot', 'bh2.jpg', 'uploadtrailer/bh2.jpg', 'v5.mp4', 'uploadtrailer/v5.mp4'),
(7, NULL, 'Arjun Reddy', 'ar2.jpg', 'uploadtrailer/ar2.jpg', 'v7.mp4', 'uploadtrailer/v7.mp4'),
(8, 0, NULL, 'whitehousedown.jpg', 'uploadtrailer/whitehousedown.jpg', 'SaMple-White House Down (2013) 720p Blu-Ray x264 [Dual-Audio] [English 5.1 + Hindi] - Mafiaking.mkv', 'uploadtrailer/SaMple-White House Down (2013) 720p Blu-Ray x264 [Dual-Audio] [English 5.1 + Hindi] - Mafiaking.mkv');

-- --------------------------------------------------------

--
-- Table structure for table `rohitshetty`
--

CREATE TABLE `rohitshetty` (
  `director_id` int(10) NOT NULL,
  `director_movie` varchar(255) NOT NULL,
  `take_actor` varchar(255) NOT NULL,
  `take_actress` varchar(255) NOT NULL,
  `which_type_of_movie` varchar(255) NOT NULL,
  `earned_movie` varchar(255) NOT NULL,
  `Release_year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rohitshetty`
--

INSERT INTO `rohitshetty` (`director_id`, `director_movie`, `take_actor`, `take_actress`, `which_type_of_movie`, `earned_movie`, `Release_year`) VALUES
(1, 'Simmba', 'Ranveer Singh\r\nSonu Sood', 'Sara ali khan', 'action', '400.19', 2018),
(2, 'Golmaal Again', 'Arshad Warsi\r\nTusshar Kapoor\r\nShreyas Talpade\r\nKunal Khemu\r\nJohny Lever\r\nSanjay Mishra\r\nPrakash Raj\r\nNeil Nitin Mukesh	\r\nAjay Devgn', 'Parineeti Chopra,\r\ntabu', 'action,\r\ncomedy', '300.11', 2017),
(3, 'Dilwale', 'Varun Dhawan,	\r\nShah Rukh Khan', 'Kajol,\r\nKriti Sanon', 'romantic,\r\nComedy', '408', 2015),
(4, 'Singham Returns', 'Ajay Devgn', 'kareena kapoor khan', 'action', '216.65', 2014),
(5, 'All the Best: Fun Begins', 'Ajay Devgn\r\nSanjay Dutt\r\nFardeen Khan', 'Bipasha Basu\r\nMugdha Godse', 'comedy', '61', 2009);

-- --------------------------------------------------------

--
-- Table structure for table `salmankhan`
--

CREATE TABLE `salmankhan` (
  `Movie_id` int(15) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted _with` varchar(255) NOT NULL,
  `Release_year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salmankhan`
--

INSERT INTO `salmankhan` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted _with`, `Release_year`) VALUES
(1, 'Sultan', '416', 'Action', '416', 'Anushka Sharma', 2016),
(2, 'Bajrangi Bhaijaan', '619', 'Drama', '619', 'Kareena kapoor Khan', 2015),
(3, 'Ready', '180', 'Comedy,\r\nAction', '180', 'Asin', 2011),
(4, 'KICK', '402', 'Action', '402', 'Jacqueline Fernandez\r\nRandeep Hooda\r\nNawazuddin Siddiqui', 2014),
(5, 'Bodyguard', '250', 'Action', '250', 'Kareena Kapoor Khan', 2011);

-- --------------------------------------------------------

--
-- Table structure for table `sanjayleelabhansaali`
--

CREATE TABLE `sanjayleelabhansaali` (
  `director_id` int(10) NOT NULL,
  `director_movie` varchar(255) NOT NULL,
  `take_actor` varchar(255) NOT NULL,
  `take_actress` varchar(255) NOT NULL,
  `which_type_of_movie` varchar(255) NOT NULL,
  `earned_movie` varchar(255) NOT NULL,
  `Release_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanjayleelabhansaali`
--

INSERT INTO `sanjayleelabhansaali` (`director_id`, `director_movie`, `take_actor`, `take_actress`, `which_type_of_movie`, `earned_movie`, `Release_year`) VALUES
(1, 'Padmaavat', 'Shahid Kapoor\r\nRanveer Singh', 'Deepika Padukone', 'Drama', '585', 2018),
(2, 'Bajirao Mastani', 'Ranveer Singh', 'Deepika Padukone\r\nPriyanka Chopra', 'historical romance ', '356', 2015),
(3, 'Goliyon Ki Raasleela Ram-Leela', 'Ranveer Singh', 'Deepika Padukone', 'romance', '220', 2013),
(4, 'Devdas', 'Shah Rukh Khan', 'Aishwarya Rai\r\nMadhuri Dixit Nene', 'Romantic,\r\nDrama', '100.02', 2002),
(5, 'Guzaarish (film)', 'Hrithik Roshan', 'Aishwarya Rai', 'Romantic,\r\ndrama', '64.9', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `scarlettjohansson`
--

CREATE TABLE `scarlettjohansson` (
  `Movie_id` int(10) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted _with` varchar(255) NOT NULL,
  `Release_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scarlettjohansson`
--

INSERT INTO `scarlettjohansson` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted _with`, `Release_year`) VALUES
(1, 'The Avengers (2012 film)', '1.519', 'superhero film ', '1.519', 'Robert Downey Jr.,\r\nChris Evans,\r\nMark Ruffalo,\r\nChris Hemsworth,\r\nScarlett Johansson,\r\nJeremy Renner,\r\nTom Hiddleston,\r\nClark Gregg,\r\nCobie Smulders,\r\nStellan Skarsgård,\r\nSamuel L. Jackson', 2012),
(2, 'Lucy', '463.4', 'science,\r\nfiction,\r\naction', '463.4', 'Morgan Freeman,\r\nChoi Min-sik,\r\nAmr Waked', 2014),
(3, 'Iron Man 2', '623.9', 'superhero film', '623.9', 'Robert Downey Jr.,\r\nGwyneth Paltrow,\r\nDon Cheadle,\r\nSam Rockwell,\r\nMickey Rourke,\r\nSamuel L. Jackson', 2010),
(4, 'Ghost in the Shell (2017 film)', '169.8', 'science fiction,\r\naction', '169.8', 'Michael Carmen Pitt,\r\nPilou Asbæk,\r\nChin Han,\r\nJuliette Binoche', 2017),
(5, 'Marriage Story', '2.3', 'Drama', '2.3', 'Adam Driver,\r\nLaura Dern,\r\nAlan Alda,\r\nRay Liotta,\r\nJulie Hagerty,\r\nMerritt Wever', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `shraddhakapoor`
--

CREATE TABLE `shraddhakapoor` (
  `Movie_id` int(10) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted _with` varchar(255) NOT NULL,
  `Release_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shraddhakapoor`
--

INSERT INTO `shraddhakapoor` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted _with`, `Release_year`) VALUES
(1, 'Saaho', '433.06', 'action,\r\nthriller', '433.06', 'Prabhas', 2019),
(2, 'Street Dancer 3D', '95.86', 'dance', '95.86', 'Prabhu Deva,\r\nNora Fatehi,\r\nVarun Dhawan', 2020),
(3, 'baaghi', '126.96', 'action', '126.96', 'Sunil Grover,\r\nSudheer Babu,\r\nTiger Shroff', 2016),
(4, 'Aashiqui 2', '146', 'romantic,\r\nmusical,\r\ndrama', '146', 'Aditya Roy Kapoor', 2013),
(5, 'Ek Villain', '169.62', ' thriller film ', '169.62', 'aditya roy kapoor', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `socialmediaactor`
--

CREATE TABLE `socialmediaactor` (
  `ID` int(10) NOT NULL,
  `actor_name` varchar(255) NOT NULL,
  `facebook_followers` varchar(255) NOT NULL,
  `instagram_followers` varchar(255) NOT NULL,
  `Twitter_followers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmediaactor`
--

INSERT INTO `socialmediaactor` (`ID`, `actor_name`, `facebook_followers`, `instagram_followers`, `Twitter_followers`) VALUES
(1, 'Salman Khan', '37,516,556 crores', '30.3 million', '12 million'),
(2, 'Vin diesel', '100 million', '61.9 million', '302.8 K '),
(3, 'Kartik Aryan', '1,674,161 Lakhs', '14.9 million', '473.5 k'),
(4, 'Malhar thakkar', '169,136 lakh', '993.3 k', '23.4 K'),
(5, 'Ayushmann Khurrana', '4,382,245 lakh', '10 million', '5.1 million');

-- --------------------------------------------------------

--
-- Table structure for table `socialmediaactress`
--

CREATE TABLE `socialmediaactress` (
  `id` int(10) NOT NULL,
  `actress_name` varchar(255) NOT NULL,
  `facebook_followers` varchar(255) NOT NULL,
  `Instagram_followers` varchar(255) NOT NULL,
  `Twitter_followers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmediaactress`
--

INSERT INTO `socialmediaactress` (`id`, `actress_name`, `facebook_followers`, `Instagram_followers`, `Twitter_followers`) VALUES
(1, 'Alia bhatt', '4,015,656 lakh', '44 million', '20.1 milion'),
(2, 'scarlett johansson', '14,098 thousand', '636.9k', '133.5k'),
(3, 'Deepika padukone', '33,705,663 crores', '37.9 million', '26.8 million'),
(4, 'shraddha kapoor', '16,877,016 crores', '41.7 Million', '12.2 million'),
(5, 'Anushka Shetty', '16,541,654 crores', '2.5 million', '896.1 K');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subscribe` varchar(255) DEFAULT 'no',
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `user_id`, `subscribe`, `email`) VALUES
(1, 545454, 'yes', 'patelharshiv575@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usersession`
--

CREATE TABLE `usersession` (
  `id` int(11) NOT NULL,
  `guest_session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersession`
--

INSERT INTO `usersession` (`id`, `guest_session`) VALUES
(1, 507),
(2, 2028),
(3, 8112),
(4, 32448),
(5, 129792),
(6, 259587),
(7, 519177),
(8, 1038357),
(9, 2076717),
(10, 4153437),
(11, 4153947),
(12, 4154457),
(13, 4154967);

-- --------------------------------------------------------

--
-- Table structure for table `vindiesel`
--

CREATE TABLE `vindiesel` (
  `Movie_id` int(255) NOT NULL,
  `Movie_name` varchar(255) NOT NULL,
  `Movie_earned` varchar(255) NOT NULL,
  `Category_of_movie_acted_in` varchar(255) NOT NULL,
  `category_wise_earning` varchar(255) NOT NULL,
  `acted _with` varchar(255) NOT NULL,
  `Release_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vindiesel`
--

INSERT INTO `vindiesel` (`Movie_id`, `Movie_name`, `Movie_earned`, `Category_of_movie_acted_in`, `category_wise_earning`, `acted _with`, `Release_year`) VALUES
(1, 'The Fate of the Furious', '1.236', 'Action', '1.236', 'Michelle Rodriguez', 2017),
(2, 'XXX: Return of Xander Cage', '346.1', 'Action', '346.1', 'Deepika Padukone', 2017),
(3, 'Furious 7', '1.516', 'Action', '1.516', 'Michelle Rodriguez', 2015),
(4, 'Fast & Furious 6', '788.7', 'action', '788.7', 'Michelle Rodriguez', 2013),
(5, 'Riddick', '98.3', 'science,\r\nfiction,\r\nthriller', '98.3', 'Katee Sackhoff', 2013);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aliabhatt`
--
ALTER TABLE `aliabhatt`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `aliabhatt1`
--
ALTER TABLE `aliabhatt1`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `analyst`
--
ALTER TABLE `analyst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anushkashetty`
--
ALTER TABLE `anushkashetty`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `ayushmannkhurrana`
--
ALTER TABLE `ayushmannkhurrana`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `checkrow`
--
ALTER TABLE `checkrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deepikapadukone`
--
ALTER TABLE `deepikapadukone`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `form12`
--
ALTER TABLE `form12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `justinlin`
--
ALTER TABLE `justinlin`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `karanjohar`
--
ALTER TABLE `karanjohar`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `kartikaryan`
--
ALTER TABLE `kartikaryan`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `knowingpublic`
--
ALTER TABLE `knowingpublic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likedpost`
--
ALTER TABLE `likedpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malharthakar`
--
ALTER TABLE `malharthakar`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `personalnew`
--
ALTER TABLE `personalnew`
  ADD PRIMARY KEY (`Q_ID`);

--
-- Indexes for table `profilepic`
--
ALTER TABLE `profilepic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rajkumarhirani`
--
ALTER TABLE `rajkumarhirani`
  ADD PRIMARY KEY (`director_movie`);

--
-- Indexes for table `rajkumar hirani 1`
--
ALTER TABLE `rajkumar hirani 1`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `releaseposter`
--
ALTER TABLE `releaseposter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `releasetrailer`
--
ALTER TABLE `releasetrailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rohitshetty`
--
ALTER TABLE `rohitshetty`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `salmankhan`
--
ALTER TABLE `salmankhan`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `sanjayleelabhansaali`
--
ALTER TABLE `sanjayleelabhansaali`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `scarlettjohansson`
--
ALTER TABLE `scarlettjohansson`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `shraddhakapoor`
--
ALTER TABLE `shraddhakapoor`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersession`
--
ALTER TABLE `usersession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vindiesel`
--
ALTER TABLE `vindiesel`
  ADD PRIMARY KEY (`Movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `analyst`
--
ALTER TABLE `analyst`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anushkashetty`
--
ALTER TABLE `anushkashetty`
  MODIFY `Movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deepikapadukone`
--
ALTER TABLE `deepikapadukone`
  MODIFY `Movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form12`
--
ALTER TABLE `form12`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kartikaryan`
--
ALTER TABLE `kartikaryan`
  MODIFY `Movie_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `knowingpublic`
--
ALTER TABLE `knowingpublic`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `likedpost`
--
ALTER TABLE `likedpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profilepic`
--
ALTER TABLE `profilepic`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `releaseposter`
--
ALTER TABLE `releaseposter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `releasetrailer`
--
ALTER TABLE `releasetrailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salmankhan`
--
ALTER TABLE `salmankhan`
  MODIFY `Movie_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usersession`
--
ALTER TABLE `usersession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
