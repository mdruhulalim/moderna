-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 03:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderna_ii`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`ID`, `username`, `email`, `password`, `photo`, `status`) VALUES
(2, 'cecefywid', 'ciki@mailinator.com', '6d5dbef0f864b570b1d63e73504fd93b', '643281ef90a0f_cecefywid.jpg', 1),
(3, 'nadecad', 'wibizy@mailinator.com', '6cf1f35f6766ea166f79cff1f11b4578', '6432826bccee4_nadecad.jpg', 1),
(4, 'wasygyd', 'dynagy@mailinator.com', 'a4b06fca9c39d6c20c7a7992c50ab410', '64328350158fc_wasygyd.png', 1),
(5, 'ruhulronny', 'ruhulronny@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '6433a37350e08_ruhulronny.jpg', 1),
(9, 'zywoba', 'nalo@mailinator.com', 'a32618150d7e37f51f463ed05c86f3f9', '643456567d730_zywoba.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `btn_text` varchar(30) NOT NULL,
  `btn_link` varchar(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ID`, `title`, `description`, `btn_text`, `btn_link`, `status`) VALUES
(2, 'Rerum rem cumque ear', 'itaque ips', '', '#', 1),
(6, 'Unde dolore itaque d', 'Ad est dolores elit Ad est dolores elit Ad est dolores elit Ad est dolores elit Ad est dolores elit Ad est dolores elit Ad est dolores elit Ad est dolores elit', 'Expedita et aliquam', '#', 1),
(7, 'Deleniti enim autem', 'Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim Velit placeat anim', 'Magna blanditiis ut', '#', 1),
(8, 'Voluptatem ut ad qua', 'Id ut id quibusdam i', 'Assumenda quibusdam', '#', 1),
(9, 'Qui aut iste sit pra', 'Vero rerum et enim v', 'Qui qui a voluptatem', '#', 1),
(10, 'Dolorem sunt minus e', 'Porro asperiores aut', 'Adipisicing omnis al', '#', 1),
(11, 'Mollit sint id aper', 'Minima velit id se', 'Molestiae possimus', 'Cillum reiciendis pe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `icon_class` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `border_color` varchar(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `icon_class`, `title`, `description`, `border_color`, `status`) VALUES
(1, 'bx-world', 'Tempor eiusmod quam', 'Sit repellendus Qua', 'icon-box-pink', 1),
(5, 'bx-tachometer', 'Laborum voluptatum e', 'Doloremque laboris e', 'icon-box-blue', 1),
(6, 'bx-tachometer', 'In rerum cillum dolo', 'Quod nostrud laborum', 'icon-box-blue', 1),
(7, 'bx-world', 'Cillum facilis eu mo', 'Ullam laborum atque', 'icon-box-blue', 1),
(8, 'bx-file', 'Enim ex facere numqu', 'Et hic a ut non', 'icon-box-cyan', 1),
(9, 'bx-tachometer', 'Quas id vitae magna', 'Sint possimus reici', 'icon-box-cyan', 1),
(10, 'bx-tachometer', 'Rem voluptate sed do', 'In maiores necessita', 'icon-box-green', 1),
(12, 'bx-world', 'Nobis repellendus L', 'Mollit deserunt sit', 'icon-box-green', 1);

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `ID` int(11) NOT NULL,
  `play_btn` varchar(30) NOT NULL,
  `video_link` varchar(250) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon_1` varchar(30) NOT NULL,
  `title_1` varchar(100) NOT NULL,
  `description_1` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`ID`, `play_btn`, `video_link`, `icon`, `title`, `description`, `icon_1`, `title_1`, `description_1`, `status`) VALUES
(1, 'play-btn', 'https://www.youtube.com/channel/UCqTNv8IoR4wyt2l9OS-MRiA', 'bx-fingerprint', 'title one asdf', 'asdf deleniti atque corru ptatum deleniti atque corru ptatum deleniti atque corru', 'bx-gift', 'title two', 'ro eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
