-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2018 lúc 06:22 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `food`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `01_monan`
--

CREATE TABLE `01_monan` (
  `01_id_monan` int(10) NOT NULL,
  `01_ten_monan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `01_hinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `01_monan`
--

INSERT INTO `01_monan` (`01_id_monan`, `01_ten_monan`, `01_hinh`) VALUES
(1, 'gà xào nấm', ''),
(2, 'cá hấp bầu', ''),
(3, 'mực chiên', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `02_nguyenlieutho`
--

CREATE TABLE `02_nguyenlieutho` (
  `02_id_nguyenlieu` int(10) NOT NULL,
  `02_ten_nguyenlieu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `02_id_loai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `02_mau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `02_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `02_congdung` text COLLATE utf8_unicode_ci NOT NULL,
  `02_kcal_1gam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `02_nguyenlieutho`
--

INSERT INTO `02_nguyenlieutho` (`02_id_nguyenlieu`, `02_ten_nguyenlieu`, `02_id_loai`, `02_mau`, `02_vi`, `02_congdung`, `02_kcal_1gam`) VALUES
(1, 'gà', '1', 'trắng', 'ngọt', 'bổ', 20),
(2, 'nắm', '2', 'dfd', 'dfsd', 'sdfsd', 5),
(3, 'cá', '1', 'sadas', 'sadasd', 'sadasd', 15),
(4, 'bầu', '2', 'ssa', 'sadas', 'ádasd', 32),
(5, 'hành', '2', 'ád', 'sad', 'sss', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `03_loai`
--

CREATE TABLE `03_loai` (
  `03_id_loai` int(10) NOT NULL,
  `03_ten_loai` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `03_loai`
--

INSERT INTO `03_loai` (`03_id_loai`, `03_ten_loai`) VALUES
(1, 'thịt,cá'),
(2, 'rau,củ'),
(3, 'Ngũ cốc'),
(4, 'Hoa quả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `04_khoiluong`
--

CREATE TABLE `04_khoiluong` (
  `04_id_khoiluong` int(10) NOT NULL,
  `04_id_monan` int(10) NOT NULL,
  `04_id_nguyenlieu` int(10) NOT NULL,
  `04_khoiluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `04_khoiluong`
--

INSERT INTO `04_khoiluong` (`04_id_khoiluong`, `04_id_monan`, `04_id_nguyenlieu`, `04_khoiluong`) VALUES
(1, 1, 1, 100),
(2, 1, 2, 150),
(3, 2, 3, 344),
(4, 2, 4, 500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `05_nhomchat`
--

CREATE TABLE `05_nhomchat` (
  `05_id_nhomchat` int(10) NOT NULL,
  `05_ten_nhomchat` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `05_nhomchat`
--

INSERT INTO `05_nhomchat` (`05_id_nhomchat`, `05_ten_nhomchat`) VALUES
(1, 'chất béo'),
(2, 'chất đạm'),
(3, 'chất bột đường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `06_vitamin`
--

CREATE TABLE `06_vitamin` (
  `06_id_vitamin` int(10) NOT NULL,
  `06_ten_vitamin` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `06_vitamin`
--

INSERT INTO `06_vitamin` (`06_id_vitamin`, `06_ten_vitamin`) VALUES
(1, 'vitamin A'),
(2, 'vitamin B'),
(3, 'vitamin C'),
(4, 'vitamin E');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `07_giatridinhduong`
--

CREATE TABLE `07_giatridinhduong` (
  `07_id_giatri` int(10) NOT NULL,
  `07_id_nguyenlieu` int(10) NOT NULL,
  `07_id_nhomchat` int(10) DEFAULT NULL,
  `07_id_vitamin` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `07_giatridinhduong`
--

INSERT INTO `07_giatridinhduong` (`07_id_giatri`, `07_id_nguyenlieu`, `07_id_nhomchat`, `07_id_vitamin`) VALUES
(1, 1, 1, NULL),
(2, 1, 2, NULL),
(3, 2, NULL, 1),
(4, 2, NULL, 2),
(5, 2, 2, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `01_monan`
--
ALTER TABLE `01_monan`
  ADD PRIMARY KEY (`01_id_monan`);

--
-- Chỉ mục cho bảng `02_nguyenlieutho`
--
ALTER TABLE `02_nguyenlieutho`
  ADD PRIMARY KEY (`02_id_nguyenlieu`);

--
-- Chỉ mục cho bảng `03_loai`
--
ALTER TABLE `03_loai`
  ADD PRIMARY KEY (`03_id_loai`);

--
-- Chỉ mục cho bảng `04_khoiluong`
--
ALTER TABLE `04_khoiluong`
  ADD PRIMARY KEY (`04_id_khoiluong`);

--
-- Chỉ mục cho bảng `05_nhomchat`
--
ALTER TABLE `05_nhomchat`
  ADD PRIMARY KEY (`05_id_nhomchat`);

--
-- Chỉ mục cho bảng `06_vitamin`
--
ALTER TABLE `06_vitamin`
  ADD PRIMARY KEY (`06_id_vitamin`);

--
-- Chỉ mục cho bảng `07_giatridinhduong`
--
ALTER TABLE `07_giatridinhduong`
  ADD PRIMARY KEY (`07_id_giatri`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `01_monan`
--
ALTER TABLE `01_monan`
  MODIFY `01_id_monan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `02_nguyenlieutho`
--
ALTER TABLE `02_nguyenlieutho`
  MODIFY `02_id_nguyenlieu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `03_loai`
--
ALTER TABLE `03_loai`
  MODIFY `03_id_loai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `04_khoiluong`
--
ALTER TABLE `04_khoiluong`
  MODIFY `04_id_khoiluong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `05_nhomchat`
--
ALTER TABLE `05_nhomchat`
  MODIFY `05_id_nhomchat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `06_vitamin`
--
ALTER TABLE `06_vitamin`
  MODIFY `06_id_vitamin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `07_giatridinhduong`
--
ALTER TABLE `07_giatridinhduong`
  MODIFY `07_id_giatri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
