-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 07:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_regester`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `profileID` int(11) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `address` varchar(155) DEFAULT NULL,
  `age` int(5) NOT NULL,
  `lrn` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `pob` varchar(100) NOT NULL,
  `mcmg` varchar(11) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `religion` varchar(11) NOT NULL,
  `number` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `yearcom` varchar(100) NOT NULL,
  `adname` varchar(100) NOT NULL,
  `campus` varchar(100) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`profileID`, `lastname`, `firstname`, `middlename`, `address`, `age`, `lrn`, `email`, `sex`, `dob`, `pob`, `mcmg`, `citizenship`, `religion`, `number`, `status`, `sname`, `yearcom`, `adname`, `campus`, `choice1`, `choice2`) VALUES
(1, 'Tamtam', 'Juryn', 'Talabing', 'Tagudin', 24, 'E19-00429', 'tamtamjuryn@gmail.com', 'Female', '2000-01-04', 'Benguet', 'none', 'Filipino', 'UCCP', '09071719491', 'High School Graduate/Transferee', 'ISPSC', '2024', 'Tagudin', 'Tagudin', 'Education', 'IT'),
(2, 'Salipnget', 'Rose', 'Baday', 'Alilem, Ilocos Sur', 22, 'E20-0000', 'rose@gmail.com', 'Female', '2002-01-16', 'Alilem, Ilocos Sur', '', 'Filipino', 'RC', '09071719491', 'High School Graduate/Transferee', 'ISPSC', '2024', 'Quirino Tagudin', 'Tagudin', 'Criminology', 'IT'),
(3, 'Adriosula ', 'Angelyn ', 'S', 'Mallig Isabela', 25, 'E22982', 'ghie.adriosula@gmail.com', 'Female', '2024-04-25', 'Mallig isabela', '', 'Filipino ', 'Roman Catho', '09926443013', 'Currently Senior High School', '', '', '', 'Tagudin', 'BSIT', 'BSBA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`profileID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `profileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
