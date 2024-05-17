-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 03:30 PM
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
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `content`, `created_at`) VALUES
(2, 'The Future of Work: Embracing Remote Collaboration', 'The way we work is evolving, with remote collaboration becoming increasingly common. In this blog post, we discuss the future of work and the tools and strategies that enable effective remote teamwork, from video conferencing to project management platforms.', '2024-05-10 02:08:11'),
(3, 'Revolutionary Bioengineered Superfood Promises to End World Hunger', 'Scientists have unveiled a revolutionary bioengineered superfood that they claim could eradicate global hunger and malnutrition. Dubbed \"NutriSynth,\" the genetically modified crop boasts unprecedented nutritional value and resilience to environmental stressors. While proponents hail NutriSynth as a game-changer in the fight against food insecurity, skeptics warn of potential health risks and unintended consequences associated with widespread adoption of genetically modified organisms.', '2024-05-17 06:21:15'),
(4, 'Unlocking the Secrets of Productivity: Strategies for Success', 'Productivity is key to achieving your goals and living a fulfilling life. In this blog post, we share actionable strategies and tips for boosting productivity, from time management techniques to overcoming procrastination.', '2024-05-11 02:09:21'),
(5, 'The Importance of Mental Health in the Workplace', 'Mental health is crucial for overall well-being, especially in the workplace. In this blog, we discuss the importance of creating a supportive work environment that prioritizes mental health, with tips on how employers and employees can promote mental well-being.', '2024-05-17 02:19:08'),
(9, 'Exploring the Wonders of Deep Learning', 'Deep learning has revolutionized various fields, from computer vision to natural language processing. In this blog post, we delve into the fascinating world of deep learning and its applications, covering everything from neural networks to convolutional layers.', '2024-05-17 02:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(100) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `role`) VALUES
(1, 'shaimaa a', '12345', 'admin'),
(2, 'eslam e', '67890', 'admin'),
(3, 'Amr', '45621', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
