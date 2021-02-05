-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2021 at 07:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shareposts`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(1, 2, 'Post One', 'lorem ipsum pass the dim sum', '2021-01-29 21:05:33'),
(6, 2, 'sunglasses', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eum consequatur error culpa fugit fugiat et soluta dolor quidem repellat? Perspiciatis, sunt natus. Perferendis, magni?', '2021-02-03 22:04:53'),
(7, 2, 'Wednesday', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, quibusdam earum! Iure, earum! Vero dolore veniam corporis ullam, fuga reiciendis tempore illo aut unde, magni consequatur quia ipsa aperiam atque repellat, error accusantium maiores velit minus explicabo distinctio! Corporis obcaecati labore molestiae quae, praesentium aperiam quia voluptatem accusamus impedit ullam?', '2021-02-04 22:47:53'),
(8, 4, 'The weekend', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, quibusdam earum! Iure, earum! Vero dolore veniam corporis ullam, fuga reiciendis tempore illo aut unde, magni consequatur quia ipsa aperiam atque repellat, error accusantium maiores velit minus explicabo distinctio! Corporis obcaecati labore molestiae quae, praesentium aperiam quia voluptatem accusamus impedit ullam?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, quibusdam earum! Iure, earum! Vero dolore veniam corporis ullam, fuga reiciendis tempore illo aut unde, magni consequatur quia ipsa aperiam atque repellat, error accusantium maiores velit minus explicabo distinctio! Corporis obcaecati labore molestiae quae, praesentium aperiam quia voluptatem accusamus impedit ullam?', '2021-02-04 22:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(2, 'Nathan Harris', 'nathan@me.com', '$2y$10$AONimTyylWpDOelEV0lbUuEbH7auscX8U73p1Ke3RSI3yn3j2w2uq', '2021-01-26 05:10:53'),
(3, 'raquel', 'raq@uel.com', '$2y$10$wn959O2j/43YXDU7XVuZB.756LXFTHY/MfG51k2kjdmv3rcAOh9be', '2021-01-26 18:54:49'),
(4, 'steve', 'steve@me.com', '$2y$10$nH.fziSLWWAgEyMrVV5R3Oz1GoL2VWlSQ7dMej3/cKdJE/x4/kEiO', '2021-02-04 22:48:15'),
(5, 'Guest', 'guest@me.com', '$2y$10$E9PVMNhP.Zv5rtYHTC1H2OzOMoAYwQB5mHK52N.kNQ8JF.AGQLvEO', '2021-02-04 23:45:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
