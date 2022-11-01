-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 04:45 PM
-- Server version: 5.7.36-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `mtp_application_info`
--

CREATE TABLE `mtp_application_info` (
  `id_number` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `app_no` varchar(10) DEFAULT NULL,
  `roll_no` varchar(10) DEFAULT NULL,
`air` varchar(10) DEFAULT NULL,
`name` varchar(100) DEFAULT NULL,
`course` varchar(100) DEFAULT NULL,
`iitp_roll_no` varchar(10) DEFAULT NULL,
`branch` varchar(100) DEFAULT NULL,
`dob` varchar(10) DEFAULT NULL,
`gender` varchar(100) DEFAULT NULL,
`blood grp` varchar(100) DEFAULT NULL,
`ht` varchar(100) DEFAULT NULL,
`wt` varchar(100) DEFAULT NULL,
`category` varchar(100) DEFAULT NULL,
-- `pwd` varchar(100) DEFAULT NULL,
`caste` varchar(100) DEFAULT NULL,
`religion` varchar(100) DEFAULT NULL,
`fathers_name` varchar(100) DEFAULT NULL,
`income` varchar(100) DEFAULT NULL,
`area` varchar(100) DEFAULT NULL,
`res_mailing` varchar(100) DEFAULT NULL,
`res_mail_nearest_police` varchar(100) DEFAULT NULL,
`per_mailing` varchar(100) DEFAULT NULL,
`per_mailing_nearest_police` varchar(100) DEFAULT NULL,
  -- `personal_full_name` varchar(100) DEFAULT NULL,
  -- `personal_gender` varchar(100) DEFAULT NULL,
  -- `personal_fathers_name` varchar(100) DEFAULT NULL,
  -- `personal_birth_category` varchar(100) DEFAULT NULL,
  -- `personal_date_of_birth` date DEFAULT NULL,
  -- `personal_address` varchar(500) DEFAULT NULL,
  -- `personal_state` varchar(100) DEFAULT NULL,
  -- `personal_nationality` varchar(100) DEFAULT NULL,
  -- `personal_pincode` varchar(10) DEFAULT NULL,
  -- `personal_contact` varchar(12) DEFAULT NULL,
  -- `personal_email` varchar(100) DEFAULT NULL,
  -- `personal_marital_status` varchar(10) DEFAULT NULL,
  -- `personal_disable_status` varchar(10) DEFAULT NULL,
  -- `tenth_equi_exam_passed` varchar(100) DEFAULT NULL,
  -- `tenth_equi_school_name` varchar(200) DEFAULT NULL,
  -- `tenth_equi_board_name` varchar(200) DEFAULT NULL,
  -- `tenth_equi_passing_year` varchar(10) DEFAULT NULL,
  -- `tenth_equi_percentage` varchar(10) DEFAULT NULL,
  -- `tenth_equi_out_of` varchar(10) DEFAULT NULL,
  -- `tenth_equi_complete_status` varchar(10) DEFAULT NULL,
  -- `tenth_equi_notes_if_any` varchar(500) DEFAULT NULL,
  -- `inter_equi_exam_passed` varchar(100) DEFAULT NULL,
  -- `inter_equi_school_name` varchar(200) DEFAULT NULL,
  -- `inter_equi_board_name` varchar(200) DEFAULT NULL,
  -- `inter_equi_passing_year` varchar(10) DEFAULT NULL,
  -- `inter_equi_percentage` varchar(10) DEFAULT NULL,
  -- `inter_equi_out_of` varchar(10) DEFAULT NULL,
  -- `inter_equi_complete_status` varchar(10) DEFAULT NULL,
  -- `inter_equi_notes_if_any` varchar(500) DEFAULT NULL,
  -- `ug_exam_passed` varchar(100) DEFAULT NULL,
  -- `ug_degree_name` varchar(100) DEFAULT NULL,
  -- `ug_discipline` varchar(100) DEFAULT NULL,
  -- `ug_college_name` varchar(200) DEFAULT NULL,
  -- `ug_univeristy_name` varchar(200) DEFAULT NULL,
  -- `ug_passing_year` varchar(10) DEFAULT NULL,
  -- `ug_percentage` varchar(10) DEFAULT NULL,
  -- `ug_out_of` varchar(10) DEFAULT NULL,
  -- `ug_complete_status` varchar(10) DEFAULT NULL,
  -- `ug_notes_if_any` varchar(500) DEFAULT NULL,
  -- `pg_1_exam_passed` varchar(100) DEFAULT NULL,
  -- `pg_1_pg_degree_name` varchar(200) DEFAULT NULL,
  -- `pg_1_discipline` varchar(200) DEFAULT NULL,
  -- `pg_1_college_name` varchar(200) DEFAULT NULL,
  -- `pg_1_univeristy_name` varchar(200) DEFAULT NULL,
  -- `pg_1_passing_year` varchar(10) DEFAULT NULL,
  -- `pg_1_percentage` varchar(10) DEFAULT NULL,
  -- `pg_1_out_of` varchar(10) DEFAULT NULL,
  -- `pg_1_complete_status` varchar(10) DEFAULT NULL,
  -- `pg_1_notes_if_any` varchar(500) DEFAULT NULL,
  -- `pg_2_exam_passed` varchar(100) DEFAULT NULL,
  -- `pg_2_pg_degree_name` varchar(200) DEFAULT NULL,
  -- `pg_2_discipline` varchar(200) DEFAULT NULL,
  -- `pg_2_college_name` varchar(200) DEFAULT NULL,
  -- `pg_2_univeristy_name` varchar(200) DEFAULT NULL,
  -- `pg_2_passing_year` varchar(10) DEFAULT NULL,
  -- `pg_2_percentage` varchar(10) DEFAULT NULL,
  -- `pg_2_out_of` varchar(10) DEFAULT NULL,
  -- `pg_2_complete_status` varchar(10) DEFAULT NULL,
  -- `pg_2_notes_if_any` varchar(500) DEFAULT NULL,
  -- `other_exam_passed` varchar(100) DEFAULT NULL,
  -- `other_pg_degree_name` varchar(100) DEFAULT NULL,
  -- `other_discipline` varchar(100) DEFAULT NULL,
  -- `other_college_name` varchar(100) DEFAULT NULL,
  -- `other_univeristy_name` varchar(100) DEFAULT NULL,
  -- `other_passing_year` varchar(10) DEFAULT NULL,
  -- `other_percentage` varchar(10) DEFAULT NULL,
  -- `other_out_of` varchar(10) DEFAULT NULL,
  -- `other_complete_status` varchar(10) DEFAULT NULL,
  -- `other_notes_if_any` varchar(500) DEFAULT NULL,
  -- `work_1_experience_type` varchar(100) DEFAULT NULL,
  -- `work_1_organization_name` varchar(100) DEFAULT NULL,
  -- `work_1_position` varchar(100) DEFAULT NULL,
  -- `work_1_from_date` date DEFAULT NULL,
  -- `work_1_to_date` date DEFAULT NULL,
  -- `work_1_experience_duration` varchar(100) DEFAULT NULL,
  -- `work_1_nature_of_work` varchar(100) DEFAULT NULL,
  -- `work_1_current_job` varchar(100) DEFAULT NULL,
  -- `work_2_experience_type` varchar(100) DEFAULT NULL,
  -- `work_2_organization_name` varchar(100) DEFAULT NULL,
  -- `work_2_position` varchar(100) DEFAULT NULL,
  -- `work_2_from_date` date DEFAULT NULL,
  -- `work_2_to_date` date DEFAULT NULL,
  -- `work_2_experience_duration` varchar(100) DEFAULT NULL,
  -- `work_2_nature_of_work` varchar(100) DEFAULT NULL,
  -- `work_2_current_job` varchar(100) DEFAULT NULL,
  -- `work_3_experience_type` varchar(100) DEFAULT NULL,
  -- `work_3_organization_name` varchar(100) DEFAULT NULL,
  -- `work_3_position` varchar(100) DEFAULT NULL,
  -- `work_3_from_date` date DEFAULT NULL,
  -- `work_3_to_date` date DEFAULT NULL,
  -- `work_3_experience_duration` varchar(100) DEFAULT NULL,
  -- `work_3_nature_of_work` varchar(100) DEFAULT NULL,
  -- `work_3_current_job` varchar(100) DEFAULT NULL,
  -- `mtech_application_category` varchar(100) DEFAULT NULL,
  -- `mtech_department` varchar(100) DEFAULT NULL,
  -- `mtech_is_your_btech_from_iit` varchar(100) DEFAULT NULL,
  -- `gate_registration_no` varchar(100) DEFAULT NULL,
  -- `gate_paper_code` varchar(100) DEFAULT NULL,
  -- `gate_coap_registration_no` varchar(100) DEFAULT NULL,
  -- `gate_score_out_of_1000` varchar(100) DEFAULT NULL,
  -- `gate_rank` varchar(100) DEFAULT NULL,
  -- `gate_valid_from` date DEFAULT NULL,
  -- `gate_valid_upto` date DEFAULT NULL,
  -- `gate_notes_if_any` varchar(500) DEFAULT NULL,
  -- `payment_method` varchar(100) DEFAULT NULL,
  -- `payment_reference_number` varchar(100) DEFAULT NULL,
  -- `payment_amount` varchar(100) DEFAULT NULL,
  `app_id` varchar(100) DEFAULT NULL,
  `filled_status` int(1) DEFAULT NULL,
  `added_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtp_application_info`
--

INSERT INTO `mtp_application_info` (`id_number`,
`email`,
  `app no`,
  `roll no`,
`air`,
`name`,
`course`,
`iitp roll no`,
`branch`,
`dob`,
`gender`,
`blood grp`,
`ht`,
`wt`,
`category`,
`caste`,
`religion`,
`fathers_name`,
`income`,
`area`,
`res.mailing`,
`res.mail.nearest.police`,
`per.mailing`,
`per.mailing.nearest.police`, `app_id`, `filled_status`, `added_updated`) VALUES
(1, 'mayank265@gmail.com',  NULL, NULL, NULL,  NULL, NULL, NULL, NULL, NULL, NULL,NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,NULL,NULL,NULL, '2022-03-23 08:16:46');
(2,'aditya_2001ee03@iitp.ac.in', NULL, NULL,  NULL, NULL, NULL, NULL, NULL, NULL, NULL,NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,NULL,NULL,NULL, '2022-03-23 08:16:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtp_application_info`
--
ALTER TABLE `mtp_application_info`
  ADD PRIMARY KEY (`id_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mtp_application_info`
--
ALTER TABLE `mtp_application_info`
  MODIFY `id_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
