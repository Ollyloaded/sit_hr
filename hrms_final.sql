-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 06:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
(0, ''),
(1, '827ccb0eea8a706c4c34a16891f84e7b'),
(10, '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` varchar(225) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `regions_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `regions_id`) VALUES
('c1', 'Bangladesh', 'r1'),
('c2', 'UK', 'r2'),
('c3', 'Rassia', 'r5'),
('c4', 'USA', 'r4'),
('c5', 'China', 'r5');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` varchar(225) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `locations_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `locations_id`) VALUES
('d1', 'Electric', 'l1'),
('d2', 'Electric', 'l2'),
('d3', 'Finance', 'l3'),
('d4', 'Business', 'l5'),
('d5', 'HR', 'l4');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` varchar(225) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone_number` varchar(225) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `salary` varchar(225) DEFAULT NULL,
  `jobs_id` varchar(225) NOT NULL,
  `departments_id` varchar(225) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone_number`, `hire_date`, `salary`, `jobs_id`, `departments_id`, `password`) VALUES
('e1', 'Sohel', 'mdsrana11@gmail.com', '6567576', '2020-02-22', '50000', 'j1', 'd1', '827ccb0eea8a706c4c34a16891f84e7b'),
('e2', 'Rana', 'mdsrana11@gmail.com', '6567576', '2020-02-22', '55000', 'j2', 'd1', '827ccb0eea8a706c4c34a16891f84e7b'),
('e3', 'Rakib', 'mdsrana11@gmail.com', '6567576', '2018-02-22', '50000', 'j4', 'd4', '827ccb0eea8a706c4c34a16891f84e7b'),
('e4', 'Rahim', 'mdsrana11@gmail.com', '6567576', '2018-02-22', '20000', 'j1', 'd5', '827ccb0eea8a706c4c34a16891f84e7b'),
('e5', 'Joe', 'mdsrana11@gmail.com', '6567576', '2017-02-22', '50000', 'j3', 'd3', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` varchar(225) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `min_salary` varchar(225) DEFAULT NULL,
  `max_salary` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `min_salary`, `max_salary`) VALUES
('j1', 'Software Engineer', '25000', '120000'),
('j2', 'Sr. Software Engineer', '40000', '150000'),
('j3', 'Electric Enginner', '20000', '120000'),
('j4', 'Sr. Electric Engineer', '40000', '150000'),
('j5', 'Sr. Network Engineer', '40000', '150000');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_histories`
--

CREATE TABLE `jobs_histories` (
  `jobs_id` varchar(225) NOT NULL,
  `departments_id` varchar(225) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `employees_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs_histories`
--

INSERT INTO `jobs_histories` (`jobs_id`, `departments_id`, `start_date`, `end_date`, `employees_id`) VALUES
('j1', 'd1', '2018-02-02', '2022-02-02', 'e2'),
('j2', 'd1', '2017-02-02', '2022-02-02', 'e2'),
('j3', 'd2', '2017-02-02', '2022-02-02', 'e1'),
('j4', 'd5', '2017-02-02', '2022-02-02', 'e5'),
('j5', 'd3', '2017-02-02', '2022-02-02', 'e3');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` varchar(225) NOT NULL,
  `street_address` varchar(225) DEFAULT NULL,
  `city` varchar(225) DEFAULT NULL,
  `countries_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `street_address`, `city`, `countries_id`) VALUES
('l1', 'Mirpur 10', 'Dhaka', 'c1'),
('l2', 'Banasree', 'Dhaka', 'c2'),
('l3', 'Bashundhara', 'Dhaka', 'c2'),
('l4', 'Banani', 'Dhaka', 'c4'),
('l5', 'Baijing-10', 'Baijing', 'c1');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` varchar(225) NOT NULL,
  `name` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
('r1', 'Asia'),
('r2', 'Europe'),
('r3', 'North America'),
('r4', 'South America'),
('r5', 'Africa'),
('r6', 'Soudia Arabia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_countries_regions1` (`regions_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`,`locations_id`),
  ADD KEY `fk_departments_locations1` (`locations_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employees_departments1` (`departments_id`),
  ADD KEY `fk_employees_jobs1` (`jobs_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_histories`
--
ALTER TABLE `jobs_histories`
  ADD PRIMARY KEY (`jobs_id`,`departments_id`),
  ADD KEY `fk_jobs_has_departments_departments1` (`departments_id`),
  ADD KEY `fk_jobs_histories_employees1` (`employees_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_locations_countries1` (`countries_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `fk_countries_regions1` FOREIGN KEY (`regions_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `fk_departments_locations1` FOREIGN KEY (`locations_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_employees_departments1` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_employees_jobs1` FOREIGN KEY (`jobs_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs_histories`
--
ALTER TABLE `jobs_histories`
  ADD CONSTRAINT `fk_jobs_has_departments_departments1` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs_has_departments_jobs1` FOREIGN KEY (`jobs_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs_histories_employees1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `fk_locations_countries1` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
