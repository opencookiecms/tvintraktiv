-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2019 at 05:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

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
  `banner_status` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `banner_reg` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_banner`
--

INSERT INTO `data_banner` (`id`, `banner_title`, `banner_content`, `banner_status`, `banner_reg`) VALUES
(9, 'Hello Buddy', 'pexels-photo.jpg', 'Show', NULL);

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

--
-- Dumping data for table `data_message`
--

INSERT INTO `data_message` (`id`, `message_title`, `message_content`, `message_status`, `message_reg`) VALUES
(1, 'New Message', 'Sila Hubungi di No yang tertera ', 'Show', NULL),
(2, 'Message ', 'This is First Message', 'Show', NULL),
(3, 'New Message of the data', 'Selamat Menyambut Puasa Ramadhan', 'Show', NULL);

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

--
-- Dumping data for table `data_notice`
--

INSERT INTO `data_notice` (`id`, `notice_title`, `notice_content`, `notice_status`, `notice_reg`) VALUES
(2, 'Notice update', '<p><span style=\"font-size:20px\"><strong><span style=\"color:#e74c3c\">Jabata</span>n <span style=\"color:#16a085\">Pengairan dan Saliran</span></strong></span></p>\r\n', 'Off', NULL),
(3, 'Venom', '<h1>Jabatan Pengairan dan Saliran\r\n<span style=\"color:#e74c3c\">This Notice board</span></h1>\r\n', 'Show', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_playback`
--

CREATE TABLE `data_playback` (
  `id` int(11) NOT NULL,
  `playback_title` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `playback_content` text COLLATE utf8_bin NOT NULL,
  `playback_video` text COLLATE utf8_bin,
  `playback_status` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `playback_reg` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_playback`
--

INSERT INTO `data_playback` (`id`, `playback_title`, `playback_content`, `playback_video`, `playback_status`, `playback_reg`) VALUES
(8, 'The New Title', 'fgfg', 'Hasbi Rabbi - Hafiz Hamidun (Zikir Terapi Diri).mp4', 'Show', NULL);

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

--
-- Dumping data for table `data_slide`
--

INSERT INTO `data_slide` (`id`, `slide_title`, `slide_content`, `slide_status`, `slide_reg`) VALUES
(7, 'slide2', 'pexels-photo.jpg', 'Show', NULL),
(8, 'The New Title', '984351.jpg', 'Show', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_youtube`
--

CREATE TABLE `data_youtube` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_youtube`
--

INSERT INTO `data_youtube` (`id`, `title`, `content`, `status`) VALUES
(2, 'Proton X70', 'Ox4obvBDal0', 'Show'),
(3, 'The New Title', '5FIABi_ybOE', 'Show'),
(4, 'sdf', 'BQDxbde6lQ8', 'Show'),
(5, 'dfdf', '8bRZZDzdFjE', 'Show');

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
-- Indexes for table `data_youtube`
--
ALTER TABLE `data_youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_banner`
--
ALTER TABLE `data_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_header`
--
ALTER TABLE `data_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_message`
--
ALTER TABLE `data_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_notice`
--
ALTER TABLE `data_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_playback`
--
ALTER TABLE `data_playback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_slide`
--
ALTER TABLE `data_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_youtube`
--
ALTER TABLE `data_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
