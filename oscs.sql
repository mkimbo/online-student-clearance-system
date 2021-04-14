-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 10:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oscs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adm_name` varchar(255) NOT NULL,
  `adm_pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adm_name`, `adm_pass`) VALUES
(1, 'jack', '$2y$10$RGdDWemnLo/9KzLwTcNsg.8HHBic6L/ETaRRmGqwALASytUG21JI.');

-- --------------------------------------------------------

--
-- Table structure for table `dos`
--

CREATE TABLE `dos` (
  `id` int(11) NOT NULL,
  `regNumber` varchar(255) NOT NULL,
  `basket` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dos`
--

INSERT INTO `dos` (`id`, `regNumber`, `basket`, `status`) VALUES
(1, 'CIT-222-038/2015', '', 1),
(7, 'CIT-222-039/2015', '', 1),
(8, 'CIT-222-040/2015', '', 2),
(9, 'CIT-222-041/2015', '', 2),
(10, 'CIT-222-037/2015', '', 1),
(11, 'CIT-222-042/2015', '', 2),
(12, 'CIT-222-043/2015', '', 1),
(13, 'CIT-222-035/2015', '', 2),
(14, 'CIT-222-030/2015', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dos_login`
--

CREATE TABLE `dos_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `id` int(11) NOT NULL,
  `regNumber` varchar(255) NOT NULL,
  `basket` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`id`, `regNumber`, `basket`, `status`) VALUES
(1, 'CIT-222-038/2015', '', 1),
(7, 'CIT-222-039/2015', '1 supplementary', 2),
(8, 'CIT-222-040/2015', '', 1),
(9, 'CIT-222-041/2015', '', 2),
(10, 'CIT-222-037/2015', '', 1),
(11, 'CIT-222-042/2015', '', 1),
(12, 'CIT-222-043/2015', '', 2),
(13, 'CIT-222-035/2015', '', 2),
(14, 'CIT-222-030/2015', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `examination_login`
--

CREATE TABLE `examination_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `regNumber` varchar(255) NOT NULL,
  `basket` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `regNumber`, `basket`, `status`, `fee`) VALUES
(1, 'CIT-222-038/2015', '', 1, 0),
(7, 'CIT-222-039/2015', '', 1, 0),
(8, 'CIT-222-040/2015', '', 2, 0),
(9, 'CIT-222-041/2015', '', 2, 0),
(10, 'CIT-222-037/2015', '', 1, 0),
(11, 'CIT-222-042/2015', '', 1, 0),
(12, 'CIT-222-043/2015', '', 2, 0),
(13, 'CIT-222-035/2015', '', 2, 0),
(14, 'CIT-222-030/2015', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `finance_login`
--

CREATE TABLE `finance_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `regNumber` varchar(255) NOT NULL,
  `basket` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `regNumber`, `basket`, `status`, `fee`) VALUES
(1, 'CIT-222-038/2015', '', 1, 0),
(7, 'CIT-222-039/2015', '5 books', 2, 1000),
(8, 'CIT-222-040/2015', '', 2, 0),
(9, 'CIT-222-041/2015', '', 2, 0),
(10, 'CIT-222-037/2015', '', 1, 0),
(11, 'CIT-222-042/2015', '', 2, 0),
(12, 'CIT-222-043/2015', '', 2, 0),
(13, 'CIT-222-035/2015', '', 2, 0),
(14, 'CIT-222-030/2015', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `library_login`
--

CREATE TABLE `library_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `regNumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lastName`, `firstName`, `status`, `faculty`, `email`, `password`, `year`, `regNumber`) VALUES
(1, 'Mkimbo', 'Jack', 1, 'Faculty of Media and Arts', 'jackmkimbo@gmail.com', '$2y$10$HxM8RbKTiKqkCmj5Ls8rQOPh8srxmqg11HollsCQ/YasmVxFJIEna', 'Second-2nd', 'CIT-222-038/2015'),
(7, 'Mwanafunzi', 'Mayah', 2, 'Faculty of Computing and IT', 'student@myself.com', '$2y$10$qmZppAV3wCMFW0YCvuvvx.aMSe9LCe5amm3hlj2simP.7cMTZnOu6', 'First-1st', 'CIT-222-039/2015'),
(8, 'Michael', 'Mike', 2, 'Faculty of Business and Economics', 'abra@gmail.com', '$2y$10$xrO/8dKAROscbuk9/VICne3G69MCpho.X/eLON4pxX2DGJ6eoJMiu', 'Fourth-4th', 'CIT-222-040/2015'),
(9, 'Maria', 'Mary', 2, 'Faculty of Media and Arts', 'jack.vinwest@yahoo.com', '$2y$10$HMFMIipEeq95H.6naRETg.Wrj7iV5XWSKGbASEFoZ9jFUD365sR/S', 'Fourth-4th', 'CIT-222-041/2015'),
(10, 'Student', 'Jonny', 1, 'Faculty of Science and Technology', 'john@gmail.com', '$2y$10$s9PrTXB5ePDeI5NVEjC8xulQsuw2DrPMF3S1WivtSt0iTRxay/r/a', 'Fourth-4th', 'CIT-222-037/2015'),
(11, 'stude', 'Testing', 2, 'Faculty of Media and Arts', 'sheryl@gmail.com', '$2y$10$rQ2bwEjA4Q5iTQL87Ygm0.tbh7tVbxi/MyRBH.xUTcoEhLzW7CycW', 'Second-2nd', 'CIT-222-042/2015'),
(12, 'Mayai', 'JacTest', 2, 'Faculty of Business and Economics', 'tester@gmail.com', '$2y$10$4MQgMRW8N8rp0xXBGIv0r.FRA38c2AMTax7QE1H/LpQdom.qo2QsO', 'Fourth-4th', 'CIT-222-043/2015'),
(13, 'Mnoma', 'Mike', 2, 'Faculty of Media and Arts', 'mike@gmail.com', '$2y$10$TaRnSyWT627lPCgGvQae..AIjpj/SytXi.mQKcQmjfhQQYuxyIBsa', 'Third-3rd', 'CIT-222-035/2015'),
(14, 'Mwanafunzi', 'Sharon', 1, 'Faculty of Science and Technology', 'sharon@gmail.com', '$2y$10$JiMkMlT5sv.G/isdMLDxSOSZOJSM04L4yliiqzsSXmN9s4L3eqdTK', 'Fourth-4th', 'CIT-222-030/2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dos`
--
ALTER TABLE `dos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dos_login`
--
ALTER TABLE `dos_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination_login`
--
ALTER TABLE `examination_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_login`
--
ALTER TABLE `finance_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_login`
--
ALTER TABLE `library_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dos`
--
ALTER TABLE `dos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dos_login`
--
ALTER TABLE `dos_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `examination_login`
--
ALTER TABLE `examination_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `finance_login`
--
ALTER TABLE `finance_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `library_login`
--
ALTER TABLE `library_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
