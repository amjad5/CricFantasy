-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 04:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Fantasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `Competition`
--

CREATE TABLE `Competition` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(256) NOT NULL,
  `comp_sdate` date NOT NULL,
  `comp_edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Competition`
--

INSERT INTO `Competition` (`comp_id`, `comp_name`, `comp_sdate`, `comp_edate`) VALUES
(2, 'Indian Premier League 2017', '2017-05-18', '2017-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `Player`
--

CREATE TABLE `Player` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(256) NOT NULL,
  `p_spec` varchar(256) NOT NULL,
  `p_role` varchar(256) NOT NULL,
  `p_cat` varchar(256) NOT NULL,
  `p_api_id` int(11) NOT NULL,
  `p_team` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Player`
--

INSERT INTO `Player` (`p_id`, `p_name`, `p_spec`, `p_role`, `p_cat`, `p_api_id`, `p_team`) VALUES
(1, 'Suresh Raina', 'Bat', 'P', 'B', 33335, 'Gujarat Lions'),
(2, 'Pradeep Sangwan', 'Bowl', 'P', 'B', 279545, 'Gujarat Lions'),
(3, 'Akshdeep Nath', 'Bat', 'P', 'B', 500360, 'Gujarat Lions'),
(4, 'Dale Steyn', 'Bowl', 'P', 'B', 47492, 'Gujarat Lions'),
(5, 'Sarabjit Ladda', 'Bowl', 'P', 'B', 317292, 'Gujarat Lions'),
(6, 'Dhawal Kulkarni', 'Bowl', 'P', 'B', 277955, 'Gujarat Lions'),
(7, 'Pravin Tambe', 'Bowl', 'P', 'B', 587152, 'Gujarat Lions'),
(9, 'Brendon McCullum', 'Bat', 'P', 'B', 37737, 'Gujarat Lions'),
(10, 'Aaron Finch', 'Bat', 'P', 'B', 5334, 'Gujarat Lions'),
(11, 'Paras Dogra', 'Bat', 'P', 'B', 28160, 'Gujarat Lions'),
(12, 'Eklavya Dwivedi', 'WK', 'P', 'B', 340841, 'Gujarat Lions'),
(13, 'James Faulkner', 'Mix', 'P', 'B', 270484, 'Gujarat Lions'),
(14, 'Dwayne Bravo', 'Mix', 'P', 'B', 51439, 'Gujarat Lions'),
(15, 'Dwayne Smith', 'Bat', 'P', 'B', 53118, 'Gujarat Lions'),
(16, 'Ravindra Jadeja', 'Mix', 'P', 'B', 234675, 'Gujarat Lions'),
(17, 'Andrew Tye', 'Bowl', 'P', 'B', 459508, 'Gujarat Lions'),
(18, 'Jaydev Shah', 'Bat', 'P', 'B', 34997, 'Gujarat Lions'),
(19, 'Shadab Jakati', 'Bowl', 'P', 'B', 29655, 'Gujarat Lions'),
(20, 'Zaheer Khan', 'Bowl', 'P', 'B', 0, 'Delhi Daredevils'),
(21, 'JP Duminy', 'Mix', 'P', 'B', 44932, 'Delhi Daredevils'),
(22, 'Yuvraj Singh', 'Bat', 'P', 'B', 36084, 'Delhi Daredevils'),
(23, 'Manoj Tiwary', 'Bat', 'P', 'B', 35565, 'Delhi Daredevils'),
(24, 'Kedar Jadhav', 'Mix', 'P', 'B', 290716, 'Delhi Daredevils'),
(25, 'Saurabh Tiwary', 'Bat', 'P', 'B', 35390, 'Delhi Daredevils'),
(26, 'Quinton de Kock', 'Bat', 'P', 'B', 379143, 'Delhi Daredevils'),
(27, 'Mayank Agarwal', 'B', 'P', 'B', 398438, 'Delhi Daredevils'),
(28, 'Imran Tahir', 'Bowl', 'P', 'B', 40618, 'Delhi Daredevils'),
(29, 'Mohammed Shami', 'Bowl', 'P', 'B', 481896, 'Delhi Daredevils'),
(30, 'Nathan Coulter-Nile', 'Bowl', 'P', 'B', 261354, 'Delhi Daredevils'),
(31, 'Shahbaz Nadeem', 'Bowl', 'P', 'B', 31872, 'Delhi Daredevils'),
(32, 'Jaydev Unadkat', 'Bowl', 'P', 'B', 390484, 'Delhi Daredevils'),
(33, 'Amit Mishra', 'Mix', 'P', 'B', 482546, 'Delhi Daredevils'),
(34, 'Gurinder Sandhu', 'Bowl', 'P', 'B', 499660, 'Delhi Daredevils'),
(35, 'Angelo Mathews', 'Mix', 'P', 'B', 49764, 'Delhi Daredevils'),
(36, 'Domnic Joseph', 'Bowl', 'P', 'B', 0, 'Delhi Daredevils'),
(37, 'Albie Morkel', 'Mix', 'P', 'B', 46248, 'Delhi Daredevils'),
(38, 'Travis Head', 'Bat', 'P', 'B', 530011, 'Delhi Daredevils'),
(39, 'Shreyas Iyer', 'Bat', 'P', 'B', 642519, 'Delhi Daredevils'),
(40, 'Marcus Stoinis', 'Bat', 'P', 'B', 325012, 'Delhi Daredevils'),
(41, 'Chidhambaram Gautam', 'WK', 'P', 'B', 302208, 'Delhi Daredevils'),
(42, 'KK Jiyas', 'Bowl', 'P', 'B', 857781, 'Delhi Daredevils'),
(43, 'Srikar Bharat', 'Bat', 'P', 'B', 529436, 'Delhi Daredevils'),
(44, 'Chama Milind', 'Bowl', 'P', 'B', 604616, 'Sunrisers Hyderabad'),
(45, 'Bhuvneshwar Kumar', 'Bowl', 'Bat', 'B', 326016, 'Sunrisers Hyderabad'),
(46, 'Ishant Sharma', 'Bowl', 'P', 'B', 236779, 'Sunrisers Hyderabad'),
(47, 'Praveen Kumar', 'Bowl', 'P', 'B', 30732, 'Sunrisers Hyderabad'),
(49, 'Siddarth Kaul', 'Bowl', 'P', 'B', 326017, 'Sunrisers Hyderabad'),
(50, 'Trent Boult', 'Bowl', 'P', 'B', 277912, 'Sunrisers Hyderabad'),
(51, 'Karn Sharma', 'Bowl', 'P', 'B', 30288, 'Sunrisers Hyderabad'),
(52, 'David Warner', 'Bat', 'P', 'B', 219889, 'Sunrisers Hyderabad'),
(53, 'Moises Henriques', 'Mix', 'P', 'B', 5961, 'Sunrisers Hyderabad'),
(54, 'Laxmi Shukla', 'Mix', 'P', 'B', 34019, 'Sunrisers Hyderabad'),
(55, 'Pradmanabhan Prasanth', 'Bowl', 'P', 'B', 32211, 'Sunrisers Hyderabad'),
(58, 'Parvez Rasool', 'Mix', 'P', 'B', 378496, 'Sunrisers Hyderabad'),
(59, 'Ravi Bopara', 'Mix', 'P', 'B', 10582, 'Sunrisers Hyderabad'),
(60, 'Hanuma Vihari', 'Bat', 'P', 'B', 452044, 'Sunrisers Hyderabad'),
(61, 'Eoin Morgan', 'Bat', 'P', 'B', 24598, 'Sunrisers Hyderabad'),
(62, 'Kane Williamson', 'Bat', 'P', 'B', 277906, 'Sunrisers Hyderabad'),
(63, 'Kevin Pietersen', 'Bat', 'P', 'B', 19296, 'Sunrisers Hyderabad'),
(64, 'Ricky Bhui', 'Bat', 'P', 'B', 642531, 'Sunrisers Hyderabad'),
(65, 'Shikhar Dhawan', 'Bat', 'P', 'B', 28235, 'Sunrisers Hyderabad'),
(66, 'Lokesh Rahul', 'WK', 'P', 'B', 422108, 'Sunrisers Hyderabad'),
(67, 'Virat Kohli', 'Bat', 'P', 'B', 253802, 'Royal Challengers Bangalore'),
(68, 'Sarfaraz Khan', 'Bat', 'P', 'B', 642525, 'Royal Challengers Bangalore'),
(69, 'AB de Villiers', 'Bat', 'P', 'B', 44936, 'Royal Challengers Bangalore'),
(70, 'Kane Richardson', 'Bowl', 'P', 'B', 0, 'Royal Challengers Bangalore'),
(71, 'Mandeep Singh', 'Mix', 'P', 'B', 398506, 'Royal Challengers Bangalore'),
(72, 'Akshay Karnewar', 'Bowl', 'P', 'B', 528730, 'Royal Challengers Bangalore'),
(73, 'Sachin Baby', 'Bat', 'P', 'B', 432783, 'Royal Challengers Bangalore'),
(74, 'Chris Gayle', 'Mix', 'P', 'B', 51880, 'Royal Challengers Bangalore'),
(75, 'Shane Watson', 'Mix', 'P', 'B', 8180, 'Royal Challengers Bangalore'),
(76, 'Praveen Dubey', 'Bowl', 'P', 'B', 777515, 'Royal Challengers Bangalore'),
(77, 'Stuart Binny', 'Mix', 'P', 'B', 27223, 'Royal Challengers Bangalore'),
(78, 'Yuzvendra Chahal', 'Bowl', 'P', 'B', 430246, 'Royal Challengers Bangalore'),
(79, 'Harshal Patel', 'Bowl', 'P', 'B', 390481, 'Royal Challengers Bangalore'),
(80, 'Mitchell Starc', 'Bowl', 'P', 'B', 311592, 'Royal Challengers Bangalore'),
(81, 'Adam Milne', 'Bowl', 'P', 'B', 450860, 'Royal Challengers Bangalore'),
(82, 'Vikramjeet Malik', 'Bowl', 'P', 'B', 31738, 'Royal Challengers Bangalore'),
(83, 'Iqbal Abdulla', 'Mix', 'P', 'B', 277237, 'Royal Challengers Bangalore'),
(84, 'Vikas Tokas', 'Bowl', 'P', 'B', 474519, 'Royal Challengers Bangalore'),
(85, 'Shaun Marsh', 'Bat', 'P', 'B', 6683, 'Kings XI Punjab'),
(86, 'Murali Vijay', 'Bat', 'Bat', 'B', 237095, 'Kings XI Punjab'),
(87, 'David Miller', 'Bat', 'P', 'B', 321777, 'Kings XI Punjab'),
(88, 'Wriddhiman Saha', 'WK', 'P', 'B', 279810, 'Kings XI Punjab'),
(89, 'Gurkeerat Singh Mann', 'Bat', 'P', 'B', 537124, 'Kings XI Punjab'),
(90, 'Nikhil Naik', 'WK', 'P', 'B', 554700, 'Kings XI Punjab'),
(91, 'Manan Vohra', 'Bat', 'P', 'B', 532856, 'Kings XI Punjab'),
(92, 'Armaan Jaffer', 'Bat', 'P', 'B', 960369, 'Kings XI Punjab'),
(94, 'Glenn Maxwell', 'Bowl', 'P', 'B', 325026, 'Kings XI Punjab'),
(96, 'Kyle Abbott', 'Bowl', 'P', 'B', 0, 'Kings XI Punjab'),
(97, 'Swapnil Singh', 'Bowl', 'P', 'B', 232292, 'Kings XI Punjab'),
(98, 'Pardeep Sahu', 'Mix', 'P', 'B', 34155, 'Kings XI Punjab'),
(99, 'Farhaan Behardien', 'Mix', 'P', 'B', 44410, 'Kings XI Punjab'),
(100, 'Mohit Sharma', 'Bowl', 'P', 'B', 537119, 'Kings XI Punjab'),
(101, 'Anureet Singh', 'Bowl', 'P', 'B', 376324, 'Kings XI Punjab'),
(102, 'Mitchell Johnson', 'Bowl', 'P', 'B', 6033, 'Kings XI Punjab'),
(103, 'Shardul Thakur', 'Bowl', 'P', 'B', 475281, 'Kings XI Punjab'),
(104, 'Sandeep Sharma', 'Bowl', 'P', 'B', 438362, 'Kings XI Punjab'),
(105, 'Sunil Narine', 'Bowl', 'P', 'B', 230558, 'Kolkata Knight Riders'),
(106, 'Kuldeep Yadav', 'Bowl', 'Bat', 'B', 559235, 'Kolkata Knight Riders'),
(107, 'Morne Morkel', 'Bowl', 'P', 'B', 46538, 'Kolkata Knight Riders'),
(108, 'Umesh Yadav', 'Bowl', 'P', 'B', 376116, 'Kolkata Knight Riders'),
(110, 'Ankit Rajpoot', 'Bowl', 'P', 'B', 591650, 'Kolkata Knight Riders'),
(111, 'Brad Hogg', 'Mix', 'P', 'B', 5681, 'Kolkata Knight Riders'),
(112, 'John Hastings', 'Mix', 'P', 'B', 228622, 'Kolkata Knight Riders'),
(113, 'Gautam Gambhir', 'Bat', 'P', 'B', 28763, 'Kolkata Knight Riders'),
(114, 'Chris Lynn', 'Bat', 'P', 'B', 326637, 'Kolkata Knight Riders'),
(115, 'Robin Uthappa', 'Bat', 'P', 'B', 35582, 'Kolkata Knight Riders'),
(116, 'Manish Pandey', 'Bat', 'P', 'B', 290630, 'Kolkata Knight Riders'),
(117, 'Suryakumar Yadav', 'Bat', 'P', 'B', 446507, 'Kolkata Knight Riders'),
(118, 'Sheldon Jackson', 'WK', 'P', 'B', 237696, 'Kolkata Knight Riders'),
(119, 'Colin Munro', 'Mix', 'P', 'B', 232359, 'Kolkata Knight Riders'),
(120, 'Manan Sharma', 'Mix', 'P', 'B', 339955, 'Kolkata Knight Riders'),
(121, 'Piyush Chawla', 'Bowl', 'P', 'B', 32966, 'Kolkata Knight Riders'),
(122, 'Yusuf Pathan', 'Mix', 'P', 'B', 32498, 'Kolkata Knight Riders'),
(123, 'Andre Russell', 'Mix', 'P', 'B', 276298, 'Kolkata Knight Riders'),
(124, 'Shakib Al Hasan', 'Mix', 'P', 'B', 56143, 'Kolkata Knight Riders'),
(125, 'Jason Holder', 'Mix', 'P', 'B', 391485, 'Kolkata Knight Riders'),
(126, 'Rajagopal Sathish', 'Mix', 'P', 'B', 33870, 'Kolkata Knight Riders'),
(127, 'Rohit Sharma', 'Bat', 'P', 'B', 34102, 'Mumbai Indians'),
(128, 'Ambati Rayudu', 'Bat', 'Bat', 'B', 33141, 'Mumbai Indians'),
(129, 'Parthiv Patel', 'WK', 'P', 'B', 32242, 'Mumbai Indians'),
(130, 'Unmukt Chand', 'Bat', 'P', 'B', 446499, 'Mumbai Indians'),
(131, 'Nitish Rana', 'Bat', 'P', 'B', 604527, 'Mumbai Indians'),
(132, 'Jos Buttler', 'WK', 'P', 'B', 308967, 'Mumbai Indians'),
(133, 'Deepak Punia', 'Bowl', 'P', 'B', 807791, 'Mumbai Indians'),
(134, 'Kishore Kamath', 'Mix', 'P', 'B', 919241, 'Mumbai Indians'),
(135, 'Mitchell McClenaghan', 'Bowl', 'P', 'B', 319439, 'Mumbai Indians'),
(136, 'Lendl Simmons', 'Bat', 'P', 'B', 53116, 'Mumbai Indians'),
(137, 'Lasith Malinga', 'Bowl', 'P', 'B', 49758, 'Mumbai Indians'),
(138, 'Harbhajan Singh', 'Bowl', 'P', 'B', 29264, 'Mumbai Indians'),
(139, 'Jagadeesha Suchith', 'Bowl', 'P', 'B', 527663, 'Mumbai Indians'),
(140, 'Marchant de Lang', 'Bowl', 'P', 'B', 393279, 'Mumbai Indians'),
(141, 'Tim Southee', 'Bowl', 'P', 'B', 232364, 'Mumbai Indians'),
(142, 'Nathu Singh', 'Bowl', 'P', 'B', 853259, 'Mumbai Indians'),
(143, 'Akshay Wakhare', 'Bowl', 'P', 'B', 269520, 'Mumbai Indians'),
(145, 'Hardik Pandya', 'Mix', 'P', 'B', 625371, 'Mumbai Indians'),
(146, 'Jasprit Bumrah', 'Bowl', 'P', 'B', 625383, 'Mumbai Indians'),
(147, 'Corey Anderson', 'Mix', 'P', 'B', 277662, 'Mumbai Indians'),
(148, 'Kieron Pollard', 'Mix', 'P', 'B', 230559, 'Mumbai Indians'),
(149, 'Vinay Kumar', 'Bowl', 'P', 'B', 35731, 'Mumbai Indians'),
(150, 'Shreyas Gopal', 'Mix', 'P', 'B', 344580, 'Mumbai Indians'),
(151, 'Krunal Pandya', 'Mix', 'P', 'B', 471342, 'Mumbai Indians'),
(152, 'MS Dhoni', 'WK', 'P', 'B', 28081, 'Rising Pune Supergiants'),
(153, 'Ajinkya Rahane', 'Bat', 'P', 'B', 277916, 'Rising Pune Supergiants'),
(154, 'Ravichandran Ashwin', 'Bowl', 'P', 'B', 26421, 'Rising Pune Supergiants'),
(155, 'Ashok Dinda', 'Bowl', 'P', 'B', 227712, 'Rising Pune Supergiants'),
(156, 'Ankit Sharma', 'Bowl', 'P', 'B', 422992, 'Rising Pune Supergiants'),
(157, 'Adam Zampa', 'Bowl', 'P', 'B', 379504, 'Rising Pune Supergiants'),
(158, 'Ishwar Pandey', 'Bowl', 'P', 'B', 447439, 'Rising Pune Supergiants'),
(159, 'Jaskaran Singh', 'Bowl', 'P', 'B', 376102, 'Rising Pune Supergiants'),
(160, 'Deepak Chahar', 'Bowl', 'P', 'B', 447261, 'Rising Pune Supergiants'),
(161, 'Steven Smith', 'Mix', 'P', 'B', 267192, 'Rising Pune Supergiants'),
(162, 'Faf Du Plessis', 'Bat', 'P', 'B', 44828, 'Rising Pune Supergiants'),
(163, 'Mitchell Marsh', 'Bat', 'P', 'B', 272450, 'Rising Pune Supergiants'),
(164, 'Ankush Bains', 'WK', 'P', 'B', 604534, 'Rising Pune Supergiants'),
(165, 'Usman Khwaja', 'Bat', 'P', 'B', 215155, 'Rising Pune Supergiants'),
(167, 'Baba Aparajith', 'Mix', 'P', 'B', 477071, 'Rising Pune Supergiants'),
(168, 'Rahul Tripathi', 'Mix', 'P', 'B', 446763, 'Rising Pune Supergiants'),
(169, 'Ben Stokes', 'Mix', 'P', 'B', 311158, 'Rising Pune Supergiants'),
(170, 'Daniel Christian	', 'Mix', 'P', 'B', 4864, 'Rising Pune Supergiants'),
(171, 'R Ashwin', 'Bowl', 'P', 'A', 719715, 'Rising Pune Supergiants');

-- --------------------------------------------------------

--
-- Table structure for table `Player_Points`
--

CREATE TABLE `Player_Points` (
  `p_api_id` int(11) NOT NULL,
  `match_date` date NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Player_Points`
--

INSERT INTO `Player_Points` (`p_api_id`, `match_date`, `points`) VALUES
(6033, '2017-05-22', 0),
(29264, '2017-05-22', 0),
(30288, '2017-05-22', 0),
(32242, '2017-05-22', 0),
(267192, '2017-05-22', 0),
(311158, '2017-05-22', 0),
(6033, '2017-05-22', 15),
(319439, '2017-05-22', -15),
(30288, '2017-05-22', 30),
(719715, '2017-05-22', 20),
(475281, '2017-05-22', -30),
(390484, '2017-05-22', 30),
(311158, '2017-05-22', 75),
(277916, '2017-05-22', 48),
(446763, '2017-05-22', 55),
(267192, '2017-05-22', 27),
(28081, '2017-05-22', -3),
(311158, '2017-05-22', 27),
(35565, '2017-05-22', 42),
(4864, '2017-05-22', 18),
(719715, '2017-05-22', 12),
(32242, '2017-05-22', 43),
(308967, '2017-05-22', 27),
(604527, '2017-05-22', -7),
(34102, '2017-05-22', 68),
(30288, '2017-05-22', 21),
(230559, '2017-05-22', 19),
(625371, '2017-05-22', 23),
(29264, '2017-05-22', 67),
(319439, '2017-05-22', -10),
(6033, '2017-05-22', -10);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(256) NOT NULL,
  `user_lname` varchar(256) NOT NULL,
  `user_username` varchar(256) NOT NULL,
  `user_pass` varchar(256) NOT NULL,
  `user_occu` varchar(256) NOT NULL,
  `user_agroup` int(11) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_country` int(11) NOT NULL,
  `user_testteam` int(11) NOT NULL,
  `user_feedback` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_id`, `user_fname`, `user_lname`, `user_username`, `user_pass`, `user_occu`, `user_agroup`, `user_email`, `user_country`, `user_testteam`, `user_feedback`) VALUES
