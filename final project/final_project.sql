-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Feb 20, 2023 at 05:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `a_name` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `a_email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `a_pass` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `a_name`, `a_email`, `a_pass`) VALUES
(1, 'yashwant koli', 'yashwantkoli20@gmail.com', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `bid_users`
--

CREATE TABLE `bid_users` (
  `id` int(11) NOT NULL,
  `b_name` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `b_phone` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `bid_users`
--

INSERT INTO `bid_users` (`id`, `b_name`, `b_jobE`, `b_jobO`, `b_address`, `b_salaryE`, `b_phone`, `b_email`) VALUES
(13, 'rutujahattrgekar', '3', 'plumber', 'Dreams', '15000', '2147483647', 'rutujah@gmail.com'),
(15, 'rahul_pawar', '2years', 'plumber', 'Dreams', '3lakhs', '2147483647', 'rahul@gmail.com'),
(17, 'sakshi_shendurkar', '5years', 'plumber', 'kale-padal,hadapsar,tal-hawali,dist-pune', '1.5lakhs', '2147483647', 'sakshi@gmail.com'),
(18, 'omkar_nivangune', '6years', 'labour', 'sasaneNagar,lane_no2,hadapsar,pune-142242', '3lakhs', '2147483647', 'omkar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `c_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `c_email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `c_subject` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `c_message` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(5, 'pratisha_taware', 'pratiksha@gmail.com', 'djhdjsd', 'hsdghsxs'),
(6, 'sakshi_shendurkar', 'sakshi@gmail.com', 's ', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `db_name` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `db_jobExperience` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `db_jobOpted` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `db_gender` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `db_dob` date NOT NULL,
  `db_workAt` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `db_workAs` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `db_phone` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `db_email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `db_pass` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `db_name`, `db_jobExperience`, `db_jobOpted`, `db_gender`, `db_dob`, `db_workAt`, `db_workAs`, `db_phone`, `db_email`, `db_pass`) VALUES
