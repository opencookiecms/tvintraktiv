-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 07:39 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signage`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_banner`
--

CREATE TABLE `data_banner` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8_bin,
  `banner_status` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `banner_reg` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `data_header`
--

CREATE TABLE `data_header` (
  `id` int(11) NOT NULL,
  `header_title` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `header_content` text COLLATE utf8_bin,
  `header_status` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `header_reg` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `data_message`
--

CREATE TABLE `data_message` (
  `id` int(11) NOT NULL,
  `message_title` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `message_content` text COLLATE utf8_bin,
  `message_status` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `message_reg` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `data_notice`
--

CREATE TABLE `data_notice` (
  `id` int(11) NOT NULL,
  `notice_title` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `notice_content` text COLLATE utf8_bin,
  `notice_status` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `notice_reg` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `data_playback`
--

CREATE TABLE `data_playback` (
  `id` int(11) NOT NULL,
  `playback_tittle` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `playback_content` text COLLATE utf8_bin,
  `playback_status` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `playback_reg` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `data_slide`
--

CREATE TABLE `data_slide` (
  `id` int(11) NOT NULL,
  `slide_title` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `slide_content` text COLLATE utf8_bin,
  `slide_status` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `slide_reg` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `signagesetting`
--

CREATE TABLE `signagesetting` (
  `id` int(11) NOT NULL,
  `logoheight` int(11) NOT NULL,
  `mediaheight` int(11) NOT NULL,
  `slideheight` int(11) NOT NULL,
  `messageheight` int(11) NOT NULL,
  `bannerheight` int(11) NOT NULL,
  `footerheight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `signagesetting`
--

INSERT INTO `signagesetting` (`id`, `logoheight`, `mediaheight`, `slideheight`, `messageheight`, `bannerheight`, `footerheight`) VALUES
(1, 350, 650, 250, 120, 80, 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_banner`
--
ALTER TABLE `data_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_header`
--
ALTER TABLE `data_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_message`
--
ALTER TABLE `data_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_notice`
--
ALTER TABLE `data_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_playback`
--
ALTER TABLE `data_playback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_slide`
--
ALTER TABLE `data_slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_banner`
--
ALTER TABLE `data_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_header`
--
ALTER TABLE `data_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_message`
--
ALTER TABLE `data_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_notice`
--
ALTER TABLE `data_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_playback`
--
ALTER TABLE `data_playback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_slide`
--
ALTER TABLE `data_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
