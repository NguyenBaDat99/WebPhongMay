-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 03:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webphongmay`
--
CREATE DATABASE IF NOT EXISTS `db_webphongmay` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `db_webphongmay`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `tim_nguoidung` (IN `tt` VARCHAR(20))  BEGIN
	Select * 
    from nguoi_dung
    where   TenNguoiDung LIKE concat("%", tt, "%") OR
            LoaiNguoiDung = tt;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `MaNguoiDung` int(11) NOT NULL,
  `TenNguoiDung` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `MatKhau` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `LoaiNguoiDung` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`MaNguoiDung`, `TenNguoiDung`, `MatKhau`, `LoaiNguoiDung`) VALUES
(1, 'NguyenDat', 'Dat123', 'Admin'),
(2, 'LeBac', '1234', 'User'),
(3, 'VanThach', '12345', 'User'),
(4, 'LeThanh', 'Thanh123', 'User'),
(5, 'CaoTan', 'Tan123', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`MaNguoiDung`),
  ADD UNIQUE KEY `TenNguoiDung` (`TenNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
