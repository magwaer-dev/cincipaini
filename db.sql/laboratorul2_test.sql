-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 01:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorul2_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `arma`
--

CREATE TABLE `arma` (
  `id` int(11) NOT NULL,
  `nume` char(20) NOT NULL,
  `tip` text NOT NULL,
  `damage` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arma`
--

INSERT INTO `arma` (`id`, `nume`, `tip`, `damage`) VALUES
(4, 'Ak47', 'arma de foc', 100),
(1, 'AWP', 'arma de foc', 200),
(2, 'Kerambit', 'arma rece', 100),
(3, 'Pistol', 'arma de foc', 100);

-- --------------------------------------------------------

--
-- Table structure for table `atacator`
--

CREATE TABLE `atacator` (
  `id` int(11) NOT NULL,
  `nume` char(20) NOT NULL,
  `caracter` text NOT NULL,
  `viata` int(11) NOT NULL,
  `produs` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atacator`
--

INSERT INTO `atacator` (`id`, `nume`, `caracter`, `viata`, `produs`) VALUES
(2, 'Andrei', 'agresiv', 200, 'paine alba'),
(3, 'Dimon', 'pacifist', 200, 'paine cu nuci'),
(1, 'Le Petrica', 'agresiv', 200, 'paine alba'),
(4, 'Preotul Vasile', 'pacifist', 200, 'paine neagra'),
(13, 'xann', 'agresiv', 100, 'paine cu nuci');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_client` int(11) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `parola` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_client`, `nume`, `prenume`, `email`, `telefon`, `parola`) VALUES
(9, 'Ion', 'adadadadadadadadadadadadadadad', 'fake@gmail.com', '', ''),
(10, 'Alex', 'adsadadadaadsadadadaadsadadada', 'egjuice99@gmail.com', '', ''),
(11, 'Alexander', 'adadadadaadadadadaadadadadaada', 'egjuice99@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personaj`
--

CREATE TABLE `personaj` (
  `id` int(11) NOT NULL,
  `nume` char(20) NOT NULL,
  `arma_id` char(20) NOT NULL,
  `atacator_id` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaj`
--

INSERT INTO `personaj` (`id`, `nume`, `arma_id`, `atacator_id`) VALUES
(1, 'Ded Mazai', 'Ak47', 'Andrei'),
(2, 'Vans', 'AWP', 'Dimon'),
(3, 'Petrica', 'Kerambit', 'Le Petrica'),
(4, 'Satan', 'Pistol', 'Preotul Vasile'),
(8, 'yan', 'Pistol', 'xann');

-- --------------------------------------------------------

--
-- Table structure for table `produs`
--

CREATE TABLE `produs` (
  `id` int(11) NOT NULL,
  `nume_produs` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produs`
--

INSERT INTO `produs` (`id`, `nume_produs`) VALUES
(1, 'paine alba'),
(2, 'paine neagra'),
(3, 'paine cu nuci'),
(4, 'paine cu ananas'),
(5, 'paine verde'),
(6, 'paine rosie');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `timeStamp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `timeStamp`) VALUES
(2, 'alex123', 'egjuice99@gmail.com', '$2y$10$0sn76bpaCCjGU1nB5zmCJuM5WeqavAlJcSjed2xqQ3p83JpYE0tty', '2021-12-18 11:21:05'),
(3, 'magwaer', 'fake@gmail.com', '$2y$10$nTnrQGvVhzalndSJ19uAqOsR53G.49yffsR98TExixVSptESMtbPu', '2021-12-18 16:43:23'),
(4, 'Alex1234', 'egjuice99@gmail.com', '$2y$10$k9LuBmDZUs/C9N120PoQvuO4M8j0I4MpsOUpbnjH/EUarwF6mj3m.', '2021-12-19 13:26:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arma`
--
ALTER TABLE `arma`
  ADD PRIMARY KEY (`nume`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `atacator`
--
ALTER TABLE `atacator`
  ADD PRIMARY KEY (`nume`),
  ADD UNIQUE KEY `nume` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `produs FK` (`produs`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `personaj`
--
ALTER TABLE `personaj`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arma FK` (`arma_id`),
  ADD KEY `atacator FK` (`atacator_id`);

--
-- Indexes for table `produs`
--
ALTER TABLE `produs`
  ADD PRIMARY KEY (`nume_produs`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arma`
--
ALTER TABLE `arma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `atacator`
--
ALTER TABLE `atacator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personaj`
--
ALTER TABLE `personaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produs`
--
ALTER TABLE `produs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atacator`
--
ALTER TABLE `atacator`
  ADD CONSTRAINT `produs FK` FOREIGN KEY (`produs`) REFERENCES `produs` (`nume_produs`);

--
-- Constraints for table `personaj`
--
ALTER TABLE `personaj`
  ADD CONSTRAINT `arma FK` FOREIGN KEY (`arma_id`) REFERENCES `arma` (`nume`),
  ADD CONSTRAINT `atacator FK` FOREIGN KEY (`atacator_id`) REFERENCES `atacator` (`nume`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
