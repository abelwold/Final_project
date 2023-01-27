-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 12:50 AM
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
(1, '09/09/1993', 'Addis Ababa', 'Nature of Offence', '09/09/1993', 'Location of Offence ', 173248440),
(2, '123456789', 'Location of Court', 'Nature of Offence', '123456789', ' Location of Offence', 731865695),
(3, '123456789', 'Location of Court', 'Nature of Offence', '123456789', ' Location of Offence', 731865695),
(4, '', '', '', 'DZVSDVDVZXV', '', 196187639),
(5, '', '', '', 'DZVSDVDVZXV', '', 196187639),
(6, '', '', '', 'DZVSDVDVZXV', '', 848076065),
(7, '', '', '', 'DZVSDVDVZXV', '', 848076065),
(8, '', '', 'asdfasdfafasdfaferwqrsdcvsdvergw34gwerdfsvvsdvergw45gwersdvsergwergwergfw34twerfsdfvergwerg', 'asdf', 'asdfa', 514790203),
(9, '', '', 'asdfasdfafasdfaferwqrsdcvsdvergw34gwerdfsvvsdvergw45gwersdvsergwergwergfw34twerfsdfvergwerg', 'asdf', 'asdfa', 514790203),
(10, '', '', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '', '', 230721291),
(11, '', '', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '', '', 230721291),
(12, '', '', 'bbbbbbbbbbbbbbbbbbbbbbb', '', '', 756879533),
(13, '', '', 'zxcvXDSVbreadhfcv ', '', '', 309933126),
(14, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 'rerrrrrrrrrrrrrrrrrrrreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', '', 567212442),
(15, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 'rerrrrrrrrrrrrrrrrrrrreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', '', 739979046),
(16, '77', 'll', 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', '77', 'll', 136299336),
(17, '', '', '', '', '', 194881196),
(18, '', 'gh', 'gh', '', '', 231314636),
(19, '', '', 'jhggj', '', '', 408968619),
(20, '', '', '', '', '', 740494736),
(21, '', '', 'try', '', '', 720828494),
(22, '', '', 'mmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmm', 813611799),
(23, '', '', '', '', '', 805173956),
(24, '', '', '', '', '', 803014979),
(25, '', '', '', '', '', 300120946);

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
(10, 121879581, 'MR.', 'Zsdzsd', 'Zsdv', 'Zsvzsdv', 543345, 'Sdsd', 'dsfgsf', 'Dsfgdsfg', 'Sdfgsdfg', 32523, '2023-01-12 10:13:42');

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
(1, 'Investigating officer First Name', 'Investigating officer Last Name', 123456789, 173248440),
(2, 'bbbbbbbbbbbbbbbbbbbbbbbbbb', '', 0, 756879533),
(3, 'SDV', '', 0, 309933126),
(4, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 0, 567212442),
(5, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 0, 739979046),
(6, 'll', 'll', 77, 136299336),
(7, 'SDG', '', 0, 194881196),
(8, 'gh', 'gh', 0, 231314636),
(9, 'ghhj', 'jhj', 0, 408968619),
(10, '', '', 0, 740494736),
(11, 'trytry', 'trytry', 0, 720828494),
(12, 'mmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmm', 0, 813611799),
(13, '', '', 0, 805173956),
(14, '', '', 0, 803014979),
(15, '', '', 0, 300120946);

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
(8, 'Deputy Commissioner', '3254', 'Dfdf', 'Dfs', '2023-01-12 10:13:42', 'Sdgsdf', 'Dsfgsfg', 'dsfgsfg', 'Gsdfgsdf', 'Sdfsdfs', 'Sdfgsdff', 'certified', '121879581');

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
(16, 'Identification No.', 'First Name', 'Middle Name', 'Last Name', '2023-01-18', 'Male', 'Nationality', 'Address', 'Country', 'City', 'Southern Nations', 123, 'Email', 'img/ethiopian-airlines-cargo-logo.jpg', 'Adminstrator', 'User', 'Constable', 'Position', '2023-01-04');

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
(1, 173248440, 'Abel', 'Wold', 'Nerea', '09/09/1993', 'Single', 'Aware', 'Addis Ababa', 'Addis Ababa', 911663604, '', '', 'Passport', 'img/baby3.jpg', 180, 60, 'brown', 'black', 910160622),
(2, 731865695, 'First Name', 'Middle Name', 'Last Name', '123456789', 'Married', 'Address', 'City', 'State', 0, 'img/you-are-capable-amazing-things-vector-25464976.jpg', 'img/with-girl-and-smoke-vector-12684569.jpg', 'Regional ID', 'img/vector-adventure-graphic-with-skull_150500-7.jpg', 123, 123, 'Eye Color', 'Hair Color', 0),
(3, 196187639, 'sdsdfsdds', '', '', '', 'Married', '', '', '', 0, 'img/daid3qm-1f6b8d38-e1a5-42cd-90b5-de2f3dbcbcb3.png', 'img/bafa8348fd6f1e2455f5ec5ec67247ca-sexy-lips-vector.png', 'Driving License', 'img/bob-marley-vector-30.jpg', 0, 0, '', '', 0),
(4, 848076065, 'sdsdfsdds', '', '', '', 'Married', '', '', '', 0, 'img/daid3qm-1f6b8d38-e1a5-42cd-90b5-de2f3dbcbcb3.png', 'img/bafa8348fd6f1e2455f5ec5ec67247ca-sexy-lips-vector.png', 'Driving License', 'img/bob-marley-vector-30.jpg', 0, 0, '', '', 0),
(5, 514790203, '', '', '', '', 'Married', '', '', '', 0, 'img/action-cat-illustration_97748-43.jpg', 'img/its-cool-to-be-kind-lettering-phrase-on-grunge-vector-25234566.jpg', 'Driving License', 'img/isolated-retro-vintage-microphone_225004-1112.jpg', 0, 0, '', '', 0),
(6, 230721291, 'gggggggggggggggggggggggggggg', 'gggggggggggggggggggggggg', '', '', 'Married', '', '', '', 0, 'img/unnamed (1).jpg', 'img/peace-symbol-icon-vector-9545406.jpg', 'Driving License', 'img/gorilla-head-smoke-illustration_68946-435.jpg', 0, 0, '', '', 0),
(7, 756879533, 'bbbbbbbbbbbbbbbbbbbbb', '', '', '', 'Married', '', '', '', 0, 'img/113988-OOKK0X-435.jpg', 'img/back.jpg', 'Driving License', 'img/front mom.jpg', 0, 0, '', '', 0),
(8, 309933126, '', '', '', '', 'Married', '', '', '', 0, 'img/7d80fe0caefb858391deeb46c8fb92.jpg', 'img/48b59ae1e951c0e14317c5b1c3af290.jpg', 'Driving License', 'img/73e728d17265868abaa9cfef5e157.jpg', 0, 0, '', '', 0),
(9, 567212442, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', '', '', 'Married', '', '', '', 0, 'img/e5aa0311a2d38b759a3cc4a272c2eb.jpg', 'img/ab193730a99d6b6dbda96c6438ce1f68.jpg', 'Driving License', 'img/a538cbf9643bba35528fa708da3f5.jpg', 0, 0, '', '', 0),
(10, 739979046, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', '', '', 'Married', '', '', '', 0, 'img/e5aa0311a2d38b759a3cc4a272c2eb.jpg', 'img/ab193730a99d6b6dbda96c6438ce1f68.jpg', 'Driving License', 'img/a538cbf9643bba35528fa708da3f5.jpg', 0, 0, '', '', 0),
(11, 675290301, 'll', 'll', 'll', '77', 'Single', 'll', 'll', 'll', 77, 'img/93e3452faa6f447a1764ba795f7978fc.jpg', 'img/2490c58c2534b6c2da6b1261463ac.jpg', 'Regional ID', 'img/9a3d482c2c363b2a2be6448d1942fd.jpg', 77, 77, 'll', 'll', 77),
(12, 136299336, 'll', 'll', 'll', '77', 'Single', 'll', 'll', 'll', 77, 'img/93e3452faa6f447a1764ba795f7978fc.jpg', 'img/2490c58c2534b6c2da6b1261463ac.jpg', 'Regional ID', 'img/9a3d482c2c363b2a2be6448d1942fd.jpg', 77, 77, 'll', 'll', 77),
(13, 194881196, 'jik ', '', '', '', 'Married', '', '', '', 0, 'img/dam.jpg', 'img/IMG_20200907_103658_978.jpg', 'Driving License', 'img/Screenshot_20200907-092937_Telegram.jpg', 0, 0, '', '', 0),
(14, 231314636, 'gnc', '', '', '', 'Married', '', '', '', 0, 'img/IMG-20200117-WA0000.jpg', 'img/IMG-20200117-WA0001.jpg', 'Driving License', 'img/IMG-20200117-WA0002.jpg', 0, 0, '', '', 0),
(15, 408968619, '', '', '', '', 'Married', 'hmbbm', '', '', 0, 'img/INTRODUCTION MODULE Course Descrıption.pdf', 'img/DataViz_Week1.pdf', 'Driving License', 'img/ROC_Curves.xlsx', 0, 0, '', '', 0),
(16, 740494736, '', '', '', '', 'Married', '', '', '', 0, 'img/winequality.csv', 'img/iris_dataset.csv', 'Driving License', 'img/test.xlsx', 0, 0, '', '', 0),
(17, 720828494, 'try', '', '', '', 'Married', 'vvtrytry', '', '', 0, 'img/IMG-20200115-WA0004.jpg', 'img/IMG-20200115-WA0003.jpg', 'Driving License', 'img/IMG-20191127-WA0002.jpg', 0, 0, '', '', 0),
(18, 813611799, 'mmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmm', '', '', 'Married', '', '', '', 0, 'img/IMG-20190126-WA0002.jpg', 'img/IMG-20190126-WA0003.jpg', 'Regional ID', 'img/IMG-20190126-WA0004.jpg', 0, 0, '', 'mmmmmmmmmmmmmmmm', 0),
(19, 805173956, '', '', '', '', 'Married', '', '', '', 0, 'img/best boss.jpg', 'img/Cat.jpg', 'Driving License', 'img/mouse pad 1.jpg', 0, 0, '', '', 0),
(20, 803014979, '', '', '', '', 'Married', '', '', '', 0, 'img/user_form-photo(2).jpg', 'img/user_form-photo(1).jpg', 'Driving License', 'img/photo_2022-12-19_18-26-20.jpg', 0, 0, '', '', 0),
(21, 300120946, '', '', '', '', 'Married', '', '', '', 0, 'img/image.jpg', 'img/image.jpg', 'Driving License', 'img/image.jpg', 0, 0, '', '', 0),
(22, 871465182, '', '', '', '', 'Married', '', '', '', 0, 'img/icon.png', 'img/1200px-Emirates_SkyCargo_Logo.svg.png', 'Driving License', 'img/e logo.jpg', 0, 0, '', '', 0),
(23, 115195774, 'dgsdd', '', '', '', 'Married', '', '', '', 0, 'img/photo_2020-10-27_17-43-36.jpg', 'img/83533935-smart-doctor-with-a-stethoscope-around-his-neck-with-red-heart-and-a-stethoscope-on-yel', 'Driving License', 'img/photo_2020-10-27_17-43-06.jpg', 0, 0, '', '', 0);

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
(14, '463587', 'Xzvgfhdgj', 'Sdfhgjh', 'Deputy Commander', 'Dsfhsdfhs', 'Male', 'erty@cdvfb.gf', 'Sdfhsdfh', 'img/imageedit_1_9521474837.jpg', 'Sdfhsdfh', 'Sdfhsdfh', 'sdfhsdfh', 'Adminstrator', '7bPLpUMw', '2023-01-13 16:23:05');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `incident_reporter`
--
ALTER TABLE `incident_reporter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `investigating_officer_form`
--
ALTER TABLE `investigating_officer_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registeree`
--
ALTER TABLE `registeree`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register_police_officer`
--
ALTER TABLE `register_police_officer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `suspected_person_detailes`
--
ALTER TABLE `suspected_person_detailes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
