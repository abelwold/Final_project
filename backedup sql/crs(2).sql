-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 01:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `crime_registration_form`
--

CREATE TABLE `crime_registration_form` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` int(100) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `resident_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `passport_photo` varchar(100) NOT NULL,
  `signature_photo` varchar(100) NOT NULL,
  `Id_document_type` varchar(100) NOT NULL,
  `id_document_photo` varchar(100) NOT NULL,
  `hight` int(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `eye_color` varchar(100) NOT NULL,
  `hair_color` varchar(100) NOT NULL,
  `emergency_phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `details_of_offence`
--

CREATE TABLE `details_of_offence` (
  `id` int(100) NOT NULL,
  `date_of_court_appearance` varchar(100) NOT NULL,
  `location_of_court` varchar(100) NOT NULL,
  `Nature_of_offence` varchar(100) NOT NULL,
  `date_of_offence` varchar(100) NOT NULL,
  `location_of_offence` varchar(100) NOT NULL,
  `document_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details_of_offence`
--

INSERT INTO `details_of_offence` (`id`, `date_of_court_appearance`, `location_of_court`, `Nature_of_offence`, `date_of_offence`, `location_of_offence`, `document_no`) VALUES
(1, '2023-01-17', 'Location of Court', 'Nature of Offence', '2023-01-17', 'Location of Offence ', 161906658),
(2, '2023-01-17', 'Name', 'Name', '2023-01-17', 'Name', 552343094);

-- --------------------------------------------------------

--
-- Table structure for table `incident_reporter`
--

CREATE TABLE `incident_reporter` (
  `id` int(100) NOT NULL,
  `document_no` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middel_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `addressTwo` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip_code` int(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incident_reporter`
--

INSERT INTO `incident_reporter` (`id`, `document_no`, `title`, `first_name`, `middel_name`, `last_name`, `phone`, `address`, `addressTwo`, `city`, `state`, `zip_code`, `Date`) VALUES
(10, 121879581, 'MR.', 'Zsdzsd', 'Zsdv', 'Zsvzsdv', 543345, 'Sdsd', 'dsfgsf', 'Dsfgdsfg', 'Sdfgsdfg', 32523, '2023-01-12 10:13:42'),
(11, 336145182, 'MR.', '', '', '', 0, '', '', '', '', 0, '2023-01-15 02:56:02'),
(12, 617955929, 'MS.', '', '', '', 0, '', '', '', '', 0, '2023-01-15 02:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `investigating_officer_form`
--

CREATE TABLE `investigating_officer_form` (
  `id` int(100) NOT NULL,
  `Investigating_off_first_name` varchar(100) NOT NULL,
  `Investigating_off_last_name` varchar(100) NOT NULL,
  `Investigating_off_id` int(100) NOT NULL,
  `document_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investigating_officer_form`
--

INSERT INTO `investigating_officer_form` (`id`, `Investigating_off_first_name`, `Investigating_off_last_name`, `Investigating_off_id`, `document_no`) VALUES
(1, 'Investigating officer First Name', 'Investigating officer Last Name', 123, 161906658),
(2, 'Name', 'Name', 123, 552343094);

-- --------------------------------------------------------

--
-- Table structure for table `registeree`
--

CREATE TABLE `registeree` (
  `id` int(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `identification_no` varchar(100) NOT NULL,
  `first_name_registeree` varchar(100) NOT NULL,
  `last_name_registeree` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `incident_location` varchar(100) NOT NULL,
  `nature_incident` varchar(100) NOT NULL,
  `incident_details` varchar(100) NOT NULL,
  `incident_motivated` varchar(100) NOT NULL,
  `report_before` varchar(100) NOT NULL,
  `arreseted` varchar(100) NOT NULL,
  `certify` varchar(100) NOT NULL,
  `document_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeree`
--

INSERT INTO `registeree` (`id`, `rank`, `identification_no`, `first_name_registeree`, `last_name_registeree`, `date`, `incident_location`, `nature_incident`, `incident_details`, `incident_motivated`, `report_before`, `arreseted`, `certify`, `document_no`) VALUES
(4, 'Constable', '123456789', 'First Name', 'Last Name', '2023-01-12 05:58:29', 'Incident Location (Please provide specific details):', 'Nature of incident:', 'Incident details:', 'What motivated the incident?:', 'Was a report of the incident issued to the police?:', 'Has anyone been arrested so far in relation to the incident?:', 'certified', '778394204'),
(5, 'Constable', '1234', 'f', 'l', '2023-01-12 06:09:44', 'i', 'n', 'i', 'w', 'w', 'h', 'certified', '701375649'),
(8, 'Deputy Commissioner', '3254', 'Dfdf', 'Dfs', '2023-01-12 10:13:42', 'Sdgsdf', 'Dsfgsfg', 'dsfgsfg', 'Gsdfgsdf', 'Sdfsdfs', 'Sdfgsdff', 'certified', '121879581'),
(9, '', '', '', '', '2023-01-15 02:56:02', '', '', '', '', '', '', '', '336145182'),
(10, 'Constable', '', '', '', '2023-01-15 02:57:08', '', '', '', '', '', '', 'certified', '617955929');

-- --------------------------------------------------------

--
-- Table structure for table `register_police_officer`
--

CREATE TABLE `register_police_officer` (
  `id` int(100) NOT NULL,
  `police_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `previously_registered_station` varchar(100) NOT NULL,
  `currently_registered_station` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `date_join_police` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_police_officer`
--

INSERT INTO `register_police_officer` (`id`, `police_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `nationality`, `address`, `country`, `city`, `state`, `phone`, `email`, `photo`, `previously_registered_station`, `currently_registered_station`, `rank`, `position`, `date_join_police`) VALUES
(1, 'c', 'gnc', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
(2, '57', '', '', '', '', '', '', '', '', '', '', 57, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', 'Male', '', '', '', '', 'Tigray', 0, '', 'img/IMG-20200116-WA0000.jpg', 'Adminstrator', 'User', 'Chief Sergeant', '', ''),
(10, '2121e212124', '', '', '', '', 'Male', '', '', '', '', 'Gambella', 0, '', 'img/IMG-20190715-WA0000.jpg', 'Adminstrator', 'User', 'Chief Inspector', 'afsdg', ''),
(11, 'asdf32', 'asfd', 'asdf', 'asfd', '2023-01-04', 'Male', 'adsf', 'asdf', 'asdfasdf', 'dfs', 'Somali', 324234, 'asdf@D.sdfg', 'img/IMG-20200115-WA0000.jpg', 'Adminstrator', 'User', 'Assistant Commissioner', 'sdf', '2023-01-17'),
(12, 'AFS32', 'zxCDS', 'zxcED', 'zxcEDC', '2023-01-17', 'Male', 'SADFA', 'ASDF', 'ASDFAS', 'ASDGFASD', 'Gambella', 326758, 'SDF@ZSDG.XDFG', 'img/IMG-20181224-WA0000.jpg', 'Adminstrator', 'User', 'Assistant Inspector', 'zxCsdC', '2023-01-05'),
(14, 'zvx', '', '', '', '', 'Male', '', '', '', '', 'Benishangul-Gumuz', 0, '', 'img/29363565.jpg', 'Adminstrator', 'User', 'Assistant Sergeant', '', ''),
(15, 'kkjij000', '', '', '', '', 'Male', '', '', '', '', 'Harari ', 0, '', 'img/1200px-Ethiopian_Airlines_Logo.svg.png', 'Adminstrator', 'User', 'Deputy Inspector', '', ''),
(16, 'Identification No.', 'First Name', 'Middle Name', 'Last Name', '2023-01-18', 'Male', 'Nationality', 'Address', 'Country', 'City', 'Southern Nations', 123, 'Email', 'img/ethiopian-airlines-cargo-logo.jpg', 'Adminstrator', 'User', 'Constable', 'Position', '2023-01-04'),
(21, '43564325678', '', '', '', '', 'Male', '', '', '', '', 'Dire Dawa', 0, '', 'img/5.jpg', 'User', 'Adminstrator', 'Assistant Sergeant', '', ''),
(23, '1223334444', '', '', '', '', 'Male', '', '', '', '', 'Gambella', 0, '', 'img/4.jpg', 'User', 'Adminstrator', 'Inspector', '', ''),
(25, 'm213ty', '', '', '', '', 'Male', '', '', '', '', 'Gambella', 0, '', 'img/1.jpg', 'Adminstrator', 'User', 'Deputy Commander', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suspected_person_detailes`
--

CREATE TABLE `suspected_person_detailes` (
  `id` int(100) NOT NULL,
  `document_no` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `resident_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `passport_photo` varchar(100) NOT NULL,
  `signature_photo` varchar(100) NOT NULL,
  `Id_document_type` varchar(100) NOT NULL,
  `id_document_photo` varchar(100) NOT NULL,
  `hight` int(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `eye_color` varchar(100) NOT NULL,
  `hair_color` varchar(100) NOT NULL,
  `emergency_phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suspected_person_detailes`
--

INSERT INTO `suspected_person_detailes` (`id`, `document_no`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `marital_status`, `resident_address`, `city`, `state`, `phone`, `passport_photo`, `signature_photo`, `Id_document_type`, `id_document_photo`, `hight`, `weight`, `eye_color`, `hair_color`, `emergency_phone`) VALUES
(3, 552343094, 'Name', 'Name', 'Name', '2023-01-17', 'Divorced', 'Name', 'Name', 'Name', 999, 'img/ethipiancar1.png', 'img/29363565.jpg', 'Passport', 'img/nature_big_1.jpg', 180, 62, 'Name', 'Name', 999);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(50) NOT NULL,
  `identification_no` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `auto_password` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `identification_no`, `first_name`, `last_name`, `rank`, `address`, `gender`, `email`, `phone`, `photo`, `region`, `country`, `date_of_birth`, `user_type`, `auto_password`, `created`) VALUES
(6, '123', 'Aaa', 'Aaa', 'Constable', 'Aaa', 'Male', 'a@a.a', '123', 'img/1e563597998c6c6420329c03179c808f_4bfdb112aff9620d8fd644ad8b09c704.jpg', 'Tigray', 'Aaa', '', 'Adminstrator', 'KnP7TYuQ', '2023-01-05 19:50:46'),
(10, '3456', 'fghgfh', 'gfhfh', 'Deputy Commissioner General', 'dfasdgadfg', 'Male', 'a@a.aa', 'dfss', 'img/photo_2020-11-01_10-54-27.jpg', 'gsdfg', 'sdfgsdfg', 'fgdsgdf', 'Adminstrator', '8poH6KCL', '2023-01-11 18:21:05'),
(11, '324576453423145', 'dsfgdsfgs', 'sdfgsdfg', 'Assistant Commissioner', 'sdfgsdf', 'Male', 't@t.t', 'sdfgsdfg', 'img/IMG_20201024_222704_968.jpg', 'sdfgs', 'sdfgsdfg', 'sdfgsg', 'Adminstrator', 'PyRKAMsi', '2023-01-11 18:31:56'),
(12, '3646436', 'sdfxhxdfh', 'xdfbxdfb', 'Commander', 'xcvbfbx', 'Female', 'e@r.o', 'xcvbfgb', 'img/IMG_20201024_222708_564.jpg', 'cbg', 'cgb', 'gbcgbb', 'Adminstrator', 'zNO2kda0', '2023-01-11 18:45:14'),
(13, '435342', 'zdbzdfvzb', 'dfgh', 'Commissioner', 'dfghdfgh', 'Male', 'v@g.o', 'dfhjdfg', 'img/IMG_20201024_222716_797.jpg', 'xcvbxc', 'dfghdfg', 'jdfhtrdfbg', 'Adminstrator', 'KNWlv9F8', '2023-01-11 18:47:40'),
(14, 'G', 'Xzvgfhdgj', 'Sdfhgjh', 'Deputy Commander', 'Dsfhsdfhs', 'Male', 'erty@cdvfb.gf', 'Sdfhsdfh', 'img/4.jpg', 'Amhara', 'Ooo', 'sdfhsdfh', 'Adminstrator', '7bPLpUMw', '2023-01-15 00:13:32'),
(16, '456789123', 'First name', 'last_name', 'Constable', 'Address', 'Male', 'Email@dot.com', 'Phone number', 'img/Screenshot (1967).png', 'region', ' country', ' Birthday', 'Adminstrator', 'RJqj2KQ0', '2023-01-14 08:40:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crime_registration_form`
--
ALTER TABLE `crime_registration_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_of_offence`
--
ALTER TABLE `details_of_offence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suspected_person_detailes_id` (`document_no`);

--
-- Indexes for table `incident_reporter`
--
ALTER TABLE `incident_reporter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_no` (`document_no`);

--
-- Indexes for table `investigating_officer_form`
--
ALTER TABLE `investigating_officer_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `investigating_officer_form_con` (`document_no`);

--
-- Indexes for table `registeree`
--
ALTER TABLE `registeree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_police_officer`
--
ALTER TABLE `register_police_officer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `police_id` (`police_id`);

--
-- Indexes for table `suspected_person_detailes`
--
ALTER TABLE `suspected_person_detailes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_no` (`document_no`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identification_no` (`identification_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crime_registration_form`
--
ALTER TABLE `crime_registration_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `details_of_offence`
--
ALTER TABLE `details_of_offence`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incident_reporter`
--
ALTER TABLE `incident_reporter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `investigating_officer_form`
--
ALTER TABLE `investigating_officer_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registeree`
--
ALTER TABLE `registeree`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register_police_officer`
--
ALTER TABLE `register_police_officer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `suspected_person_detailes`
--
ALTER TABLE `suspected_person_detailes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
