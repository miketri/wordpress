-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 02:10 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mayodecisionaide`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_cimy_uef_fields`
--

CREATE TABLE `wp_cimy_uef_fields` (
  `ID` bigint(20) NOT NULL,
  `F_ORDER` bigint(20) NOT NULL,
  `FIELDSET` bigint(20) NOT NULL DEFAULT '0',
  `NAME` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `LABEL` text COLLATE utf8mb4_unicode_520_ci,
  `DESCRIPTION` text COLLATE utf8mb4_unicode_520_ci,
  `TYPE` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `RULES` text COLLATE utf8mb4_unicode_520_ci,
  `VALUE` text COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_cimy_uef_fields`
--

INSERT INTO `wp_cimy_uef_fields` (`ID`, `F_ORDER`, `FIELDSET`, `NAME`, `LABEL`, `DESCRIPTION`, `TYPE`, `RULES`, `VALUE`) VALUES
(1, 1, 0, 'LITSCORE', 'Literacy Score', 'Score determined by test results.', 'text', 'a:12:{s:5:"email";b:0;s:11:"email_admin";b:0;s:12:"exact_length";i:1;s:12:"can_be_empty";b:1;s:4:"edit";s:7:"ok_edit";s:16:"advanced_options";s:0:"";s:11:"show_in_reg";b:0;s:15:"show_in_profile";b:1;s:11:"show_in_aeu";b:1;s:14:"show_in_search";b:0;s:12:"show_in_blog";b:0;s:10:"show_level";s:2:"-1";}', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_cimy_uef_fields`
--
ALTER TABLE `wp_cimy_uef_fields`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `F_ORDER` (`F_ORDER`),
  ADD KEY `NAME` (`NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_cimy_uef_fields`
--
ALTER TABLE `wp_cimy_uef_fields`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
