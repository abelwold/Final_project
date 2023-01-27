-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 10:25 PM
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
(28, 135772342, 'Mrs.', 'Y', 'Rrrrrrrrrrrr', 'Rrrrrrrrrrrrrrrrrr', 911343344, 'Rrrrrrrrrrrrr', 'rrrrrrrrrrrrr', 'Rrrrrrrrrr', 'Rrrrrrrrrrrrrr', 123, '2023-01-24 02:17:12'),
(29, 392236148, 'Mrs.', 'oppoop', 'opopoop', 'opopoppo', 911663604, 'popoopoop', 'popopooppo', 'popopoop', 'popoopop', 123, '2023-01-24 02:25:36'),
(30, 436625198, 'MS.', 'ssssssssss', 'ssssssssss', 'ssssssssssssssssss', 911663604, 'gggggggg', 'gggg', 'gggggggggggg', 'ggg', 123, '2023-01-24 02:35:50'),
(32, 875681354, 'MS.', 'Field Required', 'Field Required', 'Field Required', 911, 'Field Required ', 'Field Required ', 'Field Required ', 'Field Required ', 0, '2023-01-24 06:58:48'),
(33, 422692348, 'Mrs.', 'Incident', 'Incident', 'Incident', 911111111, 'Street Address', 'Street Address', 'Street Address', 'Street Address', 0, '2023-01-24 07:17:06'),
(34, 892081379, 'MS.', 'try', 'try', 'try', 911111111, 'treet Address', 'treet Address', 'treet Address', 'treet Address', 0, '2023-01-24 09:43:09'),
(35, 577845446, 'Mrs.', 'FU', 'FU', 'FU', 911111111, 'FU', 'FU', 'FU', 'FU', 0, '2023-01-27 02:38:55'),
(36, 386628031, 'MS.', 'ame', 'ame', 'ame', 911111111, 'ddr', 'ddr', 'ddr', 'ddr', 0, '2023-01-27 02:50:32'),
(37, 672524102, 'MS.', 'Name', 'Name', 'Name', 911111111, 'eet Address', 'eet Address', 'eet Address', 'eet Address', 0, '2023-01-27 02:46:49'),
(38, 770521550, 'MR.', 'First ', 'Middel ', 'Last ', 911111111, 'Street ', 'Street ', ' City ', ' City ', 0, '2023-01-27 02:55:03'),
(39, 759106181, 'MS.', 'me', 'me', 'me', 911111111, 'me', 'me', 'me', 'me', 0, '2023-01-27 04:42:10'),
(40, 282053291, 'MS.', 'st Na', 'st Na', 'st Na', 911111111, 'st Na', 'st Na', 'City', ' State/Province', 0, '2023-01-27 04:48:53'),
(41, 650562504, 'MS.', 'please provide ', 'please provide ', 'please provide ', 911111111, 'please provide', 'please provide', 'please provide', 'please provide', 0, '2023-01-27 04:51:31'),
(42, 287027914, 'Mrs.', 'information', 'information', 'information', 911111111, 'informationinformation', 'information', 'information', 'information', 0, '2023-01-27 04:53:05'),
(43, 881149651, 'MS.', 'report ', 'report report ', 'report report ', 911111111, 'Address', 'Address', 'Address', 'Address', 0, '2023-01-27 04:55:48'),
(44, 554698422, 'MS.', 'vad', 'dsv', 'dsv', 911111111, 'Address', 'Address', 'Address', 'Address', 0, '2023-01-27 09:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `investigating_officer_form`
--

CREATE TABLE `investigating_officer_form` (
  `id` int(100) NOT NULL,
  `Investigating_off_first_name` varchar(100) NOT NULL,
  `Investigating_off_last_name` varchar(100) NOT NULL,
  `Investigating_off_id` varchar(100) NOT NULL,
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
  `date_of_incident` varchar(25) NOT NULL,
  `evidence` varchar(200) NOT NULL,
  `certify` varchar(100) NOT NULL,
  `whichuser` varchar(20) NOT NULL,
  `read_status` int(1) NOT NULL,
  `document_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeree`
--

INSERT INTO `registeree` (`id`, `rank`, `identification_no`, `first_name_registeree`, `last_name_registeree`, `date`, `crime_type`, `incident_location`, `nature_incident`, `incident_details`, `incident_motivated`, `report_before`, `arreseted`, `date_of_incident`, `evidence`, `certify`, `whichuser`, `read_status`, `document_no`) VALUES
(8, 'Constable', 'Register Incident1', 'Register Incident1', 'Register Incident1', '2023-01-23 10:31:29', '', 'Register Incident1', 'Register Incident1', 'Register Incident1', 'Register Incident1', 'Register Incident1', 'Register Incident1', '', '', 'certified', '', 1, '505446422'),
(9, 'Assistant Sergeant', 'Register Incident2', 'Register Incident2', 'Register Incident2', '2023-01-23 10:32:02', 'Bank And Credit Card Fraud', 'Register Incident2', 'Register Incident2', 'Register Incident2', 'Register Incident2', 'Yes', 'Yes', '', '', 'certified', '', 1, '189678268'),
(10, 'Constable', 'Register Incident3', 'Register Incident3', 'Register Incident3', '2023-01-23 10:32:34', ',', 'Register Incident3', 'Register Incident3', 'Register Incident3', 'Register Incident3', 'Yes', 'Yes', '', '', 'certified', '', 1, '809703402'),
(11, 'Constable', 'Identification No', '  Identification No First Name', 'Last Name', '2023-01-23 10:58:33', '', 'Incident Location (Please provide specific details):', 'Nature of incident:', 'Incident details:', 'What motivated the incident?:', 'Do_not_know', 'Do_not_know', '', '', 'certified', '', 1, '594403054'),
(12, 'Inspector', 'ffffffffffffffffffffff', 'ffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffff', '2023-01-23 11:06:36', 'Drink / drug driving', 'fffffff', 'fffffffffffffffffffff', 'ffffffffff', 'ffffffffffff', 'Yes', 'Yes', '', '', 'certified', '', 1, '540492325'),
(13, 'Sergeant', 'ssssssssssssss', 'ssssssssssssssssssssss', 'ssssssssssssssssssssss', '2023-01-23 11:45:11', 'Arson', 'sssssssssssssssssssssss', 'sssssssssssssss', 'ssssssssssssssssssssssss', 'ssssssssssssssssssss', 'No', 'No', '', '', 'certified', '', 1, '840994590'),
(14, 'Constable', 'f', 'f', 'f', '2023-01-24 12:00:08', 'Array', 'f', 'f', 'f', 'f', 'Yes', 'Yes', '', '', 'certified', '', 1, '102133046'),
(15, 'Deputy Inspector', '1', 'd', 'q', '2023-01-24 12:02:12', 'Array', 'd', 'd', 'd', 'd', 'Yes', 'Yes', '', '', 'certified', '', 1, '334993279'),
(16, 'Assistant Inspector', 'we', 'we', 'ew', '2023-01-24 12:03:37', 'Array', 'ew', 'ew', 'ew', 'ew', 'No', 'Yes', '', '', 'certified', '', 1, '620813028'),
(17, 'Assistant Sergeant', 'v', 'v', 'v', '2023-01-24 12:05:58', 'Burglary, Child abuse', 'v', 'v', 'v', 'v', 'Yes', 'Yes', '1/24/2023', '', 'certified', '', 1, '287213079'),
(18, 'Assistant Commissioner', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaa', '2023-01-24 12:25:56', 'Arson, Child abuse, Domestic abuse', 'aaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'Yes', 'Yes', '', '', 'certified', '', 1, '106880405'),
(19, 'Assistant Commissioner', '123', 'ccccccc', 'ccccccccc', '2023-01-24 12:33:07', 'Bank and credit card fraud, Computer misuse, Burglary', 'cccccc', 'cccccccccccccccccc', 'ccccc', 'ccccccccccccccccccccc', 'No', 'Yes', '', '', 'certified', '', 1, '801791285'),
(20, 'Constable', '123', 'zzzzzzzz', 'zzzzzzzzzzzz', '2023-01-24 01:13:20', 'Burglary, Hate crime', 'zzzz', 'zzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzz', 'zzzzz', 'No', 'Yes', '', 'client-1.png, client-2.png', 'certified', '', 1, '112209730'),
(21, 'Chief Sergeant', '123', 'Incident ', 'Incident ', '2023-01-24 01:17:47', 'Illegal tobacco, Counterfeiting and piracy, Computer misuse', 'Incident ', 'Incident ', 'Incident ', 'Incident ', 'No', 'Yes', '', 'r-post-1.jpg, r-post-2.jpg, r-post-3.jpg, r-post-4.jpg', 'certified', '', 1, '467660415'),
(22, 'Deputy Sergeant', '123', 'vvvvvvv', 'vvvvvvvvvv', '2023-01-24 01:57:39', 'Bank and credit card fraud, Computer misuse', 'vvvvvvv', 'vvvvvvvvvv', 'vvvvvvvvvv', 'vvvvvvvvvvv', 'No', 'No', '', 'blog-1.jpg, blog-2.jpg, blog-3.jpg', 'certified', '', 1, '112163425'),
(23, 'Assistant Sergeant', 'ooooooooo', 'oooooooooooo', 'ooooooooooo', '2023-01-24 02:00:35', 'Computer misuse, Drugs', 'oooooooooo', 'oooooooooooo', 'ooooooooooo', 'ooooooooooooooooooooooooo', 'No', 'Yes', '', 'blog-3.jpg, blog-4.jpg, blog-5.jpg', 'certified', '', 1, '395179314'),
(24, 'Commander', '123', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', '2023-01-24 02:04:11', 'Child abuse, Counterfeiting and piracy, Domestic abuse', 'xxxxxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxx', 'xxxxxxxxxxxxxxx', 'Yes', 'Yes', '', 'blog-c-7.jpg, blog-c-8.jpg', 'certified', '', 1, '283303049'),
(25, 'Constable', 'uuuuuuuu', 'uuuuuuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuu', '2023-01-24 02:08:21', 'Gun crime, Bank and credit card fraud, Burglary', 'uuuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuuu', 'uuuuuuuu', 'uuuuuuuuuuuuuuuuuuuuuu', 'Do_not_know', 'Do_not_know', '', 'special-1.png, special-2.png', 'certified', '', 1, '824254932'),
(26, 'Deputy Sergeant', 'cccccccccccc', 'cccccccccccccccccc', 'ccccccccccc', '2023-01-24 02:13:04', 'Assault, Burglary', 'ccccccccccc', 'ccccccccccccccccc', 'cccccccccccc', 'ccccc', 'Yes', 'Yes', '', 'special-1.png, special-2.png', 'certified', '', 1, '546651827'),
(27, 'Assistant Commissioner', 'cc', 'ccc', 'cccccccccccccccccc', '2023-01-24 02:15:35', 'Child abuse, Counterfeiting and piracy', 'ccccccccccc', 'cccccccccccccccccc', 'cccccccccccccc', 'ccccccc', 'No', 'No', '', 'service-3.png, service-4.png', 'certified', '', 1, '378963641'),
(28, 'Deputy Commander', '123', 'Rrrrrrrrrrrrrrr', 'Rrrrrrrrrrrrrrr', '2023-01-24 02:17:12', 'Drugs,Harassment', 'Rrrrrrrrrrrrrrrrrrrr', 'Rrrrrrrrrrrrrr', 'Rrrrrrrrrrrrrr', 'Rrrrrrrrrrrrrrrrrrrrrrrrrr', 'Yes', 'Yes', '', 'service-6.png', 'certified', '', 1, '135772342'),
(29, 'Assistant Sergeant', 'popopopo', 'opoppopo', 'opopoppo', '2023-01-24 02:25:36', 'Bank and credit card fraud', 'oppoopop', 'popoopop', 'opopopop', 'opopopop', 'Yes', 'Yes', '', 'service-2.png', 'certified', '', 1, '392236148'),
(30, 'Deputy Commissioner General', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '2023-01-24 02:35:50', 'Bank and credit card fraud, Burglary', 'aaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaa', 'No', 'No', '', 'Torte-three.jpg', 'certified', '', 1, '436625198'),
(32, 'Chief Sergeant', 'Field Required', 'Field Required', 'Field Required', '2023-01-24 06:58:48', 'Assault, Bank and credit card fraud', 'Field Required', 'Field Required', 'Field Required', 'Field Required', 'Yes', 'Yes', '', '', 'certified', '', 1, '875681354'),
(33, 'Constable', 'Identification No', 'First Name', 'First Name', '2023-01-24 07:17:06', 'Arson,Bank and credit card fraud,Burglary', 'First Name', 'First Name', 'First Name', 'First Name', 'Yes', 'Yes', '', 'client-2.png', 'certified', '', 1, '422692348'),
(34, 'Constable', '000000Identification No', 'Identification No', 'Identification No', '2023-01-24 09:43:09', 'Burglary,Bank and credit card fraud', 'Identification No', 'Identification No', 'Identification No', 'Identification No', 'No', 'Yes', '2023-01-24', 'portfolio-9.jpg', 'certified', '', 1, '892081379'),
(35, 'Assistant Sergeant', 'FU00', 'FU', 'FU', '2023-01-27 02:38:55', 'Arson,Assault,Bank and credit card fraud,Burglary', 'FU', 'FU', 'FU', 'FU', 'Yes', 'Yes', '2023-01-27', 'toppers3.jpg', 'certified', '', 1, '577845446'),
(36, 'Sergeant', 'if', 'if', 'if', '2023-01-27 02:50:32', 'Arson,Assault,Bank and credit card fraud,Burglary', 'if', 'if', 'if', 'if', 'Yes', 'Yes', '2023-01-27', 'Hot Red Heart Cake 1kg.png', 'certified', '', 1, '386628031'),
(37, 'Deputy Inspector', 'Identification No', 'Identification No', 'Identification No', '2023-01-27 02:46:49', 'Arson,Assault,Bank and credit card fraud', 'Incident Location', 'Incident Location', 'Incident Location', 'Incident Location', 'Yes', 'Yes', '2023-01-27', 'Hot Red Heart Cake 1kg.jpg', 'certified', '', 1, '672524102'),
(38, 'Assistant Sergeant', 'No', 'Name', 'Name', '2023-01-27 02:55:03', 'Arson,Bank and credit card fraud', 'details', 'Nature ', 'Incident ', 'motivated ', 'Yes', 'Yes', '2023-01-20', 'Hot_Red_Heart_Cake_1kg.jpg', 'certified', '', 1, '770521550'),
(39, 'Constable', 'No', 'No', 'No', '2023-01-27 04:42:10', 'Arson,Assault', 'No', 'No', 'No', 'No', 'No', 'No', '2023-01-27', 'Stars-Thumbnail.jpg', 'certified', '', 1, '759106181'),
(40, 'Assistant Sergeant', 'ca', 'ca', 'ca', '2023-01-27 04:48:53', 'Burglary', 'ca', 'ca', 'ca', 'ca', 'Yes', 'Yes', '2023-01-27', 'a4fe59_08172593270846729e640ae7a24c4264.jpg_srz_1903_1288_85_22_0.50_1.20_0.00_jpg_srz.jpg', 'certified', '', 1, '282053291'),
(41, 'Deputy Commander', 'Register ', 'Register Register ', 'Register ', '2023-01-27 04:51:31', 'Assault', 'Register ', 'Register ', 'Register ', 'Register ', 'No', 'Yes', '2023-01-05', 'Anniversary_cake_with_Roses_1_Kg_950_Rs._-_Copy-500x500.jpg', 'certified', 'User', 1, '650562504'),
(42, 'Deputy Commissioner', 'No', 'No', 'Name', '2023-01-27 04:53:05', 'Assault', 'Name', 'Name', 'Name', 'Name', 'No', 'Yes', '2023-01-27', 'CCBB-happy-birthday-chocolate-cake.jpg', 'certified', '', 1, '287027914'),
(43, 'Assistant Inspector', 'Register ', 'Register ', 'Register ', '2023-01-27 04:55:48', 'Bank and credit card fraud', 'Register ', 'Register ', 'Register ', 'Register ', 'Do_not_know', 'Do_not_know', '2023-01-27', '6a00d8341eaaf053ef013485f93484970c-400wi.jpg', 'certified', 'Adminstrator', 1, '881149651');

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
(3, 'Identification mo.', 'First Name', 'Middle Name', 'Last Name', '2023-01-25', 'Male', 'Nationality', 'Address', 'Country', 'City', 'Tigray', 911111111, 'E@r.o', 'Police_Officer/chef-1.jpg', 'User', 'User', 'Constable', 'Position', '2023-01-25'),
(5, 'i', 'i', 'i', 'i', '2023-01-26', 'Male', 'e@r.o', 'e@r.o', 'e@r.o', 'e@r.o', 'Southern Nations', 911111111, 'e@r.oo', 'Police_Officer/checkout-card.png', 'Adminstrator', 'Adminstrator', 'Deputy Commander', 'i', '2023-01-26'),
(6, 'ion', 'ion', 'ion', 'ion', '2023-01-26', 'Male', 'ion', 'ion', 'ion', 'ion', 'Gambella', 911111111, 'e@r.oo', 'Police_Officer/slider-14.jpg', 'User', 'User', 'Constable', 'ion', '2023-01-26'),
(7, 'v', 'v', 'v', 'v', '2023-01-26', 'Female', 'v', 'v', 'v', 'v', 'Harari ', 911111111, 'v@g.o', 'Police_Officer/slider-2.jpg', 'User', 'User', 'Inspector', 'v', '2023-01-26'),
(8, 'f', 'f', 'f', 'f', '2023-01-26', 'Male', 'g', 'g', 'g', 'g', 'Southern Nations', 911111111, 'e@r.oo', 'Police_Officer/slider-4.jpg', 'Adminstrator', 'User', 'Deputy Inspector', 'f', '2023-01-26');

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
(1, 286297065, 'First Name', 'Middle Name', 'Last Name', '2023-01-24', 'Single', 'Address', 'City', 'State', 911111111, 'suspected_person_detailes/output-onlinepngtools.png', 'suspected_person_detailes/portfolio-2.jpg', 'Passport', 'suspected_person_detailes/portfolio-3.jpg', 111, 111, 'Eye Color', 'Hair Color', 911111111);

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
(1, '780', 'First Nam', 'Last_name', 'Assistant Sergeant', 'Address', 'Male', 'def@sDV.dfg', 'Phone Number', 'img/portfolio-6.jpg', 'Region', 'Country', 'Birthday', 'User', 'Sdvv', '2023-01-26 23:20:16'),
(2, '123', 'First Name', 'Last Name', 'Constable', 'Address', 'Female', 'a@a.a', '911663604', 'img/w-img81.jpg', 'Tigray', 'Country', '1/24/2023', 'Adminstrator', '2dPtAU8I', '2023-01-26 21:11:25');

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
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `investigating_officer_form`
--
ALTER TABLE `investigating_officer_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registeree`
--
ALTER TABLE `registeree`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `register_police_officer`
--
ALTER TABLE `register_police_officer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suspected_person_detailes`
--
ALTER TABLE `suspected_person_detailes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
