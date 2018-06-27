-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 07:43 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ongc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `cpf_admin` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`cpf_admin`, `password`) VALUES
('5441', '5441'),
('5440', '5440');

-- --------------------------------------------------------

--
-- Table structure for table `doc_type`
--

CREATE TABLE `doc_type` (
  `doc_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_type`
--

INSERT INTO `doc_type` (`doc_type`) VALUES
('WAR'),
('FAR');

-- --------------------------------------------------------

--
-- Table structure for table `field_well`
--

CREATE TABLE `field_well` (
  `field` varchar(100) NOT NULL,
  `well_name` varchar(115) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `field_well`
--

INSERT INTO `field_well` (`field`, `well_name`) VALUES
('ADAVIPALEM', 'ADAVIPALEM  #  2'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  1'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  3'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  4'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  5'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  6'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  7'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  8'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  9'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  10'),
('ABAJIPETA', 'ABAJIPETA  #  1'),
('AARAKATLA PALEM', 'AARAKATLA PALEM  # 1'),
('ALLAVARAM', 'ALLAVARAM  # 1'),
('AMALAPURAM', 'AMALAPURAM  #  1  , 3'),
('ANGALUR', 'ANGALUR  # 1'),
('AKIVEEDU', 'AKIVEEDU  #  1'),
('ACHENTA', 'ACHENTA  #  1'),
('ASWARAOPETA', 'ASWARAOPETA  # 1, C – 1'),
('ADAVIPETA', 'ADAVIPETA  # 1 - EAST'),
('BANTUMILLI-NORTH', 'BANTUMILLI – NORTH – 1, 1, 2, 4, 5'),
('BHAVADEVARAPALLI', 'BHAVADEVARAPALLI # 1'),
('BHIMANAPALLI', 'BHIMANAPALLI  #  2'),
('BOBBARALANKA', 'BOBBARALANKA  #  1'),
('BANDAMURULANKA', 'BANDAMURULANKA  #  1');

-- --------------------------------------------------------

--
-- Table structure for table `rack_info`
--

CREATE TABLE `rack_info` (
  `Id` int(5) NOT NULL,
  `rack_num` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rack_info`
--

INSERT INTO `rack_info` (`Id`, `rack_num`) VALUES
(1, 'A1'),
(2, 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `shelf_info`
--

CREATE TABLE `shelf_info` (
  `shelf` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shelf_info`
--

INSERT INTO `shelf_info` (`shelf`) VALUES
('1'),
('2');

-- --------------------------------------------------------

--
-- Table structure for table `total_info`
--

CREATE TABLE `total_info` (
  `field` varchar(100) NOT NULL,
  `well_name` varchar(115) DEFAULT NULL,
  `doc_type` varchar(14) DEFAULT NULL,
  `rack_num` varchar(7) DEFAULT NULL,
  `shelf` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total_info`
--

INSERT INTO `total_info` (`field`, `well_name`, `doc_type`, `rack_num`, `shelf`) VALUES
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  1', 'WCR', 'A1', '1'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  3', 'WCR', 'A1', '1'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  4', 'FAR', 'A1', '1'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  5', 'WCR', 'A1', '2'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  6', 'WCR', 'A1', '1'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  7', 'WCR', 'A1', '1'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  8', 'WCR', 'A1', '1'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  9', 'WCR', 'A1', '1'),
('SOUTH ADAVIPALEM', 'SOUTH ADAVIPALEM  #  10', 'WCR', 'A1', '1'),
('ABAJIPETA', 'ABAJIPETA  #  1', 'WCR', 'A1', '1'),
('AARAKATLA PALEM', 'AARAKATLA PALEM  # 1', 'WCR', 'A1', '1'),
('ALLAVARAM', 'ALLAVARAM  # 1', 'WCR', 'A1', '1'),
('AMALAPURAM', 'AMALAPURAM  #  1  , 3', 'WCR', 'A1', '1'),
('ANGALUR', 'ANGALUR  # 1', 'WCR', 'A1', '1'),
('AKIVEEDU', 'AKIVEEDU  #  1', 'WCR', 'A1', '1'),
('ACHENTA', 'ACHENTA  #  1', 'WCR', 'A1', '1'),
('ASWARAOPETA', 'ASWARAOPETA  # 1, C – 1', 'WCR', 'A1', '1'),
('ADAVIPETA', 'ADAVIPETA  # 1 - EAST', 'WCR', 'A1', '1'),
('BANTUMILLI-NORTH', 'BANTUMILLI – NORTH – 1, 1, 2, 4, 5', 'WCR', 'A1', '1'),
('BHAVADEVARAPALLI', 'BHAVADEVARAPALLI # 1', 'WCR', 'A1', '1'),
('BHIMANAPALLI', 'BHIMANAPALLI  #  2', 'WCR', 'A1', '1'),
('BOBBARALANKA', 'BOBBARALANKA  #  1', 'WCR', 'A1', '1'),
('BANDAMURULANKA', 'BANDAMURULANKA  #  1', 'WCR', 'A1', '2'),
('AARAKATLA PALEM', 'AARAKATLA PALEM  # 1', 'FAR', 'A2', '2'),
('ABAJIPETA', 'ABAJIPETA  #  1', 'WAR', 'A2', '2'),
('ADAVIPETA', 'ADAVIPETA  # 1 - EAST', 'WAR', 'A1', '2'),
('ABAJIPETA', 'ABAJIPETA  #  1', 'WAR', 'A2', '2'),
('ABAJIPETA', 'ABAJIPETA  #  1', 'WAR', 'A2', '1'),
('ACHENTA', 'ACHENTA  #  1', 'WAR', 'A2', '2'),
('ACHENTA', 'ACHENTA  #  1', 'FAR', 'A2', '2'),
('ADAVIPALEM', 'ADAVIPALEM  #  2', 'WAR', 'A1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cpf_user` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cpf_user`, `password`) VALUES
('8121', '8121'),
('5441', '5421');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rack_info`
--
ALTER TABLE `rack_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rack_info`
--
ALTER TABLE `rack_info`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
