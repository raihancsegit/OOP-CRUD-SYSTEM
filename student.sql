-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 07:56 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `education`, `gender`, `blood`, `address`) VALUES
(1, 'Mehedi Hasan Kanon', 26, 'Masters', 'Male', 'B+', 'Khulna'),
(2, 'M Ziaur Rahman', 32, 'B.Sc Engineer in ETE from NSU', 'Male', 'AB+', 'Dhaka'),
(3, 'Tahmina Mahbub', 30, 'Masters', 'Female', 'O+', 'Spain'),
(4, 'Tawhid Islam Raihan', 22, 'BBS', 'Male', 'O+', 'Noakhali, Maijdee, sadar'),
(5, 'Abul Kalam', 25, 'H.S.C', 'Male', 'O+', 'Monirampur. Jessore'),
(6, 'Arup Paul', 19, 'Diploma in Computer Technology', 'Male', 'B+', 'Chittagong'),
(7, 'Hossain Ahmed', 23, 'Honors in MC college', 'Male', 'O+', 'Sylhet'),
(8, 'MOHON MIA', 20, 'DIPLOMA IN COMPUTER', 'Male', 'O+', 'NOAKHALI SADAR MAIJDEE'),
(9, 'Onej', 12, 'Six', 'Female', 'O+', 'Xxx'),
(10, 'Abu Taher Md. Samsuzzaha', 34, 'B.Sc. (CSE)', 'Male', 'AB+', 'Bogra'),
(11, 'S.M.Abdul Hadi', 28, 'MBA', 'Male', 'A+', 'Rajshahi'),
(12, 'Md. Mahbubur Rabbani', 23, 'BBA of European University of Bangladesh', 'Male', 'A+(not sure)', 'Mohammadpur, Dhaka'),
(13, 'Prosenjit Mondal', 24, 'Studying B.Sc in Civil Engineering', 'Male', 'O+', 'Khulna'),
(14, 'Md. Shahjalal Rafid', 18, 'Studying B.S.C in Civil Engineering in BUET', 'Male', 'O+', 'MIrpur, Dhaka'),
(15, 'Md. Mahafuzur Rahaman', 32, 'M.S (Inorganic Chemistry), University of Chittagong', 'Male', 'AB+', 'CEPZ, Chittagong'),
(16, 'Tanvir Islam', 22, 'BBA (CIBT) In Dhaka', 'Male', 'O+', 'Dhaka, Bangladesh'),
(17, 'Imtiaz Epu', 30, 'B.Sc In Physics University of Chittagong', 'Male', 'O+', 'Fatulla, Narayanganj'),
(18, 'Subrata Bardhan', 40, 'BSS', 'Male', 'B+', 'Jamalpur'),
(19, 'Md. Aslam Hossain Khan', 32, 'MBA', 'Male', 'O+', 'Valuka,Mymensingh'),
(20, 'Md. Mayeen Miah', 32, 'Masters', 'Male', 'A+', 'Savar, Dhaka'),
(21, 'Santanu', 25, 'BBA', 'Male', 'O+', 'Faltita'),
(22, 'Saifuddin Yeahea', 30, 'BSc(EEE)', 'Male', 'B+', 'Bhaluka, Mymensingh'),
(23, 'MOHAMMAD SHAFAET KARIM', 25, 'MBA in Human Resource Management', 'Male', 'O+', 'Chittagong'),
(24, 'Muhammed Kamal Hossain', 29, 'Masters', 'Male', 'O+', 'Lakshmipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
