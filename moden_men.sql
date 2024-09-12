-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 12, 2024 lúc 08:49 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `moden_men`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_bai_viet`
--

CREATE TABLE `tb_bai_viet` (
  `id_bai_viet` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `ngay_dang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binh_luan`
--

CREATE TABLE `tb_binh_luan` (
  `id_binhluan` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `ngay_binh_luan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chuc_vu`
--

CREATE TABLE `tb_chuc_vu` (
  `id_chucvu` int(11) NOT NULL,
  `ten_chuc_vu` varchar(50) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_ct_hoadon`
--

CREATE TABLE `tb_ct_hoadon` (
  `id` int(11) NOT NULL,
  `id_hoa_don` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `so_luong_mua` int(11) NOT NULL,
  `gia_sp` double NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_ct_hoadon`
--

INSERT INTO `tb_ct_hoadon` (`id`, `id_hoa_don`, `ten_sp`, `anh_sp`, `so_luong_mua`, `gia_sp`, `trang_thai`) VALUES
(27, 53, 'áo công sở 222', '../upload/giay1.jpg', 1, 120000, '0'),
(28, 53, 'giaayf mới 2024', '../upload/dongho1.jpeg', 1, 100000, '0'),
(29, 55, 'giaayf mới 2024', '../upload/dongho1.jpeg', 1, 100000, '0'),
(30, 57, 'sản phẩm mới áo 2024', '../upload/giay2.jpg', 1, 400000, '0'),
(31, 59, 'áo công sở 222', '../upload/giay1.jpg', 1, 120000, '0'),
(32, 59, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0'),
(33, 59, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0'),
(34, 61, 'áo công sở', '../upload/ao1.jpg', 1, 2300000, '0'),
(35, 63, 'sản phẩm mới áo 2025', '../upload/ao3.jpg', 1, 300000, '0'),
(36, 65, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0'),
(37, 67, 'giaayf mới 2024', '../upload/dongho1.jpeg', 1, 100000, '0'),
(38, 68, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0'),
(39, 71, 'giaayf mới 2024', '../upload/dongho1.jpeg', 1, 100000, '0'),
(40, 74, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0'),
(41, 75, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0'),
(42, 75, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0'),
(43, 76, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0'),
(44, 77, 'áo công sở 222', '../upload/giay1.jpg', 1, 120000, '0'),
(45, 78, 'giaayf mới 2024', '../upload/dongho1.jpeg', 1, 100000, '0'),
(46, 79, 'áo công sở 2', '../upload/ao6.jpg', 1, 120000, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten_danh_muc` varchar(50) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id_dm`, `ten_danh_muc`, `mo_ta`, `trang_thai`) VALUES
(22, 'Giầy', 'giầy công sở', 'Còn'),
(23, 'Quần', 'Quần hiện đại', 'Còn'),
(24, 'Áo1', 'NEW SEAL 1', 'Còn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_gio_hang`
--

CREATE TABLE `tb_gio_hang` (
  `id` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hoa_don`
--

CREATE TABLE `tb_hoa_don` (
  `id_hoa_don` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `ngay_dat_don` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tong_gia` double NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ghi_chu` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_hoa_don`
--

INSERT INTO `tb_hoa_don` (`id_hoa_don`, `id_nguoidung`, `full_name`, `ngay_dat_don`, `tong_gia`, `dia_chi`, `ghi_chu`, `trang_thai`) VALUES
(53, 12, 'hà tuấn hưng12', '2024-07-28 00:08:11', 100000, 'ha noi', 'kjhgf', '-1'),
(54, 12, 'ha tuan hung ha', '2024-08-01 10:39:29', 100000, 'ok', 'okok', '0'),
(55, 12, 'ha tuan hung ha', '2024-08-01 11:14:12', 100000, 'ok', 'okok', '3'),
(56, 12, 'ha tuan hung ha', '2024-07-30 08:15:52', 400000, 'ok', 'ghi chú', '0'),
(57, 12, 'ha tuan hung ha', '2024-08-01 10:18:28', 400000, 'ok', 'ghi chú', ''),
(58, 12, 'ha tuan hung 123', '2024-08-01 10:18:18', 120000, 'địa chỉ', 'ghi chú đơn hàng', ''),
(59, 12, 'ha tuan hung 123', '2024-08-01 09:55:27', 120000, 'địa chỉ', 'ghi chú đơn hàng', '3'),
(60, 13, 'Hà tuấn Hưng', '2024-08-07 08:12:50', 2300000, 'phú thọ', '', '0'),
(61, 13, 'Hà tuấn Hưng', '2024-08-07 08:12:50', 2300000, 'phú thọ', '', '0'),
(62, 13, 'Hà tuấn Hưng', '2024-08-07 08:13:28', 300000, 'phú thọ', '', '0'),
(63, 13, 'Hà tuấn Hưng', '2024-08-07 08:13:28', 300000, 'phú thọ', '', '0'),
(64, 12, 'Hà tuấn Hưng', '2024-08-07 08:15:39', 120000, 'phú thọ', '', '0'),
(65, 12, 'Hà tuấn Hưng', '2024-08-07 08:15:39', 120000, 'phú thọ', '', '0'),
(66, 12, 'Hà tuấn Hưng1', '2024-08-07 08:19:59', 0, 'phú thọ', '', '0'),
(67, 12, 'Hà tuấn Hưng12', '2024-08-07 08:21:27', 100000, 'phú thọ', '', '1'),
(68, 12, '', '2024-08-07 08:27:00', 0, '', '', '0'),
(69, 12, '', '2024-08-07 08:31:18', 0, '', '', '0'),
(70, 12, '', '2024-08-07 08:31:25', 0, '', '', '0'),
(71, 12, '', '2024-08-07 08:32:02', 0, '', '', '0'),
(72, 12, '', '2024-08-07 08:33:42', 0, '', '', '0'),
(73, 12, '', '2024-08-07 08:33:58', 0, '', '', '0'),
(74, 12, 'Hà tuấn Hưng12', '2024-08-07 08:38:01', 120000, 'phú thọ', '', '0'),
(75, 12, 'Hà tuấn Hư', '2024-08-07 08:40:14', 240000, 'phú thọ', '', '0'),
(76, 12, 'Hà tu', '2024-08-07 08:42:30', 120000, 'phú thọ', '', '0'),
(77, 12, 'Hà tuấn Hưng2343t', '2024-08-07 08:44:00', 120000, 'phú thọ', '', '1'),
(78, 12, 'no momo', '2024-08-07 08:46:10', 100000, 'phú thọ', '', '0'),
(79, 12, 'momo', '2024-08-07 08:47:37', 120000, 'phú thọ', '', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_san_pham`
--

CREATE TABLE `tb_san_pham` (
  `id_sp` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thong_tin_sp` varchar(310) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `mau_sac` varchar(255) NOT NULL,
  `luot_xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_san_pham`
--

INSERT INTO `tb_san_pham` (`id_sp`, `id_dm`, `ten_sp`, `anh_sp`, `trang_thai`, `so_luong`, `thong_tin_sp`, `gia_sp`, `mau_sac`, `luot_xem`) VALUES
(28, 22, 'áo công sở', 'ao1.jpg', 'Còn hàng', 12, 'Áo công sở', 2300000, 'đen', 100),
(29, 22, 'áo công sở 2', 'ao6.jpg', 'Còn hàng', 3, 'áo công sở chất lượng cáo', 120000, 'xanh', 0),
(32, 22, 'áo công sở 222', 'giay1.jpg', 'Còn hàng', 3, 'áo công sở chất lượng cáo', 120000, 'xanh', 0),
(33, 23, 'sản phẩm mới áo 2024', 'ao6.jpg', 'Còn hàng', 3, 'áo công sở chất lượng cao vip', 300000, 'đen', 9),
(34, 24, 'áo nam công sở', 'ao4.jpg', 'Còn hàng', 4, 'áo công sở chất lượng cao vip', 400000, 'xanh', 24),
(35, 22, 'giaayf mới 2024', 'dongho1.jpeg', 'Còn hàng', 9, 'Đồng hồ chất lượng cao', 100000, 'đen', 0),
(36, 22, 'sản phẩm mới áo 2025', 'ao3.jpg', 'Còn hàng', 8, 'thông tin sản phẩm', 300000, 'đỏ', 0),
(37, 22, 'sản phẩm mới áo 2024', 'giay2.jpg', 'Còn hàng', 4, 'giầy thể thao 2024', 400000, 'trắng', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_tai_khoan`
--

CREATE TABLE `tb_tai_khoan` (
  `id_nguoidung` int(11) NOT NULL,
  `ten_nguoidung` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `ngay_sinh` datetime NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `gioi_tinh` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_tai_khoan`
--

INSERT INTO `tb_tai_khoan` (`id_nguoidung`, `ten_nguoidung`, `mat_khau`, `gmail`, `sdt`, `anh`, `ngay_sinh`, `dia_chi`, `gioi_tinh`, `role`, `name`) VALUES
(1, 'sang', 'abc', 'abc@gmail.com', 123456789, 'ao1.jpg', '2004-11-21 08:44:54', 'NĐ', 'Nam', 0, 'sang'),
(2, 'hiep', 'abc', 'abcd@gmail.com', 123456789, '', '2004-12-10 07:41:45', 'hn', 'Nam', 0, 'Hiep'),
(10, 'sang', '1', 'pvsang04@gmail.com', 325561001, '', '0000-00-00 00:00:00', '', '', 0, ''),
(11, 'hung', 'hung@hung@gmail.comgmail.com', 'hung@gmail.com', 999, '', '0000-00-00 00:00:00', '', '', 0, ''),
(12, 'hung', '123456', 'hung12@gmail.com', 98, '', '0000-00-00 00:00:00', 'phú thọ', 'Nam', 1, 'ha tuan hung1'),
(13, 'tuanhung', 'a', 'tuanhung@gmail.com', 999, '', '0000-00-00 00:00:00', '', '', 0, ''),
(14, 'tuanhung', 'tuanhung12@gmail.com', 'tuanhung12@gmail.com', 982, '', '0000-00-00 00:00:00', '', '', 0, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_bai_viet`
--
ALTER TABLE `tb_bai_viet`
  ADD PRIMARY KEY (`id_bai_viet`);

--
-- Chỉ mục cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `fk_bl` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  ADD PRIMARY KEY (`id_chucvu`);

--
-- Chỉ mục cho bảng `tb_ct_hoadon`
--
ALTER TABLE `tb_ct_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_list_hd` (`id_hoa_don`);

--
-- Chỉ mục cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `tb_gio_hang`
--
ALTER TABLE `tb_gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_giohang` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tb_hoa_don`
--
ALTER TABLE `tb_hoa_don`
  ADD PRIMARY KEY (`id_hoa_don`),
  ADD KEY `fk_hoadon` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `lk_danh_muc` (`id_dm`);

--
-- Chỉ mục cho bảng `tb_tai_khoan`
--
ALTER TABLE `tb_tai_khoan`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_bai_viet`
--
ALTER TABLE `tb_bai_viet`
  MODIFY `id_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  MODIFY `id_chucvu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_ct_hoadon`
--
ALTER TABLE `tb_ct_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tb_gio_hang`
--
ALTER TABLE `tb_gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `tb_hoa_don`
--
ALTER TABLE `tb_hoa_don`
  MODIFY `id_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tb_tai_khoan`
--
ALTER TABLE `tb_tai_khoan`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  ADD CONSTRAINT `fk_bl` FOREIGN KEY (`id_nguoidung`) REFERENCES `tb_tai_khoan` (`id_nguoidung`);

--
-- Các ràng buộc cho bảng `tb_ct_hoadon`
--
ALTER TABLE `tb_ct_hoadon`
  ADD CONSTRAINT `lk_list_hd` FOREIGN KEY (`id_hoa_don`) REFERENCES `tb_hoa_don` (`id_hoa_don`);

--
-- Các ràng buộc cho bảng `tb_gio_hang`
--
ALTER TABLE `tb_gio_hang`
  ADD CONSTRAINT `lk_giohang` FOREIGN KEY (`id_nguoidung`) REFERENCES `tb_tai_khoan` (`id_nguoidung`);

--
-- Các ràng buộc cho bảng `tb_hoa_don`
--
ALTER TABLE `tb_hoa_don`
  ADD CONSTRAINT `fk_hoadon` FOREIGN KEY (`id_nguoidung`) REFERENCES `tb_tai_khoan` (`id_nguoidung`);

--
-- Các ràng buộc cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  ADD CONSTRAINT `lk_danh_muc` FOREIGN KEY (`id_dm`) REFERENCES `tb_danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
