-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 06, 2020 lúc 09:53 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_webphongmay`
--
CREATE DATABASE IF NOT EXISTS `db_webphongmay` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `db_webphongmay`;

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `tim_monhoc` (IN `tt` VARCHAR(30))  BEGIN
Select * 
    from mon_hoc
    where MaMonHoc = tt OR  
    		TenMonHoc LIKE concat("%", tt, "%") OR
            NganhHoc LIKE concat("%", tt, "%") OR
            GiangVienPhuTrach LIKE concat("%", tt, "%") OR
            TrangThai = tt;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tim_nguoidung` (IN `tt` VARCHAR(20))  BEGIN
	Select * 
    from nguoi_dung
    where   TenNguoiDung LIKE concat("%", tt, "%") OR
            LoaiNguoiDung = tt;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `may_con`
--

CREATE TABLE `may_con` (
  `MaMayCon` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `TinhTrang` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `MaPhongMay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `may_con`
--

INSERT INTO `may_con` (`MaMayCon`, `TinhTrang`, `MaPhongMay`) VALUES
('A1', 'Broken', 1),
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_hoc`
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
-- Đang đổ dữ liệu cho bảng `mon_hoc`
--

INSERT INTO `mon_hoc` (`MaMonHoc`, `TenMonHoc`, `NganhHoc`, `SoTinChi`, `GiangVienPhuTrach`, `TrangThai`) VALUES
('DCHCM01', 'Tư tưởng Hồ Chí Minh', 'Đại cương', 3, 'LeThanh', 'Open'),
('DCM01', 'Mác Lê-nin I', 'Đại cương', 3, 'LeThanh', 'Open'),
('DCM02', 'Mác Lê-nin II', 'Đại cương', 4, 'LeThanh', 'Open'),
('FBMA1', 'Toán cao cấp A1', 'Tài chính ngân hàng', 4, 'LeBac', 'Close'),
('FBMA2', 'Toán cao cấp A2', 'Tài chính ngân hàng', 4, 'CaoTan', 'Open'),
('ITCSDL01', 'Cơ sở dữ liệu cơ bản', 'Khoa học máy tính', 3, 'VanThach', 'Close'),
('ITCSDL02', 'Cơ sở dữ liệu nâng cao', 'Khoa học máy tính', 4, 'VanThach', 'Close'),
('ITDD01', 'Lập trình thiết bị di động', 'Khoa học máy tính', 4, 'VanThach', 'Open'),
('ITDL01', 'Lập trình cơ sở dữ liệu', 'Khoa học máy tính', 4, 'LeBac', 'Open'),
('ITKTMT', 'Kiến trúc máy tính', 'Khoa học máy tính', 3, 'CaoTan', 'Open'),
('ITM01', 'Mạng máy tính cơ sở', 'Khoa học máy tính', 4, 'LeBac', 'Open'),
('ITM02', 'Mạng máy tính nâng cao', 'Khoa học máy tính', 4, 'LeBac', 'Open'),
('ITW01', 'Ứng dụng web', 'Khoa học máy tính', 3, 'CaoTan', 'Close'),
('ITW02', 'Lập trình web', 'Khoa học máy tính', 4, 'CaoTan', 'Open');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `MaNguoiDung` int(11) NOT NULL,
  `TenNguoiDung` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `MatKhau` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `LoaiNguoiDung` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`MaNguoiDung`, `TenNguoiDung`, `MatKhau`, `LoaiNguoiDung`) VALUES
