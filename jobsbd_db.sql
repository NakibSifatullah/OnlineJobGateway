-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 07:30 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsbd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `UserMail` varchar(255) NOT NULL,
  `UserPass` varchar(255) NOT NULL,
  `UserMobile` varchar(15) NOT NULL,
  `UserDate` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `UserName`, `UserMail`, `UserPass`, `UserMobile`, `UserDate`) VALUES
(1, 'jitu', 'jitu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', '11/03/2017');

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `id` int(11) NOT NULL,
  `JobNo` int(11) NOT NULL,
  `UserNo` int(11) NOT NULL,
  `CompanyNo` int(11) NOT NULL,
  `ApplyDate` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`id`, `JobNo`, `UserNo`, `CompanyNo`, `ApplyDate`) VALUES
(1, 15, 32, 7, '07-03-2017'),
(2, 14, 32, 7, '07-03-2017'),
(3, 13, 32, 9, '07-03-2017'),
(4, 11, 32, 9, '07-03-2017'),
(5, 9, 32, 9, '07-03-2017'),
(6, 10, 32, 9, '07-03-2017'),
(7, 12, 32, 9, '07-03-2017'),
(8, 7, 32, 6, '07-03-2017'),
(9, 5, 32, 6, '07-03-2017'),
(10, 15, 37, 7, '07-03-2017'),
(11, 35, 32, 6, '10-03-2017'),
(12, 36, 32, 9, '10-03-2017'),
(13, 26, 32, 8, '10-03-2017'),
(14, 25, 32, 8, '10-03-2017'),
(15, 24, 32, 8, '10-03-2017'),
(16, 23, 36, 8, '11-03-2017'),
(17, 5, 38, 6, '25-06-2019');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `CategoryDetails` text,
  `CategoryDate` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `CategoryName`, `CategoryDetails`, `CategoryDate`) VALUES
