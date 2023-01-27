-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 09:07 PM
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
-- Database: `auth_db`
--
CREATE DATABASE IF NOT EXISTS `auth_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `auth_db`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `password`) VALUES
(1, 'abel', 'abel', '$2y$10$Rlquf1q3sZtU4tstEopcaeobpajfPpTVs3hG4KDDQBLDLoaBal.bi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `crs`
--
CREATE DATABASE IF NOT EXISTS `crs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crs`;

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
(15, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 'rerrrrrrrrrrrrrrrrrrrreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', '', 739979046);

-- --------------------------------------------------------

--
-- Table structure for table `incident_reporter`
--

CREATE TABLE `incident_reporter` (
  `id` int(100) NOT NULL,
  `document_no` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middel_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` int(100) NOT NULL,
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
(1, '594042549', 'MR.', 'Abel', 'Wold', 'Nerea', '123', 0, 'Aware', 'Addis Ababa`', 'Addis Ababa', 0, '2023-01-01 08:47:59');

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
(5, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 0, 739979046);

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
(1, 'Constable', '123', 'Police', 'Officer', '2023-01-01 08:47:59', 'Incident Location', 'Nature of incident', 'Incident details', 'What motivated the incident', 'Was a report of the incident issued to the police', 'Has anyone been arrested so far in relation to the incident', 'certified', '594042549');

-- --------------------------------------------------------

--
-- Table structure for table `register_police_officer`
--

CREATE TABLE `register_police_officer` (
  `Id` int(100) NOT NULL,
  `police_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `address` int(100) NOT NULL,
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
(10, 739979046, 'reeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', '', '', 'Married', '', '', '', 0, 'img/e5aa0311a2d38b759a3cc4a272c2eb.jpg', 'img/ab193730a99d6b6dbda96c6438ce1f68.jpg', 'Driving License', 'img/a538cbf9643bba35528fa708da3f5.jpg', 0, 0, '', '', 0);

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
  `user_type` varchar(50) NOT NULL,
  `auto_password` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `identification_no`, `first_name`, `last_name`, `rank`, `address`, `gender`, `email`, `phone`, `photo`, `region`, `country`, `user_type`, `auto_password`, `created`) VALUES
(6, '123', 'Aaa', 'Aaa', 'Constable', 'Aaa', 'Male', 'a@a.a', '123', 'img/1e563597998c6c6420329c03179c808f_4bfdb112aff9620d8fd644ad8b09c704.jpg', 'Tigray', 'Aaa', 'Adminstrator', 'KnP7TYuQ', '2023-01-05 19:50:46');

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`Id`),
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `incident_reporter`
--
ALTER TABLE `incident_reporter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investigating_officer_form`
--
ALTER TABLE `investigating_officer_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registeree`
--
ALTER TABLE `registeree`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_police_officer`
--
ALTER TABLE `register_police_officer`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suspected_person_detailes`
--
ALTER TABLE `suspected_person_detailes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `db_img_update`
--
CREATE DATABASE IF NOT EXISTS `db_img_update` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_img_update`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `photo`) VALUES
(1, 'John', 'Smith', 'upload/1672126186.jpg'),
(2, 'bbb', 'bbb', 'upload/1672129666.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `oop_log_mod`
--
CREATE DATABASE IF NOT EXISTS `oop_log_mod` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `oop_log_mod`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `uemail` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'abel', 'e10adc3949ba59abbe56e057f20f883e', 'abel', 'abc@g.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"crs\",\"table\":\"user_form\"},{\"db\":\"user_db\",\"table\":\"user_form\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-12-13 13:41:31', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `users`;
--
-- Database: `user_db`
--
CREATE DATABASE IF NOT EXISTS `user_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `user_db`;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'abel', 'abenerea@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
