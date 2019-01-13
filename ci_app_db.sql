-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 07:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appt_id` int(12) NOT NULL,
  `appt_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `appt_time` time NOT NULL,
  `appt_doctor_id` int(12) NOT NULL,
  `appt_patient_id` int(12) NOT NULL,
  `appt_visit_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(12) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Health'),
(2, 'Beauty');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(12) NOT NULL,
  `d_fname` varchar(30) NOT NULL,
  `d_sname` varchar(30) NOT NULL,
  `d_lname` varchar(30) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_phone` int(14) NOT NULL,
  `d_address` varchar(50) NOT NULL,
  `d_salary` float NOT NULL,
  `d_employ_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `d_speciality_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(12) NOT NULL,
  `emp_fname` varchar(30) NOT NULL,
  `emp_sname` varchar(30) NOT NULL,
  `emp_lname` varchar(30) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_phone` int(14) NOT NULL,
  `emp_address` varchar(50) NOT NULL,
  `emp_salary` float NOT NULL,
  `emp_employ_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_fname`, `emp_sname`, `emp_lname`, `emp_email`, `emp_phone`, `emp_address`, `emp_salary`, `emp_employ_date`) VALUES
(1, 'Rabab', 'Mojahed', 'Shalan', 'rabab@gmail.com', 777001122, 'Al-Rudah-Sanaa', 800, '2019-01-13 15:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(12) NOT NULL,
  `p_fname` varchar(30) NOT NULL,
  `p_sname` varchar(30) NOT NULL,
  `p_lname` varchar(30) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_phone` int(14) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `rec_id` int(12) NOT NULL,
  `rec_visit_id` int(12) NOT NULL,
  `rec_appt_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(12) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `c_id` int(12) NOT NULL,
  `s_description` text NOT NULL,
  `s_img` varchar(50) DEFAULT NULL,
  `s_emp_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_title`, `c_id`, `s_description`, `s_img`, `s_emp_id`) VALUES
(32, 'Boold examination', 2, '<p>The&nbsp;<strong>Hello World</strong>&nbsp;project is a time-honored tradition in computer programming. It is a simple exercise that gets you started when learning something new. Let&rsquo;s get started with GitHub!</p>\r\n\r\n<p>A&nbsp;<strong>repository</strong>&nbsp;is usually used to organize a single project. Repositories can contain folders and files, images, videos, spreadsheets, and data sets &ndash; anything your project needs. We recommend including a&nbsp;<em>README</em>, or a file with information about your project. GitHub makes it easy to add one at the same time you create your new repository.&nbsp;<em>It also offers other common options such as a license file</em></p>\r\n', 'yellow.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

CREATE TABLE `specialty` (
  `specialty_id` int(12) NOT NULL,
  `specialty_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(12) NOT NULL,
  `u_username` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_username`, `u_password`, `u_email`, `u_registered_date`) VALUES
(1, 'Rabab', '202cb962ac59075b964b07152d234b70', 'rabab.shaalan@gmail.com', '2019-01-12 13:34:37'),
(2, 'Rabab', '202cb962ac59075b964b07152d234b70', 'rabab.shaalan@gmail.com', '2019-01-12 13:57:30'),
(3, 'Rabab', '202cb962ac59075b964b07152d234b70', 'rabab.shaalan@gmail.com', '2019-01-12 13:57:58'),
(4, 'Rabab', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'rabab.shaalan@gmail.com', '2019-01-12 13:59:41'),
(5, 'Rabab', 'c20ad4d76fe97759aa27a0c99bff6710', 'rabab.shaalan@gmail.com', '2019-01-12 14:00:19'),
(6, 'Rabab', '6512bd43d9caa6e02c990b0a82652dca', 'rabab.shaalan@gmail.com', '2019-01-12 14:02:20'),
(7, 'Rabab', 'c20ad4d76fe97759aa27a0c99bff6710', 'rabab.shaalan@gmail.com', '2019-01-12 14:03:39'),
(8, 'Rabab', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'rabab.shaalan@gmail.com', '2019-01-12 14:05:33'),
(9, 'Rabab', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'rabab.shaalan@gmail.com', '2019-01-12 14:10:05'),
(10, 'Aisha', 'a381bedb5d4478053eb04be35f8798dd', 'aisha@gmail.com', '2019-01-12 16:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `visit_id` int(12) NOT NULL,
  `v_diagnose` text NOT NULL,
  `v_treatment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appt_id`),
  ADD KEY `appt_patient_id_fk` (`appt_patient_id`),
  ADD KEY `appt_doctor_id_fk` (`appt_doctor_id`),
  ADD KEY `appt_visit_id_fk` (`appt_visit_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_email` (`d_email`),
  ADD KEY `d_specialty_id_fk` (`d_speciality_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_email` (`p_email`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`rec_id`),
  ADD KEY `rec_appt_id_fk` (`rec_appt_id`),
  ADD KEY `rec_visit_id_fk` (`rec_visit_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_emp_id_fk` (`s_emp_id`);

--
-- Indexes for table `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`specialty_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appt_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `visit_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appt_doctor_id_fk` FOREIGN KEY (`appt_doctor_id`) REFERENCES `doctor` (`d_id`),
  ADD CONSTRAINT `appt_patient_id_fk` FOREIGN KEY (`appt_patient_id`) REFERENCES `patient` (`p_id`),
  ADD CONSTRAINT `appt_visit_id_fk` FOREIGN KEY (`appt_visit_id`) REFERENCES `visit` (`visit_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `d_specialty_id_fk` FOREIGN KEY (`d_speciality_id`) REFERENCES `specialty` (`specialty_id`) ON DELETE CASCADE;

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `rec_appt_id_fk` FOREIGN KEY (`rec_appt_id`) REFERENCES `appointment` (`appt_id`),
  ADD CONSTRAINT `rec_visit_id_fk` FOREIGN KEY (`rec_visit_id`) REFERENCES `visit` (`visit_id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `s_emp_id_fk` FOREIGN KEY (`s_emp_id`) REFERENCES `employee` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