(1, 'admin', '$2y$10$9aEb26qrWGB/geWDWcO92.ws850lSusKf.JVtNHLGpLCplKJKA7tW', 'Admin'),
(2, 'HuyBac', '$2y$10$fnInHsYv/NxHggPH.5M6y.WKZ7fKWff.jl8tRMHl4G9mVEPSx5cDy', 'User'),
(3, 'VanThach', '$2y$10$Ks70Na8iFwFgpIEhZoTu6uiBCkDpUAwvH/c42Uz26rg/PZH7oH9LK', 'User'),
(4, 'LeThanh', '$2y$10$4pj/SOpw2GGBwhTRhcMKz.87ftM7eD52fNRUwT4usFIGP3dAzD5fe', 'User'),
(5, 'CaoTan', '$2y$10$TJ/C1RRbvTTRss0u31uSD.SYTbP3l4DHOh3TooyRg66gi4QHwS2f2', 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_may`
--

CREATE TABLE `phong_may` (
  `MaPhongMay` int(11) NOT NULL,
  `TenPhongMay` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phong_may`
--

INSERT INTO `phong_may` (`MaPhongMay`, `TenPhongMay`) VALUES
(1, 'PM01'),
(2, 'PM02'),
(3, 'PM03'),
(4, 'PM04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoi_khoa_bieu`
--

CREATE TABLE `thoi_khoa_bieu` (
  `MaThoiKhoaBieu` int(11) NOT NULL,
  `MaMonHoc` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenMonHoc` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaGiangVien` int(11) NOT NULL,
  `TenGiangVien` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaPhongMay` int(11) NOT NULL,
  `TenPhongMay` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `BuoiHoc` int(11) DEFAULT NULL,
  `ThuHoc` int(11) DEFAULT NULL,
  `SoBuoi` int(11) DEFAULT NULL,
  `ThoiGianBatDau` date DEFAULT NULL,
  `ThoiGianKetThuc` date DEFAULT NULL,
  `GhiChu` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thoi_khoa_bieu`
--

INSERT INTO `thoi_khoa_bieu` (`MaThoiKhoaBieu`, `MaMonHoc`, `TenMonHoc`, `MaGiangVien`, `TenGiangVien`, `MaPhongMay`, `TenPhongMay`, `BuoiHoc`, `ThuHoc`, `SoBuoi`, `ThoiGianBatDau`, `ThoiGianKetThuc`, `GhiChu`) VALUES
(1, 'DCHCM01', 'Tư tưởng Hồ Chí Minh', 4, 'LeThanh', 4, 'PM04', 12, 7, 7, '2020-06-05', '2020-07-17', ''),
(2, 'DCHCM01', 'Tư tưởng Hồ Chí Minh', 4, 'LeThanh', 2, 'PM02', 12345, 4, 8, '2020-06-05', '2020-07-24', ''),
(3, 'DCM02', 'Mác Lê-nin II', 1, 'NguyenDat', 2, 'PM02', 12345, 2, 5, '2020-02-02', '2020-07-30', ''),
(4, 'DCM01', 'Mác Lê-nin I', 4, 'LeThanh', 1, 'PM01', 345, 2, 6, '2020-06-05', '2020-07-10', ''),
(5, 'DCM02', 'Mác Lê-nin II', 4, 'LeThanh', 3, 'PM03', 890, 5, 4, '2020-06-05', '2020-06-26', ''),
(6, 'DCHCM01', 'Tư tưởng Hồ Chí Minh', 4, 'LeThanh', 1, 'PM01', 890, 6, 7, '2020-06-05', '2020-07-17', ''),
(7, 'DCHCM01', 'Tư tưởng Hồ Chí Minh', 4, 'LeThanh', 1, 'PM01', 12345, 6, 4, '2020-06-05', '2020-06-26', ''),
(15, 'DCM02', 'Mác Lê-nin II', 4, 'LeThanh', 3, 'PM03', 890, 3, 2, '2020-06-24', '2020-07-01', ''),
(16, 'ITM01', 'Mạng máy tính cơ sở', 2, 'LeBac', 1, 'PM01', 12345, 7, 2, '2020-11-01', '2020-11-08', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `may_con`
--
ALTER TABLE `may_con`
  ADD PRIMARY KEY (`MaMayCon`);

--
-- Chỉ mục cho bảng `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`MaMonHoc`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`MaNguoiDung`),
  ADD UNIQUE KEY `TenNguoiDung` (`TenNguoiDung`);

--
-- Chỉ mục cho bảng `phong_may`
--
ALTER TABLE `phong_may`
  ADD PRIMARY KEY (`MaPhongMay`);

--
-- Chỉ mục cho bảng `thoi_khoa_bieu`
--
ALTER TABLE `thoi_khoa_bieu`
  ADD PRIMARY KEY (`MaThoiKhoaBieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
