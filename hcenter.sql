-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 05:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--
-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `g_name` varchar(255) NOT NULL,
  `dossage` varchar(255) NOT NULL,
  `supplies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `a_id` int(11) NOT NULL,
  `a_what` varchar(1000) NOT NULL,
  `a_where` varchar(1000) NOT NULL,
  `a_when` date NOT NULL,
  `a_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `announcement`
  ADD PRIMARY KEY (`a_id`);

ALTER TABLE `announcement`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  
  `p_id` int(11) NOT NULL,
  `r_fname` varchar(255) NOT NULL,
  `r_lname` varchar(255) NOT NULL,
  `r_contact` varchar(255) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_reason` varchar(255) NOT NULL,
  `r_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `appointment`
  ADD PRIMARY KEY (`p_id`);

ALTER TABLE `appointment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_contact` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `resident` (`u_id`, `u_name`,`u_fname`,`u_address`,`u_contact`,`u_email`,`u_password`) VALUES
(1, 'adminuser1', 'admin', 'Rosario, Batangas', '09562671094', 'admin@gmail.com', 'admin');

ALTER TABLE `resident`
  ADD PRIMARY KEY (`u_id`);

ALTER TABLE `resident`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- --------------------------------------------------------

--
-- Table structure for table `brgyadmin`
--

CREATE TABLE `brgyadmin` (
  `b_id` int(11) NOT NULL,
  `b_admin` varchar(30) NOT NULL,
  `b_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `brgyadmin` (`b_id`, `b_admin`, `b_password`) VALUES
(1, 'brgyadmin', 'password');

ALTER TABLE `brgyadmin`
  ADD PRIMARY KEY (`b_id`);

ALTER TABLE `brgyadmin`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
-- --------------------------------------------------------

--
-- Table structure for table `centerstaff`
--

CREATE TABLE `centerstaff` (
  `u_id` int(11) NOT NULL,
  `u_admin` varchar(30) NOT NULL,
  `u_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `centerstaff` (`u_id`, `u_admin`, `u_password`) VALUES
(1, 'admincenterstaff', 'admincenterstaff');

ALTER TABLE `centerstaff`
  ADD PRIMARY KEY (`u_id`);

ALTER TABLE `centerstaff`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

-- --------------------------------------------------------
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