(3, 'yashwant_koli', '5years', 'manager', 'male', '2019-05-06', 'pune', 'labor', '9547932313', 'yashwantkoli@gmail.com', 'aaaa'),
(4, 'sanket_mane', '6years', 'supervisor', 'male', '1991-06-03', 'Mumbai', 'cleaner', '8976320838', 'sanketmmane@gmail.com', 'aaaa'),
(5, 'sakshi', '2 year', 'plumber', 'female', '2022-04-22', 'Pune', 'plumber', '4757857546', 'sakshi@gmail.com', 'aaaa'),
(6, 'misba_sayyad', '3 year', 'plumber', 'male', '2022-04-14', 'Pune', 'labor', '9547932313', 'misba@gmail.com', 'mmmm'),
(7, 'siddhishendurkar', '2 year', 'cleaner', 'female', '1996-05-02', 'Pune', 'cleaner', '8754854903', 'siddhishendurkar@gmail.com', 'sss'),
(8, 'kirtis', '2 year', 'plumber', 'female', '1999-02-05', 'Pune', 'plumber', '6473843743', 'kirti@gmail.com', 'kkkk'),
(9, 'rupeshnikam', '2 year', 'plumber', 'male', '1998-02-04', 'Pune', 'plumber', '6473438364', 'rupesh@gmail.com', 'rrrr'),
(10, 'sarthakpawar', '5 years', 'plumber', 'male', '1997-04-05', 'Pune', 'plumber', '457789999', 'sarthak@gmail.com', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `c_messages`
--

CREATE TABLE `c_messages` (
  `id` int(11) NOT NULL,
  `c_name` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `c_email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `c_subject` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `c_message` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `c_messages`
--

INSERT INTO `c_messages` (`id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(3, 'sakshi', 'sakshi@gmail.com', 'abut website', 'best'),
(4, 'sakshi', 'sakshi@gmail.com', 'bghfhg', 'guyguygu'),
(5, 'sanket_mane', 'sanketmmane@gmail.com', 'good site', 'thank you'),
(6, 'sakshi', 'sakshi@gmail.com', 'hggjbnjm', 'gjnjn,n,mn,'),
(7, 'sakshi', 'sakshi@gmail.com', 'bgvghh', 'jhkuhuyutyfgbv'),
(8, 'sakshi', 'sakshi@gmail.com', 'dndjejfriuf', 'dnejkfnrfuir');

-- --------------------------------------------------------

--
-- Table structure for table `kirtis`
--

CREATE TABLE `kirtis` (
  `id` int(11) NOT NULL,
  `b_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `misba_sayyad`
--

CREATE TABLE `misba_sayyad` (
  `id` int(11) NOT NULL,
  `b_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `omkar_nivangune`
--

CREATE TABLE `omkar_nivangune` (
  `id` int(11) NOT NULL,
  `c_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAt` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAs` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `omkar_nivangune`
--

INSERT INTO `omkar_nivangune` (`id`, `c_name`, `c_jobE`, `c_jobO`, `c_workAt`, `c_workAs`, `b_phone`, `b_email`) VALUES
(5, 'sakshi', '2 year', 'plumber', 'Pune', 'plumber', 2147483647, 'sakshi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payalpathak`
--

CREATE TABLE `payalpathak` (
  `id` int(11) NOT NULL,
  `c_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAt` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAs` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pratisha_taware`
--

CREATE TABLE `pratisha_taware` (
  `id` int(11) NOT NULL,
  `c_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAt` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAs` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rahul_pawar`
--

CREATE TABLE `rahul_pawar` (
  `id` int(11) NOT NULL,
  `c_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAt` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAs` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `rahul_pawar`
--

INSERT INTO `rahul_pawar` (`id`, `c_name`, `c_jobE`, `c_jobO`, `c_workAt`, `c_workAs`, `b_phone`, `b_email`) VALUES
(1, 'sakshi', '2 year', 'plumber', 'Pune', 'plumber', 2147483647, 'sakshi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rudrahajare`
--

CREATE TABLE `rudrahajare` (
  `id` int(11) NOT NULL,
  `c_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAt` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAs` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rupeshnikam`
--

CREATE TABLE `rupeshnikam` (
  `id` int(11) NOT NULL,
  `b_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rutujahattrgekar`
--

CREATE TABLE `rutujahattrgekar` (
  `id` int(11) NOT NULL,
  `c_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAt` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAs` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `rutujahattrgekar`
--

INSERT INTO `rutujahattrgekar` (`id`, `c_name`, `c_jobE`, `c_jobO`, `c_workAt`, `c_workAs`, `b_phone`, `b_email`) VALUES
(1, 'sanket_mane', '6years', 'supervisor', 'Mumbai', 'cleaner', 2147483647, 'sanketmmane@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sakshi`
--

CREATE TABLE `sakshi` (
  `id` int(11) NOT NULL,
  `b_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `sakshi`
--

INSERT INTO `sakshi` (`id`, `b_name`, `b_jobE`, `b_jobO`, `b_address`, `b_salaryE`, `b_phone`, `b_email`) VALUES
(6, 'rahul_pawar', '2years', 'plumber', 'Dreams', '3lakhs', 2147483647, 'rahul@gmail.com'),
(8, 'omkar_nivangune', '6years', 'labour', 'sasaneNagar,lane_no2,hadapsar,pune-142242', '3lakhs', 2147483647, 'omkar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sakshi_shendurkar`
--

CREATE TABLE `sakshi_shendurkar` (
  `id` int(11) NOT NULL,
  `c_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAt` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_workAs` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `sakshi_shendurkar`
--

INSERT INTO `sakshi_shendurkar` (`id`, `c_name`, `c_jobE`, `c_jobO`, `c_workAt`, `c_workAs`, `b_phone`, `b_email`) VALUES
(3, 'sanket_mane', '6years', 'supervisor', 'Mumbai', 'cleaner', 2147483647, 'sanketmmane@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sanket_mane`
--

CREATE TABLE `sanket_mane` (
  `id` int(11) NOT NULL,
  `b_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `sanket_mane`
--

INSERT INTO `sanket_mane` (`id`, `b_name`, `b_jobE`, `b_jobO`, `b_address`, `b_salaryE`, `b_phone`, `b_email`) VALUES
(2, 'rutujahattrgekar', '3', 'plumber', 'Dreams', '15000', 2147483647, 'rutujah@gmail.com'),
(3, 'sakshi_shendurkar', '5years', 'plumber', 'kale-padal,hadapsar,tal-hawali,dist-pune', '1.5lakhs', 2147483647, 'sakshi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sarthakpawar`
--

CREATE TABLE `sarthakpawar` (
  `id` int(11) NOT NULL,
  `b_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `siddhishendurkar`
--

CREATE TABLE `siddhishendurkar` (
  `id` int(11) NOT NULL,
  `b_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `db_name` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `db_jobExperience` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `db_jobOpted` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `db_address` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `db_gender` varchar(6) COLLATE utf8mb4_bin NOT NULL,
  `db_dob` date NOT NULL,
  `db_salary` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `db_phone` int(10) NOT NULL,
  `db_email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `db_pass` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `db_name`, `db_jobExperience`, `db_jobOpted`, `db_address`, `db_gender`, `db_dob`, `db_salary`, `db_phone`, `db_email`, `db_pass`) VALUES
(6, 'sakshi_shendurkar', '5years', 'plumber', 'kale-padal,hadapsar,tal-hawali,dist-pune', 'female', '1995-01-01', '1.5lakhs', 2147483647, 'sakshi@gmail.com', 'aaaa'),
(8, 'omkar_nivangune', '6years', 'labour', 'sasaneNagar,lane_no2,hadapsar,pune-142242', 'male', '1989-01-11', '3lakhs', 2147483647, 'omkar@gmail.com', 'omlar'),
(9, 'rahul_pawar', '2years', 'plumber', 'Dreams Aakruti,opp.Laneno.1,hadapsar,pune', 'male', '2006-01-02', '3lakhs', 2147483647, 'rahul@gmail.com', 'rajul'),
(11, 'rutujahattrgekar', '3 year', 'plumber', 'Dreams Aakruti, opp. Lane no. 1', 'female', '2022-04-08', '15000', 2147483647, 'rutujah@gmail.com', 'rrrr'),
(12, 'rudrahajare', '3 year', 'plumber', 'kedgaon,pune', 'male', '2022-04-24', '15000', 2147483647, 'rudra@gmail.com', 'rrrr'),
(13, 'payalpathak', '2years', 'cleaner', 'Kalepadal,Hadapsar,tal-haweli,dist-pune', 'female', '2022-05-02', '1 lakh', 2147483647, 'Payalpathak@gmail.com', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `yashwant_koli`
--

CREATE TABLE `yashwant_koli` (
  `id` int(11) NOT NULL,
  `b_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_jobO` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_address` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_salaryE` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_phone` int(10) DEFAULT NULL,
  `b_email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_users`
--
ALTER TABLE `bid_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_messages`
--
ALTER TABLE `c_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kirtis`
--
ALTER TABLE `kirtis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misba_sayyad`
--
ALTER TABLE `misba_sayyad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `omkar_nivangune`
--
ALTER TABLE `omkar_nivangune`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payalpathak`
--
ALTER TABLE `payalpathak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pratisha_taware`
--
ALTER TABLE `pratisha_taware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahul_pawar`
--
ALTER TABLE `rahul_pawar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rudrahajare`
--
ALTER TABLE `rudrahajare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rupeshnikam`
--
ALTER TABLE `rupeshnikam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rutujahattrgekar`
--
ALTER TABLE `rutujahattrgekar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sakshi`
--
ALTER TABLE `sakshi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sakshi_shendurkar`
--
ALTER TABLE `sakshi_shendurkar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanket_mane`
--
ALTER TABLE `sanket_mane`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarthakpawar`
--
ALTER TABLE `sarthakpawar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siddhishendurkar`
--
ALTER TABLE `siddhishendurkar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yashwant_koli`
--
ALTER TABLE `yashwant_koli`
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
-- AUTO_INCREMENT for table `bid_users`
--
ALTER TABLE `bid_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `c_messages`
--
ALTER TABLE `c_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kirtis`
--
ALTER TABLE `kirtis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `misba_sayyad`
--
ALTER TABLE `misba_sayyad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `omkar_nivangune`
--
ALTER TABLE `omkar_nivangune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payalpathak`
--
ALTER TABLE `payalpathak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pratisha_taware`
--
ALTER TABLE `pratisha_taware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rahul_pawar`
--
ALTER TABLE `rahul_pawar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rudrahajare`
--
ALTER TABLE `rudrahajare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rupeshnikam`
--
ALTER TABLE `rupeshnikam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rutujahattrgekar`
--
ALTER TABLE `rutujahattrgekar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sakshi`
--
ALTER TABLE `sakshi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sakshi_shendurkar`
--
ALTER TABLE `sakshi_shendurkar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanket_mane`
--
ALTER TABLE `sanket_mane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sarthakpawar`
--
ALTER TABLE `sarthakpawar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siddhishendurkar`
--
ALTER TABLE `siddhishendurkar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `yashwant_koli`
--
ALTER TABLE `yashwant_koli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
