-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2023 lúc 05:59 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_smartphone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'thanhadmin', '61c5166ee7200ae58e93afb2681e27e8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) DEFAULT NULL,
  `cart_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(20, 1, '2196', 0),
(21, 1, '4203', 0),
(22, 1, '9866', 1),
(23, 1, '1748', 1),
(24, 40, '679', 1),
(25, 41, '1759', 1),
(26, 1, '7952', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(10) DEFAULT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(27, '2196', 46, 2),
(28, '4203', 47, 2),
(29, '9866', 49, 1),
(30, '1748', 53, 3),
(31, '679', 48, 3),
(32, '679', 53, 1),
(33, '679', 59, 1),
(34, '679', 61, 1),
(35, '679', 51, 1),
(36, '679', 57, 1),
(37, '1759', 54, 2),
(38, '1759', 57, 2),
(39, '1759', 60, 1),
(40, '1759', 48, 1),
(41, '7952', 52, 2),
(42, '7952', 48, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_kh`
--

CREATE TABLE `tbl_kh` (
  `id_khachhang` int(11) NOT NULL,
  `hoten` varchar(30) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sodienthoai` varchar(11) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_kh`
--

INSERT INTO `tbl_kh` (`id_khachhang`, `hoten`, `diachi`, `email`, `sodienthoai`, `matkhau`) VALUES
(1, 'Nguyễn Thanh', '123, Ninh Kiều, TPCT', 'tohanh@gmail.com', '0398044716', '61c5166ee7200ae58e93afb2681e27e8'),
(2, 'Nguyễn Thị Ngọc Thanh', '34/2 Ninh kiều, Cần thơ', 'nguyenthanh@gmail.com', '0398044716', '61c5166ee7200ae58e93afb2681e27e8'),
(41, 'Trần Khánh Thành', '123, đường 3/2, P. Xuân Khánh, Niinh Kiều, TPCT', 'tkthanh@gmail.com', '0397646541', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisp`
--

CREATE TABLE `tbl_loaisp` (
  `id_loai` int(11) NOT NULL,
  `tenloai` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisp`
--

INSERT INTO `tbl_loaisp` (`id_loai`, `tenloai`) VALUES
(3, 'Vivo'),
(4, 'Iphone'),
(5, 'Xiaomi'),
(6, 'samsung'),
(7, 'Oppo'),
(8, 'Realme');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sp`
--

CREATE TABLE `tbl_sp` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(50) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `giasanpham` varchar(10) DEFAULT NULL,
  `hinhanh` varchar(60) DEFAULT NULL,
  `mausac` varchar(20) DEFAULT NULL,
  `manhinh` varchar(50) DEFAULT NULL,
  `cpu` varchar(100) DEFAULT NULL,
  `bonhotrong` varchar(5) DEFAULT NULL,
  `ram` varchar(30) DEFAULT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `hedieuhanh` varchar(60) DEFAULT NULL,
  `cameratruoc` varchar(5) DEFAULT NULL,
  `camerasau` varchar(20) DEFAULT NULL,
  `id_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sp`
--

INSERT INTO `tbl_sp` (`id_sanpham`, `tensanpham`, `soluong`, `giasanpham`, `hinhanh`, `mausac`, `manhinh`, `cpu`, `bonhotrong`, `ram`, `pin`, `hedieuhanh`, `cameratruoc`, `camerasau`, `id_loai`) VALUES
(46, 'iPhone 11', 3, '10990000', 'iphone-11-den.jpg', 'Đen', 'IPS LCD6.1\"Liquid Retina', 'Apple A13 Bionic', ' 64 G', '4 GB', 'Pin, Sạc:  3110 mAh1', 'iOS 15', ' 12 M', ' 2 camera 12 MP', 4),
(47, 'iPhone 13', 5, '16490000', 'iphone-13-den.jpg', 'Đen', 'OLED6.1\"Super Retina XDR', 'Apple A15 Bionic', '4GB', '128 GB', ' 3240 mAh20 W', 'iOS 15', '12 MP', ' 2 camera 12 MP', 4),
(48, ' iPhone 14 Pro', 3, '25690000', 'iphone-14-pro-trang.jpg', 'Trắng', ' OLED6.1', ' Apple A16 Bionic', '128 G', '6 GB', ' 3200 mAh20 W', 'iOS 16', '12 MP', 'Chính 48 MP & Phụ 12', 4),
(49, 'OPPO A78 ', 11, '6990000', 'oppo-a78-den.jpg', 'Đen', ' AMOLED6.43', ' Snapdragon 680', '256GB', '8GB', ' 5000 mAh67 W', ' Android 13', ' 8 MP', 'Chính 50 MP & Phụ 2 ', 7),
(50, 'OPPO Reno8 T', 10, '9990000', 'oppo-reno8-t-vang-5g.jpg', 'Vàng', 'AMOLED6.7\"Full HD+', ' Snapdragon 695 5G', '256GB', '8GB', '4800 mAh67 W', 'Android 13', '32 MP', 'Chính 108 MP & Phụ 2', 7),
(51, 'OPPO Reno10 ', 8, '10490000', 'oppo-reno10-xanh-128gb.jpg', 'Xanh', ' AMOLED6.7\"Full HD+', 'MediaTek Dimensity 7050 5G 8 nhân', '256GB', '8GB', ' 5000 mAh67 W', 'Android 13  ', '32 MP', 'Chính 64 MP & Phụ 32', 7),
(52, 'realme 10 ', 4, '4990000', 'realme-10-vang.jpg', 'Vàng', 'Super AMOLED6.4', 'MediaTek Helio G99', '256GB', '8GB', ' 5000 mAh33 W', 'Android 12', '16 MP', ' Chính 50 MP & Phụ 2', 8),
(53, 'realme 11 Pro', 8, '11490000', 'realme-11-pro-green.jpeg', 'Xanh', ' AMOLED6.7\"Full HD+', ' MediaTek Dimensity 7050 5G 8 nhân', '256GB', ' 8 GB', '5000 mAh67 W', 'Android 13', '16 MP', 'Chính 100 MP & Phụ 2', 8),
(54, 'realme C53', 8, '3890000', 'realme-c53-gold.jpg', 'Vàng', 'IPS LCD6.74\"HD+', ' Unisoc Tiger T612', '128 G', '6 GB', ' 5000 mAh33 W', ' Android 13', '8 MP', ' Chính 50 MP & Phụ 0', 8),
(55, 'Samsung Galaxy A34 ', 12, '7990000', 'samsung-galaxy-a34-bac-1.jpg', 'Xanh lá mạ', 'Super AMOLED6.6\"Full HD+', ' MediaTek Dimensity 1080 8 nhân', '256 G', '8GB', ' 5000 mAh25 W', 'Android 13', '13 MP', ' Chính 48 MP & Phụ 8', 6),
(56, 'Samsung Galaxy A54', 8, '9290000', 'samsung-galaxy-a54-5g-den-1-1.jpg', 'Đen', 'Super AMOLED6.4\"Full HD+', ' Exynos 1380 8 nhân', '128 G', '8GB', ' 5000 mAh25 W', 'Android 13', '32 MP', ' Chính 50 MP & Phụ 1', 6),
(57, 'Samsung Galaxy S22 Ultra ', 4, '1690000', 'samsung-galaxy-s22-ultra-den-1.jpg', 'Đen', 'Dynamic AMOLED 2X6.8\"Quad HD+ (2K+)', 'Snapdragon 8 Gen 1', '128 G', '8GB', '5000 mAh45 W', ' Android 12', '40 MP', 'Chính 108 MP & Phụ 1', 6),
(58, 'Samsung Galaxy S23+', 20, '19990000', 'samsung-galaxy-s23-plus-tim-1.jpg', 'Tím', 'Dynamic AMOLED 2X6.6\"Full HD+', 'Dynamic AMOLED 2X6.6\"Full HD+', '256GB', '8GB', ' 4700 mAh45 W', 'Android 13', '12 MP', 'Chính 50 MP & Phụ 12', 6),
(59, 'Samsung Galaxy S23 Ultra', 14, '25990000', 'samsung-galaxy-s-ultra-tim-1.jpg', 'Tím', 'Dynamic AMOLED 2X6.8\"Quad HD+ (2K+)', ' Snapdragon 8 Gen 2 for Galaxy', '256GB', '8GB', '5000 mAh45 W', ' Android 13', '12MP', ' Chính 200 MP & Phụ ', 6),
(60, ' vivo V25', 4, '7490000', 'vivo-v25-vang-1.jpg', 'Vàng', 'AMOLED6.44', 'MediaTek Dimensity 900 5G', '128 G', '8 GB ', '4500 mAh44 W', 'Android 12', '50 ', ' Chính 64 MP & Phụ 8', 3),
(61, 'vivo Y02T', 10, '2990000', 'vivo-y02t-den-1.jpeg', 'Đen', 'IPS LCD6.51\"HD+', 'MediaTek Helio P35', '64 GB', '4 GB', ' 5000 mAh10 W', 'Android 13 (Go Edition)', ' 5 MP', ' 8 MP', 3),
(62, ' Xiaomi Redmi Note 12', 6, '5590000', 'xiaomi-redmi-note-12-xam-1.jpg', 'Xám', ' AMOLED6.67\"Full HD+', ' Snapdragon 685 8 nhân', '256GB', '8GB', ' 5000 mAh33 W', ' Android 13', '13 MP', 'Chính 50 MP & Phụ 8 ', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `tbl_kh`
--
ALTER TABLE `tbl_kh`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `tbl_sp`
--
ALTER TABLE `tbl_sp`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `tbl_kh`
--
ALTER TABLE `tbl_kh`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_sp`
--
ALTER TABLE `tbl_sp`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
