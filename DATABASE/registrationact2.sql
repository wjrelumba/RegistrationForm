-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 11:41 AM
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
-- Database: `registrationact2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(30) NOT NULL,
  `minitial` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `minitial`, `lname`, `birthdate`, `age`, `gender`, `region`, `phone`, `email`, `username`, `password`) VALUES
('Luffy', 'D.', 'Monkey', '5/5/2006', 17, 'male', 'Bicol Region', '2147483647', 'luffylovesmeat@strawhat.grandl', 'LDM', '1234'),
('Juan Shanks', 'D.', 'Roger', '1/5/1985', 38, 'male', 'CALABARZON', '2147483647', 'red@shanks.crew', 'JSDR', 'asdf'),
('Simon', 'C.', 'Monde', '1/1/2002', 21, 'male', 'CALABARZON', '1234567890', 'simon@gmail.com', 'SCM', '1234asdf'),
('Nagato', 'D.', 'Shippuden', '10/10/1978', 45, 'female', 'Central Luzon', '1234123123', '123123123@gmail.com', 'NDS', '123456789'),
('Tom', 'R.', 'Hanks', '1/1/1980', 43, 'male', 'CALABARZON', '1234567890', 'tomhanks@gmail.com', 'TDH', 'asdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
