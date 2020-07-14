-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 04:21 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `smartphone_3t`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `ID` int(11) NOT NULL,
  `LoaiSP` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`ID`, `LoaiSP`) VALUES
(1, 'Điện thoại'),
(2, 'Máy cũ'),
(3, 'Tai nghe'),
(4, 'Cáp sạc'),
(5, 'Sạc dự phòng'),
(6, 'Ốp lưng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhieu`
--

CREATE TABLE `nhanhieu` (
  `ID` int(11) NOT NULL,
  `TenNH` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhieu`
--

INSERT INTO `nhanhieu` (`ID`, `TenNH`) VALUES
(1, 'IPhone'),
(2, 'Samsung'),
(3, 'Sony'),
(4, 'Oppo'),
(5, 'Vivo'),
(6, 'Huawei'),
(7, 'Vsmart'),
(8, 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_events`
--

CREATE TABLE `slide_events` (
  `ID` int(11) NOT NULL,
  `Hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide_events`
--

INSERT INTO `slide_events` (`ID`, `Hinh`, `MoTa`) VALUES
(1, '../img/events/800-170-800x170-60.png', ''),
(2, '../img/events/800-170-800x170-61.png', ''),
(3, '../img/events/800-170-800x170-62.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_sanpham`
--

CREATE TABLE `slide_sanpham` (
  `ID` tinyint(4) NOT NULL,
  `ID_sanpham` tinyint(4) NOT NULL,
  `Hinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide_sanpham`
--

INSERT INTO `slide_sanpham` (`ID`, `ID_sanpham`, `Hinh`) VALUES
(1, 10, '../img/img_Product/Iphone11Pro_256GB/-iphone-11-pro-256gb-night-mode.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongsokithuat`
--

CREATE TABLE `thongsokithuat` (
  `ID` tinyint(10) NOT NULL,
  `Màn hình` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hệ điều hành` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPU` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ram` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Bộ nhớ` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Camera trước` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Camera sau` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Thẻ sim` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dung lượng pin` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongsokithuat`
--

INSERT INTO `thongsokithuat` (`ID`, `Màn hình`, `Hệ điều hành`, `CPU`, `Ram`, `Bộ nhớ`, `Camera trước`, `Camera sau`, `Thẻ sim`, `Dung lượng pin`) VALUES
(1, '6.5\", Super Retina XDR', 'iOS 13', 'Apple A13 Bionic 6 nhân', '4 GB', '64 GB', '12 MP', '3 camera 12 MP', '1 eSIM & 1 Nano SIM, Hỗ trợ 4G', '3969 mAh, có sạc nhanh'),
(2, '6.5\", Full HD+', NULL, 'Snapdragon 665 8 nhân', '6 GB', '128 GB', '16 MP', 'Chính 12 MP & Phụ 8 MP, 2 MP, 2 MP', NULL, '5000 mAh, có sạc nhanh'),
(4, '6.67\", Full HD+', NULL, 'Snapdragon 720G 8 nhân', '6 GB', '128 GB', '16 MP', 'Chính 48 MP & Phụ 8 MP, 5MP, 2MP', NULL, '5020 mAh, có sạc nhanh'),
(5, '6.44\", Full HD+', NULL, 'Snapdragon 675 8 nhân', '8 GB', '128 GB', '32 MP', 'Chính 48 MP & Phụ 8 MP, 2MP, 2MP', NULL, '4500 mAh, có sạc nhanh'),
(6, '6.39\", Full HD+', NULL, 'MediaTek Helio P60 8 nhân', '6 GB', '64 GB', '16 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP', NULL, '4020 mAh, có sạc nhanh'),
(7, '6.5\", Super Retina XDR', NULL, 'Apple A13 Bionic 6 nhân', '4 GB', '64 GB', '12 MP', '3 camera 12 MP', NULL, '3969 mAh, có sạc nhanh'),
(8, '6.5\", Super Retina XDR', NULL, 'Apple A13 Bionic 6 nhân', '4 GB', '256 GB', '12 MP', '3 camera 12 MP', NULL, '3969 mAh, có sạc nhanh'),
(9, '6.5\", HD+', NULL, 'Snapdragon 632 8 nhân', '4 GB', '64 GB', '8 MP', 'Chính 13 MP & Phụ 8 MP, 2MP', NULL, '5000 mAh, có sạc nhanh'),
(10, '5.8\", Super Retina XDR', NULL, 'Apple A13 Bionic 6 nhân', '4 GB', '256 GB', '12 MP', '3 camera 12 MP', NULL, '3046 mAh, có sạc nhanh'),
(11, '6.5\", Super Retina', NULL, 'Apple A12 Bionic 6 nhân', '4 GB', '64 GB', '7 MP', 'Chính 12 MP & Phụ 12 MP', NULL, '3174 mAh, có sạc nhanh'),
(12, '6.5\", Super Retina', NULL, 'Apple A12 Bionic 6 nhân', '4 GB', '256 GB', '7 MP', 'Chính 12 MP & Phụ 12 MP', NULL, '3174 mAh, có sạc nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin_sanpham`
--

CREATE TABLE `thongtin_sanpham` (
  `ID` tinyint(4) NOT NULL,
  `TenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiSP` int(11) NOT NULL,
  `Nhanhieu` int(20) NOT NULL,
  `Hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GiaNY` int(11) DEFAULT NULL,
  `GiaBan` int(11) NOT NULL,
  `KhuyenMai` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ngaynhap` date NOT NULL,
  `SoLuong` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin_sanpham`
--

INSERT INTO `thongtin_sanpham` (`ID`, `TenSP`, `LoaiSP`, `Nhanhieu`, `Hinh`, `GiaNY`, `GiaBan`, `KhuyenMai`, `Ngaynhap`, `SoLuong`) VALUES
(1, 'iPhone 11 Pro Max 64GB', 1, 1, '../img/list_product/iphone-11-pro-max-256gb-black-600x600.jpg', 33990000, 30049000, 'Giảm ngay 2 triệu (đã trừ vào giá)', '2019-10-12', 0),
(2, 'OPPO A52', 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/220649/oppo-a52-black-600x600-400x400.jpg', 5990000, 5690000, '', '2019-10-12', 0),
(3, 'Samsung Galaxy A21s (6GB/64GB)', 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/219314/samsung-galaxy-a21s-xanh-600x600-400x400.jpg', NULL, 5690000, '', '2019-08-06', 0),
(4, 'Xiaomi Redmi Note 9S', 1, 8, 'https://cdn.tgdd.vn/Products/Images/42/214924/xiaomi-redmi-note-9s-400x460-400x460.png', NULL, 5990000, '', '2020-01-16', 0),
(5, 'Vivo V19 Neo', 1, 5, 'https://cdn.tgdd.vn/Products/Images/42/220977/vivo-v19-neo-den-600x600-200x200.jpg', 7690000, 7390000, '', '2019-10-12', 0),
(6, 'Vsmart Active 3 (6GB/64GB)', 1, 7, 'https://cdn.tgdd.vn/Products/Images/42/217438/vsmart-active-3-6gb-emerald-green-600x600-400x400.jpg', 3990000, 3790000, ' Tặng thêm 01 tháng bảo hành chính hãng', '2020-02-20', 0),
(7, 'iPhone 11 Pro Max 512GB', 1, 1, '../img/list_product/iphone-11-pro-max-512gb-gold-600x600.jpg', 43990000, 40490000, 'Giảm ngay 2 triệu (đã trừ vào giá)\r\n', '2020-01-16', 0),
(8, 'iPhone 11 Pro Max 256GB', 1, 1, '../img/list_product/iphone-11-pro-max-256gb-black-600x600.jpg', 37990000, 35490000, 'Giảm ngay 2 triệu (đã trừ vào giá)', '2020-02-20', 0),
(9, 'Vsmart Joy 3 (4GB/64GB)', 1, 7, 'https://cdn.tgdd.vn/Products/Images/42/219208/vsmart-joy-3-4gb-den-600x600-600x600.jpg', 3290000, 3140000, 'Tặng thêm 01 tháng bảo hành chính hãng', '2020-01-16', 0),
(10, 'iPhone 11 Pro 256GB', 1, 1, '../img/list_product/iphone-11-pro-max-256gb-black-600x600.jpg', 34990000, 34490000, 'Giảm ngay 500.000đ (đã trừ vào giá)<br>\r\nMua online:\r\nGiảm ngay 2 triệu (áp dụng đặt và nhận hàng từ 4 - 7/6)', '2019-08-06', 0),
(11, 'iPhone Xs Max 64GB', 1, 1, '../img/list_product/iphone-xs-max-gold-600x600.jpg', 25990000, 23990000, 'Giảm ngay 2 triệu (đã trừ vào giá)', '2019-10-12', 0),
(12, 'iPhone Xs Max 256GB', 1, 1, '../img/list_product/iphone-xs-max-256gb-white-600x600.jpg', 30990000, 25990000, 'Giảm ngay 5 triệu (đã trừ vào giá, không áp dụng khi mua trả góp 0%)\r\n', '2019-08-06', 0),
(13, 'Samsung Galaxy S20+', 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/217936/samsung-galaxy-s20-plus-400x460-fix-400x460.png', 23990000, 18990000, 'Tặng tiền cước 5 triệu (áp dụng đặt và nhận hàng từ 5 - 7/6) (đã trừ vào giá)', '2020-05-12', 0),
(14, 'Samsung Galaxy S20', 1, 2, 'https://cdn.tgdd.vn/Products/Images/42/217935/samsung-galaxy-s20-400x460-hong-400x460.png', 21490000, 18490000, 'Tặng tiền cước 3 triệu (áp dụng đặt và nhận hàng từ 1 - 15/6) (đã trừ vào giá)', '2020-02-20', 0),
(15, 'OPPO Reno 3', 1, 4, 'https://cdn.tgdd.vn/Products/Images/42/213591/oppo-reno3-trang-600x600-600x600.jpg', 8990000, 8490000, 'Giảm ngay 500.000đ (đã trừ vào giá)', '2019-10-12', 0),
(16, 'iPhone 11 64GB', 1, 1, '../img/list_product/iphone-11-red-600x600.jpg', 20990000, 21990000, 'Giảm ngay 1 triệu (đã trừ vào giá)', '0000-00-00', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `slide_events`
--
ALTER TABLE `slide_events`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `slide_sanpham`
--
ALTER TABLE `slide_sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_sanpham` (`ID_sanpham`);

--
-- Chỉ mục cho bảng `thongsokithuat`
--
ALTER TABLE `thongsokithuat`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Chỉ mục cho bảng `thongtin_sanpham`
--
ALTER TABLE `thongtin_sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LoaiSP` (`LoaiSP`),
  ADD KEY `Nhanhieu` (`Nhanhieu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `slide_events`
--
ALTER TABLE `slide_events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slide_sanpham`
--
ALTER TABLE `slide_sanpham`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thongtin_sanpham`
--
ALTER TABLE `thongtin_sanpham`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `slide_sanpham`
--
ALTER TABLE `slide_sanpham`
  ADD CONSTRAINT `slide_sanpham_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `thongtin_sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `thongsokithuat`
--
ALTER TABLE `thongsokithuat`
  ADD CONSTRAINT `thongsokithuat_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `thongtin_sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `thongtin_sanpham`
--
ALTER TABLE `thongtin_sanpham`
  ADD CONSTRAINT `thongtin_sanpham_ibfk_1` FOREIGN KEY (`LoaiSP`) REFERENCES `loaisp` (`ID`),
  ADD CONSTRAINT `thongtin_sanpham_ibfk_2` FOREIGN KEY (`Nhanhieu`) REFERENCES `nhanhieu` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
