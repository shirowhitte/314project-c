-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2021 at 09:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csit314`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`, `dob`, `mobile`, `role`) VALUES
(1001, 'ADM A', 'adma@gmail.com', 'adma', 'Female', '1996-12-25', '83755274', 'Admin'),
(1002, 'ADM B', 'admb@gmail.com', 'admb', 'Male', '1997-07-07', '98301733', 'Admin'),
(1003, 'ADM C', 'admc@gmail.com', 'admc', 'Female', '1980-10-19', '85301987', 'Admin'),
(1004, 'ADM D', 'admd@gmail.com', 'admd', 'Male', '1999-06-12', '81351089', 'Admin'),
(2001, 'Alex', 'alex@gmail.com', 'alexpw', 'Male', '1988-04-03', '98765432', 'Patient'),
(2002, 'Ben', 'ben@gmail.com', 'benpw', 'Male', '1998-03-13', '92345678', 'Patient'),
(2003, 'Charlie', 'charlie@gmail.com', 'charliepw', 'Female', '2000-02-23', '94564567', 'Patient'),
(2004, 'Danielle', 'danielle@gmail.com', 'daniellepw', 'Female', '1995-06-08', '85467945', 'Patient'),
(3001, 'PHR A', 'phra@gmail.com', 'phra', 'Female', '1987-03-30', '86319475', 'Pharmacist'),
(3002, 'PHR B', 'phrb@gmail.com', 'phrb', 'Male', '1998-05-15', '90861345', 'Pharmacist'),
(3003, 'PHR C', 'phrc@gmail.com', 'phrc', 'Male', '1998-07-18', '81638543', 'Pharmacist'),
(3004, 'PHR D', 'phrd@gmail.com', 'phrd', 'Female', '2000-03-14', '97158904', 'Pharmacist'),
(4001, 'DR A', 'dra@gmail.com', 'apw', 'Male', '1965-08-05', '81275643', 'Doctor'),
(4002, 'DR B', 'drb@gmail.com', 'bpw', 'Female', '1985-09-18', '98086543', 'Doctor'),
(4003, 'DR C', 'drc@gmail.com', 'cpw', 'Female', '1995-06-06', '98127409', 'Doctor'),
(4004, 'DR D', 'drd@gmail.com', 'dpw', 'Male', '2000-02-11', '81849878', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
