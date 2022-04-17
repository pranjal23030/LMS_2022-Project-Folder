-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 06:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_project folder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'admin', 'admin@gmail.com', 6969, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(1, 'Helen Keller'),
(3, 'Paulo Coelho'),
(4, 'Lois Lowry'),
(5, 'Khaled Hussaini '),
(8, 'Gabriel Garcia Marquez');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_isbn_no` int(11) NOT NULL,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author_id`, `category_id`, `book_isbn_no`, `book_price`) VALUES
(2, 'The story of my life', 1, 1, 1234, 780),
(3, 'The Alchemist', 3, 4, 350, 69050),
(5, 'The Giver', 4, 6, 1234, 780),
(6, 'And the mountains echoed', 5, 7, 9867, 500),
(7, '1984', 8, 9, 7823, 390);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'War Drama'),
(4, 'Life changing'),
(6, 'Science Fiction'),
(7, 'Peace drama'),
(8, 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE `issued_books` (
  `stu_id` int(11) NOT NULL,
  `book_number` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `issue_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_books`
--

INSERT INTO `issued_books` (`stu_id`, `book_number`, `book_name`, `book_author`, `student_id`, `status`, `issue_date`) VALUES
(1, 1234, 'The Story of my life', 'Helen Keller', 9, 1, '2022-04-16 20:19:10'),
(8, 5678, 'The Alchemist', 'Paulo Coelho', 8, 1, '2022-04-17 00:00:00'),
(9, 891011, 'The Giver', 'Lois Lowry', 1, 0, '2022-04-17 18:21:43'),
(10, 1234, 'And the Mountains Echoed', 'Khaled Hussaini', 10, 1, '2022-04-17 00:00:00'),
(11, 1234, 'The Story of my life', 'Helen Keller', 1, 1, '2022-04-17 00:00:00'),
(12, 891011, 'The Giver', 'Lois Lowry', 8, 1, '2022-04-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `address`) VALUES
(1, 'Pranjal Khatiwada', 'pranjal.khatiwoda@gmail.com', 9867467, 123456, 'Chabahil'),
(8, 'Ujjwal Khatiwada', 'ujjwalkhatiwada@gmail.com', 4532, 2147483647, 'Gaushala '),
(9, 'Jack Sparrow', 'jack18@gmail.com', 8906, 909987, 'California'),
(10, 'Jesse Plemons', 'jesseplemons@gmail.com', 8976, 897654321, 'Mexico');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `issued_books`
--
ALTER TABLE `issued_books`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issued_books`
--
ALTER TABLE `issued_books`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
