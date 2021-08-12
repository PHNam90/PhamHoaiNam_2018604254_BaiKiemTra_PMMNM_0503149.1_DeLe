-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2021 lúc 04:13 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dangkyhocphan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietlop`
--

CREATE TABLE `chitietlop` (
  `MaLop` varchar(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `SiSoToiDa` int(11) NOT NULL DEFAULT 70
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietlop`
--

INSERT INTO `chitietlop` (`MaLop`, `MaNguoiDung`, `SiSoToiDa`) VALUES
('L05', 4, 70),
('L01', 4, 70),
('L03', 4, 70),
('L03', 3, 70),
('L06', 3, 70),
('L01', 3, 70),
('L05', 3, 70),
('L01', 1, 70),
('L02', 1, 70),
('L04', 1, 70),
('L01', 1, 70);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(11) NOT NULL,
  `MaMH` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `MaMH`) VALUES
('L01', 'MH01'),
('L02', 'MH02'),
('L03', 'MH03'),
('L04', 'MH04'),
('L05', 'MH05'),
('L06', 'MH06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(11) NOT NULL,
  `TenMH` varchar(500) NOT NULL,
  `SoTinChi` int(11) NOT NULL,
  `HocPhi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`, `SoTinChi`, `HocPhi`) VALUES
('MH01', 'Lập trình java', 4, 3450000),
('MH02', 'Lập trình C++', 3, 2500000),
('MH03', 'Kiến trúc máy tính', 3, 3150000),
('MH04', 'Tin học đại cương', 2, 1320000),
('MH05', 'Trí tuệ nhân tạo', 3, 2560000),
('MH06', 'Hệ quản trị Cơ sở dữ liệu', 3, 1350000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `Admin` int(11) NOT NULL DEFAULT 0,
  `DiaChi` varchar(500) NOT NULL,
  `SDT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `Ten`, `Email`, `MatKhau`, `Admin`, `DiaChi`, `SDT`) VALUES
(1, 'Phạm Hoài Nam', 'nam@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'Duy Tiên - Hà Nam', '098465462185'),
(2, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'Hà Nội', '03879546565'),
(3, 'Nguyễn Thị Hoa', 'hoa@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'Hải Dương', '03598765135'),
(4, 'Nguyễn Văn Tuân ', 'tuan@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'Thanh Hóa', '09846565656');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
