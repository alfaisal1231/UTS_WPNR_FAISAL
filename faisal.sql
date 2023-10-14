-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 02:10 PM
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
-- Database: faisal
--

-- --------------------------------------------------------

--
-- Table structure for table lpk
--

CREATE TABLE lpk (
  user_id int(5) NOT NULL,
  lpk_id int(5) NOT NULL,
  sertifikasi varchar(30) NOT NULL,
  lpk varchar(30) NOT NULL,
  nilai int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table lpk
--

INSERT INTO lpk (user_id, lpk_id, sertifikasi, lpk, nilai) VALUES
(1, 1, 'Spesialis Lap Meja', 'Cleaner School Asociate', 98),
(1, 2, 'Spesialis Buka Pintu', 'Open The Door University', 100),
(1, 3, 'Ahli Mengetik', 'Typing Community', 100);

-- --------------------------------------------------------

--
-- Table structure for table school
--

CREATE TABLE school (
  user_id int(5) NOT NULL,
  n_school varchar(30) NOT NULL,
  school_id int(5) NOT NULL,
  tahun varchar(30) NOT NULL,
  jurusan varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table school
--

INSERT INTO school (user_id, n_school, school_id, tahun, jurusan) VALUES
(1, 'SMPN 1 Parongpong', 1, '2013-2016', 'IPA'),
(1, 'SMAN 2 Singaparna', 2, '2016-2019', 'IPA'),
(1, 'Politeknik LP3I Tasikmalaya', 3, '2022-2025', 'Manajemen Informatika');

-- --------------------------------------------------------

--
-- Table structure for table user
--

CREATE TABLE user (
  user_id int(5) NOT NULL,
  fullname varchar(30) NOT NULL,
  email varchar(30) NOT NULL,
  telpon varchar(30) NOT NULL,
  job varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table user
--

INSERT INTO user (user_id, fullname, email, telpon, job) VALUES
(1, 'Al Faisal Darmawan', 'alfaisal@mail.com', '089513421992', 'Mixue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table lpk
--
ALTER TABLE lpk
  ADD PRIMARY KEY (lpk_id);

--
-- Indexes for table school
--
ALTER TABLE school
  ADD PRIMARY KEY (school_id);

--
-- Indexes for table user
--
ALTER TABLE user
  ADD PRIMARY KEY (user_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table user
--
ALTER TABLE user
  MODIFY user_id int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;