(1, 'Amjad', 'jfd', 'name', '554', 'student', 11, 'amjad.hussain@gmail.com', 11, 12, 'google.com'),
(3, 'amjad', 'hussain', 'amjad', 'asdf', '3', 8, 'amjad.hussain544@gmail.com', 8, 8, 'google.com');

-- --------------------------------------------------------

--
-- Table structure for table `User_Competition`
--

CREATE TABLE `User_Competition` (
  `user_comp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comp_name` varchar(256) NOT NULL,
  `comp_sdate` date NOT NULL,
  `comp_edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User_Player`
--

CREATE TABLE `User_Player` (
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `p_api_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Player`
--

INSERT INTO `User_Player` (`user_id`, `p_id`, `team_id`, `p_api_id`) VALUES
(3, 1, 24, 277916),
(3, 169, 24, 311158),
(3, 9, 24, 37737),
(3, 132, 24, 308967),
(3, 148, 24, 230559),
(3, 29, 24, 481896),
(3, 120, 24, 339955),
(3, 111, 24, 5681),
(3, 53, 24, 5961),
(3, 74, 24, 51880),
(3, 74, 24, 51880);

-- --------------------------------------------------------

--
-- Table structure for table `User_Team`
--

CREATE TABLE `User_Team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(256) NOT NULL,
  `comp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Team`
--

INSERT INTO `User_Team` (`team_id`, `team_name`, `comp_id`) VALUES
(1, 'my team', 2),
(2, 'my team', 2),
(3, 'my team', 2),
(4, 'my team', 2),
(5, 'my team', 2),
(6, 'my team', 2),
(7, 'my team', 2),
(8, 'my team', 2),
(9, 'my team', 2),
(10, 'new team', 2),
(11, 'my team', 2),
(12, 'pakistan', 2),
(15, '', 2),
(16, '', 2),
(17, 'myteam2', 2),
(18, '', 0),
(19, '', 0),
(20, '', 0),
(21, '', 2),
(22, '', 0),
(23, 'latest team', 0),
(24, 'myteam', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Competition`
--
ALTER TABLE `Competition`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `Player`
--
ALTER TABLE `Player`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `User_Competition`
--
ALTER TABLE `User_Competition`
  ADD PRIMARY KEY (`user_comp_id`);

--
-- Indexes for table `User_Player`
--
ALTER TABLE `User_Player`
  ADD KEY `p_id` (`p_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `User_Team`
--
ALTER TABLE `User_Team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Competition`
--
ALTER TABLE `Competition`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Player`
--
ALTER TABLE `Player`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `User_Competition`
--
ALTER TABLE `User_Competition`
  MODIFY `user_comp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User_Team`
--
ALTER TABLE `User_Team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
