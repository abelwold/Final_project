-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 02:13 AM
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
-- Table structure for table `crime_or_incident_from_website`
--

CREATE TABLE `crime_or_incident_from_website` (
  `id` int(100) NOT NULL,
  `document_no` varchar(100) NOT NULL,
  `crime_type` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middel_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Do_you_know_when_it_happened` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `other_address_details` varchar(100) NOT NULL,
  `people_involved_in_the_crime_access_vehicle` varchar(100) NOT NULL,
  `people_involved_in_the_crime_access_weapon` varchar(100) NOT NULL,
  `do_you_know_about_the_person` varchar(100) NOT NULL,
  `people_look_like` varchar(100) NOT NULL,
  `contact_details_for_the_person` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `evidence` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crime_or_incident_from_website`
--

INSERT INTO `crime_or_incident_from_website` (`id`, `document_no`, `crime_type`, `first_name`, `middel_name`, `last_name`, `address`, `Do_you_know_when_it_happened`, `date`, `time`, `other_address_details`, `people_involved_in_the_crime_access_vehicle`, `people_involved_in_the_crime_access_weapon`, `do_you_know_about_the_person`, `people_look_like`, `contact_details_for_the_person`, `phone`, `evidence`, `created`) VALUES
(2, 'Domestic abuse', '161071305', 'f', 'f', 'f', 'f', 'yes', '2022-12-27', '13:24', 'f', 'yes', 'yes', 'f', 'f', 0, 0, '', '2023-01-20 22:24:05'),
(3, '484973157', 'Assault', 'First Name :', 'Middel Name :', 'Last Name :', 'Town or city or Postcode (VITAL INFORMATION) :', 'yes', '2023-01-22', '10:06', 'Can you tell us anything that will help us identify the location?', 'yes', 'yes', ' Please tell us about the person or people involved or responsible for the crime. What do you know a', 'What does the person / people look like? ', 0, 0, '', '2023-01-22 09:06:59'),
(4, '578369794', 'Arson', 'Optional', 'Optional', 'Optional', 'Optional', 'yes', '2023-01-23', '03:45', 'Optional', 'yes', 'no', 'Optional', 'Optional', 0, 0, '', '2023-01-23 12:43:52'),
(5, '596321044', 'Arson', 'incident take place?', 'incident take place?', 'incident take place?', 'incident take place?', 'yes', '2023-01-05', '02:45', 'incident take place?', 'no', 'dont know', 'incident take place?', 'incident take place?', 0, 0, '', '2023-01-23 12:44:27');

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

-- --------------------------------------------------------

--
-- Table structure for table `incident_reporter`
--

CREATE TABLE `incident_reporter` (
  `id` int(25) NOT NULL,
  `document_no` int(25) NOT NULL,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middel_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `addressTwo` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incident_reporter`
--

INSERT INTO `incident_reporter` (`id`, `document_no`, `title`, `first_name`, `middel_name`, `last_name`, `phone`, `address`, `addressTwo`, `city`, `state`, `zip_code`, `Date`) VALUES
(8, 505446422, 'MR.', 'Register Incident1', 'Register Incident1', 'Register Incident1', 911663640, 'Register Incident1', 'Register Incident1', 'Register Incident1', 'Register Incident1', 123, '2023-01-23 10:31:29'),
(9, 189678268, 'MR.', 'Register Incident2', 'Register Incident2', 'Register Incident2', 911663640, 'Register Incident2', 'Register Incident2', 'Register Incident2', 'Register Incident2', 123, '2023-01-23 10:32:02'),
(10, 809703402, 'MS.', 'Register Incident3', 'Register Incident3', 'Register Incident3', 911663640, 'Register Incident3', 'Register Incident3', 'Register Incident3', 'Register Incident3', 123, '2023-01-23 10:32:34'),
(11, 594403054, 'Mrs.', '  First Name', '  Middle Name', '  Last Name', 911663640, 'Street Address', 'Street Address Line 2', 'City', 'State/Province', 123, '2023-01-23 10:58:33'),
(12, 540492325, 'MS.', 'vvvvvv', 'vvvvvvvvvvvvvvvvvvvv', 'vvvvvvvvvvvvvvvvvvvv', 911663640, 'fffffffffffffffffffffffffff', 'fffffffffffffffffffffffffffffffffffffffffff', 'fffffffffffffffffffffffff', 'fffffffffffffffffffffffff', 123, '2023-01-23 11:06:36'),
(13, 840994590, 'MS.', 'hhhhhhhhh', 'hhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhh', 911663640, 'gggggggggggggg', 'gggggggggggg', 'ggggggggggggggggggggggggg', 'ggggggggggggggggggggggggg', 123, '2023-01-23 11:45:11'),
(14, 102133046, 'MS.', 'f', 'f', 'f', 911663640, 'f', 'f', 'f', 'f', 123, '2023-01-24 12:00:08'),
(15, 334993279, 'MS.', 'b', 'b', 'b', 911663604, 'q', 'q', 'q', 'q', 123, '2023-01-24 12:02:12'),
(16, 620813028, 'MS.', 'g', 'g', 'g', 911663604, 'j', 'j', 'j', 'j', 123, '2023-01-24 12:03:37'),
(17, 287213079, 'MS.', 'v', 'v', 'v', 911663604, 'v', 'v', 'v', 'v', 123, '2023-01-24 12:05:58'),
(18, 106880405, 'MS.', 'aaaaa', 'aaaaaaaaaaa', 'aaaaaaaa', 911663604, 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 123, '2023-01-24 12:25:56'),
(19, 801791285, 'MS.', 'cccc', 'cccccccccccccccccccc', 'cccccccccccccccccccc', 911663604, 'cccccc', 'cccccc', 'ccccccccccc', 'ccccccccccccccc', 123, '2023-01-24 12:33:07'),
(20, 112209730, 'MS.', 'zzzzz', 'zzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzz', 911663604, 'zzzzzzzzz', 'zzzzzzzzzzzzzz', 'zzzz', 'zzzzzzzzzzzzzzzzzzzzzzz', 123, '2023-01-24 01:13:20'),
(21, 467660415, 'Mrs.', 'Incident ', 'Incident ', 'Incident ', 911663604, 'Incident ', 'Incident ', 'Incident ', 'Incident ', 123, '2023-01-24 01:17:47'),
(22, 112163425, 'MS.', 'bbbbb', 'bbbbb', 'bbbbbbbbbbbbbbbbbbbb', 911633604, 'vvvvvv', 'vvvvv', 'vvvvvvvvv', 'vv', 123, '2023-01-24 01:57:39'),
(23, 395179314, 'MR.', 'o', 'o', 'o', 911663604, 'ooo', 'ooo', 'ooooo', 'oooooooooooooo', 123, '2023-01-24 02:00:35'),
(24, 283303049, 'MS.', 'xx', 'x', 'xxxxxxxxxxxxxxxxx', 911663604, 'xxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxx', 'xxxxxxxxxxxxxxxxxxx', 123, '2023-01-24 02:04:11'),
(25, 824254932, 'MS.', 'uuuuu', 'uuuuuuuuuuuuu', 'uuuuuuuuuuuuuuuuuuuu', 911663604, 'uuuuuu', 'uuuuuuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuuuuuuuuuuu', 123, '2023-01-24 02:08:21'),
(26, 546651827, 'MS.', 'b', 'b', 'b', 911663604, 'cccccccccccccccc', 'cccccccccccccccccc', 'ccccc', 'ccccccccccccccccccccc', 123, '2023-01-24 02:13:04'),
(27, 378963641, 'Mrs.', 'cccc', 'ccccccccccc', 'cc', 911663600, 'ccccccccc', 'ccccccccccc', 'ccccccccc', 'ccccccccccccccccccc', 123, '2023-01-24 02:15:35'),
(28, 135772342, 'Mrs.', 'rrrrrr', 'rrrrrrrrrrrr', 'rrrrrrrrrrrrrrrrrr', 911343344, 'rrrrrrrrrrrrr', 'rrrrrrrrrrrrr', 'rrrrrrrrrr', 'rrrrrrrrrrrrrr', 123, '2023-01-24 02:17:12'),
(29, 392236148, 'Mrs.', 'oppoop', 'opopoop', 'opopoppo', 911663604, 'popoopoop', 'popopooppo', 'popopoop', 'popoopop', 123, '2023-01-24 02:25:36'),
(30, 436625198, 'MS.', 'ssssssssss', 'ssssssssss', 'ssssssssssssssssss', 911663604, 'gggggggg', 'gggg', 'gggggggggggg', 'ggg', 123, '2023-01-24 02:35:50'),
(31, 279501362, 'Mrs.', 'z', 'zzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzz', 911663604, 'ddddddddd', 'dddddddddddddddddd', 'ddddd', 'ddddddddddddddddddd', 123, '2023-01-24 02:46:09');

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
  `crime_type` varchar(100) NOT NULL,
  `incident_location` varchar(100) NOT NULL,
  `nature_incident` varchar(100) NOT NULL,
  `incident_details` varchar(100) NOT NULL,
  `incident_motivated` varchar(100) NOT NULL,
  `report_before` varchar(100) NOT NULL,
  `arreseted` varchar(100) NOT NULL,
  `evidence` varchar(200) NOT NULL,
  `certify` varchar(100) NOT NULL,
  `document_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeree`
--

INSERT INTO `registeree` (`id`, `rank`, `identification_no`, `first_name_registeree`, `last_name_registeree`, `date`, `crime_type`, `incident_location`, `nature_incident`, `incident_details`, `incident_motivated`, `report_before`, `arreseted`, `evidence`, `certify`, `document_no`) VALUES
(8, 'Constable', 'Register Incident1', 'Register Incident1', 'Register Incident1', '2023-01-23 10:31:29', '', 'Register Incident1', 'Register Incident1', 'Register Incident1', 'Register Incident1', 'Register Incident1', 'Register Incident1', '', 'certified', '505446422'),
(9, 'Assistant Sergeant', 'Register Incident2', 'Register Incident2', 'Register Incident2', '2023-01-23 10:32:02', '', 'Register Incident2', 'Register Incident2', 'Register Incident2', 'Register Incident2', 'Register Incident2', 'Register Incident2', '', 'certified', '189678268'),
(10, 'Constable', 'Register Incident3', 'Register Incident3', 'Register Incident3', '2023-01-23 10:32:34', '', 'Register Incident3', 'Register Incident3', 'Register Incident3', 'Register Incident3', 'Register Incident3', 'Register Incident3', '', 'certified', '809703402'),
(11, 'Constable', 'Identification No', '  Identification No First Name', 'Last Name', '2023-01-23 10:58:33', '', 'Incident Location (Please provide specific details):', 'Nature of incident:', 'Incident details:', 'What motivated the incident?:', 'Do_not_know', 'Do_not_know', '', 'certified', '594403054'),
(12, 'Inspector', 'ffffffffffffffffffffff', 'ffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffff', '2023-01-23 11:06:36', 'Drink / drug driving', 'fffffff', 'fffffffffffffffffffff', 'ffffffffff', 'ffffffffffff', 'Yes', 'Yes', '', 'certified', '540492325'),
(13, 'Sergeant', 'ssssssssssssss', 'ssssssssssssssssssssss', 'ssssssssssssssssssssss', '2023-01-23 11:45:11', 'Arson', 'sssssssssssssssssssssss', 'sssssssssssssss', 'ssssssssssssssssssssssss', 'ssssssssssssssssssss', 'No', 'No', '', 'certified', '840994590'),
(14, 'Constable', 'f', 'f', 'f', '2023-01-24 12:00:08', 'Array', 'f', 'f', 'f', 'f', 'Yes', 'Yes', '', 'certified', '102133046'),
(15, 'Deputy Inspector', '1', 'd', 'q', '2023-01-24 12:02:12', 'Array', 'd', 'd', 'd', 'd', 'Yes', 'Yes', '', 'certified', '334993279'),
(16, 'Assistant Inspector', 'we', 'we', 'ew', '2023-01-24 12:03:37', 'Array', 'ew', 'ew', 'ew', 'ew', 'No', 'Yes', '', 'certified', '620813028'),
(17, 'Assistant Sergeant', 'v', 'v', 'v', '2023-01-24 12:05:58', 'Burglary, Child abuse', 'v', 'v', 'v', 'v', 'Yes', 'Yes', '', 'certified', '287213079'),
(18, 'Assistant Commissioner', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaa', '2023-01-24 12:25:56', 'Arson, Child abuse, Domestic abuse', 'aaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'Yes', 'Yes', '', 'certified', '106880405'),
(19, 'Assistant Commissioner', '123', 'ccccccc', 'ccccccccc', '2023-01-24 12:33:07', 'Bank and credit card fraud, Computer misuse, Burglary', 'cccccc', 'cccccccccccccccccc', 'ccccc', 'ccccccccccccccccccccc', 'No', 'Yes', '', 'certified', '801791285'),
(20, 'Constable', '123', 'zzzzzzzz', 'zzzzzzzzzzzz', '2023-01-24 01:13:20', 'Burglary, Hate crime', 'zzzz', 'zzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzz', 'zzzzz', 'No', 'Yes', 'client-1.png, client-2.png', 'certified', '112209730'),
(21, 'Chief Sergeant', '123', 'Incident ', 'Incident ', '2023-01-24 01:17:47', 'Illegal tobacco, Counterfeiting and piracy, Computer misuse', 'Incident ', 'Incident ', 'Incident ', 'Incident ', 'No', 'Yes', 'r-post-1.jpg, r-post-2.jpg, r-post-3.jpg, r-post-4.jpg', 'certified', '467660415'),
(22, 'Deputy Sergeant', '123', 'vvvvvvv', 'vvvvvvvvvv', '2023-01-24 01:57:39', 'Bank and credit card fraud, Computer misuse', 'vvvvvvv', 'vvvvvvvvvv', 'vvvvvvvvvv', 'vvvvvvvvvvv', 'No', 'No', 'blog-1.jpg, blog-2.jpg, blog-3.jpg', 'certified', '112163425'),
(23, 'Assistant Sergeant', 'ooooooooo', 'oooooooooooo', 'ooooooooooo', '2023-01-24 02:00:35', 'Computer misuse, Drugs', 'oooooooooo', 'oooooooooooo', 'ooooooooooo', 'ooooooooooooooooooooooooo', 'No', 'Yes', 'blog-3.jpg, blog-4.jpg, blog-5.jpg', 'certified', '395179314'),
(24, 'Commander', '123', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', '2023-01-24 02:04:11', 'Child abuse, Counterfeiting and piracy, Domestic abuse', 'xxxxxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxx', 'xxxxxxxxxxxxxxx', 'Yes', 'Yes', 'blog-c-7.jpg, blog-c-8.jpg', 'certified', '283303049'),
(25, 'Constable', 'uuuuuuuu', 'uuuuuuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuu', '2023-01-24 02:08:21', 'Gun crime, Bank and credit card fraud, Burglary', 'uuuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuuu', 'uuuuuuuu', 'uuuuuuuuuuuuuuuuuuuuuu', 'Do_not_know', 'Do_not_know', 'special-1.png, special-2.png', 'certified', '824254932'),
(26, 'Deputy Sergeant', 'cccccccccccc', 'cccccccccccccccccc', 'ccccccccccc', '2023-01-24 02:13:04', 'Assault, Burglary', 'ccccccccccc', 'ccccccccccccccccc', 'cccccccccccc', 'ccccc', 'Yes', 'Yes', 'special-1.png, special-2.png', 'certified', '546651827'),
(27, 'Assistant Commissioner', 'cc', 'ccc', 'cccccccccccccccccc', '2023-01-24 02:15:35', 'Child abuse, Counterfeiting and piracy', 'ccccccccccc', 'cccccccccccccccccc', 'cccccccccccccc', 'ccccccc', 'No', 'No', 'service-3.png, service-4.png', 'certified', '378963641'),
(28, 'Deputy Commander', '123', 'rrrrrrrrrrrrrrr', 'rrrrrrrrrrrrrrr', '2023-01-24 02:17:12', 'Rape and sexual offences, Burglary, Domestic abuse', 'rrrrrrrrrrrrrrrrrrrr', 'rrrrrrrrrrrrrr', 'rrrrrrrrrrrrrrr', 'rrrrrrrrrrrrrrrrrrrrrrrrrr', 'Yes', 'No', 'service-6.png', 'certified', '135772342'),
(29, 'Assistant Sergeant', 'popopopo', 'opoppopo', 'opopoppo', '2023-01-24 02:25:36', 'Bank and credit card fraud', 'oppoopop', 'popoopop', 'opopopop', 'opopopop', 'Yes', 'Yes', 'service-2.png', 'certified', '392236148'),
(30, 'Deputy Commissioner General', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '2023-01-24 02:35:50', 'Bank and credit card fraud, Burglary', 'aaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaa', 'No', 'No', 'Torte-three.jpg', 'certified', '436625198'),
(31, 'Assistant Sergeant', '123', 'dddd', 'dddddddddddddddddd', '2023-01-24 02:46:09', 'Arson, Assault, Bank and credit card fraud', 'ccc', 'cccccccccccccc', 'cccccccccc', 'ccccccccc', 'Yes', 'No', 'photo_2020-06-02_15-45-35.jpg, Torte-one.jpg, Torte-two.jpg', 'certified', '279501362');

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
(1, '780', 'First Nam', 'Last_name', 'Constable', 'Address', 'Female', 'Mobile@Number.com', 'Phone Number', 'img/portfolio-6.jpg', 'Region', 'Country', 'Birthday', 'Adminstrator', 'Uo0GECRL', '2023-01-23 19:00:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crime_or_incident_from_website`
--
ALTER TABLE `crime_or_incident_from_website`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_no` (`document_no`);

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
-- AUTO_INCREMENT for table `crime_or_incident_from_website`
--
ALTER TABLE `crime_or_incident_from_website`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crime_registration_form`
--
ALTER TABLE `crime_registration_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `details_of_offence`
--
ALTER TABLE `details_of_offence`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `incident_reporter`
--
ALTER TABLE `incident_reporter`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `investigating_officer_form`
--
ALTER TABLE `investigating_officer_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registeree`
--
ALTER TABLE `registeree`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `register_police_officer`
--
ALTER TABLE `register_police_officer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suspected_person_detailes`
--
ALTER TABLE `suspected_person_detailes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
