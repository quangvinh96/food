-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 03, 2018 at 09:07 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `t1_manager`
--

CREATE TABLE `t1_manager` (
  `t1_id` int(11) NOT NULL,
  `t1_username` varchar(255) NOT NULL,
  `t1_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t1_manager`
--

INSERT INTO `t1_manager` (`t1_id`, `t1_username`, `t1_password`) VALUES
(1, 'demo', 'b900afac6b173100b1e55432e9d58c88');

-- --------------------------------------------------------

--
-- Table structure for table `t2_vitamin`
--

CREATE TABLE `t2_vitamin` (
  `t2_id` int(11) NOT NULL,
  `t2_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t3_nutrients`
--

CREATE TABLE `t3_nutrients` (
  `t3_id` int(11) NOT NULL,
  `t3_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t4_type`
--

CREATE TABLE `t4_type` (
  `t4_id` int(11) NOT NULL,
  `t4_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_dish`
--

CREATE TABLE `t5_dish` (
  `t5_id` int(11) NOT NULL,
  `t5_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t6_material`
--

CREATE TABLE `t6_material` (
  `t6_id` int(11) NOT NULL,
  `t6_type_id` int(11) NOT NULL,
  `t6_name` varchar(255) NOT NULL,
  `t6_color` varchar(255) NOT NULL,
  `t6_smell` varchar(255) NOT NULL,
  `t6_uses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t7_nultri_value`
--

CREATE TABLE `t7_nultri_value` (
  `t7_id` int(11) NOT NULL,
  `t7_vitamin_id` int(11) NOT NULL,
  `t7_nutrients_id` int(11) NOT NULL,
  `t7_material_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t8_mass`
--

CREATE TABLE `t8_mass` (
  `t8_id` int(11) NOT NULL,
  `t8_dish_id` int(11) NOT NULL,
  `t8_nutri_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t9_kcal`
--

CREATE TABLE `t9_kcal` (
  `t9_id` int(11) NOT NULL,
  `t9_mass_id` int(11) NOT NULL,
  `t9_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t1_manager`
--
ALTER TABLE `t1_manager`
  ADD PRIMARY KEY (`t1_id`);

--
-- Indexes for table `t2_vitamin`
--
ALTER TABLE `t2_vitamin`
  ADD PRIMARY KEY (`t2_id`);

--
-- Indexes for table `t3_nutrients`
--
ALTER TABLE `t3_nutrients`
  ADD PRIMARY KEY (`t3_id`);

--
-- Indexes for table `t4_type`
--
ALTER TABLE `t4_type`
  ADD PRIMARY KEY (`t4_id`);

--
-- Indexes for table `t5_dish`
--
ALTER TABLE `t5_dish`
  ADD PRIMARY KEY (`t5_id`);

--
-- Indexes for table `t6_material`
--
ALTER TABLE `t6_material`
  ADD PRIMARY KEY (`t6_id`);

--
-- Indexes for table `t7_nultri_value`
--
ALTER TABLE `t7_nultri_value`
  ADD PRIMARY KEY (`t7_id`);

--
-- Indexes for table `t8_mass`
--
ALTER TABLE `t8_mass`
  ADD PRIMARY KEY (`t8_id`);

--
-- Indexes for table `t9_kcal`
--
ALTER TABLE `t9_kcal`
  ADD PRIMARY KEY (`t9_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t1_manager`
--
ALTER TABLE `t1_manager`
  MODIFY `t1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t2_vitamin`
--
ALTER TABLE `t2_vitamin`
  MODIFY `t2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t3_nutrients`
--
ALTER TABLE `t3_nutrients`
  MODIFY `t3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t4_type`
--
ALTER TABLE `t4_type`
  MODIFY `t4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t5_dish`
--
ALTER TABLE `t5_dish`
  MODIFY `t5_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t6_material`
--
ALTER TABLE `t6_material`
  MODIFY `t6_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t7_nultri_value`
--
ALTER TABLE `t7_nultri_value`
  MODIFY `t7_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t8_mass`
--
ALTER TABLE `t8_mass`
  MODIFY `t8_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_kcal`
--
ALTER TABLE `t9_kcal`
  MODIFY `t9_id` int(11) NOT NULL AUTO_INCREMENT;