(1, 'Sports', 'Sports', '28-11-2016'),
(2, 'Entertainment', 'Entertainment', '17-12-2016'),
(4, 'IT', 'IT', '08-02-2017'),
(8, 'Garments', 'Garments', '27-02-2017'),
(9, 'Bank', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Bank</span></font>', '06-03-2017'),
(10, 'Sales', 'Sales', '06-03-2017'),
(11, 'Media', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Media</span></font>', '06-03-2017'),
(13, 'Government', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Government</span></font>', '07-03-2017'),
(14, ' Pharmaceutical', '<font color=\"#333333\" face=\"Verdana\"><span style=\"font-size: 11px; background-color: rgb(255, 255, 204);\">Pharmaceutical</span></font>', '07-03-2017'),
(15, 'General Labour', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">General Labour</span></font>', '07-03-2017'),
(16, 'Health Care', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Health Care</span></font>', '07-03-2017'),
(17, 'Consultant', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Consultant</span></font>', '07-03-2017'),
(18, 'Journalism', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Journalism</span></font>', '07-03-2017'),
(19, 'Real Estate', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Real Estate</span></font>', '07-03-2017'),
(20, 'Insurance', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Insurance</span></font>', '07-03-2017');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `messages` text,
  `contactdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `messages`, `contactdate`) VALUES
(1, 'jitu', 'jitu@gmail.com', 'Thank you', 'Thank you', '06-03-2017'),
(2, 'jakare', 'PAR@NOMAIL.COM', 'Need help', 'Hi, I wan a job', '07-03-2017'),
(3, 'Rabbi', 'rabbi@gmail.com', 'Please help', 'I need a job', '10-03-2017'),
(4, 'Hasanur Rahman q', 'amhasan13@gmail.com', 'hi ', 'notinig', '25-06-2019');

-- --------------------------------------------------------

--
-- Table structure for table `jobslist`
--

CREATE TABLE `jobslist` (
  `JobsId` int(11) NOT NULL,
  `JobCategory` int(11) NOT NULL,
  `JobCompany` int(11) NOT NULL,
  `JobTitle` varchar(255) NOT NULL,
  `Vacancy` int(11) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `JobNature` varchar(35) DEFAULT NULL,
  `JobDetails` text,
  `JobRequirements` text,
  `JobBenefits` text,
  `JobImages` blob,
  `JobDeadline` varchar(31) DEFAULT NULL,
  `JobStatus` tinyint(1) NOT NULL,
  `JobDate` varchar(31) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobslist`
--

INSERT INTO `jobslist` (`JobsId`, `JobCategory`, `JobCompany`, `JobTitle`, `Vacancy`, `Location`, `JobNature`, `JobDetails`, `JobRequirements`, `JobBenefits`, `JobImages`, `JobDeadline`, `JobStatus`, `JobDate`) VALUES
(5, 4, 6, 'Senior Web Developer', 2, 'Dhaka', 'Full-Time', 'Responsible for designing, coding and modifying websites, from layout to function and according to a client\'s specifications. Strive to create visually appealing sites that feature user-friendly design and clear navigation.', 'Minimum 3 years experience from any reputated IT firm', 'the company is providing best working environment  to learn lots off things and implement lots of things ', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f476574506963747572652e6a7067, '06-03-2017', 1, '06-03-2017'),
(6, 4, 6, 'Professional Web Designer', 1, 'Dhaka', 'Full-Time', '1)Execute all visual design stages from concept to final hand-off to 2)engineering\r\n2)Conceptualize original website design ideas that bring simplicity and user friendliness to complex roadblocks\r\n4)Create wireframes, storyboards, user flows, process flows and site maps to communicate interaction and design ideas', 'Need to have good working skill with HTML,CSS,Boot strap,javascript', 'Lots of benefits.', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f476574506963747572652e6a7067, '06-03-2017', 1, '06-03-2017'),
(7, 2, 6, 'Music Composer', 1, 'Dhaka', 'Half-Time', 'Good knowledge in music', 'Good knowledge in music', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f, '06-03-2017', 1, '06-03-2017'),
(8, 1, 6, 'Athletic Trainer', 1, 'Khulna', 'Full-Time', 'Have good fitness knowledge', 'Have good fitness knowledge', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f, '06-03-2017', 1, '06-03-2017'),
(9, 9, 9, 'Former Accountant', 1, 'Dhaka', 'Full-Time', 'Need to have good knowledge in accounting', 'Need to have good knowledge in accounting', 'Lots of benifits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f62616e6b31312e6a7067, '06-03-2017', 1, '06-03-2017'),
(10, 9, 9, 'Finance Manager', 1, 'Khulna', 'Full-Time', 'Need to have good knowledge in finance', 'Need to have good knowledge in finance', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f646f776e6c6f61642e6a7067, '06-03-2017', 1, '06-03-2017'),
(11, 9, 9, 'Office Manager', 1, 'Dhaka', 'Full-Time', 'Need to have good knowledge in office managing', 'Need to have good knowledge in office managing', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f, '06-03-2017', 1, '06-03-2017'),
(12, 8, 9, 'Quality Controller', 1, 'Dhaka', 'Full-Time', 'Need to have good knowledge in quality', 'Need to have good knowledge in quality', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f746f74616c2e706e672e706e67, '06-03-2017', 1, '06-03-2017'),
(13, 10, 9, 'Territory Sales Manager', 2, 'Dhaka', 'Full-Time', 'Have good knowledge in sales', 'Have good knowledge in sales', 'Lots of benifits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f746f74616c2e706e672e706e67, '06-03-2017', 1, '06-03-2017'),
(14, 4, 7, 'Data Entry Operator', 1, 'Dhaka', 'Half-Time', 'Have good knowledge in browsing', 'Have good knowledge in browsing', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f746f74616c2e706e672e706e67, '06-03-2017', 1, '06-03-2017'),
(15, 11, 7, 'Assistant Cinematograpaher', 1, 'Dhaka', 'Full-Time', 'Have good skill in photography', 'Have good skill in photography', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f6a6f62732f63696e656d61746f6772617068792d696d6167652d333030783137362e6a7067, '06-03-2017', 1, '06-03-2017'),
(16, 8, 6, 'Senior Supervisor', 1, 'Dhaka', 'Full-Time', 'Need to have good communication skill', 'Need to have good communication skill', 'Lots of benifits', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f4d412e706e67, '07-03-2017', 1, '07-03-2017'),
(17, 13, 8, 'Junior Program Analyst', 1, 'Dhaka', 'Full-Time', 'Good knowledge in programming', 'Good knowledge in programming', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f746f74616c2e706e672e706e67, '07-03-2017', 1, '07-03-2017'),
(18, 13, 8, 'Front Desk Receptionist', 1, 'Dhaka', 'Full-Time', 'Good behaviour and good communication skill', 'Good behaviour and good communication skill', 'Lots of benifits', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f746f74616c2e706e672e706e67, '07-03-2017', 1, '07-03-2017'),
(19, 14, 8, 'Pharmacy Technician CSR ', 2, 'Dhaka', 'Full-Time', 'Can handling customer contacts via telephone ranging from routine to complex and delivers the highest quality customer service .', 'Can handling customer contacts via telephone ranging from routine to complex and delivers the highest quality customer service .', 'Get vacations and others', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f, '07-03-2017', 1, '07-03-2017'),
(20, 14, 8, 'Chemist', 1, 'Dhaka', 'Full-Time', 'Have to performs method validation testing and analysis of new products (lip balm, lotions, and sun screen).', 'Have to performs method validation testing and analysis of new products (lip balm, lotions, and sun screen).', 'vacations and others', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f38376234383139333038366137343464666231323033656630366464313762622e6a7067, '07-03-2017', 1, '07-03-2017'),
(21, 15, 8, 'Warehouse Worker', 5, 'Dhaka', 'Full-Time', 'Good strength and hard working capability', 'Good strength and hard working capability', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f746f74616c2e706e672e706e67, '07-03-2017', 1, '07-03-2017'),
(22, 19, 8, 'Landscape Maintenance', 2, 'Dhaka', 'Full-Time', 'Would work on a Landscaping team for a Residential Management company. ', 'Would work on a Landscaping team for a Residential Management company. ', 'Very beneficial', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f, '07-03-2017', 1, '07-03-2017'),
(23, 18, 8, 'Senior Copywriter Jounalist', 1, 'Dhaka', 'Full-Time', 'good skill in typing', 'good skill in typing', 'very beneficial', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f746f74616c2e706e672e706e67, '07-03-2017', 1, '07-03-2017'),
(24, 20, 8, 'State Insurance Underwriting Manager', 2, 'Dhaka', 'Full-Time', 'Good skill in typing', 'Good skill in typing', 'Lots of benefits', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f, '07-03-2017', 1, '07-03-2017'),
(25, 17, 8, 'Technical Staffing Consultant', 1, 'Dhaka', 'Full-Time', 'This person has direct impact on the ability of the client to meet their deliverables by providing high quality', 'This person has direct impact on the ability of the client to meet their deliverables by providing high quality', 'benefits can not be mesaured', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f476574506963747572652e6a7067, '07-03-2017', 1, '07-03-2017'),
(26, 16, 8, 'Physical Therapist', 6, 'Dhaka', 'Full-Time', 'As HealthTrust Workforce Solutions, we focus on a healthcare facility’s most valuable resource for delivering exceptional patient experiences – its people', 'As HealthTrust Workforce Solutions, we focus on a healthcare facility’s most valuable resource for delivering exceptional patient experiences – its people', 'Lots of benifits', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f38376234383139333038366137343464666231323033656630366464313762622e6a7067, '07-03-2017', 1, '07-03-2017'),
(35, 1, 6, 'Fitness Trainer', 1, 'Dhaka', 'Full-Time', 'Need to have good knowledge of fitness', 'Need to have good knowledge of fitness', 'Need to have good knowledge of fitness', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f, '10-03-2017', 1, '10-03-2017'),
(36, 9, 9, 'Head of MD', 1, 'Dhaka', 'Full-Time', 'Good communication skill', '<span style=\"font-size: 13.3333px;\">Good communication skill</span>', '<span style=\"font-size: 13.3333px;\">Good communication skill</span>', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f, '10-03-2017', 1, '10-03-2017'),
(37, 4, 10, 'Senior developer', 2, 'Dhaka', 'Full-Time', 'Good skill', 'Good skill', 'Good skill', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f6a6f62732f746f74616c2e706e672e706e67, '11-03-2017', 0, '11-03-2017');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_company`
--

CREATE TABLE `jobs_company` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `cphone` varchar(15) DEFAULT NULL,
  `curl` varchar(255) DEFAULT NULL,
  `caddress` text,
  `cdetails` text,
  `cactivity` tinyint(1) NOT NULL,
  `cdate` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs_company`
--

INSERT INTO `jobs_company` (`id`, `cname`, `cemail`, `cpassword`, `cphone`, `curl`, `caddress`, `cdetails`, `cactivity`, `cdate`) VALUES
(6, 'JAM CORPORATION', 'jitubitm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', 'www.jamcorporation.com', '210 Noyatola Moghbazar Dhaka-1217', 'It is a very popular it base company\r\n', 9, '06-03-2017'),
(7, 'Rocklage IT solution', 'abdullahalmamunjitu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', 'www.rocklageitsolution.com', '210 Noyatola Moghbazar Dhaka-1217', 'It is a very popular it base company\r\n', 9, '06-03-2017'),
(8, 'Web Solution', 'cse04706267@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', 'www.websolution.com', '210 Noyatola Moghbazar Dhaka-1217\r\n', 'It is a very popular it base company', 9, '06-03-2017'),
(9, 'Bank BD', 'jitualmamun@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', 'www.bankbd.com.bd', '210 Noyatola Moghbazar Dhaka-1217\r\n', 'It is a very popular it bank in bangladesh.', 9, '06-03-2017'),
(10, 'stamford it solution', 'stamfordit', '0cc175b9c0f1b6a831c399e269772661', '175', 'stamford it company', 'siddeswari', 'sideswari', 9, '11-03-2017'),
(11, 'company', 'email', '74b87337454200d4d33f80c4663dc5e5', '12', 'a', 'a', 'a', 9, '11-03-2017');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `UserPass` varchar(255) NOT NULL,
  `UserMobile` varchar(15) NOT NULL,
  `UserCv` blob,
  `UserDate` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `UserEmail`, `UserPass`, `UserMobile`, `UserCv`, `UserDate`) VALUES
(32, 'Hemel', 'jituus102076@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f63762f437572726963756c696d20566974612e706466, '06-03-2017'),
(33, 'Rajon', 'onlinejobgateway0@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f63762f416264756c6c6820416c204d616d756e2e646f6378, '06-03-2017'),
(34, 'Shovon', 'onlinejob102076@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f63762f416264756c6c6820416c204d616d756e2e646f6378, '06-03-2017'),
(35, 'Jihad', 'jobhouse102076@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01681803885', 0x687474703a2f2f6c6f63616c686f73742f6a6f62686f7573652f6173736574732f696d616765732f63762f437572726963756c696d20566974612e706466, '06-03-2017'),
(36, 'jihad', 'abdullahalmamunjitu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0168180', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f63762f437572726963756c696d20566974612e706466, '11-03-2017'),
(37, 'hjnoyon', 'hjnoyon@sarosit.com', 'aba5d1bd7de6e6f807240e10dcc75594', '017823456', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f63762f4c434f2e646f63, '25-06-2019'),
(38, 'MD H R Shahin', 'shahin@sarosit.com', 'e10adc3949ba59abbe56e057f20f883e', '1782394801', 0x687474703a2f2f6c6f63616c686f73742f6f6e6c696e656a6f62676174657761792f6173736574732f696d616765732f63762f4c434f2e646f63, '25-06-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobslist`
--
ALTER TABLE `jobslist`
  ADD PRIMARY KEY (`JobsId`);

--
-- Indexes for table `jobs_company`
--
ALTER TABLE `jobs_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobslist`
--
ALTER TABLE `jobslist`
  MODIFY `JobsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `jobs_company`
--
ALTER TABLE `jobs_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
