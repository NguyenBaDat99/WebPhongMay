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

-- --------------------------------------------------------
--
-- Table structure for table `phong_may`
--

CREATE TABLE `phong_may` (
  `MaPhongMay` int(11) NOT NULL,
  `TenPhongMay` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `phong_may`
--

INSERT INTO `phong_may` (`MaPhongMay`, `TenPhongMay`) VALUES
(1, 'PM01'),
(2, 'PM02'),
(3, 'PM03'),
(4, 'PM04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phong_may`
--
ALTER TABLE `phong_may`
  ADD PRIMARY KEY (`MaPhongMay`);
COMMIT;


-- --------------------------------------------------------
--
-- Table structure for table `may_con`
--

CREATE TABLE `may_con` (
  `MaMayCon` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `TinhTrang` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `MaPhongMay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `may_con`
--

INSERT INTO `may_con` (`MaMayCon`, `TinhTrang`, `MaPhongMay`) VALUES
('A1', 'Off', 1),
('A2', 'Off', 1),
('A3', 'Off', 1),
('B1', 'Off', 2),
('B2', 'Off', 2),
('B3', 'Off', 2),
('C1', 'Off', 3),
('C2', 'Broken', 3),
('C3', 'Off', 3),
('D1', 'Off', 4),
('D2', 'Off', 4),
('D3', 'Off', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `may_con`
--
ALTER TABLE `may_con`
  ADD PRIMARY KEY (`MaMayCon`);
COMMIT;


-- --------------------------------------------------------

--
-- Table structure for table `mon_hoc`
--

CREATE TABLE `mon_hoc` (
  `MaMonHoc` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenMonHoc` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `NganhHoc` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SoTinChi` int(11) DEFAULT NULL,
  `GiangVienPhuTrach` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `TrangThai` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `mon_hoc`
--

INSERT INTO `mon_hoc` (`MaMonHoc`, `TenMonHoc`, `NganhHoc`, `SoTinChi`, `GiangVienPhuTrach`, `TrangThai`) VALUES
('DCHCM01', 'Tư tưởng Hồ Chí Minh', 'Đại cương', 3, 'LeThanh', 'Close'),
('DCM01', 'Mác Lê-nin I', 'Đại cương', 3, 'LeThanh', 'Close'),
('DCM02', 'Mác Lê-nin II', 'Đại cương', 3, 'LeThanh', 'Close'),
('ITCSDL01', 'Cơ sở dữ liệu cơ bản', 'Khoa học máy tính', 3, 'VanThach', 'Close'),
('ITCSDL02', 'Cơ sở dữ liệu nâng cao', 'Khoa học máy tính', 4, 'VanThach', 'Open'),
('ITDD01', 'Lập trình thiệt bị di động', 'Khoa học máy tính', 4, 'VanThach', 'Open'),
('ITDL01', 'Lập trình cơ sở dữ liệu', 'Khoa học máy tính', 4, 'LeBac', 'Open'),
('ITKTMT', 'Kiến trúc máy tính', 'Khoa học máy tính', 4, 'CaoTan', 'Close'),
('ITM01', 'Mạng máy tính cơ sở', 'Khoa học máy tính', 3, 'LeBac', 'Open'),
('ITM02', 'Mạng máy tính nâng cao', 'Khoa học máy tính', 4, 'LeBac', 'Open'),
('ITW01', 'Ứng dụng web', 'Khoa học máy tính', 3, 'CaoTan', 'Close'),
('ITW02', 'Lập trình web', 'Khoa học máy tính', 4, 'CaoTan', 'Open');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`MaMonHoc`);
COMMIT;


