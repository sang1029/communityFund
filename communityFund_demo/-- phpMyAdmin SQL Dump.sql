-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2015 at 04:41 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `community_fund`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
`community_id` int(11) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`community_id`, `interest`, `location`) VALUES
(1, 'Science', 'North America');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
`post_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post_content` varchar(1024) NOT NULL,
  `post_date` date NOT NULL,
  `post_poll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
`project id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `initiator` varchar(255) NOT NULL,
  `funded` int(11) NOT NULL,
  `goal` int(11) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `community_id` int(11) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `last_updated_at` date NOT NULL,
  `last_logged_in` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `interest`, `location`, `created_at`, `last_updated_at`, `last_logged_in`) VALUES
(1, 'user001@gmail.com', 'user001', 'S5SSfsyL2JCMvd8FqUHQLNzunu6NUjXQ4IzR4IQErwH01Gh2dv+uL81Qh075KvK1sYORf4eE8yEkCWCBDyKyww==', 'Science', 'North America', '2015-04-03', '2015-04-03', '2015-04-04'),
(2, 'user002@gmail.com', 'user002', '8PONsmjLYR/poGNlIBdwxKHtH9wCZ1u+acnZW7BqD3LcxO/B0D6WhLxhpZ6WhM18UB9/RkL9fTsFPZCEfggxjw==', 'Science', 'North America', '2015-04-03', '2015-04-03', '2015-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `setting_name`, `setting_value`) VALUES
(1, 1, 'firstname', 'user'),
(2, 1, 'lastname', '001'),
(3, 1, 'description', 'i am user001'),
(4, 2, 'firstname', 'user002'),
(5, 2, 'lastname', '002'),
(6, 2, 'description', 'i am user002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
 ADD PRIMARY KEY (`community_id`), ADD UNIQUE KEY `community_id` (`community_id`), ADD UNIQUE KEY `community_id_2` (`community_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`), ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`project id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `username_2` (`username`), ADD UNIQUE KEY `username_3` (`username`), ADD UNIQUE KEY `user_id` (`user_id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `email_2` (`email`), ADD UNIQUE KEY `email_3` (`email`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
MODIFY `community_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `project id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;