-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 02:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_quiz_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answers` varchar(500) NOT NULL,
  `Question_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answers`, `Question_id`) VALUES
(1, 'Home Tool Markup Language', 1),
(2, 'HyperLink markup language', 1),
(3, 'Hyper Text Markup Language', 1),
(4, 'Home sweet its language', 1),
(5, 'The First Div Element', 2),
(6, 'The Last div element', 2),
(7, 'All Div Elements', 2),
(8, 'None of the above', 2),
(9, 'The Head Section', 3),
(10, 'The body Section', 3),
(11, 'Both Head and body Section', 3),
(12, 'None of these', 3),
(13, 'function myFunction()', 4),
(14, 'function: funtec', 4),
(15, 'functio = mdesc()', 4),
(16, 'none of these', 4),
(17, '.container', 5),
(18, '.container-fixed', 5),
(19, '.container-fluid', 5),
(20, 'none of the above', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `answer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions`, `answer_id`) VALUES
(1, 'What does html stands for?', 3),
(2, 'Look at the following selector: $(div). What does it select ?', 7),
(3, 'Where is the correct place to insert a javascript ?', 10),
(4, 'How do you create a function in javascript', 13),
(5, 'Which class provides a responsive fixed width container?', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
